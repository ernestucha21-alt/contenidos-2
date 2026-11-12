-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2026 a las 18:39:45
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
-- Estructura de tabla para la tabla `colaboraciones`
--

CREATE TABLE `colaboraciones` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pelicula` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colaboraciones`
--

INSERT INTO `colaboraciones` (`id`, `Nombre`, `Email`, `Pelicula`) VALUES
(1, 'Zoe', 'zoe.salgado.123@gmail.com', 'Los juegos del hambre'),
(2, 'zoe2', 'zoe2@gmail.com', 'toy story'),
(3, 'zoe3', 'zoe3@gmail.com', 'nemo'),
(4, 'a', 'a@gmail.com', 'a'),
(5, 'd', 'd@gmail.com', 'd'),
(6, 'd', 'd@gmail.com', 'd'),
(7, 'ygy', 'fe@grff.cojm', 'edrw'),
(8, 'xcsdd', 'ddv@dcd', 'dcdec'),
(9, 'aa', 'aa@aa.com', 'aa'),
(10, 'zoeeeeeeeee', 'z@gmsail.com', 'no seeeee'),
(11, 'wdwe', 'wwdsd@df', 'dwde'),
(12, 'Zoe', 'zoe.salgado.123@gmail.com', 'toy story'),
(13, 'Zoe', 'zoe.salgado.123@gmail.com', 'avatar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `id` int(11) NOT NULL,
  `resultado` varchar(100) NOT NULL,
  `respuesta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id`, `resultado`, `respuesta`) VALUES
(1, 'Walter White', 'Me representa'),
(2, 'Walter White', 'Me representa'),
(3, 'Walter White', 'Me representa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unsabor`
--

CREATE TABLE `unsabor` (
  `id` int(11) NOT NULL,
  `sabor` varchar(100) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unsabor`
--

INSERT INTO `unsabor` (`id`, `sabor`, `imagen`) VALUES
(1, 'CHOCOLATE', 'img/chocolate.jpg'),
(2, 'CREMA AMERICANA', 'img/crema.jpg'),
(3, 'COOKIES AND CREAM', 'img/cookies.jpg'),
(4, 'DULCE DE LECHE', 'img/ddl.jpg'),
(5, 'CHICLE', 'img/chicle.jpg'),
(6, 'CREMA DEL CIELO', 'img/cremadelcielo.jpg'),
(7, 'PISTACHO', 'img/pistacho.jpg'),
(8, 'MENTA GRANIZADA', 'img/menta.jpg'),
(9, 'FRAMBUESA', 'img/frambuesa.jpg'),
(10, 'FRUTILLA', 'img/frutilla.jpg'),
(11, 'DURAZNO', 'img/naranja.jpg'),
(12, 'LIMON', 'img/limon.jpg');

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
-- Indices de la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unsabor`
--
ALTER TABLE `unsabor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unsabor`
--
ALTER TABLE `unsabor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
