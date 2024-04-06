-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 09:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse_attendence`
--

CREATE TABLE `cse_attendence` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cse_attendence`
--

INSERT INTO `cse_attendence` (`id`, `name`, `roll_no`, `status`, `date_created`, `email`) VALUES
(68, 'aditya', '01', 'absent', '2023-05-13', 'adityashinde2at@gmail.com'),
(69, 'ashish', '02', 'absent', '2023-05-13', 'sureashish1516@gmail.com'),
(70, 'onkar', '03', 'absent', '2023-05-13', 'onkaryadav8796@gmail.com'),
(71, 'sai', '04', 'present', '2023-05-13', 'abc@gmail.com'),
(73, 'aditya', '01', 'present', '2023-05-13', 'adityashinde2at@gmail.com'),
(74, 'sai', '04', 'present', '2023-05-13', 'abc@gmail.com'),
(75, 'sai', '05', 'present', '2023-05-13', 'sai@gmail.com'),
(76, 'aditya', '01', 'present', '2023-05-13', 'adityashinde2at@gmail.com'),
(77, 'sai', '04', 'present', '2023-05-13', 'abc@gmail.com'),
(78, 'sai', '05', 'present', '2023-05-13', 'sai@gmail.com'),
(79, 'aditya', '01', 'present', '2023-05-13', 'adityashinde2at@gmail.com'),
(80, 'sai', '04', 'present', '2023-05-13', 'abc@gmail.com'),
(81, 'sai', '05', 'present', '2023-05-13', 'sai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(12) NOT NULL,
  `dname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dname`) VALUES
(1, 'CSE'),
(2, 'IT'),
(3, 'ENTC');

-- --------------------------------------------------------

--
-- Table structure for table `entc_attendence`
--

CREATE TABLE `entc_attendence` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it_attendence`
--

CREATE TABLE `it_attendence` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `dept_id` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `roll_no`, `dept_id`, `date_created`) VALUES
(18, 'aditya', 'adityashinde2at@gmail.com', '01', '1', '2023-05-12'),
(19, 'ashish', 'sureashish1516@gmail.com', '02', '2', '2023-05-12'),
(20, 'onkar', 'onkaryadav8796@gmail.com', '03', '3', '2023-05-12'),
(21, 'sai', 'abc@gmail.com', '04', '1', '2023-05-13'),
(23, 'sai', 'sai@gmail.com', '05', '1', '2023-05-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse_attendence`
--
ALTER TABLE `cse_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entc_attendence`
--
ALTER TABLE `entc_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_attendence`
--
ALTER TABLE `it_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_student` (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse_attendence`
--
ALTER TABLE `cse_attendence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entc_attendence`
--
ALTER TABLE `entc_attendence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_attendence`
--
ALTER TABLE `it_attendence`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
