<nav>
   <center> <ul>
<?php
        if (isset($_SESSION['username'])) {
            // User is logged in, display the username 
            echo '<li>Welcome, ' . $_SESSION['username'] . '</li>';

        } else {
            // User is not logged in, display a link to the login page
            echo '<li><a href="login.php">Login</a></li>';
        }
?>
<br>
<br>

    <li><a href="home.php">Home</a></li>
    <li><a href="InternetProgramming2.php">Internet Programming</a></li>
    <li><a href="Csharp.php">C#</a></li>
    <li><a href="viewDatabase.php">View/Edit Database</a></li>
    <li><a href="Survey.php">Survey</a></li>
</ul></center>
</nav>