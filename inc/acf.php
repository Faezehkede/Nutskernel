<?php

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// ACF Fields for the Form
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_request_form',
        'title' => 'Request Form Fields',
        'fields' => array(
            array(
                'key' => 'field_product_category',
                'label' => 'Product Category',
                'name' => 'product_category',
                'type' => 'text',
                'required' => 1,
            ),
            array(
                'key' => 'field_product_type',
                'label' => 'Product Type',
                'name' => 'product_type',
                'type' => 'text',
            ),
            array(
                'key' => 'field_quantity',
                'label' => 'Required Quantity (kg)',
                'name' => 'quantity',
                'type' => 'text',
                'required' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'request',
                ),
            ),
        ),
    ));
}
