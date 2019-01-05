<?php
    session_start();
    require_once('config/connect.php');
    $_SESSION['regErr'] = [];
    require_once('config/functions.php');
    
    if (!isset($_POST['reg'])) {
        header('Location: index.php');
        die();
    }
    
    $username = readPost('username');
    
    $sql = 'SELECT username FROM user WHERE username = "$username"';
    $res = $connection->query($sql);
    
    if ($res->num_rows > 0) {
        
        $_SESSION['regErr']['username'] = 'Már létezik ilyen felhasználónév!';
        header('Location: reg.php');
    }
    
    $sql = "INSERT INTO user (username, password, reg_date, active) VALUES ('$username', '12345', 'CURDATE()')";
    header('Location: reg.php');
    