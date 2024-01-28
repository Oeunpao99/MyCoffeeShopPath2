<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Set initial balance
    $initial_balance = 0.00;

    // Insert user data into the database
    $sql = "INSERT INTO registerusers (username, email, password, balance) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd", $username, $email, $hashed_password, $initial_balance);
    $stmt->execute();
    $stmt->close();

    echo "Registration successful. You can now <a href='login.html'>login</a>.";
} else {
    header("Location: registration.html");
    exit();
}
?>
