-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2021 at 03:12 PM
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
-- Database: `24gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-03-31 07:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'random1@gmail.com', 1, '27/2/2021', '29/2/2021', 'I love this car', 2, '2021-02-27 11:24:44'),
(2, 'random1@gmail.com', 2, '27/2/2021', '29/2/2021', 'ya', 1, '2021-02-27 15:02:18'),
(3, 'random1@gmail.com', 4, '27/2/2021', '29/2/2021', '444', 2, '2021-02-27 15:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

DROP TABLE IF EXISTS `tblbrands`;
CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'BMW', '2021-02-26 16:51:12', NULL),
(2, 'Aston Martin', '2021-02-27 10:41:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

DROP TABLE IF EXISTS `tblcontactusinfo`;
CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'New Asgard', 'john@gmail.com', '7525724672');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

DROP TABLE IF EXISTS `tblcontactusquery`;
CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'name', 'random1@gmail.com', '999', 'I am so happy', '2021-02-26 16:58:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

DROP TABLE IF EXISTS `tblpages`;
CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', ''),
(2, 'Privacy Policy', 'privacy', 'Privacy'),
(3, 'About Us ', 'aboutus', '										Hello there, we are from Group 3 Section 40. This is our group project.'),
(4, 'FAQs', 'faqs', 'Hello World');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'random', 'random1@gmail.com', 'a583ed37a4e1a34ef8754c3810c5f4f2', '012345678', NULL, NULL, NULL, NULL, '2021-02-26 16:50:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmemberships`
--

DROP TABLE IF EXISTS `tblmemberships`;
CREATE TABLE IF NOT EXISTS `tblmemberships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` float DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmemberships`
--

INSERT INTO `tblmemberships` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'G20 530i', 1, 'This is a family sedan made by BMW', 3000, '+', 2020, 5, '1.jpg', '3.jpg', '2.jpg', '4.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-02-27 10:22:40', '2021-02-27 10:55:23'),
(2, 'DB11', 2, 'Luxury', 5000, '+', 2018, 4, '5.jpg', '6.jpg', '7.jpg', '8.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-02-27 10:45:25', '2021-02-27 10:57:07'),
(3, 'G12 740LE', 1, 'A luxury car that have PHEV mode', 4000, '+', 2019, 5, 'bmw 71.jpg', 'bmw 72.jpg', 'bmw 73.jpg', 'bmw 74.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-02-27 11:17:51', NULL),
(4, 'Continental GT V8', 3, 'A luxury sports car ', 6000, '+', 2020, 4, 'bentley gt 1.jpg', 'Bentley gt 2.jpg', 'bentley gt 3.jpg', 'bentley gt 4.jpg', '', 1, 1, 1, NULL, 1, 1, 1, 1, NULL, 1, NULL, 1, '2021-02-27 11:36:09', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
