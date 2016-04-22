-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2016 a las 19:17:09
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `buscapareja`
--
CREATE DATABASE IF NOT EXISTS `buscapareja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `buscapareja`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `estatura` double NOT NULL,
  `signo_zodiacal` varchar(15) NOT NULL,
  `foto` blob NOT NULL,
  `color_ojos` varchar(20) NOT NULL,
  `peso` double NOT NULL,
  `descripcion` text NOT NULL,
  `aficiones_gustos` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
