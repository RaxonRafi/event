-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 05:35 PM
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
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `EventID` varchar(11) NOT NULL,
  `EventName` varchar(255) NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` time NOT NULL,
  `EventLocation` varchar(255) NOT NULL,
  `EventDescription` varchar(255) NOT NULL,
  `EventStatus` varchar(50) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `EventID`, `EventName`, `EventDate`, `EventTime`, `EventLocation`, `EventDescription`, `EventStatus`, `deleted`) VALUES
(6, '65085cdeac', 'Norman Ray', '1997-01-09', '02:40:00', 'Ullamco accusantium ', 'Voluptate laborum N', 'Select Event Status...', 1),
(7, '650705fc97', 'Yeo Ellison', '1975-11-01', '08:13:00', 'Expedita vitae quod ', 'Anim optio expedita', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `BudgetID` varchar(11) NOT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `ItemDescription` text DEFAULT NULL,
  `ItemCost` decimal(10,2) DEFAULT NULL,
  `EventID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`BudgetID`, `ItemName`, `ItemDescription`, `ItemCost`, `EventID`) VALUES
('6501', 'Sandra Sears', 'Iste qui cum in ut m', 6.00, '65004ec623'),
('6507159570', 'Ferris Hess', 'Eiusmod voluptatem e', 27000.00, '650124fdf0'),
('650715a216', 'Mohammad Ballard', 'Est dolores possimu', 64.00, '650124fdf0'),
('6509af9c52', 'Flower', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 5000.00, '650705fc98'),
('6509afbbf1', 'Lighting', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 10000.00, '6509af60b1');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `ChecklistID` varchar(11) NOT NULL,
  `ChecklistItem` varchar(255) DEFAULT NULL,
  `ChecklistStatus` varchar(50) DEFAULT NULL,
  `EventID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`ChecklistID`, `ChecklistItem`, `ChecklistStatus`, `EventID`) VALUES
(' 6501ccdd26', 'Sed voluptatem amet', 'Completed', '65004ec623'),
(' 6509b00249', 'demo checklist item', 'Active', '650705fc98'),
(' 6509b00d8b', 'demo checklist item', 'Active', '6509af60b1');

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
  `EventStatus` varchar(50) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `EventDate`, `EventTime`, `EventLocation`, `EventDescription`, `EventStatus`, `deleted`) VALUES
('65004ec623', 'Birthday party', '1993-02-03', '10:38:00', 'Pariatur Omnis fuga', 'Exercitationem id q', 'Completed', 0),
('650124fdf0', 'Wedding event update', '2023-09-30', '00:56:00', 'Agrabad Chattogram', 'Hello World', 'Active', 0),
('650705fc98', 'Demo Event1', '1975-11-01', '08:13:00', 'Expedita vitae quod ', 'Anim optio expedita', 'Active', 0),
('6509af3a19', 'demo event', '2023-09-13', '23:25:00', 'Andorkilla', 'It is a long established fact that a reader', 'Active', 0),
('6509af60b1', 'demo event2', '2023-09-29', '21:27:00', 'Kotwali, Chattogram', 'It is a long established fact that a reader', 'Completed', 0);

--
-- Triggers `event`
--
DELIMITER $$
CREATE TRIGGER `move_deleted_data` AFTER DELETE ON `event` FOR EACH ROW BEGIN
    INSERT INTO backup(EventID, EventName, EventDate, EventTime, EventLocation, EventDescription, EventStatus,deleted)
    VALUES (OLD.EventID, OLD.EventName,OLD.EventDate,OLD.EventTime,OLD.EventLocation,OLD.EventDescription,OLD.EventStatus,'1');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `event_task_view`
-- (See below for the actual view)
--
CREATE TABLE `event_task_view` (
`EventID` varchar(11)
,`EventName` varchar(255)
,`TaskAssignedTo` varchar(255)
,`TaskDescription` text
,`TaskStatus` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `GuestID` varchar(11) NOT NULL,
  `GuestName` varchar(255) DEFAULT NULL,
  `GuestEmail` varchar(255) DEFAULT NULL,
  `GuestPhone` varchar(20) DEFAULT NULL,
  `GuestRSVPStatus` varchar(50) DEFAULT NULL,
  `EventID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`GuestID`, `GuestName`, `GuestEmail`, `GuestPhone`, `GuestRSVPStatus`, `EventID`) VALUES
