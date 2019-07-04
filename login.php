<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="shortcut icon" href="./img/icono.ico"/>
    <title>SpiceRoad_v00.08</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="card-title text-center">
              <a href="index.php"><img src="img/logo3.png" alt=""></a>
            </div>
            <form class="form-signin" action="./index.php">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
                <label for="inputEmail">Correo</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
              </div>
              <button class="btn btn-lg btn-primary bg-dark btn-block text-uppercase" type="submit">Entrar</button>
              <hr class="my-4">
              <span class="d-flex flex-row justify-content-center"><a href="#"">¿Olvidaste tu Contraseña?</a></span>
              <span class="d-flex flex-row justify-content-center"><a href="./registro.php"">Registrarse</a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- wrapper principal -->	
	 <!-- JS -->
	<script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js""></script>
    <script src="./js/main.js""></script>
  </body>
</html>