<?php
include 'db.php';

$id = $_GET['id'];
$type = $_GET['type'];

if ($type == "inc") {
  mysqli_query($conn, "UPDATE cart SET quantity = quantity + 1 WHERE id=$id");
} else {
  mysqli_query($conn, "UPDATE cart SET quantity = quantity - 1 WHERE id=$id");
}

header("Location: cart.php");
?>
