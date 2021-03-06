<?php

/**
 * @author: Hoang Ngo
 */
class WD_Scan_Api extends WD_Component {
	protected static $last_scan;
	protected static $model;

	const CACHE_CORE_FILES = 'wd_core_files', CACHE_CONTENT_FILES = 'wd_content_files', CACHE_SCAN_PERCENT = 'wd_scan_percent',
		CACHE_SCANNED = 'wd_scanned_file';
	const ALERT_NESTED_WP = 'wd_nested_wp', ALERT_NO_MD5 = 'wd_no_md5';

	const SCAN_CORE_INTEGRITY = 'core_integrity', SCAN_VULN_DB = 'vulndb', SCAN_SUSPICIOUS_FILE = 'suspicious_file';

	/**
	 * Get files path inside wp-admin,wp-include and root
	 *
	 * @return bool|mixed|void
	 * @access public
	 * @since 1.0
	 */
	public static function get_core_files() {
		$cache = get_site_transient( self::CACHE_CORE_FILES );
		if ( is_array( $cache ) ) {
			return $cache;
		}
		$dir_tree   = new WD_Dir_Tree( ABSPATH, true, false, array(
			'dir' => array(
				ABSPATH . 'wp-admin',
				ABSPATH . 'wp-includes'
			),
		) );
		$core_files = $dir_tree->get_dir_tree();
		//file in the root
		$dir_tree  = new WD_Dir_Tree( ABSPATH, true, false, array(
			'ext' => WD_Utils::get_setting( 'include_file_extension', array( 'php' ) )
		), array(), false );
		$abs_files = $dir_tree->get_dir_tree();
		$files     = array_merge( (array) $abs_files, (array) $core_files );
		set_site_transient( self::CACHE_CORE_FILES, $files );
		set_site_transient( self::CACHE_CORE_FILES . 'count', count( $files ) );

		return $files;
	}

	/**
	 * @return bool
	 */
	public static function maybe_scan() {
		$is_core_scan   = WD_Utils::get_setting( 'use_' . self::SCAN_CORE_INTEGRITY . '_scan' );
		$is_vulndb_scan = WD_Utils::get_setting( 'use_' . self::SCAN_VULN_DB . '_scan' );
		$is_sfile_scan  = WD_Utils::get_setting( 'use_' . self::SCAN_SUSPICIOUS_FILE . '_scan' );

		if ( $is_core_scan == false && $is_vulndb_scan == false && $is_sfile_scan == false ) {
			return false;
		}

		return true;
	}

	/**
	 * Return a string for next scan will run
	 * @return string
	 */
	public static function next_run_information() {
		$is_active = WD_Utils::get_setting( 'scan->auto_scan', 0 );
		if ( $is_active ) {
			$emails = array();
			foreach ( WD_Utils::get_setting( 'recipients', array() ) as $user_id ) {
				$user     = get_user_by( 'id', $user_id );
				$emails[] = $user->user_email;
			}
			$res = sprintf( __( "Automatic scans have been enabled. Expect your first report on <strong>%s</strong> to <strong>%s</strong>", wp_defender()->domain ),
				date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), self::calculate_next_run() ),
				implode( ',', $emails ) );

