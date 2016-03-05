<?php

/**
 * @author: Hoang Ngo
 */
class WD_Resolve_Controller extends WD_Controller {

	public function __construct() {
		$this->add_ajax_action( 'wd_resolve_result', 'resolve_result' );
	}

	public function resolve_result() {
		if ( ! WD_Utils::check_permission() ) {
			return;
		}

		if ( ! wp_verify_nonce( WD_Utils::http_post( 'wd_resolve_nonce' ), 'wd_resolve' ) ) {
			return;
		}

		$model = WD_Scan_Api::get_last_scan();
		$id    = WD_Utils::http_post( 'id' );
		$item  = $model->find_result_item( $id );
		if ( ! is_object( $item ) ) {
			wp_send_json( array(
				'status' => 0,
				'error'  => __( "Can't not find the issue needing to be fixed.", wp_defender()->domain )
			) );
		}
		$type = WD_Utils::http_post( 'type' );
		switch ( $type ) {
			case 'delete':
				//ability to undo
				$ret = $item->remove();
				if ( is_wp_error( $ret ) ) {
					wp_send_json( array( 'status' => 0, 'error' => $ret->get_error_message() ) );
				}
				WD_Utils::flag_for_submitting();
				wp_send_json( array( 'status' => 1 ) );
				break;
			case 'clean':
				//for now every clean will just return instruction (string)
				$result = $item->clean();
				wp_send_json( array(
					'status' => 1,
					'result' => $result
				) );
				break;
			case 'ignore':
				$ignore_list         = $model->ignore_files;
				$ignore_list[]       = $id;
				$model->ignore_files = $ignore_list;

				$model->save();
				$element = $this->get_ignored_item_html( $item );
				WD_Utils::flag_for_submitting();
				wp_send_json( array(
					'status'  => 1,
					'element' => $element
				) );
				break;
			case 'undo':
				$ignore_list = $model->ignore_files;
				$key         = array_search( $id, $ignore_list );
				if ( $key !== false ) {
					unset( $ignore_list[ $key ] );
					$model->ignore_files = $ignore_list;
					$model->save();
					WD_Utils::flag_for_submitting();
					wp_send_json( array(
						'status'  => 1,
						'element' => $this->get_item_html( $item )
					) );
				}
				break;
		}
		wp_send_json( array(
			'status' => 0
		) );
	}

	private function get_ignored_item_html( $item ) {
		ob_start();
		?>
		<tr>
			<td width="30%" class="file-path">
				<strong><?php echo esc_html( $item->get_name() ) ?></strong>
				<span><?php echo esc_html( $item->get_sub() ) ?></span>
			</td>
			<td width="15%" class="issue-type"><?php echo esc_html( $item->get_type() ); ?></td>
			<td width="45%"><?php echo wp_kses( $item->get_detail(), WD_Utils::allowed_html() ) ?></td>
			<td width="10%" class="wd-report-actions">
				<form method="post" class="wd-resolve-frm">
					<input type="hidden" name="action" value="wd_resolve_result">
					<?php wp_nonce_field( 'wd_resolve', 'wd_resolve_nonce' ) ?>
					<input type="hidden" value="<?php esc_attr( get_class( $item ) ) ?>" name="class">
					<input type="hidden" name="id" value="<?php echo esc_attr( $item->id ) ?>"/>

					<div class="wd-button-group">
						<button data-type="undo"
						        tooltip="<?php esc_attr_e( "Undo", wp_defender()->domain ) ?>"
						        type="submit" class="button button-light button-small">
							<i class="wdv-icon wdv-icon-undo"></i>
						</button>
						<?php if ( $item->can_delete() ): ?>
							<?php
							$tooltip     = $item->delete_tooltip;
							$confirm_key = $item->delete_confirm_text; ?>
							<button data-type="delete"
							        data-confirm="<?php echo esc_attr( $confirm_key ) ?>"
							        data-confirm-button="<?php echo 'delete_confirm_btn' ?>"
							        tooltip="<?php echo esc_attr( $tooltip ) ?>"
							        type="submit" class="button button-light button-small">
								<i class="wdv-icon wdv-icon-trash"></i>
							</button>
						<?php else: ?>
							<button data-type="delete"
							        tooltip="<?php esc_attr_e( "Delete", wp_defender()->domain ) ?>"
							        type="button" disabled
							        class="button button-light button-small">
								<i class="wdv-icon wdv-icon-trash"></i>
							</button>
						<?php endif; ?>
					</div>
				</form>
			</td>
		</tr>
		<?php
		return ob_get_clean();
	}

	private function get_item_html( $item ) {
		ob_start();
		?>
		<tr data-type="<?php echo esc_attr( $item->get_system_type() ) ?>">
			<td width="30%" class="file-path">
				<strong><?php echo esc_html( $item->get_name() ) ?></strong>
				<span><?php echo esc_html( $item->get_sub() ) ?></span>
			</td>
			<td width="15%" class="issue-type"><?php echo esc_html( $item->get_type() ); ?></td>
			<td width="45%"
			    class="issue-detail"><?php echo wp_kses( $item->get_detail(), WD_Utils::allowed_html() ) ?></td>
			<td width="10%" class="wd-report-actions">
				<form method="post" class="wd-resolve-frm">
					<input type="hidden" name="action" value="wd_resolve_result">
					<?php wp_nonce_field( 'wd_resolve', 'wd_resolve_nonce' ) ?>
					<input type="hidden" value="<?php esc_attr( get_class( $item ) ) ?>"
					       name="class">
					<input type="hidden" name="id" value="<?php echo esc_attr( $item->id ) ?>"/>

					<div class="wd-button-group">
						<button data-type="clean"
						        tooltip="<?php esc_attr_e( "Resolve Issue", wp_defender()->domain ) ?>"
						        type="submit" class="button button-light button-small">
							<i class="wdv-icon wdv-icon-wrench"></i>
						</button>
						<?php if ( $item->can_ignore() ): ?>
							<button data-type="ignore"
							        tooltip="<?php esc_attr_e( "False alarm? Ignore it", wp_defender()->domain ) ?>"
							        data-confirm="<?php echo 'ignore_confirm_msg' ?>"
							        data-confirm-button="<?php echo 'ignore_confirm_btn' ?>"
							        type="submit" class="button button-light button-small">
								<i class="wdv-icon wdv-icon-fw wdv-icon-ban-circle"></i>
							</button>
						<?php endif; ?>
						<?php if ( $item->can_delete() ): ?>
							<?php
							$tooltip     = $item->delete_tooltip;
							$confirm_key = $item->delete_confirm_text; ?>
							<button data-type="delete"
							        data-confirm="<?php echo esc_attr( $confirm_key ) ?>"
							        data-confirm-button="<?php echo 'delete_confirm_btn' ?>"
							        tooltip="<?php echo esc_attr( $tooltip ) ?>"
							        type="submit" class="button button-light button-small">
								<i class="wdv-icon wdv-icon-trash"></i>
							</button>
						<?php else: ?>
							<button data-type="delete"
							        tooltip="<?php esc_attr_e( "Delete", wp_defender()->domain ) ?>"
							        type="button" disabled
							        class="button button-light button-small">
								<i class="wdv-icon wdv-icon-trash"></i>
							</button>
						<?php endif; ?>
					</div>
				</form>
			</td>
		</tr>
		<?php
		return ob_get_clean();
	}
}