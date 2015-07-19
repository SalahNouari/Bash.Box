<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 164,
  'background_type' => 'image',
  'background_color' => '#c5d0db',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 174,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 146,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_style' => 'tile',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-404_page/gray-pattern-bg.png',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$main->add_element("Uimage", array (
  'columns' => '10',
  'margin_left' => '7',
  'margin_right' => '0',
  'margin_top' => '28',
  'margin_bottom' => '0',
  'id' => 'module-1426695189350-1782',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-404_page/404-420x166-2893.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-404_page/404.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-404_page/404.png',
    'image_title' => '',
    'alternative_text' => '404',
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
       'width' => 420,
       'height' => 166,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 440,
       'height' => 174,
    )),
    'position' =>
    (array)(array(
       'top' => -7,
       'left' => 0,
    )),
    'marginTop' => 7,
    'element_size' =>
    (array)(array(
       'width' => 420,
       'height' => 180,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '44',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1426695189348-1879',
    'row' => 42,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426695719815-1988',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
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
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 10,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '7',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1426695392962-1108',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Something went wrong.</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426695392962-1231',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 18,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-page-content-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426695820672-1904',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
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
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 8,
    ),
  ),
));

$main->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '7',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'id' => 'module-1433846248094-1880',
  'options' =>
  array (
    'content' => 'Home',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1433846248094-1576',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-a',
    'row' => 6,
    'theme_style' => 'u-button-circle-home',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433846890490-1815',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 5,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 5,
      'col' => 2,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$main->add_element("Uwidget", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '18',
  'margin_bottom' => '0',
  'id' => 'module-1426754224029-1974',
  'options' =>
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'widget' => 'search-2',
    'element_id' => 'uwidget-object-1426754224029-1561',
    'selected_widget' => 'search-2',
    'anchor' => '',
    'widget_specific_fields' =>
    (array)(array(
       'widget-search-__i__-title' =>
      (array)(array(
         'label' => 'Title: ',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
    )),
    'title' => '',
    'row' => 12,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 13,
         'theme_style' => 'u-search-widget-tablet',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-search-widget-mobile',
         'row' => 8,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426756087523-1557',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
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
      'edited' => true,
      'left' => 1,
      'col' => 10,
      'order' => 0,
      'row' => 13,
      'top' => 7,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 5,
      'row' => 8,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
