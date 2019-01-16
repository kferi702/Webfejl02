<?php

session_start();
session_unset();
$_SESSION['regErr'] = [];
$regHiba = false;

require_once("config/functions.php");
require_once('config/connect.php');

//Regisztrál...
if (!isset($_POST['regisztracio'])) {
    header("Location: index.php");
    die();
}

$username = readPost('username');
$fullname = readPost('fullname');
$pwd = readPost('pwd');
$pwdc = readPost('pwdc');
$tel = readPost('tel');
$zip = readPost('irsz');
$email = readPost('email');

if (strlen($username) < 6) {
    $regHiba = true;
}

if ($pwd == $username) {
    setRegError('pwd', 'A felhasználónév és jelszó nem lehet azonos!');
}

if ($pwd != $pwdc) {
    setRegError('pwd', 'A két jelszó nem egyezik!');
}

$sql = "SELECT username FROM user WHERE username = '$username'";
$res = $conn->query($sql);
if (($res->num_rows > 0) || ($username == "")) {
    $_SESSION['regErr']['username'] = 'Már létezik ilyen felhasználó!';
}
if ($regHiba) {
    header("Location: regisztracio.php");
    die();
}
$pwd = readPost('pwd');
$pwd = password_hash($pwd, PASSWORD_BCRYPT);
$_SESSION['regErr']['username'] = "";
$sql = "INSERT INTO user (username,password,reg_date,active) VALUES ('$username','$pwd',CURDATE(),1)";
$res = $conn->query($sql);

$_SESSION['siker'] = true;
header("Location: regisztracio.php");
