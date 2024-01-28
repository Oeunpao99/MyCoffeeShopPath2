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
$sql = "SELECT id, coffee_id, size, sugar_level,quantity, total_price,timestamp FROM orders"; // Adjust the fields as necessary
$result = $conn->query($sql);

// Start the HTML output
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="table.css"> <!-- Link to your CSS file -->
</head>
<body>';

// Check if we got any results
if ($result && $result->num_rows > 0) {
    // Open the table
    echo '<table>
            <tr>
                <th>No.</th>
                <th>Coffee_id</th>
                <th>Size</th>
                <th>Sugar_level</th>
                <th>Quantity</th>
                <th>TotalP_Price</th>
                <th>Time_Order<th>
            </tr>';

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
        <td>' . htmlspecialchars($row["id"]) . '</td>
        <td>' . htmlspecialchars($row["coffee_id"]) . '</td>
        <td>' . htmlspecialchars($row["size"]) . '</td>
        <td>' . htmlspecialchars($row["id"]) . '</td>
        <td>' . htmlspecialchars($row["sugar_level"]) .'</td>
        <td>' . htmlspecialchars($row["quantity"]) . '</td>
        <td>' . htmlspecialchars($row["total_price"]) . '</td>
        <td>' . htmlspecialchars($row["timestamp"]) . '</td>
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
