<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM user;';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<table>"
        . "<tr>"
        . "<th>Sorszám</th>"
        . "<th>Vezetéknév</th>"
        . "<th>Keresztnév</th>"
        . "<th>Művelet</th>"
        . "</tr>";

while ($row = $result->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['ID']}</td>"
            . "<td>{$row['vezeteknev']}</td>"
            . "<td>{$row['keresztnev']}</td>"
            . "<td><button class='torol' id='{$row['ID']}'> &#12846; </button></td>"
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

$connection->close();
