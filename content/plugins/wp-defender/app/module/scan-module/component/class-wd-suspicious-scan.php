<?php

/**
 * @author: Hoang Ngo
 */
class WD_Suspicious_Scan extends WD_Scan_Abstract {
	const CACHE_INDEX = 'wd_suspicious_scan_index', CACHE_SIGNATURES = 'wd_signatures_cache';
	private $internal_index = 0;
	public $name = '';

	public function __construct() {
		if ( WD_Utils::get_setting( 'use_' . WD_Scan_Api::SCAN_SUSPICIOUS_FILE . '_scan', false ) != 1 ) {
			$this->is_enabled = false;

			return false;
		}
		$this->name               = __( "Suspicious file scan", wp_defender()->domain );
		$this->percentable        = true;
		$this->dashboard_required = true;
		$this->files_need_scan    = WD_Scan_Api::get_content_files();
		$model                    = WD_Scan_Api::get_active_scan();
		if ( is_object( $model ) && count( $model->result_core_integrity ) ) {
			//this mean the core dir scan just done, and we got some stuff, need to scan that stuff too
			$this->files_need_scan = array_merge( $this->files_need_scan, $model->result_core_integrity );
		}

		//$this->max_percent        = round( ( count( $this->files_need_scan ) * 100 ) / count( self::get_total_files() ), 2 );
		$this->internal_index = get_transient( self::CACHE_INDEX );
	}

	private function get_function_scan_pattern() {
		$pattern = $this->get_patterns( 'suspicious_function_pattern' );

		return $pattern;
	}

	private function get_base64_scan_pattern() {
		$pattern = $this->get_patterns( 'base64_encode_pattern' );

		return $pattern;
	}

	private function get_concat_scan_pattern() {
		$pattern = $this->get_patterns( 'string_concat_pattern' );

		return $pattern;
	}

	private function get_variable_concat_pattern() {
		//this will greedy get all, we will parse later in php for faster than regex
		$pattern = $this->get_patterns( 'variable_concat_pattern' );

		return $pattern;
	}

	private function get_variable_function_pattern() {
		$pattern = $this->get_patterns( 'variable_function_pattern' );

		return $pattern;
	}

	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	private function get_patterns( $key ) {
		$cache = get_transient( self::CACHE_SIGNATURES );
		if ( $cache !== false && ! is_wp_error( $cache ) ) {
			$defender_signatures = $cache;
		} else {
			$api_endpoint        = "https://premium.wpmudev.org/api/defender/v1/signatures";
			$defender_signatures = $this->wpmudev_call( $api_endpoint, array(), array(
				'method' => 'GET'
			) );
			set_transient( self::CACHE_SIGNATURES, $defender_signatures );
		}

		if ( ! is_wp_error( $defender_signatures ) ) {
			//cache
			if ( isset( $defender_signatures[ $key ] ) ) {
				return $defender_signatures[ $key ];
			}
		} else {
			$model          = WD_Scan_Api::get_active_scan();
			$model->status  = WD_Scan_Result_Model::STATUS_ERROR;
			$model->message = $defender_signatures->get_error_message();
			$model->save();

			return false;
		}
	}

	public function flush_cache() {
		delete_transient( self::CACHE_SIGNATURES );
	}

