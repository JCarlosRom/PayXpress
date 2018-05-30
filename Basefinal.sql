-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.31-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para pay_express
CREATE DATABASE IF NOT EXISTS `pay_express` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pay_express`;

-- Volcando estructura para tabla pay_express.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `PrimerApellido` varchar(50) DEFAULT NULL,
  `SegundoApellido` varchar(50) DEFAULT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `CodigoPostal` varchar(6) NOT NULL,
  `NoInterior` varchar(6) DEFAULT NULL,
  `NoExterior` varchar(6) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Empresa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.cliente: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`IdCliente`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Municipio`, `Calle`, `CodigoPostal`, `NoInterior`, `NoExterior`, `Colonia`, `RFC`, `Telefono`, `Correo`, `Empresa`) VALUES
	(1, 'CARLOS', 'ROMERO', 'ALONSO', 'VILLA DE ALVAREZ', '16 SEPTIEMBRE', '28000', NULL, '23', 'VILLAS DE ORO', 'CARL458596', '315258', 'carlos@tec.com', NULL),
	(2, 'ROBERTO', 'PALAZUELOS', 'LOPEZ', 'COLIMA', 'MORELOS', '28000', NULL, '565', 'CENTRO', 'ROBP398489', '45854585', 'robert@gmail.com', NULL),
	(3, 'LAURA', 'GARCIA', 'MENDOZA', 'VILLA DE ALVAREZ', 'PRIVADA GAYTAN', '28984', NULL, '120', 'LOMAS CENTENARIO', 'LAU48U47FF', '3125458', 'lau@gmail.com', NULL),
	(4, 'Manuel', 'Leyva', 'Cabrera', 'Coahuayana', 'Belisario Dominguez', '66800', NULL, '250', 'Centro', 'MAML7852VDA', '31336252', 'leyva@gmail.com', ''),
	(5, 'TIENDA', 'IGNACIO', 'SANDOVAL', 'COLIMA', 'IGNACIO SANDOVAL', '28000', NULL, '750', 'LOMAS DE CIRVUNVALACION', 'XAXXIGNACIO', '3137366', 'tinta_express01@itcolima.edu.mx', '');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para procedimiento pay_express.Crear_temporal
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Crear_temporal`(
	IN `RFC_procedure` VARCHAR(50),
	IN `Producto_procedure` VARCHAR(50),
	IN `Cantidad_procedure` INT,
	IN `Tipo_pago_procedure` VARCHAR(50),
	IN `Tipo_comprobante_procedure` VARCHAR(50)





)
BEGIN

	declare precio_unitario int;
	declare total int; 
	
	set precio_unitario =(select PrecioUnitario from producto where NombreProducto =  Producto_procedure);
	
	set total = precio_unitario*Cantidad_procedure;
	 
	
	Insert into Temporal_venta (RFC, Producto, Cantidad, Tipo_pago,Tipo_comprobante,Precio_unitario, Total) values
			(RFC_procedure,Producto_procedure, Cantidad_procedure,Tipo_pago_procedure ,Tipo_comprobante_procedure, precio_unitario, total);
	
	Select T.Id, T.RFC, T.Producto, T.Cantidad, T.Tipo_pago, T.Tipo_comprobante,
			T.Cantidad*P.PrecioUnitario
 			from Temporal_venta T
 			inner join Producto P on T.Producto=P.NombreProducto;
			
END//
DELIMITER ;

-- Volcando estructura para tabla pay_express.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Apellido2` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL DEFAULT '0',
  `Sucursal` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.empleado: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` (`IdEmpleado`, `Usuario`, `Nombres`, `Apellido`, `Apellido2`, `Telefono`, `Correo`, `Contraseña`, `Sucursal`) VALUES
	(10, 'Administrador', 'Leonel', 'Ortega', 'Natera', '31254656', 'leo@gmail.com', '202cb962ac59075b964b07152d234b70', 'IS'),
	(11, 'Karla', 'Karla', 'Perez', 'Lopez', '4589522', 'karla@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'SF'),
	(12, 'Luis', 'Luis Antonio', 'Carrillo', 'Natera', '4585455', 'luis@gmail.com', '202cb962ac59075b964b07152d234b70', 'AY'),
	(13, 'Leyva', 'Manuel', 'Leyva', 'Cabrera', '3213515', 'leyva@gmail.com', '202cb962ac59075b964b07152d234b70', 'SF');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.estadoservicio
CREATE TABLE IF NOT EXISTS `estadoservicio` (
  `IdEstado` int(11) NOT NULL,
  `NombreEstado` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.estadoservicio: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `estadoservicio` DISABLE KEYS */;
INSERT INTO `estadoservicio` (`IdEstado`, `NombreEstado`) VALUES
	(1, 'Recibido'),
	(2, 'Revision'),
	(3, 'Terminado'),
	(4, 'Entregado'),
	(5, 'Sin entregar');
/*!40000 ALTER TABLE `estadoservicio` ENABLE KEYS */;

-- Volcando estructura para procedimiento pay_express.Login
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Login`(
	IN `Contraseña_procedure` VARCHAR(50),
	IN `Usuario_procedure` VARCHAR(50)
)
BEGIN
	Select * from empleado where Contraseña=Contraseña_procedure && Usuario=Usuario_procedure;
