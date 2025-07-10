<?php
defined('ABSPATH') || exit;
get_header();

?>
<main class="shop-container">

    <div class="row">
        <div class="col-9">

            <div class="product-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                        global $product; ?>
                        <div class="product-card">
                            <a href="<?php the_permalink(); ?>">

                                <div class="product-top">
                                    <?php
                                    $categories = wc_get_product_category_list($product->get_id());
                                    if ($categories) {
                                        echo '<span class="badge category">' . strip_tags($categories) . '</span>';
                                    }

                                    if ($product->is_on_sale()) {
                                        $regular_price = $product->get_regular_price();
                                        $sale_price = $product->get_sale_price();
                                        if ($regular_price > 0) {
                                            $discount = round((($regular_price - $sale_price) / $regular_price) * 100);
                                            echo '<span class="badge discount">-' . $discount . '%</span>';
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="product-image">
                                    <?php echo $product->get_image(); ?>
                                </div>

                                <div class="product-rating">
                                    <?php
                                    $average = $product->get_average_rating();
                                    echo '<span class="stars">' . wc_get_rating_html($average) . '</span>';
                                    echo '<span class="rating">(' . number_format($average, 1) . ')</span>';
                                    ?>
                                </div>

                                <h3 class="product-title"><?php the_title(); ?></h3>
                                <p class="available_quantity">Available Quantity: <?php the_field('available_quantity'); ?></p>

                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php esc_html_e('No products found', 'your-text-domain'); ?></p>
                <?php endif; ?>
            </div>

            <div class="pagination">
                <?php woocommerce_pagination(); ?>
            </div>

        </div>
        <div class="col-3">

            <aside class="shop-sidebar">
                <h3>Product Categories</h3>
                <ul class="product-categories">
                    <?php
                    $args = array(
                        'taxonomy'     => 'product_cat',
                        'orderby'      => 'name',
                        'show_count'   => false,
                        'pad_counts'   => true,
                        'hierarchical' => true,
                        'title_li'     => '',
                        'hide_empty'   => false,
                    );
                    wp_list_categories($args);
                    ?>
                </ul>
            </aside>


        </div>
    </div>



</main>

<?php get_footer(); ?>