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
  'row' => 235,
  'background_type' => 'color',
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
       'row' => 461,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 380,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => '',
  ),
)
			);

$luke_and_sara->add_group(array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432081577214-1560',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1428705152908-1478',
  'original_col' => 12,
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

$luke_and_sara->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432051781221-1044',
  'id' => 'module-1432051781221-1044',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-luke-540x540-8127.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-luke.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-luke.jpg',
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
       'height' => 540,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 540,
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
       'height' => 540,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1728',
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
    'element_id' => 'image-1432051781216-1188',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'row' => 97,
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432084336992-1611',
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
  'group' => 'module-group-1432081577214-1560',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428703752491-1223',
  'id' => 'module-1428703752491-1223',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="">Luke</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428703752490-1357',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 14,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432084337010-1044',
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
      'top' => 3,
      'row' => 14,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432081577214-1560',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428703775912-1685',
  'id' => 'module-1428703775912-1685',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">"Heading Two - It is very difficult to capture what we do in a single line so we end up writing these statement."</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428703775912-1630',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 16,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 26,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432084337016-1733',
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
      'row' => 26,
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
  'group' => 'module-group-1432081577214-1560',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1428703803634-1228',
  'id' => 'module-1428703803634-1228',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;"><strong data-redactor-tag="strong" data-verified="redactor"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">Paragraph Style</span></strong> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p><p rel="text-align: center;" class="" style="text-align: justify;">exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428703803634-1653',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 40,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 43,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432084337023-1042',
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
      'row' => 43,
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
  'group' => 'module-group-1432081577214-1560',
));

$luke_and_sara->add_group(array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432075248893-1390',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1428705001213-1995',
  'original_col' => 12,
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

$luke_and_sara->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432073503055-1401',
  'id' => 'module-1432073503055-1401',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-sara-540x540-4777.jpg',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-sara.jpg',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/img-sara.jpg',
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
       'height' => 540,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 540,
       'height' => 540,
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
       'height' => 540,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1729',
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
    'element_id' => 'image-1432073503048-1713',
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432075257166-1118',
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
  'group' => 'module-group-1432075248893-1390',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428703878545-1545',
  'id' => 'module-1428703878545-1545',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1>Sara</h1>


',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428703878545-1457',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 13,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432075257183-1856',
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
      'top' => 3,
      'row' => 13,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432075248893-1390',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1428704222445-1036',
  'id' => 'module-1428704222445-1036',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="">"Heading Two - It is very difficult to capture what we do in a single line so we end up writing these statement."</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428704222444-1632',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 19,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 28,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432075257189-1073',
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
      'row' => 28,
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
  'group' => 'module-group-1432075248893-1390',
));

$luke_and_sara->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1428704315734-1875',
  'id' => 'module-1428704315734-1875',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span data-verified="redactor" data-redactor-tag="span"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">Paragraph Style</span></span> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis.</p><p class="">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428704315733-1353',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 31,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 41,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432075257194-1997',
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
      'row' => 41,
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
  'group' => 'module-group-1432075248893-1390',
));

$regions->add($luke_and_sara);

$testimonials_area = upfront_create_region(
			array (
  'name' => 'testimonials-area',
  'title' => 'Testimonials Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'testimonials-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 83,
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
       'row' => 84,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/bg-testimonials.jpg',
  'background_image_ratio' => 0.299999999999999988897769753748434595763683319091796875,
)
			);

