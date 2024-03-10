-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 11:27 AM
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
-- Database: `zoo_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'Admin', 987654321, 'Admin@gmail.com', 'Admin', '456789');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `MESSAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `EMAIL`, `MESSAGE`) VALUES
(5, 'roshan ', 'roshan@gmail.com', 'e32r34r34t'),
(6, 'roshan ', 'rosh@gmail.com', 'r4r45'),
(7, 'roshan ', 'rosh@gmail.com', 'r4r45'),
(8, 'r4t ', 'rosh@gmail.com', 'r4r45'),
(9, 'r4t ', 'rosh@gmail.com', 'r4r45'),
(10, 'r4t ', 'rosh@gmail.com', 'r4r45'),
(11, 'rosj ', 'eew@gmail.com', 't4t5'),
(12, 'r4t ', 're@gmail.com', 'y6y6'),
(13, 'r4t ', 're@gmail.com', 'y6y6'),
(14, 'r4t ', 're@gmail.com', 'y6y6'),
(15, 'r4t ', 're@gmail.com', 'y6y6'),
(16, 'r4t ', 're@gmail.com', 'y6y6'),
(17, ' ', '', ''),
(18, 'r4t5e ', 'tret@gmail.com', 'y6y6'),
(20, 'frgtt ', 'sw@gmail.com', 'hythytj');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `Animal_id` int(11) NOT NULL,
  `Action` varchar(20) NOT NULL,
  `CreationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `Animal_id`, `Action`, `CreationDate`) VALUES
(1, 4, 'Inserted', '2023-01-25 19:37:03'),
(2, 3, 'Updated', '2023-01-25 19:40:00'),
(3, 4, 'Deleted', '2023-01-25 19:42:33'),
(4, 5, 'Inserted', '2023-01-25 22:17:49'),
(5, 3, 'Deleted', '2023-01-25 22:18:11'),
(6, 5, 'Deleted', '2023-01-25 22:18:12'),
(7, 6, 'Inserted', '2023-01-26 15:10:07'),
(8, 6, 'Deleted', '2023-01-26 15:10:09'),
(9, 7, 'Inserted', '2023-01-26 15:10:18'),
(10, 7, 'Updated', '2023-01-27 16:03:47'),
(11, 8, 'Inserted', '2023-01-27 16:05:25'),
(12, 7, 'Deleted', '2023-01-27 16:05:43'),
(13, 8, 'Deleted', '2023-01-27 16:05:44'),
(14, 9, 'Inserted', '2023-01-27 23:32:51'),
(15, 10, 'Inserted', '2023-01-27 23:34:51'),
(16, 11, 'Inserted', '2023-01-27 23:36:15'),
(17, 12, 'Inserted', '2023-01-27 23:37:32'),
(18, 13, 'Inserted', '2023-01-28 10:38:02'),
(19, 9, 'Deleted', '2023-01-28 10:38:06'),
(20, 14, 'Inserted', '2023-01-28 11:40:58'),
(21, 10, 'Updated', '2023-01-28 11:41:27'),
(22, 11, 'Updated', '2023-01-28 11:41:27'),
(23, 12, 'Updated', '2023-01-28 11:41:27'),
(24, 13, 'Updated', '2023-01-28 11:41:27'),
(25, 14, 'Updated', '2023-01-28 11:41:27'),
(26, 10, 'Deleted', '2023-01-28 11:41:43'),
(27, 11, 'Deleted', '2023-01-28 11:41:44'),
(28, 12, 'Deleted', '2023-01-28 11:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblanimal`
--

