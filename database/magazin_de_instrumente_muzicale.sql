-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 01:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin de instrumente muzicale`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajati`
--

CREATE TABLE `angajati` (
  `coda` int(10) NOT NULL,
  `nume` varchar(20) NOT NULL DEFAULT '',
  `prenume_angajat` varchar(20) NOT NULL DEFAULT '',
  `adresa_angajat` varchar(40) NOT NULL DEFAULT '',
  `parola` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angajati`
--

INSERT INTO `angajati` (`coda`, `nume`, `prenume_angajat`, `adresa_angajat`, `parola`, `username`) VALUES
(1, 'Tecuceanu', 'Eliza', 'str. Costache Negri', 'eliza99', 'elizatec'),
(2, 'Maxim', 'Lavinia', 'str. Gheorghe Asachi', 'admin', 'Laviniaa'),
(3, 'admin', 'admin', 'str. George Cosbuc', 'admin', 'admin'),
(12, 'tecuceanu', 'eliza', 'str Costache Negri', 'eliza99', '');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `codc` int(10) NOT NULL,
  `nume` varchar(20) NOT NULL DEFAULT '',
  `adresa` varchar(40) NOT NULL DEFAULT '0',
  `telefon` int(10) NOT NULL DEFAULT 0,
  `email` varchar(30) NOT NULL,
  `parola` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`codc`, `nume`, `adresa`, `telefon`, `email`, `parola`, `username`) VALUES
(0, 'tecuceanu eliza', 'str.Costache Negri', 757426797, 'tecuceanu.lizza@gmail.com', 'tecuceanueliza', 'eliza99'),
(3, 'admin', '0', 0, 'admin@yahoo.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `cod_comanda` int(10) NOT NULL,
  `data_comanda` date NOT NULL,
  `stare_comanda` varchar(20) NOT NULL DEFAULT '',
  `modalitate_plata` varchar(20) NOT NULL DEFAULT '',
  `codc` int(10) NOT NULL DEFAULT 0,
  `coda` int(10) NOT NULL DEFAULT 0,
  `cod_instrumente` int(10) NOT NULL DEFAULT 0,
  `detalii_comanda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`cod_comanda`, `data_comanda`, `stare_comanda`, `modalitate_plata`, `codc`, `coda`, `cod_instrumente`, `detalii_comanda`) VALUES
(12, '2020-01-19', 'buna', 'cash', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `instrumente`
--

CREATE TABLE `instrumente` (
  `cod_instrumente` int(10) NOT NULL,
  `denumire_instrument` varchar(50) DEFAULT NULL,
  `pret` int(10) DEFAULT NULL,
  `culoare` varchar(50) DEFAULT NULL,
  `marime` varchar(50) DEFAULT NULL,
  `codm` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instrumente`
--

INSERT INTO `instrumente` (`cod_instrumente`, `denumire_instrument`, `pret`, `culoare`, `marime`, `codm`) VALUES
(2, 'pian', 1200, 'Negru', 'mica', NULL),
(10, 'orga', 3500, 'Negru', 'mica', NULL),
(14, 'fluier', 900, 'Negru', 'medie', NULL),
(54, 'pian', 2500, 'Maro', 'mica', NULL),
(56, 'flaut', 1200, 'Maro', 'mica', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marci`
--

CREATE TABLE `marci` (
  `codm` int(10) NOT NULL,
  `denumire_marca` varchar(30) DEFAULT NULL,
  `cod_instrumente` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marci`
--

INSERT INTO `marci` (`codm`, `denumire_marca`, `cod_instrumente`) VALUES
(120, 'yamaha', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tip_instrument`
--

CREATE TABLE `tip_instrument` (
  `id_tip` int(10) NOT NULL,
  `model` varchar(30) DEFAULT NULL,
  `corzi` varchar(30) DEFAULT NULL,
  `cod_instrumente` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tip_instrument`
--

INSERT INTO `tip_instrument` (`id_tip`, `model`, `corzi`, `cod_instrumente`) VALUES
(12, 'cutaway', 'da', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vanzari`
--

CREATE TABLE `vanzari` (
  `id_tranzactie` int(10) NOT NULL,
  `numar_factura` varchar(50) NOT NULL,
  `casier` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `tip` varchar(50) NOT NULL,
  `cantitate` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `nume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`coda`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`codc`);

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`cod_comanda`),
  ADD KEY `id_client` (`codc`),
  ADD KEY `id_angajat` (`coda`),
  ADD KEY `id_produs` (`cod_instrumente`);

--
-- Indexes for table `instrumente`
--
ALTER TABLE `instrumente`
  ADD PRIMARY KEY (`cod_instrumente`),
  ADD KEY `codm` (`codm`);

--
-- Indexes for table `marci`
--
ALTER TABLE `marci`
  ADD PRIMARY KEY (`codm`),
  ADD KEY `cod_instrumente` (`cod_instrumente`);

--
-- Indexes for table `tip_instrument`
--
ALTER TABLE `tip_instrument`
  ADD PRIMARY KEY (`id_tip`),
  ADD KEY `cod_instrumente` (`cod_instrumente`);

--
-- Indexes for table `vanzari`
--
ALTER TABLE `vanzari`
  ADD PRIMARY KEY (`id_tranzactie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
