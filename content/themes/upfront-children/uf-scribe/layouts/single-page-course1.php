<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$slider = upfront_create_region(
			array(
"name" => "slider",
"title" => "Slider",
"type" => "wide",
"scope" => "local",
"container" => "slider",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 96,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => true,
		"row" => 36
		)
	),
"background_type" => "slider",
"nav_region" => "",
"background_color" => "#ffffff",
"background_slider_rotate" => true,
"background_slider_rotate_time" => 5,
"background_slider_control" => "always",
"background_slider_transition" => "crossfade",
"background_slider_images" => array("/images/business-cards-slide.jpg", "/images/business-cards-slide-2.jpg")
)
			);

$regions->add($slider);

$main = upfront_create_region(
			array(
"name" => "main",
"title" => "Main",
"type" => "clip",
"scope" => "local",
"container" => "main",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 60,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(255,255,255,0.75)"
)
			);

$main->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1420004858137-1782",
"rows" => 5,
"options" => array(
	"type" => "CodeModel",
	"view_class" => "CodeView",
	"class" => "c24 upfront-code_element-object",
	"has_settings" => 0,
	"id_slug" => "upfront-code_element",
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>",
		"style" => "/* Your styles here */",
		"script" => "/* Your code here */"
		),
	"element_id" => "upfront-code_element-object-1420004858136-1788",
	"code_selection_type" => "Create",
	"markup" => "<div class=\"line\"></div>",
	"style" => "/* Your styles here */
.line {
    background: #C09533;
    display: block;
    width: 100%;
    height: 1px;
}",
	"script" => "/* Your code here */",
	"row" => 5
	),
"wrapper_id" => "wrapper-1420014953272-1102",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$main->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420004858094-1000",
"rows" => 13,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">COURSE NO. 1</span></h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420004858093-1932",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 13,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1420015645682-1414",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$main->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420015645810-1952",
"rows" => 7,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">
	<em>aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food truck Tonx banh mi biodiesel synth 3 wolf moon stumptown 8-bit try-hard  wolf moon forage trust fund, occupy Thundercats semiotics PBR skateboard typewriter.</em><br>
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420015645809-1469",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 7,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1420015730775-1213",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$main->add_element("PlainTxt", array(
"columns" => "14",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420015730934-1466",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">
	Kitsch art party YOLO, paleo dreamcatcher retro shabby chic banjo tote bag sriracha Godard asymmetrical locavore craft beer. Chillwave squid letterpress single-origin coffee flannel kitsch. McSweeney's literally cornhole roof party, hashtag pickled High Life gastropub tofu gluten-free American Apparel lo-fi small batch. PBR&amp;B DIY McSweeney's shabby chic, literally artisan ennui forage. Twee ethnic typewriter aesthetic, yr put a bird on it normcore slow-carb bespoke Etsy jean shorts narwhal skateboard Truffaut. Gastropub Shoreditch deep v quinoa Cosby XOXO.
</p>
<p class=\"\">
</p>
<p class=\"\">
	Marfa you probably haven't heard of them leggings, gluten-free try-hard post-ironic direct trade twee jean shorts meggings chillwave. Shoreditch distillery ethnic gastropub. Skateboard brunch Wes Anderson Portland banjo, fingerstache PBR&amp;B twee authentic street art freegan paleo mixtape drinking vinegar food truck. Schlitz twee ugh PBR stumptown, Blue Bottle sriracha fixie squid sartorial meggings cornhole. Schlitz forage trust fund, occupy Thundercat seitan sriracha vegan sustainable XOXO pork belly. Blue Bottle Gastropub Shoreditch deep v quinoa Cosby sweater XOXO pork belly Awesome.
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420015730933-1012",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 15,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1420015806698-1846",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$main->add_element("Uimage", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-1420004858101-1964",
"rows" => 15,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-1-295x190-3720.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-1.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-1.jpg",
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
		"width" => 295,
		"height" => 190
		),
	"fullSize" => array(
		"width" => 295,
		"height" => 190
		),
	"position" => array(
		"top" => 0,
		"left" => -35
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 330,
		"height" => 195
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "87",
	"align" => "right",
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
	"element_id" => "image-1420004858096-1388",
	"row" => 15
	),
"wrapper_id" => "wrapper-1420015979978-1045",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		),
	"mobile" => array(
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 2,
		"col" => 8
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_element("Uimage", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "5",
"margin_bottom" => "0",
"id" => "module-1420015980147-1648",
"rows" => 15,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-2-295x190-8695.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-2.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-side-image-2.jpg",
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
		"width" => 295,
		"height" => 190
		),
	"fullSize" => array(
		"width" => 295,
		"height" => 190
		),
	"position" => array(
		"top" => 0,
		"left" => -35
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 330,
		"height" => 195
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "88",
	"align" => "right",
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
	"element_id" => "image-1420015980143-1916",
	"row" => 15
	),
"wrapper_id" => "wrapper-1420015979978-1045",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 2,
		"col" => 8
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_group(array(
"columns" => "6",
"margin_top" => "2",
"margin_left" => "2",
"id" => "module-group-1422273307070-1527",
"rows" => 10,
"wrapper_id" => "wrapper-1422273307072-1607",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 9
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 3,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420183152349-1381",
"rows" => 24,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-1-90x90-6941.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-1.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-1.png",
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
		"width" => 90,
		"height" => 90
		),
	"fullSize" => array(
		"width" => 90,
		"height" => 90
		),
	"position" => array(
		"top" => 0,
		"left" => -30
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 90
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "92",
	"align" => "center",
	"stretch" => false,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1420183152346-1140",
	"row" => 24
	),
"wrapper_id" => "wrapper-1422273307104-1143",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 5
		),
	"mobile" => array(
		"edited" => false,
		"col" => 5
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		)
	),
"group" => "module-group-1422273307070-1527"
));

