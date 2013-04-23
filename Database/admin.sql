-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 03:15 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kontak` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `email`, `kontak`, `alamat`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'twins.alfian@gmail.com', '085743735734', 'Jurugentong Banguntapan Bantul', 'admin'),
('asd', '7815696ecbf1c96e6894b779456d330e', 'asd', 't', '1', 'asd', ''),
('lutvia', '2db95e8e1a9267b7a1188556b2013b33', 'via', 'luth_maendhut@yahoo.co.id', '085725526692', 'wng', ''),
('v', '9e3669d19b675bd57058fd4664205d2a', 'lutvi', 'l.mathofani@yahoo.id', '085229050118', 'jogja', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
