<?php
    
    require_once('config/functions.php');
    
    if (!isset($_POST['reg'])) {
        header('Location: index.php');
        die();
    }
    
    $username = readPost('username');
    $password = readPost('password');
    