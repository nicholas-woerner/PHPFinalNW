<!DOCTYPE html>
<?php 
require_once '../models/session.php';
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/external.css">
    </head>
<body>
<header>
    <nav>
        <?php include 'navigation.php'; ?>
    </nav>
</header>
    <center><h2>Login</h2></center>
    <br>
        <center><div>
        <form action="infologin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <br>
            <div class="button-container">
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
   </center>
</body>
</html>