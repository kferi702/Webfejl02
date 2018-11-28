<?php
    session_start();
    require_once('connect.php');
    session_destroy();
    $connect->close();
    header('Location: index.php');
