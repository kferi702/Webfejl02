<?php
session_start();
require_once('../config/connect.php');

if (isset($_POST['upload']) && (isset($_SESSION['userid']))) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $userid = $_SESSION['userid'];
    $img_name = $_FILES['img']['name'];
    var_dump($_FILES['img']);
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Galéria | Képek feltöltése</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="icon" href="../img/gallery.png" type="image/x-icon"/>
    </head>
    <body>
        <nav class="navbar navbar-expand">
            <ul class="navbar">
                <li class="nav-item">
                    <a href="upload.php" class="nav-link">Kép feltöltése</a>
                </li>
                <?php
                if (isset($_SESSION['userid'])) {
                    echo '<a href="logout.php" class="nav-link">Kilépés</a></li>';
                }
                ?>
            </ul>
        </nav>
        <form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Cím" name="title" required />
            </div>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Leírás" name="description" required />
            </div>
            <div class="form-group">
                <input class="form-control" type="file" name="img" required />
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Feltölt" name="upload" />
            </div>
        </form>
    </body>
</html>
