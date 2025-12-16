<?php
session_start();
include 'db.php'; // connect to database

$name = $_GET['name'];
$price = $_GET['price'];
$image = $_GET['image'] ?? 'default.jpg'; // optional for UI, not stored in DB

// 1️⃣ Add to PHP session (your existing logic)
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$found = false;
foreach($_SESSION['cart'] as &$item) {
    if($item['name'] == $name) {
        $item['quantity'] += 1;
        $found = true;
        break;
    }
}

if(!$found) {
    $_SESSION['cart'][] = [
        'name' => $name,
        'price' => $price,
        'quantity' => 1,
        'image' => $image
    ];
}

// 2️⃣ Insert into database (new)
$insert = $conn->prepare("INSERT INTO cart (product_name, price) VALUES (?, ?)");
$insert->bind_param("si", $name, $price);
$insert->execute();

// Redirect back to index.php (same as before)
header("Location: index.php");
exit;
?>
