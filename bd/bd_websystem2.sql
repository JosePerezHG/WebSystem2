-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2020 a las 02:49:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_websystem2`
--
CREATE DATABASE IF NOT EXISTS `bd_websystem2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_websystem2`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_accesos` (IN `v_id_user` INT)  BEGIN
select p.idpagina v1 ,concat
(p.controlador,p.metodo) v2
from accesos a inner join paginas p on a.idpagina=p.idpagina where a.id_user=v_id_user and a.estado=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_estado` ()  BEGIN
select codestado v1,descripcion v2 from estadov ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_servicio` ()  BEGIN
select ts.nom_tipo_servicio v1, s.id_tipo_servicio v2, s.nom_servicio v3 from servicio s
inner JOIN tipo_servicio ts on s.id_tipo_servicio = ts.id_tipo_servicio
order by s.id_tipo_servicio;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_servicios` ()  BEGIN
select id_servicio v1,id_tipo_servicio v3,nom_servicio v2 from servicio;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas` ()  BEGIN
select s.nom_servicio v1,t.id_servicio v2,t.descr_tema v3, t.foto v4, t.id_tema v5
from tema t inner join servicio s
on t.id_servicio=s.id_servicio;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas_b` ()  NO SQL
BEGIN
select s.nom_servicio v1,t.id_servicio v2,t.descr_tema v3, t.foto v4
from tema t inner join servicio s
on t.id_servicio=s.id_servicio
where t.id_servicio=3;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas_g` ()  NO SQL
BEGIN
select s.nom_servicio v1,t.id_servicio v2,t.descr_tema v3, t.foto v4
from tema t inner join servicio s
on t.id_servicio=s.id_servicio
where t.id_servicio=2;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas_recientes` ()  BEGIN
select s.nom_servicio v1,t.id_servicio v2,t.descr_tema v3, t.foto v4
from tema t inner join servicio s
on t.id_servicio=s.id_servicio order by t.id_tema desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas_todos` ()  NO SQL
BEGIN
select t.id_servicio v2,t.descr_tema v3, t.foto v4, t.id_tema v5
from tema t;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_temas_z` ()  NO SQL
BEGIN
select s.nom_servicio v1,t.id_servicio v2,t.descr_tema v3, t.foto v4
from tema t inner join servicio s
on t.id_servicio=s.id_servicio
where t.id_servicio = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_tipo_servicio` ()  BEGIN
select id_tipo_servicio v1, nom_tipo_servicio v2 from tipo_servicio;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_articulo` (IN `id_t` INT(8), IN `tit` VARCHAR(300), IN `artc` TEXT, IN `res_reg` BOOLEAN)  BEGIN
declare exit HANDLER
	for SQLEXCEPTION
BEGIN
rollback;
set res_reg=false;
end;

start transaction;
INSERT INTO practica (id_tema, titulo, articulo) VALUES
(id_t,tit,artc);
commit;
set res_reg=true;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_consulta` (IN `nom` VARCHAR(100), IN `apel` VARCHAR(100), IN `d` CHAR(8), IN `fec` DATE, IN `cons` VARCHAR(500), OUT `resp` BOOLEAN)  NO SQL
BEGIN
declare exit HANDLER
	for SQLEXCEPTION
BEGIN
rollback;
set resp=false;
end;

start transaction;
INSERT INTO contacto (nombre, apellidos, dni, fecha, consulta) VALUES
(nom, apel, d, fec, cons);
commit;
set resp=true;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_servicio` (IN `idts` INT(8), IN `noms` VARCHAR(50), OUT `resp` BOOLEAN)  BEGIN
declare exit HANDLER
	for SQLEXCEPTION
BEGIN
rollback;
set resp=false;
end;

start transaction;
INSERT INTO servicio (id_tipo_servicio, nom_servicio) VALUES
(idts,noms);
commit;
set resp=true;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_tema` (IN `id_s` INT(8), IN `descr` VARCHAR(300), IN `ft` VARCHAR(300), OUT `res_reg` BOOLEAN)  NO SQL
BEGIN
declare exit HANDLER
	for SQLEXCEPTION
BEGIN
rollback;
set res_reg=false;
end;

