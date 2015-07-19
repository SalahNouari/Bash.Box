<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main_area = upfront_create_region(
			array(
"name" => "main-area",
"title" => "Main area",
"type" => "clip",
"scope" => "local",
"container" => "main-area",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 140,
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

$main_area->add_element("ThisPost", array(
"columns" => "14",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "12",
"margin_bottom" => "0",
"id" => "default-post",
"rows" => 100,
"options" => array(
	"type" => "ThisPostModel",
	"view_class" => "ThisPostView",
	"class" => "c24 upfront-this_post",
	"has_settings" => 1,
	"id_slug" => "this_post",
	"row" => 100,
	"post_data" => array("date"),
	"layout" => array(array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "title",
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "date",
					"classes" => " post-part c24"
					))
			), array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "contents",
					"classes" => " post-part c24"
					))
			)),
	"element_id" => "default-post-object",
	"anchor" => "",
	"theme_style" => "post-style"
	),
"wrapper_id" => "default-post-wrapper",
"disable_resize" => true,
"disable_drag" => false,
"sticky" => true,
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

$regions->add($main_area);

$main_area_right = upfront_create_region(
			array(
"name" => "main-area-right",
"title" => "Main area Right",
"type" => "wide",
"scope" => "local",
"container" => "main-area",
"sub" => "right",
"position" => 1,
"allow_sidebar" => true
),
			array(
"col" => 9,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 24
		),
	"mobile" => array(
		"edited" => false,
		"col" => 24
		)
	)
)
			);

$main_area_right->add_element("Uimage", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "12",
"margin_bottom" => "0",
"id" => "module-1419830160303-1275",
"rows" => 40,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-1-285x169-6558.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-1.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-1.jpg",
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
		"width" => 285,
		"height" => 169
		),
	"fullSize" => array(
		"width" => 295,
		"height" => 175,
		"top" => 189,
		"left" => 1007
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 285,
		"height" => 170
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "85",
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
	"element_id" => "image-1419830160293-1263",
	"row" => 40,
	"anchor" => ""
	),
"wrapper_id" => "wrapper-1419831489502-1692",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
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

$main_area_right->add_element("Uimage", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419831509590-1712",
"rows" => 40,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-2-285x170-5944.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-2.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-2.jpg",
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
		"width" => 287,
		"height" => 170
		),
	"fullSize" => array(
		"width" => 295,
		"height" => 175
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 285,
		"height" => 170
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "84",
	"align" => "center",
	"stretch" => true,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "object-1419831509591-1684",
	"row" => 40
	),
"wrapper_id" => "wrapper-1419831509589-1162",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
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

$main_area_right->add_element("Uimage", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419831516688-1418",
"rows" => 40,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-3-285x170-6018.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-3.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-3.jpg",
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
		"width" => 287,
		"height" => 170
		),
	"fullSize" => array(
		"width" => 295,
		"height" => 175
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 285,
		"height" => 170
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "83",
	"align" => "center",
	"stretch" => true,
	"vstretch" => true,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 1,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "object-1419831516688-1733",
	"row" => 40
	),
"wrapper_id" => "wrapper-1419831516687-1656",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
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

$main_area_right->add_element("Uimage", array(
"columns" => "7",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419831524055-1666",
"rows" => 21,
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-4-262x280-7006.jpg",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-4.jpg",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-post/blog-side-image-4.jpg",
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
		"width" => 262,
		"height" => 280
		),
	"fullSize" => array(
		"width" => 262,
		"height" => 280
		),
	"position" => array(
		"top" => 0,
		"left" => -11.5
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 285,
		"height" => 285
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "86",
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
	"element_id" => "object-1419831524055-1957",
	"row" => 21
	),
"wrapper_id" => "wrapper-1419831524053-1688",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
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

$regions->add($main_area_right);

$comments = upfront_create_region(
			array(
"name" => "comments",
"title" => "Comments",
"type" => "clip",
"scope" => "local",
"container" => "comments",
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

$comments->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "20",
"margin_bottom" => "0",
"id" => "module-1419830160461-1931",
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
	"element_id" => "upfront-code_element-object-1419830160460-1531",
	"code_selection_type" => "Create",
	"style" => "/* Your styles here */
.line {
    background: #C09533;
    display: block;
    width: 100%;
    height: 1px;
}",
	"markup" => "<div class=\"line\"></div>",
	"script" => "/* Your code here */",
	"row" => 7
	),
"wrapper_id" => "wrapper-1421907666018-1905",
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

$comments->add_element("PlainTxt", array(
"columns" => "8",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1416559629465-1364",
"rows" => 11,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p>
COMMENTS
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1416559629464-1804",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 11,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"theme_style" => "plaintxt-22px-style"
	),
"wrapper_id" => "wrapper-1419831060466-1078",
"sticky" => false,
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10
		),
	"mobile" => array(
		"edited" => false,
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

$comments->add_element("Ucomment", array(
"columns" => "15",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "default-comment",
"rows" => 10,
"options" => array(
	"id_slug" => "ucomment",
	"type" => "UcommentModel",
	"view_class" => "UcommentView",
	"class" => "c24 upfront-comment",
	"has_settings" => 0,
	"prepend_form" => false,
	"element_id" => "default-comment-object"
	),
"wrapper_id" => "wrapper-1419831053968-1071",
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

$regions->add($comments);

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
