<?php
return array(
	'theme_fonts' => '[{"id":"Quattrocentoregular","font":{"family":"Quattrocento","category":"serif","variants":["regular","700"]},"variant":"regular","displayVariant":"regular"},{"id":"Quattrocento Sansregular","font":{"family":"Quattrocento Sans","category":"sans-serif","variants":["regular","italic","700","700italic"]},"variant":"regular","displayVariant":"regular"},{"id":"Quattrocento Sansitalic","font":{"family":"Quattrocento Sans","category":"sans-serif","variants":["regular","italic","700","700italic"]},"variant":"italic","displayVariant":"italic"},{"id":"Quattrocento Sans700","font":{"family":"Quattrocento Sans","category":"sans-serif","variants":["regular","italic","700","700italic"]},"variant":"700","displayVariant":"700 normal"},{"id":"Quattrocento700","font":{"family":"Quattrocento","category":"serif","variants":["regular","700"]},"variant":"700","displayVariant":"700 normal"}]',
	'layout_style' => '/* Global */
html {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    text-rendering: geometricPrecision;
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
*:before, *:after {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
::selection {
    background: #00a384;
    color: #ffffff;
}
::-moz-selection {
    background: #00a384;
    color: #ffffff;
}
/* HTML Tags & Formatting - Headings & Paragraphs */
.upfront-output-object h1, .upfront-output-plain_text h1, .upfront-output-object h2, .upfront-output-plain_text h2, .upfront-output-object h3, .upfront-output-plain_text h3, .upfront-output-object h4, .upfront-output-plain_text h4, .upfront-output-object h5, .upfront-output-plain_text h5, .upfront-output-object h6, .upfront-output-plain_text h6 {
    margin-top: 22px;
    margin-bottom: 22px;
}
.upfront-output-object p, .upfront-output-plain_text p, .upfront-output-object blockquote, .upfront-output-plain_text blockquote {
    margin-top: 1.5em;
    margin-bottom: 1.5em;
}
.upfront-output-object h1, .upfront-output-plain_text h1 {
    letter-spacing: -1px;
}
.upfront-output-object h4, .upfront-output-plain_text h4 {
    letter-spacing: -0.64px;
}
.upfront-output-object p, .upfront-output-plain_text p {
    letter-spacing: 0.41px;
}
.upfront-output-object h6, .upfront-output-plain_text h6 {
    text-transform: uppercase;
}
.upfront-output-object a, .upfront-output-plain_text a {
    transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
}
.upfront-output-object a, .upfront-output-object a:visited, .upfront-output-plain_text a, .upfront-output-plain_text a:visted {
    border-bottom-color: rgba(0, 163, 132, 0.8);
}
.upfront-output-object a:visited, .upfront-output-plain_text a:visted {
    color: #007051;
}
/* HTML Tags & Formatting - Blockquote */
.upfront-output-object blockquote, .upfront-output-plain_text blockquote {
    position: relative;
}
.upfront-output-object blockquote p, .upfront-output-plain_text blockquote p {
    margin-top: 0;
    margin-bottom: 0;
}
.upfront-output-object blockquote p:before, .upfront-output-plain_text blockquote p:before {
    content: "";
    width: 30px;
    height: 36px;
    display: inline-block;
    background: url("UPFRONT_THEME_BASE/ui/sprites.png") no-repeat;
    background-image: url("UPFRONT_THEME_BASE/ui/sprites.svg"), none;
    background-position: -390px -220px;
}
.upfront-output-object blockquote.upfront-quote-alternative, .upfront-output-plain_text blockquote.upfront-quote-alternative {
    border-left: 4px solid #01bc9d;
}
.upfront-output-object blockquote.upfront-quote-alternative p:before, .upfront-output-plain_text blockquote.upfront-quote-alternative p:before {
    display: none;
}
.upfront-output-object .wp-caption-text, .upfront-output-plain_text .wp-caption-text {
    padding-top: 0 !important;
}
.upfront-output-object .wp-caption-text p, .upfront-output-plain_text .wp-caption-text p {
    color: #666666;
    font-size: 15px;
    line-height: 1em;
    font-family: "Quattrocento";
    font-weight: 400;
    font-style: normal;
}
/* HTML Tags & Formatting - Tables */
.upfront-output-object table, .upfront-output-plain_text table {
    background: #ffffff;
}
.upfront-output-object table *, .upfront-output-plain_text table * {
    font-size: 16px;
    line-height: 1.8em;
    font-family: "Quattrocento Sans";
    font-style: normal;
}
.upfront-output-object th, .upfront-output-plain_text th, .upfront-output-object th a, .upfront-output-plain_text th a {
    color: #01bc9d;
    font-weight: 600;
}
.upfront-output-object th a:hover, .upfront-output-plain_text th a:hover {
    font-weight: 600;
}
.upfront-output-object td, .upfront-output-plain_text td {
    color: #999999;
    font-weight: 400;
}
.upfront-output-object tbody tr:nth-child(2n+1), .upfront-output-plain_text tbody tr:nth-child(2n+1) {
    background: #fafafa;
}
/* HTML Tags & Formatting - Definition Lists */
.upfront-output-object dl *, .upfront-output-plain_text dl * {
    margin-top: 8px;
    margin-bottom: 8px;
    font-family: "Quattrocento Sans";
    font-weight: 400;
    font-style: normal;
}
.upfront-output-object dt, .upfront-output-plain_text dt {
    font-weight: bold;
}
/* HTML Tags & Formatting - Unordered Lists */
.upfront-output-object li ul, .upfront-output-plain_text li ul {
    margin-left: 15px;
}
/* HTML Tags & Formatting - Ordered Lists */
.upfront-output-object li ol, .upfront-output-plain_text li ol {
    margin-left: 15px;
}
/* Images */
.upfront-image-container img {
    filter: blur(0px);
    -o-filter: blur(0px);
    -ms-filter: blur(0px);
    -moz-filter: blur(0px);
    -webkit-filter: blur(0px);
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius=\\\'0\\\');
}',
	'typography' => '{"h1":{"weight":"400","style":"normal","size":"56","line_height":"0.94","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h2":{"weight":"400","style":"normal","size":"44","line_height":"1.2","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h3":{"weight":"400","style":"normal","size":"32","line_height":"1.4","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h4":{"weight":"400","style":"normal","size":"28","line_height":"1.28","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"h5":{"weight":"inherit","style":"inherit","size":"24","line_height":"1.8","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"h6":{"weight":"700","style":"normal","size":"18","line_height":"1.4","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"p":{"weight":"400","style":"normal","size":"17","line_height":"1.5294","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"},"a":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc2"},"a:hover":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc3"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"1.8","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"rgba(77,77,77,1)","theme_color_class":"upfront_theme_color_6"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"1.8","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc6"},"blockquote":{"weight":"400","style":"normal","size":"28","line_height":"1.4","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"italic","size":"28","line_height":"1.4","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"}}',
	'layout_properties' => '[{"typography":[],"name":"","value":""},{"name":"background_color","value":"rgba(255,255,255,1)"},{"name":"grid","value":{"column_widths":{"desktop":"45"},"column_paddings":{"desktop":"10"},"baselines":{"desktop":"5"},"type_paddings":{"desktop":"10"}}},{"name":"background_type","value":"image"},{"name":"use_padding","value":0},{"name":"contained_region_width","value":1080},{"name":"background_style","value":"tile"},{"name":"background_position_y","value":"50"},{"name":"background_position_x","value":"50"},{"name":"background_image","value":"UPFRONT_THEME_BASE/images/archive-home/noise.jpg"},{"name":"background_image_ratio","value":2.26},{"name":"background_repeat","value":"repeat"}]',
	'theme_colors' => '{"colors":[{"color":"#333333","prev":"#333333","highlight":"#333333","shade":"#333333","selected":"","luminance":""},{"color":"#61737b","prev":"#61737b","highlight":"#61737b","shade":"#61737b","selected":"","luminance":""},{"color":"#01bc9d","prev":"#01bc9d","highlight":"#01bc9d","shade":"#01bc9d","selected":"","luminance":""},{"color":"#00a384","prev":"#00a384","highlight":"#00a384","shade":"#00a384","selected":"","luminance":""},{"color":"#007051","prev":"#007051","highlight":"#007051","shade":"#007051","selected":"","luminance":""},{"color":"#ffffff","prev":"#ffffff","highlight":"#ffffff","shade":"#ffffff","selected":"","luminance":""},{"color":"#4d4d4d","prev":"#4d4d4d","highlight":"#4d4d4d","shade":"#4d4d4d","selected":"","luminance":""}],"range":"0"}',
	'post_image_variants' => '[{"vid":"variant-1414082154417-1612","label":"Full Width","group":{"margin_left":"0","margin_right":"0","col":"24","row":"60","left":"0","float":"none","height":"300","width_cls":"c24","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1414082173807-1526","label":"Center","group":{"margin_left":"0","margin_right":"0","col":"16","row":"63","left":"4","float":"none","height":"300","width_cls":"c16","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"16","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}}]',
	'button_presets' => '[{"id":"Style #1","bordertype":"solid","borderwidth":"2","bordercolor":"#ufc3","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc3","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(0, 138, 122)","hov_borderradius3":"2","hov_bgcolor":"#ufc3","hov_color":"#ufc5","theme_style":"button-style-four","hov_bordertype":"solid","hov_borderwidth":"2"},{"id":"Style #2","bordertype":"solid","borderwidth":"1","bordercolor":"rgb(124, 132, 141)","borderradius1":"2","borderradius2":"2","borderradius4":"2","borderradius3":"2","bgcolor":"rgb(149, 157, 166)","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc5","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(98, 106, 115)","hov_bgcolor":"rgb(124, 132, 141)","hov_color":"#ufc5","theme_style":"button-style-two","hov_borderradius3":"2","hov_bordertype":"solid"},{"id":"Style #3","bordertype":"solid","borderwidth":"2","bordercolor":"#ufc5","borderradius1":"2","borderradius2":"2","borderradius4":"2","borderradius3":"2","bgcolor":"#ufc5","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc5","hov_duration":"0.5","hov_transition":"ease-in-out","theme_style":"button-style-three","hov_borderwidth":"2","hov_bordercolor":"rgb(0, 138, 122)","hov_bgcolor":"#ufc3","hov_color":"#ufc5"},{"id":"Style #4","bordertype":"none","borderwidth":"2","bordercolor":"rgb(157, 199, 192)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(237, 237, 237)","fontsize":"14","fontface":"Quattrocento Sans","color":"#ufc3","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc3","hov_color":"#ufc5","theme_style":"button-pricing-one","hov_borderwidth":"2","hov_bordertype":"none","hov_borderradius3":"2"},{"id":"Pricing Button #1","bordertype":"solid","borderwidth":"2","bordercolor":"rgb(157, 199, 192)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(237, 237, 237)","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc3","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc3","hov_color":"#ufc5","theme_style":"button-pricing-one"},{"id":"Pricing Button #3","bordertype":"solid","borderwidth":"2","bordercolor":"rgb(157, 199, 192)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc3","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc5","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc4","hov_color":"#ufc5","theme_style":"button-pricing-three"},{"id":"Pricing Button #2","bordertype":"solid","borderwidth":"2","bordercolor":"rgb(157, 199, 192)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc3","fontsize":"16","fontface":"Quattrocento Sans","color":"#ufc5","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc4","hov_color":"#ufc5","theme_style":"button-pricing-two"},{"id":"Facebook","bordertype":"none","borderwidth":"2","bordercolor":"rgb(157, 199, 192)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(237, 237, 237)","fontsize":"14","fontface":"Quattrocento Sans","color":"#ufc3","hov_duration":"0.5","hov_transition":"ease-in-out","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc3","hov_color":"#ufc5","theme_style":"button-facebook","hov_bordertype":"none"},{"id":"Twitter","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(204, 204, 204)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","hov_bordertype":"none","hov_bordercolor":"rgb(157, 199, 192)","hov_bgcolor":"#ufc3","hov_color":"#ufc5","theme_style":"button-twitter"},{"id":"Instagram","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(204, 204, 204)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-instagram"},{"id":"Pinterest","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgb(204, 204, 204)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-pinterest"}]',
	'menus' => '[{"id":false,"slug":"luke-menu","name":"Luke Menu","description":"","items":[{"ID":1710,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Home","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"home-3","to_ping":"","pinged":"","post_modified":"2015-05-13 23:59:26","post_modified_gmt":"2015-05-13 23:59:26","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/home-3\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1710,"menu_item_parent":"0","object_id":"1710","object":"custom","type":"custom","type_label":"Custom Link","title":"Home","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1711,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"about","to_ping":"","pinged":"","post_modified":"2015-05-13 23:59:26","post_modified_gmt":"2015-05-13 23:59:26","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/about\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1711,"menu_item_parent":"0","object_id":"1711","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1712,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Portfolio","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"portfolio","to_ping":"","pinged":"","post_modified":"2015-05-13 23:59:26","post_modified_gmt":"2015-05-13 23:59:26","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/portfolio\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1712,"menu_item_parent":"0","object_id":"1712","object":"custom","type":"custom","type_label":"Custom Link","title":"Portfolio","url":"%siteurl%\\/portfolio\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1713,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Pricing","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"pricing","to_ping":"","pinged":"","post_modified":"2015-05-13 23:59:26","post_modified_gmt":"2015-05-13 23:59:26","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/pricing\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1713,"menu_item_parent":"0","object_id":"1713","object":"custom","type":"custom","type_label":"Custom Link","title":"Pricing","url":"%siteurl%\\/pricing\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1714,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Contact","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"contact","to_ping":"","pinged":"","post_modified":"2015-05-13 23:59:26","post_modified_gmt":"2015-05-13 23:59:26","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/contact\\/","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1714,"menu_item_parent":"0","object_id":"1714","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact","url":"%siteurl%\\/contact\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"luke-footer-menu","name":"Luke Footer Menu","description":"","items":[{"ID":1715,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"about-2","to_ping":"","pinged":"","post_modified":"2015-06-27 02:04:19","post_modified_gmt":"2015-06-27 02:04:19","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/about-2\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1715,"menu_item_parent":"0","object_id":"1715","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1716,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"News","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"news","to_ping":"","pinged":"","post_modified":"2015-06-27 02:04:19","post_modified_gmt":"2015-06-27 02:04:19","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/news\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1716,"menu_item_parent":"0","object_id":"1716","object":"custom","type":"custom","type_label":"Custom Link","title":"News","url":"%siteurl%\\/news\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1718,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Archive","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"archive","to_ping":"","pinged":"","post_modified":"2015-06-27 02:04:19","post_modified_gmt":"2015-06-27 02:04:19","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/archive\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1718,"menu_item_parent":"0","object_id":"1718","object":"custom","type":"custom","type_label":"Custom Link","title":"Archive","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1717,"post_author":"1","post_date":"2015-05-13 23:59:26","post_date_gmt":"2015-05-13 23:59:26","post_content":"","post_title":"Contact","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"contact-2","to_ping":"","pinged":"","post_modified":"2015-06-27 02:04:19","post_modified_gmt":"2015-06-27 02:04:19","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/lukeandsara.dev\\/2015\\/05\\/13\\/contact-2\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1717,"menu_item_parent":"0","object_id":"1717","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact","url":"%siteurl%\\/contact\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":null,"name":null,"description":null,"items":false}]',
	'icon_fonts' => '[{"name":"Luke_and_Sara_Sprite_02-01","family":"Luke_and_Sara_Sprite_02-01","files":{"svg":"Luke_and_Sara_Sprite_02-01.svg"},"type":"theme-defined","active":false}]',
	'required_pages' => '{"about":{"name":"About","slug":"about","layout":"single-page-about"},"news":{"name":"News","slug":"news","layout":"single-page-news"},"pricing":{"name":"Pricing","slug":"pricing","layout":"single-page-pricing"},"portfolio":{"name":"Portfolio","slug":"portfolio","layout":"single-page-portfolio"},"portfolio-extended":{"name":"Portfolio Extended","slug":"portfolio-extended","layout":"single-page-portfolio-extended"},"contact":{"name":"Contact","slug":"contact","layout":"single-page-contact"},"gallery":{"name":"Gallery","slug":"gallery","layout":"single-page-gallery"}}',
	'responsive_settings' => '{"breakpoints":[{"name":"Default Desktop","short_name":"Default","default":true,"id":"desktop","width":1080,"columns":24,"enabled":true,"fixed":true,"column_width":"45","column_padding":"10","baseline":"5","type_padding":"10","active":"true","styles":""},{"name":"Tablet","short_name":"Tablet","id":"tablet","width":570,"columns":12,"enabled":true,"fixed":true,"default":false,"active":"false","styles":""},{"name":"Mobile","short_name":"Mobile","id":"mobile","width":315,"columns":7,"enabled":true,"fixed":true,"default":false,"active":"false","typography":{"h1":{"weight":"400","style":"normal","size":"40","line_height":"1","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h2":{"weight":"400","style":"normal","size":"40","line_height":"1.2","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h3":{"weight":"400","style":"normal","size":"28","line_height":"1.4","font_face":"Quattrocento","font_family":"serif","color":"#ufc0"},"h4":{"weight":"400","style":"normal","size":"22","line_height":"1.2","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"h5":{"weight":"inherit","style":"inherit","size":"23","line_height":"1.8","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"h6":{"weight":"700","style":"normal","size":"18","line_height":"1.4","font_face":"Quattrocento","font_family":"serif","color":"#ufc1"},"p":{"weight":"400","style":"normal","size":"17","line_height":"1.6","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"},"a":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc2"},"a:hover":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc3"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"1.8","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"rgba(77,77,77,1)","theme_color_class":"upfront_theme_color_6"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"1.8","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc6"},"blockquote":{"weight":"400","style":"normal","size":"20","line_height":"1.2","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"italic","size":"28","line_height":"1.4","font_face":"Quattrocento Sans","font_family":"sans-serif","color":"#ufc0"}},"styles":""}]}',
	'tab_presets' => '[{"active-font-size":"16","active-font-family":"Quattrocento Sans","active-font-color":"#ufc4","hover-font-size":"16","hover-font-family":"Quattrocento Sans","hover-font-color":"#ufc3","hover-transition-duration":"0.3","hover-transition-easing":"ease-in-out","static-font-size":"16","static-font-family":"Quattrocento Sans","static-font-color":"#ufc2","id":"default","name":"Default"},{"active-font-size":"16","active-font-family":"Quattrocento Sans","active-font-color":"#ufc4","hover-font-size":"16","hover-font-family":"Quattrocento Sans","hover-font-color":"#ufc3","hover-transition-duration":"0.3","hover-transition-easing":"ease-in-out","static-font-size":"16","static-font-family":"Quattrocento Sans","static-font-color":"#ufc2","id":"style-1","name":"Style 1"}]',
);