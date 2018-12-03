-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-12-2018 a las 11:05:58
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_web_bell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla',
  `titulo` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'titulo del evento',
  `contenido` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'contenido del evento',
  `nombre_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL COMMENT 'imagen del evento',
  `fecha_creacion` datetime NOT NULL COMMENT 'fecha de creacion',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'fecha de modificacion',
  `estatus` tinyint(1) NOT NULL COMMENT 'estatus del evento',
  `id_usuario_creador` int(2) NOT NULL COMMENT 'usuario creador',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `nombre_imagen`, `fecha_creacion`, `fecha_modificacion`, `estatus`, `id_usuario_creador`) VALUES
(1, 'prueba 1', 'hpola como estas', '82798f4c2290a0f3819408cb46e38cd9.jpg', '2018-12-01 12:12:07', NULL, 1, 1),
(2, 'prueba 1', 'hpola como estas', 'efa10e2d11bbb86fb218ca42941b2a6e.jpg', '2018-12-01 12:12:51', NULL, 1, 1),
(3, 'prueba 1', '', '7da9fefb67f4f6612b68526a84b2bece.jpg', '2018-12-01 13:12:08', NULL, 1, 1),
(4, '', 'hpola como estas', 'a3a2dc55e4de618c385395cca1866bbd.jpg', '2018-12-01 13:12:28', NULL, 1, 1),
(5, 'prueba 1', 'hpola como estas', 'ebf2439ea1843281785d03bbb097bea2.jpg', '2018-12-01 13:12:30', NULL, 1, 1),
(6, 'prueba 1', 'hpola como estas', '02d34effc27999647456d1caca122c8b.jpg', '2018-12-01 13:12:01', NULL, 0, 1),
(7, 'prueba 1', 'hpola como estas', '817ce2e69da4f3725d5a0e129ae0ef32.jpg', '2018-12-01 13:12:18', NULL, 0, 1),
(8, 'prueba 1', 'hpola como estas', 'bd5a2c654c586227794a1c87a624bb7f.jpg', '2018-12-01 13:12:29', NULL, 0, 1),
(9, 'prueba 1', 'hpola como estas', 'd2c7e8fa5320d48b018353eebe2cf219.jpg', '2018-12-01 13:12:03', NULL, 0, 1),
(10, 'jose toma', 'el caso de una linda muchacha en la pelicula de taken', '75b45c1505f8d01bec8300e413181ae0.jpg', '2018-12-01 13:12:33', '2018-12-01 17:12:15', 1, 1),
(11, 'dsafdsf', 'fdgfdgfd', '8daf1fbafe48941102cce01fbd98a458.jpg', '2018-12-01 13:12:19', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del usuario',
  `usuario` varchar(100) NOT NULL COMMENT 'usuario',
  `password` varchar(200) NOT NULL COMMENT 'contraseña del usuario',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `apellido` text NOT NULL COMMENT 'apellido del usuario',
  `rol` int(2) NOT NULL COMMENT 'rol del usuario',
  `actividad` tinyint(1) DEFAULT NULL,
  `fecha_ultima_conexion` date DEFAULT NULL,
  `hora_ultima_conexion` time DEFAULT NULL,
  `ip_equipo_conexion` varchar(20) DEFAULT NULL,
  `estatus_logico` tinyint(1) NOT NULL COMMENT 'estatus logico',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Tabla que define los usuarios del sistema';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `rol`, `actividad`, `fecha_ultima_conexion`, `hora_ultima_conexion`, `ip_equipo_conexion`, `estatus_logico`) VALUES
(1, 'admin', '123456', 'admin', 'admin', 1, 0, '2018-12-01', '11:12:23', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
