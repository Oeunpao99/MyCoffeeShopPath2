<?php
// Include 'database.php' to establish a database connection
include 'database.php';

// Function to get coffee details by ID
function getCoffeeDetails($coffeeId) {
    global $conn;

    // SQL query to retrieve coffee details by ID
    $sql = "SELECT * FROM coffee_details WHERE coffee_id = $coffeeId";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch coffee details and return them as an associative array
        $coffeeDetails = $result->fetch_assoc();
        return $coffeeDetails;
    } else {
        return false; // Coffee details not found
    }
}
?>
