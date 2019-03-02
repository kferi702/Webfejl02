<?php
session_start();
$appLocation = $_SERVER['DOCUMENT_ROOT'] . 'JobLister';
require_once($appLocation . '/config/functions.php');
require_once($appLocation . 'config//connect.php');
