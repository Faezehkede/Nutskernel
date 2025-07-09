<?php 
// print_r fuction <pre>
function apr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// Admin Columns for Better UX for request form
add_filter('manage_request_posts_columns', function($columns) {
    $columns['product_category'] = 'Product Category';
    $columns['quantity'] = 'Quantity';
    return $columns;
});

add_action('manage_request_posts_custom_column', function($column, $post_id) {
    if ($column == 'product_category') {
        echo esc_html(get_field('product_category', $post_id));
    }
    if ($column == 'quantity') {
        echo esc_html(get_field('quantity', $post_id));
    }
}, 10, 2);
