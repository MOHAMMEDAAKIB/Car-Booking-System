-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2024 at 07:20 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

DROP TABLE IF EXISTS `admin_details`;
CREATE TABLE IF NOT EXISTS `admin_details` (
  `admin_ID` int NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `pho_Number` int NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Road` varchar(50) NOT NULL,
  `Hn` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_ID`, `First_Name`, `Last_Name`, `Date_of_birth`, `NIC`, `pho_Number`, `Email`, `Country`, `Province`, `District`, `city`, `Road`, `Hn`) VALUES
(0, 'Mohammad ', 'Aakib', '2002-02-04', '200203502839', 728300994, 'bikaamohammad@gmail.', 'SriLankan', 'north west', 'kurunagal ', 'narrammala', 'katupotha rod ', 'no 03');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log_de`
--

DROP TABLE IF EXISTS `admin_log_de`;
CREATE TABLE IF NOT EXISTS `admin_log_de` (
  `admin_ID` int NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_log_de`
--

INSERT INTO `admin_log_de` (`admin_ID`, `user_Name`, `password`) VALUES
(1, 'bikaa', '123qweasdzxc');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

DROP TABLE IF EXISTS `car_details`;
CREATE TABLE IF NOT EXISTS `car_details` (
  `car_ID` int NOT NULL AUTO_INCREMENT,
  `Car_name` varchar(50) NOT NULL,
  `Car_model` varchar(50) NOT NULL,
  `Owner_name` varchar(100) NOT NULL,
  `year` int NOT NULL,
  `Catagury` varchar(50) NOT NULL,
  `price` decimal(30,0) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`car_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_ID`, `Car_name`, `Car_model`, `Owner_name`, `year`, `Catagury`, `price`, `image`) VALUES
(1, 'coralla', '121', 'mufaris', 2017, 'Luxury', 30000, 0x64656661756c742e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `customers_details`
--

DROP TABLE IF EXISTS `customers_details`;
CREATE TABLE IF NOT EXISTS `customers_details` (
  `cust_ID` int NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `pho_Number` int NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Road` varchar(50) NOT NULL,
  `Hn` varchar(50) NOT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers_details`
--

INSERT INTO `customers_details` (`cust_ID`, `First_Name`, `Last_Name`, `Date_of_birth`, `NIC`, `pho_Number`, `Email`, `Country`, `Province`, `District`, `city`, `Road`, `Hn`) VALUES
(0, 'Mohammad', 'Aakib', '2024-12-12', '200203502839', 751855578, 'bikaamohammad@gmail.', 'option1', 'option1', 'N0 7, Katupotha Road,Kilimpol', 'Narammala', 'katupotha road', '03');

-- --------------------------------------------------------

--
-- Table structure for table `customer_log_details`
--

DROP TABLE IF EXISTS `customer_log_details`;
CREATE TABLE IF NOT EXISTS `customer_log_details` (
  `cust_ID` int NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer_log_details`
--

INSERT INTO `customer_log_details` (`cust_ID`, `user_Name`, `password`) VALUES
(1, 'Aakib', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

DROP TABLE IF EXISTS `owner_details`;
CREATE TABLE IF NOT EXISTS `owner_details` (
  `ownwe_ID` int NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `pho_Number` int NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Road` varchar(50) NOT NULL,
  `Hn` varchar(50) NOT NULL,
  PRIMARY KEY (`ownwe_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner_log_details`
--

DROP TABLE IF EXISTS `owner_log_details`;
CREATE TABLE IF NOT EXISTS `owner_log_details` (
  `ownr_ID` int NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ownr_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
