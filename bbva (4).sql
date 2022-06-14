-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-06-2022 a las 04:53:31
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbva`
--
CREATE DATABASE IF NOT EXISTS `bbva` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bbva`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subtitulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `btn1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `btn2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ubicacion` int NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_fk0` (`ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `imagen`, `titulo`, `subtitulo`, `btn1`, `url1`, `btn2`, `url2`, `ubicacion`, `estado`) VALUES
(1, '1092x1236_1.jpg', 'Solicita tu prestamo vehicular', 'Encuentra tu vehículo', 'Solicítalo', 'http://www.google.com.pe', 'Comencémos', 'http://www.bbva.com.pe', 1, 1),
(2, '1092x1236_2.jpg', 'Aquí van tres palabras separadas', 'Subtítulo corto', 'Botón 1', 'url 1', 'Botón 2', 'url 2', 1, 1),
(3, '1092x1236_3.jpg', 'Palabras separadas según longitud', 'Subtítulo de una línea', 'Acción', 'una url destino', 'Segundo botón', 'url destino', 1, 1),
(4, '1092x1236_1.jpg', 'Título', 'Banner', 'banner', 'banner', 'banner', 'banner', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `estado`) VALUES
(1, 'Sedan', 1),
(2, 'Hatchback', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

DROP TABLE IF EXISTS `condicion`;
CREATE TABLE IF NOT EXISTS `condicion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `condicion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`id`, `condicion`) VALUES
(1, 'Cero kilometros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_vehiculo` int NOT NULL,
  `fechaguardado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `favoritos_fk0` (`id_usuario`),
  KEY `favoritos_fk1` (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_vehiculos`
--

DROP TABLE IF EXISTS `imagenes_vehiculos`;
CREATE TABLE IF NOT EXISTS `imagenes_vehiculos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_vehiculo` int NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_vehiculos_fk0` (`id_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenes_vehiculos`
--

INSERT INTO `imagenes_vehiculos` (`id`, `id_vehiculo`, `imagen`, `estado`) VALUES
(42, 94, 'mini1.jpg', 1),
(43, 94, 'mini2.jpg', 1),
(44, 94, 'mini3.jpg', 1),
(45, 94, 'mini4.jpg', 1),
(46, 94, 'mini5.jpg', 1),
(51, 97, 'yaris1.jpg', 1),
(53, 97, 'yaris3.jpg', 1),
(55, 97, 'yaris5.jpg', 1),
(56, 97, 'yaris6.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `leads_fk0` (`vehiculo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `marca`, `estado`) VALUES
(1, 'Toyota', 1),
(2, 'Hyundai', 1),
(3, 'Ford', 1),
(4, 'Mini', 1),
(5, 'Audi', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

DROP TABLE IF EXISTS `modelo`;
CREATE TABLE IF NOT EXISTS `modelo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca_id` int NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `modelo_fk0` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id`, `marca_id`, `modelo`, `estado`) VALUES
(1, 1, 'Yaris', 1),
(2, 2, 'Grand i10', 1),
(3, 2, 'Modelo2', 1),
(4, 4, 'Cooper S', 1),
(5, 5, 'A3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones`
--

DROP TABLE IF EXISTS `modificaciones`;
CREATE TABLE IF NOT EXISTS `modificaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_vehiculo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `modificaciones_fk0` (`id_vehiculo`),
  KEY `modificaciones_fk1` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_marca` int NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permisos_fk0` (`id_marca`),
  KEY `permisos_fk1` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id`, `ubicacion`, `estado`) VALUES
(1, 'Superior', 1),
(2, 'Lateral', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estado` int NOT NULL,
  `tipousuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `dni`, `telefono`, `correo`, `password`, `estado`, `tipousuario`) VALUES
