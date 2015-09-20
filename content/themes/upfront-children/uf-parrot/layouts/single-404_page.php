<?php
$page_header = upfront_create_region(
			array(
"name" => "page-header",
"title" => "Page Header",
"type" => "wide",
"scope" => "local",
"container" => "page-header",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 22,
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 24,
		"row" => 15
		),
	"mobile" => array(
		"edited" => false,
		"col" => 24
		)
	)
)
			);

$page_header->add_group(array(
"columns" => "4",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "12",
"margin_bottom" => "0",
"id" => "module-group-1432243064406-1505",
"type" => "ModuleGroup",
"wrapper_id" => "wrapper-1432243064408-1752",
"original_col" => 4,
"href" => "" . get_site_url() . "",
"linkTarget" => "_self",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 5,
		"order" => 0,
		"clear" => false
		),
	"mobile" => array(
		"edited" => true,
		"col" => 6,
		"order" => 0,
		"clear" => false
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 5,
		"order" => 0,
		"row" => 10,
		"top" => 4
		),
	"mobile" => array(
		"edited" => true,
		"left" => 1,
		"col" => 5,
		"order" => 0,
		"top" => 6,
		"row" => 10
		)
	)
));

$page_header->add_element("Button", array(
"columns" => "1",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1432240519397-1866",
"options" => array(
	"content" => "&nbsp;",
	"href" => "",
	"align" => "center",
	"type" => "ButtonModel",
	"view_class" => "ButtonView",
	"element_id" => "button-object-1432240519397-1644",
	"class" => "c24 upfront-button",
	"has_settings" => 1,
	"id_slug" => "button",
	"currentpreset" => "parrot-icon-logo",
	"row" => 6,
	"theme_style" => "button-icon-logo",
	"is_edited" => true,
	"breakpoint" => array(
		"tablet" => array(
			"row" => 10
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1432243064431-1555",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 1,
		"order" => 0,
		"clear" => true
		),
	"mobile" => array(
		"edited" => true,
		"col" => 1,
		"order" => 0,
		"clear" => false
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 1,
		"order" => 0,
		"top" => 0,
		"row" => 10
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 1,
		"order" => 0
		)
	),
"group" => "module-group-1432243064406-1505"
));

$page_header->add_element("Button", array(
"columns" => "3",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1429800012921-1982",
"options" => array(
	"content" => "&nbsp;",
	"href" => "",
	"align" => "center",
	"type" => "ButtonModel",
	"view_class" => "ButtonView",
	"element_id" => "button-object-1429800012920-1857",
	"class" => "c24 upfront-button",
	"has_settings" => 1,
	"id_slug" => "button",
	"currentpreset" => "parrot-logo-green",
	"row" => 6,
	"theme_style" => "button-logo-green",
	"is_edited" => true,
	"breakpoint" => array(
		"tablet" => array(
			"row" => 6
			),
		"mobile" => array(
			"row" => 6
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1432243064433-1892",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"col" => 4,
		"order" => 1,
		"clear" => false
		),
	"mobile" => array(
		"edited" => true,
		"col" => 4,
		"order" => 1,
		"clear" => false
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 4,
		"order" => 0,
		"top" => 1,
		"row" => 6
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 4,
		"order" => 1,
		"top" => 0,
		"row" => 6
		)
	),
"group" => "module-group-1432243064406-1505"
));

$regions->add($page_header);

$header = upfront_create_region(
			array(
"name" => "header",
"title" => "Header Area",
"type" => "wide",
"scope" => "local",
"container" => "header",
"position" => 1,
"allow_sidebar" => true
),
			array(
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 24
		),
	"mobile" => array(
		"edited" => true,
		"col" => 24,
		"row" => 89
		)
	),
"row" => 104,
"background_type" => "color",
"use_padding" => 0,
"sub_regions" => array("bottom"),
"background_color" => "#ffffff",
"background_slider_transition" => "crossfade",
"background_slider_rotate" => true,
"background_slider_rotate_time" => 5,
"background_slider_control" => "always",
"background_slider_images" => array("/images/hero-2.jpg", "/images/hero.jpg"),
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/hero-1.jpg",
"background_image_ratio" => 0.31
)
			);

$header->add_element("PlainTxt", array(
"columns" => "4",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1429886152810-1807",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h3 class=\"\" style=\"text-align: center;\">404 Error</h3>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429886152809-1567",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 7,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-no-padding"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429886559390-1135",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 8,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 6,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 4,
		"col" => 4,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 5,
		"order" => 0
		)
	)
));

$header->add_element("PlainTxt", array(
"columns" => "14",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1429800300014-1995",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<span class=\"upfront_theme_color_2\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_2\" style=\"\" rel=\"\"><h1 style=\"text-align: center;\">Oh my God, you found my feather</h1><h1 style=\"text-align: center;\"> Return it to <a target=\"_self\" rel=\"entry\" href=\"" . get_site_url() . "\">home</a></h1><h1 style=\"text-align: center;\" rel=\"text-align: center;\"><span data-redactor-tag=\"span\" data-verified=\"redactor\"></span></h1></span>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429800300014-1641",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 20,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-no-padding"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429803014578-1903",
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

$header->add_element("Uimage", array(
"columns" => "14",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-1429886656507-1939",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/feather-597x164-8593.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/feather.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/feather.jpg",
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
		"width" => 597,
		"height" => 164
		),
	"fullSize" => array(
		"width" => 597,
		"height" => 164,
		"top" => 390,
		"left" => 486
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 610,
		"height" => 170
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "126",
	"align" => "left",
	"stretch" => false,
	"vstretch" => false,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1429886656505-1838",
	"row" => 19
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1429887675917-1313",
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

$regions->add($header);

$header_bottom = upfront_create_region(
			array(
"name" => "header_bottom",
"title" => "Header Area bottom",
"type" => "wide",
"scope" => "local",
"container" => "header",
"sub" => "bottom",
"position" => 1,
"allow_sidebar" => true
),
			array(
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"row" => 30,
"background_type" => "color",
"use_padding" => 0,
"background_color" => "rgba(255,255,255,0.35)"
)
			);

$regions->add($header_bottom);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
