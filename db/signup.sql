-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 03:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sr_no` int(11) NOT NULL,
  `email` varchar(23) NOT NULL,
  `username` varchar(23) NOT NULL,
  `phoneNum` int(111) NOT NULL,
  `pass` varchar(23) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sr_no`, `email`, `username`, `phoneNum`, `pass`, `dt`) VALUES
(1, 'raj@123', 'raj11', 8392, 'raj', '2021-09-06 19:33:13'),
(2, 'raj@12354', 'raj11342', 353, 'raj', '2021-09-06 19:39:18'),
(3, 'raj@123fdg', 'dfrgerg', 1111, '1111', '2021-09-06 21:47:13'),
(4, 'mhatreraj1828@gmail.com', '', 9966586, '', '2021-09-06 21:50:46'),
(5, 'raj@mail.com', 'raj1828', 2147483647, '444', '2021-09-06 21:54:31'),
(6, 'letsmail.m.raj@gmail.co', 'raj182833', 2147483647, '111', '2021-09-06 21:56:48'),
(7, 'India@123', 'rajIndia', 2147483647, 'india', '2021-09-06 22:28:42'),
(8, 'new@mail.com', 'newadd', 55555555, '1234', '2021-09-07 15:01:45'),
(9, 'new2@mail.com', 'rajIndia', 55555555, '111', '2021-09-07 15:05:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
