<?php

session_start();
require_once('config/connect.php');
if (isset($_POST['submit'])) {
    $userName = $_POST['user'];
    $pwd = $_POST['password'];
    $sql = "SELECT id, username, password FROM user WHERE username = '$userName'";
    $res = $conn->query($sql);

    if ($res->num_rows == 1) {
        $row = $res->fetch_row();
        $userDb = $row[1];
        $hash = $row[2];

        if (password_verify($pwd, $hash)) {
            // Belépett a felhasználó

            $_SESSION['uid'] = $row[0];
        } else {
            // Helytelen felhasználó vagy jelszó
            $_SESSION['error'] = 'Helytelen felhasználónév vagy jelszó!';
        }
    }
}
