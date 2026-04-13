<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Edit Product</h2>

<form method="POST" style="text-align:center;">
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    <input type="number" name="price" value="<?php echo $row['price']; ?>"><br><br>
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>

<footer>
    <p>© 2026 Inventory System</p>
</footer>

</body>
</html>

<?php
if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $conn->query("UPDATE products SET name='$name', price='$price', quantity='$quantity' WHERE id=$id");

    header("Location: view_products.php");
}
?>
