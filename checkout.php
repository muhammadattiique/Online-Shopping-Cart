<?php
session_start();

if (empty($_SESSION['cart'])) {
    header("Location: index.php");
    exit;
}

$grandTotal = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout</title>
<link rel="stylesheet" href="checkout_style.css">
</head>
<body>

<div class="invoice-container">
  <h1>Invoice</h1>
  <p class="date">Date: <?= date("d M Y"); ?></p>

  <table>
    <tr>
      <th>Product</th>
      <th>Price</th>
      <th>Qty</th>
      <th>Total</th>
    </tr>

    <?php foreach ($_SESSION['cart'] as $item):
      $total = $item['price'] * $item['quantity'];
      $grandTotal += $total;
    ?>
    <tr>
      <td class="product">
        <img src="images/<?= $item['image']; ?>">
        <?= $item['name']; ?>
      </td>
      <td>₨<?= $item['price']; ?></td>
      <td><?= $item['quantity']; ?></td>
      <td>₨<?= $total; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

  <h2 class="grand">Grand Total: ₨<?= $grandTotal; ?></h2>

  <div class="actions">
    <button onclick="window.print()">Print Bill</button>
    <a href="cart.php">Back to Cart</a>
    <a href="index.php">Continue Shopping</a>
  </div>
</div>

</body>
</html>
