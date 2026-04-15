<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
</head>
<body>

<h2 style="text-align:center;">Product List</h2>

<?php
$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($rows) == 0) {
    echo "<h3 style='text-align:center;'>No products found</h3>";
} else {

    echo "<table border='1' style='margin:auto;'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
          </tr>";

    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