END//
DELIMITER ;

-- Volcando estructura para tabla pay_express.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `IdTipoProducto` int(11) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  `Existencia` int(11) NOT NULL DEFAULT '5',
  `Estatus` bit(1) DEFAULT b'1',
  PRIMARY KEY (`IdProducto`),
  KEY `FKTipoPro` (`IdTipoProducto`),
  CONSTRAINT `FKTipoPro` FOREIGN KEY (`IdTipoProducto`) REFERENCES `producto` (`IdProducto`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.producto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `Marca`, `Modelo`, `IdTipoProducto`, `PrecioUnitario`, `Existencia`, `Estatus`) VALUES
	(1, '85A', 'HP', '85A', 1, 220, 6, b'1'),
	(2, 'TINTA EPSOPN', 'EPSON', '664', 2, 200, 15, b'1'),
	(3, 'MOUSE', 'LOGITECH', 'M20', 5, 150, 15, b'1'),
	(4, 'Liquido limpiador PC', 'CleanPC', 'CleanPC', 3, 50, 6, b'1'),
	(5, 'HP 664N', 'HP', '664', 4, 70, 5, b'1');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `IdProveedor` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `NoCuenta` varchar(20) NOT NULL,
  PRIMARY KEY (`IdProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.proveedor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.proveedorproducto
CREATE TABLE IF NOT EXISTS `proveedorproducto` (
  `IdProducto` int(11) NOT NULL,
  `IdProveedor` int(11) NOT NULL,
  KEY `FKIdProd` (`IdProducto`),
  KEY `FKIdProveed` (`IdProveedor`),
  CONSTRAINT `FKIdProd` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`) ON DELETE NO ACTION,
  CONSTRAINT `FKIdProveed` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`IdProveedor`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.proveedorproducto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedorproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedorproducto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `IdServicio` int(11) NOT NULL AUTO_INCREMENT,
  `NombreServicio` varchar(50) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  `Fecha_llegada` date NOT NULL,
  `IdTipoServicio` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  `Tipo_pago` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdServicio`),
  KEY `FKEstado` (`IdEstado`),
  KEY `FKTipoServ` (`IdTipoServicio`),
  CONSTRAINT `FKEstado` FOREIGN KEY (`IdEstado`) REFERENCES `estadoservicio` (`IdEstado`) ON DELETE NO ACTION,
  CONSTRAINT `FKTipoServ` FOREIGN KEY (`IdTipoServicio`) REFERENCES `tiposervicio` (`IdTipoServicio`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.servicio: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` (`IdServicio`, `NombreServicio`, `PrecioUnitario`, `Fecha_llegada`, `IdTipoServicio`, `IdEstado`, `Tipo_pago`) VALUES
	(1, 'Reparacion computadora', 650, '2018-05-30', 4, 3, NULL),
	(2, 'XZZZZ', 100, '2018-05-30', 3, 4, NULL),
	(3, 'aaa', 12, '2018-05-30', 1, 3, NULL);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.temporal_venta
