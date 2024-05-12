-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 01:03 PM
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
-- Database: `atm-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `name` varchar(40) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `account_no` bigint(15) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `balance` bigint(15) NOT NULL,
  `trans_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trans_id` bigint(15) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`name`, `phone`, `account_no`, `account_type`, `balance`, `trans_date`, `trans_id`, `bank_name`, `branch`) VALUES
('ria dhiman', 8077371835, 12345, 'saving', 666000, '2024-05-10 16:54:50', 1, 'bank of india', 'mussoorie'),
('shivam', 56789034, 898989, 'current', 700000, '0000-00-00 00:00:00', 2, 'bank of uk', 'd doon'),
('tanishk', 898989898989, 909090, 'current', 100000000, '0000-00-00 00:00:00', 3, 'bank of uk', 'd doon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `account_no` (`account_no`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `trans_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
