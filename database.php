<?php
$servername = "localhost"; // Corrected
$username = "root";
$password = "Dec061204P@ssword";
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
