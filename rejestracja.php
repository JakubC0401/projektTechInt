<?php
    
    $conn = mysqli_connect("localhost", "root", "", 'user');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    require_once "register.html";
    //mysql_connect('localhost','root','');
   //mysql_select_db("user");
    
    
    
    if (isset($_POST['za']))
    {
        $login = $_POST['login'];
        $haslo1 = $_POST['pw1'];
        $haslo2 = $_POST['pw2'];
        $email = $_POST['email'];
       
        
        // sprawdzamy czy login nie jest już w bazie
        if (mysqli_num_rows(mysqli_query("SELECT login FROM user WHERE login = '".$login."';")) == 0)
        {
            if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
            {
                mysqli_query("INSERT INTO `user` (`login`, `password`)
                    VALUES ('".$login."', '".md5($haslo1)."');");
                
                echo "Konto zostało utworzone!";
            }
            else echo "Hasła nie są takie same";
        }
        else echo "Podany login jest już zajęty.";
    }
    else
    {
        echo "xD";
    }
?>