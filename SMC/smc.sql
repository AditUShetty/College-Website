-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 10:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `name` text NOT NULL,
  `pswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`name`, `pswd`) VALUES
('sairaj@123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `sr` bigint(30) NOT NULL,
  `name` text NOT NULL,
  `regno` bigint(15) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pswd` varchar(30) NOT NULL,
  `date_of_submission` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`sr`, `name`, `regno`, `e_mail`, `date_of_joining`, `date_of_leaving`, `mobile`, `address`, `pswd`, `date_of_submission`) VALUES
(1, 'sairaj shetty', 464564, 'sairajshetty6112000@gmail.com', '2021-09-03', '2021-10-10', 7738176633, 'kiladi house, kanthavara, Nitt', '54321', '2021-09-23'),
(2, 'jayaram', 98765, 'sairajshet2000@gmail.com', '2021-09-24', '2021-10-08', 7738176676, 'kiladi house, kanthavara, Nitt', '87654', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `sr` bigint(30) NOT NULL,
  `higher_edu` bigint(30) NOT NULL,
  `job` bigint(30) NOT NULL,
  `nothing` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`sr`, `higher_edu`, `job`, `nothing`) VALUES
(1, 19, 15, 11),
(1, 19, 15, 11);

-- --------------------------------------------------------

--
-- Table structure for table `high_files`
--

CREATE TABLE `high_files` (
  `sr` bigint(30) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `branch` text NOT NULL,
  `course` text NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `high_files`
--

INSERT INTO `high_files` (`sr`, `name`, `address`, `pincode`, `phone`, `branch`, `course`, `filename`) VALUES
(1, 'dr nsam', 'kiladi house, kanthavara, Nitte-574110, Near parap', 574110, 7738176633, 'nitte', 'bca', '_20160124_210623.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `author` varchar(30) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`author`, `timestamp`) VALUES
('sairaj@123', '2021-09-21 14:36:22'),
('sairaj@123', '2021-09-21 14:36:51'),
('sairaj@123', '2021-09-21 14:37:30'),
('sairaj@123', '2021-09-21 14:37:42'),
('sairaj@123', '2021-09-21 18:57:32'),
('sairaj@123', '2021-09-22 13:26:48'),
('sairaj@123', '2021-09-22 13:36:55'),
('sairaj@123', '2021-09-22 13:53:23'),
('sairaj@123', '2021-09-22 13:53:56'),
('sairaj@123', '2021-09-22 13:55:23'),
('sairaj@123', '2021-09-22 13:56:03'),
('sairaj@123', '2021-09-22 14:24:35'),
('sairaj@123', '2021-09-22 14:26:20'),
('sairaj@123', '2021-09-23 08:31:58'),
('sairaj@123', '2021-09-23 08:32:49'),
('sairaj@123', '2021-09-23 13:46:09'),
('sairaj@123', '2021-09-23 13:46:47'),
('sairaj@123', '2021-09-23 13:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sr` bigint(30) NOT NULL,
  `name` text NOT NULL,
  `reg_no` bigint(30) NOT NULL,
  `DC` int(5) NOT NULL,
  `LAMP` int(5) NOT NULL,
  `SE` int(5) NOT NULL,
  `WEB` int(5) NOT NULL,
  `LINUX` int(5) NOT NULL,
  `JAVA` int(5) NOT NULL,
  `WEBLAB` int(5) NOT NULL,
  `JAVALAB` int(5) NOT NULL,
  `TOTAL` int(5) NOT NULL,
  `AVG` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sr`, `name`, `reg_no`, `DC`, `LAMP`, `SE`, `WEB`, `LINUX`, `JAVA`, `WEBLAB`, `JAVALAB`, `TOTAL`, `AVG`) VALUES
(1, 'raviraj shetty', 1234589, 78, 89, 92, 90, 90, 90, 90, 94, 713, 89),
(2, 'sairam shetty', 54321, 0, 0, 0, 0, 10, 0, 3, 0, 13, 2),
(3, 'arshita shetty', 1234, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Rakshan Shetty', 1234, 100, 87, 89, 96, 87, 98, 89, 98, 744, 93),
(5, 'tushar', 464564, 80, 92, 98, 87, 87, 78, 98, 89, 709, 89),
(6, 'alfaaz', 12345678, 80, 92, 98, 89, 87, 78, 89, 98, 711, 89);

-- --------------------------------------------------------

--
-- Table structure for table `nothing_files`
--

CREATE TABLE `nothing_files` (
  `sr` bigint(30) NOT NULL,
  `name` text NOT NULL,
  `regno` bigint(12) NOT NULL,
  `concern` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_progression`
--

CREATE TABLE `student_progression` (
  `sr` bigint(30) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `reg_no` bigint(15) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `course` text NOT NULL,
  `option1` text NOT NULL,
  `sub_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_progression`
--

INSERT INTO `student_progression` (`sr`, `Filename`, `name`, `reg_no`, `phone`, `email`, `gender`, `course`, `option1`, `sub_date`) VALUES
(1, '_20160124_210623.JPG', 'sairaj shetty', 12345, 7738176633, 'sairajshetty6112000@gmail.com', 'MALE', 'bca', 'HI_EDU', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `sr` bigint(30) NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `position` text NOT NULL,
  `salary` int(8) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `date` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`sr`, `name`, `branch`, `position`, `salary`, `address`, `pincode`, `phone`, `date`, `filename`) VALUES
(1, 'wipro', 'karkal', 'SE', 100000, 'kiladi house, kanthavara, Nitte-574110, Near parap', 574110, 7738175555, 2147483647, '_20160603_183926~2.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- Indexes for table `high_files`
--
ALTER TABLE `high_files`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `nothing_files`
--
ALTER TABLE `nothing_files`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `student_progression`
--
ALTER TABLE `student_progression`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `reg_no` (`reg_no`,`phone`,`email`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `high_files`
--
ALTER TABLE `high_files`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nothing_files`
--
ALTER TABLE `nothing_files`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_progression`
--
ALTER TABLE `student_progression`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `sr` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
