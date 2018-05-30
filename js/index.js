


var options = {

            url: function(phrase){

                return "routes/routeContent.php";

            },

            getValue: function(element){


                return element.name;

            },

            ajaxSettings:{

                dataType:"json",
                method:"POST",
                data:{

                    action:"Get_rfc"
                }
            },

            preparePostData: function(data){
                data.info=$("#RFC_vn").val();
                return data;

            },
           //requestDelay:400

        };

    $("#RFC_vn").easyAutocomplete(options);




    var options = {

                url: function(phrase){

                    return "routes/routeContent.php";

                },

                getValue: function(element){


                    return element.name;

                },

                ajaxSettings:{

                    dataType:"json",
                    method:"POST",
                    data:{

                        action:"Get_PRODUCTOS_autocomplete"
                    }
                },

                preparePostData: function(data){
                    data.info=$("#Producto_vn").val();
                    return data;

                },
               //requestDelay:400

            };

        $("#Producto_vn").easyAutocomplete(options);



$(document).on("click","#Registrar",function(e){
  e.preventDefault();

  $("#Registrar_modal").modal("show");

});

$(document).on("click","#Registrar_cliente",function(e){
  e.preventDefault();

  $("#Registrar_cliente_modal").modal("show");

});

$(document).on("click", "#Venta", function(e){
  var Empleado =$("#Usuario").val();
  var Cliente =$("#Id_cliente_rv").val();

  var venta={Empleado:Empleado, Cliente: Cliente}

  $.ajax({
      url:"routes/routeContent.php",
      type:"POST",
      data:{action:"Venta", info:venta},
      dataType:"JSON",
      beforesend:function(){

      },error: function(){

      }, success: function(data){
        toast1("Exito","Venta realizada correctamente",8000,"success");

        $("#Realizar_venta_modal").modal("hide");
        $("#Venta_nueva_modal").modal("hide");
        $('#tbody_agregar').empty()

      }
  });
});

$(document).on("click","#Registrar_usuario",function(e){
  var Usuario= $("#Nombre").val();
  var Nombres= $("#Nombres").val();
  var Apellido=$("#Apellido").val();
  var Apellido2=$("#Apellido2").val();
  var Telefono=$("#Telefono").val();
  var Correo=$("#Correo").val();
  var Contraseña=$("#Contraseña").val();
  var Sucursal=$("#Sucursal").val();

  var Nuevo_registro ={

    Usuario:Usuario, Nombres:Nombres, Apellido:Apellido, Apellido2:Apellido2, Telefono: Telefono,
    Correo:Correo, Contraseña:Contraseña, Sucursal:Sucursal
  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Registro", info:Nuevo_registro},
    dataType:"JSON",
    beforesend(){

    },error:function(error){
      toast1("El registro no se pudo llevar a cabo de forma correcta",error,8000,"error");
    },
    success:function(data){

            if(data === true){
              toast1("El registro se pudo llevar a cabo de forma correcta","Agregado correctamente",8000,"success");

            }else {
                toast1("error", "Registro Incorrecto",8000,"error");
            }
    }


  });

});

$(document).on("click","#Registrar_cliente_end",function(e){
  ;
  var Nombres= $("#Nombres_cliente").val();
  var Apellido=$("#Apellido_cliente").val();
  var Apellido2=$("#Apellido2_cliente").val();
  var Municipio=$("#Municipio_cliente").val();
  var Calle=$("#Calle_cliente").val();
  var Codigo=$("#Codigo_cliente").val();
  var Numero=$("#No_exterior_cliente").val();
  var Colonia=$("#Colonia_cliente").val();
  var RFC=$("#RFC_cliente").val();
  var Telefono=$("#Telefono_cliente").val();
  var Correo=$("#Correo_cliente").val();
  var Empresa=$("#Empresa_cliente").val();

  var Nuevo_registro ={

    Nombres:Nombres, Apellido:Apellido, Apellido2:Apellido2,Municipio:Municipio, Calle:Calle,Codigo:Codigo,Numero:Numero,Colonia:Colonia,
    RFC:RFC, Telefono: Telefono,
    Correo:Correo, Empresa:Empresa

  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Registro_cliente", info:Nuevo_registro},
    dataType:"JSON",
    beforesend(){

    },error:function(error){
      toast1("El registro no se pudo llevar a cabo de forma correcta",error,8000,"error");
    },
    success:function(data){

            if(data === true){
              toast1("El registro se pudo llevar a cabo de forma correcta","Agregado correctamente",8000,"success");

            }else {
                toast1("error", "Registro Incorrecto",8000,"error");
            }
    }


  });

});

