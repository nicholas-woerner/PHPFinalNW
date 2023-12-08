<?php
//starts or resumes session
session_start();

//Checks for active session
if (isset($_SESSION['user_id'])) {
    //User has active session

} 
else {
    //starts new session
    $_SESSION['user_id'] = uniqid();
}
