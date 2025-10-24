<?php

include("connection.php");

session_start();
$msg=' ';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select1="SELECT * FROM `customer` where Email='$email' and User_Password='$password' ";
    $select_customer = mysqli_query($conn,$select1);
    if ($select_customer && mysqli_num_rows($select_customer) > 0) {
        $row1 = mysqli_fetch_assoc($select_customer);

        $_SESSION['email'] = $row1['Email'];
        $_SESSION['customer_id'] = $row1['CustomerID'];

        
        header('Location: homepage.php');
        exit();
    } else {
        $msg = "Incorrect email or password!";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register / Forgot Password Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h1>Eternal Bliss Planners</h1>
    <div class="form">
        <form action="" method="post">
            <h2>Login</h2>
            <p class="msg"><?=$msg?></p>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>
            <button class="btn" name="submit">Login Now</button>
            <p>Do not have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>
<footer>
    <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
   
</footer>
</body>
</html>
