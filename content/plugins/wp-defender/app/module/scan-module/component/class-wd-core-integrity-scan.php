<?php

/**
 * @author: Hoang Ngo
 */
class WD_Core_Integrity_Scan extends WD_Scan_Abstract {
	const CACHE_INDEX = 'wd_core_scan_index', CACHE_MD5 = 'wd_core_cache_md5';
	private $internal_index = 0;
	public $name = '';

	//public $chunk_size = 200;

	public function __construct() {
		if ( WD_Utils::get_setting( 'use_' . WD_Scan_Api::SCAN_CORE_INTEGRITY . '_scan' ) != 1 ) {
			$this->is_enabled = false;

			return false;
		}
		$this->name = __( "core integrity scan", wp_defender()->domain );

		$this->percentable        = true;
		$this->dashboard_required = false;
		$this->files_need_scan    = WD_Scan_Api::get_core_files();
		//$this->max_percent        = round( ( count( $this->files_need_scan ) * 100 ) / count( self::get_total_files() ), 2 );
		$this->internal_index = get_site_transient( self::CACHE_INDEX );
	}

	public function process( WD_Scan_Result_Model $model, $next_step = null ) {
		if ( ! $this->maybe_run_this_scan( $model ) ) {
			return false;
		}

		if ( $this->internal_index == 0 ) {
			//this is first rune
			$model->message = __( "Analyzing WordPress core files…", wp_defender()->domain );
			$model->save();
		}

		$files = $this->files_need_scan;
		if ( $this->internal_index > 0 ) {
			$files = array_slice( $files, $this->internal_index, count( $this->files_need_scan ) );
		}

		$chunk = array_chunk( $files, apply_filters( 'wd_core_integrity_chunk_size', 200, $this->files_need_scan ) );
		$files = array_shift( $chunk );

		$last_scan = WD_Scan_Api::get_last_scan();

		if ( is_object( $last_scan ) ) {
			$last_checksum = $last_scan->md5_tree;
		} else {
			$last_checksum = array();
		}

		foreach ( $files as $file ) {
			$need_scan                = true;
			$checksum                 = md5_file( $file );
			$model->md5_tree[ $file ] = $checksum;
			if ( is_object( $last_scan ) && isset( $last_checksum[ $file ] ) ) {
				if ( strcmp( $checksum, $last_checksum[ $file ] ) === 0 ) {
					$is_ignored = $last_scan->is_file_ignored( $file, 'WD_Scan_Result_Core_Item_Model' );
					//this file doesnt get changed
					$need_scan = false;
					//if this an issue from last scan, it still be
					$is_issue = $last_scan->find_result_item_by_file( $file, 'WD_Scan_Result_Core_Item_Model' );
					if ( is_object( $is_issue ) ) {
						//move this file to new result array
						$model->result[]                = $is_issue;
						$model->result_core_integrity[] = $file;
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
				$result = $this->scan_a_file( $file, $checksum );
				if ( is_wp_error( $result ) ) {
					$model->status  = WD_Scan_Result_Model::STATUS_ERROR;
					$model->message = $result->get_error_message();
					$model->save();
				} elseif ( $result === - 1 ) {
					//this mean no signatures
					set_site_transient( WD_Scan_Api::ALERT_NO_MD5, __( "There are no available checksums for your WordPress version, the scan will skip the core integrity check.", wp_defender()->domain ) );
					$model->current_index = count( $this->files_need_scan );
					$progress             = round( $model->current_index * 100 / $model->total_files, 2 );
					set_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, $progress );
					update_post_meta( $model->id, 'current_index', $model->current_index );
					if ( ! empty( $next_step ) ) {
						$model->current_action = $next_step;
						$model->save();
					}

					return true;
				} elseif ( $result instanceof WD_Scan_Result_Core_Item_Model ) {
					//issue found
					$model->result[]                = $result;
					$model->result_core_integrity[] = $file;
				}
			}

			$progress = round( $model->current_index * 100 / $model->total_files, 2 );
			$this->internal_index += 1;
			set_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, $progress );
			$this->log( $progress, self::ERROR_LEVEL_DEBUG, 'percent' );
			set_site_transient( self::CACHE_INDEX, $this->internal_index );
			WD_Scan_Api::log_scanned_file( $file . ' - ' . ( ( isset( $detail ) && is_array( $detail ) && count( $detail ) ) ? '<span class="not-ok">' . __( "Not OK", wp_defender()->domain ) . '</span>' : '<span class="ok">' . __( "OK", wp_defender()->domain ) . '</span>' ) );

			$model->current_index += 1;
			$model->message = __( "Analyzing WordPress core files...", wp_defender()->domain );
			//need to do this by hand, to avoid othre plugins hook into wp_insert_post or wp_update_post
			update_post_meta( $model->id, 'current_index', $model->current_index );
			update_post_meta( $model->id, 'message', $model->message );
			echo $progress . PHP_EOL;
		}
		update_post_meta( $model->id, 'result', $model->result );
		update_post_meta( $model->id, 'md5_tree', $model->md5_tree );
		update_post_meta( $model->id, 'result_core_integrity', $model->result_core_integrity );
		update_post_meta( $model->id, 'ignore_files', $model->ignore_files );
		delete_site_transient( self::CACHE_MD5 );

		//will need to check if this already done
		if ( $this->internal_index == count( $this->files_need_scan ) ) {
			//reset the internal
			//delete_transient( self::CACHE_INDEX );
			if ( ! empty( $next_step ) ) {
				$model->current_action = $next_step;
				$model->save();
			}
		}
	}

