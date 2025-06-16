<?php
/* Template Name: Product List */

get_header(); ?>

<div class="product-list container">


  <div class="product-list-header">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a> 
      <svg width="20" height="20" viewBox="-19.04 0 75.804 75.804" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g id="Group_65" data-name="Group 65" transform="translate(-831.568 -384.448)">
            <path id="Path_57" data-name="Path 57" d="M833.068,460.252a1.5,1.5,0,0,1-1.061-2.561l33.557-33.56a2.53,2.53,0,0,0,0-3.564l-33.557-33.558a1.5,1.5,0,0,1,2.122-2.121l33.556,33.558a5.53,5.53,0,0,1,0,7.807l-33.557,33.56A1.5,1.5,0,0,1,833.068,460.252Z" fill="#777"></path>
          </g>
        </g>
      </svg> Suppliers
    </div>

    <div class="product-filters">
      <h2>Suppliers</h2>
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
      </form>
    </div>
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

</div>

<?php get_footer(); ?>