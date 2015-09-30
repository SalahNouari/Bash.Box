<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$slider = upfront_create_region(
			array (
  'name' => 'slider',
  'title' => 'Slider',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'slider',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 103,
  'background_type' => 'slider',
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
       'row' => 80,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 70,
       'background_type' => 'slider',
       'background_slider_control' => 'hover',
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
  'background_image' => '{{upfront:style_url}}/images/single-page-portfolio-extended/bg-pricing.jpg',
  'background_image_ratio' => 0.38000000000000000444089209850062616169452667236328125,
  'background_slider_transition' => 'crossfade',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_images' =>
  array (
    0 => '/images/bg-wedding.jpg',
    1 => '/images/bg-happy.jpg',
  ),
)
			);

$regions->add($slider);

$content_area = upfront_create_region(
			array (
  'name' => 'content-area',
  'title' => 'Content Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 134,
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
  'background_color' => 'rgba(237,237,237,1)',
  'background_style' => 'tile',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-portfolio-extended/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$content_area->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'class' => 'module-1428718898143-1591',
  'id' => 'module-1428718898143-1591',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Harry + Sally</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428718898140-1940',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-extended-style',
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
      'top' => 10,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 4,
    ),
  ),
));

$content_area->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428724988678-1420',
  'id' => 'module-1428724988678-1420',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 class="" style="text-align: center;">​I&nbsp;love all things vintage and floral and believe our wedding turned out to be an unintentional “Gatsby” vibe.<span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428724988677-1116',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-extended-style',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428729197138-1227',
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

$content_area->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1428799130763-1118',
  'id' => 'module-1428799130763-1118',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Hoodie cornhole mustache, sustainable locavore fashion axe leggings twee blog forage you probably haven\'t heard of them pour-over drinking vinegar Shoreditch chillwave. Cred readymade Echo Park, asymmetrical tattooed fashion axe salvia tote bag four loko pour-over distillery bicycle rights leggings vinyl chia. Keffiyeh photo booth 90\'s Kickstarter, viral meh Bushwick gluten-free mumblecore. PBR craft beer pug, direct trade keffiyeh flannel vegan heirloom literally PBR&amp;B you probably haven\'t trust fund bicycle rights leggings vinyl chia. Keffiyeh photo booth 90\'s Kickstarter.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428799130763-1589',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-extended-style',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428799307312-1864',
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

$content_area->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1432590845873-1736',
  'id' => 'module-1432590845873-1736',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Normcore paleo pop-up gastropub kitsch messenger bag. Drinking vinegar ennui post-ironic twee flannel High Life, XOXO vegan. McSweeney\'s trust fund cardigan, umami mixtape Tonx direct trade actually twee Carles kitsch whatever Marfa. Synth flannel blog heirloom. Portland 90\'s Intelligentsia, flannel artisan crucifix pour-over. Mustache Tumblr pickled, vegan salvia selfies Austin roof party polaroid ugh. Shabby chic chambray normcore retro, mixtape drinking vinegar cardigan Drinking vinegar ennui post-ironic twee flannel High Life, XOXO vegan. McSweeney\'s trust fund cardigan, umami mixtape.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432590845874-1444',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-extended-style',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432590845872-1502',
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

$regions->add($content_area);

$gallery = upfront_create_region(
			array (
  'name' => 'gallery',
  'title' => 'Gallery',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'gallery',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 510,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 137,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
       'background_position_y' => '50',
       'background_style' => 'tile',
       'background_repeat' => 'repeat',
       'background_position_x' => '50',
       'background_type' => 'image',
       'hide' => 1,
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
  'background_image' => '{{upfront:style_url}}/images/single-page-portfolio-extended/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$gallery->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428799130770-1474',
  'id' => 'module-1428799130770-1474',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-one-1080x635-7662.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-one.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-one.jpg',
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
       'width' => 1080,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 1080,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 1080,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1774',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1428799130765-1311',
    'row' => 65,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 52,
      )),
    )),
    'no_padding' => '1',
  ),
  'row' => 65,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428799898125-1518',
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
      'row' => 52,
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

$gallery->add_element("Uimage", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432587026547-1854',
  'id' => 'module-1432587026547-1854',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-two-450x635-4970.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-two.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-two.jpg',
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
       'width' => 450,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 450,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 450,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1775',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432587026538-1154',
    'row' => 123,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432588990087-1727',
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

$gallery->add_element("Uimage", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432588990229-1641',
  'id' => 'module-1432588990229-1641',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-three-630x635-3789.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-three.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-three.jpg',
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
       'width' => 630,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 630,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 630,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1776',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432588990224-1533',
    'row' => 45,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432589167857-1191',
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

$gallery->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432589167989-1297',
  'id' => 'module-1432589167989-1297',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-four-1080x635-4406.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-four.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-four.jpg',
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
       'width' => 1080,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 1080,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 1080,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1777',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432589167985-1134',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
    'row' => 65,
  ),
  'row' => 65,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432589356489-1767',
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

$gallery->add_element("Uimage", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432589356624-1321',
  'id' => 'module-1432589356624-1321',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-five-630x635-5897.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-five.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-five.jpg',
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
       'width' => 630,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 630,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 630,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1778',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432589356620-1244',
    'row' => 121,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432589481651-1381',
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

$gallery->add_element("Uimage", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432589481789-1881',
  'id' => 'module-1432589481789-1881',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-six-450x635-8042.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-six.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-portfolio-extended/lukesara-extended-six.jpg',
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
       'width' => 450,
       'height' => 635,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 450,
       'height' => 635,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 450,
       'height' => 635,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1779',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432589481782-1724',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432589569092-1476',
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

$regions->add($gallery);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
