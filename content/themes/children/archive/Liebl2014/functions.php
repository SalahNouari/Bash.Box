<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'going-green', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'going-green' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Going Green Pro Theme', 'going-green' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/goinggreen/' );
define( 'CHILD_THEME_VERSION', '3.0.1' );

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
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue Google fonts
add_action( 'wp_enqueue_scripts', 'going_green_google_fonts' );
function going_green_google_fonts() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Lato:300,700|Lora:700', array(), CHILD_THEME_VERSION );
}

//* Add new image sizes
add_image_size( 'featured-image', 900, 440, true );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for additional color style options
add_theme_support( 'genesis-style-selector', array(
	'going-green-pro-forest' => __( 'Going Green Pro Forest', 'going-green' ),
	'going-green-pro-mint'   => __( 'Going Green Pro Mint', 'going-green' ),
	'going-green-pro-olive'  => __( 'Going Green Pro Olive', 'going-green' ),
) );

//* Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	'inner',
	'footer-widgets',
	'footer'
) );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Unregister layout settings
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Unregister secondary sidebar
unregister_sidebar( 'sidebar-alt' );

//* Reposition the navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );

//* Remove default post image
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

//* Add featured image above the entry content
add_action( 'genesis_entry_header', 'going_green_featured_photo', 5 );
function going_green_featured_photo() {
	if ( is_page() || ! genesis_get_option( 'content_archive_thumbnail' ) )
		return;

	if ( $image = genesis_get_image( array( 'format' => 'url', 'size' => genesis_get_option( 'image_size' ) ) ) ) {
		printf( '<div class="featured-image"><img src="%s" alt="%s" /></div>', $image, the_title_attribute( 'echo=0' ) );
	}
}

//* Customize the post meta function
add_filter( 'genesis_post_meta', 'post_meta_filter' );
function post_meta_filter($post_meta) {
	if (!is_page()) {
		$post_meta = '[post_categories before=""] [post_tags before="' . __( 'Tagged: ', 'going-green' ) . '"]';
		return $post_meta;
	}
}

//* Hook after post widget after the entry content
add_action( 'genesis_after_entry', 'going_green_after_entry', 5 );
function going_green_after_entry() {

	if ( is_singular( 'post' ) )
		genesis_widget_area( 'after-entry', array(
			'before' => '<div class="after-entry widget-area">',
			'after'  => '</div>',
		) );

}

//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'going_green_remove_comment_form_allowed_tags' );
function going_green_remove_comment_form_allowed_tags( $defaults ) {
	
	$defaults['comment_notes_after'] = '';
	return $defaults;

}// FOOTER AREA ***************************************
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
	echo '<p>Paid for and authorized by Zack Liebl for Mayor 2014</p>';
	echo '<p><span>Zachary Liebl is a member of the Army National Guard. Use of his military rank, job titles, and photographs in uniform does not imply endorsement by the Department of the Army or the Department of Defense.</span></p><br><br>';
	echo '<a href="#" class="top">Return to top of page</a><br><br>';
	echo '<p>&copy;';
	echo date('Y');
	echo '&nbsp;&nbsp;<a href="http://zacklieblformayor.com/">Liebl for Mayor</a>';
	echo '<br>';
	echo 'Powered by <a href="http://www.lakesareadesign.com/" title="Lakes Area Design">Lakes Area Design</a>';
}

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'after-entry',
	'name'        => __( 'After Entry', 'going-green' ),
	'description' => __( 'This is the after entry widget area.', 'going-green' ),
) );
