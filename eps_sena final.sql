-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 19:14:16
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eps_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita_medica`
--

CREATE TABLE `cita_medica` (
  `documento_usuario` int(11) DEFAULT NULL,
  `tipo_de_cita` varchar(255) DEFAULT NULL,
  `clasificacion` varchar(20) DEFAULT NULL,
  `valor_cita` int(11) DEFAULT NULL,
  `documento_medico` int(11) DEFAULT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita_medica`
--

INSERT INTO `cita_medica` (`documento_usuario`, `tipo_de_cita`, `clasificacion`, `valor_cita`, `documento_medico`, `fecha_cita`, `hora_cita`) VALUES
(1012448209, 'Medicina General', NULL, 3000, 1234, '0000-00-00', ''),
(12345, 'Odontologia', NULL, 5000, NULL, '0000-00-00', ''),
(1234578, 'Urgencias', 'Triage II', 0, 1234, '0000-00-00', ''),
(789, 'Prioritaria', NULL, 15000, NULL, '0000-00-00', ''),
(123569, 'Urgencias', 'Triage I', 0, 1244, '0000-00-00', ''),
(1235698, 'Urgencias', 'Triage III', 0, 1244, '0000-00-00', ''),
(4545, 'Urgencias', 'Triage IIIB', 0, NULL, '0000-00-00', ''),
(45646, 'Urgencias', 'Triage III', 0, NULL, '0000-00-00', ''),
(1012449, 'Urgencias', 'Triage II', 0, 1244, '0000-00-00', '08:00 AM'),
(45698721, 'Medicina General', 'Cita Medicina Genera', 3000, 1236, '2019-11-20', '05:00 PM'),
(2147483647, 'Prioritaria', 'Cita Prioritaria', 15000, 1231, '2019-11-15', '03:00 PM'),
(39653199, 'Odontologia', 'Cita Odontologica', 5000, 1239, '2019-11-29', '03:00 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `especialidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`documento`, `nombre`, `apellido`, `especialidad`) VALUES
(1230, 'Milena', 'Ortiz', 'Cita prioritaria'),
(1231, 'Alejandro', 'Mora', 'Cita prioritaria'),
(1232, 'Claudia', 'Velasquez', 'Cita prioritaria'),
(1234, 'Carlos', 'Fonseca', 'Medicina General'),
(1235, 'Alberto', 'Guerrero', 'Medicina General'),
(1236, 'Luis ', 'Rocha', 'Medicina General'),
(1237, 'Andres', 'Ortiz', 'Odontologia'),
(1238, 'Esteban ', 'Murillo', 'Odontologia'),
(1239, 'Julian ', 'Franco', 'Odontologia'),
(1241, 'Sara', 'Gomez', 'Triage I'),
(1244, 'Marcela', 'Pulido', 'Triage II'),
(1245, 'Orlando ', 'Pe??uela', 'Triage III'),
(1246, 'Diana ', 'Escoobar', 'Triage IIIB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `teleffono` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombre`, `apellido`, `direccion`, `teleffono`) VALUES
(789, 'asd', 'asd', 'asd', 123),
(4545, 'sadsds', 'sds', 'sds', 45454),
(12345, 'aksj', 'swdkwakl', 'kljkljlk', 313),
(45646, 'dskjdsjd', 'sdsd', 'sas', 4455),
(123569, 'agll', 'agll', 'adad', 123456789),
(1012449, 'Fernando', 'Bravo', 'saas', 45698),
(1234578, 'aksj', 'swdkwakl', 'kljkljlk', 313),
(1235698, 'agll', 'agll', 'adad', 123456789),
(39653199, 'laura', 'milena', 'cas', 456),
(45698721, 'Christian Camilo ', 'Sanchez', 'carrera 78I', 45454),
(1012448209, 'Christian ', 'Sandoval ', 'carrera ', 313),
(2147483647, 'ALLAN', 'MERA', 'SDAS', 789);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  ADD UNIQUE KEY `documento_usuario` (`documento_usuario`),
  ADD UNIQUE KEY `documento_usuario_2` (`documento_usuario`),
  ADD KEY `fk_cita_medica_usuario` (`documento_usuario`),
  ADD KEY `fk_cita_medica_doctores` (`documento_medico`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita_medica`
--
ALTER TABLE `cita_medica`
  ADD CONSTRAINT `fk_cita_medica_doctores` FOREIGN KEY (`documento_medico`) REFERENCES `doctores` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cita_medica_usuario` FOREIGN KEY (`documento_usuario`) REFERENCES `usuario` (`documento`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
