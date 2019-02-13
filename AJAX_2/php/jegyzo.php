<?php

require_once('../config/connect.php');

$sql = 'SELECT mez, magassag, post FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<table id='adatok'>"
        . "<th>Mezszám</th>"
        . "<th>Magasság</th>"
        . "<th>Poszt</th>";

while ($row = $result->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['mez']}</th>"
            . "<td>{$row['magassag']}</th>"
            . "<td>{$row['post']}</th>"
            . "</tr>";
}

$html .= "</table>";
echo $html;

$connection->close();
