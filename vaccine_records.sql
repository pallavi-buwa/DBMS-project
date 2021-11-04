-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2021 at 10:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `serial_no` int(10) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES
(1, 'What is corona virus?', 'Corona viruses are a large family of viruses'),
(2, 'Symptoms of COVID-19?', 'Fever, tiredness, and dry cough'),
(3, 'How does COVID-19 spread?', 'People can catch COVID-19 from others via contact');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `h_id` int(10) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `pin`, `address`) VALUES
(10, '', 411045, 'Prakrtii society balewadi'),
(11, '', 411057, 'Blue Ridge Hinjewadi'),
(12, '', 411050, 'BHS road park granduer');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_vacc`
--

DROP TABLE IF EXISTS `hospital_vacc`;
CREATE TABLE IF NOT EXISTS `hospital_vacc` (
  `h_id` int(10) NOT NULL,
  `age_criteria` varchar(20) NOT NULL,
  `time_slots` varchar(20) NOT NULL,
  `capacity` int(5) NOT NULL,
  `vac_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`h_id`,`age_criteria`),
  KEY `vac_id` (`vac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_vacc`
--

INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES
(10, 'satisfied', '4:00-5:00 pm', 12, 111),
(11, 'satisfied', '10:00-11:00 am', 35, 112),
(12, 'satisfied', '7:00-8:00 pm', 90, 110);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `pt_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`pt_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pt_id`, `email`, `password`) VALUES
(1, 'pallavi@gmail.com', 'abc123'),
(2, 'archisha@gmail.com', 'xyz123'),
(3, 'admin@gmail.com', 'admin123'),
(4, 'emily@gmail.com', 'emily123');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `aadhaar` int(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `vacc_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vacc_id` (`vacc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `mobile`, `email`, `address`, `aadhaar`, `age`, `gender`, `vacc_id`) VALUES
(1, 'Pallavi', 915899615, 'pallavi@gmail.com', 'Kalyani Road', 457770001, 20, 'Female', 112),
(2, 'Archisha', 715822615, 'pallavi@gmail.com', 'Balewadi Road', 997770001, 20, 'Female', 111),
(3, 'Admin', 715822615, 'admin@gmail.com', 'Baner Road', 697761201, 20, 'Female', 110),
(4, 'Emily', 1234567890, 'emily@gmail.com', 'Holly Lane', 1234567, 20, 'F', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_status1`
--

DROP TABLE IF EXISTS `vaccination_status1`;
CREATE TABLE IF NOT EXISTS `vaccination_status1` (
  `vacc_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `h_id` int(10) DEFAULT NULL,
  `date_taken` date DEFAULT NULL,
  PRIMARY KEY (`vacc_id`),
  KEY `type` (`type`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination_status1`
--

INSERT INTO `vaccination_status1` (`vacc_id`, `type`, `h_id`, `date_taken`) VALUES
(110, 'Covaxin', 12, '2021-07-10'),
(111, 'Covishield', 10, '2021-05-10'),
(112, 'Pfizer', 11, '2021-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_status2`
--

DROP TABLE IF EXISTS `vaccination_status2`;
CREATE TABLE IF NOT EXISTS `vaccination_status2` (
  `vacc_id` int(10) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `h_id` int(10) DEFAULT NULL,
  `date_taken` date DEFAULT NULL,
  PRIMARY KEY (`vacc_id`),
  KEY `type` (`type`),
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination_status2`
--

INSERT INTO `vaccination_status2` (`vacc_id`, `type`, `h_id`, `date_taken`) VALUES
(110, 'Covaxin', 12, '2021-10-10'),
(111, 'Covishield', 10, '2021-08-10'),
(112, 'Pfizer', 11, '2021-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;
CREATE TABLE IF NOT EXISTS `vaccines` (
  `vac_id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`vac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vac_id`, `type`) VALUES
(111, 'Covishield'),
(112, 'Covaxin'),
(113, 'Pfizer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
