<?php
/**
 * Class: WD_Error_Log_Scan
 */

/**
 * @author: Hoang Ngo
 */
class WD_Error_Log_Scan extends WD_Hardener_Abstract {
	protected $need_scan;

	public function on_creation() {
		$this->id         = 'error_log_scan';
		$this->title      = __( "Prevent access to log files", wp_defender()->domain );
		$this->can_revert = true;

		$this->add_action( 'admin_footer', 'print_scripts' );
		$this->add_ajax_action( $this->generate_ajax_action( 'remove_error_log' ), 'process' );
		$this->add_ajax_action( $this->generate_ajax_action( 'scan_files' ), 'scan_files' );

		if ( wp_get_schedule( $this->id . 'scan_files' ) == false ) {
			//set schedule
			wp_schedule_event( time(), 'daily', $this->id . 'scan_files' );
		}

		$this->add_action( $this->id . 'scan_files', 'scan_file_cron' );
	}

	/**
	 * @return bool
	 */
	public function check() {
		if ( WD_Utils::get_setting( $this->get_setting_key( 'scan_done' ) ) == true ) {
			return true;
		}

		$last_scan = WD_Utils::get_setting( $this->get_setting_key( 'last_scan_time' ), false );
		if ( $last_scan == false ) {
			$this->need_scan = true;
		}

		//check if the last_scan too old
		$not_older_than = apply_filters( 'hardener/' . $this->id . '/not_older_than', 0.5 );
		if ( time() > strtotime( '+' . $not_older_than . ' minutes', $last_scan ) ) {
			$this->need_scan = true;
		}
		if ( $this->need_scan == true ) {
			//check fail, as we need to scan
			return false;
		}

		return true;
	}

	/**
	 * @param null $base_dir
	 *
	 * @return bool|mixed|void
	 */
	public function find_file( $base_dir = null ) {
		if ( is_null( $base_dir ) ) {
			$base_dir = ABSPATH;
		}

		$tree   = new WD_Dir_Tree( $base_dir, true, false, array(
			'filename' => array(
				'^.*\_log$',
				'^.*\.log$'
			)
		) );
		$lookup = $tree->get_dir_tree();
		$lookup = array_filter( $lookup );

		return $lookup;
	}

	/**
	 * Using ajax to scan files
	 */
	public function scan_files() {
		if ( ! WD_Utils::check_permission()  ) {
			$this->log( 'someone from ip ' . $_SERVER['REMOTE_ADDR'] . ' trying to visit here' );

			return;
		}

		if ( ! $this->verify_nonce( 'scan_files' ) ) {
			return;
		}

		$files = $this->find_file();
		WD_Utils::update_setting( $this->get_setting_key( 'last_scan_time' ), time() );
		//update last_scan time
		if ( count( $files ) ) {
			WD_Utils::update_setting( $this->get_setting_key( 'last_scan_result' ), $files );
			//build html
			$html = $this->display_files( $files );
			//we need to submit data at this time, as this a little bit tricky, we can't place a searc
			//while page load, it will take forever
			WD_Utils::do_submitting( true );
			wp_send_json( array(
				'status' => '0',
				'files'  => $html
			) );
		} else {
			//no find found
			//we need to submit data at this time, as this a little bit tricky, we can't place a searc
			//while page load, it will take forever
			WD_Utils::update_setting( $this->get_setting_key( 'scan_done' ), 1 );
			WD_Utils::do_submitting( true );
			wp_send_json( array(
				'status'  => 1,
				'message' => __( "You don't have any log files", wp_defender()->domain )
			) );
		}
	}

	/**
	 * Scan files in background
	 */
	public function scan_file_cron() {
		$this->log( 'scan in background' );
		$files = $this->find_file();
		WD_Utils::update_setting( $this->get_setting_key( 'last_scan_time' ), time() );
		if ( count( $files ) ) {
			WD_Utils::update_setting( $this->get_setting_key( 'last_scan_result' ), $files );
			WD_Utils::update_setting( $this->get_setting_key( 'scan_done' ), 0 );
		} else {
			WD_Utils::update_setting( $this->get_setting_key( 'scan_done' ), 1 );
		}
	}

