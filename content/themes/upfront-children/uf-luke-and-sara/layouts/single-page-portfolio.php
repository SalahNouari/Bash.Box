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
  'row' => 104,
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
       'row' => 60,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/bg-pricing.jpg',
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
  'row' => 248,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 151,
       'hide' => 0,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 192,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => '#ufc5',
  'background_style' => 'tile',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$platinum->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428710403815-1476',
  'id' => 'module-1428710403815-1476',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Portfolio<span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span></h1>',
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
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428706223198-1717',
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

$platinum->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1428716789856-1230',
  'id' => 'module-1428716789856-1230',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 class="" style="text-align: center;">Say hi! To heading three man -&nbsp;heading three is the best</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1428716789855-1899',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428717211782-1102',
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

$platinum->add_element("Ugallery", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1428725161912-1974',
  'id' => 'module-1428725161912-1974',
  'options' =>
  array (
    'type' => 'UgalleryModel',
    'view_class' => 'UgalleryView',
    'has_settings' => 1,
    'class' => 'c24 upfront-gallery',
    'id_slug' => 'ugallery',
    'status' => 'ok',
    'images' =>
    array (
      0 =>
      (array)(array(
         'id' => '118',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1-250x379-1481.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1-140x140-8841.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1.jpg',
             'full' =>
            (array)(array(
               'width' => 360,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 0,
                 'top' => 17,
              )),
               'resize' =>
              (array)(array(
                 'width' => 140,
                 'height' => 175,
              )),
               'id' => 118,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 303,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'top' => 0,
           'left' => 24,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1-250x379-1481.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-1.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">BRIDE</p>',
         'caption' => '<p class="nosortable">BRIDE</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' =>
        (array)(array(
           'top' => 46,
           'left' => 0,
        )),
      )),
      1 =>
      (array)(array(
         'id' => '119',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2-250x379-8187.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2.jpg',
             'full' =>
            (array)(array(
               'width' => 360,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 379,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '379',
                 'left' => 26,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 303,
                 'height' => 379,
              )),
               'id' => 119,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 303,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '379',
           'left' => 26,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2-250x379-8187.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-2.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">HAPPILY EVER AFTER</p>',
         'caption' => '<p class="nosortable">HAPPILY EVER AFTER</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
      )),
      2 =>
      (array)(array(
         'id' => '120',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3-242x300.jpg',
            1 => 242,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3.jpg',
            1 => 363,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3.jpg',
            1 => 363,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3-250x379-4837.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3.jpg',
             'full' =>
            (array)(array(
               'width' => 363,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 379,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '379',
                 'left' => 28,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 306,
                 'height' => 379,
              )),
               'id' => 120,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 306,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '379',
           'left' => 28,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3-250x379-4837.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-3.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">BRIDE &amp;&nbsp;GROOM</p>',
         'caption' => '<p class="nosortable">BRIDE &amp;&nbsp;GROOM</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
      )),
      3 =>
      (array)(array(
         'id' => '121',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4-250x379-5015.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4.jpg',
             'full' =>
            (array)(array(
               'width' => 360,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 379,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '379',
                 'left' => 26,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 303,
                 'height' => 379,
              )),
               'id' => 121,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 303,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '379',
           'left' => 26,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4-250x379-5015.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-4.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">DRESS</p>',
         'caption' => '<p class="nosortable">DRESS</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
      )),
      4 =>
      (array)(array(
         'id' => '122',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5-250x379-8595.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5.jpg',
             'full' =>
            (array)(array(
               'width' => 360,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 379,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '379',
                 'left' => 26,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 303,
                 'height' => 379,
              )),
               'id' => 122,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 303,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '379',
           'left' => 26,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5-250x379-8595.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-5.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">WEDDING</p>',
         'caption' => '<p class="nosortable">WEDDING</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
      )),
      5 =>
      (array)(array(
         'id' => '123',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6-250x379-7571.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6.jpg',
             'full' =>
            (array)(array(
               'width' => 360,
               'height' => 450,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 379,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '379',
                 'left' => 26,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 303,
                 'height' => 379,
              )),
               'id' => 123,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 303,
           'height' => 379,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 379,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '379',
           'left' => 26,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6-250x379-7571.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/Image-6.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">COAT</p>',
         'caption' => '<p class="nosortable">COAT</p>',
         'alt' => '',
         'tags' =>
        array (
        ),
         'margin' =>
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
      )),
    ),
    'elementSize' =>
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'labelFilters' =>
    array (
    ),
    'thumbProportions' => '0.66',
    'thumbWidth' => '250',
    'thumbHeight' => 379,
    'captionType' => 'over',
    'captionColor' => '#ffffff',
    'captionUseBackground' => true,
    'captionBackground' => 'rgba(0, 0, 0, 0.75)',
    'showCaptionOnHover' =>
    array (
      0 => 'true',
    ),
    'linkTo' => 'image',
    'even_padding' =>
    array (
      0 => 'true',
    ),
    'thumbPadding' => 0,
    'fitThumbCaptions' =>
    array (
    ),
    'thumbCaptionsHeight' => 20,
    'element_id' => 'ugallery-object-1428725161910-1512',
    'row' => 182,
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'theme_style' => 'ugallery-tablet',
      )),
       'mobile' =>
      (array)(array(
         'theme_style' => 'ugallery-tablet',
      )),
    )),
    'theme_style' => 'ugallery-portfolio',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428725955805-1993',
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
  'row' => 154,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
       'hide' => 0,
       'col' => 24,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'hide' => 0,
       'row' => 224,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' =>
  array (
    0 => false,
  ),
  'background_color' => 'rgba(237,237,237,1)',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/bg-polaroid.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
)
			);

