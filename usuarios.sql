-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2026 a las 18:24:44
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
-- Base de datos: `icentity`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`) VALUES
(1, 'ernestucha21@gmail.com', 'ernestucha21@gmail.com', 'aaaa'),
(2, 'ernestucha21@gmail.com', 'ernestucha21@gmail.com', 'aaaa'),
(3, 'Zoe', 'zoe.salgado.123@gmail.com', 'zoe123'),
(4, 'Zoe', 'zoe.salgado.123@gmail.com', 'ssaaaaa'),
(5, 'Zoe', 'zoe@gmai.com', 'aaaaa'),
(6, 'zooeeeeeeeeeee', 'aa@gmail.com', 'nose'),
(7, 'z', 'z@gmail.com', 'z'),
(8, 'z', 'z@gmail.com', 'z'),
(9, 'sdsdds', 'dasad@gmail.com', 'sacs'),
(10, 'ad', 'ad@gmail.com', 'ad'),
(11, 'q', 'q@d.com', 'qd'),
(12, 'gvghhg', 'hjhj@dsf', 'hj'),
(13, 'fgf', 'cgg@cf', 'hj'),
(14, 'Zoe', 'zoe.salgado.123@gmail.com', 'aaaaa'),
(15, 'Zoe', 'zoe.salgado.123@gmail.com', 'aaa'),
(16, 'guido1', 'guido1@gmail.com', '$2y$10$6rnvhlpm/mJLaG.b7L9RWeJTxuNR.FimoPbfGHS/qEzd8WoTnFdTm'),
(17, 'ernes', 'ernes@gmail.com', '$2y$10$EoplYbxfps4hovbLxDYCiO/WPO0zlz5CD98r7TO8VADYuiK0MzUKW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
