<?php
$home_slider = upfront_create_region(
			array (
  'name' => 'home-slider',
  'title' => 'Home Slider',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-slider',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 144,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'slider',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_slider_transition' => 'crossfade',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_images' =>
  array (
    0 => '/images/slider-img-1 (1).jpg',
    1 => '/images/slider-img-2 (1).jpg',
  ),
)
			);

$home_slider->add_element("PlainTxt", array (
  'columns' => '3',
  'margin_left' => '21',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1430982169105-1515',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430982169105-1655',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'top',
    'is_edited' => true,
    'theme_style' => 'u-anchor-top',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430982191186-1106',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 5,
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
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
  ),
));

$home_slider->add_element("Button", array (
  'columns' => '8',
  'margin_left' => '8',
  'margin_right' => '0',
  'margin_top' => '32',
  'margin_bottom' => '0',
  'id' => 'module-1429088152557-1539',
  'options' =>
  array (
    'content' => 'PANiNO',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429088152556-1127',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-logo',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-logo',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 63,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429088166088-1636',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 10,
      'order' => 1,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
      'order' => 0,
      'row' => 63,
      'top' => 34,
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

$regions->add($home_slider);

$main_navigation = upfront_create_region(
			array (
  'name' => 'main-navigation',
  'title' => 'Main Navigation',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main-navigation',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 10,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 11,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ufc1',
)
			);

$main_navigation->add_element("PlainTxt", array (
  'columns' => '3',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426155852070-1594',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class=""><a target="_self" rel="external" href="' . get_home_url() . '">PANiNO</a><br></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426155852069-1714',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-brand-menu',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-brand-menu-mobile',
         'row' => 11,
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-brand-menu-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426156559122-1722',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 5,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 3,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 4,
      'order' => 0,
      'top' => 0,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$main_navigation->add_element("Unewnavigation", array (
  'columns' => '16',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426156754812-1401',
  'options' =>
  array (
    'type' => 'UnewnavigationModel',
    'view_class' => 'UnewnavigationView',
    'class' => 'c24 upfront-navigation',
    'has_settings' => 1,
    'id_slug' => 'unewnavigation',
    'menu_items' =>
    array (
      0 =>
      (array)(array(
         'menu-item-db-id' => 1724,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Our Story',
         'menu-item-url' => '#ourStory',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1724',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 1725,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Menu',
         'menu-item-url' => '#menu',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1725',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 1726,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '' . get_home_url() . '/blog/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1726',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 1727,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Gallery',
         'menu-item-url' => '#gallery',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1727',
         'menu-item-target' => '',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 1728,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Find Us',
         'menu-item-url' => '#ourLocation',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1728',
         'menu-item-target' => '',
         'menu-item-position' => 5,
      )),
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'left',
    'allow_sub_nav' =>
    array (
      0 => 'no',
    ),
    'allow_new_pages' =>
    array (
    ),
    'element_id' => 'unewnavigation-object-1426156754811-1745',
    'initialized' => false,
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
         'width' => 1080,
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => '_default',
         'width' => 570,
         'burger_menu' => 'yes',
         'burger_alignment' => 'top',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'row' => 13,
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'top',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'width' => 315,
         'row' => 14,
         'theme_style' => '_default',
      )),
    )),
    'menu_id' => false,
    'menu_slug' => 'panino-main-menu-home',
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
    'row' => 9,
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426156922342-1837',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 6,
      'order' => 0,
      'row' => 13,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 3,
      'order' => 0,
      'row' => 14,
      'top' => 0,
    ),
  ),
));

$regions->add($main_navigation);

$home_our_story = upfront_create_region(
			array (
  'name' => 'home-our-story',
  'title' => 'Home Our Story',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-our-story',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 252,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gray-pattern-bg.png',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
  'background_position' => '50% 50%',
)
			);

$home_our_story->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'id' => 'module-1426156559174-1975',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Our Story</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426156559174-1067',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'ourStory',
    'theme_style' => 'u-section-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426158229468-1068',
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

$home_our_story->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426158229525-1512',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">
	Tiratmisu chocolate bar brownie I love cotton candy. Dessert wafer carrot cake wafer. Chocolate cake lollipop toffee caramels donut dessert candy canes. Caramels donut powder chupa chups. I love dragée gummies gingerbread I love cotton candy caramels. Jelly sweet roll I love cookie ice cream lollipop. Muffin applicake I love I love gummies. Carrot cake pudding jelly-o I love lollipop jelly gingerbread bonbon candy. I love toffee tiramisu jelly beans. Chocolate chocolate.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426158229524-1137',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 91,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426159324840-1877',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
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
      'left' => 2,
      'col' => 8,
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

$home_our_story->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426158858989-1915',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">
	Lollipop candy canes biscuit. Cookie cupcake macaroon gummies. croissant lollipop sugar plum cupcake I love applicake croissant macaroon pie. Cupcake tootsie roll cupcake marsh mallow toffee macaroon cake applicake. I love applicake I love liquorice donut I love cotton candy croissant cheesecake. uffin carrot cake bonbon. Tiramisu cheesecake candy canes icing candy jujubes fruitcake chocolate bar chocolate bar. Cake toffee oat cake.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1426158858989-1262',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 110,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426159324841-1540',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
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
      'left' => 2,
      'col' => 8,
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
  'close_wrapper' => false,
));

