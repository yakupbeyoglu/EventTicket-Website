-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2019 at 08:54 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticektme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `secret` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`, `secret`) VALUES
(1, 'aaa', 'bbb', 'ccc'),
(100, 'admin', '098F6BCD4621D373CADE4E832627B4F6', '64b681ce3fd95d8e585a52cb83d87083');

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `gname` varchar(32) NOT NULL,
  `date` varchar(32) NOT NULL,
  `ticketnumber` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`id`, `name`, `type`, `location`, `gname`, `date`, `ticketnumber`, `price`) VALUES
(1, 'Martin Garrix', 'EDM', 'CAGE CLUB', 'Martin Garrix', '2019-06-29', 100, 30),
(2, 'HEXAGON TIME', 'EDM', 'Shamada', 'Don Diablo', '2019-06-30', 30, 100),
(3, 'JAZZ WITH ZAZ', 'JAZZ', 'Shamada', 'ZAZ', '2019-07-25', 23, 40),
(4, 'Turgut ROCK', 'ROCK', 'LEFKE AVRUPA ', 'Fatma Turgut', '2019-06-29', 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `groub`
--

CREATE TABLE `groub` (
  `name` varchar(32) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groub`
--

INSERT INTO `groub` (`name`, `type`) VALUES
('Don Diablo', 'Electronic'),
('Fatma Turgut', 'ROCK'),
('Martin Garrix', 'EDM'),
('Yakup', 'EDM'),
('ZAZ', 'POP');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `secret` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Place`
--

CREATE TABLE `Place` (
  `name` varchar(30) NOT NULL,
  `location` varchar(60) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Place`
--

INSERT INTO `Place` (`name`, `location`, `phone`) VALUES
('CAGE CLUB', 'CATALKOY', '05338245868'),
('LEFKE AVRUPA ', 'LEFKE', '05334928346'),
('Shamada', 'Kyrenia', '05338308627');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `username` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groub`
--
ALTER TABLE `groub`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Place`
--
ALTER TABLE `Place`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
