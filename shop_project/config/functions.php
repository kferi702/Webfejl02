<?php

function dd($var) {
    var_dump($var);
    die();
}

function readPost($kulcs) {
    $temp = trim($_POST[$kulcs]);

    if (!empty($temp)) {
        return $temp;
        echo "Nem üres";
        die();
    } else {
        $_SESSION['regErr'][$kulcs] = 'Kitöltetlen mező!';
    }
}
