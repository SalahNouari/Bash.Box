<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$luke_and_sara = upfront_create_region(
			array (
  'name' => 'luke-and-sara',
  'title' => 'Luke and Sara',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'luke-and-sara',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 104,
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
       'row' => 110,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 68,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-pricing/bg-pricing.jpg',
  'background_image_ratio' => 0.38000000000000000444089209850062616169452667236328125,
)
			);

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '33',
  'margin_bottom' => '0',
  'class' => 'module-1428710356437-1838',
  'id' => 'module-1428710356437-1838',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">For 2 months only <span class="" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_5" style="color:rgb(253, 253, 253)">free</span> album design with every booking</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428710356436-1214',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'plaintxt-pricing-page',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428710403654-1633',
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
      'top' => 9,
    ),
  ),
));

$luke_and_sara->add_element("Code", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '27',
  'margin_bottom' => '0',
  'class' => 'module-1429074693910-1913',
  'id' => 'module-1429074693910-1913',
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
    'element_id' => 'upfront-code_element-object-1429074693909-1698',
    'code_selection_type' => 'Create',
    'markup' => '<a class="jumpTo" href="#Prices"></a>',
    'style' => '/* Your styles here */
.jumpTo {
    opacity: 0.8;
    content: "";
    width: 50px;
    height: 50px;
    display: block;
    margin: 0 auto;
    border-radius: 200px;
    -moz-border-radius: 200px;
    -webkit-border-radius: 200px;
    background: url("{{upfront:style_url}}/images/single-page-pricing/sprites.png");
    background-image: url("{{upfront:style_url}}/ui/sprites.svg"), none;
    background-position: -695px -695px;
    transition: opacity 0.4s ease-in;
    -ms-transition: opacity 0.4s ease-in;
    -moz-transition: opacity 0.4s ease-in;
    -webkit-transition: opacity 0.4s ease-in;
}
.jumpTo:hover {
    opacity: 1;
}',
    'script' => '/* Your code here */',
    'row' => 12,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429075144313-1871',
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
      'top' => 13,
    ),
  ),
));

$regions->add($luke_and_sara);

$platinum = upfront_create_region(
			array (
  'name' => 'platinum',
  'title' => 'Platinum',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'platinum',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 117,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 156,
       'background_position_y' => '50',
       'background_position_x' => '50',
       'background_type' => 'image',
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'background_position_y' => '50',
       'background_style' => 'full',
       'background_position_x' => '50',
       'background_type' => 'image',
       'row' => 170,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ufc5',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-pricing/bg-pro.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
  'background_repeat' => 'repeat',
)
			);

$platinum->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '11',
  'margin_bottom' => '0',
  'class' => 'module-1428710403815-1476',
  'id' => 'module-1428710403815-1476',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Pro&nbsp;<span class="upfront_theme_color_3">649</span><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428710403814-1437',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'Prices',
    'theme_style' => 'title-pricing',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428706223198-1717',
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

$platinum->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428710356505-1088',
  'id' => 'module-1428710356505-1088',
  'options' =>
  array (
    'content' => 'ENQUIRE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428710356504-1058',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-four',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 11,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431578796943-1263',
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
      'left' => 7,
      'col' => 5,
      'order' => 0,
      'top' => 16,
      'row' => 11,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$platinum->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '6',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428716789856-1230',
  'id' => 'module-1428716789856-1230',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Pre-wedding mini photography session</p><p class="">5 hours continuous Wedding Day coverage</p><p class="">X2 Photographers</p><p class="">You Get The RAW photos files</p><h6 class="">Soft Copy Wedding Albums on Disk</h6><h6 class="">X3 Wedding Albums</h6><p class="">Album Design – <span class="upfront_theme_color_2">FREE FOR SEP 2015</span></p><h6 class="">Photo Booth</h6><h6 class="">Online Gallery</h6><h6 class="">All travel on the day is included</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428716789855-1899',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 65,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 77,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431578780553-1558',
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
      'order' => 0,
      'top' => 0,
      'row' => 77,
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

$regions->add($platinum);

$premium = upfront_create_region(
			array (
  'name' => 'premium',
  'title' => 'Premium',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'premium',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 118,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 156,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 170,
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
  'background_image' => '{{upfront:style_url}}/images/single-page-pricing/bg-platinum.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
)
			);

$premium->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428718898143-1591',
  'id' => 'module-1428718898143-1591',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Platinum&nbsp;<span class="upfront_theme_color_3" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2" style="">1199</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428718898140-1940',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'title-pricing',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428721630523-1053',
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

$premium->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428721630680-1378',
  'id' => 'module-1428721630680-1378',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Pre-wedding mini photography session</p><p class="">Unlimited Wedding Photos</p><p class="">X2 Photographers</p><p class="">You Get The RAW photos files</p><p class="">Soft Copy Wedding Albums on Disk</p><p class="">x3 Wedding Albums</p><p class="">Album Design – <span class="upfront_theme_color_2">FREE FOR SEP 2015</span></p><p class="">Photo Booth</p><p class="">Online Gallery</p><p class="">All travel on the day is included</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428721630680-1331',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 68,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 74,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428721792479-1394',
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
      'order' => 0,
      'row' => 74,
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

$premium->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428716935389-1336',
  'id' => 'module-1428716935389-1336',
  'options' =>
  array (
    'content' => 'ENQUIRE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428716935388-1755',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-four',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 14,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431579419189-1073',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 5,
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
      'left' => 0,
      'col' => 5,
      'order' => 0,
      'top' => 17,
      'row' => 14,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 11,
    ),
  ),
));

$regions->add($premium);

$pro = upfront_create_region(
			array (
  'name' => 'pro',
  'title' => 'Pro',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'pro',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 118,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 156,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 170,
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
  'background_image' => '{{upfront:style_url}}/images/single-page-pricing/bg-premium.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
)
			);

$pro->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428723421510-1422',
  'id' => 'module-1428723421510-1422',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Premium&nbsp;<span class="upfront_theme_color_3" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2" style="">859</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428723421509-1879',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'title-pricing',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428723509261-1698',
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

$pro->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428723421552-1147',
  'id' => 'module-1428723421552-1147',
  'options' =>
  array (
    'content' => 'ENQUIRE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428723421551-1327',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-four',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 15,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431579655239-1220',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 11,
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
      'left' => 6,
      'col' => 5,
      'order' => 0,
      'top' => 15,
      'row' => 15,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$pro->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '6',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428723509431-1765',
  'id' => 'module-1428723509431-1765',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Pre-wedding mini photography session</p><p class="">10 hours&nbsp;Wedding Day coverage</p><p class="">X2 Photographers</p><p class="">You Get The RAW photos files</p><h6 class="">Soft Copy Wedding Albums on Disk</h6><h5 class="">X3 Wedding Albums</h5><p class="">Album Design – <span class="upfront_theme_color_2">FREE FOR SEP 2015</span></p><h6 class="">Photo Booth</h6><h6 class="">Online Gallery</h6><h6 class="">All travel on the day is included</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428723509431-1278',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 71,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 84,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431579666295-1922',
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
      'order' => 0,
      'top' => 0,
      'row' => 84,
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

$regions->add($pro);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
