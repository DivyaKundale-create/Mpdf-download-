-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filedownload`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `fullname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `nationality` text NOT NULL,
  `religion` text NOT NULL,
  `bloodgroup` text NOT NULL,
  `dt` date NOT NULL,
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `name3` text NOT NULL,
  `name4` varchar(255) NOT NULL,
  `h1` text NOT NULL,
  `h2` varchar(255) NOT NULL,
  `h3` text NOT NULL,
  `work_exp1` varchar(255) NOT NULL,
  `work_exp2` text NOT NULL,
  `ps1` varchar(255) NOT NULL,
  `ps2` text NOT NULL,
  `ps3` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `ed1` varchar(255) NOT NULL,
  `ed2` varchar(255) NOT NULL,
  `ed3` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `fullname`, `gender`, `dob`, `nationality`, `religion`, `bloodgroup`, `dt`, `name1`, `name2`, `name3`, `name4`, `h1`, `h2`, `h3`, `work_exp1`, `work_exp2`, `ps1`, `ps2`, `ps3`, `phone`, `info`, `ed1`, `ed2`, `ed3`, `company`, `address`) VALUES
(1, 'Full name', 'female', '2020-12-09', 'Indian', 'Hindu', 'AB+', '0000-00-00', 'sbda,n', 'dsna,sadv', 'nsadbb', 'absd', 'nsdmab', 'sdanb', 'dsba', 'asdsasa', 'aaaaa', '', '', '', '', 'nsadbnbsda', 'amsdb', 'amsnm', 'mas,n', 'snmm', 'sdmmnsa'),
(2, 'ajsajbbdsf', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
