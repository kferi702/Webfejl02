<?php

require_once('../config/init.php');

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM kapcsolatok WHERE email = ? AND jelszo = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        /*
         * Sikeres bejelentkezés
         */

        $stmt->bind_result($id, $nev, $email, $jelszo);
        $stmt->fetch();
        $_SESSION['userid'] = $id;
        echo 'Beléptél!';
    } else {
        /*
         * Sikertelen bejelentkezés
         */
        echo 'Helytelen';
    }
}
