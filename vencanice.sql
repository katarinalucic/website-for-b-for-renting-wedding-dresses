-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 01:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vencanice`
--

-- --------------------------------------------------------

--
-- Table structure for table `kolekcija`
--

CREATE TABLE IF NOT EXISTS `kolekcija` (
  `kolekcijaid` int(11) NOT NULL,
  `kolekcijanaziv` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kolekcija`
--

INSERT INTO `kolekcija` (`kolekcijaid`, `kolekcijanaziv`) VALUES
(10, 'Pronovias'),
(20, 'Odivice'),
(30, 'White One');

-- --------------------------------------------------------

--
-- Table structure for table `kreator`
--

CREATE TABLE IF NOT EXISTS `kreator` (
  `kreatorid` int(11) NOT NULL,
  `kreatorime` text COLLATE utf8_unicode_ci NOT NULL,
  `kreatorprezime` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kreator`
--

INSERT INTO `kreator` (`kreatorid`, `kreatorime`, `kreatorprezime`) VALUES
(1, 'Vera', 'Wang'),
(2, 'San', 'Patrick'),
(3, 'Rosa', 'Clara'),
(4, 'Oscar', 'De La Renta'),
(5, 'Romona', 'Keveza');

-- --------------------------------------------------------

--
-- Table structure for table `vencanica`
--

CREATE TABLE IF NOT EXISTS `vencanica` (
  `vencanicaid` int(11) NOT NULL AUTO_INCREMENT,
  `vencanicanaziv` text COLLATE utf8_unicode_ci NOT NULL,
  `kroj` text COLLATE utf8_unicode_ci NOT NULL,
  `vencanicakreatorid` int(11) NOT NULL,
  `vencanicakolekcijaid` int(11) NOT NULL,
  PRIMARY KEY (`vencanicaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=801 ;

--
-- Dumping data for table `vencanica`
--

INSERT INTO `vencanica` (`vencanicaid`, `vencanicanaziv`, `kroj`, `vencanicakreatorid`, `vencanicakolekcijaid`) VALUES
(100, 'Bella', 'Princeza', 1, 10),
(110, 'Ella', 'Princeza', 5, 30),
(200, 'Emily', 'Princeza', 4, 30),
(210, 'Lilly', 'Sirena', 5, 20),
(300, 'Jessica', 'Sirena', 3, 20),
(310, 'Lola', 'Sirena', 2, 30),
(400, 'Leila', 'Princeza', 1, 30),
(410, 'Jasmine', 'Sirena', 5, 10),
(500, 'Tiffany', 'Sirena', 2, 10),
(510, 'Lena', 'Princeza', 1, 20),
(600, 'Anabela', 'Princeza', 4, 20),
(610, 'Andrea', 'Sirena', 5, 30),
(700, 'Anita', 'Sirena', 3, 30),
(710, 'Mina', 'Sirena', 5, 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
