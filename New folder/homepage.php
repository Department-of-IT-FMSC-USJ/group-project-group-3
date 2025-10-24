<?php
include("connection.php");
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Categories</title>
    <link rel="stylesheet" href="home.css">

</head>

<body>

    <h1>Eternal Bliss Planners<p style="font-size:25px;">These are our services</p></h1>
    <!-- <h2>These are our services</h2> -->

    <div class="category-grid">
        <a href="hotel.php" class="category-item">
            <div class="category-icon">
                <img src="https://media.istockphoto.com/id/146765403/photo/a-luxurious-florida-beach-hotel-during-sunrise.jpg?s=612x612&w=0&k=20&c=pxw9Q78KbvqV6_pS_C-v_m6S_WQjKWLBSdqgRtqMUUg=" alt="Hotel">
            </div>
            <h3>Hotels</h3>
        </a>

        <a href="cake.php" class="category-item">
            <div class="category-icon">
                <img src="https://t4.ftcdn.net/jpg/03/08/40/43/360_F_308404381_LqyMIXDPOR6Ut1TqE2cJRQdxomGsQegc.jpg" alt="Cakes">
            </div>
            <h3>Cakes</h3>
        </a>

        <a href="photography.php" class="category-item">
            <div class="category-icon">
                <img src="https://media.istockphoto.com/id/610259354/photo/young-woman-using-dslr-camera.jpg?s=612x612&w=0&k=20&c=gjAR4JiqA8lkGQzssSrXxo3yl-cwr5j7Hy47cy-10c4=" alt="Photography">
            </div>
            <h3>Photography</h3>
        </a>

        <a href="jewellery.php" class="category-item">
            <div class="category-icon">
                <img src="https://cdn.orra.co.in/media/catalog/product/cache/10238651d5f95594b9023f998383bb67/o/s/osn23038_2_1.jpg" alt="Jewellery">
            </div>
            <h3>Jewellery</h3>
        </a>

        <a href="groomdress.php" class="category-item">
            <div class="category-icon">
                <img src="https://www.nykaafashion.com/style-files/wp-content/uploads/2024/11/mbgo-70.jpg" alt="Groom Dress">
            </div>
            <h3>Groom Dress</h3>
        </a>

        <a href="bridal.php" class="category-item">
            <div class="category-icon">
                <img src="https://i.pinimg.com/736x/be/31/01/be3101c34eab1249837a1df1437a1ec6.jpg" alt="Bridal Dress">
            </div>
            <h3>Bridal Dress</h3>
        </a>

        <a href="salon.php" class="category-item">
            <div class="category-icon">
                <img src="https://media.istockphoto.com/id/1423513079/photo/luxury-hairdressing-and-beauty-salon-interior-with-chairs-mirrors-and-spotlights.jpg?s=612x612&w=0&k=20&c=T2cw6HblRzWPOlxPHsMcV9KRV8aLGOaLojvLe3Yoi_A=" alt="Salon">
            </div>
            <h3>Salon</h3>
        </a>

        <a href="decoration.php" class="category-item">
            <div class="category-icon">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtJfkiVyW3uqs7a-ODm0wtqn-eL2IT1RTUbQ&s" alt="Decos & Flowers">
            </div>
            <h3>Decos & Flowers</h3>
        </a>
    </div>

    <footer>
        <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
    </footer>

</body>
</html>