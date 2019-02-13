<?php

require_once('../config/connect.php');

$sql = 'SELECT mez, magassag, post FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<table id='adatok'>";

while ($row = $result->fetch_assoc()) {
    $html .= "<th>Mezszám</th>";
    $html .= "<th>Magasság</th>";
    $html .= "<th>Poszt</th>";
}

$html .= "</table>";
echo $html;

$connection->close();
