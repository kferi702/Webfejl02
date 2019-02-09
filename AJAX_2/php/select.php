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
            . "<td><button class='torol' mez='{$row['mez']}'> &#128465; </button></td>"
            . "</tr>";
}
echo $html;

$html = "<tr>"
        . "<td></td>"
        . "<td id='vnev' contenteditable></td>"
        . "<td id='knev' contenteditable></td>"
        . "<td><button class='ment'> + </button></td>"
        . "</tr>";
$html .= "</table>";
echo $html;

$connection->close();
