<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$content = upfront_create_region(
			array(
"name" => "content",
"title" => "Content",
"type" => "clip",
"scope" => "local",
"container" => "content",
"position" => 1,
"allow_sidebar" => true
),
			array(
"background_type" => "image",
"background_color" => "rgba(255,255,255,0.75)",
"nav_region" => "",
"background_style" => "fixed",
"background_position_y" => "0",
"background_position_x" => "100",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/about-image-bg-540.jpg",
"background_image_ratio" => 1.11,
"background_repeat" => "no-repeat",
"background_position" => "100% 0%",
"row" => 182,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"background_position_y" => "0",
		"background_style" => "fixed",
		"background_repeat" => "no-repeat",
		"background_position" => "100% 0%",
		"background_position_x" => "100",
		"background_type" => "color"
		),
	"mobile" => array(
		"edited" => false,
		"background_position_y" => "0",
		"background_style" => "fixed",
		"background_repeat" => "no-repeat",
		"background_position" => "100% 0%",
		"background_position_x" => "100",
		"background_type" => "color"
		)
	)
)
			);

$content->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "11",
"margin_bottom" => "0",
"id" => "module-1414569663785-1279",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 style=\"text-align: start;\" class=\"\">ABOUT</h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414569663784-1096",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 17,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => ""
	),
"row" => 17,
"sticky" => false,
"wrapper_id" => "wrapper-1414569894318-1509",
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

$content->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414569894580-1945",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">Aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food 1992 - 2000 banh mi biodiesel synth 3 wolf moon PBR skateboard. Typewriter sriracha lomo, Portland ugh bitters butcher roof party Wes Anderson single-origin coffee bespoke pork belly fashion axe craft beer ennui. PBR YOLO ennui vegan, plaid PBR&amp;B synth.</p><p class=\"\"></p><p class=\"\">Church-key narwhal vegan, 8-bit wayfarers flexitarian fap Williamsburg direct trade deep v bitters typewriter authentic umami. Echo Park normcore iPhone Bushwick farm-to-table. Fanny pack salvia Bushwick raw denim synth, Shoreditch skateboard iPhone meh semiotics Odd Future shabby chic Godard. Master cleanse mustache actually paleo retro banjo. Keytar ethical Austin, normcore Helvetica asymmetrical cray Cosby sweater fashion axe. Church-key narwhal vegan. Forage put a bird on it tofu, actually cornhole disrupt +1.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414569894579-1837",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 98,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"border" => "",
	"theme_style" => "plaintxt-underlined-style"
	),
"row" => 98,
"sticky" => false,
"wrapper_id" => "wrapper-1414569974863-1388",
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

$content->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "7",
"margin_right" => "0",
"margin_top" => "16",
"margin_bottom" => "0",
"id" => "module-1414569975128-1584",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 style=\"text-align: center;\" class=\"\">PORTFOLIO</h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414569975126-1063",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "rgba(0, 0, 0, 0)",
	"bg_color" => "rgba(0, 0, 0, 0)",
	"anchor" => "",
	"theme_style" => "plaintxt-short-underline-style"
	),
"row" => 15,
"sticky" => false,
"wrapper_id" => "wrapper-1414570310013-1779",
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

$content->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414570310258-1060",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food truck Tonx banh mi biodiesel synth 3 wolf moon PBR skateboard. Typewriter sriracha lomo, Portland ugh bitters butcher roof party Wes Anderson single-origin coffee bespoke pork belly fashion axe craft beer ennui. PBR YOLO ennui vegan, plaid PBR&amp;B synth.</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414570310257-1667",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 21,
	"is_edited" => true
	),
"row" => 21,
"sticky" => false,
"wrapper_id" => "wrapper-1414571107186-1623",
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

