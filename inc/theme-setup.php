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

    $args = array(
        'post_type' => 'product',
        's' => $search_term,
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'suppress_filters' => false, // Important for multilingual or custom filters
    );

    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        foreach ($query->posts as $post) {
            $results[] = array(
                'title' => get_the_title($post),
                'link'  => get_permalink($post->ID),
                'image' => get_the_post_thumbnail_url($post->ID, 'thumbnail') ?: wc_placeholder_img_src(),
            );
        }
    }

    wp_send_json($results);
}

add_action('wp_ajax_ajax_search', 'ajax_live_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_live_search');



