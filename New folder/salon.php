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
<title>Bridal Salons | Eternal Bliss Planner</title>

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
.salon-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
}

/* each card box */
.salon-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
}

.salon-card:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
}

.salon-card img {
    width: 100%;
    height: auto;
    display: block;
}

/* details under image */
.salon-info  {
    padding: 16px 18px;
    text-align: center;
}

.salon-info h2 {
    color: #333;
    font-size: 1.25rem;
    margin: 8px 0 10px;
}

.salon-info p {
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
  <h1>Our Partner Bridal Salons</h1>
  <p>Choose your dream look for your perfect wedding day</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="salon-container">

  <!-- Salon 1 -->
  <div class="salon-card">
    <img src="https://th.bing.com/th/id/R.b2d227cb12229c7ccaa2794d54aadea3?rik=aqlXcGoDEAyljg&riu=http%3a%2f%2fweddingday-online.com%2fsites%2fdefault%2ffiles%2farticle-images%2f201710%2fIMG_1767.jpg&ehk=WVcP%2foC8fRcXpRdtbuE4yhzYWrB7B%2fwhGWNPI%2fTyWYo%3d&risl=&pid=ImgRaw&r=0" alt="Glamour Touch Salon">
    <div class="salon-info">
      <h2>Glamour Touch Salon<br>Nugegoda</h2>
      <p>Professional bridal makeup and hair styling packages with luxury cosmetics.<br><br>Contact No:077-4598721</p>
      <div class="price">Rs.25,000 (Bridal Makeup)<br><a href="cart.php?action=add&salon_id=1&item_name=Glamour%20Touch%20Bridal%20Makeup&price=25000" class="btn-book">Add to Cart</a><br><br><br><br>
      Rs.35,000 (Bridal + Retouch)</div>
      <a href="cart.php?action=add&salon_id=2&item_name=Glamour%20Touch%20Bridal%20%2B%20Retouch&price=35000" class="btn-book">Add to Cart</a>    </div>
  </div>

  <!-- Salon 2 -->
  <div class="salon-card">
    <img src="https://img.freepik.com/premium-photo/elegant-sri-lankan-traditional-bride-with-kandyan-jewelry_872233-735.jpg" alt="Royal Beauty Lounge">
    <div class="salon-info">
      <h2>Royal Beauty Lounge<br>Maharagama</h2>
      <p>Elegant bridal dressing, saree draping, and full-day wedding touch-ups.<br><br>Contact No:070-2298723</p>
      <div class="price">Rs.40,000 (Full Package)<br><a href="cart.php?action=add&salon_id=3&item_name=Royal%20Beauty%20Full%20Package&price=40000" class="btn-book">Add to Cart</a><br><br><br><br>
      Rs.55,000 (Premium Package)</div>
      <a href="cart.php?action=add&salon_id=4&item_name=Royal%20Beauty%20Premium%20Package&price=55000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Salon 3 -->
  <div class="salon-card">
    <img src="https://images.squarespace-cdn.com/content/v1/5b0da1194eddece4753dcc6a/1649962036968-UZ8RTR62HQRETNWUNU18/BrickhouseBridal-197.jpg" alt="Radiance Bridal Studio">
    <div class="salon-info">
      <h2>Radiance Bridal Studio<br>Kirulapana</h2>
      <p>Modern makeup techniques, skincare prep, and natural glam looks.<br><br>Contact No:078-1198744</p>
      <div class="price">Rs.20,000 (Makeup Only)<br><a href="cart.php?action=add&salon_id=5&item_name=Radiance%20Makeup%20Only&price=20000" class="btn-book">Add to Cart</a><br><br><br><br>
      Rs.30,000 (Makeup + Hair Styling)</div>
      <a href="cart.php?action=add&salon_id=6&item_name=Radiance%20Makeup%20%2B%20Hair%20Styling&price=30000" class="btn-book">Add to Cart</a>
    </div>
  </div>

  <!-- Salon 4 -->
  <div class="salon-card">
    <img src="https://img.freepik.com/premium-photo/gorgeous-traditional-sri-lankan-bride-traditional-dress-jewelry_872233-1256.jpg?w=740" alt="Lotus Bridal Spa">
    <div class="salon-info">
      <h2>Lotus Bridal Spa<br>Homagama</h2>
      <p>Relaxing spa and bridal beauty treatments before your big day.<br><br>Contact No:075-5598712</p>
      <div class="price">Rs.15,000 (Pre-Wedding Package)<br><a href="cart.php?action=add&salon_id=7&item_name=Lotus%20Pre-Wedding%20Package&price=15000" class="btn-book">Add to Cart</a><br><br><br><br>
      Rs.25,000 (Full Bridal Glow Package)</div>
      <a href="cart.php?action=add&salon_id=8&item_name=Lotus%20Full%20Bridal%20Glow%20Package&price=25000" class="btn-book">Add to Cart</a>    </div>
  </div>

</section>

<footer>
  <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>