<?php

session_start();

if(!isset($_SESSION["user"])){

    header("location:index.php");


}
if ($_SESSION["user"]=="Administrador") {

	$Button_registrar="<button type='button' class='btn btn-primary' id='Registrar'>Registrar usuario <span class='glyphicon glyphicon-user'></button>";
}else {
	$Button_registrar="";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	<title>Principal</title>


	<link href="css/animate.min.css" rel="stylesheet">
  	<link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
  	<link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
  	<link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="EasyAutocomplete/easy-autocomplete.min.css">

<!-- Additional CSS Themes file - not required-->
  <link rel="stylesheet" href="EasyAutocomplete/easy-autocomplete.themes.min.css">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap datetimepicker/css/bootstrap-datetimepicker.min.css" media="screen">
		<style media="screen">
		.centerblock {
			display: table;
			margin: auto;
		}
    .ButtonSize{
      height: 46px;
      width: 204.15px;
    }

		</style>

  	<body background="LOGO.jpg">


<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">TintaXpress</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="Lista_productos"><span class="glyphicon glyphicon-list-alt"></span> Lista de Productos</a></li>
              <li><a id="Servicio_tecnico"><span class="glyphicon glyphicon-wrench"></span> Servicio Tecnico</a></li>
              <li><a id="Facturas_tickets"><span class="glyphicon glyphicon-duplicate"></span> Tickets </a></li>
              <li><a id="Clientes"><span class="glyphicon glyphicon-user"></span> Clientes </a></li>
             <li><a  id="Historial_ventas"><span class="glyphicon glyphicon-th-list"></span> Historial de ventas </a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["user"] ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="Registrar"> <span class='glyphicon glyphicon-user'></span> Registrar nuevo usuario</a></li>
              <li><a href="php/logout.php"><span class="glyphicon glyphicon-off"></span> Cerrar sesion</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

	<div class="row">

	</div>
  <br>
  <div class="row">

    <div class="col-md-1">
      <button type="button" class="btn btn-info btn-lg centerblock ButtonSize" id="Venta_nueva"  ><span class="glyphicon glyphicon-plus"></span>  Venta nueva</button>
    </div>


<div class="col-md-5">
	<div class="centerblock">
		<div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/4013516"><span style="color:gray;">Hora actual en</span><br />Colima, México</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless></iframe> </div>

	</div>
</div>

<br><br>



	<div class="col-md-7">
		<div class="centerblock">
			<iframe class=centerblock src="https://mconvert.net/get-exchange-rates-widget?base=usd&amount=1&lang=en&curr=mxn&theme=blue&type=1&font=1&ssl=1" width="300" height="124" frameborder="0" scrolling="no"></iframe>
			<div style="width:300px;font-size:12px;font-family:arial;text-align:right;"><a href="https://mconvert.net/" style="text-decoration:none;color:#999;">Currency converter</a></div>

		</div>

</div>



  <?php

  include "modales.php";

   ?>






		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="EasyAutocomplete/jquery.easy-autocomplete.js"></script>
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	  	<script type="text/javascript" src="bootstrap datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script src="plugins/pnotify/pnotify.custom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="plugins/CustomAlerts/js/jquery-confirm.js"></script>
		<script src="js/jQueryTables.js"></script>
		<script src="js/spinner.js"></script>
		<script src="js/index.js"></script>
	   <link rel="stylesheet" href="css/tags.css">


	</body>
  <footer>
		<div class="row">
	    <div class="col-md-12">
				<BR>
					<label> ® TINTAXPRESS RECARGA DE CARTUCHOS DE TINTA Y TONER | AVENIDA IGNACIO SANDOVAL #750, COLIMA, COL. | TELEFONOS: (312) 313-73-66 / 312-55-92 </label>
	    </div>
    </div>

  </footer>
</html>
