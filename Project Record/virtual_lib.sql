-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2015 at 01:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `virtual_lib`
--
CREATE DATABASE IF NOT EXISTS `Project_record` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `virtual_lib`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `rec_id` int(4) NOT NULL AUTO_INCREMENT,
  `rec_topic` varchar(255) NOT NULL,
  `rec_author` varchar(255) NOT NULL,
  `rec_year` varchar(255) NOT NULL,
  `rec_sup` varchar(50) NOT NULL,
  `rec_dept` int(5) NOT NULL,
  `abstract` varchar(255) NOT NULL,
  `rec_date` datetime NOT NULL,
  PRIMARY KEY (`rec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
---------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `sec_id` int(4) NOT NULL AUTO_INCREMENT,
  `sec_name` varchar(255) NOT NULL,
  `sec_qty` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sec_date` datetime NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_id`, `sec_name`, `sec_qty`, `photo`, `sec_date`) VALUES
(1, 'COMPUTER SCIENCE', 0, 'CrerarComputerLab-byJasonSmith-1502_ns.jpg', '2015-04-22 15:33:41'),
(2, 'ENGINEERING/PHYSICS', 0, 'engineer2.jpg', '2015-04-22 15:55:30'),
(3, 'MATHEMATICS', 0, 'iStock_000011954591Small.jpg', '2015-04-22 15:59:49'),
(4, 'CHEMISTRY', 0, '6178chem.jpg', '2015-04-24 00:20:52'),
(5, 'TECHNOLOGY', 0, '4564tech.jpg', '2015-04-24 00:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `sex`, `address`, `lga`, `state`, `country`, `phone`, `reg_no`, `dept`, `level`, `password`, `reg_date`) VALUES
(1, 'GLORIA JACOB', 'FEMALE', 'SENIOR STAFF QUATERS, KSUSTA', 'FAKAI', 'KEBBI', 'NIGERIA', 2147483647, 1110208059, 'INFORMATION TECHNOLOGY', 400, 'gloria', '2015-04-23 23:16:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
