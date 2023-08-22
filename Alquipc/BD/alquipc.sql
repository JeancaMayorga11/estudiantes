-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2023 a las 04:27:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alquipc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `ID_Alquiler` int(4) NOT NULL,
  `Alq_FechaI` date DEFAULT NULL,
  `Alq_FechaF` date DEFAULT NULL,
  `Alq_Descripcion` text DEFAULT NULL,
  `Alq_Cantidad` int(50) DEFAULT NULL,
  `Alq_CostoTotal` double DEFAULT NULL,
  `Alq_Deposito` int(11) DEFAULT NULL,
  `Alq_EstadoDevolucion` varchar(10) DEFAULT NULL,
  `Alq_TelefonoEntrega` varchar(10) DEFAULT NULL,
  `Alq_Ubicacion` varchar(50) DEFAULT NULL,
  `Alq_Direccion` varchar(50) DEFAULT NULL,
  `Alq_TotalDescuento` int(9) DEFAULT NULL,
  `Alq_TotalAumento` int(9) DEFAULT NULL,
  `Alq_DiasAdicionales` int(3) DEFAULT NULL,
  `Alq_DiasIniciales` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler_equipos`
--

CREATE TABLE `alquiler_equipos` (
  `ID_Alquiler` int(4) DEFAULT NULL,
  `ID_Equipos` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler_usuario`
--

CREATE TABLE `alquiler_usuario` (
  `ID_Alquiler` int(4) DEFAULT NULL,
  `ID_Usuario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `ID_Equipos` int(10) NOT NULL,
  `Equi_Cantidad` int(3) DEFAULT NULL,
  `Equi_Descripcion` text DEFAULT NULL,
  `Equi_Estado` varchar(15) DEFAULT NULL,
  `Equi_Categorias` varchar(20) DEFAULT NULL,
  `Equi_Imagen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `ID_Reserva` int(6) NOT NULL,
  `Res_Cantidad_Equipos` int(6) DEFAULT NULL,
  `Res_Cantidad_Dias` int(3) DEFAULT NULL,
  `Res_FechaR` date DEFAULT NULL,
  `Estado` varchar(2) DEFAULT NULL,
  `ID_Usuario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_alquiler`
--

CREATE TABLE `reserva_alquiler` (
  `ID_Alquiler` int(4) DEFAULT NULL,
  `ID_Reserva` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_equipos`
--

CREATE TABLE `reserva_equipos` (
  `ID_Equipos` int(10) DEFAULT NULL,
  `ID_Reserva` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` varchar(10) NOT NULL,
  `Usu_Nombre` varchar(30) DEFAULT NULL,
  `Usu_Apellido` varchar(30) DEFAULT NULL,
  `Usu_Email` varchar(50) DEFAULT NULL,
  `Usu_Contrasena` varchar(10) DEFAULT NULL,
  `Usu_Telefono` varchar(10) DEFAULT NULL,
  `Usu_Direccion` varchar(50) DEFAULT NULL,
  `Usu_Rol` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Usu_Nombre`, `Usu_Apellido`, `Usu_Email`, `Usu_Contrasena`, `Usu_Telefono`, `Usu_Direccion`, `Usu_Rol`) VALUES
('1001113638', 'Camilo', 'Rodríguez', 'crodriguezchaparro2@gmail.com', '123', '3212757488', 'calle123 #46-78', 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`ID_Alquiler`);

--
-- Indices de la tabla `alquiler_equipos`
--
ALTER TABLE `alquiler_equipos`
  ADD KEY `ID_Alquiler` (`ID_Alquiler`),
  ADD KEY `ID_Equipos` (`ID_Equipos`);

--
-- Indices de la tabla `alquiler_usuario`
--
ALTER TABLE `alquiler_usuario`
  ADD KEY `ID_Alquiler` (`ID_Alquiler`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`ID_Equipos`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_Reserva`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `reserva_alquiler`
--
ALTER TABLE `reserva_alquiler`
  ADD KEY `ID_Alquiler` (`ID_Alquiler`),
  ADD KEY `ID_Reserva` (`ID_Reserva`);

--
-- Indices de la tabla `reserva_equipos`
--
ALTER TABLE `reserva_equipos`
  ADD KEY `ID_Equipos` (`ID_Equipos`),
  ADD KEY `ID_Reserva` (`ID_Reserva`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler_equipos`
--
ALTER TABLE `alquiler_equipos`
  ADD CONSTRAINT `alquiler_equipos_ibfk_1` FOREIGN KEY (`ID_Alquiler`) REFERENCES `alquiler` (`ID_Alquiler`),
  ADD CONSTRAINT `alquiler_equipos_ibfk_2` FOREIGN KEY (`ID_Equipos`) REFERENCES `equipos` (`ID_Equipos`);

--
-- Filtros para la tabla `alquiler_usuario`
--
ALTER TABLE `alquiler_usuario`
  ADD CONSTRAINT `alquiler_usuario_ibfk_1` FOREIGN KEY (`ID_Alquiler`) REFERENCES `alquiler` (`ID_Alquiler`),
  ADD CONSTRAINT `alquiler_usuario_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`);

--
-- Filtros para la tabla `reserva_alquiler`
--
ALTER TABLE `reserva_alquiler`
  ADD CONSTRAINT `reserva_alquiler_ibfk_1` FOREIGN KEY (`ID_Alquiler`) REFERENCES `alquiler` (`ID_Alquiler`),
  ADD CONSTRAINT `reserva_alquiler_ibfk_2` FOREIGN KEY (`ID_Reserva`) REFERENCES `reserva` (`ID_Reserva`);

--
-- Filtros para la tabla `reserva_equipos`
--
ALTER TABLE `reserva_equipos`
  ADD CONSTRAINT `reserva_equipos_ibfk_1` FOREIGN KEY (`ID_Equipos`) REFERENCES `equipos` (`ID_Equipos`),
  ADD CONSTRAINT `reserva_equipos_ibfk_2` FOREIGN KEY (`ID_Reserva`) REFERENCES `reserva` (`ID_Reserva`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
