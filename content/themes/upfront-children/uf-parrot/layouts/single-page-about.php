<?php
$about_navigation = upfront_create_region(
			array (
  'name' => 'about-navigation',
  'title' => 'About Navigation',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'about-header-area',
  'sub' => 'left',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'col' => 5,
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
  'background_color' => 'rgba(0,0,0,0)',
)
			);

$about_navigation->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '22',
  'margin_bottom' => '0',
  'class' => 'module-1432759400940-1374',
  'id' => 'module-1432759400940-1374',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1432759400940-1257',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-icon-logo',
    'row' => 6,
    'theme_style' => 'button-icon-logo',
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432759472179-1644',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 5,
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
      'col' => 4,
      'order' => 0,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 5,
      'order' => 0,
      'top' => 1,
    ),
  ),
));

$about_navigation->add_element("Unewnavigation", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429557374225-1939',
  'id' => 'module-1429557374225-1939',
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
         'menu-item-db-id' => 1709,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Home',
         'menu-item-url' => '{{upfront:home_url}}',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1709',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 1710,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Features',
         'menu-item-url' => '{{upfront:home_url}}/features/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1710',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 1711,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Download',
         'menu-item-url' => '{{upfront:home_url}}/download/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1711',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 1712,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Contact Us',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1712',
         'menu-item-target' => '',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 1713,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'About',
         'menu-item-url' => '{{upfront:home_url}}/about/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1713',
         'menu-item-target' => '',
         'menu-item-position' => 5,
      )),
      5 =>
      (array)(array(
         'menu-item-db-id' => 1714,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '{{upfront:home_url}}/blog/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1714',
         'menu-item-target' => '',
         'menu-item-position' => 6,
      )),
    ),
    'menu_style' => 'vertical',
    'menu_alignment' => 'left',
    'allow_sub_nav' =>
    array (
      0 => 'no',
    ),
    'allow_new_pages' =>
    array (
    ),
    'element_id' => 'unewnavigation-object-1429557374224-1061',
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'width' => 1080,
      )),
       'tablet' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'width' => 570,
         'row' => 11,
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'left',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 12,
      )),
    )),
    'menu_id' => false,
    'menu_slug' => 'parrot-main-nav',
    'row' => 50,
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
    'theme_style' => 'parrot-main-nav-1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429558005324-1559',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 8,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 2,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 6,
      'col' => 2,
      'order' => 0,
      'row' => 11,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'row' => 12,
      'top' => 0,
    ),
  ),
));

$regions->add($about_navigation);

$about_header_area = upfront_create_region(
			array (
  'name' => 'about-header-area',
  'title' => 'About Header Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'about-header-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
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
       'row' => 107,
    )),
  )),
  'row' => 86,
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => 'bottom',
  ),
  'background_color' => '#ffffff',
  'background_slider_transition' => 'crossfade',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_images' =>
  array (
    0 => '/images/hero-2.jpg',
    1 => '/images/hero.jpg',
  ),
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-about/hero-4.jpg',
  'background_image_ratio' => 0.309999999999999997779553950749686919152736663818359375,
)
			);

$about_header_area->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '14',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429807658040-1003',
  'id' => 'module-1429807658040-1003',
  'options' =>
  array (
    'content' => 'Download Parrot',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429807658039-1000',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-btn-1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429807795849-1688',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 4,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 8,
    ),
  ),
));

$about_header_area->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1429800012921-1982',
  'id' => 'module-1429800012921-1982',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429800012920-1857',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-logo',
    'row' => 6,
    'theme_style' => 'button-logo',
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430839003985-1916',
  'new_line' => true,
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
      'edited' => true,
      'col' => 6,
      'order' => 0,
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
      'order' => 3,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 3,
      'top' => 4,
    ),
  ),
));

$about_header_area->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1429800300014-1995',
  'id' => 'module-1429800300014-1995',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2" style="" rel=""><h1 style="text-align: center;"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">A cross-platform mobile &amp; Desktop</span></span></h1><h1 style="text-align: center;"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">app which allows you to exchange messages &amp; video call for free</span></span></h1></span>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429800300014-1641',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 41,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430882811129-1252',
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 4,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 4,
      'top' => 5,
    ),
  ),
));

