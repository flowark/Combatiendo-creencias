-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-03-2019 a las 03:34:01
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form1inicial_ingles`
--

DROP TABLE IF EXISTS `form1inicial_ingles`;
CREATE TABLE IF NOT EXISTS `form1inicial_ingles` (
  `pci1` int(11) NOT NULL,
  `pci2` int(11) NOT NULL,
  `pci3` int(11) NOT NULL,
  `pci4` int(11) NOT NULL,
  `pci5` int(11) NOT NULL,
  `pci6` int(11) NOT NULL,
  `pci7` int(11) NOT NULL,
  `pci8` int(11) NOT NULL,
  `pci9` int(11) NOT NULL,
  `pci10` int(11) NOT NULL,
  `pci11` int(11) NOT NULL,
  `pci12` int(11) NOT NULL,
  `pci13` int(11) NOT NULL,
  `pci14` int(11) NOT NULL,
  `pci15` int(11) NOT NULL,
  `contador` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`contador`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `form1inicial_ingles`
--

INSERT INTO `form1inicial_ingles` (`pci1`, `pci2`, `pci3`, `pci4`, `pci5`, `pci6`, `pci7`, `pci8`, `pci9`, `pci10`, `pci11`, `pci12`, `pci13`, `pci14`, `pci15`, `contador`) VALUES
(3, 5, 4, 1, 4, 3, 3, 2, 5, 5, 5, 4, 2, 4, 5, 1),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form2final_ingles`
--

DROP TABLE IF EXISTS `form2final_ingles`;
CREATE TABLE IF NOT EXISTS `form2final_ingles` (
  `pcf1` int(11) NOT NULL,
  `pcf2` int(11) NOT NULL,
  `pcf3` int(11) NOT NULL,
  `pcf4` int(11) NOT NULL,
  `pcf5` int(11) NOT NULL,
  `pcf6` int(11) NOT NULL,
  `pcf7` int(11) NOT NULL,
  `pcf8` int(11) NOT NULL,
  `pcf9` int(11) NOT NULL,
  `pcf10` int(11) NOT NULL,
  `contador` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`contador`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nivel` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`, `nivel`) VALUES
('admin', 'admin.10', 'profesor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
