<?php
session_start();
require_once('config/connect.php');
require_once('config/functions.php');
if (isset($_SESSION['uid'])) {
    $menu = file_get_contents("html/nav_in.html");
} else {
    $menu = file_get_contents("html/nav_out.html");
}
//megjelenítendő termékek darabszáma   
if (isset($_GET['termekszam']) && ($_GET['termekszam'] != "mind")) {
    //megjelenítendő sorok száma
    $tszam = $_GET['termekszam'];
} else {
    $tszam = 25;
}

//A hivatkozásokkal jön létre. Hányadik oldalon vagyok?
if (isset($_GET['page']) && ($_GET['page'] > 0)) {
    // lapoz a látogató
    $page = ($_GET['page'] - 1) * $tszam;
} else {
    //alapértelmezett
    $page = 0;
}
//foglalat megállapítása
if (isset($_GET['foglalat']) && ($_GET['foglalat'] != "-")) {
    $foglalat = $_GET['foglalat'];
} else {
    $foglalat = '%';
}
//kevesebb termékszám alapján a rekordok megszámlálása    
$sql = "SELECT * FROM termekek WHERE foglalat LIKE '$foglalat';";
$res = $conn->query($sql);
$numRows = $res->num_rows;

$sql = "SELECT * FROM termekek WHERE foglalat LIKE '$foglalat' LIMIT $page,$tszam;";
$res = $conn->query($sql);

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
    while ($row = $res->fetch_assoc()) {
        $tabla .= "<tr>"
                . "<td>" . $row['tazon'] . "</td>"
                . "<td>{$row['tnev']}</td>"
                . "<td>{$row['fesz']}</td>"
                . "<td>{$row['telj']}</td>"
                . "<td>{$row['foglalat']}</td>"
                . "<td>{$row['elettartam']}</td>"
                . "<td>{$row['ar']}</td>"
                . "</tr>";
    }
    $tabla .= "</table>";
}
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Termékek</title>
        <link rel="icon" href="img/cart.jpg" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/shop.css" >
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
            <?php
            $pages = ceil($numRows / $tszam); //oldalak száma

            $sql = "SELECT DISTINCT foglalat FROM termekek";
            $res = $conn->query($sql);
            if ($res) {
                $urlap = "<form method='get' action='termekek.php'>"
                        . "termekszam";
                //$urlap .="<input type='text' name='page' value='{$pages}' >";
                $urlap .= "<select name='foglalat'>";
                $urlap .= "<option>-</option>";
                while ($row = $res->fetch_row()) {
                    $urlap .= "<option>{$row[0]}</option>";
                }
                $urlap .= "</select>"
                        . "<input type='submit' value='Szűrés' name='szures'>"
                        . "</form>";
            }
            $oldalak = "";
            for ($i = 1; $i <= $pages; $i++) {
                $oldalak .= "<a href='termekek.php?page={$i}&termekszam={$tszam}&foglalat={$foglalat}'>{$i}</a>";
            }
            echo "<div id='szures' >";
            $termekszam = file_get_contents('html/termekszam.html');
            $urlap = str_replace('termekszam', $termekszam, $urlap);
            echo $urlap;
            echo $oldalak;
            echo "</div>";
            echo $tabla;
            ?>

        </div>
    </body>
</html>
