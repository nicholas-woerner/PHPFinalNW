<?php
require_once '../models/session.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Survey</title>
    <link rel="stylesheet" type="text/css" href="../css/external.css">
</head>
<body>
<header>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>
    </header>
    <main>
    <h1>Project Satisfaction Survey</h1>
        <form action="submit_survey.php" method="post">
            <label for="satisfaction">Did you like the project?</label><br>
            <input type="radio" id="yes" name="satisfaction" value="yes">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="satisfaction" value="no">
            <label for="no">No</label><br>
            <input type="submit" value="Submit">
        </form>
    </main>

</body>
</html>