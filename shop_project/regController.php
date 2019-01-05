<?php
    require_once('config/functions.php');
    session_start();
    $_SESSION['regErr'] = [];
    
    if (!isset($_POST['reg'])) {
        header('Location: index.php');
        die();
    }
    
    $username = readPost('username');
    $password = readPost('password');
    $passwordConfirm = readPost('passwordConfirm');
