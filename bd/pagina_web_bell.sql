-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2018 a las 14:49:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

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

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `cambiar_status` (`id_noticia` INT) RETURNS INT(2) BEGIN

	set @status = (SELECT status FROM noticias WHERE id = id_noticia);
    
    IF (var_1 = 1) THEN
    	UPDATE noticias SET status = 0 WHERE id = id_noticia;
    ELSE
    	UPDATE noticias SET status = 1 WHERE id = id_noticia;
    END IF;
    
    RETURN 1;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `crear_noticia` (`titulo_noticia` TEXT, `descripcion_noticia` TEXT, `nombre_imagen` TEXT, `usuario_creador` INT) RETURNS INT(2) BEGIN
	
	INSERT INTO noticias(titulo, descripcion, imagen, fecha_creacion, status, usuario_creador)
    VALUES (titulo_noticia, descripcion_noticia, nombre_imagen, CURRENT_TIMESTAMP, 1, usuario_creador);
    
    RETURN 1;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `eliminar_noticia` (`id_noticia` INT) RETURNS INT(2) BEGIN
	
	DELETE from noticias WHERE id = id_noticia;
    
    RETURN 1;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) NOT NULL,
  `titulo` text,
  `descripcion` text,
  `imagen` text,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_modificacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(10) DEFAULT NULL,
  `usuario_creador` int(11) NOT NULL COMMENT 'id del creador de la noticia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL COMMENT 'id del usuario',
  `usuario` varchar(100) NOT NULL COMMENT 'usuario',
  `password` varchar(200) NOT NULL COMMENT 'contraseña del usuario',
  `nombre` text NOT NULL COMMENT 'nombre del usuario',
  `apellido` text NOT NULL COMMENT 'apellido del usuario',
  `rol` int(2) NOT NULL COMMENT 'rol del usuario',
  `actividad` tinyint(1) DEFAULT NULL,
  `fecha_ultima_conexion` date DEFAULT NULL,
  `hora_ultima_conexion` time DEFAULT NULL,
  `ip_equipo_conexion` varchar(20) DEFAULT NULL,
  `estatus_logico` tinyint(1) NOT NULL COMMENT 'estatus logico'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que define los usuarios del sistema';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `rol`, `actividad`, `fecha_ultima_conexion`, `hora_ultima_conexion`, `ip_equipo_conexion`, `estatus_logico`) VALUES
(1, 'admin', '123456', 'admin', 'admin', 1, 1, '2018-11-28', '12:11:51', '::1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del usuario', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
