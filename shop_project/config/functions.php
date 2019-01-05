<?php
    function dumpAndDie($var){
        var_dump($var);
        die();
    }
    
    function readPost($input){
        
        if (!empty($_POST[$input])) {
            
            return trim($_POST[$input]);
        }
    }
    