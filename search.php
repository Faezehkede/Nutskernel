<?php get_header(); ?>

<main class="search-results container">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="product-grid">
            <?php while (have_posts()) : the_post(); ?>
                <?php
                if (get_post_type() === 'product') :
                    global $product;
                ?>
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
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No products found. Try another keyword.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>