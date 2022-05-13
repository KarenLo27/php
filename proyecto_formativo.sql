-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2022 a las 23:55:16
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
-- Base de datos: `proyecto_formativo`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `dettalle_compra` (IN `can` INT, IN `des` DECIMAL(10,2), IN `fk_p` INT, IN `fk_com` INT, OUT `men` VARCHAR(50))  BEGIN
 insert into detalle_compra ( cantidad, descuento, fk_pdto, fk_compra)
 values (can, des, fk_p, fk_com );
 
 set men ="Detalle de Compra Registrado!";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registar_compra` (IN `fech` DATE, IN `val` DECIMAL(10,2), IN `for_p` VARCHAR(50), IN `fk_en` INT, IN `fk_usua` INT, OUT `men` VARCHAR(50))  BEGIN
 insert into compra ( fecha, valor, forma_pago, fk_envio, fk_usuario)
   values (fech, val, for_p, fk_en, fk_usua);
   
   set men ="Compra registrada";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar_envio` (IN `esta` VARCHAR(50), IN `fec` DATE, IN `emp` VARCHAR(50), IN `dest` VARCHAR(50), IN `obser` VARCHAR(50), OUT `men` VARCHAR(50))  BEGIN
  insert into envio (estado, fecha, empresa, destino, observacion )
   values (esta, fec, emp, dest, obser);
   
   set men ="Envio registrado";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar_producto` (IN `nomb` VARCHAR(50), IN `descri` VARCHAR(50), IN `val` DECIMAL(10,2), IN `sto` INT, IN `cate` VARCHAR(50), IN `fk_pro` INT, OUT `men` VARCHAR(50))  BEGIN
insert into productos ( nombre, descripcion, valor, stock, categoria, fk_provedor )
 values (nomb, descri, val, sto, cate, fk_pro);
 
 set men ="Producto Registrado!";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_proveedor` (IN `nt` VARCHAR(20), IN `nom` VARCHAR(50), OUT `men` VARCHAR(50))  BEGIN
 insert into proveedor (nit, nombre )
 values (nt, nom);
 
 set men ="Proveedro Registrado!";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registro_usuario` (IN `ident` INT, IN `nom` VARCHAR(50), IN `tel` VARCHAR(20), IN `tip_usu` VARCHAR(50), IN `dir` VARCHAR(50), IN `usu` VARCHAR(29), IN `pas` VARCHAR(10), OUT `men` VARCHAR(50))  BEGIN
insert into usuario (pk_identificacion, nombre, telefono, tipo_usuario, direccion, usuario, contraseña)
values (ident, nom, tel, tip_usu, dir, usu, pas);

set men= "Usuario registrado!";

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `pk_codigo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `forma_pago` enum('online','contra_entrega') NOT NULL,
  `fk_envio` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`pk_codigo`, `fecha`, `valor`, `forma_pago`, `fk_envio`, `fk_usuario`) VALUES
(1, '2021-07-21', '140000.00', 'online', 1, 1080365889),
(2, '2021-02-11', '28000.00', 'online', 2, 1080365889),
(3, '2021-08-17', '67000.00', '', 3, 1004033920),
(4, '2021-03-17', '17900.00', 'online', 4, 1004033920),
(5, '2021-01-15', '33900.00', 'online', 5, 1193043017),
(6, '2021-05-14', '130900.00', '', 1, 1193043017);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id_detalle` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descuento` decimal(10,0) DEFAULT NULL,
  `fk_pdto` int(11) NOT NULL,
  `fk_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id_detalle`, `cantidad`, `descuento`, `fk_pdto`, `fk_compra`) VALUES
