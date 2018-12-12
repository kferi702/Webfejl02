<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8" />
        <title>Belépés | Webshop</title>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
    </head>
    <body>
        <div id="content">
            <nav>
                <ul>
                    <li><a href="index.php">Főoldal</a></li>
                    <li><a href="">Termékek</a></li>
                    <li><a href="">Regisztráció</a></li>
                </ul>
                <form method="post" action="belep.php">
                    <input type="text" name="user" placeholder="Felhasznélónév"/>
                    <input type="password" name="password" placeholder="Jelszó"/>
                    <input type="submit" name="submit" value="Belép"/>
                </form>
            </nav>
        </div>
    </body>
</html>
