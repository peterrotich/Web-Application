-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 11:33 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customwriting`
--
CREATE DATABASE IF NOT EXISTS `customwriting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `customwriting`;

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE IF NOT EXISTS `messaging` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `messageStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messageSender` (`sender`),
  KEY `messageRecipient` (`recipient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `orderId` varchar(255) NOT NULL,
  `regId` varchar(255) NOT NULL,
  `writerEmail` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `eligible` varchar(255) NOT NULL DEFAULT 'not eligible',
  PRIMARY KEY (`Id`),
  KEY `order_Id` (`orderId`),
  KEY `reg_Id` (`regId`),
  KEY `writer_email` (`writerEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profilepict`
--

CREATE TABLE IF NOT EXISTS `profilepict` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `regId` varchar(255) NOT NULL,
  `fileLocation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reg` (`regId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regId` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dateOfBirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationalId` varchar(255) NOT NULL,
  `telephoneNumber` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `onlineStatus` varchar(255) NOT NULL DEFAULT 'offline',
  `activationStatus` varchar(255) NOT NULL DEFAULT 'not active',
  `accountStatus` varchar(255) NOT NULL DEFAULT 'inactive',
  `userType` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`regId`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regId`, `firstName`, `middleName`, `lastName`, `email`, `nationality`, `dateOfBirth`, `gender`, `nationalId`, `telephoneNumber`, `mobileNumber`, `onlineStatus`, `activationStatus`, `accountStatus`, `userType`, `password`) VALUES
('3ORB', 'Mary', 'K', 'Mwongeli', 'mary@gmail.com', 'Kenyan', '06/03/1989', 'Female', '112211212', '09990909', '778788787', 'offline', 'active', 'active', 'writer', '838f45bc037702b12d58a007b86a48958e30f850'),
('A868', 'Peter', 'Rotich', 'Pish', 'admin@customwriting.com', 'Kenyan', '06/03/1989', 'Male', '27339458', '', '', 'offline', 'not active', 'inactive', 'admin', '838f45bc037702b12d58a007b86a48958e30f850'),
('ct98', 'Peter', '', 'Rotich', 'petterkipp@gmail.com', 'Kenya', '', '', '', '0717087306', '08009009909', 'offline', 'active', 'active', 'client', 'abe7bc8e488d2af88a9461cc952f69dc020c0eab'),
('F3W3', 'Pish', 'K', 'Peter', 'pish@customwriting.com', 'Kenyan', '06/03/1989', 'Male', '27339458', '', '', 'offline', 'active', 'active', 'client', '838f45bc037702b12d58a007b86a48958e30f850'),
('HX9X', 'Peter', 'K', 'Rotich', 'petterkipp@customwritingpros.com', 'Kenyan', '06/03/1989', 'Male', '27339458', '', '', 'online', 'active', 'active', 'writer', '838f45bc037702b12d58a007b86a48958e30f850'),
('LSHL', 'peter', 'm', 'k', 'petter@yahoo.com', 'kenyan', '06/03/1989', 'Male', '889899', '77877', '77666', 'offline', 'not active', 'inactive', 'writer', '3a32d9e90d114a73321ea875257507434964d40d');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `email` varchar(0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl-order`
--

CREATE TABLE IF NOT EXISTS `tbl-order` (
  `orderId` varchar(255) NOT NULL,
  `clientId` varchar(255) NOT NULL,
  `writerId` varchar(255) NOT NULL,
  `paperSubject` varchar(255) NOT NULL,
  `paperTopic` varchar(255) NOT NULL,
  `paperStyle` varchar(255) NOT NULL,
  `languageStyle` varchar(255) NOT NULL,
  `typeOfWork` varchar(255) NOT NULL,
  `urgency` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `numberOfPages` varchar(255) NOT NULL,
  `numberOfsources` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `datePosted` varchar(255) NOT NULL,
  `dateCompleted` varchar(255) NOT NULL,
  `orderStatus` varchar(255) NOT NULL DEFAULT 'not taken',
  `fileLocation` varchar(255) NOT NULL,
  PRIMARY KEY (`orderId`),
  KEY `client_Id` (`clientId`),
  KEY `writer_Id` (`writerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl-order`
--

INSERT INTO `tbl-order` (`orderId`, `clientId`, `writerId`, `paperSubject`, `paperTopic`, `paperStyle`, `languageStyle`, `typeOfWork`, `urgency`, `level`, `numberOfPages`, `numberOfsources`, `total`, `instructions`, `datePosted`, `dateCompleted`, `orderStatus`, `fileLocation`) VALUES
('EJ5SOZH3', 'ct98', 'writerId', 'Journalism, mass media and communication', 'Revolution on media', 'APA', 'English (U.S.)', 'Dissertation', '2 months', 'College', '1', '1', '0.00', 'I need a Thorough job please', '2015-Aug-30 02 08 31', 'dateCompleted', 'not taken', 'fileLocation');

-- --------------------------------------------------------

--
-- Table structure for table `writeraccount`
--

CREATE TABLE IF NOT EXISTS `writeraccount` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `reg_Id` varchar(255) NOT NULL,
  `paypalEmail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `educationLevel` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `sampleEssay` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `regsr_id` (`reg_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `writeraccount`
--

INSERT INTO `writeraccount` (`id`, `reg_Id`, `paypalEmail`, `phone`, `educationLevel`, `skills`, `cv`, `sampleEssay`) VALUES
(1, 'HX9X', '', '', '', '', '', ''),
(2, 'F3W3', '', '', '', '', '', ''),
(3, 'A868', '', '', '', '', '', ''),
(4, '3ORB', '', '', '', '', '', ''),
(5, 'LSHL', '', '', '', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messaging`
--
ALTER TABLE `messaging`
  ADD CONSTRAINT `messageRecipient` FOREIGN KEY (`recipient`) REFERENCES `registration` (`regId`),
  ADD CONSTRAINT `messageSender` FOREIGN KEY (`sender`) REFERENCES `registration` (`regId`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `order_Id` FOREIGN KEY (`orderId`) REFERENCES `tbl-order` (`orderId`),
  ADD CONSTRAINT `reg_Id` FOREIGN KEY (`regId`) REFERENCES `registration` (`regId`),
  ADD CONSTRAINT `writer_email` FOREIGN KEY (`writerEmail`) REFERENCES `registration` (`email`);

--
-- Constraints for table `profilepict`
--
ALTER TABLE `profilepict`
  ADD CONSTRAINT `reg` FOREIGN KEY (`regId`) REFERENCES `registration` (`regId`);

--
-- Constraints for table `writeraccount`
--
ALTER TABLE `writeraccount`
  ADD CONSTRAINT `regsr_id` FOREIGN KEY (`reg_Id`) REFERENCES `registration` (`regId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
