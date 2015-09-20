<?php
return array(
	'typography' => '{"h1":{"weight":"300","style":"normal","size":"34","line_height":"1.4","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h2":{"weight":"300","style":"normal","size":"30","line_height":"1","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h3":{"weight":"400","style":"normal","size":"22","line_height":"1.8","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h4":{"weight":"inherit","style":"inherit","size":"20","line_height":"1.2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h5":{"weight":"400","style":"normal","size":"18","line_height":"1.2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h6":{"weight":"400","style":"normal","size":"16","line_height":"1.2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"p":{"weight":"400","style":"normal","size":"15","line_height":"1.6","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"a":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Open Sans","font_family":"sans-serif","color":"#ufc0"},"a:hover":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Open Sans","font_family":"sans-serif","color":"#ufc1"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"2.1","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"blockquote":{"weight":"400","style":"normal","size":"20","line_height":"1.5","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"normal","size":"20","line_height":"1.5","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"}}',
	'layout_style' => '* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
*:before,  *:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
html {
    -webkit-font-smoothing: antialiased;
}
::-webkit-input-placeholder {
   color: #b0d0d9 !important;
}
:-moz-placeholder {
   color: #b0d0d9 !important;
}
::-moz-placeholder {
   color: #b0d0d9 !important;
}
:-ms-input-placeholder{
   color: #b0d0d9 !important;
}
h1{
    margin: 0 !important;
}
blockquote, blockquote p {
    background-color: #A9A39D !important;
    color: #fff !important;
    border-radius: 8px;
    margin-top: 20px;
    margin-bottom: 30px;
    padding: 15px;
    text-align: center;
    position: relative;
}
blockquote.upfront-quote-alternate, blockquote.upfron-quote-alternate p{
    background-color: #fff !important;
    color: #666 !important;
    text-align: center;
    border-left: 5px solid #666;
}
blockquote p {
    margin-bottom: 0 !important;
}
blockquote:after {
    position: absolute;
    left: 33px;
    bottom: -20px;
    border-left: 20px solid #A9A39D;
    border-right: 20px solid transparent;
    border-bottom: 20px solid transparent;
    border-radius: 0 0 25px 40px;
    content: \\\'\\\';
    width: 0px;
    height: 0px;
}
blockquote:before {
    position: absolute;
    left: 40px;
    bottom: -22px;
    border-radius: 50%;
    content: \\\'\\\';
    background-color: white;
    width: 20px;
    z-index: 1;
    height: 22px;
}
input, textarea {
    padding: 0 9px;
    border: 1px solid #B0D0D9;
    opacity: 1;
    -webkit-transition: all 0.23s ease;
    -moz-transition: all 0.23s ease;
    -o-transition: all 0.23s ease;
    transition: all 0.23s ease;
}
cite {
    font-weight: 700;
    padding: 5px 0 0 30px;
}
dt {
    font-weight: bold;
    color: #666;
}
dd {
    color: #666;
}
.post_content ul {
  list-style: none;
}

.post_content ul li:before{
  content:"•";
  font-size:12px;
  margin-right: 10px;
}

/* tables */
table{
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
table > thead > tr > th,
table > tbody > tr > th,
table > tfoot > tr > th,
table > thead > tr > td,
table > tbody > tr > td,
table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.5
  vertical-align: top;
  border-top: 1px solid transparent;
}
table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid transparent;
}
table > caption + thead > tr:first-child > th,
table > colgroup + thead > tr:first-child > th,
table > thead:first-child > tr:first-child > th,
table > caption + thead > tr:first-child > td,
table > colgroup + thead > tr:first-child > td,
table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
table > tbody + tbody {
  border-top: 2px solid transparent;
}
table {
  background-color: #fff;
}
table > thead > tr > th,
table > tbody > tr > th,
table > tfoot > tr > th,
table > thead > tr > td,
table > tbody > tr > td,
table > tfoot > tr > td {
  padding: 5px;
}
table {
  border: 1px solid transparent;
}
table > thead > tr > th,
table > tbody > tr > th,
table > tfoot > tr > th,
table > thead > tr > td,
table > tbody > tr > td,
table > tfoot > tr > td {
  border: 1px solid transparent;
}
table> thead > tr > th,
table > thead > tr > td {
  border-bottom-width: 2px;
}
table > tbody > tr:nth-of-type(odd) {
  background-color: #F8FCFE;
}

