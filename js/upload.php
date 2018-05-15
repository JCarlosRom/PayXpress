<?php
date_default_timezone_set ( "America/Mexico_City" );

//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
 
    //obtenemos el archivo a subir
    $file = $_FILES['archivo']['name'];
    $type=$_FILES["archivo"]["type"];
    $date= getdate();
  

    $day= $date["mday"];
    $month=$date["mon"];
    $year=$date["year"];
    $hour=$date["hours"];
    $minutes=$date["minutes"];

    $namefile=$hour.$minutes.$day.$month.$year; 

    
    if($type=="image/jpeg"){

        $namefilefinal=$namefile."."."jpg";

    }else{
        if($type=="image/png"){
           
             $namefilefinal=$namefile."."."png";

        }else{

            if($type=="image/gif"){

                $namefilefinal=$namefile."."."gif";
            }

        }
    }
 
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    if(!is_dir("images/")) 
        mkdir("images/", 0777);
     
    //comprobamos si el archivo ha subido

    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"images/".$namefilefinal))
    {
       sleep(3);//retrasamos la petición 3 segundos
       echo $namefilefinal;//devolvemos el nombre del archivo para pintar la imagen
       
    }
}else{

    throw new Exception("Error Processing Request", 1);   
}
?>