(2, 3, '2', 3, 1),
(3, 1, '4', 2, 3),
(4, 8, '20', 4, 1),
(5, 5, '5', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `codigo_env` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `destino` varchar(50) DEFAULT NULL,
  `observacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`codigo_env`, `estado`, `fecha`, `empresa`, `destino`, `observacion`) VALUES
(1, 'Enviado', '2021-06-02', 'Servientrega', 'Bogota', 'Todo bien'),
(2, 'Retenido', '2021-03-10', 'Inter Rapidisimo', 'Neiva', 'Daño en el empaque'),
(3, 'Pendiente', '2021-02-01', 'Rapidisimo', 'Cali', 'Completar pedido'),
(4, 'Enviado', '2021-04-21', 'Trasprensa', 'Medellin', ' A punto de llegar'),
(5, 'Enviado', '2021-07-21', 'Servi entrega', 'Florencia', 'LLegando'),
(6, '2021-07-21', '0000-00-00', 'Online', '1', '1080365889');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_pdto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` enum('fragancia','maquillaje','cuidado_personal','bebe') NOT NULL,
  `fk_provedor` int(11) NOT NULL,
  `subir` varchar(120) NOT NULL,
  `imagen` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_pdto`, `nombre`, `descripcion`, `valor`, `stock`, `categoria`, `fk_provedor`, `subir`, `imagen`) VALUES
(1, 'Vibranza', 'Locion femenina con aroma floral', '70000.00', 43, 'fragancia', 1, 'L1.jpg', 'subir/L1.jpg'),
(2, 'Avellana', 'Gel exfoliante  para manos', '16900.00', 32, 'cuidado_personal', 1, 'gel.jpg', 'subir/gel.jpg'),
(3, 'Vital', 'Shampoo 2 en 1 todo tipo de cabello', '27900.00', 42, 'cuidado_personal', 1, 'shampoo2_1.jpg', 'subir/shampoo2_1.jpg'),
(4, 'Agu Mañana feliz', 'Shampoo cabello y cuerpo ', '27900.00', 22, 'bebe', 1, 'shampoo_cuerpo.jpg', 'subir/shampoo_cuerpo.jpg'),
(5, 'Rose mate', 'Labial picmentado larga duracion ', '21900.00', 28, 'maquillaje', 1, 'labial.jpg', 'subir/labial.jpg'),
(6, 'Arom', 'Locian masculina con aroma citrica', '110000.00', 12, 'fragancia', 2, 'citrico.jpg', 'subir/citrico.jpg'),
(7, 'Quita esmalte', 'removedor a base de alcohol', '10000.00', 50, 'maquillaje', 3, 'removedor.jpg', 'subir/removedor.jpg'),
(9, 'Karen', 'Locion bebe', '23132.00', 0, 'bebe', 2, 'bebe.jpg', 'subir/bebe.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigo` int(11) NOT NULL,
  `nit` varchar(50) DEFAULT NULL,
  `nombrep` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigo`, `nit`, `nombrep`) VALUES
(1, '22859', 'Esika'),
(2, '984211', 'Yambal'),
(3, '123456789', 'adsi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdetalleventa`
--

CREATE TABLE `tdetalleventa` (
  `id_d` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_unitario` decimal(20,3) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descargado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tdetalleventa`
--

INSERT INTO `tdetalleventa` (`id_d`, `id_venta`, `id_producto`, `precio_unitario`, `cantidad`, `descargado`) VALUES
(72, 17, 2, '16900.000', 1, 0),
(73, 17, 3, '27900.000', 1, 0),
(74, 17, 4, '27900.000', 1, 0),
(75, 17, 1, '70000.000', 1, 0),
(76, 17, 2, '16900.000', 1, 0),
(77, 17, 3, '27900.000', 1, 0),
(78, 18, 2, '16900.000', 1, 0),
(79, 18, 3, '27900.000', 1, 0),
(80, 18, 4, '27900.000', 1, 0),
(81, 19, 2, '16900.000', 1, 0),
(82, 19, 3, '27900.000', 1, 0),
(83, 19, 4, '27900.000', 1, 0),
(84, 20, 2, '16900.000', 1, 0),
(85, 20, 3, '27900.000', 1, 0),
(86, 20, 4, '27900.000', 1, 0),
(87, 21, 2, '16900.000', 1, 0),
(88, 21, 3, '27900.000', 1, 0),
(89, 21, 4, '27900.000', 1, 0),
(90, 22, 3, '27900.000', 1, 0),
(91, 22, 4, '27900.000', 1, 0),
(92, 22, 4, '27900.000', 1, 0),
(93, 22, 3, '27900.000', 1, 0),
(94, 22, 4, '27900.000', 1, 0),
(95, 22, 4, '27900.000', 1, 0),
(96, 23, 3, '27900.000', 1, 0),
(97, 23, 4, '27900.000', 1, 0),
(98, 23, 2, '16900.000', 1, 0),
(99, 23, 3, '27900.000', 1, 0),
(100, 23, 4, '27900.000', 1, 0),
(101, 24, 2, '16900.000', 1, 0),
(102, 24, 3, '27900.000', 1, 0),
(103, 25, 3, '27900.000', 1, 0),
(104, 26, 3, '27900.000', 1, 0),
(105, 26, 4, '27900.000', 1, 0),
(106, 26, 2, '16900.000', 1, 0),
(107, 27, 3, '27900.000', 1, 0),
(108, 27, 2, '16900.000', 1, 0),
(109, 27, 4, '27900.000', 1, 0),
(110, 28, 3, '27900.000', 1, 0),
(111, 28, 4, '27900.000', 1, 0),
(112, 28, 2, '16900.000', 1, 0);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tventas`
--

CREATE TABLE `tventas` (
  `id_v` int(11) NOT NULL,
  `clave_v` varchar(250) NOT NULL,
  `fecha_v` datetime NOT NULL,
  `correo_v` varchar(100) NOT NULL,
  `total_v` decimal(60,3) NOT NULL,
  `status_v` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tventas`
--

INSERT INTO `tventas` (`id_v`, `clave_v`, `fecha_v`, `correo_v`, `total_v`, `status_v`) VALUES
(5, 't56b89ocj5liid23h5jdfoqi8o', '2022-04-27 15:16:17', 'dasfsd@gmail.com', '72700.000', 'Pendiente'),
(6, 'm3a76n271lva7daeasodfdmlr3', '2022-04-27 15:17:36', 'fsdfsdf@gmail.com', '72700.000', 'Pendiente'),
(7, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:25:48', 'dsadsads@gmail.com', '72700.000', 'Pendiente'),
(8, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:27:29', 'dsadsads@gmail.com', '72700.000', 'Pendiente'),
(9, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:28:02', 'dsadsads@gmail.com', '72700.000', 'Pendiente'),
(10, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:28:14', 'dsadsads@gmail.com', '72700.000', 'Pendiente'),
(11, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:28:47', '', '72700.000', 'Pendiente'),
(12, 'mtuoc06bvj7qmu2mhihdn06ug0', '2022-04-27 15:39:19', '', '72700.000', 'Pendiente'),
(13, '0m15rbqajhk2d627fo94eu8npu', '2022-04-27 15:40:20', 'adsadsa@gmail.com', '72700.000', 'Pendiente'),
(14, '0m15rbqajhk2d627fo94eu8npu', '2022-04-27 15:40:32', '', '72700.000', 'Pendiente'),
(15, '0m15rbqajhk2d627fo94eu8npu', '2022-04-27 15:41:47', '', '72700.000', 'Pendiente'),
(16, '0m15rbqajhk2d627fo94eu8npu', '2022-04-27 15:42:49', 'adsadsa@gmail.com', '187500.000', 'Pendiente'),
(17, '0m15rbqajhk2d627fo94eu8npu', '2022-04-27 15:47:41', 'adsadsa@gmail.com', '187500.000', 'Pendiente'),
(18, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 15:51:04', 'djasbfjlsab@gmail.com', '72700.000', 'Pendiente'),
(19, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 15:51:29', 'djasbfjlsab@gmail.com', '72700.000', 'Pendiente'),
(20, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 15:51:37', '', '72700.000', 'Pendiente'),
(21, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 15:52:59', '', '72700.000', 'Pendiente'),
(22, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 15:53:29', 'dfgjsdhgsdkg@gmail.com', '167400.000', 'Pendiente'),
(23, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 16:39:48', 'djasbfjlsab@gmail.com', '128500.000', 'Pendiente'),
(24, '5qhmnecmrbe3gcv6qvl1ngmttb', '2022-04-27 16:40:35', 'dfgjsdhgsdkg@gmail.com', '44800.000', 'Pendiente'),
(25, 'iq49m6ql5psf74qqr95i24877i', '2022-04-27 16:48:53', 'safasdf@gmail.com', '27900.000', 'Pendiente'),
(26, 'iq49m6ql5psf74qqr95i24877i', '2022-04-27 16:49:35', 'safasdf@gmail.com', '72700.000', 'Pendiente'),
(27, 'iq49m6ql5psf74qqr95i24877i', '2022-04-27 16:51:26', 'safasdf@gmail.com', '72700.000', 'Pendiente'),
(28, '5uhm65be2i30lfual0u9h7kl8f', '2022-04-27 16:53:42', 'karen_cordoba@gmail.com', '72700.000', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `pk_identificacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `tipo_usuario` enum('administrador','cliente') NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`pk_identificacion`, `nombre`, `telefono`, `tipo_usuario`, `direccion`, `usuario`, `contrasena`) VALUES
(11111, 'Juan', '55555', 'cliente', 'calle 22', 'sjaramillo ', '123456 '),
(1004033920, 'Yheison Lanza', '3202786727', 'administrador', 'Acevedo', 'yheslanza@misena.edu.co', 'yheison200'),
(1080365876, 'Karen Cordoba', '3202786727', 'administrador', 'Pitalito', 'loren@misena.edu.co', 'lore432'),
(1080365889, 'Derly Soto', '3212952396', 'administrador', 'Suaza', 'deryso@misena. edu', 'derly98'),
(1193043017, 'Yenifer Alvarado', '3212062308', 'administrador', 'Pitalito', 'yendalvarado@misena. edu', 'yenifer18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`pk_codigo`),
  ADD KEY `realiza` (`fk_envio`),
  ADD KEY `hace` (`fk_usuario`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `tiene` (`fk_compra`),
  ADD KEY `posee` (`fk_pdto`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`codigo_env`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_pdto`),
  ADD KEY `esta` (`fk_provedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tdetalleventa`
--
ALTER TABLE `tdetalleventa`
  ADD PRIMARY KEY (`id_d`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tventas`
--
ALTER TABLE `tventas`
  ADD PRIMARY KEY (`id_v`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pk_identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `pk_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `codigo_env` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_pdto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tdetalleventa`
--
ALTER TABLE `tdetalleventa`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `tproductos`
--
ALTER TABLE `tproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tventas`
--
ALTER TABLE `tventas`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `hace` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`pk_identificacion`),
  ADD CONSTRAINT `realiza` FOREIGN KEY (`fk_envio`) REFERENCES `envio` (`codigo_env`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `posee` FOREIGN KEY (`fk_pdto`) REFERENCES `productos` (`codigo_pdto`),
  ADD CONSTRAINT `tiene` FOREIGN KEY (`fk_compra`) REFERENCES `compra` (`pk_codigo`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `esta` FOREIGN KEY (`fk_provedor`) REFERENCES `proveedor` (`codigo`);

--
-- Filtros para la tabla `tdetalleventa`
--
ALTER TABLE `tdetalleventa`
  ADD CONSTRAINT `tdetalleventa_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tproductos` (`id`),
  ADD CONSTRAINT `tdetalleventa_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `tventas` (`id_v`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
