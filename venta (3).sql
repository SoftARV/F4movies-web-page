-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 11:34 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venta`
--

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `ID_compra` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `banco` varchar(40) NOT NULL,
  `confirmacion` varchar(40) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `desc`
--

CREATE TABLE `desc` (
  `cantidad` int(11) NOT NULL,
  `ID_pelicula` int(11) NOT NULL,
  `ID_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `ID_compra` int(11) NOT NULL,
  `cedula` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `ID_pelicula` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `censura` varchar(20) NOT NULL,
  `duracion` time NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  `link_imagen` varchar(200) NOT NULL,
  `link_sitio` varchar(200) NOT NULL,
  `director` varchar(40) NOT NULL,
  `precio` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`ID_pelicula`, `nombre`, `categoria`, `genero`, `censura`, `duracion`, `descripcion`, `link_video`, `link_imagen`, `link_sitio`, `director`, `precio`, `activo`) VALUES
(1, 'pelicula1', 'categoria1', 'genero1', 'censura1', '01:00:00', 'descripcion1', 'n/a', 'n/a', 'n/a', 'director1', 1, 1),
(2, 'pelicula2', 'categoria2', 'genero2', 'censura2', '01:00:00', 'descripcion2', 'n/a', 'n/a', 'n/a', 'director2', 2, 1),
(3, 'pelicula3', 'categoria3', 'genero3', 'censura3', '01:00:00', 'descripcion2', 'n/a', 'n/a', 'n/a', 'director3', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `ID_perfil` tinyint(4) NOT NULL,
  `Visualizar_1` tinyint(4) NOT NULL,
  `Cometar` tinyint(4) NOT NULL,
  `Calificar` tinyint(4) NOT NULL,
  `Comprar` tinyint(4) NOT NULL,
  `Visualizar_2` tinyint(4) NOT NULL,
  `Visualizar_3` tinyint(4) NOT NULL,
  `Cometar_2` tinyint(4) NOT NULL,
  `Comprar_2` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID_pelicula` int(11) NOT NULL,
  `cedula` int(9) NOT NULL,
  `calificacion` tinyint(4) NOT NULL,
  `puntuacion` tinyint(4) NOT NULL,
  `comentario` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cedula` int(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `perfil` tinyint(1) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `cedula`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `activo`, `perfil`, `nickname`, `pass`) VALUES
(4, 111111111, 'fulanito', 'fulanito', 'fulanito@gmail.com', 1111111111, 'calle fulanito', 1, 1, 'fulanito', 'e2b11035f6def07b4f99cbfedcb2d131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_compra`);

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`ID_pelicula`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`ID_perfil`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `ID_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `ID_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `ID_perfil` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
