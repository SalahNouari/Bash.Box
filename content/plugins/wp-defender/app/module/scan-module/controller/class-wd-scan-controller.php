<?php

/**
 * @author: Hoang Ngo
 */
class WD_Scan_Controller extends WD_Controller {
	/**
	 * constructor of this controller
	 */
	public function __construct() {
		//define the view template
		$this->template = 'layouts/scan';
		if ( is_multisite() ) {
			$this->add_action( 'network_admin_menu', 'admin_menu', 12 );
		} else {
			$this->add_action( 'admin_menu', 'admin_menu', 12 );
		}
		$this->add_action( 'wp_loaded', 'maybe_schedule_cron' );
		$this->add_action( 'wp_loaded', 'retry_scan' );
		$this->add_action( 'admin_enqueue_scripts', 'load_scripts' );
		$this->add_action( 'wd_scanning_hook', 'process_a_scan' );
		$this->add_action( 'wd_scan_completed', 'remove_history' );
		/**
		 * ajax stuff
		 */
		$this->add_ajax_action( 'wd_query_scan_progress', 'check_status' );
		$this->add_ajax_action( 'wd_start_a_scan', 'start_a_scan' );
		$this->add_ajax_action( 'wd_cancel_scan', 'cancel_scan' );
	}

	/**
	 * Pause/continue a scan
	 */
	public function cancel_scan() {
		if ( ! WD_Utils::check_permission() ) {
			return;
		}

		if ( ! wp_verify_nonce( WD_Utils::http_post( 'wd_scan_nonce' ), 'wd_cancel_scan' ) ) {
			return;
		}

		$model = WD_Scan_Api::get_active_scan();

		if ( is_object( $model ) ) {
			//remove cronjob
			wp_clear_scheduled_hook( 'wd_scanning_hook' );
			WD_Scan_Api::clear_cache();
			wp_delete_post( $model->id, true );
			$this->unlock();
		}
		wp_send_json( array(
			'status' => 1,
			'url'    => network_admin_url( 'admin.php?page=wdf-scan' )
		) );
	}

	/**
	 * change status of current scan to ongoing
	 */
	public function retry_scan() {
		if ( @$_SERVER['REQUEST_METHOD'] != 'POST' ) {
			return;
		}

		if ( ! WD_Utils::check_permission() ) {
			return;
		}

		if ( ! wp_verify_nonce( WD_Utils::http_post( 'wd_scan_nonce' ), 'wd_retry_scan' ) ) {
			return;
		}

		$model = WD_Scan_Api::get_last_scan();
		if ( is_object( $model ) && $model->status == WD_Scan_Result_Model::STATUS_ERROR ) {
			$model->status  = WD_Scan_Result_Model::STATUS_PROCESSING;
			$model->message = __( "Continuing...", wp_defender()->domain );
			$model->save();
			//force to check again
		}
		$this->unlock();
		$this->maybe_schedule_cron();

		$url = network_admin_url( 'admin.php?page=wdf-scan' );
		wp_redirect( $url );
		exit;
	}

	/**
	 * maybe we can schedule a scan
	 */
	public function maybe_schedule_cron() {
		if ( $this->is_ajax() ) {
			return;
		}

		//we dont queue if we in ajax

		if ( wp_get_schedule( 'wd_scanning_hook' ) ) {
			//already queued, just return
			return;
		}

		$maybe_process = false;
		//check the cache

		if ( get_option( 'wd_scan_processing' ) ) {
			//we already having a scanning, just move on
			$maybe_process = true;
		} else {
			//we don't have any scan, just check the cache for improve performance
			$last_check = WD_Utils::get_setting( 'cache->last_check_scan_cron' );
			if ( $last_check == false || strtotime( '+15 minutes', $last_check ) < time() ) {
				$maybe_process = true;
				WD_Utils::update_setting( 'cache->last_check_scan_cron', time() );
			}
		}

		if ( $maybe_process ) {
			$model = WD_Scan_Api::get_active_scan();
			if ( is_object( $model ) ) {
				$last_modified = $model->get_raw_post()->post_modified;

				if ( strtotime( '+5 minutes', strtotime( $last_modified ) ) > current_time( 'timestamp' ) ) {
					//no queue
					return;
				}
			}
			if ( wp_get_schedule( 'wd_scanning_hook' ) == false && is_object( $model ) ) {
				if ( is_object( $model ) && in_array( $model->status, array(
						WD_Scan_Result_Model::STATUS_ERROR,
						WD_Scan_Result_Model::STATUS_PAUSE
					) )
				) {
					//don't queue if it is error or pause
					return;
				}
				//currently having a on progress scan, but the cron expired. register one
				wp_schedule_single_event( time(), 'wd_scanning_hook' );
			} elseif (
				wp_get_schedule( 'wd_scanning_hook' ) == false &&
				WD_Utils::get_setting( 'scan->auto_scan' ) == 1 &&
				$this->is_on_time()
			) {
				if ( WD_Scan_Api::create_scan_record() ) {
					wp_schedule_single_event( time(), 'wd_scanning_hook' );
				}
			}
		}
	}

