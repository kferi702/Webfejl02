<?php
require_once('../config/connect.php');

session_start();

if (isset($_POST['enter'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?;";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $email, $pwd);
}
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Galéria</title>
        <?php require_once('./templates/head.html'); ?>
    </head>
    <body>

    </body>
</html>
