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
        <span class="close-modal" onclick="closeCategoryModal()">&times;</span>
        <h3>Select Category</h3>
        <div id="category-levels">
            <!-- JS will populate categories here -->
        </div>
    </div>
</div>