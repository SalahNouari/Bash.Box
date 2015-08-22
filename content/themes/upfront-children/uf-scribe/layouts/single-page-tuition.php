<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$services_header = upfront_create_region(
			array(
"name" => "services-header",
"title" => "Services Header",
"type" => "wide",
"scope" => "local",
"container" => "services-header",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 70,
"background_type" => "image",
"background_color" => "#c5d0db",
"nav_region" => "",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services.jpg",
"background_image_ratio" => 0.35,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => true,
		"row" => 40
		)
	)
)
			);

$regions->add($services_header);

$tuition = upfront_create_region(
			array(
"name" => "tuition",
"title" => "Tuition",
"type" => "clip",
"scope" => "local",
"container" => "tuition",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 67,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(255,255,255,0.75)",
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

$tuition->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "9",
"margin_bottom" => "0",
"id" => "module-1414649502757-1050",
"rows" => 7,
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
	"element_id" => "upfront-code_element-object-1414649502756-1830",
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
	"row" => 7
	),
"wrapper_id" => "wrapper-1414649547474-1062",
"sticky" => false,
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

$tuition->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414231843243-1900",
"rows" => 16,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 style=\"text-align: center;\" class=\"\"><span class=\"upfront_theme_color_0\">MSB TUITION</span></h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414231843242-1629",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"row" => 16
	),
"wrapper_id" => "wrapper-1414232743389-1015",
"sticky" => false,
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

$tuition->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233333415-1917",
"rows" => 25,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food truck Tonx banh mi biodiesel synth 3 wolf moon PBR skateboard. Typewriter sriracha lomo, Portland ugh bitters butcher roof party Wes Anderson single-origin coffee bespoke pork belly fashion axe craft beer ennui. PBR YOLO ennui vegan, plaid PBR&amp;B synth.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233333414-1507",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 25
	),
"wrapper_id" => "wrapper-1414233550901-1644",
"sticky" => false,
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

$regions->add($tuition);

$tuition_course_1 = upfront_create_region(
			array(
"name" => "tuition-course-1",
"title" => "Tuition Course 1",
"type" => "clip",
"scope" => "local",
"container" => "tuition-course-1",
"position" => 1,
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

$tuition_course_1->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1414653330028-1817",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_business_cards (1)-385x235-2960.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_business_cards (1).jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_business_cards (1).jpg",
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
		"width" => 385,
		"height" => 235
		),
	"fullSize" => array(
		"width" => 385,
		"height" => 235
		),
	"position" => array(
		"top" => 0,
		"left" => -17.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 420,
		"height" => 240
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "136",
	"align" => "center",
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
	"element_id" => "image-1414653330020-1504",
	"row" => 18
	),
"wrapper_id" => "wrapper-1419826271055-1122",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"edited" => false,
		"left" => 1,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7
		)
	)
));

$tuition_course_1->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1414232882527-1238",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Course No.&nbsp;1</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232882525-1468",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "CourseFirst",
	"theme_style" => "plaintxt-short-underline-style",
	"row" => 15
	),
"wrapper_id" => "wrapper-1419826278522-1659",
"sticky" => false,
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

$tuition_course_1->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233551274-1383",
"rows" => 41,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233551273-1211",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"row" => 41
	),
"wrapper_id" => "wrapper-1419826278522-1659",
"sticky" => false,
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

$tuition_course_1->add_element("Code", array(
"columns" => "3",
"margin_left" => "20",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414681079232-1247",
"rows" => 13,
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
	"element_id" => "object-1414681079232-1884",
	"code_selection_type" => "Create",
	"markup" => "<a href=\"#\" class=\"arrow-link\"></a>",
	"style" => ".arrow-link {
    display: block;
    width: 100px;
    height: 30px;
    background: url(\"/scribe/wp-content/themes/uf-scribe/ui/arrows.png\");
}
.arrow-link:hover {
    background-position: 0 -30px;
}",
	"script" => "/* Your code here */",
	"row" => 13
	),
"wrapper_id" => "wrapper-1419826288068-1007",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => true,
		"order" => 2
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 8,
		"col" => 4,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"top" => 1
		)
	)
));

$regions->add($tuition_course_1);

$tuition_course_2 = upfront_create_region(
			array(
"name" => "tuition-course-2",
"title" => "Tuition Course 2",
"type" => "wide",
"scope" => "local",
"container" => "tuition-course-2",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 80,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(242,242,242,1)",
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

$tuition_course_2->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "14",
"margin_bottom" => "0",
"id" => "module-1414232743692-1128",
"rows" => 13,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Course No. 2</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232743691-1614",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "CourseSecond",
	"theme_style" => "plaintxt-short-underline-style",
	"row" => 13
	),
"wrapper_id" => "wrapper-1419221204838-1953",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"clear" => true,
		"order" => 1
		),
	"mobile" => array(
		"col" => 7,
		"clear" => true,
		"order" => 1
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 3,
		"col" => 6,
		"top" => 3,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 0,
		"order" => 0
		)
	)
));

