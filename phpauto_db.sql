-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-phpauto.alwaysdata.net
-- Generation Time: Jan 24, 2024 at 01:27 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpauto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `GAME`
--

CREATE TABLE `GAME` (
  `game_id` varchar(42) NOT NULL,
  `game_name` varchar(42) DEFAULT NULL,
  `game_details` varchar(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `GAME`
--

INSERT INTO `GAME` (`game_id`, `game_name`, `game_details`) VALUES
('test1', 'test1', 'test1'),
('test10', '10', '10'),
('test2', '2', '2'),
('test3', '3', '3'),
('test4', '4', '4'),
('test5', '5', '5'),
('test6', '6', '6'),
('test7', '7', '7'),
('test8', '8', '8'),
('test9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `PLAYS`
--

CREATE TABLE `PLAYS` (
  `user_id` int(42) NOT NULL,
  `game_id` varchar(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PLAYS`
--

INSERT INTO `PLAYS` (`user_id`, `game_id`) VALUES
(1, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(42) NOT NULL,
  `user_name` varchar(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `user_name`) VALUES
(1, 'Usertest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GAME`
--
ALTER TABLE `GAME`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `PLAYS`
--
ALTER TABLE `PLAYS`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(42) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
