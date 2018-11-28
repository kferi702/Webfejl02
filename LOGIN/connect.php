<?php
    $server = "localhost";
    $user = "esti_szoftverf";
    $pwd = "esti_szoftverf";
    $database = "esti_login";
    $port = "3306";
    
    $connect = new mysqli($server, $user, $pwd, $database, $port);
    
    if ($connect->connect_errno) {
        die("Nem sikerült csatlakozni!");
    }
    
    if(!$connect->set_charset("utf8")){
        echo "Nem sikerült beállítani a karakterkódolást!";
    }
