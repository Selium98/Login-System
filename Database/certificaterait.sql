-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2020 at 04:37 AM
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
  `MobileNumber` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguest`
--

INSERT INTO `tblguest` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `CompanyName`, `Password`) VALUES
(1, 'ewtewt', 'werewr', '31312', 'fwerew', '76d80224611fc919a5d54f0ff9fba446'),
(2, 'ertet', 'tyuytu', '54646', 'eyeye', '7815696ecbf1c96e6894b779456d330e'),
(3, 'ytiytiu', 'uoouo', '797797979', 'hjhkh', '76d80224611fc919a5d54f0ff9fba446'),
(4, 'yoyuyuuyoyuo', 'popipip', '9080880', 'ututu', '7815696ecbf1c96e6894b779456d330e'),
(5, 'fghfg', 'fghgfh', '80098', 'nfgk', '76d80224611fc919a5d54f0ff9fba446'),
(6, 'Yash', 'Kulkarni', '9878987865', 'TCS', '76d80224611fc919a5d54f0ff9fba446'),
(7, 'Harry', 'Kadam', '224242424', 'rttyry', '76d80224611fc919a5d54f0ff9fba446'),
(16, 'John', 'Doe', '1122334455', 'TCS', '202cb962ac59075b964b07152d234b70'),
(15, 'Tarun', 'Kulkarni', '989898987', 'Cognizant', '76d80224611fc919a5d54f0ff9fba446'),
(14, 'Yash', 'kulkarni', '7722004291', 'TCS', '76d80224611fc919a5d54f0ff9fba446'),
(13, 'harry', 'potter', '8787878654', 'ycs', '76d80224611fc919a5d54f0ff9fba446'),
(17, 'Lia', 'Nelson', '8787878790', 'Cognizant', '202cb962ac59075b964b07152d234b70');

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
(4, 'Sai', 'B', '734', 7867645324, 'Thane', '202cb962ac59075b964b07152d234b70', '2020-07-11 11:08:50'),
(5, 'Seema', 'B', '7896', 9756878787, 'Thane', '202cb962ac59075b964b07152d234b70', '2020-07-11 11:08:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
