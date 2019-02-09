<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM jatekos;';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

while ($row = $result->fetch_assoc()) {
    $players = "<option id='player'>{$row['nev']}</option>";
    echo $players;
}

$connection->close();
