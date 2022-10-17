-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 09:24:23
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
-- Base de datos: `finance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `Company` varchar(200) NOT NULL,
  `Sector` varchar(100) NOT NULL,
  `Tiker` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`Company`, `Sector`, `Tiker`) VALUES
('3M Co', 'Industriales', 'MMM'),
('Advanced Micro Devices, Inc.', 'Tecnologia', 'AMD'),
('Alphabet Inc Class A', 'Servicios de comunicacion', 'GOOGL'),
('Amazon.com, Inc.', 'Consumo discrecional', 'AMZN'),
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
('MercadoLibre Inc', 'Consumo discrecional', 'MELI'),
('Meta Platforms Inc', 'Servicios de comunicacion', 'META'),
('Newmont Corporation', 'Materiales Basicos', 'NEM'),
('NVIDIA Corporation', 'Tecnologia', 'NVDA'),
('Petroleo Brasileiro ADR Reptg 2', 'Energia', 'PBR'),
('QUALCOMM, Inc.', 'Tecnologia', 'QCOM'),
('Snap Inc', 'Tecnologia', 'SNAP'),
('Texas Instruments Incorporated', 'Tecnologia', 'TXN'),
('Twitter Inc', 'Servicios de comunicacion', 'TWTR'),
('Wells Fargo & Co', 'Servicios financieros', 'WFC'),
('Yamana Gold Inc', 'Materiales Basicos', 'AUY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dates`
--

CREATE TABLE `dates` (
  `Tiker` varchar(15) NOT NULL,
  `Indexs` varchar(10) DEFAULT NULL,
  `MarketCap` varchar(60) NOT NULL,
  `Shares` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dates`
--

INSERT INTO `dates` (`Tiker`, `Indexs`, `MarketCap`, `Shares`) VALUES
('AMD', 'NASDAQ100', 'Large Cap ($110.35B)', 1614321000),
('AMZN', 'S&P 500', 'Mega Cap ($1.20T)', 10187560000),
('AUY', 'NYSE', 'Small Cap ($4.21B)', 961068000),
('BA', 'DJIA ', 'Large Cap ($79.24B)', 593811000),
('BP', 'NYSE', 'Large Cap ($88.65B)', 3103835000),
('C', 'S&P 500', 'Large Cap ($84.05B)', 1941921000),
('EBAY', 'S&P 500', 'Medium Cap ($21.21B)', 549368000),
('FSLR', 'NASDAQ-NMS', 'Medium Cap ($14.52B)', 106595000),
('GE', 'S&P 500', 'Large Cap ($70.68B)', 1096553000),
('GOLD', 'NYSE', 'Medium Cap ($26.48B)', 95246000),
('GOOGL', 'S&P 500', 'Mega Cap ($688.44B)', 5996000000),
('HMY', 'NYSE', 'Micro Cap ($1.43B)', 617298000),
('HWM', 'S&P 500', 'Medium Cap ($13.23B)', 415403000),
('INTC', 'DJIA ', 'Large Cap ($111.40B)', 4106000000),
('JD', 'NASDAQ100', 'Large Cap ($82.33B)', 1347807000),
('JPM', 'S&P 500', 'Mega Cap ($317.17B)', 2932572000),
('LMT', 'S&P 500', 'Large Cap ($106.06B)', 265152000),
('MELI', 'NASDAQ100', 'Large Cap ($43.55B)', 50338000),
('META', 'S&P 500', 'Mega Cap ($380.58B)', 2280672000),
('MMM', 'DJIA ', 'Large Cap ($65.09B)', 569604000),
('NEM', 'S&P 500', 'Medium Cap ($33.49B)', 793680000),
('NVDA', 'NASDAQ100', 'Mega Cap ($317.13B)', 2490000000),
('PBR', 'NYSE', 'Large Cap ($45.62B)', 3721227000),
('QCOM', 'NASDAQ100', 'Large Cap ($133.56B)', 1123000000),
('SNAP', 'S&P 500', 'Medium Cap ($17.74B)', 1394701000),
('TWTR', 'S&P 500', 'Medium Cap ($33.10B)', 765246000),
('TXN', 'NASDAQ100', 'Large Cap ($148.75B)', 913707000),
('WFC', 'S&P 500', 'Large Cap ($154.79B)', 3793050000),
('XOM', 'S&P 500', 'Mega Cap ($370.34B)', 4167636000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`Company`);

--
-- Indices de la tabla `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`Tiker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
