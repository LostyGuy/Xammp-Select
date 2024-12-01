-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 12:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainshower`
--

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`ID`, `NAME`) VALUES
(5, 'Blizzard Entertainment'),
(2, 'Coffe Stain Studios'),
(7, 'David Goldfarb'),
(6, 'Maxis'),
(4, 'Mojang Studios'),
(3, 'Valve Corporation'),
(1, 'Wube Software');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `ID` int(100) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `TAG` int(100) NOT NULL,
  `DEVELOPER` int(100) NOT NULL,
  `PUBLISHER` int(100) NOT NULL,
  `PLATFORM` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`ID`, `TITLE`, `TAG`, `DEVELOPER`, `PUBLISHER`, `PLATFORM`) VALUES
(1, 'Factorio', 1, 1, 1, 1),
(2, 'Satisfactory', 2, 2, 2, 2),
(3, 'Counter Strike 2', 3, 3, 3, 4),
(4, 'Minecraft', 4, 4, 4, 1),
(5, 'Overwatch', 5, 5, 5, 1),
(6, 'Overwatch 2', 5, 5, 5, 4),
(7, 'The sims 4', 6, 6, 6, 1),
(8, 'Battlefield 3', 7, 7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`ID`, `NAME`) VALUES
(2, 'MacOS'),
(3, 'Nintendo'),
(4, 'PlayStation 4'),
(1, 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`ID`, `NAME`) VALUES
(5, 'Blizzard Entertainment'),
(2, 'Coffe Stain Studios'),
(7, 'EA'),
(6, 'Maxis'),
(4, 'Mojang Studios'),
(3, 'Valve Corporation'),
(1, 'Wube Software');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`ID`, `NAME`) VALUES
(5, 'Fighting Game'),
(7, 'First-Person Shooter'),
(6, 'Life Sumilation Game'),
(1, 'Real-Time Strategy'),
(2, 'Simulation Video Game'),
(4, 'Survival Game'),
(3, 'Tactical Shooter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `YEAR_OLD` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NAME_3` (`NAME`),
  ADD KEY `NAME` (`NAME`),
  ADD KEY `NAME_2` (`NAME`),
  ADD KEY `ID` (`ID`),
  ADD KEY `NAME_4` (`NAME`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DEVELOPER` (`DEVELOPER`,`PUBLISHER`,`PLATFORM`),
  ADD KEY `TITLE` (`TITLE`,`TAG`),
  ADD KEY `TAG` (`TAG`),
  ADD KEY `PUBLISHER` (`PUBLISHER`),
  ADD KEY `PLATFORM` (`PLATFORM`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NAME` (`NAME`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NAME` (`NAME`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NAME` (`NAME`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`TAG`) REFERENCES `tags` (`ID`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`PUBLISHER`) REFERENCES `publishers` (`ID`),
  ADD CONSTRAINT `games_ibfk_3` FOREIGN KEY (`PLATFORM`) REFERENCES `platform` (`ID`),
  ADD CONSTRAINT `games_ibfk_4` FOREIGN KEY (`DEVELOPER`) REFERENCES `developers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
