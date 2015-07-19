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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services.jpg",
"background_image_ratio" => 0.35,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => true,
		"row" => 42
		)
	)
)
			);

$regions->add($services_header);

$services = upfront_create_region(
			array(
"name" => "services",
"title" => "Services",
"type" => "clip",
"scope" => "local",
"container" => "services",
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

$services->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-1414649502757-1050",
"rows" => 6,
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
	"row" => 6
	),
"wrapper_id" => "wrapper-1419224670602-1025",
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

$services->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1414231843243-1900",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 style=\"text-align: center;\" class=\"\"><span class=\"upfront_theme_color_0\">ORT BINDERY SERVICES</span></h1>",
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
	"row" => 15
	),
"wrapper_id" => "wrapper-1419224674988-1583",
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

$services->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1414233333415-1917",
"rows" => 20,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food truck Tonx banh mi biodiesel synth 3 wolf moon PBR skateboard. Typewriter sriracha lomo, Portland ugh bitters butcher roof party Wes Anderson single-origin coffee bespoke pork belly fashion axe craft beer ennui. PBR YOLO ennui vegan, plaid PBR&amp;B synth.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233333414-1507",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 20
	),
"wrapper_id" => "wrapper-1419224678948-1665",
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

$regions->add($services);

$services_business_cards = upfront_create_region(
			array(
"name" => "services-business-cards",
"title" => "Services Business Cards",
"type" => "clip",
"scope" => "local",
"container" => "services-business-cards",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 61,
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

$services_business_cards->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1414653330028-1817",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_business_cards-385x235-1599.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_business_cards.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_business_cards.jpg",
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
	"image_id" => "130",
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
"wrapper_id" => "wrapper-1414678712425-1566",
"sticky" => false,
"new_line" => "true",
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
		"order" => 0,
		"top" => 10
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 0
		)
	)
));

$services_business_cards->add_element("PlainTxt", array(
"columns" => "7",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1414232882527-1238",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Business Cards</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232882525-1468",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "BusinessCards",
	"theme_style" => "plaintxt-short-underline-style",
	"row" => 15
	),
"wrapper_id" => "wrapper-1419224698225-1491",
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
		"left" => 2,
		"col" => 8,
		"top" => 1,
		"order" => 1
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"top" => 2,
		"order" => 1
		)
	)
));

$services_business_cards->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233551274-1383",
"rows" => 36,
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
	"row" => 36
	),
"wrapper_id" => "wrapper-1419224698225-1491",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"order" => 2,
		"top" => 1
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 2
		)
	)
));

$services_business_cards->add_element("Code", array(
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
"wrapper_id" => "wrapper-1414681084168-1620",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
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
		"top" => 2,
		"order" => 3
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"top" => 0,
		"order" => 3
		)
	)
));

$regions->add($services_business_cards);

$customs_books = upfront_create_region(
			array(
"name" => "customs-books",
"title" => "Customs Books",
"type" => "wide",
"scope" => "local",
"container" => "customs-books",
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

$customs_books->add_element("PlainTxt", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "11",
"margin_bottom" => "0",
"id" => "module-1414232743692-1128",
"rows" => 12,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Customs Books</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232743691-1614",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "CustomsBooks",
	"theme_style" => "plaintxt-short-underline-style",
	"row" => 12,
	"breakpoint" => array(
		"mobile" => array(
			"row" => 12
			)
		)
	),
"wrapper_id" => "wrapper-1414681345255-1670",
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
		"edited" => true,
		"left" => 2,
		"col" => 8,
		"order" => 0,
		"top" => 1
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"row" => 12,
		"order" => 0,
		"top" => 0
		)
	)
));

$customs_books->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233668134-1811",
"rows" => 36,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233668135-1138",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 36,
	"breakpoint" => array(
		"tablet" => array(
			"row" => 44
			)
		)
	),
"wrapper_id" => "wrapper-1414681345255-1670",
"sticky" => false,
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"row" => 44,
		"order" => 1,
		"top" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 1,
		"top" => 0
		)
	)
));

