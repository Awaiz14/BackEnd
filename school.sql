-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 11:09 PM
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
  `studentName` varchar(50) DEFAULT NULL,
  `studentSurname` varchar(50) DEFAULT NULL,
  `className` varchar(50) DEFAULT NULL,
  `attendanceStatus` varchar(50) DEFAULT NULL,
  `attendanceNotes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`studentID`, `attendanceDate`, `studentName`, `studentSurname`, `className`, `attendanceStatus`, `attendanceNotes`) VALUES
('S001', '2023-12-04', 'Harry', 'Potter', 'Year1', 'Absent', 'Rang in sick'),
('S001', '2023-12-08', 'Harry', 'Potter', 'Year1', 'Late', 'traffic'),
('S001', '2023-12-10', 'Harry', 'Potter', 'Year1', 'Absent', 'Sick'),
('S002', '2023-12-04', 'Sammy', 'Doe', 'Year1', 'Late', 'Train delayed'),
('S002', '2023-12-10', 'Sammy', 'Doe', 'Year3', 'Present', ''),
('S003', '2023-12-04', 'Steven', 'Richard', 'Reception', 'Late', 'Train delays'),
('S003', '2023-12-05', 'Steven', 'Richard', 'Reception', 'Late', ''),
('S003', '2023-12-10', 'Steven', 'Richard', 'Reception', 'Late', 'Had appointment'),
('S004', '2023-12-10', 'Harry', 'Maguire', 'Year6', 'Late', 'Hospital appointment'),
('S007', '2023-12-10', 'Liam', 'Smith', 'Year4', 'Present', '');

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
('Reception', 'T001', 30),
('Year1', 'T003', 16),
('Year2', 'T004', 15),
('Year3', 'T006', 20),
('Year4', 'T002', 10),
('Year5', 'T007', 22),
('Year6', 'T005', 14);

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
('P003', 'Jannet', 'Doe', 'jannet@gmail.com', '07217199017', '5 Churn Close, Crudgington, England, TF6 6FE'),
('P004', 'John', 'Richard', 'Lennoncakes@hotmail.com', '07211524719', '42 Belmont Drive, Staveley, England, S43 3PQ'),
('P005', 'Emily', 'Maguire', 'emmie@mufc.com', '07524362842', '1 Monument View, Polesworth, England, B78 1NF'),
('P006', 'Maisie', 'Richard', 'Maisielazy@btnet.com', '07662553917', '42 Belmont Drive, Staveley, England, S43 3PQ'),
('P007', 'Rose', 'Jane', 'Rosie@hotmail.com', '07329428821', '80 Higher Market Street, Farnworth, England, BL4 9BB'),
('P008', 'Dave', 'Tielman', 'Dave63@gmail.com', '07826528572', '16 Back Mowbray Terrace, Choppington, England, NE62 5QH'),
('P009', 'Jude', 'Smith', 'Judey@hotmail.co.uk', '07847262745', '104 Caldey Place, Blaenymaes, England, SA5 5PN'),
('P010', 'Cristian', 'Smith', 'Cristy241@hotmail.com', '07254781187', '104 Caldey Place, Blaenymaes, England, SA5 5PN');

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
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`staffID`, `staffRole`, `staffLevel`, `annualPay`, `payFrequency`) VALUES
('T001', 'Teacher', '3', 40000, 'Monthly'),
('T002', 'Teacher', '1', 24500, 'Monthly'),
('T003', 'Teacher', '2', 32000, 'Monthly'),
('T004', 'Teacher', '3', 35000, 'Monthly'),
('TA002', 'Assistant', '1', 20000, 'Weekly'),
('TA003', 'Assistant', '1', 18000, 'Monthly'),
('TA004', 'Assistant', '3', 24000, 'Weekly');

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
('S001', 'Harry', 'Potter', '2019-09-01', 'HarryS001@alphonsus.ac.uk', '81 Sandon Road, Stafford, England, ST16 3HF', 'Year1', 'T003', 'P001', 'P002', ''),
('S002', 'Sammy', 'Doe', '2015-06-14', 'JohnnyS002@alphonsus.ac.uk', '5 Churn Close, Crudgington, England, TF6 6FE', 'Year3', 'T006', 'P003', '', 'Has Asthma'),
('S003', 'Steven', 'Richard', '2015-04-15', 'StevenS003@alphonsus.ac.uk', '42 Belmont Drive, Staveley, England, S43 3PQ', 'Reception', 'T001', 'P004', 'P006', 'Allergic to walnuts'),
('S004', 'Harry', 'Maguire', '2013-02-06', 'HarryS004@alphonsus.ac.uk', '1 Monument View, Polesworth, England, B78 1NF', 'Year6', 'T005', 'P005', '', ''),
('S005', 'Mary', 'Jane', '2013-10-10', 'MaryS005@alphonsus.ac.uk', '80 Higher Market Street, Farnworth, England, BL4 9BB', 'Year5', 'T007', 'P007', '', ''),
('S006', 'Bethany', 'Tielman', '2017-05-16', 'BethanyS006@alphonsus.ac.uk', '16 Back Mowbray Terrace, Choppington, England, NE62 5QH', 'Year2', 'T004', 'P008', '', 'Partially blind'),
('S007', 'Liam', 'Smith', '2015-03-27', 'LiamS007@alphonsus.ac.uk', '104 Caldey Place, Blaenymaes, England, SA5 5PN', 'Year4', 'T002', 'P010', 'P009', 'Allergic to wheat');

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
  `assistantSalary` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherassistants`
