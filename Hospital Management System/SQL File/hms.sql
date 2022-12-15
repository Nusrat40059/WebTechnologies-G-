-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 01:16 PM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admittedpatient`
--

CREATE TABLE `admittedpatient` (
  `Id` int(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admittedpatient`
--

INSERT INTO `admittedpatient` (`Id`, `PatientName`, `Age`, `Phone`, `Speciality`) VALUES
(2, 'Kabyo ', '24', '01711355787', 'Medicine'),
(3, 'Prosenjit', '24', '01711355787', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(100) NOT NULL,
  `UserName` text NOT NULL,
  `A_Time` text NOT NULL,
  `A_Date` text NOT NULL,
  `Speciality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `UserName`, `A_Time`, `A_Date`, `Speciality`) VALUES
(1, 'Nusrat', '13:14', '2022-11-28', 'Medicine'),
(2, 'sazin', '13:00', '2022-11-29', 'Oncology'),
(4, 'Nusrat', '13:37', '2022-12-05', 'Medicine'),
(6, 'Nusrat', '18:05', '2022-12-15', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Complain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Id`, `Username`, `Title`, `Complain`) VALUES
(1, 'kabyo', 'check', 'scfsdcf');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_db`
--

CREATE TABLE `doctors_db` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_db`
--

INSERT INTO `doctors_db` (`Id`, `Name`, `Email`, `Gender`, `Username`, `Password`, `Contact`, `Speciality`, `Photo`) VALUES
(6, 'Nusrat', 'nusrat@gmail.com', 'Female', 'Nusrat', '123456789', '0123456789', 'Oncology', '../Asset/Photo/Untitled design1.png');

-- --------------------------------------------------------

--
-- Table structure for table `equipement`
--

CREATE TABLE `equipement` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipement`
--

INSERT INTO `equipement` (`Id`, `Name`, `Price`, `Date`) VALUES
(2, 'MRI', '3500000', '2022-08-19'),
(3, 'CT Scan', '1200000', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalbills`
--

CREATE TABLE `hospitalbills` (
  `Id` int(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Utility` varchar(100) NOT NULL,
  `EmployeeSalary` varchar(100) NOT NULL,
  `TotalBill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalbills`
--

INSERT INTO `hospitalbills` (`Id`, `Month`, `Utility`, `EmployeeSalary`, `TotalBill`) VALUES
(1, 'January', '50000', '170000', '220000'),
(2, 'August', '150000', '860000', '1010000'),
(3, 'August', '150000', '860000', '1010000'),
(4, 'December 2022', '10000', '20000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceNo` int(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `TestBill` varchar(100) NOT NULL,
  `DoctorBill` varchar(100) NOT NULL,
  `TotalBill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`Id`, `Name`, `Email`, `Gender`, `Username`, `Password`, `Contact`, `Photo`) VALUES
(1, 'dcfvsdvc', 'check@gmail.com', 'Male', 'sakib', '123456789', '111111', ''),
(2, 'mr check', 'check@gmail.com', 'Male', 'check1', 'nnnnnn', '111111', '../Asset/Photo/eng.png'),
(3, 'Mr Check', 'check@gmail.com', 'Male', 'check', 'nnnnnn', '111111', '../Asset/Photo/eng.png'),
(4, 'bbb', 'bb', 'Male', 'bbb', '', 'b', '../Asset/Photo/flusk.png'),
(5, 'Prosenjit Chowdhury', 'prosenjit@gmail.com', 'Male', 'prosenjit', '111111', '01223355661', '../Asset/Photo/eng.png'),
(6, 'Sazin', 'sazinzaman@gmail.com', 'Male', 'sazin', '123456789', '01759014044', '../Asset/Photo/WeChat Image_20221203221943.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Body` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `Title`, `Body`) VALUES
(7, 'Notice From Management', 'Urgent Meeting Needed'),
(8, 'Introduction To Linux', 'Checking Notice');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Id` int(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Medicine` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Id`, `Doctor`, `PatientName`, `Age`, `Medicine`, `Speciality`) VALUES
(1, 'rahul', 'Jisun Abedin', '23', 'Napa', 'Medicine'),
(2, 'rahul', 'Rahim Mia', '26', 'Napa, Tufnil, Volagel', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `Withdrawn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Id`, `Username`, `Month`, `Salary`, `Withdrawn`) VALUES
(1, 'rahul', 'July', '25000', 'Withdrawn'),
(2, 'rahul', 'August', '25000', 'Withdrawn');

-- --------------------------------------------------------

--
-- Table structure for table `testprice`
--

CREATE TABLE `testprice` (
  `Id` int(100) NOT NULL,
  `TestName` text NOT NULL,
  `Price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testprice`
--

INSERT INTO `testprice` (`Id`, `TestName`, `Price`) VALUES
(11, 'X-Ray', '500'),
(12, 'autopsy', '1500'),
(13, 'Biopsy', '3000'),
(14, 'Blood Test', '200'),
(15, 'Ultrasound', '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admittedpatient`
--
ALTER TABLE `admittedpatient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors_db`
--
ALTER TABLE `doctors_db`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hospitalbills`
--
ALTER TABLE `hospitalbills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceNo`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testprice`
--
ALTER TABLE `testprice`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admittedpatient`
--
ALTER TABLE `admittedpatient`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_db`
--
ALTER TABLE `doctors_db`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitalbills`
--
ALTER TABLE `hospitalbills`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testprice`
--
ALTER TABLE `testprice`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
