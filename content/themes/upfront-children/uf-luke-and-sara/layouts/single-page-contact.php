<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$title_area = upfront_create_region(
			array (
  'name' => 'title-area',
  'title' => 'Title Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'title-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 63,
  'background_type' => 'image',
  'background_color' => 'rgba(168,144,132,0)',
  'nav_region' => '',
  'breakpoint' =>
  (array)(array(
     'custom-1410783042947' =>
    (array)(array(
       'edited' => false,
    )),
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 60,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 54,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
  'background_style' => 'tile',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$title_area->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'class' => 'module-1428703752491-1223',
  'id' => 'module-1428703752491-1223',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="">We\'d Love to hear from you</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428703752490-1357',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 15,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'plaintxt-contact',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428987702092-1076',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 5,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$title_area->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1428985151342-1121',
  'id' => 'module-1428985151342-1121',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><a target="_blank" href="http://tel:12123503500">1 212 350 3500</a></h4><h4 class=""><a target="_blank" href="http://mailto:info@lukeandsara.com">info@lukeandsara.com</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428985151342-1339',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-contact',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428987702096-1054',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$regions->add($title_area);

$office_area = upfront_create_region(
			array (
  'name' => 'office-area',
  'title' => 'Office Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'office-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 173,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 304,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 248,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_style' => 'tile',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$office_area->add_group(array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432359828547-1743',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1428985801583-1684',
  'original_col' => 9,
  'background_color' => 'rgba(245,245,245,1)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'row' => 74,
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$office_area->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'class' => 'module-1428985330536-1271',
  'id' => 'module-1428985330536-1271',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="">New York</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428985330535-1366',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-addresses',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432359840494-1044',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432359828547-1743',
));

$office_area->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1432357779265-1046',
  'id' => 'module-1432357779265-1046',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">350 W 39th Street New York,</h4><h4 class="">NY 10018, USA</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432357779264-1460',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-addresses',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432359840505-1546',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432359828547-1743',
));

$office_area->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1428985151381-1742',
  'id' => 'module-1428985151381-1742',
  'options' =>
  array (
    'content' => 'VIEW MAP',
    'href' => '#ltb-ny-map11',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428985151381-1381',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #4',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-three',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432359840511-1416',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 1,
    ),
  ),
  'group' => 'module-group-1432359828547-1743',
));

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php');
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-ny-map11.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-ny-map11.php');
$office_area->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1428985151347-1269',
  'id' => 'module-1428985151347-1269',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-taxis-540x370-4828.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-taxis.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-taxis.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '152',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1428985151344-1398',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'row' => 72,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 33,
      )),
    )),
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428985957719-1697',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 33,
    ),
  ),
));

$office_area->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1428986705234-1174',
  'id' => 'module-1428986705234-1174',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-beach-540x370-7505.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-beach.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/img-beach.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 540,
       'height' => 370,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '153',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1428986705230-1574',
    'row' => 43,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428986912627-1328',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$office_area->add_group(array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432360912989-1592',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1428987162907-1047',
  'original_col' => 11,
  'row' => 74,
  'background_color' => 'rgba(245,245,245,1)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$office_area->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1432359763805-1407',
  'id' => 'module-1432359763805-1407',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="">San Francisco</h1>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432359763804-1119',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 8,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-addresses',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432360915435-1180',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432360912989-1592',
));

$office_area->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1432360758665-1369',
  'id' => 'module-1432360758665-1369',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">360 Folsom Street</h4><h4 class="">San Francisco, CA 94105, USA​</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432360758665-1176',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 10,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-addresses',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432360964737-1537',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432360912989-1592',
));

$office_area->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1428986705275-1551',
  'id' => 'module-1428986705275-1551',
  'options' =>
  array (
    'content' => 'VIEW MAP',
    'href' => '#ltb-sf-map11',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428986705274-1289',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #4',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-three',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432360915446-1371',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 1,
    ),
  ),
  'group' => 'module-group-1432360912989-1592',
));

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php');
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-sf-map11.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-sf-map11.php');
$regions->add($office_area);

$form_area = upfront_create_region(
			array (
  'name' => 'form-area',
  'title' => 'Form Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'form-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 142,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 111,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 108,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => 'rgba(205,204,202,1)',
)
			);

$form_area->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428987163088-1906',
  'id' => 'module-1428987163088-1906',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_5">Say Hi</span></h1>


',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428987163088-1733',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428988375495-1191',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 7,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 9,
    ),
  ),
));

