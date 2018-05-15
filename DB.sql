-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para gestor
DROP DATABASE IF EXISTS `gestor`;
CREATE DATABASE IF NOT EXISTS `gestor` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gestor`;

-- Volcando estructura para tabla gestor.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Categorias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestor.categorias: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`Id`, `Categorias`) VALUES
	(1, 'Arte'),
	(2, 'Cultura'),
	(3, 'Entretenimiento'),
	(4, 'Ciencia y tecnologia'),
	(5, 'Clima'),
	(6, 'Deportes'),
	(7, 'Desastres y accidentes'),
	(8, 'Ecologia'),
	(9, 'Economia y negocios'),
	(10, 'Judicial'),
	(11, 'Otros'),
	(12, 'Politica'),
	(13, 'Salud'),
	(14, 'Sociedad');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla gestor.contenido
DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Cabecera` varchar(1000) NOT NULL,
  `Categoria` int(11) DEFAULT '1',
  `Texto` varchar(1000) NOT NULL,
  `Fecha` varchar(50) DEFAULT NULL,
  `Url` varchar(100) NOT NULL,
  `Etiquetas` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestor.contenido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
INSERT INTO `contenido` (`Id`, `Cabecera`, `Categoria`, `Texto`, `Fecha`, `Url`, `Etiquetas`) VALUES
	(5, 'BMW Serie 6 GT ', 4, '<p>Como ya adelant&aacute;bamos con la primera toma del contacto, el <strong>nuevo BMW Serie 6 Gran Turismo</strong> es una nueva interpretaci&oacute;n de un<strong> concepto revolucionario </strong>que marc&oacute; el <strong>Serie 5 Gran Turismo</strong>. En esta ocasi&oacute;n, <strong>el dise&ntilde;o, m&aacute;s deportivo</strong> y con una ca&iacute;da del techo mayor, le otorgan una nueva <strong>personalidad a esta berlina </strong>de representaci&oacute;n de BMW.</p>\n<p>Sobre el papel, el nuevo <strong>BMW Serie 6 Gran Turismo </strong>no tiene competencia directa en el mercado y por ello se convierte en una perfecta alternativa <strong>din&aacute;mica y elegante</strong>, a la par que tecnol&oacute;gica ya que tambi&eacute;n integra las avanzadas tecnolog&iacute;as estrenadas en los nuevos Serie 5 y Serie 7.</p>\n<p>&nbsp;</p>\n<p>&gt;</p>\n<p>&gt;</p>\n<p>&gt;</p>\n<p>&gt;</p>', '05/08/2017', 'js/images/1043582017.jpg', 'bmw,carro,modelo,nuevo');
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;

-- Volcando estructura para tabla gestor.etiquetas
DROP TABLE IF EXISTS `etiquetas`;
CREATE TABLE IF NOT EXISTS `etiquetas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Etiqueta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestor.etiquetas: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `etiquetas` DISABLE KEYS */;
INSERT INTO `etiquetas` (`Id`, `Etiqueta`) VALUES
	(1, 'Tecnologia'),
	(2, 'Policiaco'),
	(3, 'Ley'),
	(4, 'Arte'),
	(5, 'Descubrimiento'),
	(6, 'Muerte'),
	(7, 'local'),
	(8, 'Internacional ');
/*!40000 ALTER TABLE `etiquetas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
