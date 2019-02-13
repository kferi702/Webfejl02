<?php

require_once('../config/connect.php');

if (isset($_POST['mez'])) {
    $mez = $_POST['mez'];

    $sql = "SELECT * FROM jegyzokonyv WHERE mez = '$mez';";
    $result = $connection->query($sql);

    if (!$result) {
        die('Hiba a lekérdezés során!');
    }

    if ($result->num_rows == 1) {
        $html = "<ul>";

        $row = $result->fetch_row();
        $html .= "<li>Mezszám: {$row[0]}</li>"
                . "<li>Magasság: {$row[2]}</li>"
                . "<li>Poszt: {$row[3]}</li>"
                . "</ul>";
        echo $html;
    }
}

$connection->close();
