-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 05:13 AM
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
-- Database: `itp3133_registrar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `usertype`, `logtime`) VALUES
(1, 'michael', '0102', 'admin', '2023-12-16 19:37:00'),
(3, 'kenneth', '0102', 'admin', '2023-12-16 15:47:31'),
(4, 'cometa', '0102', 'admin', '2023-12-18 11:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `Transaction_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Transac_desc` varchar(50) NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `Transaction_no`, `name`, `address`, `contact_no`, `Transac_desc`, `dates`, `price`, `admin`) VALUES
(13, 202312189, '123213', '1234', '1234', '1234', '2023-12-18 11:34:11', 1234, 'cometa');

-- --------------------------------------------------------

--
-- Table structure for table `maindb`
--

CREATE TABLE `maindb` (
  `id` int(11) NOT NULL,
  `Transaction_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Transac_desc` varchar(100) NOT NULL,
  `dates` date NOT NULL DEFAULT current_timestamp(),
  `price` int(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maindb`
--

INSERT INTO `maindb` (`id`, `Transaction_no`, `name`, `address`, `contact_no`, `Transac_desc`, `dates`, `price`, `admin`) VALUES
(6, 202312181, 'Window 1', 'CCP', '09289240384', 'Testing', '2023-12-18', 123456, 'cometa'),
(7, 202312187, 'Window 2', 'CCP', '09289240384', 'Testing', '2023-12-18', 10203, 'cometa'),
(8, 202312188, 'Window 3', 'CCP', '09289240384', 'testing', '2023-12-18', 465789, 'cometa'),
(9, 202312189, '123213', '1234', '1234', '1234', '2023-12-18', 1234, 'cometa');

-- --------------------------------------------------------

--
-- Table structure for table `regis1`
--

CREATE TABLE `regis1` (
  `id` int(11) NOT NULL,
  `Transaction_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Transac_desc` varchar(100) NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis1`
--

INSERT INTO `regis1` (`id`, `Transaction_no`, `name`, `address`, `contact_no`, `Transac_desc`, `dates`, `price`, `admin`) VALUES
(75, 202312181, 'Window 1', 'CCP', '09289240384', 'Testing', '2023-12-18 11:31:00', 123456, 'cometa');

-- --------------------------------------------------------

--
-- Table structure for table `regis2`
--

CREATE TABLE `regis2` (
  `id` int(11) NOT NULL,
  `Transaction_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Transac_desc` varchar(100) NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis2`
--

INSERT INTO `regis2` (`id`, `Transaction_no`, `name`, `address`, `contact_no`, `Transac_desc`, `dates`, `price`, `admin`) VALUES
(7, 202312187, 'Window 2', 'CCP', '09289240384', 'Testing', '2023-12-18 11:32:30', 10203, 'cometa');

-- --------------------------------------------------------

--
-- Table structure for table `regis3`
--

CREATE TABLE `regis3` (
  `id` int(11) NOT NULL,
  `Transaction_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Transac_desc` varchar(100) NOT NULL,
  `dates` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis3`
--

INSERT INTO `regis3` (`id`, `Transaction_no`, `name`, `address`, `contact_no`, `Transac_desc`, `dates`, `price`, `admin`) VALUES
(4, 202312188, 'Window 3', 'CCP', '09289240384', 'testing', '2023-12-18 11:33:44', 465789, 'cometa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maindb`
--
ALTER TABLE `maindb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis1`
--
ALTER TABLE `regis1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis2`
--
ALTER TABLE `regis2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis3`
--
ALTER TABLE `regis3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `maindb`
--
ALTER TABLE `maindb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regis1`
--
ALTER TABLE `regis1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `regis2`
--
ALTER TABLE `regis2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `regis3`
--
ALTER TABLE `regis3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
