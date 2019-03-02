<?php

require_once '../config/init.php';
is_logged();

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['feltolt'])) {

    $katid = $_POST['katid'];
    $munkaado = $_POST['munkaado'];
    $munkakor = $_POST['munkakor'];
    $hely = $_POST['hely'];
    $leiras = $_POST['leiras'];
    $fizetes = $_POST['fizetes'];
    $userid = $_SESSION['userid'];

    $sql = "INSERT INTO allasok (kategoria_id, munkaado, munkakor, leiras, fizetes, hely, kapcsolatid)"
            . " VALUES(?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isssssi', $katid, $munkaado, $munkakor, $leiras, $fizetes, $hely, $userid);
    $stmt->execute();
    $stmt->close();
}
$conn->close();
