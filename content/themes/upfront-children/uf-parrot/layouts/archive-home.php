<?php
$header_top = upfront_create_region(
			array (
  'name' => 'header_top',
  'title' => 'Header Area top',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-header',
  'sub' => 'top',
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
)
			);

$regions->add($header_top);

$index_navigation = upfront_create_region(
			array (
  'name' => 'index-navigation',
  'title' => 'Index Navigation',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-header',
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

$index_navigation->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '20',
  'margin_bottom' => '0',
  'class' => 'module-1432139373730-1681',
  'id' => 'module-1432139373730-1681',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1432139373730-1625',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-icon-logo',
    'row' => 6,
    'theme_style' => 'button-icon-logo',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 8,
      )),
       'mobile' =>
      (array)(array(
         'row' => 8,
      )),
    )),
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432139398192-1368',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 2,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 2,
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
      'col' => 2,
      'order' => 0,
      'top' => 3,
      'row' => 8,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'row' => 8,
      'top' => 2,
    ),
  ),
));

$index_navigation->add_element("Unewnavigation", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430825013643-1304',
  'id' => 'module-1430825013643-1304',
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
         'menu-item-db-id' => 9,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Home',
         'menu-item-url' => '{{upfront:home_url}}',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '9',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 =>
      (array)(array(
         'menu-item-db-id' => 10,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Features',
         'menu-item-url' => '{{upfront:home_url}}/features/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '10',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 =>
      (array)(array(
         'menu-item-db-id' => 11,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Download',
         'menu-item-url' => '{{upfront:home_url}}/download/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '11',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
      3 =>
      (array)(array(
         'menu-item-db-id' => 12,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Contact Us',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '12',
         'menu-item-target' => '',
         'menu-item-position' => 4,
      )),
      4 =>
      (array)(array(
         'menu-item-db-id' => 13,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'About',
         'menu-item-url' => '{{upfront:home_url}}/about/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '13',
         'menu-item-target' => '',
         'menu-item-position' => 5,
      )),
      5 =>
      (array)(array(
         'menu-item-db-id' => 14,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '{{upfront:home_url}}/blog/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '14',
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
    'element_id' => 'unewnavigation-object-1430825013642-1368',
    'breakpoint' =>
    (array)(array(
       'desktop' =>
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'is_floating' =>
        array (
        ),
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
         'row' => 12,
         'theme_style' => '_default',
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'left',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 13,
      )),
    )),
    'menu_id' => false,
    'menu_slug' => 'parrot-main-nav',
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
    'row' => 48,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430881887982-1363',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 10,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 5,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 8,
      'col' => 2,
      'order' => 3,
      'row' => 12,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 2,
      'order' => 1,
      'row' => 13,
      'top' => 0,
    ),
  ),
));

$regions->add($index_navigation);

$index_header = upfront_create_region(
			array (
  'name' => 'index-header',
  'title' => 'Index Header',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-header',
  'position' => 1,
  'allow_sidebar' => true,
  'behavior' => 'keep-ratio',
),
			array (
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 79,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 104,
    )),
  )),
  'row' => 95,
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => 'top',
  ),
  'background_color' => '#ffffff',
  'background_slider_transition' => 'crossfade',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_images' =>
  array (
    0 => '',
    1 => '',
  ),
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/archive-home/hero (1).jpg',
  'background_image_ratio' => 0.35999999999999998667732370449812151491641998291015625,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 50%',
  'expand_lock' => false,
)
			);

$index_header->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '22',
  'margin_bottom' => '0',
  'class' => 'module-1429806549034-1669',
  'id' => 'module-1429806549034-1669',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429806549034-1415',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-logo',
    'row' => 6,
    'theme_style' => 'button-logo',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 9,
      )),
    )),
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430881884360-1285',
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
      'left' => 4,
      'col' => 4,
      'order' => 5,
      'top' => 11,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 2,
      'top' => 1,
      'row' => 9,
    ),
  ),
));

$index_header->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1429790973961-1425',
  'id' => 'module-1429790973961-1425',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span>Bring your conversations to life with group video calls for free</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429790973961-1597',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 23,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-lead',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430881884376-1395',
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
      'order' => 7,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 3,
      'top' => 4,
    ),
  ),
));

