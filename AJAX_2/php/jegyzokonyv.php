<?php

require_once('../config/connect.php');

if (isset($_POST['mez'])) {
    $mez = $_POST['mez'];

    $sql = "SELECT * FROM jegyzokonyv WHERE mez = '$mez';";
    $result = $connection->query($sql);

    if (!$result) {
        die('Hiba a lekérdezés során!');
    }

    while ($row = $result->fetch_assoc()) {
        $html = "<ul>";
        $html .= "<li>{$row['be']}</li>"
                . "<li>{$row['ki']}</li>"
                . "<li>{$row['bkis']}</li>"
                . "<li>{$row['bjo']}</li>"
                . "</ul>";
        echo $html;
    }
}

$connection->close();
