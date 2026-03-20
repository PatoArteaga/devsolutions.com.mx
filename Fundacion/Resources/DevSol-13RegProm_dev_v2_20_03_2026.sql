-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 20-03-2026 a las 05:59:44
-- Versión del servidor: 8.0.40
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DevSol-13RegProm_dev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `id_cordinador` int NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider`
--

CREATE TABLE `lider` (
  `id_lider` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_coordinador` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `id_meta` int NOT NULL,
  `nom_meta` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `cant_meta` int NOT NULL,
  `personal_compartida` varchar(20) COLLATE utf8mb3_spanish_ci NOT NULL COMMENT 'agregar id de usuarios con los que se comparte la meta',
  `id_usuario` int NOT NULL,
  `id_coordinador` int NOT NULL,
  `id_lider` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promovidos`
--

CREATE TABLE `promovidos` (
  `id_promovido` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb3_spanish_ci NOT NULL,
  `clave_elector` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `numero` varchar(20) COLLATE utf8mb3_spanish_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8mb3_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `seccion_elec` varchar(20) COLLATE utf8mb3_spanish_ci NOT NULL,
  `dv_mov_comite` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `foto1` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `foto2` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `foto3` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_lider` int NOT NULL,
  `id_coordinador` int NOT NULL,
  `aplica_meta` int NOT NULL,
  `capturo` int NOT NULL,
  `estatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `usuario` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_creacion` date DEFAULT NULL,
  `f_modificacion` date DEFAULT NULL,
  `f_eliminacion` date DEFAULT NULL,
  `img` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nivel` int DEFAULT NULL,
  `estatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='EntidadUsuarios';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellido`, `email`, `pass`, `f_creacion`, `f_modificacion`, `f_eliminacion`, `img`, `nivel`, `estatus`) VALUES
(1, 'pato', 'Larry', 'Arteaga', 'larry@gmail.com', 'lala', '2025-11-13', '2025-11-13', '2025-11-14', '', 0, 1),
(3, 'admin', 'AdminAdmin', 'Admin', 'test@gmail.com', 'admin', '2025-11-01', '2025-11-01', '2025-11-01', NULL, 0, 1),
(4, 'Yesenia', 'Yesenia', 'Cordinador', 'test@gmail.com', 'lala', '2025-11-01', '2025-11-01', NULL, NULL, 1, 1),
(5, 'Marisol', 'Marisol', 'Lider', 'test@gmail.com', 'lider', '2025-11-01', '2025-11-01', NULL, NULL, 2, 1),
(7, 'rosio', 'Rosio', 'Lider', 'test@gmail.com', 'lala', '2026-01-01', NULL, NULL, NULL, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`id_cordinador`);

--
-- Indices de la tabla `lider`
--
ALTER TABLE `lider`
  ADD PRIMARY KEY (`id_lider`);

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id_meta`);

--
-- Indices de la tabla `promovidos`
--
ALTER TABLE `promovidos`
  ADD PRIMARY KEY (`id_promovido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id_cordinador` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lider`
--
ALTER TABLE `lider`
  MODIFY `id_lider` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `id_meta` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `promovidos`
--
ALTER TABLE `promovidos`
  MODIFY `id_promovido` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
