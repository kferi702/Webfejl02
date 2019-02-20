<?php
require_once('../config/connect.php');

session_start();

if (isset($_POST['enter'])) {

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE email = ? AND password = ?;";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {

        /*
         * Sikeres bejelentkezés
         */
        $stmt->bind_result($id, $email, $pwd, $firstname, $lastname);
        $stmt->fetch();
        $_SESSION['userid'] = $id;
    } else {

        /*
         * Érvénytelen email cím vagy jelszó
         */
        header('Location: ./index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Galéria</title>
        <?php require_once('../templates/head.html'); ?>
    </head>
    <body>
        <ul class="navbar">
            <li class="nav-item">
                <a href="upload.php" class="nav-link">Kép feltöltése</a>
            </li>
            <?php
            if (isset($_SESSION['userid'])) {
                echo '<a href="logout.php" class="nav-link">Kilépés</a></li>';
            }
            ?>
            <li class="nav-item"></li>
        </ul>
    </body>
</html>
<?php
$stmt->close();
$connection->close();
?>
