-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 22:09:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `categoria`) VALUES
(1, 'panaderia'),
(2, 'dulces'),
(5, 'lacteos'),
(7, 'pasbocas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`) VALUES
(4, 'yogurth colanta', 'collech45', 2000, 60, 'panaderia', 0, '2022-10-19'),
(5, 'bueñuelo', 'buñ02', 1500, 50, 'panaderia', 10, '2022-10-19'),
(6, 'pandebono', 'pandbon02', 1500, 50, 'panaderia', 20, '2022-10-19'),
(11, 'bizcocho', 'biz03', 500, 50, 'dulces', 11, '2022-10-19'),
(13, 'ponque de naranja', 'ponqnarg2', 5000, 200, 'panaderia', 30, '2022-10-19'),
(14, 'bombombun', 'bom03', 500, 10, 'dulces', 30, '2022-10-19'),
(15, 'gusanos trululu', 'trugus02', 5000, 30, 'panaderia', 50, '2022-10-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_venta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventa`, `nombre`, `cantidad`, `fecha_venta`) VALUES
(1, 'buñuelo', 3, '2022-10-19'),
(2, ' yogurth colanta', 2, '0000-00-00'),
(3, ' yogurth colanta', 2, '2022-10-19'),
(4, ' yogurth colanta', 2, '2022-10-19'),
(5, ' yogurth colanta', 2, '2022-10-19'),
(6, ' yogurth colanta', 2, '2022-10-19'),
(7, ' yogurth colanta', 1, '2022-10-19'),
(8, ' yogurth colanta', 1, '2022-10-19'),
(9, ' yogurth colanta', 9, '2022-10-19'),
(10, ' yogurth colanta', 1, '2022-10-19'),
(11, ' yogurth colanta', 1, '2022-10-19'),
(12, ' yogurth colanta', 1, '2022-10-19'),
(13, ' yogurth colanta', 1, '2022-10-19'),
(14, ' yogurth colanta', 1, '2022-10-19'),
(15, ' bizcocho', 9, '2022-10-19'),
(16, ' bizcocho', 2, '2022-10-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
