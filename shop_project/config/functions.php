<?php
    function dumpAndDie($var){
        var_dump($var);
        die();
    }
    
    function readPost($input, $message){
        
        if (!empty($_POST[$input])) {            
            return trim($_POST[$input]);
        } else {
            $_SESSION['regErr'][$input] =  'Kitöltetlen mező!';
        }
    }
    