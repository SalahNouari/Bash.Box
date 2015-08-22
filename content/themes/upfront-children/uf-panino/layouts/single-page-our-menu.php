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
  'row' => 271,
  'background_type' => 'image',
  'background_color' => '#c5d0db',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 473,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 654,
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
  'background_image' => '' . get_stylesheet_directory_uri() . '/images/single-page-our-menu/bricks-pattern-bg.png',
  'background_image_ratio' => 0.810000000000000053290705182007513940334320068359375,
  'background_repeat' => 'repeat',
)
			);

$main->add_element("Utabs", array (
  'columns' => '14',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'id' => 'module-1429596926253-1097',
  'options' =>
  array (
    'type' => 'UtabsModel',
    'view_class' => 'UtabsView',
    'has_settings' => 1,
    'class' => 'c24 upfront-tabs',
    'tabs' =>
    array (
      0 =>
      (array)(array(
         'content' => '<p class="">Colder months of 2013 <br>Good Mornin\' Friends…</p><p class="">Brekkie all day every day – our kitchens close at 3pm <br>We are CASH ONLY</p><p class="">Berocca – original $3,0</p><p class="">Berry \'noice\' banana Smoothie; berries, banana + Jocks vanilla ice-cream $7,9</p><p class="">Bloody Mary w/ a \'shot\' of organic cucumber vodka + celery salt $13,0</p><p class="">Moet Chandon NV Champagne $18,0 glass or $26,0 for two</p><p class="">Fresh organic "medicinal\' Orange juice $4,5</p><p class="">Pick. Me. Up. Please – brioche roll, bacon, our tomato chutney, scrambles, cheddar $5,5</p><p class="">Toast w/ vegemite, jam or organic crunchy peanut butter $6,0</p><p class="">Toasted Noisette fruit bread w/ butter + jam $7,0</p><p class="">House made crumpets w/ ricotta, strawberry + lemon syllabub $9,9</p><p class="">Herb + cheesy toast $9,9 w/ eggplant kasundi $11,9 or w/ bacon $12,9 or both $13,9Croissant w/ bonne maman jam $6,0</p><p class="">Croissant w/ ham off the bone, béchamel, emmental cheese + truss tomato $7,5</p><p class="">Full of Grace organic porridge w/ chia, sunflower seeds, pecans, banana + coconut sugar $13,9</p><p class="">Bircher muesli w/ stewed rhubarb, honey yoghurt + pistachio $10,9\'Jack + Jill\' – Toasted ciabatta, poached eggs, bacon, 12hr roasted tomato, avocado + thyme buttered mushrooms $19,9</p>',
         'title' => 'Our favourite&nbsp;friends',
      )),
      1 =>
      (array)(array(
         'content' => '<p class="">Colder months of 2014<br></p><p class="">Full of Grace organic porridge w/ chia, sunflower seeds, pecans, banana + coconut sugar $13,9</p><p class="">Bircher muesli w/ stewed rhubarb, honey yoghurt + pistachio $10,9\'Jack + Jill\' – Toasted ciabatta, poached eggs, bacon, 12hr roasted tomato, avocado + thyme buttered mushrooms $19,9</p>',
         'title' => 'Something Bready',
      )),
      2 =>
      (array)(array(
         'title' => 'Lunchy Things',
         'content' => '<p class="">Colder months of 2014<br></p><p class="">Toast w/ vegemite, jam or organic crunchy peanut butter $6,0</p><p class="">Toasted Noisette fruit bread w/ butter + jam $7,0</p><p class="">House made crumpets w/ ricotta, strawberry + lemon syllabub $9,9</p><p class="">Herb + cheesy toast $9,9 w/ eggplant kasundi $11,9 or w/ bacon $12,9 or both $13,9Croissant w/ bonne maman jam $6,0</p><p class="">Croissant w/ ham off the bone, béchamel, emmental cheese + truss tomato $7,5</p>',
      )),
      3 =>
      (array)(array(
         'title' => 'Sweeeties darling',
         'content' => '<p>Colder months of 2015<br></p><p>Bloody Mary w/ a \'shot\' of organic cucumber vodka + celery salt $13,0</p><p>Moet Chandon NV Champagne $18,0 glass or $26,0 for two</p><p>Fresh organic "medicinal\' Orange juice $4,5</p><p>Toast w/ vegemite, jam or organic crunchy peanut butter $6,0</p><p>Toasted Noisette fruit bread w/ butter + jam $7,0</p>',
      )),
    ),
    'tabs_count' => 4,
    'id_slug' => 'utabs',
    'preset' => 'special-menu-tabs',
    'element_id' => 'utabs-object-1429596926252-1445',
    'anchor' => '',
    'theme_style' => 'u-menu-tabs',
    'row' => 58,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429596966491-1239',
  'new_line' => 'true',
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
      'top' => 14,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$main->add_element("Code", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '38',
  'margin_bottom' => '0',
  'id' => 'module-1429596926261-1711',
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
    'element_id' => 'upfront-code_element-object-1429596926260-1466',
    'code_selection_type' => 'Create',
    'markup' => '<div class="stamp">
    <p>Brand</p>
    <p><span>New</span></p>
    <p>Menu</p>
</div>',
    'style' => '/* Your styles here */
.stamp {
    background: url("' . get_stylesheet_directory_uri() . '/images/single-page-our-menu/stamp-bg.png") no-repeat;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 195px;
    margin: auto;
    padding: 30px 0;
    width: 195px;
}
p {
    color: #fff;
    font-size: 30px;
    line-height: 1.4em;
    text-align: center;
}
span {
    font-family: \'Oleo Script\', cursive;
    font-size: 62px;
}',
    'script' => '/* Your code here */',
    'row' => 43,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 45,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597135252-1503',
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
      'left' => 2,
      'col' => 8,
      'order' => 1,
      'top' => 9,
      'row' => 45,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 1,
      'top' => 19,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_top' => '8',
  'id' => 'module-1434618809467-1677',
  'options' =>
  array (
    'content' => '<span class="uf_font_icon" style="font-size: 33px; top: 0px;" rel="font-size: 33px; top: 0px;" data-verified="redactor">e</span>​',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1434618809467-1363',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-social',
    'row' => 15,
    'is_edited' => true,
    'theme_style' => 'u-button-social',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1429597135252-1503',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 2,
      'top' => 8,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 2,
      'top' => 15,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'id' => 'module-1429596926242-1819',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Like us on</p><div><p class="" style="text-align: center;"></p><p class="" style="text-align: center;">facebook</p></div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429596926242-1098',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-script',
    'row' => 23,
  ),
  'row' => 23,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597135252-1503',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 3,
      'col' => 6,
      'order' => 3,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 3,
      'top' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_top' => '13',
  'id' => 'module-1434618816074-1807',
  'options' =>
  array (
    'content' => '<span class="uf_font_icon" style="font-size: 33px; top: 0px;" rel="font-size: 33px; top: 0px;" data-verified="redactor">t</span>​',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1434618816074-1222',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'button-social',
    'row' => 15,
    'is_edited' => true,
    'theme_style' => 'u-button-social',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1429597135252-1503',
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 4,
      'top' => 12,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 4,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1429597411146-1538',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Follow us on</p><div class=""><p class="" style="text-align: center;"></p><p class="" style="text-align: center;">twitter</p></div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1429597411146-1438',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'u-script',
    'row' => 23,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1429597135252-1503',
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
      'left' => 0,
      'col' => 7,
      'order' => 5,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'main-footer.php');
