<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>VAMPIRE</title>
    <link rel="stylesheet" href="vampire.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">VAMPIRE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About us</a>
      </li>

      
     
    </ul>

    <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h1 class="H1"><I>       WELCOME TO Vampire WORLD</I></h1>
  <div class="maincontainer">
    <div class="row my-4 mx-4">
      <div class="column">
        <img  class="rounded-circle" src="https://api.codewithharry.com/media/videoSeriesTiles/default_YAMLAio.png" width="140" height="140" >
        <h2>Basic python programes</h2>
        <p>here we are provide you all basic python program <br>
            and some advance project with syntax <br > <a href="pythonprogram.html" target="blank"><button class="button">click here</button></a>
        </p>
    </div>
    <div class="column">
      <img  class="rounded-circle" src="https://api.codewithharry.com/media/videoSeriesTiles/c_2OXTgR5.png" width="140" height="140" >
      <h2>C language programes</h2>
      <p>here we are provide you all basic and advance <br> c program 
          and some advance project with syntax <br > <a href=""><button class="button">click here</button></a>
      </p>
  </div>
  <div class="column">
    <img  class="rounded-circle" src="https://api.codewithharry.com/media/videoSeriesTiles/world-wide-web.png" width="140" height="140" >
    <h2>WEB development projects:HTML,CSS,JAVA script</h2>
    <p>here we are provide you all basic html css,js <br> and others program 
        and some advance project with syntax. <br > <a href=""><button class="button">click here</button></a>
    </p>
</div>
<div class="column">
    <img  class="rounded-circle" src="https://armyyazilim.com/wp-content/uploads/2019/10/css.png" width="140" height="140" >
    <h2>SOME CREATIVE <b>CSS</b> programes</h2>
    <p>here we are provide you some creative <b>CSS</b> program 
        by  <br> the help othese projects you can creat something better 
        web disigne <br > <a href=""><button class="button">click here</button></a>
    </p>
</div>
    </div>
  </div>
  <hr>
  <Footer class="footer">&copy;vampireworld</Footer>
  </body>
</html>