-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 12:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immunize`
--
DROP DATABASE IF EXISTS `immunize`;
CREATE DATABASE IF NOT EXISTS `immunize` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immunize`;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

DROP TABLE IF EXISTS `children`;
CREATE TABLE IF NOT EXISTS `children` (
  `childId` bigint(12) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `hospitalname` varchar(60) NOT NULL DEFAULT '',
  `dateofbirth` date DEFAULT '0000-00-00',
  `gender` varchar(60) NOT NULL DEFAULT '',
  `parentId` bigint(12) DEFAULT '0',
  PRIMARY KEY (`childId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `scheduleId` bigint(12) NOT NULL AUTO_INCREMENT,
  `dateofbirth` date DEFAULT '0000-00-00',
  `three_m` date DEFAULT '0000-00-00',
  `four_m` date DEFAULT '0000-00-00',
  `six_m` date DEFAULT '0000-00-00',
  `nine_m` date DEFAULT '0000-00-00',
  `childId` bigint(12) DEFAULT '0',
  PRIMARY KEY (`scheduleId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `children`
--

TRUNCATE TABLE `children`;
--
-- Dumping data for table `children`
--

INSERT INTO `children` (`childId`, `firstname`, `lastname`, `hospitalname`, `dateofbirth`, `gender`, `parentId`) VALUES
(1, 'kate', 'Thairu', 'Machakos Level 5', '2017-12-31', 'Female', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(12) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `phonenumber` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `userType` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`userId`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `phonenumber` (`phonenumber`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `username`, `email`, `phonenumber`, `password`, `userType`) VALUES
(1, 'Fredah', 'fredah', 'fredah@gmail.com', '0723643725', '$2y$10$OKlH5S8MsLGKcuRByeFqh.MtUFmafiIkvDkeZ8JgV0xPHbs6BCG.W', 'Parent'),
(2, 'Lydia Wangari', 'Lydia', 'Lydia@gmail.com', '0707307212', '$2y$10$jsS6aMnjuHXmAin8bKlR6..Zi/puMOMUyFIwi.s9Zu8ruTJv8hbmm', 'Admin'),
(3, 'Lorna Kamau', 'Lorna', 'lorna@yahoo.com', '0789001234', '$2y$10$Q5gVbnlodAyHLGC09FeEMO6oOyrQ2.51mXrC5IfwMKFGyL0IID.p.', 'Parent'),
(4, 'Kevin Omondi', 'Kevin', 'komondi@su.com', '0789463510', '$2y$10$vNa3fgWyDDo2Kq3HowVOl.d5AWFnqtYqQuR6GJKGfWrPrYVe3Frny', 'Parent'),
(6, 'Kate', 'Cheppy', 'cheppy@gmail.com', '0735462819', '$2y$10$7TlNttnScGzxEz4fyBh7iewTJXDXcuTRMuGjcPG7RMvvLWbKaKbvq', 'Parent'),
(7, 'cheryl mbugua', 'cheryl', 'cheryl@gmail.com', '0734542268', '$2y$10$qgiWYMYS7wIuzhyv69er9uhSdPU/sDt.GucEbXnE5nGRZZmmUELO.', 'Parent');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
