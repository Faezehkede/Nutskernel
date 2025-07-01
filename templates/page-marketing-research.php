<?php

/**
 * Template Name: Marketing Research
 * Template Post Type: page
 */

get_header();
?>


<main class="container marketing-research">

<section class="page-banner">
  <div class="container">
    <div class="page-banner-content">
      <div class="page-banner-title">
      <h1>Market Insights & Analytics for Food and Agriculture Products</h1>
      <p>At AgriFoodz, we provide reliable, data-driven insights into the global food and agriculture market to help you make informed decisions.</p>

      </div>
      <div class="page-banner-img">
        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/page-title3.webp" alt="Page Title">
      </div>

    </div>
  </div>
</section> 

    <section class="features-section">
        <h2>What You’ll Find Here</h2>
        <ul>
            <li>Historical and real-time price trends</li>
            <li>Export/import data by region and product</li>
            <li>Production statistics and seasonal forecasts</li>
            <li>Insights on supply chain movements and market opportunities</li>
            <li>Comparative analytics between different markets and product categories</li>
        </ul>
    </section>

    <section class="feed-grid">
        <div class="marketing-card">
            <div class="card-body">
                <div class="card-title">W26 2025 Banana Weekly Update</div>
                <div class="card-text">Exports from Ecuador rose significantly while local prices stabilized.</div>
                <div class="card-tags">#Banana #Ecuador #Trends</div>
            </div>
        </div>

        <div class="marketing-card">
            <div class="card-body">
                <div class="card-title">100% Natural Rice Pasta</div>
                <div class="card-text">Produced without any toxic chemicals. Great for a healthy lifestyle.</div>
                <div class="card-tags">#Rice #Organic #Healthy</div>
            </div>
        </div>

        <div class="marketing-card">
            <div class="card-body">
                <div class="card-title">Liberty Exports - Quality from Farm</div>
                <div class="card-text">Fresh produce sourced directly from farms with sustainable practices.</div>
                <div class="card-tags">#Fresh #Farm #Export</div>
            </div>
        </div>

        <div class="marketing-card">
            <div class="card-body">
                <div class="card-title">W26 2025 Wheat Weekly Update</div>
                <div class="card-text">Recovery in global wheat production expected in the coming season.</div>
                <div class="card-tags">#Wheat #Grain #SupplyChain</div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>