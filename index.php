<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Online Shopping Cart</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Online Shopping Cart</h1>
  <p>Best Deals on Electronics (Pakistan • Prices in PKR)</p>
</header>

<div class="search-box">
  <input type="text" id="searchInput" placeholder="Search products..." onkeyup="searchProducts()">
</div>

<div class="container">
  <div class="products">

    <!-- Product 1 -->
    <div class="product">
      <img src="images/pngtree-wireless-headphone-png-image_15830312.png" alt="Wireless Headphones">
      <h3>Wireless Headphones</h3>
      <p class="description">Great sound and comfort for everyday use.</p>
      <p class="price">₨6,500</p>
      <a href="add.php?name=Wireless Headphones&price=6500&image=pngtree-wireless-headphone-png-image_15830312.png">Add to Cart</a>
    </div>

    <!-- Product 2 -->
    <div class="product">
      <img src="images/images.jpg" alt="Bluetooth Speaker">
      <h3>Bluetooth Speaker</h3>
      <p class="description">Portable speaker with strong bass.</p>
      <p class="price">₨4,500</p>
      <a href="add.php?name=Bluetooth Speaker&price=4500&image=images.jpg">Add to Cart</a>
    </div>

    <!-- Product 3 -->
    <div class="product">
      <img src="images/8743024fa6c2a7a62f8a2d85ca0d4b46.jpg_720x720q80.jpg_.webp" alt="Gaming Mouse">
      <h3>Gaming Mouse</h3>
      <p class="description">Precision gaming mouse with stylish RGB.</p>
      <p class="price">₨3,000</p>
      <a href="add.php?name=Gaming Mouse&price=3000&image=8743024fa6c2a7a62f8a2d85ca0d4b46.jpg_720x720q80.jpg_.webp">Add to Cart</a>
    </div>

    <!-- Product 4 -->
    <div class="product">
      <img src="images/71fRP7KY9hL._AC_SL1500_.jpg" alt="Mechanical Keyboard">
      <h3>Mechanical Keyboard</h3>
      <p class="description">Responsive keys for work & gaming.</p>
      <p class="price">₨7,000</p>
      <a href="add.php?name=Mechanical Keyboard&price=7000&image=71fRP7KY9hL._AC_SL1500_.jpg">Add to Cart</a>
    </div>

    <!-- Product 5 -->
    <div class="product">
      <img src="images/images (1).jpg" alt="Laptop Stand">
      <h3>Laptop Stand</h3>
      <p class="description">Ergonomic stand for better posture.</p>
      <p class="price">₨3,000</p>
      <a href="add.php?name=Laptop Stand&price=3000&image=images (1).jpg">Add to Cart</a>
    </div>

    <!-- Product 6 -->
    <div class="product">
      <img src="images/ai-generated-innovative-smart-watch-mockup-for-tech-marketing-ai-generated-photo.jpg" alt="Smart Watch">
      <h3>Smart Watch</h3>
      <p class="description">Track fitness & notifications easily.</p>
      <p class="price">₨15,500</p>
      <a href="add.php?name=Smart Watch&price=15500&image=ai-generated-innovative-smart-watch-mockup-for-tech-marketing-ai-generated-photo.jpg">Add to Cart</a>
    </div>

    <!-- Product 7 -->
    <div class="product">
      <img src="images/images (2).jpg" alt="USB-C Charger">
      <h3>USB-C Charger</h3>
      <p class="description">Fast wall charging for all devices.</p>
      <p class="price">₨1,800</p>
      <a href="add.php?name=USB-C Charger&price=1800&image=images (2).jpg">Add to Cart</a>
    </div>

    <!-- Product 8 -->
    <div class="product">
      <img src="images/51KaQyPIFtL._AC_UF1000,1000_QL80_.jpg" alt="USB Flash Drive">
      <h3>USB Flash Drive</h3>
      <p class="description">Portable storage up to 128GB.</p>
      <p class="price">₨1,200</p>
      <a href="add.php?name=USB Flash Drive&price=1200&image=51KaQyPIFtL._AC_UF1000,1000_QL80_.jpg">Add to Cart</a>
    </div>

    <!-- Product 9 -->
    <div class="product">
      <img src="images/images (5).jpg" alt="Mobile Tripod">
      <h3>Mobile Tripod</h3>
      <p class="description">Stable tripod for photography and videos.</p>
      <p class="price">₨3,500</p>
      <a href="add.php?name=Mobile Tripod&price=3500&image=images (5).jpg">Add to Cart</a>
    </div>

    <!-- Product 10 -->
    <div class="product">
      <img src="images/ddc1b26d16474130d54eaf3c3f399657.jpg_720x720q80.jpg" alt="Bluetooth Car Adapter">
      <h3>Bluetooth Car Adapter</h3>
      <p class="description">Play music & make hands-free calls in car.</p>
      <p class="price">₨2,000</p>
      <a href="add.php?name=Bluetooth Car Adapter&price=2000&image=ddc1b26d16474130d54eaf3c3f399657.jpg_720x720q80.jpg">Add to Cart</a>
    </div>

    <!-- Product 11 -->
    <div class="product">
      <img src="images/71XuYOythnL._AC_SL1500_.jpg" alt="Desk Fan">
      <h3>Desk Fan</h3>
      <p class="description">Portable and efficient cooling fan.</p>
      <p class="price">₨2,500</p>
      <a href="add.php?name=Desk Fan&price=2500&image=71XuYOythnL._AC_SL1500_.jpg">Add to Cart</a>
    </div>

    <!-- Product 12 -->
    <div class="product">
      <img src="images/latest-bluetooth-earbuds-2024-new-tws-wireless-headphones-5-0-original-imahfynqb7rhezad.webp" alt="Bluetooth Earbuds">
      <h3>Bluetooth Earbuds</h3>
      <p class="description">Comfortable wireless earbuds with good sound.</p>
      <p class="price">₨5,000</p>
      <a href="add.php?name=Bluetooth Earbuds&price=5000&image=latest-bluetooth-earbuds-2024-new-tws-wireless-headphones-5-0-original-imahfynqb7rhezad.webp">Add to Cart</a>
    </div>

  </div>

  <div class="cart-wrapper">
    <a class="cart-btn" href="cart.php">View Cart (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a>
  </div>
</div>

<script>
function searchProducts() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let products = document.getElementsByClassName("product");
  for (let product of products) {
    let name = product.getElementsByTagName("h3")[0].innerText.toLowerCase();
    product.style.display = name.includes(input) ? "block" : "none";
  }
}
</script>

</body>
</html>
