-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `house_number` text NOT NULL,
  `street_name` text NOT NULL,
  `bus_stop` text NOT NULL,
  `city` text NOT NULL,
  `lg_area` text NOT NULL,
  `state` text NOT NULL,
  `home_town` text NOT NULL,
  `religion` text NOT NULL,
  `phone_number1` text NOT NULL,
  `phone_number2` text NOT NULL,
  `email` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `house_number`, `street_name`, `bus_stop`, `city`, `lg_area`, `state`, `home_town`, `religion`, `phone_number1`, `phone_number2`, `email`, `createdAt`) VALUES
(3, '002 Grage', 'New garage ibadan', 'Close Area', 'Ibadan', 'Ibadan southeast', 'Oyo', 'Ibadan', 'Christainity', '+2349069394998', '08140642443', 'ralojo@gmail.com', '2023-01-20 16:05:59'),
(4, '', '', '', '', '', '', '', '', '', '', 'admin@gmail.com', '2023-01-20 22:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `employment_status` text NOT NULL,
  `employment_date` text NOT NULL,
  `email` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `employment_status`, `employment_date`, `email`, `createdAt`) VALUES
(1, 'UnEmployed', '1997-09-09', 'ralojo@gmail.com', '2023-01-20 16:51:37'),
(2, 'Self Employed', '2023-01-11', 'admin@gmail.com', '2023-01-20 22:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `employment_address`
--

CREATE TABLE `employment_address` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `street_name` text NOT NULL,
  `street_number` text NOT NULL,
  `city` text NOT NULL,
  `bus_stop` text NOT NULL,
  `lga_area` text NOT NULL,
  `state` text NOT NULL,
  `nature_of_business` text NOT NULL,
  `fax_number` text NOT NULL,
  `phone_number` text NOT NULL,
  `createdAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employment_address`
--

INSERT INTO `employment_address` (`id`, `email`, `street_name`, `street_number`, `city`, `bus_stop`, `lga_area`, `state`, `nature_of_business`, `fax_number`, `phone_number`, `createdAt`) VALUES
(2, 'ralojo@gmail.com', 'Okitipupa Ondo State', 'New garage ibadan', 'Ibadan', 'Close Area', 'rrrrrr', 'Oyo', 'Dao Incorporation', 'breaky', '+2349069394998', '2023-01-20 22:02:02'),
(3, 'admin@gmail.com', 'Okitipupa Ondo State', 'ajenipa', 'ilorin', '', 'rrrrrr', 'kwara', 'akindavetech', 'breaky', '+2349069394998', '2023-01-20 22:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `bvn` text NOT NULL,
  `employers_name` text NOT NULL,
  `customer_nickname` text NOT NULL,
  `relationship` text NOT NULL,
  `id_type` text NOT NULL,
  `id_no` text NOT NULL,
  `id_issue_date` text NOT NULL,
  `expiry_date` text NOT NULL,
  `expected_income` text NOT NULL,
  `other_income` text NOT NULL,
  `refferral` text NOT NULL,
  `createdAt` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kyc`
--

INSERT INTO `kyc` (`id`, `email`, `gender`, `dob`, `bvn`, `employers_name`, `customer_nickname`, `relationship`, `id_type`, `id_no`, `id_issue_date`, `expiry_date`, `expected_income`, `other_income`, `refferral`, `createdAt`) VALUES
(1, 'ralojo@gmail.com', 'Male', '09/09/1997', '567633233767', 'mARYLAND', 'NRKJFJK', 'mARRIED', 'nimc', '123456789', '99/09/01', '09/09/09', '100000000000', '10000000000000', 'Mr Ay', '2023-01-21 12:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `nextofkin`
--

CREATE TABLE `nextofkin` (
  `id` int(11) NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `othername` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `mobile_number` text NOT NULL,
  `street_name` text NOT NULL,
  `bus_stop` text NOT NULL,
  `email` text NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nextofkin`
--

INSERT INTO `nextofkin` (`id`, `surname`, `firstname`, `othername`, `dob`, `gender`, `mobile_number`, `street_name`, `bus_stop`, `email`, `createdAt`) VALUES
(2, 'Oladapo Ayomide', 'Olajide', 'Ajoke', '09/09/1997', 'Male', '+2349069394998', 'New garage ibadan', 'Close Area', 'ralojo@gmail.com', '2023-01-20'),
(3, 'Oladapo Ayomide', 'Olajide', 'Ayomide', '', 'Male', '+2349069394998', 'New garage ibadan', 'Close Area', 'admin@gmail.com', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `title` text NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `othername` text NOT NULL,
  `maidenName` text NOT NULL,
  `pob` text NOT NULL,
  `nationality` text NOT NULL,
  `origin` text NOT NULL,
  `marital_status` text NOT NULL,
  `dual_citenziship` text NOT NULL,
  `acc_category` text NOT NULL,
  `acc_type` text NOT NULL,
  `email` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `branch`, `title`, `surname`, `firstname`, `othername`, `maidenName`, `pob`, `nationality`, `origin`, `marital_status`, `dual_citenziship`, `acc_category`, `acc_type`, `email`, `createdAt`) VALUES
(1, 'takewando', 'moimio', 'OLAJIDE', 'David', 'Ajoke', 'MARY', 'laogs', 'NIGERIA', 'Not Specified', 'single', 'yes', 'Individual account', 'Current', 'ralojo@gmail.com', '2023-01-20 02:25:28'),
(2, 'Ajibogun Branch', 'Mr', 'Oladapo Ayomide', 'Olajide', 'Ayomide', 'MARY', 'OYO', 'NIGERIA', 'Oyo', 'Marital Status', 'yes', 'Individual account', 'Current', 'admin@gmail.com', '2023-01-20 22:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passwords`) VALUES
(1, 'bcstudiolite@gmail.com', 'Olajide4309.'),
(4, 'rachealojo@gmail.com', 'password'),
(5, 'bcstudiolit@gmail.com', 'Olajide4309.'),
(6, 'rachealoo@gmail.com', 'password'),
(7, 'ralojo@gmail.com', 'password'),
(8, 'raealojo@gmail.com', 'password'),
(9, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_officer`
--
ALTER TABLE `account_officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_address`
--
ALTER TABLE `employment_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nextofkin`
--
ALTER TABLE `nextofkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_officer`
--
ALTER TABLE `account_officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employment_address`
--
ALTER TABLE `employment_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nextofkin`
--
ALTER TABLE `nextofkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
