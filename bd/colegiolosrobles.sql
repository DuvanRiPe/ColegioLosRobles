-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 14:29:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegiolosrobles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinscripcion`
--

CREATE TABLE `preinscripcion` (
  `codigoAspirante` int(11) NOT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `comprobante` int(11) DEFAULT NULL,
  `ano_academico` int(5) DEFAULT NULL,
  `curso` varchar(15) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `tipoidentificacion` varchar(10) DEFAULT NULL,
  `documentonino` int(15) DEFAULT NULL,
  `nacimientonino` date DEFAULT NULL,
  `doctrina` varchar(20) DEFAULT NULL,
  `vivecon` varchar(20) DEFAULT NULL,
  `edada31dic` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `barrio` varchar(20) DEFAULT NULL,
  `sistemasalud` varchar(20) DEFAULT NULL,
  `en_tratamiento` varchar(3) DEFAULT NULL,
  `descripcion_tratamiento` varchar(100) DEFAULT NULL,
  `nombremadre` varchar(30) DEFAULT NULL,
  `apellidomadre` varchar(30) DEFAULT NULL,
  `nacimientomadre` date DEFAULT NULL,
  `documentomadre` int(12) DEFAULT NULL,
  `celularmadre` int(10) DEFAULT NULL,
  `correomadre` varchar(60) DEFAULT NULL,
  `empresamadre` varchar(30) DEFAULT NULL,
  `telempresamadre` int(10) DEFAULT NULL,
  `estudiomadre` varchar(20) DEFAULT NULL,
  `nombrepadre` varchar(30) DEFAULT NULL,
  `apellidopadre` varchar(30) DEFAULT NULL,
  `nacimientompadre` date DEFAULT NULL,
  `documentopadre` int(12) DEFAULT NULL,
  `celularpadre` int(10) DEFAULT NULL,
  `correopadre` varchar(60) DEFAULT NULL,
  `empresapadre` varchar(30) DEFAULT NULL,
  `telempresapadre` int(10) DEFAULT NULL,
  `estudiopadre` varchar(20) DEFAULT NULL,
  `nombreacudiente` varchar(60) DEFAULT NULL,
  `documentoacudiente` int(12) DEFAULT NULL,
  `celularacudiente` int(10) DEFAULT NULL,
  `diracudiente` varchar(50) DEFAULT NULL,
  `correoacudiente` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  ADD PRIMARY KEY (`codigoAspirante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  MODIFY `codigoAspirante` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
