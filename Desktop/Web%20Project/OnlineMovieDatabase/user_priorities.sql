-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 10:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_priorities`
--

CREATE TABLE `user_priorities` (
  `UserName` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL DEFAULT 'NO COMMENTS YET',
  `Rating` int(10) NOT NULL DEFAULT '0',
  `Favourite` varchar(10) NOT NULL DEFAULT 'N',
  `WishList` varchar(10) NOT NULL DEFAULT 'N',
  `Extra` varchar(100) NOT NULL,
  `TimeStamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `user_priorities`
--

INSERT INTO `user_priorities` (`UserName`, `ID`, `Comment`, `Rating`, `Favourite`, `WishList`, `Extra`, `TimeStamp`) VALUES
('Kronos47', '157336', 'One of the best movies ever', 9, 'Y', 'Y', 'M', '2016-10-01 08:34:53.000000'),
('Kronos47', '680', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 06:47:10.000000'),
('Kronos47', '238', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 07:53:07.000000'),
('Kronos47', '389', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 08:13:47.000000'),
('Kronos47', '278', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 08:28:16.000000'),
('<?php echo $user;?>', '122', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 08:27:47.000000'),
('Kronos47', '122', 'NO COMMENTS YET', 0, 'N', 'N', 'M', '2016-10-01 08:33:43.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
