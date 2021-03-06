<?php
/**
 * Custom column inside the post-list.
 *
 * Uses:
 *   $selected
 *   $wp_registered_sidebars
 *   $post_id
 */

$available = $wp_registered_sidebars;
$sidebars = CustomSidebars::get_options( 'modifiable' );

$is_front = $post_id == get_option( 'page_on_front' );
$is_blog = $post_id == get_option( 'page_for_posts' );

if ( $is_front || $is_blog ) {
	if ( $is_front ) {
		_e( '(Not available for Home-Page)', CSB_LANG );
	} else {
		_e( '(Not available for Blog-Page)', CSB_LANG );
	}
	foreach ( $sidebars as $s ) : ?>
		<span data-sidebar="<?php echo esc_attr( $s ); ?>" data-replaced="<?php echo esc_attr( @$selected[ $s ] ); ?>" data-cshide="yes">
	<?php endforeach;
} else {
	foreach ( $sidebars as $s ) {
		$sb_name = $available[ $s ]['name'];
		$replaced = ! empty( $available[ $selected[ $s ] ] );
		$class = $replaced ? 'cust' : 'def';

		?>
		<div class="<?php echo esc_attr( $class, CSB_LANG ); ?>"
			data-sidebar="<?php echo esc_attr( $s ); ?>"
			data-replaced="<?php echo esc_attr( @$selected[ $s ] ); ?>">
			<small class="cs-key">
				<?php echo esc_html( $sb_name ); ?>
			</small>
			<span class="cs-val">
			<?php if ( $replaced ) : ?>
				<?php echo esc_html( $available[ $selected[ $s ] ]['name'] ); ?>
			<?php else : ?>
				-
			<?php endif; ?>
			</span>
		</div>
		<?php
	}
}