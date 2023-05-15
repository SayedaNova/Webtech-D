-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 07:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentadd`
--

CREATE TABLE `studentadd` (
  `id` int(11) NOT NULL,
  `universityid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentadd`
--

INSERT INTO `studentadd` (`id`, `universityid`, `name`, `cgpa`) VALUES
(1, '20-42723-1', 'shakib', '3.51'),
(2, '20-7886-1', 'himu', '3.65'),
(3, '19-86546-1', 'forid', '3.45'),
(4, '54-765775-1', 'jumur', '3.75'),
(5, '20-9876744-1', 'foisal', '3.67');

-- --------------------------------------------------------

--
-- Table structure for table `studentdelete`
--

CREATE TABLE `studentdelete` (
  `id` int(11) NOT NULL,
  `universityid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdelete`
--

INSERT INTO `studentdelete` (`id`, `universityid`, `name`, `cgpa`) VALUES
(6, '19-87654-2', 'uday', '3.85'),
(7, '19-67543-2', 'kamal', '3.56'),
(8, '20-63537-1', 'rimon', '3.95'),
(9, '20-45678-3', 'bikash', '3.96');

-- --------------------------------------------------------

--
-- Table structure for table `studentloin`
--

CREATE TABLE `studentloin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwrod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentloin`
--

INSERT INTO `studentloin` (`id`, `username`, `passwrod`) VALUES
(3, '12', '12'),
(13, 'jon', '13'),
(14, '20-42723-1', '321');

-- --------------------------------------------------------

--
-- Table structure for table `teacherloin`
--

CREATE TABLE `teacherloin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherloin`
--

INSERT INTO `teacherloin` (`id`, `username`, `password`) VALUES
(2, '1821-12345-123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentadd`
--
ALTER TABLE `studentadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdelete`
--
ALTER TABLE `studentdelete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentloin`
--
ALTER TABLE `studentloin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherloin`
--
ALTER TABLE `teacherloin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentadd`
--
ALTER TABLE `studentadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54424;

--
-- AUTO_INCREMENT for table `studentdelete`
--
ALTER TABLE `studentdelete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentloin`
--
ALTER TABLE `studentloin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacherloin`
--
ALTER TABLE `teacherloin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
