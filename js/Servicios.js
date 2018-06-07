$(document).ready(function(){
  LoadServices();
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

                    action:"Get_Services_autocomplete"
                }
            },

            preparePostData: function(data){
                data.info=$("#Nombre_estatus").val();
                return data;

            },
           //requestDelay:400

        };

    $("#Nombre_estatus").easyAutocomplete(options);


function LoadServices(){
  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Get_Services"},
    dataType:"JSON",
    beforesend:function(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
        var headers =["ID","Nombre del servicio","Precio","Fecha llegada","Tipo","Estado"];
        jQueryTableServices("tableContainer", headers,data, 4, "450 px", "Image")

      }
    }

  })
}

$(document).on("click","#Agregar_servicio", function(){
  $("#modal_agregar_servicio").modal("show");

});

$(document).on("keyup","#Search_servicio", function(e){
  e.preventDefault();
  var busqueda_servicio=$("#Search_servicio").val();

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Search_Services", info:busqueda_servicio},
    dataType:"JSON",
    beforesend:function(){

    },
    error:function(){

    },
    success:function(data){
      if (data!="") {
        var headers =["ID","Nombre del servicio","Precio","Fecha llegada","Tipo","Estado"];
        jQueryTableServices("tableContainer", headers,data, 4, "450 px", "Image")

      }
    }

  })
})
$(document).on("click","#Agregar_servicio_end", function(e){
  e.preventDefault();
  var Nombre=$("#Nombre_agregar").val();
  var Precio =$("#Precio_agregar").val();
  var Fecha_llegada=$("#Fecha_agregar").val();
  var Tipo=$("#Tipo_agregar").val();
  var Estado=$("#Estado_agregar").val();

  var servicio={
    Nombre:Nombre, Precio:Precio, Fecha_llegada:Fecha_llegada,
    Tipo:Tipo, Estado:Estado
  }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Agregar_servicio", info:servicio},
    dataType:"JSON",
    beforesend(){

    },
    error:function(){
      toast1("Error al ingresar la venta nueva",error,8000,error);
    },success:function(data){
      if (data==true) {
        LoadServices();
          $("#modal_agregar_servicio").modal("hide");
      }else{

        }
    }

  });

})

$(document).on("click","#Actualizar_servicio",function(){
          $("#Estado_modal").modal("show");
})

$(document).on("click", "#Actualizar_servicio_end", function(){
    var Nombre=$("#Nombre_estatus").val();
    var Estatus=$("#Estatus").val();
    var servicio={
      Nombre:Nombre,Estatus:Estatus

    }

  $.ajax({
    url:"routes/routeContent.php",
    type:"POST",
    data:{action:"Actualizar_servicio",info:servicio},
    dataType:"JSON",
    beforesend:function(){

    }, error:function(){

    },success:function(data){
      if (data!=false) {
        LoadServices();
      }
    }


  })

})
