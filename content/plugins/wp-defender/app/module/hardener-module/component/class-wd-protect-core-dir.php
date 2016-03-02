<?php
/**
 * Class: WD_Protect_Core_Dir
 */

/**
 * @author: Hoang Ngo
 */
class WD_Protect_Core_Dir extends WD_Hardener_Abstract {
	const BROWSER_LISTING = 'browser_listing', PROTECT_HTACCESS = 'protect_htaccess',
		PREVENT_PHP_ACCESS = 'prevent_php_access', WPINCLUDE_EXCLUDE = 'exclude_file',
		PROTECT_ENUM = 'protect_enum';

	public function on_creation() {
		$this->id         = 'protect_core_dir';
		$this->title      = __( 'Prevent Information Disclosure', wp_defender()->domain );
		$this->can_revert = true;

		$this->add_action( 'admin_footer', 'print_scripts' );
		$this->add_ajax_action( $this->generate_ajax_action( 'apply_htaccess' ), 'process' );
	}

	/**
	 * @return bool
	 */
	public function check( $force = false ) {
		global $is_apache, $is_nginx;

		//get from cache maybe
		if ( isset( $this->check_cache ) && ! $force ) return $this->check_cache;

		//actually do a real check that these are inaccessible. User browser UA to bypass firewalls
		$content_indexing = wp_remote_head( plugins_url( '/', __FILE__ ), array( 'user-agent' => $_SERVER['HTTP_USER_AGENT'] ) );
		$htaccess = wp_remote_head( plugins_url( 'wp-defender/vault/.htaccess' ), array( 'user-agent' => $_SERVER['HTTP_USER_AGENT'] ) );
		if ( 200 == wp_remote_retrieve_response_code( $content_indexing ) || 200 == wp_remote_retrieve_response_code( $htaccess ) ) {
			$this->check_cache = false;
			return $this->check_cache;
		}

		if ( $is_nginx ) {
			/**
			 * In nginx, we can't determine the rule. So user need to manually check
			 *
			 */
			$this->check_cache = WD_Utils::get_setting( $this->get_setting_key( 'nginx_rule' ) ) == 1;
		} elseif ( $is_apache ) {
			$this->check_cache = $this->check_content_protected() && $this->check_include_protected();
		}

		return $this->check_cache;
	}

