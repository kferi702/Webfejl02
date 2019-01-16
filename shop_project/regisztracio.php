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
        <link rel="icon" href="img/cart.jpg" type="image/x-icon"/>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="content">
            <nav>
                <?php
                echo $menu; //menü megjelenítése
                ?>
            </nav>
            <form id="regForm" method="post" action="reg.php">
                <input id="username" type="text" name="username" placeholder="Felhasználónév"/>
                <br>
                <input id="fullname" type="text" name="fullname" placeholder="Név" />
                <br>
                <input id="pwd" type="password" name="pwd" placeholder="Jelszó" />
                <br>
                <input id="pwdc" type="password" name="pwdc" placeholder="Jelszó megerősítése" />
                <br>
                <input id="email" type="email" name="email" placeholder="valaki@vasvari.hu" />
                <br>
                <input id="zip" type="number" name="irsz" placeholder="Irányítószám" />
                <br>
                <input id="tel" type="tel" name="tel" placeholder="Telefonszám" />
                <br>
                <input id="reg" type="submit" value="Regisztráció" name="regisztracio" />
            </form>
        </div>
        <?php
        if (isset($_SESSION['siker'])) {
            echo "<h1 style='color: red; text-align: center'>Sikeres regisztráció!</h1>";
        }
        ?>
    </body>
</html>
