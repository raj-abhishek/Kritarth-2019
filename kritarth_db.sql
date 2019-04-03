-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2018 at 02:53 PM
-- Server version: 5.7.19-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kritarth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `uid`
--

DROP TABLE IF EXISTS `uid`;
CREATE TABLE IF NOT EXISTS `uid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uid`
--

INSERT INTO `uid` (`ID`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `K_ID` varchar(7) NOT NULL DEFAULT '0',
  `f_name` varchar(100) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `event_1` varchar(100) NOT NULL,
  `event_2` varchar(100) NOT NULL,
  PRIMARY KEY (`K_ID`),
  UNIQUE KEY `phone_number` (`phone_number`),
  UNIQUE KEY `e_mail` (`e_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `tg_table1_insert`;
DELIMITER $$
CREATE TRIGGER `tg_table1_insert` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
  INSERT INTO uid VALUES (NULL);
  SET NEW.K_ID = CONCAT('KR', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
