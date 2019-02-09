<?php

require_once('../config/connect.php');

$sql = "INSERT INTO WHERE";
$result = $connection->query($sql);


if (!$result) {
    die("Hiba a felvitel során!");
}

$connection->close();
