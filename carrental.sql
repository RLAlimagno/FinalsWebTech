-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 03:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `carregi`
--

CREATE TABLE `carregi` (
  `id` int(11) NOT NULL,
  `carno` varchar(255) NOT NULL,
  `Cartype` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `Pcapacity` varchar(255) NOT NULL,
  `aval` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carregi`
--

INSERT INTO `carregi` (`id`, `carno`, `Cartype`, `brand`, `Pcapacity`, `aval`) VALUES
(1, 'A002', 'SUV', 'Ford', '5', 'Occupied'),
(2, 'A003', 'Sudan', 'Toyota', '12', 'Vacant'),
(3, 'A004', 'Luxury', 'Ferrari', '2', 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `rentfrom`
--

CREATE TABLE `rentfrom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(15) NOT NULL,
  `car` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentfrom`
--

INSERT INTO `rentfrom` (`id`, `name`, `address`, `number`, `car`) VALUES
(1, 'testing Register', 'test', 1233456789, 'SUV'),
(2, 'chet Holmgren', 'USA', 1233456789, 'Luxury'),
(3, 'Alex Abrines', 'Spain', 995197777, 'SUV'),
(4, 'Michael Jepson', 'Washington', 97788944, 'Sudan'),
(5, 'Kristian Carlo A. Parayno', 'Canlubang,Calamba', 0, 'Sudan'),
(6, 'Chihaya Sato S Kisaragi', 'tokyo,Japan', 1233456789, 'SUV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carregi`
--
ALTER TABLE `carregi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentfrom`
--
ALTER TABLE `rentfrom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carregi`
--
ALTER TABLE `carregi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rentfrom`
--
ALTER TABLE `rentfrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
