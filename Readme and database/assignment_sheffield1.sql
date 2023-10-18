-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 08:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_sheffield1`
--

-- --------------------------------------------------------

--
-- Table structure for table `computing_list`
--

CREATE TABLE `computing_list` (
  `id` int(20) NOT NULL,
  `course_a_name` varchar(20) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_type` varchar(20) NOT NULL,
  `m_entrance` varchar(20) NOT NULL,
  `study_length` varchar(15) NOT NULL,
  `ucas_points` int(10) NOT NULL,
  `course_summary` varchar(200) NOT NULL,
  `department` varchar(10) DEFAULT NULL,
  `entry_year` int(10) DEFAULT NULL,
  `ucas_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computing_list`
--

INSERT INTO `computing_list` (`id`, `course_a_name`, `course_title`, `course_type`, `m_entrance`, `study_length`, `ucas_points`, `course_summary`, `department`, `entry_year`, `ucas_code`) VALUES
(1, 'BSC (Honors)', 'Computing', 'UNDERGRADUATE', 'FULL TIME', '3/4 YEARS', 112, 'Learn how to code, configure and integrate applications, databases and systems architectures which form the pillars of modern technology in today’s world.', 'Computing', 2022, 'G504');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message_main` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `firstname`, `lastname`, `email`, `subject`, `message_main`) VALUES
(1, 'TOBECHUKWU', 'OJIAKOR', 'tobechukwu14@yahoo.com', 'ABOUT YOUR WEBSITE', ''),
(6, 'OTEDOLA', 'OJIAKOR', 'tobechukwu14@yahoo.com', 'ABOUT YOUR WEBSITE', ''),
(7, '', '', '', '', ''),
(17, 'CHINELO', 'UBAH', 'ubahdeborah@gmail.com', 'JUST TYPING', ''),
(18, 'CHINELO', 'UBAH', 'ubahdeborah@gmail.com', 'JUST TYPING', ''),
(19, 'CHINELO', 'UBAH', 'ubahdeborah@gmail.com', 'JUST TYPING', ''),
(20, 'CHINELO', 'UBAH', 'ubahdeborah@gmail.com', 'JUST TYPING', ''),
(21, 'CHINELO', 'UBAH', 'ubahdeborah@gmail.com', 'JUST TYPING', ''),
(22, 'OTEDOLA', 'OJIAKOR', 'tobechukwu1@yahoo.com', 'JLJGLJVKH', ''),
(23, 'OTEDOLA', 'OJIAKOR', 'tobechukwu1@yahoo.com', 'JLJGLJVKH', ''),
(24, 'OTEDOLA', 'OJIAKOR', 'tobechukwu1@yahoo.com', 'JLJGLJVKH', ''),
(25, '', '', '', '', ''),
(26, 'OTEDOLA', 'OJIAKOR', 'tobechukwu1@yahoo.com', 'JLJGLJVKH', ''),
(27, 'OTEDOLA', 'OJIAKOR', 'tobechukwu1@yahoo.com', 'JLJGLJVKH', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computing_list`
--
ALTER TABLE `computing_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `message` ADD FULLTEXT KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computing_list`
--
ALTER TABLE `computing_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
