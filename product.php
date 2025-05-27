<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">

</head>
<body>

  <?php include 'components/header.php'; ?>

  <section class="single-product">
    <div class="container">
  
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <nav class="text-sm mb-6" aria-label="Breadcrumb">
                <ol class="breadcrumb flex items-center space-x-2 text-gray-600">
                <li><a href="/" class="text-[#00a055] hover:underline">Home</a></li>
                <li>›</li>
                <li><a href="/shop" class="text-[#00a055] hover:underline">Shop</a></li>
                <li>›</li>
                <li><a href="/category/product-category" class="text-[#00a055] hover:underline">Vegetables</a></li>
                <li>›</li>
                <li class="text-gray-900 font-semibold">Fresh Broccoli</li>
                </ol>
            </nav>
        </div>

        <!-- Product Main Section -->
        <div class="single-product-section">

            <div class="left-side product-details">
                <!-- Product Section -->
                <div class="grid items-start">
            
                    <!-- Product Image -->
                    <div class="product-image">
                        <img src="assets/images/product/quality/walnut.webp" alt="Product Image" class="rounded-xl shadow">

                        <div class="single-product-mobile">
                          <h1 class="prduct-name">Fresh Broccoli</h1>
                          <div class="product-price">$3.25 / Piece</div>
                          <div class="product-meta">
                            <div class="last-update"> <span>Updated:</span> April 30, 2025 </div>
                            <div class="product-meta-category">Category: 
                                <a href="/category/vegetables" class="product-category-link">Vegetables</a>
                            </div>
                        </div>
                        </div>

                    </div>
            
                    <!-- Product Info -->
                    <div class="product-info">
                        <!-- Review Stars -->
                        <div class="product-rating">
                            ★★★★☆ <span class="product-rating-text">(24 Reviews)</span>
                        </div>
                
                        <!-- Product Title -->
                        <h1 class="prduct-name">Fresh Broccoli</h1>
                
                        <!-- Supplier Info -->
                        <div class="product-information">
                            <p><strong>Supplier Name:</strong> Michael Tierney</p>
                            <p><strong>Origin:</strong> Canada</p>
                            <p><strong>Supply Ability:</strong> 80,000 Pieces</p>
                            <p><strong>Minimum Order:</strong> 85 Pieces</p>
                        </div>
                
                        <!-- Price -->
                        <div class="product-price">$3.25 / Piece</div>
                
                        <!-- Update and Category -->
                        <div class="product-meta">
                            <div class="last-update"> <span>Updated:</span> April 30, 2025 </div>
                            <div class="product-meta-category">Category: 
                                <a href="/category/vegetables" class="product-category-link">Vegetables</a>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Tabs Section -->
                <div class="tabs-section">
                    <div class="product-tabs">
                      <ul class="tabs">
                        <li class="tab tab-active" data-tab="description">Description</li>
                        <li class="tab" data-tab="review">Review</li>
                      </ul>
                    </div>
                    <div class="tab-contents">
                      <div class="tab-content description active-tab">
                        <p>Broccoli is a green vegetable that belongs to the cabbage family. It's rich in vitamins, minerals, fiber, and antioxidants.</p>
                        <p>This product is harvested and packed under the highest standards. Ideal for wholesale distribution and long-term supply.</p>
                      </div>
                      <div class="tab-content review">
                        <p>No reviews yet. Be the first to write one!</p>
                      </div>
                    </div>
                </div>

                <div class="single-product-mobile">
                  <div class="card">

                    <div class="profile-btn">
                      <button class="chat-btn">💬 Chat now</button>
                      <button class="contact-btn">📞 Contact supplier</button>
                    </div>
                  
                    <div class="profile">
                      <div class="avatar-img">
                        <img src="assets/images/user-img.webp" class="verified" alt="Verified">
                      </div>
                      <div class="avatar-info">
                        <h3>Michael Tierney</h3> 
                        <h4>Supplier</h4>
                      </div>
                    </div>
                  
                    <div class="rating">⭐ 0 · 0 reviews</div>
                    <div class="response-rate">Response rate<br><strong>100%</strong></div>
                  
                    <div class="description">
                      <strong>Business description</strong><br>
                      I'm Michael Tierney from Canada. Leave a message to contact me.
                    </div>
                  
                    <button class="supplier-profile-btn">Supplier profile</button>
                  </div>
                </div>
            
                <!-- Product Offer Section -->
                <div class="offer-section">

                    <div class="offer-header">
                        <div class="offer-title">
                          <h2>Popular Organic Discount</h2>
                        </div>
                        <div class="timer" id="countdown">
                            <p><span id="days"></span> Days </p>
                            <p><span id="hours"></span> Hours </p>
                            <p><span id="minutes"></span> Minutes </p>
                            <p><span id="seconds"></span> Seconds </p>
                          </div>                          
                    </div>

                    <div class="product-grid">
                
                        <!-- Product 1 -->
                        <div class="product-card">
                          <div class="product-top">
                            <span class="badge category">Nuts</span>
                            <span class="badge discount">-15%</span>
                          </div>
                          <div class="product-image">
                            <img src="assets/images/product/quality/almonds.webp" alt="Almonds Supreme">
                          </div>
                          <div class="product-rating">
                            <span class="stars">★★★★☆</span>
                            <span class="rating">(4.0)</span>
                          </div>
                          <h3 class="product-title">Almonds Supreme</h3>
                          <div class="product-price">
                            <span class="new-price">$9.99</span>
                            <span class="old-price">$11.99</span>
                          </div>
                        </div>
                  
                        <!-- Product 2 -->
                        <div class="product-card">
                          <div class="product-top">
                            <span class="badge category">Nuts</span>
                            <span class="badge discount">-10%</span>
                          </div>
                          <div class="product-image">
                            <img src="assets/images/product/quality/cashew.webp" alt="Raw Cashew Delight">
                          </div>
                          <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="rating">(5.0)</span>
                          </div>
                          <h3 class="product-title">Raw Cashew Delight</h3>
                          <div class="product-price">
                            <span class="new-price">$12.99</span>
                            <span class="old-price">$14.50</span>
                          </div>
                        </div>
                  
                        <!-- Product 3 -->
                        <div class="product-card">
                          <div class="product-top">
                            <span class="badge category">Nuts</span>
                          </div>
                          <div class="product-image">
                            <img src="assets/images/product/quality/Fandoq.webp" alt="Hazelnut Crunch">
                          </div>
                          <div class="product-rating">
                            <span class="stars">★★★☆☆</span>
                            <span class="rating">(3.5)</span>
                          </div>
                          <h3 class="product-title">Hazelnut Crunch</h3>
                          <div class="product-price">
                            <span class="new-price">$8.75</span>
                            <span class="old-price">$9.50</span>
                          </div>
                        </div>
                  
                        <!-- Product 4 -->
                        <div class="product-card">
                          <div class="product-top">
                            <span class="badge category">Nuts</span>
                          </div>
                          <div class="product-image">
                            <img src="assets/images/product/quality/Pistachio.webp" alt="Roasted Pistachios">
                          </div>
                          <div class="product-rating">
                            <span class="stars">★★★★☆</span>
                            <span class="rating">(4.2)</span>
                          </div>
                          <h3 class="product-title">Roasted Pistachios</h3>
                          <div class="product-price">
                            <span class="new-price">$10.99</span>
                            <span class="old-price">$12.25</span>
                          </div>
                        </div>
                  
                    </div>

                </div>
            </div>

            <div class="right-side product-contact">
                <div class="card">
                    <div class="profile-btn">
                      <button class="chat-btn">💬 Chat now</button>
                      <button class="contact-btn">📞 Contact supplier</button>
                    </div>

                    <div class="profile">
                      <div class="avatar-img">
                        <img src="assets/images/user-img.webp" class="verified" alt="Verified">
                      </div>
                      <div class="avatar-info">
                        <h3>Michael Tierney</h3> 
                        <h4>Supplier</h4>
                      </div>
                    </div>
                  
                    <div class="rating">⭐ 0 · 0 reviews</div>
                    <div class="response-rate">Response rate<br><strong>100%</strong></div>
                  
                    <div class="description">
                      <strong>Business description</strong><br>
                      I'm Michael Tierney from Canada. Leave a message to contact me.
                    </div>
                  
                    <button class="supplier-profile-btn">Supplier profile</button>
                </div>
            </div>

        </div>
  
    </div>
  </section>
  

  <?php include 'components/footer.php'; ?>
    
  <script src="assets/js/shop.js"></script>
    
</body>
</html>