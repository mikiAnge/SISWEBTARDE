-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2024 a las 09:59:34
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
(2, 'Friends', 'Comedia', 'NBC', '1994-09-22', 22, 'Seis amigos navegan por la vida y el amor en Nueva York.'),
(3, 'Game of Thrones', 'Fantasía', 'HBO', '2011-04-17', 57, 'Nobles familias luchan por el control del Trono de Hierro en Westeros.'),
(4, 'Stranger Things', 'Ciencia ficción', 'Netflix', '2016-07-15', 51, 'Un grupo de niños descubre misterios paranormales en su ciudad.'),
(5, 'La Casa de Papel', 'Crimen', 'Antena 3', '2017-05-02', 50, 'Un grupo de delincuentes lleva a cabo el mayor atraco en la Fábrica Nacional de Moneda y Timbre de España.'),
(6, 'The Office', 'Comedia', 'NBC', '2005-03-24', 22, 'Un grupo de empleados en una oficina de ventas de papel pasa por situaciones hilarantes y cotidianas.'),
(7, 'Sherlock', 'Crimen', 'BBC', '2010-07-25', 88, 'Una versión moderna de las historias clásicas de Sherlock Holmes.'),
(8, 'Black Mirror', 'Ciencia ficción', 'Netflix', '2011-12-04', 44, 'Una serie de antología que explora un futuro oscuro y el impacto de la tecnología en nuestras vidas.'),
(9, 'The Mandalorian', 'Ciencia ficción', 'Disney+', '2019-11-12', 40, 'Un cazarrecompensas mandaloriano navega por el borde exterior de la galaxia.'),
(10, 'Fargo', 'Crimen', 'FX', '2014-04-15', 53, 'Diferentes historias de crimen y misterio inspiradas en la película homónima.'),
(21, '', 'Drama', 'Netflix', '2016-04-11', 0, 'La historia de la reina Isabel II y los eventos que han dado forma a la segunda mitad del siglo XX.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