$content->add_element("Ugallery", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "8",
"margin_bottom" => "0",
"id" => "module-1414569663804-1756",
"options" => array(
	"type" => "UgalleryModel",
	"view_class" => "UgalleryView",
	"has_settings" => 1,
	"class" => "c24 upfront-gallery",
	"id_slug" => "ugallery",
	"status" => "ok",
	"images" => array(array(
			"id" => "28",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1-140x140-1911.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 28
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image1-190x190-7040.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => "entry",
			"ur" => "" . get_site_url() . "/course1/"
			), array(
			"id" => "29",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2-140x140-3880.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 29
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image2-190x190-9156.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "31",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4-140x140-9564.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 31
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image4-190x190-5844.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "32",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5-140x140-1176.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 32
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image5-190x190-8353.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "33",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6-140x140-7579.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 33
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image6-190x190-6571.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "34",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7-140x140-6752.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 34
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image7-190x190-1224.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "35",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8-140x140-8156.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 35
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image8-190x190-6098.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "36",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9-140x140-5837.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 36
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image9-190x190-9578.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "37",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10-140x140-5495.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 37
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image10-190x190-3406.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "38",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11-140x140-5147.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 38
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image11-190x190-3284.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "39",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12-140x140-2513.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 39
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image12-190x190-8444.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "40",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13-140x140-7739.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 40
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image13-190x190-4808.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "41",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14-140x140-8596.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 41
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image14-190x190-3879.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "42",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15-140x140-1766.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15.jpg",
					"full" => array(
						"width" => 190,
						"height" => 190
						),
					"crop" => array(
						"width" => 140,
						"height" => 140
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "140",
							"height" => "140",
							"left" => 0,
							"top" => 0
							),
						"resize" => array(
							"width" => 140,
							"height" => 140
							),
						"id" => 42
						)
					)
				),
			"size" => array(
				"width" => 190,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 140,
				"height" => 140
				),
			"cropOffset" => array(
				"width" => "140",
				"height" => "140",
				"left" => 0,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/gallery_image15-190x190-5959.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"cropPosition" => array(
				"top" => 0,
				"left" => 0
				),
			"urlType" => false
			), array(
			"id" => "43",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration-300x183.jpg", 300, 183, true),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration.jpg", 385, 235, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration.jpg", 385, 235, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration-190x190-7472.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration.jpg",
					"full" => array(
						"width" => 385,
						"height" => 235
						),
					"crop" => array(
						"width" => 190,
						"height" => 190
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "190",
							"height" => "190",
							"left" => 60,
							"top" => 0
							),
						"resize" => array(
							"width" => 311,
							"height" => 190
							),
						"id" => 43
						)
					)
				),
			"size" => array(
				"width" => 311,
				"height" => 190
				),
			"cropSize" => array(
				"width" => 190,
				"height" => 190
				),
			"cropOffset" => array(
				"width" => "190",
				"height" => "190",
				"left" => 60,
				"top" => 0
				),
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/services_restoration-190x190-7472.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1414569663799-1177",
			"rotation" => 0,
			"link" => "original",
			"url" => "",
			"title" => "Image caption",
			"caption" => "Image description",
			"alt" => "",
			"tags" => array(),
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"urlType" => false
			)),
	"elementSize" => array(
		"width" => 0,
		"height" => 0
		),
	"labelFilters" => array("true"),
	"thumbProportions" => "1",
	"thumbWidth" => "190",
	"thumbHeight" => 190,
	"captionType" => "none",
	"captionColor" => "#ffffff",
	"captionUseBackground" => true,
	"captionBackground" => "rgba(29, 29, 29, 0.9)",
	"showCaptionOnHover" => array("true"),
	"linkTo" => "image",
	"even_padding" => array("true"),
	"thumbPadding" => 2,
	"captionPosition" => "over",
	"captionWhen" => "hover",
	"no_padding" => array("true"),
	"element_id" => "ugallery-object-1414569663799-1177",
	"anchor" => "",
	"row" => 126,
	"theme_style" => "ugallery-scribe-style"
	),
"row" => 126,
"sticky" => false,
"wrapper_id" => "wrapper-1414572411447-1349",
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

$regions->add($content);

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
"wrapper_id" => "wrapper-1419216725297-1870",
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

$request_quote->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419215199959-1529",
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
"row" => 9,
"sticky" => false,
"wrapper_id" => "wrapper-1419216725324-1778",
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
"row" => 12,
"sticky" => false,
"wrapper_id" => "wrapper-1419216725329-1863",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
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
"row" => 17,
"sticky" => false,
"wrapper_id" => "wrapper-1419216725331-1673",
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
"row" => 13,
"sticky" => false,
"wrapper_id" => "wrapper-1419136561911-1320",
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
		"col" => 7,
		"order" => 0
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
"row" => 12,
"sticky" => false,
"wrapper_id" => "wrapper-1419136458352-1078",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 4,
		"clear" => true,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 2,
		"clear" => true,
		"order" => 0
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
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-twitter-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-223 1475 35 35\" class=\"icon icon-hover icon-twitter-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-twitter-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-facebook\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 995 35 35\" class=\"icon icon-static icon-facebook-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-facebook-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 835 35 35\" class=\"icon icon-hover icon-facebook-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-facebook-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-pinterest\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1155 35 35\" class=\"icon icon-static icon-pinterest-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-pinterest-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-223 1155 35 35\" class=\"icon icon-hover icon-pinterest-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-pinterest-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-youtube\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1475 35 35\" class=\"icon icon-static icon-youtube-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-youtube-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1315 35 35\" class=\"icon icon-hover icon-youtube-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-youtube-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-instagram\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 835 35 35\" class=\"icon icon-static icon-instagram-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-instagram-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"-63 1635 35 35\" class=\"icon icon-hover icon-instagram-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-instagram-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-flickr\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 1155 35 35\" class=\"icon icon-static icon-flickr-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-flickr-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" viewBox=\"97 995 35 35\" class=\"icon icon-hover icon-flickr-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-flickr-color\"></use>
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
"row" => 14,
"sticky" => false,
"wrapper_id" => "wrapper-1419136223309-1214",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 8,
		"clear" => false,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 5,
		"clear" => false,
		"order" => 0
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