$main->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420183105200-1388",
"rows" => 38,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<ul class=\"\">
	<li>Gastropub Shoreditch deep v quinoa </li>
	<li>Slow-carb bespoke Etsy jeanst</li>
	<li>skateboard Truffaut wolf four </li>
	<li>DIY asymmetrical letterpress umami </li>
</ul>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420183105198-1148",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "list-with-underline-style",
	"row" => 38
	),
"wrapper_id" => "wrapper-1422273307110-1425",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"col" => 6
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		)
	),
"group" => "module-group-1422273307070-1527"
));

$main->add_group(array(
"columns" => "6",
"margin_top" => "2",
"margin_left" => "1",
"id" => "module-group-1422273316325-1601",
"rows" => 10,
"wrapper_id" => "wrapper-1420183317900-1091",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 9
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 3,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420183302178-1533",
"rows" => 24,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-2-90x90-9576.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-2.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-2.png",
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
		"width" => 90,
		"height" => 90
		),
	"fullSize" => array(
		"width" => 90,
		"height" => 90
		),
	"position" => array(
		"top" => 0,
		"left" => -30
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 90
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "93",
	"align" => "center",
	"stretch" => false,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1420183302174-1786",
	"row" => 24
	),
"wrapper_id" => "wrapper-1422273316366-1485",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"col" => 6
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		)
	),
"group" => "module-group-1422273316325-1601"
));

$main->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420191480135-1046",
"rows" => 38,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<ul class=\"\">
	<li>Gastropub Shoreditch deep v quinoa </li>
	<li>Slow-carb bespoke Etsy jeanst</li>
	<li>skateboard Truffaut wolf four </li>
	<li>DIY asymmetrical letterpress umami </li>
</ul>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1420191480135-1155",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "list-with-underline-style",
	"row" => 38
	),
"wrapper_id" => "wrapper-1422273316366-1485",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		)
	),
"group" => "module-group-1422273316325-1601"
));

$main->add_group(array(
"columns" => "6",
"margin_top" => "2",
"margin_left" => "1",
"id" => "module-group-1422273324204-1879",
"rows" => 10,
"wrapper_id" => "wrapper-1420183336742-1423",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 9
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 3,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$main->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420183318177-1430",
"rows" => 24,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-3-90x90-1212.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-3.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-course1/course-list-image-3.png",
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
		"width" => 90,
		"height" => 90
		),
	"fullSize" => array(
		"width" => 90,
		"height" => 90
		),
	"position" => array(
		"top" => 0,
		"left" => -30
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 90
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "94",
	"align" => "center",
	"stretch" => false,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1420183318174-1477",
	"row" => 24
	),
"wrapper_id" => "wrapper-1422273324295-1577",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"col" => 6
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4
		)
	),
