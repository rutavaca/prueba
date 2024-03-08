-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2024 a las 04:33:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ruta_vacacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_pro` int(6) NOT NULL,
  `nit` int(20) NOT NULL,
  `nombre_pro` varchar(200) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `email_pro` varchar(40) NOT NULL,
  `telefono_pro` int(20) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `estado_pro` varchar(200) NOT NULL,
  `foto_pro` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `documento` bigint(22) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `foto` varchar(140) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `documento`, `nombres`, `apellidos`, `email`, `telefono`, `contrasena`, `rol`, `estado`, `foto`, `fecha_creacion`) VALUES
(1, 0, '', '', '', 0, 'Seleccione una opción', 'd41d8cd98f00b204e980', 'Pendiente', '', '2030-01-24'),
(2, 136562, 'Maria', 'Mendez', 'dfhdfh@gmail.com', 2365432362, 'Cliente', 'd41d8cd98f00b204e980', 'Pendiente', '', '2024-01-30'),
(11, 1000515581, 'Angela', 'Cortés', 'anva481@gmail.com', 3132956016, '705fac4e234e3fa422732118ec0e346a', 'Administrador', 'Activo', '../../Uploads/users/Picsart_23-11-24_20-46-33-702.jpg', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_pro` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