input:focus, textarea:focus {
    opacity: 1;
}
input[type=submit]{
    background-color: #2a8a5e;
    color: #ffffff;
    border: none;
    padding: 9px 30px;
    border-radius: 3px;
}
input[type=submit]:hover {
    background-color: #117145;
}
input[name="post_password"]{
    height: 40px;
    border-radius: 3px;
}
.upfront-button, .submit-field, .page-numbers.prev, .page-numbers.next {
    -webkit-transition: all 0.23s ease;
    -moz-transition: all 0.23s ease;
    -o-transition: all 0.23s ease;
    transition: all 0.23s ease;
}
hr.parrot-divider{
    border-bottom: 1px solid #ddf2f8;
}
.mfp-arrow-right.mfp-arrow:before,
.mfp-arrow-right.mfp-arrow:after,
.mfp-arrow-left.mfp-arrow:before,
.mfp-arrow-left.mfp-arrow:after {
    display: none;
}
button.mfp-arrow.mfp-arrow-right,
button.mfp-arrow.mfp-arrow-left {
    background: url("UPFRONT_THEME_BASE/ui/sprite.png") no-repeat;
    background-image: url("UPFRONT_THEME_BASE/ui/sprite.svg"), none;
    height: 22px;
    margin: 0;
    width: 14px;
}
button.mfp-arrow.mfp-arrow-left{
    background-position: -69px -707px;
    margin-left: 2em;
}
button.mfp-arrow.mfp-arrow-right{
    background-position: -229px -707px;
    margin-right: 2em;
}
.mfp-gallery .mfp-image-holder .mfp-close,.mfp-iframe-holder .mfp-close {
    color: #ffffff;
    font-size: 2em;
    opacity: 1;
}
.mfp-content .mfp-counter {
    color: #ffffff;
}
.mfp-counter {
    white-space: nowrap;
}
.mfp-bg {
    opacity: 0.8 !important;
}
.ugallery-thumb-title {
    background-color: #fff !important;
}
pre {
    background-color: rgba(92, 197, 223, 0.15);
    border-radius: 4px;
    padding: 10px;
}
/* post */
.post_content h1,
.post_content h2,
.post_content h3 {
    margin: 10px 0 20px;
}
.post_date {
    color: #666;
    font-weight: 700;
}
.wp-caption-text {
    position: relative;
    padding: 5px 0;
    margin-bottom: 10px !important;
}
.wp-caption-text:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 25%;
    content: \\\'\\\';
    height: 100%;
    margin-top: 6px;
    border-bottom: 1px solid #ddf2f8;
}
.post_content p:not(.wp-caption-text),
.post_content h1,
.post_content h2,
.post_content h3,
.post_content h4,
.post_content h5,
.post_content h6,
.post_content dl{
    padding-left: 30px;
    padding-right: 30px;
}
.post_content ul,
.post_content ol,
.post_content table,
.post_content address{
    margin-left: 30px;
    margin-right: 30px;
}
#default-post-object .c13, #default-post-object .c14 {
    width: 100%;
}
.post_content ul, ol {
    padding-left: 20px;
}
.post_content .ml1 {
    width: 100%;
}
/* post image alignment */
.post_content img {
    max-width: 100%;
    height: auto;
}
.alignnone,
.aligncenter,
.alignright,
.alignleft{
    max-width: 100%;
    position: relative;
}
.alignnone, a img.alignnone {
    margin-top: 30px;
    margin-bottom: 30px;
    position: relative;
    max-width: calc(100% + 120px) !important;
    left: -60px;
}
.alignright, a img.alignright {
    float:right;
    margin: 5px 0 20px 20px;
    right: -60px;
    margin-left: -40px;
}
.alignleft, a img.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
    left: -60px;
    margin-right: -40px;
}
.aligncenter, a img.aligncenter {
    display: block;
    margin-top: 30px !important;
    margin-bottom: 30px !important;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    max-width: calc(100% + 120px) !important;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
.upfront-output-module.upfront-postpart-module{
    width: 100% !important;
    margin-left: 0 !important;
}
div.upfront-navigation div[data-style="burger"] ul.menu{
    background-color: #fff !important;
}
div.upfront-navigation div[data-style="burger"][ data-burger_alignment="left"] ul.menu {
    width: 100%;
    max-width: 300px;
}
::-webkit-input-placeholder {
   color: #b0d0d9;
   font-weight: 500;
}

:-moz-placeholder {
   color: #b0d0d9;
   font-weight: 500;
}

::-moz-placeholder {
   color: #b0d0d9;
   font-weight: 500;
}

:-ms-input-placeholder {
   color: #b0d0d9;
   font-weight: 500;
}

/* post comments */
.comment-form input:not([type="submit"]) {
  height: 40px;
}
.comment-form input:not([type="submit"]), .comment-form textarea{
  border: 1px solid #B9E7F2;
  border-radius: 4px;
  padding: 12px;
  width: 100%;
}

.comment-form .form-allowed-tags {
  font-size: 13px;
}

.comment-form .form-submit {
  text-align: right;
}

#page div.upfront-navigation div[data-style="burger"][ data-burger_alignment="left"] ul.menu {
  width: 100%;
  max-width: 300px;
}

