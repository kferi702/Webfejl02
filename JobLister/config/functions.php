<?php

function print_HTML($file) {
    echo file_get_contents($file);
}

function dd($var) {
    var_dump($var);
    die();
}
