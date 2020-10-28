-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 01:08 PM
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
-- Table structure for table `warranty_claim`
--

CREATE TABLE `warranty_claim` (
  `SL` int(10) NOT NULL,
  `Incident` int(10) DEFAULT NULL,
  `Model_Name` varchar(30) NOT NULL,
  `Device_Serial` varchar(30) NOT NULL,
  `Asset_Tag` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Mailing_Date` date DEFAULT NULL,
  `Sending_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `Status` tinyint(1) NOT NULL,
  `Vendor_Name` varchar(30) NOT NULL,
  `Remarks` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warranty_claim`
--

INSERT INTO `warranty_claim` (`SL`, `Incident`, `Model_Name`, `Device_Serial`, `Asset_Tag`, `User_Name`, `Department`, `Mailing_Date`, `Sending_Date`, `Return_Date`, `Status`, `Vendor_Name`, `Remarks`) VALUES
(1, NULL, 'HP 14-ck1002tu', '5CG9013YCL', 'AGENT-LAP-007', 'Abdul Khalak', 'Agent Banking, Laxmipur', '2020-10-18', '2020-10-18', NULL, 0, 'SMS Systems', 'Noise after Starts'),
(2, NULL, 'Lenovo ThinkPad L470', 'PF10ZGGA', 'DHK-HO-NB652', 'Firoj Shah', 'Mehedibag Priority', '2020-10-18', '2020-10-19', NULL, 0, 'Thakral Information Systems', 'Power key Problem, Physical Damage'),
(3, NULL, 'Dell Optiplex 3060', '9LY8HY2', 'DHK-HO-WS2494', 'EBL IT', 'EBLIT', '2020-10-11', '2020-10-11', NULL, 0, 'SMS Systems', 'Display Problem'),
(4, NULL, 'Lenovo ThinkPad L470', 'PF10XRR3', 'DHK-HO-NB679', 'Lailun Nahar Kanta', 'RB', '2020-10-19', '2020-10-19', NULL, 0, 'Thakral Information Systems', 'Keyboard Problem'),
(5, NULL, ' Dell Latitude 3400', '1ZZ3JW2', 'DHK-HO-NB921', 'No User', '-', '2020-10-20', '2020-10-20', '2020-10-27', 1, ' Pakiza Technovation Limited', 'Restarts frequently, HDD Problem'),
(6, NULL, 'Lenovo ThinkPad L470', 'PF13Y4QU', 'DHK-HO-NB703', 'Umme Fatima Sabrina', 'CRM, HO', '2020-10-06', '2020-10-06', '2020-10-13', 1, 'Thakral Information Systems', 'Keyboard and Power Problem'),
(8, 12964, 'HP 14-ck1002tu', '5CG91944L0', 'DHK-HO-NB906', 'Nazmul Haque', 'Agent Banking, RB', '2020-09-30', '2020-09-30', NULL, 0, 'SMS Systems ', 'Vertical line/spot in monitor screen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warranty_claim`
--
ALTER TABLE `warranty_claim`
  ADD UNIQUE KEY `SL` (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warranty_claim`
--
ALTER TABLE `warranty_claim`
  MODIFY `SL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
