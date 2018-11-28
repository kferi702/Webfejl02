<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8"/>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
    </head>
    <body>
        <div id="content">
            <form action="login.php" method="post">
                <input type="text" name="uname" placeholder="Felhasználónév" required/>
                <br/>
                <input type="password" name="pwd" placeholder="Jelszó" required/>
                <br/>
                <input type="submit" name="enter" value="Belép"/>
            </form>
        </div>
    </body>
</html>
