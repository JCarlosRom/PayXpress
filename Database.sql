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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.cliente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`IdCliente`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Municipio`, `Calle`, `CodigoPostal`, `NoInterior`, `NoExterior`, `Colonia`, `RFC`, `Telefono`, `Correo`, `Empresa`) VALUES
	(1, 'CARLOS', 'ROMERO', 'ALONSO', 'VILLA DE ALVAREZ', '16 SEPTIEMBRE', '28000', NULL, '23', 'VILLAS DE ORO', 'CARL458596', '315258', 'carlos@tec.com', NULL),
	(2, 'ROBERTO', 'PALAZUELOS', 'LOPEZ', 'COLIMA', 'MORELOS', '28000', NULL, '565', 'CENTRO', 'ROBP398489', '45854585', 'robert@gmail.com', NULL);
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
  `NombreEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.estadoservicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estadoservicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadoservicio` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `IdTipoProducto` int(11) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  `Existencia` int(11) NOT NULL DEFAULT '1',
  `Estatus` bit(1) DEFAULT b'1',
  PRIMARY KEY (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.producto: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`IdProducto`, `NombreProducto`, `Marca`, `Modelo`, `IdTipoProducto`, `PrecioUnitario`, `Existencia`, `Estatus`) VALUES
	(1, '85A', 'HP', '85A', 1, 320, 10, b'1'),
	(2, 'TINTA EPSOPN', 'EPSON', '664', 3, 140, 5, b'1'),
	(3, 'MOUSE', 'LOGITECH', 'M75', 2, 130, 0, NULL),
	(29, 'RECARGA HP 664 N', 'HP', '664N', 5, 70, 15, b'1');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.productoservicioventa
CREATE TABLE IF NOT EXISTS `productoservicioventa` (
  `IdProducto` int(11) DEFAULT NULL,
  `IdServicio` int(11) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `IdVenta` int(11) NOT NULL,
  `Importe` int(11) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.productoservicioventa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `productoservicioventa` DISABLE KEYS */;
INSERT INTO `productoservicioventa` (`IdProducto`, `IdServicio`, `Cantidad`, `Descuento`, `IdVenta`, `Importe`, `PrecioUnitario`) VALUES
	(1, NULL, 2, NULL, 1, 300, 100);
/*!40000 ALTER TABLE `productoservicioventa` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `IdProveedor` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `NoCuenta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.proveedor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `IdServicio` int(11) NOT NULL,
  `NombreServicio` varchar(50) NOT NULL,
  `PrecioUnitario` int(11) NOT NULL,
  `IdTipoServicio` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.temporal_venta: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `temporal_venta` DISABLE KEYS */;
INSERT INTO `temporal_venta` (`Id`, `RFC`, `Producto`, `Cantidad`, `Tipo_pago`, `Tipo_comprobante`) VALUES
	(11, 'CARL458596', 'TINTA EPSOPN', 2, 'Tarjeta', 'Ticket'),
	(12, 'CARL458596', '85A', 1, 'Tarjeta', 'Ticket'),
	(13, 'CARL458596', '85A', 1, 'Tarjeta', 'Ticket'),
	(14, 'CARL458596', 'TINTA EPSOPN', 1, 'Tarjeta', 'Factura');
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
	(4, 'ACCESORIO'),
	(5, 'RECARGA TINTA');
/*!40000 ALTER TABLE `tipoproducto` ENABLE KEYS */;

-- Volcando estructura para tabla pay_express.tiposervicio
CREATE TABLE IF NOT EXISTS `tiposervicio` (
  `IdTipoServicio` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTipo` varchar(50) NOT NULL,
  PRIMARY KEY (`IdTipoServicio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `IdVenta` int(11) NOT NULL,
  `IdEmpleado` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `FechaVenta` datetime NOT NULL,
  `SubTotal` int(11) NOT NULL,
  `IVA` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `FormaDePago` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pay_express.venta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`IdVenta`, `IdEmpleado`, `IdCliente`, `FechaVenta`, `SubTotal`, `IVA`, `Total`, `FormaDePago`) VALUES
	(1, 11, 1, '2018-05-28 00:00:00', 320, 0, 320, b'1');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
