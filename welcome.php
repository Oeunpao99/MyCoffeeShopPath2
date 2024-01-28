<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>Hello, <?php echo $_SESSION['user_name']; ?>! You are now logged in.</p>
    <!-- Add more content as needed -->
    <a href="logout.php">Logout</a> <!-- Provide a link to log out if needed -->
</body>
</html>
