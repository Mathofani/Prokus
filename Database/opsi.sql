-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2013 at 02:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gita savana`
--

-- --------------------------------------------------------

--
-- Table structure for table `opsi`
--

CREATE TABLE IF NOT EXISTS `opsi` (
  `kode_option` int(1) NOT NULL AUTO_INCREMENT,
  `nama_option` varchar(20) NOT NULL,
  `image_option` varchar(100) NOT NULL,
  `deskripsi_option` text NOT NULL,
  PRIMARY KEY (`kode_option`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `opsi`
--

INSERT INTO `opsi` (`kode_option`, `nama_option`, `image_option`, `deskripsi_option`) VALUES
(8, 'information', '-', 'student center ruang lt 3 ruang 3.45 '),
(9, 'profile', '-', ' '),
(10, 'banner', '100_4253.JPG', 'produksi 2012'),
(11, 'banner', '100_4241.JPG', 'Seminar perpus nasional- CH2012'),
(12, 'banner', '100_4253.JPG', 'produksi 2012'),
(13, 'banner', '100_4253.JPG', 'produksi 2012'),
(14, 'banner', '100_4298.JPG', 'Seminar perpus nasional- CH2012');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
