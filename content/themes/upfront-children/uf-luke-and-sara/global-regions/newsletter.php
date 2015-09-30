<?php
/* START_REGION_OUTPUT */
$newsletter = upfront_create_region(
			array (
  'name' => 'newsletter',
  'title' => 'Newsletter',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'newsletter',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 105,
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => true,
       'row' => 80,
    )),
     'mobile' =>
    (array)(array(
       'edited' => true,
       'row' => 67,
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
  'background_image' => '{{upfront:style_url}}/images/global-regions/newsletter/noise.jpg',
  'background_image_ratio' => 2.2599999999999997868371792719699442386627197265625,
  'background_repeat' => 'repeat',
)
			);

$newsletter->add_element("Code", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'class' => 'module-1428986705259-1923',
  'id' => 'module-1428986705259-1923',
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
    'element_id' => 'upfront-code_element-object-1428986705258-1699',
    'code_selection_type' => 'Create',
    'markup' => '<span class="divider"></span>',
    'style' => '/* Your styles here */
.divider {
    width: 52px;
    height: 32px;
    display: block;
    margin: 0 auto;
    background: url("{{upfront:style_url}}/images/global-regions/newsletter/sprites.png");
    background-image: url("{{upfront:style_url}}/ui/sprites.svg"), none;
    background-position: -374px -62px;
}',
    'script' => '/* Your code here */',
    'row' => 13,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1428988911269-1500',
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
      'top' => 5,
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

$newsletter->add_group(array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432428106936-1968',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432428106939-1846',
  'original_col' => 24,
  'background_color' => 'rgba(245,245,245,1)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
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
      'top' => 3,
    ),
  ),
));

$newsletter->add_element("Uimage", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432426631878-1520',
  'id' => 'module-1432426631878-1520',
  'options' =>
  array (
    'src' => '{{upfront:style_url}}/images/global-regions/newsletter/opt-in-430x200-6704.jpg',
    'srcFull' => '{{upfront:style_url}}/images/global-regions/newsletter/opt-in.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/global-regions/newsletter/opt-in.jpg',
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
       'width' => 430,
       'height' => 200,
    )),
    'fullSize' =>
    (array)(array(
       'width' => 430,
       'height' => 200,
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
       'height' => 200,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1735',
    'align' => 'left',
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
    'element_id' => 'image-1432426631874-1904',
    'row' => 40,
    'anchor' => '',
    'theme_style' => 'opt-in-image',
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 19,
      )),
       'mobile' =>
      (array)(array(
         'row' => 20,
      )),
    )),
    'no_padding' => '1',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432428106979-1687',
  'new_line' => true,
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 5,
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
      'col' => 5,
      'order' => 0,
      'row' => 19,
      'top' => 0,
      'hide' => 1,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'hide' => 1,
      'top' => 0,
      'row' => 20,
    ),
  ),
  'group' => 'module-group-1432428106936-1968',
));

$newsletter->add_element("Code", array (
  'columns' => '12',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1432357779317-1857',
  'id' => 'module-1432357779317-1857',
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
    'element_id' => 'upfront-code_element-object-1432357779316-1500',
    'code_selection_type' => 'Create',
    'markup' => '<div id="newsletter">
    <h4>Join the daily mail</h4>
    <p>Williamsburg meggings flannel shabby chic distillery butcher Irony disrupt mlkshk single-origin coffee Bushwick DIY hashtag.</p>
    <form class="news-input cf">
        <input type="text" placeholder="Subscribe">
        <input type="submit" value="Sign Up">
    </form>
</div>',
    'style' => '#newsletter {
    display: block;
}
#newsletter h4 {
    margin-top: 0;
    margin-bottom: 0.24em;
    font-weight: 700;
    letter-spacing: -0.6px;
}
#newsletter p {
    margin-top: 0;
    margin-bottom: 15px;
}
#newsletter .news-input {
    width: 100%;
    display: block;
    position: relative;
}
#newsletter form input {
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
}
.news-input input[type="text"] {
    width: 100%;
    height: 40px;
    display: block;
    padding: 2px 115px 0 15px;
    border: 1px solid #e8e7e7;
    background: #ffffff;
    color: #cccccc;
    font-size: 16px;
    line-height: 36px;
}
.news-input input[type="submit"] {
    position: absolute;
    top: 7px;
    right: 1px;
    padding: 2px 20px 0;
    border: 1px solid transparent;
    border-left-color: #cccccc;
    border-top-left-radius: 0 !important;
    -moz-border-top-left-radius: 0 !important;
    -webkit-border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
    -moz-border-bottom-left-radius: 0 !important;
    -webkit-border-bottom-left-radius: 0 !important;
    background: #ufc5;
    color: #ufc2;
    font-size: 16px;
    line-height: 18px;
    font-family: "Quattrocento Sans";
    font-weight: 400;
    text-transform: uppercase;
}
/* Clearfix */
.cf {
    *zoom: 1;
}
.cf:before, .cf:after {
    content: " ";
    display: table;
}
.cf:after {
    clear: both;
}',
    'script' => '/* Your code here */',
    'row' => 29,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432428106981-1116',
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
  'group' => 'module-group-1432428106936-1968',
));

$regions->add($newsletter);

/* END_REGION_OUTPUT */