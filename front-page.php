<?php get_header(); ?>

<section class="main">
  <div class="container">
    <div class="row">

      <div class="col-3">

        <nav class="category-nav">

          <div class="mega-menu">
            <ul class="category-list">

              <?php
              $args = [
                'taxonomy'   => 'product_cat',
                'parent'     => 0,
                'hide_empty' => false,
                'orderby'    => 'name',
                'order'      => 'ASC',
              ];

              $categories = get_terms($args);

              if (!empty($categories) && !is_wp_error($categories)) :
                foreach ($categories as $category) :
                  $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                  $image_url = wp_get_attachment_url($thumbnail_id);
                  $category_link = get_term_link($category);
              ?>
                  <li>
                    <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                      <?php if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>" width="32" height="32">
                      <?php else: ?>
                        <img src="<?php echo wc_placeholder_img_src(); ?>" alt="No Image" width="32" height="32">
                      <?php endif; ?>
                      <p><?php echo esc_html($category->name); ?></p>
                    </a>
                  </li>
              <?php
                endforeach;
              endif;
              ?>

            </ul>
          </div>

          <a href="#" class="view-all">View All</a>

        </nav>

      </div>

      <div class="col-9">
        <div class="swiper hero-swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="overlay">
                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/slide6.webp" alt="Slide 1" class="swiper-img">
                <div class="main-content">
                  <h3>Global B2B platform for Food & Agriculture Products</h3>
                  <p>Join a worldwide network of buyers and suppliers in the agri-food industry.<br>
                    Access thousands of verified products across global markets.</p>
                  <a href="#" class="main-btn">Explore Global Products</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="overlay">
                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/slide5.webp" class="swiper-img">
                <div class="main-content">
                  <h3>Streamline your agri-trade operations with our B2B platform</h3>
                  <p>Manage sourcing, negotiations, and logistics all in one place.<br>
                    Our smart tools make agri-trade faster, easier, and more efficient.</p>
                  <a href="#" class="main-btn">Simplify Your Trade Today</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="overlay">
                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/slide2.webp" alt="Slide 1" class="swiper-img">
                <div class="main-content">
                  <h3>Connecting Global Buyers with Trusted Agri-Food Suppliers</h3>
                  <p>Find certified suppliers and grow your agri-business with confidence.<br>
                    We bridge the gap between demand and reliable supply.</p>
                  <a href="#" class="main-btn">Find Reliable Suppliers</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="overlay">
                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/slide1.webp" alt="Slide 1" class="swiper-img">
                <div class="main-content">
                  <h3>From Farm to Market — Smarter B2B for Agri-Food Trade</h3>
                  <p>Digitize your supply chain from field to shelf.<br>
                    Make smarter trade decisions with real-time insights and tools.</p>
                  <a href="#" class="main-btn">Start Smarter Trading</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="overlay">
                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/slide9.webp" alt="Slide 1" class="swiper-img">
                <div class="main-content">
                  <h3>Trusted Gateway to Wholesale Food & Agriculture Markets</h3>
                  <p>Access a vetted marketplace built for bulk agri-food trade.<br>
                    Connect with trusted wholesalers, exporters, and importers worldwide.</p>
                  <a href="#" class="main-btn">Enter the Marketplace</a>
                </div>
              </div>
            </div>


          </div>

          <div class="swiper-pagination"></div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="section second-section">
  <div class="category-section container">
    <div class="section-title">
      <h2>High Demand</h2>
    </div>
    <div class="swiper category-swiper">

      <div class="swiper-wrapper">
        <?php
        $args = [
          'post_type' => 'product',
          'posts_per_page' => 10,
          'meta_query' => [
            [
              'key' => 'high_demand',
              'value' => '1', // true
              'compare' => '='
            ]
          ]
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            global $product;
        ?>
            <div class="swiper-slide category-card">
              <div class="category-item">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="image-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>" />
                    </div>
                  <?php else : ?>
                    <div class="image-wrapper">
                      <img src="<?php echo wc_placeholder_img_src(); ?>" alt="Placeholder" />
                    </div>
                  <?php endif; ?>
                  <span><?php the_title(); ?></span>
                </a>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>No high demand products found.</p>';
        endif;
        ?>

      </div>

      <div class="swiper-button swiper-button-next category-next" aria-hidden="true"></div>
      <div class="swiper-button swiper-button-prev category-prev" aria-hidden="true"></div>

    </div>
  </div>
</section>

<section class="section third-section form-section">
  <div class="container">
    <div class="inner-wrapper">
      <div class="form-wrapper">
        <h2>Send one request, receive multiple offers!</h2>
        <p>Connect with thousands of suppliers and compare the best prices.</p>
        <form action="submit_form.php" method="POST">
          <label>Product Category: *</label>
          <input type="text" name="category" required placeholder='Example: "Strawberries"' />

          <label>Product Type:</label>
          <input type="text" name="type" placeholder='Example: "Camarosa"' />

          <label>Required Quantity (kg): *</label>
          <input type="text" name="quantity" required placeholder='Example: "50,000"' />

          <button class="btn" type="submit">Contact Supplier</button>
        </form>
      </div>

      <div class="list-product">
        <p>
          <span class="icon"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              stroke="#000000" stroke-width="0.00024000000000000003">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M13.5 2.75H20.5V1.25H13.5V2.75ZM21.25 3.5V7.5H22.75V3.5H21.25ZM20.5 8.25H13.5V9.75H20.5V8.25ZM12.75 7.5V3.5H11.25V7.5H12.75ZM13.5 8.25C13.0858 8.25 12.75 7.91421 12.75 7.5H11.25C11.25 8.74264 12.2574 9.75 13.5 9.75V8.25ZM21.25 7.5C21.25 7.91421 20.9142 8.25 20.5 8.25V9.75C21.7426 9.75 22.75 8.74264 22.75 7.5H21.25ZM20.5 2.75C20.9142 2.75 21.25 3.08579 21.25 3.5H22.75C22.75 2.25736 21.7426 1.25 20.5 1.25V2.75ZM13.5 1.25C12.2574 1.25 11.25 2.25736 11.25 3.5H12.75C12.75 3.08579 13.0858 2.75 13.5 2.75V1.25Z"
                  fill="#000"></path>
                <path
                  d="M2 13.25C1.58579 13.25 1.25 13.5858 1.25 14C1.25 14.4142 1.58579 14.75 2 14.75V13.25ZM22 14.75C22.4142 14.75 22.75 14.4142 22.75 14C22.75 13.5858 22.4142 13.25 22 13.25V14.75ZM2 14.75H22V13.25H2V14.75Z"
                  fill="#000"></path>
                <path
                  d="M2 17.25C1.58579 17.25 1.25 17.5858 1.25 18C1.25 18.4142 1.58579 18.75 2 18.75V17.25ZM22 18.75C22.4142 18.75 22.75 18.4142 22.75 18C22.75 17.5858 22.4142 17.25 22 17.25V18.75ZM2 18.75H22V17.25H2V18.75Z"
                  fill="#000"></path>
                <path
                  d="M2 21.25C1.58579 21.25 1.25 21.5858 1.25 22C1.25 22.4142 1.58579 22.75 2 22.75V21.25ZM14 22.75C14.4142 22.75 14.75 22.4142 14.75 22C14.75 21.5858 14.4142 21.25 14 21.25V22.75ZM2 22.75H14V21.25H2V22.75Z"
                  fill="#000"></path>
                <path
                  d="M9 6.25C9.41421 6.25 9.75 5.91421 9.75 5.5C9.75 5.08579 9.41421 4.75 9 4.75V6.25ZM2 4.75C1.58579 4.75 1.25 5.08579 1.25 5.5C1.25 5.91421 1.58579 6.25 2 6.25V4.75ZM9 4.75H2V6.25H9V4.75Z"
                  fill="#000"></path>
                <path
                  d="M6.56944 1.51191C6.29988 1.19741 5.8264 1.16099 5.51191 1.43056C5.19741 1.70012 5.16099 2.1736 5.43056 2.48809L6.56944 1.51191ZM9 5.5L9.56944 5.98809C9.81019 5.70723 9.81019 5.29277 9.56944 5.01191L9 5.5ZM5.43056 8.51191C5.16099 8.8264 5.19741 9.29988 5.51191 9.56944C5.8264 9.83901 6.29988 9.80259 6.56944 9.48809L5.43056 8.51191ZM5.43056 2.48809L8.43056 5.98809L9.56944 5.01191L6.56944 1.51191L5.43056 2.48809ZM8.43056 5.01191L5.43056 8.51191L6.56944 9.48809L9.56944 5.98809L8.43056 5.01191Z"
                  fill="#000"></path>
              </g>
            </svg></span>
          <span>Don’t miss the opportunity — list your products and connect with buyers instantly!</span>
        </p>
        <a href="#">List Your Products</a>
      </div>
    </div>
  </div>
</section>

<section class="section product-carousel-section">
  <div class="container">

    <div class="section-title">
      <h2>Newest Products</h2>
      <a href="#" class="btn">
        <span>View All</span>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 
                  20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 
                  12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#fff"></path>
          </g>
        </svg>
      </a>
    </div>

    <!-- Include Swiper CSS -->
    <div class="swiper product-swiper">
      <div class="swiper-wrapper">

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

            <!-- Almonds -->
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
                  <!-- <div class="product-price">
                  <span class="new-price">$25.00</span>
                  <span class="old-price">$29.00</span>
                </div> -->
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

      <div class="swiper-button swiper-button-prev product-next" aria-hidden="true"></div>
      <div class="swiper-button swiper-button-next product-prev" aria-hidden="true"></div>

      <!-- <div class="swiper-pagination"></div> -->

    </div>

  </div>
</section>

<section class="buyer-carousel" role="region" aria-labelledby="latest-purchase-requests">

  <div class="container">

    <div class="section-title">
      <h2>Latest purchase requests</h2>
      <a href="#" class="btn">
        <span>View All</span>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 
                20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 
                12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
              fill="#fff"></path>
          </g>
        </svg>
      </a>
    </div>

    <div class="swiper buyersSwiper">
      <div class="swiper-wrapper">

        <!-- Slide Item -->
        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img4.webp" alt="user image">
                </div>
                <span class="user-name-link">Ali Alaei</span>
              </div>
              <div class="creation-date">Today</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">2 tons</span>
              <span class="brand-text">Green Beans</span>
              <span> of type </span>
              <span class="brand-text">Fresh Green Beans</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" alt="user image">
                </div>
                <span class="user-name-link">Sara Johnson</span>
              </div>
              <div class="creation-date">Yesterday</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">1 ton</span>
              <span class="brand-text">Almonds</span>
              <span> of type </span>
              <span class="brand-text">Nonpareil</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img1.webp" alt="user image">
                </div>
                <span class="user-name-link">Mohammad Reza</span>
              </div>
              <div class="creation-date">2 days ago</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">800 kg</span>
              <span class="brand-text">Groundnuts</span>
              <span> of type </span>
              <span class="brand-text">Shelled Raw</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img2.webp" alt="user image">
                </div>
                <span class="user-name-link">Emily Carter</span>
              </div>
              <div class="creation-date">3 days ago</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">500 kg</span>
              <span class="brand-text">Hazelnuts</span>
              <span> of type </span>
              <span class="brand-text">Turkish Raw</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img3.webp" alt="user image">
                </div>
                <span class="user-name-link">John Miller</span>
              </div>
              <div class="creation-date">Today</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">3 tons</span>
              <span class="brand-text">Pistachios</span>
              <span> of type </span>
              <span class="brand-text">Long Ahmad Aghaei</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img4.webp" alt="user image">
                </div>
                <span class="user-name-link">Leila Kamali</span>
              </div>
              <div class="creation-date">Yesterday</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">1.2 tons</span>
              <span class="brand-text">Cashews</span>
              <span> of type </span>
              <span class="brand-text">Whole W240</span>
            </div>
          </div>
        </div>

        <div class="swiper-slide buyAd-wrapper-item">
          <div class="list-title list-name">
            <div class="user-information-wrapper">
              <div class="user-content">
                <div class="user-avatar">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img.webp" alt="user image">
                </div>
                <span class="user-name-link">David Smith</span>
              </div>
              <div class="creation-date">4 days ago</div>
            </div>
            <div class="buyer-text">
              <span> Buyer of </span>
              <span class="red-text">2.5 tons</span>
              <span class="brand-text">Walnuts</span>
              <span> of type </span>
              <span class="brand-text">Chandler</span>
            </div>
          </div>
        </div>

        <!-- Repeat .swiper-slide for more buyers -->

      </div>
    </div>

  </div>

</section>

<section class="services" id="customer-service">
  <div class="container">

    <div class="service">

      <div class="feature-service">

        <div class="section-title">
          <h2>Featured Services</h2>
        </div>
        <div class="feature-service-item">

          <a href="<?php echo home_url('/subscription-plans'); ?>">
            <span class="icon">
              <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490" xml:space="preserve" stroke="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path
                      d="M279.819,490V357.803l50.461,51.448l49.721-48.517L245,223.082L109.999,360.733l49.721,48.517l50.461-51.448V490H279.819z M159.48,387.628l-27.799-27.133L245,244.951l113.319,115.543l-27.799,27.133l-66.013-67.314v154.374h-39.014V320.314 L159.48,387.628z">
                    </path>
                    <path
                      d="M57.885,111.096c-5.63,0-11.081-1.817-14.632-3.637l-2.684,10.909c3.29,1.817,9.869,3.551,16.539,3.551 c16.015,0,23.544-8.314,23.544-18.094c0-8.224-4.852-13.593-15.148-17.398c-7.537-2.86-10.826-4.505-10.826-8.225 c0-3.032,2.774-5.63,8.486-5.63c5.712,0,9.869,1.645,12.21,2.774l2.938-10.651c-3.462-1.559-8.307-2.942-14.886-2.942 c-13.765,0-22.079,7.619-22.079,17.574c0,8.482,6.325,13.851,16.015,17.227c7.013,2.509,9.787,4.587,9.787,8.225 C67.149,108.588,63.942,111.096,57.885,111.096z">
                    </path>
                    <path
                      d="M29.877,191.533h430.245c16.471,0,29.877-13.406,29.877-29.881V29.881C490,13.406,476.594,0,460.123,0H29.877 C13.406,0,0,13.406,0,29.881v131.771C0,178.127,13.406,191.533,29.877,191.533z M15.313,29.881c0-8.034,6.535-14.569,14.565-14.569 h430.245c8.03,0,14.565,6.535,14.565,14.569v131.771c0,8.034-6.535,14.569-14.565,14.569H29.877 c-8.03,0-14.565-6.535-14.565-14.569V29.881z">
                    </path>
                    <path
                      d="M110.709,122.001c15.23,0,24.322-8.568,24.322-26.573V62.706h-13.159v33.586c0,10.303-3.806,15.152-10.729,15.152 c-6.759,0-10.565-5.11-10.565-15.152V62.706H87.337v32.547C87.337,113.866,95.987,122.001,110.709,122.001z">
                    </path>
                    <path
                      d="M181.544,116.378c3.634-2.946,6.056-7.099,6.056-12.382c0-7.529-4.935-12.55-11.597-14.37v-0.172 c6.58-2.423,9.608-7.271,9.608-12.468c0-5.279-2.946-9.26-7.013-11.425c-4.239-2.512-9.174-3.29-17.227-3.29 c-6.58,0-13.593,0.52-17.055,1.211v57.306c2.946,0.434,7.791,0.867,14.288,0.867C170.202,121.657,177.298,119.75,181.544,116.378z M157.387,72.228c1.129-0.172,2.774-0.348,5.63-0.348c5.974,0,9.346,2.337,9.346,6.752c0,4.329-3.716,7.185-10.647,7.185h-4.329 V72.228z M157.387,95.253h4.508c6.572,0,11.858,2.34,11.858,8.224c0,6.146-5.286,8.396-11.253,8.396c-2.251,0-3.813,0-5.114-0.172 V95.253z">
                    </path>
                    <path
                      d="M209.523,111.096c-5.63,0-11.081-1.817-14.632-3.637l-2.684,10.909c3.29,1.817,9.869,3.551,16.539,3.551 c16.008,0,23.544-8.314,23.544-18.094c0-8.224-4.852-13.593-15.148-17.398c-7.537-2.86-10.826-4.505-10.826-8.225 c0-3.032,2.774-5.63,8.486-5.63c5.712,0,9.869,1.645,12.21,2.774l2.938-10.651c-3.462-1.559-8.307-2.942-14.886-2.942 c-13.765,0-22.079,7.619-22.079,17.574c0,8.482,6.325,13.851,16.015,17.227c7.013,2.509,9.787,4.587,9.787,8.225 C218.786,108.588,215.579,111.096,209.523,111.096z">
                    </path>
                    <path
                      d="M266.937,121.919c7.103,0,12.553-1.301,14.976-2.512l-1.989-10.303c-2.594,1.039-7.013,1.907-10.991,1.907 c-11.776,0-18.699-7.357-18.699-19.043c0-12.987,8.135-19.305,18.61-19.305c4.673,0,8.396,1.039,11.081,2.164l2.684-10.475 c-2.34-1.215-7.529-2.598-14.37-2.598c-17.66,0-31.859,11.081-31.859,30.991C236.379,109.365,246.772,121.919,266.937,121.919z">
                    </path>
                    <path
                      d="M301.495,98.113h3.985c5.368,0.086,7.881,2.075,9.436,9.346c1.735,7.185,3.118,11.948,4.067,13.593h13.503 c-1.122-2.251-2.938-9.869-4.755-16.449c-1.473-5.365-3.724-9.26-7.791-10.905v-0.262c5.017-1.817,10.296-6.924,10.296-14.37 c0-5.365-1.899-9.436-5.361-12.206c-4.157-3.29-10.221-4.587-18.871-4.587c-7.013,0-13.339,0.52-17.578,1.211v57.568h13.07V98.113z M301.495,72.486c0.957-0.172,2.774-0.43,5.974-0.43c6.064,0.086,9.697,2.77,9.697,8.135c0,5.107-3.895,8.396-10.475,8.396h-5.196 V72.486z">
                    </path>
                    <rect x="337.615" y="62.706" width="13.249" height="58.345"></rect>
                    <path
                      d="M397.355,116.378c3.634-2.946,6.056-7.099,6.056-12.382c0-7.529-4.935-12.55-11.596-14.37v-0.172 c6.58-2.423,9.608-7.271,9.608-12.468c0-5.279-2.946-9.26-7.013-11.425c-4.239-2.512-9.174-3.29-17.227-3.29 c-6.58,0-13.593,0.52-17.055,1.211v57.306c2.946,0.434,7.791,0.867,14.288,0.867C386.013,121.657,393.108,119.75,397.355,116.378z M373.197,72.228c1.129-0.172,2.774-0.348,5.63-0.348c5.974,0,9.346,2.337,9.346,6.752c0,4.329-3.716,7.185-10.647,7.185h-4.329 V72.228z M373.197,95.253h4.509c6.572,0,11.858,2.34,11.858,8.224c0,6.146-5.286,8.396-11.253,8.396c-2.251,0-3.813,0-5.114-0.172 V95.253z">
                    </path>
                    <polygon
                      points="447.494,110.229 423.516,110.229 423.516,96.378 444.982,96.378 444.982,85.645 423.516,85.645 423.516,73.525 446.283,73.525 446.283,62.706 410.267,62.706 410.267,121.051 447.494,121.051 ">
                    </polygon>
                  </g>
                </g>
              </svg>
            </span>
            <span> Subscription Plans</span>
          </a>
          <a href="<?php echo home_url('/marketing-research'); ?>">
            <span class="icon"><svg fill="#fff" viewBox="0 0 256 256" id="Layer_1" version="1.1" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path
                      d="M220.6,207.4l-31.6-38.7c14.8-24.3,18.4-53.8,9.8-81.4c-0.8-2.6-3.6-4-6.2-3.2c-2.6,0.8-4.1,3.6-3.2,6.2 c8.1,25.8,4.3,53.4-10.5,75.9l-0.3,0.4c-1,1.8-0.9,4,0.4,5.6l33.9,41.4c0,0,0.5,0.6,0.6,0.6c2.8,3.2,2.8,7.7,0.1,11 c-0.1,0.1-0.1,0.2-0.2,0.2l-0.7,0.7c-3.2,2.7-7.9,2.7-11.2-0.2c-0.2-0.2-0.3-0.3-0.5-0.5l-41.4-33.8c-1.7-1.4-4.1-1.5-5.9-0.3 l-0.4,0.3c-34.9,22.8-81.6,18.2-111.4-11c-0.2-0.3-0.3-0.6-0.5-0.8C6.6,145.2,6.6,88.7,41.3,54C76,19.3,132.5,19.3,167.2,54 c0.2,0.2,0.5,0.4,0.8,0.5c0.1,0.1,0.3,0.3,0.4,0.4c1.7,2.1,4.9,2.4,7,0.6c2.1-1.7,2.4-4.9,0.6-7c-0.4-0.5-1-1.1-1.6-1.7 C135.9,8.4,73.2,8.1,34.4,46.5c-0.1,0.1-0.3,0.2-0.4,0.4C18,62.9,8,84.2,5.7,106.7c-1,9.8-0.5,19.6,1.3,29.1 c3.8,19.5,13.2,37.2,27.3,51.3c32.3,32.2,83,38.1,121.8,14.5l38.4,31.4c0.2,0.2,0.5,0.5,0.7,0.7c3.5,3,7.7,4.4,11.9,4.4 c4.3,0,8.6-1.5,12.1-4.5l1.7-1.6c0.3-0.3,0.5-0.6,0.7-1c5.3-6.9,5.1-16.5-0.6-23.2C220.9,207.7,220.7,207.5,220.6,207.4z">
                    </path>
                    <path
                      d="M249.8,20.9c-1-1.4-2.7-2.2-4.5-2l-32.1,3.4c-1.8,0.2-3.3,1.3-4,2.9c-0.7,1.6-0.5,3.5,0.5,4.9l7.1,9.7L104,121.1 c-1.2,0.8-1.9,2.2-2,3.6l-3,38.5l-48.8-47.7c-1-1-2.4-1.5-3.8-1.4l-14.3,1c-2.7,0.2-4.8,2.5-4.6,5.3c0.2,2.7,2.6,4.8,5.3,4.6 l12.1-0.8l54.8,53.5c0.9,0.9,2.2,1.4,3.5,1.4c0.6,0,1.2-0.1,1.7-0.3c1.8-0.7,3-2.3,3.2-4.2l3.7-46.7l111.1-79.9l6.1,8.4 c0.9,1.3,2.4,2,4,2c0.2,0,0.4,0,0.5,0c1.8-0.2,3.3-1.3,4-2.9l13-29.5C251.1,24.2,250.9,22.4,249.8,20.9z M231.8,43.5l-8.9-12.2 l15-1.6L231.8,43.5z">
                    </path>
                  </g>
                </g>
              </svg></span>
            <span> Marketing Research</span>
          </a>
          <a href="<?php echo home_url('/business-partnership'); ?>">
            <span class="icon"><svg fill="#fff" version="1.1" id="Layer_1_1_" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" xml:space="preserve" stroke="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path
                      d="M48,34c0-0.265-0.105-0.52-0.293-0.707L47.414,33l0.293-0.293C47.895,32.52,48,32.265,48,32v-3.586l11.707-11.707 l-1.414-1.414L52,21.586L42.414,12l6.293-6.293l-1.414-1.414L35.586,16H32c-0.265,0-0.52,0.105-0.707,0.293L31,16.586l-0.293-0.293 l-0.379-0.379l-3.621-3.621C26.52,12.105,26.265,12,26,12h-1.586l-7.707-7.707l-1.414,1.414L17.586,8L8,17.586l-2.293-2.293 l-1.414,1.414L12,24.414V30c0,0.265,0.105,0.52,0.293,0.707L15,33.414v3.172L4.293,47.293l1.414,1.414L11,43.414L20.586,53 l-5.293,5.293l1.414,1.414L27.414,49H31c0.265,0,0.52-0.105,0.707-0.293L32.414,48h3.172l11.707,11.707l1.414-1.414L42.414,52 L52,42.414l6.293,6.293l1.414-1.414L48,35.586V34z M41,13.414L50.586,23L47,26.586L37.414,17L41,13.414z M35.586,18L46,28.414 v3.172L32.414,18H35.586z M46,34.414v1.172L35.586,46h-3.172L27,40.586v-1.172l1.293,1.293l1.414-1.414L18.328,27.914 C18.117,27.702,18,27.421,18,27.121C18,26.503,18.503,26,19.121,26c0.3,0,0.581,0.117,0.793,0.328l7.379,7.379l1.414-1.414 l-7.379-7.379C21.117,24.702,21,24.421,21,24.121C21,23.503,21.503,23,22.121,23c0.3,0,0.581,0.117,0.793,0.328l7.379,7.379 l1.414-1.414l-7.379-7.379C24.117,21.702,24,21.421,24,21.121C24,20.503,24.503,20,25.121,20c0.3,0,0.581,0.117,0.793,0.328 l7.379,7.379l1.414-1.414l-7.379-7.379C27.117,18.702,27,18.421,27,18.121C27,17.503,27.503,17,28.121,17 c0.3,0,0.581,0.117,0.793,0.328l0.379,0.379L46,34.414z M19,9.414L22.586,13L13,22.586L9.414,19L19,9.414z M14,24.414L24.414,14 h1.172l1.272,1.272c-1.06,0.472-1.804,1.516-1.847,2.739c-1.632,0.058-2.942,1.368-3,3c-1.632,0.058-2.942,1.368-3,3 C17.342,24.07,16,25.438,16,27.121c0,0.834,0.325,1.618,0.914,2.207L17.586,30L16,31.586l-2-2V24.414z M22,51.586L12.414,42 L16,38.414L25.586,48L22,51.586z M27.414,47L17,36.586v-3.172l2-2l6,6V41c0,0.265,0.105,0.52,0.293,0.707L30.586,47H27.414z M41,50.586L37.414,47L47,37.414L50.586,41L41,50.586z">
                    </path>
                    <rect x="44.586" y="41" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -16.2254 44.8284)"
                      width="2.828" height="2"></rect>
                    <rect x="20" y="45.586" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -27.0833 28.6152)"
                      width="2" height="2.828"></rect>
                    <rect x="16.586" y="13" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.6274 16.8284)"
                      width="2.828" height="2"></rect>
                    <rect x="41" y="16.586" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.4264 34.9706)"
                      width="2" height="2.828"></rect>
                  </g>
                </g>
              </svg></span>
            <span> Business Partnership</span>
          </a>
          <a href="<?php echo home_url('/advertising-with-us'); ?>">
            <span class="icon"><svg viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Layer_1" version="1.1"
                xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                fill="#fff" stroke="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g id="advertising_1_">
                    <path
                      d="M23.5,17.092c-0.055,0-0.111-0.009-0.165-0.028C23.134,16.994,23,16.805,23,16.592V13h-2.5 c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v2.658l2.358-2.969C26.453,12.069,26.598,12,26.75,12 h2.75c0.276,0,0.5-0.225,0.5-0.5v-9C30,2.225,29.776,2,29.5,2h-15C14.224,2,14,2.225,14,2.5v9c0,0.275,0.224,0.5,0.5,0.5h2 c0.276,0,0.5,0.224,0.5,0.5S16.776,13,16.5,13h-2c-0.827,0-1.5-0.673-1.5-1.5v-9C13,1.673,13.673,1,14.5,1h15 C30.327,1,31,1.673,31,2.5v9c0,0.827-0.673,1.5-1.5,1.5h-2.509l-3.1,3.902C23.795,17.024,23.649,17.092,23.5,17.092z"
                      fill="#fff"></path>
                    <g>
                      <g>
                        <g>
                          <path
                            d="M18.5,17.996v1c1.103,0,2,0.897,2,2s-0.897,2-2,2v1c1.654,0,3-1.346,3-3S20.154,17.996,18.5,17.996z"
                            fill="#fff"></path>
                        </g>
                        <path
                          d="M6.927,24.563l0.485,5.135l-1.519,0.305L5.865,30.03l-0.839-5.468h-1.01l0.873,5.673 c0.12,0.451,0.532,0.767,1.002,0.767c0.065,0,0.132-0.006,0.198-0.02l1.519-0.305c0.264-0.052,0.489-0.204,0.636-0.428 c0.147-0.224,0.197-0.491,0.15-0.696l-0.465-4.991H6.927z" fill="#fff"></path>
                        <g>
                          <path
                            d="M8.5,18C8.224,18,8,17.776,8,17.5S8.224,17,8.5,17c2.556,0,5.222-0.97,7.709-2.806 c0.223-0.163,0.535-0.116,0.699,0.105c0.164,0.223,0.117,0.535-0.105,0.699C14.143,16.962,11.271,18,8.5,18z"
                            fill="#fff"></path>
                          <path
                            d="M18.5,29.607c-0.135,0-0.271-0.055-0.369-0.163c-0.041-0.044-4.137-4.448-9.668-4.448H3.375 C2.11,24.996,1,23.881,1,22.609v-3.252c0-1.28,1.088-2.361,2.375-2.361L6.5,17C6.777,17,7,17.225,7,17.501 C7,17.776,6.776,18,6.5,18h0l-3.125-0.004C2.63,17.996,2,18.619,2,19.357v3.252c0,0.726,0.656,1.387,1.375,1.387h5.087 c5.981,0,10.229,4.579,10.407,4.774c0.186,0.204,0.172,0.52-0.032,0.706C18.741,29.563,18.621,29.607,18.5,29.607z"
                            fill="#fff"></path>
                        </g>
                        <rect fill="#fff" height="6.918" width="1" x="8" y="17.537"></rect>
                        <g>
                          <path
                            d="M18.5,29.996c-0.276,0-0.5-0.224-0.5-0.5v-17c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v17 C19,29.772,18.776,29.996,18.5,29.996z"
                            fill="#fff"></path>
                        </g>
                        <g>
                          <path
                            d="M4.5,22h-1C3.224,22,3,21.776,3,21.5S3.224,21,3.5,21h1C4.776,21,5,21.224,5,21.5S4.776,22,4.5,22z"
                            fill="#fff"></path>
                        </g>
                        <g>
                          <path
                            d="M4.5,20h-1C3.224,20,3,19.776,3,19.5S3.224,19,3.5,19h1C4.776,19,5,19.224,5,19.5S4.776,20,4.5,20z"
                            fill="#fff"></path>
                        </g>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M19,10.5l6-7L19,10.5z" fill="#fff"></path>
                        <path
                          d="M19,11c-0.115,0-0.231-0.039-0.325-0.12c-0.21-0.18-0.234-0.496-0.054-0.705l6-7 c0.181-0.21,0.496-0.233,0.705-0.055c0.21,0.18,0.234,0.496,0.054,0.705l-6,7C19.281,10.94,19.141,11,19,11z"
                          fill="#fff"></path>
                      </g>
                      <path
                        d="M24.5,11c-0.451,0-1.5-0.195-1.5-2c0-1.74,0.94-2,1.5-2S26,7.26,26,9C26,10.805,24.951,11,24.5,11z M24.5,8C24.313,8,24,8,24,9s0.363,1,0.5,1S25,10,25,9S24.687,8,24.5,8z"
                        fill="#fff"></path>
                      <path
                        d="M19.5,7C19.049,7,18,6.805,18,5c0-1.74,0.94-2,1.5-2S21,3.26,21,5C21,6.805,19.951,7,19.5,7z M19.5,4 C19.313,4,19,4,19,5s0.363,1,0.5,1S20,6,20,5S19.687,4,19.5,4z"
                        fill="#fff"></path>
                    </g>
                  </g>
                </g>
              </svg></span>
            <span> Advertising with Us</span>
          </a>
          <a href="<?php echo home_url('/logistic-advising'); ?>">
            <span class="icon"><svg viewBox="0 -2 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path id="consultation"
                    d="M440.618,340.924A.994.994,0,0,1,440,340V308a5.005,5.005,0,0,1,5-5h1v-1a5.005,5.005,0,0,1,5-5h32a5.005,5.005,0,0,1,5,5v22a5.005,5.005,0,0,1-5,5h-1v1a5.005,5.005,0,0,1-5,5H447.414l-5.707,5.707A.994.994,0,0,1,441,341,.981.981,0,0,1,440.618,340.924ZM442,308v29.586l4.293-4.292A1,1,0,0,1,447,333h30a3,3,0,0,0,3-3V308a3,3,0,0,0-3-3H445A3,3,0,0,0,442,308Zm5-6v1h30a5.005,5.005,0,0,1,5,5v20h1a4,4,0,0,0,4-4V302a4,4,0,0,0-4-4H451A4,4,0,0,0,447,302Zm4,21a1,1,0,0,1,0-2h20a1,1,0,0,1,0,2Zm0-6a1,1,0,1,1,0-2h20a1,1,0,0,1,0,2Z"
                    transform="translate(-440 -297)" fill="#fff"></path>
                </g>
              </svg></span>
            <span> Logistic Advising</span>
          </a>

        </div>

      </div>

      <div class="service-singup">
        <h3>Sign up now and start using our services — fast, easy, and free to join!</h3>
        <a href="#">Join Us Now</a>
      </div>

    </div>

  </div>
