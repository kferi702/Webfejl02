<?php
    session_start();
    require_once('connect.php');
    if (isset($_POST['enter'])) {
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
        
        $sql = "SELECT * FROM user WHERE uname = '$username' AND pwd = '$password'";
        $res = $connect->query($sql);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if($res->num_rows == 1){
                echo "Üdvözöllek $username!";
                $row = $res->fetch_row();
                $_SESSION['userId'] = $row[0];
                echo '<br/><a href="welcome.php">Üdvözlet!</a>';
            }else{
                echo "Helytelen felhasználónév vagy jelszó!";
            }
        ?>
    </body>
</html>
