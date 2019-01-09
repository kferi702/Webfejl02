<?php
session_start();
require_once('config/connect.php');
require_once('config/functions.php');
//Ha már bejelentkezett
if (isset($_SESSION['uid'])) {
    header("Location: index.php");
}
$menu = file_get_contents("html/nav_out.html");
?>    
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Regisztráció</title>
        <link rel="stylesheet" type="text/css" href="css/shop.css" >
    </head>
    <body>
        <div id="content">
            <nav>
                <?php
                echo $menu; //menü megjelenítése
                ?>
            </nav>
            <form id="regForm" method="post" action="reg.php">
                <input type="text" name="username" placeholder="Felhasználónév" required><?php
                if (isset($_SESSION['regErr'])) {
                    echo "<span>" . $_SESSION['regErr']['username'] . "</span>";
                }
                ?>
                <br>
                <input type="text" name="fullname" placeholder="Név" required>
                <br>
                <input type="password" name="pwd" placeholder="Jelszó">
                <br>
                <input type="password" name="pwdc" placeholder="Jelszó megerősítése">
                <br>
                <input type="email" name="email" placeholder="valaki@vasvari.hu">
                <br>
                <input type="number" name="irsz" placeholder="Irányítószám">
                <br>
                <input type="tel" name="tel" placeholder="Telefonszám">
                <br>
                <input type="submit" value="Regisztráció" name="regisztracio">
            </form>
        </div>
<?php
if (isset($_SESSION['siker'])) {
    echo "<h1 style='color: red; text-align: center'>Sikeres regisztráció!</h1>";
}
?>


    </body>
</html>