</section>

<section class="ads-banner">
  <div class="container">
    <div class="row ads-banner-img">
      <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/banners-tk.jpg" alt="Ads Banner Image">
      <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/bcm-banner.jpg" alt="Ads Banner Image">
    </div>
  </div>
</section>

<section class="vip-supplier">
  <div class="container">
    <h2 class="section-title">VIP Supplier</h2>
    <div class="swiper vip-supplier-carousel">
      <div class="swiper-wrapper">

        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img1.webp" alt="User Image">
            <h3>Gloria Folkhensio</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img4.webp" alt="User Image">
            <h3>Liam Hardly</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img2.webp" alt="User Image">
            <h3>James Carly</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img3.webp" alt="User Image">
            <h3>Sara Oberian</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img4.webp" alt="User Image">
            <h3>Fred Marly</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img1.webp" alt="User Image">
            <h3>Ali Rasoli</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img2.webp" alt="User Image">
            <h3>Maryam Marly</h3>
          </div>

        </div>
        <div class="swiper-slide">

          <div class="user-item">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/user-img4.webp" alt="User Image">
            <h3>James Carly</h3>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<section class="product-grid-section">
  <div class="container">

    <div class="section-title">
      <h2>Explore Our Products</h2>
      <a href="#" class="btn">
        <span>View All</span>
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 
                  20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 
                  12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#fff"></path>
          </g>
        </svg>
      </a>
    </div>

    <div class="product-grid">

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$9.99</span>
              <span class="old-price">$11.99</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$12.99</span>
              <span class="old-price">$14.50</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$8.75</span>
              <span class="old-price">$9.50</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$10.99</span>
              <span class="old-price">$12.25</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
          </div>
          <div class="product-image">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/walnut.webp" alt="Golden Walnuts">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★★</span>
            <span class="rating">(5.0)</span>
          </div>
          <h3 class="product-title">Golden Walnuts</h3>
          <!-- <div class="product-price">
              <span class="new-price">$11.50</span>
              <span class="old-price">$13.00</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
            <span class="badge discount">-20%</span>
          </div>
          <div class="product-image">
            <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/product/quality/Macadamia.webp" alt="Macadamia Bliss">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★☆</span>
            <span class="rating">(4.3)</span>
          </div>
          <h3 class="product-title">Macadamia Bliss</h3>
          <!-- <div class="product-price">
              <span class="new-price">$14.99</span>
              <span class="old-price">$18.50</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$9.99</span>
              <span class="old-price">$11.99</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$12.99</span>
              <span class="old-price">$14.50</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$8.75</span>
              <span class="old-price">$9.50</span>
            </div> -->
        </a>
      </div>

      <div class="product-card">
        <a href="./product.php">
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
          <!-- <div class="product-price">
              <span class="new-price">$10.99</span>
              <span class="old-price">$12.25</span>
            </div> -->
        </a>
      </div>

    </div>

  </div>
