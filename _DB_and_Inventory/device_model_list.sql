-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `device_model_list`
--

CREATE TABLE `device_model_list` (
  `Ref_ID` int(12) NOT NULL,
  `Device_Category` varchar(50) NOT NULL,
  `Device_Model` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Entry_By` varchar(50) DEFAULT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `device_model_list`
--

INSERT INTO `device_model_list` (`Ref_ID`, `Device_Category`, `Device_Model`, `Status`, `Entry_By`, `Date_Time`) VALUES
(1, 'Desktop', 'Dell Optiplex 330', 1, NULL, '2020-11-22 17:28:20'),
(2, 'Laptop', 'Lenovo Thinkpad L470', 1, NULL, '2020-11-22 17:35:07'),
(3, 'Laptop', 'Lenovo Thinkpad L480', 1, 'admin', '2020-11-24 17:05:30'),
(5, 'Laptop', ' HP ProBook 440 G2', 1, 'fouzia', '2020-11-24 17:08:59'),
(6, 'Laptop', ' HP ProBook 440 G3', 1, 'fouzia', '2020-11-24 17:09:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device_model_list`
--
ALTER TABLE `device_model_list`
  ADD PRIMARY KEY (`Ref_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device_model_list`
--
ALTER TABLE `device_model_list`
  MODIFY `Ref_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
