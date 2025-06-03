<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/shop.css">

</head>
<body>

<?php include 'components/temp-header.php'; ?>

  <!-- Shop Page Content -->
  <section class="shop-container">
    <div class="container">

      <!-- Filters and Sort -->
      <div class="shop-controls">
        <select id="sort-select">
          <option value="latest">Latest</option>
          <option value="price-low-high">Price: Low to High</option>
          <option value="price-high-low">Price: High to Low</option>
        </select>
        <!-- Add filters if needed -->
      </div>

      <!-- Product Grid -->
      <div class="product-grid">
    
        <!-- Product 1 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 2 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 3 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 4 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 5 -->
        <div class="product-card">
          <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
          </div>
          <div class="product-image">
            <img src="assets/images/product/quality/walnut.webp" alt="Golden Walnuts">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★★</span>
            <span class="rating">(5.0)</span>
          </div>
          <h3 class="product-title">Golden Walnuts</h3>
          <div class="product-price">
            <span class="new-price">$11.50</span>
            <span class="old-price">$13.00</span>
          </div>
          </a>
        </div>
  
        <!-- Product 6 -->
        <div class="product-card">
          <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
            <span class="badge discount">-20%</span>
          </div>
          <div class="product-image">
            <img src="assets/images/product/quality/Macadamia.webp" alt="Macadamia Bliss">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★☆</span>
            <span class="rating">(4.3)</span>
          </div>
          <h3 class="product-title">Macadamia Bliss</h3>
          <div class="product-price">
            <span class="new-price">$14.99</span>
            <span class="old-price">$18.50</span>
          </div>
          </a>
        </div>

        <!-- Product 1 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 2 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 3 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 4 -->
        <div class="product-card">
          <a href="./product.php">
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
          </a>
        </div>
  
        <!-- Product 5 -->
        <div class="product-card">
          <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
          </div>
          <div class="product-image">
            <img src="assets/images/product/quality/walnut.webp" alt="Golden Walnuts">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★★</span>
            <span class="rating">(5.0)</span>
          </div>
          <h3 class="product-title">Golden Walnuts</h3>
          <div class="product-price">
            <span class="new-price">$11.50</span>
            <span class="old-price">$13.00</span>
          </div>
          </a>
        </div>
  
        <!-- Product 6 -->
        <div class="product-card">
          <a href="./product.php">
          <div class="product-top">
            <span class="badge category">Nuts</span>
            <span class="badge discount">-20%</span>
          </div>
          <div class="product-image">
            <img src="assets/images/product/quality/Macadamia.webp" alt="Macadamia Bliss">
          </div>
          <div class="product-rating">
            <span class="stars">★★★★☆</span>
            <span class="rating">(4.3)</span>
          </div>
          <h3 class="product-title">Macadamia Bliss</h3>
          <div class="product-price">
            <span class="new-price">$14.99</span>
            <span class="old-price">$18.50</span>
          </div>
          </a>
        </div>
  
      </div>

      <!-- Pagination -->
      <div class="pagination">
        <button class="prev">&laquo;</button>
        <button class="page active">1</button>
        <button class="page">2</button>
        <button class="next">&raquo;</button>
      </div>

    </div>
  </section>

  <?php include 'components/temp-footer.php'; ?>

    
  <script src="assets/js/main.js"></script>
  <script src="assets/js/shop.js"></script>
    
</body>
</html>