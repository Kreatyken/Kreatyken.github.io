-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 08:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'student', '246', 'user'),
(2, 'admin', '1234', 'admin'),
(5, 'josh', 'josh09', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `email`, `gpa`) VALUES
(32, 'adsadad', 37, 'ffff@hhh', 1.44),
(33, '11', 23, 'ffff@grrr', 1),
(37, 'kkkkk', 45, 'jajajajajjj@', 1.56),
(38, 'Josh', 34, 'f@gmail.com', 1.9),
(39, 'Josh', 12, 'f@gmail.com', 4),
(40, 'dsdsd', 34, 'ewqeqwe@gmail.com', 1.2),
(41, 'dsdsd', 1, 'ewqeqwaaaae@gmail.com', 1.25),
(42, 'jossssss', 21, 'joshualibed99@gmail.com', 2),
(43, 'Josh', 21, 'joshualibed99@gmail.com', 1.51),
(44, 'Josh', 21, 'joshualibed99@gmail.com', 1.51),
(45, 'ffff', 19, 'rqqqqqq@gmail.comqq', 1),
(46, 'ffff', 21, 'f@gmail.com', 1.9),
(47, 'Josh', 62, 'joshualibed99@gmail.com', 1.5),
(48, 'wewewerwe', 21, 'sssss@gmail.com', 1.3),
(49, 'ytytytytytyt', 19, 'fwwwwwwwww@gmail.com', 1.23),
(50, 'dsdsd', 34, 'ewqeqwe@gmail.com', 1.2),
(52, 'andrea', 22, 'andre@gmail.com', 1.56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
