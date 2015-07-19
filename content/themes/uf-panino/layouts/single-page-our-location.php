<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php');

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
"row" => 122,
"background_type" => "image",
"background_color" => "#c5d0db",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"row" => 219
		),
	"mobile" => array(
		"edited" => true,
		"row" => 197
		)
	),
"use_padding" => 0,
"sub_regions" => array(false),
"background_style" => "tile",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-our-location/gray-pattern-bg.png",
"background_image_ratio" => 2.26,
"background_repeat" => "repeat"
)
			);

$main->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "12",
"margin_bottom" => "0",
"id" => "module-1429598218239-1669",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-our-location/home-contacts-map-420x420-7727.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-our-location/home-contacts-map.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-our-location/home-contacts-map.png",
	"image_title" => "",
	"alternative_text" => "",
	"when_clicked" => false,
	"image_link" => "",
	"include_image_caption" => false,
	"image_caption" => "My awesome image caption",
	"caption_position" => false,
	"caption_alignment" => false,
	"caption_trigger" => "always_show",
	"image_status" => "ok",
	"size" => array(
		"width" => 420,
		"height" => 420
		),
	"fullSize" => array(
		"width" => 424,
		"height" => 424,
		"top" => 130,
		"left" => 699
		),
	"position" => array(
		"top" => -35,
		"left" => 0
		),
	"marginTop" => 35,
	"element_size" => array(
		"width" => 420,
		"height" => 455
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "1818",
	"align" => "center",
	"stretch" => true,
	"vstretch" => false,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1429598218237-1901",
	"row" => 97,
	"breakpoint" => array(
		"mobile" => array(
			"row" => 68
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429598250975-1845",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 11,
		"order" => 0,
		"clear" => true
		),
	"mobile" => array(
		"edited" => true,
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
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 0,
		"row" => 68
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "22",
"margin_bottom" => "0",
"id" => "module-1429598218236-1765",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 class=\"\" style=\"text-align: center;\">PANiNO</h4>
",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429598218236-1846",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 14,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "u-brand-title"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429598303861-1674",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 11,
		"order" => 1,
		"clear" => true
		),
	"mobile" => array(
		"edited" => true,
		"col" => 7,
		"order" => 1,
		"clear" => true
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"order" => 1,
		"top" => 11
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 1,
		"top" => 8
		)
	),
"close_wrapper" => false
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1429598303949-1113",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">305 Lygon Street,</p><p class=\"\" style=\"text-align: center;\">Carlton VIC 3053&nbsp;</p>
",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429598303949-1053",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 22,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "u-paragraph-address"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429598303861-1674",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"order" => 2,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 2,
		"top" => 0
		)
	),
"close_wrapper" => false
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1429598356150-1968",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">. . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429598356150-1915",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 14,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "u-bullets"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429598303861-1674",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"order" => 3
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 3
		)
	),
"close_wrapper" => false
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1429598376452-1278",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">Phone: (03) 9876 5431</p><p class=\"\" style=\"text-align: center;\">Fax: (03) 9876 5432</p><p class=\"\" style=\"text-align: center;\">General Orders : (03) 9347 2801</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429598376451-1248",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 34,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "u-paragraph-address-contacts"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429598303861-1674",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"order" => 4
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 4
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
