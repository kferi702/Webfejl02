<?php
    session_start();
    require_once('config/connect.php');
    require_once('config/functions.php');
    
    // Ha már bejelentkezett (böngészőből előzményben eljuthat erre az URL-re
    if (isset($_SESSION['uid'])) {
        header('Location: index.php');
    }
    
    