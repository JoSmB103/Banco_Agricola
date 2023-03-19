-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 05:57:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` varchar(11) NOT NULL,
  `sucursal` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `sucursal`, `nombres`, `apellidos`, `usuario`, `pass`, `correo`) VALUES
('12345678-1', 10, 'Cristian', 'Escobar', 'Santox', '1234', 'santos@gmail.com'),
('12345678-5', 10, 'Yael', 'Matamoros', 'YAMG_77', '1234', 'yaelguzman750@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentabancaria`
--

CREATE TABLE `cuentabancaria` (
  `id` int(11) NOT NULL,
  `idCliente` varchar(11) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `SaldoActual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentabancaria`
--

INSERT INTO `cuentabancaria` (`id`, `idCliente`, `contra`, `SaldoActual`) VALUES
(624, '12345678-1', '1234', 3000),
(792, '12345678-5', '1234', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listamovimientos`
--

CREATE TABLE `listamovimientos` (
  `idMovimiento` int(11) NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `fechaMovimiento` date NOT NULL,
  `tipoMovimiento` int(11) NOT NULL,
  `destinoMovimiento` varchar(11) NOT NULL,
  `montoMovimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listamovimientos`
--

INSERT INTO `listamovimientos` (`idMovimiento`, `idCuenta`, `fechaMovimiento`, `tipoMovimiento`, `destinoMovimiento`, `montoMovimiento`) VALUES
(27, 624, '2023-03-16', 0, '624', 5000),
(28, 624, '2023-03-16', 2, '792', 1000),
(29, 624, '2023-03-16', 2, '792', 500),
(30, 624, '2023-03-16', 2, '792', 500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentabancaria`
--
ALTER TABLE `cuentabancaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listamovimientos`
--
ALTER TABLE `listamovimientos`
  ADD PRIMARY KEY (`idMovimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listamovimientos`
--
ALTER TABLE `listamovimientos`
  MODIFY `idMovimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