</section>

<section class="data-analytics" id="data-analytic">
  <div class="container">


    <div class="row">
      <div class="analytic">
        <p>Market Overview
          <span>Stay informed with the latest trends, prices, and insights from global markets.</span>
        </p>
        <p>Data & Analytics
          <span>Make smarter decisions with real-time data, charts, and performance metrics.</span>
        </p>
        <p>Trade with awareness....
          <span>Understand the market before you act—trade confidently with expert guidance.</span>
        </p>
        </h2>
      </div>

      <div class="analytic-btn">
        <p>
          <span class="icon"><svg width="45px" height="45px" fill="#000000" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
              strock-width="2">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g id="b">
                  <path
                    d="M53.2676,21.2861c-1.0825-.6357-2.3833-.6509-3.4761-.0396-2.353,1.3145-4.3789,2.7593-6.021,4.2944-.4897,.457-.7705,1.1182-.7705,1.814v26.145c0,.8271,.6729,1.5,1.5,1.5h9c.8271,0,1.5-.6729,1.5-1.5V24.3076c0-1.2554-.6475-2.3848-1.7324-3.0215Zm.7324,32.2139c0,.2759-.2241,.5-.5,.5h-9c-.2759,0-.5-.2241-.5-.5V27.355c0-.4194,.165-.8145,.4531-1.0835,1.5835-1.48,3.5435-2.877,5.8257-4.1519,.3818-.2129,.7988-.3193,1.2153-.3193,.436,0,.8721,.1162,1.2676,.3481,.7754,.4556,1.2383,1.2627,1.2383,2.1592v29.1924Zm-17.7324-22.2139c-1.083-.6357-2.3828-.6509-3.4761-.0396-2.353,1.3145-4.3789,2.7593-6.021,4.2944-.4897,.457-.7705,1.1182-.7705,1.814v16.145c0,.8271,.6729,1.5,1.5,1.5h9c.8271,0,1.5-.6729,1.5-1.5v-19.1924c0-1.2554-.6475-2.3848-1.7324-3.0215Zm.7324,22.2139c0,.2759-.2241,.5-.5,.5h-9c-.2759,0-.5-.2241-.5-.5v-16.145c0-.4194,.165-.8145,.4531-1.0835,1.5835-1.48,3.5435-2.877,5.8257-4.1519,.3818-.2129,.7988-.3193,1.2153-.3193,.436,0,.8721,.1162,1.2676,.3481,.7754,.4556,1.2383,1.2627,1.2383,2.1592v19.1924Zm-17.7324-13.2139c-1.0835-.6357-2.3833-.6509-3.4761-.0396-2.353,1.3145-4.3789,2.7593-6.021,4.2944-.4897,.457-.7705,1.1182-.7705,1.814v7.145c0,.8271,.6729,1.5,1.5,1.5h9c.8271,0,1.5-.6729,1.5-1.5v-10.1924c0-1.2554-.6475-2.3848-1.7324-3.0215Zm.7324,13.2139c0,.2759-.2241,.5-.5,.5H10.5c-.2759,0-.5-.2241-.5-.5v-7.145c0-.4194,.165-.8145,.4531-1.0835,1.5835-1.48,3.5435-2.877,5.8257-4.1519,.3818-.2129,.7988-.3193,1.2153-.3193,.436,0,.8721,.1162,1.2676,.3481,.7754,.4556,1.2383,1.2627,1.2383,2.1592v10.1924ZM43.6836,20.1655c.3647-3.4077,.4043-6.7339,.1177-9.8862-.0664-.7373-.6958-1.2827-1.4419-1.272-3.7036,.1211-7.1143,.7529-10.1372,1.8789-.5161,.1924-.8765,.6313-.9644,1.1743-.0869,.54,.1152,1.0674,.542,1.4097l1.6562,1.3315c-.9927,1.4741-5.3232,7.1528-14.8311,10.1787-1.1265,.3579-2.333,.6167-3.4995,.8667-3.2983,.7065-6.4131,1.3745-6.0996,4.1621,.0684,.6157,.4351,1.4844,1.7964,2.125,1.188,.5591,2.9023,.8423,4.8721,.8423,4.1152,0,9.3442-1.2358,13.21-3.7739,6.1064-4.0073,9.9341-7.9927,11.0273-9.1943l1.4014,1.1226c.4146,.3335,.9805,.4111,1.4722,.2065,.4937-.2056,.8223-.6436,.8784-1.1719Zm-.9941-.1064c-.0244,.23-.1958,.3252-.2686,.3555-.1582,.0654-.3306,.042-.4629-.064l-1.772-1.4199c-.2114-.1699-.5195-.1392-.6943,.0674-.0391,.0464-3.9951,4.6826-11.1362,9.3687-5.3623,3.5215-13.7422,4.4468-17.1074,2.8628-.7568-.356-1.1699-.8037-1.228-1.3315-.2026-1.7969,1.8877-2.3384,5.3149-3.0732,1.1899-.2549,2.4204-.5186,3.5933-.8911,11.3286-3.6055,15.4551-10.6943,15.6255-10.9946,.1206-.2134,.0693-.4829-.1221-.6362l-2.0059-1.6118c-.2051-.165-.1943-.3843-.1807-.4707,.0142-.0884,.0747-.3032,.3257-.3965,2.9219-1.0884,6.2261-1.6997,9.8208-1.8174h.0122c.2046,0,.3833,.1602,.4014,.3628v.0005c.2808,3.0869,.2422,6.3472-.1157,9.6895Z">
                  </path>
                </g>
              </g>
            </svg></span>
          <span>Stay ahead with real-time market insights, powerful analytics, and smarter trading strategies.
            Everything you need to trade with confidence—right at your fingertips.</span>
        </p>
        <a href="#">Get Started Now</a>
      </div>

    </div>



  </div>
  </div>
