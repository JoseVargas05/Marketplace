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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./img/icono.ico"/>
    <title>SpiceRoad_v00.08</title>
    <style type="text/css">
    	
		.form-horizontal input[type="submit"] {
		      background: #6c757d !important;
		}
		.form-horizontal input[type="submit"]:hover {
		  background: #31353D !important;
		  color: #16c7ff;
		  border: 1px solid #16c7ff;
		}
    </style>
  </head>
  <body>

    <?php include './html/menus.html' ; ?>
  <!-- principal sidebar wrapper  -->
  <main class="page-content">
	<div class="container-fluid">
		<div class="container">
    <h1>Editar Perfil</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="./img/user2100-100.png" class="avatar img-circle" alt="avatar">
          <h6>Cambiar foto de perfil...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- formulario de edicion -->
      <div class="col-md-9 personal-info">
        <h3>Información Personal</h3>
        
        <form class="form-horizontal" role="form" action="./index.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombres:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="José Antonio">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellidos:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Vargas">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Correo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="josevargas.lmad@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Zona Horaria:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Nombre de Usuario:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="josevargas01">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Contraseña</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirmar Contraseña:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn bg-dark btn-primary" value="Guardar Cambios">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
	</div>
  </main>
  <!-- contenido de la página" -->
  <?php include './html/footer.html' ; ?>
</div>
<!-- wrapper principal -->	
	 <!-- JS -->
	<script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js""></script>
    <script src="./js/main.js""></script>
  </body>
</html>