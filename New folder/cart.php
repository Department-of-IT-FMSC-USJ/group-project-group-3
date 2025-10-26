<?php
include("connection.php");
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['customer_id'])) {
    header('Location: login.php');
    exit();
}


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action']) && $_GET['action'] === 'add'){ 
    $item_name = $_GET['item_name'] ?? '';
    $price = $_GET['price'] ?? 0;

    if ($item_name && $price) {
        $hotel_id = $_GET['hotel_id'] ?? null;
        $cake_id = $_GET['cake_id'] ?? null;
        $deco_id = $_GET['deco_id'] ?? null;
        $groom_id = $_GET['groom_id'] ?? null;
        $jewelry_id = $_GET['jewelry_id'] ?? null;
        $photography_id = $_GET['photography_id'] ?? null;
        $salon_id = $_GET['salon_id'] ?? null;
        $bridal_id = $_GET['bridal_id'] ?? null;

        $_SESSION['cart'][] = [
            'item_name' => $item_name,
            'price' => $price,
            'hotel_id' => $hotel_id,
            'cake_id' => $cake_id,
            'deco_id' => $deco_id,
            'groom_id' => $groom_id,
            'jewelry_id' => $jewelry_id,
            'photography_id' => $photography_id,
            'salon_id' => $salon_id,
            'bridal_id' => $bridal_id
        ];

        header('Location: cart.php');
        exit();
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'remove') {
    $index = $_GET['index'] ?? null;
    if ($index !== null && isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index
    }
    header('Location: cart.php');
    exit();
}


$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'];
}


$booked_dates = [];
$booking_query = "SELECT BookingDate FROM booking";
$result = mysqli_query($conn, $booking_query);
while ($row = mysqli_fetch_assoc($result)) {
    $booked_dates[] = $row['BookingDate'];
}


$error_message = '';
if (isset($_POST['check_availability'])) {
    $booking_date = $_POST['booking_date'];
    $customer_id = $_SESSION['customer_id'];

    if (in_array($booking_date, $booked_dates)) {
        $error_message = "❌ The selected date ($booking_date) is already booked. Please choose another date.";
    } else {
        $hotel_id = $cake_id = $deco_id = $groom_id = $jewelry_id = $photography_id = $salon_id = $bridal_id = 'NULL';

        foreach ($_SESSION['cart'] as $item) {
            if (!empty($item['hotel_id'])) $hotel_id = "'" . $item['hotel_id'] . "'";
            if (!empty($item['cake_id'])) $cake_id = "'" . $item['cake_id'] . "'";
            if (!empty($item['deco_id'])) $deco_id = "'" . $item['deco_id'] . "'";
            if (!empty($item['groom_id'])) $groom_id = "'" . $item['groom_id'] . "'";
            if (!empty($item['jewelry_id'])) $jewelry_id = "'" . $item['jewelry_id'] . "'";
            if (!empty($item['photography_id'])) $photography_id = "'" . $item['photography_id'] . "'";
            if (!empty($item['salon_id'])) $salon_id = "'" . $item['salon_id'] . "'";
            if (!empty($item['bridal_id'])) $bridal_id = "'" . $item['bridal_id'] . "'";
        }

        $insert_query = "
            INSERT INTO booking (
                CustomerID, HotelNo, CShopID, DShopId, GshopID, shopid, StudioId, SalonNo, BshopID, BookingDate
            ) VALUES (
                '$customer_id', $hotel_id, $cake_id, $deco_id, $groom_id, $jewelry_id, $photography_id, $salon_id, $bridal_id, '$booking_date'
            )
        ";

        mysqli_query($conn, $insert_query);

        
        header("Location: payment.php?amount=$total&date=$booking_date");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Cart</title>
<style>
body { font-family: Arial, sans-serif; background: #f9f7f7; margin: 0; padding: 0; }

.container { width: 60%; 
  margin: 40px auto; 
  background: white; 
  padding: 25px; 
  border-radius: 8px; 
  box-shadow: 0 0 10px rgba(0,0,0,0.1); }

table { width: 100%; border-collapse: collapse; }

th, td { padding: 12px; border-bottom: 1px solid #ccc; text-align: center; }

h2 { text-align: center; color: #333; }

.btn { display: inline-block; 
  padding: 8px 14px; 
  background: #e60073; 
  color: white; 
  border-radius: 6px; 
  text-decoration: none; 
  margin-top: 10px; 
  transition: 0.3s; 
  cursor: pointer; border: none; }
.btn:hover { background: #c40063; }

.action-buttons { text-align: center; margin-top: 20px; }

.total { text-align: right; 
  font-weight: bold; 
  margin-top: 20px; 
  font-size: 1.1rem; }

.back-home { display: flex; justify-content: space-between; margin-bottom: 15px; }

.back-home a { background: #555; color: white; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: 0.3s; }

.back-home a:hover { background: #333; }

label { font-weight: bold; }

input[type="date"] { padding: 8px; font-size: 1rem; border: 1px solid #ccc; border-radius: 6px; margin-top: 8px; }
.error-message { color: red; font-weight: bold; text-align: center; margin-top: 15px; }
</style>
</head>
<body>

<div class="container">
  <div class="back-home">
    <a href="javascript:history.back()">⬅ Back</a>
    <a href="homepage.php">🏠 Home</a>
  </div>

  <h2>Your Cart</h2>

  <?php if (!empty($_SESSION['cart'])): ?>
  <table>
    <tr><th>Item Name</th><th>Price (Rs.)</th><th>Action</th></tr>
    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
      <tr>
        <td><?= htmlspecialchars($item['item_name']) ?></td>
        <td><?= number_format($item['price']) ?></td>
        <td><a class="btn" href="cart.php?action=remove&index=<?= $index ?>">Remove</a></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <?php if($error_message) echo "<div class='error-message'>$error_message</div>"; ?>

  <form method="POST" action="cart.php">
    <div class="total">Total: Rs. <?= number_format($total) ?></div>

    <div style="text-align:center; margin-top:20px;">
      <label for="booking_date">Select Booking Date:</label><br>
      <input type="date" id="booking_date" name="booking_date" required min="<?= date('Y-m-d') ?>">
      <br><small>Already booked dates: 
        <?php echo !empty($booked_dates) ? implode(', ', $booked_dates) : 'None'; ?>
      </small>
    </div>

    <div class="action-buttons">
      <button type="submit" name="check_availability" class="btn">Check Availability</button>
    </div>
  </form>

  <?php else: ?>
    <p style="text-align:center;">🛒 Your cart is empty.</p>
    <div class="action-buttons">
      <a href="photography.php" class="btn">Go Back to Packages</a>
      <a href="homepage.php" class="btn">Go Home</a>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
