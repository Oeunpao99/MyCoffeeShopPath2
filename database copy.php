<?php
$host = "localhost"; // Your MySQL host (e.g., localhost)
$username = "root"; // Your MySQL username
$password = "Dec061204P@ssword"; // Your MySQL password
$database = "coffee_shop"; // Your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
