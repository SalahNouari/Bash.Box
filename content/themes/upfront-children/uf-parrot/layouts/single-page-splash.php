<?php
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
		"edited" => true,
		"row" => 192
		),
	"mobile" => array(
		"edited" => false,
		"col" => 24
		)
	),
"row" => 142,
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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-splash/hero-1.jpg",
"background_image_ratio" => 0.31
)
			);

$header->add_group(array(
"columns" => "4",
"margin_top" => "9",
"margin_left" => "2",
"id" => "module-group-1432838304509-1762",
"type" => "ModuleGroup",
"wrapper_id" => "wrapper-1432838304511-1714",
"original_col" => 4,
"href" => "" . get_site_url() . "",
"linkTarget" => "_self",
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

$header->add_element("Button", array(
"columns" => "1",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1432579632977-1234",
"options" => array(
	"content" => "&nbsp;",
	"href" => "",
	"align" => "center",
	"type" => "ButtonModel",
	"view_class" => "ButtonView",
	"element_id" => "button-object-1432579632977-1705",
	"class" => "c24 upfront-button",
	"has_settings" => 1,
	"id_slug" => "button",
	"currentpreset" => "parrot-icon-logo",
	"row" => 6,
	"theme_style" => "button-icon-logo",
	"is_edited" => true
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1432838304523-1555",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 3,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 1,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 2,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 1,
		"order" => 0
		)
	),
"group" => "module-group-1432838304509-1762"
));

$header->add_element("Button", array(
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
	"is_edited" => true
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1432838304525-1560",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 4,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 3,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 4,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 3,
		"order" => 1
		)
	),
"group" => "module-group-1432838304509-1762"
));

$header->add_element("Code", array(
"columns" => "9",
"margin_left" => "7",
"margin_right" => "0",
"margin_top" => "7",
"margin_bottom" => "0",
"id" => "module-1429807657881-1121",
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
	"element_id" => "upfront-code_element-object-1429807657881-1316",
	"row" => 14,
	"code_selection_type" => "Create",
	"markup" => "<form name=\"newsletter\" class=\"newsletter-form\" action=\"\" method=\"post\">
    <input type=\"email\" name=\"user-email\" placeholder=\"Email me when it's ready\">
    <span class=\"newsletter-btn\">
        <input type=\"submit\" value=\"Submit\">
    </span>
</form>",
	"style" => ".newsletter-form {
    display: table;
    border-collapse: separate;
}
.newsletter-form input[type=\"email\"] {
    width: 100%;
    height: 40px;
    padding: 12px;
    font-size: 14px;
    line-height: 1.4;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #63c9e2;
    opacity: 0.6;
    border-radius: 4px 0 0 4px;
    display: table-cell;
}
.newsletter-form input[type=\"email\"]:focus {
    opacity: 1;
    outline: 0;
}
.newsletter-btn {
    white-space: nowrap;
    vertical-align: middle;
    font-size: 0;
    margin-left: -1px;
    display: table-cell;
    width: 1%;
}
.newsletter-form input[type=\"submit\"] {
    background-color: #2a8a5e;
    color: #FFFFFF;
    border-radius: 0 4px 4px 0;
    border: 1px solid #2a8a5e;
    display: inline-block;
    padding: 10px 34px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    width: 100%;
    height: 40px;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    position: relative;
}
.newsletter-form input[type=\"submit\"]:hover {
   background-color: #ufc1;
}",
	"script" => "/* Your code here */"
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1430490114655-1282",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 11,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"col" => 7,
		"order" => 2,
		"clear" => true
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
	)
));

$header->add_element("PlainTxt", array(
"columns" => "20",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "18",
"margin_bottom" => "0",
"id" => "module-1429800300014-1995",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<span class=\"upfront_theme_color_2\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_2\" style=\"\" rel=\"\"><h1 style=\"text-align: center;\"><span class=\"upfront_theme_color_2\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_2\"></span>Beautiful, simple and easy to use chat manager</h1></span>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1429800300014-1641",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 15,
	"is_edited" => true
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1430492007165-1252",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 12,
		"order" => 0
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
		"edited" => false,
		"left" => 0,
		"col" => 12,
		"order" => 0
		),
	"mobile" => array(
		"edited" => true,
		"left" => 0,
		"col" => 7,
		"order" => 0,
		"top" => 0
		)
	)
));

$header->add_element("USlider", array(
"columns" => "20",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1432583707076-1861",
"options" => array(
	"id_slug" => "uslider",
	"type" => "USliderModel",
	"view_class" => "USliderView",
	"class" => "c24 upfront-uslider",
	"has_settings" => 1,
	"primaryStyle" => "below",
	"style" => "below",
	"controls" => "dots",
	"controlsWhen" => "always",
	"rotate" => array("true"),
	"rotateTime" => 5,
	"transition" => "crossfade",
	"slides" => array(array(
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices-150x150.png", 150, 150, true),
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices-300x113.png", 300, 113, true),
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices.png", 800, 300, false),
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices.png", 800, 300, false),
				"custom" => array(
					"error" => false,
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices-880x285-8924.png",
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices.png",
					"full" => array(
						"width" => 800,
						"height" => 300
						),
					"crop" => array(
						"width" => 880,
						"height" => 285
						),
					"editdata" => array(
						"rotate" => 0,
						"crop" => array(
							"width" => "880",
							"height" => "285",
							"left" => 0,
							"top" => 22
							),
						"resize" => array(
							"width" => 880,
							"height" => 330
							),
						"id" => 30,
						"element_id" => "uslider-object-1432583707075-1448"
						)
					)
				),
			"id" => "30",
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices.png",
			"status" => "ok",
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-splash/slide-devices-880x272-7450.png",
			"size" => array(
				"width" => 880,
				"height" => 330
				),
			"cropSize" => array(
				"width" => 880,
				"height" => 272
				),
			"cropOffset" => array(
				"top" => 58,
				"left" => 0
				),
			"rotation" => 0,
			"url" => "",
			"urlType" => "",
			"text" => "",
			"margin" => array(
				"left" => 0,
				"top" => 0
				),
			"captionColor" => "#ffffff",
			"captionBackground" => "#000000",
			"style" => "below",
			"rightImageWidth" => 3,
			"rightWidth" => 6
			)),
	"captionUseBackground" => "0",
	"captionBackground" => "transparent",
	"rightImageWidth" => 3,
	"rightWidth" => 22,
	"element_id" => "uslider-object-1432583707075-1448",
	"row" => 66,
	"anchor" => ""
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1432584197717-1095",
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
