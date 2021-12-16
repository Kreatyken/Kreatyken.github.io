-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 06:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `contact`, `email`, `image_text`, `date`, `time`) VALUES
(1, 'joshua libed', '09999999999', 'joshualibed99@gmail.com', '', '0000-00-00', '00:00:00'),
(2, 'alex', '09999999999', 'joshualibed99@gmail.com', '', NULL, NULL),
(3, 'joshua', '09999999999', 'joshualibed99@gmail.com', '', NULL, NULL),
(4, 'Joshua', '09999999999', 'joshualibed99@gmail.com', '', NULL, NULL),
(5, 'Joshua09', '09999999999', 'joshualibed99@gmail.com', 'GG', '2022-01-26', '00:00:00'),
(6, 'xczczc', '09999999999', 'cellona02@gmail.com', 'ffff', '0000-00-00', '00:00:00'),
(7, 'xczczc', '09999999999', 'joshualibed99@gmail.com', 'GG', '2022-01-26', '00:00:00'),
(8, 'as', '09999999999', 'joshualibed99@gmail.com', 'GG', '2022-01-26', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookpack`
--

CREATE TABLE `bookpack` (
  `id` int(11) NOT NULL,
  `packid` int(100) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpack`
--

INSERT INTO `bookpack` (`id`, `packid`, `pack`, `fname`, `lname`) VALUES
(1, 0, 'tryrty', 'Joshua', 'Libed'),
(2, 0, 'tryrty', 'Joshua', 'Libed'),
(3, 1, 'tryrty', 'Joshua', 'Libed'),
(4, 2, 'Pack1', 'Joshua', 'Libed');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(2, 'asfdasdasd', 'asdasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `image_text`, `trailer`, `date`, `time`) VALUES
(20, 'captain.jpg', '(The First Avenger)', 'Captain America_ The First Avenger - Trailer.mp4', '2022-01-22', '00:00:00'),
(21, 'extraction.jpg', 'Extraction', 'Extraction _ Official Trailer _ Screenplay by JOE RUSSO Directed by SAM HARGRAVE _ Netflix.mp4', '2022-02-14', '15:00:00'),
(22, 'f9.jpg', 'F9', 'F9 - Official Trailer [HD].mp4', '2022-04-13', '13:00:00'),
(23, 'endgame.png', 'End Game', 'ì˜¤ê²œ ì§„í–‰ìš”ì›ì˜ ì¼ìƒ [Squid Game Pink Soldiers daily life] (1).mp4', '2021-11-02', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paymethod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `name`, `age`, `email`, `paymethod`) VALUES
(1, 'Joshua T. Libed', 21, 'joshualibed99@gmail.com', 'Paymaya'),
(2, 'joshua', 21, 'joshualibed99@gmail.com', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `popdrinks`
--

CREATE TABLE `popdrinks` (
  `id` int(11) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popdrinks`
--

INSERT INTO `popdrinks` (`id`, `pack`, `banner`) VALUES
(2, 'Pack1', 'pack1.jpg'),
(3, 'Popcorn', 'pcorn.jpg'),
(4, 'Drinks', 'drinks.jpg'),
(5, 'Pack2', 'pack2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookpack`
--
ALTER TABLE `bookpack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popdrinks`
--
ALTER TABLE `popdrinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookpack`
--
ALTER TABLE `bookpack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `popdrinks`
--
ALTER TABLE `popdrinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
