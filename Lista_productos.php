<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de productos</title>
      <link href="css/animate.min.css" rel="stylesheet">
      <link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
      <link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
      <link href="css/menu.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Lista de productos</h1>
      <br>
      <div class="row">
        <div class="col-md-4">
          <input type="text" name="" value="" class="form-control" id="Search_producto">
        </div>
      </div>
      <br>
      
      <div class="row">
        <div class="table-responsive row">
  			<table class= "table table-striped table-bordered">
  				<thead id="thead_productos"></thead>
  				<tbody id="tbody_productos"></tbody>
  			</table>
  		</div>
      </div>
    </div>


  </body>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/pnotify/pnotify.custom.min.js"></script>
    <script src="js/jQueryTables.js"></script>
    <script src="js/Productos.js"></script>
</html>
