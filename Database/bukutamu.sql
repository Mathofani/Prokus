-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 03:16 AM
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
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `no` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `HP` varchar(12) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`no`, `nama`, `email`, `HP`, `kota`, `pesan`) VALUES
(1, 'lutvi', 'luth_maendhut@yahoo.com', '085229674692', 'kota', 'k'),
(7, 'y', 'l@gmail.com', '', '', 't'),
(8, 'Lutvia Mathofani', 'luth_maendhut@yahoo.com', '', '', 'Yes'),
(9, 'laila', 'lmarthatilova@yahoo.co.id', '', '', 'uye..'),
(10, 'upi', 'xyz@gmail.com', '', '', 'siip'),
(11, 'lupi', 'lupiyu@gmail.com', '', '', 'ok');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
