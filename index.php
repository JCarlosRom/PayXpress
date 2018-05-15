<?php

session_start();

if(isset($_SESSION["user"])){

    header("location:Menu.php");

}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	<title>Estructura base</title>


	<link href="css/animate.min.css" rel="stylesheet">
  	<link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
  	<link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
  	<link href="css/menu.css" rel="stylesheet">
    <!-- CSS file -->
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
		</style>

  	<body background="back.jpg" >


<div class="container">

		<form  style="margin-top: 233px;">
			<div class="row">
				<div class="col-md-3">

				</div>
				<div class="col-md-6 ">
					<div class="centerblock">
						<label class="form-group" >TINTA EXPRESS</label>
					</div>

				</div>
				<div class="col-md-3">

				</div>

			</div>

			<div class="row">
				<div class="col-md-4">

				</div>
				<div class="col-md-4">
					<select class="form-control" id="Usuario">

            <?php
            include('clases/Persona.class.php');
              $Content = new Persona();

              $users=($Content->Get_Users());

              for ($i=0; $i <count($users) ; $i++) {
                echo "<option value=".$users[$i]["Usuario"].">".$users[$i]["Usuario"]."</option>";
              }
             ?>

					</select>
				</div>
				<div class="col-md-4">

				</div>
			</div>
			<br>
				<div class="row">
					<div class="col-md-3">

					</div>
					<div class="col-md-6">
						<div class="centerblock">
							<button type="button" class="btn btn-success" id="Iniciar_sesion">Iniciar sesion <span class="glyphicon glyphicon-log-in"></span></button>
						</div>

					</div>

					<div class="col-md-3">

					</div>
				</div>

		</form>

		<div id="Iniciar_sesion_modal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Validar</h4>
	      </div>
	      <div class="modal-body">
					<form class="" action="index.html" method="post">
						<label class="form-group">Contraseña</label><br>
						<input class="form-control" type="password" id="Contraseña" >
					</form>
	      </div>
	      <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Regresar <span class="glyphicon glyphicon-circle-arrow-left"></span></button>
					<button type="button" class="btn btn-success" id="Login">Continuar  <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
	      </div>
	    </div>

	  </div>
	</div>


	</div>





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
</html>
