<?php
$main_header = upfront_create_region(
			array (
  'name' => 'main-header',
  'title' => 'Main Header',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'main-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 7,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 12,
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

$main_header->add_element("PlainTxt", array (
  'columns' => '3',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426701313231-1079',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class=""><a href="' . get_home_url() . '">PANiNO</a></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426701313231-1709',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-brand-menu',
    'row' => 11,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-brand-menu-mobile',
         'row' => 10,
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-brand-menu-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426701469176-1639',
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
      'row' => 10,
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

$main_header->add_element("Unewnavigation", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426701313249-1591',
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
         'menu-item-db-id' => 1719,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Our Story',
         'menu-item-url' => '' . get_home_url() . '/our-story/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1719',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 1720,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Menu',
         'menu-item-url' => '' . get_home_url() . '/our-menu/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1720',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 1721,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '' . get_home_url() . '/blog/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1721',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 1722,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Gallery',
         'menu-item-url' => '' . get_home_url() . '/our-gallery/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1722',
         'menu-item-target' => '',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 1723,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Find Us',
         'menu-item-url' => '' . get_home_url() . '/our-location/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1723',
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
    'element_id' => 'unewnavigation-object-1426701313248-1620',
    'initialized' => false,
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => '',
         'burger_over' => 'pushes',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
         'width' => 1080,
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'top',
         'burger_over' => 'pushes',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'width' => 315,
         'row' => 10,
      )),
       'tablet' =>
      (array)(array(
         'theme_style' => '_default',
         'width' => 570,
         'burger_menu' => 'yes',
         'menu_alignment' => 'center',
         'row' => 6,
         'burger_alignment' => 'top',
         'burger_over' => 'pushes',
         'menu_style' => 'horizontal',
      )),
    )),
    'menu_id' => false,
    'menu_slug' => 'panino-main-menu',
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => '',
    'burger_over' => 'pushes',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
    'theme_style' => '_default',
    'row' => 11,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426701461098-1339',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 6,
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
      'left' => 4,
      'col' => 2,
      'order' => 0,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 3,
      'order' => 0,
      'row' => 10,
      'top' => 0,
    ),
  ),
));

$regions->add($main_header);
