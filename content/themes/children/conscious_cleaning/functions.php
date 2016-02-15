<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'expose', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'expose' ) );

//* Add Accent color to customizer
require_once( get_stylesheet_directory() . '/lib/customize.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Expose Pro Theme', 'expose' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/expose/' );
define( 'CHILD_THEME_VERSION', '2.1' );

//* Enqueue Google Fonts and JS scripts
add_action( 'wp_enqueue_scripts', 'expose_enqueue_scripts' );
function expose_enqueue_scripts() {
	
	wp_enqueue_script( 'ms-responsive-menu', esc_url( get_stylesheet_directory_uri() ) . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'expose-sticky-message', esc_url( get_stylesheet_directory_uri() ) . '/js/sticky-message.js', array( 'jquery' ), '1.0.0' );

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), PARENT_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background', array(
	'default-image' => get_stylesheet_directory_uri() . '/images/bg.png',
	'default-color' => 'eee',
) );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'default-image'   => get_stylesheet_directory_uri() . '/images/logo.png',
	'width'           => 300,
	'height'          => 300,
	'flex-width'      => false,
	'flex-height'     => false,
	'header-selector' => '.site-title a',
	'header-text'     => false,
) );

//* Add support for additional color styles
add_theme_support( 'genesis-style-selector', array(
	'expose-pro-blue'  => __( 'Expose Pro Blue', 'expose' ),
	'expose-pro-green' => __( 'Expose Pro Green', 'expose' ),
	'expose-pro-pink'  => __( 'Expose Pro Pink', 'expose' ),
	'expose-pro-teal'  => __( 'Expose Pro Teal', 'expose' )
) );

//* Add support for post formats
add_theme_support( 'post-formats', array(
	'gallery',
	'link',
	'quote'
) );

//* Unregister layout settings
genesis_unregister_layout( 'content-sidebar' );
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

//* Unregister sidebars
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );

//* Force full-width-content layout setting
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Hook sticky message before site header
add_action( 'genesis_before', 'expose_sticky_message' );
function expose_sticky_message() {

	genesis_widget_area( 'sticky-message', array(
		'before' => '<div class="sticky-message">',
		'after'  => '</div>',
	) );

}

// //* Remove the header right widget area
// unregister_sidebar( 'header-right' );

//* Rename menus
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Left Navigation Menu', 'modern-studio' ), 'secondary' => __( 'Right Navigation Menu', 'modern-studio' ) ) );

//* Hook menus
add_action( 'genesis_after_header', 'expose_menus_container' );
function expose_menus_container() {

	echo '<div class="navigation-container">';
	do_action( 'expose_menus' );
	echo '</div>';
	
}

//* Relocate Primary (Left) Navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'expose_menus', 'genesis_do_nav' );

//* Relocate Secondary (Right) Navigation
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'expose_menus', 'genesis_do_subnav' );

//* Remove output of primary navigation right extras
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

//* Hook welcome message widget area before content
add_action( 'genesis_before_loop', 'expose_welcome_message' );
function expose_welcome_message() {

	if ( ! is_front_page() || get_query_var( 'paged' ) >= 2 )
		return;

	genesis_widget_area( 'welcome-message', array(
		'before' => '<div class="welcome-message widget-area">',
		'after'  => '</div>',
	) );

}

//* Remove elements with post formats
add_action( 'genesis_before_entry', 'expose_remove_elements' );
function expose_remove_elements() {
	
	//* Remove if post has format
	if ( get_post_format() ) {
	
		add_filter( 'genesis_pre_get_option_content_archive', 'expose_format_content' );
		add_filter( 'genesis_pre_get_option_content_archive_limit', 'expose_content_limit' );
		add_filter( 'genesis_pre_get_option_content_archive_thumbnail', '__return_false' );
		remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
		
	}
	//* Add back, as post has no format
	else {
	
		remove_filter( 'genesis_pre_get_option_content_archive', 'expose_format_content' );
		remove_filter( 'genesis_pre_get_option_content_archive_limit', 'expose_content_limit' );
		remove_filter( 'genesis_pre_get_option_content_archive_thumbnail', '__return_false' );
		add_action( 'genesis_entry_header', 'genesis_do_post_title' );
		add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		add_action( 'genesis_entry_footer', 'genesis_post_meta' );
		add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
		
	}

}

function expose_format_content() {
	return 'full';
}

function expose_content_limit() {
	return '0';
}

//* Remove the entry header
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//* Customize the entry meta in the entry footer
add_filter( 'genesis_post_meta', 'sp_post_meta_filter' );
function sp_post_meta_filter( $post_meta ) {
	$post_meta = '[post_date] [post_author_posts_link] [post_categories before=""] [post_comments]';
	return $post_meta;
}

//* Add post pagination
add_action( 'genesis_entry_footer', 'genesis_prev_next_post_nav' );

//* Modify the size of the Gravatar in the author box
add_filter( 'genesis_author_box_gravatar_size', 'expose_author_box_gravatar' );
function expose_author_box_gravatar( $size ) {

	return 140;

}

//* Modify the size of the Gravatar in the entry comments
add_filter( 'genesis_comment_list_args', 'expose_comments_gravatar' );
function expose_comments_gravatar( $args ) {

	$args['avatar_size'] = 100;
	return $args;

}

//* Add edit link below entries on single post pages
add_action( 'genesis_entry_content', 'expose_edit_link' );
	function expose_edit_link() {
	if ( is_single() ) {
		edit_post_link( __( '(Edit)', 'expose' ), '<p>', '</p>' );
	}
}

//* Add Oops! to 404 page
add_action( 'genesis_loop', 'expose_404_page', 9 );
	function expose_404_page() {
	if ( is_404() ) {
		echo '<div class="oops-404"><p>' . __( 'Oops!', 'expose' ) . '</p></div>';
	}
}

//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'expose_remove_comment_form_allowed_tags' );
function expose_remove_comment_form_allowed_tags( $defaults ) {
	
	$defaults['comment_notes_after'] = '';
	return $defaults;

}

//* Add support for 2-column footer widgets
add_theme_support( 'genesis-footer-widgets', 2 );

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

//* Relocate after entry widget
remove_action( 'genesis_after_entry', 'genesis_after_entry_widget_area' );
add_action( 'genesis_after_entry', 'genesis_after_entry_widget_area', 5 );

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'sticky-message',
	'name'        => __( 'Sticky Message', 'modern-studio' ),
	'description' => __( 'Widgets in this section will display as a sticky message at the top of pages.', 'modern-studio' ),
) );
genesis_register_sidebar( array(
	'id'          => 'welcome-message',
	'name'        => __( 'Welcome Message', 'modern-studio' ),
	'description' => __( 'Widgets in this section will display above posts at the top of the home page.', 'modern-studio' ),
) );
