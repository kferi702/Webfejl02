<?php

$server = "localhost";
$user = "esti_szoftverf";
$password = "esti_szoftverf";
$dbName = "shop";
$port = "3306";
$conn = new mysqli($server, $user, $password, $dbName, $port);
if ($conn->connect_errno) {
    die("Nem sikerült csatlakozni!" . $conn->connect_error);
}
$conn->set_charset("utf8");
