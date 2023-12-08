<link rel="stylesheet" type="text/css" href="../css/external.css">

<?php
require_once '../models/session.php';
include 'navigation.php';

// table name from the URL
$tableName = isset($_GET['table']) ? $_GET['table'] : '';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "phpfinaldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all records from the selected table
$query = "SELECT * FROM $tableName";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Table</title>
    <link rel="stylesheet" type="text/css" href="../css/external.css">
</head>
<br>
<br>
<center><body>

<!-- Back button -->
<center><button onclick="goBack()">Go Back</button></center>
<br>
<br>

<!-- Form for adding a new record -->
<center><form action="sqlProcess.php?action=add" method="post">
    <?php if ($tableName === 'users'): ?>
        <!-- Fields for "users" table -->
        <h2>Add New User</h2><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    <?php elseif ($tableName === 'orders'): ?>
        <!-- Fields for "orders" table -->
        <h2>Add New Order</h2>
        <label for="order_date">Order Date:</label>
        <input type="date" name="order_date" required>

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>
    <?php endif; ?></center>
    <button type="submit">Add Data</button>

<?php
// Display table contents
if ($result->num_rows > 0) {
    echo "<h2>Contents of $tableName:</h2>";
    echo "<table border='1'>";
    
    // Display table header
    echo "<tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";

    // Display table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found in the table.";
}

// Close connection
$conn->close();
?>

<script>
function goBack() {
    window.history.back();
}
</script>

</body></center>
</html>