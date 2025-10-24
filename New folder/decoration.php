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
<title>Hotels decorations | Dream Wedding Planner</title>
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

/* gallery grid layout */
.deco-area {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
}

/* each card box */
.deco-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
}

.deco-box:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
}

.deco-box img {
    width: 100%;
    height: auto;
    display: block;
}

/* details under image */
.details-box {
    padding: 16px 18px;
    text-align: center;
}

.details-box h2 {
    color: #333;
    font-size: 1.25rem;
    margin: 8px 0 10px;
}

.details-box p {
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
<h1>Decoration & flowers</h1>
<p>Transforming spaces into unforgettable moments, one bloom at a time</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="deco-area">
<!-- deco 1 -->
<div class="deco-box">
<img src="https://weddingsbythamara.com/wp-content/uploads/2023/04/1-2.jpg" alt="Lassana Flora">
<div class="details-box">
<h2>Lassana Flora <br>
     nugegoda</h2>
<p>Contact No:071-4456658 </p>
<p>A dreamy wedding venue adorned with elegant fresh flowers, capturing timeless romance and luxury</p>
<div class="price">Rs.100,000 <br>
    <a href="cart.php?action=add&deco_id=1&item_name=Lassana%20Flora%20Fresh%20Flowers&price=100000" class="btn-book">Add to Cart</a><br></div><br>
<p>A dreamy wedding venue adorned with elegant artificial flowers, capturing timeless romance and luxury.</p>
<div class="price">Rs.80,000 <br>
     <a href="cart.php?action=add&deco_id=2&item_name=Lassana%20Flora%20Artificial%20Flowers&price=80000" class="btn-book">Add to Cart</a>
</div> 
</div>
</div>

<!-- deco 2 -->
<div class="deco-box">
<img src="https://rivendellhotel.com/images/weddings/setteeback.jpg" alt="Lumos Events & Crafts">
<div class="details-box">
<h2>Lumos Events <br>
      maharagama</h2>
<p>Contact No:076-5345608 </p>
<p>Elegant event space featuring fresh floral décor, breathtaking views, and five-star service</p>
<div class="price">Rs.120,000 <br>
    <a href="cart.php?action=add&deco_id=3&item_name=Lumos%20Events%20Fresh%20Flowers&price=120000" class="btn-book">Add to Cart</a><br></div><br>
<p>Elegant event space featuring artistic artificial floral décor, breathtaking views, and five-star service</p>
<div class="price">Rs.90,000 <br>
    <a href="cart.php?action=add&deco_id=4&item_name=Lumos%20Events%20Artificial%20Flowers&price=90000" class="btn-book">Add to Cart</a>
</div> 
</div>
</div>

<!-- deco 3 -->
<div class="deco-box">
<img src="https://www.sankalana.lk/wp-content/uploads/2016/10/setteeback_decore.jpg" alt="KOLIN’s">
<div class="details-box">
<h2>KOLIN’s <br>
      kirulapana</h2>
<p>Contact No:071-4566367 </p>
<p>Where luxury meets nature — fresh flowers, gourmet cuisine, and unforgettable moments</p>
<div class="price">Rs.125,000 <br>
    <a href="cart.php?action=add&deco_id=5&item_name=KOLIN’s%20Fresh%20Flowers&price=125000" class="btn-book">Add to Cart</a><br></div><br>
<p>Where luxury meets design — stunning artificial flowers, gourmet cuisine, and unforgettable moments</p>
<div class="price">Rs.85,000 <br>
    <a href="cart.php?action=add&deco_id=6&item_name=KOLIN’s%20Artificial%20Flowers&price=85000" class="btn-book">Add to Cart</a>
</div> 
</div>
</div>

<!-- deco 4 -->
<div class="deco-box">
<img src="https://sarasiflora.com/cdn/shop/files/SFWP2503STB-01_1270x.jpg?v=1756927717" alt="90F Weddings">
<div class="details-box">
<h2>90F Weddings <br>
     wijerama</h2>
<p>Contact No:071-4456658 </p>
<p>A romantic garden-view venue filled with artistic artificial blooms and a touch of everlasting beauty</p>
<div class="price">Rs.95,000 <br>
    <a href="cart.php?action=add&deco_id=7&item_name=90F%20Weddings%20Fresh%20Flowers&price=95000" class="btn-book">Add to Cart</a><br></div><br>
<p>A romantic garden-view venue filled with vibrant fresh blooms and a touch of natural beauty</p>
<div class="price">Rs.75,000 <br>
    <a href="cart.php?action=add&deco_id=8&item_name=90F%20Weddings%20Artificial%20Flowers&price=75000" class="btn-book">Add to Cart</a>
</div>
</div>
</section>

<footer>
<p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>