-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2020 a las 01:57:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neptuno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nombrecategoria` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombrecategoria`, `descripcion`) VALUES
(1, 'Bebidas', 'Gaseosas, caf?, t?, cervezas y maltas'),
(2, 'Condimentos', 'Salsas dulces y picantes, delicias, comida para untar y aderezos'),
(3, 'Reposter?a', 'Postres, dulces y pan dulce'),
(4, 'L?cteos', 'Quesos'),
(5, 'Granos/Cereales', 'Pan, galletas, pasta y cereales'),
(6, 'Carnes', 'Carnes preparadas'),
(7, 'Frutas/Verduras', 'Frutas secas y queso de soja'),
(8, 'Pescado/Marisco', 'Pescados, mariscos y algas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` varchar(5) NOT NULL,
  `NombreCompania` varchar(100) NOT NULL,
  `NombreContacto` varchar(100) DEFAULT NULL,
  `CargoContacto` varchar(100) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Ciudad` varchar(100) DEFAULT NULL,
  `Region` varchar(100) DEFAULT NULL,
  `CodPostal` varchar(100) DEFAULT NULL,
  `Pais` varchar(100) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