$tuition_course_2->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1414233668134-1811",
"rows" => 37,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233668135-1138",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 37
	),
"wrapper_id" => "wrapper-1419221204838-1953",
"sticky" => false,
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 1
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 1
		)
	)
));

$tuition_course_2->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "15",
"margin_bottom" => "0",
"id" => "module-1414678713534-1826",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_customs_books (1)-385x235-3261.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_customs_books (1).jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_customs_books (1).jpg",
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
		"width" => 385,
		"height" => 235
		),
	"fullSize" => array(
		"width" => 385,
		"height" => 235
		),
	"position" => array(
		"top" => 0,
		"left" => -17.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 420,
		"height" => 240
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "137",
	"align" => "center",
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
	"element_id" => "image-1414678713515-1847",
	"row" => 18
	),
"wrapper_id" => "wrapper-1419221232742-1914",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"top" => 3,
		"order" => 2
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 3,
		"order" => 2
		)
	)
));

$tuition_course_2->add_element("Code", array(
"columns" => "3",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414681067563-1125",
"rows" => 13,
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
	"element_id" => "object-1414681067563-1539",
	"code_selection_type" => "Create",
	"markup" => "<a href=\"#\" class=\"arrow-link\"></a>",
	"style" => ".arrow-link {
    display: block;
    width: 100px;
    height: 30px;
    background: url(\"/scribe/wp-content/themes/uf-scribe/ui/arrows.png\");
}
.arrow-link:hover {
    background-position: 0 -30px;
}",
	"script" => "/* Your code here */",
	"row" => 13
	),
"wrapper_id" => "wrapper-1419221232895-1638",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => true,
		"order" => 2
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 8,
		"col" => 4,
		"order" => 3,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"top" => 1,
		"order" => 3
		)
	)
));

$regions->add($tuition_course_2);

$tuition_course_3 = upfront_create_region(
			array(
"name" => "tuition-course-3",
"title" => "Tuition Course 3",
"type" => "clip",
"scope" => "local",
"container" => "tuition-course-3",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 75,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(255,255,255,0.75)",
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

$tuition_course_3->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-1414679846556-1523",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_student_binding (1)-385x235-8436.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_student_binding (1).jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_student_binding (1).jpg",
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
		"width" => 385,
		"height" => 235
		),
	"fullSize" => array(
		"width" => 385,
		"height" => 235
		),
	"position" => array(
		"top" => 0,
		"left" => -17.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 420,
		"height" => 240
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "138",
	"align" => "center",
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
	"element_id" => "image-1414679846547-1484",
	"row" => 18
	),
"wrapper_id" => "wrapper-1419221351260-1532",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
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
		"left" => 1,
		"col" => 10,
		"top" => 4,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 3,
		"order" => 0
		)
	)
));

$tuition_course_3->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-1414232933915-1427",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Course No. 3</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232933914-1645",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "CourseThird",
	"row" => 15,
	"theme_style" => "plaintxt-short-underline-style"
	),
"wrapper_id" => "wrapper-1419221274510-1373",
"sticky" => false,
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
		"edited" => true,
		"left" => 3,
		"col" => 6,
		"top" => 3,
		"order" => 1
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 0,
		"order" => 1
		)
	)
));

$tuition_course_3->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233680985-1161",
"rows" => 41,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233680985-1197",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 41
	),
"wrapper_id" => "wrapper-1419221274510-1373",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 2
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 2,
		"top" => 0
		)
	)
));

$tuition_course_3->add_element("Code", array(
"columns" => "3",
"margin_left" => "20",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414681052835-1921",
"rows" => 13,
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
	"element_id" => "object-1414681052835-1535",
	"code_selection_type" => "Create",
	"markup" => "<a href=\"#\" class=\"arrow-link\"></a>",
	"style" => ".arrow-link {
    display: block;
    width: 100px;
    height: 30px;
    background: url(\"/scribe/wp-content/themes/uf-scribe/ui/arrows.png\");
}
.arrow-link:hover {
    background-position: 0 -30px;
}",
	"script" => "/* Your code here */",
	"row" => 13
	),
"wrapper_id" => "wrapper-1419221274529-1233",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => true,
		"order" => 2
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 8,
		"col" => 4,
		"order" => 3,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"order" => 3,
		"top" => 0
		)
	)
));

