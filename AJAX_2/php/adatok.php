<?php

require_once('../config/connect.php');

if (isset($_POST['mez'])) {
    $mez = $_POST['mez'];
}

$sql = "SELECT * FROM jatekos WHERE mez = '$mez';";
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

if ($result->num_rows == 1) {
    $html = "<ul>";
    $row = $result->fetch_row(); // fetch_row(): Számozott tömb, nem asszociatív, fetch_assoc(): asszociatív tömböt hoz létre
    $html .= "<li> {$row[0]}</li>"
            . "<li> {$row[2]}</li>"
            . "<li> {$row[3]}</li>"
            . "</ul>";

    echo $html;
}

$connection->close();
