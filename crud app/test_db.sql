-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2014 at 04:42 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_db`
--
CREATE DATABASE IF NOT EXISTS `test_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `test_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `stuid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` text NOT NULL,
  `address` text NOT NULL,
  `sub` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`stuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stuid`, `name`, `gender`, `dob`, `address`, `sub`, `date`) VALUES
(2, 'Baby', 'Felmale', '5/Jun/2011', ' DD ', 'VB.NET', '06/May/13'),
(3, 'Kon Train', 'Male', '4/May/2012', 'SR', 'C++', '06/May/13'),
(4, 'Talarng', 'Male', '5/Jul/2008', ' SR ', 'Graphic Design', '06/May/13'),
(5, 'Kh', 'Felmale', '9/Dec/2008', 'PP', 'C#', '06/May/13'),
(6, 'Rachana', 'Felmale', '7/Jul/1994', 'BMC', 'C', '07/May/13'),
(7, 'Sary', 'Male', '7/Jun/1990', 'Battambang', 'PHP & MySQL', '24/Jun/2014'),
(8, 'Takhei', 'Male', '5/Jul/1991', 'Siem Reap ', 'C#', '24/Jun/2014'),
(9, 'Phirum', 'Male', '5/Apr/1992', 'Phnom Penh', 'C#', '24/Jun/2014'),
(10, 'Reaksmey', 'Felmale', '4/May/1994', 'Kampot', 'Java Script', '24/Jun/2014'),
(11, 'Takhei', 'Male', '1/Jan/2016', 'Phnom Penh', 'VB.NET', '24/Jun/2014'),
(12, 'Sary', 'Male', '2/Mar/2017', 'PP', 'VB.NET', '24/Jun/2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
