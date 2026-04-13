<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <h2>Inventory System</h2>
    <div>
        <a href="dashboard.php">Home</a>
        <a href="view_products.php">Products</a>
    </div>
</div>

<h1 class="title">Dashboard</h1>

<?php
include 'db.php';
$result = $conn->query("SELECT COUNT(*) as total FROM products");
$row = $result->fetch_assoc();
?>

<h3 style="text-align:center;">Total Products: <?php echo $row['total']; ?></h3>

<div class="container">

    <div class="card">
        <h3>➕ Add Product</h3>
        <a href="add_product.html">Go</a>
    </div>

    <div class="card">
        <h3>📦 View Products</h3>
        <a href="view_products.php">Go</a>
    </div>

</div>

<footer>
    <p>© 2026 Inventory System</p>
</footer>

</body>
</html>