start transaction;
INSERT INTO tema (id_servicio, descr_tema, foto) VALUES
(id_s,descr,ft);
commit;
set res_reg=true;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_usuario` (IN `login` VARCHAR(50), IN `clave` VARCHAR(100), IN `decr` VARCHAR(50), OUT `res_reg` BOOLEAN)  NO SQL
BEGIN
declare exit HANDLER
	for SQLEXCEPTION
BEGIN
rollback;
set res_reg=false;
end;

start transaction;
INSERT INTO usuario (login, clave, descripcion) VALUES
(login,clave,decr);
commit;
set res_reg=true;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_validarUsuario` (IN `v_user` CHAR(20), IN `v_clave` TEXT)  BEGIN
select id_user v1, login v2, clave v3,id_tipo v4, descripcion v5 from  usuario

where login=v_user;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `idacceso` int(10) UNSIGNED NOT NULL,
  `idpagina` int(10) UNSIGNED NOT NULL,
  `estado` smallint(5) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`idacceso`, `idpagina`, `estado`, `id_user`) VALUES
(1, 1, 1, 8),
(2, 2, 1, 9),
(3, 4, 1, 9),
(4, 5, 1, 9),
(5, 3, 1, 9),
(6, 6, 1, 9),
(7, 7, 1, 9),
(8, 8, 1, 9),
(9, 9, 1, 9),
(10, 10, 1, 9),
(11, 11, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` char(8) NOT NULL,
  `fecha` date NOT NULL,
  `consulta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_usuario` int(8) NOT NULL,
  `id_practica` int(8) NOT NULL,
  `fecha` date NOT NULL,
  `intento` int(2) NOT NULL,
  `puntaje` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `idpagina` int(10) UNSIGNED NOT NULL,
  `controlador` varchar(250) CHARACTER SET latin1 NOT NULL,
  `metodo` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`idpagina`, `controlador`, `metodo`) VALUES
(1, 'tema', 'index'),
(2, 'AdminArticulo', 'index2'),
(3, 'AdminServicio', 'index'),
(4, 'AdminTema', 'index'),
(5, 'PortadaAdmin', 'index'),
(6, 'AdminArticulo2', 'index'),
(7, 'AdminServicio', 'doList'),
(8, 'AdminServicio', 'doSave'),
(9, 'AdminTema', 'doList'),
(10, 'AdminTema', 'doSave'),
(11, 'AdminArticulo2', 'doSave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica`
--

CREATE TABLE `practica` (
  `id_practica` int(8) NOT NULL,
  `id_tema` int(8) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `articulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(8) NOT NULL,
  `id_practica` int(8) NOT NULL,
  `nro_orden` int(2) NOT NULL,
  `preg` varchar(500) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(8) NOT NULL,
  `id_tipo_servicio` int(8) NOT NULL,
  `nom_servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `id_tipo_servicio`, `nom_servicio`) VALUES
(1, 1, 'Zoom'),
(2, 1, 'Google Meet'),
(3, 1, 'BibBlueButton'),
(4, 2, 'TeamViewer'),
(5, 2, 'Anydesk'),
(10, 2, 'Discord'),
(11, 1, 'Whatsapp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(8) NOT NULL,
  `id_servicio` int(8) NOT NULL,
  `descr_tema` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `id_servicio`, `descr_tema`, `foto`) VALUES
(12, 1, 'Mi primera reunión en Zoom', '1608421786_2a01974c9e610f12cc86.png'),
(13, 2, 'Comenzando con Google Meet', '1608422735_01d296ae2f31d4110211.jpg'),
(14, 1, 'Hacer una reunión de trabajo', '1608426380_1a4b81d88de808394403.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `id_tipo_servicio` int(8) NOT NULL,
  `nom_tipo_servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id_tipo_servicio`, `nom_tipo_servicio`) VALUES
(1, 'Videoconferencia'),
(2, 'Conexiones Remotas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clave` text CHARACTER SET latin1 NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `login`, `clave`, `id_tipo`, `descripcion`) VALUES
(8, 'jperez@gmail.com', '$2y$10$1uMxVboNrzjI4wtU8Ykqxeu8p5i9gsms6wmQ.12mFGub5g6FUpJLW', 2, 'Usuario Perez'),
(9, 'g.sandoval@gmail.com', '$2y$10$1uMxVboNrzjI4wtU8Ykqxeu8p5i9gsms6wmQ.12mFGub5g6FUpJLW', 1, 'Usuario Administrador'),
(15, 'hgbimar@gmail.com', '12345678', 0, 'Billy Marvin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`idacceso`),
  ADD KEY `idpagina` (`idpagina`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`idpagina`);

--
-- Indices de la tabla `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`id_practica`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`id_tipo_servicio`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `idacceso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `idpagina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `practica`
--
ALTER TABLE `practica`
  MODIFY `id_practica` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `id_tipo_servicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`idpagina`) REFERENCES `paginas` (`idpagina`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
