<?php

require_once('../config/connect.php');

if (isset($_POST['knev']) && !empty($_POST['knev'])) {
    $vnev = $_POST['vnev'];
    $knev = $_POST['knev'];
}

$sql = "INSERT INTO user(vezeteknev, keresztnev) VALUES ('$vnev', '$knev');";
$result = $connection->query($sql);

if (!$result) {
    die("Hiba a felvitel során!");
}

$connection->close();