$form_area->add_element("Ucontact", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428986705262-1822',
  'id' => 'module-1428986705262-1822',
  'options' =>
  array (
    'form_add_title' =>
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name:',
    'form_email_label' => 'Email:',
    'form_email_to' => '',
    'show_subject' =>
    array (
    ),
    'show_captcha' =>
    array (
    ),
    'form_subject_label' => 'Subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Message:',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1428986705260-1319',
    'row' => 42,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428988423814-1135',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$regions->add($form_area);

$testimonials_area = upfront_create_region(
			array (
  'name' => 'testimonials-area',
  'title' => 'Testimonials Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'testimonials-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 82,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 84,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-contact/bg-polaroid.jpg',
  'background_image_ratio' => 0.299999999999999988897769753748434595763683319091796875,
)
			);

$testimonials_area->add_element("Code", array (
  'columns' => '16',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '19',
  'margin_bottom' => '0',
  'class' => 'module-1429479325319-1419',
  'id' => 'module-1429479325319-1419',
  'options' =>
  array (
    'type' => 'CodeModel',
    'view_class' => 'CodeView',
    'class' => 'c24 upfront-code_element-object',
    'has_settings' => 0,
    'id_slug' => 'upfront-code_element',
    'fallbacks' =>
    (array)(array(
       'markup' => '<b>Enter your markup here...</b>',
       'style' => '/* Your styles here */',
       'script' => '/* Your code here */',
    )),
    'element_id' => 'upfront-code_element-object-1429479325318-1997',
    'code_selection_type' => 'Create',
    'markup' => '<div id="testimonials">

    <!-- Slider Setup -->
    <input type="radio" name="testimonial" id="testimonial1" selected="true">
    <input checked="" type="radio" name="testimonial" id="testimonial2" selected="false">
    <input type="radio" name="testimonial" id="testimonial3" selected="false">

    <!-- CSS3 Slider -->
    <div id="slides">

        <div id="overflow">

            <div class="inner">

                <article class="editable">
                    <div class="info">
                        <h6>Bill C.</h6>
                        <blockquote>You know, if I were a single man, I might ask that mummy out. That\'s a good-looking mummy.</blockquote>
                    </div>
                </article>

                <article class="editable">
                    <div class="info">
                        <h6>Socrates</h6>
                        <blockquote>My advice to you is get married; if you find a good wife you\'ll be happy; if not, you\'ll become a philosopher.</blockquote>
                    </div>
                </article>

                <article class="editable">
                    <div class="info">
                        <h6>Jack N.</h6>
                        <blockquote>My philosphy; live today. Do not leave undone things you really want to do, even if they seem a bad idea.</blockquote>
                    </div>
                </article>

            </div><!-- .inner -->

        </div><!-- #overflow -->

    </div><!-- #slides -->

    <div id="active">

        <label for="testimonial1"><img class="editable" src="' . get_stylesheet_directory_uri() . '/ui/img-bill.png"></label>
        <label for="testimonial2"><img class="editable" src="' . get_stylesheet_directory_uri() . '/ui/img-socrates.png"></label>
        <label for="testimonial3"><img class="editable" src="' . get_stylesheet_directory_uri() . '/ui/img-jack.png"></label>

    </div><!-- #active -->

</div><!-- #testimonials -->',
    'style' => '#testimonials {
    width: 100%;
    height: auto;
    display: block;
    position: relative;
    margin: 0 auto;
    text-align: center;
}
/* Slider Setup */
#testimonials input {
    display: none;
}
#testimonial1:checked ~ #slides .inner {
    margin-left: 0;
}
#testimonial2:checked ~ #slides .inner {
    margin-left:-100%;
}
#testimonial3:checked ~ #slides .inner {
    margin-left:-200%;
}
#overflow {
    width: 100%;
    overflow: hidden;
}
#slides .inner {
    width: 500%;
    line-height: 0;
}
#slides article {
    width: 20%;
    float: left;
}
/* Active Setup */
#active {
    margin: 30px 0 0;
    text-align: center;
}
#active label {
    width: 70px;
    height: 70px;
    display: inline-block;
    margin-right: 18px;
    border: 2px solid #acacac;
    border-radius: 100%;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
}
#active label:last-child {
    margin-right: 0;
}
#active label:hover {
    border-color: #007051;
}
#active label img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 100%;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
}
#testimonial1:checked ~ #active label:nth-child(1),
#testimonial2:checked ~ #active label:nth-child(2),
#testimonial3:checked ~ #active label:nth-child(3) {
    border-color: #01bc9d !important;
}
#testimonial1:checked ~ #active label:nth-child(1):hover,
#testimonial2:checked ~ #active label:nth-child(2):hover,
#testimonial2:checked ~ #active label:nth-child(3):hover {
    border-color: #007051 !important;
}
/* Slider and Slides Styling */
#slides {
    margin: 0;
}
#slides .info,
#slides .info h1,
#slides .info h2,
#slides .info h3,
#slides .info h4,
#slides .info h5,
#slides .info h6,
#slides .info p {
    margin-top: 0;
    margin-bottom: 0.4em;
    color: #01bc9d;
    font-family: "Quattrocento Sans";
    font-weight: 400;
    font-style: normal;
    font-weight: 700;
    text-transform: none;
}
.info blockquote {
    margin-top: 0;
    margin-bottom: 0;
    color: #ffffff;
    line-height: 0.5em;
    font-weight: 700;
    letter-spacing: -0.7px;
}
.info blockquote:before, .info blockquote:after {
    content: "";
    width: 14px;
    height: 36px;
    display: inline-block;
    background: url("' . get_stylesheet_directory_uri() . '/images/single-page-contact/sprites.png") no-repeat;
    background-image: url("' . get_stylesheet_directory_uri() . '/ui/sprites.svg"), none;
}
.info blockquote:before {
    margin-right: 10px;
    background-position: -393px -223px;
}
.info blockquote:after {
    margin-left: 10px;
    background-position: -393px -388px;
}
/* Animation */
#slider {
    transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
}
#slides .inner {
    -webkit-transform: translateZ(0);
    transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
    -o-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -ms-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -moz-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -webkit-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
    -o-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -ms-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -moz-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -webkit-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
}
#testimonial1:checked ~ #slides article:nth-child(1) .info,
#testimonial2:checked ~ #slides article:nth-child(2) .info,
#testimonial3:checked ~ #slides article:nth-child(3) .info {
    opacity: 1;
    transition: all 1s ease-out 0.6s;
    -o-transition: all 1s ease-out 0.6s;
    -ms-transition: all 1s ease-out 0.6s;
    -moz-transition: all 1s ease-out 0.6s;
    -webkit-transition: all 1s ease-out 0.6s;
}
#slides, .info, .info p, .info blockquote, #active, #active label {
    -webkit-transform: translateZ(0);
    transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
}',
    'script' => '/* Your code here */',
    'row' => 36,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429479403748-1357',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$regions->add($testimonials_area);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
