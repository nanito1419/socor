-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2019 a las 19:58:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_persona`
--

CREATE TABLE `dato_persona` (
  `ID` int(12) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CEDULA` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PASSWORD` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `IDREFERE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TELEFONO` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `LVL_M` int(3) NOT NULL DEFAULT '1',
  `COSTO` float NOT NULL DEFAULT '30000',
  `CUR_COMPRADOS` int(3) NOT NULL DEFAULT '1',
  `CONFIRMADO` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dato_persona`
--

INSERT INTO `dato_persona` (`ID`, `NOMBRE`, `CEDULA`, `PASSWORD`, `IDREFERE`, `CORREO`, `TELEFONO`, `LVL_M`, `COSTO`, `CUR_COMPRADOS`, `CONFIRMADO`) VALUES
(1, 'SOCOR', '11', '$2y$10$slC01MUuvc0cct58iAhOZu4lNqcv8tNYQpPYwz7KGorJFJtQOBL8a', '1', 'socor@gmail.com', '+5804126484888', 1, 30000, 1, 'NO'),
(2, 'nanito', '20569118', '$2y$10$Rc4a4SYkidY2yUu1XoQUnOqBB92hTh3gP7GTmyzAdmvfUwrXY4Dsq', '1', 'q@gmail.com', '2', 1, 30000, 1, 'SI'),
(3, 'naglys', '433', '$2y$10$mqDIdJdwssXY1YKhoKoS.eWDatkexHumxZjKh9gYWasw6k96rFTMG', '2', 's@gmail.com', '77', 1, 30000, 1, 'NO'),
(4, 'jose manuel', '27', '$2y$10$Bx5Ye3Xqwj7SeFCV5xq/hupv0Vaol5AkAvCifqbDlEwrN3yYeWy2O', '2', 'd@gmail.com', '448', 1, 30000, 1, 'NO'),
(5, 'felix', '19000', '$2y$10$lr4dq88yTf0ZQjcN9j3Kn.8zMSC5C/GDB.E2ltkykvCXG.1nCKXmu', '2', 'f@gmail.com', '8', 1, 30000, 1, 'NO'),
(6, 'gaby', '14000', '$2y$10$KwSZgzJ.hH129pPnj1rR9eWGECD0pUgJRz807k0vgYqo7v6rXwnA.', '2', 'g@gmail.com', '45', 1, 30000, 1, 'NO'),
(7, 'hector', '31', '$2y$10$Vm/hCdiXd/Q3WoILgS.7.ukRSot8PnwS7ysF8GSlYDpcvpUSMBXAO', '3', 'h@gmail.com', '5855', 1, 30000, 1, 'NO'),
(8, 'juan', '30', '$2y$10$KyqoKLqhTss1.PrMWQhSDegc8od9CVeEeK2BvRGBxY/H1Xc223y9O', '3', 'j@gmail.com', '55883', 1, 30000, 1, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_transferencia`
--

CREATE TABLE `dato_transferencia` (
  `NUMERO` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `CORREO` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `ID_TRANSFERENCIA` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PASARELA_PAGO` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_DE_PAGO` date DEFAULT NULL,
  `FECHA_CADUCAR` date DEFAULT NULL,
  `CONFIRMADO` char(2) COLLATE utf8_spanish_ci DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dato_transferencia`
--

INSERT INTO `dato_transferencia` (`NUMERO`, `ID_USER`, `CORREO`, `ID_TRANSFERENCIA`, `PASARELA_PAGO`, `FECHA_DE_PAGO`, `FECHA_CADUCAR`, `CONFIRMADO`) VALUES
(1, 1, 'socor@gmail.com', '1', 'banesco', '2019-04-16', '2019-05-14', 'NO'),
(2, 8, 'j@gmail.com', '1419444', 'banesco', '2019-04-18', '2019-05-16', 'NO'),
(3, 4, 'd@gmail.com', '2211', 'tesoro', '2019-04-18', '2019-05-16', 'NO'),
(4, 2, 'q@gmail.com', '3', 'mercantil', '2019-04-16', '2019-05-14', 'SI'),
(5, 8, 'h@gmail.com', '54519', 'banesco', '2019-04-18', '2019-05-16', 'NO'),
(6, 7, 'h@gmail.com', '8877', 'bnc', '2019-04-18', '2019-05-16', 'NO'),
(7, 5, 'f@gmail.com', '98', 'paypal', '2019-04-18', '2019-05-16', 'NO'),
(8, 6, 'g@gmail.com', '988a', 'airtm', '2019-04-18', '2019-05-16', 'NO'),
(9, 3, 's@gmail.com', 'a125', 'bicentenario', '2019-04-16', '2019-05-14', 'NO'),
(10, 8, 'j@gmail.com', '14194441', 'banesco', '2019-04-18', '2019-05-16', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `ID_RETIRO` int(30) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `CORREO` varchar(35) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `SATOCHIS` float NOT NULL,
  `PLATAFORMA` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `NUMERO_BILLETERA` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `TIPO_DECOBRO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_NOTIFI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dato_persona`
--
ALTER TABLE `dato_persona`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `TELEFONO` (`TELEFONO`) USING BTREE,
  ADD KEY `CORREO` (`CORREO`) USING BTREE;

--
-- Indices de la tabla `dato_transferencia`
--
ALTER TABLE `dato_transferencia`
  ADD PRIMARY KEY (`NUMERO`),
  ADD UNIQUE KEY `ID_TRANSFERENCIA` (`ID_TRANSFERENCIA`),
  ADD KEY `UNICO` (`ID_USER`) USING BTREE;

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`ID_RETIRO`),
  ADD KEY `VINCULAR` (`CORREO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dato_persona`
--
ALTER TABLE `dato_persona`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dato_transferencia`
--
ALTER TABLE `dato_transferencia`
  MODIFY `NUMERO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `ID_RETIRO` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