	public function process() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( WD_Utils::is_nginx() ) {
			if ( ! $this->verify_nonce( 'nginx_resolved' ) ) {
				return;
			}

			if ( WD_Utils::get_setting( $this->get_setting_key( 'nginx_rule' ) ) ) {
				WD_Utils::update_setting( $this->get_setting_key( 'nginx_rule' ), 0 );
				wp_send_json( array(
					'status'  => 1,
					'revert'  => 1,
					'element' => $this->nginx_output()
				) );
			} else {
				WD_Utils::update_setting( $this->get_setting_key( 'nginx_rule' ), 1 );
				wp_send_json( array(
					'status'  => 1,
					'done'    => 1,
					'element' => $this->nginx_output()
				) );
			}
		} else {
			if ( ! $this->verify_nonce( 'apply_htaccess' ) ) {
				return;
			}

			$type = WD_Utils::http_post( 'type', null );
			if ( $type == 'wp_content' ) {
				$this->protect_content();
			} elseif ( $type == 'revert_wp_content' ) {
				$this->revert_wp_content();
			} elseif ( $type == 'wp_include' ) {
				$this->protect_include();
			} elseif ( $type == 'revert_wp_include' ) {
				$this->revert_wp_include();
			}
		}
	}

	/**
	 * Apply a htacces file inside wp-content folder, to prevent
	 * 1. Browser listing (usually we got a index.php, however, another layer stll worth)
	 * 2. Prevent directly access to php file
	 * 3. Prevent any access to htaccess file
	 *
	 * @access public
	 * @since 1.0
	 */
	public function protect_content( $htaccess_path = null ) {
		if ( is_null( $htaccess_path ) ) {
			$htaccess_path = WP_CONTENT_DIR . DIRECTORY_SEPARATOR . '.htaccess';
		}
		if ( ! file_exists( $htaccess_path ) ) {
			$files = array();
			//all empty in this case, we just create ours
			$files[] = '## WP Defender - Prevent information disclosure ##';
			$files[] = $this->create_rule( self::BROWSER_LISTING );
			$files[] = $this->create_rule( self::PROTECT_HTACCESS );
			$files[] = $this->create_rule( self::PROTECT_ENUM );
			$files[] = '## WP Defender - End ##';
			//now just put this
			if ( file_put_contents( $htaccess_path, implode( PHP_EOL, $files ) ) ) {
				if ( $this->check() ) {
					$this->after_processed();
				}
				wp_send_json( array(
					'status'  => 1,
					'element' => $this->get_protect_wp_content_html(),
					'done'    => $this->check(),
				) );
			} else {
				$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
			}
		} else {
			//this case, rarely jump in, but still
			$content  = file( $htaccess_path );
			$will_add = array();
			if ( $this->check_rule( $content, self::BROWSER_LISTING ) == false ) {
				$will_add[] = $this->create_rule( self::BROWSER_LISTING );
			}
			if ( $this->check_rule( $content, self::PROTECT_HTACCESS ) == false ) {
				$will_add[] = $this->create_rule( self::PROTECT_HTACCESS );
			}
			if ( $this->check_rule( $content, self::PROTECT_ENUM ) == false ) {
				$will_add[] = $this->create_rule( self::PROTECT_ENUM );
			}
			if ( count( $will_add ) ) {
				$will_add   = array_merge( array( '## WP Defender - Prevent information disclosure ##' ), $will_add );
				$will_add[] = '## WP Defender - End ##';
				$content    = array_merge( $content, $will_add );
			}
			$content = implode( PHP_EOL, $content );
			//remove duplciate new line
			$content = preg_replace( "/\n+/", "\n", $content );

			if ( file_put_contents( $htaccess_path, $content ) ) {
				if ( $this->is_ajax() ) {
					if ( $this->check() ) {
						$this->after_processed();
					}

					wp_send_json( array(
						'status'  => 1,
						'element' => $this->get_protect_wp_content_html(),
						'done'    => $this->check(),
					) );
				} else {
					return true;
				}
			} else {
				$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
			}
		}
	}

	public function protect_include( $htaccess_path = null ) {
		if ( is_null( $htaccess_path ) ) {
			$htaccess_path = ABSPATH . WPINC . DIRECTORY_SEPARATOR . '.htaccess';
		}
		if ( ! file_exists( $htaccess_path ) ) {
			$files = array();
			//all empty in this case, we just create ours
			$files[] = '## WP Defender - Prevent information disclosure ##';
			$files[] = $this->create_rule( self::BROWSER_LISTING );
			$files[] = $this->create_rule( self::PROTECT_HTACCESS );
			$files[] = $this->create_rule( self::PROTECT_ENUM );
			$files[] = '## WP Defender - End ##';
			//now just put this
			if ( file_put_contents( $htaccess_path, implode( PHP_EOL, $files ) ) ) {
				if ( $this->is_ajax() ) {
					if ( $this->check() ) {
						$this->after_processed();
					}
					wp_send_json( array(
						'status'  => 1,
						'done'    => $this->check(),
						'element' => $this->get_protect_wp_include_html()
					) );
				} else {
					return true;
				}
			} else {
				$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
			}
		} else {
			//this case, rarely jump in, but still
			$content  = file( $htaccess_path );
			$will_add = array();
			if ( $this->check_rule( $content, self::BROWSER_LISTING ) == false ) {
				$will_add[] = $this->create_rule( self::BROWSER_LISTING );
			}
			if ( $this->check_rule( $content, self::PROTECT_HTACCESS ) == false ) {
				$will_add[] = $this->create_rule( self::PROTECT_HTACCESS );
			}
			if ( $this->check_rule( $content, self::PROTECT_ENUM ) == false ) {
				$will_add[] = $this->create_rule( self::PROTECT_ENUM );
			}
			if ( count( $will_add ) ) {
				$will_add   = array_merge( array( '## WP Defender - Prevent information disclosure ##' . PHP_EOL ), $will_add );
				$will_add[] = '## WP Defender - End' . PHP_EOL;
				$content    = array_merge( $content, $will_add );
			}

			$content = implode( PHP_EOL, $content );
			//remove duplciate new line
			$content = preg_replace( "/\n+/", "\n", $content );

			if ( file_put_contents( $htaccess_path, $content ) ) {
				if ( $this->is_ajax() ) {
					if ( $this->check() ) {
						$this->after_processed();
					}

					wp_send_json( array(
						'status'  => 1,
						'done'    => $this->check(),
						'element' => $this->get_protect_wp_include_html()
					) );
				} else {
					return true;
				}
			} else {
				$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
			}
		}
	}

	/**
	 * Revert the htaccess inside wp-content folder to original, if only changes from this plugin, we will remove it
	 */
	public function revert_wp_content() {
		$htaccess_path = WP_CONTENT_DIR . DIRECTORY_SEPARATOR . '.htaccess';
		//we need to check what rules applied here
		$content = file( $htaccess_path );

		//we will get all the const here
		$class  = new ReflectionClass( __CLASS__ );
		$consts = $class->getConstants();
		foreach ( $consts as $const ) {
			if ( $const == self::WPINCLUDE_EXCLUDE ) {
				continue;
			}

			$rule = $this->get_rules( $const );
			if ( ! empty( $rule ) ) {
				if ( ( $indexer = $this->check_rule( $content, $const ) ) !== false ) {
					//need to get the rule block, and unset it
					list( $first, $last ) = $indexer;
					//var_dump( $indexer );
					if ( $first == $last ) {
						$content[ $first ] = '';
					} else {
						for ( $i = $first; $i <= $last; $i ++ ) {
							$content[ $i ] = '';
						}
					}
				}
			}
		}
		$content = array_map( 'trim', $content );
		$content = array_filter( $content );

		$can_revert = false;
		if ( $this->check() ) {
			$can_revert = true;
		}
		if ( empty( $content ) ) {
			//nothing here, just remove the file
			if ( unlink( $htaccess_path ) ) {
				wp_send_json( array(
					'status'  => 1,
					'revert'  => $can_revert,
					'element' => $this->get_protect_wp_content_html()
				) );
			}
		}

		if ( file_put_contents( $htaccess_path, implode( PHP_EOL, $content ) ) ) {
			wp_send_json( array(
				'status'  => 1,
				'revert'  => $can_revert,
				'element' => $this->get_protect_wp_content_html()
			) );
		} else {
			$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
		}
	}

	/**
	 *
	 */
	public function revert_wp_include() {
		$htaccess_path = ABSPATH . WPINC . DIRECTORY_SEPARATOR . '.htaccess';
		//we need to check what rules applied here
		$content = file( $htaccess_path );

		//we will get all the const here
		$class  = new ReflectionClass( __CLASS__ );
		$consts = $class->getConstants();
		foreach ( $consts as $const ) {
			$rule = $this->get_rules( $const );
			if ( ! empty( $rule ) ) {
				if ( ( $indexer = $this->check_rule( $content, $const ) ) !== false ) {
					//need to get the rule block, and unset it
					list( $first, $last ) = $indexer;
					//var_dump( $indexer );
					if ( $first == $last ) {
						$content[ $first ] = '';
					} else {
						for ( $i = $first; $i <= $last; $i ++ ) {
							$content[ $i ] = '';
						}
					}
				}
			}
		}
		$content    = array_map( 'trim', $content );
		$content    = array_filter( $content );
		$can_revert = false;
		if ( $this->check() ) {
			$can_revert = true;
		}
		if ( empty( $content ) ) {
			//nothing here, just remove the file
			if ( unlink( $htaccess_path ) ) {
				wp_send_json( array(
					'status'  => 1,
					'element' => $this->get_protect_wp_include_html(),
					'revert'  => $can_revert
				) );
			}
		}

		if ( file_put_contents( $htaccess_path, implode( PHP_EOL, $content ) ) ) {
			wp_send_json( array(
				'status'  => 1,
				'element' => $this->get_protect_wp_include_html(),
				'revert'  => $can_revert
			) );
		} else {
			$this->output_error( 'write_permission', __( "Can't write to the file %s", wp_defender()->domain ) );
		}
	}

	/**
	 * This will check the content of htaccess file, and see if we missing any rules
	 *
	 * @return bool
	 */
	public function check_content_protected() {
		$htaccess_path = WP_CONTENT_DIR . DIRECTORY_SEPARATOR . '.htaccess';
		if ( file_exists( $htaccess_path ) ) {
			//case the htaccess already exist
			//we will need to load and check if the htaccess already having right
			$htaccess = file( $htaccess_path );
			if ( $this->check_rule( $htaccess, self::BROWSER_LISTING ) == false ) {
				return false;
			}
			if ( $this->check_rule( $htaccess, self::PROTECT_HTACCESS ) == false ) {
				return false;
			}
			if ( $this->check_rule( $htaccess, self::PROTECT_ENUM ) == false ) {
				return false;
			}

		} else {
			//no htaccess here, this folder havent protected
			return false;
		}

		return true;
	}


	public function check_include_protected() {
		$htaccess_path = ABSPATH . WPINC . DIRECTORY_SEPARATOR . '.htaccess';
		if ( file_exists( $htaccess_path ) ) {
			$htaccess = file( $htaccess_path );

			if ( $this->check_rule( $htaccess, self::BROWSER_LISTING ) == false ) {
				return false;
			}
			if ( $this->check_rule( $htaccess, self::PROTECT_HTACCESS ) == false ) {
				return false;
			}
			if ( $this->check_rule( $htaccess, self::PROTECT_ENUM ) == false ) {
				return false;
			}
		} else {
			//no htaccess here, this folder havent protected
			return false;
		}

		return true;
	}

	/**
	 * We will create htaccess rule
	 *
	 * @param $rule
	 *
	 * @return string
	 * @since 1.0
	 */
	public function create_rule( $rule ) {
		return implode( PHP_EOL, $this->get_rules( $rule ) );
	}

	/**
	 * This function check the rule given to current htaccess content, and see if the rules applied.
	 *
	 * @param $content
	 * @param $rule
	 *
	 * @return bool
	 * @since 1.0
	 */
	//todo update to regex
	public function check_rule( $content, $rule ) {
		$rules      = self::get_rules( $rule );
		$true_count = 0;
		$ret        = false;
		$first      = 0;
		$end        = 0;

		foreach ( $content as $key => $line ) {
			$line = trim( $line );

			if ( $true_count == 0 && stristr( $line, $rules[ $true_count ] ) !== false ) {
				//we catch the first line for the rule
				$true_count += 1;
				$first = $key;
				//some rule only have one line, need to check
				if ( count( $rules ) == 1 ) {
					//this rule only have one line, jump out
					$ret = true;
					$end = $key;
					break;
				}
				//next line
				continue;
			}

			if ( $true_count > 0 && empty( $line ) ) {
				//we accept break line
				continue;
			}

			if ( $true_count > 0 && stristr( $line, $rules[ $true_count ] ) === false ) {
				//we need to reset the order
				$true_count = 0;
				continue;
			}

			if ( $true_count > 0 && stristr( $line, $rules[ $true_count ] ) !== false ) {
				//find the next line,
				//first need to check, if this is the last line of this rule
				$end = $key;
				if ( count( $rules ) - 1 == $true_count ) {
					//yeah, jump out
					$ret = true;
					break;
				}
				$true_count += 1;
				continue;
			}
		}


		if ( $ret == false ) {
			return false;
		} else {
			return array( $first, $end );
		}
	}

	/**
	 * Htaccess rules bank
	 * @todo add wp-config protection like in nginx
	 *
	 * @param $scenario
	 *
	 * @return array
	 */
	protected function get_rules( $scenario ) {
		switch ( $scenario ) {
			case self::BROWSER_LISTING:
				return array(
					'Options -Indexes'
				);
				break;
			case self::PROTECT_HTACCESS:
				return array(
					'<FilesMatch "^\.">',
					'Order allow,deny',
					'Deny from all',
					'</FilesMatch>',
					//'<DirectoryMatch "^\.|\/\.">',
					//'Order allow,deny',
					//'Deny from all',
					//'</DirectoryMatch>'
				);
			case self::PROTECT_ENUM:
				return array(
					'<FilesMatch "\.(txt|md|exe|sh|bak|inc|pot|po|mo|log|sql)$">',
					'Order allow,deny',
					'Deny from all',
					'</FilesMatch>',
				);
			case self::PREVENT_PHP_ACCESS:
				return array(
					'<Files *.php>',
					'Order allow,deny',
					'Deny from all',
					'</Files>',
				);
			case self::WPINCLUDE_EXCLUDE:
				return array(
					'<Files wp-tinymce.php>',
					'Allow from all',
					'</Files>',
					'<Files ms-files.php>',
					'Allow from all',
					'</Files>'
				);
				break;
			default:
				return apply_filters( $this->id . '/htaccess_rules', array() );
		}
	}

	/**
	 * print javascripts for ajax form
	 */
	public function print_scripts() {
		?>
		<script type="text/javascript">
			jQuery(function ($) {
				$('body').on('click', '#protect_core_dir_frm input[type=submit]', function () {
					$('#protect_core_dir_frm').find('input[type=submit]').removeAttr('clicked');
					$(this).attr('clicked', true);
				});
				$('body').on('submit', '#protect_core_dir_frm', function () {
					var that = $(this);
					var parent = $(this).closest('.wd-hardener-rule');
					var data = that.serialize();

					var clicked = that.find("input[type=submit][clicked=true]");
					data += '&type=' + clicked.attr('name');

					$.ajax({
						type: 'POST',
						'url': ajaxurl,
						data: data,
						beforeSend: function () {
							clicked.attr('disabled', 'disabled').css({
								'cursor': 'progress'
							});
						},
						success: function (data) {
							if (data.status == 0) {
								clicked.removeAttr('disabled').css({
									'cursor': 'pointer'
								});
								$('#protect_core_dir .wd-error').html(data.error).removeClass('wd-hide');
							} else {
								$('#protect_core_dir .wd-error').html('').addClass('wd-hide');
								if (data.element != undefined) {
									clicked.closest('.group').replaceWith(data.element);
								}
								if (data.done == 1) {
									parent.hide(500, function () {
										var div = parent.detach();
										div.prependTo($('.wd-hardener-success'));
										div.find('.rule-title').removeClass('issue').addClass('fixed').find('button').hide();
										div.show(500);
									})
								}

								if (data.revert == 1) {
									parent.hide(500, function () {
										$('.hardener-error-container').removeClass('wd-hide');
										var div = parent.detach();
										div.appendTo($('.wd-hardener-error'));
										div.find('.rule-title').removeClass('fixed').addClass('issue').find('button').show();
										div.show(500, function () {
											/*$('html, body').animate({
											 scrollTop: div.find('.rule-title').offset().top
											 }, 1000);*/
										});
									})
								}
							}
						}
					});
					return false;
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

				<p><?php _e( "Often servers are incorrectly configured, and can allow an attacker to get access to sensitive information that can be used in attacks. WP Defender can help you prevent that disclosure.", wp_defender()->domain ) ?></p>

				<h4 class="tl"><?php _e( "How To Fix", wp_defender()->domain ) ?></h4>

				<div class="wd-error wd-hide">

				</div>
				<?php if ( WD_Utils::is_nginx() ) {
					echo $this->nginx_output();
				} else {
					$this->apache_output();
				} ?>

			</div>
		</div>
		<?php
	}

	/**
	 * If the server is nginx, we will output an instruction
	 */
	private function nginx_output() {
		ob_start();

		//get proper paths relative to document root for this virtualhost
		$wp_content = str_replace( $_SERVER['DOCUMENT_ROOT'], '', WP_CONTENT_DIR );

		$rules = "# Turn off directory indexing
autoindex off;

# Deny access to htaccess and other hidden files
location ~ /\. {
  deny  all;
}

# Deny access to wp-config.php file
location = /wp-config.php {
  deny all;
}

# Deny access to revealing or potentially dangerous files in the /wp-content/ directory (including sub-folders)
location ~* ^$wp_content/.*\.(txt|md|exe|sh|bak|inc|pot|po|mo|log|sql)$ {
  deny all;
}
";
		?>
		<div class="group wd-no-margin">
			<p><?php _e( "For NGINX servers:", wp_defender()->domain ) ?></p>
			<ol>
				<li>
					<?php _e( "Copy the generated code into your site specific .conf file usually located in a subdirectory under /etc/nginx/... or /usr/local/nginx/conf/...", wp_defender()->domain ) ?>
				</li>
				<li>
					<?php _e( "Add the code above inside the <strong>server</strong> section in the file, right before the php location block. Looks something like:", wp_defender()->domain ) ?>
					<pre>location ~ \.php$ {</pre>
				</li>
				<li>
					<?php _e( "Reload NGINX.", wp_defender()->domain ) ?>
				</li>
			</ol>
			<p><?php printf( __( "Still having trouble? <a target='_blank' href=\"%s\">Open a support ticket</a>.", wp_defender()->domain ), 'https://premium.wpmudev.org/forums/forum/support#question' ) ?></p>
			<pre>
## WP Defender - Prevent information disclosure ##
<?php echo esc_html( $rules ); ?>
## WP Defender - End ##
			</pre>
			<form method="post" id="protect_core_dir_frm">
				<?php $this->generate_nonce_field( 'nginx_resolved' ) ?>
				<input type="hidden" name="action"
				       value="<?php echo $this->generate_ajax_action( 'apply_htaccess' ) ?>">
				<?php if ( $this->check() ): ?>
					<input type="submit" class="button button-grey"
					       value="<?php esc_attr_e( "Revert", wp_defender()->domain ) ?>"/>
				<?php else: ?>
					<input type="submit" class="button wd-button"
					       value="<?php esc_attr_e( "Mark as resolved", wp_defender()->domain ) ?>"/>
				<?php endif; ?>
			</form>
		</div>
		<?php
		return ob_get_clean();
	}

	/**
	 * If the server is apache, we will output a form for append htaccess
	 */
	private function apache_output() {
		?>
		<div class="wd-well">
			<?php if ( $this->check() ): ?>
				<p>
					<?php _e( "Both directories are protected.", wp_defender()->domain ) ?>
				</p>
			<?php else: ?>
				<p>
					<?php _e( "We will place <strong>.htaccess</strong> files into each of these directories to lock down the files and folders inside.", wp_defender()->domain ) ?>
				</p>
			<?php endif; ?>
			<hr/>
			<form id="protect_core_dir_frm" method="post">
				<?php $this->generate_nonce_field( 'apply_htaccess' ) ?>
				<input type="hidden" name="action"
				       value="<?php echo $this->generate_ajax_action( 'apply_htaccess' ) ?>">

				<?php echo $this->get_protect_wp_content_html() ?>
				<hr/>
				<?php echo $this->get_protect_wp_include_html() ?>
			</form>
		</div>
		<?php
	}

	private function get_protect_wp_content_html() {
		$wp_content = '/'. str_replace( $_SERVER['DOCUMENT_ROOT'], '', WP_CONTENT_DIR );
		ob_start();
		?>
		<div class="group protect-wp-content">
			<div class="col span_6_of_12">
				<?php echo $wp_content; ?>
				<i class="wdv-icon wdv-icon-fw wdv-icon-ok-sign <?php echo $this->check_content_protected() ? '' : 'wd-hide'; ?>"></i>
			</div>
			<div class="col span_6_of_12 tr">
				<?php if ( $this->check_content_protected() ): ?>
					<input type="submit" class="button button-small button-grey"
					       name="revert_wp_content"
					       value="<?php esc_attr_e( "Revert", wp_defender()->domain ) ?>">
				<?php else: ?>
					<input type="submit" class="button button-small wd-button" name="wp_content"
					       value="<?php esc_attr_e( "Add .htaccess file", wp_defender()->domain ) ?>">
				<?php endif; ?>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}

	private function get_protect_wp_include_html() {
		$wp_includes = '/'. str_replace( $_SERVER['DOCUMENT_ROOT'], '', ABSPATH . WPINC );
		ob_start();
		?>
		<div class="group">
			<div class="col span_6_of_12">
				<?php echo $wp_includes; ?>
				<i class="wdv-icon wdv-icon-fw wdv-icon-ok-sign <?php echo $this->check_include_protected() ? '' : 'wd-hide'; ?>"></i>
			</div>
			<div class="col span_6_of_12 tr">
				<?php if ( $this->check_include_protected() ): ?>
					<input type="submit" class="button button-small button-grey"
					       name="revert_wp_include"
					       value="<?php esc_attr_e( "Revert", wp_defender()->domain ) ?>">
				<?php else: ?>
					<input type="submit" class="button button-small wd-button" name="wp_include"
					       value="<?php esc_attr_e( "Add .htaccess file", wp_defender()->domain ) ?>">
				<?php endif; ?>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}

	public function revert() {

	}
}