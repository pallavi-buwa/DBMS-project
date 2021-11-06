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
(3, 'How does COVID-19 spread?', 'People can catch COVID-19 from others via contact'),
(4, 'Side effects of vaccine?','Fever, tiredness, and body ache'),
(5, 'Are Vaccines safe?','Yes, made after extensive research');

INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES 
(6, 'What Is a Pandemic?', 'When a disease affects many people'),
(7, 'What Is Long COVID?', 'Covid lasts for long time'), 
(8, 'How Is Coronavirus Treated?', 'Rest, fluids, and fever-reducing medicine.'), 
(9, 'How Do Masks Help?','Mask keeps the virus from reaching others'), 
(10, 'Who Shouldnt Wear a Mask?','Children younger than 2 years old');

INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES 
(11, 'What Is a Variant?', 'When viruses spread they make copies of themselves'),
(12, 'Are Other Variants Spreading?', 'Yes they are');

INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES 
(13, 'Full form of RT-PCR', 'Realtime reverse transcriptasepolymerase reaction'), 
(14, 'Is covid communicable disease?', 'Yes it is');
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
(10, 'ACMH Hospital', 411037, 'Prakrtii society balewadi'),
(11, 'Aaditya Hospital', 412057, 'Blue Ridge Hinjewadi'),
(12, 'Bhagyojaya Hospital', 511050, 'BHS road park granduer'),
(13, 'Jupiter Hospital', 411545, 'Pune Ring Road'),
(14, 'Sahyadri Hospital', 211057, 'Mumbai–Pune Road'),
(15, 'Deccan Hardikar', 455050, 'Dehu Road–Katraj Bypass.'),
(16, 'Om Hospital', 411037, 'Katraj–Manterwadi Bypass'),
(17, 'NRS Hospital', 411085, 'Hinjewadi Road'),
(18, 'Jehangir Hospital', 411050, 'BHS road'),
(19, 'SaiShree Hospital', 411445, 'Aundh'),
(20, 'Orion Hospital', 411058, 'Shivajinagar'),
(21, 'Gupte Hospital', 413050, 'Baner Pashan Road'),
(22, 'IVF Life Line', 411065, 'Wakad'),
(23, 'Ranka Hospital', 422057, 'Kalyani Nagar'),
(24, 'Cloudnine Hospital', 611050, 'Baner Road'),
(25, 'Kamla Nehru', 411022, 'Balewadi Phata'),
(26, 'Apollo Hospital', 312057, 'Mundhwa Bypass'),
(27, 'Inamdar', 411000, 'Camp Road'),
(28, 'Samarth Hospital', 445045, 'Senapati Bapat Road'),
(29, 'Global Hospital', 411857, 'Law College Road'),
(30, 'Navjeevan', 411051, 'FC Road'),
(31, 'Saraswati', 411945, 'JM Road'),
(32, 'Mai Mangeshkar', 461057, 'Laxmi Road'),
(33, 'Anpat Hospital', 471050, 'Pashan–Sus Road'),
(34, 'Symbiosis Hospital', 411245, 'Bhandarkar Road'),
(35, 'Sathe Hospital', 311057, 'Prabhat Road'),
(36, 'Mehta Hospital', 711050, 'North Main Road'),
(37, 'Umarji Hospital', 911045, 'M.G. Road'),
(38, 'Rao Hospital', 411957, 'East Street'),
(39, 'Parvati Hospital', 111050, 'South Main Road'),
(40, 'K K Hospital', 411015, 'Karve Road'),
(41, 'Sancheti Hospital', 311057, 'NDA Road'),
(42, 'Dwarka Hospital', 413050, 'Kumthekar Road');
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
(12, 'satisfied', '7:00-8:00 pm', 90, 110),
(13, 'satisfied', '4:00-5:00 pm', 2, 111),
(14, 'satisfied', '10:00-11:00 am',5, 112),
(15, 'satisfied', '7:00-8:00 pm', 91, 110),
(16, 'satisfied', '4:00-5:00 pm', 121, 111),
(17, 'satisfied', '10:00-11:00 am', 15, 112),
(18, 'satisfied', '7:00-8:00 pm', 17, 110),
(19, 'satisfied', '4:00-5:00 pm', 122, 111),
(20, 'satisfied', '10:00-11:00 am', 335, 112),
(21, 'satisfied', '7:00-8:00 pm', 7, 110),
(22, 'satisfied', '4:00-5:00 pm', 21, 111),
(23, 'satisfied', '10:00-11:00 am', 45, 112),
(24, 'satisfied', '7:00-8:00 pm', 33, 110),
(25, 'satisfied', '4:00-5:00 pm', 99, 111),
(26, 'satisfied', '10:00-11:00 am', 2, 112),
(27, 'satisfied', '7:00-8:00 pm', 8, 110),
(28, 'satisfied', '4:00-5:00 pm', 21, 111),
(29, 'satisfied', '10:00-11:00 am', 115, 112),
(30, 'satisfied', '7:00-8:00 pm', 10, 110),
(31, 'satisfied', '4:00-5:00 pm', 14, 111),
(32, 'satisfied', '10:00-11:00 am', 75, 112),
(33, 'satisfied', '7:00-8:00 pm', 56, 110),
(34, 'satisfied', '4:00-5:00 pm', 120, 111),
(35, 'satisfied', '10:00-11:00 am', 135, 112),
(36, 'satisfied', '7:00-8:00 pm', 910, 110),
(37, 'satisfied', '4:00-5:00 pm', 102, 111),
(38, 'satisfied', '10:00-11:00 am', 35, 112),
(39, 'satisfied', '7:00-8:00 pm', 190, 110),
(40, 'satisfied', '4:00-5:00 pm', 123, 111),
(41, 'satisfied', '10:00-11:00 am', 135, 112),
(42, 'satisfied', '7:00-8:00 pm', 90, 110);
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
(4, 'emily@gmail.com', 'emily123'),
(5, 'anjali@gmail.com', 'abc123'),
(6, 'nair@gmail.com', 'xyz123'),
(7, 'manu@gmail.com', 'admin123'),
(8, 'gaay@gmail.com', 'emily123'),
(9, 'sid@gmail.com', 'abc123'),
(10, 'rahul@gmail.com', 'xyz123'),
(11, 'avinash@gmail.com', 'admin123'),
(12, 'pranav@gmail.com', 'emily123'),
(13, 'shiv@gmail.com', 'abc123'),
(14, 'appu@gmail.com', 'xyz123'),
(15, 'nisha@gmail.com', 'admin123'),
(16, 'sanj@gmail.com', 'emily123');

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
(1, 'Pallavi Buwa', 915899615, 'pallavi@gmail.com', 'Kalyani Road', 457770001, 20, 'Female', 112),
(2, 'Archisha Shukla', 715824415, 'pallavi@gmail.com', 'Balewadi Road', 997770001, 20, 'Female', 111),
(3, 'Admin', 715822615, 'admin@gmail.com', 'Baner Road', 697761201, 20, 'Female', 110),
(4, 'Emily Martins', 1234567890, 'emily@gmail.com', 'Holly Lane', 1234567, 20, 'F', 111),
(5, 'Anjali Dofe', 815899615, 'anjali@gmail.com', 'Wakad Road', 1000001, 22, 'Female', 112),
(6, 'Shreya Nair', 715822616, 'nair@gmail.com', 'Baner Road', 797770001, 19, 'Female', 110),
(7, 'Manaswi Patil', 615822615, 'manu@gmail.com', 'Balewadi Road', 0997761201, 20, 'Female', 110),
(8, 'Gayatri Mokashi', 988888888, 'gaay@gmail.com', 'Pashan Lane', 21234567, 70, 'F', NULL);

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
delete from faqs;
delete from hospital;
delete from hospital_vacc;
delete from login;
delete from patient;
delete from vaccination_status1;
delete from vaccination_status2;
delete from vaccines;

