<?php

/**
 * Template Name: Subscription Plans
 * Template Post Type: page
 */

get_header();
?>

<section class="subscription-plans container">
  <h2>Your Free Membership Has Ended!</h2>
  <div class="countdown-timer">
    <span>Discount available for:</span>
    <div class="timer">
      <span>00</span> : <span>56</span> : <span>24</span>
    </div>
  </div>

  <div class="plans-wrapper">
    <!-- 12 Month Plan -->
    <div class="plan">
      <span class="badge">30% OFF</span>
      <h3>12 Months</h3>
      <p class="price">$69.30</p>
      <p class="original-price">$99</p>
      <button>Select & Pay</button>
      <ul>
        <li>Unlimited product listings</li>
        <li>Access to all buyers</li>
        <li>Contact premium buyers</li>
        <li>Priority product visibility</li>
        <li>Special seller badge</li>
        <li>Support</li>
        <li>5 product video uploads <span class="new">New</span></li>
      </ul>
    </div>

    <!-- 6 Month Plan -->
    <div class="plan featured">
      <span class="badge">40% OFF</span>
      <h3>6 Months + 1 Free Month</h3>
      <p class="price">$45.00</p>
      <p class="original-price">$75</p>
      <!-- <span class="tagline">Top Ranking on Google</span> -->
      <button>Select & Pay</button>
      <ul>
        <li>Unlimited product listings</li>
        <li>Access to all buyers</li>
        <li>Contact premium buyers</li>
        <li>Priority product visibility</li>
        <li>Special seller badge</li>
        <li>Support</li>
        <li>2 product video uploads <span class="new">New</span></li>
      </ul>
    </div>

    <!-- 2 Month Plan -->
    <div class="plan">
      <span class="badge">50% OFF</span>
      <h3>3 Months</h3>
      <p class="price">$24.50</p>
      <p class="original-price">$49</p>
      <button>Select & Pay</button>
      <ul>
        <li>Unlimited product listings</li>
        <li>Access to all buyers</li>
        <li>Contact premium buyers</li>
        <li>Priority product visibility</li>
        <li>Special seller badge</li>
        <li>Support</li>
        <li>1 product video upload <span class="new">New</span></li>
      </ul>
    </div>
  </div>

  <div class="payment-help">
    <h2>Can't Pay with the Current Method?</h2>
    <p>If you're having trouble with our payment options, no worries. Just fill out the form below and we’ll help you with an alternative solution.</p>

    <form action="/submit-help-request" method="post" class="help-form">
      <label for="name">Full Name*</label><br>
      <input type="text" id="name" name="name" required><br><br>

      <label for="email">Email*</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="message">Your Message</label><br>
      <textarea id="message" name="message" rows="4" required></textarea><br><br>

      <button type="submit">Send Request</button>
    </form>

    <p>Or contact us via <a href="https://t.me/agrifoodz" target="_blank">Telegram</a> or email us at <a href="mailto:info@agrifoodz.com">info@agrifoodz.com</a>.</p>

  </div>
</section>



<?php get_footer(); ?>