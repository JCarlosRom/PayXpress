<!-- Modal venta nueva -->

<div id="Venta_nueva_modal" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Venta nueva</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-2">
            <label for="Id">RFC Cliente</label>
        </div>
        <div class="col-md-2">
          <input class="form-control" id="RFC_vn">
        </div>
      </div>
      <form class="form-group" id="formtext">

        <br>
        <div class="row">
          <div class="col-md-2 centerblock">
            <label for="Concepto">Producto o servicio</label>
          </div>
          <div class="col-md-4">
            <input type="text" id="Producto_vn" class="form-control">
          </div>
          <div class="col-md-2">
            <label>Tipo de pago</label>

          </div>
          <div class="col-md-3">
            <select class="form-control" id="Tipo_pagovn">
              <option value="Tarjeta">Tarjeta</option>
              <option value="Efectivo">Efectivo</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <label>Cantidad</label>
          </div>

          <div class="col-md-4">
            <input type="text" id="Cantidad_vn" class="form-control" style="width:100px">
          </div>

          <div class="col-md-2">
            <label>Tipo de comprobante</label>

          </div>
          <div class="col-md-3">
            <select class="form-control" id="Tipo_comprobantevn">
              <option value="Ticket">Ticket</option>
              <option value="Factura">Factura</option>
            </select>
          </div>

        </div>
        <br>

        <br>


      </form>
      <div class="table-responsive row">
			<table class= "table table-striped table-bordered">
				<thead id="thead_agregar"></thead>
				<tbody id="tbody_agregar"></tbody>
			</table>
		</div>
    </div>
    <div class="modal-footer">
      <button type="button" name="button" class="btn btn-danger" id="Cancelar_venta">Cancelar venta</button>
      <button type="button" class="btn btn-success" id="Agregar_vn"><span class="glyphicon glyphicon-plus-sign"></span> Agregar a la venta</button>
      <button type="button" class="btn btn-default" id="Realizar_venta">Continuar</button>
    </div>
  </div>

</div>
</div>
<!-- Modal realizar venta -->
<div id="Realizar_venta_modal" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">


  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Realizar venta</h4>
    </div>
    <div class="modal-body">
      <div class="row">


        <div class="col-md-2">
          <label>RFC</label>
          <input type="text" name="" value="" class="form-control" id="RFC_rv"  disabled>

        </div>
        <div class="col-md-2">
          <label>NOMBRE</label>
          <input type="text" name="" value="" class="form-control" id="Nombre_rv" disabled>

        </div>
        <div class="col-md-5">
          <label>DOMICILIO</label>
          <input type="text" name="" value="" class="form-control" id="Domicilio_rv" disabled>

        </div>
        <div class="col-md-3">
          <label>CORREO</label>
          <input type="text" name="" value="" class="form-control" id="Correo_rv" disabled>

          <?php
            echo "<input type='text' value='' id='Id_cliente_rv' hidden >"
           ?>

        </div>

      </div>
      <div class="row">
        <div class="col-md-2">
          <label>TELEFONO</label>
          <input type="text" name="" value="" class="form-control" id="Telefono_rv" disabled>

        </div>

        <div class="col-md-2">
          <label>TOTAL</label>
          <input type="text" name="" value="" class="form-control" id="Total_rv" disabled>

        </div>
        <div class="col-md-2">
          <label>TPAGO</label>
          <input type="text" name="" value="" class="form-control" id="Tpago_rv" disabled>

        </div>
        <div class="col-md-2">
          <label>TCOMPROBANTE</label>
          <input type="text" name="" value="" class="form-control" id="Tcomprobante_rv" disabled>

        </div>

      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <button type="button" class="btn btn-success" id="Venta" >Generar y cobrar</button>
    </div>
  </div>

</div>
</div>

<!-- Modal Lista de productos -->

