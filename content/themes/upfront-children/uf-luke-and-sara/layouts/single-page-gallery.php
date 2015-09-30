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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/bg-pricing.jpg',
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
  'row' => 191,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/noise.jpg',
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
  'id' => 'module-1428710403815-1476',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<div style="text-align: center;" class=""><font color="#333333" face="Quattrocento, serif"><span style="font-size: 56px; letter-spacing: -1px; line-height: 52.6399993896484px;">Gallery Element</span></font></div>',
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
  'new_line' => 'true',
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
  'new_line' => 'true',
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
  'margin_top' => '9',
  'margin_bottom' => '0',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1-250x379-1481.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1-140x140-8841.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1-250x379-1481.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-1.jpg',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2-250x379-8187.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2-250x379-8187.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-2.jpg',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3-242x300.jpg',
            1 => 242,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3.jpg',
            1 => 363,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3.jpg',
            1 => 363,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3-250x379-4837.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3-250x379-4837.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-3.jpg',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4-250x379-5015.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4-250x379-5015.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-4.jpg',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5-250x379-8595.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5-250x379-8595.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-5.jpg',
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
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6-240x300.jpg',
            1 => 240,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6.jpg',
            1 => 360,
            2 => 450,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6-250x379-7571.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6.jpg',
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
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6-250x379-7571.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/Image-6.jpg',
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
      6 =>
      (array)(array(
         'id' => '1756',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
            1 => 270,
            2 => 270,
            3 => false,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
            1 => 270,
            2 => 270,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
            1 => 270,
            2 => 270,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake-250x250-9604.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
             'full' =>
            (array)(array(
               'width' => 270,
               'height' => 270,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 250,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '250',
                 'left' => 0,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 250,
                 'height' => 250,
              )),
               'id' => 1756,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 250,
           'height' => 250,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 250,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '250',
           'left' => 0,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake-250x250-9604.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/newly-weds-cake.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">WEDDING CAKE</p>',
         'caption' => '<p class="nosortable">WEDDING CAKE</p>',
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
      7 =>
      (array)(array(
         'id' => '1747',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth-213x300.jpg',
            1 => 213,
            2 => 300,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth.jpg',
            1 => 450,
            2 => 635,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth.jpg',
            1 => 450,
            2 => 635,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth-250x250-3170.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth.jpg',
             'full' =>
            (array)(array(
               'width' => 450,
               'height' => 635,
            )),
             'crop' =>
            (array)(array(
               'width' => 250,
               'height' => 250,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '250',
                 'height' => '250',
                 'left' => 0,
                 'top' => 51,
              )),
               'resize' =>
              (array)(array(
                 'width' => 250,
                 'height' => 353,
              )),
               'id' => 1747,
               'element_id' => 'ugallery-object-1428725161910-1512',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 250,
           'height' => 353,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 250,
           'height' => 250,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '250',
           'height' => '250',
           'left' => 0,
           'top' => 51,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth-250x250-3170.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1428725161910-1512',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-gallery/img-photo-booth.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">PHOTO BOOTH</p>',
         'caption' => '<p class="nosortable">PHOTO BOOTH</p>',
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
      0 => 'true',
    ),
    'thumbProportions' => '1',
    'thumbWidth' => '250',
    'thumbHeight' => 250,
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
    'row' => 99,
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
    'theme_style' => 'ugallery-four-cols',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428725955805-1993',
  'new_line' => 'true',
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

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
