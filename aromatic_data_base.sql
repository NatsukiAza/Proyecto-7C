-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 19:33:52
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aromatic_data_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codped` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `fecped` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `dirusuped` varchar(50) NOT NULL,
  `telusuped` varchar(12) NOT NULL,
  `token` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codped`, `userid`, `codpro`, `fecped`, `estado`, `dirusuped`, `telusuped`, `token`) VALUES
(1, 715396183, 20, '2022-10-03 14:26:54', 1, '', '', NULL),
(2, 715396183, 20, '2022-10-03 14:29:41', 1, '', '', NULL),
(3, 715396183, 22, '2022-10-03 14:29:44', 1, '', '', NULL),
(4, 715396183, 21, '2022-10-03 14:29:46', 1, '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codpro` int(11) NOT NULL,
  `nompro` varchar(50) DEFAULT NULL,
  `despro` varchar(100) DEFAULT NULL,
  `prepro` varchar(62) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `rutimapro` varchar(100) DEFAULT NULL,
  `prodst` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codpro`, `nompro`, `despro`, `prepro`, `estado`, `rutimapro`, `prodst`) VALUES
(20, 'Aceite Esencial Patchouly', 'Construido entorno a un patchouly con facetas verdes y madera, que evoluciona hacia notas balsámicas', '155.00', 1, '20220818193111.jpg', 60),
(21, 'Aceite Esencial Palo Santo', 'Embriagadora fragancia amaderada con mezcla de notas balsámicas y orientales que energiza y sorprend', '155.00', 1, '20220818193146.jpg', 60),
(22, 'Aceite Esencial Nag Champa', 'Una fragancia exuberante, con una salida de patchouly que cede progresivamente hacia un fondo que re', '155.00', 1, '20220818193212.jpg', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol` varchar(50) NOT NULL,
  `id_rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userid`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 715396183, 'juan', 'juan', 'juan@juan.juan', 'a94652aa97c7211ba8954dd15a3cf838', '1664816289juan.jpg', 'Activo ahora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codped`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codpro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
