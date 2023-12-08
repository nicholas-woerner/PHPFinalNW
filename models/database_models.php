<?php

function getDatabaseConnection() {
    try {
        // Retrieve database credentials from the session
        $username = isset($_SESSION['db_username']) ? $_SESSION['db_username'] : '';
        $password = isset($_SESSION['db_password']) ? $_SESSION['db_password'] : '';

        // Database connection parameters
        $dsn = "mysql:host=localhost;dbname=phpFinalDB;charset=utf8mb4";
        
        // Create a PDO object
        $pdo = new PDO($dsn, $username, $password);

        // Set PDO attributes for error handling
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        // Redirect to an error page if an exception occurs
        header('Location: error.php?message=' . urlencode($e->getMessage()));
        exit();
    }
}

?>
