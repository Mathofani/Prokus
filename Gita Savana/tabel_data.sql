-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2013 at 04:56 PM
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
-- Table structure for table `tabel_data`
--

CREATE TABLE IF NOT EXISTS `tabel_data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `ukuran` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_upload` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tabel_data`
--

INSERT INTO `tabel_data` (`id`, `nama_file`, `ukuran`, `url`, `tgl_upload`, `keterangan`) VALUES
(7, 'friends.JPG', '29968', './files/friends.JPG', '2010-06-23', 'Logo Teman Blog'),
(6, 'Agusumarna.jpg', '13291', './files/Agusumarna.jpg', '2010-06-23', 'Futu Narsis');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
