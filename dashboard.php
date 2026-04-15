<?php
// 🔴 Show errors (IMPORTANT for Railway debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Inventory System</h1>
    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="view_products.php">Products</a>
    </div>
</div>

<h2 style="text-align:center;">Dashboard</h2>

<?php
// 🔹 Run query safely
$sql = "SELECT COUNT(*) as total FROM products";
$result = $conn->query($sql);

// 🔴 If query fails → show error
if (!$result) {
    die("Query Failed: " . $conn->error);
}

// 🔹 Fetch result
$row = $result->fetch_assoc();
$total_products = $row['total'];
?>

<div style="text-align:center; margin-top:20px;">
    <div style="display:inline-block; padding:20px; border-radius:10px; background:#f4f4f4;">
        <h3>Total Products</h3>
        <p style="font-size:30px; font-weight:bold;">
            <?php echo $total_products; ?>
        </p>
    </div>
</div>

<br>

<div style="text-align:center;">
    <a href="view_products.php">
        <button style="padding:10px 20px; font-size:16px;">View Products</button>
    </a>
</div>

<footer style="text-align:center; margin-top:30px;">
    <p>© 2026 Inventory System</p>
</footer>

</body>
</html>
