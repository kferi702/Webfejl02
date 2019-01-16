<?php

function dd($var) {
    var_dump($var);
    die();
}

function readPost($kulcs) {
    $temp = trim($_POST[$kulcs]);

    if (!empty($temp)) {
        return $temp;
        // echo "Nem üres";
        // die();
    } else {
        $_SESSION['regErr'][$kulcs] = 'Kitöltetlen mező!';
    }
}

function setRegError($kulcs, $msg) {

    if (isset($_SESSION['regErr'][$kulcs])) {
        $_SESSION['regErr'][$kulcs] .= $msg;
    } else {
        $_SESSION['regErr'][$kulcs] .= $msg;
    }
    return true;
}
