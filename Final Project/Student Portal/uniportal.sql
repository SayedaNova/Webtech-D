-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 12:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `c_id` int(30) NOT NULL,
  `s_id` int(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`c_id`, `s_id`, `semester`, `course`, `marks`) VALUES
(3, 10010, '8th', 'Web Tech', 80);

-- --------------------------------------------------------

--
-- Table structure for table `st_signup`
--

CREATE TABLE `st_signup` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_phn` varchar(50) NOT NULL,
  `s_dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `st_signup`
--

INSERT INTO `st_signup` (`s_id`, `s_name`, `s_password`, `s_email`, `s_phn`, `s_dept`) VALUES
(10010, 'Nova', 'nova', 's.t.nova2000@gmail.com', '12345678', 'CSE'),
(10011, 'Nova', 'nova', 'st@gmail.com', '9876544321', 'CSE'),
(10012, 'john', 'wick', 'sayeedatasneem9@gmail.com', '01860899790', 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_password` varchar(100) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_phn` varchar(100) NOT NULL,
  `t_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_password`, `t_email`, `t_phn`, `t_dept`) VALUES
(102, 'Sayeda', 'stnova', 'sayeeda.nova2000@gmail.com', '987654432100', 'CSE'),
(103, 'john', 'john', 'john@gmail.com', '01860899790', 'EEE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `st_signup`
--
ALTER TABLE `st_signup`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `st_signup`
--
ALTER TABLE `st_signup`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
