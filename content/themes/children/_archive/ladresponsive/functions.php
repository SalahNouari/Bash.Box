<?php
/** Start the engine */
require_once( TEMPLATEPATH . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Lakes Area Design V2' );
define( 'CHILD_THEME_URL', 'www.lakesareadesign.com' );

$content_width = apply_filters( 'content_width', 590, 410, 910 );

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'lad_viewport_meta_tag' );
function lad_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** My custom background addition */
add_action('wp_footer', 'add_bg_images_div');
function add_bg_images_div () {
  echo '<div id="wave"></div>','<div id="low-bg"></div>';
}
/* Remove unnecessary query tags from scripts & stylesheets in header */
function _remove_script_version( $src ){
$parts = explode( '?', $src );
//return str_replace("http://maps.google.com/maps/api/js","http://maps.google.com/maps/api/js?sensor=false&ver=3.5.1", $parts[0]);
return str_replace("http://maps.google.com/maps/api/js","", $parts[0]);
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

// super easy way to move javascript to footer
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

/** Add new image sizes */
add_image_size( 'home-featured', 280, 100, TRUE );
add_image_size( 'home-other', 300, 250, TRUE );

/** Add product post type support for Geneiss layouts */
add_theme_support( 'genesis-connect-woocommerce' );
add_post_type_support( 'product', 'genesis-layouts' );

/** Set Genesis Responsive Slider defaults */
add_filter( 'genesis_responsive_slider_settings_defaults', 'lad_responsive_slider_defaults' );
function lad_responsive_slider_defaults( $defaults ) {
	$defaults['slideshow_height'] = '300';
	$defaults['slideshow_width'] = '950';
	return $defaults;
}

/** Relocate breadcrumbs */
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_breadcrumbs' );

/** Customize the post info function */
add_filter( 'genesis_post_info', 'post_info_filter' );
function post_info_filter($post_info) {
if (!is_page()) {
    $post_info = '[post_date] by [post_author_posts_link] &middot; [post_comments] [post_edit]';
    return $post_info;
}}
	
/** Customize the post meta function */
add_filter( 'genesis_post_meta', 'post_meta_filter' );
function post_meta_filter($post_meta) {
if (!is_page()) {
    $post_meta = '[post_categories before="Filed Under: "] &middot; [post_tags before="Tagged: "]';
    return $post_meta;
}}

/** Modify the size of the Gravatar in the author box */
add_filter( 'genesis_author_box_gravatar_size', 'lad_author_box_gravatar_size' );
function lad_author_box_gravatar_size($size) {
    return '78';
}

// Added security
remove_action('wp_head', 'wp_generator');
add_filter('login_errors',create_function('$a', "return null;"));

////// Remove the page titles
add_action( 'get_header', 'child_remove_page_titles' );
function child_remove_page_titles() {
    if ( is_page() && ! is_page_template( 'page_blog.php' ) )
        remove_action( 'genesis_post_title', 'genesis_do_post_title' );
}

/** Customize the entire footer */
add_filter( 'genesis_footer_output', 'child_footer_output', 10, 3 );
function child_footer_output( $output, $backtotop_text, $creds_text ) {
    return '<div class="gototop"><p><a href="#wrap" rel="nofollow">Return to top of page</a></p></div><div class="creds"><p>Copyright © 2013 · <a href="http://www.lakesareadesign.com/" title="Lakes Area Design">Lakes Area Design</a></p></div>';
}

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

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
	'id'			=> 'home-1',
	'name'			=> __( 'Home 1', 'lad' ),
	'description'	=> __( 'This is the left 2 col section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-2',
	'name'			=> __( 'Home 2', 'lad' ),
	'description'	=> __( 'This is the right 2 col section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-full',
	'name'			=> __( 'Home Full', 'lad' ),
	'description'	=> __( 'This is the full width section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home Left', 'lad' ),
	'description'	=> __( 'This is the left section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-middle',
	'name'			=> __( 'Home Middle', 'lad' ),
	'description'	=> __( 'This is the middle section of the homepage.', 'lad' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home Right', 'lad' ),
	'description'	=> __( 'This is the right section of the homepage.', 'lad' ),
) );