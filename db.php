<?php
$conn = new mysqli(
    "mysql.railway.internal",
    "root",
    "bxcyizHeRtKMmIiCqoEFCkPensTLLMag",
    "railway",
    3306
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
