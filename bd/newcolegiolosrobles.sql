-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 16:02:32
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `codigo_admin` int(11) NOT NULL,
  `nombre_admin` varchar(100) NOT NULL,
  `usuario_admin` varchar(100) NOT NULL,
  `contraseña_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`codigo_admin`, `nombre_admin`, `usuario_admin`, `contraseña_admin`) VALUES
(1, 'Duvan', 'Duvan_Rivera', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo_estudiante` int(10) NOT NULL,
  `nombre_estudiante` varchar(60) NOT NULL,
  `apellido_estudiante` varchar(60) NOT NULL,
  `edad` int(10) NOT NULL,
  `identifiacion_estudiante` varchar(60) NOT NULL,
  `correo_personal_estudiante` varchar(100) NOT NULL,
  `correo_institucional_estudiante` varchar(100) NOT NULL,
  `contraseña_estudiante` int(15) NOT NULL,
  `grado` varchar(60) NOT NULL,
  `direccion_estudiante` varchar(100) NOT NULL,
  `telefono_estudiante` varchar(60) NOT NULL,
  `celular_estudiante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `edad`, `identifiacion_estudiante`, `correo_personal_estudiante`, `correo_institucional_estudiante`, `contraseña_estudiante`, `grado`, `direccion_estudiante`, `telefono_estudiante`, `celular_estudiante`) VALUES
(1, 'Duvan', 'Rivera', 25, '1235412', 'duvan@gmail.com', 'duvan@losrobles.edu.co', 123456789, '3-A', 'asdadasdas', '13213123', '12312142');

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
-- Volcado de datos para la tabla `preinscripcion`
--

INSERT INTO `preinscripcion` (`codigoAspirante`, `correo`, `comprobante`, `ano_academico`, `curso`, `nombre`, `apellido`, `tipoidentificacion`, `documentonino`, `nacimientonino`, `doctrina`, `vivecon`, `edada31dic`, `direccion`, `barrio`, `sistemasalud`, `en_tratamiento`, `descripcion_tratamiento`, `nombremadre`, `apellidomadre`, `nacimientomadre`, `documentomadre`, `celularmadre`, `correomadre`, `empresamadre`, `telempresamadre`, `estudiomadre`, `nombrepadre`, `apellidopadre`, `nacimientompadre`, `documentopadre`, `celularpadre`, `correopadre`, `empresapadre`, `telempresapadre`, `estudiopadre`, `nombreacudiente`, `documentoacudiente`, `celularacudiente`, `diracudiente`, `correoacudiente`) VALUES
(1, 'kevin@yimail.com', 0, 2022, 'parvulo', 'joselias', 'mariotis', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', 0, '', '', '', '0000-00-00', 0, 0, '', '', 0, '', '', 0, 0, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codigo_admin`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo_estudiante`);

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
  MODIFY `codigoAspirante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
