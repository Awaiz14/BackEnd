-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `studentID` varchar(50) NOT NULL,
  `attendanceDate` date NOT NULL,
  `attendanceStatus` varchar(50) DEFAULT NULL,
  `attendanceNotes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `className` varchar(50) NOT NULL,
  `teacherID` varchar(50) DEFAULT NULL,
  `classCapacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`className`, `teacherID`, `classCapacity`) VALUES
('Reception', 'T001', 20),
('Year1', 'T003', 15),
('Year2', 'T002', 15);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parentID` varchar(50) NOT NULL,
  `parentName` varchar(50) DEFAULT NULL,
  `parentSurname` varchar(50) DEFAULT NULL,
  `parentEmail` varchar(100) DEFAULT NULL,
  `parentPhone` varchar(50) DEFAULT NULL,
  `parentAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parentID`, `parentName`, `parentSurname`, `parentEmail`, `parentPhone`, `parentAddress`) VALUES
('', NULL, NULL, NULL, NULL, NULL),
('P001', 'James', 'Potter', 'Snapesbully@gmail.com', '07329183728', '81 Sandon Road, Stafford, England, ST16 3HF'),
('P002', 'Lily', 'Potter', 'motherseyes@yahoo.com', '07836472822', '81 Sandon Road, Stafford, England, ST16 3HF'),
('P003', 'test', 'test', 'test@test.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `staffID` varchar(50) NOT NULL,
  `staffRole` varchar(50) NOT NULL,
  `staffLevel` varchar(50) DEFAULT NULL,
  `annualPay` decimal(10,0) DEFAULT NULL,
  `payFrequency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `salaries`
--
DELIMITER $$
CREATE TRIGGER `delete_assistantSalary` AFTER DELETE ON `salaries` FOR EACH ROW BEGIN
UPDATE teacherassistants
SET assistantSalary = NULL
WHERE assistantID = OLD.staffID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_teacherSalary` AFTER DELETE ON `salaries` FOR EACH ROW BEGIN
UPDATE teachers
SET teacherSalary = NULL
WHERE teacherID = OLD.staffID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` varchar(50) NOT NULL,
  `studentName` varchar(50) DEFAULT NULL,
  `studentSurname` varchar(50) DEFAULT NULL,
  `studentDOB` date DEFAULT NULL,
  `studentEmail` varchar(50) DEFAULT NULL,
  `studentAddress` varchar(100) DEFAULT NULL,
  `className` varchar(50) DEFAULT NULL,
  `teacherID` varchar(50) DEFAULT NULL,
  `parent1ID` varchar(50) DEFAULT NULL,
  `parent2ID` varchar(50) DEFAULT NULL,
  `medicalInfo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `studentName`, `studentSurname`, `studentDOB`, `studentEmail`, `studentAddress`, `className`, `teacherID`, `parent1ID`, `parent2ID`, `medicalInfo`) VALUES
('S001', 'Harry', 'Potter', '2019-09-01', 'HarryS001@alphonsus.ac.uk', '81 Sandon Road, Stafford, England, ST16 3HF', 'Reception', 'T001', 'P001', 'P002', 'Has a scar that hurts 24/7');

-- --------------------------------------------------------

--
-- Table structure for table `teacherassistants`
--

CREATE TABLE `teacherassistants` (
  `assistantID` varchar(50) NOT NULL,
  `assistantTitle` varchar(50) DEFAULT NULL,
  `assistantName` varchar(50) DEFAULT NULL,
  `assistantSurname` varchar(50) DEFAULT NULL,
  `assistantDOB` date DEFAULT NULL,
  `assistantEmail` varchar(100) DEFAULT NULL,
  `assistantPhone` varchar(50) DEFAULT NULL,
  `assistantAddress` varchar(100) DEFAULT NULL,
  `teacherID` varchar(50) DEFAULT NULL,
  `assistantSalary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherassistants`
--

INSERT INTO `teacherassistants` (`assistantID`, `assistantTitle`, `assistantName`, `assistantSurname`, `assistantDOB`, `assistantEmail`, `assistantPhone`, `assistantAddress`, `teacherID`, `assistantSalary`) VALUES
('TA002', 'Mr', 'Bucky', 'Barnes', '1974-12-27', 'WinterSoldier@gmail.com', '07891665382', '5 Bourne Close, Salisbury, England, SP1 1NR', 'T002', NULL);

--
-- Triggers `teacherassistants`
--
DELIMITER $$
CREATE TRIGGER `delete_teacherassistant` AFTER DELETE ON `teacherassistants` FOR EACH ROW BEGIN
DELETE FROM salaries
WHERE staffID = OLD.assistantID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherID` varchar(50) NOT NULL,
  `teacherTitle` varchar(50) DEFAULT NULL,
  `teacherName` varchar(50) DEFAULT NULL,
  `teacherSurname` varchar(50) DEFAULT NULL,
  `teacherDOB` date DEFAULT NULL,
  `teacherEmail` varchar(100) DEFAULT NULL,
  `teacherPhone` varchar(50) DEFAULT NULL,
  `teacherAddress` varchar(100) DEFAULT NULL,
  `teacherSalary` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `teacherTitle`, `teacherName`, `teacherSurname`, `teacherDOB`, `teacherEmail`, `teacherPhone`, `teacherAddress`, `teacherSalary`) VALUES
('T001', 'Miss', 'Wanda', 'Maximoff', '1998-06-23', 'Scarletwitch@gmail.com', '07937622865', '87 Railway Road, Downham, England, PE38 9EL', NULL),
('T002', 'Mr', 'Steve', 'Rogers', '1973-08-16', 'Captainamerica@yahoo.com', '07852741964', '101 Castle Drive, Preston, England, PR1 2FB', NULL),
('T003', 'Mr', 'Peter', 'Parker', '1998-09-13', 'Spidey@webs.co.uk', '07663297562', '66 Park Lane, London, England, OX42 5BE', NULL);

--
-- Triggers `teachers`
--
DELIMITER $$
CREATE TRIGGER `delete_teacher` AFTER DELETE ON `teachers` FOR EACH ROW BEGIN
DELETE FROM salaries 
WHERE staffID = OLD.teacherID;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`studentID`,`attendanceDate`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`className`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parentID`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`staffID`,`staffRole`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `className` (`className`),
  ADD KEY `teacherID` (`teacherID`),
  ADD KEY `parent1ID` (`parent1ID`),
  ADD KEY `parent2ID` (`parent2ID`);

--
-- Indexes for table `teacherassistants`
--
ALTER TABLE `teacherassistants`
  ADD PRIMARY KEY (`assistantID`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`);

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`className`) REFERENCES `classes` (`className`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`parent1ID`) REFERENCES `parents` (`parentID`),
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`parent2ID`) REFERENCES `parents` (`parentID`);

--
-- Constraints for table `teacherassistants`
--
ALTER TABLE `teacherassistants`
  ADD CONSTRAINT `teacherassistants_ibfk_1` FOREIGN KEY (`teacherID`) REFERENCES `teachers` (`teacherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
