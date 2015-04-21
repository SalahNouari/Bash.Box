<?php

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'agency', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'agency' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Lakes Area Design V.2.0', 'agency' ) );
define( 'CHILD_THEME_URL', 'http://www.lakesareadesign.com/' );
define( 'CHILD_THEME_VERSION', '2.0.0' );

//* Add support for custom login
add_action('login_head', 'custom_login_css');
function custom_login_css() {
	wp_enqueue_style( 'login_head', get_stylesheet_directory_uri(). '/login/login-styles.css' );
}

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Zack Lieble for Mayor';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue EB Garamond and Spinnaker Google fonts
add_action( 'wp_enqueue_scripts', 'agency_google_fonts' );
function agency_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=EB+Garamond|Spinnaker', array(), CHILD_THEME_VERSION );
	
}

//* Enqueue Backstretch script and prepare images for loading
add_action( 'wp_enqueue_scripts', 'agency_enqueue_backstretch_scripts' );
function agency_enqueue_backstretch_scripts() {

	//* Load scripts only if custom background is being used
	if ( ! get_background_image() )
		return;

	wp_enqueue_script( 'agency-pro-backstretch', get_bloginfo( 'stylesheet_directory' ) . '/js/backstretch.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_script( 'agency-pro-backstretch-set', get_bloginfo( 'stylesheet_directory' ).'/js/backstretch-set.js' , array( 'jquery', 'agency-pro-backstretch' ), '1.0.0' );

	wp_localize_script( 'agency-pro-backstretch-set', 'BackStretchImg', array( 'src' => str_replace( 'http:', '', get_background_image() ) ) );

}

//* Add new image sizes
add_image_size( 'home-bottom', 380, 150, TRUE );
add_image_size( 'home-middle', 380, 380, TRUE );

//* Add support for custom background
add_theme_support( 'custom-background', array( 'wp-head-callback' => 'agency_background_callback' ) ); 

//* Add custom background callback for background color
function agency_background_callback() {

    if ( ! get_background_color() )
        return;

    printf( '<style>body { background-color: #%s; }</style>' . "\n", get_background_color() );

}

// POST SPECIFIC FUNCTIONS 
/** adding POST format support  */
add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ));
/** adding support for POST format images */
add_theme_support( 'genesis-post-format-images' );
/** Customize the POST info function */
add_filter( 'genesis_post_info', 'post_info_filter' );
function post_info_filter($post_info) {
if (!is_page()) {
    $post_info = '[post_date] by [post_author_posts_link] &middot; [post_comments] [post_edit]';
    return $post_info;
}}
/** Customize the POST meta function */
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

// Editor Styles
add_editor_style( /*'editor-style.css'*/ ); //Pulls from the child theme styles.css unless otherwise stated

/** Remove the page titles */
add_action( 'get_header', 'child_remove_page_titles' );
function child_remove_page_titles() {
    if ( is_page() && ! is_page_template( 'page_blog.php' ) )
        remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
}

// Remove Unused User Settings and Add Custom Contact Methods
remove_action( 'show_user_profile', 'genesis_user_options_fields' );
remove_action( 'edit_user_profile', 'genesis_user_options_fields' );
remove_action( 'show_user_profile', 'genesis_user_archive_fields' );
remove_action( 'edit_user_profile', 'genesis_user_archive_fields' );
remove_action( 'show_user_profile', 'genesis_user_seo_fields' );
remove_action( 'edit_user_profile', 'genesis_user_seo_fields' );
remove_action( 'show_user_profile', 'genesis_user_layout_fields' );
remove_action( 'edit_user_profile', 'genesis_user_layout_fields' );

// CUSTOMIZING GENESIS *******************************
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

//* Add support for custom header
/*
add_theme_support( 'custom-header', array(
	'header_image'    => '',
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'height'          => 60,
	'width'           => 300,
) );*/

//* Add support for additional color style options
add_theme_support( 'genesis-style-selector', array(
	'agency-pro-blue'   => __( 'Agency Pro Blue', 'agency' ),
	'agency-pro-green'  => __( 'Agency Pro Green', 'agency' ),
	'agency-pro-orange' => __( 'Agency Pro Orange', 'agency' ),
	'agency-pro-red'    => __( 'Agency Pro Red', 'agency' ),
) );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Reposition the header
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
add_action( 'genesis_before', 'genesis_header_markup_open', 5 );
add_action( 'genesis_before', 'genesis_do_header', 10 );
add_action( 'genesis_before', 'genesis_header_markup_close', 15 );

// FOOTER AREA ***************************************
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

add_filter( 'genesis_footer_creds_text', 'lad_footer_creds_text' );
function lad_footer_creds() {
}

add_filter( 'genesis_footer_output', 'lad_footer_output', 10, 3 );
function lad_footer_output() {
	echo '<a href="#" class="top">Return to top of page</a>';
	echo '<p>';
	echo 'Copyright &copy; ';
	echo date('Y');
	echo ' &middot; <a href="http://www.lakesareadesign.com/" title="Lakes Area Design">Lakes Area Design</a>';
	echo '</p>';
}

//* Remove Genesis in-post SEO Settings
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );
//* Remove Genesis SEO Settings menu link
remove_theme_support( 'genesis-seo-settings-menu' );

//* Remove the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home Top', 'agency' ),
	'description' => __( 'This is the top section of the homepage.', 'agency' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-middle',
	'name'        => __( 'Home Middle', 'agency' ),
	'description' => __( 'This is the middle section of the homepage.', 'agency' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-bottom',
	'name'        => __( 'Home Bottom', 'agency' ),
	'description' => __( 'This is the bottom section of the homepage.', 'agency' ),
) );
