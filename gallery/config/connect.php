<?php

$connection = new mysqli('localhost', 'esti_gallery', 'estigalleryuser', 'virtual_receptionist', '3306');

if ($connection->connect_errno) {
    die('Nem sikerült csatlakozni!' . $connection_error);
}
if (!$connection->set_charset("utf8")) {
    echo 'Nem sikerült beállítani a karakterkódolást!' . $connection->error;
}
