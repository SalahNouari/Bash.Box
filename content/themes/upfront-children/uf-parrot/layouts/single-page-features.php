<?php
$features_navigation = upfront_create_region(
			array (
  'name' => 'features-navigation',
  'title' => 'features navigation',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-header',
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

$features_navigation->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '23',
  'margin_bottom' => '0',
  'class' => 'module-1432565491331-1812',
  'id' => 'module-1432565491331-1812',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1432565491331-1879',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-icon-logo',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-icon-logo',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432565513102-1639',
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
      'top' => 4,
    ),
  ),
));

$features_navigation->add_element("Unewnavigation", array (
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
         'row' => 14,
      )),
       'mobile' =>
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'left',
         'menu_style' => 'vertical',
         'menu_alignment' => 'left',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 11,
      )),
    )),
    'menu_id' => false,
    'menu_slug' => 'parrot-main-nav',
    'row' => 43,
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
      'row' => 14,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'row' => 11,
      'top' => 3,
    ),
  ),
));

$regions->add($features_navigation);

$features_header = upfront_create_region(
			array (
  'name' => 'features-header',
  'title' => 'Features Header',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 76,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'row' => 85,
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
  'background_image' => '{{upfront:style_url}}/images/single-page-features/hero-3.jpg',
  'background_image_ratio' => 0.309999999999999997779553950749686919152736663818359375,
)
			);

$features_header->add_element("Button", array (
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
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 12,
      )),
       'mobile' =>
      (array)(array(
         'row' => 8,
      )),
    )),
    'theme_style' => 'button-1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429807795849-1688',
  'new_line' => true,
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
      'order' => 0,
      'row' => 12,
      'top' => 8,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 8,
    ),
  ),
));

$features_header->add_element("Button", array (
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
  'wrapper_id' => 'wrapper-1429803160370-1929',
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
      'order' => 0,
      'top' => 4,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 3,
    ),
  ),
));

$features_header->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1429800300014-1995',
  'id' => 'module-1429800300014-1995',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2" style="" rel=""><h1 style="text-align: center;"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">All you need in one place - it can go to three lines, don\'t believe me? We hit three lines.</span></span></h1></span>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429800300014-1641',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 15,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429803014578-1903',
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$regions->add($features_header);

$header_bottom = upfront_create_region(
			array (
  'name' => 'header_bottom',
  'title' => 'Header Area bottom',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-header',
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

$features_intro = upfront_create_region(
			array (
  'name' => 'features-intro',
  'title' => 'Features Intro',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-intro',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 146,
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

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '39',
  'margin_bottom' => '0',
  'class' => 'module-1430145675740-1192',
  'id' => 'module-1430145675740-1192',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4>Message</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430145675740-1178',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430149734273-1207',
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
      'edited' => false,
      'col' => 6,
      'order' => 0,
      'clear' => false,
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
      'top' => 6,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430149734451-1702',
  'id' => 'module-1430149734451-1702',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Sed fringilla mauris sit amet nibh.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430149734451-1247',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430149734273-1207',
  'new_line' => true,
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 6,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 12,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430149767256-1007',
  'id' => 'module-1430149767256-1007',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">Audio Calls</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430149767256-1113',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430149734273-1207',
  'new_line' => true,
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 2,
      'top' => 3,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 5,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430149891514-1275',
  'id' => 'module-1430149891514-1275',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Etiam sit amet orci eget eros faucibus.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430149891515-1210',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430149734273-1207',
  'new_line' => true,
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
      'order' => 1,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430149779055-1044',
  'id' => 'module-1430149779055-1044',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">Video Calls</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430149779055-1687',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430149734273-1207',
  'new_line' => true,
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 4,
      'top' => 6,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 2,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430149902209-1204',
  'id' => 'module-1430149902209-1204',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Sed fringilla mauris sit amet nibh.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430149902209-1795',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430149734273-1207',
  'new_line' => true,
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 3,
    ),
  ),
));

