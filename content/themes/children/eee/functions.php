<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Epic Encore Entertainment	' );
define( 'CHILD_THEME_URL', 'http://www.lakesareadesign.com/' );

// Enable HTML5 markup
add_theme_support( 'html5' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Set Genesis Responsive Slider defaults */
add_filter( 'genesis_responsive_slider_settings_defaults', 'lad_responsive_slider_defaults' );
function lad_responsive_slider_defaults( $defaults ) {
	$defaults['slideshow_height'] = '300';
	$defaults['slideshow_width'] = '950';
	return $defaults;
}

// Add new image sizes
add_image_size('Home 3', 350, 160, TRUE);
add_image_size('Home 2', 550, 220, TRUE);

/** Reposition the primary navigation */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

/** Customize the entire footer */
add_action('wp_footer', 'go_to_top');
	function go_to_top() { ?>
	    <script type="text/javascript">
	        jQuery(function($) {
	            $('a.top').click(function() {
	                $('html, body').animate({scrollTop:0}, 'slow');
	                return false;
	            });
	        });
	    </script>
	<?php }

	add_filter( 'genesis_footer_output', 'lad_footer_output', 10, 3 );
	function lad_footer_output( $creds ) {
		$creds ='<a href="#" class="top">Return to top of page</a><div class="creds"><p>Copyright © 2013 · <a href="http://www.lakesareadesign.com/" title="Lakes Area Design">Lakes Area Design</a></p></div>';
	return $creds;
	}

// Added security
//remove_action('wp_head', 'wp_generator');
//add_filter('login_errors',create_function('$a', "return null;"));

/*
////// Remove the page titles

add_action( 'get_header', 'child_remove_page_titles' );
function child_remove_page_titles() {
    if ( is_page() && ! is_page_template( 'page_blog.php' ) )
        remove_action( 'genesis_post_title', 'genesis_do_post_title' );
} */
 
/** Register widget areas */
genesis_register_sidebar( array(
	'id'			=> 'home-welcome',
	'name'			=> __( 'Home Welcome', 'lad' ),
	'description'	=> __( 'This is the welcome section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-slider',
	'name'			=> __( 'Home Slider', 'lad' ),
	'description'	=> __( 'This is the slider section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-main',
	'name'			=> __( 'Home main', 'lad' ),
	'description'	=> __( 'This is the main section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home left', 'lad' ),
	'description'	=> __( 'This is the left 3 col section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-middle',
	'name'			=> __( 'Home middle', 'lad' ),
	'description'	=> __( 'This is the middle 3 col section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home right', 'lad' ),
	'description'	=> __( 'This is the right 3 col section of the homepage.', 'lad' ),
) );