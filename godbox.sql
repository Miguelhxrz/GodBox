-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-01-2022 a las 02:30:51
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `godbox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `box`
--

CREATE TABLE `box` (
  `id` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `price` int(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `sponsor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `category` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `rank` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `objects` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `fecha de registro` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `box`
--

INSERT INTO `box` (`id`, `name`, `price`, `stock`, `sponsor`, `category`, `rank`, `objects`, `img`, `fecha de registro`) VALUES
('AATS', 'Apple Excellent Box', 920, 399, 'Apple', 'Tecnologia', 'SemiDios', 'IATD-MNHJ', '../public/box/box_apple-semidios-resized.png', '09/01/2022'),
('MART', 'Besto box world', 1300, 6, 'Apple', 'Tecnologia', 'Dios', 'IATD-MNHJ-BFMO-CSHT-PCDT-PSDT-SRDA-TRST', '../public/box/box_apple-god_resized.png', '09/01/2022'),
('QPQP', 'Quevero Box', 100, 200, 'TerrarioPekar', 'Accesorios', 'Olimpica', 'BFMO-CSHT-IATD-MNHJ-PCDT-PSDT-SRDA-TRST', '../public/box/box_apple-Olimpica_resized.png', '09/01/2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coins`
--

CREATE TABLE `coins` (
  `id` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha de registro` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `coins`
--

INSERT INTO `coins` (`id`, `quantity`, `price`, `image`, `Fecha de registro`) VALUES
('AQUPE', 300, 100, '../public/coin/monedas.png', '26/12/2021'),
('QPR32', 600, 200, '../public/coin/monedas.png', '26/12/2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objects`
--

CREATE TABLE `objects` (
  `id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(45) NOT NULL,
  `price` int(100) NOT NULL,
  `sponsor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `rank` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `category` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `fecha de registro` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `objects`
--

INSERT INTO `objects` (`id`, `name`, `stock`, `price`, `sponsor`, `rank`, `category`, `image`, `fecha de registro`) VALUES
('BFMO', 'Barbie Fachera', 500, 20, 'Matel', 'Olimpico', 'Juguetes', '../public/items/emoji-kiss.png', '09/01/2022'),
('CSHT', 'Control de PS4', 1500, 55, 'Sony', 'Heroe', 'Tecnologia', '../public/items/CSHT.png', '09/01/2022'),
('IATD', 'Iphone 13 pro max', 250, 1500, 'Apple', 'Dios', 'Tecnologia', '../public/items/Iphone13.png', '09/01/2022'),
('MNHJ', 'MarioToy', 455, 20, 'Nintendo', 'Heroe', 'Accesorios', '../public/items/Mario_toy.png', '09/01/2022'),
('PCDT', 'PC Cooler Master Optiplex 3000', 50, 3600, 'Cooler Master', 'Dios', 'Tecnologia', '../public/items/PCDT.png', '09/01/2022'),
('PSDT', 'Play Station 5', 13, 1500, 'Sony', 'Dios', 'Tecnologia', '../public/items/PSDT.png', '09/01/2022'),
('SRDA', 'Silla Razer', 98, 380, 'Razer', 'Dios', 'Accesorios', '../public/items/Silla_Razer.png', '09/01/2022'),
('TRST', 'Teclado Razer 1580R', 320, 145, 'Razer', 'SemiDios', 'Tecnologia', '../public/items/TRST.png', '09/01/2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `number` varchar(19) COLLATE utf8_spanish_ci NOT NULL,
  `expiration date` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cvv` varchar(3) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `type`, `number`, `expiration date`, `cvv`) VALUES
('28021899', 'Visa', '2802189969254588', '2025-03-21', '455'),
('29909522', 'Master card', '182532657895742615', '15-02-2040', '135');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsor`
--

CREATE TABLE `sponsor` (
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `fecha de registro` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sponsor`
--

INSERT INTO `sponsor` (`name`, `rif`, `email`, `image`, `fecha de registro`) VALUES
('MiguelonStudio', 'J-28021899', 'miguelonstudioSTB@Stb.com', '../public/sponsor/My-emoji_Explosion.png', '10/01/2022'),
('Apple', 'J-29456789', 'Apple@apple.com', '../public/sponsor/screencapture-localhost-3000-index-php-2021-12-27-18_47_15.png', '10/01/2022'),
('TerrarioPekar', 'J-30987654', 'Terrario@pekar.com', '../public/sponsor/Mac-no_png.png', '10/01/2022'),
('Nike', 'J-90123456', 'Nike_America@Usa.com', '../public/sponsor/burbuja-de-dialogo.png', '10/01/2022'),
('Ramosio', 'J-98501899', 'Ramoneiro1520@gmail.com', '../public/sponsor/My-emoji_Explosion.png', '10/01/2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `coins` int(11) NOT NULL,
  `id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `birth` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha de registro` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `coins`, `id`, `email`, `address`, `birth`, `fecha de registro`) VALUES
('ramirito', '123456789', 0, '11587558', 'ramiro@gmail.com', 'calle 56 con carrera 23', '20/5/2001', '07/01/2022'),
('eugenio', '15032020', 1555, '13774040', 'mariu747@gmail.com', 'calle 56 con carrera 23', '26-8-1985', '23/12/2021'),
('miguelhxrz', 'miguel28021899**', 3300, '28021899', 'miguelherzdev@gmail.com', 'calle 56 con carrera 23', '15-2-2001', '14/11/2021'),
('Juanito1215', '13131313', 100, '29909522', 'juanitox@gmail.com', 'carrera 15 entre calles 48 y 49', '20-12-1990', '12/11/2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_inventory`
--

CREATE TABLE `user_inventory` (
  `id` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `objects` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_inventory`
--

INSERT INTO `user_inventory` (`id`, `username`, `objects`) VALUES
('13774040', 'Eugenio', 'PSDT'),
('28021899', 'miguelhxrz', 'BFMO-PCDT-TRST-PSDT-MNHJ'),
('29909522', 'Juanito1215', 'MNHJ-IATD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`rif`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_inventory`
--
ALTER TABLE `user_inventory`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