$features_intro->add_element("Uimage", array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'class' => 'module-1430145675745-1658',
  'id' => 'module-1430145675745-1658',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-features/featured-mobile-device-340x592-3464.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-features/featured-mobile-device.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-features/featured-mobile-device.png',
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
       'width' => 340,
       'height' => 592,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 340,
       'height' => 592,
       'top' => 670,
       'left' => 710,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 340,
       'height' => 600,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '133',
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
    'element_id' => 'image-1430145675742-1067',
    'row' => 62,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430149582334-1596',
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
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 5,
      'top' => 10,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 4,
    ),
  ),
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '39',
  'margin_bottom' => '0',
  'class' => 'module-1430150063949-1542',
  'id' => 'module-1430150063949-1542',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: right;">Send Files</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150063949-1242',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150092185-1150',
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
      'edited' => false,
      'col' => 6,
      'order' => 0,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 12,
      'top' => 9,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 6,
      'top' => 12,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430150071778-1158',
  'id' => 'module-1430150071778-1158',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">Sed fringilla mauris sit amet nibh.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150071778-1513',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430150092185-1150',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 8,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 7,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430150047188-1207',
  'id' => 'module-1430150047188-1207',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: right;">Share Location</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150047188-1864',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150092185-1150',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 9,
      'top' => 9,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 8,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430150053334-1465',
  'id' => 'module-1430150053334-1465',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">Ut varius tincidunt phasellus leo dolor.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150053335-1365',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430150092185-1150',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 11,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 9,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430149952863-1692',
  'id' => 'module-1430149952863-1692',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: right;">Share Contacts</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430149952863-1404',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150092185-1150',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 7,
      'top' => 18,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 10,
    ),
  ),
  'close_wrapper' => false,
));

$features_intro->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430150001614-1959',
  'id' => 'module-1430150001614-1959',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">Sed fringilla mauris sit amet nibh.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150001614-1006',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
  'wrapper_id' => 'wrapper-1430150092185-1150',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 13,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 11,
    ),
  ),
));

$features_intro->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1430145675759-1560',
  'id' => 'module-1430145675759-1560',
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
    'element_id' => 'upfront-code_element-object-1430145675759-1969',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 7,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150261867-1009',
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 10,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 13,
    ),
  ),
));

$regions->add($features_intro);

$one_touch_call = upfront_create_region(
			array (
  'name' => 'one-touch-call',
  'title' => 'One Touch Call',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'one-touch-call',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 125,
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
  'background_color' => '#ffffff',
)
			);

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'class' => 'module-1430149852118-1435',
  'id' => 'module-1430149852118-1435',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="">One Touch Call</h2>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430149852118-1252',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150744192-1921',
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
      'clear' => false,
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

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430150504407-1258',
  'id' => 'module-1430150504407-1258',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Curabitur suscipit suscipit tellus. Nunc nec neque. Praesent nonummy mi in odio.&nbsp;Curabitur suscipit suscipit tellus.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430150504406-1545',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 15,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150744193-1325',
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
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
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

$one_touch_call->add_element("Uimage", array (
  'columns' => '11',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1430149582519-1012',
  'id' => 'module-1430149582519-1012',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-features/smartwatch-475x325-5179.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-features/smartwatch.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-features/smartwatch.jpg',
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
    'element_id' => 'image-1430149582517-1653',
    'row' => 35,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150581865-1613',
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
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 2,
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

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1430150642362-1717',
  'id' => 'module-1430150642362-1717',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">Smart Watch</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150642363-1280',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
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
  'wrapper_id' => 'wrapper-1430150646882-1964',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 9,
      'order' => 0,
      'clear' => false,
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
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 3,
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
  'close_wrapper' => false,
));

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430150675984-1929',
  'id' => 'module-1430150675984-1929',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Curabitur suscipit suscipit tellus. Nunc nec neque. Praesent nonummy mi in odio.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430150675984-1462',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 18,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150646882-1964',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 4,
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
  'close_wrapper' => false,
));

$one_touch_call->add_element("Code", array (
  'columns' => '3',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151336435-1378',
  'id' => 'module-1430151336435-1378',
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
    'element_id' => 'object-1430151336435-1841',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 5,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150646882-1964',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 3,
      'order' => 8,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1430150939490-1184',
  'id' => 'module-1430150939490-1184',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="">2x</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430150939489-1901',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 7,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150646882-1964',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 5,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 4,
      'order' => 0,
      'row' => 7,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$one_touch_call->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151179467-1678',
  'id' => 'module-1430151179467-1678',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Faster</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151179467-1798',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 7,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430150646882-1964',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 6,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 4,
      'order' => 0,
      'row' => 7,
      'top' => -1,
    ),
  ),
));

$one_touch_call->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'class' => 'module-1430151412512-1958',
  'id' => 'module-1430151412512-1958',
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
    'element_id' => 'object-1430151412513-1445',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 7,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430151418841-1658',
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
      'clear' => false,
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

