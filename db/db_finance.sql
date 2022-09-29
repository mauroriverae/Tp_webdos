-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 22:10:57
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
-- Base de datos: `db_finance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbb`
--

CREATE TABLE `dbb` (
  `company` varchar(100) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `tiker` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dbb`
--

INSERT INTO `dbb` (`company`, `sector`, `tiker`) VALUES
('3M Co', 'Industriales', 'MMM'),
('Advanced Micro Devices, Inc.', 'Tecnologia', 'AMD'),
('Alphabet Inc Class A', 'Servicios de comunicacion', 'GOOGL'),
('Amazon.com, Inc.', 'Consumo discrecional', 'AMZN'),
('Banco Santander SA', 'Servicios financieros', 'SAN'),
('Barrick Gold Corp', 'Materiales Basicos', 'GOLD'),
('Boeing Co', 'Industriales', 'BA'),
('BP plc', 'Energia', 'BP'),
('Citigroup Inc', 'Servicios financieros', 'C'),
('eBay Inc', 'Consumo discrecional', 'EBAY'),
('Exxon Mobil Corp', 'Energia', 'XOM'),
('First Solar, Inc.', 'Energia', 'FSLR'),
('General Electric Company', 'Industriales', 'GE'),
('Harmony Gold Mining Co.', 'Materiales Basicos', 'HMY'),
('Howmet Aerospace Inc', 'Industriales', 'HWM'),
('Intel Corporation', 'Tecnologia', 'INTC'),
('JD.Com Inc', 'Consumo discrecional', 'JD'),
('JPMorgan Chase & Co', 'Servicios financieros', 'JPM'),
('Lockheed Martin Corporation', 'Industriales', 'LMT'),
('Mercado Libre Inc', 'Consumo discrecional', 'MELI'),
('Meta Platforms Inc', 'Servicios de comunicacion', 'FB'),
('Newmont Corporation', 'Materiales Basicos', 'NEM'),
('NVIDIA Corporation', 'Tecnologia', 'NVDA'),
('Petroleo Brasileiro ADR Reptg 2', 'Energia', 'PBR'),
('QUALCOMM, Inc.', 'Tecnologia', 'QCOM'),
('Snap Inc', 'Servicios de comunicacion', 'SNAP'),
('Texas Instruments Incorporated', 'Tecnologia', 'TXN'),
('Twitter Inc', 'Servicios de comunicacion', 'TWTR'),
('Wells Fargo & Co', 'Servicios financieros', 'WFC'),
('Yamana Gold Inc', 'Materiales Basicos', 'AUY');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dbb`
--
ALTER TABLE `dbb`
  ADD PRIMARY KEY (`company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
