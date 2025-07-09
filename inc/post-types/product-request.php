<?php
// Register Custom Post Type: Product Request
function af_register_product_request_cpt() {
    register_post_type('product_request', [
        'labels' => [
            'name'               => 'Product Requests',
            'singular_name'      => 'Product Request',
            'menu_name'          => 'Requests',
            'add_new_item'       => 'Add New Request',
            'edit_item'          => 'Edit Request',
        ],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-feedback',
        'supports'            => ['title'],
    ]);
}
add_action('init', 'af_register_product_request_cpt');
