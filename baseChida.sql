-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENviernesdescuentoT=@@CHARACTER_SET_CLIENT */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.cliente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`IdCliente`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Municipio`, `Calle`, `CodigoPostal`, `NoInterior`, `NoExterior`, `Colonia`, `RFC`, `Telefono`, `Correo`, `Empresa`) VALUES
	(1, 'CARLOS', 'ROMERO', 'ALONSO', 'VILLA DE ALVAREZ', '16 SEPTIEMBRE', '28000', NULL, '23', 'VILLAS DE ORO', 'CARL458596', '315258', 'carlos@tec.com', NULL),
	(2, 'ROBERTO', 'PALAZUELOS', 'LOPEZ', 'COLIMA', 'MORELOS', '28000', NULL, '565', 'CENTRO', 'ROBP398489', '45854585', 'robert@gmail.com', NULL),
	(3, 'LAURA', 'GARCIA', 'MENDOZA', 'VILLA DE ALVAREZ', 'PRIVADA GAYTAN', '28984', NULL, '120', 'LOMAS CENTENARIO', 'LAU48U47FF', '3125458', 'lau@gmail.com', NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

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

-- Volcando datos para la tabla pay_express.empleado: ~2 rows (aproximadamente)
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

-- Volcando datos para la tabla pay_express.estadoservicio: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `estadoservicio` DISABLE KEYS */;
INSERT INTO `estadoservicio` (`IdEstado`, `NombreEstado`) VALUES
	(1, 'Recibido'),
	(2, 'Revision'),
	(3, 'Terminado'),
	(4, 'Entregado'),
	(5, 'Sin entregar');
/*!40000 ALTER TABLE `estadoservicio` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.producto: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `Marca`, `Modelo`, `IdTipoProducto`, `PrecioUnitario`, `Existencia`, `Estatus`) VALUES
	(1, '85A', 'HP', '85A', 1, 320, 9, b'1'),
	(2, 'TINTA EPSOPN', 'EPSON', '664', 3, 140, 5, b'1'),
	(3, 'MOUSE', 'LOGITECH', 'M75', 2, 130, 5, b'1'),
	(4, 'Liquido limpiador PC', 'CleanPC', 'CleanPC', 3, 50, 8, b'1');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.productoservicioventa
CREATE TABLE IF NOT EXISTS `productoservicioventa` (
  `IdProducto` int(11) DEFAULT NULL,
  `IdServicio` int(11) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `IdVenta` int(11) NOT NULL,
  `Importe` int(11) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  KEY `FKId_Ser` (`IdServicio`),
  KEY `FKId_prod` (`IdProducto`),
  KEY `FK3idventa` (`IdVenta`),
  CONSTRAINT `FK3idventa` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`),
  CONSTRAINT `FKId_Ser` FOREIGN KEY (`IdServicio`) REFERENCES `servicio` (`IdServicio`),
  CONSTRAINT `FKId_prod` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.productoservicioventa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `productoservicioventa` DISABLE KEYS */;
INSERT INTO `productoservicioventa` (`IdProducto`, `IdServicio`, `Cantidad`, `Descuento`, `IdVenta`, `Importe`, `PrecioUnitario`) VALUES
	(1, NULL, 1, NULL, 1, 320, 320);
/*!40000 ALTER TABLE `productoservicioventa` ENABLE KEYS */;

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

-- Volcando estructura para procedimiento pay_express.RealizarVenta
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `RealizarVenta`()
BEGIN
	declare num int;
	
	insert into venta values ();

END//
DELIMITER ;

-- Volcando estructura para tabla pay_express.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `IdServicio` int(11) NOT NULL,
  `NombreServicio` varchar(50) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  `IdTipoServicio` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  PRIMARY KEY (`IdServicio`),
  KEY `FKEstado` (`IdEstado`),
  KEY `FKTipoServ` (`IdTipoServicio`),
  CONSTRAINT `FKEstado` FOREIGN KEY (`IdEstado`) REFERENCES `estadoservicio` (`IdEstado`) ON DELETE NO ACTION,
  CONSTRAINT `FKTipoServ` FOREIGN KEY (`IdTipoServicio`) REFERENCES `tiposervicio` (`IdTipoServicio`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.servicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.temporal_venta
CREATE TABLE IF NOT EXISTS `temporal_venta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RFC` varchar(50) DEFAULT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Tipo_pago` varchar(50) DEFAULT NULL,
  `Tipo_comprobante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.temporal_venta: ~0 rows (aproximadamente)
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

-- Volcando estructura para tabla pay_express.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpleado` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `FechaVenta` datetime NOT NULL,
  `SubTotal` int(11) NOT NULL,
  `IVA` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `FormaDePago` bit(1) NOT NULL,
  PRIMARY KEY (`IdVenta`),
  KEY `FKClient` (`IdCliente`),
  KEY `FKEmple` (`IdEmpleado`),
  CONSTRAINT `FKClient` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`) ON DELETE NO ACTION,
  CONSTRAINT `FKEmple` FOREIGN KEY (`IdEmpleado`) REFERENCES `empleado` (`IdEmpleado`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.venta: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`IdVenta`, `IdEmpleado`, `IdCliente`, `FechaVenta`, `SubTotal`, `IVA`, `Total`, `FormaDePago`) VALUES
	(1, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(2, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(3, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(4, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(5, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(6, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1'),
	(7, 11, 1, '2018-05-25 00:00:00', 100, 16, 116, b'1');
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

-- Volcando estructura para disparador pay_express.salida_producto
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `salida_producto` BEFORE INSERT ON `productoservicioventa` FOR EACH ROW BEGIN
declare punit int;
declare esta bit;

select Estatus into esta from Producto where IdProducto=NEW.IdProducto;

IF esta=1 THEN
BEGIN
Select PrecioUnitario into punit from Producto where IdProducto=NEW.IdProducto;


set NEW.PrecioUnitario = punit;

SET NEW.Importe = NEW.Cantidad * NEW.PrecioUnitario;

UPDATE Producto
set Existencia = Existencia - NEW.Cantidad
WHERE IdProducto= NEW.IdProducto;
END;
END IF;

END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
