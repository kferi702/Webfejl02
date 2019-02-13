<?php

require_once('../config/connect.php');

$sql = 'SELECT mez, magassag, post FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<table style='border: 1px solid black' id='adatok'>"
        . "<th>Mezszám</th>"
        . "<th>Magasság</th>"
        . "<th>Poszt</th>";

while ($row = $result->fetch_assoc()) {
    $html .= "<tr style='border: 1px solid black'>"
            . "<td>{$row['mez']}</th>"
            . "<td>{$row['magassag']}</th>"
            . "<td>{$row['post']}</th>"
            . "</tr>";
}

$html .= "</table>";
echo $html;

$connection->close();
