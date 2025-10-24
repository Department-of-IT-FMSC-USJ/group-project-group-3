<?php
include("connection.php");
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['customer_id'])) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Bridal Dresses | Eternal Bliss Planner</title>

<style>
  /* overall body setup */
  body {
    background: #f9f7f7;
    margin: 0;
    padding: 0;
    font-family: 'Quicksand', sans-serif;
  }

  /* header area */
  header {
    background-color: #f6b7c5; /* slightly off pink tone */
    color: #2e2e2e;
    text-align: center;
    padding: 25px 0 22px;
  }

  header h1 {
    font-size: 2rem;
    margin: 0;
    letter-spacing: 0.3px;
  }

  /* dress container grid */
  .dress-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
  }

  /* each dress card */
  .dress-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
  }

  .dress-card:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
  }

  .dress-card img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    height: 300px;
  }

  /* details box */
  .dress-info {
    padding: 16px 18px;
    text-align: center;
  }

  .dress-info h2 {
    color: #333;
    font-size: 1.25rem;
    margin: 8px 0 10px;
  }

  .dress-info p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
    text-align: left;
  }

  .price {
    color: #e60073;
    font-weight: bold;
    font-size: 1.03rem;
    margin: 8px 0;
  }

  /* order button */
  .order-btn {
    display: inline-block;
    background: #e60073;
    color: #fff;
    padding: 8px 18px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
  }

  .order-btn:hover {
    background: #c40063;
    transform: scale(1.06);
  }

  /* footer */
  footer {
    background-color: #ffd5de;
    color: #333;
    text-align: center;
    padding: 15px 0;
    margin-top: 40px;
    font-size: 0.9rem;
  }
</style>

</head>

<body>

<header>
  <h1>Our Exclusive Bridal Dresses</h1>
  <p>Find the perfect dress for your unforgettable day</p>
</header>

<section class="dress-container">

  <!-- Dress 1 -->
  <div class="dress-card">
    <img src=https://i.pinimg.com/736x/c2/c2/d4/c2c2d4ae11d3d825b3d5828e708d15cc.jpg alt="Ivory Lace Gown" />
    <div class="dress-info">
      <h2>Ivory Lace Gown<br><small>Elegant Bridal Shop</small></h2>
      <p>Classic ivory lace wedding gown with a delicate train.<br><br><strong>Contact:</strong> 077-1234567</p>
      <div class="price">Rs. 75,000</div>
      <a href="cart.php?action=add&bridal_id=1&item_name=Ivory%20Lace%20Gown&price=75000" class="order-btn">Add to Cart</a>    </div>
  </div>

  <!-- Dress 2 -->
  <div class="dress-card">
    <img src=https://i.pinimg.com/1200x/1e/1f/37/1e1f378eaa9a1ceaa81fe0c23221c3d1.jpg alt="Modern Mermaid Dress" />
    <div class="dress-info">
      <h2>Modern Mermaid Dress<br><small>Bridal Boutique</small></h2>
      <p>Sleek mermaid silhouette with sparkling beadwork.<br><br><strong>Contact:</strong> 071-9876543</p>
      <div class="price">Rs. 85,000</div>
      <a href="cart.php?action=add&bridal_id=2&item_name=Modern%20Mermaid%20Dress&price=85000" class="order-btn">Add to Cart</a>
    </div>
  </div>

  <!-- Dress 3 -->
  <div class="dress-card">
    <img src=https://i.pinimg.com/736x/af/f3/22/aff322cb393b258e1ca719a7b31245de.jpg alt="Romantic Tulle Dress" />
    <div class="dress-info">
      <h2>Romantic Tulle Dress<br><small>Dream Bridal Studio</small></h2>
      <p>Soft tulle layers with floral embroidery, perfect for a fairytale wedding.<br><br><strong>Contact:</strong> 070-4567890</p>
      <div class="price">Rs. 65,000</div>
      <a href="cart.php?action=add&bridal_id=3&item_name=Romantic%20Tulle%20Dress&price=65000" class="order-btn">Add to Cart</a>
    </div>
  </div>

  <!-- Dress 4 -->
  <div class="dress-card">
    <img src=https://i.pinimg.com/1200x/16/07/61/160761a6dcb8cf11a0fa6102962b2911.jpg alt="Vintage Ballgown" />
    <div class="dress-info">
      <h2>Vintage Ballgown<br><small>Royal Bridal Collection</small></h2>
      <p>Full skirt ballgown with vintage lace detailing and a sweetheart neckline.<br><br><strong>Contact:</strong> 078-2345678</p>
      <div class="price">Rs. 90,000</div>
      <a href="cart.php?action=add&bridal_id=4&item_name=Vintage%20Ballgown&price=90000" class="order-btn">Add to Cart</a>
    </div>
  </div>

  <!-- Dress 5 -->
  <div class="dress-card">
    <img src=https://i.pinimg.com/736x/5f/dc/ab/5fdcab82e3b11f2ce793b1a01cd347f5.jpg alt="Kandian Bride Dress" />
    <div class="dress-info">
      <h2>Kandian Bride Dress<br><small>Kandian Heritage Shop</small></h2>
      <p>Traditional Kandian bridal saree with rich embroidery and gold embellishments.<br><br><strong>Contact:</strong> 075-6789012</p>
      <div class="price">Rs. 120,000</div>
      <a href="cart.php?action=add&bridal_id=5&item_name=Kandian%20Bride%20Dress&price=120000" class="order-btn">Add to Cart</a>
    </div>
  </div>

</section>

<footer>
  <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>

</html>