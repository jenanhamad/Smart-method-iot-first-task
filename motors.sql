-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 11:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `MotorId` int(11) NOT NULL,
  `motor1` int(180) NOT NULL,
  `motor2` int(180) NOT NULL,
  `motor3` int(180) NOT NULL,
  `motor4` int(180) NOT NULL,
  `motor5` int(180) NOT NULL,
  `motor6` int(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`MotorId`, `motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES
(1, 131, 140, 135, 135, 128, 112),
(2, 41, 45, 52, 53, 55, 51),
(3, 39, 41, 39, 41, 38, 44);

-- --------------------------------------------------------

--
-- Table structure for table `runvalues`
--

CREATE TABLE `runvalues` (
  `RunID` int(1) NOT NULL,
  `isON` int(1) NOT NULL,
  `isOFF` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `runvalues`
--

INSERT INTO `runvalues` (`RunID`, `isON`, `isOFF`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`MotorId`);

--
-- Indexes for table `runvalues`
--
ALTER TABLE `runvalues`
  ADD PRIMARY KEY (`RunID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `MotorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `runvalues`
--
ALTER TABLE `runvalues`
  MODIFY `RunID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
