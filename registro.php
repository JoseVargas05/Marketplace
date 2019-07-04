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
               <div class="form-label-group">
                <input type="password" id="inputPasswordR" class="form-control" placeholder="Reprtir Contraseña" required>
                <label for="inputPasswordR">Repetir Contraseña</label>
              </div>
              <!--<div class="form-group d-flex flex-row justify-content-center">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
               </div>-->
              <button class="btn btn-lg btn-primary bg-dark btn-block text-uppercase" formaction="./index.php" type="submit">Registrarse</button>
              <hr class="my-4">
              <span class="d-flex flex-row justify-content-center"><a href="./login.php"><i class="fas fa-arrow-left"></i><span> Regresar</span></a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- wrapper principal -->	
	 <!-- JS -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js""></script>
    <script src="./js/main.js""></script>
  </body>
</html>