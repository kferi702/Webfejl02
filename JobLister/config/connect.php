<?php

$host = '10.0.14.100';
$user = 'esti_szoftverf';
$pwd = 'esti_szoftverf';
$db = 'esti_allaskozvetito';

$conn = new mysqli($host, $user, $pwd, $db);

if ($conn->connect_errno) {
    die('Hiba a kapcsolódás során!');
}

$conn->set_charset('utf8');