$(document).on("click","#Login", function(e){
  e.preventDefault();

  var tipo_usuario =$("#Usuario").val();
  var Contraseña= $("#Contraseña").val();

  var Usuario={
    Tipo:tipo_usuario, Contraseña:Contraseña
  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Login", info:Usuario},
    dataType:"JSON",
    beforesend(){

    },error:function(error){
      toast1("El login no se pudo llevar a cabo de forma correcta",error,8000,"error");
    },
    success:function(data){
      console.log(data);
            if(data == "true"){
                $(location).attr('href','Menu.php');
            }else {
                toast1("error", "Login Incorrecto",8000,"error");
            }
    }

  });



});

$(document).on("click","#Iniciar_sesion",function(e){
  e.preventDefault();

  $("#Iniciar_sesion_modal").modal("show");

});

$(document).on("click","#Venta_nueva",function(e){


  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Temporal_open"},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
        var headers =["Id","RFC","PRODUCTO","CANTIDAD","TIPO DE PAGO","TIPO DE COMPROBANTE","TOTAL","Eliminar"];
        jQueryTableagregar("tableContainer", headers,data, 4, "450 px", "Image")

        $("#Venta_nueva_modal").modal("show");


      }else{
          $("#Venta_nueva_modal").modal("show");
      }
    }
  });


});

$(document).on("click","#Cancelar_venta", function(e){
  $("#Tipo_pagovn").prop('disabled',false);
  $("#Tipo_comprobantevn").prop('disabled',false);
  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Temporal_delete"},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
      $('#tbody_agregar').empty()


      }
    }
  });

});


$(document).on("click","#Agregar_vn", function(e){

  $("#Tipo_pagovn").prop('disabled','disabled');
  $("#Tipo_comprobantevn").prop('disabled','disabled');

  var RFC =$("#RFC_vn").val();
  var Producto =$("#Producto_vn").val();
  var Cantidad =$("#Cantidad_vn").val();
  var Tipo_pago =$("#Tipo_pagovn").val();
  var Tipo_comprobante=$("#Tipo_comprobantevn").val();

  var data={RFC:RFC, Producto:Producto, Cantidad:Cantidad, Tipo_pago:Tipo_pago,
  Tipo_comprobante};

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Temporal", info:data},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
        var headers =["Id","RFC","PRODUCTO","CANTIDAD","TIPO DE PAGO","TIPO DE COMPROBANTE","TOTAL","Eliminar"];
        jQueryTableagregar("tableContainer", headers,data, 4, "450 px", "Image")

        resetForm("formtext");


      }
    }


});

});

$(document).on("click","#Realizar_venta", function(e){
  e.preventDefault(e);

  var RFC = $("#RFC_vn").val();
  var Producto=$("#Producto_vn").val();
  var Cantidad =$("#Cantidad_vn").val();
  var Tipo_pago=$("#Tipo_pagovn").val();
  var Tipo_comprobante=$("#Tipo_comprobantevn").val();

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Get_info_venta",info:{RFC:RFC, Producto:Producto}},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){
      toast1("Error","error",8000,error);
    },
    success:function(data){
      if (data!="") {
        $("#RFC_rv").val(data[0]["RFC"]);
        $("#Nombre_rv").val(data[0]["Nombre"]);
        $("#Domicilio_rv").val(data[0]["Calle"]+" #"+data[0]["NoExterior"]+" colonia "+data[0]["Colonia"]);
        $("#Correo_rv").val(data[0]["Correo"]);
        $("#Telefono_rv").val(data[0]["Telefono"]);
        $("#Total_rv").val(data[0]["Total neto"]);
        $("#Tpago_rv").val(Tipo_pago);
        $("#Tcomprobante_rv").val(Tipo_comprobante);
        $("#Id_cliente_rv").val(data[0]["IdCliente"]);


        $("#Realizar_venta_modal").modal("show");


      }
    }


});

});




