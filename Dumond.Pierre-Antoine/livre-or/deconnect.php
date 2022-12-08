<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: connect-users.php');
        exit;
    }
    // Suppresion d'une variable
    unset($_SESSION['user']);
    header('location: index.php');
?>