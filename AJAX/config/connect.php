<?php

$connection = new mysqli('localhost', 'root', '', 'ajax', '3306');

if ($connection->connect_errno) {
    die('Nem sikerült csatlakozni!');
}

if (!$connection->set_charset("utf8")) {
    echo 'Nem sikerült beállítani a karakterkódolást!';
}