<div id="Lista_productos_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Lista de productos</h4>
    </div>
    <div class="modal-body">
      <form >
        <div class="row">
          <div class="col-md-2">
            <label>BUSCAR</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" id="Search_product">

          </div>
          <div class="col-md-4">
            <button type="button" name="button" class="btn btn-success" id="Agregar_producto"> <span class="glyphicon glyphicon-plus-sign"></span> Agregar</button>

          </div>

        </div>
        <br>
        <div class="table-responsive row">
  			<table class= "table table-striped table-bordered">
  				<thead id="thead_search"></thead>
  				<tbody id="tbody_search"></tbody>
  			</table>
  		</div>
        <br>
        <br>

      </form>
    </div>
    <div class="modal-footer">
      <button type="button" name="button" class="btn btn-default" id="Actualizar_inv"><span class="glyphicon glyphicon-refresh"></span> Actualizar inventario</button>
      <button type="button" name="button" class="btn btn-primary" id="Actualizar"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
    </div>
  </div>

</div>
</div>

<!-- Modal agregar productos -->

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
      <h4 class="modal-title">Actualizar producto</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label>ID Producto</label><br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Nombre</label><br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Precio</label> <br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Fecha de actualización</label> <br>
        <input type="text" name="" value="" class="form-control">


      </form>
    </div>
    <div class="modal-footer">
      <button type="button" name="button" class="btn btn-default" data-dismiss="modal">Terminar</button>
      <button type="button" name="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
    </div>
  </div>

</div>
</div>


<div id="Actualizar_inv_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Actualizar producto</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label>ID Producto</label><br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Cantidad adquirida</label><br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Precio</label> <br>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Fecha de actualización</label> <br>
        <input type="text" name="" value="" class="form-control">


      </form>
    </div>
    <div class="modal-footer">
      <button type="button" name="button" class="btn btn-default" data-dismiss="modal">Guardar y volver</button>
      <button type="button" name="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    </div>
  </div>

</div>
</div>

<div id="Servicio_tecnico_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Validar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
    <div class="row">
      <div class="col-md-6">
      <label>Concepto</label>
      <input type="text" name="" value="" class="form-control">
      </div>
      <div class="col-md-6">
        <label>Tipo de servicio</label>
        <select class="form-control" name="">
          <option>Reparacion</option>
          <option>Mantenimiento</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label>Diagnostico</label>
        <input class="form-control">
      </div>

        <div class="col-md-6">
          <label>Presupuesto</label>
          <input class="form-control">
        </div>
    </div>


      </form>
    </div>
    <div class="modal-footer">

      <button type="button" class="btn btn-success" id="Menu"><span class="glyphicon glyphicon-file"></span> Generar orden</button>
    </div>
  </div>

</div>
</div>

<div id="Facturas_tickets_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Validar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-md-12">
            <label>Buscar</label>
            <input type="text" name="" value="" class="form-control"><br>
          </div>
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">

            </div>
          </div>

        <br>
        <br>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-Ligth" id="Menu"><span class="glyphicon glyphicon-print"></span>Imprimir</button>
      <!-- <button type="button" class="btn btn-success" id="Menu"> <span class="glyphicon glyphicon-eye-open"></span>Visualizar</button> -->
    </div>
  </div>

</div>
</div>
</div>

<div id="Clientes_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Validar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label>BUSCAR</label>
        <input type="text" name="" value="" class="form-control" id="Cliente_search">

      </form>
      <div class="table-responsive row">
      <table class= "table table-striped table-bordered">
        <thead id="thead_client"></thead>
        <tbody id="tbody_client"></tbody>
      </table>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" id="Actualizar_cliente"><span class="glyphicon glyphicon-refresh"></span>Actualizar</button>


    </div>
  </div>

</div>
</div>

<div id="Cliente_modal_act" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Agregar cliente</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label>ID Cliente</label>
        <input type="text" class="form-control" value="1" disabled ><br>
        <label>Nombre:</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>RFC</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Domicilio</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Correo</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Telefono</label>
        <input type="text" name="" value="" class="form-control">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <button type="button" class="btn btn-success" data-dismiss="modal">Actualizar</button>
    </div>
  </div>

