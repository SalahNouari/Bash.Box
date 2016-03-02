<?php
if ( $res['count'] > 0 ) {
	?>
	<div class="wd-error">
		<img class="float-l" src="<?php echo wp_defender()->get_plugin_url() ?>assets/img/shield.png"/>
		<span>
			<?php printf( __( "You have <strong>%s files</strong> needing urgent attention!", wp_defender()->domain ), $res['count'] ) ?>
		</span>
	</div><br/>
	<table id="wd-scan-result-table" width="100%">
		<tbody>
		<tr>
			<td width="40%">
				<?php _e( "WordPress Core Integrity", wp_defender()->domain ) ?>
			</td>
			<td width="40%" class="tc wd-count">
				<?php
				if ( $res['core_integrity'] > 0 ) {
					$suffix = ( $res['core_integrity'] > 1 ? 's' : null );
					printf( __( "%s issue%s", wp_defender()->domain ), $res['core_integrity'], $suffix );
				}
				?>
			</td>
			<td width="20%" class="tc">
				<?php
				if ( $res['core_integrity'] > 0 ) {
					echo '<a href="' . network_admin_url( 'admin.php?page=wdf-scan' ) . '" class="button button-small button-light">' . __( "Fix Issue", wp_defender()->domain ) . '</a>';
				} else {
					echo '<i class="dev-icon dev-icon-radio_checked"></i>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td width="40%">
				<?php _e( "Plugins & Themes vulnerability", wp_defender()->domain ) ?>
			</td>
			<td width="40%" class="tc wd-count">
				<?php
				if ( $res['vulndb'] > 0 ) {
					$suffix = ( $res['vulndb'] > 1 ? 's' : null );
					printf( __( "%s issue%s", wp_defender()->domain ), $res['vulndb'], $suffix );
				}
				?>
			</td>
			<td width="20%" class="tc">
				<?php
				if ( $res['vulndb'] > 0 ) {
					echo '<a href="' . network_admin_url( 'admin.php?page=wdf-scan' ) . '" class="button button-small button-light">' . __( "Fix Issue", wp_defender()->domain ) . '</a>';
				} else {
					echo '<i class="dev-icon dev-icon-radio_checked"></i>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td width="40%">
				<?php _e( "Suspicious Code", wp_defender()->domain ) ?>
			</td>
			<td width="40%" class="tc wd-count">
				<?php
				if ( $res['file_suspicious'] > 0 ) {
					$suffix = ( $res['file_suspicious'] > 1 ? 's' : null );
					printf( __( "%s issue%s", wp_defender()->domain ), $res['file_suspicious'], $suffix );
				}
				?>
			</td>
			<td width="20%" class="tc">
				<?php
				if ( $res['file_suspicious'] > 0 ) {
					echo '<a href="' . network_admin_url( 'admin.php?page=wdf-scan' ) . '" class="button button-small button-light">' . __( "Fix Issue", wp_defender()->domain ) . '</a>';
				} else {
					echo '<i class="dev-icon dev-icon-radio_checked"></i>';
				}
				?>
			</td>
		</tr>
		</tbody>
	</table>
	<div class="clearfix"></div>
	<hr/>
	<?php
} else {
	?>
	<div class="wd-success tl">
		<i class="dev-icon dev-icon-radio_checked"></i>
		<?php _e( "No malware or harmful code detected.", wp_defender()->domain ) ?>
	</div>
	<?php
}