$index_header->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1429552360300-1533',
  'id' => 'module-1429552360300-1533',
  'options' =>
  array (
    'content' => 'Download&nbsp;Parrot',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1429552360300-1406',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'row' => 6,
    'is_edited' => true,
    'currentpreset' => 'parrot-btn-1',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 12,
      )),
       'mobile' =>
      (array)(array(
         'row' => 14,
      )),
    )),
    'theme_style' => 'button-1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430826272375-1875',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 6,
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
      'left' => 2,
      'col' => 4,
      'order' => 1,
      'row' => 12,
      'top' => 3,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 4,
      'top' => 6,
      'row' => 14,
    ),
  ),
));

$index_header->add_group(array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432747716653-1386',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432747716654-1678',
  'original_col' => 3,
  'href' => '{{upfront:home_url}}/download/',
  'linkTarget' => '_self',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 3,
      'order' => 3,
      'clear' => false,
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
      'left' => 0,
      'col' => 3,
      'order' => 1,
      'row' => 9,
      'top' => 5,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 0,
      'row' => 9,
      'top' => 4,
    ),
  ),
));

$index_header->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429889001652-1719',
  'id' => 'module-1429889001652-1719',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429889001652-1140',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-blackberry-sm-white',
    'row' => 6,
    'theme_style' => 'button-blackberry-sm-white',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432747716682-1182',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 0,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'hide' => 0,
    ),
  ),
  'group' => 'module-group-1432747716653-1386',
));

$index_header->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429888991853-1997',
  'id' => 'module-1429888991853-1997',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429888991853-1320',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-apple-sm-white',
    'row' => 6,
    'theme_style' => 'button-iphone-sm-white',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432747716684-1268',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 1,
      'order' => 1,
    ),
  ),
  'group' => 'module-group-1432747716653-1386',
));

$index_header->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429888983665-1358',
  'id' => 'module-1429888983665-1358',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429888983665-1920',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-android-sm-white',
    'row' => 6,
    'theme_style' => 'button-android-sm-white',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432747716685-1239',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 2,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432747716653-1386',
));

$regions->add($index_header);

$devices = upfront_create_region(
			array (
  'name' => 'devices',
  'title' => 'Devices',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'devices',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 84,
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
       'row' => 40,
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

$devices->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '19',
  'margin_bottom' => '0',
  'class' => 'module-1429888605674-1565',
  'id' => 'module-1429888605674-1565',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/slide-devices (2)-760x285-9997.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/slide-devices (2).png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/slide-devices (2).png',
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
       'width' => 760,
       'height' => 285,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 800,
       'height' => 300,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -150,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 1060,
       'height' => 285,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '130',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1429888605672-1663',
    'row' => 61,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 29,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429889196620-1244',
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 29,
      'top' => 9,
    ),
  ),
));

$regions->add($devices);

$index_intro = upfront_create_region(
			array (
  'name' => 'index-intro',
  'title' => 'Index Intro',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-intro',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 44,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 51,
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
  'background_color' => '#ffffff',
)
			);

$index_intro->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1429888605671-1859',
  'id' => 'module-1429888605671-1859',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Group conversations are better than ever</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429888605671-1917',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429889385262-1229',
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 2,
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

$index_intro->add_element("PlainTxt", array (
  'columns' => '16',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429889385431-1229',
  'id' => 'module-1429889385431-1229',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Lorem ipsum dolor sit amet, unum petentium sea ex, ea vim pericula gubergren. Purto mundi quaerendum at eam. Malis melius eam ut.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429889385431-1806',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429889443999-1835',
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

$index_intro->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1433386617144-1874',
  'id' => 'module-1433386617144-1874',
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
    'element_id' => 'upfront-code_element-object-1433386617143-1902',
    'row' => 8,
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => 'hr.parrot-divider {
 display: table;
 width: 100%;
}',
    'script' => '/* Your code here */',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433387219517-1800',
  'new_line' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 13,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 11,
    ),
  ),
));

$regions->add($index_intro);

