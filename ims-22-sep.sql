-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 08:31 PM
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
-- Table structure for table `online-ups-list`
--

CREATE TABLE `online-ups-list` (
  `SL` int(3) DEFAULT NULL,
  `Division` varchar(10) DEFAULT NULL,
  `Location` varchar(52) DEFAULT NULL,
  `Address` varchar(110) DEFAULT NULL,
  `Brand` varchar(10) DEFAULT NULL,
  `Model` varchar(16) DEFAULT NULL,
  `Capacity` varchar(19) DEFAULT NULL,
  `Backup_Time` varchar(17) DEFAULT NULL,
  `Purchase_Year` varchar(10) DEFAULT NULL,
  `Vendor_Name` varchar(25) DEFAULT NULL,
  `UPS_Serial_No` varchar(20) DEFAULT NULL,
  `Asset_Tag` varchar(27) DEFAULT NULL,
  `Remarks` varchar(109) DEFAULT NULL,
  `Comments` varchar(26) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online-ups-list`
--

INSERT INTO `online-ups-list` (`SL`, `Division`, `Location`, `Address`, `Brand`, `Model`, `Capacity`, `Backup_Time`, `Purchase_Year`, `Vendor_Name`, `UPS_Serial_No`, `Asset_Tag`, `Remarks`, `Comments`) VALUES
(1, 'DHAKA', 'EBL DHANMONDI BR ATM00042', 'House ? 21, Road # 8, Dhanmondi R. A., Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '20-08-14', 'Unicol Bangladesh', '130427-130435126', 'DHK-DHAN-BR-UPS001', '-', '-'),
(2, 'DHAKA', 'EBL SHYAMOLI BR ATM00059', 'Plot-16-A/5, Ring Road, Block-F, Mohammadpur Housing Estate, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Unicol Bangladesh', '1203-1122554', 'DHK-SHY-BR-UPS001', '-', '-'),
(3, 'DHAKA', 'EBL MIRPUR 11 BR ATM00083', 'Plot -17, Road # 3, Block-A, Sec. # 11, Mirpur, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '06-06-08', 'Tech Valley Solutions Ltd', '635241', 'DHK-MIRPR-BR- UPS001', '-', '-'),
(4, 'DHAKA', 'EBL NARAYANGANJ BR ', '64 BB Road (Islam Plaza), Narayangonj', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-06-13', 'Unicol Bangladesh', '1302-254142', 'DHK-NARJ-BR-UPS001', '-', '-'),
(5, 'DHAKA', 'EBL BASHUNDHARA BR ATM00257', 'Plot -15, Block - A, Bashundhara R/A, Badda, Dhaka - 1219', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '20-08-14', 'Unicol Bangladesh', '140612-140539293', 'DHK-BASHUN-BR-UPS002', 'replace socomec-3kva-TVSL-2008', '-'),
(6, 'DHAKA', 'EBL MOTIJHEEL BR 1ST ATM00349', '88 Motijheel C. A., Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '06-06-08', 'Tech Valley Solutions Ltd', '55412414', 'DHK-MOTI-BR-UPS001', 'Mar-2019 Scocomec has been found faulty', '-'),
(7, 'DHAKA', 'EBL GULSHAN BR & ATM00372', 'Concord Richmond, 68 Gulshan Avenue, Plot-8/A, Block-CES (F), Gulshan-1, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '06-06-08', 'Tech Valley Solutions Ltd', '598544', 'DHK-GUL-BR-UPS001', '-', '-'),
(8, 'DHAKA', 'EBL GULSHAN BR & ATM00372', 'Concord Richmond, 68 Gulshan Avenue, Plot-8/A, Block-CES (F), Gulshan-1, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '15 min@Full load ', '06-06-08', 'Tech Valley Solutions Ltd', '968541', 'DHK-GUL-BR-UPS002', 'support', '-'),
(9, 'DHAKA', 'EBL BOARDBAZAR BR ATM00414', 'Omar Ali Plaza, House 1, Block C, Board Bazar, Gazipur', 'Apollo', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '18.08.2015', 'Tech Valley Solutions Ltd', '150202514050015', 'DHK-BOARDB-BR-UPS001', 'Pre: Socomec; Ven: Tech Valley; pur dt:06-06-2008', '-'),
(10, 'DHAKA', 'EBL KERANIGANJ BR ATM00422 (Branch)', 'Dackpara Road, Shahid Nagar, Keranigonj, Dhaka', 'UNICOL', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '120202-111306200', 'DHK-KER-BR-UPS001', 'need replace', '-'),
(11, 'DHAKA', 'EBL MOGHBAZAR BR ATM00430', 'Shafi Complex, 1/A West Moghbazar, New Circular Road, Ramna, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '06-06-08', 'Tech Valley Solutions Ltd', '999666555', 'DHK-MOGH-BR-UPS001', '-', '-'),
(12, 'DHAKA', 'EBL BANASREE BR ATM00596', '10 Banasree Main Road, Block # C, Banasree Residential Area, Rampura Dhaka', 'Apollo', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '30-05-16', 'Tech Valley Solutions Ltd', '6254214', 'DHK-BANSR-BR-UPS001', 'Pre: Socomec; Ven: Tech Valley; pur dt:06-06-2008', '-'),
(13, 'DHAKA', 'EBL SATMASJID ROAD BR ATM00612', '48 Satmosjid Road, Dhanmondi, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '96544', 'DHK-SATM-BR-UPS001', '-', '-'),
(14, 'DHAKA', 'EBL SAVAR BR ATM00620', 'Brishti Villa, E/3 Talabagh, Thana Road, Savar, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '26-05-09', 'Tech Valley Solutions Ltd', '2105254485', 'DHK-SVR-BR-UPS001', 'UPS Full set replaced Oct 2018', 'UNICOL 3KVA Long, Oct-2018'),
(15, 'DHAKA', 'EBL NAWABGANJ BR ATM00745', 'Hossain Plaza, 281 Nawabgonj, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '9858455', 'DHK-NARBR-ATM-UPS002', '-', '-');

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
(2147483647, '2020-09-12', '1232303', 'Done OK', 0, '2020-09-21 06:23:33'),
(2147483647, '2020-10-29', '16651', 'UPS Problem', 0, '2020-09-21 17:39:12'),
(2147483647, '2020-10-31', '11987', 'Status pending', 0, '2020-09-21 18:00:30'),
(2147483647, '2020-10-05', '324324', 'UPS Problem 2', 0, '2020-09-21 18:09:08'),
(2147483647, '2020-11-19', '11573', 'UPS Problem', 0, '2020-09-21 18:17:28'),
(2147483647, '2020-10-21', '1157321', 'Status pending', 0, '2020-09-21 18:18:44'),
(921082926, '2032-02-10', '11753', 'Status pending', 0, '2020-09-21 18:29:26'),
(921082942, '1933-03-01', '11573', 'Status pending', 0, '2020-09-21 18:29:42');

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
(1, 'admin', 'naimcm@gmail.com', 'admin', '$2y$10$FQrNHyA1cbDGwjFQzXV0zemvi047lRTeUGwLcNL7TTRtzR0FikQse', NULL, 0, '2020-08-02 07:14:59');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