('6501d0409d', ' Julian Bailey', 'vypuduvul@mailinator.com', '+1 (955) 893-7841', ' Cancelled', '650124fdf0'),
('6509b1121e', ' Randall Jarvis', 'gyren@mailinator.com', '+1 (656) 878-1596', ' Active', '650705fc98'),
('6509b11adc', ' Patricia Rodriquez', 'gyren@mailinator.com', '+1 (457) 735-5335', ' Active', '6509af60b1');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TaskID` varchar(11) NOT NULL,
  `TaskDescription` text DEFAULT NULL,
  `TaskStatus` varchar(50) DEFAULT NULL,
  `TaskAssignedTo` varchar(255) DEFAULT NULL,
  `EventID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TaskID`, `TaskDescription`, `TaskStatus`, `TaskAssignedTo`, `EventID`) VALUES
('6501c9654e', 'Quam esse et doloru', 'Completed', 'Assumenda asperiores', '650124fdf0'),
('6501c9694c', 'Et dolor ducimus la', 'Completed', 'Est fugiat ab ea eum', '65004ec623'),
('65070dc9c1', 'Et omnis eiusmod cul', 'Completed', 'Id enim enim magnam ', '650124fdf0'),
('65070dd3a5', 'Non iure et incididu', 'Active', 'Laborum vel voluptat', '650124fdf0'),
('65070ddb35', 'Adipisci culpa accus', 'Cancelled', 'Velit enim voluptas ', '650124fdf0'),
('6509afcdba', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Active', 'Mahadir', '650705fc98'),
('6509afe59d', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Active', 'Farhana', '6509af60b1');

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
('64f742e073', 'Muhammad', 'Rafi', '$2y$10$SMCeyPnv8sme7uZr7/B6j.SZVdwi63bJaUjzU/Gljy2CQUiG0l98u', 'dev.muhammad.rafi@gmail.com', '01867118351'),
('650949f1c7', 'Fahana', 'Afsar', '$2y$10$SLcYABtevDYsA9vQoACDiOEgzU56MDWHJcrPoCHUFXYCHfyLZ0NnC', 'farhanaafsarccpc23@gmail.com', '01854668360'),
('65095bb2c2', 'Mahadir Mohammad ', 'Chowdhury Fahim', '$2y$10$DPk4SOkQj8mlbdmGl07Yw.P4piaqssgpHCW5.2h6YKcW.6JlLJsSm', 'fahim2001chy@gmail.com', '01835489027'),
('6509ae9239', 'Demo ', 'User', '$2y$10$Xp.jVWWP.BxwtFhp5vI49e3MxqHPIzTPG8grTBpye8XORLXwvHMKG', 'demo@abc.com', '01867118351');

-- --------------------------------------------------------

--
-- Structure for view `event_task_view`
--
DROP TABLE IF EXISTS `event_task_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `event_task_view`  AS SELECT `event`.`EventID` AS `EventID`, `event`.`EventName` AS `EventName`, `task`.`TaskAssignedTo` AS `TaskAssignedTo`, `task`.`TaskDescription` AS `TaskDescription`, `task`.`TaskStatus` AS `TaskStatus` FROM (`event` join `task` on(`event`.`EventID` = `task`.`EventID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`ChecklistID`),
  ADD KEY `fk_checklist_event` (`EventID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`GuestID`),
  ADD KEY `fk_guest_event` (`EventID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`),
  ADD KEY `fk_task_event` (`EventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `fk_budget_event` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `fk_checklist_event` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `fk_guest_event` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_task_event` FOREIGN KEY (`EventID`) REFERENCES `event` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
