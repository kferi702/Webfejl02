<?php
    $connection = new mysqli("127.0.0.1", "root", "", "esti_shop", "3306");
    
    if ($connection -> connect_errno) {
        die("Nem sikerült csatlakozni az adatbázishoz!");
    }
    
    $connection->set_charset("utf8");