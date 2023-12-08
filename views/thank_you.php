<?php
require_once '../models/session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="../css/external.css">
</head>
<body>
    <header>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>
    </header>
    <main>
        <h1>Thank You for Taking the Survey</h1>

        <?php
        // Check if 'satisfaction' query parameter is set
        if (isset($_GET["satisfaction"])) {
            $satisfaction = $_GET["satisfaction"];

            // Display the user's answer
            echo "<p>Your response: $satisfaction</p>";
        }
        ?>
        
        <p>Your survey response has been recorded.</p>
        <p><a href="home.php">Back to Home</a></p>
    </main>
</body>
</html>