<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$featured_image = upfront_create_region(
			array(
"name" => "featured-image",
"title" => "Featured Image",
"type" => "wide",
"scope" => "local",
"container" => "featured-image",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 104,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "featured",
"use_padding" => 0,
"sub_regions" => array(false),
"background_color" => "#ffffff",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50"
)
			);

$regions->add($featured_image);

$post_area = upfront_create_region(
			array(
"name" => "post-area",
"title" => "Post Area",
"type" => "wide",
"scope" => "local",
"container" => "post-area",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 140,
"background_type" => "image",
"background_color" => "#c5d0db",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"use_padding" => 0,
"sub_regions" => array(false),
"background_style" => "tile",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single/noise.jpg",
"background_image_ratio" => 2.26,
"background_repeat" => "repeat"
)
			);

$post_area->add_element("ThisPost", array(
"columns" => "20",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "default-post",
"options" => array(
	"type" => "ThisPostModel",
	"view_class" => "ThisPostView",
	"class" => "c24 upfront-this_post",
	"has_settings" => 1,
	"id_slug" => "this_post",
	"row" => 100,
	"post_data" => array("date"),
	"disable_resize" => false,
	"disable_drag" => false,
	"layout" => array(array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "title",
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "date",
					"classes" => " post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "contents",
					"classes" => " post-part c24"
					))
			)),
	"element_id" => "default-post-object",
	"anchor" => ""
	),
"row" => 100,
"sticky" => true,
"wrapper_id" => "default-post-wrapper",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"order" => 0
		),
	"mobile" => array(
		"col" => 7,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	)
));

$regions->add($post_area);

$post_comments = upfront_create_region(
			array(
"name" => "post-comments",
"title" => "Post Comments",
"type" => "wide",
"scope" => "local",
"container" => "post-comments",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 130,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "image",
"use_padding" => 0,
"sub_regions" => array(false),
"background_color" => "#ffffff",
"background_style" => "tile",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single/noise.jpg",
"background_image_ratio" => 2.26,
"background_repeat" => "repeat"
)
			);

$post_comments->add_element("Ucomment", array(
"columns" => "20",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "13",
"margin_bottom" => "0",
"id" => "default-comment",
"options" => array(
	"id_slug" => "ucomment",
	"type" => "UcommentModel",
	"view_class" => "UcommentView",
	"class" => "c24 upfront-comment",
	"has_settings" => 1,
	"prepend_form" => false,
	"element_id" => "default-comment-object",
	"row" => 98,
	"anchor" => ""
	),
"row" => 98,
"sticky" => false,
"wrapper_id" => "wrapper-1428870834710-1367",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	)
));

$regions->add($post_comments);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
