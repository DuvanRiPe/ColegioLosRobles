-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2022 a las 22:56:37
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

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
  `nombre_admin` varchar(60) NOT NULL,
  `usuario_admin` varchar(60) NOT NULL,
  `contraseña_admin` varchar(60) NOT NULL,
  `codigo_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`codigo_admin`, `nombre_admin`, `usuario_admin`, `contraseña_admin`, `codigo_rol`) VALUES
(1, 'Duvan Rivera ', 'Duvanadmin', '123', 1);

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
(11, '                        adasdas                    ', '                        asdasd                    ', 12, '13241', '                        adasda@gmailcom                    ', '', 0, '3', 'dasd', '', '');

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
  `tipoidentificacion` varchar(60) DEFAULT NULL,
  `documentonino` varchar(60) DEFAULT NULL,
  `nacimientonino` date DEFAULT NULL,
  `doctrina` varchar(20) DEFAULT NULL,
  `vivecon` varchar(20) DEFAULT NULL,
  `edada31dic` int(30) DEFAULT NULL,
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
  `correoacudiente` varchar(60) DEFAULT NULL,
  `estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `codigo_profesor` int(10) NOT NULL,
  `nombre_profesor` varchar(60) NOT NULL,
  `apellido_profesor` varchar(60) NOT NULL,
  `edad_profesor` int(10) NOT NULL,
  `identificacion_profesor` varchar(60) NOT NULL,
  `correo_personal_profesor` varchar(100) NOT NULL,
  `correo_institucional_profesor` varchar(100) NOT NULL,
  `contrasena_profesor` int(15) NOT NULL,
  `grado_asignado` varchar(60) NOT NULL,
  `direccion_profesor` varchar(100) NOT NULL,
  `telefono_profesor` varchar(60) NOT NULL,
  `celular_profesor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `codigo_rol` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`codigo_rol`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'estudiante'),
(3, 'profesor'),
(4, 'aspirante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codigo_admin`),
  ADD KEY `codigo_rol` (`codigo_rol`);

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
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`codigo_profesor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codigo_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `codigo_estudiante` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  MODIFY `codigoAspirante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`codigo_rol`) REFERENCES `rol` (`codigo_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
