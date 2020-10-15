-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 03:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_asset`
--

CREATE TABLE `add_asset` (
  `Sl` tinyint(5) NOT NULL,
  `Date` date NOT NULL,
  `Incident` int(8) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_asset`
--

INSERT INTO `add_asset` (`Sl`, `Date`, `Incident`, `Location`, `Status`, `Date_Time`) VALUES
(1, '0000-00-00', 12356, 'Dhanmondi', 'Repair Needed', '2020-08-24 18:03:52'),
(4, '0000-00-00', 324324, 'Wari', 'UPS Problem', '2020-08-24 18:03:52'),
(5, '0000-00-00', 11573, 'Banani', 'Battery Problem', '2020-08-24 18:03:52'),
(6, '0000-00-00', 12359, 'Motijheel', 'Earthing Problem', '2020-08-24 18:04:48'),
(7, '2020-10-08', 12399, 'Dhanmondi 4/a', 'UPS Problem', '2020-09-20 14:19:32'),
(8, '1932-03-09', 0, 'dfgdf', 'dfgdf', '2020-09-20 14:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `Ref_ID` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Incident` varchar(15) NOT NULL,
  `Branch_Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Is_Resolved` tinyint(1) NOT NULL,
  `UPS_Model` varchar(20) NOT NULL,
  `UPS_Brand` varchar(20) NOT NULL,
  `UPS_Capacity` varchar(15) NOT NULL,
  `UPS_Serial` varchar(30) NOT NULL,
  `Remarks` varchar(30) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `officer_list`
--

CREATE TABLE `officer_list` (
  `SL` int(8) NOT NULL,
  `Officer_Name` varchar(30) NOT NULL,
  `Emp_ID` varchar(12) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officer_list`
--

INSERT INTO `officer_list` (`SL`, `Officer_Name`, `Emp_ID`, `Designation`, `Email_Address`, `Location`) VALUES
(1, 'Mohammad Nazmul Haq', '2946', 'Service Engineer', 'nazmul.haq@ebl-bd.com', 'Dhaka'),
(2, 'Syed Mukhaffar Abdullah', '2947', 'Service Engineer', 'mukhaffar.abdullah@ebl-bd.com', 'Dhaka'),
(3, 'Khandaker Naim Hossaion', '3416', 'Service Engineer', 'khandaker.naim@ebl-bd.com', 'Dhaka'),
(4, 'Tahsin Farzam', '4458', 'Service Engineer', 'tahsin.farzam@ebl-bd.com', 'Dhaka'),
(5, 'Saqueeb Md. Sultan', '3671', 'Service Engineer', 'saqueeb.sultan@ebl-bd.com', 'Dhaka'),
(6, 'Sabit Bin Kabir', '3728', 'Service Engineer', 'sabit.kabir@ebl-bd.com', 'Dhaka'),
(7, 'Fouzia Sharmin Zimi', '3911', 'Service Engineer', 'fouzia.sharmin@ebl-bd.com', 'Dhaka'),
(8, 'Md. Abdul Hamid', '2943', 'Service Engineer', 'abdul.hamid@ebl-bd.com', 'Chattogram'),
(9, 'Mohammad Towhidul Islam', '3713', 'Service Engineer', 'towhidul.islam@ebl-bd.com', 'Chattogram'),
(10, 'Tariqul Islam', '4451', 'Service Engineer', 'islam.tariqul@ebl-bd.com', 'Chattogram'),
(11, 'Bipul Kumar Biswas', '3688', 'Service Engineer', 'bipul.kumar@ebl-bd.com', 'Jashore'),
(12, 'Abdul Kadir Kibria', '4280', 'Service Engineer', 'abdul.kibria@ebl-bd.com', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `Ref_ID` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Incident` varchar(15) NOT NULL,
  `Remarks` varchar(30) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`Ref_ID`, `Date`, `Incident`, `Remarks`, `Status`, `Date_Time`) VALUES
(1008010627, '2020-10-07', '14739', 'Banani Br issue', 0, '2020-10-08 11:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User Login Information';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `image`, `status`, `datetime`) VALUES
(1, 'Khandaker Naim', 'naimcm@gmail.com', 'admin', '$2y$10$FQrNHyA1cbDGwjFQzXV0zemvi047lRTeUGwLcNL7TTRtzR0FikQse', NULL, 0, '2020-08-02 07:14:59'),
(2, 'Sayad Faisal', 'faisal@ebl-bd.com', 'faisal', '$2y$10$EeaQfmvHsp0nJLGJoRoPXufFuy0VwCOLCXPKndtEYJuvkIsIDH.1W', NULL, 0, '2020-09-30 10:19:53'),
(3, 'Fouzia Zimi', 'fouzia.zimi@ebl-bd.com', 'fouzia', '$2y$10$AlLPExYXH4FuAAZTyGBOcei5FURD6CrnU9fTh3SEXoXELXyHxxh9K', NULL, 0, '2020-10-15 09:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_asset`
--
ALTER TABLE `add_asset`
  ADD PRIMARY KEY (`Sl`),
  ADD UNIQUE KEY `Sl_No` (`Sl`,`Date`),
  ADD UNIQUE KEY `Incident` (`Incident`);

--
-- Indexes for table `officer_list`
--
ALTER TABLE `officer_list`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD UNIQUE KEY `Ref_ID` (`Ref_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_asset`
--
ALTER TABLE `add_asset`
  MODIFY `Sl` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `officer_list`
--
ALTER TABLE `officer_list`
  MODIFY `SL` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
