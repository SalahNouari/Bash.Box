<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$archive_header = upfront_create_region(
			array(
"name" => "archive-header",
"title" => "Archive Header",
"type" => "wide",
"scope" => "local",
"container" => "archive-header",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 76,
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => true,
		"row" => 48
		)
	),
"background_type" => "image",
"nav_region" => "",
"background_color" => "#ffffff",
"background_style" => "full",
"background_position_y" => "50",
"background_position_x" => "50",
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive/archive-header.jpg",
"background_image_ratio" => 0.35
)
			);

$regions->add($archive_header);

$archive = upfront_create_region(
			array(
"name" => "archive",
"title" => "Archive",
"type" => "clip",
"scope" => "local",
"container" => "archive",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 28,
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

$archive->add_element("Code", array(
"columns" => "22",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "9",
"margin_bottom" => "0",
"id" => "module-1419735025540-1927",
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
	"element_id" => "upfront-code_element-object-1419735025539-1767",
	"row" => 5,
	"code_selection_type" => "Create",
	"markup" => "<div class=\"line\"></div>",
	"style" => "/* Your styles here */
.line {
    background: #C09533;
    display: block;
    width: 100%;
    height: 1px;
}",
	"script" => "/* Your code here */"
	),
"row" => 5,
"sticky" => false,
"wrapper_id" => "wrapper-1419735524211-1079",
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

$archive->add_element("PlainTxt", array(
"columns" => "12",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419735025498-1983",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\">ARCHIVE</span></h1>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1419735025497-1820",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"row" => 15,
	"is_edited" => true
	),
"row" => 15,
"sticky" => false,
"wrapper_id" => "wrapper-1419735588429-1521",
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

$regions->add($archive);

$content = upfront_create_region(
			array(
"name" => "content",
"title" => "Content Area",
"type" => "clip",
"scope" => "local",
"container" => "content",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 80,
"background_type" => "color",
"background_color" => "rgba(255,255,255,0.75)",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		),
	"mobile" => array(
		"edited" => false
		)
	),
"nav_region" => ""
)
			);

$content->add_element("Posts", array(
"columns" => "13",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "4",
"margin_bottom" => "0",
"id" => "module-1417939987621-1046",
"options" => array(
	"type" => "PostsModel",
	"view_class" => "PostsView",
	"has_settings" => 1,
	"class" => "c24 uposts-object",
	"id_slug" => "posts",
	"display_type" => "list",
	"list_type" => "generic",
	"offset" => 1,
	"taxonomy" => "",
	"term" => "",
	"content" => "excerpt",
	"limit" => 5,
	"pagination" => "numeric",
	"posts_list" => "",
	"post_parts" => array("date_posted", "featured_image", "title", "content", "read_more"),
	"enabled_post_parts" => array("date_posted", "featured_image", "title", "content", "read_more"),
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"),
	"date_posted_format" => "F j, Y",
	"categories_limit" => 3,
	"tags_limit" => 3,
	"comment_count_hide" => 0,
	"content_length" => "16",
	"resize_featured" => "1",
	"gravatar_size" => 200,
	"post-part-date_posted" => "<div class=\"uposts-part date_posted\"><span class=\"date\">{{date_1}} {{date_2}} {{date_3}}</span></div>",
	"post-part-author" => "<div class=\"uposts-part author\">
	By <a href=\"{{url}}\">{{name}}</a></div>",
	"post-part-gravatar" => "<div class=\"uposts-part gravatar\">
	{{gravatar}}
</div>",
	"post-part-comment_count" => "<div class=\"uposts-part comment_count\">
	{{comment_count}}
</div>",
	"post-part-featured_image" => "<div class=\"uposts-part thumbnail\" data-resize=\"{{resize}}\">
	{{thumbnail}}
</div>",
	"post-part-title" => "<div class=\"uposts-part title\">
	<h3><a href=\"{{permalink}}\" title=\"{{title}}\">{{title}}</a></h3>
</div>",
	"post-part-content" => "<div class=\"uposts-part content\">
	{{content}}
</div>",
	"post-part-read_more" => "<div class=\"uposts-part read_more\">
	<a href=\"{{permalink}}\">Read more</a></div>",
	"post-part-tags" => "<div class=\"uposts-part post_tags\">
	{{tags}}
</div>",
	"post-part-categories" => "<div class=\"uposts-part post_categories\">
	{{categories}}
</div>",
	"post-part-meta" => "<div class=\"uposts-part meta\">

</div>
",
	"element_id" => "posts-object-1417939987616-1173",
	"anchor" => "",
	"row" => 108,
	"theme_style" => "archive",
	"breakpoint" => array(
		"mobile" => array(
			"theme_style" => "archive-responsive"
			)
		)
	),
"row" => 108,
"sticky" => false,
"wrapper_id" => "wrapper-1417940108905-1761",
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

$regions->add($content);

$content_right = upfront_create_region(
			array(
"name" => "content-right",
"title" => "Content Area Right",
"type" => "wide",
"scope" => "local",
"container" => "content",
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
	),
"background_type" => "color",
"background_color" => "rgba(255,255,255,0)"
)
			);

$content_right->add_element("Uwidget", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "5",
"margin_bottom" => "0",
"id" => "module-1419735025533-1219",
"options" => array(
	"id_slug" => "uwidget",
	"type" => "UwidgetModel",
	"view_class" => "UwidgetView",
	"class" => "c24 upfront-widget",
	"has_settings" => 1,
	"widget" => "WP_Widget_Search",
	"element_id" => "uwidget-object-1419735025531-1952",
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
	"theme_style" => "search-widget-archive",
	"row" => 15
	),
"row" => 15,
"sticky" => false,
"wrapper_id" => "wrapper-1419735757701-1144",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10,
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
		"left" => 2,
		"col" => 8,
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

$content_right->add_element("Uwidget", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1419736278041-1872",
"options" => array(
	"id_slug" => "uwidget",
	"type" => "UwidgetModel",
	"view_class" => "UwidgetView",
	"class" => "c24 upfront-widget",
	"has_settings" => 1,
	"widget" => "WP_Widget_Archives",
	"element_id" => "uwidget-object-1419736278040-1160",
	"row" => 53,
	"selected_widget" => "WP_Widget_Archives",
	"anchor" => "",
	"widget_specific_fields" => array(
		"widget-archives--title" => array(
			"label" => "Title:",
			"name" => "title",
			"type" => "text",
			"value" => ""
			),
		"widget-archives--dropdown" => array(
			"name" => "dropdown",
			"type" => "checkbox",
			"value" => "",
			"label" => "Display as dropdown"
			),
		"widget-archives--count" => array(
			"name" => "count",
			"type" => "checkbox",
			"value" => "",
			"label" => "Show post counts"
			)
		),
	"title" => "",
	"dropdown" => array(),
	"count" => array()
	),
"row" => 53,
"sticky" => false,
"wrapper_id" => "wrapper-1419736348787-1748",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 10,
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
		"left" => 2,
		"col" => 8,
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

$regions->add($content_right);

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

$request_quote->add_element("PlainTxt", array(
"columns" => "11",
"margin_left" => "6",
"margin_right" => "0",
"margin_top" => "10",
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
		"top" => 0,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"top" => 0,
		"order" => 0
		)
	)
));

$request_quote->add_element("PlainTxt", array(
"columns" => "22",
"margin_left" => "1",
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
	)
));

$request_quote->add_element("Button", array(
"columns" => "9",
"margin_left" => "7",
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
		"col" => 10,
		"top" => 0,
		"row" => 17,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"top" => 0,
		"row" => 16,
		"order" => 0
		)
	)
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
		"col" => 10,
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
		"left" => 2,
		"col" => 8,
		"row" => 13,
		"top" => 5,
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
		"col" => 8,
		"clear" => true,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 5,
		"clear" => true,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 4,
		"col" => 4,
		"top" => 3,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 2,
		"col" => 3,
		"top" => 3,
		"row" => 19,
		"order" => 0
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
		"col" => 10,
		"clear" => false,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"col" => 7,
		"clear" => false,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 2,
		"col" => 8,
		"top" => 2,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"row" => 20,
		"top" => 1,
		"order" => 0
		)
	)
));

$regions->add($footer_search);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
