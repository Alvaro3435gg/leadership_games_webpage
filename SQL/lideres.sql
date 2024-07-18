-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 00:55:25
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
-- Base de datos: `lideres`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_usuario` (IN `p_nombre_usuario` VARCHAR(50), IN `p_contrasena` VARCHAR(100), IN `p_correo_electronico` VARCHAR(100))   BEGIN
    DECLARE last_id INT;
    
    
    INSERT INTO usuarios (nombre_usuario, contrasena, correo_electronico)
    VALUES (p_nombre_usuario, p_contrasena, p_correo_electronico);
    
    
    SET last_id = LAST_INSERT_ID();
    
    
    INSERT INTO usuario_habilidades (id_usuario, id_habilidad, progreso, estatus)
    SELECT last_id, id_habilidad, 0, 'Incompleto'
    FROM habilidades;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `id_habilidad` int(11) NOT NULL,
  `nombre_habilidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habilidades`
--

INSERT INTO `habilidades` (`id_habilidad`, `nombre_habilidad`) VALUES
(1, 'Comunicacion'),
(2, 'Colaboracion'),
(3, 'Creatividad  innovacion'),
(4, 'Pensamiento critico'),
(5, 'Responsabilidad social e individual'),
(6, 'Autogestion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `contrasena`, `correo_electronico`) VALUES
(1, 'usuario1', 'contraseña1', 'usuario1@correo.com'),
(2, 'usuario2', 'contraseña2', 'usuario2@correo.com'),
(3, 'usuario3', 'contraseña3', 'usuario3@correo.com'),
(4, 'prueba', 'dsfasdfsa', 'a01737453@tec.mx'),
(5, 'prueba2', 'dsfasdfsa', 'a01737453@tec.mx'),
(6, 'patos', 'atotototo', 'ñom'),
(7, 'afsasd', 'adfasd', 'dzfgfdg@ddd'),
(8, 'asdfsaa', 'asdfsadf', 'a01737453@tec.mx'),
(9, 'comparacion', 'comparararacion', 'a01737453@tec.mx'),
(10, 'comparacion2', 'comocoo', 'a01737453@tec.mx'),
(11, 'patospascuales', 'lol', 'a01737453@tec.mx'),
(12, 'a', 'a', 'a01737453@tec.mx'),
(13, 'b', 'b', 'a01737453@tec.mx'),
(14, 'ee', 'dd', 'a01737453@tec.mx'),
(15, 'ee', 'dd', 'carol.siam@outlook.com'),
(16, 'ñom', 'patitos', 'carol.siam@outlook.com'),
(17, 'perritos', 'bianca2', 'carol.siam@outlook.com'),
(18, 'perritos', 'bianca2', 'carol.siam@outlook.com'),
(19, 'siasies', 'nonono', 'dzfgfdg@ddd'),
(20, 'mayra', '123456', 'a01737453@tec.mx'),
(21, 'Carol', 'mikaso', 'carol@mikaso.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_habilidades`
--

CREATE TABLE `usuario_habilidades` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_habilidad` int(11) DEFAULT NULL,
  `progreso` int(11) DEFAULT NULL,
  `estatus` varchar(20) DEFAULT 'Incompleto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_habilidades`
--