(1, 'Favio', 'Rivadeneyra', '12345678', '984255611', 'faviofro86@gmail.com', 'S21VRlNyS3dqTXI2VWg1QzdCVUF3Zz09', 1, 1),
(2, 'Prueba', '', '', '', 'correo@domain.com', 'YXJERUFtRTN4NDJibFYycExobVVOZz09', 1, 1),
(3, 'Prueba', '', '', '', 'correo2@domain.com', 'YXJERUFtRTN4NDJibFYycExobVVOZz09', 1, 1),
(4, 'Prueba3', '', '', '', 'prueba3@prueba.com', 'YXJERUFtRTN4NDJibFYycExobVVOZz09', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca_id` int NOT NULL,
  `modelo_id` int NOT NULL,
  `categoria_id` int NOT NULL,
  `condicion_id` int NOT NULL,
  `precio` varchar(255) NOT NULL,
  `img_banner` varchar(255) NOT NULL,
  `ano_modelo` varchar(255) NOT NULL,
  `ano_fabricacion` varchar(255) NOT NULL,
  `puertas` varchar(255) NOT NULL,
  `transmision` varchar(255) NOT NULL,
  `traccion` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `resumen` text NOT NULL,
  `fichatecnica` varchar(255) NOT NULL,
  `encuentralo` text NOT NULL,
  `estado` int NOT NULL,
  `numvisitas` int NOT NULL,
  `creadopor` int NOT NULL,
  `creado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificadopor` int NOT NULL,
  `modificado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(255) NOT NULL,
  `cilindrada` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehiculos_fk0` (`marca_id`),
  KEY `vehiculos_fk1` (`modelo_id`),
  KEY `vehiculos_fk2` (`categoria_id`),
  KEY `vehiculos_fk3` (`condicion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca_id`, `modelo_id`, `categoria_id`, `condicion_id`, `precio`, `img_banner`, `ano_modelo`, `ano_fabricacion`, `puertas`, `transmision`, `traccion`, `descripcion`, `resumen`, `fichatecnica`, `encuentralo`, `estado`, `numvisitas`, `creadopor`, `creado`, `modificadopor`, `modificado`, `slug`, `cilindrada`) VALUES
(94, 4, 4, 2, 1, '17000', 'mini1.jpg', '2022', '2022', '5', 'Mecánica', 'Delantera', 'Auto pequeño', 'Mini Cooper auto pequeño', 'minicooper.pdf', 'Surco; Av Nombre 123; San Borja; Av Nombre 123; San Miguel; Av. Nombre 123', 1, 50, 0, '2022-05-04 17:59:04', 0, '2022-05-04 17:59:04', 'mini-cooper-s', '1600'),
(97, 1, 1, 2, 1, '180000', 'yaris1.jpg', '2022', '2022', '5', 'Mecánica', 'Delantera', 'INNOVADOR PANEL CON RADIO TÁCTIL DE 7”, CON FUNCIÓN AM/FM, MP3, USB, BLUETOOTH, AUX, ANDROID AUTO® Y APPLE CARPLAY®. ASIMISMO, CUENTA CON CONTROLES EN EL VOLANTE PARA QUE PUEDAS RESPONDER LLAMADAS SIN QUITAR LAS MANOS DEL VOLANTE NI LA VISTA DEL CAMINO.', 'EQUIPADO CON UN MOTOR DUAL VVT-I DE 1.3L, EL RENOVADO TOYOTA YARIS ES EL BALANCE PERFECTO ENTRE RENDIMIENTO, DEPORTIVIDAD Y CONFORT. ¿ESTÁS LISTO PARA DESCUBRIRLO POR TI MISMO?', 'yaris.pdf', 'Tiendas', 1, 6, 0, '2022-05-29 17:33:12', 0, '2022-05-29 17:33:12', 'yaris-2022', '1600');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_fk0` FOREIGN KEY (`ubicacion`) REFERENCES `ubicaciones` (`id`);

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `favoritos_fk1` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `imagenes_vehiculos`
--
ALTER TABLE `imagenes_vehiculos`
  ADD CONSTRAINT `imagenes_vehiculos_fk0` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_fk0` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_fk0` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);

--
-- Filtros para la tabla `modificaciones`
--
ALTER TABLE `modificaciones`
  ADD CONSTRAINT `modificaciones_fk0` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id`),
  ADD CONSTRAINT `modificaciones_fk1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_fk0` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`),
  ADD CONSTRAINT `permisos_fk1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_fk0` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`),
  ADD CONSTRAINT `vehiculos_fk1` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`),
  ADD CONSTRAINT `vehiculos_fk2` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `vehiculos_fk3` FOREIGN KEY (`condicion_id`) REFERENCES `condicion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
