<?php

require_once('../config/connect.php');

$sql = 'SELECT * FROM user';
$result = $connection->query($sql);

if (!$result) {
    die('Hiba a lekérdezés során!');
}

$connection->close();
