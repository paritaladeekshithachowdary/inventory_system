<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "turntable.proxy.rlwy.net";
$dbname = "railway";
$username = "root";
$password = "bxcyizHeRtKMmIiCqoEFCkPensTLLMag";
$port = 47115;

try {
    $conn = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password
    );

    // Enable error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
