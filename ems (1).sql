-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 08:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `extra_facilities` varchar(255) NOT NULL,
  `avg_exp` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `capacity`, `extra_facilities`, `avg_exp`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`) VALUES
(1, '', '', '', '', '', 0, '', '', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png'),
(2, 'asdf', '', '', '', '', 0, '', '', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png'),
(3, 'a', 'a@a', 'a', 'a', 'a', 0, '', '', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png'),
(4, 'aa', 'a2@W', '12', 'W', 'W', 0, 'W', '123', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `earlier_works` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp0` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL,
  `pp9` varchar(255) NOT NULL,
  `pp10` varchar(255) NOT NULL,
  `pp11` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `username`, `age`, `mobile`, `email`, `address`, `experience`, `di`, `accessories`, `earlier_works`, `pp`, `pp0`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`, `pp9`, `pp10`, `pp11`) VALUES
(1, 'a', 0, '', '', '', '', '', '', '', 'upload/DSC_0239.JPG', 'upload/', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG'),
(2, 'aa', 0, '', '', '', '', '', '', '', 'upload/IMG_20180317_205859.jpg', 'upload/', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg'),
(3, 'viper', 0, '', '', '', '', '', '', '', 'upload/IMG_20180317_205621.jpg', 'upload/', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `earlier_works` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `username`, `age`, `mobile`, `email`, `address`, `experience`, `di`, `accessories`, `earlier_works`, `pp`) VALUES
(1, '', 0, '', '', '', '', '', '', '', 'upload/e3.jpg'),
(2, '', 0, '', '', '', '', 'aa', '', '', 'upload/e2.jpg'),
(3, 'Mystic', 1, '11', 'a@b', 'aa', 'aa', 'aa', 'aa', 'aaaaaaaaaa', 'upload/bg1.jpg'),
(6, 'Ar Nob', 22, '019292992992', 'a@n', 'ss', 's', 's', 's', 's', 'upload/DSC_0002.JPG'),
(8, '', 0, '', '', '', '', '', '', '', 'upload/Screenshot (111).png'),
(9, 'aaa', 0, 'aaa', 'a@a', 'a', 'a', 'a', 'a', 'a', 'upload/IMG_20180317_205621.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `offers` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `offers`, `capacity`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`) VALUES
(1, 'aaa', '', '', '', '', '', 0, 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png'),
(2, 'qqq', 'qqq@a', 'qqq', 'q', 'q', '', 0, 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `avg_exp` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `avg_exp`, `capacity`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`) VALUES
(1, 'qqq', '', '', '', '', '', 0, 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
