<?php require_once('./config/connect.php'); ?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8"/>
        <title>Galéria</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form class="">
                        <input class="form-control" type="email" placeholder="E-mail" name="email" required/>
                        <input class="form-control" type="password" placeholder="Jelszó" name="pwd" required/>
                        <input class="btn btn-primary" type="submit" name="enter"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