"group" => "module-group-1422273324204-1879"
));

$main->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420191471893-1085",
"rows" => 38,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<ul class=\"\">
	<li>Gastropub Shoreditch deep v quinoa </li>
	<li>Slow-carb bespoke Etsy jeanst</li>
	<li>skateboard Truffaut wolf four </li>
	<li>DIY asymmetrical letterpress umami </li>
</ul>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1420191471902-1864",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "list-with-underline-style",
	"row" => 38
	),
"wrapper_id" => "wrapper-1422273324295-1577",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6
		)
	),
"group" => "module-group-1422273324204-1879"
));

$main->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1420188467554-1540",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">
	Sunt quinoa four loko consequat distillery, cornhole forage est ut et selvage sapiente. Gluten-free mustache Truffaut, fap trust fund quis nesciunt Neutra shabby chic typewriter. Deep v McSweeney's sunt wayfarers blog accusamus disrupt quinoa sriracha roof party. Bicycle rights sed sartorial, non organic disrupt whatever ennui American Apparel chillwave shabby chic 8-bit. Pariatur four loko sustainable voluptate, aesthetic food truck small batch DIY Tonx raw denim mustache. Eiusmod food truck pug mlkshk, mumblecore elit Vice aesthetic flannel. Meggings Brooklyn reprehenderit eu, biodiesel lomo typewriter Tonx Thundercats. Mlkshk small batch typewriter selfies freegan photo booth. Deserunt Carles cornhole synth. Thundercats ea whatever duis, craft beer fugiat Echo Park brunch.<br>
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420188467553-1180",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 14,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1420191568939-1737",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$enroll = upfront_create_region(
			array(
"name" => "enroll",
"title" => "Enroll",
"type" => "clip",
"scope" => "local",
"container" => "enroll",
"position" => 20,
"allow_sidebar" => true
),
			array(
"row" => 60,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(255,255,255,0.75)"
)
			);

$enroll->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420191569155-1915",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">Enrol Now</span></h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1420191569154-1174",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 15
	),
"wrapper_id" => "wrapper-1420191684382-1789",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$enroll->add_element("Ucontact", array(
"columns" => "18",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1420183105276-1577",
"rows" => 89,
"options" => array(
	"form_add_title" => array(),
	"form_title" => "Contact form",
	"form_name_label" => "Name:",
	"form_email_label" => "Email:",
	"form_email_to" => "demo@example.com",
	"show_subject" => array(),
	"form_subject_label" => "Subject:",
	"form_default_subject" => "Sent from the website",
	"form_message_label" => "Message:",
	"form_button_text" => "Send",
	"form_validate_when" => "submit",
	"form_label_position" => "above",
	"type" => "UcontactModel",
	"view_class" => "UcontactView",
	"class" => "c24 upfront-contact-form",
	"has_settings" => 1,
	"id_slug" => "ucontact",
	"element_id" => "ucontact-object-1420183105273-1718",
	"row" => 89,
	"anchor" => "",
	"theme_style" => "ucontact-enrol-style"
	),
"wrapper_id" => "wrapper-1420191754127-1407",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12
		),
	"mobile" => array(
		"edited" => false,
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

$regions->add($enroll);

$footer_search = upfront_create_region(
			array(
"name" => "footer-search",
"title" => "Footer Search",
"type" => "wide",
"scope" => "local",
"container" => "footer-search",
"position" => 20,
"allow_sidebar" => true
),
			array(
"row" => 19,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(42,42,42,0.99)"
)
			);

$footer_search->add_element("Uwidget", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-1419136432355-1111",
"rows" => 13,
"options" => array(
	"id_slug" => "uwidget",
	"type" => "UwidgetModel",
	"view_class" => "UwidgetView",
	"class" => "c24 upfront-widget",
	"has_settings" => 1,
	"widget" => "WP_Widget_Search",
	"element_id" => "uwidget-object-1419136432354-1665",
	"selected_widget" => "WP_Widget_Search",
	"anchor" => "",
	"widget_specific_fields" => array(
		"widget-search--title" => array(
			"label" => "Title: ",
			"name" => "title",
			"type" => "text",
			"value" => ""
			)
		),
	"title" => "",
	"row" => 13,
	"theme_style" => "search-widget",
	"breakpoint" => array(
		"tablet" => array(
			"row" => 13
			)
		)
	),
"wrapper_id" => "wrapper-1419136561911-1320",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 9,
		"clear" => true,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => true,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 2,
		"col" => 7,
		"row" => 13,
		"top" => 5
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$footer_search->add_element("PlainTxt", array(
"columns" => "3",
"margin_left" => "4",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1419136346381-1809",
"rows" => 12,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 style=\"text-align: start;\" class=\"\"><span class=\"upfront_theme_color_0\">Follow Us</span></h4>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1419136346381-1197",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 12,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"breakpoint" => array(
		"mobile" => array(
			"row" => 19
			)
		)
	),
"wrapper_id" => "wrapper-1419136458352-1078",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 4,
		"clear" => true,
		"order" => 1
		),
	"mobile" => array(
		"edited" => false,
		"col" => 2,
		"clear" => true,
		"order" => 1
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 4,
		"top" => 3
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 2,
		"top" => 3,
		"row" => 19
		)
	)
));

