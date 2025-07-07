<?php
function agrifoodz_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'agrifoodz-theme'),
        'footer' => __('Footer Menu', 'agrifoodz-theme')
    ]);
}
add_action('after_setup_theme', 'agrifoodz_setup');

// Live Search AJAX Handler
function ajax_live_search() {
    $search_term = sanitize_text_field($_GET['s']);

    if (empty($search_term)) {
        wp_send_json([]);
    }

    // Use WooCommerce product query
    $args = array(
        'limit'  => 10,
        'status' => 'publish',
        'search' => $search_term,
    );

    $products = wc_get_products($args);
    $results = array();

    foreach ($products as $product) {
        $results[] = array(
            'title' => $product->get_name(),
            'link'  => get_permalink($product->get_id()),
            'image' => get_the_post_thumbnail_url($product->get_id(), 'thumbnail') ?: wc_placeholder_img_src(),
        );
    }

    wp_send_json($results);
}

add_action('wp_ajax_ajax_search', 'ajax_live_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_live_search');



