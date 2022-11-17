-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 21:58:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Apellido` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Legajo` int(11) NOT NULL,
  `Puesto` int(50) NOT NULL,
  `FechaDeIngreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Apellido`, `Nombre`, `Legajo`, `Puesto`, `FechaDeIngreso`) VALUES
('', '', 1, 0, '0000-00-00'),
('', '', 2, 0, '0000-00-00'),
('lodeiro', 'luciana', 3, 5, '2022-11-08'),
('Analía', 'Huarca', 4, 5, '2022-11-13'),
(' Koll', 'Ana', 5, 1, '2022-11-02'),
('Helos', 'Abel', 6, 5, '2020-06-15'),
('Heraldo', 'Darling', 7, 2, '2013-02-14'),
('Tales', 'Shakira', 8, 4, '1999-01-07'),
('ilmaslo', 'Ilam', 9, 3, '2016-02-17'),
('ilmaslo', 'Ilam', 10, 3, '2016-02-17'),
('ilmaslo', 'Ilam', 11, 3, '2016-02-17'),
('ilmaslo', 'Ilam', 12, 3, '2016-02-17'),
('ilmaslo', 'Ilam', 13, 3, '2016-02-17'),
('ilmaslo', 'Ilam', 14, 3, '2016-02-17'),
('gomez', 'Selene', 15, 4, '2013-08-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `Puesto` varchar(50) NOT NULL,
  `sueldo` decimal(10,0) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`Puesto`, `sueldo`, `id`) VALUES
('ventas', '0', 1),
('5', '0', 2),
('5', '0', 3),
('5', '0', 4),
('ventas', '0', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Legajo`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Legajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
