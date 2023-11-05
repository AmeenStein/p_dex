-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `gyms`
--

CREATE TABLE `gyms` (
  `GymID` int(8) NOT NULL,
  `Type` tinytext DEFAULT NULL,
  `Gym_Name` tinytext DEFAULT NULL,
  `Leader_Name` tinytext DEFAULT NULL,
  `Location` text DEFAULT NULL,
  `1_pokemon` varchar(32) DEFAULT NULL,
  `2_pokemon` varchar(32) DEFAULT NULL,
  `3_pokemon` varchar(32) DEFAULT NULL,
  `4_pokemon` varchar(32) DEFAULT NULL,
  `5_pokemon` varchar(32) DEFAULT NULL,
  `6_pokemon` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `PokemonID` int(4) NOT NULL,
  `Type` tinytext DEFAULT NULL,
  `Name` tinytext DEFAULT NULL,
  `dex_entry` varchar(256) DEFAULT NULL,
  `size` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `habitat` varchar(64) DEFAULT NULL,
  `evolutions` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `TrainerID` int(8) NOT NULL,
  `Name` tinytext DEFAULT NULL,
  `Location` text DEFAULT NULL,
  `1_pokemon` varchar(32) DEFAULT NULL,
  `2_pokemon` varchar(32) DEFAULT NULL,
  `3_pokemon` varchar(32) DEFAULT NULL,
  `4_pokemon` varchar(32) DEFAULT NULL,
  `5_pokemon` varchar(32) DEFAULT NULL,
  `6_pokemon` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`TrainerID`, `Name`, `Location`, `1_pokemon`, `2_pokemon`, `3_pokemon`, `4_pokemon`, `5_pokemon`, `6_pokemon`) VALUES
(1, 'bird catcher', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Red', 'Route 1', 'Pikachu lv.81', 'Espeon lv.73', 'Snorlax lv.75', 'Venasaur lv.77', 'Charizard lv.77', 'Blastoise lv.77');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(8) NOT NULL,
  `User_name` tinytext DEFAULT NULL,
  `User_email` varchar(64) DEFAULT NULL,
  `User_password` varchar(32) DEFAULT NULL,
  `User_DOB` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`GymID`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`PokemonID`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`TrainerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gyms`
--
ALTER TABLE `gyms`
  MODIFY `GymID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `PokemonID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `TrainerID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
