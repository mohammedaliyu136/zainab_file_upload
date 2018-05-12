-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2015 at 09:22 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_record`
--

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
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'hadiza', 'hadiza005');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`rec_id`, `rec_topic`, `rec_author`, `rec_year`, `rec_sup`, `rec_dept`, `abstract`, `rec_date`) VALUES
(1, 'DESIGN AND IMPLEMENTATION OF A VIRTUAL LIBRARY', 'GLORIA JACOB', '2015', 'MR. ABDULHAKEEM BAKARE', 1, 'A virtual library is a digital space that keeps and organizes virtual books and their associated documents. It also can refer to a space where the books can be read. These spaces can include computers, mobile devices and the Internet. Some virtual librari', '2015-04-27 02:06:51'),
(2, 'online project record system', 'usman Abdulrauf', '2015', 'mr Bakare Abdulkareem', 1, 'The difficulties students record office usually face in any higher institution, made us to realize that computer assisted record system is the best in processing students record in IMT ENUGU, Enugu.  This will save our school the embarrassment caused by s', '2015-05-27 23:39:49'),
(3, 'CONBUSTION PROFILE  OF FUEL BRIQUETT PRODUCE COCONUT SHELL,MILLET STALK WITH CHARCOL AS BLEND', 'MAHADI BALA', '2015', 'COSMO', 4, '                 Abstract\r\nNearly half the worlds population is dependent on wood as their primary energy source. Therefore with deforestation becoming increasingly prevalent in many regions of the developing world, there is an urgent need to improve comb', '2015-06-16 09:27:26'),
(4, 'project allocation system', 'Abosede_Alagbe_Mary_', '2012', 'mallam Atiku muslim', 1, 'As part of the senior level of many undergraduate degree courses, students are required to undertake some form of project work. A project is an equivalent of two academic units that provides the students with the opportunity to design, undertake or conduc', '2015-08-24 12:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE IF NOT EXISTS `research` (
  `r_id` int(4) NOT NULL AUTO_INCREMENT,
  `r_department` varchar(40) NOT NULL,
  `r_topic` varchar(100) NOT NULL,
  `r_area` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`r_id`, `r_department`, `r_topic`, `r_area`, `date_added`) VALUES
(6, 'COMPUTER SCIENCE', 'COST-BENEFIT ANALYSIS', 'SYSTEM ANALYSIS', '2015-06-29 22:41:32'),
(7, 'CHEMISTRY', 'SKELETON SYSTEM', 'HUMAN ANATOMY', '2015-06-29 22:58:06'),
(8, 'MATHEMATICS', 'the awareness and factors association of breast cancer', 'medical statistic', '2015-06-29 23:03:49'),
(10, 'COMPUTER SCIENCE', 'HUMAN VOICE RECOGNITION', 'EXPERT SYSTEM', '2015-07-07 01:50:49');

-- --------------------------------------------------------

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_id`, `sec_name`, `sec_qty`, `photo`, `sec_date`) VALUES
(1, 'COMPUTER SCIENCE/INFO-TECH', 0, 'CrerarComputerLab-byJasonSmith-1502_ns.jpg', '2015-04-22 15:33:41'),
(2, 'PHYSICS', 0, 'engineer2.jpg', '2015-04-22 15:55:30'),
(3, 'MATHEMATICS', 0, 'iStock_000011954591Small.jpg', '2015-04-22 15:59:49'),
(4, 'CHEMISTRY', 0, '6178chem.jpg', '2015-04-24 00:20:52');

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
  `matriculation_no` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `sex`, `address`, `lga`, `state`, `country`, `phone`, `reg_no`, `dept`, `level`, `password`, `reg_date`) VALUES
(2, 'HADIZA MUSA ABDULLAHI', 'FEMALE', ' NILE HOSTEL', 'KURA', 'KANO', 'NIGERIA', 08114501933, 141103008, 'COMPUTER SCIENCE', 400, 'alsad005', '2018-04-27 15:16:11'),
