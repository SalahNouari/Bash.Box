<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array(
"name" => "main",
"title" => "Main Area",
"type" => "wide",
"scope" => "local",
"container" => "main",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 140,
"background_type" => "color",
"background_color" => "rgba(255,255,255,1)",
"nav_region" => "",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$main->add_element("ThisPost", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "default-page",
"rows" => 68,
"options" => array(
	"type" => "ThisPostModel",
	"view_class" => "ThisPostView",
	"class" => "c24 upfront-this_post",
	"has_settings" => 1,
	"id_slug" => "this_post",
	"row" => 68,
	"post_data" => array(),
	"disable_resize" => false,
	"disable_drag" => false,
	"post_type" => "page",
	"layout" => array(array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "title",
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "contents",
					"classes" => " post-part c24"
					))
			)),
	"element_id" => "default-page-object",
	"anchor" => "",
	"theme_style" => "page-style"
	),
"wrapper_id" => "default-page-wrapper",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		),
	"mobile" => array(
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
