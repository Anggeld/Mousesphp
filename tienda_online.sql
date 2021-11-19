-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 23:12:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(100) NOT NULL,
  `Ids` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `Ids`, `Nombre`, `Precio`) VALUES
(1, '', '', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `nombre_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `nombre_img`) VALUES
(1, 'BlueG', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '9.00', '../img/BlueG.jpg'),
(2, 'ClassMouse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '5.00', '../img/ClassMouse.jpg'),
(3, 'LogiClass', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '59.00', '../img/LogiClass.jpg'),
(4, 'LogiStr', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '19.00', '../img/LogiStr.jpg'),
(5, 'HpMouse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '14.00', '../img/HpMouse.jpg'),
(6, 'LogitechColors', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '39.00', '../img/Logitechcolors.jpg'),
(7, 'LogitechG502', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '99.00', '../img/logitechG502.jpg'),
(8, 'VGUARD', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '9.00', '../img/VGUARD.jpg'),
(9, 'RazerCol', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '29.00', '../img/RazerCol.jpg'),
(10, 'InalambricMouse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '11.00', '../img/InalambricMouse.jpg'),
(11, 'FlowersMouse', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '9.00', '../img/FlowersMouse.jpg'),
(12, 'RedDragon', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '14.00', '../img/RedDrag.jpg'),
(13, 'Tronsmart', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '13.00', '../img/Tronsmart.jpg'),
(14, 'MarsGamingDynamic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '19.00', '../img/MarsGamingdyn.jpg'),
(15, 'HoleNigh', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '19.00', '../img/HoleNigh.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
