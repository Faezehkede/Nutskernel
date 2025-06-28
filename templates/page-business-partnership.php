<?php

/**
 * Template Name: Business Partnership
 * Template Post Type: page
 */

get_header();
?>

  <main class="container business-partnership">
    <section class="partnership">
      <h1>Find Business Partner – Connect with Trusted Suppliers & Buyers Worldwide</h1>
      <p>At AgriFoodz, we understand that finding the right business partner is essential for long-term success in the food and agriculture industry. That’s why we’ve launched our “Find Business Partner” service — a dedicated solution for companies and brokers who are actively seeking reliable suppliers, producers, exporters, or distributors across the globe.</p>
      <p>Whether you're a buyer looking for Medjool date producers in North Africa, a supplier searching for international distribution channels, or a trader aiming to expand into new markets, our platform helps you connect with verified, trusted, and strategically matched partners.</p>
    </section>

    <section class="our-goul">
      <h2>Our Goal</h2>
      <p>To facilitate smart partnerships by bridging the gap between global demand and supply — creating new trade opportunities for food and agricultural businesses of all sizes.</p>
    </section>

    <section class="offer-services">
      <h2>What This Service Offers</h2>
      <ul>
        <li>A growing network of verified producers, exporters, and buyers</li>
        <li>Tailored matchmaking based on product type, region, and business needs</li>
        <li>Support for brokers, agents, and traders looking to source or represent products</li>
        <li>Opportunities to collaborate on long-term supply agreements</li>
        <li>Insight into regional capabilities and supplier capacities</li>
      </ul>
    </section>

    <section class="partnership-request">
      <h2>Submit Your Partnership Request</h2>
      <form>
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="company">Company Name</label>
        <input type="text" id="company" name="company" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="role">Your Role</label>
        <select id="role" name="role" required>
          <option value="">Select One</option>
          <option value="buyer">Buyer</option>
          <option value="supplier">Supplier</option>
          <option value="broker">Broker / Trader</option>
          <option value="other">Other</option>
        </select>

        <label for="productInterest">Product(s) of Interest</label>
        <input type="text" id="productInterest" name="productInterest" placeholder="e.g. Medjool dates, almonds, chickpeas" required>

        <label for="region">Preferred Region(s)</label>
        <input type="text" id="region" name="region" placeholder="e.g. North Africa, Europe, Southeast Asia">

        <label for="details">Partnership Details / Requirements</label>
        <textarea id="details" name="details" rows="5" placeholder="Describe what kind of partner you’re looking for, target markets, volumes, etc." required></textarea>

        <button type="submit">Submit Request</button>
      </form>
    </section>
  </main>

  <?php get_footer(); ?>
