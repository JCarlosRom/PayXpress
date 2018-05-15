<?php



	require('../clases/Persona.class.php');

	$Content = new Persona();

	$action = $_POST['action'];

	if(isset($_POST['info']))
		$info = $_POST['info'];


	switch ($action) {

		case 'Login':
			echo json_encode($Content->Login($info));
			break;
		case 'Registro':
			echo json_encode($Content->Registro($info));
			break;
		case "Venta_nueva":
			echo json_encode($Content->Venta_nueva($info));
			break;
		case "Get_rfc":
			echo json_encode($Content->Get_rfc($info));
			break;
		case "Get_PRODUCTOS":
			echo json_encode($Content->Get_PRODUCTOS($info));
			break;
		case 'Get_info_venta':
			echo json_encode($Content->Get_info_venta($info));
			break;



	}

?>
