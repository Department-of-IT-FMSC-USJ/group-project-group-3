<?php

include("connection.php");

$msg=' ';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    

    $select1="SELECT * FROM `customer` where Email='$email' and User_Password='$password' ";
    $select_customer = mysqli_query($conn,$select1);
    if(mysqli_num_rows($select_customer)>0){
        $msg="User already exist!";
    }
    else{
        $insert1="INSERT INTO `customer` (`UserName`, `Email`, `User_Password`) VALUES ('$name','$email','$password')";
        mysqli_query($conn,$insert1);
        header('location:login.php');
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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>
<body>
    <h1>Eternal Bliss Planners</h1>
    <div class="form">
        <form action="" method="post">
            <h2>Registration</h2>
            <p class="msg"> <? =$msg ?></p>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your user name" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm your password" class="form-control" require>
            </div>
            <button class="btn" name="submit">Register Now</button>
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </div>
<footer>
    <p>&copy; 2025 Eternal Bliss Planners | All Rights Reserved</p>
   
</footer>

</body>
</html>
