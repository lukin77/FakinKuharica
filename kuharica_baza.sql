-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2020 at 12:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuharica_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vk_tip_korisnika` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_tip_korisnika` (`vk_tip_korisnika`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `password`, `vk_tip_korisnika`) VALUES
(1, 'Josip', 'Lukin', 'jlukin', '123', 1),
(2, 'Ana', 'Novokmet', 'anovokmet', '123', 2),
(3, 'Josip', 'Josic', 'josip', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `recept`
--

DROP TABLE IF EXISTS `recept`;
CREATE TABLE IF NOT EXISTS `recept` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naslov` varchar(50) NOT NULL,
  `vk_autora` int(11) NOT NULL,
  `vk_vrsta_jela` int(11) NOT NULL,
  `datum_objavljivanja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sastojci` varchar(300) NOT NULL,
  `tekst_recepta` varchar(800) NOT NULL,
  `ocjena` int(11) NOT NULL,
  `br_pregleda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_autora` (`vk_autora`),
  KEY `vk_vrsta_jela` (`vk_vrsta_jela`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recept`
--

INSERT INTO `recept` (`id`, `naslov`, `vk_autora`, `vk_vrsta_jela`, `datum_objavljivanja`, `sastojci`, `tekst_recepta`, `ocjena`, `br_pregleda`) VALUES
(1, 'Spaghetti Carbonara ', 1, 2, '2020-06-04 12:26:15', 'Umak 250mL vrhnja za kuhanje, vrećica parmezana (usitnjenog sira za tjesteninu), jedan češanj češnjaka, peršin, žličica vegete, dva jaja, TJESTENINA 300g špageta, MESO 300g slanine za prženje / pancete / pršuta, ULJE maslinovo ulje, sol', 'U lonac s vodom staviti malo soli i maslinovog ulja. Ubaciti špagete u lonac i kuhati dok ne budu gotovi.\r\nU međuvremenu pripremiti umak za špagete. U posudu izmješati vrhnje za kuhanje, usitnjeni sir, narezani češnjak, peršin, žličicu Vegete, malo soli i dva jaja. Dobro miješati dok ne bude ujednačeno. \r\nU tavu staviti maslinovog ulja i ubaciti narezane slanine/pancete/pršuta. Malo začiniti vegetom dok se peče i na kraju gotov sadržaj tave umiješati u smjesu sa vrhnjem za kuhanje.\r\nGotove špagete procijediti i izmješati sa smjesom od vrhnja. ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

DROP TABLE IF EXISTS `tip`;
CREATE TABLE IF NOT EXISTS `tip` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`id`, `naziv`) VALUES
(1, 'slano'),
(2, 'slatko'),
(3, 'kiselo'),
(4, 'gorko');

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

DROP TABLE IF EXISTS `tip_korisnika`;
CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'autor'),
(3, 'urednik');

-- --------------------------------------------------------

--
-- Table structure for table `tip_recepta`
--

DROP TABLE IF EXISTS `tip_recepta`;
CREATE TABLE IF NOT EXISTS `tip_recepta` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_vrste_jela` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_recepta` (`id_vrste_jela`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_recepta`
--

INSERT INTO `tip_recepta` (`id`, `id_vrste_jela`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_jela`
--

DROP TABLE IF EXISTS `vrsta_jela`;
CREATE TABLE IF NOT EXISTS `vrsta_jela` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vrsta_jela`
--

INSERT INTO `vrsta_jela` (`id`, `naziv`) VALUES
(1, 'predjelo'),
(2, 'glavno jelo'),
(3, 'desert'),
(4, 'salata');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