</div>
</div>

<div id="Cliente_modal_add" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Validar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label>Nombre:</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>RFC</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Domicilio</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Correo</label>
        <input type="text" name="" value="" class="form-control"><br>
        <label>Telefono</label>
        <input type="text" name="" value="" class="form-control">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar </button>
      <button type="button" class="btn btn-success" data-dismiss="modal">Terminar</button>
    </div>
  </div>

</div>
</div>


<div id="Historial_ventas_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Historial ventas</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-md-2">
            <label>Sucursal</label>
          </div>
          <div class="col-md-1">
            <label>Folio</label>
          </div>
          <div class="col-md-2">
            <label>Concepto</label>
          </div>
          <div class="col-md-1">
            <label>TPago</label>
          </div>
          <div class="col-md-2">
            <label>TCompra</label>
          </div>
          <div class="col-md-1">
            <label>Total</label>
          </div>
          <div class="col-md-1">
            <label>Fecha</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>

    </div>
  </div>

</div>
</div>

  <!-- Modal Registro -->

<div id="Registrar_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Registrar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label class="form-group">Nombre nuevo usuario</label><br>
        <input class="form-control" id="Nombre" >
        <label class="form-group">Nombres</label><br>
        <input class="form-control" id="Nombres" >
        <label class="form-group">Apellido Paterno</label><br>
        <input class="form-control" id="Apellido" >
        <label class="form-group">Apellido Materno</label><br>
        <input class="form-control" id="Apellido2" >
        <label class="form-group">Telefono </label><br>
        <input class="form-control" id="Telefono">
        <label class="form-group">Correo</label><br>
        <input class="form-control" id="Correo">
        <label class="form-group">Contraseña </label><br>
        <input class="form-control"  id="Contraseña" >
        <label class="form-group">Sucursal </label><br>
        <input class="form-control"  id="Sucursal" >
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="Registrar_usuario"> <span class="glyphicon glyphicon-ok-sign"> Registrar</span></button>
      <button type="button" class="btn btn-danger" data-dismiss="modal" > <span class="glyphicon glyphicon-remove-circle"> Cerrar</span></button>
    </div>
  </div>

</div>
</div>
<div id="Registrar_cliente_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Registrar</h4>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <label class="form-group">Nombres</label><br>
        <input class="form-control" id="Nombres_cliente" >
        <label class="form-group">Apellido Paterno</label><br>
        <input class="form-control" id="Apellido_cliente" >
        <label class="form-group">Apellido Materno</label><br>
        <input class="form-control" id="Apellido2_cliente" >
        <label class="form-group">Municipio </label><br>
        <input class="form-control" id="Municipio_cliente">
        <label class="form-group">Calle </label><br>
        <input class="form-control" id="Calle_cliente">
        <label class="form-group">Código postal </label><br>
        <input class="form-control" id="Codigo_cliente">
        <label class="form-group">No. Exterior </label><br>
        <input class="form-control" id="No_exterior_cliente">
        <label class="form-group">Colonia </label><br>
        <input class="form-control" id="Colonia_cliente">
        <label class="form-group">RFC </label><br>
        <input class="form-control" id="RFC_cliente">
        <label class="form-group">Telefono </label><br>
        <input class="form-control" id="Telefono_cliente">
        <label class="form-group">Correo</label><br>
        <input class="form-control" id="Correo_cliente">
        <label class="form-group">Empresa </label><br>
        <input class="form-control"  id="Empresa_cliente" >
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="Registrar_cliente_end"> <span class="glyphicon glyphicon-ok-sign"> Registrar</span></button>
      <button type="button" class="btn btn-danger" data-dismiss="modal" > <span class="glyphicon glyphicon-remove-circle"> Cerrar</span></button>
    </div>
  </div>

</div>
</div>
