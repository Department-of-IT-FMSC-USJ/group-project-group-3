<?php
include("connection.php");
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['customer_id'])) {
    header('Location: login.php');
    exit();
}

$msg = '';
$customer_id = $_SESSION['customer_id'];
$amount = $_GET['amount'] ?? '';
// $amount = $_GET['amount'] ?? 0;
$booking_date = $_GET['date'] ?? '';


// Prepare cart items (if available)
$cart_items = '';
if (!empty($_SESSION['cart'])) {
    $item_names = array_column($_SESSION['cart'], 'item_name');
    $cart_items = implode(', ', $item_names); // join names with commas
}

if (isset($_POST['submit'])) {
    $holder_name = trim($_POST['holder_name'] ?? '');
    $card_number = trim($_POST['card_number'] ?? '');
    $exp_date    = trim($_POST['exp_date'] ?? '');
    $cvv         = trim($_POST['cvv'] ?? '');

    if (!empty($holder_name) && !empty($card_number) && !empty($exp_date) && !empty($cvv) && !empty($amount)) {
        $payment_date = date("Y-m-d H:i:s");
        $reference_no = "REF" . date("YmdHis") . rand(100, 999);

        // Insert into payments table (including items)
        $sql = "INSERT INTO payment (CustomerID, ReferenceNo, Payment_Date, Amount, Items)
                VALUES ('$customer_id', '$reference_no', '$payment_date', '$amount', '$cart_items')";

        if ($conn->query($sql) === TRUE) {
            // Clear the cart after successful payment
            unset($_SESSION['cart']);

            $msg = "
                <div class='alert alert-success text-center'>
                    ✅ Payment Successful!<br>
                    <strong>Reference No:</strong> $reference_no<br>
                    <strong>Date:</strong> $payment_date<br>
                    <strong>Amount Paid:</strong> Rs. $amount<br>
                    <strong>Items:</strong> $cart_items
                </div>";
        } else {
            $msg = "<div class='alert alert-danger text-center'>❌ Database Error: " . $conn->error . "</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger text-center'>❌ Payment Failed! Please fill all fields correctly.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment</title>
<link rel="stylesheet" href="payment.css">
<style>
body {
  background: #f9f7f7;
  font-family: Arial, sans-serif;
}
.column {
  max-width: 420px;
  margin: 40px auto;
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.15);
}
h3.title {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}
.input-box {
  margin-bottom: 15px;
}
.input-box span {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}
.input-box input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 6px;
}
.btn {
  width: 100%;
  padding: 10px;
  background: #e60073;
  border: none;
  color: white;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover {
  background: #c40063;
}
.alert {
  margin-bottom: 15px;
  padding: 12px;
  border-radius: 6px;
}
.alert-success {
  background: #d4edda;
  color: #155724;
}
.alert-danger {
  background: #f8d7da;
  color: #721c24;
}
.back-home {
  text-align: center;
  margin-top: 15px;
}
.back-home a {
  text-decoration: none;
  background: #555;
  color: white;
  padding: 8px 16px;
  border-radius: 6px;
  transition: 0.3s;
}
.back-home a:hover {
  background: #333;
}
</style>
</head>
<body>

<div class="column">
    <form action="" method="POST">
        <h3 class="title text-center">Payment</h3>

        <?php echo $msg; ?>

        <div class="input-box">
            <span>Name on Card:</span>
            <input type="text" name="holder_name" placeholder="Card Holder Name" required>
        </div>

        <div class="input-box">
            <span>Card Number:</span>
            <input type="number" name="card_number" placeholder="1111222233334444" maxlength="16" required>
        </div>

        <div class="input-box">
            <span>Expiry Date:</span>
            <input type="text" name="exp_date" placeholder="MM/YY" required>
        </div>

        <div class="input-box">
            <span>CVV:</span>
            <input type="number" name="cvv" placeholder="123" required>
        </div>

        <div class="input-box">
            <span>Amount to Pay:</span>
            <input type="text" value="Rs. <?php echo $amount; ?>" disabled>
        </div>

        <div class="input-box">
            <span>Selected Items:</span>
            <input type="text" value="<?php echo htmlspecialchars($cart_items ?: 'No items'); ?>" disabled>
        </div>

        <button class="btn" type="submit" name="submit">Pay Now</button>
    </form>

    <div class="back-home">
        <a href="homepage.php">🏠 Back to Home</a>
    </div>
</div>

</body>
</html>
