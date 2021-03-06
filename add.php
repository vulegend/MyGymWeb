<?php
    session_start();

    if ( isset( $_SESSION['uid'] ) ) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
    } else {
        // Redirect them to the login page
        header("Location: /mygym/login.html");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Dodaj novu</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        

    <!-- Custom styles for this template -->
    <style>
        /* Show it is fixed to the top */
        body {
        min-height: 75rem;
        padding-top: 4.5rem;
        }

        #formID {
            width : 90%;
            display : inline-block;
            margin-left : 5%;
        }

    </style>

  </head>

  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">MY_GYM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Lista <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Dodaj Novu</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="logout.php">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </form>
      </div>
    </nav>

    <form action="addGym.php" method="post" role="form">
    <div class="form-group" id="formID">
        <label for="name"><b>Naziv</b></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Unesite naziv">
        <br/>
        <label for="address"><b>Adresa</b></label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        <br/>
        <label for="address"><b>Opis</b></label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        <br/>
        <label for="phone"><b>Telefon</b></label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Unesite naziv">
        <br/>
        <label for="logo"><b>Logo</b></label>
        <input type="file" class="form-control" id="logo" name="logo">
        <br/>
        <label for="logo"><b>Slike</b></label>
        <input type="file" class="form-control" id="slike" name="slike" multiple>
        <br/>
        <button type="submit" class="btn btn-primary form-control">Dodaj novu teretanu</button>
    </div>
    </form>
    
  </body>
</html>
