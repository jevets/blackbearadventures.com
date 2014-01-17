<?php 
// Trip Texts
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-texts',
    'title' => 'Trip Texts',
    'fields' => array (
      array (
        'key' => 'field_52d95f68077d9',
        'label' => 'Trip Lead Paragraph',
        'name' => 'trip_lead_paragraph',
        'type' => 'textarea',
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'formatting' => 'html',
      ),
      array (
        'key' => 'field_52d971c559b56',
        'label' => 'Included in the Trip Price',
        'name' => 'included',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_52d971ef59b57',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_52d971ff59b58',
            'label' => 'Content',
            'name' => 'content',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'basic',
            'media_upload' => 'no',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add Row',
      ),
      array (
        'key' => 'field_52d9721659b59',
        'label' => 'Not Included in the Trip Price',
        'name' => 'not_included',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
      array (
        'key' => 'field_52d9722f59b5a',
        'label' => 'Points of Interest',
        'name' => 'points_of_interest',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'no',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}

// Trip Costs
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-costs',
    'title' => 'Trip Costs',
    'fields' => array (
      array (
        'key' => 'field_52d96148edbc8',
        'label' => 'Trip Cost (Single Occupancy)',
        'name' => 'trip_cost_single',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '$',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52d9616dedbc9',
        'label' => 'Trip Cost (Double Occupancy)',
        'name' => 'trip_cost_double',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '$',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_52d96181edbca',
        'label' => 'Trip Deposit',
        'name' => 'trip_deposit',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '$',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 5,
  ));
}

// Trip Specs
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-specs',
    'title' => 'Trip Specs',
    'fields' => array (
      array (
        'key' => 'field_52d95d2e4796d',
        'label' => 'Tour Mileage',
        'name' => 'tour_mileage',
        'type' => 'text',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => 'Miles',
        'min' => '',
        'max' => '',
      ),
      array (
        'key' => 'field_52d95d774796e',
        'label' => 'Trip Length Days',
        'name' => 'trip_length_days',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => 'Days',
        'min' => '',
        'max' => '',
        'step' => 1,
      ),
      array (
        'key' => 'field_52d95dc44796f',
        'label' => 'Trip Length Nights',
        'name' => 'trip_length_nights',
        'type' => 'number',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => 'Nights',
        'min' => '',
        'max' => '',
        'step' => 1,
      ),
      array (
        'key' => 'field_52d95dda47970',
        'label' => 'Trip Origin Location',
        'name' => 'trip_origin_location',
        'type' => 'text',
        'instructions' => 'City, State',
        'required' => 1,
        'default_value' => 'Asheville, NC',
        'placeholder' => 'Asheville, NC',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 10,
  ));
}


// Trip Itinerary
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-itinerary',
    'title' => 'Trip Itinerary',
    'fields' => array (
      array (
        'key' => 'field_52d968a282643',
        'label' => 'Trip Itinerary',
        'name' => 'trip_itinerary',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_52d968d082644',
            'label' => 'Day',
            'name' => 'day',
            'type' => 'number',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => 1,
            'max' => '',
            'step' => 1,
          ),
          array (
            'key' => 'field_52d9692982645',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_52d9694e82646',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'basic',
            'media_upload' => 'yes',
          ),
          array (
            'key' => 'field_52d9696582647',
            'label' => 'Meals',
            'name' => 'meals',
            'type' => 'checkbox',
            'column_width' => '',
            'choices' => array (
              'breakfast' => 'Breakfast',
              'lunch' => 'Lunch',
              'dinner' => 'Dinner',
            ),
            'default_value' => '',
            'layout' => 'vertical',
          ),
          array (
            'key' => 'field_52d9699082648',
            'label' => 'Mileage',
            'name' => 'mileage',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => 'Miles',
            'min' => '',
            'max' => '',
          ),
          array (
            'key' => 'field_52d969a582649',
            'label' => 'Elevation Gain',
            'name' => 'elevation_gain',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => 'Feet',
            'min' => '',
            'max' => '',
          ),
          array (
            'key' => 'field_52d969c98264a',
            'label' => 'Lodging Name',
            'name' => 'lodging_name',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_52d969ea8264b',
            'label' => 'Lodging Image',
            'name' => 'lodging_image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_52d969fd8264c',
            'label' => 'Lodging Link',
            'name' => 'lodging_link',
            'type' => 'text',
            'instructions' => 'URL to lodging\'s home page',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 50,
  ));
}


// Trip Gallery
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_trip-gallery',
    'title' => 'Trip Gallery',
    'fields' => array (
      array (
        'key' => 'field_52d975a6c7a51',
        'label' => 'Trip Gallery',
        'name' => 'trip_gallery',
        'type' => 'gallery',
        'instructions' => 'Insert a NextGen Gallery here using the icon above',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template-trip.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 500,
  ));
}
