<?php get_header(); ?>

<?php
global $product;

if (! $product) {
    return;
}

$product_id = $product->get_id();

// ACF fields
$seller = get_field('seller', $product_id);
$address = get_field('address', $product_id);
$available_quantity = get_field('available_quantity', $product_id);
$minimum_order = get_field('minimum_order', $product_id);

// Categories
$terms = get_the_terms($product_id, 'product_cat');
$category = ($terms && ! is_wp_error($terms)) ? $terms[0] : null;
?>

<section class="single-product">
    <div class="container">

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <?php
            woocommerce_breadcrumb(array(
                'delimiter'   => ' › ',
                'wrap_before' => '<nav class="breadcrumb text-sm mb-6" aria-label="Breadcrumb"><ol class="flex items-center space-x-2 text-gray-600">',
                'wrap_after'  => '</ol></nav>',
                'before'      => '<li>',
                'after'       => '</li>',
                'home'        => 'Home',
            ));
            ?>

        </div>

        <!-- Product Main Section -->
        <div class="single-product-section">

            <div class="left-side product-details">
                <!-- Product Section -->
                <div class="grid items-start">

                    <!-- Product Image -->
                    <div class="product-image">

                        <?php echo $product->get_image('full', ['class' => 'rounded-xl shadow']); ?>

                        <div class="single-product-mobile">

                            <h1 class="prduct-name"><?php echo get_the_title(); ?></h1>
                            <div class="product-price"><?php echo $product->get_price_html(); ?></div>

                            <div class="product-meta">
                                <div class="last-update"><span>Updated:</span> <?php echo get_the_modified_date(); ?></div>
                                <div class="product-meta-category">Category:
                                    <?php if ($category): ?>
                                        <a href="<?php echo get_term_link($category); ?>" class="product-category-link"><?php echo $category->name; ?></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Product Info -->
                    <div class="product-info">
                        <!-- Review Stars -->
                        <div class="product-rating">
                            <?php echo wc_get_rating_html($average); ?>
                            <span class="product-rating-text">(<?php echo $review_count; ?> Reviews)</span>
                        </div>

                        <!-- Product Title -->
                        <h1 class="prduct-name"><?php echo get_the_title(); ?></h1>

                        <!-- Supplier Info -->
                        <div class="product-information">

                            <?php if ($seller): ?><p><strong>Supplier Name:</strong> <?php echo esc_html($seller); ?></p><?php endif; ?>
                            <?php if ($address): ?><p><strong>Origin:</strong> <?php echo esc_html($address); ?></p><?php endif; ?>
                            <?php if ($available_quantity): ?><p><strong>Supply Ability:</strong> <?php echo esc_html($available_quantity); ?></p><?php endif; ?>
                            <?php if ($minimum_order): ?><p><strong>Minimum Order:</strong> <?php echo esc_html($minimum_order); ?></p><?php endif; ?>

                        </div>

                        <!-- Price -->
                        <div class="product-price"><?php echo $product->get_price_html(); ?></div>


                        <!-- Update and Category -->
                        <div class="product-meta">
                            <div class="last-update"><span>Updated:</span> <?php echo get_the_modified_date(); ?></div>
                            <div class="product-meta-category">Category:
                                <?php if ($category): ?>
                                    <a href="<?php echo get_term_link($category); ?>" class="product-category-link"><?php echo $category->name; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs Section -->
                <div class="tabs-section">
                    <div class="product-tabs">
                        <ul class="tabs">
                            <li class="tab tab-active" data-tab="description">Description</li>
                            <li class="tab" data-tab="review">Review</li>
                        </ul>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content description active-tab">
                            <?php echo apply_filters('the_content', $product->get_description()); ?>
                        </div>
                        <div class="tab-content review">
                            <p>No reviews yet. Be the first to write one!</p>
                        </div>
                    </div>
                </div>

                <div class="single-product-mobile">
                    <div class="card">

                        <div class="profile-btn">
                            <button class="chat-btn">💬 Chat now</button>
                            <button class="contact-btn">📞 Contact supplier</button>
                        </div>

                        <div class="profile">
                            <div class="avatar-img">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" class="verified" alt="Verified">
                            </div>
                            <div class="avatar-info">
                                <h3><?php echo esc_html($seller); ?></h3>
                                <h4>Supplier</h4>
                            </div>
                        </div>

                        <div class="rating">⭐ 0 · 0 reviews</div>
                        <div class="response-rate">Response rate<br><strong>100%</strong></div>

                        <div class="description">
                            <strong>Business description</strong><br>
                            I'm <?php echo esc_html($seller); ?> from <?php echo esc_html($address); ?>.
                        </div>

                        <button class="supplier-profile-btn">Supplier profile</button>
                    </div>
                </div>

                <!-- Product Offer Section -->
                <div class="offer-section">

                    <div class="offer-header">
                        <div class="offer-title">
                            <h2>Popular Organic Discount</h2>
                        </div>
                        <div class="timer" id="countdown">
                            <p><span id="days"></span> Days </p>
                            <p><span id="hours"></span> Hours </p>
                            <p><span id="minutes"></span> Minutes </p>
                            <p><span id="seconds"></span> Seconds </p>
                        </div>
                    </div>

                    <div class="product-grid">

                        <!-- Product 1 -->
                        <div class="product-card">
                            <div class="product-top">
                                <span class="badge category">Nuts</span>
                                <span class="badge discount">-15%</span>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/almonds.webp" alt="Almonds Supreme">
                            </div>
                            <div class="product-rating">
                                <span class="stars">★★★★☆</span>
                                <span class="rating">(4.0)</span>
                            </div>
                            <h3 class="product-title">Almonds Supreme</h3>
                            <div class="product-price">
                                <span class="new-price">$9.99</span>
                                <span class="old-price">$11.99</span>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card">
                            <div class="product-top">
                                <span class="badge category">Nuts</span>
                                <span class="badge discount">-10%</span>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/cashew.webp" alt="Raw Cashew Delight">
                            </div>
                            <div class="product-rating">
                                <span class="stars">★★★★★</span>
                                <span class="rating">(5.0)</span>
                            </div>
                            <h3 class="product-title">Raw Cashew Delight</h3>
                            <div class="product-price">
                                <span class="new-price">$12.99</span>
                                <span class="old-price">$14.50</span>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card">
                            <div class="product-top">
                                <span class="badge category">Nuts</span>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/Fandoq.webp" alt="Hazelnut Crunch">
                            </div>
                            <div class="product-rating">
                                <span class="stars">★★★☆☆</span>
                                <span class="rating">(3.5)</span>
                            </div>
                            <h3 class="product-title">Hazelnut Crunch</h3>
                            <div class="product-price">
                                <span class="new-price">$8.75</span>
                                <span class="old-price">$9.50</span>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card">
                            <div class="product-top">
                                <span class="badge category">Nuts</span>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/Pistachio.webp" alt="Roasted Pistachios">
                            </div>
                            <div class="product-rating">
                                <span class="stars">★★★★☆</span>
                                <span class="rating">(4.2)</span>
                            </div>
                            <h3 class="product-title">Roasted Pistachios</h3>
                            <div class="product-price">
                                <span class="new-price">$10.99</span>
                                <span class="old-price">$12.25</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="right-side product-contact">
                <div class="card">
                    <div class="profile-btn">
                        <button class="chat-btn">💬 Chat now</button>
                        <button class="contact-btn">📞 Contact supplier</button>
                    </div>

                    <div class="profile">
                        <div class="avatar-img">
                            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" class="verified" alt="Verified">
                        </div>
                        <div class="avatar-info">
                            <h3>Michael Tierney</h3>
                            <h4>Supplier</h4>
                        </div>
                    </div>

                    <div class="rating">⭐ 0 · 0 reviews</div>
                    <div class="response-rate">Response rate<br><strong>100%</strong></div>

                    <div class="description">
                        <strong>Business description</strong><br>
                        I'm Michael Tierney from Canada. Leave a message to contact me.
                    </div>

                    <button class="supplier-profile-btn">Supplier profile</button>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>