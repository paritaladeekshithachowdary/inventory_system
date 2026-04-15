<?php
$host = "containers-us-west-xxx.railway.app"; // your PUBLIC host
$username = "root";                            // your username
$password = "your_password";                   // your password
$database = "railway";                         // your database name
$port = 6543;                                  // your port

$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
