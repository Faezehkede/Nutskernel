<?php
// Shortcode: [request_form]
function af_request_form_shortcode() {
    ob_start();

    if (isset($_GET['request-submitted'])) {
        echo '<p class="success-message">✅ Your request has been submitted successfully.</p>';
    }

    // Get WooCommerce categories (or custom taxonomy if needed)
    $categories = get_terms([
        'taxonomy'   => 'product_cat', // or your custom taxonomy
        'hide_empty' => false,
    ]);
    ?>
    <section class="section third-section form-section">
        <div class="container">
            <div class="inner-wrapper">
                <div class="form-wrapper">
                    <h2>Send one request, receive multiple offers!</h2>
                    <p>Connect with thousands of suppliers and compare the best prices.</p>

                    <form method="POST">
                        <label>Product Category: *</label>
                        <select name="category" required>
                            <option value="">Select a category</option>
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?php echo esc_attr($cat->name); ?>"><?php echo esc_html($cat->name); ?></option>
                            <?php endforeach; ?>
                        </select>

                        <label>Product Type:</label>
                        <input type="text" name="type" placeholder='Example: "Camarosa"' />

                        <label>Required Quantity (kg): *</label>
                        <input type="text" name="quantity" required placeholder='Example: "50,000"' />

                        <input type="hidden" name="af_request_nonce" value="<?php echo wp_create_nonce('af_submit_request'); ?>" />
                        <button class="btn" type="submit">Contact Supplier</button>
                    </form>
                </div>

                <div class="list-product">
                    <p><span class="icon">📦</span>
                    <span>Don’t miss the opportunity — list your products and connect with buyers instantly!</span></p>
                    <a href="#">List Your Products</a>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('request_form', 'af_request_form_shortcode');


// Handle Form Submission
function af_handle_request_form_submission() {
    if (
        $_SERVER['REQUEST_METHOD'] === 'POST' &&
        isset($_POST['af_request_nonce']) &&
        wp_verify_nonce($_POST['af_request_nonce'], 'af_submit_request')
    ) {
        $category = sanitize_text_field($_POST['category']);
        $type     = sanitize_text_field($_POST['type']);
        $quantity = sanitize_text_field($_POST['quantity']);

        $post_id = wp_insert_post([
            'post_type'   => 'product_request',
            'post_status' => 'publish',
            'post_title'  => 'Request: ' . $category,
        ]);

        if ($post_id) {
            update_field('product_category', $category, $post_id);
            update_field('product_type', $type, $post_id);
            update_field('product_quantity', $quantity, $post_id);

            wp_redirect(add_query_arg('request-submitted', 'true', wp_get_referer()));
            exit;
        }
    }
}
add_action('init', 'af_handle_request_form_submission');
