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
<title>Wedding Hotels | Eternal Bliss Planners</title>
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

.hotel-card {
background-color: #fff;
border-radius: 10px;
box-shadow: 0 4px 10px rgba(0,0,0,0.1);
overflow: hidden;
transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hotel-card:hover {
transform: translateY(-5px);
box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.hotel-card img {
width: 100%;
height: 200px;
object-fit: cover;
}

.hotel-container {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: 25px;
padding: 40px;
max-width: 1200px;
margin: auto;
}

.hotel-info {
padding: 20px;
text-align: center;
}

.hotel-info p {
color: #777;
font-size: 0.95rem;
margin-bottom: 15px;
}

.hotel-info h2 {
margin: 10px 0;
color: #333;
}

.price {
font-size: 1.1rem;
font-weight: 600;
color: #e60073;
margin-bottom: 15px;
}

.book-btn {
display: inline-block;
background-color: #e60073;
color: #fff;
text-decoration: none;
padding: 10px 20px;
border-radius: 5px;
transition: background-color 0.3s ease;
}

.book-btn:hover {
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
<h1>Our Partner Hotels</h1>
<p>Choose your dream venue for the perfect wedding celebration</p>
</header>
<div class="top-buttons">
  <a href="cart.php">🛒 View Cart</a>
  <a href="homepage.php">🏠 Go Home</a>
</div>

<section class="hotel-container">
<!-- Hotel 1 -->
<div class="hotel-card">
<img src="https://www.ramadacolombo.com/wp-content/uploads/2016/05/Ballroom.jpg" alt="Hotel Royal Palace">
<div class="hotel-info">
<h2>Hotel Royal Palace<br>Colombo</h2>
<p>Luxury ballroom and garden view venue with premium catering service.<br><br>Contact No:075-2245769</p>
<div class="price">Rs.100,000 (for 100 guests)<br><br><a href="cart.php?action=add&hotel_id=1&item_name=Hotel%20Royal%20Palace%20100%20Guests&price=100000" class="book-btn">Add to Cart</a><br><br>Rs.200,000 (for 150 guests)</div>
<a href="cart.php?action=add&hotel_id=1&item_name=Hotel%20Royal%20Palace%20150%20Guests&price=200000" class="book-btn">Add to Cart</a>
</div>
</div>

<!-- Hotel 2 -->
<div class="hotel-card">
<img src="https://tse4.mm.bing.net/th/id/OIP.dPwXzCOG9V73zGsHQFJGegHaE8?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Sunset Resort">
<div class="hotel-info">
<h2>Sunset Resort<br>Matara</h2>
<p>Beachside elegance with buffet options and live music packages.<br><br>Contact No:071-5643800</p>
<div class="price">Rs.300,000 (for 100 guests)<br><br><a href="cart.php?action=add&hotel_id=2&item_name=Sunset%20Resort%20100%20Guests&price=300000" class="book-btn">Add to Cart</a><br><br>Rs.400,000 (for 200 guests)</div>
<a href="cart.php?action=add&hotel_id=2&item_name=Sunset%20Resort%20200%20Guests&price=400000" class="book-btn">Add to Cart</a>
</div>
</div>

<!-- Hotel 3 -->
<div class="hotel-card">
<img src="https://www.fivestaralliance.com/files/fivestaralliance.com/home_page_hero_image/SIG%20Ciragan%20Palace%20Hotel%20Kempinski%20Istanbul%205.jpg" alt=" Grand Heaven Hotel">
<div class="hotel-info">
<h2>Grand Heaven Hotel<br>Colombo</h2>
<p>Modern ballroom with LED lighting and wedding décor packages.<br><br>Contact No:070-3567843</p>
<div class="price">Rs.200,000 (for 100 guests)<br><br><a href="cart.php?action=add&hotel_id=3&item_name=Grand%20Heaven%20Hotel%20100%20Guests&price=200000" class="book-btn">Add to Cart</a><br><br>Rs.350,000 (for 200 guests)</div>
<a href="cart.php?action=add&hotel_id=3&item_name=Grand%20Heaven%20Hotel%20200%20Guests&price=350000" class="book-btn">Add to Cart</a>
</div>
</div>

<!-- Hotel 4 -->
<div class="hotel-card">
<img src="https://th.bing.com/th/id/R.54f36ed0f12d24c19c1f37999f29f3e9?rik=LQGHe2D3d5M3tw&riu=http%3a%2f%2fhauteliving.com%2fwp-content%2fuploads%2f2016%2f07%2fWaldorf.jpg&ehk=5VAPB3dfFRPzjN4W5GpRNp8owHRqn7x5Ctb9sOUs73A%3d&risl=&pid=ImgRaw&r=0" alt="Lotus Luxe Hall">
<div class="hotel-info">
<h2>Hotel Araliya<br>Wadduwa</h2>
<p>Classic indoor hall ideal for grand receptions and traditional ceremonies.<br><br>Contact No:077-8765007</p>
<div class="price">Rs.250,000 (for 150 guests)<br><br><a href="cart.php?action=add&hotel_id=4&item_name=Hotel%20Araliya%20150%20Guests&price=250000" class="book-btn">Add to Cart</a><br><br>Rs.400,000 (for 250 guests)</div>
<a href="cart.php?action=add&hotel_id=4&item_name=Hotel%20Araliya%20250%20Guests&price=400000" class="book-btn">Add to Cart</a>
</div>
</div>
</section>

<footer>
<p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
</footer>

</body>
</html>