CREATE TABLE `tblanimal` (
  `id` int(10) NOT NULL,
  `AnimalName` varchar(200) DEFAULT NULL,
  `CageNumber` varchar(50) DEFAULT NULL,
  `FeedNumber` varchar(200) DEFAULT NULL,
  `AnimalImage` blob NOT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblanimal`
--

INSERT INTO `tblanimal` (`id`, `AnimalName`, `CageNumber`, `FeedNumber`, `AnimalImage`, `Description`, `CreationDate`) VALUES
(13, 'ugfg', 'lifre', 'irh4rgfge', '', 'bfiref', '0000-00-00'),
(14, 'ugfg', 'lifre', 'irh4rgfge', '', 'bfiref', '0000-00-00');

--
-- Triggers `tblanimal`
--
DELIMITER $$
CREATE TRIGGER `deleteLog` BEFORE DELETE ON `tblanimal` FOR EACH ROW INSERT INTO logs VALUES(null,OLD.id,'Deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertLog` AFTER INSERT ON `tblanimal` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.id,'Inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLog` AFTER UPDATE ON `tblanimal` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.id,'Updated',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tcktforeign`
--

CREATE TABLE `tcktforeign` (
  `id` int(10) NOT NULL,
  `TicketID` int(10) NOT NULL,
  `VisitorName` varchar(50) NOT NULL,
  `NoAdult` int(10) NOT NULL,
  `NoChildren` int(10) NOT NULL,
  `Adultprice` int(20) NOT NULL,
  `Childrenprice` int(20) NOT NULL,
  `PostingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tcktforeign`
--

INSERT INTO `tcktforeign` (`id`, `TicketID`, `VisitorName`, `NoAdult`, `NoChildren`, `Adultprice`, `Childrenprice`, `PostingDate`) VALUES
(0, 13, 'punya', 4, 2, 1100, 600, '2006-09-12'),
(0, 14, 'mansa', 3, 2, 1100, 600, '3244-02-12'),
(0, 16, 'danni', 6, 2, 1100, 600, '2004-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tcktnormal`
--

CREATE TABLE `tcktnormal` (
  `id` int(10) NOT NULL,
  `TicketID` int(10) NOT NULL,
  `VisitorName` varchar(20) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `Adultprice` int(20) DEFAULT NULL,
  `Childrenprice` int(20) DEFAULT NULL,
  `PostingDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tcktnormal`
--

INSERT INTO `tcktnormal` (`id`, `TicketID`, `VisitorName`, `NoAdult`, `NoChildren`, `Adultprice`, `Childrenprice`, `PostingDate`) VALUES
(0, 50, 'roshan', 6, 4, 400, 80, '2002-09-12'),
(0, 51, 'sanjan', 3, 2, 400, 80, '2009-03-12'),
(0, 52, 'rakshi', 4, 3, 400, 80, '3345-04-23'),
(0, 53, 'kushal', 5, 6, 400, 80, '4208-03-12'),
(0, 54, 'roshan', 4, 6, 400, 80, '2002-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `tckttype`
--

CREATE TABLE `tckttype` (
  `id` int(10) NOT NULL,
  `Tickettype` varchar(20) DEFAULT NULL,
  `Price` int(20) NOT NULL,
  `CreationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tckttype`
--

INSERT INTO `tckttype` (`id`, `Tickettype`, `Price`, `CreationDate`) VALUES
(1, 'Normal Adult', 400, '2001-07-12'),
(3, 'Normal Child', 80, '2001-07-12'),
(5, 'Foreign Adult', 1100, '2001-07-12'),
(7, 'Foreign Child', 600, '2002-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tcktforeign`
--
ALTER TABLE `tcktforeign`
  ADD PRIMARY KEY (`TicketID`),
  ADD KEY `Childrenprice` (`Childrenprice`);

--
-- Indexes for table `tcktnormal`
--
ALTER TABLE `tcktnormal`
  ADD PRIMARY KEY (`TicketID`),
  ADD KEY `Adultprice` (`Adultprice`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tckttype`
--
ALTER TABLE `tckttype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Price` (`Price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tcktforeign`
--
ALTER TABLE `tcktforeign`
  MODIFY `TicketID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tcktnormal`
--
ALTER TABLE `tcktnormal`
  MODIFY `TicketID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tckttype`
--
ALTER TABLE `tckttype`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tcktforeign`
--
ALTER TABLE `tcktforeign`
  ADD CONSTRAINT `tcktforeign_ibfk_1` FOREIGN KEY (`Childrenprice`) REFERENCES `tckttype` (`Price`);

--
-- Constraints for table `tcktnormal`
--
ALTER TABLE `tcktnormal`
  ADD CONSTRAINT `tcktnormal_ibfk_1` FOREIGN KEY (`Adultprice`) REFERENCES `tckttype` (`Price`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
