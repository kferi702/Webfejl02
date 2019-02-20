<?php
require_once('../config/connect.php');

session_start();

if (isset($_POST['enter'])) {

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE email = ? AND password = ?;";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $firstname, $lastname);
        $stmt->fetch();
        $_SESSION['userid'] = $id;
    } else {
        header('Location: index.php');
    }

    $stmt->close();
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