$(document).on("click","#Agregar_product_end",function(e){


  var Nombre=$("#Nombre_agregar").val();
  var Precio=$("#Precio_agregar").val();
  var Modelo =$("#Modelo_agregar").val();
  var Tipo=$("#Tipo").val();
  var Marca=$("#Marca_agregar").val();


  var Venta_nueva={
    Nombre:Nombre, Precio:Precio, Modelo:Modelo,
    Tipo:Tipo, Marca:Marca
  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Venta_nueva", info:Venta_nueva},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){
      toast1("Error al ingresar la venta nueva",error,8000,error);
    },success:function(data){
      if (data==true) {
      // toast1("Venta agregada correctamente","Exito",8000,success);
      }else{
      // toast1("Error al ingresar la venta nueva","error",8000,error);
      }
    }

  });
});

$(document).on("click", "#Lista_productos", function(e){
 e.preventDefault();

 location.href="Lista_productos.php";

});

$(document).on("click", "#Agregar_producto", function(e){
  e.preventDefault();

  $("#Agregar_modal").modal("show");


});

$(document).on("click", "#Actualizar", function(e){
  e.preventDefault();


  $("#Actualizar_modal").modal("show");


});

$(document).on("click", "#Actualizar_inv", function(e){
  e.preventDefault();

  $("#Actualizar_inv_modal").modal("show");

});

$(document).on("click", "#Servicio_tecnico", function(e){
 e.preventDefault();

 $("#Servicio_tecnico_modal").modal("show");


});

$(document).on("click", "#Facturas_tickets", function(e){
 e.preventDefault();

 $("#Facturas_tickets_modal").modal("show");


});

$(document).on("click","#Clientes",function(e){
  e.preventDefault();
  $("#Clientes_modal").modal("show");
})

$(document).on("keyup", "#Cliente_search", function(e){
 e.preventDefault();
 var Cliente=$("#Cliente_search").val();

 $.ajax({
   url:"routes/routeContent.php",
   type:"POST",
   data:{action:"Get_client", info:Cliente},
   dataType:"JSON",
   beforesend:function(){

   },
   error:function(){

   },
   success:function(data){
     if (data!="") {
       var headers =["ID","NOMBRE","DOMICILIO","RFC","TELEFONO","CORREO"];
       jQueryTableclient("tableContainer", headers,data, 4, "450 px", "Image")

     }
   }
 })




});

$(document).on("click", "#Actualizar_cliente", function(e){
  e.preventDefault();
  $("#Cliente_modal_act").modal("show");

});

$(document).on("click", "#Agregar_cliente", function(e){
  e.preventDefault();

  $("#Cliente_modal_add").modal("show");

});


$(document).on("click", "#Historial_ventas", function(e){
 e.preventDefault();

 $("#Historial_ventas_modal").modal("show");


});



$(document).on("click","#Agregar_product_end",function(e){

  e.preventDefault();

  var Nombre=$("#Nombre_agregar");
  var Precio=$("#Precio_agregar");
  var Marca=$("#Marca_agregar");
  var Modelo=$("#Modelo_agregar");
  var Tipo=$("#Tipo");

  var Producto={
    Nombre:Nombre, Precio:Precio, Marca:Marca, Modelo:Modelo,Tipo:Tipo
  }

  $.ajax({
    url:"routes/routeContent",
    type:"POST",
    data:{action:"Add_product", info:Producto},
    dataType:"JSON",
    beforesend:function(){

    },
    error:function(){

    },
    success:function(data){
      if (data!=false) {
        resetForm("formadd_product");
      }
    }
  });

});


$(document).on("click", "#Cerrar_sesion", function(e){
 e.preventDefault();

location.href="php/logout.php";


});
