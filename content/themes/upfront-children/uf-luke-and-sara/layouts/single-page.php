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
"row" => 328,
"background_type" => "image",
"background_color" => "rgba(168,144,132,0)",
"nav_region" => "",
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false
		),
	"tablet" => array(
		"edited" => true,
		"row" => 40
		),
	"mobile" => array(
		"edited" => true,
		"row" => 34
		)
	),
"use_padding" => 0,
"sub_regions" => array(""),
"background_style" => "tile",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page/noise.jpg",
"background_image_ratio" => 2.26,
"background_repeat" => "repeat"
)
			);

$main->add_element("PlainTxt", array(
"columns" => "18",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1429048132762-1519",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 class=\"\">Heading One 56&nbsp;px</h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429048132761-1086",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 10,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page"
	),
"row" => 10,
"sticky" => false,
"wrapper_id" => "wrapper-1429048527578-1043",
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

$main->add_element("PlainTxt", array(
"columns" => "18",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1429048527928-1311",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 class=\"\">Heading Two 28&nbsp;px</h4>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429048527928-1624",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 9,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page"
	),
"row" => 9,
"sticky" => false,
"wrapper_id" => "wrapper-1429048547127-1626",
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

$main->add_element("PlainTxt", array(
"columns" => "18",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1429048547414-1348",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">Hoodie cornhole mustache, sustainable locavore fashion axe leggings twee blog forage you probably haven't heard of them pour-over drinking vinegar Shoreditch chillwave. Cred readymade Echo Park, asymmetrical tattooed fashion axe salvia tote bag four loko pour over distillery bicycle rights leggings vinyl chia. Keffiyeh photo booth 90's viral meh Bushwick gluten-free mumblecore. PBR fund bicycle rights leggings vinyl chia. Keffiyeh photo booth 90's Kickstarter.<br></p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429048547414-1918",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 21,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page"
	),
"row" => 21,
"sticky" => false,
"wrapper_id" => "wrapper-1429048591526-1043",
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

$main->add_group(array(
"columns" => "19",
"margin_top" => "0",
"margin_left" => "2",
"id" => "module-group-1432435064434-1678",
"type" => "ModuleGroup",
"wrapper_id" => "wrapper-1432435064437-1809",
"original_col" => 19,
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

$main->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_top" => "1",
"id" => "module-1432433017872-1993",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-dawn-430x310-2229.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-dawn.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-dawn.jpg",
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
		"width" => 430,
		"height" => 310
		),
	"fullSize" => array(
		"width" => 430,
		"height" => 310
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 430,
		"height" => 310
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "1738",
	"align" => "center",
	"stretch" => true,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1432433017868-1895",
	"row" => 68,
	"anchor" => ""
	),
"row" => 68,
"wrapper_id" => "wrapper-1432435064468-1501",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"group" => "module-group-1432435064434-1678"
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "0",
"margin_top" => "0",
"id" => "module-1432433017865-1610",
"options" => array(
	"content" => "<p class=\"\">Normcorn&nbsp;paleo pop-up gastropub kitsch messenger bag. Drinking vinegar ennui post ironic twee flannel High Life, XOXO vegan. Mc Sween trust fund cardigan, umami mixtape Tonx direct trade actually twee Carles kitsch Odd Future PBR&amp;B Marfa raw denim blog.</p>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1432433017865-1216",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page",
	"row" => 30
	),
"row" => 30,
"wrapper_id" => "wrapper-1432435064470-1641",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"close_wrapper" => false,
"group" => "module-group-1432435064434-1678"
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "0",
"margin_top" => "0",
"id" => "module-1432434509911-1502",
"options" => array(
	"content" => "<p class=\"\">Mustache&nbsp;Tumblr pickled, vegan salvia selfies Austin roof party polaroid ugh. Shabby chic chambray normcore retro, mixtape drinking vinegar cardigan Drinking Life, XOXO vegan ox awesome posem umami mixtape 80’s stuff Etsy quinoa Pitchfork gentrify Bushwick.</p>
",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1432434509911-1969",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page",
	"row" => 29
	),
"row" => 29,
"wrapper_id" => "wrapper-1432435064470-1641",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"group" => "module-group-1432435064434-1678"
));

$main->add_group(array(
"columns" => "19",
"margin_top" => "0",
"margin_left" => "3",
"id" => "module-group-1432435176922-1271",
"type" => "ModuleGroup",
"wrapper_id" => "wrapper-1432435176924-1728",
"original_col" => 19,
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

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "0",
"margin_top" => "0",
"id" => "module-1432434683585-1641",
"options" => array(
	"content" => "<p class=\"\">Aesthetic you probably haven't heard of them meggings, squid slow-carb Schlitz church-key normcore semiotics quinoa Pitchfork gentrify. Intelligentsia crucifix keffiyeh XOXO cronut PBR, gentrify Schlitz.</p>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1432434683584-1268",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page-2",
	"row" => 25
	),
"row" => 25,
"wrapper_id" => "wrapper-1432435176956-1766",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"close_wrapper" => false,
"group" => "module-group-1432435176922-1271"
));

$main->add_element("PlainTxt", array(
"columns" => "9",
"margin_left" => "0",
"margin_top" => "1",
"id" => "module-1432435133658-1658",
"options" => array(
	"content" => "<p class=\"\">Sustainable dreamcatcher you probably haven't heard of them four loko distillery. Semiotics Bushwick typewriter, chia Etsy DIY craft beer Shoreditch narwhal gentrify pork belly Helvetica artisan artisan pickled PBR. Street art gastropub keffiyehliterally american Apparel direct soft shell crab Brooklyn flannel lo-fi VHS.</p>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "object-1432435133658-1565",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page-2",
	"row" => 25
	),
"row" => 25,
"wrapper_id" => "wrapper-1432435176956-1766",
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"group" => "module-group-1432435176922-1271"
));

$main->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_top" => "3",
"id" => "module-1432434419711-1177",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-church-430x310-2075.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-church.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-church.jpg",
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
		"width" => 430,
		"height" => 310
		),
	"fullSize" => array(
		"width" => 430,
		"height" => 310
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 430,
		"height" => 310
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "1739",
	"align" => "center",
	"stretch" => true,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1432434419707-1268",
	"row" => 68
	),
"row" => 68,
"wrapper_id" => "wrapper-1432435176959-1170",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	),
"group" => "module-group-1432435176922-1271"
));

