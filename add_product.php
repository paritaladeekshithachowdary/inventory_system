
<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$conn->query("INSERT INTO products (name, price, quantity)
VALUES ('$name', '$price', '$quantity')");

header("Location: view_products.php");
?>
