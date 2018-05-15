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

                        action:"Get_PRODUCTOS"
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
  e.preventDefault();

  $("#Venta_nueva_modal").modal("show");


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

        $("#Cantidad_rv").val(Cantidad);
        $("#Concepto_rv").val(Producto);
        $("#Total_rv").val(data[0]["PrecioUnitario"]*Cantidad);
        $("#Tpago_rv").val(Tipo_pago);
        $("#Tcomprobante_rv").val(Tipo_comprobante);


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
        toast1("Venta agregada correctamente","Exito",8000,success);
      }else{
        toast1("Error al ingresar la venta nueva","error",8000,error);
      }
    }

  });
});

$(document).on("click", "#Lista_productos", function(e){
 e.preventDefault();

 $("#Lista_productos_modal").modal("show");


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


$(document).on("click", "#Clientes", function(e){
 e.preventDefault();

 $("#Clientes_modal").modal("show");


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


$(document).on("click", "#Cerrar_sesion", function(e){
 e.preventDefault();

location.href="php/logout.php";


});
