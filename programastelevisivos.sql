-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 05:49:07
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `canal` varchar(100) DEFAULT NULL,
  `fecha_estreno` date DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `titulo`, `genero`, `canal`, `fecha_estreno`, `duracion`, `descripcion`, `imagen_url`) VALUES
(1, 'Los Simpson', 'Animación', 'FOX', '1989-12-17', 22, 'La vida de una familia disfuncional en la ciudad ficticia de Springfield.', NULL),
(2, 'Avatar', 'Ciencia Ficción', '20th Century Fox', '2009-12-18', 162, 'Un exmarine se encuentra en medio de un conflicto entre humanos y los habitantes de Pandora.', NULL),
(3, 'Harry Potter', 'Fantasía', 'Warner Bros', '2001-11-16', 152, 'Un joven mago lucha contra el malvado Voldemort en su camino hacia la grandeza.', NULL),
(4, 'Camino hacia el terror', 'Terror', '20th Century Fox', '2003-05-30', 84, 'Un grupo de jóvenes se enfrenta a caníbales en los bosques de West Virginia.', NULL),
(5, 'Chucky', 'Terror', 'Syfy', '1988-11-09', 87, 'Un muñeco poseído por el alma de un asesino comienza a aterrorizar a una familia.', NULL),
(6, 'El Señor de los Anillos', 'Fantasía', 'New Line Cinema', '2001-12-19', 178, 'Un grupo de héroes intenta destruir un anillo para derrotar al Señor Oscuro Sauron.', NULL),
(7, 'Star Wars', 'Ciencia Ficción', 'Lucasfilm', '1977-05-25', 121, 'Una lucha épica entre el Imperio Galáctico y la Alianza Rebelde.', NULL),
(8, 'Rápidos y Furiosos', 'Acción', 'Universal Pictures', '2001-06-22', 106, 'Un grupo de corredores de autos se enfrenta a peligrosas misiones alrededor del mundo.', NULL),
(9, 'Jurassic Park', 'Ciencia Ficción', 'Universal Pictures', '1993-06-11', 127, 'Un parque temático de dinosaurios cobra vida cuando las criaturas se escapan.', NULL),
(10, 'Matrix', 'Ciencia Ficción', 'Warner Bros', '1999-03-31', 136, 'Un hacker descubre la verdad detrás de la realidad y lucha contra las máquinas que controlan el mundo.', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
