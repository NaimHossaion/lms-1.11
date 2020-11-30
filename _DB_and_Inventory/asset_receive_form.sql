-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 09:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `asset_receive_form`
--

CREATE TABLE `asset_receive_form` (
  `Ref_ID` int(12) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Department` varchar(80) NOT NULL,
  `Form_Copy` varchar(300) NOT NULL,
  `Entry_By` varchar(50) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asset_receive_form`
--

INSERT INTO `asset_receive_form` (`Ref_ID`, `User_Name`, `Department`, `Form_Copy`, `Entry_By`, `Date_Time`) VALUES
(1, 'Firoj Shah', 'RB', 'Document Copy', '', '2020-11-30 08:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_receive_form`
--
ALTER TABLE `asset_receive_form`
  ADD PRIMARY KEY (`Ref_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_receive_form`
--
ALTER TABLE `asset_receive_form`
  MODIFY `Ref_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
