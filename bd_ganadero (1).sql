-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 05:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_ganadero`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(4) NOT NULL,
  `nombre_animal` text NOT NULL,
  `sexo` text NOT NULL,
  `id_lote` int(11) NOT NULL,
  `p_peso` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `ultimo_peso` date NOT NULL,
  `gdp_grs` int(11) NOT NULL,
  `ganancias_kgs` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad_meses` int(11) NOT NULL,
  `meses_prenez` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id_animal`, `nombre_animal`, `sexo`, `id_lote`, `p_peso`, `peso`, `ultimo_peso`, `gdp_grs`, `ganancias_kgs`, `fecha_nacimiento`, `edad_meses`, `meses_prenez`, `id_raza`, `id_estado`) VALUES
(1, 'ggg', 'fhdf', 21, 35, 46, '2019-04-02', 45, 78, '2019-03-07', 19, 2, 1, 2),
(68, 'fbd', 'fhd', 3, 232, 334, '2019-04-11', 88, 46, '2019-04-10', 23, 35, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lote`
--

CREATE TABLE `lote` (
  `id_lote` int(11) NOT NULL,
  `nombre_lote` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lote`
--

INSERT INTO `lote` (`id_lote`, `nombre_lote`, `descripcion`) VALUES
(2, 'SUR', 'si');

-- --------------------------------------------------------

--
-- Table structure for table `raza`
--

CREATE TABLE `raza` (
  `id_raza` int(11) NOT NULL,
  `nombre_raza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `email`, `password`, `nombre`, `apellido`) VALUES
(1, 'admin@gmail.com', 'admin', 'SOFTWARE ', 'GANADERO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`id_lote`);

--
-- Indexes for table `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lote`
--
ALTER TABLE `lote`
  MODIFY `id_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `raza`
--
ALTER TABLE `raza`
  MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
