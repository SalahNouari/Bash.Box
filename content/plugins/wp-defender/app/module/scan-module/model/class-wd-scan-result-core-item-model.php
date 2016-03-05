<?php

/**
 * @author: Hoang Ngo
 */
class WD_Scan_Result_Core_Item_Model extends WD_Scan_Result_Item_Model {
	public $delete_tooltip;
	public $delete_confirm_text;

	public function __wakeup() {
		$this->delete_tooltip      = __( "Delete this file", wp_defender()->domain );
		$this->delete_confirm_text = 'delete_confirm_msg';
	}

	/**
	 * @return mixed
	 */
	public function get_name() {
		return pathinfo( $this->name, PATHINFO_BASENAME );
	}

	public function can_delete() {
		$detail = $this->detail;
		if ( $detail['is_added'] == true ) {
			return true;
		}

		return false;
	}

	/**
	 * @return mixed
	 */
	public function get_sub() {
		return str_replace( ABSPATH, '/', $this->name );
	}

	/**
	 * @return string
	 */
	public function get_detail() {
		$detail = $this->detail;
		if ( $detail['is_added'] == true ) {
			return '<strong>' . esc_html( __( "Unknown file in WordPress core", wp_defender()->domain ) ) . '</strong>';
		} else {
			return '<strong>' . esc_html( __( "This WordPress core file appears modified", wp_defender()->domain ) ) . '</strong>';
		}
	}

	public function can_ignore() {
		return true;
	}

	/**
	 * @return null
	 */
	public function get_type() {
		return WD_Scan_Result_Model::get_system_type_label( WD_Scan_Result_Model::TYPE_CORE );
	}

	/**
	 * @return string
	 */
	public function get_system_type() {
		return WD_Scan_Result_Model::TYPE_CORE;
	}

	/**
	 * @return array
	 */
	public function get_raw_data() {
		return array(
			'file'     => $this->name,
			'type'     => 'core_integrity',
			'behavior' => $this->detail['is_added'] == true ? 'added' : 'modified',
			'date'     => @filemtime( $this->name ),
			'size'     => @filesize( $this->name )
		);
	}

	/**
	 * this will remove the file, and self out of result
	 */
	public function remove() {
		//first we need to unlink the file
		if ( unlink( $this->name ) ) {
			$model = WD_Scan_Api::get_last_scan();

			$model->delete_item_from_result( $this->id );
		} else {
			return new WP_Error( 'cant_unlink', __( "It appears Defender cannot delete these files, tarnation! You should try and delete them yourself via FTP, cPanel file manager or however you access your server, or ask your hosting support to do it for you.", wp_defender()->domain ) );
		}
	}

