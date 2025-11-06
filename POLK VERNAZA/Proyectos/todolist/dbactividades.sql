-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2025 a las 20:41:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbactividades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  `actividad` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fecha_de_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_de_actualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `id_user`, `actividad`, `descripcion`, `estado`, `fecha_de_creacion`, `fecha_de_actualizacion`, `tipo`) VALUES
(2, NULL, 'Revisión bibliográfica 2025', 'Investigación de fuentes teóricas y antecedentes relacionados.', '1', '2025-10-24 22:38:45', '2025-10-24 22:38:45', NULL),
(3, NULL, 'Deberes de calculo 4', 'Deberes de calculo Completos wq', '0', '2025-10-24 23:31:19', '2025-10-24 23:31:19', NULL),
(4, NULL, 'Deberes de calculo 6', 'Deberes de calculo Completos  Practica nueva ', '2', '2025-10-24 23:32:54', '2025-10-24 23:32:54', NULL),
(5, NULL, 'Valdes Jokabeth', 'Estudiantes del curso de 3a Materia Programación Web Y Diseño', '0', '2025-10-24 23:34:34', '2025-10-24 23:34:34', NULL),
(6, NULL, 'Valdes Jokabeth2', 'Estudiantes del curso de 3a Materia Programación Web Y Diseño', 'Pendiente', '2025-10-24 23:58:56', '2025-10-24 23:58:56', 'Deberes'),
(7, NULL, 'Deberes de calculo 6', 'Deberes de calculo Completos wq', 'Completado', '2025-10-24 23:59:24', '2025-10-24 23:59:24', 'Proyectos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `fecha_de_creación` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_de_actualización` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `email`, `password`, `fecha_de_creación`, `fecha_de_actualización`) VALUES
(1, 'Polk', 'polk@gmail.com', '123', '2025-10-31 21:41:50', '2025-10-31 21:41:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades_user` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
