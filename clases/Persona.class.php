<?php

	require_once('MySQL.class.php');

	Class Persona extends MySQL{

		public function Login($info){

			session_start();
			$Usuario=$info["Tipo"];
			$Contraseña=$info["Contraseña"];

			$Contraseña_crypt=md5($Contraseña);

			$Consulta= "Select * from empleado where Contraseña='$Contraseña_crypt' && Usuario='$Usuario'";

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
			$Nombres=$info["Nombres"];
			$Apellido=$info["Apellido"];
			$Apellido2=$info["Apellido2"];
			$Telefono=$info["Telefono"];
			$Correo=$info["Correo"];
			$Contraseña=md5($info["Contraseña"]);
			$Sucursal=$info["Sucursal"];

			$Consulta="insert into empleado (Usuario,Nombres, Apellido, Apellido2, Telefono, Correo,Contraseña,Sucursal)
			values('$Nombre','$Nombres','$Apellido','$Apellido2','$Telefono','$Correo', '$Contraseña','$Sucursal')";


			return $this->query($Consulta);
		}


		public function Get_Users(){
			$Consulta="Select Usuario from empleado";

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

			$Consulta="Select cliente.Nombre,cliente.PrimerApellido ,cliente.SegundoApellido, cliente.Municipio,Calle ,cliente.CodigoPostal, cliente.NoExterior,
			cliente.Colonia, cliente.RFC, cliente.Telefono, cliente.Telefono, cliente.Correo, sum(temporal_venta.Cantidad*producto.PrecioUnitario) as 'Total neto'
			from cliente inner join temporal_venta on cliente.RFC=temporal_venta.RFC inner join producto on temporal_venta.Producto=producto.NombreProducto
			";


			return $this->query_assoc($Consulta);

		}

		public function Temporal($info){
			$RFC=$info["RFC"];
			$Producto=$info["Producto"];
			$Cantidad=$info["Cantidad"];
			$Tipo_pago=$info["Tipo_pago"];
			$Tipo_comprobante=$info["Tipo_comprobante"];

			$consulta="Insert into Temporal_venta (RFC, Producto, Cantidad, Tipo_pago,Tipo_comprobante) values
			('$RFC','$Producto', '$Cantidad','$Tipo_pago','$Tipo_comprobante')";

			$this->query($consulta);

			$Consulta2="Select T.RFC, T.Producto, T.Cantidad, T.Tipo_pago, T.Tipo_comprobante,
			T.Cantidad*P.PrecioUnitario
 			from Temporal_venta T
 			inner join Producto P on T.Producto=P.NombreProducto";

			return $this->query_row($Consulta2);
		}

		public function Search_product($info){

			$Consulta="Select p.NombreProducto, p.Marca, p.Modelo, tp.NombreTipo, p.PrecioUnitario,
			p.Existencia,if(p.Estatus=1,'En existencia','Agotado')
 		from producto p
		inner join tipoproducto tp on p.IdTipoProducto=tp.IdTipoProducto
		where NombreProducto like '%{$info}%'";

			return $this->query_row($Consulta);
		}

		public function Add_product($info){

			$Nombre=$info["Nombre"];
			$Precio=$info["Precio"];
			$Marca=$info["Marca"];
			$Modelo=$info["Modelo"];
			$Tipo=$info["Tipo"];


			$Consulta="Insert into producto (NombreProducto, Marca, Modelo,IdTipoProducto,PrecioUnitario)
			values('$Nombre','$Marca','$Modelo','$Tipo','$Precio')";



			return $this->query($Consulta);


		}

		public function Get_client($info){

			$Consulta="select IdCliente, Nombre, concat('Calle ',Calle,' #',NoExterior,' Colonia',Colonia), RFC
			,Telefono, Correo from cliente where RFC like '%{$info}%'";


			return $this->query_row($Consulta);

		}


		}



?>
