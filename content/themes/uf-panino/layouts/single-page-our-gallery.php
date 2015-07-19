<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-header.php');

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
  'row' => 155,
  'background_type' => 'image',
  'background_color' => '#c5d0db',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 189,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 313,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gray-pattern-bg.png',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'id' => 'module-1429597710225-1950',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;" class="">Our Gallery</h1>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429597710225-1840',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 14,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-section-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597719412-1061',
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

$main->add_element("Ugallery", array (
  'columns' => '12',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'id' => 'module-1429597710231-1415',
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
         'id' => '1809',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1-140x140-2740.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
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
                 'left' => 70,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 280,
                 'height' => 140,
              )),
               'id' => 1809,
               'element_id' => 'ugallery-object-1429597710229-1285',
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 70,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1-145x145-2908.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-1.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
           'top' => 0,
           'left' => 73,
        )),
      )),
      1 =>
      (array)(array(
         'id' => '1810',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2-145x145-3095.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1810,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2-145x145-3095.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-2.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1811',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3-145x145-5227.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1811,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3-145x145-5227.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-3.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1812',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4-145x145-5445.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1812,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4-145x145-5445.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-4.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1813',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5-145x145-3697.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1813,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5-145x145-3697.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-5.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1814',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6-145x145-8374.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1814,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6-145x145-8374.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-6.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1815',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7-145x145-4737.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1815,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7-145x145-4737.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-7.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
         'id' => '1816',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8-145x145-1375.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1816,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8-145x145-1375.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-8.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
      8 =>
      (array)(array(
         'id' => '1817',
         'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9.jpg',
         'sizes' =>
        (array)(array(
           'thumbnail' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9-300x150.jpg',
            1 => 300,
            2 => 150,
            3 => true,
          ),
           'large' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'full' =>
          array (
            0 => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9.jpg',
            1 => 600,
            2 => 300,
            3 => false,
          ),
           'custom' =>
          (array)(array(
             'error' => false,
             'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9-145x145-8469.jpg',
             'urlOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9.jpg',
             'full' =>
            (array)(array(
               'width' => 600,
               'height' => 300,
            )),
             'crop' =>
            (array)(array(
               'width' => 145,
               'height' => 145,
            )),
             'editdata' =>
            (array)(array(
               'rotate' => 0,
               'crop' =>
              (array)(array(
                 'width' => '145',
                 'height' => '145',
                 'left' => 72,
                 'top' => 0,
              )),
               'resize' =>
              (array)(array(
                 'width' => 290,
                 'height' => 145,
              )),
               'id' => 1817,
            )),
          )),
        )),
         'size' =>
        (array)(array(
           'width' => 290,
           'height' => 145,
        )),
         'cropSize' =>
        (array)(array(
           'width' => 145,
           'height' => 145,
        )),
         'cropOffset' =>
        (array)(array(
           'width' => '145',
           'height' => '145',
           'left' => 72,
           'top' => 0,
        )),
         'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9-145x145-8469.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1429597710229-1285',
         'urlType' => 'image',
         'url' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-gallery/gallery-img-9.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
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
    'thumbProportions' => '1',
    'thumbWidth' => '145',
    'thumbHeight' => 145,
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' =>
    array (
      0 => 'true',
    ),
    'linkTo' => 'image',
    'even_padding' =>
    array (
      0 => 'true',
    ),
    'thumbPadding' => 35,
    'fitThumbCaptions' =>
    array (
    ),
    'thumbCaptionsHeight' => 20,
    'element_id' => 'ugallery-object-1429597710229-1285',
    'row' => 42,
    'anchor' => '',
    'theme_style' => 'u-gallery',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597772735-1845',
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

$main->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'id' => 'module-1429597719473-1347',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: justify;">A bakery (or baker\'s shop) is an establishment that produces and sells flour-based food baked in an oven such as bread, cakes, pastries, and pies. Some retail bakeries are also cafés, serving coffee and tea to customers who wish to consume the baked goods on the premises.Some bakery shops provide services for special occasions such as weddings &amp; birthday.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429597719473-1541',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 17,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-paragraph',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 35,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597938550-1175',
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 35,
      'top' => 1,
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

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
