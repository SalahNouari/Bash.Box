<?php
$ltb_sf_map11 = upfront_create_region(
			array (
  'name' => 'ltb-sf-map11',
  'title' => 'SF Map',
  'type' => 'lightbox',
  'scope' => 'local',
  'container' => 'lightbox',
  'sub' => 'lightbox',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'col' => '12',
  'height' => '370',
  'click_out_close' => 'yes',
  'show_close' =>
  array (
  ),
  'overlay_color' => 'rgba(38,58,77,0.75)',
  'lightbox_color' => 'rgba(248,254,255,0.9)',
  'breakpoint' =>
  (array)(array(
     'tablet' =>
    (array)(array(
       'edited' => false,
    )),
     'mobile' =>
    (array)(array(
       'edited' => false,
    )),
  )),
  'background_type' => '',
  'use_padding' => 0,
  'delete' => false,
)
			);

$ltb_sf_map11->add_element("Umap", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432429016914-1098',
  'id' => 'module-1432429016914-1098',
  'options' =>
  array (
    'type' => 'MapModel',
    'view_class' => 'UmapView',
    'class' => 'c24 upfront-map_element-object',
    'has_settings' => 1,
    'id_slug' => 'upfront-map_element',
    'controls' =>
    array (
      0 => 'pan',
      1 => 'zoom',
    ),
    'map_center' =>
    array (
      0 => 37.78814810000000079526216723024845123291015625,
      1 => -122.3935146000000031563104130327701568603515625,
    ),
    'zoom' => '15',
    'style' => 'ROADMAP',
    'styles' => false,
    'draggable' => '',
    'scrollwheel' => false,
    'element_id' => 'upfront-map_element-object-1432429016913-1401',
    'markers' =>
    array (
      0 =>
      (array)(array(
         'lat' => 37.78814810000000079526216723024845123291015625,
         'lng' => -122.3935146000000031563104130327701568603515625,
      )),
    ),
    'row' => 73,
    'location' => '',
    'hide_markers' => '',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432429134591-1244',
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

$regions->add($ltb_sf_map11);
