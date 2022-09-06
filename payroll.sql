-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 01:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_no` mediumtext NOT NULL,
  `emp_name` mediumtext NOT NULL,
  `emp_pass` mediumtext NOT NULL,
  `date_registered` mediumtext NOT NULL,
  `emp_type` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_no`, `emp_name`, `emp_pass`, `date_registered`, `emp_type`) VALUES
(59, '101014', 'kyle ore', '14651437', '10/03/2022 ', 'accounting'),
(88, '101015', 'kyle ore', '17115106', '10/03/2022 ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_history`
--

CREATE TABLE `payroll_history` (
  `id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_history`
--

INSERT INTO `payroll_history` (`id`, `salary_id`, `emp_no`) VALUES
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 1, 101011),
(0, 19, 101011),
(0, 20, 1),
(0, 21, 2),
(0, 22, 3),
(0, 22, 3),
(0, 22, 3),
(0, 22, 3),
(0, 22, 3),
(0, 19, 101011),
(0, 19, 101011),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 29, 101015),
(0, 50, 101012),
(0, 50, 101012),
(0, 50, 101012),
(0, 50, 101012),
(0, 50, 101012),
(0, 29, 101015),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 56, 101011),
(0, 75, 101011),
(0, 75, 101011),
(0, 77, 101012),
(0, 78, 101015),
(0, 79, 101014),
(0, 80, 101014),
(0, 81, 101015);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `emp_no_salary` mediumtext NOT NULL,
  `total_salary` mediumtext NOT NULL,
  `date_sent` mediumtext NOT NULL,
  `date_received` mediumtext NOT NULL,
  `status` mediumtext NOT NULL,
  `emp_id` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_no_salary`, `total_salary`, `date_sent`, `date_received`, `status`, `emp_id`) VALUES
(77, '101012', '495', '11/03/2022 ', '', 'not received', ''),
(80, '101014', '4950', '11/03/2022 ', '', 'not received', '59'),
(81, '101015', '4950', '11/03/2022 ', '', 'not received', '88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