	/**
	 * Determine if we can enqueue a scan
	 *
	 * @param null $current
	 * @param null $last_run
	 *
	 * @return bool|mixed|void
	 */
	public function is_on_time( $current = null, $last_run = null ) {
		$next_run = WD_Scan_Api::calculate_next_run( $last_run );
		if ( is_null( $current ) ) {
			$current = current_time( 'timestamp' );
		}

		if ( $next_run <= $current ) {
			return true;
		}

		return false;
	}

	/**
	 * an ajax to query scanming progress
	 */
	public function check_status() {
		if ( ! WD_Utils::check_permission() ) {
			return;
		}

		if ( ! wp_verify_nonce( WD_Utils::http_post( 'wd_scan_nonce' ), 'query_scan_progress' ) ) {
			return;
		}
		ob_start();
		//clear cache
		//if we has any cron, remove it immediatly
		wp_clear_scheduled_hook( 'wd_scanning_hook' );
		//processing a scan here
		$this->process_a_scan();
		//the rest should act normal

		$model = WD_Scan_Api::get_active_scan( true );
		if ( ! is_object( $model ) ) {
			$model = WD_Scan_Api::get_last_scan();
		} else {
			$model->save();
		}
		ob_clean();
		//trigger
		$progress = get_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT ) == false ? 0 : get_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT );
		$alert    = get_site_transient( WD_Scan_Api::ALERT_NESTED_WP );
		/*if ( $alert ) {
			$alert = implode( '<br/>', $alert );
		} else {
			$alert = 0;
		}*/
		$md5_alert = get_site_transient( WD_Scan_Api::ALERT_NO_MD5 );
		wp_send_json( array(
			'progress'  => $progress,
			'message'   => $model->message,
			'complete'  => $model->status == WD_Scan_Result_Model::STATUS_COMPLETE,
			'error'     => $model->status == WD_Scan_Result_Model::STATUS_ERROR,
			'scanned'   => $this->scanned_to_html( true ),
			'alert'     => $alert,
			'md5_alert' => $md5_alert
		) );
	}

	/**
	 * @return string
	 */
	public function scanned_to_html( $raw = false ) {
		$cached = get_option( WD_Scan_Api::CACHE_SCANNED );
		$cached = explode( '|', $cached );
		$cached = array_filter( $cached );
		//the newest on top
		//$cached = array_slice( array_reverse( $cached ), 0, 100 );

		if ( $raw == true ) {
			return $cached;
		}

		return implode( '<br/>', $cached );
	}

	/**
	 * Process a scan
	 * @return bool
	 */
	public function process_a_scan() {
		set_time_limit( - 1 );
		ini_set( 'memory_limit', - 1 );
		//open a memory stream
		$this->open_mem_stream();

		$model = WD_Scan_Api::get_active_scan( true );

		if ( ! is_object( $model ) ) {
			//todo loging
			return false;
		}

		if ( $this->is_lock() == false ) {
			$this->maybe_lock();
		} else {
			//sometime, the server get halt, and the lock never unlock, we need to check the last time
			//a scan happen to determine if we need to force unlock
			$last_updated = $model->get_raw_post()->post_modified;
			//if the last time is about 20 mins, ignore the lock
			if ( strtotime( '+20 minutes', strtotime( $last_updated ) ) < current_time( 'timestamp' ) ) {
				$this->log( 'lock take so long, ignore', self::ERROR_LEVEL_DEBUG, 'lock' );
			} else {
				$this->log( 'you should not be here again, locked', self::ERROR_LEVEL_DEBUG, 'lock' );

				return;
			}
		}

		if ( strlen( trim( $model->current_action ) ) == 0 ) {
			//clear cache first
			if ( get_option( 'wd_scan_processing' ) != $model->id ) {
				$this->log( 'only first time, this shouldt appear 2 times in a scan' );
				update_option( 'wd_scan_processing', $model->id );
				WD_Scan_Api::clear_cache();
				set_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT, 0 );
			}
		}

		//order is priority
		$scans = array(
			'WD_Vulndb_Scan',
			'WD_Core_Integrity_Scan',
			'WD_Suspicious_Scan',
		);

		if ( empty( $scans ) ) {
			return;
		}
		//filter the scans first
		$all_files  = array();
		$scan_class = array();
		foreach ( $scans as $key => $class ) {
			$scan = new $class();
			if ( get_site_transient( WD_Scan_Api::CACHE_SCAN_PERCENT ) == 0 ) {
				/*$model->message = sprintf( __( "Gathering information for %s", wp_defender()->domain ), $scan->name );
				$model->save();*/
			}
			//cache
			if ( $scan->is_enabled == false ) {
				//this rule need dhasboard, but not install, remove it
				unset( $scans[ $key ] );
				continue;
			}

			$scan_class[ $class ] = $scan;
			if ( is_array( $scan->files_need_scan ) ) {
				$all_files = array_merge( $scan->files_need_scan, $all_files );
			}
		}

		$scans = array_values( $scans );
		if ( strlen( trim( $model->current_action ) ) == 0 ) {
			//new record
			$model->current_action = $scans[0];
			$model->total_files    = count( $all_files );
			$model->current_index  = 0;
			$model->execute_time   = array(
				'start' => current_time( 'timestamp' )
			);
			$model->save();
			$this->maybe_lock( $model );
		}

		//now we got the data, run it
		foreach ( $scans as $key => $class ) {
			if ( ! is_object( $model ) ) {

			}

			if ( $class != $model->current_action || ! isset( $scan_class[ $class ] ) ) {
				continue;
			}
			$this->log( 'scan ' . $class );
			$scan      = $scan_class[ $class ];
			$next_step = isset( $scans[ $key + 1 ] ) ? $scans[ $key + 1 ] : null;
			if ( $this->is_ajax() && property_exists( $scan, 'chunk_size' ) ) {
				//beacuse we based on ajax, so we reduce the chunk
				$scan->chunk_size = 100;
			}
			$scan->process( $model, $next_step );
			//refresh $model
			$model = WD_Scan_Api::get_active_scan();
			if ( is_null( $next_step ) &&
			     ( ( $model->current_index >= ( $model->total_files - 1 ) ) ||
			       //this case for rules doesn't have files number
			       ( $model->current_index == $model->total_files && $model->total_files == 0 ) ||
			       ( get_site_transient( WD_Suspicious_Scan::CACHE_INDEX ) + get_site_transient( WD_Core_Integrity_Scan::CACHE_INDEX ) >= $model->total_files )
			     )
			) {
				//complete
				$model->status = WD_Scan_Result_Model::STATUS_COMPLETE;
				$this->unlock();
				$model->execute_time['end']     = current_time( 'timestamp' );
				$model->execute_time['end_utc'] = time();
				$model->save();
				delete_option( 'wd_scan_processing' );
				//flag it
				$this->dump_log_from_mem();
				WD_Utils::flag_for_submitting();
				do_action( 'wd_scan_completed', $model );
			}
			$this->log( 'done scan ' . $class );
		}
		$this->dump_log_from_mem();
		//release lock
		$this->unlock();
		$this->maybe_schedule_cron();
	}

	/**
	 * use ajax to create a scan record
	 */
	public function start_a_scan() {
		if ( ! WD_Utils::check_permission() ) {
			return;
		}

		if ( ! wp_verify_nonce( WD_Utils::http_post( 'wd_scan_nonce' ), 'wd_start_a_scan' ) ) {
			return;
		}
		WD_Scan_Api::clear_cache();
		$scan = WD_Scan_Api::create_scan_record();

		if ( ! is_wp_error( $scan ) ) {
			//setup a cronjob
			//wp_schedule_single_event( time(), 'wd_scanning_hook' );
			wp_send_json( array(
				'status'       => 1,
				'redirect_url' => network_admin_url( 'admin.php?page=wdf-scan' )
			) );
		} else {
			wp_send_json( array(
				'status' => 0,
				'error'  => $scan->get_error_message()
			) );
		}
	}

	/**
	 * Lock the scanning process
	 */
	protected function maybe_lock( $model = null ) {
		if ( is_null( $model ) ) {
			$model = WD_Scan_Api::get_active_scan();
		}
		if ( ! is_object( $model ) ) {
			//nos can here, just return
			$this->unlock();

			return;
		}

		if ( strlen( trim( $model->current_action ) ) == 0 ) {
			//model has'nt settle, just return,and unlock if some lock here
			$this->unlock();

			return;
		}
		$this->log( 'locking', self::ERROR_LEVEL_DEBUG, 'lock' );
		//now lock
		update_site_option( 'wd_scan_lock', 1 );
	}

	protected function unlock() {
		$this->log( 'unlock', self::ERROR_LEVEL_DEBUG, 'lock' );
		delete_site_option( 'wd_scan_lock' );
	}

	protected function is_lock() {
		return get_site_option( 'wd_scan_lock', false ) == 1;
	}

	/**
	 * Only keep one record at time
	 *
	 * @param $model
	 */
	public function remove_history( $model ) {
		$models = WD_Scan_Result_Model::model()->find_all( array(), false, 1, array(
			'post__not_in' => array( $model->id )
		) );

		if ( is_array( $models ) && count( $models ) ) {
			foreach ( $models as $item ) {
				wp_delete_post( $item->id, true );
			}
		}
	}

	/**
	 * check if this page is page of the plugin
	 * @return bool
	 */
	private function is_in_page() {
		$screen = get_current_screen();
		if ( is_object( $screen ) && in_array( $screen->id, array(
				'defender_page_wdf-scan',
				'defender_page_wdf-scan-network'
			) )
		) {
			return true;
		}

		return false;
	}

	/**
	 * Check if in right page, then load assets
	 */
	public function load_scripts() {
		if ( $this->is_in_page() ) {
			wp_localize_script( 'wp-defender', 'wd_scanning', array(
				'show_log'                  => __( "Show Log", wp_defender()->domain ),
				'hide_log'                  => __( "Hide Log", wp_defender()->domain ),
				'ignore_confirm_msg'        => __( "Just a reminder, by ignoring this file Defender will leave it alone and won't warn you about it again unless it changes. You can add it back to the issues list any time.", wp_defender()->domain ),
				'delete_confirm_msg'        => __( "Deleting this file will remove it from your WordPress installation. Make sure you have a backup of your website before continuing, doing this could break your website.", wp_defender()->domain ),
				'delete_plugin_confirm_msg' => __( "Deleting this plugin will remove it from your WordPress installation. Make sure you have a backup of your website before continuing.", wp_defender()->domain ),
				'delete_theme_confirm_msg'  => __( "Deleting this theme will remove it from your WordPress installation. Make sure you have a backup of your website before continuing.", wp_defender()->domain ),
				'cancel_confirm_btn'        => __( "Cancel", wp_defender()->domain ),
				'delete_confirm_btn'        => __( "Delete", wp_defender()->domain ),
				'ignore_confirm_btn'        => __( "Ignore", wp_defender()->domain ),
			) );
			WDEV_Plugin_Ui::load( wp_defender()->get_plugin_url() . 'shared-ui/', false );
			wp_enqueue_style( 'wp-defender' );
			wp_enqueue_script( 'wp-defender' );
			wp_enqueue_script( 'wd-confirm' );
			wp_enqueue_script( 'jquery-effects-highlight' );

		}
	}

	/**
	 * Register admin menu
	 */
	public function admin_menu() {
		$cap = is_multisite() ? 'manage_network_options' : 'manage_options';
		add_submenu_page( 'wp-defender', __( "Scan", wp_defender()->domain ), __( "Scan", wp_defender()->domain ), $cap, 'wdf-scan', array(
			$this,
			'display_main'
		) );
	}

	/**
	 * Display the html content
	 */
	public function display_main() {
		if ( WD_Utils::http_get( 'wdf-action', null ) == 'new_scan' ) {
			WD_Scan_Api::create_scan_record();
		}

		$scans = WD_Scan_Result_Model::model()->find_all( array(), 2, 1, array(
			'order'   => 'DESC',
			'orderby' => 'ID'
		) );
		if ( count( $scans ) == 0 ) {
			//haven't scan anything, show the no scan
			$this->render( 'scan/_no_scan', array(), true );
		} else {
			$model = WD_Scan_Api::get_active_scan();
			if ( is_object( $model ) ) {
				$args['model'] = $model;
				//scanning
				$this->render( 'scan/_scanning', $args, true );
			} else {

				//load recents scan
				$model               = WD_Scan_Api::get_last_scan();
				$args['model']       = $model;
				$args['res']         = $model->get_results();
				$args['ignore_list'] = $model->get_ignore_list();
				if ( $model->status == WD_Scan_Result_Model::STATUS_ERROR ) {
					$this->template = false;
					$this->render( 'scan/_scan_error', $args, true );
				} else {
					$this->render( 'scan/_scan_report', $args, true );
				}
			}
		}
	}
}