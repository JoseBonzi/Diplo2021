-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2022 a las 22:08:47
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
-- Base de datos: `phpintermedio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_us` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `motivo_consulta` text NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_us`, `nombre`, `apellido`, `edad`, `correo`, `motivo_consulta`, `mensaje`) VALUES
(1, 'José', 'Bonzi', 22, 'jose_union_8@hotmail.com', 'Prueba1', 'Prueba1'),
(2, 'José', 'Bonzi', 22, 'jose_union_8@hotmail.com', 'Prueba2', 'Prueba2'),
(3, 'José', 'Bonzi', 22, 'jose_union_8@hotmail.com', 'Prueba3', 'Prueba3'),
(5, 'Santi', 'Cirico', 18, 'santinocirico@gmail.com', 'Quiero saber sobre seguridad informatica.', 'Necetio cursos'),
(6, 'Jose', 'Bonzi', 22, 'jose_union_8@hotmail.com', 'JIJIJIJA', 'JIJIJIJA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_cliente`
--

CREATE TABLE `pedidos_cliente` (
  `id_pedido` int(5) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos_cliente`
--

INSERT INTO `pedidos_cliente` (`id_pedido`, `producto`, `cantidad`, `precio`) VALUES
(1, 'Sillón Capri', 5, '72500'),
(2, 'Mesa Ipanema', 2, '51800'),
(3, 'Banco Venecia', 3, '77700');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_us`);

--
-- Indices de la tabla `pedidos_cliente`
--
ALTER TABLE `pedidos_cliente`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_us` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos_cliente`
--
ALTER TABLE `pedidos_cliente`
  MODIFY `id_pedido` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
