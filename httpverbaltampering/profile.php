<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
  // Redirect them to the login page
  header("Location: index.html");
  exit();
}

// Simulating fetching user-specific order history
$orders = array(
  array('id' => 1, 'product' => 'Product A', 'price' => '$10'),
  array('id' => 2, 'product' => 'Product B', 'price' => '$20'),
  // ...
);

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
  
  <h2>Your Order History:</h2>
  
  <table>
    <tr>
      <th>Order ID</th>
      <th>Product</th>
      <th>Price</th>
    </tr>
    
    <?php foreach ($orders as $order) : ?>
    <tr>
      <td><?php echo $order['id']; ?></td>
      <td><?php echo $order['product']; ?></td>
      <td><?php echo $order['price']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  
  <a href="logout.php" id="logout-link">Logout</a>
  
  <script src="script.js"></script>
</body>
</html>