--

INSERT INTO `teacherassistants` (`assistantID`, `assistantTitle`, `assistantName`, `assistantSurname`, `assistantDOB`, `assistantEmail`, `assistantPhone`, `assistantAddress`, `teacherID`, `assistantSalary`) VALUES
('TA001', 'Mr', 'Ed', 'Warren', '1970-09-04', 'Warrenman@conjuring.com', '07392748194', '29 Greenwood Close, Birmingham, England, B14 6ET', 'T004', NULL),
('TA002', 'Mr', 'Robert', 'Lewandowski', '1980-09-17', 'Rl9@polski.com', '07947284281', '34 Charnwood Crescent, Newton, England, DE55 5SB', 'T007', 20000),
('TA003', 'Mrs', 'Emma', 'Watson', '1982-02-16', 'Emmaw@gmail.com', '07362582917', '92 Huntington Road, York, England, YO31 8RN', 'T005', 18000),
('TA004', 'Miss', 'Zara', 'Larsson', '1992-01-01', 'ZaraLars@yahoo.com', '07462184763', '1 Pengeulan, Dolwyddelan, England, LL25 0UQ', 'T001', 24000);

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
  `teacherSalary` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `teacherTitle`, `teacherName`, `teacherSurname`, `teacherDOB`, `teacherEmail`, `teacherPhone`, `teacherAddress`, `teacherSalary`) VALUES
('T001', 'Miss', 'Wanda', 'Maximoff', '1990-06-23', 'Scarletwitch@gmail.com', '07937622864', '87 Railway Road, Downham, England, PE38 9EL', 40000),
('T002', 'Miss', 'Bella', 'Swan', '1955-04-18', 'omgedward@yahoo.com', '07284729645', '6 Kings Pool Walk, York, England, YO1 7NA', 24500),
('T003', 'Mr', 'Peter', 'Parker', '1998-09-13', 'Spidey@webs.com', '07663297562', '66 Park Lane, London, England, OX42 5BE', 32000),
('T004', 'Mrs', 'Lorraine', 'Warren', '1976-12-14', 'Iseeghosts@conjuring.com', '07328427182', '36 Buxted Road, Kirkby, England, L32 6SQ', 35000),
('T005', 'Mr', 'Michael', 'Scofield', '1982-03-29', 'prisonbreaker@gmail.com', '07381942754', '49A Lytton Grove, London, England, SW15 2HD', NULL),
('T006', 'Mrs', 'Ariana', 'Grande', '1963-10-06', 'Arianboo@hotmail.co.uk', '07518427491', '18 Almond Drive, Plymouth, England, PL7 2WY', NULL),
('T007', 'Mr', 'Cristiano', 'Ronaldo', '1987-07-07', 'Cr7@ronaldo.com', '07927644255', '3 Brow Street, Maryport, England, CA15 6EF', NULL);

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
