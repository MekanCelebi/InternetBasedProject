<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <style>
    /* CSS code for the navbar */
    nav {
      background: #333;
      color: #fff;
      padding: 20px;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      color: #fff;
      text-decoration: none;
    }

    .nav-links {
      list-style: none;
      display: flex;
    }

    .nav-links li {
      margin-left: 20px;
    }

    .nav-links li a {
      color: #fff;
      text-decoration: none;
    }

    /* CSS code for the product page */
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Style the container */
    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Style the product section */
    .product {
      display: flex;
      align-items: center;
    }

    /* Style the product image */
    .product-image {
      flex: 1;
    }

    .product-image img {
      width: 100%;
      max-width: 400px;
    }

    /* Style the product info */
    .product-info {
      flex: 1;
      padding-left: 40px;
    }

    .product-info h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .product-info p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      background: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <nav>
    <div class="container">
      <a href="#" class="logo">Brandify</a>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="productpage.php">Shop</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="product">
      <div class="product-image">
        <img src="imgs/products.png" alt="Product Image">
      </div>
      <div class="product-info">
        <h1>Boston Round</h1>
        <p>Price: $99.99</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan odio ac metus feugiat, vitae bibendum massa auctor.</p>
        <a href="checkout.php" class="btn">Buy Now</a>
      </div>
    </div>
  </div>
</body>
</html>
