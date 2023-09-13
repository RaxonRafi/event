-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 05:03 AM
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
-- Database: `event_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `BudgetID` int(11) NOT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `ItemDescription` text DEFAULT NULL,
  `ItemCost` decimal(10,2) DEFAULT NULL,
  `EventID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `ChecklistID` int(11) NOT NULL,
  `EventID` int(11) DEFAULT NULL,
  `ChecklistItem` varchar(255) DEFAULT NULL,
  `ChecklistStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` varchar(11) NOT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `EventTime` time DEFAULT NULL,
  `EventLocation` varchar(255) DEFAULT NULL,
  `EventDescription` text DEFAULT NULL,
  `EventStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `EventDate`, `EventTime`, `EventLocation`, `EventDescription`, `EventStatus`) VALUES
('64f74fb15f', 'Nelle Kline', '2010-07-13', '17:04:00', 'Aliquip repudiandae ', 'Molestiae reprehende', 'Cancelled'),
('64f74fcd85', 'Octavius Booker', '1986-02-19', '09:17:00', 'Quia mollit in velit', 'Impedit est ut labo', 'Completed'),
('64f74fed41', 'Lael Vaughan', '1998-11-13', '15:19:00', 'Sit do modi autem co', 'Nihil sit fugit si', 'Active'),
('6500462458', 'Savannah Nieves', '2002-03-17', '15:43:00', 'Officia nihil aute i', 'Voluptate dolore lib', 'Completed'),
('65004ec623', 'Birthday party', '1993-02-03', '10:38:00', 'Pariatur Omnis fuga', 'Exercitationem id q', 'Completed'),
('650124fdf0', 'Wedding event update', '2023-09-30', '00:56:00', 'Agrabad Chattogram', 'Hello World', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `GuestID` int(11) NOT NULL,
  `EventID` int(11) DEFAULT NULL,
  `GuestName` varchar(255) DEFAULT NULL,
  `GuestEmail` varchar(255) DEFAULT NULL,
  `GuestPhone` varchar(20) DEFAULT NULL,
  `GuestRSVPStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TaskID` int(11) NOT NULL,
  `EventID` int(11) DEFAULT NULL,
  `TaskDescription` text DEFAULT NULL,
  `TaskStatus` varchar(50) DEFAULT NULL,
  `TaskAssignedTo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(10) DEFAULT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `firstName`, `lastName`, `password`, `email`, `phoneNo`) VALUES
('64eee3b85c', 'Valentine', 'Farrell', 'daramezini@mailinato', 'Non voluptatum quae ', 'Totam doloremque max'),
('64ef64da09', 'Hayes', 'Rivas', 'meqedajulu@mailinator.com', '$2y$10$Cae3J84bVAggH', '$2y$10$Is0cV1NlswqQb'),
('64ef66a73a', 'Dexter', 'Griffin', '$2y$10$eSVNPmzAfwLZkfid9x5FoexATd3seGFR9yUBGw1YjDHx9oI2PPNQC', 'xuqajudi@mailinator.', '+1 (326) 481-8632'),
('64ef67e9e1', 'Desirae', 'Strong', '$2y$10$lizfiSZzMMp75LDIkyb5ee8PtOUuaH1kOSNrrMU5EwF/ZzWORrTBG', 'povuzikag@mailinator', '+1 (227) 947-3885'),
('64f7424652', 'Muhammad', 'Rafi', '$2y$10$I8QHZbhA/ioJizY/fj8Re.oILRmt1WF9squq/1s.sMgJ2IHwd41OO', 'dev.muhammad.rafi@gm', '01867118351'),
('64f742e073', 'Muhammad', 'Rafi', '$2y$10$SMCeyPnv8sme7uZr7/B6j.SZVdwi63bJaUjzU/Gljy2CQUiG0l98u', 'dev.muhammad.rafi@gmail.com', '01867118351');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`BudgetID`),
  ADD KEY `fk_budget_event` (`EventID`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`ChecklistID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`GuestID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `fk_budget_event` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
