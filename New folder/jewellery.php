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

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wedding Jewelry | Eternal Bliss Planner</title>

<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
}

header {
  background-color: #ffccd5;
  color: #333;
  text-align: center;
  padding: 25px 0;
}

header h1 {
  margin: 0;
  font-size: 2rem;
}

.jewelry-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  padding: 40px;
  max-width: 1200px;
  margin: auto;
}

.jewelry-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.jewelry-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.jewelry-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.jewelry-info {
  padding: 20px;
  text-align: center;
}

.jewelry-info h2 {
  margin: 10px 0;
  color: #333;
}

.jewelry-info p {
  color: #777;
  font-size: 0.95rem;
  margin-bottom: 15px;
}

.price {
  font-size: 1.1rem;
  font-weight: 600;
  color: #e60073;
  margin-bottom: 15px;
}

.order-btn {
  display: inline-block;
  background-color: #e60073;
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.order-btn:hover {
  background-color: #c40063;
}

footer {
  background-color: #ffccd5;
  text-align: center;
  padding: 15px;
  color: #333;
  margin-top: 40px;
}
.top-buttons {
    text-align: center;
    margin-top: 15px;
}
.top-buttons a {
    display: inline-block;
    background: #e60073;
    color: white;
    padding: 8px 18px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
    margin: 5px;
}
</style>

</head>

<body>

<header>
  <h1>Our Elegant Couple Rings</h1>
  <p>Find the perfect pair to symbolize your everlasting love</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="jewelry-container">

  <!-- Ring Set 1 -->
  <div class="jewelry-card">
    <img src="https://i.pinimg.com/1200x/36/44/23/364423f722f94efc7d5c4114159863af.jpg" alt="Rose Gold Leaf Couple Rings">
    <div class="jewelry-info">
      <h2>Vogue<br>Colombo-2</h2>
      <p>Delicate rose gold couple rings inspired by nature, featuring leaf engravings and subtle shine.</p>
      <div class="price">Rs.45,000 (Set of 2)<br><br><a href="cart.php?action=add&jewelry_id=1&item_name=Vogue%20Rose%20Gold%20Couple%20Rings&price=45000" class="order-btn">Add to Cart</a></div>
    </div>
  </div>

  <!-- Ring Set 2 -->
  <div class="jewelry-card">
    <img src="https://i.pinimg.com/736x/cf/87/81/cf87812ad6c8418c592e4396c79cfce5.jpg" alt="Classic Silver Couple Rings">
    <div class="jewelry-info">
      <h2>Diamond World<br>Maharagama</h2>
      <p>Timeless silver rings designed for simplicity and elegance — perfect for every couple.</p>
      <div class="price">Rs.40,000 (Set of 2)<br><br><a href="cart.php?action=add&jewelry_id=2&item_name=Diamond%20World%20Silver%20Couple%20Rings&price=40000" class="order-btn">Add to Cart</a></div>
    </div>
  </div>

  <!-- Ring Set 3 -->
  <div class="jewelry-card">
    <img src="https://i.pinimg.com/736x/56/13/e6/5613e6011099fd5068af867fee9e87a3.jpg" alt="Diamond Promise Couple Rings">
    <div class="jewelry-info">
      <h2>Red Rose<br>Hettiweediya</h2>
      <p>Beautifully crafted diamond-studded couple rings that shine as bright as your love story.</p>
      <div class="price">Rs.65,000 (Set of 2)<br><br><a href="cart.php?action=add&jewelry_id=3&item_name=Red%20Rose%20Diamond%20Couple%20Rings&price=65000" class="order-btn">Add to Cart</a></div>
    </div>
  </div>

  <!-- Ring Set 4 -->
  <div class="jewelry-card">
    <img src="https://i.pinimg.com/1200x/2b/17/2d/2b172d821e1f0453ed1f5cee3b7b1d6c.jpg" alt="Customized Couple Rings">
    <div class="jewelry-info">
      <h2>Gade World<br>Colombo-7</h2>
      <p>Create your own unique ring design — choose materials, gemstones, and engravings.</p>
      <div class="price">Rs.70,000 (Customized Set)<br><br><a href="cart.php?action=add&jewelry_id=4&item_name=Gade%20World%20Customized%20Couple%20Rings&price=70000" class="order-btn">Add to Cart</a></div>
    </div>
  </div>

</section>

<footer>
  <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>