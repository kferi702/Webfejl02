<?php

session_start();
$_SESSION['regErr'] = [];
require_once("config/functions.php");
require_once('config/connect.php');
if (!isset($_POST['regisztracio'])) {
    header("Location: index.php");
    die();
}
$username = readPost('username');

/* TODO
  fullname
  pwd
  pwdc
  email
  irsz
  tel
 */
$sql = "SELECT username FROM user WHERE username = '$username'";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    $_SESSION['regErr']['username'] = 'Már létezik ilyen felhasználó!';
    header("Location: regisztracio.php");
}

$pwd = readPost('password');
$pwd = password_hash($pwd, PASSWORD_BCRYPT);
$_SESSION['regErr']['username'] = "";
$sql = "INSERT INTO user (username,password,reg_date,active) VALUES ('$username',$pwd,CURDATE(),1)";
$res = $conn->query($sql);

$_SESSION['siker'] = true;
header("Location: regisztracio.php");
