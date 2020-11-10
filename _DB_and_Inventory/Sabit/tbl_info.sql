-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 07:05 AM
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
-- Database: `hardware`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(10) NOT NULL,
  `date_` varchar(30) NOT NULL,
  `follow` varchar(30) NOT NULL,
  `incident` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `tag` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `serial_` varchar(30) NOT NULL,
  `prob` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `delivery` varchar(30) NOT NULL,
  `os` varchar(30) NOT NULL,
  `is_repaired` varchar(30) NOT NULL,
  `mail_sent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `date_`, `follow`, `incident`, `branch`, `dept`, `user`, `ip`, `tag`, `model`, `serial_`, `prob`, `status`, `remark`, `delivery`, `os`, `is_repaired`, `mail_sent`) VALUES
(1, '2020-01-26', 'Sabit Bin Kabir', '7505', 'Banani', 'Retail Banking', 'Afzalur Rahman Bhuiyan', '192.168.54.13', 'DHK-BA-WS013', 'DELL 330', '1Y46T1S', 'Out of order', 'No', 'OLD MODEL CPU REPLACEMENT NEW CPU DELL 3060', '2020-01-27', 'Windows 7', 'New pc provided permanently', 'Not Required'),
(2, '2020-01-26', 'Sabit Bin Kabir', '7517', 'HO', 'ICCD', 'Towhedur Rahman', '192.168.209.32', 'DHK-HO-WS1213', 'HP Compaq 6200 Pro SFF PC', 'SGH146Q680', 'OS setup required and PC slow', '', 'OS Setup', '2020-01-28', 'Windows 10', 'Yes', 'Not Required'),
(3, '2020-01-26', 'Sabit Bin Kabir', '7462', 'Cards Operations', 'Cards', 'Nityananda  Mondal', '192.168.55.47', 'DHK-HO-WS1281', 'HP Compaq 6200 Pro SFF PC', 'SGH210Q10F', 'CPU not working and hard disk error', '', 'OS Problem', '2020-01-28', 'Windows 10', 'Yes', 'Not Required'),
(4, '2020-01-26', 'Sabit Bin Kabir', '7629', 'SABERA TOWER', 'CONTACT CENTER', 'Aditi Barai', '192.168.46.6', 'DHK-HO-WSQJRK', 'HP Compaq 6000 Pro SFF PC', 'SGH019QJRK', '', 'ADD 500GB HDD & 4GB RAM', 'RAM HDD UPGRED', '', 'Windows 7', 'Yes', 'Yes'),
(5, '2020-01-26', 'Sabit Bin Kabir', '7629', 'SABERA TOWER', 'CONTACT CENTER', 'Farhana Islam Asha', '192.168.46.179', 'DHK-HO-WS1603', 'HP Compaq Pro 6300 SFF', 'SGH325RMP2', '', 'add 5GB HDD', '', '', 'Windows 7', 'Yes', 'Yes'),
(6, '2020-01-21', 'Sabit Bin Kabir', '7579', 'Uttara Branch', 'RB', 'Anik Kumar Saha', '192.168.68.124', 'DHK-HO-WS1894', 'HP ProDesk 600 G1 SFF', 'SGH434RQ23', '', 'POWER SUPPLY', 'Power Supply Problem.\r\nSupport PC provided temporarily', '', 'Windows 10', 'Support provided', 'Yes'),
(7, '2020-01-16', 'Sabit Bin Kabir', '', 'Shantinagar', 'RB', 'Nasima Jahan', '192.168.16.144', 'DHK-SH-WS023', 'HP Compaq dc5800 Small Form Fa', 'SGH947PGWT', '', '', 'PC replaced with support', '', '', 'Support provided', 'Not Required'),
(8, '2020-01-21', 'Khandaker Naim Hossaion', '', '', 'Operation', 'Rezanul Kamal', '192.168.27.98', 'DHK-TSD-WS1945', 'HP ProDesk 600 G1 SFF', 'SGH434RQ50', '', '', 'Power Supply Problem', '2020-01-28', 'Windows 7', 'Yes', 'Yes'),
(9, '2020-01-21', 'Khandaker Naim Hossaion', '', 'ZN Tower', 'SAMD', 'Most. Sahanaj Parvin', '192.168.111.80', 'DHK-HO-WS1462', 'HP Compaq Pro 6300 SFF', 'SGH247PG8Y', '', '', 'HDD Problem Data copy not possible ADD 500 GB HDD', '2020-01-28', 'Windows 10', 'Yes', 'Yes'),
(10, '2020-01-28', 'Sabit Bin Kabir', '7545', 'Gulshan Branch', 'RB', 'Emad Uddin', '', '', '', '', 'PC shut down automatically', '', 'REPLACE NEW CPU', '2020-01-30', 'Windows 10', 'Yes', 'Not Required'),
(11, '2020-01-27', 'Sabit Bin Kabir', '7570', 'SAMD', 'ZN tower', 'Ripon Chandra Prodhan', '192.168.111.18', '', '', '', 'Pc hangs, CMOS battery low, sound from RAM.\r\nDell 330', '', 'Replace  CPU HP Compaq Pro 6300 SFF	DHK-HO-WS1449	SGH247PGBL', '', 'Windows 10', 'Yes', 'Not Required'),
(12, '2020-01-28', 'Sabit Bin Kabir', '', 'Head Office', 'IT', 'Sanjoy Dutta', '192.168.205.58', 'DHK-HO-WS757', 'L480', 'PF18J51U', 'Fresh OS setup required', '', 'OS SETUP', '2020-01-28', '', 'Yes', ''),
(13, '2020-01-28', 'Sabit Bin Kabir', '7594', '100 Gulshan Branch', 'RB', 'Shujat Toha Shovon', '192.168.202.55', 'DHK-HO-WS1314', 'HP 6200', 'SGH210Q117', 'Gets hanged at windows logo', 'No', 'OS Setup', '2020-01-28', 'Windows 10', 'Yes', 'Not Required'),
(14, '2020-01-28', 'Sabit Bin Kabir', '7603', 'HO', 'Corporate', 'Hasnine Mahmud', '192.168.210.60', 'DHK-HO-NB549', 'HP ProBook 440 G3', '5CD6322TTL', 'PC not functioning', '', 'PC sent to servicing.\r\nTemp. Support pc provided.', '', '', 'Support provided', ''),
(15, '2020-01-28', 'Sabit Bin Kabir', '7633', 'Uttara Branch', '', 'Khadeza Tul Quobra', '192.168.68.120', 'UT-DHK-WS031', 'HP Compaq 6200 Pro SFF PC', 'SGH146Q6B3', 'CPU out of order', '', 'ADD 2GB RAM  POWER SUPPLY  & OS SETUP', '', 'Windows 10', 'Yes', 'Yes'),
(16, '2020-01-29', 'Sabit Bin Kabir', '7650', 'Narayangonj Branch', 'RB', 'Mahbub Minhaz', '17.6', 'DHK-HO-NB904', 'HP 14CK', '5CG9193NYT', 'Laptop out of order', 'NO', 'BIOS PROBLEM', '2020-01-30', 'Windows 10', 'Yes', 'Not Required'),
(17, '2020-02-02', 'Sabit Bin Kabir', '7680', 'Jashimuddin', 'RB', 'Mobarok Hossain', '', '', '', '', 'Auto shutdown after 2/3 minutes', '', '', '', '', '', ''),
(18, '2020-02-02', 'Sabit Bin Kabir', '7676', 'Contact center', 'RB', 'Zahidul Islam', '', 'DHK-HO-NB306', '', '', 'Contact center OS installation in laptop', '', '', '', '', '', ''),
(19, '2020-01-30', 'Sabit Bin Kabir', '7528', 'Banasree Branch', 'RB', 'Habibul Alam', '', '', '', '', 'PC not working even after repairing it several times', '', '', '', '', '', ''),
(20, '', 'Sabit Bin Kabir', '7693', 'Tangail', '', 'Imranul Hasan Talukder', '192.168.157.153', '', ' HP compaq 6000 ', 'SGH033r4pk   ', 'Power problem', '', '', '', '', '', ''),
(21, '2020-01-30', 'Sabit Bin Kabir', '7672', 'Gulshan Avenue branch', '', 'Ruhul Amir', '192.168.115.113', 'DHK-GU-WS037', 'hp 5800', 'SGH947PGX9', 'WINDOWS NOT STARTING', '', 'replaced', '2020-02-02', 'Windows 10', 'Support provided', 'Not Required'),
(22, '', 'Sabit Bin Kabir', '7699', 'HEAD OFFICE', 'Operations', ' Quamrul Hassan Siddiqui', '', '', '', '', ' Computer is out of order. It is happening repeatedly. ', '', '', '', '', '', ''),
(23, '2020-01-30', 'Sabit Bin Kabir', '7710', 'Dar Us Salam', 'RB', 'Rashadur Rahman', '', '', '', '', 'Bios Battery problem', 'CMOS BATTERY CHANGE', 'TIME & DATE', '', 'Windows 10', 'Yes', 'Not Required'),
(24, '2020-02-02', 'Sabit Bin Kabir', '7698', 'Head Office', 'Retail Banking', 'Rafiqul Hassan', '', '', '', '', 'Sign in problem', '', '', '', '', '', ''),
(25, '2020-02-03', 'Sabit Bin Kabir', '7749', 'CAD, Zn Tower', 'CAD', 'Nargis Parvin', '', '', '', '', 'PC Shutdown Automatically', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
