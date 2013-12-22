-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 09:09 PM
-- Server version: 5.5.35
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chrisvp9_p4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `typology` varchar(4) NOT NULL,
  `dominant` varchar(2) NOT NULL,
  `auxiliary` varchar(2) NOT NULL,
  `tertiary` varchar(2) NOT NULL,
  `inferior` varchar(2) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `typology`, `dominant`, `auxiliary`, `tertiary`, `inferior`, `token`) VALUES
(1, 'christophermorse', 'e826a940deb6b8c0884eab3e8b7edb604a59237d', 'INFP', 'Fi', 'Ne', 'Si', 'Te', '5a147e2ceb1a9d65e4e5cfe1174888a55fcd378c'),
(4, 'thomasgareau', '2393e4a26e5098a287eb1f14ad349173ffb27d96', 'INTP', 'Ti', 'Ne', 'Si', 'Fe', '0a2954bd926d0b17d80cf9609f880aea0a441473'),
(7, 'halhodson', '2393e4a26e5098a287eb1f14ad349173ffb27d96', 'ENTP', 'Ne', 'Ti', 'Fe', 'Si', '7612d428f9481b3892192815b877db78efbf771b'),
(8, 'vanessawright', 'e826a940deb6b8c0884eab3e8b7edb604a59237d', 'ENFJ', 'Fe', 'Ni', 'Se', 'Ti', '193bd2c9ae19d73034e1a372047cfd17522afa34'),
(9, 'ceciliacruz', 'e826a940deb6b8c0884eab3e8b7edb604a59237d', 'ISFP', 'Fi', 'Se', 'Ni', 'Te', 'e1945f78e75acbf9edf14f2017fcb507e6b4f3c6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