#page ul.menu {
  background-color: transparent;
}

#page ul.menu li a {
  color: #2a8a5e;
  font-family: "Open Sans", sans-serif;
}
',
	'layout_properties' => '[{"typography":[],"name":"","value":""},{"name":"background_color","value":""},{"name":"grid","value":{"column_widths":{"desktop":45},"column_paddings":{"desktop":"10"},"baselines":{"desktop":5},"type_paddings":{"desktop":10}}}]',
	'theme_colors' => '{"colors":[{"color":"#2a8a5e","prev":"#2a8a5e","highlight":"#2a8a5e","shade":"#2a8a5e","selected":"","luminance":""},{"color":"#117145","prev":"#117145","highlight":"#117145","shade":"#117145","selected":"","luminance":""},{"color":"#ffffff","prev":"#ffffff","highlight":"#ffffff","shade":"#ffffff","selected":"","luminance":""},{"color":"#3d2e20","prev":"#3d2e20","highlight":"#3d2e20","shade":"#3d2e20","selected":"","luminance":""},{"color":"#63c9e2","prev":"#63c9e2","highlight":"#63c9e2","shade":"#63c9e2","selected":"","luminance":""},{"color":"#666666","prev":"#666666","highlight":"#666666","shade":"#666666","selected":"","luminance":""},{"color":"#766856","prev":"#766856","highlight":"#766856","shade":"#766856","selected":"","luminance":""}],"range":"0"}',
	'post_image_variants' => '[{"vid":"variant-1414082154417-1612","label":"Full Width","group":{"margin_left":"0","margin_right":"0","col":"13","row":"60","left":"0","float":"none","height":"300","width_cls":"c14","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1414082173807-1526","label":"Center","group":{"margin_left":"0","margin_right":"0","col":"13","row":"63","left":"4","float":"none","height":"315","width_cls":"c14","left_cls":"ml4","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"16","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c16","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1430702803275-1558","label":"Variant Label","group":{"margin_left":"0","margin_right":"0","col":"9","row":"54","left":"4","float":"none","height":"270","width_cls":"c9","left_cls":"ml4","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1430702822836-1472","label":"Variant Label","group":{"margin_left":"0","margin_right":"0","col":"5","row":"48","left":"0","float":"left","height":"240","width_cls":"c5","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1430702828236-1372","label":"Variant Label","group":{"margin_left":"0","margin_right":"0","col":"13","row":"50","left":"0","float":"none","height":"250","width_cls":"c14","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}}]',
	'menus' => '[{"id":false,"slug":null,"name":null,"description":null,"items":false},{"id":false,"slug":"parrot-main-nav","name":"parrot-main-nav","description":"","items":[{"ID":9,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Home","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"home","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/home\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":9,"menu_item_parent":"0","object_id":"9","object":"custom","type":"custom","type_label":"Custom Link","title":"Home","url":"%siteurl%","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":10,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Features","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"features","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/features\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":10,"menu_item_parent":"0","object_id":"10","object":"custom","type":"custom","type_label":"Custom Link","title":"Features","url":"%siteurl%\\/features\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":11,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Download","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"download","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/download\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":11,"menu_item_parent":"0","object_id":"11","object":"custom","type":"custom","type_label":"Custom Link","title":"Download","url":"%siteurl%\\/download\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":12,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Contact Us","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"contact-us","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/contact-us\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":12,"menu_item_parent":"0","object_id":"12","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact Us","url":"%siteurl%\\/contact\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":13,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"about","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/about\\/","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":13,"menu_item_parent":"0","object_id":"13","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":14,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Blog","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"blog","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/blog\\/","menu_order":6,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":14,"menu_item_parent":"0","object_id":"14","object":"custom","type":"custom","type_label":"Custom Link","title":"Blog","url":"%siteurl%\\/blog\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"parrot-footer-1","name":"Parrot Footer 1","description":"","items":[{"ID":15,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Home","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"home-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/home-2\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":15,"menu_item_parent":"0","object_id":"15","object":"custom","type":"custom","type_label":"Custom Link","title":"Home","url":"%siteurl%","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":16,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Download","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"download-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/download-2\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":16,"menu_item_parent":"0","object_id":"16","object":"custom","type":"custom","type_label":"Custom Link","title":"Download","url":"%siteurl%\\/download\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":17,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Features","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"features-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/features-2\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":17,"menu_item_parent":"0","object_id":"17","object":"custom","type":"custom","type_label":"Custom Link","title":"Features","url":"%siteurl%\\/features\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":18,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"about-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/about-2\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":18,"menu_item_parent":"0","object_id":"18","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"parrot-footer-2","name":"Parrot Footer 2","description":"","items":[{"ID":19,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"BlackBerry","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"blackberry","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/blackberry\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":19,"menu_item_parent":"0","object_id":"19","object":"custom","type":"custom","type_label":"Custom Link","title":"BlackBerry","url":"%siteurl%\\/download\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":20,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"iPhone","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"iphone","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/iphone\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":20,"menu_item_parent":"0","object_id":"20","object":"custom","type":"custom","type_label":"Custom Link","title":"iPhone","url":"%siteurl%\\/download\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":21,"post_author":"1","post_date":"2015-09-04 14:51:44","post_date_gmt":"2015-09-04 14:51:44","post_content":"","post_title":"Android","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"android","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:44","post_modified_gmt":"2015-09-04 14:51:44","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/android\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":21,"menu_item_parent":"0","object_id":"21","object":"custom","type":"custom","type_label":"Custom Link","title":"Android","url":"%siteurl%\\/download\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"parrot-footer-3","name":"Parrot Footer 3","description":"","items":[{"ID":22,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Blog","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"blog-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/blog-2\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":22,"menu_item_parent":"0","object_id":"22","object":"custom","type":"custom","type_label":"Custom Link","title":"Blog","url":"%siteurl%\\/blog\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":23,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Archive","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"archive","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/archive\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":23,"menu_item_parent":"0","object_id":"23","object":"custom","type":"custom","type_label":"Custom Link","title":"Archive","url":"%siteurl%\\/blog\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":24,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Readme","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"readme","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/readme\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":24,"menu_item_parent":"0","object_id":"24","object":"custom","type":"custom","type_label":"Custom Link","title":"Readme","url":"https:\\/\\/wordpress.org\\/plugins\\/about\\/readme.txt","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"parrot-footer-4","name":"Parrot Footer 4","description":"","items":[{"ID":25,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Contact Us","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"contact-us-2","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/contact-us-2\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":25,"menu_item_parent":"0","object_id":"25","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact Us","url":"%siteurl%\\/contact\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":26,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Facebook","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"facebook","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/facebook\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":26,"menu_item_parent":"0","object_id":"26","object":"custom","type":"custom","type_label":"Custom Link","title":"Facebook","url":"http:\\/\\/facebook.com\\/","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":27,"post_author":"1","post_date":"2015-09-04 14:51:45","post_date_gmt":"2015-09-04 14:51:45","post_content":"","post_title":"Twitter","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"twitter","to_ping":"","pinged":"","post_modified":"2015-09-04 14:51:45","post_modified_gmt":"2015-09-04 14:51:45","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/2015\\/09\\/04\\/twitter\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":27,"menu_item_parent":"0","object_id":"27","object":"custom","type":"custom","type_label":"Custom Link","title":"Twitter","url":"http:\\/\\/twitter.com","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]}]',
	'theme_fonts' => '[{"id":"Open Sans300","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"300","displayVariant":"300 normal"},{"id":"Open Sans300italic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"300italic","displayVariant":"300 italic"},{"id":"Open Sansregular","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"regular","displayVariant":"regular"},{"id":"Open Sansitalic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"italic","displayVariant":"italic"},{"id":"Open Sans700","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"700","displayVariant":"700 normal"}]',
	'button_presets' => '[{"id":"parrot-btn-1","bordertype":"solid","borderwidth":"1","bordercolor":"#ufc2","borderradiuslock":["yes"],"borderradius1":"4","borderradius2":"4","borderradius4":"4","borderradius3":"4","bgcolor":"#ufc2","fontsize":"14","fontface":"Open Sans","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-1","hov_bordercolor":"#ufc2","hov_bgcolor":"rgba(0, 0, 0, 0)","hov_color":"#ufc2"},{"id":"parrot-blackberry","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-blackberry-large"},{"id":"parrot-apple","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-apple-large"},{"id":"parrot-android","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-android-large"},{"id":"parrot-logo","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-logo"},{"id":"parrot-blackberry-sm","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-blackberry-small"},{"id":"parrot-apple-sm","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-iphone-small"},{"id":"parrot-android-sm","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-android-small"},{"id":"parrot-logo-green","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-logo-green"},{"id":"parrot-btn-2","bordertype":"solid","borderwidth":"1","bordercolor":"#ufc0","borderradius1":"4","borderradius2":"4","borderradius4":"4","borderradius3":"4","bgcolor":"#ufc0","fontsize":"14","fontface":"Open Sans","color":"#ufc2","hov_duration":"0.25","hov_transition":"ease","hov_bgcolor":"rgba(0, 0, 0, 0)","theme_style":"button-2","hov_bordercolor":"#ufc1","hov_color":"#ufc1"},{"id":"parrot-blackberry-sm-white","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-blackberry-small"},{"id":"parrot-apple-sm-white","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-iphone-small"},{"id":"parrot-android-sm-white","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-android-small"},{"id":"parrot-btn-phone","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-speech"},{"id":"parrot-btn-speech","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-phone"},{"id":"parrot-icon-logo","bordertype":"none","borderwidth":"1","bordercolor":"rgb(0, 0, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(0, 0, 0, 0)","fontsize":"12","fontface":"","color":"rgb(0, 0, 0)","hov_duration":"0.25","hov_transition":"ease","theme_style":"button-icon-logo"},{"id":"parrot-btn-3","bordertype":"solid","borderwidth":"1","bordercolor":"rgb(191, 224, 209)","borderradius1":"4","borderradius2":"4","borderradius4":"4","borderradius3":"4","bgcolor":"#ufc2","fontsize":"14","fontface":"Open Sans","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","hov_bordercolor":"#ufc1","hov_bgcolor":"#ufc0","hov_color":"#ufc2","theme_style":"button-3"}]',
	'required_pages' => '{"download":{"name":"Download","slug":"download","layout":"single-page-download"},"features":{"name":"Features","slug":"features","layout":"single-page-features"},"about":{"name":"About","slug":"about","layout":"single-page-about"},"contact":{"name":"Contact","slug":"contact","layout":"single-page-contact"},"blog":{"name":"Blog","slug":"blog","layout":"single-page-blog"},"splash":{"name":"Splash","slug":"splash","layout":"single-page-splash"}}',
);