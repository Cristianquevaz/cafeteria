-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2023 a las 10:00:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `referencia` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(70) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha`) VALUES
(30, 'platano', 7716557, 1000, 277, 'Carnes ', 10, '2023-05-06 07:56:20'),
(31, 'manzanas', 7716557, 1000, 1000, 'Comidas congeladas', -63, '2023-05-06 07:17:56'),
(32, 'mcllan', 77010, 1000, 1000, 'Bebidas no alcohólicas', 6, '2023-05-06 07:22:50'),
(35, 'empanada', 3454, 2000, 34, 'Comidas rapidas', 9, '2023-05-06 07:31:34'),
(36, 'papa rellena', 78887, 2000, -54, 'Comidas rapidas', 7, '2023-05-06 07:32:41'),
(37, '7474', -898, -98, -100000, 'Comidas rapidas', 7, '2023-05-06 07:37:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `nombre_producto` text NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `idproducto`, `nombre_producto`, `fecha_venta`, `cantidad`, `total`) VALUES
(1, 30, 'platano', '2023-05-06 05:35:47', 5, 10),
(2, 31, 'manzanas', '2023-05-06 05:35:56', 5, 15),
(3, 32, 'mcllan', '2023-05-06 05:36:11', 4, 12),
(4, 30, 'platano', '2023-05-06 05:41:01', 5, 0),
(5, 30, 'platano', '2023-05-06 05:46:27', 5, 0),
(6, 30, 'platano', '2023-05-06 05:47:31', 5, 0),
(7, 31, 'manzanas', '2023-05-06 05:47:54', 5, 0),
(8, 0, 'Escoger...', '2023-05-06 05:57:18', 40, 0),
(9, 30, 'platano', '2023-05-06 06:00:07', 40, 0),
(10, 30, 'platano', '2023-05-06 06:01:46', 90, 0),
(11, 32, 'mcllan', '2023-05-06 06:02:07', 5, 0),
(12, 30, 'platano', '2023-05-06 06:03:46', 5, 10),
(13, 30, 'platano', '2023-05-06 06:06:40', 90, 90000),
(14, 30, 'platano', '2023-05-06 06:17:53', 78, 78000),
(15, 30, 'platano', '2023-05-06 06:30:34', 90, 90000),
(16, 30, 'platano', '2023-05-06 06:31:26', 78, 156000),
(17, 30, 'platano', '2023-05-06 06:34:22', 78, 78000),
(18, 30, 'platano', '2023-05-06 06:35:43', 5, 10),
(19, 30, 'platano', '2023-05-06 06:47:47', 78, 78000),
(20, 30, 'platano', '2023-05-06 06:48:05', 5, 10),
(21, 30, 'platano', '2023-05-06 06:49:28', 10, 20),
(22, 30, 'platano', '2023-05-06 06:50:16', 20, 20000),
(23, 30, 'platano', '2023-05-06 07:05:39', 68, 68000),
(24, 30, 'platano', '2023-05-06 07:07:26', 69, 69000),
(25, 30, 'platano', '2023-05-06 07:08:50', 67, 67000),
(26, 30, 'platano', '2023-05-06 07:10:28', 69, 69000),
(27, 30, 'platano', '2023-05-06 07:13:04', 60, 60000),
(28, 30, 'platano', '2023-05-06 07:15:05', 1, 1000),
(29, 30, 'platano', '2023-05-06 07:16:55', 1, 1000),
(30, 32, 'mcllan', '2023-05-06 07:18:34', 2, 2000),
(31, 32, 'mcllan', '2023-05-06 07:22:50', 2, 2000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
