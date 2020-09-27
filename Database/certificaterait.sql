-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2020 at 09:28 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificaterait`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `UserName`, `Password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'yash', '123'),
(3, 'add', '34ec78fcc91ffb1e54cd85e4a0924332'),
(4, 'ykk', 'f90ec6f0d663df4d47b5b3c033105a21');

-- --------------------------------------------------------

--
-- Table structure for table `tblguest`
--

DROP TABLE IF EXISTS `tblguest`;
CREATE TABLE IF NOT EXISTS `tblguest` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailAddress` char(100) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguest`
--

INSERT INTO `tblguest` (`ID`, `FirstName`, `LastName`, `EmailAddress`, `CompanyName`, `Password`) VALUES
(40, 'Yash', 'Kulkarni', 'abc@gg.qwe', '123', '202cb962ac59075b964b07152d234b70'),
(41, 'Yash', 'Kulkarni', 'yashkulkarni789@gmail.com', 'tcs', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `RollNo` varchar(50) NOT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`RollNo`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `RollNo`, `MobileNumber`, `Address`, `Password`, `RegDate`) VALUES
(1, 'Karan', 'Kanchan', '17CE2111', 8787878787, 'Thane', '76d80224611fc919a5d54f0ff9fba446', '2020-07-11 11:08:50'),
(2, 'Yash', 'Rathore', '17CE2115', 8756878787, 'Thane', '76d80224611fc919a5d54f0ff9fba446', '2020-07-11 11:08:50'),
(3, 'pavan', 'Bha', '19CE2115', 9756878787, 'Thane', '76d80224611fc919a5d54f0ff9fba446', '2020-07-11 11:08:50'),
(4, 'Sai', 'B', 'SDRN734', 7867645324, 'Thane', '202cb962ac59075b964b07152d234b70', '2020-07-11 11:08:50'),
(5, 'Seema', 'B', 'SDRN7896', 9756878787, 'Thane', '202cb962ac59075b964b07152d234b70', '2020-07-11 11:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblusernew`
--

DROP TABLE IF EXISTS `tblusernew`;
CREATE TABLE IF NOT EXISTS `tblusernew` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `CollegeName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusernew`
--

INSERT INTO `tblusernew` (`ID`, `FirstName`, `LastName`, `EmailAddress`, `CollegeName`, `Password`) VALUES
(1, 'Yash', 'Kulkarni', 'yashkulkarni789@gmail.com', 'SIES', '202cb962ac59075b964b07152d234b70'),
(2, 'Harry', 'Potter', 'abc@gg', 'Terna', '202cb962ac59075b964b07152d234b70'),
(3, 'Ram', 'Kadam', 'ram@123.com', 'IIT B', '202cb962ac59075b964b07152d234b70'),
(4, 'Yash', 'Kulkarni', 'yashkarni789@gmail.com', 'abc', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
