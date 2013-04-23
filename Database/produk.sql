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
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kode_produk` int(2) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(6) NOT NULL,
  `stock_produk` int(2) NOT NULL,
  `kategori_produk` int(2) NOT NULL,
  `image_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`, `stock_produk`, `kategori_produk`, `image_produk`, `deskripsi_produk`) VALUES
(7, 'peter says denim', 120000, 12, 4, '1.jpg', 'asd'),
(13, '11', 1, 1, 4, 'Untitled-3.jpg', '1'),
(15, 'xyz', 95000, 15, 1, 'Untitled-3.jpg', 'ok'),
(16, 'xyzz', 120000, 50, 1, 'Untitled-3.jpg', 'good');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
