<div class="form-wrapper">
  <h2>Send one request, receive multiple offers!</h2>
  <p>Connect with thousands of suppliers and compare the best prices.</p>

  <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="hidden" name="action" value="handle_request_form">

    <label>Product Category: *</label>
    <input type="text" name="category_name" id="category_name" readonly placeholder="Choose category..." onclick="openCategoryModal()" />
    <input type="hidden" name="selected_category_id" id="selected_category_id" />


    <label>Product Type:</label>
    <input type="text" name="type" placeholder='Example: "Camarosa"' />

    <label>Required Quantity (kg): *</label>
    <input type="text" name="quantity" required placeholder='Example: "50,000"' />

    <button class="btn" type="submit">Contact Supplier</button>
  </form>
</div>


<div id="category-modal" class="category-modal" style="display:none;">
  <div class="category-modal-content">
    <span class="close-modal" onclick="closeCategoryModal()">
      <svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path d="M3 21.32L21 3.32001" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M3 3.32001L21 21.32" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
      </svg>
    </span>
    <h3>Select Category</h3>

    <input type="text" id="category-search" placeholder="Search categories..." />

    <div id="back-button" class="back-button" style="display:none;" onclick="goBack()">← Back</div>

    <div id="loading-indicator" style="display:none; text-align:center; margin: 20px 0;">
      <span class="dot dot1">.</span>
      <span class="dot dot2">.</span>
      <span class="dot dot3">.</span>
    </div>

    <div id="category-levels">
      <p class="loading-message">Loading...</p>
    </div>
  </div>
</div>