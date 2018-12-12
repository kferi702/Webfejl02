<?php
    session_start();
    require_once ('config/connect.php');
    
    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $res = $connection->query($sql);
        
        if ($res->num_rows == 1) {
            
            //Sikeres azonosítás
            $row = $res->fetch_row();
            $_SESSION['uid'] = $row['id'];
            
        } else {
            //Sikertelen azonosítás
            $_SESSION['error'] = "Helytelen felhasználónév vagy jelszó!";
        }
    }
