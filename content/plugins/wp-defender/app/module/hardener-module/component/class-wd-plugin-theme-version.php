<?php
/**
 * Class: WD_Plugin_Theme_Version
 */

/**
 * @author: Hoang Ngo
 */
class WD_Plugin_Theme_Version extends WD_Hardener_Abstract {
	public function on_creation() {
		$this->id         = 'wp_plugin_theme_version';
		$this->title      = __( 'Update plugins & themes to latest versions', wp_defender()->domain );
		$this->can_revert = true;

		$this->add_action( 'admin_footer', 'print_scripts' );
		$this->add_ajax_action( 'wd_get_plugin_changelog', 'get_changelog' );
	}

	/**
	 * @return bool
	 */
	public function check() {
		if ( count( $this->get_plugins_outdate() ) || count( $this->get_themes_outdate() ) ) {
			return false;
		}

		return true;
	}

	public function process() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( ! $this->verify_nonce( 'remove_readme_file' ) ) {
			return;
		}

	}

	/**
	 * We will need to check which plugins outdate and return a list
	 * @return array
	 */
	public function get_plugins_outdate() {
		$plugins = get_site_transient( 'update_plugins' );
		if ( ! $plugins ) {
			wp_update_plugins();
			$plugins = get_site_transient( 'update_plugins' );
		}

		$need_update = array();
		foreach ( $plugins->response as $key => $plugin ) {
			$data = get_plugin_data( WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . $key );
			if ( version_compare( $data['Version'], $plugin->new_version ) == - 1 ) {
				//this case, the version lower than newest
				//this is for wpmudev plugin
				$update_notices = property_exists( $plugin, 'upgrade_notice' ) === true ? $plugin->upgrade_notice : null;
				if ( ! is_array( $update_notices ) ) {
					$update_notices = preg_split( '/<br[^>]*>/i', $update_notices );
				}
				//we only need a strip version
				if ( is_array( $update_notices ) && count( $update_notices ) ) {
					$update_notices = array_shift( $update_notices );
					$update_notices = strip_tags( $update_notices );
					$update_notices = wp_trim_words( $update_notices, apply_filters( $this->id . '/truncate_length', 15 ) );
				}
				$need_update[] = array(
					'name'           => $data['Name'],
					'new_version'    => $plugin->new_version,
					'version'        => $data['Version'],
					'slug'           => $plugin->slug,
					'base'           => $key,
					'update_notices' => $update_notices
				);
			}
		}

		return $need_update;
	}

	/**
	 * This will get the outdate theme
	 * //todo for now, it only can get from wp repo, need to extend it later
	 */
	public function get_themes_outdate() {
		$themes = get_site_transient( 'update_themes' );
		//if last checked lower than 6 hours, we will refresh
		if ( ! $themes ) {
			wp_update_themes();
			$themes = get_site_transient( 'update_themes' );
		}

		$need_update = array();
		foreach ( $themes->response as $key => $theme ) {
			$data = wp_get_theme( $key );
			if ( version_compare( $data->Version, $theme['new_version'] ) == - 1 ) {
				$need_update[] = array(
					'name'        => $data['Name'],
					'new_version' => $theme['new_version'],
					'version'     => $data['Version'],
					'base'        => $key,
					//'update_notices' => $update_notices
				);

			}
		}

		return $need_update;
	}


	/**
	 * @param $slug
	 * @param $base
	 */
	protected function get_plugin_changelog( $slug, $base ) {
		$url = "http://api.wordpress.org/plugins/info/1.0/" . $slug;
		if ( $ssl = wp_http_supports( array( 'ssl' ) ) ) {
			$url = set_url_scheme( $url, 'https' );
		}
		$raw_response = wp_remote_get( $url );
		if ( is_wp_error( $raw_response ) || 200 != wp_remote_retrieve_response_code( $raw_response ) ) {
			return;
		}

		$response = maybe_unserialize( wp_remote_retrieve_body( $raw_response ) );
		//data found on repo
		if ( is_object( $response ) ) {
			$changelog = $response->sections['changelog'];
			/**
			 * the changelog struct will he someting like <h4>version</h4><ul><li></>
			 */
			$pattern = '~<ul>(.*?)</ul>~s';
			preg_match_all( $pattern, $changelog, $matches );
			$latest_changlog = '';
			if ( isset( $matches[1] ) && count( $matches[1] ) ) {
				$latest_changlog = array_shift( $matches[1] );
				//cleanup
				preg_match_all( '~<li>(.*?)</li>~s', $latest_changlog, $matches );
				if ( isset( $matches[1] ) && count( $matches[1] ) ) {
					//we only get first line
					$logs = $matches[1];
					wp_send_json( array(
						'status'  => 1,
						'message' => wp_trim_words( array_shift( $logs ), apply_filters( $this->id . '/truncate_length', 15 ) )
					) );
				}
			}
		}

		wp_send_json( array(
			'status'  => 1,
			'message' => __( "N/A", wp_defender()->domain )
		) );
	}

	public function get_theme_changelog( $slug, $base ) {
		$raw_response = wp_remote_post(
			'http://api.wordpress.org/themes/info/1.0/',
			array(
				'body' => array(
					'action'  => 'theme_information',
					'request' => serialize( (object) array(
						'slug'   => $slug,
						'fields' => array(
							'description' => true
						)
					) )
				)
			)
		);

		if ( is_wp_error( $raw_response ) || 200 != wp_remote_retrieve_response_code( $raw_response ) ) {
			return;
		}

		$response = maybe_unserialize( wp_remote_retrieve_body( $raw_response ) );
		//var_dump( $response );
	}

	/**
	 * Ajax function, to getting plugin change logs
	 */
	public function get_changelog() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( ! $this->verify_nonce( 'wd_get_plugin_changelog' ) ) {
			return;
		}

		$slug = WD_Utils::http_post( 'slug' );
		$type = WD_Utils::http_post( 'type' );
		$base = WD_Utils::http_post( 'base' );
		//must be havin all data, if missing, mean injection or fail plugin
		if ( empty( $slug ) || empty( $type ) || empty( $base ) ) {
			return;
		}

		if ( $type == 'plugin' ) {
			$this->get_plugin_changelog( $slug, $base );
		} elseif ( $type == 'theme' ) {
			$this->get_theme_changelog( $slug, $base );
		}
	}

	public function print_scripts() {
		?>
		<script type="text/javascript">
			jQuery(function ($) {
				$('.wd-plugin-changelog').each(function () {
					var that = $(this);
					$.ajax({
						method: 'POST',
						url: ajaxurl,
						data: {
							action: 'wd_get_plugin_changelog',
							wp_plugin_theme_version_nonce: '<?php echo $this->generate_nonce('wd_get_plugin_changelog') ?>',
							slug: that.data('slug'),
							type: that.data('type'),
							base: that.data('base')
						},
						async: true,
						success: function (data) {
							if (data.status == 1) {
								that.html(data.message);
							}
						}
					})
				})
			})
		</script>
		<?php
	}

	public function display() {
		?>
		<div class="wd-hardener-rule">
			<?php echo $this->get_rule_title(); ?>
			<div class="wd-clearfix"></div>

			<div id="<?php echo $this->id ?>" class="wd-rule-content">
				<h4 class="tl"><?php _e( "Overview", wp_defender()->domain ) ?></h4>

				<p><?php _e( "Updates to plugins and themes often include critical security updates, new features and a happier life for all, so we recommend you stick to the latest versions and update regularly.", wp_defender()->domain ) ?></p>
				<?php if ( ! $this->check() ): ?>
					<?php foreach ( $this->get_plugins_outdate() as $item ): ?>
						<div class="update-nag">
							<div class="group">
								<div class="col span_8_of_12 wd-plugin-info">
									<?php echo $item['name'] ?>
									<div class="wd-plugins-detail">
										v <?php echo $item['new_version'] ?> -
										<?php if ( ! empty( $item['update_notices'] ) ): ?>
										<span data-type="plugin" data-base="<?php echo esc_attr( $item['base'] ) ?>"
										      data-slug="<?php echo esc_attr( $item['slug'] ) ?>">
											<?php echo $item['update_notices'] ?>
											<?php else: ?>
											<span data-type="plugin" data-base="<?php echo esc_attr( $item['base'] ) ?>"
											      data-slug="<?php echo esc_attr( $item['base'] ) ?>"
											      class="wd-plugin-changelog">
										<i class="wdv-icon wdv-icon-fw wdv-icon-refresh dev-spin"></i>
												<?php endif; ?>
										</span>
									</div>
								</div>
								<div class="col span_4_of_12 tr">
									<form action="<?php echo network_admin_url( 'update.php' ) ?>" target="_blank"
									      method="get">
										<?php wp_nonce_field( 'upgrade-plugin_' . $item['base'] ); ?>
										<input type="hidden" name="action" value="upgrade-plugin">
										<input type="hidden" name="plugin" value="<?php echo $item['base'] ?>">
										<button type="submit" class="button button-small button-secondary wd-button">
											<?php _e( "Update", wp_defender()->domain ) ?>
										</button>
									</form>
								</div>
								<div class="wd-clearfix"></div>
							</div>
						</div>
					<?php endforeach; ?>
					<?php foreach ( $this->get_themes_outdate() as $item ): ?>
						<div class="update-nag">
							<div class="group">
								<div class="col span_8_of_12 wd-theme-info">
									<?php echo $item['name'] ?>

									<div class="wd-plugins-detail">
										v <?php echo $item['new_version'] ?>
									</div>
								</div>
								<div class="col span_4_of_12 tr">
									<form action="<?php echo network_admin_url( 'update.php' ) ?>" target="_blank"
									      method="get">
										<?php wp_nonce_field( 'upgrade-theme_' . $item['base'] ); ?>
										<input type="hidden" name="action" value="upgrade-theme">
										<input type="hidden" name="theme" value="<?php echo $item['base'] ?>">
										<button type="submit" class="button button-small button-secondary wd-button">
											<?php _e( "Update", wp_defender()->domain ) ?>
										</button>
									</form>
								</div>
								<div class="wd-clearfix"></div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<div class="wd-clearfix"></div>
				<br/>

				<h4 class="tl"><?php _e( "How To Fix", wp_defender()->domain ) ?></h4>

				<div class="wd-well">
					<?php if ( $this->check() ): ?>
						<?php _e( "All of your plugins & themes are up to date.", wp_defender()->domain ) ?>
					<?php else: ?>
						<p><?php _e( "Update each version individually and be sure to check the changelog in case of major changes. It’s safe practice to update one at a time, and check your website front end for any breakages as you go.", wp_defender()->domain ) ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php
	}

	public function revert() {

	}
}