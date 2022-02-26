-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 02:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aas`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `PhoneNumber` varchar(128) DEFAULT NULL,
  `UserPassword` varchar(128) NOT NULL,
  `Firstname` varchar(128) NOT NULL,
  `Lastname` varchar(128) NOT NULL,
  `Position` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `PhoneNumber`, `UserPassword`, `Firstname`, `Lastname`, `Position`) VALUES
(1, 'lc201700195@wmsu.edu.ph', NULL, '$2y$10$bqvMDnlHGxY.AHWneubZzOCHtZMi93qxCSyEWxJe8W3Jby7dB9iFa', 'Jhoemer', 'Muyco', NULL),
(2, 'jason.muyco8@gmail.com', NULL, '$2y$10$phWYu3z/aibNc6GVAb.RketExAEaw2CoHJZsq11DkJgskR4BwRCOi', 'Jason', 'Muyco', NULL),
(3, 'arvin.corpuz@gmail.com', NULL, '$2y$10$97KXE4vxwg36FMidiFFC9usUe.1MrGcATYMOHcN3B10lw9IWb0cou', 'Arvin Dwight', 'Corpuz', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
