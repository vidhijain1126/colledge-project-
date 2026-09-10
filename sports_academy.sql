-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2026 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `tid` int(11) NOT NULL,
  `tname` char(30) NOT NULL,
  `sports` char(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tphone` bigint(10) NOT NULL,
  `experience` int(2) NOT NULL,
  `taddress` varchar(50) NOT NULL,
  `fees` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`tid`, `tname`, `sports`, `email`, `tphone`, `experience`, `taddress`, `fees`) VALUES
(1, 'Vidhi', 'Karate', 'vidhi@gmail.com', 9828879414, 8, 'lkdfhnjkanf jaehwbfkja jbfkj', 0),
(2, 'Ruchi', 'Badminton', 'ruchi@gmail.com', 9828879414, 3, 'ldnf;klASm ,m', 0),
(3, 'Kajal', 'Basketball', 'kajal@gmail.com', 9828879414, 4, 'rkkrjn rkj kfdj;g', 0),
(4, 'Priyanshi', 'Running', 'Priyanshi@gmail.com', 9828879414, 7, 'jfskr srkjn kfdjgn kdfjgn', 0),
(5, 'Kritika', 'Cricket', 'kritika@gmail.com', 9828879414, 2, 'ekfj kretj ksrejg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees_record`
--

CREATE TABLE `fees_record` (
  `fid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `sports` char(10) NOT NULL,
  `jan` int(11) DEFAULT NULL,
  `feb` int(11) DEFAULT NULL,
  `mar` int(11) DEFAULT NULL,
  `apr` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `jun` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `aug` int(11) DEFAULT NULL,
  `sep` int(11) DEFAULT NULL,
  `oct` int(11) DEFAULT NULL,
  `nov` int(11) DEFAULT NULL,
  `dece` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees_record`
--

INSERT INTO `fees_record` (`fid`, `sid`, `name`, `sports`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `july`, `aug`, `sep`, `oct`, `nov`, `dece`) VALUES
(1, 1, 'Ruchika', 'karate', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Tina', 'Basketball', 900, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Meenal', 'Cricket', 1200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'neha', 'Running', 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Preet', 'Badminton', 999, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` char(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `email`, `name`, `phone`, `password`) VALUES
(1, 'vidhi@gmail.com', 'vidhi', 9828879414, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(4) NOT NULL,
  `name` char(30) NOT NULL,
  `parents` char(30) NOT NULL,
  `sports` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(10) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `coach` char(30) NOT NULL,
  `fees` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `parents`, `sports`, `dob`, `address`, `phone`, `slot`, `coach`, `fees`) VALUES
(1, 'Ruchika', 'vinit', 'Karate', '2026-09-30', 'rgtfh yufty ftyujty', 1234567890, '4PM - 5PM', 'Vidhi', 1000),
(2, 'Tina', 'abc', 'Basketball', '2026-09-01', 'jung;le sdhlkd', 9828899999, '4PM - 5PM', 'Kajal', 900),
(3, 'Meenal', 'def', 'Cricket', '2026-09-05', 'jail shdalks kasjlk', 9777766542, 'default', 'Kritika', 1200),
(4, 'neha', 'hwbskjw', 'Running', '2026-09-29', 'dsjhlkw mwsbhnk', 987654321, '5PM -6PM', 'Priyanshi', 600),
(5, 'Preet', 'qjhwlqk', 'Badminton', '2026-09-04', 'wjdnwkl wsmnm', 98765456, '4PM - 5PM', 'Ruchi', 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `fees_record`
--
ALTER TABLE `fees_record`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fees_record`
--
ALTER TABLE `fees_record`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
