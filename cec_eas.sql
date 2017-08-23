-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 10:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cec_eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `department` varchar(10) NOT NULL,
  `role` varchar(30) NOT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `id_admin` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `email`, `name`, `password`, `department`, `role`) VALUES
(1, 'admin', 'admin@cec.org', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'CSE', 'admin'),
(2, 'tittuonnet', 'tittu@tittu.com', 'Tittu Varghese', '827ccb0eea8a706c4c34a16891f84e7b', 'CSE', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class_rooms`
--

CREATE TABLE IF NOT EXISTS `class_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` int(11) NOT NULL,
  `rows` char(5) NOT NULL,
  `column` char(5) NOT NULL,
  KEY `classroom_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `class_rooms`
--

INSERT INTO `class_rooms` (`id`, `room_number`, `rows`, `column`) VALUES
(1, 201, '5', '5'),
(2, 202, '5', '5'),
(3, 203, '5', '5'),
(4, 204, '5', '5'),
(5, 205, '5', '5'),
(6, 206, '5', '5'),
(7, 207, '5', '5'),
(8, 208, '5', '5'),
(9, 209, '5', '5'),
(10, 210, '5', '5'),
(11, 301, '5', '5'),
(12, 302, '5', '5'),
(13, 303, '5', '5'),
(14, 304, '5', '5'),
(15, 305, '5', '5'),
(16, 306, '5', '5'),
(17, 307, '6', '6'),
(18, 308, '6', '6'),
(19, 308, '6', '6'),
(20, 309, '6', '6'),
(21, 310, '6', '6'),
(22, 401, '6', '6'),
(23, 402, '6', '6'),
(24, 403, '6', '6'),
(25, 404, '7', '7'),
(26, 405, '6', '6'),
(27, 406, '7', '7'),
(28, 407, '6', '6'),
(29, 408, '7', '7'),
(30, 409, '6', '6'),
(31, 509, '10', '10'),
(32, 508, '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE IF NOT EXISTS `staff_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(10) NOT NULL,
  KEY `staff_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE IF NOT EXISTS `student_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yoa` char(5) NOT NULL,
  `sem` char(5) NOT NULL,
  `department` char(10) NOT NULL,
  `batch` char(3) NOT NULL,
  `admn` varchar(30) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` char(3) NOT NULL,
  `pa` char(6) NOT NULL DEFAULT 'false',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `student_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
