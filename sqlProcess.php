<?php
// Check the action parameter
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Handle the actions accordingly
switch ($action) {
    case 'add':
    // Process adding a new record
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $field1 = $_POST['field1'];
        $field2 = $_POST['field2'];

        // Validate and sanitize input
        // Perform the database insertion
        $sql = "INSERT INTO your_table (field1, field2) VALUES ('$field1', '$field2')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
        } else {
            echo "Error adding record: " . $conn->error;
        }
    }
    break;

case 'edit':
    // Process editing an existing record
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $field1 = $_POST['field1'];
        $field2 = $_POST['field2'];
        $recordId = $_GET['id'];

        // Validate and sanitize input
        // Perform the database update
        $sql = "UPDATE your_table SET field1='$field1', field2='$field2' WHERE id=$recordId";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    break;

case 'delete':
    // Process deleting a record
    $recordId = $_GET['id'];

    // Perform the database deletion
    $sql = "DELETE FROM your_table WHERE id=$recordId";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    break;

default:
    // Handle other actions or show an error message
    break;
}

// Close connection
$conn->close();
}
?>