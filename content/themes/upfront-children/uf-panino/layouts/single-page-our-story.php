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
  'row' => 234,
  'background_type' => 'image',
  'background_color' => '#c5d0db',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 418,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/gray-pattern-bg.png',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '11',
  'margin_bottom' => '0',
  'id' => 'module-1429596091277-1111',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="">Our Story</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429596091276-1984',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-section-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429596109587-1953',
  'new_line' => 'true',
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

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'id' => 'module-1429595730530-1388',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">Tiratmisu chocolate bar brownie I love cotton candy. Dessert wafer carrot cake wafer. Chocolate cake lollipop toffee caramels donut dessert candy canes. Caramels donut powder chupa chups. I love dragée gummies gingerbread I love cotton candy caramels. Jelly sweet roll I love cookie ice cream lollipop. Muffin applicake I love I love gummies. Carrot cake pudding jelly-o I love lollipop jelly gingerbread bonbon candy. I love toffee tiramisu jelly beans. Chocolate chocolate.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429595730529-1269',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 124,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 100,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429595745470-1664',
  'new_line' => 'true',
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
      'edited' => true,
      'left' => 1,
      'col' => 10,
      'order' => 0,
      'row' => 100,
      'top' => 3,
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

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'id' => 'module-1429595880367-1896',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">Lollipop candy canes biscuit. Cookie cupcake macaroon gummies. croissant lollipop sugar plum cupcake I love applicake croissant macaroon pie. Cupcake tootsie roll cupcake marsh mallow toffee macaroon cake applicake. I love applicake I love liquorice donut I love cotton candy croissant cheesecake. uffin carrot cake bonbon. Tiramisu cheesecake candy canes icing candy jujubes fruitcake chocolate bar chocolate bar. Cake toffee oat cake.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429595880367-1045',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 118,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 92,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429595885668-1720',
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
      'edited' => true,
      'left' => 1,
      'col' => 10,
      'order' => 0,
      'row' => 92,
      'top' => 3,
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

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1430903436350-1089',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-1-239x240-6414.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-1.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-1.jpg',
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
       'width' => 610,
       'height' => 340,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 1280,
       'height' => 714,
    )),
    'position' =>
    (array)(array(
       'top' => 59,
       'left' => 133.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 239,
       'height' => 240,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1824',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1430903436347-1013',
    'row' => 54,
    'anchor' => '',
    'theme_style' => 'u-image-rounded',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430903447573-1059',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
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

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1430903482416-1826',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-2-240x240-8672.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-2.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-story/our-story-placeholder-2.jpg',
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
       'width' => 510,
       'height' => 340,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 6000,
       'height' => 4000,
    )),
    'position' =>
    (array)(array(
       'top' => 21,
       'left' => 145,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 240,
       'height' => 240,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1825',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1430903482416-1633',
    'row' => 54,
    'anchor' => '',
    'theme_style' => 'u-image-rounded',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430903484248-1840',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
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

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-1429596091315-1772',
  'options' =>
  array (
    'content' => 'ViEW OUR<br class="">GALLERY',
    'href' => '' . get_home_url() . '/our-gallery/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429596091315-1839',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-circle',
    'row' => 6,
    'theme_style' => 'u-button-circle',
    'is_edited' => true,
    'linkTarget' => '_self',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-button-circle-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430903487385-1369',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
