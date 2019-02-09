<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM user';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = '<table>'
        . '<tr>'
        . '<th>Sorszám</th>'
        . '<th>Vezetéknév</th>'
        . '<th>Keresztnév</th>'
        . '<th>Művelet</th>'
        . '</tr>';

while ($row = $result->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['ID']}</td>"
            . "<td>{$row['vezeteknev']}</td>"
            . "<td>{$row['keresztnev']}</td>"
            . "</tr>";
}
$html .= '</table>';

echo $html;

$connection->close();