$premium->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1428718898143-1591',
  'id' => 'module-1428718898143-1591',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Pricing<span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"></span></h1><h6 class="" style="text-align: center;" rel="text-align: center;">DOWN&nbsp;TO&nbsp;BUSINESS!</h6>',
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
    'theme_style' => 'plaintxt-pricing-title',
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

$premium->add_group(array (
  'columns' => '7',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '21',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1431573423604-1647',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1431563302180-1032',
  'original_col' => 7,
  'row' => 68,
  'background_color' => 'rgba(226,233,232,1)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'pricing-table-left',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
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
      'col' => 4,
      'order' => 0,
      'top' => 12,
      'row' => 88,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 9,
      'row' => 48,
      'theme_style' => 'pricing-table-corners',
    ),
  ),
));

$premium->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1431561673586-1688',
  'id' => 'module-1431561673586-1688',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-pro-91x83-4327.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-pro.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-pro.png',
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
       'width' => 91,
       'height' => 83,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 91,
       'height' => 83,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -66.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 224,
       'height' => 83,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1719',
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
    'element_id' => 'image-1431561673581-1733',
    'row' => 17,
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 12,
      )),
       'mobile' =>
      (array)(array(
         'row' => 12,
      )),
    )),
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432435-1491',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 3,
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
      'left' => 1,
      'col' => 2,
      'order' => 0,
      'top' => 5,
      'row' => 12,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'top' => 2,
      'row' => 12,
    ),
  ),
  'group' => 'module-group-1431573423604-1647',
));

$premium->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1431561673578-1693',
  'id' => 'module-1431561673578-1693',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;">Pro</h3><h1 class="" style="text-align: center;"><span class="upfront_theme_color_3">649</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431561673578-1032',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 20,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 8,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-table-price',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432454-1463',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 6,
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
      'col' => 4,
      'order' => 0,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 8,
      'hide' => 1,
    ),
  ),
  'group' => 'module-group-1431573423604-1647',
));

$premium->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1431563043248-1529',
  'id' => 'module-1431563043248-1529',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">10 hours&nbsp;wedding day</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431563043247-1024',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 27,
      )),
       'mobile' =>
      (array)(array(
         'row' => 6,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432466-1444',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 3,
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
      'col' => 4,
      'order' => 0,
      'top' => 1,
      'row' => 27,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 6,
    ),
  ),
  'group' => 'module-group-1431573423604-1647',
));

$premium->add_element("Button", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1431561673638-1332',
  'id' => 'module-1431561673638-1332',
  'options' =>
  array (
    'content' => 'CHOOSE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1431561673638-1113',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Pricing Button #1',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-pricing-one',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 10,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432471-1645',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
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
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 7,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 10,
    ),
  ),
  'group' => 'module-group-1431573423604-1647',
));

$premium->add_group(array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1431569989944-1237',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1431566260785-1673',
  'original_col' => 8,
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'pricing-table-default',
  'row' => 90,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 3,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 4,
      'row' => 106,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 59,
      'theme_style' => 'pricing-table-corners',
    ),
  ),
));