</section>

<!-- <section class="blog-section" aria-labelledby="latest-posts">
    <div class="container">
      
        <div class="news">

          <div class="section-title">
            <h2>Latest News</h2>
            <a class="btn">
              <span>View All</span>
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 
                    20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 
                    12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
                    fill="#fff"></path>
                </g>
              </svg>
            </a>
          </div>
    
          <div class="swiper blog-carousel">
            <div class="swiper-wrapper">
              
              <?php
              // WP Query to fetch latest blog posts
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6, // Change this as needed
              );

              $blog_query = new WP_Query($args);

              if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
              ?>

              <div class="swiper-slide">
                <div class="blog-card">
                  <a href="<?php the_permalink(); ?>">

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                    <?php else : ?>
                        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/main-logo.png" alt="No image">
                    <?php endif; ?>

                    <div class="blog-content">
                      <h3><?php the_title(); ?></h3>
    
                      <div class="blog-meta">
                        <span>
                          <svg fill="#00a055" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 465 465" stroke="#000000" stroke-width="0.00465">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g>
                                <path
                                  d="M142.5,35H345v47.5c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5V27.51l0-0.01l0-0.01V7.5c0-4.143-3.358-7.5-7.5-7.5 S345,3.357,345,7.5V20H142.5c-4.142,0-7.5,3.357-7.5,7.5S138.358,35,142.5,35z">
                                </path>
                                <path
                                  d="M432.5,20h-50c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H425v95H40V35h65v47.5c0,4.143,3.358,7.5,7.5,7.5 s7.5-3.357,7.5-7.5v-75c0-4.143-3.358-7.5-7.5-7.5S105,3.357,105,7.5V20H32.5c-4.142,0-7.5,3.357-7.5,7.5v370 
                            c0,4.143,3.358,7.5,7.5,7.5h330c0.251,0,0.501-0.013,0.749-0.038c0.186-0.019,0.368-0.05,0.549-0.082 c0.059-0.01,0.119-0.015,0.178-0.026c0.214-0.043,0.423-0.099,0.63-0.158c0.026-0.008,0.054-0.013,0.08-0.021 
                            c0.208-0.063,0.41-0.138,0.609-0.218c0.027-0.011,0.054-0.019,0.081-0.029c0.189-0.079,0.371-0.168,0.552-0.261 c0.037-0.02,0.076-0.035,0.112-0.055c0.165-0.088,0.323-0.187,0.48-0.287c0.05-0.031,0.102-0.059,0.151-0.092 
                            c0.146-0.098,0.285-0.205,0.423-0.313c0.055-0.043,0.113-0.081,0.167-0.125c0.169-0.139,0.33-0.287,0.486-0.439 c0.018-0.019,0.039-0.033,0.057-0.052l70-70c0.015-0.015,0.027-0.031,0.042-0.046c0.157-0.16,0.308-0.324,0.451-0.498 
                            c0.039-0.047,0.071-0.098,0.109-0.145c0.114-0.146,0.227-0.292,0.33-0.446c0.028-0.041,0.05-0.085,0.077-0.127 c0.106-0.164,0.209-0.331,0.301-0.504c0.017-0.03,0.029-0.063,0.045-0.094c0.096-0.187,0.188-0.375,0.269-0.569 
                            c0.009-0.022,0.015-0.045,0.024-0.066c0.082-0.204,0.159-0.411,0.223-0.623c0.008-0.025,0.012-0.052,0.02-0.077 c0.061-0.208,0.116-0.418,0.159-0.632c0.012-0.061,0.017-0.122,0.028-0.183c0.031-0.181,0.063-0.36,0.081-0.545 
                            c0.025-0.248,0.038-0.498,0.038-0.749v-300C440,23.357,436.642,20,432.5,20z M40,145h385v175h-62.5c-4.142,0-7.5,3.357-7.5,7.5V390 H40V145z M414.394,335L370,379.394V335H414.394z">
                                </path>
                                <path
                                  d="M432.5,450h-400c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h400c4.142,0,7.5-3.357,7.5-7.5S436.642,450,432.5,450z">
                                </path>
                                <path
                                  d="M432.5,350c-4.142,0-7.5,3.357-7.5,7.5V420H40v-2.5c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v10 c0,4.143,3.358,7.5,7.5,7.5h400c4.142,0,7.5-3.357,7.5-7.5v-70C440,353.357,436.642,350,432.5,350z">
                                </path>
                                <path d="M288.954,207.071c-2.801-1.16-6.028-0.521-8.173,1.625l-21.4,21.399c-2.929,2.93-2.929,7.678,0,10.607 c2.929,2.928,7.678,2.928,10.606,0l8.597-8.597V321c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5V214 
                            C293.583,210.967,291.756,208.231,288.954,207.071z"></path>
                                <path
                                  d="M206.8,206.5c-19.511,0-35.384,15.873-35.384,35.384c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5 c0-11.239,9.144-20.384,20.384-20.384c11.239,0,20.383,9.145,20.383,20.384c0,8.15-4.839,15.502-12.329,18.729 
                            c-2.751,1.185-4.533,3.893-4.533,6.888s1.782,5.703,4.533,6.888c7.489,3.227,12.329,10.578,12.329,18.729 c0,11.239-9.144,20.384-20.383,20.384c-11.24,0-20.384-9.145-20.384-20.384c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5 
                            c0,19.511,15.873,35.384,35.384,35.384c19.51,0,35.383-15.873,35.383-35.384c0-9.866-4.085-19.058-10.966-25.616 c6.881-6.559,10.966-15.75,10.966-25.616C242.184,222.373,226.311,206.5,206.8,206.5z">
                                </path>
                              </g>
                            </g>
                          </svg>
                          <?php echo get_the_date(); ?>
                        </span>
                        <span>
                          <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                              <g id="Iconly/Curved/Category">
                                <g id="Category">
                                  <path id="Stroke 1" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 
                            10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#00a055" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 6.6738C10.3467 8.7024 8.7024 
                            10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#00a055"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 5" fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 
                            17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 
                            13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#00a055" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path id="Stroke 7" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 
                            17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#00a055" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </g>
                              </g>
                            </g>
                          </svg>

                          <?php
                          $category = get_the_category();
                          if (!empty($category)) {
                            echo esc_html($category[0]->name);
                          }
                          ?>

                        </span>
                      </div>
    
                      <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
    
                    </div>

                  </a>
                </div>
              </div>

              <?php endwhile;
                wp_reset_postdata();
              else : ?>
                  <p>No blog posts found.</p>
              <?php endif; ?>
              
            </div>
    
            <div class="swiper-button swiper-button-next blog-next"></div>
            <div class="swiper-button swiper-button-prev blog-prev"></div>
    
          </div>

        </div>          

    </div>
  </section>-->

