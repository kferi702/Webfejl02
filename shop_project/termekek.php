<?php
    require_once('config/connect.php');
    session_start();
    
    if (isset($_SESSION['uid'])) {
        $menu = file_get_contents('html/nav_login.html');
    } else {
        $menu = file_get_contents('html/nav_logout.html');
    }
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8" />
        <title>Belépés | Webshop</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
    </head>
    <body>
        <div id="content">
            <nav>
                <?php
                    echo $menu;
                ?>
            </nav>
            <?php
                
            ?>
        </div>
    </body>
</html>