	public function process( WD_Scan_Result_Model $model, $next_step = null ) {
		if ( ! $this->maybe_run_this_scan( $model ) ) {
			return false;
		}
		set_time_limit( - 1 );
		ini_set( 'memory_limit', - 1 );
		if ( $this->internal_index == 0 ) {
			$model->message = __( "Analyzing WordPress content files…", wp_defender()->domain );
			//include the count
			$model->result_core_integrity = array_filter( $model->result_core_integrity );
			$model->total_files           = $model->total_files + count( $model->result_core_integrity );
			$model->save();
		}
		$files = $this->files_need_scan;
		ksort( $files );
		if ( $this->internal_index > 0 ) {
			$files = array_slice( $files, $this->internal_index, count( $this->files_need_scan ) );
		}
		//because this can too much, so just break it into parts
		$chunks = array_chunk( $files, apply_filters( 'wd_suspicious_chunk_size', 50, $this->files_need_scan ) );
		$files  = array_shift( $chunks );
		$files  = array_filter( $files );
		if ( ! is_array( $files ) ) {
			return;
		}

		$last_scan = WD_Scan_Api::get_last_scan();

		if ( is_object( $last_scan ) ) {
			$last_checksum = $last_scan->md5_tree;
		} else {
			$last_checksum = array();
		}

		foreach ( $files as $file ) {
			$this->log( 'before memory ' . $this->convert_size( memory_get_usage() ), self::ERROR_LEVEL_DEBUG, 'scan' );
			$need_scan                = true;
			$checksum                 = md5_file( $file );
			$model->md5_tree[ $file ] = $checksum;
			if ( is_object( $last_scan ) && isset( $last_checksum[ $file ] ) ) {
				if ( strcmp( $checksum, $last_checksum[ $file ] ) === 0 ) {
					$is_ignored = $last_scan->is_file_ignored( $file, 'WD_Scan_Result_File_Item_Model' );
					//this file doesnt get changed
					$need_scan = false;
					//if this an issue from last scan, it still be
					$is_issue = $last_scan->find_result_item_by_file( $file, 'WD_Scan_Result_File_Item_Model' );
					if ( is_object( $is_issue ) ) {
						//move this file to new result array
						$model->result[] = $is_issue;
					}
					if ( $is_ignored ) {
						//this file got ignored, and currently still fine, so move it there
						//in this case, the is issue must be have value
						$model->ignore_files[] = $is_issue->id;
					}
					$this->log( 'hit', self::ERROR_LEVEL_DEBUG, 'hit' );
				}
			}

			if ( $need_scan ) {
				$ret = $this->_scan_a_file( $file );
				if ( $ret instanceof WD_Scan_Result_File_Item_Model ) {
					$model->result[] = $ret;
					WD_Scan_Api::log_scanned_file( $file . ' - ' . '<span class="not-ok">' . __( "Not OK", wp_defender()->domain ) . '</span>' );
				} else {
					WD_Scan_Api::log_scanned_file( $file . ' - ' . '<span class="ok">' . __( "OK", wp_defender()->domain ) . '</span>' );
				}
			}
			//detect done, postback status
			$progress = round( $model->current_index * 100 / $model->total_files, 2 );
			$this->internal_index += 1;

			set_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, $progress );
			$this->log( $progress, self::ERROR_LEVEL_DEBUG, 'percent' );
			set_transient( self::CACHE_INDEX, $this->internal_index );

			$model->current_index += 1;
			//$model->message = sprintf( __( "Analyzing file %s", wp_defender()->domain ), str_replace( ABSPATH, '', $file ) );
			$model->message = __( "Analyzing wp-content files...", wp_defender()->domain );
			update_post_meta( $model->id, 'current_index', $model->current_index );
			/*$this->log( $this->internal_index, self::ERROR_LEVEL_DEBUG, 'abc' );*/
			update_post_meta( $model->id, 'message', $model->message );
			echo $progress . PHP_EOL;
			$this->log( 'after memory ' . $this->convert_size( memory_get_usage() ), self::ERROR_LEVEL_DEBUG, 'scan' );
		}

