-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 02:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_user_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `user_email`, `user_pass`) VALUES
('2', 'othman re', 'othman@gmail.com', 'eragon'),
('1', 'amine', 'amine@gmail.com', 'erag');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` int(11) NOT NULL,
  `guest_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `guest_name`) VALUES
(1, 'kids'),
(2, 'adults'),
(3, 'babys');

-- --------------------------------------------------------

--
-- Table structure for table `other_types`
--

CREATE TABLE `other_types` (
  `other_type_id` int(11) NOT NULL,
  `other_type_name` varchar(50) DEFAULT NULL,
  `other_type_price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_types`
--

INSERT INTO `other_types` (`other_type_id`, `other_type_name`, `other_type_price`) VALUES
(1, 'add room simple', '1'),
(2, 'with lit', '0.5'),
(4, 'with lit', '0.25'),
(5, 'without lit', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE `pension` (
  `pension_id` int(11) NOT NULL,
  `pension_name` varchar(50) NOT NULL,
  `pension_price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`pension_id`, `pension_name`, `pension_price`) VALUES
(1, 'demi', 14),
(2, 'sans', 0),
(3, 'complete', 30);

-- --------------------------------------------------------

--
-- Table structure for table `pension_type`
--

CREATE TABLE `pension_type` (
  `pension_type_id` int(11) NOT NULL,
  `pension_type_name` varchar(50) NOT NULL,
  `pension_type_price` float DEFAULT NULL,
  `pension_id` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pension_type`
--

INSERT INTO `pension_type` (`pension_type_id`, `pension_type_name`, `pension_type_price`, `pension_id`) VALUES
(1, 'Petit dej/dej', 0, '1'),
(2, 'Petit dej/din', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `reserve_kids` varchar(50) NOT NULL,
  `reserve_babys` varchar(50) NOT NULL,
  `reserve_babys_type` varchar(50) NOT NULL,
  `reserve_adult` varchar(50) NOT NULL,
  `reserve_adult_type` varchar(50) NOT NULL,
  `check_in` varchar(10) NOT NULL,
  `check_out` varchar(10) NOT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `user_id` varchar(10) NOT NULL,
  `gen_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `reserve_kids`, `reserve_babys`, `reserve_babys_type`, `reserve_adult`, `reserve_adult_type`, `check_in`, `check_out`, `amount`, `user_id`, `gen_id`) VALUES
(321, '1', '3', 'with lit', '2', 'add room simple', '2021-05-08', '2021-05-12', '253.75', '1', 'Id-351944');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_rooms`
--

CREATE TABLE `reserve_rooms` (
  `id` int(11) NOT NULL,
  `reserve_room_name` varchar(50) NOT NULL,
  `reserve_room_type` varchar(50) NOT NULL,
  `reserve_room_view` varchar(50) NOT NULL,
  `reserve_pension` varchar(50) NOT NULL,
  `reserve_pension_type` varchar(50) NOT NULL,
  `reserve_amount` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) NOT NULL,
  `gen_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_rooms`
--

INSERT INTO `reserve_rooms` (`id`, `reserve_room_name`, `reserve_room_type`, `reserve_room_view`, `reserve_pension`, `reserve_pension_type`, `reserve_amount`, `user_id`, `gen_id`) VALUES
(33, 'Appartement', '', '', 'demi', 'Petit dej/din', '412', '1', 'Id-351944'),
(34, 'Simple', '', 'Vue exterieur', 'complete', '', '259.2', '1', 'Id-351944');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `room_price`) VALUES
(4, 'Appartement', 89),
(2, 'Double', 47),
(3, 'Bungalo', 27),
(1, 'Simple', 29);

-- --------------------------------------------------------

--
-- Table structure for table `rooms_type`
--

CREATE TABLE `rooms_type` (
  `room_type_id` int(11) NOT NULL,
  `room_id` varchar(20) NOT NULL,
  `room_type_name` varchar(20) NOT NULL,
  `room_type_price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_type`
--

INSERT INTO `rooms_type` (`room_type_id`, `room_id`, `room_type_name`, `room_type_price`) VALUES
(1, '2', ' lit double', 0),
(2, '2', '2 lit simple', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms_view`
--

CREATE TABLE `rooms_view` (
  `rooms_view_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_type_id` varchar(11) DEFAULT NULL,
  `room_view_name` varchar(20) NOT NULL,
  `room_view_price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_view`
--

INSERT INTO `rooms_view` (`rooms_view_id`, `room_id`, `room_type_id`, `room_view_name`, `room_view_price`) VALUES
(1, 1, 'null', 'Vue interieur', 0),
(2, 1, 'null', 'Vue exterieur', 0.2),
(3, 2, '1', 'Vue interieur', 0),
(4, 2, '1', 'Vue exterieur', 0.2),
(5, 2, '2', 'Vue interieur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `other_types`
--
ALTER TABLE `other_types`
  ADD PRIMARY KEY (`other_type_id`);

--
-- Indexes for table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`pension_id`);

--
-- Indexes for table `pension_type`
--
ALTER TABLE `pension_type`
  ADD PRIMARY KEY (`pension_type_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_rooms`
--
ALTER TABLE `reserve_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `rooms_type`
--
ALTER TABLE `rooms_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `rooms_view`
--
ALTER TABLE `rooms_view`
  ADD PRIMARY KEY (`rooms_view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_types`
--
ALTER TABLE `other_types`
  MODIFY `other_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pension`
--
ALTER TABLE `pension`
  MODIFY `pension_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pension_type`
--
ALTER TABLE `pension_type`
  MODIFY `pension_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `reserve_rooms`
--
ALTER TABLE `reserve_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms_type`
--
ALTER TABLE `rooms_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms_view`
--
ALTER TABLE `rooms_view`
  MODIFY `rooms_view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
