<?php
session_start();
//Checks for username submission
if (isset($_POST['username'])) {    
//stores username in session
$_SESSION['username'] = $_POST['username'];

}else {
    //lets user know they need to provide a username.
    echo "Error: Please input a username.";
}
