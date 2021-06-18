-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2021 a las 04:12:40
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_adsi_noche`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `listarid` (`p_id` INT)  select * from tb_ejemplo where id=p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsulta` (IN `p_id` INT, OUT `estado` SMALLINT)  NO SQL
SELECT * FROM tb_ejemplo WHERE tb_ejemplo.id = p_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spNuevo` (IN `p_id` INT, IN `p_nombre` VARCHAR(100), IN `p_apellido` VARCHAR(100), IN `p_genero` VARCHAR(5), OUT `estado` VARCHAR(250))  NO SQL
IF (SELECT COUNT(p_id) FROM tb_ejemplo WHERE id=p_id) = 1 THEN SELECT "0";
else
INSERT INTO tb_ejemplo(id,nombre,apellido,genero)
VALUES(p_id,p_nombre,p_apellido,p_genero);
SELECT "1";
end if$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `SALUDO` (`nombre` VARCHAR(20), `apellido` VARCHAR(50)) RETURNS VARCHAR(270) CHARSET utf8mb4 begin
    declare msg varchar(250);
    set msg= "";
        return concat(msg," ",nombre, " ", apellido);
    end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `sumar` (`numero1` INT, `numero2` INT) RETURNS INT(11) begin 


	return numero1 + numero2;

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ejemplo`
--

CREATE TABLE `tb_ejemplo` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_ejemplo`
--

INSERT INTO `tb_ejemplo` (`id`, `nombre`, `apellido`, `genero`) VALUES
(1, 'Shea', 'Castro', '0'),
(2, 'Nomlanga', 'Roman', '0'),
(3, 'Angelica', 'Vasquez', '0'),
(4, 'Larissa', 'Blackburn', '0'),
(5, 'Daniel', 'Young', '1'),
(6, 'Kennan', 'Randolph', '1'),
(7, 'George', 'Langley', '1'),
(8, 'Lamar', 'Burt', '1'),
(9, 'George', 'Gilmore', '0'),
(10, 'Quail', 'Wagner', '0'),
(11, 'Jeanette', 'Mcdowell', '0'),
(12, 'Josiah', 'Ware', '1'),
(13, 'Meredith', 'Montgomery', '0'),
(14, 'Jael', 'Ortiz', '1'),
(15, 'Chaney', 'Alexander', '1'),
(16, 'Jin', 'Sampson', '0'),
(17, 'Davis', 'Santos', '0'),
(18, 'Helen', 'Castillo', '0'),
(19, 'Graham', 'Mcdowell', '1'),
(20, 'Gretchen', 'Ewing', '0'),
(21, 'Lev', 'Abbott', '1'),
(22, 'Cally', 'Sweeney', '1'),
(23, 'Kevin', 'Dunlap', '1'),
(24, 'Forrest', 'Trujillo', '0'),
(25, 'Cheyenne', 'Gilmore', '1'),
(26, 'Risa', 'Guerra', '0'),
(27, 'Wesley', 'Moreno', '0'),
(28, 'Lamar', 'Mullins', '0'),
(29, 'Emerson', 'Watts', '0'),
(30, 'Rahim', 'Dominguez', '0'),
(31, 'Jada', 'Murray', '0'),
(32, 'Daquan', 'Rowland', '0'),
(33, 'Dai', 'Daugherty', '1'),
(34, 'Cairo', 'Cook', '1'),
(35, 'Gisela', 'Medina', '1'),
(36, 'Iola', 'Ball', '0'),
(37, 'Hollee', 'Drake', '1'),
(38, 'Lamar', 'Grimes', '0'),
(39, 'Kylie', 'Foreman', '1'),
(40, 'Blaine', 'Mercado', '1'),
(41, 'Derek', 'Mcgowan', '0'),
(42, 'Chadwick', 'Becker', '0'),
(43, 'Kato', 'Horton', '1'),
(44, 'Gloria', 'Gould', '0'),
(45, 'Odette', 'Kent', '1'),
(46, 'Len', 'Mooney', '0'),
(47, 'Rafael', 'Bowen', '0'),
(48, 'Kaden', 'Harvey', '0'),
(49, 'Avram', 'Conner', '0'),
(50, 'Pascale', 'Barry', '0'),
(51, 'Sigourney', 'Nash', '1'),
(52, 'Trevor', 'Mathis', '1'),
(53, 'Joseph', 'Owens', '0'),
(54, 'Keegan', 'Oliver', '0'),
(55, 'Palmer', 'Pennington', '1'),
(56, 'Eric', 'Conner', '1'),
(57, 'Bo', 'Middleton', '1'),
(58, 'Willow', 'Hammond', '0'),
(59, 'Ross', 'Le', '0'),
(60, 'Zorita', 'Espinoza', '0'),
(61, 'Kieran', 'Hewitt', '0'),
(62, 'Britanney', 'Warner', '1'),
(63, 'Chester', 'Hood', '0'),
(64, 'Jaquelyn', 'Camacho', '0'),
(65, 'Randall', 'Gray', '0'),
(66, 'Sade', 'Gould', '1'),
(67, 'Slade', 'Mcmillan', '1'),
(68, 'Grace', 'Farley', '1'),
(69, 'Dalton', 'Hughes', '1'),
(70, 'Xaviera', 'Blevins', '1'),
(71, 'Dustin', 'Anthony', '1'),
(72, 'Hashim', 'Garrett', '0'),
(73, 'Damian', 'Huber', '0'),
(74, 'Drew', 'Lewis', '0'),
(75, 'Roth', 'Rosales', '1'),
(76, 'Chase', 'Barron', '0'),
(77, 'Melvin', 'Becker', '1'),
(78, 'Emerson', 'Burch', '1'),
(79, 'Hu', 'Burris', '1'),
(80, 'Robert', 'Gill', '0'),
(81, 'Katell', 'Gilbert', '0'),
(82, 'Haviva', 'Sandoval', '1'),
(83, 'Megan', 'Norman', '0'),
(84, 'Hope', 'Gallagher', '1'),
(85, 'Marcia', 'Williamson', '0'),
(86, 'Fitzgerald', 'Cole', '0'),
(87, 'Idona', 'Small', '0'),
(88, 'Priscilla', 'Cherry', '1'),
(89, 'McKenzie', 'Weber', '0'),
(90, 'Suki', 'Hebert', '1'),
(91, 'Jasper', 'Carpenter', '1'),
(92, 'Mikayla', 'Head', '1'),
(93, 'Shay', 'Booth', '0'),
(94, 'Naida', 'Mccarty', '0'),
(95, 'Laith', 'Armstrong', '1'),
(96, 'Warren', 'Macias', '1'),
(97, 'Eden', 'Gibson', '1'),
(98, 'Jane', 'Paul', '0'),
(99, 'Lisandra', 'Hayden', '1'),
(100, 'Kyle', 'Townsend', '1'),
(101, 'Luis Hernando', 'Rozo', '1'),
(165, 'Pepito', 'Perez', '1'),
(196, 'Pepito', 'Perez', '1'),
(848, 'Oscar Andres', 'Rozo Becerra', '1'),
(849, 'Jorge Ivan', 'Rozo', '1'),
(888666, 'Manuel Ricardo', 'Martinez Gomez', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_log`
--