$customs_books->add_element("Code", array(
"columns" => "3",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "4",
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
"wrapper_id" => "wrapper-1414681345255-1670",
"sticky" => false,
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 8,
		"col" => 4,
		"top" => 0,
		"order" => 2
		),
	"mobile" => array(
		"edited" => true,
		"left" => 4,
		"col" => 3,
		"top" => 0,
		"order" => 2
		)
	)
));

$customs_books->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "12",
"margin_bottom" => "0",
"id" => "module-1414678713534-1826",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_customs_books-385x235-8708.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_customs_books.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_customs_books.jpg",
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
	"image_id" => "131",
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
"wrapper_id" => "wrapper-1414681339378-1604",
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
		"order" => 3,
		"top" => 9
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 3,
		"top" => 4
		)
	)
));

$regions->add($customs_books);

$student_binding = upfront_create_region(
			array(
"name" => "student-binding",
"title" => "Student Binding",
"type" => "clip",
"scope" => "local",
"container" => "student-binding",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 83,
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

$student_binding->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "15",
"margin_bottom" => "0",
"id" => "module-1414679846556-1523",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_student_binding-385x235-7139.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_student_binding.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_student_binding.jpg",
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
	"image_id" => "132",
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
"wrapper_id" => "wrapper-1414679941054-1810",
"sticky" => false,
"new_line" => "true",
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
		"order" => 0,
		"top" => 9
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

$student_binding->add_element("PlainTxt", array(
"columns" => "7",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "14",
"margin_bottom" => "0",
"id" => "module-1414232933915-1427",
"rows" => 15,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Student Binding</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414232933914-1645",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "StudentBinding",
	"row" => 15,
	"theme_style" => "_default"
	),
"wrapper_id" => "wrapper-1414233009782-1954",
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
		"left" => 2,
		"col" => 8,
		"top" => 0,
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

$student_binding->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233680985-1161",
"rows" => 33,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233680985-1197",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 33
	),
"wrapper_id" => "wrapper-1414233009782-1954",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"order" => 2,
		"top" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 2
		)
	)
));

$student_binding->add_element("Code", array(
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
"wrapper_id" => "wrapper-1419224900749-1569",
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

$regions->add($student_binding);

$services_boxes = upfront_create_region(
			array(
"name" => "services-boxes",
"title" => "Services Boxes",
"type" => "wide",
"scope" => "local",
"container" => "services-boxes",
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

$services_boxes->add_element("PlainTxt", array(
"columns" => "3",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "14",
"margin_bottom" => "0",
"id" => "module-1414233010109-1752",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\">Boxes</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233010108-1401",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 14,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "Boxes",
	"theme_style" => "plaintxt-short-underline-style"
	),
"wrapper_id" => "wrapper-1414681806589-1948",
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
		"edited" => true,
		"left" => 4,
		"col" => 4,
		"top" => 0,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 2,
		"col" => 3,
		"top" => 0,
		"order" => 0
		)
	)
));

$services_boxes->add_element("PlainTxt", array(
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
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"top" => 0,
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

$services_boxes->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "15",
"margin_bottom" => "0",
"id" => "module-1414679941482-1320",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_boxes-385x235-3756.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_boxes.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_boxes.jpg",
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
	"image_id" => "133",
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
		"top" => 9,
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

$services_boxes->add_element("Code", array(
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
"wrapper_id" => "wrapper-1419224939590-1038",
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
		"top" => 0,
		"order" => 3
		)
	)
));

$regions->add($services_boxes);

$services_restoration = upfront_create_region(
			array(
"name" => "services-restoration",
"title" => "Services Restoration",
"type" => "clip",
"scope" => "local",
"container" => "services-restoration",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 82,
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

$services_restoration->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "14",
"margin_bottom" => "0",
"id" => "module-1414680036156-1229",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_restoration (1)-385x235-4441.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_restoration (1).jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_restoration (1).jpg",
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
	"image_id" => "134",
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
	"element_id" => "image-1414680036090-1098",
	"row" => 18
	),
"wrapper_id" => "wrapper-1422258057878-1567",
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
		"top" => 10,
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

$services_restoration->add_element("PlainTxt", array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "14",
"margin_bottom" => "0",
"id" => "module-1414233022866-1974",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"upfront_theme_color_0\">Restoration</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233022865-1815",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "Restoration",
	"theme_style" => "plaintxt-short-underline-style",
	"row" => 14
	),
"wrapper_id" => "wrapper-1422258061343-1770",
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
		"top" => 0,
		"order" => 1
		),
	"mobile" => array(
		"edited" => true,
		"left" => 1,
		"col" => 5,
		"top" => 0,
		"order" => 1
		)
	)
));