$home_our_story->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429521308692-1700',
  'options' =>
  array (
    'content' => 'Read More',
    'href' => '' . get_home_url() . '/our-story/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429521308692-1967',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-link',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-link',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426159324841-1540',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$home_our_story->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1430902566843-1606',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-1-239x240-5140.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-1.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-1.jpg',
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
       'top' => 68,
       'left' => 129.5,
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
    'element_id' => 'image-1430902566840-1540',
    'row' => 54,
    'anchor' => '',
    'theme_style' => 'u-image-rounded',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430903243437-1739',
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

$home_our_story->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1430903254042-1144',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-2-240x240-7326.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-2.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/our-story-placeholder-2.jpg',
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
       'top' => 0,
       'left' => 142,
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
    'element_id' => 'object-1430903254042-1036',
    'row' => 54,
    'anchor' => '',
    'theme_style' => 'u-image-rounded',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430903256414-1067',
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

$home_our_story->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1429092902295-1219',
  'options' =>
  array (
    'content' => 'ViEW OUR<div class="">GALLERY<br><div class=""><br class=""></div></div>',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429092902295-1413',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-circle',
    'row' => 6,
    'theme_style' => 'u-button-circle',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 48,
         'theme_style' => 'u-button-circle-mobile',
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-button-circle',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429092916049-1889',
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
      'edited' => true,
      'col' => 7,
      'order' => 5,
      'clear' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 48,
      'top' => 10,
    ),
  ),
));

$home_our_story->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '11',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'id' => 'module-1427802908920-1998',
  'options' =>
  array (
    'content' => 'Click here',
    'href' => '#top',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1427802908920-1833',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-anchor',
    'row' => 6,
    'theme_style' => 'u-button-anchor',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1427803031352-1468',
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
      'order' => 6,
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
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
  ),
));

$regions->add($home_our_story);

$home_special_menu = upfront_create_region(
			array (
  'name' => 'home-special-menu',
  'title' => 'Home Special Menu',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-special-menu',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 323,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 532,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 678,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/bricks-pattern-bg.png',
  'background_image_ratio' => 0.810000000000000053290705182007513940334320068359375,
  'background_repeat' => 'repeat',
)
			);

