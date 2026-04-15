<?php
$host = "turntable.proxy.rlwy.net";
$username = "root";
$password = "bxcyizHeRtKMmIiCqoEFCkPensTLLMag";
$database = "railway";
$port = 47115;

$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