$services_restoration->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233708035-1070",
"rows" => 36,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233708035-1120",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 36
	),
"wrapper_id" => "wrapper-1422258061343-1770",
"sticky" => false,
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"order" => 2,
		"top" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"order" => 2
		)
	)
));

$services_restoration->add_element("Code", array(
"columns" => "3",
"margin_left" => "20",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414681015858-1772",
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
	"element_id" => "object-1414681015858-1054",
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
"wrapper_id" => "wrapper-1419224973010-1381",
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

$regions->add($services_restoration);

$services_hospitality = upfront_create_region(
			array(
"name" => "services-hospitality",
"title" => "Services Hospitality",
"type" => "wide",
"scope" => "local",
"container" => "services-hospitality",
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

$services_hospitality->add_element("PlainTxt", array(
"columns" => "5",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-1414233035435-1772",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 style=\"text-align: justify;\" class=\"\">Hospitality</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414233035434-1795",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 14,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "Hospitality",
	"theme_style" => "plaintxt-short-underline-style"
	),
"wrapper_id" => "wrapper-1414682230331-1279",
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
		"edited" => true,
		"left" => 3,
		"col" => 6,
		"top" => 0,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 1,
		"col" => 5,
		"top" => 0,
		"order" => 0
		)
	)
));

$services_hospitality->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414233717962-1719",
"rows" => 37,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">90's quinoa authentic Odd Future, roof party ugh freegan master cleanse cred seitan salvia Terry Richardson kitsch mustache. Farm-to-table normcore artisan, lomo hoodie +1 3 wolf moon kale chips Tonx literally bicycle rights cornhole. PBR slow-carb disrupt, street art actually ennui cliche shabby chic. DIY forage literally quinoa, Shoreditch freegan pop-up ethnic farm-to-table street art deep Polaroid letterpress gluten-free.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414233717964-1234",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 37
	),
"wrapper_id" => "wrapper-1414682230331-1279",
"sticky" => false,
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => true,
		"left" => 0,
		"col" => 12,
		"order" => 1,
		"top" => 0
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

$services_hospitality->add_element("Uimage", array(
"columns" => "10",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-1414680116534-1330",
"rows" => 18,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_hospitality-385x235-5533.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_hospitality.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services/services_hospitality.jpg",
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
	"image_id" => "135",
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
	"element_id" => "image-1414680116511-1680",
	"row" => 18
	),
"wrapper_id" => "wrapper-1414682202323-1096",
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
		"top" => 10,
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

$services_hospitality->add_element("Code", array(
"columns" => "3",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1414653330099-1143",
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
	"element_id" => "upfront-code_element-object-1414653330098-1762",
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
"wrapper_id" => "wrapper-1414682204664-1147",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12,
		"clear" => true,
		"order" => 2
		),
	"mobile" => array(
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
		"top" => 0,
		"order" => 3
		)
	)
));

$regions->add($services_hospitality);

