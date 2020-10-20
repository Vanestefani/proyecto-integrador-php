-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 01:46:56
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
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fotos` blob NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_venta`
--

CREATE TABLE `tipo_venta` (
  `Id` int(10) NOT NULL,
  `venta` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `arriendo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
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
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`, `fecha_registro`) VALUES
(1, 'administrador', 'admin', 'admin@gmail.com', 'admin123', 1, '2020-08-18 03:59:20'),
(9, 'nombre del usuario', 'usuario1', 'usuario@gmail.com', '123', 2, '2020-09-22 19:58:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id` int(10) NOT NULL,
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
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fotos` blob NOT NULL,
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
-- Indices de la tabla `tipo_venta`
--
ALTER TABLE `tipo_venta`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_venta`
--
ALTER TABLE `tipo_venta`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
