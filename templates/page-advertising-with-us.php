<?php

/**
 * Template Name: Advertising with Us
 * Template Post Type: page
 */

get_header();
?>

<section class="page-banner">
  <div class="container">
    <div class="page-banner-content">
      <div class="page-banner-title">
      <h1>Advertise on AgriFoodz</h1>
      </div>
      <div class="page-banner-img">
        <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/page-title4.webp" alt="Page Title">
      </div>

    </div>
  </div>
</section>

  <main class="container advertising-with-us">
    <section class="advertising-main">
      
      <p>Reach your target audience directly on one of the leading B2B platforms for food and agriculture products. Whether you're a supplier, exporter, or service provider, showcasing your brand on our website puts you in front of serious buyers and business partners from around the world.</p>
      <p>Submit your request today to display your company name, banner, or promotional link and grow your visibility in a trusted industry network.</p>
      <p><strong>👉 Contact us now to get started!</strong></p>
    </section>

    <section class="advertise-form">
      <form>
        <label for="adsName">Full Name</label>
        <input type="text" id="adsName" name="adsName" required>

        <label for="adsCompany">Company Name</label>
        <input type="text" id="adsCompany" name="adsCompany" required>

        <label for="adsEmail">Email Address</label>
        <input type="email" id="adsEmail" name="adsEmail" required>

        <label for="adType">Advertising Type</label>
        <select id="adType" name="adType" required>
          <option value="">Select One</option>
          <option value="banner">Banner</option>
          <option value="text">Text Link</option>
          <option value="sponsorship">Sponsored Article</option>
          <option value="other">Other</option>
        </select>

        <label for="adDetails">Advertising Message / Target Audience</label>
        <textarea id="adDetails" name="adDetails" rows="5" placeholder="Tell us where and how you'd like to promote your brand." required></textarea>

        <button type="submit">Submit Advertising Request</button>
      </form>
    </section>
  </main>

  <?php get_footer(); ?>
