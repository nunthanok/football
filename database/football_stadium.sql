-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 09:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football_stadium`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `cat_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(00000000001, 'Drink'),
(00000000002, 'Food'),
(00000000003, 'Sweet'),
(00000000004, 'Snack'),
(00000000005, 'mama'),
(00000000006, 'papa'),
(00000000007, 'tinglee'),
(00000000008, 'scsds'),
(00000000009, 'sacasdfdsv'),
(00000000010, 'mama'),
(00000000011, 'jojo'),
(00000000012, 'jaja'),
(00000000017, 'nok');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `mem_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mem_phone` int(15) NOT NULL,
  `mem_match` int(10) NOT NULL,
  `mem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_name`, `mem_phone`, `mem_match`, `mem_date`) VALUES
(00000000001, 'sarutobi asuma', 2059415161, 0, '2021-03-17'),
(00000000002, 'Souvanna', 2055667788, 0, '2021-03-17'),
(00000000007, 'liverpool fc', 2055667788, 0, '2021-03-23'),
(00000000008, 'man city', 20, 0, '2021-03-23'),
(00000000009, 'westham united', 2059415161, 0, '2021-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_id` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `total_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `od_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `od_qty` int(11) NOT NULL,
  `od_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pro_price` int(10) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_code`, `pro_name`, `pro_price`, `u_id`, `cat_id`) VALUES
(1, 'H0001', 'Heineken', 8000, 1, 1),
(2, 'B0001', 'Beer Lao', 7000, 4, 3),
(3, 'M0001', 'M150', 5000, 2, 1),
(4, 'H0001', 'Tiger Head Water', 5000, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_phone` int(15) NOT NULL,
  `staff_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staff_status` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `staff_role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staff_id`, `staff_name`, `staff_phone`, `staff_username`, `staff_password`, `staff_status`, `staff_role`) VALUES
(1, 'nunthanok', 2059415161, 'nokk', '1234', 'ON', '1'),
(3, 'lar sonethaly', 2059415152, 'kilar', '12345', 'ON', '0'),
(4, 'sarutobi', 2055667788, 'asuma', '1234', 'ON', '0'),
(5, 'toto', 2088776655, 'panwad', '12', 'ON', '0');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `u_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `u_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`u_id`, `u_name`) VALUES
(00000000001, 'ລັງ'),
(00000000002, 'ແກ້ວ'),
(00000000003, 'ຖົງ'),
(00000000004, 'ແພັກ'),
(00000000005, 'ກັບ'),
(00000000006, 'ຫໍ່'),
(00000000007, 'ຊອງ'),
(00000000008, 'ຕຸກ'),
(00000000009, 'ປ໋ອງນ້ອຍ'),
(00000000010, 'ປ໋ອງໃຫຍ່'),
(00000000011, 'nok1'),
(00000000012, 'lar'),
(00000000014, 'test1'),
(00000000016, 'test'),
(00000000017, 'nok'),
(00000000018, 'lar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `u_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
