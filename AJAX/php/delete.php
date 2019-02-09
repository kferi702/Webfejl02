<?php

require_once('../config/connect.php');

if (isset($_POST['del'])) {
    $id = $_POST['del'];
    $sql = "DELETE FROM user WHERE ID = '$id';";

    $result = $connection->query($sql);

    if (!$result) {
        die("Hiba a törlés során!");
    }
}

$connection->close();
