<?php
$main_footer = upfront_create_region(
			array (
  'name' => 'main-footer',
  'title' => 'Main Footer',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'main-footer',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 4,
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
  'background_color' => '#ufc1',
)
			);

$main_footer->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426163799310-1903',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<a href="http://incsub.com/" rel="external">Incsub.com</a> © 2015
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1426163799310-1058',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-copyright',
    'is_edited' => true,
    'row' => 6,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'u-copyright-mobile',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-copyright-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426169421696-1912',
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
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 0,
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

$main_footer->add_element("Unewnavigation", array (
  'columns' => '12',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1426163799333-1887',
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
         'menu-item-db-id' => 1710,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Terms &#038; Conditions',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1710',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 1711,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Report a problem',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1711',
         'menu-item-target' => '',
         'menu-item-position' => 2,
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
    'element_id' => 'unewnavigation-object-1426163799332-1478',
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
         'theme_style' => 'u-menu-footer',
         'width' => 570,
         'burger_menu' => '',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'u-menu-footer',
         'width' => 315,
         'burger_menu' => '',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'center',
      )),
    )),
    'row' => 10,
    'menu_id' => false,
    'menu_slug' => 'footer-menu',
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
    'theme_style' => 'u-menu-footer',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1426169575742-1174',
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

$regions->add($main_footer);