	/**
	 * @param $file
	 * @param bool|false $checksum
	 *
	 * @return bool|WD_Scan_Result_Core_Item_Model
	 */
	private function scan_a_file( $file, $checksum = false ) {
		//we need to download md5 from wp
		if ( ( $md5_files = get_site_transient( self::CACHE_MD5 ) ) == false ) {
			$md5_files = WD_Scan_Api::download_md5_files();
			if ( is_wp_error( $md5_files ) ) {
				return $md5_files;
			}

			if ( empty( $md5_files ) ) {
				//this mean no signatures return,we will skip
				return - 1;
			}
			set_site_transient( self::CACHE_MD5, $md5_files );
		}

		$relative_path = str_replace( ABSPATH, '', $file );
		$detail        = false;
		if ( isset( $md5_files[ $relative_path ] ) ) {
			$ochecksum = $md5_files[ $relative_path ];
			if ( $checksum == false ) {
				$checksum = md5_file( $file );
			}
			if ( strcmp( $checksum, $ochecksum ) !== 0 ) {
				//not good
				$detail = array(
					'file'     => $file,
					'is_added' => false,
					'detail'   => sprintf( __( "File size %s, modified at %s", wp_defender()->domain ), $this->convert_size( filesize( $file ) ), date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), filemtime( $file ) ) ),
				);
			}
		} else {
			//new files added
			$excludes = array( '.htaccess', 'wp-config.php' );
			if ( in_array( $relative_path, $excludes ) ) {
				//by pass this for now, but this sill need indexing
			} else {
				$detail = array(
					'file'     => $file,
					'is_added' => true,
					'detail'   => sprintf( __( "File size %s, added at %s", wp_defender()->domain ), $this->convert_size( filesize( $file ) ), date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), filemtime( $file ) ) ),
				);
			}
		}
		if ( is_array( $detail ) && count( $detail ) ) {
			$item         = new WD_Scan_Result_Core_Item_Model();
			$item->id     = uniqid();
			$item->name   = $file;
			$item->detail = $detail;

			return $item;
		}

		return true;
	}

	/**
	 * @param WD_Scan_Result_Model $model
	 * @param $next_step
	 *
	 * @return bool
	 */
	public function process1( WD_Scan_Result_Model $model, $next_step = null ) {
		if ( ! $this->maybe_run_this_scan( $model ) ) {
			return false;
		}

		if ( $this->internal_index == 0 ) {
			//this is first rune
			$model->message = __( "Analyzing WordPress core files…", wp_defender()->domain );
			$model->save();
		}

		$files = $this->files_need_scan;
		if ( $this->internal_index > 0 ) {
			$files = array_slice( $files, $this->internal_index, count( $this->files_need_scan ) );
		}

		$chunk = array_chunk( $files, apply_filters( 'wd_core_integrity_chunk_size', 200, $this->files_need_scan ) );
		$files = array_shift( $chunk );

		$last_scan = WD_Scan_Api::get_last_scan();

		if ( is_object( $last_scan ) ) {
			$last_checksum = $last_scan->md5_tree;
		} else {
			$last_checksum = array();
		}

		foreach ( $files as $file ) {
			$need_scan = false;
			if ( is_object( $last_scan ) ) {

			}

		}


		//download the md5
		$md5_files = WD_Scan_Api::download_md5_files();

		if ( is_wp_error( $md5_files ) ) {
			if ( is_object( $model ) ) {
				$model->status  = WD_Scan_Result_Model::STATUS_ERROR;
				$model->message = $md5_files->get_error_message();
				$model->save();
			}

			return false;
		}

		if ( empty( $md5_files ) ) {
			//this mean no signatures return,we will skip
			set_site_transient( WD_Scan_Api::ALERT_NO_MD5, __( "There are no available checksums for your WordPress version, the scan will skip the core integrity check.", wp_defender()->domain ) );
			$model->current_index = count( $this->files_need_scan );
			$progress             = round( $model->current_index * 100 / $model->total_files, 2 );
			set_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, $progress );
			update_post_meta( $model->id, 'current_index', $model->current_index );
			if ( ! empty( $next_step ) ) {
				$model->current_action = $next_step;
				$model->save();
			}

			return true;
		}

		//loop through all the files and check
		for ( $i = 0; $i < count( $files ); $i ++ ) {
			$file          = $files[ $i ];
			$relative_path = str_replace( ABSPATH, '', $file );
			$detail        = false;
			if ( isset( $md5_files[ $relative_path ] ) ) {
				$ccheckum  = md5_file( $file );
				$ochecksum = $md5_files[ $relative_path ];
				if ( strcmp( $ccheckum, $ochecksum ) !== 0 ) {
					//not good
					$detail = array(
						'file'     => $file,
						'is_added' => false,
						'detail'   => sprintf( __( "File size %s, modified at %s", wp_defender()->domain ), $this->convert_size( filesize( $file ) ), date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), filemtime( $file ) ) ),
					);
				}
			} else {
				//new files added
				$excludes = array( '.htaccess', 'wp-config.php' );
				if ( in_array( $relative_path, $excludes ) ) {
					//by pass this for now, but this still need indexing

				} else {
					$detail = array(
						'file'     => $file,
						'is_added' => true,
						'detail'   => sprintf( __( "File size %s, added at %s", wp_defender()->domain ), $this->convert_size( filesize( $file ) ), date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), filemtime( $file ) ) ),
					);
				}
			}

			if ( is_array( $detail ) && count( $detail ) ) {
				$item                           = new WD_Scan_Result_Core_Item_Model();
				$item->id                       = uniqid();
				$item->name                     = $file;
				$item->detail                   = $detail;
				$model->result[]                = $item;
				$model->result_core_integrity[] = $file;
			}
			//we still need to cache the md5 of current

			//$progress = round( $this->internal_index * $this->max_percent / ( count( $this->files_need_scan ) - 1 ), 2 );
			$progress = round( $model->current_index * 100 / $model->total_files, 2 );
			$this->internal_index += 1;
			set_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, $progress );
			$this->log( $progress, self::ERROR_LEVEL_DEBUG, 'percent' );
			set_site_transient( self::CACHE_INDEX, $this->internal_index );
			WD_Scan_Api::log_scanned_file( $file . ' - ' . ( ( isset( $detail ) && is_array( $detail ) && count( $detail ) ) ? '<span class="not-ok">' . __( "Not OK", wp_defender()->domain ) . '</span>' : '<span class="ok">' . __( "OK", wp_defender()->domain ) . '</span>' ) );

			$model->current_index += 1;
			//$model->message = sprintf( __( "Analyzing WordPress core file %s", wp_defender()->domain ), $file );
			$model->message = __( "Analyzing WordPress core files...", wp_defender()->domain );
			//need to do this by hand, to avoid othre plugins hook into wp_insert_post or wp_update_post
			update_post_meta( $model->id, 'current_index', $model->current_index );
			update_post_meta( $model->id, 'message', $model->message );
			update_post_meta( $model->id, 'result', $model->result );
			update_post_meta( $model->id, 'result_core_integrity', $model->result_core_integrity );
			echo $progress . PHP_EOL;
		}

		//will need to check if this already done
		if ( $this->internal_index == count( $this->files_need_scan ) ) {
			//reset the internal
			//delete_transient( self::CACHE_INDEX );
			if ( ! empty( $next_step ) ) {
				$model->current_action = $next_step;
				$model->save();
			}
		}

		return true;
	}
}