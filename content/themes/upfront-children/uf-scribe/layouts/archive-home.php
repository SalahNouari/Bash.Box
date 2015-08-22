<?php
$homepage = upfront_create_region(
			array(
"name" => "homepage",
"title" => "Homepage",
"type" => "full",
"scope" => "local",
"container" => "homepage",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 200,
"background_type" => "image",
"background_color" => "rgba(0,0,0,1)",
"nav_region" => "bottom",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/home-bg.jpg",
"background_image_ratio" => 0.56,
"original_height" => 1186,
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

$regions->add($homepage);

$homepage_nav = upfront_create_region(
			array(
"name" => "homepage_nav",
"title" => "Homepage Nav",
"type" => "wide",
"scope" => "local",
"container" => "homepage",
"sub" => "bottom",
"position" => 1,
"allow_sidebar" => true
),
			array(
"background_type" => "color",
"background_color" => "rgba(29,29,29,0.8)",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/home-bg.jpg",
"background_image_ratio" => 0.56
)
			);

$homepage_nav->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1422277151837-1100",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/scribe-logo-119x59-6976.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/scribe-logo.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/scribe-logo.png",
	"image_title" => "",
	"alternative_text" => "",
	"when_clicked" => "entry",
	"image_link" => "" . get_site_url() . "/services/",
	"include_image_caption" => false,
	"image_caption" => "My awesome image caption",
	"caption_position" => false,
	"caption_alignment" => false,
	"caption_trigger" => "always_show",
	"image_status" => "ok",
	"size" => array(
		"width" => 119,
		"height" => 59
		),
	"fullSize" => array(
		"width" => 119,
		"height" => 59
		),
	"position" => array(
		"top" => 0,
		"left" => -15.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 60
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "59",
	"align" => "center",
	"stretch" => false,
	"vstretch" => false,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 0,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1422277151834-1470",
	"row" => 6
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424330663043-1420",
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

$homepage_nav->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1422277151831-1630",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">
	<a href=\"" . get_site_url() . "/services/\"><span class=\"upfront_theme_color_2\">Learn More</span>
	</a>
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1422277151830-1503",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 4,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "homepage-enter"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424330546800-1185",
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

$regions->add($homepage_nav);
