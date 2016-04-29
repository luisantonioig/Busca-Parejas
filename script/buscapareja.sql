-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2016 a las 15:23:35
-- Versión del servidor: 5.6.10
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
CREATE DATABASE IF NOT EXISTS `buscapareja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `buscapareja`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pareja`
--

CREATE TABLE IF NOT EXISTS `pareja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `signo` varchar(15) NOT NULL,
  `bailar` varchar(15) NOT NULL,
  `leer` varchar(5) NOT NULL,
  `musica` varchar(15) NOT NULL,
  `voli` varchar(15) NOT NULL,
  `ojos` varchar(8) NOT NULL,
  `descripcion` text NOT NULL,
  `estatura` decimal(10,2) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `Foto1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `pareja`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