$regions->add($about_header_area);

$header_bottom = upfront_create_region(
			array (
  'name' => 'header_bottom',
  'title' => 'Header Area bottom',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'about-header-area',
  'sub' => 'bottom',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
    )),
  )),
  'row' => 30,
  'background_type' => 'color',
  'use_padding' => 0,
  'background_color' => 'rgba(255,255,255,0.35)',
)
			);

$regions->add($header_bottom);

$what = upfront_create_region(
			array (
  'name' => 'what',
  'title' => 'What',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'what',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 60,
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
)
			);

$what->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '18',
  'margin_bottom' => '0',
  'class' => 'module-1430162406584-1584',
  'id' => 'module-1430162406584-1584',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2>What</h2>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430162406584-1954',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430162890988-1280',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => false,
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

$what->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430162891167-1161',
  'id' => 'module-1430162891167-1161',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">In turpis. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. In ut quam vitae odio lacinia tincidunt. Nullam quis ante. Morbi ac felis.<br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430162891167-1753',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430162915858-1626',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => false,
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

$what->add_element("Uimage", array (
  'columns' => '11',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430162406593-1737',
  'id' => 'module-1430162406593-1737',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/smartwatch-475x325-8469.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/smartwatch.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/smartwatch.jpg',
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
       'width' => 475,
       'height' => 325,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 475,
       'height' => 325,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 475,
       'height' => 330,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '134',
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
    'element_id' => 'image-1430162406586-1753',
    'row' => 35,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430162993064-1491',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => false,
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

$what->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1430162916048-1491',
  'id' => 'module-1430162916048-1491',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span>In consectetuer turpis ut velit. Vestibulum fringilla pede sit amet augue. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Phasellus gravida semper nisi. Ut a nisl id ante tempushendrerit.&nbsp;In consectetuer turpis ut velit. Vestibulum fringilla pede sit amet augue.</span></p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430162916047-1258',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 54,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 55,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163055054-1231',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
      'clear' => false,
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
      'row' => 55,
      'top' => 9,
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

$what->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430162406608-1675',
  'id' => 'module-1430162406608-1675',
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
    'element_id' => 'upfront-code_element-object-1430162406607-1394',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 5,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163187963-1275',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => false,
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

$regions->add($what);

$who = upfront_create_region(
			array (
  'name' => 'who',
  'title' => 'Who',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'who',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 183,
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
       'col' => 24,
       'row' => 162,
    )),
  )),
)
			);

$who->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430163286346-1182',
  'id' => 'module-1430163286346-1182',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="">Who</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430163286346-1580',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163296175-1301',
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

$who->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430163306066-1142',
  'id' => 'module-1430163306066-1142',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">In turpis. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. In ut quam vitae odio lacinia tincidunt. Nullam quis ante. Morbi ac felis.<br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430163306066-1827',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163311630-1196',
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

$who->add_element("Uimage", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1430162993257-1422',
  'id' => 'module-1430162993257-1422',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/who-we-are-790x425-2970.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/who-we-are.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/who-we-are.jpg',
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
       'width' => 790,
       'height' => 425,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 790,
       'height' => 425,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 790,
       'height' => 430,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '139',
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
    'element_id' => 'image-1430162993254-1239',
    'row' => 45,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163351627-1698',
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

$who->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1430163439784-1629',
  'id' => 'module-1430163439784-1629',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3>Lorem ipsum</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430163439785-1415',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 12,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163439784-1093',
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

$who->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430163055245-1875',
  'id' => 'module-1430163055245-1875',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Suspendisse potenti. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Sed cursus turpis vitae tortor. Aliquam erat volutpat. Cras non dolor.&nbsp;Suspendisse potenti. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430163055245-1308',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163488689-1998',
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

$who->add_element("Button", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1430162406616-1865',
  'id' => 'module-1430162406616-1865',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1430162406616-1090',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-btn-speech',
    'row' => 6,
    'theme_style' => 'button-speech',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430163585241-1476',
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

$regions->add($who);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