$regions->add($one_touch_call);

$features_2 = upfront_create_region(
			array (
  'name' => 'features-2',
  'title' => 'Features 2',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-2',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 106,
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

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1430151104636-1925',
  'id' => 'module-1430151104636-1925',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3>Message</h3>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1430151104636-1040',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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
      'order' => 0,
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
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151602662-1192',
  'id' => 'module-1430151602662-1192',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Sed fringilla mauris sit amet nibh.&nbsp;Ut id nisl quis enim digniss.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151602662-1137',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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
  'close_wrapper' => false,
));

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151697549-1524',
  'id' => 'module-1430151697549-1524',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">Audio Calls</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151697549-1135',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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
  'close_wrapper' => false,
));

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151719459-1066',
  'id' => 'module-1430151719459-1066',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Fusce egestas elit eget lorem. In hac habitasse platea dictumst.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151719459-1378',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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
  'close_wrapper' => false,
));

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1430151733317-1885',
  'id' => 'module-1430151733317-1885',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">Video Calls</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151733317-1331',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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
  'close_wrapper' => false,
));

$features_2->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430151805756-1871',
  'id' => 'module-1430151805756-1871',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Suspendisse faucibus, nunc et pellentesque egestas, lacus ante.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430151805756-1802',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
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
  'wrapper_id' => 'wrapper-1430151575065-1058',
  'new_line' => true,
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

$features_2->add_element("Uimage", array (
  'columns' => '11',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1430150582082-1093',
  'id' => 'module-1430150582082-1093',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-features/features-1-475x395-2129.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-features/features-1.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-features/features-1.jpg',
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
       'height' => 395,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 475,
       'height' => 395,
    )),
    'position' =>
    (array)(array(
       'top' => -2.5,
       'left' => 0,
    )),
    'marginTop' => 2.5,
    'element_size' =>
    (array)(array(
       'width' => 475,
       'height' => 400,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '135',
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
    'element_id' => 'image-1430150582080-1193',
    'row' => 84,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430151515767-1311',
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
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$features_2->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'class' => 'module-1430152745151-1863',
  'id' => 'module-1430152745151-1863',
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
    'element_id' => 'object-1430152745151-1564',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 7,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430152750621-1653',
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 3,
    ),
  ),
));

$regions->add($features_2);

$features_21 = upfront_create_region(
			array (
  'name' => 'features-21',
  'title' => 'Features 21',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-21',
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

$features_21->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1430154141143-1387',
  'id' => 'module-1430154141143-1387',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="">Works on any device</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430154141144-1692',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430154152372-1737',
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

$features_21->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430154804980-1056',
  'id' => 'module-1430154804980-1056',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Curabitur suscipit suscipit tellus. Nunc nec neque. Praesent nonummy mi in odio.&nbsp;Curabitur suscipit suscipit tellus.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430154804980-1975',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 15,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-no-padding-y',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430154817218-1151',
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

$features_21->add_element("Uimage", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1430151515994-1118',
  'id' => 'module-1430151515994-1118',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-features/device-support-790x425-7498.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-features/device-support.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-features/device-support.jpg',
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
    'image_id' => '136',
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
    'element_id' => 'image-1430151515993-1479',
    'row' => 45,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430154914746-1006',
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

$regions->add($features_21);

$features_3 = upfront_create_region(
			array (
  'name' => 'features-3',
  'title' => 'Features 3',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'features-3',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 51,
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

$features_3->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1430156663251-1547',
  'id' => 'module-1430156663251-1547',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">Call from your Tablet</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430156663251-1452',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
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
  'wrapper_id' => 'wrapper-1430156670366-1687',
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
));

$features_3->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '5',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430156695055-1942',
  'id' => 'module-1430156695055-1942',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Donec elit libero&nbsp;&nbsp;sodales nec&nbsp;&nbsp;volutpat a, suscipit non&nbsp;turpis. Vestibulum fringilla pede sit amet augue. Pellentesque ut neque. Praesent venenatis metus at tortor pulvinar varius. In ac felis quis tortor malesuada pretiumante.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1430156695055-1664',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 24,
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
  'wrapper_id' => 'wrapper-1430156699425-1286',
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

$features_3->add_element("Button", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1430145675767-1972',
  'id' => 'module-1430145675767-1972',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1430145675767-1131',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-btn-phone',
    'row' => 6,
    'theme_style' => 'button-phone',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1430156455865-1607',
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

$regions->add($features_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
