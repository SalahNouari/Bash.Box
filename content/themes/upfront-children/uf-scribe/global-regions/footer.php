<?php
$footer = upfront_create_region(
			array(
"name" => "footer",
"title" => "Footer",
"type" => "wide",
"scope" => "global",
"container" => "footer",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 60,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(51,51,51,1)",
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

$footer->add_group(array(
"columns" => "5",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-group-1424335523683-1633",
"wrapper_id" => "wrapper-1421730041154-1488",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 6,
		"clear" => true,
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
		"left" => 1,
		"col" => 5,
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

$footer->add_element("PlainTxt", array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414173076476-1425",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 style=\"text-align: start;\" class=\"\"><span class=\"upfront_theme_color_0\">Services</span></h4>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414173076475-1146",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"row" => 8
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335523703-1977",
"new_line" => "true",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"col" => 5,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335523683-1633"
));

$footer->add_element("Unewnavigation", array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1419133617210-1555",
"options" => array(
	"type" => "UnewnavigationModel",
	"view_class" => "UnewnavigationView",
	"class" => "c24 upfront-navigation",
	"has_settings" => 1,
	"id_slug" => "unewnavigation",
	"menu_items" => array(array(
			"menu-item-db-id" => 47,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Custom Books",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "47",
			"menu-item-target" => "",
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 48,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Student Binding",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "48",
			"menu-item-target" => "",
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 49,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Boxes",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "49",
			"menu-item-target" => "",
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 50,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Restoration",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "50",
			"menu-item-target" => "",
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 51,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Hospitality",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "51",
			"menu-item-target" => "",
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 52,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Business Cards",
			"menu-item-url" => "" . get_site_url() . "/service-business-cards/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "52",
			"menu-item-target" => "",
			"menu-item-position" => 6
			)),
	"menu_style" => "vertical",
	"menu_alignment" => "left",
	"allow_sub_nav" => array("no"),
	"allow_new_pages" => array("no"),
	"element_id" => "unewnavigation-object-1419133617209-1645",
	"initialized" => false,
	"menu_id" => false,
	"menu_slug" => "services",
	"burger_menu" => array(),
	"burger_alignment" => "left",
	"burger_over" => "over",
	"is_floating" => array(),
	"anchor" => "",
	"theme_style" => "footer-menu",
	"row" => 55,
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left",
			"burger_over" => "over",
			"menu_style" => "vertical",
			"menu_alignment" => "left",
			"width" => 1080
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335523703-1977",
"new_line" => "true",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335523683-1633"
));

$footer->add_group(array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-group-1424335508236-1827",
"wrapper_id" => "wrapper-1414934067025-1983",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5,
		"clear" => false,
		"order" => 0
		),
	"mobile" => array(
		"col" => 6,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 1
		),
	"mobile" => array(
		"edited" => false,
		"left" => 1,
		"col" => 5,
		"order" => 0
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414173132297-1300",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 style=\"text-align: start;\" class=\"\"><span class=\"upfront_theme_color_0\">Tuition</span></h4>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414173132294-1061",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 9,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => ""
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335508257-1875",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"col" => 5,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335508236-1827"
));

$footer->add_element("Unewnavigation", array(
"columns" => "4",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1419133633692-1449",
"options" => array(
	"type" => "UnewnavigationModel",
	"view_class" => "UnewnavigationView",
	"class" => "c24 upfront-navigation",
	"has_settings" => 1,
	"id_slug" => "unewnavigation",
	"menu_items" => array(array(
			"menu-item-db-id" => 53,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #1",
			"menu-item-url" => "" . get_site_url() . "/course1/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "53",
			"menu-item-target" => "",
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 54,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #2",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "54",
			"menu-item-target" => "",
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 55,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #3",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "55",
			"menu-item-target" => "",
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 56,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #4",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "56",
			"menu-item-target" => "",
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 57,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #5",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "57",
			"menu-item-target" => "",
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 58,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Course #6",
			"menu-item-url" => "#",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "58",
			"menu-item-target" => "",
			"menu-item-position" => 6
			)),
	"menu_style" => "vertical",
	"menu_alignment" => "left",
	"allow_sub_nav" => array("no"),
	"allow_new_pages" => array(),
	"element_id" => "unewnavigation-object-1419133633690-1146",
	"initialized" => false,
	"menu_slug" => "tuition",
	"menu_id" => false,
	"burger_menu" => array(),
	"burger_alignment" => "left",
	"burger_over" => "over",
	"is_floating" => array(),
	"anchor" => "",
	"theme_style" => "footer-menu",
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left",
			"burger_over" => "over",
			"menu_style" => "vertical",
			"menu_alignment" => "left",
			"width" => 1080
			)
		),
	"row" => 41
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335508257-1875",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335508236-1827"
));

$footer->add_group(array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-group-1424335461041-1793",
"wrapper_id" => "wrapper-1424335195103-1746",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"col" => 9,
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
		"left" => 3,
		"col" => 6,
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

$footer->add_element("PlainTxt", array(
"columns" => "5",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414905614485-1363",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 style=\"text-align: start;\" class=\"upfront_theme_color_0\"><span class=\"upfront_theme_color_0\">Contact</span></h4>",
	"type" => "PlainTxtModel",
	"element_id" => "object-1414905614485-1100",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"row" => 10
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335461064-1969",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 6,
		"order" => 0
		),
	"mobile" => array(
		"col" => 5,
		"order" => 0
		)
	),
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 6,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335461041-1793"
));

