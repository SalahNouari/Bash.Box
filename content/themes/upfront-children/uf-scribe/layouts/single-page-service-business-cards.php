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
"background_type" => "slider",
"background_color" => "#fff",
"nav_region" => "",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/page-background.jpg",
"background_image_ratio" => 0.35,
"row" => 96,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => true,
		"row" => 40
		)
	),
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
"title" => "Main Area",
"type" => "clip",
"scope" => "local",
"container" => "main",
"position" => 10,
"allow_sidebar" => true
),
			array(
"row" => 53,
"background_type" => "color",
"background_color" => "rgba(255,255,255,0.75)",
"nav_region" => "",
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

$main->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "6",
"margin_bottom" => "0",
"id" => "module-1419229267082-1434",
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
	"element_id" => "upfront-code_element-object-1419229267081-1211",
	"code_selection_type" => "Create",
	"markup" => "<div class=\"line\"></div>",
	"style" => "/* Your styles here */
.line {
    background: #C09533;
    display: block;
    width: 100%;
    height: 1px;
}",
	"row" => 7
	),
"wrapper_id" => "wrapper-1419229316100-1881",
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
"id" => "module-1419229508558-1031",
"rows" => 12,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">BUSINESS CARDS</span></h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419229508557-1101",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 12,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1419229649848-1457",
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
"id" => "module-1419229420765-1220",
"rows" => 17,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">
	aw denim pickled messenger bag Etsy. Swag narwhal retro twee, farm-to-table readymade High Life Pinterest asymmetrical. Small batch tote bag food truck Tonx banh mi biodiesel synth 3 wolf moon PBR skateboard. Typewriter sriracha lomo, Portland ugh bitters butcher roof party Wes Anderson single-origin coffee bespoke pork belly fashion axe craft beer ennui. PBR YOLO ennui vegan, plaid PBR&amp;B synth.<br>
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419229420764-1736",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 17,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1419229508354-1299",
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

$portfolio = upfront_create_region(
			array(
"name" => "portfolio",
"title" => "Portfolio",
"type" => "clip",
"scope" => "local",
"container" => "portfolio",
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

$portfolio->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "5",
"margin_bottom" => "0",
"id" => "module-1419229650028-1673",
"rows" => 13,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">PORTFOLIO</span></h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419229650027-1201",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 13
	),
"wrapper_id" => "wrapper-1419230838250-1735",
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

$portfolio->add_element("Ugallery", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419229266971-1604",
"rows" => 69,
"options" => array(
	"type" => "UgalleryModel",
	"view_class" => "UgalleryView",
	"has_settings" => 1,
	"class" => "c24 upfront-gallery",
	"id_slug" => "ugallery",
	"status" => "ok",
	"images" => array(array(
			"id" => "55",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1-140x140-6063.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg",
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
						"id" => 55
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1-190x190-9810.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image1.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "56",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2-140x140-3666.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg",
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
						"id" => 56
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2-190x190-4371.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image2.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "57",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3-140x140-6634.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg",
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
						"id" => 57
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3-190x190-7089.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image3.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "58",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4-140x140-4583.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg",
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
						"id" => 58
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4-190x190-2268.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image4.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "59",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5-140x140-7863.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg",
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
						"id" => 59
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5-190x190-7545.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image5.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "60",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6-140x140-4930.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg",
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
						"id" => 60
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6-190x190-3499.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image6.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "61",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7-140x140-4682.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg",
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
						"id" => 61
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7-190x190-4061.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image7.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "62",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8-140x140-4582.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg",
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
						"id" => 62
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8-190x190-8566.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image8.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "63",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9-140x140-3338.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg",
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
						"id" => 63
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9-190x190-2420.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image9.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "64",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10-140x140-7294.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg",
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
						"id" => 64
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10-190x190-3169.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image10.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "65",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11-140x140-1461.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg",
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
						"id" => 65
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11-190x190-5492.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image11.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "66",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12-140x140-6264.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg",
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
						"id" => 66
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12-190x190-3149.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image12.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "67",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13-140x140-6322.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg",
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
						"id" => 67
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13-190x190-5508.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image13.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "68",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14-140x140-8404.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg",
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
						"id" => 68
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14-190x190-6861.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image14.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
			), array(
			"id" => "69",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg",
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15-150x150.jpg", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg", 190, 190, false),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg", 190, 190, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg", 190, 190, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15-140x140-7501.jpg",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg",
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
						"id" => 69
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15-190x190-5680.jpg",
			"loading" => false,
			"status" => "ok",
			"element_id" => "ugallery-object-1419229266967-1247",
			"urlType" => "image",
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gallery_image15.jpg",
			"rotation" => 0,
			"link" => "original",
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
				)
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
	"captionUseBackground" => 0,
	"captionBackground" => "#000000",
	"showCaptionOnHover" => array("true"),
	"linkTo" => "image",
	"even_padding" => array("true"),
	"thumbPadding" => 2,
	"element_id" => "ugallery-object-1419229266967-1247",
	"anchor" => "",
	"theme_style" => "ugallery-scribe-style",
	"row" => 69
	),
"wrapper_id" => "wrapper-1419230829183-1439",
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

$regions->add($portfolio);

$quote = upfront_create_region(
			array(
"name" => "quote",
"title" => "Quote",
"type" => "clip",
"scope" => "local",
"container" => "quote",
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

$quote->add_element("Code", array(
"columns" => "2",
"margin_left" => "11",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419229316248-1245",
"rows" => 12,
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
	"element_id" => "upfront-code_element-object-1419229316247-1043",
	"code_selection_type" => "Create",
	"markup" => "<div class=\"quote-icon\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"49\" height=\"49\" viewBox=\"-390 1308 49 49\" class=\"icon icon-quote-circled\">
        <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_site_url() . "/main/wp-content/themes/uf-scribe/ui/sprites.svg#icon-quote-circled\"></use>
    </svg>
</div>",
	"style" => "/* Your styles here */
.quote-icon {
    text-align: center;
}",
	"script" => "/* Your code here */",
	"row" => 12
	),
"wrapper_id" => "wrapper-1419231412830-1950",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 7
		),
	"mobile" => array(
		"edited" => false,
		"col" => 5
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 5,
		"col" => 2
		),
	"mobile" => array(
		"edited" => false,
		"left" => 2,
		"col" => 3
		)
	)
));

$quote->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419229730112-1010",
"rows" => 35,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<blockquote class=\"\" style=\"text-align: center;\">
	<em>MAKE IT SIMPLE,</em><br>
	<em>
	BUT SIGNIFICANT</em><br>
</blockquote>
<p class=\"\" style=\"text-align: center;\">
	-DON DRAPER -
</p>
<span class=\"\"></span>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419229730111-1578",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "blockquote-style",
	"row" => 35
	),
