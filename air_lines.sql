-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 06:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_lines`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `AdminID` int(100) NOT NULL,
  `UName` varchar(100) NOT NULL,
  `passWD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`AdminID`, `UName`, `passWD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` varchar(10) NOT NULL,
  `f_from` varchar(50) NOT NULL,
  `f_to` varchar(50) NOT NULL,
  `f_return` varchar(50) NOT NULL,
  `f_depart` varchar(50) NOT NULL,
  `f_class` varchar(15) NOT NULL,
  `f_type` varchar(15) NOT NULL,
  `payment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `f_from`, `f_to`, `f_return`, `f_depart`, `f_class`, `f_type`, `payment`) VALUES
('F22', 'Chaina', 'London', '2020-10-29', '2020-10-24', 'Business', 'Return', '250'),
('F7', 'Dhilli', 'London', '2020-10-28', '2020-10-24', 'Business', 'One way', '500'),
('FR123', 'Colombo', 'Changi', '2020-10-28', '2020-10-26', 'Economy', 'Return', '125'),
('UL2000', 'Colombo', 'Chennai', '2020-11-13', '2020-10-28', 'Economy', 'One way', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `UserGender` varchar(100) NOT NULL,
  `bday` date NOT NULL,
  `TeleNumber` varchar(100) NOT NULL,
  `PWSD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `UserName`, `FullName`, `email`, `UserGender`, `bday`, `TeleNumber`, `PWSD`) VALUES
(2, 'sam12', 'sam dam', 'sam@gmail.com', 'male', '1999-04-08', '0776320502', '123qwe'),
(3, 'kamal123', 'Kamal', 'hellokamal@gmail.com', 'male', '2020-10-06', '0773245678', '12345'),
(4, 'dahamthameera', 'P.A.Daham Thameera', 'dahamthameera@gmail.com', 'male', '2008-03-21', '0718496016', 'dahamth123'),
(5, 'wimal', 'wimal silva', 'wimalsilva@gmail.com', 'male', '2020-10-13', '0768798765', 'cat123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `UserName` (`UName`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `e_mail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `AdminID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