$index_features = upfront_create_region(
			array (
  'name' => 'index-features',
  'title' => 'index features',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-features',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 71,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 152,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 138,
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

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1429889444183-1254',
  'id' => 'module-1429889444183-1254',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5 class="" style="text-align: center;"></h5><h5 class=""></h5><h6 class=""></h6><h6 class=""></h6><h4 class="" style="text-align: center;"></h4><h5 class="" style="text-align: center;">The Power to do more</h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429889444183-1084',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429890749835-1253',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 9,
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

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1429891884356-1346',
  'id' => 'module-1429891884356-1346',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5 class="" style="text-align: center;"></h5><h5 class="" style="text-align: center;"></h5><h4 class=""></h4><h6 class=""></h6><h5 class="" style="text-align: center;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_5" style="" rel="">Video Calls</span></h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429891884356-1250',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429891887090-1211',
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
      'col' => 7,
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
      'top' => 9,
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

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1429891897245-1864',
  'id' => 'module-1429891897245-1864',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5 class="" style="text-align: center;"><span class="upfront_theme_color_6">Works on any device</span></h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429891897245-1558',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429891905224-1873',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
      'order' => 4,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 7,
      'order' => 4,
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
      'top' => 11,
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

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429890750026-1726',
  'id' => 'module-1429890750026-1726',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Nam ipsum risus, rutrum vitae.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429890750026-1523',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 17,
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
  'wrapper_id' => 'wrapper-1429891810899-1863',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
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
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429891916087-1566',
  'id' => 'module-1429891916087-1566',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429891916087-1547',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 15,
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
  'wrapper_id' => 'wrapper-1429891918995-1602',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
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
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$index_features->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429891922814-1304',
  'id' => 'module-1429891922814-1304',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Morbi nec metus. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429891922814-1797',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 15,
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
  'wrapper_id' => 'wrapper-1429891922813-1393',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 9,
      'order' => 5,
      'clear' => true,
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
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$index_features->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '11',
  'margin_bottom' => '0',
  'class' => 'module-1432648014400-1623',
  'id' => 'module-1432648014400-1623',
  'options' =>
  array (
    'content' => 'Learn More',
    'href' => '{{upfront:home_url}}/features/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1432648014400-1929',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-btn-2',
    'row' => 6,
    'theme_style' => 'button-2',
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432649468614-1855',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 8,
      'order' => 6,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 6,
      'order' => 6,
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
      'order' => 0,
      'top' => 16,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 10,
    ),
  ),
));

$regions->add($index_features);

$index_video = upfront_create_region(
			array (
  'name' => 'index-video',
  'title' => 'Index Video',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'index-video',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 120,
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
  'background_video_mute' => 1,
  'background_video_autoplay' => 1,
  'background_video_style' => 'crop',
  'background_video' => '',
  'background_video_embed' => '<iframe width="10000" height="7500" src="https://www.youtube.com/embed/bgHOS7SGqSg?feature=oembed" frameborder="0" allowfullscreen></iframe>',
  'background_video_width' => 10000,
  'background_video_height' => 7500,
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/archive-home/video.jpg',
  'background_image_ratio' => 0.66000000000000003108624468950438313186168670654296875,
)
			);

$index_video->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '46',
  'margin_bottom' => '0',
  'class' => 'module-1429892523409-1505',
  'id' => 'module-1429892523409-1505',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/play-button-120x120-3618.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/play-button.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/play-button.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => 'external',
    'image_link' => '{{upfront:home_url}}',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' =>
    (array)(array(
       'width' => 120,
       'height' => 120,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 120,
       'height' => 120,
       'top' => 1810,
       'left' => 860,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -20,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 160,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '132',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1429892523406-1504',
    'row' => 14,
    'link_target' => '_self',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 28,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429894495897-1508',
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
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 0,
      'top' => 41,
      'row' => 28,
    ),
  ),
));

$index_video->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '6',
  'margin_right' => '0',
  'margin_top' => '18',
  'margin_bottom' => '0',
  'class' => 'module-1429892523404-1086',
  'id' => 'module-1429892523404-1086',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="upfront-quote-alternative" style="text-align: center;"></p><h2 style="text-align: center;">Chat simply with Parrots</h2><p></p><h2 class="" style="text-align: center;"></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429892523404-1168',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-white',
    'row' => 9,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429894588339-1680',
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$regions->add($index_video);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
