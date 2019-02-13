<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$html = "<select id='jatekos'>"
        . "<option value='null'> Válassz! </option>";

while ($row = $result->fetch_assoc()) {
    $html .= "<option value='{$row['mez']}'>{$row['nev']}</option>";
}

$html .= "</select>";
echo $html;

$connection->close();