$home_special_menu->add_element("Utabs", array (
  'columns' => '14',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '30',
  'margin_bottom' => '0',
  'id' => 'module-1426155852080-1470',
  'options' =>
  array (
    'type' => 'UtabsModel',
    'view_class' => 'UtabsView',
    'has_settings' => 1,
    'class' => 'c24 upfront-tabs',
    'tabs' =>
    array (
      0 =>
      (array)(array(
         'content' => '<p class="">
	Colder months of 2013 <br>
	Good Mornin\' Friends…</p><p class="">
	Brekkie all day every day – our kitchens close at 3pm <br>
	We are CASH ONLY</p><p class="">
	Berocca – original $3,0
</p><p class="">
	Berry \'noice\' banana Smoothie; berries, banana + Jocks vanilla ice-cream $7,9
</p><p class="">
	Bloody Mary w/ a \'shot\' of organic cucumber vodka + celery salt $13,0
</p><p class="">
	Moet Chandon NV Champagne $18,0 glass or $26,0 for two
</p><p class="">
	Fresh organic "medicinal\' Orange juice $4,5</p><p class="">
	Pick. Me. Up. Please – brioche roll, bacon, our tomato chutney, scrambles, cheddar $5,5
</p><p class="">
	Toast w/ vegemite, jam or organic crunchy peanut butter $6,0
</p><p class="">
	Toasted Noisette fruit bread w/ butter + jam $7,0
</p><p class="">
	House made crumpets w/ ricotta, strawberry + lemon syllabub $9,9
</p><p class="">
	Herb + cheesy toast $9,9 w/ eggplant kasundi $11,9 or w/ bacon $12,9 or both $13,9Croissant w/ bonne maman jam $6,0
</p><p class="">
	Croissant w/ ham off the bone, béchamel, emmental cheese + truss tomato $7,5
</p><p class="">
	Full of Grace organic porridge w/ chia, sunflower seeds, pecans, banana + coconut sugar $13,9
</p><p class="">
	Bircher muesli w/ stewed rhubarb, honey yoghurt + pistachio $10,9\'Jack + Jill\' – Toasted ciabatta, poached eggs, bacon, 12hr roasted tomato, avocado + thyme buttered mushrooms $19,9
</p>',
         'title' => 'Our favourite friends',
      )),
      1 =>
      (array)(array(
         'content' => '<p class="">Colder months of 2014<br></p><p class="">Full of Grace organic porridge w/ chia, sunflower seeds, pecans, banana + coconut sugar $13,9</p><p class="">Bircher muesli w/ stewed rhubarb, honey yoghurt + pistachio $10,9\'Jack + Jill\' – Toasted ciabatta, poached eggs, bacon, 12hr roasted tomato, avocado + thyme buttered mushrooms $19,9</p>',
         'title' => 'Something Bready',
      )),
      2 =>
      (array)(array(
         'title' => 'Lunchy Things',
         'content' => '<p class="">Colder months of 2014<br></p><p class="">Toast w/ vegemite, jam or organic crunchy peanut butter $6,0</p><p class="">Toasted Noisette fruit bread w/ butter + jam $7,0</p><p class="">House made crumpets w/ ricotta, strawberry + lemon syllabub $9,9</p><p class="">Herb + cheesy toast $9,9 w/ eggplant kasundi $11,9 or w/ bacon $12,9 or both $13,9Croissant w/ bonne maman jam $6,0</p><p class="">Croissant w/ ham off the bone, béchamel, emmental cheese + truss tomato $7,5</p>',
      )),
      3 =>
      (array)(array(
         'title' => 'Sweeties darling',
         'content' => '<p class="">Colder months of 2015<br></p><p class="">Bloody Mary w/ a \'shot\' of organic cucumber vodka + celery salt $13,0</p><p class="">Moet Chandon NV Champagne $18,0 glass or $26,0 for two</p><p class="">Fresh organic "medicinal\' Orange juice $4,5</p><p class="">Toast w/ vegemite, jam or organic crunchy peanut butter $6,0</p><p class="">Toasted Noisette fruit bread w/ butter + jam $7,0</p>',
      )),
    ),
    'tabs_count' => 4,
    'id_slug' => 'utabs',
    'preset' => 'special-menu-tabs',
    'element_id' => 'utabs-object-1426155852079-1777',
    'row' => 30,
    'anchor' => 'menu',
    'theme_style' => 'u-menu-tabs',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426159462867-1609',
  'new_line' => 'true',
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 18,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 17,
    ),
  ),
));

$home_special_menu->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '53',
  'margin_bottom' => '0',
  'id' => 'module-1434005864469-1676',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/dot_new_menu-195x193-1810.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/dot_new_menu.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/dot_new_menu.png',
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
       'width' => 195,
       'height' => 193,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 191,
       'height' => 189,
    )),
    'position' =>
    (array)(array(
       'top' => -1,
       'left' => 0,
    )),
    'marginTop' => 1,
    'element_size' =>
    (array)(array(
       'width' => 195,
       'height' => 195,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1732',
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
    'element_id' => 'image-1434005864466-1197',
    'row' => 15,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 35,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426160435930-1357',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 9,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 1,
      'top' => 12,
      'row' => 35,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 1,
      'top' => 14,
    ),
  ),
  'close_wrapper' => false,
));

$home_special_menu->add_element("Button", array (
  'columns' => '3',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'id' => 'module-1434012121660-1397',
  'options' =>
  array (
    'content' => '<span class="uf_font_icon" style="font-size: 33px; top: 0px;" rel="font-size: 33px; top: 0px;" data-verified="redactor">e</span>​',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1434012121660-1684',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-social',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-social',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 20,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426160435930-1357',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 2,
      'top' => 15,
      'row' => 20,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 2,
    ),
  ),
  'close_wrapper' => false,
));