$footer->add_element("PlainTxt", array(
"columns" => "4",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1424331624980-1433",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<p class=\"\">
	120 Bay Street
</p>
<p class=\"\">
	Port Melbourne
</p>
<p class=\"\">
	<span></span>3207
</p>
<p class=\"\">
	<span></span>VIC
</p>
<p class=\"\">
	<span></span>AUSTRALIA
</p>
<p class=\"\">
	<span class=\"upfront_theme_color_1\">+61-401-100-900 </span>
</p>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1424331624980-1618",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 44
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335461064-1969",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 1,
		"col" => 4,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 5,
		"order" => 0
		)
	),
"group" => "module-group-1424335461041-1793"
));

$footer->add_group(array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "3",
"margin_bottom" => "0",
"id" => "module-group-1424335541226-1839",
"wrapper_id" => "wrapper-1424335043679-1677",
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

$footer->add_element("PlainTxt", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1414172646650-1707",
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h4 style=\"text-align: start;\" class=\"\"><span class=\"upfront_theme_color_0\">News</span></h4>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1414172646648-1657",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 10,
	"border_style" => "none",
	"border_width" => 1,
	"border_color" => "",
	"bg_color" => "",
	"anchor" => "",
	"breakpoint" => array(
		"mobile" => array(
			"row" => 9
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335541247-1750",
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8,
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
		"col" => 8,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"row" => 9,
		"top" => 0,
		"order" => 0
		)
	),
"group" => "module-group-1424335541226-1839"
));

$footer->add_element("Posts", array(
"columns" => "8",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1419134466596-1228",
"options" => array(
	"type" => "PostsModel",
	"view_class" => "PostsView",
	"has_settings" => 1,
	"class" => "c24 uposts-object",
	"id_slug" => "posts",
	"display_type" => "single",
	"list_type" => "generic",
	"offset" => 1,
	"taxonomy" => "",
	"term" => "",
	"content" => "excerpt",
	"limit" => 5,
	"pagination" => "numeric",
	"posts_list" => "",
	"post_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"),
	"enabled_post_parts" => array("featured_image", "title", "content", "read_more"),
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"),
	"date_posted_format" => "F j, Y g:i a",
	"categories_limit" => 3,
	"tags_limit" => 3,
	"comment_count_hide" => 0,
	"content_length" => "32",
	"resize_featured" => array(),
	"gravatar_size" => 200,
	"post-part-date_posted" => "<div class=\"uposts-part date_posted\">
	Posted on <span class=\"date\">{{date_1}}</span>, at <span class=\"time\">{{date_2}}</span></div>",
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
	"element_id" => "posts-object-1419134466592-1693",
	"anchor" => "",
	"theme_style" => "footer-news",
	"row" => 63,
	"breakpoint" => array(
		"mobile" => array(
			"row" => 52
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424335541247-1750",
"breakpoint" => array(
	"tablet" => array(
		"edited" => false,
		"left" => 0,
		"col" => 8,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"row" => 52,
		"top" => 3,
		"order" => 0
		)
	),
"group" => "module-group-1424335541226-1839"
));

$regions->add($footer);
