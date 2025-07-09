<section class="section third-section form-section">
  <div class="container">
    <div class="inner-wrapper">
      <div class="form-wrapper">
        <h2>Send one request, receive multiple offers!</h2>
        <p>Connect with thousands of suppliers and compare the best prices.</p>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
          <input type="hidden" name="action" value="handle_request_form">

          <label>Product Category: *</label>
          <input type="text" name="category" required placeholder='Example: "Strawberries"' />

          <label>Product Type:</label>
          <input type="text" name="type" placeholder='Example: "Camarosa"' />

          <label>Required Quantity (kg): *</label>
          <input type="text" name="quantity" required placeholder='Example: "50,000"' />

          <button class="btn" type="submit">Contact Supplier</button>
        </form>
      </div>

      <!-- Optional side content... -->
    </div>
  </div>
</section>