$footer_search->add_element("Code", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-1419136216949-1468",
"rows" => 14,
"options" => array(
	"type" => "CodeModel",
	"view_class" => "CodeView",
	"class" => "c24 upfront-code_element-object",
	"has_settings" => 0,
	"id_slug" => "upfront-code_element",
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>",
		"style" => "/* Your styles here */",
		"script" => "/* Your code here */"
		),
	"element_id" => "object-1419136216950-1875",
	"code_selection_type" => "Create",
	"markup" => "<ul class=\"share-wrapper\">
    <li class=\"share-item item-twitter\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-223 1635 35 35\" class=\"icon icon-static icon-twitter-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-twitter-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-223 1475 35 35\" class=\"icon icon-hover icon-twitter-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-twitter-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-facebook\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 995 35 35\" class=\"icon icon-static icon-facebook-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-facebook-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 835 35 35\" class=\"icon icon-hover icon-facebook-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-facebook-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-pinterest\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1155 35 35\" class=\"icon icon-static icon-pinterest-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-pinterest-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-223 1155 35 35\" class=\"icon icon-hover icon-pinterest-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-pinterest-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-youtube\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1475 35 35\" class=\"icon icon-static icon-youtube-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-youtube-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1315 35 35\" class=\"icon icon-hover icon-youtube-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-youtube-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-instagram\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 835 35 35\" class=\"icon icon-static icon-instagram-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-instagram-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1635 35 35\" class=\"icon icon-hover icon-instagram-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-instagram-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-flickr\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 1155 35 35\" class=\"icon icon-static icon-flickr-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-flickr-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 995 35 35\" class=\"icon icon-hover icon-flickr-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/wp-content/themes/uf-scribe/ui/sprites.svg#icon-flickr-color\"></use>
            </svg>
        </a>
    </li>
</ul>",
	"style" => "/* Your styles here */
ul.share-wrapper {
    list-style-type: none;
    padding: 0 15px;
    margin: 0;
    text-align: right;
}

li.share-item {
    display: inline-block;
    margin: 0 5px;
    height: 35px;
}

li.share-item .icon-hover {
    display: none;
}

li.share-item:hover .icon-static {
    display: none;
}

li.share-item:hover .icon-hover {
    display: block;
}

li.share-item a {
    display: block;
    width: 100%;
    height: 100%;
}",
	"script" => "/* Your code here */",
	"row" => 14,
	"breakpoint" => array(
		"mobile" => array(
			"row" => 20
			)
		)
	),
"wrapper_id" => "wrapper-1419136223309-1214",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 8,
		"clear" => false,
		"order" => 2
		),
	"mobile" => array(
		"edited" => false,
		"col" => 5,
		"clear" => false,
		"order" => 2
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 8,
		"top" => 2
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 5,
		"row" => 20,
		"top" => 1
		)
	)
));

$regions->add($footer_search);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
