-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2016 at 06:11 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fielien`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_index`
--

CREATE TABLE IF NOT EXISTS `page_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `div` varchar(25) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `page_index`
--

INSERT INTO `page_index` (`id`, `div`, `pic`, `judul`, `content`) VALUES
(1, 'promo1', 'promo1.jpg', 'Judul Promo ke-1', 'Isi dari promo ke-1<br>area ini bisa ditambahkan button'),
(2, 'short-story', '', 'Short Story', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(3, 'service', 'img_car.jpg', 'Fitur / Service', 'Area ini berisi fitur atau service yang akan dipromosikan '),
(4, 'another-promo1', 'img_fjords.jpg', 'Another Promo #1', ''),
(5, 'another-promo2', 'img_fjords.jpg', 'Another Promo #2', ''),
(6, 'promo4', 'promo3.jpg', 'Judul Promo ke-2', 'Area ini berisi teks promosi ke-2. Sama seperti promosi ke-1 area ini bisa di tambahkan button untuk menuju page detail promo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