$home_special_menu->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1428999312133-1120',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Like us on</p><div class=""><p>facebook</p></div><div class=""></div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428999312133-1162',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 29,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-script',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 23,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426160435930-1357',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 3,
      'top' => 0,
      'row' => 23,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 3,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$home_special_menu->add_element("Button", array (
  'columns' => '3',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'id' => 'module-1434013057002-1989',
  'options' =>
  array (
    'content' => '<span class="uf_font_icon" style="font-size: 33px; top: 0px;" rel="font-size: 33px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 33px; top: 0px;">t</span>',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1434013057002-1100',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-social',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-social',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 21,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426160435930-1357',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 5,
      'top' => 6,
      'row' => 21,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 4,
    ),
  ),
  'close_wrapper' => false,
));

$home_special_menu->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429004339913-1833',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Follow us on</p><div class=""><p class="">twitter</p></div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429004339913-1997',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 22,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-script',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 27,
      )),
       'mobile' =>
      (array)(array(
         'row' => 19,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426160435930-1357',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 6,
      'top' => 0,
      'row' => 27,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 6,
      'row' => 19,
      'top' => 0,
    ),
  ),
));

$home_special_menu->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'id' => 'module-1429521427851-1953',
  'options' =>
  array (
    'content' => 'Read More',
    'href' => '' . get_home_url() . '/our-menu/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429521427851-1606',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-link',
    'row' => 6,
    'is_edited' => true,
    'linkTarget' => '_self',
    'theme_style' => 'u-button-link',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521538929-1094',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 4,
      'top' => 7,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 5,
    ),
  ),
));

$home_special_menu->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '11',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1427803031535-1379',
  'options' =>
  array (
    'content' => 'Click here',
    'href' => '#top',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1427803031535-1416',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-anchor',
    'row' => 6,
    'theme_style' => 'u-button-anchor',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1427803097896-1564',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 5,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 5,
      'col' => 2,
      'order' => 7,
      'top' => 10,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 7,
      'top' => 4,
    ),
  ),
));

$regions->add($home_special_menu);

$home_gallery = upfront_create_region(
			array (
  'name' => 'home-gallery',
  'title' => 'Home Gallery',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-gallery',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 196,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ufc2',
)
			);

$home_gallery->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'id' => 'module-1426161787193-1093',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Gallery</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1426161787193-1940',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'gallery',
    'theme_style' => 'u-section-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426161797285-1440',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
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