	public function print_scripts() {
		?>
		<script type="text/javascript">
			jQuery(function ($) {
				$('body').on('submit', '#error_log_scan_frm', function () {
					var that = $(this);
					var parent = $(this).closest('.wd-hardener-rule');
					$.ajax({
						type: 'POST',
						url: ajaxurl,
						data: that.serialize(),
						beforeSend: function () {
							that.find('button').attr('disabled', 'disabled');
							that.find('button').css({
								'cursor': 'progress'
							});
						},
						success: function (data) {
							that.find('button').removeAttr('disabled');
							that.find('button').css({
								'cursor': 'pointer'
							});

							if (data.status == 0) {
								$('#error_log_scan .wd-error').html(data.error).removeClass('wd-hide');
							} else {
								$('#error_log_scan .wd-error').html('').addClass('wd-hide');
								that.closest('div').html(data.message);
								parent.hide(500, function () {
									var div = parent.detach();
									div.prependTo($('.wd-hardener-success'));
									div.find('.rule-title').removeClass('issue').addClass('fixed').find('button').hide();
									div.show(500);
								})
							}
						}
					})
					return false;
				});
				<?php if($this->need_scan): ?>
				$.ajax({
					type: 'POST',
					data: {
						action: '<?php echo $this->generate_ajax_action('scan_files')?>',
						error_log_scan_nonce: '<?php echo $this->generate_nonce('scan_files') ?>'
					},
					url: ajaxurl,
					success: function (data) {
						if (data.status == 0) {
							$('.file_lists').html(data.files);
						} else {
							$('.file_lists').html(data.message);
						}
					}
				});
				<?php endif; ?>
			})
		</script>
		<?php
	}

	protected function display_files( $files ) {
		ob_start();
		?>
		<form id="error_log_scan_frm" method="post">
			<strong><?php echo sprintf( __( "There are %d log files", wp_defender()->domain ), count( $files ) ) ?></strong>
			<ul>
				<?php foreach ( $files as $file ): ?>
					<li><?php echo $file ?></li>
				<?php endforeach; ?>
			</ul>
			<?php $this->generate_nonce_field( 'remove_error_log' ) ?>
			<input type="hidden" name="action"
			       value="<?php echo $this->generate_ajax_action( 'remove_error_log' ) ?>">
			<button type="submit" class="button wd-button">
				<?php _e( "Remove All", wp_defender()->domain ) ?>
			</button>
		</form>
		<?php
		return ob_get_clean();
	}

	public function process() {
		if ( ! WD_Utils::check_permission()  ) {
			return;
		}

		if ( ! $this->verify_nonce( 'remove_error_log' ) ) {
			return;
		}

		foreach ( $this->find_file() as $file ) {
			if ( ! unlink( $file ) ) {
				$this->log( 'cant remove file ' . $file );
				$this->output_error( 'cant_remove_file', sprintf( __( "Can't remove log file %s", wp_defender()->domain ), $file ) );
			}
		}

		//update the scan done
		WD_Utils::update_setting( $this->get_setting_key( 'scan_done' ), 1 );
		$this->after_processed();
		wp_send_json( array(
			'status'  => 1,
			'message' => __( "There are no log files.", wp_defender()->domain )
		) );
	}

	public function display() {
		?>
		<div class="wd-hardener-rule">
			<?php echo $this->get_rule_title(); ?>
			<div class="wd-clearfix"></div>

			<div id="<?php echo $this->id ?>" class="wd-rule-content">
				<h4 class="tl"><?php _e( "Overview", wp_defender()->domain ) ?></h4>

				<p><?php _e( "When developing websites locally, it is common to keep log files to help debug your installation. On a public website, however, these same files can provide hackers with valuable information about your site's vulnerabilities. We recommend preventing access to these files.", wp_defender()->domain ) ?></p>

				<h4 class="tl"><?php _e( "How To Fix", wp_defender()->domain ) ?></h4>

				<div class="wd-error wd-hide">

				</div>
				<div class="wd-well">
					<?php if ( $this->check() ): ?>
						<?php _e( "We did't detect any log files.", wp_defender()->domain ) ?>
					<?php else: ?>
						<?php if ( $this->need_scan ): ?>
							<div class="file_lists">
								<p>
									<i class="wdv-icon wdv-icon-fw wdv-icon-refresh spin"></i>
									<?php _e( "Scanning for log files, this can take a while", wp_defender()->domain ) ?>
								</p>
							</div>
						<?php else: ?>
							<?php
							$files = WD_Utils::get_setting( $this->get_setting_key( 'last_scan_result' ) );
							echo $this->display_files( $files );
							?>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php
	}

	public function revert() {

	}
}