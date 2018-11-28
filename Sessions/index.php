<?php    
        session_start();
        
        echo "<form action='#' method='post'><input type='submit' value='szamol' name='submit'/>"
        . "<input type='submit' value='torol' name='reset'/>"
                . "</form>";
        
        if (isset($_POST['submit'])) {            
            if (!isset($_SESSION['szamol'])) {
                $_SESSION['szamol'] = 0;
            }else{
                $_SESSION['szamol'] += 1;
            }
        }
        
        if (isset($_POST['reset'])){
            session_unset();
        }
        
        if (isset($_SESSION['szamol'])) {
            //Hányszor kattintottam a gombra?
            echo $_SESSION['szamol'];
        }
