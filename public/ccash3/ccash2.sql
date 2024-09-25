-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 03:26 AM
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
-- Database: `ccash2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `stunum` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userlevel` varchar(50) NOT NULL DEFAULT 'user',
  `balance` int(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `stunum`, `password`, `userlevel`, `balance`, `status`) VALUES
(1, '202110133', '123456789', 'admin', 975, 'active'),
(2, '202112312', '123456789', 'canteen', 0, 'active'),
(3, '202145641', '123456789', 'user', 8211, 'active'),
(4, '202115679', '123456789', 'user', 201, 'active'),
(10, '202113351', '123456789', 'user', 101, 'active'),
(11, '123123123', '123456789', 'user', -123, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `stnum` varchar(50) NOT NULL,
  `addsub` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `datelogs` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `transaction`, `stnum`, `addsub`, `amount`, `datelogs`) VALUES
(1, '2024051725', '202145641', '+', 123, '2024-05-17 20:51:41'),
(2, '2024051726', '2024051725', '+', 100, '2024-05-17 21:28:54'),
(3, '2024051727', '2024051725', '+', 100, '2024-05-17 21:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `stunum` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `stunum`, `password`, `balance`) VALUES
(3, 1231231, 123456789, 123);

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `canteenlog`
--

CREATE TABLE `canteenlog` (
  `id` int(11) NOT NULL,
  `stunum` varchar(50) NOT NULL,
  `Transaction_no` varchar(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `canteendate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canteenlog`
--

INSERT INTO `canteenlog` (`id`, `stunum`, `Transaction_no`, `product_code`, `product_name`, `quantity`, `price`, `canteendate`) VALUES
(1, '', '1', '4806030301065', 'pen', 1, 5, '2024-05-17 16:37:11'),
(2, '', '1', '12345', '123', 1, 1, '2024-05-17 16:37:11'),
(3, '', '202405173', '4806030301065', 'pen', 1, 5, '2024-05-17 16:40:15'),
(4, '', '202405173', '12345', '123', 1, 1, '2024-05-17 16:40:15'),
(5, '', '202405175', '12345', '123', 1, 1, '2024-05-17 16:44:44'),
(6, '', '202405175', '4806030301065', 'pen', 1, 5, '2024-05-17 16:44:44'),
(7, '', '202405177', '4806030301065', 'pen', 1, 5, '2024-05-17 16:49:09'),
(8, '', '202405178', '4806030301065', 'pen', 1, 5, '2024-05-17 16:49:22'),
(9, '', '202405179', '4806030301065', 'pen', 1, 5, '2024-05-17 16:55:20'),
(10, '', '202405179', '12345', '123', 3, 3, '2024-05-17 16:55:20'),
(11, '', '2024051711', '4806030301065', 'pen', 1, 5, '2024-05-17 16:57:37'),
(12, '', '2024051711', '12345', '123', 3, 3, '2024-05-17 16:57:37'),
(13, '', '2024051713', '4806030301065', 'pen', 1, 5, '2024-05-17 18:25:56'),
(14, '', '2024051714', '4806030301065', 'pen', 1, 5, '2024-05-17 18:27:16'),
(15, '202110133', '2024051715', '4806030301065', 'pen', 1, 5, '2024-05-17 19:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `id` int(11) NOT NULL,
  `stnum` varchar(50) NOT NULL,
  `receipts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`id`, `stnum`, `receipts`) VALUES
(70, '202110133', '1KO7Y2J4wJOayb-b3bh8etvWwrUjUs3vO'),
(71, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(72, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(73, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(74, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(75, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(76, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(77, '9289240384', '14UjtceS7QG_1FhqgYsiUG690VUYhPwYE'),
(78, '9289240384', '14UjtceS7QG_1FhqgYsiUG690VUYhPwYE'),
(79, '9289240384', '14UjtceS7QG_1FhqgYsiUG690VUYhPwYE'),
(80, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(81, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(82, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(83, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(84, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(85, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(86, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(87, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(88, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(89, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(90, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(91, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(92, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(93, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(94, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(95, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(96, '123987', '1Z4JhWfwmrIAsYpECuWjnXKSHQBE9IvSm'),
(101, '0193065618', '1yi1AkJImTCcBh2k7nTW0fMLjSzLI1WEJ'),
(102, '999999999', '1jk_aapFwNqw287PpTKt5X4PjokPhHESF'),
(103, '999999999', '1jk_aapFwNqw287PpTKt5X4PjokPhHESF'),
(104, '202145641', '1Pwlb05BvWqFwYtJmaA8wUqZJ5j3PrWnj');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `stocks` int(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_code`, `product_name`, `stocks`, `price`) VALUES
(2, '4806030301065', 'pen', 31, '5'),
(3, '12345', '123', 309, '1');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `stnum` varchar(50) NOT NULL,
  `addsub` varchar(5) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date1` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `transaction`, `stnum`, `addsub`, `amount`, `date1`) VALUES
(15, '202405161', '202145641', '+', '10', '2024-05-16 17:44:26'),
(16, '202405177', '123456789', '-', '40', '2024-05-17 16:49:09'),
(17, '202405178', '202145641', '-', '39', '2024-05-17 16:49:22'),
(18, '202405179', '202145641', '-', '38', '2024-05-17 16:55:20'),
(19, '202405179', '202145641', '-', '304', '2024-05-17 16:55:20'),
(20, '2024051711', '202145641', '-', '37', '2024-05-17 16:57:37'),
(21, '2024051711', '202145641', '-', '301', '2024-05-17 16:57:37'),
(22, '2024051713', '202110133', '-', '36', '2024-05-17 18:25:56'),
(23, '2024051714', '202110133', '-', '35', '2024-05-17 18:27:16'),
(24, '2024051715', '202110133', '-', '31', '2024-05-17 19:16:49'),
(25, '2024051725', '202145641', '+', '123', '2024-05-17 20:51:41'),
(26, '2024051726', '2024051725', '+', '100', '2024-05-17 21:28:54'),
(27, '2024051727', '2024051725', '+', '100', '2024-05-17 21:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `stnum` varchar(50) NOT NULL,
  `receipts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `stnum`, `receipts`) VALUES
(253, '222222222', '1GdeezBg7JNz1NY98a7mA4VbVet8Idt5Y'),
(254, '222222222', '1Ih7VtNYXNHbB3ZdAc-dsVGL6Y6QR63IW'),
(255, '222222222', '1KzpGgk_G_4_wNLpG1M0DrCP9gBB-jPHy'),
(256, '123456789', '1VskiBM3RgF2MbxI3L81gtFmMQiKziigF'),
(257, '123456789', '1A3bdBgphVHMjXHxUfP745o8-2yO05F2Y'),
(258, '123465789', '1xHBLTMUFO40tZFRy13XWJo44HXCZLpUx'),
(259, '202110133', '18K9PZOltjbStCzZLVdLFTJHQPzHtFdHC'),
(260, '201810078', '16OCdNB9-L7WscKRa4dhraG1W9wNRBtKR'),
(261, '202110133', '1KO7Y2J4wJOayb-b3bh8etvWwrUjUs3vO'),
(262, '321123321123', '1RG340CKWhbQ-YA8-MLtITW3_aG80_za7'),
(263, '9289240384', '14UjtceS7QG_1FhqgYsiUG690VUYhPwYE'),
(265, '95631514', '1g2QDl3xmwKRQaSYtq1hHs9sL5fRIHvrP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canteenlog`
--
ALTER TABLE `canteenlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `canteenlog`
--
ALTER TABLE `canteenlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
