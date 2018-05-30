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
      <link rel="stylesheet" href="EasyAutocomplete/easy-autocomplete.min.css">

    <link rel="stylesheet" href="EasyAutocomplete/easy-autocomplete.themes.min.css">

  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Lista de productos</h1>
      <br>
      <div class="row">
        <div class="col-md-4">
          <input type="text" name="" value="" class="form-control" id="Search_producto">
        </div>
        <div class="col-md-1">
          <button type="button" name="button" class="btn btn-success" id="Agregar_producto"> <span class="glyphicon glyphicon-plus-sign"></span> Agregar</button>

        </div>
        <div class="col-md-1">
          <button type="button" name="button" class="btn btn-primary" id="Actualizar_producto"> <span class="glyphicon glyphicon-pencil"></span> Actualizar</button>

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
      <div id="Agregar_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>Agregar producto</h4>
          </div>
          <div class="modal-body">
            <form id="formadd_product">
              <label>Nombre</label>
              <input type="text"  class="form-control" id="Nombre_agregar">
              <label>Precio</label>
              <input type="text" class="form-control" id="Precio_agregar">
              <label>Marca</label>
              <input type="text" class="form-control" id="Marca_agregar">
              <label>Modelo</label>
              <input type="text" class="form-control" id="Modelo_agregar">


              <label>Tipo</label>
              <select class="form-control" id="Tipo">
                <option value="1">Recarga Toner</option>
                <option value="2">Original</option>
                <option value="3">Genérico</option>
                <option value="4">Recarga Tinta</option>
                <option value="5">Accesorio</option>
              </select>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="Agregar_product_end"><span class="glyphicon glyphicon-plus-sign"></span> </button>
            <button type="button" name="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> </button>
          </div>
        </div>

      </div>
      </div>
      <div id="Actualizar_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>Actualizar producto</h4>
          </div>
          <div class="modal-body">
            <form id="formadd_product">
              <label>Nombre</label>
              <input type="text"  class="form-control" id="Nombre_actualizar" style="width:200px">
              <label>Precio</label>
              <input type="text" class="form-control" id="Precio_actualizar">
              <label>Marca</label>
              <input type="text" class="form-control" id="Marca_actualizar">
              <label>Modelo</label>
              <input type="text" class="form-control" id="Modelo_actualizar">
              <label>Existencia</label>
              <input type="text" class="form-control" id="Existencia_actualizar">
              <label>Tipo</label>
              <select class="form-control" id="tipo_actualizar">
                <option value="1">Recarga Toner</option>
                <option value="2">Original</option>
                <option value="3">Genérico</option>
                <option value="4">Recarga Tinta</option>
                <option value="5">Accesorio</option>
              </select>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="Actualizar_producto_end"><span class="glyphicon glyphicon-plus-sign"></span> </button>
            <button type="button" name="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> </button>
          </div>
        </div>

      </div>
      </div>
    </div>


  </body>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="EasyAutocomplete/jquery.easy-autocomplete.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/pnotify/pnotify.custom.min.js"></script>
    <script src="js/jQueryTables.js"></script>
    <script src="js/Productos.js"></script>
</html>
