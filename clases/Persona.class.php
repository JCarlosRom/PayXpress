<?php

	require_once('MySQL.class.php');

	Class Persona extends MySQL{

		public function Login($info){

			session_start();
			$Usuario=$info["Tipo"];
			$Contraseña=$info["Contraseña"];

			$Contraseña_crypt=md5($Contraseña);

			$Consulta= "CALL `Login`('$Contraseña_crypt', '$Usuario')";

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
		public function Registro_cliente ($info){

			$Nombres=$info["Nombres"];
			$Apellido=$info["Apellido"];
			$Apellido2=$info["Apellido2"];
			$Municipio=$info["Municipio"];
			$Calle=$info["Calle"];
			$Codigo=$info["Codigo"];
			$Numero=$info["Numero"];
			$Colonia=$info["Colonia"];
			$RFC=$info["RFC"];
			$Telefono=$info["Telefono"];
			$Correo=$info["Correo"];
			$Empresa=$info["Empresa"];

			$Consulta="insert into cliente (Nombre, PrimerApellido, SegundoApellido,Municipio, Calle,CodigoPostal,
			NoExterior,Colonia,RFC,Telefono, Correo,Empresa)
			values('$Nombres','$Apellido','$Apellido2','$Municipio','$Calle','$Codigo','$Numero','$Colonia','$RFC',
			'$Telefono','$Correo','$Empresa')";


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



		 public function Get_PRODUCTOS_autocomplete($info){

		 		$Consulta ="Select NombreProducto name from Producto where NombreProducto LIKE '%{$info}%'";

		 		return $this->query_assoc($Consulta);
		 	}
			public function Get_products(){

				 $Consulta ="Select p.IdProducto, p.NombreProducto, p.Marca, p.Modelo, tp.NombreTipo, p.PrecioUnitario,
	 			p.Existencia,if(p.Estatus=1,'En existencia','Agotado')
	  		from producto p
	 		inner join tipoproducto tp on p.IdTipoProducto=tp.IdTipoProducto";

				 return $this->query_row($Consulta);
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

			$Consulta="Select cliente.IdCliente,cliente.Nombre,cliente.PrimerApellido ,cliente.SegundoApellido, cliente.Municipio,Calle ,cliente.CodigoPostal, cliente.NoExterior,
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

			$consulta="CALL `Crear_temporal`('$RFC', '$Producto', '$Cantidad', '$Tipo_pago', '$Tipo_comprobante')";

		 return $this->query_row($consulta);

		}

		public function Temporal_open(){

			$Consulta2="Select T.Id, T.RFC, T.Producto, T.Cantidad, T.Tipo_pago, T.Tipo_comprobante,
			T.Cantidad*P.PrecioUnitario
 			from Temporal_venta T
 			inner join Producto P on T.Producto=P.NombreProducto";

			return $this->query_row($Consulta2);
		}

		public function Search_product($info){

			$Consulta="Select p.IdProducto, p.NombreProducto, p.Marca, p.Modelo, tp.NombreTipo, p.PrecioUnitario,
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

			$Consulta="select IdCliente, concat(Nombre,' ',PrimerApellido,' ',SegundoApellido), concat('Calle ',Calle,' #',NoExterior,' Colonia',Colonia), RFC
			,Telefono, Correo from cliente where RFC like '%{$info}%'";


			return $this->query_row($Consulta);

		}
		public function Temporal_delete(){
			$Consulta="Delete from Temporal_venta";

			return $this->query($Consulta);
		}

		public function Venta($info){

		 $Empleado=$info["Empleado"];
		 $Cliente=$info["Cliente"];


		 $Consulta="CALL `Venta`('$Empleado', '$Cliente')";

		 return $this->query($Consulta);

		}
		public function Edit_product($info){
			$Nombre=$info["Nombre"];
			$Precio=$info["Precio"];
			$Marca=$info["Marca"];
			$Modelo=$info["Modelo"];
			$Tipo=$info["Tipo"];
			$Existencia=$info["Existencia"];

			$Consulta="Update producto set NombreProducto='$Nombre', Marca='$Marca',
			Modelo='$Modelo',IdTipoProducto='$Tipo', PrecioUnitario='$Precio',Existencia='$Existencia'  where NombreProducto='$Nombre'";

			return $this->query($Consulta);
		}

		public function Get_Services(){

			$Consulta="Select s.IdServicio, s.NombreServicio, s.PrecioUnitario,s.Fecha_llegada , tp.NombreTipo,es.NombreEstado
			from servicio s inner join tiposervicio tp on s.IdTipoServicio=tp.IdTipoServicio inner join
			estadoservicio es on s.IdEstado=es.IdEstado";

			return $this->query_row($Consulta);
		}

		public function Search_Services($info){

			$Consulta="Select s.IdServicio, s.NombreServicio, s.PrecioUnitario,s.Fecha_llegada ,tp.NombreTipo,es.NombreEstado
			from servicio s inner join tiposervicio tp on s.IdTipoServicio=tp.IdTipoServicio inner join
			estadoservicio es on s.IdEstado=es.IdEstado where s.NombreServicio LIKE '%{$info}%'";

			return $this->query_row($Consulta);

		}
		public function Agregar_servicio($info){
			$Nombre=$info["Nombre"];
			$Precio=$info["Precio"];
			$Fecha_llegada=$info["Fecha_llegada"];
			$Tipo=$info["Tipo"];
			$Estado=$info["Estado"];

			$Consulta="Insert into servicio (NombreServicio, PrecioUnitario,Fecha_llegada,IdTipoServicio,IdEstado)
			values('$Nombre','$Precio','$Fecha_llegada','$Tipo','$Estado')";

			return $this->query($Consulta);
		}
		public function Actualizar_servicio($info){
			$Nombre=$info["Nombre"];
			$Estatus=$info["Estatus"];

			$Consulta="Update servicio set IdEstado='$Estatus'where NombreServicio='$Nombre'";

			return $this->query($Consulta);
		}

		public function Get_Services_autocomplete($info){

			$Consulta="Select NombreServicio name from Servicio where NombreServicio like '%{$info}%'";

			return $this->query_assoc($Consulta);


		}

		public function Temporal_venta(){

			$Consulta7="Select * from venta v inner join Empleado e where v.IdEmpleado=e.IdEmpleado";

			return $this->query_row($Consulta7);
		}

		// public function usuario(){

			// $sesion=$_SESSION["user"];
			// echo $sesion;

		// 	$Consulta8="Select Sucursal from Empleado where Empleado=$sesion";
		// }


		}

?>
