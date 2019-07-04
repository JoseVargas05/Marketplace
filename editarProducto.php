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
    <h1>Editar Producto</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="./img/box.png" width="100" height="100" class="avatar img-circle" alt="avatar">
          <h6>Cambiar foto de producto...</h6>
          <input type="file" class="form-control">
          <img src="./img/box.png" width="100" height="100" class="avatar img-circle" alt="avatar">
          <h6>Agregar video de producto</h6>
          <input type="file" class="form-control">
        </div>
      </div>
      <!-- formulario de edicion -->
      <div class="col-md-9 personal-info">
        <h3>Información del Producto</h3>
        
        <form class="form-horizontal" role="form" action="./index.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre del Producto:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Caja juguetes">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Categoría:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="catego" class="form-control">
                  <option value="muebles">Muebles</option>
                  <option value="ropa">Ropa</option>
                  <option value="deportes">Deportes</option>
                  <option value="computadoras">Computadoras</option>
                  <option value="mystery-box">Mystery Box</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Descripción:</label>
            <div class="col-lg-8">
              <input class="form-control" type="textarea" value="descripción">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Unidades:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="21">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn bg-dark btn-primary" value="Guardar Cambios">
              <span></span>
              <input type="submit" class="btn btn-primary" value="Editar">
              <input type="submit" class="btn bg-danger btn-danger" value="Eliminar">
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