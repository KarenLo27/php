-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 23:25:17
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproductos`
--

CREATE TABLE `tproductos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(225) NOT NULL,
  `precio` decimal(20,2) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tproductos`
--

INSERT INTO `tproductos` (`id`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Manual de cocina', '100.00', 'Manual de cocina de alta calidad para profesionales...', 'img/L1.jpg'),
(2, 'Cocina India', '592.00', 'Recetario de cocina tradicional de la india con todas la principales recetas de este exótico país.  ', 'img/L2.jpg'),
(3, '1080 Recetas', '125.00', 'Recetario de comida internacional para principiantes y expertos del arte culinario', 'img/L3.jpg'),
(4, 'Cocina comida real', '9200.00', 'Libro de cocina con recetas básicas para preparar en casa con ingredientes comunes o de fácil acceso ', 'img/L4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