	/**
	 * this will display the instruction
	 */
	public function clean() {
		/**
		 * case :
		 * 1. modified
		 *  - display date/time when modified, and a link to replacement file.
		 * - if suspicuous found, display strongly recommend
		 * 2. added
		 * -display date/time and size. if suspicious found, display strongly recommend
		 */

		$model  = WD_Scan_Api::get_last_scan();
		$groups = $model->group_result_by_file( $this->name );
		$output = $this->_get_resolve_html_template();
		$output = str_replace(
			array(
				'{{location}}',
				'{{size}}',
				'{{date}}'
			),
			array(
				$this->name,
				$this->convert_size( filesize( $this->name ) ),
				date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), filemtime( $this->name ) )
			),
			$output );

		$error_msg = '';
		if ( count( $groups ) > 1 ) {
			foreach ( $groups as $item_result ) {
				if ( $item_result instanceof WD_Scan_Result_File_Item_Model ) {
					//this mean suspicious found
					$error_msg = __( "Something fishy is going on here. This file isn’t a WordPress core file and has suspicious content. We recommend replacing or isolating it right away!", wp_defender()->domain );
				}
			}
		}
		if ( $this->detail['is_added'] == false ) {
			global $wp_version;
			if ( $this->get_sub() == '/wp-includes/version.php' ) {
				global $wp_version;
				$locale          = get_locale();
				$locale          = explode( '-', $locale );
				$source_file_url = "https://{$locale[0]}.wordpress.org/$wp_version-{$locale[0]}.zip";
				$html            = '<div class="group">';
				$html .= '<div class="col span_12_of_12">';
				$html .= '<p><strong>' . __( "Here’s what you need to do to manually resolve this issue:", wp_defender()->domain ) . '</strong></p>';
				$html .= '<ul>';
				$html .= '<li>' . sprintf( __( "1. Download the source file: <a download target=\"_blank\" href=\"%s\">%s</a>", wp_defender()->domain ), $source_file_url, $source_file_url ) . '</li>';
				$html .= '<li>' . __( "2. Extract the zip file", wp_defender()->domain ) . '</li>';
				$html .= '<li>' . sprintf( __( "2. Find the file <strong>%s</strong>, copy it, and replace this file in your WordPress install: <strong>%s</strong>", wp_defender()->domain ), $this->get_sub(), $this->name ) . '</li>';
				$html .= '</ul>';
				$html .= '</div>';
				$html .= '</div>';
				$output = str_replace( '{{resolve_note}}', $html, $output );
			} else {
				$source_file_url = "http://core.svn.wordpress.org/tags/$wp_version/" . ltrim( $this->get_sub(), '/' );
				$html            = '<div class="group">';
				$html .= '<div class="col span_12_of_12">';
				$html .= '<p><strong>' . __( "Here’s what you need to do to manually resolve this issue:", wp_defender()->domain ) . '</strong></p>';
				$html .= '<ul>';
				$html .= '<li>' . sprintf( __( "1. Download the source file: <a download target=\"_blank\" href=\"%s\">%s</a>", wp_defender()->domain ), $source_file_url, $source_file_url ) . '</li>';
				$html .= '<li>' . sprintf( __( "2. Find the downloaded file, copy it, and replace this file in your WordPress install: <strong>%s</strong>", wp_defender()->domain ), $this->name ) . '</li>';
				$html .= '</ul>';
				$html .= '</div>';
				$html .= '</div>';
				$output = str_replace( '{{resolve_note}}', $html, $output );
			}
		} elseif ( empty( $error_msg ) ) {
			$output = str_replace( '{{resolve_note}}', '<p>' . __( "We found this file floating around in your WordPress file list but it's not required by your current WP Version. As far as we can tell it's harmless (probably from an older WP install) so you can either delete it or ignore it, up to you! (please be sure to make a backup before you do start deleting files).", wp_defender()->domain ) . '</p>', $output );
		} else {
			$error_msg = '<p>' . $error_msg . '</p>';
			$output    = str_replace( '{{resolve_note}}', $error_msg, $output );
		}

		return $output;
	}

	public function check() {
		//we will need to lookpup the md5 each request to check this file content
		$md5 = get_site_transient( 'wd_md5_checksum' );
		if ( $md5 == false ) {
			$md5 = WD_Scan_Api::download_md5_files();
			if ( is_wp_error( $md5 ) ) {
				return false;
			}
			//short cache, as user might update the version anytime
			set_site_transient( 'wd_md5_checksum', $md5, 3600 );
		}

		if ( isset( $md5[ ltrim( $this->get_sub(), '/' ) ] ) ) {
			$hash = $md5[ ltrim( $this->get_sub(), '/' ) ];
			if ( $hash == md5_file( $this->name ) ) {
				$model = WD_Scan_Api::get_last_scan();
				$model->delete_item_from_result( $this->id );
				WD_Utils::flag_for_submitting();

				return true;
			}
		}

		return false;
	}

	private function _get_resolve_html_template() {
		ob_start();
		?>
		<div class="wp-defender">
			<div class="wd-scan-resolve-dialog">
				<div class="group">
					<div class="col span_3_of_12">
						<strong><?php _e( "Location: ", wp_defender()->domain ) ?></strong>
					</div>
					<div class="col span_9_of_12">
						{{location}}
					</div>
				</div>
				<div class="group">
					<div class="col span_3_of_12">
						<strong><?php _e( "Size: ", wp_defender()->domain ) ?></strong>
					</div>
					<div class="col span_9_of_12">
						{{size}}
					</div>
				</div>
				<div class="group">
					<div class="col span_3_of_12">
						<strong><?php echo( $this->detail['is_added'] == true ? __( "Date added: " ) : __( "Date modified:" ) ) ?></strong>
					</div>
					<div class="col span_9_of_12">
						{{date}}
					</div>
				</div>
				<hr/>
				<div>
					{{resolve_note}}
				</div>
				<div class="wd-ignore-cancel">
					<form method="post" class="wd-resolve-frm">
						<input type="hidden" name="action" value="wd_resolve_result">
						<?php wp_nonce_field( 'wd_resolve', 'wd_resolve_nonce' ) ?>
						<input type="hidden" value="<?php echo esc_attr( get_class( $this ) ) ?>" name="class">
						<input type="hidden" name="id" value="<?php echo esc_attr( $this->id ) ?>"/>
						<?php if ( $this->can_ignore() ): ?>
							<button type="submit" data-confirm="<?php echo 'ignore_confirm_msg' ?>"
							        data-confirm-button="<?php echo 'ignore_confirm_btn' ?>" data-type="ignore"
							        class="button button-grey button-small">
								<?php _e( "Ignore File", wp_defender()->domain ) ?>
							</button>&nbsp;
						<?php endif; ?>
						<?php if ( $this->can_delete() ): ?>
							<button data-type="delete" data-confirm-button="<?php echo 'delete_confirm_btn' ?>"
							        data-confirm="<?php echo 'delete_confirm_msg' ?>" type="submit"
							        class="button button-red button-small">
								<?php _e( "Delete File", wp_defender()->domain ) ?>
							</button>
						<?php endif; ?>
					</form>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}