INSERT INTO `usuario_habilidades` (`id_usuario`, `id_habilidad`, `progreso`, `estatus`) VALUES
(1, 1, 100, 'Completo'),
(1, 2, 20, 'Incompleto'),
(1, 3, 20, 'Incompleto'),
(1, 4, 20, 'Incompleto'),
(1, 5, 20, 'Incompleto'),
(1, 6, 20, 'Incompleto'),
(2, 1, 0, 'Incompleto'),
(2, 2, 0, 'Incompleto'),
(2, 3, 0, 'Incompleto'),
(2, 4, 0, 'Incompleto'),
(2, 5, 0, 'Incompleto'),
(2, 6, 0, 'Incompleto'),
(3, 1, 0, 'Incompleto'),
(3, 2, 0, 'Incompleto'),
(3, 3, 0, 'Incompleto'),
(3, 4, 0, 'Incompleto'),
(3, 5, 0, 'Incompleto'),
(3, 6, 0, 'Incompleto'),
(4, 1, 0, 'Incompleto'),
(4, 2, 0, 'Incompleto'),
(4, 3, 0, 'Incompleto'),
(4, 4, 0, 'Incompleto'),
(4, 5, 0, 'Incompleto'),
(4, 6, 0, 'Incompleto'),
(5, 1, 0, 'Incompleto'),
(5, 2, 0, 'Incompleto'),
(5, 3, 0, 'Incompleto'),
(5, 4, 0, 'Incompleto'),
(5, 5, 0, 'Incompleto'),
(5, 6, 0, 'Incompleto'),
(6, 1, 0, 'Incompleto'),
(6, 2, 0, 'Incompleto'),
(6, 3, 0, 'Incompleto'),
(6, 4, 0, 'Incompleto'),
(6, 5, 0, 'Incompleto'),
(6, 6, 0, 'Incompleto'),
(7, 1, 0, 'Incompleto'),
(7, 2, 0, 'Incompleto'),
(7, 3, 0, 'Incompleto'),
(7, 4, 0, 'Incompleto'),
(7, 5, 0, 'Incompleto'),
(7, 6, 0, 'Incompleto'),
(8, 1, 0, 'Incompleto'),
(8, 2, 0, 'Incompleto'),
(8, 3, 0, 'Incompleto'),
(8, 4, 0, 'Incompleto'),
(8, 5, 0, 'Incompleto'),
(8, 6, 0, 'Incompleto'),
(9, 1, 0, 'Incompleto'),
(9, 2, 0, 'Incompleto'),
(9, 3, 0, 'Incompleto'),
(9, 4, 0, 'Incompleto'),
(9, 5, 0, 'Incompleto'),
(9, 6, 0, 'Incompleto'),
(10, 1, 0, 'Incompleto'),
(10, 2, 0, 'Incompleto'),
(10, 3, 0, 'Incompleto'),
(10, 4, 0, 'Incompleto'),
(10, 5, 0, 'Incompleto'),
(10, 6, 0, 'Incompleto'),
(11, 1, 0, 'Incompleto'),
(11, 2, 0, 'Incompleto'),
(11, 3, 0, 'Incompleto'),
(11, 4, 0, 'Incompleto'),
(11, 5, 0, 'Incompleto'),
(11, 6, 0, 'Incompleto'),
(12, 1, 50, 'Incompleto'),
(12, 2, 20, 'Incompleto'),
(12, 3, 40, 'Incompleto'),
(12, 4, 40, 'Incompleto'),
(12, 5, 20, 'Incompleto'),
(12, 6, 20, 'Incompleto'),
(13, 1, 0, 'Incompleto'),
(13, 2, 0, 'Incompleto'),
(13, 3, 0, 'Incompleto'),
(13, 4, 0, 'Incompleto'),
(13, 5, 0, 'Incompleto'),
(13, 6, 0, 'Incompleto'),
(14, 1, 0, 'Incompleto'),
(14, 2, 0, 'Incompleto'),
(14, 3, 0, 'Incompleto'),
(14, 4, 0, 'Incompleto'),
(14, 5, 0, 'Incompleto'),
(14, 6, 0, 'Incompleto'),
(15, 1, 0, 'Incompleto'),
(15, 2, 0, 'Incompleto'),
(15, 3, 0, 'Incompleto'),
(15, 4, 0, 'Incompleto'),
(15, 5, 0, 'Incompleto'),
(15, 6, 0, 'Incompleto'),
(16, 1, 0, 'Incompleto'),
(16, 2, 0, 'Incompleto'),
(16, 3, 0, 'Incompleto'),
(16, 4, 0, 'Incompleto'),
(16, 5, 0, 'Incompleto'),
(16, 6, 0, 'Incompleto'),
(17, 1, 0, 'Incompleto'),
(17, 2, 0, 'Incompleto'),
(17, 3, 0, 'Incompleto'),
(17, 4, 0, 'Incompleto'),
(17, 5, 0, 'Incompleto'),
(17, 6, 0, 'Incompleto'),
(18, 1, 0, 'Incompleto'),
(18, 2, 0, 'Incompleto'),
(18, 3, 0, 'Incompleto'),
(18, 4, 0, 'Incompleto'),
(18, 5, 0, 'Incompleto'),
(18, 6, 0, 'Incompleto'),
(19, 1, 0, 'Incompleto'),
(19, 2, 0, 'Incompleto'),
(19, 3, 0, 'Incompleto'),
(19, 4, 0, 'Incompleto'),
(19, 5, 0, 'Incompleto'),
(19, 6, 0, 'Incompleto'),
(20, 1, 20, 'Incompleto'),
(20, 2, 0, 'Incompleto'),
(20, 3, 0, 'Incompleto'),
(20, 4, 0, 'Incompleto'),
(20, 5, 0, 'Incompleto'),
(20, 6, 0, 'Incompleto'),
(21, 1, 0, 'Incompleto'),
(21, 2, 0, 'Incompleto'),
(21, 3, 20, 'Incompleto'),
(21, 4, 0, 'Incompleto'),
(21, 5, 0, 'Incompleto'),
(21, 6, 0, 'Incompleto');

--
-- Disparadores `usuario_habilidades`
--
DELIMITER $$
CREATE TRIGGER `actualizar_estatus` BEFORE INSERT ON `usuario_habilidades` FOR EACH ROW BEGIN
    IF NEW.progreso = 100 THEN
        SET NEW.estatus = 'Completo';
    ELSE
        SET NEW.estatus = 'Incompleto';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `actualizar_estatus_update` BEFORE UPDATE ON `usuario_habilidades` FOR EACH ROW BEGIN
    IF NEW.progreso = 100 THEN
        SET NEW.estatus = 'Completo';
    ELSE
        SET NEW.estatus = 'Incompleto';
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id_habilidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_habilidades`
--
ALTER TABLE `usuario_habilidades`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_habilidad` (`id_habilidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id_habilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_habilidades`
--
ALTER TABLE `usuario_habilidades`
  ADD CONSTRAINT `usuario_habilidades_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuario_habilidades_ibfk_2` FOREIGN KEY (`id_habilidad`) REFERENCES `habilidades` (`id_habilidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
