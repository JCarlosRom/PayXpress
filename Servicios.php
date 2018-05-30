<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Servicios</title>
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
      <div class="row">
        <h1 class="text-center">Servicios</h1>
      </div>
      <div class="row">
          <div class="col-md-2">

            <input type="text" name="" class="form-control" id="Search_servicio" placeholder="Buscar servicio...">

          </div>
          <div class="col-md-2">

            <button type="button" name="button" class="btn btn-success" id="Agregar_servicio">Agregar servicio</button>

          </div>

          <div class="col-md-2">

            <button type="button" name="button" style="margin-left: -54px;" class="btn btn-primary" id="Actualizar_servicio">Actualizar servicio</button>

          </div>
      </div>
      <br>
      <div class="row">
        <div class="table-responsive row">
  			<table class= "table table-striped table-bordered">
  				<thead id="thead_servicios"></thead>
  				<tbody id="tbody_servicios"></tbody>
  			</table>
  		</div>
      </div>

      <div id="modal_agregar_servicio" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>Agregar servicio</h4>
          </div>
          <div class="modal-body">
            <form id="formadd_service">
              <label>Nombre del servicio</label>
              <input type="text"  class="form-control" id="Nombre_agregar">
              <label>Precio</label>
              <input type="text" class="form-control" id="Precio_agregar">
              <label>Fecha de llegada</label>
              <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="Fecha_agregar">
              <br>
              <label for="">Tipo de servicio</label>
              <select class="form-control" id="Tipo_agregar">
                <option value="1">Mantenimiento</option>
                <option value="2">Reparacion</option>
                <option value="3">Configuración</option>
                <option value="4">Formateo</option>
              </select>
              <br>
              <label for="">Estado del servicio</label>
              <select class="form-control" id="Estado_agregar">
                <option value="1">Recibido</option>
                <option value="2">Revisión</option>
                <option value="3">Terminado</option>
                <option value="4">Entregado</option>
                <option value="5">Sin entregar</option>
              </select>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="Agregar_servicio_end"><span class="glyphicon glyphicon-plus-sign"></span> </button>
            <button type="button" name="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> </button>
          </div>
        </div>

      </div>
      </div>

      <div id="Estado_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>Actualizar Estatus</h4>
          </div>
          <div class="modal-body">
            <label for="">Nombre del servicio</label>
            <input type="text" name="" value="" class="form-control" id="Nombre_estatus">
            <label for="">Estado</label>
            <select class="form-control" id="Estatus" name="">
              <option value="1">Recibido</option>
              <option value="2">Revisión</option>
              <option value="3">Terminado</option>
              <option value="4">Entregado</option>
              <option value="5">Sin entregar</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="Actualizar_servicio_end"><span class="glyphicon glyphicon-plus-sign"></span> </button>
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
  <script src="js/Servicios.js"></script>
</html>
