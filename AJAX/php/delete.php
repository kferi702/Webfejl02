<?php

require_once('../config/connect.php');

if (isset($_POST['del'])) {
    $id = $_POST['del'];
    $sql = "DELETE FROM user WHERE ID = '$id'";
}
