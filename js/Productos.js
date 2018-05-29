$(document).ready(function(){
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
});
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
