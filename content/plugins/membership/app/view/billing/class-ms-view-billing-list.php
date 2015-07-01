<?php
/**
 * @copyright Incsub (http://incsub.com/)
 *
 * @license http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2 (GPL-2.0)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,
 * MA 02110-1301 USA
 *
*/

/**
 * Renders Billing/Transaction History.
 *
 * Extends MS_View for rendering methods and magic methods.
 *
 * @since 1.0.0
 *
 * @package Membership2
 * @subpackage View
 */
class MS_View_Billing_List extends MS_View {

	/**
	 * Create view output.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public function to_html() {
		$this->check_simulation();

		$buttons = array();

		if ( 'logs' == $_GET['show'] ) {
			$title = __( 'Transaction Logs', MS_TEXT_DOMAIN );

			$listview = MS_Factory::create( 'MS_Helper_ListTable_TransactionLog' );
			$listview->prepare_items();

			$buttons[] = array(
				'type' => MS_Helper_Html::TYPE_HTML_LINK,
				'url' => MS_Controller_Plugin::get_admin_url(
					'billing'
				),
				'value' => __( 'Show Invoices', MS_TEXT_DOMAIN ),
				'class' => 'button',
			);
		} else {
			$title = __( 'Billing', MS_TEXT_DOMAIN );

			$listview = MS_Factory::create( 'MS_Helper_ListTable_Billing' );
			$listview->prepare_items();

			$buttons[] = array(
				'id' => 'add_new',
				'type' => MS_Helper_Html::TYPE_HTML_LINK,
				'url' => MS_Controller_Plugin::get_admin_url(
					'billing',
					array( 'action' => 'edit', 'invoice_id' => 0 )
				),
				'value' => __( 'Add New', MS_TEXT_DOMAIN ),
				'class' => 'button',
			);
			$buttons[] = array(
				'type' => MS_Helper_Html::TYPE_HTML_LINK,
				'url' => MS_Controller_Plugin::get_admin_url(
					'billing',
					array( 'show' => 'logs' )
				),
				'value' => __( 'Show Transaction Logs', MS_TEXT_DOMAIN ),
				'class' => 'button',
			);

			if ( ! empty( $_GET['gateway_id'] ) ) {
				$gateway = MS_Model_Gateway::factory( $_GET['gateway_id'] );
				if ( $gateway->name ) {
					$title .= ' - '. $gateway->name;
				}
			}
		}

		ob_start();
		?>

		<div class="wrap ms-wrap ms-billing">
			<?php
			MS_Helper_Html::settings_header(
				array(
					'title' => $title,
					'title_icon_class' => 'wpmui-fa wpmui-fa-credit-card',
				)
			);
			?>
			<div>
				<?php
				foreach ( $buttons as $button ) {
					MS_Helper_Html::html_element( $button );
				}
				?>
			</div>
			<?php
			$listview->search_box(
				__( 'User', MS_TEXT_DOMAIN ),
				'search'
			);
			$listview->views();
			?>
			<form action="" method="post">
				<?php $listview->display(); ?>
			</form>
		</div>

		<?php
		$html = ob_get_clean();

		return apply_filters(
			'ms_view_billing_list',
			$html,
			$this
		);
	}
}