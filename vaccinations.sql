-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2021 at 04:27 PM
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
-- Database: `vaccinations`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `serial_no` int(10) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES
(1, 'What is COVID-19?', 'COVID-19 is a disease caused by a virus called SARS-CoV-2. Most people with COVID-19 have mild symptoms, but some people can become severely ill.'),
(2, 'How does the virus spread?', 'COVID-19 spreads when an infected person breathes out droplets and very small particles that contain the virus. These droplets and particles can be breathed in by other people or land on their eyes, noses, or mouth. In some circumstances, they may contaminate surfaces they touch.'),
(3, 'How can I take care?', 'Handwashing is one of the best ways to protect yourself and your family from getting sick. Wash your hands often with soap and water for at least 20 seconds, especially after blowing your nose, coughing, or sneezing; going to the bathroom; and before eating or preparing food.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `h_id` int(10) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES
(170, 'Sahyadri', 'Erandwane Deccan Gymkhana'),
(210, 'Jehangir', '32, Sassoon Road'),
(420, 'Shree Hospital', 'Gulmohar Society, Kharadi'),
(540, 'Ruby Hall', '40, Sasoon Road'),
(560, 'Inamdar Hospital', 'Fatima Nagar Wanowarie'),
(780, 'Noble Hospital', '153, Magarpatta City Road Hadapsar'),
(840, 'Poona Hospital', ' L B Shastri Road');

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
  PRIMARY KEY (`h_id`,`age_criteria`,`time_slots`),
  KEY `vac_id` (`vac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_vacc`
--

INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES
(210, '18+', '8am to 10am', 250, 1890),
(210, '45+', '3pm to 5pm', 150, 1621),
(420, '45+', '1pm to 2pm', 50, 6755),
(420, '45+', '2pm to 4pm', 100, 1621),
(540, '45+', '12pm to 6pm', 500, 6755),
(560, '18+', '1pm to 5pm', 400, 1621),
(560, '18+', '5pm to 7pm', 200, 1890),
(780, '18+', '5pm to 7pm', 350, 7693);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `pt_id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`pt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pt_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'ADMIN'),
(2, 'pallavi@gmail.com', 'abc123'),
(3, 'archisha@gmail.com', 'xyz123');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `mobile`, `email`, `address`, `aadhaar`, `age`, `gender`, `vacc_id`) VALUES
(1, 'Admin', 0, 'admin@gmail.com', 'NA', 0, 20, 'Female', NULL),
(2, 'Pallavi Buwa', 1234567890, 'pallavi@gmail.com', 'Kalyani Nagar', 1122334455, 21, 'F', 1),
(3, 'Archisha Shukla', 987654321, 'archisha@gmail.com', 'Baner Road', 1144332266, 20, 'F', NULL);

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
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination_status1`
--

INSERT INTO `vaccination_status1` (`vacc_id`, `type`, `h_id`, `date_taken`) VALUES
(1, 'Covaxin', 210, '2021-04-02');

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
  KEY `h_id` (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination_status2`
--

INSERT INTO `vaccination_status2` (`vacc_id`, `type`, `h_id`, `date_taken`) VALUES
(1, 'Covaxin', 560, '2021-07-01');

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
(1621, 'Covishield'),
(1890, 'Covaxin'),
(6755, 'Pfizer'),
(7693, 'Sputnik V');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital_vacc`
--
ALTER TABLE `hospital_vacc`
  ADD CONSTRAINT `hospital_vacc_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hospital_vacc_ibfk_2` FOREIGN KEY (`vac_id`) REFERENCES `vaccines` (`vac_id`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`pt_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`vacc_id`) REFERENCES `vaccination_status1` (`vacc_id`) ON DELETE SET NULL;

--
-- Constraints for table `vaccination_status1`
--
ALTER TABLE `vaccination_status1`
  ADD CONSTRAINT `vaccination_status1_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`) ON DELETE SET NULL;

--
-- Constraints for table `vaccination_status2`
--
ALTER TABLE `vaccination_status2`
  ADD CONSTRAINT `vaccination_status2_ibfk_1` FOREIGN KEY (`vacc_id`) REFERENCES `vaccination_status1` (`vacc_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vaccination_status2_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hospital` (`h_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
