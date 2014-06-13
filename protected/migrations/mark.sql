-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2014 at 04:06 PM
-- Server version: 5.1.67-rel14.3-log
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zeljoaut_plac`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL,
  `link` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `name`, `link`) VALUES
(1, 'Alfa Romeo', NULL),
(2, 'Audi', NULL),
(3, 'BMW', NULL),
(4, 'Citroën', NULL),
(5, 'Fiat', NULL),
(6, 'Ford', NULL),
(7, 'Opel', NULL),
(8, 'Peugeot', NULL),
(9, 'Renault', NULL),
(10, 'Seat', NULL),
(11, 'Volkswagen', NULL),
(12, 'Škoda', NULL),
(13, 'Mercedes Benz', NULL),
(14, 'Nissan', NULL),
(17, 'Ostalo', NULL),
(18, 'GMC', NULL),
(19, 'Volvo', NULL),
(20, 'Toyota', NULL),
(21, 'Opel', NULL),
(22, 'Škoda', NULL),
(23, 'Audi', NULL),
(24, 'Subaru', NULL),
(25, 'Smart', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
