-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 03:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
-- Table structure for table `base`
--

CREATE TABLE `base` (
  `id` int(11) NOT NULL,
  `base_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`id`, `base_key`) VALUES
(15, 'bWRRZU9tclBwUmYvR2lUSDBjeDFrZz09OjrOwCndiVBvHZM5oIIwI8Ru');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `password_email` text NOT NULL,
  `ip_email` text NOT NULL,
  `payslip_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empId` int(11) NOT NULL,
  `empNo` text DEFAULT NULL,
  `empName` text DEFAULT NULL,
  `empPassword` text DEFAULT NULL,
  `empEmail` text DEFAULT NULL,
  `empType` text DEFAULT NULL,
  `empDepartment` text DEFAULT NULL,
  `empStatus` text DEFAULT NULL,
  `empDesignation` text DEFAULT NULL,
  `empEnabale` text NOT NULL,
  `empIp_Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `empNo`, `empName`, `empPassword`, `empEmail`, `empType`, `empDepartment`, `empStatus`, `empDesignation`, `empEnabale`, `empIp_Address`) VALUES
(125, '201-001', 'BABIERA, AILEEN JEAN C.', '15692559', '', 'employee', 'NON-TEACHING STAFF', 'Regular', ' Accounting Staff\r\n', 'enable', '::1'),
(126, '201-002', 'BARAS, MARY JANE C.', '12681613', '', 'employee', 'NON-TEACHING STAFF', 'Regular', ' Marketing Officer\r\n', 'enable', NULL),
(127, '201-003', 'CASTILLO, SHEILA MAE R.', '19073394', '', 'employee', 'NON-TEACHING STAFF', 'Regular', ' Accounting Staff\r\n', 'enable', NULL),
(128, '201-004', 'CHAVEZ, GABRIEL JOSE', '10203637', '', 'employee', 'NON-TEACHING STAFF', 'Regular', ' Admin staff\r\n', 'enable', NULL),
(129, '201-005', 'CHAVEZ, ZACHARIAH', '10456663', '', 'employee', 'NON-TEACHING STAFF', 'Regular', ' Admin Staff\r\n', 'enable', NULL),
(130, '101-001', 'ALCANTARA, ALIPIO JOHN', '11534404', '', 'employee', 'COLLEGE FACULTY', 'Full time-Regular', ' College Faculty\r\n', 'enable', NULL),
(131, '101-002', 'ALCONABA, CAMILLE JOICE', '18250580', '', 'employee', 'COLLEGE FACULTY', 'PART-TIME', ' College Faculty\r\n', 'enable', NULL),
(132, '101-003', 'ALDUEZA, ABIGAIL', '19014811', '', 'employee', 'COLLEGE FACULTY', 'PART-TIME', ' College Faculty\r\n', 'enable', NULL),
(133, '101-004', 'ANOR, RALPH\r\n', '15242551', '', 'employee', 'COLLEGE FACULTY', 'Full time-Regular', ' College Faculty\r\n', 'enable', NULL),
(134, '101-005', 'AQUINO, RICARDO S.', '10650726', '', 'employee', 'COLLEGE FACULTY', 'Full time-Regular', ' College Faculty\r\n', 'enable', NULL),
(135, '301-001', 'ALEGRE,  CRISTINA D.', '14538916', '', 'employee', 'SHS FACULTY', 'Regular', ' SHS FACULTY\r\n', 'enable', NULL),
(136, '301-002', 'ATIENZA, MARVIC O.', '16123627', '', 'employee', 'SHS FACULTY', 'Regular', ' SHS FACULTY\r\n', 'enable', NULL),
(137, '301-003', 'AURELLO, GLENDA P.', '15462322', '', 'employee', 'SHS FACULTY', 'Probationary', ' SHS FACULTY\r\n', 'enable', NULL),
(138, '301-004', 'BARRIENTOS, CEJAY CHRISTIAN', '12998633', '', 'employee', 'SHS FACULTY', 'Probationary', ' SHS FACULTY\r\n', 'enable', NULL),
(139, '301-005', 'BORJA, AMIE P.', '18199462', '', 'employee', 'SHS FACULTY', 'Probationary', ' SHS FACULTY\r\n', 'enable', NULL),
(140, '401-001', 'ABRIL, MONALISSA C.', '19032862', '', 'employee', 'JHS FACULTY', 'Regular', ' JHS FACULTY\r\n', 'enable', NULL),
(141, '401-002', 'AMANTILLO, BEVERLY P.', '15256323', '', 'employee', 'JHS FACULTY', 'Probitionary', ' JHS FACULTY\r\n', 'enable', NULL),
(142, '401-003', 'ANTE, IVYROSE ANN C.', '11157504', '', 'employee', 'JHS FACULTY', 'Probitionary', ' JHS FACULTY\r\n', 'enable', NULL),
(143, '401-004', 'CUTAY, SHEKEINA G.', '10484899', '', 'employee', 'JHS FACULTY', 'Probitionary', ' JHS FACULTY\r\n', 'enable', NULL),
(144, '401-005', 'DE JESUS, ANA RICA R.', '18779790', '', 'employee', 'JHS FACULTY', 'Probitionary', ' JHS FACULTY\r\n', 'enable', NULL),
(145, '501-001', 'DAYTO, REX', '18351887', '', 'employee', 'ELEMENTARY FACULTY', 'Regular', ' Program Head\r\n', 'enable', NULL),
(146, '501-002', 'DE JESUS, JOHN PATRICK A.', '10572519', '', 'employee', 'ELEMENTARY FACULTY', 'Probationary', ' Elem Faculty\r\n', 'enable', NULL),
(147, '501-003', 'DELOS SANTOS, CRISTINE JOY', '18780912', '', 'employee', 'ELEMENTARY FACULTY', 'Probationary', ' Elem Faculty\r\n', 'enable', NULL),
(148, '501-004', 'GOTENGCO, CERLYN', '14227723', '', 'employee', 'ELEMENTARY FACULTY', 'Probationary', ' Elem Faculty\r\n', 'enable', NULL),
(149, '501-005', 'RAMIREZ, VIVIAN', '15585792', '', 'employee', 'ELEMENTARY FACULTY', 'Regular', ' Elem Faculty\r\n', 'enable', NULL),
(150, '601-001', 'SIMEON V. CHAVEZ', '15995287', '', 'employee', 'BOARD OF TRUSTEES', 'Regular', ' President\r\n', 'enable', NULL),
(151, '601-002', 'MARINA A. CHAVEZ', '16694158', '', 'employee', 'BOARD OF TRUSTEES', 'Regular', ' Senior Vice-President\r\n', 'enable', NULL),
(152, '601-003', 'JAY A. CHAVEZ', '17658940', '', 'employee', 'BOARD OF TRUSTEES', 'Regular', ' Chairman of the Board\r\n', 'enable', NULL),
(153, '601-004', 'JANNETTE CHAVEZ-ARCEO', '11276241', '', 'employee', 'BOARD OF TRUSTEES', 'Regular', ' Vice Pre. For Academics and External Affairs\r\n', 'enable', NULL),
(154, '601-005', 'JOEL A. CHAVEZ', '18633053', '', 'employee', 'BOARD OF TRUSTEES', 'Regular', ' Trustee\r\n', '', NULL),
(156, '001', 'kyle', '123', NULL, 'admin', 'admin', NULL, NULL, 'enable', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `history_Id` int(11) NOT NULL,
  `empNo` text DEFAULT NULL,
  `empId` text NOT NULL,
  `empName` text DEFAULT NULL,
  `empPassword` text DEFAULT NULL,
  `empEmail` text DEFAULT NULL,
  `empType` text DEFAULT NULL,
  `empDepartment` text DEFAULT NULL,
  `empStatus` text DEFAULT NULL,
  `empDesignation` text DEFAULT NULL,
  `empIp_Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`history_Id`, `empNo`, `empId`, `empName`, `empPassword`, `empEmail`, `empType`, `empDepartment`, `empStatus`, `empDesignation`, `empIp_Address`) VALUES
(5, '01', '', 'kyle', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '001', '', 'kyle', '123', '', 'accounting', 'admin', '', '', NULL),
(7, '01', '', 'kyle', '123', '', 'admin', 'admin', '', '', NULL),
(8, '01', '', 'kyle', '123', '', 'admin', 'admin', '', '', NULL),
(9, '001', '156', 'kyle', '123', '', 'admin', 'admin', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payrollId` int(11) NOT NULL,
  `empId` text NOT NULL,
  `monthly` int(11) DEFAULT NULL,
  `grossPay` int(11) DEFAULT NULL,
  `absent` text DEFAULT NULL,
  `lessAbsent` text DEFAULT NULL,
  `retroactivePay` text DEFAULT NULL,
  `sss` text DEFAULT NULL,
  `pagIbig` text DEFAULT NULL,
  `c_a` text DEFAULT NULL,
  `tuitionFee` text DEFAULT NULL,
  `uniform` text DEFAULT NULL,
  `csb` text DEFAULT NULL,
  `totalDeduction` text DEFAULT NULL,
  `honorarium_allowance` text DEFAULT NULL,
  `netPay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payrollId`, `empId`, `monthly`, `grossPay`, `absent`, `lessAbsent`, `retroactivePay`, `sss`, `pagIbig`, `c_a`, `tuitionFee`, `uniform`, `csb`, `totalDeduction`, `honorarium_allowance`, `netPay`) VALUES
