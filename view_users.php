<?php
// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include your database connection file
include 'database.php';

// Check if the user is logged in and has the right privileges if necessary
// ...

// Fetch user data from the database
$sql = "SELECT id, username, email FROM registerusers"; // Adjust the fields as necessary
$result = $conn->query($sql);

// Start the HTML output
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="tableforUser.css"> <!-- Link to your CSS file -->
</head>
<body>';

// Check if we got any results
if ($result && $result->num_rows > 0) {
    // Open the table
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>';

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . htmlspecialchars($row["id"]) . '</td>
                <td>' . htmlspecialchars($row["username"]) . '</td>
                <td>' . htmlspecialchars($row["email"]) . '</td>
              </tr>';
    }

    // Close the table
    echo '</table>';
} else {
    echo "0 results";
}

// Close the HTML output
echo '</body>
</html>';

// Close the database connection
$conn->close();
?>
