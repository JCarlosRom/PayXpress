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
      <form class="form-group" action="index.html" method="post">
        <div class="row">
          <div class="col-md-1">
              <label for="Id">RFC Cliente</label>
          </div>
          <div class="col-md-2">
            <input class="form-control" id="RFC_vn">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2 centerblock">
            <label for="Concepto">Producto o servicio</label>
          </div>
          <div class="col-md-4">
            <input type="text" id="Producto_vn" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <label>Cantidad</label>
          </div>

          <div class="col-md-2">
            <input type="text" id="Cantidad_vn" class="form-control">
          </div>

        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label>Tipo de pago</label>

          </div>
          <div class="col-md-4">
            <select class="form-control" id="Tipo_pagovn">
              <option value="Tarjeta">Tarjeta</option>
              <option value="Efectivo">Efectivo</option>
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label>Tipo de comprobante</label>

          </div>
          <div class="col-md-4">
            <select class="form-control" id="Tipo_comprobantevn">
              <option value="Ticket">Ticket</option>
              <option value="Factura">Factura</option>
            </select>
          </div>
        </div>

      </form>
    </div>
    <div class="modal-footer">
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

        </div>

      </div>
      <div class="row">
        <div class="col-md-2">
          <label>TELEFONO</label>
          <input type="text" name="" value="" class="form-control" id="Telefono_rv" disabled>

        </div>
        <div class="col-md-2">
          <label>CANTIDAD</label>
          <input type="text" name="" value="" class="form-control" id="Cantidad_rv" disabled>

        </div>
        <div class="col-md-2">
          <label>CONCEPTO</label>
          <input type="text" name="" value="" class="form-control" id="Concepto_rv" disabled>

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
      <button type="button" class="btn btn-success" >Generar y cobrar</button>
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
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-md-2">
            <label>BUSCAR</label>
          </div>
          <div class="col-md-6">
            <input class="form-control">

          </div>
          <div class="col-md-4">
            <button type="button" name="button" class="btn btn-success" id="Agregar_producto"> <span class="glyphicon glyphicon-plus-sign"></span> Agregar</button>

          </div>

        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label>Nombre</label>
          </div>
          <div class="col-md-3">
            <label>Precio</label>
          </div><div class="col-md-3">
            <label>Existencia</label>
          </div><div class="col-md-3">
            <label>Estado</label>
          </div>
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
      <h4 class="modal-title">Lista de productos</h4>
    </div>
    <div class="modal-body">
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
          <option value="1">Recarga</option>
          <option value="2">Original</option>
          <option value="3">Genérico</option>
        </select>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="Agregar_product_end">Agregar</button>
      <button type="button" name="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
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
      <button type="button" name="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
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
          <option>Tipo de servicio</option>
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
      <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-upload"></span>Reenviar</button>
      <button type="button" class="btn btn-success" id="Menu"><span class="glyphicon glyphicon-print"></span>Imprimir</button>
      <button type="button" class="btn btn-success" id="Menu"> <span class="glyphicon glyphicon-eye-open"></span>Visualizar</button>
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
        <input type="text" name="" value="" class="form-control">
        <div class="row">
          <div class="col-md-2">
            <label>ID cliente</label>
          </div>
          <div class="col-md-2">
            <label>Nombre</label>
          </div>
          <div class="col-md-2">
            <label>Domicilio</label>
          </div>
          <div class="col-md-2">
            <label>RFC</label>
          </div>
          <div class="col-md-2">
            <label>Telefono</label>
          </div>
          <div class="col-md-2">
            <label>Correo</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" id="Actualizar_cliente"><span class="glyphicon glyphicon-refresh"></span>Actualizar</button>

      <button type="button" class="btn btn-success" id="Agregar_cliente"> <span class="glyphicon glyphicon-plus-sign"></span> Agregar</button>

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
        <label class="form-group">Apellido </label><br>
        <input class="form-control" id="Apellido" >
        <label class="form-group">Telefono </label><br>
        <input class="form-control" id="Telefono">
        <label class="form-group">Direccion</label><br>
        <input class="form-control" id="Direccion">
        <label class="form-group">Contraseña </label><br>
        <input class="form-control"  id="Contraseña" >
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="Registrar_usuario"> <span class="glyphicon glyphicon-ok-sign"> Registrar</span></button>
      <button type="button" class="btn btn-danger" data-dismiss="modal" > <span class="glyphicon glyphicon-remove-circle"> Cerrar</span></button>
    </div>
  </div>

</div>
</div>
