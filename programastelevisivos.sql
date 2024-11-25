-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 11:00:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programastelevisivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_msg` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_msg`, `mensaje`, `fecha`, `id_usuario`) VALUES
(4, 'ayuda', '2024-11-25 08:43:03', 1),
(21, 'sss', '2024-11-25 08:49:19', 1),
(23, 'xc', '2024-11-25 08:50:11', 1),
(24, '123', '2024-11-25 08:52:56', 1),
(25, 'aaa', '2024-11-25 08:53:28', 1),
(26, 'qqwq', '2024-11-25 08:54:32', 1),
(27, 'qqwq', '2024-11-25 08:55:09', 1),
(30, 'sd', '2024-11-25 08:57:50', 1),
(31, 'as', '2024-11-25 08:58:10', 1),
(32, 'ddd', '2024-11-25 09:00:22', 1),
(33, '123', '2024-11-25 09:09:59', 1),
(34, '123', '2024-11-25 09:10:13', 1),
(35, 'aasda', '2024-11-25 09:10:27', 1),
(36, 'f', '2024-11-25 09:12:25', 1),
(37, 'f', '2024-11-25 09:12:34', 1),
(38, 'kk', '2024-11-25 09:14:21', 1),
(39, 'kk', '2024-11-25 09:14:27', 1),
(40, 'kk', '2024-11-25 09:14:56', 1),
(41, 'xzczxczxxxxxxxxxxxxxx', '2024-11-25 09:16:08', 1),
(42, 'sss', '2024-11-25 09:17:34', 1),
(43, 'sss', '2024-11-25 09:20:15', 1),
(44, 'sssdddddddddddddddddddddd', '2024-11-25 09:20:23', 1),
(45, 'xxxxxxxxxx', '2024-11-25 09:23:31', 1),
(46, 'xxxxxxxxxx', '2024-11-25 09:26:25', 1),
(47, 'xxxxxxxxxx', '2024-11-25 09:26:35', 1),
(48, 'sss', '2024-11-25 09:29:08', 1),
(49, 'wwwwwwwwwwwww', '2024-11-25 09:29:46', 1),
(50, 'sss', '2024-11-25 09:31:04', 1),
(51, '123', '2024-11-25 09:36:51', 1),
(52, 'ssssddddddddd', '2024-11-25 09:37:55', 1),
(53, 'oakdoa\r\nsda dacad', '2024-11-25 09:59:07', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `canal` varchar(100) DEFAULT NULL,
  `fecha_estreno` date DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `titulo`, `genero`, `canal`, `fecha_estreno`, `duracion`, `descripcion`) VALUES
(3, 'Game of Thrones', 'Fantasía', 'HBO', '2011-04-17', 57, 'Nobles familias luchan por el control del Trono de Hierro en Westeros.'),
(4, 'Stranger Things', 'Ciencia ficción', 'Netflix', '2016-07-15', 51, 'Un grupo de niños descubre misterios paranormales en su ciudad.'),
(5, 'La Casa de Papel', 'Crimen', 'Antena 3', '2017-05-02', 50, 'Un grupo de delincuentes lleva a cabo el mayor atraco en la Fábrica Nacional de Moneda y Timbre de España.'),
(6, 'The Office', 'Comedia', 'NBC', '2005-03-24', 22, 'Un grupo de empleados en una oficina de ventas de papel pasa por situaciones hilarantes y cotidianas.'),
(7, 'Sherlock', 'Crimen', 'BBC', '2010-07-25', 88, 'Una versión moderna de las historias clásicas de Sherlock Holmes.'),
(8, 'Black Mirror', 'Ciencia ficción', 'Netflix', '2011-12-04', 44, 'Una serie de antología que explora un futuro oscuro y el impacto de la tecnología en nuestras vidas.'),
(9, 'The Mandalorian', 'Ciencia ficción', 'Disney+', '2019-11-12', 40, 'Un cazarrecompensas mandaloriano navega por el borde exterior de la galaxia.'),
(10, 'Fargo', 'Crimen', 'FX', '2014-04-15', 53, 'Diferentes historias de crimen y misterio inspiradas en la película homónima.'),
(21, '', 'Drama', 'Netflix', '2016-04-11', 0, 'La historia de la reina Isabel II y los eventos que han dado forma a la segunda mitad del siglo XX.'),
(22, '123', '1', '2', '3332-02-01', 12, 'asdq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`) VALUES
(1, 'jorge', 'jreyestarqui@gmail.com', '$2y$10$KtnbWddSVSFKECO6FB0HouTdTJjjVp/9UttBkkCfG7kX4uVL/08eG'),
(2, 'Luisrt', 'jorgeluisreyestarqui@gmail.com', '$2y$10$A7c0vp9wkcPCH4RanF3wUePFnCzSz3oUiWX/t/tHyiUYHnts2YL1a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