CREATE TABLE IF NOT EXISTS `temporal_venta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RFC` varchar(50) DEFAULT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio_unitario` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Tipo_pago` varchar(50) DEFAULT NULL,
  `Tipo_comprobante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.temporal_venta: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `temporal_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `temporal_venta` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.tipoproducto
CREATE TABLE IF NOT EXISTS `tipoproducto` (
  `IdTipoProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTipo` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTipoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.tipoproducto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tipoproducto` DISABLE KEYS */;
INSERT INTO `tipoproducto` (`IdTipoProducto`, `NombreTipo`) VALUES
	(1, 'RECARGA TONER'),
	(2, 'ORIGINAL'),
	(3, 'GENERICO'),
	(4, 'RECARGA TINTA'),
	(5, 'ACCESORIO');
/*!40000 ALTER TABLE `tipoproducto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.tiposervicio
CREATE TABLE IF NOT EXISTS `tiposervicio` (
  `IdTipoServicio` int(11) NOT NULL,
  `NombreTipo` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTipoServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.tiposervicio: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tiposervicio` DISABLE KEYS */;
INSERT INTO `tiposervicio` (`IdTipoServicio`, `NombreTipo`) VALUES
	(1, 'Mantenimiento'),
	(2, 'Reparacion'),
	(3, 'Configuracion '),
	(4, 'Formateo');
/*!40000 ALTER TABLE `tiposervicio` ENABLE KEYS */;

-- Volcando estructura para procedimiento pay_express.Venta
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Venta`(
	IN `Empleado_procedure` VARCHAR(50),
	IN `Cliente_procedure` INT
)
BEGIN

	DECLARE done INT DEFAULT 0;
	Declare Producto_Procedure varchar(50);
	Declare Total_procedure int;
	Declare Tipo_pago_procedure varchar(50);
	Declare Precio_unitario_procedure int;
	Declare Cantidad_procedure int; 
	declare counter int;
	declare bandera int;
	declare Tipo_comprobante_procedure varchar(50);
	declare Id_procedure int;
	
	
	
	
	

	Declare Temp cursor for select Producto, Total, Precio_unitario,Tipo_pago, Cantidad,Tipo_comprobante  from temporal_venta ;
	
	DECLARE CONTINUE HANDLER FOR SQLSTATE '02000' SET done = 1;
	
	set counter = (select count(*) from venta); 
	
	set Id_procedure =(select IdEmpleado from empleado where Usuario=Empleado_procedure);
	
	
	IF  counter>0 THEN 
	
		set bandera = (select IdVenta from Venta
		order by IdVenta desc limit 1);
	
	ELSE
	
		SET bandera=0;
	
	END IF;
		
	
	
	Open Temp;
	
	REPEAT
	
	fetch temp into Producto_procedure, Total_procedure, Precio_unitario_procedure,Tipo_pago_procedure, Cantidad_procedure, Tipo_comprobante_procedure;
	
	
	

	
	insert into venta (IdVenta,IdEmpleado,IdCliente,Producto,FechaVenta,SubTotal,Cantidad,IVA,Total,FormaDePago,Tipo_comprobante) 
	values(bandera+1,Id_procedure,Cliente_procedure,Producto_procedure,CURDATE(),Precio_unitario_procedure,Cantidad_procedure,(Total_procedure*.16),Total_procedure,Tipo_pago_procedure, Tipo_comprobante_procedure );
	
	
	
	UNTIL done END REPEAT;
	
	
	delete  from Venta
	order by ID desc limit 1;
	
	delete from temporal_venta;
	
	close Temp; 
	

END//
DELIMITER ;

-- Volcando estructura para tabla pay_express.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IdVenta` int(11) DEFAULT NULL,
  `IdEmpleado` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `FechaVenta` date NOT NULL,
  `SubTotal` float NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `IVA` float NOT NULL,
  `Total` float NOT NULL,
  `FormaDePago` varchar(50) NOT NULL,
  `Tipo_comprobante` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.venta: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`ID`, `IdVenta`, `IdEmpleado`, `IdCliente`, `Producto`, `FechaVenta`, `SubTotal`, `Cantidad`, `IVA`, `Total`, `FormaDePago`, `Tipo_comprobante`) VALUES
	(60, 1, 0, 1, 'Liquido limpiador PC', '2018-05-30', 50, 2, 16, 100, 'Tarjeta', 'Ticket'),
	(61, 1, 0, 1, 'Liquido limpiador PC', '2018-05-30', 50, 1, 8, 50, 'Tarjeta', 'Ticket'),
	(63, 2, 10, 3, 'TINTA EPSOPN', '2018-05-30', 200, 2, 64, 400, 'Tarjeta', 'Ticket'),
	(65, 3, 10, 1, '85A', '2018-05-30', 220, 2, 70.4, 440, 'Tarjeta', 'Ticket'),
	(67, 4, 10, 1, '85A', '2018-05-30', 220, 2, 70.4, 440, 'Tarjeta', 'Ticket'),
	(68, 4, 10, 1, 'TINTA EPSOPN', '2018-05-30', 200, 2, 64, 400, 'Tarjeta', 'Ticket'),
	(70, 5, 10, 1, 'sadas', '2018-05-30', 12, 2, 1.92, 12, 'dsasd', 'fdsfd'),
	(71, 5, 10, 1, 'sadas', '2018-05-30', 120, 3, 1.92, 12, 'dsasd', 'fdsfd'),
	(72, 5, 10, 1, 'TINTA EPSOPN', '2018-05-30', 200, 1, 32, 200, 'Tarjeta', 'Ticket'),
	(74, 6, 10, 0, 'TINTA EPSOPN', '2018-05-30', 200, 2, 32, 200, 'Tarjeta', 'Ticket'),
	(75, 6, 10, 0, 'TINTA EPSOPN', '2018-05-30', 200, 2, 32, 200, 'Tarjeta', 'Ticket'),
	(77, 7, 10, 1, '85A', '2018-05-30', 220, 2, 70.4, 440, 'Tarjeta', 'Ticket'),
	(78, 7, 10, 1, 'TINTA EPSOPN', '2018-05-30', 200, 3, 96, 600, 'Tarjeta', 'Ticket'),
	(80, 8, 10, 1, '85A', '2018-05-30', 220, 3, 105.6, 660, 'Tarjeta', 'Ticket'),
	(81, 8, 10, 1, 'TINTA EPSOPN', '2018-05-30', 200, 3, 96, 600, 'Tarjeta', 'Ticket');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

-- Volcando estructura para función pay_express.viernesdescuento
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `viernesdescuento`(
	`fecha` DATETIME
) RETURNS int(11)
BEGIN
	declare promo int;
	declare dw int;

	-- Add the T-SQL statements to compute the return value here
	
	select DAYOFWEEK(fecha) into dw;
	
	if dw=6 then
		set promo=1;
	 else
		set promo=0;
	end if;
	
	-- Return the result of the function
	RETURN promo;


END//
DELIMITER ;

-- Volcando estructura para disparador pay_express.venta_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `venta_before_insert` BEFORE INSERT ON `venta` FOR EACH ROW BEGIN
	declare exist int;
	declare stat int;
	
	set stat = (select Estatus from Producto where NombreProducto=NEW.Producto);
	set exist= (select Existencia from Producto where NombreProducto=NEW.Producto);
	
	IF stat!=0 AND exist>6 THEN 
	
		update Producto set Existencia=Exist-1 where NombreProducto= New.Producto;
	
	END IF;
	
	
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
