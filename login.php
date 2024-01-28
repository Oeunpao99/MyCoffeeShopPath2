<?php
session_start();
include 'database.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Retrieve user data from the database based on the provided email
    $sql = "SELECT * FROM registerusers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $row['user_id']; // Store user ID in a session variable
            $_SESSION['username'] = $row['username']; // Store username in a session variable
            $_SESSION['balance'] = $row['balance']; // Store balance in a session variable
            header("Location: home.html"); // Redirect to the home page
            exit();
        } else {
            // Password is incorrect
            echo "Incorrect password. Please try again.";
        }
    } else {
        // User with the provided email doesn't exist
        echo "User with this email does not exist.";
    }

    $stmt->close();
    $conn->close();
}
?>
