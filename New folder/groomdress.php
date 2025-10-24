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
<title>Groom Attire | Eternal Bliss Planner</title>

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
.groom-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
}

/* each card box */
.groom-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
}

.groom-card:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
}

.groom-card img {
    width: 100%;
    height: auto;
    display: block;
}

/* details under image */
.groom-info {
    padding: 16px 18px;
    text-align: center;
}

.groom-info h2 {
    color: #333;
    font-size: 1.25rem;
    margin: 8px 0 10px;
}

.groom-info p {
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
  <h1>Our Premium Groom Wear Collections</h1>
  <p>Find your perfect outfit for your grand day</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="groom-container">

  <!-- Groom Dress 1 -->
  <div class="groom-card">
    <img src="https://tse2.mm.bing.net/th/id/OIP.IW36pIpcjvcuqZfiiS6j-QAAAA?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Elegant Suit House">
    <div class="groom-info">
      <h2>Elegant Suit House<br>Colombo 05</h2>
      <p>Modern tailored suits, tuxedos, and custom sherwanis designed for the perfect fit.<br><br>Contact No:071-4598721</p>
      <div class="price">Rs.35,000 (Classic Suit)<br><br><a href="cart.php?action=add&groom_id=1&item_name=Elegant%20Suit%20Classic&price=35000" class="btn-book">Add to Cart</a><br><br>Rs.55,000 (Custom Tuxedo)</div>
      <a href="cart.php?action=add&groom_id=2&item_name=Elegant%20Suit%20Custom%20Tuxedo&price=55000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Groom Dress 2 -->
  <div class="groom-card">
    <img src="https://th.bing.com/th?id=OIF.gHTCgKljKFl%2bjis%2bcujMlQ&cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Royal Attire Studio">
    <div class="groom-info">
      <h2>Royal Attire Studio<br>Maharagama</h2>
      <p>Traditional Kandyan groom outfits and matching accessories crafted with elegance.<br><br>Contact No:070-3398712</p>
      <div class="price">Rs.40,000 (Traditional Outfit)<br><br><a href="cart.php?action=add&groom_id=3&item_name=Royal%20Attire%20Traditional&price=40000" class="btn-book">Add to Cart</a><br><br>Rs.65,000 (Full Kandyan Set)</div>
      <a href="cart.php?action=add&groom_id=4&item_name=Royal%20Attire%20Full%20Kandyan&price=65000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Groom Dress 3 -->
  <div class="groom-card">
    <img src="https://i.etsystatic.com/25175463/r/il/3c2e68/5985262503/il_1080xN.5985262503_rtxx.jpg" alt="Dapper Men Studio"><br><br><br>
    <div class="groom-info">
      <h2>Dapper Men Studio<br>Nugegoda</h2>
      <p>Stylish western wedding suits, waistcoats, and formal accessories for modern grooms.<br><br>Contact No:078-2298745</p>
      <div class="price">Rs.28,000 (Suit Only)<br><br><a href="cart.php?action=add&groom_id=5&item_name=Dapper%20Men%20Suit&price=28000" class="btn-book">Add to Cart</a><br><br>Rs.45,000 (Complete Groom Set)</div>
      <a href="cart.php?action=add&groom_id=6&item_name=Dapper%20Men%20Complete%20Set&price=45000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Groom Dress 4 -->
  <div class="groom-card">
    <img src="https://tse3.mm.bing.net/th/id/OIP.h_HgPnPzMLzZQQhGCiVl8gHaKu?cb=12&pid=ImgDet&w=474&h=686&rs=1&o=7&rm=3" alt="The Gentlemen Wardrobe">
    <div class="groom-info">
      <h2>The Gentlemen Wardrobe<br>Homagama</h2>
      <p>Luxury fabrics, custom stitching, and elegant designs for your perfect wedding look.<br><br>Contact No:075-5598712</p>
      <div class="price">Rs.32,000 (Standard Suit)<br><br><a href="cart.php?action=add&groom_id=7&item_name=Gentlemen%20Wardrobe%20Standard&price=32000" class="btn-book">Add to Cart</a><br><br>Rs.50,000 (Luxury Tailor-Made)</div>
      <a href="cart.php?action=add&groom_id=8&item_name=Gentlemen%20Wardrobe%20Luxury&price=50000" class="btn-book">Add to Cart</a>    </div>
  </div>

</section>

<footer>
  <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>