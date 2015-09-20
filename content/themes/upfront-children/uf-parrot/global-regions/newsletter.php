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
  'row' => 31,
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

$newsletter->add_element("Code", array (
  'columns' => '10',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1429807657881-1121',
  'id' => 'module-1429807657881-1121',
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
    'element_id' => 'upfront-code_element-object-1429807657881-1316',
    'row' => 13,
    'code_selection_type' => 'Create',
    'markup' => '<form name="newsletter" class="newsletter-form" action="" method="post">
    <input type="email" name="user-email" placeholder="Enter your email for exclusive news">
    <span class="newsletter-btn">
        <input type="submit" value="Submit">
    </span>
</form>',
    'style' => '.newsletter-form {
    display: table;
    border-collapse: separate;
}
.newsletter-form input[type="email"] {
    width: 100%;
    height: 40px;
    padding: 12px;
    font-size: 14px;
    line-height: 1.4;
    color: #666666;
    background-color: #fff;
    background-image: none;
    border: 1px solid #DDF2F8;
    border-radius: 4px 0 0 4px;
    display: table-cell;
    font-family: "Open Sans";
    font-weight: 400;
}
.newsletter-form input[type="email"]:focus {
    outline: 0;
}
.newsletter-btn {
    white-space: nowrap;
    vertical-align: middle;
    font-size: 0;
    margin-left: -1px;
    display: table-cell;
    width: 1%;
}
.newsletter-form input[type="submit"] {
    background-color: #2a8a5e;
    color: #FFFFFF;
    opacity: 1;
    border-radius: 0 4px 4px 0;
    border: 1px solid #2a8a5e;
    display: inline-block;
    padding: 10px 34px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    width: 100%;
    height: 40px;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    position: relative;
}
.newsletter-form input[type="submit"]:hover {
   background-color: #ufc1;
}',
    'script' => '/* Your code here */',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432816225517-1293',
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
      'edited' => true,
      'left' => 1,
      'col' => 10,
      'order' => 0,
      'top' => 9,
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

$newsletter->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1429806548995-1306',
  'id' => 'module-1429806548995-1306',
  'options' =>
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"><span class="upfront_theme_color_3" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_3"><span class="upfront_theme_color_3">Get Your App</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1429806548994-1155',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'mobile' =>
      (array)(array(
         'row' => 13,
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
  'wrapper_id' => 'wrapper-1432816230524-1648',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'order' => 7,
      'top' => 2,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 6,
      'row' => 13,
      'top' => 5,
    ),
  ),
));

$newsletter->add_group(array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432497114224-1860',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432816233524-1091',
  'original_col' => 3,
  'href' => '{{upfront:home_url}}/download/',
  'linkTarget' => '_self',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => false,
      'col' => 3,
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
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'order' => 1,
      'row' => 9,
      'top' => 4,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 2,
      'col' => 3,
      'order' => 0,
      'row' => 10,
      'top' => 0,
    ),
  ),
));

$newsletter->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429806456925-1035',
  'id' => 'module-1429806456925-1035',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429806456925-1858',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-blackberry-sm',
    'row' => 6,
    'theme_style' => 'button-blackberry-small',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432497114255-1748',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
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
      'col' => 1,
      'order' => 1,
      'top' => 0,
      'hide' => 0,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432497114224-1860',
));

$newsletter->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429806573620-1459',
  'id' => 'module-1429806573620-1459',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429806573620-1842',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-apple-sm',
    'row' => 6,
    'theme_style' => 'button-iphone-small',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432497114258-1060',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 3,
      'top' => 0,
    ),
    'mobile' =>
    array (
      'edited' => false,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432497114224-1860',
));

$newsletter->add_element("Button", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1429806166863-1041',
  'id' => 'module-1429806166863-1041',
  'options' =>
  array (
    'content' => '&nbsp;',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1429806166863-1396',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'parrot-android-sm',
    'row' => 6,
    'theme_style' => 'button-android-small',
    'is_edited' => true,
    'breakpoint' =>
    (array)(array(
       'tablet' =>
      (array)(array(
         'row' => 9,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432497114259-1119',
  'wrapper_breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'col' => 1,
      'order' => 2,
      'clear' => false,
    ),
  ),
  'breakpoint' =>
  array (
    'tablet' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
      'row' => 9,
    ),
    'mobile' =>
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1432497114224-1860',
));

$newsletter->add_element("Code", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1433199509879-1163',
  'id' => 'module-1433199509879-1163',
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
    'element_id' => 'upfront-code_element-object-1433199509878-1190',
    'code_selection_type' => 'Create',
    'markup' => '<hr class="parrot-divider">',
    'style' => '/* Your styles here */',
    'script' => '/* Your code here */',
    'row' => 7,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1433199523232-1770',
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

$regions->add($newsletter);

/* END_REGION_OUTPUT */