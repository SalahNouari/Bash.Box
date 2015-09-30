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
"row" => 103,
"background_type" => "image",
"background_color" => "#c5d0db",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"row" => 120
		),
	"mobile" => array(
		"edited" => true,
		"row" => 110
		)
	),
"use_padding" => 0,
"sub_regions" => array(false),
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404_background.jpg",
"background_image_ratio" => 0.38
)
			);

$main->add_element("PlainTxt", array(
"columns" => "18",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "13",
"margin_bottom" => "0",
"id" => "default-nav-text-module",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plaintxt",
	"content" => "<h1 style=\"color: rgb(252, 252, 252); text-align: center;\" class=\"\">SOMETHING IS NOT RIGHT</h1>",
	"element_id" => "default-nav-text-object",
	"class" => "c24",
	"type" => "PlainTxtModel",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 10,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"breakpoint" => array(
		"mobile" => array(
			"row" => 22
			)
		),
	"theme_style" => "plaintxt-404"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "default-nav-text-module-wrapper",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"order" => 0,
		"clear" => true,
		"edited" => true
		),
	"mobile" => array(
		"col" => 6,
		"order" => 0,
		"clear" => true
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"order" => 0,
		"top" => 28
		),
	"mobile" => array(
		"edited" => true,
		"left" => 1,
		"col" => 5,
		"order" => 0,
		"row" => 22,
		"top" => 16
		)
	)
));

$main->add_element("Uwidget", array(
"columns" => "6",
"margin_left" => "9",
"margin_right" => "0",
"margin_top" => "15",
"margin_bottom" => "0",
"id" => "module-1428641408501-1287",
"options" => array(
	"id_slug" => "uwidget",
	"type" => "UwidgetModel",
	"view_class" => "UwidgetView",
	"class" => "c24 upfront-widget",
	"has_settings" => 1,
	"widget" => "search-2",
	"element_id" => "uwidget-object-1428641408500-1191",
	"selected_widget" => "search-2",
	"anchor" => "",
	"widget_specific_fields" => array(
		"widget-search--title" => array(
			"label" => "TÃ­tulo: ",
			"name" => "title",
			"type" => "text",
			"value" => ""
			)
		),
	"title" => "",
	"row" => 9,
	"breakpoint" => array(
		"tablet" => array(
			"row" => 14
			)
		),
	"theme_style" => "uwidget-no-borders"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1428641624803-1637",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 11,
		"order" => 1,
		"clear" => true
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"order" => 0,
		"clear" => true
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"order" => 0,
		"row" => 14,
		"top" => 19
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "8",
"margin_left" => "8",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1428641408473-1451",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\"><span class=\"\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_5\" style=\"color:rgb(252, 252, 252)\" rel=\"color:rgb(252, 252, 252)\" data-redactor-style=\"color:rgb(252, 252, 252)\">LET ME TAKE YOU BACK HOME</span></p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1428641408472-1181",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 7,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-404"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1428641569391-1070",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 10,
		"order" => 2,
		"clear" => true
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"order" => 0,
		"clear" => true
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 2,
		"col" => 8,
		"order" => 0,
		"top" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