CREATE TABLE `tb_log` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_log`
--

INSERT INTO `tb_log` (`id`, `descripcion`, `fecha`) VALUES
(1, 'Se agrego un nuevo usuario', '2021-04-21'),
(2, 'Se ha borrado un usuario', '2021-04-21'),
(3, 'Se agrego un nuevo usuario', '2021-04-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_login`
--

CREATE TABLE `tb_login` (
  `usu` bigint(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_personas`
--

CREATE TABLE `tb_personas` (
  `docper` bigint(20) NOT NULL,
  `nomper` varchar(50) NOT NULL,
  `apeper` varchar(50) NOT NULL,
  `genper` varchar(1) NOT NULL,
  `fecha_nacer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_personas`
--

INSERT INTO `tb_personas` (`docper`, `nomper`, `apeper`, `genper`, `fecha_nacer`) VALUES
(133, 'jkl', 'abc', 'm', '2018-11-04'),
(12345, 'Laura', 'Rojas', 'F', '1996-08-12'),
(8605500, 'Hernando ', 'Rozo', 'M', '1980-01-23'),
(17303610, 'Oscar', 'Pelaez', 'M', '1988-06-06'),
(123456789, 'Fulano', 'De tal', 'M', '2001-09-06');

--
-- Disparadores `tb_personas`
--
DELIMITER $$
CREATE TRIGGER `trg_borrar` AFTER DELETE ON `tb_personas` FOR EACH ROW INSERT INTO tb_log(id,descripcion,fecha) VALUES(null,'Se ha borrado un usuario', now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_usuarios` AFTER INSERT ON `tb_personas` FOR EACH ROW INSERT INTO tb_log (id,descripcion,fecha) VALUES(null,'Se agrego un nuevo usuario', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_telefonos`
--

CREATE TABLE `tb_telefonos` (
  `numcel` bigint(20) NOT NULL,
  `operador` varchar(30) NOT NULL,
  `docper` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_telefonos`
--

INSERT INTO `tb_telefonos` (`numcel`, `operador`, `docper`) VALUES
(3005796537, 'Movistar', 12345),
(3102004400, 'Claro', 8605500),
(3107723210, 'Claro', 17303610);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_ejemplo`
--
ALTER TABLE `tb_ejemplo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`usu`);

--
-- Indices de la tabla `tb_personas`
--
ALTER TABLE `tb_personas`
  ADD PRIMARY KEY (`docper`);

--
-- Indices de la tabla `tb_telefonos`
--
ALTER TABLE `tb_telefonos`
  ADD PRIMARY KEY (`numcel`),
  ADD KEY `docper_fk` (`docper`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_ejemplo`
--
ALTER TABLE `tb_ejemplo`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876544;

--
-- AUTO_INCREMENT de la tabla `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_telefonos`
--
ALTER TABLE `tb_telefonos`
  ADD CONSTRAINT `tb_telefonos_ibfk_1` FOREIGN KEY (`docper`) REFERENCES `tb_personas` (`docper`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
