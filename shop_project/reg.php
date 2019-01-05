<?php
    session_start();
    require_once('config/connect.php');
    require_once('config/functions.php');
    
    // Ha már bejelentkezett (böngészőből előzményben eljuthat erre az URL-re
    if (isset($_SESSION['uid'])) {
        header('Location: index.php');
    }
    
    $menu = file_get_contents('html/nav_logout.html');
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8"/>
        <title>Belépés | Webshop</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="icon" href="favicon/shopping_cart.png" type="image/x-icon"/>
    </head>
    <body>
        <div id="content">
            <nav>
                <?php
                    echo $menu;
                ?>
            </nav>
            <form>
                <input type="text" name="username" placeholder="Felhasználónév" required/>
                <input type="password" name="password" placeholder="Jelszó" required/>
                <input type="" name="" placeholder="" required/>
            </form>
        </div>
    </body>
</html>
