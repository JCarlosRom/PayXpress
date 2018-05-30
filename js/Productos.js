$(document).ready(function(){
  LoadProducts();
});

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
                data.info=$("#Nombre_actualizar").val();
                return data;

            },
           //requestDelay:400

        };

    $("#Nombre_actualizar").easyAutocomplete(options);


function LoadProducts(){
  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Get_products"},
    dataType:"JSON",
    beforesend:function(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
        var headers =["ID","Nombre","Marca","Modelo","Tipo de producto","Precio Unitario","Existencia","Estado"];
        jQueryTableProductos("tableContainer", headers,data, 4, "450 px", "Image")

      }
    }

  })
}
$(document).on("keyup","#Search_producto", function(e){
  var busqueda=$("#Search_producto").val();

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Search_product", info:busqueda},
    dataType:"JSON",
    beforesend: function(){

    },
    error:function(){

    }, success:function(data){
      var headers =["ID","Nombre","Marca","Modelo","Tipo de producto","Precio Unitario","Existencia","Estado"];
      jQueryTableProductos("tableContainer", headers,data, 4, "450 px", "Image")

    }

  });
});

$(document).on("click", "#Agregar_producto", function(e){
  e.preventDefault();

  $("#Agregar_modal").modal("show");


});
$(document).on("click","#Agregar_product_end",function(e){

  e.preventDefault();

  var Nombre=$("#Nombre_agregar").val();
  var Precio=$("#Precio_agregar").val();
  var Marca=$("#Marca_agregar").val();
  var Modelo=$("#Modelo_agregar").val();
  var Tipo=$("#Tipo").val();


  var Producto={
    Nombre:Nombre, Precio:Precio, Marca:Marca, Modelo:Modelo,Tipo:Tipo
  }

  $.ajax({
    url:"routes/routeContent.php",
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
        var headers =["ID","Nombre","Marca","Modelo","Tipo de producto","Precio Unitario","Existencia","Estado"];
        jQueryTableProductos("tableContainer", headers,data, 4, "450 px", "Image")

      }
    }
  });

});

$(document).on("click","#Actualizar_producto", function(e){
  e.preventDefault();
  $("#Actualizar_modal").modal("show");

})

$(document).on("click","#Actualizar_producto_end", function(e){
  e.preventDefault();
  var Nombre=$("#Nombre_actualizar").val();
  var Precio=$("#Precio_actualizar").val();
  var Marca=$("#Marca_actualizar").val();
  var Modelo=$("#Modelo_actualizar").val();
  var Tipo=$("#tipo_actualizar").val();
  var Existencia=$("#Existencia_actualizar").val();

  var Producto={
    Nombre:Nombre, Precio:Precio, Marca:Marca, Modelo:Modelo,Tipo:Tipo, Existencia:Existencia
  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Edit_product", info:Producto},
    dataType:"JSON",
    beforesend:function(){

    },
    error:function(){

    },
    success:function(data){
      if (data!=false) {
        LoadProducts();

        $("#Actualizar_modal").modal("hide");
      }
    }
  });



})
