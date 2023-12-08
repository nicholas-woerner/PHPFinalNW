<?php
require_once '../models/session.php';
require_once 'navigation.php';
require_once '../models/database_model.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';


switch ($action) {
    case 'login':
        //redirect to a login view
        include '../views/login.php'
        break;

    case 'viewDatabase':
        try {
            $pdo = getDatabaseConnection();
            include '../views/viewDatabase.php';

        } catch (PDOException $e) {
            // Redirect to an error page if an exception occurs
            header('Location: ../views/error.php?message=' . urlencode($e->getMessage()));
            exit();
        }
        break;
    
    case 'InternetProgramming2':
        //Actions for InternetProgramming2 view
        include '../views/InternetProgramming2.php'
        break;
    
    case 'Csharp':
        //actions for Csharp view
        include '../views/Csharp.php'
        break;

    default:
        //ihome.php 
        header('Location: ../views/home.php');
        exit();
}
?>