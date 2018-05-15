<?php

	require_once('MySQL.class.php');

	Class Persona extends MySQL{

		public function Login($info){

			session_start();
			$Usuario=$info["Tipo"];
			$Contraseña=$info["Contraseña"];

			$Contraseña_crypt=md5($Contraseña);

			$Consulta= "Select * from usuarios where Contraseña='$Contraseña_crypt' && Usuario='$Usuario'";

			$respuesta= $this->query_assoc($Consulta);

			if(count($respuesta) > 0){
				$_SESSION["user"]=$Usuario;
				return "true";
			}else{
				return "false";
			}

		}

		public function Registro ($info){

			$Nombre=$info["Usuario"];
			$Apellido=$info["Apellido"];
			$Telefono=$info["Telefono"];
			$Direccion=$info["Direccion"];
			$Contraseña=md5($info["Contraseña"]);

			$Consulta="insert into usuarios (Usuario,Contraseña,Apellido,Telefono,Direccion)
			values('$Nombre','$Contraseña','$Apellido','$Telefono','$Direccion')";

			echo $Consulta;
			return $this->query($Consulta);
		}


		public function Get_Users(){
			$Consulta="Select Usuario from usuarios";

			return $this->query_assoc($Consulta);
		}

     public function Get_rfc($info){

			 $Consulta ="Select RFC name from cliente where RFC LIKE '%{$info}%'";

			 return $this->query_assoc($Consulta);
		 }



		 public function Get_PRODUCTOS($info){

		 		$Consulta ="Select NombreProducto name from Producto where NombreProducto LIKE '%{$info}%'";

		 		return $this->query_assoc($Consulta);
		 	}

		public function Venta_nueva($info){
			$Nombre=$info["Nombre"];
			$Precio=$info["Precio"];
			$Modelo=$info["Modelo"];
			$Tipo=$info["Tipo"];
			$Marca=$info["Marca"];

			$Consulta="insert into producto (NombreProducto,PrecioUnitario,Marca,Modelo,IdTipoProducto)values
			('$Nombre','$Precio','$Marca', '$Modelo','$Tipo')";



			return $this->query($Consulta);
		}
		public function Get_info_venta($info){

			$RFC=$info["RFC"];
			$Producto=$info["Producto"];

			$Consulta="Select cliente.Nombre,cliente.PrimerApellido ,cliente.SegundoApellido, cliente.Municipio,cliente.Calle ,cliente.CodigoPostal, cliente.NoExterior,
			cliente.Colonia, cliente.RFC, cliente.Telefono, cliente.Telefono, cliente.Correo, producto.PrecioUnitario
			from cliente inner join producto on producto.NombreProducto='$Producto' where RFC='$RFC'";


			return $this->query_assoc($Consulta);

		}


		}



?>
