-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2014 at 09:23 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_history`
--

CREATE TABLE IF NOT EXISTS `booking_history` (
  `userid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `source` varchar(20) NOT NULL,
  `time_journey` time NOT NULL,
  `time_booking` time NOT NULL,
  `booking_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`booking_id`),
  UNIQUE KEY `username` (`userid`,`time_journey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `booking_history`
--

INSERT INTO `booking_history` (`userid`, `date`, `source`, `time_journey`, `time_booking`, `booking_id`) VALUES
('y10uc139', '2013-04-25', 'Institute', '20:30:00', '20:07:22', 40),
('y10uc139', '2013-04-26', 'Institute', '18:30:00', '14:57:10', 41);

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE IF NOT EXISTS `bus_details` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `source` varchar(15) NOT NULL DEFAULT '',
  `seat_vacant` int(11) DEFAULT NULL,
  PRIMARY KEY (`date`,`source`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`date`, `time`, `source`, `seat_vacant`) VALUES
('2013-04-25', '06:50:00', 'Ajmeri_gate', 30),
('2013-04-25', '21:30:00', 'Ajmeri_gate', 29),
('2013-04-25', '10:30:00', 'Institute', 30),
('2013-04-25', '15:30:00', 'Institute', 30),
('2013-04-25', '18:30:00', 'Institute', 30),
('2013-04-25', '20:30:00', 'Institute', 30),
('2013-04-26', '18:30:00', 'Institute', 30);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `category`) VALUES
('admin', '1234', 'admin'),
('gate_staff', '5678', 'gate_staff'),
('y10uc095', 'ayushm', 'student'),
('y10uc139', 'kamal', 'student'),
('y10uc238', 'tiwari', 'student'),
('y10uc300', 'shashank', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `userid` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`userid`, `message`, `subject`, `date`) VALUES
('admin', 'your trip limit cannot be exceeded', 'y10uc300', '2013-04-28'),
('admin', 'send 2 gaurds here.\r\n', 'gate_staff', '2013-04-24'),
('admin', 'Your trip limit exceeded.\r\n', 'y10uc139', '2013-04-24'),
('admin', ' hgtfhg', 'y10uc300', '2013-04-25'),
('y10uc139', 'please increase my trip limit.\r\n', 'admin', '2013-04-25'),
('gate_staff', 'Please increase 1 gaurd.\r\n', 'admin', '2013-04-25'),
('gate_staff', 'Icard scanner needed.', 'admin', '2013-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `contact_no.` varchar(12) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(80) NOT NULL,
  `trips_left` int(5) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`userid`, `name`, `sex`, `contact_no.`, `mail_id`, `dob`, `address`, `trips_left`) VALUES
('y10uc069', 'anurag', 'male', '6959939495', 'anuraglfc@gmail.com', '1991-06-23', 'anandvihar', 30),
('y10uc095', 'ayush', 'male', '4557564356', 'ayushm@gmail.com', '1991-02-04', 'jamdoli', 30),
('y10uc139', 'kamal', 'male', '685709470967', 'kamalm@gmail.com', '1991-02-05', 'malviyanagar', 30),
('y10uc238', 'Prateek', 'male', '85756635', 'prateekt@gmail.com', '1992-05-30', 'Suratgarh', 30),
('y10uc300', 'shashank', 'male', '49399884949', 'shashank16@gmail.com', '1991-04-08', 'indravihar', 30);

-- --------------------------------------------------------

--
-- Table structure for table `weekday`
--

CREATE TABLE IF NOT EXISTS `weekday` (
  `S_no` int(11) NOT NULL AUTO_INCREMENT,
  `Institute` time NOT NULL,
  `Ajmeri_gate` time NOT NULL,
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `weekday`
--

INSERT INTO `weekday` (`S_no`, `Institute`, `Ajmeri_gate`) VALUES
(1, '07:30:00', '06:50:00'),
(2, '10:30:00', '08:00:00'),
(3, '15:30:00', '11:30:00'),
(4, '17:10:00', '16:00:00'),
(5, '17:00:00', '17:00:00'),
(6, '18:30:00', '19:30:00'),
(7, '20:30:00', '21:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `weekend`
--

CREATE TABLE IF NOT EXISTS `weekend` (
  `S_no` int(11) NOT NULL AUTO_INCREMENT,
  `Institute` time NOT NULL,
  `Ajmeri_gate` time NOT NULL,
  PRIMARY KEY (`S_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `weekend`
--

INSERT INTO `weekend` (`S_no`, `Institute`, `Ajmeri_gate`) VALUES
(1, '08:30:00', '05:00:00'),
(2, '11:00:00', '11:00:00'),
(3, '14:00:00', '13:00:00'),
(4, '17:15:00', '16:30:00'),
(5, '19:30:00', '18:30:00'),
(6, '20:00:00', '20:30:00'),
(7, '20:30:00', '21:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
