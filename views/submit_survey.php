<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'satisfaction' radio button is selected
    if (isset($_POST["satisfaction"]) && !empty($_POST["satisfaction"])) {
        $satisfaction = $_POST["satisfaction"]; // Get the selected option

        // Redirect to the thank-you page and pass the selected option as a query parameter
        header("Location: thank_you.php?satisfaction=$satisfaction");
        exit();
        
    } else {
        // If "satisfaction" is not selected, redirect to error.php with an error message
        header("Location: error.php?error=1");
        exit();
    }
}
?>