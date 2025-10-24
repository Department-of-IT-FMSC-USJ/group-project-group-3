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
<title>Wedding Cakes | Eternal Bliss Planner</title>

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

/*  layout */
.cake-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
}

/* each card box */
.cake-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
}

.cake-card:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
}

.cake-card img  {
    width: 100%;
    height: auto;
    display: block;
}

/* details under image */
.cake-info{
    padding: 16px 18px;
    text-align: center;
}

.cake-info h2 {
    color: #333;
    font-size: 1.25rem;
    margin: 8px 0 10px;
}

.cake-info  p {
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

/* booking button */
.btn-book {
    display: inline-block;
    background: #e60073;
    color: #fff;
    padding: 8px 18px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
}

.btn-book:hover {
    background: #c40063;
    transform: scale(1.06);
}

/* footer setup */
footer {
    background-color: #ffd5de;
    color: #333;
    text-align: center;
    padding: 15px 0;
    margin-top: 40px;
    font-size: 0.9rem;
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
  <h1>Our Signature Wedding Cakes</h1>
  <p>Choose the perfect cake to sweeten your celebration</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="cake-container">

  <!-- Cake 1 -->
  <div class="cake-card">
    <img src="https://theabigailbloomcakecompany.com/images/wedding-cake-category/alia-the-abigail-bloom-cake-company.jpg" alt="Classic White Wedding Cake">
    <div class="cake-info">
      <h2>Classic White Elegance<br>Nugegoda</h2>
      <p>Three-tier vanilla sponge layered with buttercream and adorned with white roses.<br><br>Contact No:077-4598721</p>
      <div class="price">Rs.30,000 (3-Tier)<br><br><a href="cart.php?action=add&cake_id=1&item_name=Classic%20White%20Elegance%203-Tier&price=30000" class="btn-book">Add to Cart</a><br><br>Rs.40,000 (4-Tier)</div>
      <a href="cart.php?action=add&cake_id=1&item_name=Classic%20White%20Elegance%204-Tier&price=40000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Cake 2 -->
  <div class="cake-card">
    <img src="https://tse2.mm.bing.net/th/id/OIP.jJWYEjcaC-C3k19Iw_WDqgHaLH?cb=12&w=550&h=825&rs=1&pid=ImgDetMain&o=7&rm=3"alt="Chocolate Drip Cake">
    <div class="cake-info">
      <h2>Chocolate Romance<br>Homagama</h2>
      <p>Rich chocolate layers with dark ganache drip and floral detailing for a romantic touch.<br><br>Contact No:071-8598726</p>
      <div class="price">Rs.25,000 (2-Tier)<br><br><a href="cart.php?action=add&cake_id=2&item_name=Chocolate%20Romance%202-Tier&price=25000" class="btn-book">Add to Cart</a><br><br>Rs.35,000 (3-Tier)</div>
      <a href="cart.php?action=add&cake_id=2&item_name=Chocolate%20Romance%203-Tier&price=35000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Cake 3 -->
  <div class="cake-card">
    <img src="https://th.bing.com/th/id/R.3cf08549925924158107347ddfcc818d?rik=petm3LNgr7%2fN9Q&pid=ImgRaw&r=0" alt="Floral Garden Cake"><br><br>
    <div class="cake-info">
      <h2>Floral Garden Bliss<br>Kottawa</h2>
      <p>Beautifully handcrafted sugar flowers and pastel icing – perfect for a spring wedding.<br><br>Contact No:070-3398711</p>
      <div class="price">Rs.28,000 (3-Tier)<br><br><a href="cart.php?action=add&cake_id=3&item_name=Floral%20Garden%20Bliss%203-Tier&price=28000" class="btn-book">Add to Cart</a><br><br>Rs.38,000 (4-Tier)</div>
      <a href="cart.php?action=add&cake_id=3&item_name=Floral%20Garden%20Bliss%204-Tier&price=38000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Cake 4 -->
  <div class="cake-card">
    <img src="https://images.squarespace-cdn.com/content/v1/5a66e3fbbff20077802c18ec/1577100462961-XZ6NBK8FIUUI1J7HJPHJ/fresh+flower+base+elegant+wedding+cake+ruffles+piped+lace+amazing+statement.jpg" alt="Custom Wedding Cake"><br><br><br>
    <div class="cake-info">
      <h2>Custom Luxury Cake<br>Kirulapana</h2>
      <p>Designed to your theme — choose flavors, decorations, and colors for your big day.<br><br>Contact No:078-5998736</p>
      <div class="price">Rs.35,000 (3-Tier)<br><br><a href="cart.php?action=add&cake_id=4&item_name=Custom%20Luxury%20Cake%203-Tier&price=35000" class="btn-book">Add to Cart</a><br><br>Rs.50,000 (Customized)</div>
      <a href="cart.php?action=add&cake_id=4&item_name=Custom%20Luxury%20Cake%20Customized&price=50000" class="btn-book">Add to Cart</a>
    </div>
  </div>

</section>

<footer>
  <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>