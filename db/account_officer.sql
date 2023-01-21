-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 08:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitex`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_officer`
--

CREATE TABLE `account_officer` (
  `id` int(11) NOT NULL,
  `account_name` text NOT NULL,
  `account_number` text NOT NULL,
  `account_type` text NOT NULL,
  `officer_name` text NOT NULL,
  `address_visited` text NOT NULL,
  `building_description` text NOT NULL,
  `bus_stop` text NOT NULL,
  `landmark` text NOT NULL,
  `address_confirmed` text NOT NULL,
  `visited_date` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `email` text NOT NULL,
  `sms` text NOT NULL,
  `atm` text NOT NULL,
  `mobile_banking` text NOT NULL,
  `internet_banking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_officer`
--

INSERT INTO `account_officer` (`id`, `account_name`, `account_number`, `account_type`, `officer_name`, `address_visited`, `building_description`, `bus_stop`, `landmark`, `address_confirmed`, `visited_date`, `createdAt`, `email`, `sms`, `atm`, `mobile_banking`, `internet_banking`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '2023-01-21 19:22:21', 'admin1@gmail.com', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_officer`
--
ALTER TABLE `account_officer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_officer`
--
ALTER TABLE `account_officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
