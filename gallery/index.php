<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Galéria</title>
        <?php require_once('./templates/head.html'); ?>
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
