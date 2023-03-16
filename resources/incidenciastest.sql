-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2023 a las 18:31:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incidenciastest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `id` bigint(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `incidencia` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `fechas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`id`, `nombre`, `lab`, `materia`, `incidencia`, `hora`, `fechas`) VALUES
(2, 'Ricardo Plata', '4004', 'POO', 'El laboratorio estaba cerrado y no se encontraba el encargado', '13 : 36 hrs', '12-1-2023'),
(3, 'Ricardo', 'Especialidad 2', 'Lenguajes', 'Está cerrado', '14 : 17 hrs', '18-2-2023'),
(4, 'RIcardo', '4001', 'Fundamnetos', 'No hay internet en todo el laboratorio', '16 : 38 hrs', '21-2-2023'),
(5, 'test', 'test', 'test', 'test', '16 : 38 hrs', '13-3-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativosh`
--

CREATE TABLE `administrativosh` (
  `id` bigint(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `incidencia` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `fechas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrativosh`
--

INSERT INTO `administrativosh` (`id`, `nombre`, `lab`, `materia`, `incidencia`, `hora`, `fechas`) VALUES
(1, 'test', 'test', 'test', 'test', '16 : 35 hrs', '13-3-2023'),
(2, 'test', 'test', 'test', 'test', '16 : 37 hrs', '13-3-2023'),
(3, 'test', 'test', 'test', 'test', '16 : 38 hrs', '13-3-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `equipo` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `incidencia` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `fechas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `lab`, `equipo`, `materia`, `incidencia`, `hora`, `fechas`) VALUES
(2, 'Fernando', '4002', '12', 'estructuras y bases de datos', 'el monitor no prende', '13 : 46 hrs', '12-1-2023'),
(3, 'Ricardo', '4001', '13', 'poo', 'Mouse no funciona', '23 : 55 hrs', '9-2-2023'),
(5, 'Ricardo', '4001', '27', 'Estructuras y bases de datos', 'El equipo no tiene Internet', '21 : 7 hrs', '21-2-2023'),
(6, 'Ricardo', '4004', '13', 'POO', 'El mouse no sirve', '0 : 26 hrs', '22-2-2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equiposh`
--

CREATE TABLE `equiposh` (
  `id` bigint(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `equipo` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `incidencia` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `fechas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equiposh`
--

INSERT INTO `equiposh` (`id`, `nombre`, `lab`, `equipo`, `materia`, `incidencia`, `hora`, `fechas`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', '16 : 30 hrs', '13-3-2023'),
(2, 'test', 'test', 'test', 'test', 'test', '16 : 37 hrs', '13-3-2023');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administrativosh`
--
ALTER TABLE `administrativosh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equiposh`
--
ALTER TABLE `equiposh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `administrativosh`
--
ALTER TABLE `administrativosh`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `equiposh`
--
ALTER TABLE `equiposh`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