$testimonials_area->add_element("Code", array (
  'columns' => '16',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '19',
  'margin_bottom' => '0',
  'class' => 'module-1429409665777-1121',
  'id' => 'module-1429409665777-1121',
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
    'element_id' => 'upfront-code_element-object-1429409665776-1028',
    'code_selection_type' => 'Create',
    'markup' => '<div id="testimonials">

    <!-- Slider Setup -->
    <input type="radio" name="testimonial" id="testimonial1" selected="true">
    <input checked="" type="radio" name="testimonial" id="testimonial2" selected="false">
    <input type="radio" name="testimonial" id="testimonial3" selected="false">

    <!-- CSS3 Slider -->
    <div id="slides">

        <div id="overflow">

            <div class="inner">

                <article class="editable">
                    <div class="info">
                        <h6>Bill C.</h6>
                        <blockquote>You know, if I were a single man, I might ask that mummy out. That\'s a good-looking mummy.</blockquote>
                    </div>
                </article>

                <article class="editable">
                    <div class="info">
                        <h6>Socrates</h6>
                        <blockquote>My advice to you is get married; if you find a good wife you\'ll be happy; if not, you\'ll become a philosopher.</blockquote>
                    </div>
                </article>

                <article class="editable">
                    <div class="info">
                        <h6>Jack N.</h6>
                        <blockquote>My philosphy; live today. Do not leave undone things you really want to do, even if they seem a bad idea.</blockquote>
                    </div>
                </article>

            </div><!-- .inner -->

        </div><!-- #overflow -->

    </div><!-- #slides -->

    <div id="active">

        <label for="testimonial1"><img class="editable" src="' . get_stylesheet_directory_uri() . '/images/single-page-about/img-bill.png"></label>
        <label for="testimonial2"><img class="editable" src="' . get_stylesheet_directory_uri() . '/images/single-page-about/img-socrates.png"></label>
        <label for="testimonial3"><img class="editable" src="' . get_stylesheet_directory_uri() . '/images/single-page-about/img-jack.png"></label>

    </div><!-- #active -->

</div><!-- #testimonials -->',
    'style' => '#testimonials {
    width: 100%;
    height: auto;
    display: block;
    position: relative;
    margin: 0 auto;
    text-align: center;
}
/* Slider Setup */
#testimonials input {
    display: none;
}
#testimonial1:checked ~ #slides .inner {
    margin-left: 0;
}
#testimonial2:checked ~ #slides .inner {
    margin-left:-100%;
}
#testimonial3:checked ~ #slides .inner {
    margin-left:-200%;
}
#overflow {
    width: 100%;
    overflow: hidden;
}
#slides .inner {
    width: 500%;
    line-height: 0;
}
#slides article {
    width: 20%;
    float: left;
}
/* Active Setup */
#active {
    margin: 30px 0 0;
    text-align: center;
}
#active label {
    width: 70px;
    height: 70px;
    display: inline-block;
    margin-right: 18px;
    border: 2px solid #acacac;
    border-radius: 100%;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
}
#active label:last-child {
    margin-right: 0;
}
#active label:hover {
    border-color: #007051;
}
#active label img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 100%;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
}
#testimonial1:checked ~ #active label:nth-child(1),
#testimonial2:checked ~ #active label:nth-child(2),
#testimonial3:checked ~ #active label:nth-child(3) {
    border-color: #01bc9d !important;
}
#testimonial1:checked ~ #active label:nth-child(1):hover,
#testimonial2:checked ~ #active label:nth-child(2):hover,
#testimonial2:checked ~ #active label:nth-child(3):hover {
    border-color: #007051 !important;
}
/* Slider and Slides Styling */
#slides {
    margin: 0;
}
#slides .info,
#slides .info h1,
#slides .info h2,
#slides .info h3,
#slides .info h4,
#slides .info h5,
#slides .info h6,
#slides .info p {
    margin-top: 0;
    margin-bottom: 0.4em;
    color: #01bc9d;
    font-family: "Quattrocento Sans";
    font-weight: 400;
    font-style: normal;
    font-weight: 700;
    text-transform: none;
}
.info blockquote {
    margin-top: 0;
    margin-bottom: 0;
    color: #ffffff;
    line-height: 0.5em;
    font-weight: 700;
    letter-spacing: -0.7px;
}
.info blockquote:before, .info blockquote:after {
    content: "";
    width: 14px;
    height: 36px;
    display: inline-block;
    background: url("' . get_stylesheet_directory_uri() . '/images/single-page-about/sprites.png") no-repeat;
    background-image: url("' . get_stylesheet_directory_uri() . '/ui/sprites.svg"), none;
}
.info blockquote:before {
    margin-right: 10px;
    background-position: -393px -223px;
}
.info blockquote:after {
    margin-left: 10px;
    background-position: -393px -388px;
}
/* Animation */
#slider {
    transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
}
#slides .inner {
    -webkit-transform: translateZ(0);
    transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
    -o-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -ms-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -moz-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -webkit-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000); /* easeInOutQuart */
    -o-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -ms-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -moz-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
    -webkit-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
}
#testimonial1:checked ~ #slides article:nth-child(1) .info,
#testimonial2:checked ~ #slides article:nth-child(2) .info,
#testimonial3:checked ~ #slides article:nth-child(3) .info {
    opacity: 1;
    transition: all 1s ease-out 0.6s;
    -o-transition: all 1s ease-out 0.6s;
    -ms-transition: all 1s ease-out 0.6s;
    -moz-transition: all 1s ease-out 0.6s;
    -webkit-transition: all 1s ease-out 0.6s;
}
#slides, .info, .info p, .info blockquote, #active, #active label {
    -webkit-transform: translateZ(0);
    transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
}',
    'script' => '/* Your code here */',
    'row' => 44,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429409872645-1412',
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

$regions->add($testimonials_area);

$our_studio_area = upfront_create_region(
			array (
  'name' => 'our-studio-area',
  'title' => 'Our Studio Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'our-studio-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 77,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 99,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 108,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$our_studio_area->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '18',
  'margin_bottom' => '0',
  'class' => 'module-1428705687404-1133',
  'id' => 'module-1428705687404-1133',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;"><strong data-redactor-tag="strong" data-verified="redactor"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">Our Studio</span></strong> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 2006 minim veniam, quis nostrud. exerci tation ullamcorper suscipit lobortis nisl. ed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428705687404-1236',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 31,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432077576977-1434',
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
      'top' => 3,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 3,
    ),
  ),
));

$our_studio_area->add_element("Uimage", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '22',
  'margin_bottom' => '0',
  'class' => 'module-1432075072580-1098',
  'id' => 'module-1432075072580-1098',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/studio-logo-517x157-9173.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/studio-logo.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-about/studio-logo.png',
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
       'width' => 517,
       'height' => 157,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 517,
       'height' => 157,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -11.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 540,
       'height' => 157,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1730',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image uimage-no-padding',
    'id_slug' => 'image',
    'element_id' => 'image-1432075072575-1477',
    'row' => 32,
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432077576980-1063',
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

$regions->add($our_studio_area);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');	  	    	    		 				 