$main->add_element("PlainTxt", array(
"columns" => "18",
"margin_left" => "3",
"margin_top" => "0",
"id" => "module-1432435073983-1963",
"options" => array(
	"content" => "<p class=\"\">Dreamcatcher&nbsp;messenger bag Thundercats, forage yr DIY pour-over gluten-free iPhone small batch readymade next level Brooklyn blog PBR&amp;B. Tofu sustainable High Life meditation direct trade blade. Meggings semiotics +1, slow-carb synth Schlitz aesthetic Intelligentsia keytar art party disrupt urrr... occupy Cosby sweater lomo XOXO hoodie raw denim wolf fanny pack shabby chic Pinterest.</p>
",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1432435073983-1741",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
	"is_edited" => true,
	"row" => 19,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-single-page-2"
	),
"row" => 19,
"wrapper_id" => "wrapper-1432435171149-1656",
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

$main->add_element("Uimage", array(
"columns" => "20",
"margin_left" => "2",
"margin_top" => "4",
"id" => "module-1432434960765-1334",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-bowl-790x410-2112.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-bowl.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page/img-bowl.jpg",
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
		"width" => 790,
		"height" => 410
		),
	"fullSize" => array(
		"width" => 790,
		"height" => 410
		),
	"position" => array(
		"top" => 0,
		"left" => -45
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 880,
		"height" => 410
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "1740",
	"align" => "center",
	"stretch" => false,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1432434960761-1961",
	"row" => 88
	),
"row" => 88,
"wrapper_id" => "wrapper-1432435364288-1348",
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

$regions->add($main);

$cover_image = upfront_create_region(
			array(
"name" => "cover-image",
"title" => "Cover Image",
"type" => "wide",
"scope" => "local",
"container" => "cover-image",
"position" => 20,
"allow_sidebar" => true
),
			array(
"row" => 137,
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"row" => 80
		),
	"mobile" => array(
		"edited" => true,
		"row" => 50
		)
	),
"background_type" => "image",
"use_padding" => 0,
"sub_regions" => array(false),
"background_color" => "#ffffff",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page/Image.jpg",
"background_image_ratio" => 0.5
)
			);

$regions->add($cover_image);

$blank = upfront_create_region(
			array(
"name" => "blank",
"title" => "Blank",
"type" => "wide",
"scope" => "local",
"container" => "blank",
"position" => 20,
"allow_sidebar" => true
),
			array(
"row" => 22,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 24
		),
	"mobile" => array(
		"edited" => true,
		"row" => 10
		)
	)
)
			);

$regions->add($blank);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
