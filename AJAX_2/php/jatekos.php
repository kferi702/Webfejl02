<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM jatekos';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

