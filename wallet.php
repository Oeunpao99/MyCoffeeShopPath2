<?php
session_start();
include 'database.php';
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
// Retrieve user data from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wallet</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Header content here -->
    </header>
    <main>
        <section class="wallet-section">
            <h2>Welcome, <?php echo $user['username']; ?></h2>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Total Balance: $<?php echo $user['balance']; ?></p>
            <!-- Other wallet details and actions -->
        </section>
    </main>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>
