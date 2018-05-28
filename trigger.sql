-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
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