		update_post_meta( $model->id, 'result', $model->result );
		update_post_meta( $model->id, 'md5_tree', $model->md5_tree );
		update_post_meta( $model->id, 'ignore_files', $model->ignore_files );
		if ( $this->internal_index == count( $this->files_need_scan ) ) {
			//reset the internal
			//delete_transient( self::CACHE_INDEX );
			if ( ! empty( $next_step ) ) {
				$model->current_action = $next_step;
				$model->save();
			}
		}
		$this->flush_cache();
	}

	private function _scan_a_file( $file ) {
		$this->log( 'scanned file ' . $file, self::ERROR_LEVEL_INFO, 'scan' );
		$content = $this->read_file_content( $file );
		$item    = true;
		if ( $content === false || strlen( $content ) == 0 ) {
			//quickly skip this, but we still need to record the index & info
		} else {
			//break in new line for easier trace
			$content = str_replace( ';', ';' . PHP_EOL, $content );
			/**
			 * need to gather information about
			 * 1. base 64 encode
			 * 2. repeatly concat string
			 * 3. repeatly concat array element
			 * 4. variable function
			 * 5. suspicious function pattern
			 */
			try {
				$b64_res = $this->detect_encode_code( $content, $file );
				$this->log( 'done detect encode', self::ERROR_LEVEL_INFO, 'scan' );
				$sconcat_res = $this->detect_concat_string( $content, $file );
				$this->log( 'done detect concat string', self::ERROR_LEVEL_INFO, 'scan' );
				$vconcat_res = $this->detect_variable_concat( $content, $file );
				$this->log( 'done detect variable concat', self::ERROR_LEVEL_INFO, 'scan' );
				$vfunction_res = $this->detect_variable_function( $content, $file );
				$this->log( 'done detect variable function', self::ERROR_LEVEL_INFO, 'scan' );
				$sfunction_res = $this->detect_suspicious_functions( $content, $file );
				$this->log( 'done detect suspicious function', self::ERROR_LEVEL_INFO, 'scan' );
			} catch ( Exception $e ) {
				//unlock
				$log = $e->getMessage() . PHP_EOL;
				$log .= $e->getTraceAsString();
				$this->log( $log, self::ERROR_LEVEL_ERROR, 'scan' );
				delete_option( 'wd_scan_lock' );

				return;
			}
			$res   = WD_Scan_Api::calculate_scores( array(
				'b64_res'       => $b64_res,
				'sconcat_res'   => $sconcat_res,
				'vconcat_res'   => $vconcat_res,
				'vfunction_res' => $vfunction_res,
				'sfunction_res' => $sfunction_res
			) );
			$score = $res['score'];
			$log   = $res['detail'];
			echo $file . '-' . $score . PHP_EOL;
			if ( $score > 0 ) {
				//means we got some issue here
				$tmp = array(
					'file'   => $file,
					'score'  => $score,
					'log'    => $log,
					'detail' => __( "Suspicious function found", wp_defender()->domain ),
				);
				//check if this is inside theme or folder
				if ( strpos( $file, WP_CONTENT_DIR . 'themes/' ) === 0 ||
				     strpos( $file, WP_CONTENT_DIR . 'plugins/' ) === 0
				) {
					//maybe we can fix this
					$tmp['can_fix'] = true;
				} else {
					//this is something outside, only delete
					$tmp['can_fix'] = false;
				}
				//items
				$item         = new WD_Scan_Result_File_Item_Model();
				$item->id     = uniqid();
				$item->name   = $file;
				$item->detail = $tmp;
				//$model->result[] = $item;
			}
		}
		//release memory
		$content = null;
		unset( $content );

		return $item;
	}

	/**
	 * @param $file
	 *
	 * @return bool|string
	 */
	private function read_file_content( $file ) {
		//check file size
		$content     = "";
		$file_handle = @fopen( $file, "r" );
		if ( $file_handle ) {
			while ( ! feof( $file_handle ) ) {
				$content .= fgets( $file_handle );
			}
			fclose( $file_handle );
		} else {
			return false;
		}

		//$content = trim( $content );

		return $content;
	}

	public function detect_variable_function( $content, $file ) {
		$file = pathinfo( $file, PATHINFO_FILENAME );
		$res  = array();
		//$this->log( var_export( $content, true ), self::ERROR_LEVEL_DEBUG, $file );
		$tokens = @token_get_all( $content );
		if ( preg_match_all( $this->get_variable_function_pattern(), $content, $matches, PREG_OFFSET_CAPTURE ) ) {
			foreach ( $matches[1] as $match ) {
				$line = $this->find_line_number( $content, $match[1] );
				foreach ( $tokens as $token ) {
					if ( is_array( $token ) && $token[2] == $line && $token[1] == $match[0] ) {
						//this mean this file having some variable functions
						$res[] = array(
							'line' => $line,
							'code' => $match[0],
							'file' => $file,
							'type' => 'variable_function'
						);
					}
				}
			}
		}
		$tokens = null;
		unset( $tokens );

		return $res;
	}


	/**
	 * @param $content
	 * @param $offset
	 *
	 * @return int
	 */
	private function find_line_number( $content, $offset ) {
		list( $before ) = str_split( $content, $offset ); // fetches all the text before the match

		$line_number = strlen( $before ) - strlen( str_replace( "\n", "", $before ) ) + 1;

		return $line_number;
	}

	/**
	 * @param $content
	 * @param $file
	 *
	 * @return array
	 */
	public function detect_variable_concat( $content, $file ) {
		$res = array();
		if ( preg_match_all( $this->get_variable_concat_pattern(), $content, $matches, PREG_OFFSET_CAPTURE ) ) {
			foreach ( $matches[0] as $found ) {
				$match = $found[0];
				$match = explode( '.', $match );
				$match = array_filter( $match );
				if ( count( $match ) > 3 ) {
					$res[] = array(
						'line' => $this->find_line_number( $content, $found[1] ),
						'code' => $match,
						'file' => $file,
						'type' => 'variable_concat'
					);
				}
			}
		}

		return $res;
	}

	/**
	 *
	 * @param $content
	 * @param $file
	 *
	 * @return array
	 */
	public function detect_concat_string( $content, $file ) {
		$res = array();
		if ( preg_match_all( $this->get_concat_scan_pattern(), $content, $matches, PREG_OFFSET_CAPTURE ) ) {
			foreach ( $matches[0] as $found ) {
				$match = $found[0];
				//join the match
				$match = str_replace( array(
					PHP_EOL,
					"'.'",
					'"."',
					"' . '",
					'" . "',
				), '', $match );
				if ( ( $decoded = base64_decode( $match ) ) !== false ) {
					//if this is a normal script, it should been here
					if ( $this->maybe_danger_decoded_code( $decoded ) ) {
						//if gone here that must be something
						$res[] = array(
							'line'    => $this->find_line_number( $content, $found[1] ),
							'code'    => $match,
							'decoded' => $decoded,
							'file'    => $file,
							'type'    => 'string_concat'
						);
					}
				} else {
					//can't decode, might be some deeper encrypt, and likely unfriendly
					$res[] = array(
						'line'    => $this->find_line_number( $content, $found[1] ),
						'code'    => $match,
						'decoded' => false,
						'file'    => $file,
						'type'    => 'string_concat'
					);
				}
			}
		}

		return $res;
	}

	/**
	 * Detect base64 encoding code in a file
	 *
	 * @param $content
	 * @param $file
	 *
	 * @return array
	 */
	public function detect_encode_code( $content, $file ) {
		//do a regex check ifrst
		$res = array();
		if ( preg_match_all( $this->get_base64_scan_pattern(), $content, $matches, PREG_OFFSET_CAPTURE ) ) {
			foreach ( $matches[1] as $found ) {
				$match = $found[0];
				if ( ( $decoded = base64_decode( $match ) ) !== false ) {
					//can decode, need to check some case
					if ( $this->maybe_danger_decoded_code( $decoded ) ) {
						//if gone here that must be something
						$res[] = array(
							'line'    => $this->find_line_number( $content, $found[1] ),
							'code'    => $match,
							'decoded' => $decoded,
							'file'    => $file,
							'type'    => 'base64'
						);
					}
				} else {
					//can't decode, might be some deeper encrypt, and likely unfriendly
					$res[] = array(
						'line'    => $this->find_line_number( $content, $found[1] ),
						'code'    => $match,
						'decoded' => false,
						'file'    => $file,
						'type'    => 'base64'
					);
				}
			}
		}

		return $res;
	}

	/**
	 * @param $decoded
	 *
	 * @return bool
	 */
	private function maybe_danger_decoded_code( $decoded ) {
		//can decode, need to check some case
		$decoded = trim( $decoded );
		if ( empty( $decoded ) ) {
			return false;
		}
		if ( filter_var( $decoded, FILTER_VALIDATE_URL ) ) {
			//just an url, nothing to do
			return false;
		}

		if ( is_array( maybe_unserialize( $decoded ) ) ) {
			//an array, by pass for now
			return false;
		}

		if ( json_decode( $decoded ) ) {
			//just a json, pass
			return false;
		}

		$doc = new DOMDocument();
		if ( @$doc->loadXML( $decoded ) ) {
			//xml go through too
			return false;
		}

		return true;
	}

	function base64_to_jpeg( $base64_string, $output_file ) {
		$tmp_path = wp_defender()->get_plugin_path() . 'vault/';
		$ifp      = fopen( $tmp_path . $output_file, "wb" );

		$data = explode( ',', $base64_string );

		fwrite( $ifp, base64_decode( $data[1] ) );
		fclose( $ifp );

		return $tmp_path . $output_file;
	}


	/**
	 * Checking the file content to find if we have any function match the pattern
	 *
	 * @param $content
	 *
	 * @return array
	 */
	public function detect_suspicious_functions( $content, $file = null ) {
		$catches = array();
		$parts   = explode( PHP_EOL, $content );
		//we need to make sure no shortopen tag here
		//wont use regex here, as it will broken if file too large
		$parts   = array_map( array( &$this, 'avoid_short_tag' ), $parts );
		$content = implode( PHP_EOL, $parts );
		//tokenize the code
		$tokens = @token_get_all( $content );

		foreach ( $tokens as $token ) {
			if ( ! is_array( $token ) ) {
				continue;
			}
			//only catch if function
			//var_dump( $this->debug_token( $token ) );
			if ( in_array( $token[0], array(
				T_STRING,
				T_EVAL,
			) ) ) {
				//put the preg match here to reduce the times it run in loop, also not pregmatch big data
				if ( preg_match( $this->get_function_scan_pattern(), $token[1] ) ) {
					$catches[] = array(
						'function' => $token[1],
						'line'     => $token[2],
					);
				}
			}
		}
		unset( $tokens );
		$analysis = array();
		if ( ! empty( $catches ) ) {
			foreach ( $catches as $catch ) {
				if ( ! isset( $analysis[ $catch['line'] ] ) ) {
					$analysis[ $catch['line'] ] = array();
				}

				$analysis[ $catch['line'] ][] = $catch['function'];
			}
		}

		return $analysis;
	}

	/**
	 * detect if the code havig short open tag and replace with full open
	 *
	 * @param $content
	 *
	 * @return mixed
	 */
	public function avoid_short_tag( $content ) {
		$last_pos = 0;
		while ( ( $last_pos = strpos( $content, '<?', $last_pos ) ) !== false ) {
			$last_pos = $last_pos + strlen( '<?' );
			$is_tag   = strtolower( substr( $content, $last_pos, 3 ) );
			if ( ! in_array( $is_tag, array( 'php', 'xml' ) ) ) {
				//this mean the next to <? not php or xml, we will append a php in there
				$content = substr_replace( $content, 'php ', $last_pos, 0 );
			}
		}

		return $content;
	}

	public function debug_token( $token ) {
		return array(
			token_name( $token[0] ),
			$token[1],
			$token[2]
		);
	}
}