(69, '124', 10000, 5000, '500', '4500', '1001', '11', '11', '11', '88', '5', '5', '131', '500', '5870'),
(70, '124', 500000, 250000, '500', '249500', '1001', '495', '11', '0', '88', '5', '5', '604', '500', '250397');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_record`
--

CREATE TABLE `payroll_record` (
  `payroll_recordId` int(11) NOT NULL,
  `payslipId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payslip`
--

CREATE TABLE `payslip` (
  `payslipId` int(11) NOT NULL,
  `empId` int(11) NOT NULL,
  `payrollId` text NOT NULL,
  `dateCovered` text NOT NULL,
  `dateSent` text NOT NULL,
  `dateReceived` text NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payslip`
--

INSERT INTO `payslip` (`payslipId`, `empId`, `payrollId`, `dateCovered`, `dateSent`, `dateReceived`, `status`) VALUES
(33, 124, '70', '01-15', '04-01-2022', '04-01-2022', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `session_records`
--

CREATE TABLE `session_records` (
  `sessionId` int(11) NOT NULL,
  `ipAddress` text NOT NULL,
  `loggedAt` text NOT NULL,
  `lastLog` text NOT NULL,
  `empId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session_records`
--

INSERT INTO `session_records` (`sessionId`, `ipAddress`, `loggedAt`, `lastLog`, `empId`) VALUES
(873, '::1', '09:12:AM', '2022-07-04', '156'),
(874, '::1', '09:12:AM', '2022-07-04', '156');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`history_Id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payrollId`);

--
-- Indexes for table `payroll_record`
--
ALTER TABLE `payroll_record`
  ADD PRIMARY KEY (`payroll_recordId`);

--
-- Indexes for table `payslip`
--
ALTER TABLE `payslip`
  ADD PRIMARY KEY (`payslipId`);

--
-- Indexes for table `session_records`
--
ALTER TABLE `session_records`
  ADD PRIMARY KEY (`sessionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base`
--
ALTER TABLE `base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `history_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payrollId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `payroll_record`
--
ALTER TABLE `payroll_record`
  MODIFY `payroll_recordId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payslip`
--
ALTER TABLE `payslip`
  MODIFY `payslipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `session_records`
--
ALTER TABLE `session_records`
  MODIFY `sessionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=875;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
