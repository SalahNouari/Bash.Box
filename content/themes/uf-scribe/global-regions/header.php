<?php
$header = upfront_create_region(
			array(
"name" => "header",
"title" => "Header",
"type" => "wide",
"scope" => "global",
"container" => "header",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 19,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(29,29,29,0.8)",
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

$header->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "1",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1424331624984-1119",
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/scribe-logo-119x59-5145.png",
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/scribe-logo.png",
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/scribe-logo.png",
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
		"width" => 119,
		"height" => 59
		),
	"fullSize" => array(
		"width" => 119,
		"height" => 59
		),
	"position" => array(
		"top" => 0,
		"left" => 0
		),
	"marginTop" => 0,
	"element_size" => array(
		"width" => 150,
		"height" => 60
		),
	"rotation" => 0,
	"color" => "#ffffff",
	"background" => "#000000",
	"captionBackground" => "0",
	"image_id" => "59",
	"align" => "left",
	"stretch" => false,
	"vstretch" => false,
	"quick_swap" => false,
	"gifImage" => 0,
	"placeholder_class" => "",
	"type" => "UimageModel",
	"view_class" => "UimageView",
	"has_settings" => 0,
	"class" => "c24 upfront-image",
	"id_slug" => "image",
	"element_id" => "image-1424331624981-1042",
	"row" => 6
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424331655918-1966",
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

$header->add_element("Code", array(
"columns" => "11",
"margin_left" => "7",
"margin_right" => "0",
"margin_top" => "2",
"margin_bottom" => "0",
"id" => "module-1414149945932-1667",
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
	"element_id" => "upfront-code_element-object-1414149945930-1617",
	"code_selection_type" => "Create",
	"markup" => "<ul class=\"share-wrapper\">
    <li class=\"share-item item-twitter\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-223 1635 35 35\" class=\"icon icon-static icon-twitter-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-twitter-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-223 1475 35 35\" class=\"icon icon-hover icon-twitter-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-twitter-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-facebook\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 995 35 35\" class=\"icon icon-static icon-facebook-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-facebook-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 835 35 35\" class=\"icon icon-hover icon-facebook-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-facebook-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-pinterest\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 1155 35 35\" class=\"icon icon-static icon-pinterest-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-pinterest-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-223 1155 35 35\" class=\"icon icon-hover icon-pinterest-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-pinterest-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-youtube\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 1475 35 35\" class=\"icon icon-static icon-youtube-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-youtube-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 1315 35 35\" class=\"icon icon-hover icon-youtube-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-youtube-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-instagram\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"97 835 35 35\" class=\"icon icon-static icon-instagram-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-instagram-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"-63 1635 35 35\" class=\"icon icon-hover icon-instagram-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-instagram-color\"></use>
            </svg>
        </a>
    </li>
    <li class=\"share-item item-flickr\">
        <a href=\"#\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"97 1155 35 35\" class=\"icon icon-static icon-flickr-stroke\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-flickr-stroke\"></use>
            </svg>
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" viewBox=\"97 995 35 35\" class=\"icon icon-hover icon-flickr-color\">
                <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"" . get_stylesheet_directory_uri() . "/ui/sprites.svg#icon-flickr-color\"></use>
            </svg>
        </a>
    </li>
</ul>",
	"style" => "/* Your styles here */
ul.share-wrapper {
    list-style-type: none;
    padding: 0 15px;
    margin: -15px 0 0;
    position: relative;
    top: 15px;
    text-align: right;
}

li.share-item {
    display: inline-block;
    margin: 0 5px;
    height: 30px;
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
	"row" => 8,
	"breakpoint" => array(
		"tablet" => array(
			"row" => 10
			),
		"mobile" => array(
			"row" => 16
			)
		)
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424331708347-1062",
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
		"top" => 2,
		"row" => 10,
		"order" => 0
		),
	"mobile" => array(
		"edited" => false,
		"left" => 0,
		"col" => 7,
		"row" => 16,
		"top" => 1,
		"order" => 0
		)
	)
));

