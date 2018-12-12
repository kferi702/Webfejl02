<?php
    session_start();
    require_once ('config/connect.php');
    
    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
}
