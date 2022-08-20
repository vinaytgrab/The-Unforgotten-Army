-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 07:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `first_name`, `last_name`, `designation`) VALUES
(1, 'Pallavi', 'Patil', 'Tester'),
(2, 'Vinay', 'Tripathi', 'Developer'),
(3, 'Kajal', 'K', 'Tester'),
(4, 'Srishti', 'Bengra', 'Executive'),
(5, 'Vipin', 'Mishra', 'UI Front End');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'pallavi', 'pallavi@123'),
(2, 'vinay', 'vinay@123'),
(3, 'kajal', 'kajal@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity_log`
--

CREATE TABLE `tbl_activity_log` (
  `id` int(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `previous_value` text NOT NULL,
  `new_value` text NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activity_log`
--

INSERT INTO `tbl_activity_log` (`id`, `username`, `previous_value`, `new_value`, `created_date`, `created_time`) VALUES
(1, 'pallavi', 'Rani', 'Pallavi', '2022-08-20', '13:30:43'),
(2, 'pallavi', 'Kharate', 'Patil', '2022-08-20', '13:30:43'),
(3, 'pallavi', 'Tester', 'Developer', '2022-08-20', '13:30:43'),
(4, 'pallavi', 'Pallavi', 'Pallavi1', '2022-08-20', '14:06:37'),
(5, 'vinay', 'Pallavi1', 'Pallavi Patil', '2022-08-20', '14:39:18'),
(6, 'vinay', 'Patil', 'Patil2', '2022-08-20', '14:39:18'),
(7, 'vinay', 'Developer', 'Tester', '2022-08-20', '14:39:18'),
(8, 'pallavi', 'Patil2', 'Patil', '2022-08-20', '14:50:42'),
(9, 'pallavi', 'Pallavi Patil', 'Pallavi', '2022-08-20', '15:02:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
