<?php

$connection = new mysqli('localhost', 'root', '', 'kosarlabda', '3306');

if ($connection->connect_errno) {
    die('Hiba a csatalkozás során:\n' . $connection_error);
}

if (!$connection->set_charset("utf8")) {
    echo 'Nem sikerült beállítani a karakterkódolást!' . $connection->error;
}