<section class="events-section">
  <div class="container">
    <div class="events-news">

      <div class="event-carousel">

        <div class="section-title">
          <h2>Food Events & Exhibitions</h2>
          <a class="btn">
            <span>More Events</span>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 
                    20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 
                    12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
                  fill="#fff"></path>
              </g>
            </svg>
          </a>
        </div>

        <div class="swiper event-swiper">
          <div class="swiper-wrapper event-wrapper">

            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img4.webp" alt="Event Image">
                </div>
                <div class="event-content">
                  <h3>Future Food-Tech London</h3>
                  <p class="event-date"><strong>Date:</strong> Sept 24–25, 2025</p>
                  <p class="event-location"><strong>Location:</strong> London, UK</p>
                  <p class="event-note">Networking summit for food innovation & B2B collaboration.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img5.webp" alt="Event Image">
                </div>
                <div class="event-content">
                  <h3>IFT First Expo</h3>
                  <p class="event-date"><strong>Date:</strong> July 14–17, 2025</p>
                  <p class="event-location"><strong>Location:</strong> Chicago, USA</p>
                  <p class="event-note">Science-based food innovation and supplier interaction.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img2.jpg" alt="Event Image">
                </div>
                <div class="event-content">
                  <h3>Asia-Pacific Agri-Food Summit</h3>
                  <p class="event-date"><strong>Date:</strong> Nov 4–5, 2025</p>
                  <p class="event-location"><strong>Location:</strong> Singapore</p>
                  <p class="event-note">Targeted agri-food B2B matchmaking and innovation exchange.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img1.webp" alt="Event Image">
                </div>
                <div class="event-content">
                  <h3>Anuga FoodTec</h3>
                  <p class="event-date"><strong>Date:</strong> March 19–22, 2027</p>
                  <p class="event-location"><strong>Location:</strong> Cologne, Germany</p>
                  <p class="event-note">Tech & automation trade fair for global food suppliers.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img3.webp" alt="Asiafruit Congress">
                </div>
                <div class="event-content">
                  <h3>Asia Fruit Congress</h3>
                  <p class="event-date"><strong>Date:</strong> Sept 3–5, 2025</p>
                  <p class="event-location"><strong>Location:</strong> Hong Kong, China</p>
                  <p class="event-note">Premier fresh produce event in Asia connecting buyers, growers & tech leaders.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="event-item">
                <div class="event-img">
                  <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/events/quality/event-img6.webp" alt="Global Organic Expo">
                </div>
                <div class="event-content">
                  <h3>Global Organic Expo 2025</h3>
                  <p class="event-date"><strong>Date:</strong> Nov 20–22, 2025</p>
                  <p class="event-location"><strong>Location:</strong> New Delhi, India</p>
                  <p class="event-note">Showcase of organic innovations, certifications, and international trade opportunities.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>