<?php

// Form Submission
function handle_request_form()
{
    $category = sanitize_text_field($_POST['category']);
    $type = sanitize_text_field($_POST['type']);
    $quantity = sanitize_text_field($_POST['quantity']);

    // Create post
    $post_id = wp_insert_post(array(
        'post_type' => 'request',
        'post_title' => $category . ' Request',
        'post_status' => 'publish',
    ));

    if ($post_id) {
        update_field('product_category', $category, $post_id);
        update_field('product_type', $type, $post_id);
        update_field('quantity', $quantity, $post_id);
    }

    $category_id = intval($_POST['selected_category_id']);
    if ($category_id) {
        wp_set_post_terms($post_id, [$category_id], 'request_category');
    }

    // Redirect (optional)
    wp_redirect(home_url('/thank-you/'));
    exit;
}
add_action('admin_post_nopriv_handle_request_form', 'handle_request_form');
add_action('admin_post_handle_request_form', 'handle_request_form');

// AJAX to Load Child Categories
function ajax_get_child_categories() {
    $taxonomy = 'request_category'; // ✅ Make sure this matches your taxonomy
    $parent_id = isset($_POST['parent_id']) ? intval($_POST['parent_id']) : 0;
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    $args = array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    );

    if (!empty($search)) {
        $args['name__like'] = $search;
    } else {
        $args['parent'] = $parent_id;
    }

    $terms = get_terms($args);

    if (is_wp_error($terms)) {
        echo json_encode(['categories' => []]);
        wp_die();
    }

    $data = array_map(function($term) use ($taxonomy) {
        $has_children = get_terms(array(
            'taxonomy' => $taxonomy,
            'parent' => $term->term_id,
            'hide_empty' => false
        ));

        return array(
            'id' => $term->term_id,
            'name' => $term->name,
            'has_children' => !empty($has_children)
        );
    }, $terms);

    echo json_encode(array('categories' => $data));
    wp_die();
}
add_action('wp_ajax_get_child_categories', 'ajax_get_child_categories');
add_action('wp_ajax_nopriv_get_child_categories', 'ajax_get_child_categories');






