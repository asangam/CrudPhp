-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 03:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `developerdetails`
--

CREATE TABLE `developerdetails` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `LastName` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developerdetails`
--

INSERT INTO `developerdetails` (`id`, `firstName`, `LastName`, `email`) VALUES
(14, 'Ozone', 'Aryal', 'hackerboy@gmail.com'),
(16, 'Sushant', 'Dhakal', 'dhakalsushant@gmail.com'),
(17, 'Kedar', 'Giri', 'girikedar@xamarin.com'),
(18, 'Shankar', 'Aryal', 'aryalshankar@freewifi.fr'),
(19, 'Roshan', 'Handsome', 'handsomeroshan@britishcollege.com'),
(20, 'Dj Reward', 'Khe', 'rewardbabu@oneplus.cn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developerdetails`
--
ALTER TABLE `developerdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developerdetails`
--
ALTER TABLE `developerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
