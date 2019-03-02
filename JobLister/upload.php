<?php

require_once('config/init.php');

if (!isset($_SESSION['userid'])) {
    header('Location: index.php');
    die();
} else {
    print_HTML('html/header.html');
    print_HTML('html/menu.html');
    print_HTML('html/upload.html');
    print_HTML('html/footer.html');
}
