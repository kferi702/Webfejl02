<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM user';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = '<table>'
        . '<tr>Sorszám<th></th>'
        . '<th>Vezetéknév</th>'
        . '<th>Keresztnév</th>'
        . '<th>Művelet</th></tr>';

$html .= '</table>';

$connection->close();
