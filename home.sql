-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 18:52:34
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
-- Base de datos: `home`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE `inmueble` (
  `idInmueble` int(10) NOT NULL,
  `tipo_inmueble` varchar(45) NOT NULL,
  `tipo_operacion` varchar(45) NOT NULL,
  `amueblado` varchar(3) NOT NULL,
  `habitaciones` int(10) NOT NULL,
  `baños` int(10) NOT NULL,
  `metro_Cuadrado` varchar(45) NOT NULL,
  `antiguedad` varchar(45) NOT NULL,
  `estrato` int(10) NOT NULL,
  `parqueadero` varchar(3) NOT NULL,
  `administracion` varchar(3) NOT NULL,
  `pisos` int(10) NOT NULL,
  `titulo_Anuncio` varchar(45) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `propietario_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`idInmueble`, `tipo_inmueble`, `tipo_operacion`, `amueblado`, `habitaciones`, `baños`, `metro_Cuadrado`, `antiguedad`, `estrato`, `parqueadero`, `administracion`, `pisos`, `titulo_Anuncio`, `descripcion`, `ubicacion`, `precio`, `foto`, `propietario_id`) VALUES
(1, 'casa', 'arriendo', 'no', 4, 4, '30 metros', '30 años ', 6, 'no', 'no', 6, 'cara en los altos', 'casa con desague', 'cra 151 f # 147 97', '150 millones', '', 1),
(2, 'casa', 'arriendo', 'no', 4, 3, '30 metros', '8 años', 4, 'si', 'si', 3, 'casa 3 pisoso', ' casa en buen estado ', 'cras las caracas ', '150 millones', '', 1),
(3, 'casa', 'arriendo', 'si', 1, 1, 'd', 'd', 1, 'no', 'no', 1, 's', 'd', 'd', 'd', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `idMensaje` int(10) NOT NULL,
  `texto` varchar(45) NOT NULL,
  `fecha_Creacion` datetime NOT NULL,
  `Usuario_idUsuario` int(10) NOT NULL,
  `leido` varchar(3) NOT NULL,
  `estado` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idNotificaciones` int(10) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `usuario1_idUsuario` int(10) NOT NULL,
  `usuario2_idUsuario` int(10) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `leido` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `privilegio` int(3) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `verificacion` int(10) NOT NULL,
  `modo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `celular`, `email`, `password`, `fecha_creacion`, `privilegio`, `foto`, `verificacion`, `modo`) VALUES
(1, 'jose', '3134885522', 'ro@gmail.com', '123', '0000-00-00', 1, '', 0, ''),
(2, 'usuario1', '3138441121', 'ro@gamail.com', '987', '0000-00-00', 2, '', 0, ''),
(11, 'dora ', '3138455086', 'dora@gamil.com', '981115', '0000-00-00', 2, '', 0, ''),
(12, 'josue', '31278869877', 'josue@gmail.com', '981115', '0000-00-00', 2, '', 0, ''),
(13, 'vanesa ', '3138455079', 'vanesa@gmail.es', '987', '0000-00-00', 2, '', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`idInmueble`),
  ADD KEY `propietario_id` (`propietario_id`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idMensaje`),
  ADD KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idNotificaciones`),
  ADD KEY `usuario2_idUsuario` (`usuario2_idUsuario`),
  ADD KEY `usuario1_idUsuario` (`usuario1_idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  MODIFY `idInmueble` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `idMensaje` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idNotificaciones` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`propietario_id`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`usuario1_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificaciones_ibfk_2` FOREIGN KEY (`usuario2_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
