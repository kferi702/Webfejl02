<?php

session_start();
require_once('../config/connect.php');

if (!isset($_SESSION['userid'])) {
    header('Location: error.php');
    die();
}
