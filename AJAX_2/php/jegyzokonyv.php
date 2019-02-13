<?php

require_once('../config/connect.php');

if (isset($_POST['mez'])) {
    $mez = $_POST['mez'];

    $sql = "SELECT * FROM jegyzokonyv WHERE mez = '$mez';";
    $result = $connection->query($sql);

    if (!$result) {
        die('Hiba a lekérdezés során!');
    }

    $html = "<table class='table table-stripe'>"
            . "<tr>"
            . "<th>Be</th>"
            . "<th>Ki</th>"
            . "<th>Kísérlet</th>"
            . "<th>Kosár</th></tr>";

    while ($row = $result->fetch_row()) {
        $html .= "<td>{$row[2]}</td>"
                . "<td>{$row[3]}</td>"
                . "<td>{$row[4]}</td>"
                . "<td>{$row[5]}</td>"
                . "</tr>";
    }
    $html .= "</table>";
    echo $html;
}

$connection->close();