"wrapper_id" => "wrapper-1419231086131-1429",
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

$regions->add($quote);

$gift = upfront_create_region(
			array(
"name" => "gift",
"title" => "Gift",
"type" => "wide",
"scope" => "local",
"container" => "gift",
"position" => 20,
"allow_sidebar" => true
),
			array(
"row" => 135,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"background_type" => "image",
"nav_region" => "",
"background_color" => "#ffffff",
"background_style" => "tile",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gift-bg-pattern.png",
"background_image_ratio" => 1,
"background_repeat" => "repeat"
)
			);

$gift->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "10",
"margin_right" => "0",
"margin_top" => "6",
"margin_bottom" => "0",
"id" => "module-1419730746257-1994",
"rows" => 12,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gift-142x142-1434.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gift.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/gift.png",
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
		"width" => 142,
		"height" => 142
		),
	"fullSize" => array(
		"width" => 142,
		"height" => 142
		),
	"position" => array(
		"top" => 0,
		"left" => -4
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 142
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "70",
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
	"element_id" => "image-1419730746251-1731",
	"row" => 12,
	"anchor" => ""
	),
"wrapper_id" => "wrapper-1419730761216-1926",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 8
		),
	"mobile" => array(
		"edited" => false,
		"col" => 6
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 4,
		"col" => 4
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 5
		)
	)
));

$gift->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419730746248-1103",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h2 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">DOWNLOAD A FREE GIFT</span></h2>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419730746247-1995",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 14,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "_default"
	),
"wrapper_id" => "wrapper-1419731469447-1223",
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

$gift->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "module-1419731469599-1577",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\" style=\"text-align: center;\">
	Nostrud tattooed veniam, tofu pariatur brunch street art Shoreditch keffiyeh roof party. Typewriter shabby chic culpa, cillum American Apparel synth hashtag seitan bicycle rights artisan quis hoodie aliqua chambray organic.
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419731469599-1993",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 14,
	"is_edited" => true
	),
"wrapper_id" => "wrapper-1419732217944-1765",
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

$gift->add_element("Code", array(
"columns" => "10",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419732660168-1687",
"rows" => 48,
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
	"element_id" => "upfront-code_element-object-1419732660167-1862",
	"code_selection_type" => "Create",
	"markup" => "<div>
    <img src=\"" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/video-placeholder.jpg\">
</div>",
	"style" => "/* Your styles here */
img { max-width: 100%; }",
	"script" => "/* Your code here */",
	"row" => 48
	),
"wrapper_id" => "wrapper-1419732685704-1738",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7
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

$gift->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "5",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1419730761405-1335",
"rows" => 25,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/free-pdf-icon-75x95-1889.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/free-pdf-icon.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-service-business-cards/free-pdf-icon.png",
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
		"width" => 75,
		"height" => 95
		),
	"fullSize" => array(
		"width" => 76,
		"height" => 96
		),
	"position" => array(
		"top" => 0,
		"left" => -37.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 95
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "73",
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
	"element_id" => "image-1419730761401-1305",
	"row" => 25
	),
"wrapper_id" => "wrapper-1419733293930-1831",
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
		"left" => 4,
		"col" => 4
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 5
		)
	)
));

$gift->add_element("Code", array(
"columns" => "8",
"margin_left" => "3",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419732685892-1616",
"rows" => 29,
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
	"element_id" => "upfront-code_element-object-1419732685891-1101",
	"code_selection_type" => "Create",
	"markup" => "<form>
    <input type=\"email\" name=\"email\" placeholder=\"Enter your email\">
    <input type=\"submit\" name=\"submit\" value=\"Sign me up!\">
</form>",
	"style" => "/* Your styles here */
input {
    display: block;
    border: 1px solid #c09533;
    background: #f9f9f9;
    width: 100%;
    height: 45px;
    padding: 0 12px;
    margin: 0 0 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
input[type=\"submit\"],
input[type=\"button\"],
button {
    display: block;
    background: #c09533;
    border-top: 3px solid transparent;
    border-bottom: 3px solid #9a7729;
    border-left: none;
    border-right: none;
    width: 100%;
    margin: 0;
    color: #ffffff;
    text-transform: uppercase;
}
input[type=\"submit\"]:hover,
input[type=\"button\"]:hover,
button:hover {
    background: #9a7729;
    border-top-color: #c09533;
    border-bottom-color: transparent;
}


",
	"script" => "/* Your code here */",
	"row" => 29
	),
"wrapper_id" => "wrapper-1419733293930-1831",
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

$regions->add($gift);

$request_quote = upfront_create_region(
			array(
"name" => "request-quote",
"title" => "Request Quote",
"type" => "clip",
"scope" => "local",
"container" => "request-quote",
"position" => 20,
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