$header->add_element("Unewnavigation", array(
"columns" => "16",
"margin_left" => "2",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "module-1424335945730-1230",
"options" => array(
	"type" => "UnewnavigationModel",
	"view_class" => "UnewnavigationView",
	"class" => "c24 upfront-navigation",
	"has_settings" => 1,
	"id_slug" => "unewnavigation",
	"menu_items" => array(array(
			"menu-item-db-id" => 28,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Home",
			"menu-item-url" => "" . get_site_url() . "/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "28",
			"menu-item-target" => "",
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 29,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "About",
			"menu-item-url" => "" . get_site_url() . "/about/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "29",
			"menu-item-target" => "",
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 30,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Services",
			"menu-item-url" => "" . get_site_url() . "/services/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "30",
			"menu-item-target" => "",
			"menu-item-position" => 3,
			"sub" => array(array(
					"menu-item-db-id" => 31,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Business Cards",
					"menu-item-url" => "" . get_site_url() . "/service-business-cards/",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "31",
					"menu-item-target" => "",
					"menu-item-position" => 8
					), array(
					"menu-item-db-id" => 32,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Custom Books",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "32",
					"menu-item-target" => "",
					"menu-item-position" => 9
					), array(
					"menu-item-db-id" => 33,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Student Binding",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "33",
					"menu-item-target" => "",
					"menu-item-position" => 10
					), array(
					"menu-item-db-id" => 34,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Boxes",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "34",
					"menu-item-target" => "",
					"menu-item-position" => 11
					), array(
					"menu-item-db-id" => 35,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Restoration",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "35",
					"menu-item-target" => "",
					"menu-item-position" => 12
					), array(
					"menu-item-db-id" => 36,
					"menu-item-parent-id" => "30",
					"menu-item-type" => "custom",
					"menu-item-title" => "Hopitality",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "36",
					"menu-item-target" => "",
					"menu-item-position" => 13
					))
			), array(
			"menu-item-db-id" => 37,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Tuition",
			"menu-item-url" => "" . get_site_url() . "/tuition/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "37",
			"menu-item-target" => "",
			"menu-item-position" => 4,
			"sub" => array(array(
					"menu-item-db-id" => 38,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #1",
					"menu-item-url" => "" . get_site_url() . "/course1/",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "38",
					"menu-item-target" => "",
					"menu-item-position" => 14
					), array(
					"menu-item-db-id" => 39,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #2",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "39",
					"menu-item-target" => "",
					"menu-item-position" => 15
					), array(
					"menu-item-db-id" => 40,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #3",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "40",
					"menu-item-target" => "",
					"menu-item-position" => 16
					), array(
					"menu-item-db-id" => 41,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #4",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "41",
					"menu-item-target" => "",
					"menu-item-position" => 17
					), array(
					"menu-item-db-id" => 42,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #5",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "42",
					"menu-item-target" => "",
					"menu-item-position" => 18
					), array(
					"menu-item-db-id" => 43,
					"menu-item-parent-id" => "37",
					"menu-item-type" => "custom",
					"menu-item-title" => "Course #6",
					"menu-item-url" => "#",
					"menu-item-object" => "custom",
					"menu-item-object-id" => "43",
					"menu-item-target" => "",
					"menu-item-position" => 19
					))
			), array(
			"menu-item-db-id" => 44,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Gallery",
			"menu-item-url" => "" . get_site_url() . "/gallery/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "44",
			"menu-item-target" => "",
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 45,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "News",
			"menu-item-url" => "" . get_site_url() . "/blog/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "45",
			"menu-item-target" => "",
			"menu-item-position" => 6
			), array(
			"menu-item-db-id" => 46,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Contact",
			"menu-item-url" => "" . get_site_url() . "/contact/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "46",
			"menu-item-target" => "",
			"menu-item-position" => 7
			)),
	"menu_style" => "horizontal",
	"menu_alignment" => "right",
	"allow_sub_nav" => array("no"),
	"allow_new_pages" => array(),
	"element_id" => "unewnavigation-object-1424335945730-1628",
	"initialized" => false,
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left",
			"burger_over" => "over",
			"menu_style" => "horizontal",
			"menu_alignment" => "right",
			"width" => 1080
			)
		),
	"menu_id" => false,
	"menu_slug" => "top-nav-menu",
	"burger_menu" => array(),
	"burger_alignment" => "left",
	"burger_over" => "over",
	"is_floating" => array(),
	"anchor" => "",
	"theme_style" => "unewnavigation-top-nav-style",
	"row" => 6
	),
"row" => 6,
"sticky" => false,
"wrapper_id" => "wrapper-1424331708347-1062",
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
