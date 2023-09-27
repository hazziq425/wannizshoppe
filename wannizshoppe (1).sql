-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wannizshoppe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `noID` varchar(10) NOT NULL,
  `name` int(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bajulelaki`
--

CREATE TABLE `bajulelaki` (
  `noID` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bajulelaki`
--

INSERT INTO `bajulelaki` (`noID`, `category`, `image`, `size`, `price`) VALUES
('PID1001', 'Men\'s Cloth', 0x61623262383234342d393762302d343038632d396264392d3531653363653230633930302e6a7067, 'm', 69),
('PID1002', 'Men\'s Cloth', 0x61623262383234342d393762302d343038632d396264392d3531653363653230633930302e6a7067, 'l', 75);

-- --------------------------------------------------------

--
-- Table structure for table `bajuperempuan`
--

CREATE TABLE `bajuperempuan` (
  `noID` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kasut`
--

CREATE TABLE `kasut` (
  `noID` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` blob NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signupacc`
--

CREATE TABLE `signupacc` (
  `nama` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupacc`
--

INSERT INTO `signupacc` (`nama`, `password`, `age`, `email`, `phone`, `address`) VALUES
('hazziq', 'yai', 21, 'hazziqikmal425@gmail.com', '0123456753', 'ptss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`noID`);

--
-- Indexes for table `bajulelaki`
--
ALTER TABLE `bajulelaki`
  ADD PRIMARY KEY (`noID`);

--
-- Indexes for table `bajuperempuan`
--
ALTER TABLE `bajuperempuan`
  ADD PRIMARY KEY (`noID`);

--
-- Indexes for table `kasut`
--
ALTER TABLE `kasut`
  ADD PRIMARY KEY (`noID`);

--
-- Indexes for table `signupacc`
--
ALTER TABLE `signupacc`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
