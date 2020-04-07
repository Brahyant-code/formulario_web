-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2020 a las 21:50:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellido` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Contraseña` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `fecha_registro`) VALUES
(1, 'brahyant', 'millan', 'brahyant2018@gmail.com', '21212', '2020-04-03 15:49:54'),
(2, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 16:04:17'),
(3, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 16:06:13'),
(4, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 16:07:11'),
(5, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 16:14:26'),
(6, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 16:17:10'),
(7, 'brahyant', 'millan', 'brahyant2018@gmail.com', '123', '2020-04-03 17:07:00'),
(8, 'brahyant', 'millan', 'brahyant2018@gmail.com', '1234', '2020-04-03 19:49:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
