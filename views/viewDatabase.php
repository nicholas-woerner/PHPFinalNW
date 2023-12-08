<link rel="stylesheet" type="text/css" href="../css/external.css">
<?php

require_once '../models/session.php';
include 'navigation.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password is set for the root user
$dbname = "phpFinalDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get table information
$query = "SHOW TABLES";
$result = $conn->query($query);

// Display table information
if ($result->num_rows > 0) {
    echo "<h2>Tables in the database:</h2>";
    echo "<ul>";

    // Iterate through the result set
    while ($row = $result->fetch_assoc()) {
        // Check if the key exists before accessing it
        if (isset($row['Tables_in_phpfinaldb'])) {
            // Generate links for each table
            $tableName = $row['Tables_in_phpfinaldb'];
            echo "<li><a href='viewTable.php?table=$tableName'>$tableName</a></li>";
        } else {
            echo "<li>Unknown Table</li>";
        }
    }
    echo "</ul>";
} else {
    echo "No tables found in the database.";
}

// Close connection
$conn->close();
?>