<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Product List</h2>

<form method="GET" style="text-align:center;">
    <input type="text" name="search" placeholder="Search product">
    <button type="submit">Search</button>
</form>
<br>

<?php
include 'db.php';

// Build query
if(isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM products";
}

// Execute query
$result = $conn->query($sql);

// Check error
if (!$result) {
    die("Query Error: " . $conn->error);
}

// Display data
if ($result->num_rows == 0) {
    echo "<h3 style='text-align:center;'>No products found</h3>";
} else {

    echo "<table border='1' cellpadding='10' cellspacing='0' style='margin:auto;'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>
                <a href='edit_product.php?id=".$row['id']."'>Edit</a> |
                <a href='delete_product.php?id=".$row['id']."' onclick=\"return confirm('Delete?')\">Delete</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

<footer style="text-align:center; margin-top:20px;">
    <p>© 2026 Inventory System</p>
</footer>

</body>
</html>
