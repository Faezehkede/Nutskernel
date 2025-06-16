<?php
/* Template Name: Product List */

get_header(); ?>

<div class="breadcrumb">
  <a href="/">Home</a> » Products
</div>

<div class="product-filters">
  <form method="GET">
    <select name="product_cat">
      <option value="">All Categories</option>
      <?php
      $terms = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => false]);
      foreach ($terms as $term) {
        $selected = ($_GET['product_cat'] ?? '') === $term->slug ? 'selected' : '';
        echo "<option value='{$term->slug}' $selected>{$term->name}</option>";
      }
      ?>
    </select>
    <button type="submit">Filter</button>
  </form>
</div>

<div class="product-grid">

  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 8, // Number of products to show
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $loop = new WP_Query($args);
  if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
      global $product;
  ?>

      <div class="swiper-slide">
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
      </div>

  <?php
    endwhile;
    wp_reset_postdata();
  else :
    echo '<p>No products found</p>';
  endif;
  ?>
</div>

<?php get_footer(); ?>