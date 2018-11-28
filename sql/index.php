<!DOCTYPE html>

<head>
    <style>
        table{
            
        }
    </style>
</head>
<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "mbt";
    $port = "3306";
    
    $connect = new mysqli($host, $user, $password, $database, $port);
    
    if ($connect -> connect_errno) {
        die("Nem sikerült csatlakozni az adatbázishoz!"); // További scriptek lefutását megakadályozza a die() metódus
    }
    
    $connect->set_charset("utf8");
    echo "Sikeres csatlakozás!";
    
    $sql = "SELECT * FROM telek";
    $result = $connect -> query($sql);
    
    echo "<pre>";
    print_r($result);
    
    echo "<table><tr>ID</tr><>";
    
    while($row = $result -> fetch_assoc()){ //sorra darabolás => asszociatív tömb
        /*echo "<pre>";
        print_r($row);*/
        
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['telepules'].'</td>';
        echo '<td>'.$row['allapot'].'</td>';
        echo '<td>'.$row['muvmod'].'</td>';
        echo '<td>'.$row['fedoszint'].'</td>';
        echo '<td>'.$row['fekuszint'].'</td>';
        echo '</tr>';
    }
    
    echo '</table>';
    