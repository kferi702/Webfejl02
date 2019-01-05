<?php
    function dumpAndDie($var){
        var_dump($var);
        die();
    }
    
    function readPost($input){
        
        $temp = trim($_POST[$input]);
        
        if (!empty($temp)) {            
            return $temp;
        } else {
            $_SESSION['regErr'][$input] =  'Kitöltetlen mező!';
        }
    }
    