$premium->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1431565374898-1569',
  'id' => 'module-1431565374898-1569',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-platinum-65x89-2024.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-platinum.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-platinum.png',
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
       'width' => 65,
       'height' => 89,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 65,
       'height' => 89,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -56.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 178,
       'height' => 89,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1721',
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
    'element_id' => 'image-1431565374894-1462',
    'row' => 21,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 19,
      )),
       'mobile' =>
      (array)(array(
         'row' => 17,
      )),
    )),
    'anchor' => '',
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431570016030-1493',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 3,
      'order' => 0,
      'clear' => false,
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
      'left' => 1,
      'col' => 2,
      'order' => 0,
      'top' => 5,
      'row' => 19,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'top' => 0,
      'row' => 17,
    ),
  ),
  'group' => 'module-group-1431569989944-1237',
));

$premium->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1431565478608-1589',
  'id' => 'module-1431565478608-1589',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;">Platinum</h3><h1 class="" style="text-align: center;"><span class="upfront_theme_color_3" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2" style="">1199</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431565478608-1608',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 13,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 7,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-table-price',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573665151-1814',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 1,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 3,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 7,
      'hide' => 1,
    ),
  ),
  'group' => 'module-group-1431569989944-1237',
));

$premium->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1431566346555-1055',
  'id' => 'module-1431566346555-1055',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Unlimited Wedding Photos</p><p class="" style="text-align: center;">x3 Wedding Albums</p><p class="" style="text-align: center;">Photo Booth</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431566346555-1076',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 19,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 23,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431570016065-1127',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 3,
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
      'col' => 4,
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
      'row' => 23,
    ),
  ),
  'group' => 'module-group-1431569989944-1237',
));

$premium->add_element("Button", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1431565522155-1051',
  'id' => 'module-1431565522155-1051',
  'options' =>
  array (
    'content' => 'CHOOSE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1431565522155-1806',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Pricing Button #2',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'button-pricing-two',
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
  'wrapper_id' => 'wrapper-1431570016071-1162',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 4,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
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
      'row' => 7,
    ),
  ),
  'group' => 'module-group-1431569989944-1237',
));

$premium->add_group(array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '21',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1431573427769-1894',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1431565374620-1618',
  'original_col' => 7,
  'row' => 76,
  'background_color' => 'rgba(226,233,232,1)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'pricing-table-right',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 4,
      'order' => 4,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 12,
      'row' => 64,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 44,
      'theme_style' => 'pricing-table-middle',
    ),
  ),
));

$premium->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1431561872340-1770',
  'id' => 'module-1431561872340-1770',
  'options' =>
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-premium-99x61-9466.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-premium.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-portfolio/cam-premium.png',
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
       'width' => 99,
       'height' => 61,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 99,
       'height' => 61,
    )),
    'position' =>
    (array)(array(
       'top' => 0,
       'left' => -62.5,
    )),
    'marginTop' => 0,
    'element_size' =>
    (array)(array(
       'width' => 224,
       'height' => 61,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1720',
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
    'element_id' => 'image-1431561872333-1290',
    'row' => 12,
    'anchor' => '',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 13,
      )),
       'mobile' =>
      (array)(array(
         'row' => 10,
      )),
    )),
    'theme_style' => 'no-padding',
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432495-1510',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 3,
      'order' => 0,
      'clear' => false,
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
      'left' => 1,
      'col' => 2,
      'order' => 0,
      'top' => 7,
      'row' => 13,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'top' => 3,
      'row' => 10,
    ),
  ),
  'group' => 'module-group-1431573427769-1894',
));

$premium->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1431563097882-1574',
  'id' => 'module-1431563097882-1574',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: center;" class="">Premium</h3><h1 class="" style="text-align: center;"><span class="upfront_theme_color_3">859</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431563097882-1033',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 8,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'plaintxt-table-price',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432515-1509',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 4,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 6,
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
      'top' => 0,
      'row' => 8,
      'hide' => 1,
    ),
  ),
  'group' => 'module-group-1431573427769-1894',
));

$premium->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1431565460457-1264',
  'id' => 'module-1431565460457-1264',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">10 hours&nbsp;wedding day</p><p class="" style="text-align: center;">x3 Wedding Albums</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431565460456-1946',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'list-pricing',
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 14,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432528-1666',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 4,
      'order' => 0,
      'clear' => false,
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
      'col' => 4,
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
      'row' => 14,
    ),
  ),
  'group' => 'module-group-1431573427769-1894',
));

$premium->add_element("Button", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1431563267339-1059',
  'id' => 'module-1431563267339-1059',
  'options' =>
  array (
    'content' => 'CHOOSE',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1431563267338-1626',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'Pricing Button #1',
    'row' => 6,
    'theme_style' => 'button-pricing-one',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 10,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1431573432549-1871',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 4,
      'order' => 0,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 10,
    ),
  ),
  'group' => 'module-group-1431573427769-1894',
));

$regions->add($premium);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'newsletter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
