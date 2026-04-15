<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1 style="text-align:center;">Dashboard</h1>

<?php
$sql = "SELECT COUNT(*) as total FROM products";
$stmt = $conn->query($sql);

$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_products = $row['total'];
?>

<h3 style="text-align:center;">
    Total Products: <?php echo $total_products; ?>
</h3>

<div style="text-align:center;">
    <a href="view_products.php">View Products</a>
</div>

</body>
</html>
