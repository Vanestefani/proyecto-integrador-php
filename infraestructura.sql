-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 04:05:21
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infraestructura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arriendo`
--

CREATE TABLE `arriendo` (
  `Id` int(10) NOT NULL,
  `arriendo` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'arriendo',
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `amueblados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `habitaciones` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `baños` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `metro_cuadrado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `antiguedad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estrato` int(10) NOT NULL,
  `parqueadero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `administracion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pisos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `num_contacto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_anuncio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `arriendo`
--

INSERT INTO `arriendo` (`Id`, `arriendo`, `tipo`, `amueblados`, `habitaciones`, `baños`, `metro_cuadrado`, `antiguedad`, `estrato`, `parqueadero`, `administracion`, `pisos`, `num_contacto`, `titulo_anuncio`, `descripcion`, `ubicacion`, `precio`) VALUES
(1, 'arriendo', 'apartamento', 'si', '4', '3', '30 metros', '5', 3, 'no', 'no', '5', '5384853', 'casa en los altos', 'descripcion', 'lagos', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`) VALUES
(1, 'administrador', 'admin', 'admin@gmail.com', 'admin123', 1),
(9, 'nombre del usuario', 'usuario1', 'usuario@gmail.com', '123', 2),
(10, 'jose', 'ro@gmail.es', 'jose.carranza@usanjose.edu.co', '123', 2),
(11, '', '', '', '', 2),
(12, '', '', '', '', 2),
(13, 'jose', 'jose', 'ro@gamail.com', '123', 2),
(14, '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id` int(10) NOT NULL,
  `venta` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT '''venta''',
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `amueblados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `habitaciones` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `baños` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `metro_cuadrado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `antiguedad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estrato` int(10) NOT NULL,
  `parqueadero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `administracion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pisos` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `num_contacto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_anuncio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arriendo`
--
ALTER TABLE `arriendo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arriendo`
--
ALTER TABLE `arriendo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
