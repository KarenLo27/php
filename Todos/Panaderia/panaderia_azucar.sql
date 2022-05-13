-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 00:37:58
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia_azucar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mario_pan`
--

CREATE TABLE `mario_pan` (
  `id_panaderia` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `ingredientes` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mario_pan`
--

INSERT INTO `mario_pan` (`id_panaderia`, `nombre`, `peso`, `ingredientes`, `valor`) VALUES
(1, 'Pan', '80', 'arroz, huevo', '60'),
(2, 'cacero', '56', 'arina', '40'),
(3, 'pecoso', '89', 'arina', '1000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mario_pan`
--
ALTER TABLE `mario_pan`
  ADD PRIMARY KEY (`id_panaderia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mario_pan`
--
ALTER TABLE `mario_pan`
  MODIFY `id_panaderia` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
