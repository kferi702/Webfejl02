<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM jatekos;';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<table>"
        . "<tr>"
        . "<th>Mez</th>"
        . "<th>Név</th>"
        . "<th>Magasság</th>"
        . "<th>Poszt/<th>"
        . "</tr>";

while ($row = $result->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['mez']}</td>"
            . "<td>{$row['nev']}</td>"
            . "<td>{$row['magassag']}</td>"
            . "<td>{$row['post']}</td>"
            . "</tr>";
}
echo $html;

$connection->close();
