<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$video = upfront_create_region(
			array (
  'name' => 'video',
  'title' => 'Video',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'video',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 104,
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
       'row' => 60,
    )),
  )),
  'background_type' => 'video',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/archive-home/riding_bicycles.jpg',
  'background_image_ratio' => 0.38000000000000000444089209850062616169452667236328125,
  'background_video_mute' => 1,
  'background_video_autoplay' => 1,
  'background_video_style' => 'crop',
  'background_video' => 'https://incsub.wistia.com/medias/9znaoc1mo4',
  'background_video_embed' => '<iframe src="//fast.wistia.net/embed/iframe/9znaoc1mo4" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="960" height="540"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js" async></script>',
  'background_video_width' => 960,
  'background_video_height' => 540,
)
			);

$video->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '84',
  'margin_bottom' => '0',
  'class' => 'module-1428625928069-1184',
  'id' => 'module-1428625928069-1184',
  'options' =>
  array (
    'content' => 'OUR WORK',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428625928069-1460',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #3',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-three',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428628048729-1051',
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
      'col' => 6,
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
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 41,
    ),
  ),
));

$regions->add($video);

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
  'row' => 272,
  'background_type' => 'image',
  'background_color' => 'rgba(249,249,249,1)',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 423,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 331,
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
  'background_image' => '{{upfront:style_url}}/images/archive-home/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '19',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'default-text',
  'id' => 'default-text',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plaintxt',
    'content' => '<h1 class="" style="text-align: center;">Your special day</h1>',
    'class' => 'c24 upfront-plain_txt',
    'element_id' => 'default-text-object',
    'type' => 'PlainTxtModel',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-home-page',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'theme_style' => '_default',
         'row' => 15,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'default-text-wrapper',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' =>
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
      'top' => 13,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 8,
      'row' => 15,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '21',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432593077022-1826',
  'id' => 'module-1432593077022-1826',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plaintxt',
    'content' => '<h4 style="text-align: center;" class="">Heading Two - It is very difficult to capture what we do in a single line so we end up writing these statements that can sound like marketing fluff. Here is a longer explanation of what we do.</h4><h4 class="" style="text-align: center;"></h4>',
    'class' => 'c24 upfront-plain_txt',
    'element_id' => 'object-1432593077023-1043',
    'type' => 'PlainTxtModel',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-home-page',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'theme_style' => '_default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432593079560-1004',
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
      'top' => 13,
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

$main->add_group(array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1435445737373-1642',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1435445737378-1576',
  'original_col' => 24,
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

$main->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1432592325805-1379',
  'id' => 'module-1432592325805-1379',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/lukesara-home-one-540x700-5383.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/lukesara-home-one.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/lukesara-home-one.jpg',
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
       'width' => 540,
       'height' => 700,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 700,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 540,
       'height' => 700,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1771',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image   uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432592325798-1638',
    'row' => 140,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 65,
      )),
    )),
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1435445737409-1346',
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
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 65,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1435445737373-1642',
));

$main->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1428626607806-1612',
  'id' => 'module-1428626607806-1612',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">Heading Two 28px Gluten-free Thundercats hella</h4><p class="">Paragraph Style - Blue Bottle tote bag Vice wayfarers post-ironic mlkshk bitters fap. Pork belly fap bespoke, gentrify cred readymade cray. Utilizing what we like to call "accelerated transpiration through capillary action." <strong data-redactor-tag="strong" data-verified="redactor">OH YEAH!</strong></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428626607806-1696',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 54,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-home-page-2',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1435445737412-1818',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 12,
      'order' => -1,
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
      'row' => 54,
      'top' => 12,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 7,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1435445737373-1642',
));

$main->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428879045830-1644',
  'id' => 'module-1428879045830-1644',
  'options' =>
  array (
    'content' => 'OUR PORTFOLIO',
    'href' => '{{upfront:home_url}}/portfolio/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1428879045829-1282',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Style #1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-style-four',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1435445737412-1818',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 3,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1435445737373-1642',
));

$main->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'class' => 'module-1432593437648-1701',
  'id' => 'module-1432593437648-1701',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/lukesara-home-two-540x350-6078.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/lukesara-home-two.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/lukesara-home-two.jpg',
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
       'width' => 540,
       'height' => 350,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 350,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 540,
       'height' => 350,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1772',
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
    'element_id' => 'image-1432593437644-1089',
    'row' => 70,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 33,
      )),
    )),
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1435445737412-1818',
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
      'row' => 33,
    ),
  ),
  'group' => 'module-group-1435445737373-1642',
));

$main->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432593834622-1042',
  'id' => 'module-1432593834622-1042',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/lukesara-home-three-1080x350-8180.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/lukesara-home-three.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/lukesara-home-three.jpg',
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
       'height' => 350,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 1080,
       'height' => 350,
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
       'height' => 350,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1773',
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
    'element_id' => 'image-1432593834617-1282',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
    'row' => 37,
  ),
  'row' => 37,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432593913396-1604',
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
      'order' => 3,
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