$regions->add($tuition_course_3);

$tuition_course_4 = upfront_create_region(
			array(
"name" => "tuition-course-4",
"title" => "Tuition Course 4",
"type" => "wide",
"scope" => "local",
"container" => "tuition-course-4",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 82,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(242,242,242,1)",
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

$tuition_course_4->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "11",
"margin_bottom" => "0",
"id" => "module-1414233010109-1752",
"rows" => 16,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Course No. 4</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233010108-1401",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 16,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "CourseFourth",
	"theme_style" => "plaintxt-short-underline-style"
	),
"wrapper_id" => "wrapper-1414681806589-1948",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"clear" => true,
		"order" => 1
		),
	"mobile" => array(
		"col" => 7,
		"clear" => true,
		"order" => 1
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 3,
		"col" => 6,
		"top" => 3,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 1,
		"order" => 0
		)
	)
));

$tuition_course_4->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233694691-1509",
"rows" => 39,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233694691-1712",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 39
	),
"wrapper_id" => "wrapper-1414681806589-1948",
"sticky" => false,
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 1
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 1
		)
	)
));

$tuition_course_4->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "11",
"margin_bottom" => "0",
"id" => "module-1414679941482-1320",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_boxes (1)-385x235-5227.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_boxes (1).jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-tuition/services_boxes (1).jpg",
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
		"width" => 385,
		"height" => 235
		),
	"fullSize" => array(
		"width" => 385,
		"height" => 235
		),
	"position" => array(
		"top" => 0,
		"left" => -17.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 420,
		"height" => 240
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "139",
	"align" => "center",
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
	"element_id" => "image-1414679941473-1234",
	"row" => 18
	),
"wrapper_id" => "wrapper-1414681790355-1977",
"sticky" => false,
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11,
		"clear" => true,
		"order" => 0
		),
	"mobile" => array(
		"col" => 7,
		"clear" => true,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 1,
		"col" => 10,
		"top" => 4,
		"order" => 2
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 4,
		"order" => 2
		)
	)
));

$tuition_course_4->add_element("Code", array(
"columns" => "3",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414681037735-1799",
"rows" => 13,
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
	"element_id" => "object-1414681037735-1592",
	"code_selection_type" => "Create",
	"markup" => "<a href=\"#\" class=\"arrow-link\"></a>",
	"style" => ".arrow-link {
    display: block;
    width: 100px;
    height: 30px;
    background: url(\"/scribe/wp-content/themes/uf-scribe/ui/arrows.png\");
}
.arrow-link:hover {
    background-position: 0 -30px;
}",
	"script" => "/* Your code here */",
	"row" => 13
	),
"wrapper_id" => "wrapper-1419221465272-1542",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => true,
		"order" => 2
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 8,
		"col" => 4,
		"order" => 3,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"order" => 3,
		"top" => 0
		)
	)
));

$regions->add($tuition_course_4);

$enrol = upfront_create_region(
			array(
"name" => "enrol",
"title" => "Enrol",
"type" => "clip",
"scope" => "local",
"container" => "enrol",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 87,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(255,255,255,0.75)",
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

$enrol->add_element("PlainTxt", array(
"columns" => "13",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1414740492200-1407",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 style=\"text-align: center;\" class=\"\">Enrol Now</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414740492199-1167",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 14,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => ""
	),
"wrapper_id" => "wrapper-1414741162915-1766",
"sticky" => false,
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

$enrol->add_element("Ucontact", array(
"columns" => "20",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414740492288-1098",
"rows" => 81,
"options" => array(
	"form_add_title" => array(),
	"form_title" => "Contact form",
	"form_name_label" => "Your name",
	"form_email_label" => "Email",
	"form_email_to" => "sergey@incsub.com",
	"show_subject" => array(),
	"form_subject_label" => "Your subject:",
	"form_default_subject" => "Sent from the website",
	"form_message_label" => "Message",
	"form_button_text" => "SUBMIT",
	"form_validate_when" => "submit",
	"form_label_position" => "over",
	"type" => "UcontactModel",
	"view_class" => "UcontactView",
	"class" => "c24 upfront-contact-form",
	"has_settings" => 1,
	"id_slug" => "ucontact",
	"element_id" => "ucontact-object-1414740492284-1368",
	"anchor" => "",
	"theme_style" => "ucontact-enrol-style",
	"row" => 81
	),
"wrapper_id" => "wrapper-1414741271595-1014",
"sticky" => false,
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

$regions->add($enrol);

$footer_search = upfront_create_region(
			array(
"name" => "footer-search",
"title" => "Footer Search",
"type" => "wide",
"scope" => "local",
"container" => "footer-search",
"position" => 1,
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