			return '<p class="wd-no-margin"><i class=\"dev-icon dev-icon-tick\"></i>' . $res . '</p>';
		}
	}

	/**
	 * @param null $last_scan_time
	 *
	 * @return int|null
	 */
	public static function calculate_next_run( $last_scan_time = null ) {
		$args = WD_Utils::get_automatic_scan_settings();

		if ( is_null( $last_scan_time ) ) {
			$last_scan = WD_Scan_Api::get_last_scan();
			if ( is_object( $last_scan ) ) {
				$post           = $last_scan->get_raw_post();
				$last_scan_time = strtotime( $post->post_date );
			} else {
				$last_scan_time = null;
			}
		}

		list( $hour, $minute ) = explode( ':', $args['time'] );

		$next_scan = null;
		switch ( $args['frequency'] ) {
			case 1:
				//tomorrow of the last scan time
				if ( $last_scan_time == null ) {
					//null, so never run, today should be the day
					$last_scan_time = strtotime( 'yesterday', current_time( 'timestamp' ) );
				}
				$next_day  = strtotime( 'tomorrow', $last_scan_time );
				$next_scan = mktime( $hour, $minute, 0, date( 'm', $next_day ), date( 'd', $next_day ), date( 'Y', $next_day ) );
				break;
			case 7:
				if ( $last_scan_time == null ) {
					//null, so never run, today should be the day
					$last_scan_time = strtotime( 'yesterday', current_time( 'timestamp' ) );
				}
				$next_week = strtotime( 'next ' . $args['day'], $last_scan_time );
				$next_scan = mktime( $hour, $minute, 0, date( 'm', $next_week ), date( 'd', $next_week ), date( 'Y', $next_week ) );
				break;
			case 30:
				if ( $last_scan_time == null ) {
					//null, so never run, today should be the day
					$last_scan_time = strtotime( 'yesterday', current_time( 'timestamp' ) );
				}
				$next_month = strtotime( 'first ' . $args['day'] . ' of next month', $last_scan_time );
				$next_scan  = mktime( $hour, $minute, 0, date( 'm', $next_month ), date( 'd', $next_month ), date( 'Y', $next_month ) );
				break;
		}

		return apply_filters( 'wd_next_scan_run', $next_scan );
	}

	/**
	 * Download md5 checksum from WP
	 *
	 * @access protected;
	 * @return bool
	 * @since 1.0
	 */
	public static function download_md5_files() {
		set_time_limit( 0 );
		global $wp_version, $wp_local_package;
		if ( isset( $wp_local_package ) ) {
			$locale = $wp_local_package;
		} else {
			$locale = get_locale();
		}
		$url      = "https://api.wordpress.org/core/checksums/1.0/?version={$wp_version}&locale={$locale}";
		$response = wp_remote_get( $url, apply_filters( 'wd_vulndb_api_request_arguments',
			array(
				'timeout' => 15
			) ) );

		if (
			'OK' !== wp_remote_retrieve_response_message( $response )
			OR 200 !== wp_remote_retrieve_response_code( $response )
		) {
			self::log( var_export( $response, true ) );

			return new WP_Error( wp_remote_retrieve_response_code( $response ), wp_remote_retrieve_response_message( $response ) );
		}

		$body = wp_remote_retrieve_body( $response );
		$body = json_decode( $body, true );

		return $body['checksums'];
	}

	/**
	 * This will break all files need to scan into chunks, by disk size, not quantities
	 *
	 * @param $files
	 *
	 * @return array
	 * @since 1.0.2
	 */
	public static function calculate_chunks( $files ) {
		//load maximum 2MB
		$chunk_size   = 2097152;
		$current_size = 0;
		$chunks       = array();
		foreach ( $files as $file ) {
			$filesize = @filesize( $file );
			if ( $filesize ) {
				$current_size += $filesize;
			}
			$chunks[] = $file;
			if ( $current_size > $chunk_size ) {
				return $chunks;
			}
		}

		//if this were here, means all the files very light
		return $chunks;
	}

	/**
	 * Create a scan record
	 *
	 * @param bool|false $force
	 *
	 * @return int|WP_Error
	 * @access public
	 * @since 1.0
	 */
	public static function create_scan_record( $force = false ) {
		//check if we having any on going
		$models = WD_Scan_Result_Model::model()->find_all( array(
			'status' => array(
				WD_Scan_Result_Model::STATUS_PROCESSING,
				WD_Scan_Result_Model::STATUS_ERROR
			)
		) );

		if ( count( $models ) && $force == false ) {
			//we having on going process
			return new WP_Error( 'record_exists', __( "A scan is already in progress", wp_defender()->domain ) );
		}

		$model = new WD_Scan_Result_Model();
		$model->save();

		return $model->id;
	}

	/**
	 * Get all files except the result from @see WD_Scan::get_core_files
	 *
	 * @return array
	 * @access public
	 * @since 1.0
	 */
	public static function get_content_files() {
		$cache = get_site_transient( self::CACHE_CONTENT_FILES );
		if ( is_array( $cache ) ) {
			return $cache;
		}

		$ext = WD_Utils::get_setting( 'include_file_extension', array( 'php' ) );

		$max_size      = WD_Utils::get_setting( 'max_file_size', false );
		$content_files = WD_Utils::get_dir_tree( WP_CONTENT_DIR, true, false, array(), array(
			'ext' => $ext
		), true, $max_size );

		$outsiders      = WD_Utils::get_dir_tree( ABSPATH, false, true, array(
			'dir' => array(
				ABSPATH . 'wp-admin',
				ABSPATH . 'wp-content',
				ABSPATH . 'wp-includes'
			)
		), array(), false );
		$outsider_files = array();
		foreach ( $outsiders as $outsider ) {
			$osd_files      = WD_Utils::get_dir_tree( $outsider, true, false, array(), array(
				'ext' => $ext
			), true, $max_size );
			$outsider_files = array_merge( $outsider_files, $osd_files );
		}
		//we got all ousider files, now we need to detect if the files include any worpdress installl
		$content_files = array_merge( $content_files, $outsider_files );
		list( $content_files, $wp_installs ) = self::is_nested_wp_install( $content_files );
		if ( count( $wp_installs ) ) {
			//we need to warn about this
			$alerts = __( "Please note the nested WP install on your site will not be scanned. Install WP Defender there to scan separately.", wp_defender()->domain );
			//self::log( var_export( $wp_installs, true ), self::ERROR_LEVEL_DEBUG, 'nested' );
			//$alerts = array_merge( $alerts, $wp_installs );
			set_site_transient( self::ALERT_NESTED_WP, $alerts );
		}
		set_site_transient( self::CACHE_CONTENT_FILES, $content_files );
		//just for debug
		set_site_transient( self::CACHE_CONTENT_FILES . 'count', count( $content_files ) );

		//$content_files = array_slice( $content_files, 0, 2000 );

		return $content_files;
	}

	/**
	 * determine nested wp install on root
	 *
	 * @param $files
	 *
	 * @return array
	 */
	public static function is_nested_wp_install( $files ) {
		$wp_roots = array();
		$clean    = array();
		foreach ( $files as $key => $file ) {
			if ( ( $pos = strpos( $file, '/wp-admin/' ) ) !== false
			     || ( $pos = strpos( $file, '/wp-include/' ) ) !== false
			     || ( $pos = strpos( $file, '/wp-content/' ) ) !== false
			     || ( $pos = strpos( $file, '/wp-config.php' ) ) !== false
			     || ( $pos = strpos( $file, '/wp-config-sample.php' ) ) !== false
			) {
				//need to determine the path
				$root = substr( $file, 0, $pos );
				if ( $root != rtrim( ABSPATH, '/' ) ) {
					if ( in_array( $root, $wp_roots ) ) {
						//this path already know as wp dir
						//ignore this
						continue;
					} elseif ( self::is_wp_install( $root ) ) {
						$wp_roots[] = substr( $file, 0, $pos );
						$wp_roots   = array_unique( $wp_roots );
						//found wp root, just add to index and ignore
						continue;
					}
				}
			}
			//this seem clean
			$clean[] = $file;
		}
		//self::log( var_export( $wp_roots, true ), self::ERROR_LEVEL_DEBUG, 'nested' );
		//there many chances custom folder inside nested, so we have to filter it out
		foreach ( $clean as $key => $file ) {
			foreach ( $wp_roots as $root ) {
				if ( strpos( $file, $root ) === 0 ) {
					unset( $clean[ $key ] );
					continue;
				}
			}
		}

		return array( $clean, $wp_roots );
	}

	/**
	 * Detect if a folder is WP install
	 *
	 * @param $path
	 *
	 * @return bool
	 */
	public static function is_wp_install( $path ) {
		$structs = array(
			'wp-settings.php',
			'wp-cron.php',
			'wp-comments-post.php',
			'wp-activate.php',
			'wp-admin',
			'wp-mail.php',
			'wp-content',
			'xmlrpc.php',
			'wp-load.php',
			'wp-login.php',
			'wp-signup.php',
			'wp-blog-header.php',
			'wp-links-opml.php',
			'wp-trackback.php',
			'index.php',
			'wp-includes',
		);

		$data = WD_Utils::get_dir_tree( $path, true, true, array(), array(), false );
		foreach ( $data as $item ) {
			$item = str_replace( $path, '', $item );
			$item = ltrim( $item, '/' );
			//now we got the file name
			$key = array_search( $item, $structs );
			if ( $key !== false ) {
				unset( $structs[ $key ] );
			}
		}
		if ( count( $structs ) == 0 ) {

			return true;
		}

		return false;
	}

	public static function get_sample_files() {
		return WD_Utils::get_dir_tree( ABSPATH . 'sample/', true, false, array(), array(
			//'filename' => array( 'help.php' )
			'ext' => array( 'php' )
		) );
	}

	/**
	 * @return array
	 */
	public static function get_total_files() {
		return array_merge( self::get_core_files(), self::get_content_files() );
	}

	/**
	 * Get last scan from DB
	 *
	 * @return WD_Scan_Result_Model|null
	 * @access public
	 * @since 1.0
	 */
	public static function get_last_scan() {
		if ( is_object( self::$last_scan ) ) {
			return self::$last_scan;
		}

		$model           = WD_Scan_Result_Model::model()->find_by_attributes( array(
			'status' => array(
				WD_Scan_Result_Model::STATUS_COMPLETE,
				WD_Scan_Result_Model::STATUS_ERROR
			)
		), array(
			'order'   => 'DESC',
			'orderby' => 'ID'
		) );
		self::$last_scan = $model;

		return $model;
	}

	/**
	 * Get if any scan record in process
	 * @return WD_Scan_Result_Model|null
	 */
	public static function get_active_scan( $force = false ) {
		if ( is_object( self::$model ) ) {
			return self::$model;
		}
		$model = WD_Scan_Result_Model::model()->find_by_attributes( array(
			'status' => array(
				WD_Scan_Result_Model::STATUS_PROCESSING,
				WD_Scan_Result_Model::STATUS_PAUSE,
				WD_Scan_Result_Model::STATUS_INIT
			)
		), array(
			'order'   => 'DESC',
			'orderby' => 'ID'
		) );

		if ( ! is_object( $model ) ) {
			return false;
		}

		self::$model = $model;

		return $model;
	}

	/**
	 * @param $log
	 */
	public static function log_scanned_file( $log ) {
		//we dnot need this function, clean up later
		global $wpdb;
		$log = $log . '|';
		if ( ! get_option( self::CACHE_SCANNED ) ) {
			update_option( self::CACHE_SCANNED, '' );
		}
		$sql = $wpdb->prepare( "UPDATE " . $wpdb->options . " SET option_value = CONCAT(option_value, '%s') WHERE option_name = %s;",
			$log, self::CACHE_SCANNED );
		$wpdb->query( $sql );
	}

	public static function clear_cache() {
		delete_site_transient( self::CACHE_CONTENT_FILES );
		delete_site_transient( self::CACHE_CORE_FILES );
		delete_site_transient( WD_Core_Integrity_Scan::FILE_SCANNED );
		delete_site_transient( WD_Core_Integrity_Scan::CACHE_MD5 );
		delete_site_transient( WD_Suspicious_Scan::CACHE_SIGNATURES );
		delete_site_transient( self::ALERT_NESTED_WP );
		delete_site_transient( self::ALERT_NO_MD5 );
		delete_site_option( 'wd_scan_lock' );
		//sometime user upgrade from single to network, we need to remove the lefrover
		delete_option( 'wd_scan_lock' );
		delete_transient( self::CACHE_CONTENT_FILES );
		delete_transient( self::CACHE_CORE_FILES );
		delete_transient( WD_Core_Integrity_Scan::FILE_SCANNED );
		delete_transient( WD_Core_Integrity_Scan::CACHE_MD5 );
		delete_transient( WD_Suspicious_Scan::CACHE_SIGNATURES );
		delete_transient( self::ALERT_NESTED_WP );
		delete_transient( self::ALERT_NO_MD5 );
	}

	public static function virus_weight( $data = array() ) {
		$b64_res = isset( $data['b64_res'] ) ? $data['b64_res'] : array();
		if ( count( $b64_res ) ) {
			//self::log( var_export( $b64_res, true ), self::ERROR_LEVEL_DEBUG, 'b64' );
		}
		$sconcat_res = isset( $data['sconcat_res'] ) ? $data['sconcat_res'] : array();
		if ( count( $sconcat_res ) ) {
			//self::log( var_export( $sconcat_res, true ), self::ERROR_LEVEL_DEBUG, 'sconcat' );
		}
		$vconcat_res = isset( $data['vconcat_res'] ) ? $data['vconcat_res'] : array();
		if ( count( $vconcat_res ) ) {
			//self::log( var_export( $vconcat_res, true ), self::ERROR_LEVEL_DEBUG, 'vconcat' );
		}
		$vfunction_res = isset( $data['vfunction_res'] ) ? $data['vfunction_res'] : array();
		if ( count( $vfunction_res ) ) {
			//self::log( var_export( $vfunction_res, true ), self::ERROR_LEVEL_DEBUG, 'vfunc' );
		}
		$sfunction_res = isset( $data['sfunction_res'] ) ? $data['sfunction_res'] : array();
		if ( count( $sfunction_res ) ) {
			//self::log( var_export( $sfunction_res, true ), self::ERROR_LEVEL_DEBUG, 'sfunc' );
		}

		$weight      = 0;
		$weight_plus = 0;
		$details     = array();
		/**
		 * if suspicious function found, each function will add 2 weight to other scan type
		 * if vfunc found, add 1 weight to other scan type
		 */
		$weight_plus = count( $sfunction_res ) * 2;
		if ( count( $vfunction_res ) ) {
			$weight_plus += 1;
		}

		/**
		 * if b64 found, means means higly we got issue. each code found will add 14 weight point
		 */

		foreach ( $b64_res as $b64_code ) {
			//we dont stored code, as it heavily the db
			unset( $b64_code['code'] );
			$details[] = $b64_code;
			$weight    = $weight + 14 + $weight_plus;
		}

		/**
		 * if found string concat, it should be somethin bad
		 */
		foreach ( $sconcat_res as $sconcat ) {
			//we have to check the code, if that so long, means something bad
			$length = strlen( $sconcat['code'] );
			//each 100 lenght, will increase 10
			$local_weight = ( $length / 100 ) * 10;
			$local_weight += $weight_plus;
			$weight += $local_weight;

			unset( $sconcat['code'] );
			$details[] = $sconcat;
		}

		//now we have to check vconcat

		foreach ( $vconcat_res as $vconcat ) {
			// each 7 element will increase 8 weight
			$length       = count( $vconcat['code'] );
			$local_weight = ( $length / 7 ) * 8;
			$local_weight += $weight_plus;
			$weight += $local_weight;

			$details[] = $vconcat;
		}

		return array(
			'score'  => $weight,
			'detail' => $details
		);
	}

	/**
	 * @param array $data
	 */
	public static function calculate_scores( $data = array() ) {
		$b64_res       = $data['b64_res'];
		$sconcat_res   = isset( $data['sconcat_res'] ) ? $data['sconcat_res'] : array();
		$vconcat_res   = isset( $data['vconcat_res'] ) ? $data['vconcat_res'] : array();
		$vfunction_res = isset( $data['vfunction_res'] ) ? $data['vfunction_res'] : array();
		$sfunction_res = isset( $data['sfunction_res'] ) ? $data['sfunction_res'] : array();

		//this will store information use to resolve later
		$details = array();
		$score   = 0;
		if ( count( $sconcat_res ) || count( $vconcat_res ) ) {
			//usually if having string concat like "abc"."bde"... highly likely a obfuscate code
			foreach ( $sconcat_res as $code ) {
				$score += 24;
				$details[] = array(
					'file'   => $code['file'],
					'line'   => $code['line'],
					'offset' => $code['offset'],
					'type'   => $code['type'],
					'code'   => $code['code']
				);
			}
			//same as the variable concat, usually it will be array element concat like $a[dsad].$b[dasd]
			foreach ( $vconcat_res as $code ) {
				$score += 24;
				$details[] = array(
					'file'   => $code['file'],
					'line'   => $code['line'],
					'type'   => $code['type'],
					'offset' => $code['offset'],
					'code'   => $code['code']
				);
			}
		}
		//if vfunction getting with any of the obfuscate above, that will be a big thing to plus
		if ( count( $vfunction_res ) && ( count( $sconcat_res ) || count( $b64_res ) || count( $vconcat_res ) ) ) {
			foreach ( $vfunction_res as $code ) {
				$score += 15;
				$details[] = array(
					'file'   => $code['file'],
					'line'   => $code['line'],
					'type'   => $code['type'],
					'offset' => $code['offset'],
					'code'   => $code['code']
				);
			}
		} else {
			//nothing to do right now,
		}

		//b64 code various use in crypt and encrypt so easily false alarm, need to consider
		//with function or vfunction, however, if get in here, this likely something nasty
		if ( ( count( $vfunction_res ) ) && count( $b64_res ) ) {
			foreach ( $b64_res as $code ) {
				$score += 22;
				$details[] = array(
					'file'   => $code['file'],
					'line'   => $code['line'],
					'type'   => $code['type'],
					'offset' => $code['offset'],
					'code'   => $code['code']
				);
			}
		}

		return array(
			'score'  => $score,
			'detail' => $details
		);
	}

	/**
	 * @return mixed|void
	 * @access public
	 * @since 1.0
	 */
	public static function get_frequently() {
		return apply_filters( 'scan_schedule_frequently', array(
			'1'  => __( "Daily", wp_defender()->domain ),
			'7'  => __( "Weekly", wp_defender()->domain ),
			'30' => __( "Monthly", wp_defender()->domain )
		) );
	}

	/**
	 * Get days of week
	 * @return mixed|void
	 * @access public
	 * @since 1.0
	 */
	public static function get_days_of_week() {
		$timestamp = strtotime( 'next Sunday' );
		$days      = array();
		for ( $i = 0; $i < 7; $i ++ ) {
			$days[]    = strftime( '%A', $timestamp );
			$timestamp = strtotime( '+1 day', $timestamp );
		}

		return apply_filters( 'wd_scan_get_days_of_week', $days );
	}

	/**
	 * Return times frame for selectbox
	 * @access public
	 * @since 1.0
	 */
	public static function get_times() {
		$data = array();
		for ( $i = 0; $i < 24; $i ++ ) {
			foreach ( array( '00', '30' ) as $min ) {
				$time          = $i . ':' . $min;
				$data[ $time ] = apply_filters( 'wd_scan_get_times_hour_min', $time );
			}
		}

		return apply_filters( 'wd_scan_get_times', $data );
	}

}