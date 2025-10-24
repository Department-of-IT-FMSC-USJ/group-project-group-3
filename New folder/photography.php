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
<title>Photography | Eternal Bliss Planners</title>


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
.gallery-area {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 20px;
    max-width: 1180px;
    margin: 0 auto;
    padding: 40px 15px;
}

/* each card box */
.studio-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
    overflow: hidden;
}

.studio-box:hover {
    box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    transform: translateY(-4px);
}

.studio-box img {
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
    <h1>Photography & Studios</h1>
    <p>Capturing your story with real emotions and creative frames.</p>
</header>

<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="gallery-area">
    <!-- Jhethro Studio -->
    <div class="studio-box">
        <img src="https://www.prabathkanishkaphotography.com/wp-content/uploads/2020/11/1U1A5773.jpg" alt="Jhethro Studio">
        <div class="details-box">
            <h2>Jhethro Studio <br>
                Maharagama</h2>
            <p>
                <strong>Style:</strong> Elegant storytelling with a cinematic touch<br>
                <strong>Specialty:</strong> Capturing authentic and timeless emotions<br>
                <strong>Package:</strong> 9 hrs | Engagement | Premium Album | Wedding Film
            </p>
            <p>Contact No: 071-2345678</p>
            <div class="price">Rs. 130,000</div>
            <a href="cart.php?action=add&photography_id=1&item_name=Jhethro%20Studio&price=130000" class="btn-book">Add to Cart</a>
        </div>
    </div>

    <!-- Sithuwam Studio -->
    <div class="studio-box">
        <img src= "https://www.susatabarana.com/wp-content/uploads/2023/04/Kandyan-Costumes-Nilame-Adum-Kandyan-Wedding-Nilame-Dress-Nilame-Wedding-Ariya-Sinhala-Suit-National-Dress-Kandyan-Dress-Nilame-Kit-Nilame-Weddings-Grooms-Wear-Nilame-Costumes7420.jpg" alt="Sithuwam Studio">
        <div class="details-box">
            <h2>Sithuwam Studio<br>
                Nugegoda</h2>
            <p>
                <strong>Style:</strong> Timeless elegance meets cinematic grace<br>
                <strong>Specialty:</strong> Turning emotions into lasting art<br>
                <strong>Package:</strong> Full-day | Engagement | Premium Album | Highlight Film
            </p>
            <p>Contact No: 076-4543802</p>
            <div class="price">Rs. 160,000</div>
            <a href="cart.php?action=add&item_name=Sithuwam%20Studio&price=160000" class="btn-book">Add to Cart</a>
        </div>
    </div>

    <!-- PixelCraft Studio -->
    <div class="studio-box">
        <img src= "https://www.susatabarana.com/wp-content/uploads/2023/03/Wedding-Photography-in-Sri-Lanka-Wedding-Event-Gallery-Fashion-Western-Wedding-Model-Commercial-Sri-Lanka-Photographer-Adesha-Randula-Photography014.jpg" alt="PixelCraft Studio">
        <div class="details-box">
            <h2>PixelCraft Studio<br>
                 Kirulapana</h2>
            <p>
                <strong>Style:</strong> Modern art blended with emotion<br>
                <strong>Specialty:</strong> Capturing natural expressions & small details<br>
                <strong>Package:</strong> 10 hrs | Pre-wedding | Deluxe Album | Highlights
            </p>
            <p>Contact No: 072-5643330</p>
            <div class="price">Rs. 145,000</div>
            <a href="cart.php?action=add&photography_id=3&item_name=PixelCraft%20Studio&price=145000" class="btn-book">Add to Cart</a>
        </div>
    </div>

    <!-- Studio Vision -->
    <div class="studio-box">
        <img src="https://www.susatabarana.com/wp-content/uploads/2022/04/Nilame-Dress-Nilame-Adum-Udarata-Mul-Adum-Kandyan-Dress-Nilame-Kit-Kandyan-Costumes-Nilame-Weddings-Groom%E2%80%99s-Wear-Nilame-Costumes-Traditional-Dress-Nilame-Suit-Mul-Adum-2-1.jpg" alt="Studio Vision">
        <div class="details-box">
            <h2>Studio Vision<br> 
                Wijerama</h2>
            <p>
                <strong>Style:</strong> Natural elegance meets storytelling<br>
                <strong>Specialty:</strong> Freezing genuine, heartfelt connections<br>
                <strong>Package:</strong> 8 hrs | Couple Shoot | Signature Album | Video
            </p>
            <p>Contact No: 071-3943300</p>
            <div class="price">Rs. 110,000</div>
            <a href="cart.php?action=add&photography_id=4&item_name=Studio%20Vision&price=110000" class="btn-book">Add to Cart</a>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
   
</footer>

</body>
</html>