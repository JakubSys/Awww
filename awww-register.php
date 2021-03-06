<?php
require_once __DIR__ . '/awww_engine/Session.class.php';
require_once __DIR__ . '/awww_engine/Config.class.php';

Session::startSession();
$conf = Config::Instance();

if(Session::isLogged()) {
  Session::destroySession();
}
?>
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>Rejestracja w systemie AWWW</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div class="form-wrapper">

      <form method="post" class="form-signin">
        <?php if(isset($_GET['error'])) { ?>
        <h4 class="error">Złe dane</h4>
        <?php } else {?>
        <h4 class="error">Rejestracja</h4>
        <?php } ?>
        
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>

          <label for="inputEmail2" class="sr-only">Potwierdź email</label>
          <input type="email" id="inputEmail2" class="form-control" placeholder="Potwierdź email" required autofocus>

          <div class="invalid-feedback">Adresy się nie zgadzają lub są zajęte</div>
        </div>
        
        <div class="form-group">
          <label for="inputName" class="sr-only">Imię</label>
          <input type="text" id="inputName" class="form-control" placeholder="Imię" required autofocus>
          
          <label for="inputLastName" class="sr-only">Nazwisko</label>
          <input type="text" id="inputLastName" class="form-control" placeholder="Nazwisko" required autofocus>

          <label for="inputPassword" class="sr-only">Hasło</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Hasło" required> 
          
          <div class="invalid-feedback">Hasło zbyt krótkie</div>      
        </div>

        
        <button class="btn btn-lg btn-outline-dark btn-block" type="submit" id="signin-button">Zarejestruj</button>
      
        <span class="awww-version">AWWW v. <?php echo parse_ini_file('awww_engine/awwwconfig.ini', true)['VERSION']; ?></span>
      </form>

    </div> <!-- /container -->
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <script src="js/register.jquery.js"></script>
  </body>
</html>
