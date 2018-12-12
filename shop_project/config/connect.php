<?php
    $server = "localhost";
    $username = "esti_szoftverf";
    $password = "esti_szoftverf";
    $database = "esti_shop";
    $port = "3306";
    
    $connection = new mysqli($server, $username, $password, $database, $port);
    
    if ($connection -> connect_errno) {
        die("Nem sikerült csatlakozni az adatbázishoz!".$connection->connect_error);
    }
    
    $connection->set_charset("utf8");