$home_gallery->add_element("Ugallery", array (
  'columns' => '12',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'id' => 'module-1426161275974-1956',
  'options' =>
  array (
    'type' => 'UgalleryModel',
    'view_class' => 'UgalleryView',
    'has_settings' => 1,
    'class' => 'c24 upfront-gallery',
    'id_slug' => 'ugallery',
    'status' => 'ok',
    'images' =>
    array (
      0 =>
      (array)(array(
         'id' => '30',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1-140x140-9062.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 30,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1-145x145-9686.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-1.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      1 =>
      (array)(array(
         'id' => '31',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2-140x140-2883.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 31,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2-145x145-4966.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-2.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      2 =>
      (array)(array(
         'id' => '32',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3-140x140-9374.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 32,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3-145x145-6457.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-3.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      3 =>
      (array)(array(
         'id' => '33',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4-140x140-7162.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 33,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4-145x145-9253.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-4.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      4 =>
      (array)(array(
         'id' => '34',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5-140x140-9116.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 34,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5-145x145-7755.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-5.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      5 =>
      (array)(array(
         'id' => '35',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6-140x140-1758.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 35,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6-145x145-2902.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-6.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      6 =>
      (array)(array(
         'id' => '36',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7-140x140-5152.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 36,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7-145x145-7839.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-7.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      7 =>
      (array)(array(
         'id' => '37',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8-140x140-9672.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 37,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8-145x145-5358.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-8.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
      8 =>
      (array)(array(
         'id' => '38',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9-140x140-7156.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 38,
               'element_id' => 'ugallery-object-1426161275973-1113',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9-145x145-1380.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1426161275973-1113',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gallery-img-9.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'cropPosition' =>
        (array)(array(
           'top' => 0,
           'left' => 73,
        )),
         'linkTarget' => '',
      )),
    ),
    'elementSize' =>
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'labelFilters' =>
    array (
    ),
    'thumbProportions' => 'theme',
    'thumbWidth' => '145',
    'thumbHeight' => 145,
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' =>
    array (
      0 => 'true',
    ),
    'linkTo' => 'image',
    'even_padding' =>
    array (
      0 => 'true',
    ),
    'thumbPadding' => 35,
    'fitThumbCaptions' => false,
    'thumbCaptionsHeight' => 20,
    'element_id' => 'ugallery-object-1426161275973-1113',
    'row' => 44,
    'anchor' => '',
    'theme_style' => 'u-gallery',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 150,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426162029531-1998',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 150,
      'top' => 14,
    ),
  ),
));

$home_gallery->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1426161275957-1603',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">
	A bakery (or baker\'s shop) is an establishment that produces and sells flour-based food baked in an oven such as bread, cakes, pastries, and pies. Some retail bakeries are also cafés, serving coffee and tea to customers who wish to consume the baked goods on the premises.Some bakery shops provide services for special occasions such as weddings &amp; birthday.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426161275957-1759',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 85,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 59,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426161966744-1124',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 2,
      'col' => 8,
      'order' => 0,
      'row' => 59,
      'top' => 5,
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

$home_gallery->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429521539141-1554',
  'options' =>
  array (
    'content' => 'Read More',
    'href' => '' . get_home_url() . '/our-gallery/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429521539141-1554',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-link',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-link',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521590488-1802',
  'new_line' => 'true',
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
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$home_gallery->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '11',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'id' => 'module-1427803098075-1283',
  'options' =>
  array (
    'content' => 'Click here',
    'href' => '#top',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1427803098075-1415',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-anchor',
    'row' => 6,
    'theme_style' => 'u-button-anchor',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430982573288-1041',
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
      'edited' => false,
      'col' => 5,
      'order' => 0,
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
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
  ),
));

$regions->add($home_gallery);

$home_contacts = upfront_create_region(
			array (
  'name' => 'home-contacts',
  'title' => 'Home Contacts',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-contacts',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 168,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 220,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/archive-home/gray-pattern-bg.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$home_contacts->add_element("Uimage", array (
  'columns' => '10',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '32',
  'margin_bottom' => '0',
  'id' => 'module-1426161275966-1819',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/archive-home/home-contacts-map-424x424-5007.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/archive-home/home-contacts-map.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/archive-home/home-contacts-map.png',
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
       'width' => 424,
       'height' => 424,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 511,
       'height' => 511,
       'top' => 4624,
       'left' => 699,
    )),
    'position' =>
    (array)(array(
       'top' => -33,
       'left' => 0,
    )),
    'marginTop' => 33,
    'element_size' =>
    (array)(array(
       'width' => 424,
       'height' => 490,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '28',
    'align' => 'center',
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
    'element_id' => 'image-1426161275963-1684',
    'row' => 104,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 73,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426163611286-1412',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
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
      'top' => 16,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 16,
      'row' => 73,
    ),
  ),
));

$home_contacts->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '41',
  'margin_bottom' => '0',
  'id' => 'module-1429522463788-1536',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;">PANiNO</h4>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429522463788-1293',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'ourLocation',
    'theme_style' => 'u-brand-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521838989-1056',
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
  'close_wrapper' => false,
));

$home_contacts->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429522480249-1745',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">305 Lygon Street,</p><p class="" style="text-align: center;">Carlton VIC 3053&nbsp;</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429522480249-1779',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph-address',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521838989-1056',
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
  'close_wrapper' => false,
));

$home_contacts->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429522544223-1764',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">. . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429522544223-1886',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-bullets',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521838989-1056',
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
  'close_wrapper' => false,
));

$home_contacts->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429522597384-1500',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Phone: (03) 9876 5431</p><p class="" style="text-align: center;">Fax: (03) 9876 5432</p><p class="" style="text-align: center;">General Orders : (03) 9347 2801</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429522597384-1890',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph-address-contacts',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521838989-1056',
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
  'close_wrapper' => false,
));

$home_contacts->add_element("Button", array (
  'columns' => '5',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429521590699-1658',
  'options' =>
  array (
    'content' => 'Read More',
    'href' => '' . get_home_url() . '/our-location/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429521590698-1256',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-link',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'u-button-link',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429521838989-1056',
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
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$home_contacts->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '11',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'id' => 'module-1427803149358-1554',
  'options' =>
  array (
    'content' => 'Click here',
    'href' => '#top',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1427803149357-1183',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-anchor',
    'row' => 6,
    'theme_style' => 'u-button-anchor',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1427803167387-1220',
  'new_line' => 'true',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
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
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
  ),
));

$regions->add($home_contacts);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
