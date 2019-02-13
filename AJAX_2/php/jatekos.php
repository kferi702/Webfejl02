<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<select id='jatekos'>";
echo $html;

while ($row->fetch_assoc()) {
    $html .= "<option value={'$row[mez]'}</option>";
}

$html .= '</select>';
echo $html;

$connection->close();
