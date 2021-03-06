<?php
  session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Todo List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="PageLogo.png" type="image">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php if (isset($_SESSION['zalogowany'])==true):?>

    <div class="test">
        <header class="siteLogo"> 
          <img src="Pagelogo.png" width="50px" height="50px"> 
          <a href="mainpage.php" style="text-decoration: none; color: black"><h1>Todo List</h1></a>   
        </header>
        <div>
            <ul class="mainpageheader">
                <li><a class="AnimateButton" id="regulaminTxt">REGULAMIN</a></li>
                <li><a class="AnimateButton" href="mainpage.php">STRONA GŁÓWNA</a></li>
                <li><a class="AnimateButton" href="logOut.php">WYLOGUJ</a></li>
            </ul> 
        </div>      
    </div>
    <br><br><br>

    <?php require('regulamin.php') ?>



    <div class="accountWrapper">
        <h1  class="font-weight-normal text-primary" >KONTO</h1>
        <br>
        <img width="150px" height="150px" src="UserLogo.png">
        <br><br>
        <b>IMIE:</b>
        <br>
        <?php echo $_SESSION['login']?>
        <br>
        <br>
        <b>NAZWISKO:</b>
        <br>
        <br>
        <b>E-MAIL:</b>
    </div>
<?php else: ?>
  <div class="test">
        <header class="siteLogo"> 
          <img src="Pagelogo.png" width="50px" height="50px"> 
          <a href="index.php" style="text-decoration: none; color: black"><h1>Todo List</h1></a>   
        </header>
        <div>
            <ul class="mainpageheader">
                <li><a class="AnimateButton" href="index.php" style="margin-left:66%;">ZALOGUJ</a></li>
            </ul> 
        </div>      
    </div>
<?php endif;?>     
</body>
</html>