$request_quote = upfront_create_region(
            array(
"name" => "request-quote",
"title" => "Request Quote",
"type" => "clip",
"scope" => "local",
"container" => "request-quote",
"position" => 1,
"allow_sidebar" => true
),
            array(
"row" => 101,
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

$request_quote->add_group(array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "10",
"margin_bottom" => "0",
"id" => "module-group-1419216725291-1208",
"rows" => 10,
"wrapper_id" => "wrapper-1419216725297-1870",
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

$request_quote->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419215199959-1529",
"rows" => 9,
"options" => array(
    "view_class" => "PlainTxtView",
    "id_slug" => "plain_text",
    "content" => "<h2 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">Request a Quote</span></h2>",
    "type" => "PlainTxtModel",
    "element_id" => "text-object-1419215199958-1654",
    "class" => "c24 upfront-plain_txt",
    "has_settings" => 1,
    "is_edited" => true,
    "row" => 9,
    "border_style" => "none",
    "border_width" => 1,
    "border_color" => "",
    "bg_color" => "",
    "anchor" => "",
    "theme_style" => "_default"
    ),
"wrapper_id" => "wrapper-1419216725324-1778",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
    "tablet" => array(
        "edited" => false,
        "col" => 10,
        "clear" => true,
        "order" => 0
        ),
    "mobile" => array(
        "edited" => false,
        "col" => 6,
        "clear" => true,
        "order" => 0
        )
    ),
"breakpoint" => array(
    "tablet" => array(
        "edited" => true,
        "left" => 2,
        "col" => 8,
        "top" => 0
        ),
    "mobile" => array(
        "edited" => true,
        "left" => 1,
        "col" => 5,
        "top" => 0
        )
    ),
"group" => "module-group-1419216725291-1208"
));

$request_quote->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419215603405-1575",
"rows" => 12,
"options" => array(
    "view_class" => "PlainTxtView",
    "id_slug" => "plain_text",
    "content" => "<p class=\"upfront_theme_color_3\" style=\"text-align: center;\">
    Umami do viral, fugiat pug Thundercats Williamsburg  10%  wolf moon Etsy twee meh. Selfies Intelligentsia quis delectus. Tempor deserunt four loko, chambray delectus before they sold out next
    <span class=\"upfront_theme_color_1\">0401-100-900</span>. <br>
</p>",
    "type" => "PlainTxtModel",
    "element_id" => "text-object-1419215603404-1346",
    "class" => "c24 upfront-plain_txt",
    "has_settings" => 1,
    "row" => 12,
    "is_edited" => true,
    "border_style" => "none",
    "border_width" => 1,
    "border_color" => "rgba(0, 0, 0, 0)",
    "bg_color" => "rgba(0, 0, 0, 0)",
    "anchor" => "",
    "theme_style" => "plaintxt-18px-style"
    ),
"wrapper_id" => "wrapper-1419216725329-1863",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
    "tablet" => array(
        "edited" => false,
        "col" => 22,
        "clear" => true,
        "order" => 1
        ),
    "mobile" => array(
        "edited" => false,
        "col" => 22,
        "clear" => true,
        "order" => 1
        )
    ),
"breakpoint" => array(
    "tablet" => array(
        "edited" => false,
        "left" => 0,
        "col" => 22
        ),
    "mobile" => array(
        "edited" => false,
        "left" => 0,
        "col" => 22
        )
    ),
"group" => "module-group-1419216725291-1208"
));

$request_quote->add_element("Button", array(
"columns" => "9",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419215200044-1799",
"rows" => 17,
"options" => array(
    "content" => "Request Quote",
    "href" => "#",
    "align" => "center",
    "type" => "ButtonModel",
    "view_class" => "ButtonView",
    "element_id" => "button-object-1419215200043-1297",
    "class" => "c24 upfront-button",
    "has_settings" => 1,
    "id_slug" => "button",
    "row" => 17,
    "is_edited" => true,
    "currentpreset" => "request-button",
    "theme_style" => "request-button",
    "breakpoint" => array(
        "tablet" => array(
            "row" => 17
            ),
        "mobile" => array(
            "row" => 16
            )
        )
    ),
"wrapper_id" => "wrapper-1419216725331-1673",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
    "tablet" => array(
        "edited" => false,
        "col" => 10,
        "clear" => true,
        "order" => 2
        ),
    "mobile" => array(
        "edited" => false,
        "col" => 6,
        "clear" => true,
        "order" => 2
        )
    ),
"breakpoint" => array(
    "tablet" => array(
        "edited" => true,
        "left" => 2,
        "col" => 8,
        "top" => 0,
        "row" => 17
        ),
    "mobile" => array(
        "edited" => true,
        "left" => 1,
        "col" => 5,
        "top" => 0,
        "row" => 16
        )
    ),
"group" => "module-group-1419216725291-1208"
));

$regions->add($request_quote);

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
