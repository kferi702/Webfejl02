<?php
    if (isset($_POST['submit'])){
        
        // echo $_POST['username']."<br/>";
        // echo $_POST['password'];
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword=$_POST['confirmpassword'];
        
        if (($username=="Bence") && ($password=="12345")) {
            
            echo 'Üdvözöllek '.$username."!";
            
            if($password != $confirmPassword) {
        
            echo 'A két jelszó nem egyezik meg egymással!';
            }
        } else {
        
            echo 'Helytelen felhasználónév vagy jelszó!';                    
        }
    }
    
    echo "<br/><a href='index.php'>Vissza a bejelentkezéshez!</a>";
