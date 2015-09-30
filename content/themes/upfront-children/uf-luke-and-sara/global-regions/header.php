<?php
/* START_REGION_OUTPUT */
$region_92c60d = upfront_create_region(
			array (
  'name' => 'header',
  'title' => 'Header',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 30,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 18,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 19,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
)
			);

$region_92c60d->add_element("Code", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1429071777087-1324',
  'id' => 'module-1429071777087-1324',
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
    'element_id' => 'upfront-code_element-object-1429071777086-1394',
    'code_selection_type' => 'Create',
    'markup' => '<div class="logo-header"></div>',
    'style' => '/* Your styles here */
.logo-header {
    content: "";
    width: 128px;
    height: 56px;
    display: block;
    margin: 0 auto;
    background: url("{{upfront:style_url}}/images/global-regions/header/sprites.png") no-repeat;
    background-image: url("{{upfront:style_url}}/ui/sprites.svg"), none;
    background-position: -16px -852px;
}',
    'script' => '/* Your code here */',
    'row' => 7,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 13,
      )),
       'tablet' =>
      (array)(array(
         'row' => 14,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429073122737-1284',
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
      'col' => 4,
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
      'row' => 14,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'row' => 13,
    ),
  ),
));

$region_92c60d->add_element("Unewnavigation", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428636784855-1056',
  'id' => 'module-1428636784855-1056',
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
         'menu-item-title' => 'Home',
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
         'menu-item-title' => 'About',
         'menu-item-url' => '{{upfront:home_url}}/about/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1711',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 1712,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Portfolio',
         'menu-item-url' => '{{upfront:home_url}}/portfolio/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1712',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 1713,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Pricing',
         'menu-item-url' => '{{upfront:home_url}}/pricing/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1713',
         'menu-item-target' => '',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 1714,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Contact',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '1714',
         'menu-item-target' => '',
         'menu-item-position' => 5,
      )),
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'center',
    'allow_sub_nav' =>
    array (
      0 => 'no',
    ),
    'allow_new_pages' =>
    array (
      0 => 'yes',
    ),
    'element_id' => 'unewnavigation-object-1428636784854-1099',
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => '',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'width' => 1080,
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'whole',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'width' => 315,
         'row' => 11,
      )),
       'tablet' =>
      (array)(array(
         'burger_menu' => 'yes',
         'width' => 570,
         'row' => 10,
      )),
    )),
    'row' => 4,
    'menu_slug' => 'luke-menu',
    'menu_id' => false,
    'burger_menu' =>
    array (
    ),
    'burger_alignment' => '',
    'burger_over' => 'over',
    'is_floating' =>
    array (
    ),
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428636897642-1107',
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
      'col' => 3,
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
      'row' => 10,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 2,
      'order' => 0,
      'row' => 11,
      'top' => 2,
    ),
  ),
));

$regions->add($region_92c60d);

/* END_REGION_OUTPUT */