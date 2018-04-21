-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 05:34 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `FabLabDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE IF NOT EXISTS `Log` (
  `L_ID` int(11) NOT NULL AUTO_INCREMENT,
  `U_ID` int(11) NOT NULL,
  `TimeIn` time NOT NULL,
  `TimeOut` time DEFAULT NULL,
  `Visit` varchar(50) DEFAULT NULL,
  `Reason` varchar(50) DEFAULT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`L_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Log`
--

INSERT INTO `Log` (`L_ID`, `U_ID`, `TimeIn`, `TimeOut`, `Visit`, `Reason`, `Date`) VALUES
(1, 1, '00:00:00', '00:00:00', 'ohkjnkkjnjnkjnjknkjnkjn', 'khbjtvhfchfctttfgghhgcgg', '0000-00-00'),
(5, 17, '18:53:57', '00:00:00', 'NULL', 'NULL', '2018-04-18'),
(6, 17, '18:55:39', '00:00:00', 'NULL', 'NULL', '2018-04-19'),
(8, 17, '19:11:42', '00:00:00', 'NULL', 'NULL', '2018-04-19'),
(10, 17, '11:02:54', '11:38:59', 'sd', 'sf', '2018-04-20'),
(11, 18, '11:22:21', '00:00:00', 'NULL', 'NULL', '2018-04-20'),
(12, 17, '11:50:59', '11:51:20', 'Visiting the Lab', 'ksf', '2018-04-20'),
(13, 17, '15:46:50', '00:00:00', 'NULL', 'NULL', '2018-04-20'),
(14, 19, '15:48:28', '00:00:00', 'NULL', 'NULL', '2018-04-20'),
(15, 20, '16:14:48', '00:00:00', 'NULL', 'NULL', '2018-04-20'),
(16, 20, '13:00:23', '00:00:00', 'NULL', 'NULL', '2018-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(15) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Permission` char(1) NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`U_ID`, `FName`, `LName`, `Username`, `Password`, `Permission`) VALUES
(17, 'lyndon ', 'bowen', 'lbowen', '3615ee9db3915dfa41f8e976f96b0348', 'A'),
(19, 'bob ', 'link', 'linkb', 'b5980f100691ac7ab8faa4fd7afd0615', 'U'),
(20, 'lyndon ', 'bowen', 'lyndon', '3615ee9db3915dfa41f8e976f96b0348', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `Visit`
--

CREATE TABLE IF NOT EXISTS `Visit` (
  `V_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(15) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `TimeIn` datetime NOT NULL,
  `TimeOut` datetime DEFAULT NULL,
  `Organization` text NOT NULL,
  `vReason` text NOT NULL,
  PRIMARY KEY (`V_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `Visit`
--

INSERT INTO `Visit` (`V_ID`, `FName`, `LName`, `TimeIn`, `TimeOut`, `Organization`, `vReason`) VALUES
(20, 'lyndon ', 'bowen', '2018-04-16 08:45:58', '2018-04-16 09:45:58', 'Hello', 'Love'),
(23, 'Alisha', 'Malloy', '2018-04-16 08:56:15', '2018-04-16 14:56:15', 'GWC', 'T-Shirt'),
(24, 'lyndon', 'bowen', '2018-04-20 15:01:16', '2018-04-20 15:39:13', 'help', 'sldjf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
