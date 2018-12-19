<?php
    require_once('config/connect.php');
    require_once('config/functions.php');
    
    session_start();
    
    if (isset($_SESSION['uid'])) {
        $menu = file_get_contents('html/nav_login.html');
    } else {
        $menu = file_get_contents('html/nav_logout.html');
    }
    
    $sql = "SELECT * FROM termekek";
    $res=$connection->query($sql);
    $numRows = $res->num_rows;
    
    if (isset($_GET['page'])) {
        //lapoz a user
        $page = ($_GET['page'] - 1) * 25;
    } else {
        // default value
        $page = 0;
    }
    
    $sql = "SELECT * FROM termekek LIMIT $page,25;";
    $res = $connection->query($sql);
    
    //dumpAndDie($res);
    
    if ($res) {
        
        $tabla = "<table id='products'>"
                . "<tr>"
                . "<td>ID</td>"
                . "<td>Megnevezés</td>"
                . "<td>Feszültség</td>"
                . "<td>Teljesítmény</td>"
                . "<td>Foglalat</td>"
                . "<td>Élettartam</td>"
                . "<td>Ár</td>"
                . "</tr>";
        while ($row = $res->fetch_assoc()){
            $tabla.="<tr>"
            . "<td>{$row['tazon']}</td>"
            . "<td>{$row['tnev']}</td>"
            . "<td>{$row['fesz']}</td>"
            . "<td>{$row['telj']}</td>"
            . "<td>{$row['foglalat']}</td>"
            . "<td>{$row['elettartam']}</td>"
            . "<td>{$row['ar']}</td>"
            . "</tr>";
        }
        $tabla.="</table>";
    }
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8" />
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
            <?php
                $pages = ceil($numRows/25);
                $sql = "SELECT DISTINCT foglalat FROM termekek";
                $res = $connection->query($sql);
                if ($res) {
                    $urlap = "<form method='get' action='termekek.php'>"
                            . "termekszam";
                    
                    $urlap.="<select name='foglalat'>";
                    while ($row = $res->fetch_row()) {
                        $urlap .= "<option>{$row[0]}</option>";
                    }
                    $urlap.="</select></form><input type='submit' value='Szűrés' name='szures'/>";
                }
                $oldalak = "";
                
                for ($i=1; $i<=$pages; $i++){
                    $oldalak .= "<a href='termekek.php?page={$i}'>{$i}</a>";
                }
                
                echo '<div id="szures" >';
                $termekszam = file_get_contents('html/termekszam.html');
                $urlap = str_replace('termekszam', $termekszam, $urlap);
                echo $urlap;
                echo $oldalak;
                echo '</div>';
                echo $tabla;
            ?>
        </div>
    </body>
</html>
