-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 03:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(7, '2020-09-15', 11753, 'Principal Branch', 'CPU not starting', '2020-08-25 13:41:53'),
(9, '2020-09-17', 11523, 'Ashulia', 'Pending', '2020-08-25 16:32:58'),
(10, '2020-08-17', 11577, 'Mirpur', 'UPS Problem', '2020-08-25 16:33:24'),
(11, '2020-09-01', 11987, 'Rajshahi', 'BM Laptop Problem', '2020-08-31 18:06:30'),
(13, '2010-08-13', 1175343, 'Dhanmondi', 'UPS Problem', '2020-09-15 19:02:52');

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
(15, 'DHAKA', 'EBL NAWABGANJ BR ATM00745', 'Hossain Plaza, 281 Nawabgonj, Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '9858455', 'DHK-NARBR-ATM-UPS002', '-', '-'),
(16, 'DHAKA', 'EBL MIRPUR Dar-us salam BR ATM00752', '10 Dar-Us- Salam Road, Mirpur-01, Dhaka-1216', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '635255', 'DHK-DARUSSLM-BR- UPS001', '-', '-'),
(17, 'DHAKA', 'EBL TANGAIL BR ', 'Rahman Center (1st Floor), 55 Victoria Road,? Tangail', 'Apollo', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '31.10.2015', 'Tech Valley Solutions Ltd', '150611278550199', 'SHK-TANG-BR-UPS001', 'Pre: Socomec; Ven: Tech Valley; pur dt:06-05-2012', '-'),
(18, 'DHAKA', 'EBL MYMENSINGH SME BR ATM00794', 'Hamida Market , 45 Choto Bazar, Kotwaly, Mymensingh', 'Apollo', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '12-12-15', 'Tech Valley Solutions Ltd', '3EAM140408498250154', 'DHK-MYMEN-BR-UPS002', 'Socomec UPS has been changed, purchase in 2008', '-'),
(19, 'DHAKA', 'EBL UTTARA G-E-NEWAZ BR ATM00844', 'Plot No. 15 (1st Floor), Garib-E-Newaz Avenue, Sector-11,? Uttara, Dhaka-1230', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '532414', 'DHK-GARB-BR-UPS001', '-', '-'),
(20, 'DHAKA', 'EBL DOHAR BR ATM01008', 'Ashraf Ali Chowdhury Plaza, Joypara College, Joypara Bazar, Dohar,?Dhaka', 'SOCOMEC', 'Tech Valley', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '954214', 'DHK-DOHR-BR-001', '-', '-'),
(21, 'DHAKA', 'EBL KERANIGANJ SME BR ATM01032', 'Green Tower (1st floor), East Aganagar, Keranigonj, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '120202-111306269', 'DHK-KER-SMEBR-UPS001', 'need replace', '-'),
(22, 'DHAKA', 'EBL PROGATI SHARANI BR ATM01123 (Branch)', 'Plot # 103/A, Progati Sharanee, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '09-05-11', 'Tech Valley Solutions Ltd', '110520-110299237', 'DHK-PROG-BR-UPS001', 'ok', '-'),
(23, 'DHAKA', 'EBL AZIMPUR BR ATM01131 (branch)', 'Tulip Feroza Dream (1st Floor), 104 Azimpur Road, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '09-05-11', 'Tech Valley Solutions Ltd', '110520-110299250', 'DHK-AZIM-BR-UPS001', 'ok', '-'),
(24, 'DHAKA', 'EBL UTTARA BRANCH ATM01339', 'Plot-1A, Road #4, Sec. # 4, Uttara, Dhaka', 'SOCOMEC', 'Sicon', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '5478715', 'DHK-UTTR-ATM-UPS01', '-', '-'),
(25, 'DHAKA', 'EBL GULSHAN-2 Unicorn (Kallanpur) ATM01354', 'Unicorn Plaza, 40/2 North Avenue, Gulshan-2, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '130427-130435168', 'DHK-UNICRN-ATM-UPS001', 'dhk-unicrn-atm-ups001', '-'),
(26, 'DHAKA', 'EBL SONARGAON RD BR ATM01461', 'AHN Tower, Ground Floor, 13 Biponon C.A, Bir Uttam C R Datta Road, ( Sonargoan Road), Bangla Motor, Dhaka 1205', 'UNICOL', 'UNICOL', 'UL 1KVA', '2 hrs@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1303-5568471', 'DHK-SONR-ATM-UPS001', '3KVA Short Backup Running', '-'),
(27, 'DHAKA', 'EBL SHANTINAGAR BR Server Room', 'Iris Noorjehan, 104 Kakrail Road (1st floor), Ramna, Dhaka', 'SOCOMEC', 'Sicon', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '987414254', 'DHK-SHNT-SERV-UPS01', '-', '-'),
(28, 'DHAKA', 'EBL DEPZ BR ATM01511', 'Mazid Tower, PO:Gazir Chat,PS: Ashulia,Baipail, Savar, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '120202-111306202', 'DHK-DEPZ-BR-UPS002', 'need replace', '-'),
(29, 'DHAKA', 'EBL Ashkona BR ATM01610 (Branch)', '250/A, 1st Floor, Ashkona, Dakhin Khan, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '111124-111034167', 'DHK-DKHN-BR-UPS001', 'ok', '-'),
(30, 'DHAKA', 'EBL COLLEGE GATE ATM00003', 'Plot-1/4, Block-B, 12 Gajnabi Road, Mohammadpur Housing State, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '15-09-14', 'Tech Valley Solutions Ltd', '140612140539299', 'DHK-COLLG-ATM-UPS001', 'replace rello-3KVA-CSL-2008', '-'),
(31, 'DHAKA', 'EBL BANANI ROAD-11 ATM00190', 'House # 78, Road # 11, Block-D, Banani, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '02-02-13', 'Tech Valley Solutions Ltd', '1304-2541498', 'DHK-BAN-BR-UPS001', '-', '-'),
(32, 'DHAKA', 'EBL DHANMONDI 4/A ATM00224', 'BETS Center, Baitul Iqra, House # 15, Road # 4/A, Dhanmondi R. A., Dhaka', 'Apollo', '2300HS-L', 'UL 3KVA', '2 hrs@Full load ', '25.11.2015', 'Tech Valley Solutions Ltd', '150611278550254', 'DHK-BELT-ATM-UPS001', 'replace socomec-3kva-TVSL-2008', '-'),
(33, 'DHAKA', 'EBL KHILKHET 1ST ATM00265', '02/A Rajuk Trade Center, Nikunja, Badda', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '07-08-08', 'Tech Valley Solutions Ltd', '584574', 'DHK-KHILK-ATM-UPS001', '-', '-'),
(34, 'DHAKA', 'EBL UTTARA SEC.7 ATM00448', '9 Sonargaon Janapath Road, Sector # 7, Uttara', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', '9652478', 'DHK-UTTR7ATM-UPS001', '-', '-'),
(35, 'DHAKA', 'EBL EASTERN MOLLIKA ATM00471', 'Eastern Mollika Shopping City, 26/ 1-2 Elephant Road, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', '45987174', 'DHK-MOLLK-ATM-UPS01', '-', '-'),
(36, 'DHAKA', 'EBL EAST PANTHOPATH ATM00539', '4 Panthopath, Royel Tower, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '02-09-09', 'Tech Valley Solutions Ltd', '65441247', 'DHK-PANTH-ATM-UPS001', '-', '-'),
(37, 'DHAKA', 'EBL GULSHAN-2 LANDMARK (Begum Bazar)ATM00547', '12-14 Landmark Shopping Centre, (Ground Floor), Shop # 1, Gulshan -2, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '131206-131501166', 'DHK-LANDMK-ATM-UPS001', '-', '-'),
(38, 'DHAKA', 'EBL EASTERN PLUS ATM00687', 'Eastern Plus, 145 Shantinagar, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', '858546', 'DHK-ESTRPLS-ATM-UPS001', '-', '-'),
(39, 'DHAKA', 'EBL MIRPUR Reneta ATM00703', 'Rabeya Complex, Plot-336/KHA Main Road No 1, Mirpur, Dhaka- 1216', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '16-07-14', 'Tech Valley Solutions Ltd', '140612140539298', 'DHK-MIR-ATM-UPS001', 'EBL MIRPUR 10 1st ATM has been stoped', '-'),
(40, 'DHAKA', 'EBL NAZIMUDDIN ROAD ATM00828', 'S H Plaza, 90/91 Nazimuddin Road (Opposite Sheikh Borhanuddin College), Lalbagh, Dhaka', 'Apollo', '2300HS-L', 'UL 3KVA', '2 hrs@Full load ', '25-01-15', 'Tech Valley Solutions Ltd', '140318140117202', 'DHK-NAZIM-ATM-UP002', 'replace socomec-3KAV', '-'),
(41, 'DHAKA', 'EBL BIJOYNAGAR ATM00877', '45 Bijoynagar, Saiham Sky View Tower, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '12056-201458', 'DHK-BIJOY-ATM-UPS001', '-', '-'),
(42, 'DHAKA', 'EBL W. PANTHOPATH ATM00885', '20/5 West Panthopath, Dhaka 1205', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '12056-225418', 'DHK-WPANT-ATM-UPS002', '-', '-'),
(43, 'DHAKA', 'EBL UTTARA L DRIVE ATM00927', 'House # 15, Sector # 07, Lake Drive Road, Uttara, Dhaka-1230', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', '8544174', 'DHK-UTRLKDRV-UPS001', '-', '-'),
(44, 'DHAKA', 'EBL HATIRPOOL ATM00950', '234 New Elephant Road, Khairunnesa Mansion, Dhaka 1205', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '20-05-14', 'Tech Valley Solutions Ltd', '131206-131501168', 'DHK-HATRL-ATM-UPS001', '-', '-'),
(45, 'DHAKA', 'EBL NEW MARKET ATM00976', '186 Govt. New Market, Dhaka', 'Apollo', '2300HS-L', 'UL 3KVA', '2 hrs@Full load ', '21.10.2015', 'Tech Valley Solutions Ltd', '150611278350051', 'DHK-NEWMRKT-ATM-UPS001', 'Pre: Socomec; Ven: tech Valley; Pur: 05-09-2008', '-'),
(46, 'DHAKA', 'EBL SHANTINAGAR ATM01065', 'Kulsum Tower, 40-41 Siddheswari Circular Road, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-05-12', 'Tech Valley Solutions Ltd', '120202-111306216', 'DHK-SHAN-ATM-UPS002', 'need replace', '-'),
(47, 'DHAKA', 'EBL SHAHJADPUR EBL ATM01164 Dismental ', 'Gha 37/1m Shahjadpur, Gulshan Progati Sarani (Cambrian College Building), Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '26-06-11', 'Tech Valley Solutions Ltd', '110222-110029297', 'DHK-SHAJD-ATM-UPS001', 'ok', '-'),
(48, 'DHAKA', 'EBL KHILGAON 2ND ATM01198', '577 C Khilgaon, Chowdhury Para, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '26-06-11', 'Tech Valley Solutions Ltd', '110222-110029299', 'DHK-KHILG-ATM-UPS001', 'need replace', '-'),
(49, 'DHAKA', 'EBL Paltan Culvart ATM01206', 'Puranapaltan Box culvert ATM, 59/2 Surma Tower ATM ', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '26-06-11', 'Tech Valley Solutions Ltd', '110520-110299233', 'DHK-SURM-ATM-UPS001', 'ok', '-'),
(50, 'DHAKA', 'EBL MONIPURI PARA ATM01248', '20 Monipuri Para, Sangshad Avenue Road, Dhaka-1215', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '26-06-11', 'Tech Valley Solutions Ltd', '110222-110029305', 'DHK-MONI-ATM-UPS001', 'ok', '-'),
(51, 'DHAKA', 'EBL WARI ATM01362', '2/6 Nawab Street, Wari, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '26-06-11', 'Tech Valley Solutions Ltd', '111124-111034200', 'DHK-WAR-ATM-UPS001', 'need replace', '-'),
(52, 'DHAKA', 'EBL Wari Branch', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '1299-02154', 'DHK-WARI-BR-UPS002', '-', '-'),
(53, 'DHAKA', 'EBL CONCORD ARCADIA ATM00034', 'Shop-141, Concord Arcadia Shopping Mall, Plot-1 &2, Road # 4, Dhanmondi R.A., Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', 'PI91373005R00000', 'DHK-CRNARD-ATM-UPS001', '-', '-'),
(54, 'DHAKA', 'EBL SHIMANTO SQUARE ATM00117', 'Shimanto Square, Dhanmondi, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '05-09-08', 'Tech Valley Solutions Ltd', 'PI64014010R00018', 'DHK-SMNT-ATM-UPS001', '-', '-'),
(55, 'DHAKA', 'EBL BAILY ROAD ATM00216 (Discontinue frm 04.05.2015)', '12/1 Baily Road, Dhaka', 'UNICOL', 'UNICOL', 'UL 1KVA', '2 hrs@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '1303-44574571', 'DHK-BAILY-ATM-UPS001', '-', '-'),
(56, 'DHAKA', 'EBL MALIBAGH ATM00232', '176/1 D.I.T. Road, Malibagh, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '12145-556621', 'DHK-MALI-ATM-UPS001', 'Runs With 3KVA Short Backup', '-'),
(57, 'DHAKA', 'EBL TANGAIL ATM00240', 'Mobarak Complex, Old Bus Stand, Tangail', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '120202-111306210', 'SHK-TANG-BR-UPS002', 'ok', '-'),
(58, 'DHAKA', 'EBL CHAWKBAZAR ATM00364', '11 No water works Road, Rahamatgonj, Chawk Mughultully, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '02-02-08', 'Tech Valley Solutions Ltd', 'PI64014010R00000', 'DHK-CHWK-ATM-UPS01', '-', '-'),
(59, 'DHAKA', 'EBL RUPNAGAR ATM00380', 'Road ? 21, House # 60, Rupnagar R/A, Mirpur, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '110222-110029271', 'DHK-RUPNGR-ATM-UPS001', 'ok', '-'),
(60, 'DHAKA', 'EBL MOHAKHALI Madona ATM00588', 'Madona Tower, 28 Mohakhali C. A., Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '09-09-08', 'Tech Valley Solutions Ltd', '4455741274', 'DHK-MOHMDN-ATM-UPS003', 'support 1 KVA long-unicon-2012', '-'),
(61, 'DHAKA', 'EBL TAJMAHAL ROAD ATM00695', 'Y-14/C Main Taj Mahal Road/Razia Sultana Road, Mohammadpur, Dhaka', 'SOCOMEC', 'Modulys', 'UL 3KVA', '2 hrs@Full load ', '09-09-08', 'Tech Valley Solutions Ltd', '8658144', 'DHK-TAJ-ATM-UPS001', '-', '-'),
(62, 'DHAKA', 'EBL WESTIN ATM00711', 'The Westin Dhaka, Plot No. 1 CWN (B), Road No. 45, Gulshan-2, Dhaka-1212', 'PC Power', 'PC Power', '1 KVA (Std Offline)', '15 min@Full load ', '25-05-13', 'Tech Valley Solutions Ltd', '52144', 'DHK-WESTN-ATM-UPS001', '-', '-'),
(63, 'DHAKA', 'EBL UTTARA SEC-3 Jasim Uddin BR ATM00836', 'House # 18, Road # 16, Jasimuddin Avenue, Sector 3, Uttara, Dhaka-1212', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '03-09-16', 'Tech Valley Solutions Ltd', '1308-0147245', 'DHK-JASIM-BR-UPS001', '-', '-'),
(64, 'DHAKA', 'EBL PATAN I.C. ROAD ATM00869', '35/A Purana Paltan Line, VIP ( Inner Circular Road), Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '120202-111306186', 'DHK-INNE-ATM-UPS001', '-', '-'),
(65, 'DHAKA', 'EBL TONGI ATM00893', 'Senakalyan Commercial Complex, Ground Floor, Tongi, Gazipur', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '111124-1110342', 'DHK-TONG-ATM-UPS001', 'need replace', '-'),
(66, 'DHAKA', 'EBL TEJKUNI PARA ATM00935', '105 Tejkuni Para (Awolad Hossain Market) Tejgaon, Dhaka-1215', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '111302-250141', 'DHK-TEJKN-ATM-UPS001', '-', '-'),
(67, 'DHAKA', 'EBL SHAYAMOLI ATM00943', 'Shop # 3, P C Culture Bhaban, Shyamoly, Dhaka 1207', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '120202-111306196', 'DHK-SHY-ATM-UPS002', 'ok', '-'),
(68, 'DHAKA', 'EBL KHILKHET LAKE CITY ATM00968', 'House # Kha ?100/2, Khilket Lake City Road, Dhaka', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '1303-44574572', 'DHK-KHIL-ATM-UPS002', '-', '-'),
(69, 'DHAKA', 'EBL BASHUNDHARA CITY ATM00992', 'Bashundhara Shopping Mall, Level-7, East Panthopath, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '1112-5248744', 'DHK-HO-BCDL-UPS001', '-', '-'),
(70, 'DHAKA', 'EBL FIRMGATE ATM01024', '115/ A Airport Road, Tejgaon, (Opposite to Tejgaon Thana), Dhaka-1215', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '09-09-08', 'Tech Valley Solutions Ltd', '965854', 'DHK-FARM-ATM-UPS001', '-', '-'),
(71, 'DHAKA', 'EBL JOHNSON ROAD ATM01180', '41 Johnson Road ( Roy Saheb Bazar), Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '04-08-12', 'Tech Valley Solutions Ltd', '111124-111034240', 'DHK-JOHN-ATM-UPS001', 'ok', '-'),
(72, 'DHAKA', 'EBL BASHABO ATM01214', '43/13 Sobuj Kanon, Atish Dipankar Road, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-06-12', 'Tech Valley Solutions Ltd', '110520-110299255', 'DHK-BASBO-ATM-UPS001', 'ok', '-'),
(73, 'DHAKA', 'EBL SAVAR BAZAR ATM01230', 'B/1 Bazar Road, Bazar Bus Stand, Savar, Dhaka', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '1303-44574573', 'DHK-SAVR-ATM-UPS001', '-', '-'),
(74, 'DHAKA', 'EBL MOHAKHALI AMTOLI ATM01263', '100 Mohakhali C.A., Dhaka-1212', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '12-12-15', 'Tech Valley Solutions Ltd', '3EAM140408498250259', 'DHK-MOHK-ATM-UPS002', 'Unicol IPS has changed, Purchase date 2011', '-'),
(75, 'DHAKA', 'EBL DHANMONDI-6 ATM01271 shifted to Choumuhani Br', 'House # 09, Road # 06 ( Former), Bhasa Sainik Abul Kalam Shamsuddin Sarak, Dhanmondi R/A, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '09-09-08', 'Tech Valley Solutions Ltd', '-', 'DHK-DHN6-ATM-UPS001', '-', '-'),
(76, 'DHAKA', 'EBL MOHAKHALI AIRPORT RD ATM01289', 'House # 42, Bir Uttam Ziaur Rahman Road, Amtoli, Mohakhali, Dhaka-1212', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '27-02-11', 'Tech Valley Solutions Ltd', '111124-111034168', 'DHK-MOHK-ATM-UPS002', 'need replace', '-'),
(77, 'DHAKA', 'EBL KHILKHET LAKE CITY ATM', 'EBL KHILKHET LAKE CITY ATM', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '27-02-11', 'Tech Valley Solutions Ltd', '111124-111034254', 'DHK-GUL-ATM-UPS001', 'Back From EBL GULSHAN TEJ. LINK RD ATM01297', '-'),
(78, 'DHAKA', 'EBL KARWAN BAZAR ATM01370', 'Pragati Insurance Bhaban, Ground Floor, 20-21 Kawran Bazar, Dhaka -1215', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '111124-111034225', 'DHK-KARNBZR-ATM-UPS002', 'ok', '-'),
(79, 'DHAKA', 'EBL NIKETAN ATM01412', 'House # 50, Road # 3, Block ?B, Niketan, R/A, Gulshan-1, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '120202-111306190', 'DHK-NIKE-ATM-UPS001', 'need replace', '-'),
(80, 'CHITTAGONG', 'EBL Bahaddarhat ATM', 'Ghowsia Akbor Tower, 352 Arkan Road, Baduftola, Bahaddarhat, Panchlaish, Chattogram', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '120202-111306228', 'DHK-GUL-ATM-UPS003', 'Closed On 30-Nov-2018 previously EBL NORTH GULSHAN ATM01420, Address- 175 A Gulshan Avenue, Gulshan -2, Dhaka', '-'),
(81, 'DHAKA', 'EBL R K MISSION RD ATM01446', '1 R K Mission Road, Ittefaq Bhaban, Dhaka 1203', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '1202-2541432', 'DHK-RKMIS-ATM-UPS001', '-', '-'),
(82, 'DHAKA', 'EBL RAMPURA ATM01453', '337/1 East Rampura, DIT Road, Rampura, Dhaka ( on the south side of BTV Bhaban), Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '120202-111306220', 'DHK-RAMPU-ATM-UPS001', 'need replace', '-'),
(83, 'DHAKA', 'EBL ASAD GATE ATM01487', 'Tanin Plaza, House # 03, Asad Gate, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-07-12', 'Tech Valley Solutions Ltd', '120202-111306182', 'DHK-ASAD-ATM-UPS001', 'ok', '-'),
(84, 'DHAKA', 'EBL SHEGUN BAGICHA ATM01560', '42/1 Kha Shagunbagicha, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1304-78745124', 'DHK-SEGUN-ATM-UPS001', '-', '-'),
(85, 'DHAKA', 'EBL MOGHBAZAR NOYATOLA ATM01594', '550 Noyatola, Moghbazar', 'UNICOL', 'UNICOL', 'UL 3KVA', '2 hrs@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '130427130435156', 'DHK-NOYA-ATM-UPS001', '-', '-'),
(86, 'DHAKA', 'EBL MIRPUR 2 ATM01636', 'House No#04, Road No#09, Block - H, Mirpur-2, Dhaka-1216', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '26-09-12', 'Tech Valley Solutions Ltd', '111124-111034216', 'DHK-MIRPR2-ATM- UPS002', 'ok', '-'),
(87, 'DHAKA', 'Uttara DR site', 'Crescent Homes, 150/1 Shah Ali Bagh, Mirpur -1, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '26-09-12', 'Tech Valley Solutions Ltd', '111124-111034215', 'DHK-MIRPR1-ATM- UPS003', 'EBL MIRPUR 1 ATM has stopped and ternsfered the UPS', '-'),
(88, 'DHAKA', 'EBL DEPZ ATM01651', 'DEPZ Extension area, DEPZ, Savar, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '26-09-12', 'Tech Valley Solutions Ltd', '111124-111034166', 'DHK-DEPZ-BR-UPS001', 'need replace', '-'),
(89, 'DHAKA', 'EBL FAKIRAPOOL ATM01712', '118 DIT Extension Road, Fakirpool', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1308-9922441', 'DHK-FAKIR-ATM-UPS002', '-', '-'),
(90, 'DHAKA', 'EBL ROKEYA SHARANI ATM01720', '218 Begum Rokeya Soroni, Shere Bangla Nagar, Dhaka ', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1306-254169', 'DHK-ROKE-ATM-UPS001', '-', '-'),
(91, 'DHAKA', 'EBL JAMUNA FUTURE PARK ATM01721', 'Jamuna Future Park 5th Floor, Ka-244, Progati Sarani, Kuril, Baridhara, Dhaka-1229', 'PC Power', 'PC Power', '1 KVA (Std Offline)', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '521410', 'DHK-JAMUN-ATM-UPS001', '-', '-'),
(92, 'DHAKA', 'EBL WORLD BANK ATM01723', 'Plot E 32, Sher-e-Bangla Nagar, Agargaon, Dhaka, Bangladesh, Dhaka-1207', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '26-09-12', 'Tech Valley Solutions Ltd', '1235-22414', 'DHK-WRLDBNK-ATM001', '-', '-'),
(93, 'DHAKA', 'EBL LALBAGH ATM01724', '30/1 A Dhakeswary Road, Lalbagh Chowrasta, Dhaka, 1211', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '26-09-12', 'Tech Valley Solutions Ltd', '12120-552244', 'DHK-LALBAG-ATM-UPS001', '-', '-'),
(94, 'DHAKA', 'EBL Kazi Nazrul Islm. Ave ATM01725', 'Ali Bhaban, 92 Kazi Nazrul Islam Avenue, Kawran Bazar, Dhaka, 1215', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-05-14', 'Tech Valley Solutions Ltd', '1405-051141', 'DHK-KAWRAN-ATM-UPS002', '-', '-'),
(95, 'DHAKA', 'EBL PANCHOBOTI BR ATM01729', 'HOUSE NO. 101 & 102, PONCHOBOTI MOOR, FATULLAH , NARAYANGANJ, 1420', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-02-14', 'Tech Valley Solutions Ltd', '130805- 130895251', 'DHK-PONC-BR-UPS001', '-', '-'),
(96, 'DHAKA', 'EBL UTTARA SEC-14 Gausul Azam ATM01730', 'HOUSE # 83, GAUSUL AZAM AVENUE, UTTARA SECTOR-14, DHAKA, 1230', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-05-14', 'Tech Valley Solutions Ltd', '1303-1144558524', 'DHK-GAUS-ATM-UPS001', 'UPS & Battery out of order, 1 KVA std support', '-'),
(97, 'DHAKA', 'EBL KAZIPARA ATM01731', '57 ABM MANSON, KAZIPARA, MIRPUR, DHAKA, 1216', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-05-14', 'Tech Valley Solutions Ltd', '14023-65824', 'DHK-KAZI-ATM-UPS001', '-', '-'),
(98, 'DHAKA', 'EBL ORIENTAL LATIMI (32/2 MIRPUR RD ATM01732)', 'ORIENTAL LATIMI SHOPPING MALL, 32/2 MIRPUR ROAD, NEWMARKET, DHAKA, 1205', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '1305-654824', 'DHK-LATIMI-ATM-UPS001', '-', '-'),
(99, 'DHAKA', 'EBL Kemal Ataturk EBL 365', 'BORAK MEHNUR, 51/B, Kemal Ataturk Avenue, Banani, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '09-09-11', 'Tech Valley Solutions Ltd', '110520-110233213', 'DHK-UTTR-ATM-UPS02', 'Back From EBL Begum Bazar', '-'),
(100, 'DHAKA', 'EBL DHANMONDI 27(NEW) ATM01734', 'HOUSE # 405/C, ROAD # 27 (OLD) 16(NEW), DHANMONDI, DHAKA, 1209', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '15-06-12', 'Tech Valley Solutions Ltd', '130805-130895240', 'DHK-DHN27-ATM-UPS002', '-', '-'),
(101, 'DHAKA', 'EBL BoA- Collection', 'Olympic Bhaban, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '15-06-12', 'Tech Valley Solutions Ltd', '111124-111034246', 'DHK-BOA-COLLC-UPS001', 'ok', '-'),
(102, 'DHAKA', 'EBL Rupayan Taj, CAD Dept', '-', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1303-1144558525', 'DHK-RUPAYAN-CAD-UPS001', '-', '-'),
(103, 'DHAKA', 'EBL Tejgaon ATM', '-', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1303-1144558528', 'DHK-TEJ-ATM-UPS001', '-', '-'),
(104, 'DHAKA', 'EBL Gulshan Cards ', 'Sabera Tower', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '1303-1144558529', 'DHK-GUL-CARDS-UPS002', '-', '-'),
(105, 'DHAKA', 'EBL Gulshan Cards ', 'Sabera Tower', 'Kehua', 'KR 3000L', 'UL 3KVA', '15 min@Full load ', '22-10-17', 'Tech Valley Solutions Ltd', '50C110114931G6100055', '-', 'OLD 3KVA Unicol Replaced Old Date 06-Aug-2013', '-'),
(106, 'DHAKA', 'EBL Gulshan Cards ', 'Sabera Tower', 'APC', 'APC', 'UL 3KVA', '15 min@Full load ', '05-06-09', 'Tech Valley Solutions Ltd', '7145652574', 'DHK-CARDS-SERV-UPS001', '-', '-'),
(107, 'DHAKA', 'EBL Uttara Card Sales', 'Uttara DR site', 'Apollo', 'apollo', 'UL 1KVA', '15 min@Full load ', '21-06.2016', 'Tech Valley Solutions Ltd', '-', '-', '-', '-'),
(108, 'DHAKA', 'EBL IT', 'Head Office', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '101125-100866174', 'DHK-HO-IT-UPS001', '-', '-'),
(109, 'DHAKA', 'EBL IT', 'Head Office', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '110222-110029176', 'DHK-HO-IT-UPS002', '-', '-'),
(110, 'DHAKA', 'EBL IT', 'Head Office', 'APC', 'APC Smart 40 KAV', '40 KVA', '15 min@Full load ', '08-08-11', 'Tech Valley Solutions Ltd', 'PS1113140710', 'DHK-HO-IT-UPS002', '-', '-'),
(111, 'DHAKA', 'EBL IT', 'Head Office', 'APC', 'APC Smart 40 KAV', '40 KVA', '15 min@Full load ', '02-05-10', 'Tech Valley Solutions Ltd', 'PS0906141009', 'DHK-HO-IT-UPS001', '-', '-'),
(112, 'DHAKA', 'EBL IT', 'Head Office', 'SOCOMEC', 'Sicon', '20 KVA', '15 min@Full load ', '05-05-10', 'Tech Valley Solutions Ltd', 'P190889003R00000', 'DHK-HO-IT-UPS005', '-', '-'),
(113, 'DHAKA', 'EBL IT', 'Head Office', 'Rello', 'Rello', '20 KVA', '15 min@Full load ', '06-06-10', 'Tech Valley Solutions Ltd', 'MAT00611T612110005', 'DHK-HO-IT-UPS006', '-', '-'),
(114, 'DHAKA', 'EBL IT', 'Head Office 5th floor', 'Rello', 'Rello', '20 KVA', '15 min@Full load ', '06-06-10', 'Tech Valley Solutions Ltd', 'MAT00611T612110006', 'DHK-HO-IT-UPS007', '-', '-'),
(115, 'DHAKA', 'EBL IT', 'Uttara DR site', 'SOCOMEC', 'Sicon', '20 KVA', '15 min@Full load ', '05-08-10', 'Tech Valley Solutions Ltd', 'p161588002', 'DHK-HO-IT-UPS007', '-', '-'),
(116, 'DHAKA', 'EBL IT', 'Uttara DR site', 'UNICOL', 'UNICOL', '20 kva', '15 min@Full load ', '06-08-13', 'Tech Valley Solutions Ltd', '524254', 'DHK-HO-IT-UPS008', '-', '-'),
(117, 'DHAKA', 'EBL IT', 'Uttara DR site', 'Rello', 'Rello', '20 KVA', '15 min@Full load ', '08-09-10', 'Tech Valley Solutions Ltd', 'mat00531t546540007', 'DHK-HO-IT-UPS009', '-', '-'),
(118, 'DHAKA', 'EBL IT', 'Uttara DR site', 'Ablarex', 'Ablarex', 'UL 3KVA', '15 min@Full load ', '05-06-10', 'Tech Valley Solutions Ltd', 'MA9C4560007', 'DHK-HO-IT-UPS010', '-', '-'),
(119, 'DHAKA', 'EBL Kawranbazar 2nd ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '1303-1144558530', 'DHK-KAWRAN-ATM-UPS003', '-', '-'),
(120, 'DHAKA', 'EBL Gausul Azam ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '1303-1144558599', 'DHK-GAUSL-ATM-UPS001', '-', '-'),
(121, 'DHAKA', 'EBL Baridhara Block -J ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '140612-140539300', 'DHK-BARID-ATM-UPS001', '-', '-'),
(122, 'DHAKA', 'EBL Zakir Hossain Rd ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-02-14', 'Tech Valley Solutions Ltd', '1303-1144558566', 'DHK-ZAKIR-ATM-UPS001', '-', '-'),
(123, 'DHAKA', 'EBL Mohammadia Housing Society ATM (DHK)', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-04-14', 'Tech Valley Solutions Ltd', '131206-131201139', 'DHK-MDPHUS-ATM-UPS001', '-', '-'),
(124, 'DHAKA', 'EBL New EBL 365 at  Kakrail', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '1309-2145780', 'DHK-KAKR-ATM-UPS001', '-', '-'),
(125, 'CHITTAGONG', 'EBL Agrabad ATM ( HAMID)', 'Agrabad', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '110520-110299234', 'DHK-SURM-ATM-UPS002', 'EBL SURMA TOWER ATM has been stoped', '-'),
(126, 'DHAKA', 'EBL Gulshan Cards ', 'Sabera Tower', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-05-14', 'Tech Valley Solutions Ltd', '131206-131501126', 'DHK-CARDS-SERV-UPS003', '-', '-'),
(127, 'DHAKA', 'EBL Gulshan Uday Tower Corp', 'Uday tower (6th fl)', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '20-08-14', 'Tech Valley Solutions Ltd', '131206-131501184', 'DHK-CORP-UDAY-UPS002', '-', '-'),
(128, 'DHAKA', 'EBL Mirpur 10 2nd ATM365 ', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '15-09-14', 'Tech Valley Solutions Ltd', '140612-140539318', 'DHK-MIR-ATM-UPS002', 'Battery Replaced Nov-2018', '-'),
(129, 'DHAKA', 'Mugrapara Sonargaon Br', 'Bhuiyan Plaza, Habibpur, Mograpara, Sonargaon, Narayangonj. ', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '10-12-14', 'Tech Valley Solutions Ltd', '140418140328055', 'DHK-MUGSONR-UPS001', '-', '-'),
(130, 'CHITTAGONG', 'EBL PANCHLAISH BR ATM00067', '-', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '06-05-13', 'Tech Valley Solutions Ltd', '102145-5241141', 'CTG-PANCH-BR-UPS001', '-', '-'),
(131, 'CHITTAGONG', 'EBL AGRABAD BR ATM00125', '33 Agrabad C. A. Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-06-13', 'Tech Valley Solutions Ltd', '120202-111306197', 'CTG-AGR-BR-UPS001', '2012', '-'),
(132, 'CHITTAGONG', 'EBL JUBILEE ROAD BR ATM00133', 'Mannan Bhaban (Ground Floor), 156 Nur Ahmed Sarak, Jubilee Road, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-02-14', 'Tech Valley Solutions Ltd', '130427-130435162', 'CTG-JUBL-BR-UPS001', '-', '-'),
(133, 'CHITTAGONG', 'EBL STATION ROAD BR ATM00141', 'Asian S.R. Hotel, 291 Station Road, Chittagong', 'APC', 'APC', 'UL 3KVA', '15 min@Full load ', '05-06-09', 'Tech Valley Solutions Ltd', '21458', 'CTG-STAN-BR-UPS001', '-', '-'),
(134, 'CHITTAGONG', 'EBL CHANDGAON BR ATM00158', 'House # 16, Road # 1, Block # A, Chandgaon R.A., Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '05-06-09', 'Tech Valley Solutions Ltd', '8754236', 'CTG-CHANDG-BR-UPS001', '-', '-'),
(135, 'CHITTAGONG', 'EBL RAOZAN BR ATM00406', 'Shop # D-2, Bharetoshowry Market, Noapara Pathar Hat, Raozan, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-02-13', 'Tech Valley Solutions Ltd', '1304-251485', 'CTG-RAO-BR-UPS002', '2013', '-'),
(136, 'CHITTAGONG', 'EBL COX\'S BAZAR ATM00463', '10 Hotel Motel Zone, Kolatali Road, Cox?s Bazar', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '26-08-08', 'Tech Valley Solutions Ltd', '5472469', 'CTG-COX-ATM-UPS002', '-', '-'),
(137, 'CHITTAGONG', 'EBL COX\'S BAZAR BR  Server Room', '10 Hotel Motel Zone, Kolatali Road, Cox?s Bazar', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '26-08-08', 'Tech Valley Solutions Ltd', '524874595', 'CTG-COX-SVR-UPS001', '-', '-'),
(138, 'CHITTAGONG', 'EBL CHOUMUHANI BR ATM00638', 'Kiron Imperial, Holding # 1460 Karimpur Road, Choumohani, Noakhali', 'APC', 'APC', 'UL 3KVA', '15 min@Full load ', '05-06-09', 'Tech Valley Solutions Ltd', '9865412', 'CTG-CHOU-BR-UPS001', '-', '-'),
(139, 'CHITTAGONG', 'EBL SIRAJUDDOWLAH ATM00661', '94 Siraj-Ud-Doula Road, Dewan Bazaar, Chandanpura, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-02-13', 'Tech Valley Solutions Ltd', '121203-121300155', 'CTG-SIRAJ-BR-UPS001', '-', '-'),
(140, 'CHITTAGONG', 'EBL HALISHAHAR BR ATM00810', 'House # 01 (1st Floor), Road # 01 , Block # L, Halishahar Housing Estate, Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '26-08-08', 'Tech Valley Solutions Ltd', '21548523', 'CTH-HALIS-BR-UPS001', '-', '-'),
(141, 'CHITTAGONG', 'EBL O R NIZAM RD BR LOBBY ATM01016', 'Avenue Centre, 787 CDA Avenue, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-02-14', 'Tech Valley Solutions Ltd', '130427-130435181', 'SYL-ORNIZM-BR-UPS001', '-', '-'),
(142, 'CHITTAGONG', 'EBL KHATUNGONJ BR ATM01099', '173 Khatungonj Badsha Market, Chittagong', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '30-05-16', 'Tech Valley Solutions Ltd', '1246985', 'CTG-KHATUN-BR-UPS001', 'Pre: Socomec UPS; Ven: TVSL: pur: 26-08-2008', '-'),
(143, 'CHITTAGONG', 'EBL LOHAGORA BR ATM01107', 'M K Shopping Center (1st Floor), Bottali Main Road, Lohagora, Chittagong', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '05.11.2015', 'Tech Valley Solutions Ltd', '150611278550232', 'CTG-LOHA-UPS001', 'Pre: Socomec; Ven: Techvalley Pur: 26-08-2008', '-'),
(144, 'CHITTAGONG', 'EBL HATHAZARI BR ATM01115', 'Haji Sultan Market, Hathazari Bus Stand, Hathazari, Chittagong', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '30-05-16', 'Tech Valley Solutions Ltd', '8854263', 'CTG-HATHAZ-BR-UPS001', 'Pre: Socomec UPS; Ven: TVSL: pur: 26-08-2008', '-'),
(145, 'CHITTAGONG', 'EBL COMILLA BR ATM01156', 'Holding No. 195, Chowdhury Plaza, Jail Road, Jhawtola, Kotwali, Ward No. 10, Comilla', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '03-03-11', 'Tech Valley Solutions Ltd', '1112-11254887', 'CTG-COM-BR-UPS01', '-', '-'),
(146, 'CHITTAGONG', 'EBL CEPZ BR LOBBY ATM01222', 'Chittagong CEPZ, Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '25-10-08', 'Tech Valley Solutions Ltd', '3658874', 'CTG-CEPZ-BR-UPS002', '-', '-'),
(147, 'CHITTAGONG', 'EBL FENI ATM01396', '238 S S K Road, Feni, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '1112-5524145', 'CTG-FENI-ATM-UPS001', 'Sent a backup from Dhaka on 26 Jul 2018', '-'),
(148, 'CHITTAGONG', 'EBL NAZIRHAT BR ATM01529', 'Zaria Community Center, (Adjacent to Darbar Gate), Nazirhat, Fatikchari, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '120202-111306219', 'CTG-NAJIR-BR-UP001', '-', '-'),
(149, 'CHITTAGONG', 'EBL MEHEDIBAGH BR ATM01628', 'Epic Emdad Heights? 38 Chatteshawri Circle ( Gr. Floor), Mehdibagh, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '111124-111032436', 'CTG-MEHDI-BR-UP001', '-', '-'),
(150, 'CHITTAGONG', 'EBL OCEAN PARADISE LOBBY ATM01669', '28-29, Hotel Motel Zone, Kolatoli, Cox\'s Bazar', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '111201-2014510', 'CTG-OCEPRD-ATM-UPS001', '-', '-'),
(151, 'CHITTAGONG', 'EBL MAIJDEE BR ATM01685', 'Ali Plaza, Maijdee, Noakhali', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '12054-000555', 'CTG-MAIZ-BR-UPS001', '-', '-'),
(152, 'CHITTAGONG', 'EBL BHATIARY BR ATM01693', 'Sajeda Bhaban(GF, 1st & 2nd floor), beside H. Akbar Ali Road, Bhatiari, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '111124-111034190', 'CTG-BHAT-BR-UPS001', '-', '-'),
(153, 'CHITTAGONG', 'EBL AFMI PLAZA ATM00679', 'Afmi Plaza, G-39, 1 Baizid Bostami Road, Panchlaish, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18-05-12', 'Tech Valley Solutions Ltd', '3110300224', 'CTG-AFMI-ATM0UPS001', '-', '-'),
(154, 'CHITTAGONG', 'EBL Cox\'s Bazar SEAGULL LOBBY ATM00760', 'Plot # 6,7,8 Seagull Hotels Ltd., Motel Zone, Cox?s Bazar', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '12154-201412', 'CTG-COX-ATM-UPS003', '-', '-'),
(155, 'CHITTAGONG', 'EBL SANMAR OCEAN CITY ATM01081', 'Sanmar Ocean City, Shop I & II, Ground Floor, 997 CDA Avenue, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '110520-110299222', 'CTG-SNMR-ATM-UPS001', '-', '-'),
(156, 'CHITTAGONG', 'EBL KOTOWALI ATM01255', '5/6 Hossain Shahid Sorwaruddin Road, Kotowali, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '111124-111034252', 'CTG-KOTO-ATM-UPS005', '-', '-'),
(157, 'CHITTAGONG', 'EBL ISPAHANI LAL KHAN ATM00166', 'Ispahani Building, Lalkhan Bazar, Chittagong', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '120726-120781100', 'CTG-ISPAH-ATM-UPS001', '-', '-'),
(158, 'CHITTAGONG', 'EBL YUNUSCO ATM00174', 'Shop # 21 (Ground Floor), Yunusco City Center, 567 CDA Avenue, Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '25-10-08', 'Tech Valley Solutions Ltd', '8547452', 'CTG-YOUNS-ATM-UPS001', '-', '-'),
(159, 'CHITTAGONG', 'EBL JAMALKHAN ATM00513', 'Center Point Hospital, 100 Momin Road Jamal Khan, Chittagong', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '120726-120781087', 'CTG-JAMAL-ATM-UPS001', '-', '-'),
(160, 'CHITTAGONG', 'EBL CEPZ ATM00604', 'Bay Shopping Centre, Chittagong Export Processing Zone, Chittagong', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '27-03-13', 'Tech Valley Solutions Ltd', '120726-120781095', 'CTG-CEPZ-ATM-UPS001', '-', '-'),
(161, 'CHITTAGONG', 'EBL CTG. CHAWKBAZAR ATM00901', 'Moti Tower, 68 College Road, Chowkbazar C.A., Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-05-14', 'Tech Valley Solutions Ltd', '120726-120781108', 'CTG-CHWK-ATM-UPS001', '-', '-'),
(162, 'CHITTAGONG', 'EBL BAYEZID BOSTAMI RD ATM00919', '178 Baizid Bostami Road, Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '25-10-08', 'Tech Valley Solutions Ltd', '2145141025', 'CTG-BAYZEED-ABTM-UPS001', '-', '-'),
(163, 'CHITTAGONG', 'EBL MURADPUR ATM01388', 'Karims Icon, 73/74 Muradpur, Asian Highway, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '111124-111034221', 'CTG-MURAD-ATM-UPS001', '-', '-'),
(164, 'CHITTAGONG', 'EBL BONDOR GATE ATM01495', '185 Strand Road, Bondor, Hakim Mini Super Market, Chittagong', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '120202-111306198', 'CTH-BOND-ATM-UPS001', '-', '-'),
(165, 'CHITTAGONG', 'EBL JAMAL KHAN BR ATM01727', 'CPDL AM Majesta, 84 Jamal Khan, Chittagong -4000', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '1311-0058546', 'CTG-JAMAL-ATM-UPS002', '-', '-'),
(166, 'CHITTAGONG', 'EBL DOHAZARI BR ATM01728', 'Hazari Tower, First Floor, Dohazari, Chandanaish, Chittagong-4382', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '1305-1245254', 'CTG-DOHAZ-BR-UPS001', '-', '-'),
(167, 'CHITTAGONG', 'EBL KHULSI ATM01726', 'House No-1, Road No-1, Zakir Hossain Road, Khulshi, Chittagong- 4202', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-02-14', 'Tech Valley Solutions Ltd', '1406-135405', 'CTG-KHUL-ATM-UP001', '-', '-'),
(168, 'CHITTAGONG', 'EBL AGRABAD BR ATM00125', '33 Agrabad C. A. Chittagong', 'SOCOMEC', 'Modulys', 'UL 3KVA', '15 min@Full load ', '25-10-08', 'Tech Valley Solutions Ltd', '2142541', 'CTG-AGR-BR-UPS001', '-', '-'),
(169, 'CHITTAGONG', 'EBL Agrabad Suraiya Mansion', 'Suriya Mansion (ops & TSD)', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '20-02-14', 'Tech Valley Solutions Ltd', '130805-130895042', 'CTG-AGR-SURI-UPS002', '-', '-'),
(170, 'CHITTAGONG', 'EBL IT', 'Agrabad', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '101125-100866186', 'CTG-IT-SUP-UPS001', '-', '-'),
(171, 'CHITTAGONG', 'EBL IT', 'Agrabad', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '110222-110029204', 'CTG-IT-SUP-UPS002', '-', '-'),
(172, 'CHITTAGONG', 'EBL IT', 'Agrabad', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '110222-110029183', 'CTG-IT-SUP-UPS003', '-', '-'),
(173, 'CHITTAGONG', 'New EBL 365 at Sheikh Mijib Rd (Ctg)', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '28-03-14', 'Tech Valley Solutions Ltd', ' 130427-130435160', 'CTG-SHEKM-ATM-UPS001', '-', '-'),
(174, 'CHITTAGONG', 'New EBL 365 at Pahartoli (Ctg)', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '28-03-14', 'Tech Valley Solutions Ltd', '130427-130435164', 'CTG-PAHAR-ATM-UPS001', '-', '-'),
(175, 'KHULNA', 'EBL KHULNA BR ATM00092', 'Taymun Centre & Properties, 181 Khan-A-Sabur Road, Shibbari More, Khulna', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '03-09-13', 'Tech Valley Solutions Ltd', '1303-2514585', 'KHL-BR-UPS001', '-', '-'),
(176, 'KHULNA', 'EBL KHULNA SONADANGA ATM00273', 'A-19 Mojid Soroni, Sonadanga, Khulna', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '12052-220141', 'KHL-SONADNG-ATM-UPS02', '-', '-'),
(177, 'KHULNA', 'EBL JESSORE BR ATM00521', '26 R N Road, Jessore', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '11.11.2015', 'Tech Valley Solutions Ltd', 'E150611278559869', 'KHL-JESS-ATM-UPS002', '-', '-'),
(178, 'KHULNA', 'EBL KHULNA ROYAL ATM00653', '32/1 KDA Avenue Royal Chottor, Khulna', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '13-08-14', 'Tech Valley Solutions Ltd', '131612140539319', 'KHL-ROYEL-ATM-UPS03', '-', '-'),
(179, 'KHULNA', 'EBL Fulbari Branch', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-07-14', 'Tech Valley Solutions Ltd', '140418-140328053', 'KHL-FUL-BR-UPS003', '-', '-'),
(180, 'KHULNA', 'EBL Barisal br', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-07-14', 'Tech Valley Solutions Ltd', '140418-140328083', 'KHL-BARI-BR-UPS001', '-', '-'),
(181, 'KHULNA', 'EBL Jessore ATM 365', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '15-09-14', 'Tech Valley Solutions Ltd', '140612-140539317', 'KHL-JESS-ATM-UPS002', '-', '-'),
(182, 'RAJSHAHI', 'EBL RAJSHAHAI BR ATM00299 (Br, server)', 'Doinik Barta Complex (Ground Floor), Alupotti, Natore Road, Rajshahi-6000', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-08-14', 'Tech Valley Solutions Ltd', '140418-140328022', 'RAJ-BR-UPS001', 'replaced Socomec-3kva(std)-2008-TVSL', '-'),
(183, 'RAJSHAHI', 'EBL RAJSHAHI ATM00984', '13 Lakshmipur More, GPO 6000, Rajpara, Rajshahi', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-10-14', 'Tech Valley Solutions Ltd', '1409-2014144', 'RAJ-RAJPARA-ATM-UPS02', 'replaced Socomec-3kva(std)-2008-TVSL', '-'),
(184, 'RAJSHAHI', 'EBL Bogra Br', '-', 'Ideal', 'Ideal', '1 KVA (Std Offline)', '15 min@Full load ', '20-10-14', 'Tech Valley Solutions Ltd', '6584721', 'RAJ-BOG-ATM-UPS001', '-', '-'),
(185, 'RAJSHAHI', 'EBL BOGRA ATM01503', 'Bhandari Market, Barogola, Bogra', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '12054-05548', 'RAJ-BOG-ATM-UPS002', '-', '-'),
(186, 'RAJSHAHI', 'EBL FARIDPUR BR ATM01057', '7/216 Golpukur Shopping Complex, Alipur, Faridpur', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '15-09-14', 'Tech Valley Solutions Ltd', '140612-140539316', 'RAJ-FAR-ATM-UPS002', 'replaced Socomec-3kva-2008-TVSL', '-'),
(187, 'RANGPUR', 'EBL RANGPUR BR ATM01313', '11 Jail Road, Dhap, Ward No. 01, Kotwali, Rangpur City Corporation, Rangpur', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '1112-11445841', 'RAJ-RANG-BR-UPS001', '-', '-'),
(188, 'RANGPUR', 'EBL RANGPUR ATM01438', 'House # 17, Cantt Road ( Infront of Circuit House), Dhap, Rangpur', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '1206-254887', 'RAJ-RANG-ATM-UPS002', '-', '-'),
(189, 'SYLHET', 'EBL BHIRAB SME BR ATM00802', 'Holding # 0161-00, Bhairab Bazar, Kishorgonj, Bhairab', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-05-14', 'Tech Valley Solutions Ltd', ' 131206-131501165', 'SYL-BHAIRB-BR-UPS001', 'replaced Socomec-3kva-2008-TVSL', '-'),
(190, 'SYLHET', 'EBL SYLHET UPASAHAR Br ', 'Upashahar Gas Bhaban, Mehdi Bagh, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '28-03-14', 'Tech Valley Solutions Ltd', ' 130427-130435126', 'SYL-UPA-BR-UPS001', '-', '-'),
(191, 'SYLHET', 'EBL SYLHET CHOUHATTA BR ', 'Firoz Centre, 891/KA,Chouhatta, Sylhet', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '05-06-09', 'Tech Valley Solutions Ltd', '150611278550279', 'SYL-CHOU-BR-UPS001', 'Pre: APC; Ven: Flora; Pur:05-06-2009 ', '-'),
(192, 'SYLHET', 'EBL SYLHET CHOUHATTA ATM', 'Firoz Centre, 891/KA,Chouhatta, Sylhet', 'Sendon ', 'Sendon ', '1 KVA (Std Offline)', '15 min@Full load ', '02-05-03', 'Tech Valley Solutions Ltd', '200210734', 'SYL-CHOU-BR-UPS002', 'New UPS, UNICOL 3KVA Long, Oct-2018', '-'),
(193, 'SYLHET', 'EBL MOULOVI BAZAR BR ATM00570', '26 Sylhet Trunk Road (1st Floor), Moulvoi Bazar, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20-08-14', 'Tech Valley Solutions Ltd', '140418-140328084', 'SYL-MOUL-BR-UPS002', '-', '-'),
(194, 'SYLHET', 'EBL BISHWANATH BR ATM01040', 'Khurshid Ali Shopping Complex, Notun Bazar, Bishwanath, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '13005-254788', 'SYL-BISW-ABR-UPS001', '-', '-'),
(195, 'SYLHET', 'EBL B.BARIA BR ATM01602', '106 TA Road, 1st Floor, B. Baria, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25-08-12', 'Tech Valley Solutions Ltd', '13052-554841', 'SYL-BBARIA-BR-UPS01', '-', '-'),
(196, 'SYLHET', 'EBL SHUBID BAZAR ATM00497', 'Sunarganj Road (In front of Pallabi Community Centre), Subid Bazar, Shylet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '13025-854256', 'SYL-SUBID-ATM-UPS001', '-', '-'),
(197, 'SYLHET', 'EBL SYLHET UPASAHAR ATM00281', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '06-06-13', 'Tech Valley Solutions Ltd', ' 130427-1304354214', 'SYL-UPA-BR-UPS002', '-', '-'),
(198, 'SYLHET', 'EBL ZINDA BAZAR ATM00505', 'Blue Water Shopping City, Joler Par Road, Zindabazar, Shylet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '28-03-14', 'Tech Valley Solutions Ltd', ' 131206-131501166', 'SYL-ZIND-ATM-UPS001', '-', '-'),
(199, 'SYLHET', 'EBL SYLHET DARGAH GATE ATM01172', 'Dargah Gate, Shylet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-02-13', 'Tech Valley Solutions Ltd', '130254-2457471', 'SYL-DARGA-ATM-UPS001', '-', '-'),
(200, 'SYLHET', 'EBL SYLHET CHOUHATTA BR  LOBBY ATM', 'Firoz Centre, 891/KA,Chouhatta, Sylhet', 'UNICOL', 'UNICOL', 'UL 1KVA', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '1209-2101254', 'SYL-CHOU-BR-UPS002', '-', '-'),
(201, 'SYLHET', 'EBL Upashahar ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '1309-2014585', 'SYL-UPA-ATM-UPS002', '-', '-'),
(202, 'SYLHET', 'EBL IT', 'chouhatta, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA (std)', '15 min@Full load ', '05-12-13', 'Tech Valley Solutions Ltd', '12154-201428', 'SYL-IT-UPS003', '-', '-'),
(203, 'SYLHET', 'EBL Tilagar Point ATM (Syl)', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-04-14', 'Tech Valley Solutions Ltd', '131206-131501133', 'SYL-TILA-ATM-UPS001', '-', '-'),
(204, 'SYLHET', 'EBL MADHABDI BR ATM01149', '242/1 Algi Road, Madhabdi Bazar, Madhabdi', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '02-02-11', 'Tech Valley Solutions Ltd', '110520-110299251', 'DHK-MADH-BR-UPS001', 'ok', '-'),
(205, 'SYLHET', 'Fenchuganj Br', 'Tuta Miah Mansion (1st Floor), Fenchuganj Bazar, Fenchuganj, Sylhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '09-12-14', 'Tech Valley Solutions Ltd', '140418140328050', 'SYL-FENCH-BR-UPS001', '-', '-');
INSERT INTO `online-ups-list` (`SL`, `Division`, `Location`, `Address`, `Brand`, `Model`, `Capacity`, `Backup_Time`, `Purchase_Year`, `Vendor_Name`, `UPS_Serial_No`, `Asset_Tag`, `Remarks`, `Comments`) VALUES
(206, 'DHAKA', 'North Gulshan Br', 'Kalpana House, 169 GulshanAvenue, Gulshan-02, Dhaka', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '09-12-14', 'Tech Valley Solutions Ltd', '140418140328055', 'DHK-NRTGUL-BR-UPS001', '-', '-'),
(207, 'DHAKA', 'Narayanganj SME', '-', 'SOCOMEC', 'UL 3KVA', 'UL 3KVA', '15 min@Full load ', '25-10-08', 'Tech Valley Solutions Ltd', '-', '-', 'Apollo 2300HS-L as Support on 8-July-2019, SL# 3EAM150905800840024', '-'),
(208, 'CHITTAGONG', 'Alonkar Moor ATM', 'Shop #04, Alonkar Shopping Complex, Alonkar Moor, Pahartoli, Chittagong', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '02.06.2015', 'Orient Computers', '3EAM140408498230004', 'CTG-ALONKER-ATM-UOS01', '-', '-'),
(209, 'DHAKA', 'Cantonment super market ATM (Kachukhet ATM)', 'Rajonigondha Super Market, Kochukhet', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25.01.2015', 'Unicol Bangladesh', '140 418- 140 328 027', 'DHK-CANT-ATM-UPS01', '-', '-'),
(210, 'DHAKA', 'Cantonment post office ATM', 'Dhaka Cantonment post office, Kurmitola Golf Area', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25.01.2015', 'Unicol Bangladesh', '140 904 00 23', 'DHK-CANT2-ATM-UPS01', '-', '-'),
(211, 'DHAKA', 'Banani Rd 11 ATM', 'Banani, Road- 11', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25.01.2015', 'Unicol Bangladesh', '140 418-140 328 037', 'DHK-BANANI-ATM-UPS01', '-', '-'),
(212, 'KHULNA', 'Barisal ATM', '42/44 Sador Road, Barisal', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25.01.2015', 'Unicol Bangladesh', '140418-140 328 058', 'KHL-BARI-ATM-UPS001', '-', '-'),
(213, 'CHITTAGONG', 'Khulsi ATM', '-', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '25.01.2015', 'Unicol Bangladesh', '-', '-', '-', '-'),
(214, 'DHAKA', 'Gulshan Lila Tower ATM', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '22.06.2015', 'Orient Computers', '140408498230008', 'DHK-GUL-LILA-ATM-UPS001', '-', '-'),
(215, 'KHULNA', 'EBL KHULNA SONADANGA ATM00273', 'A-19 Mojid Soroni, Sonadanga, Khulna', 'Apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '1050202514050026', 'KHL-SONADNG-ATM-UPS03', '-', '-'),
(216, 'DHAKA', 'Niloy-Nitol GP house', 'Khilkhet', 'Apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '150202514050038', 'DHK-GPHOUSE-NILOY-UPS01', '-', '-'),
(217, 'DHAKA', 'EBL Board Bazar Br', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '150202514050039', 'DHK-BOARDBAZAR-UPS003', '-', '-'),
(218, 'CHITTAGONG', 'CEPZ Offsite ATM', 'CTG', 'apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '31.10.2015', 'Orient Computers', '3EAL150611278550271', 'CTG-CEPZ-ATM-UPS001', '-', '-'),
(219, 'CHITTAGONG', 'CTG Newmarket ', 'CTG', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '31.10.2015', 'Orient Computers', '3EAL150611278550156', 'CTG-NEWMARKET-BR-UPS002', '-', '-'),
(220, 'DHAKA', 'Khulna Br ATM', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '-', '-', '-', '-'),
(221, 'DHAKA', 'HO, IT', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '150611278350033', 'DHK-IT-UPS 15', '-', '-'),
(222, 'DHAKA', 'HO, IT', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '150611278350066', 'DHK-IT-UPS 16', '-', '-'),
(223, 'CHITTAGONG', 'CTG Pahartoli GP House', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '-', '-', '-', '-'),
(224, 'DHAKA', 'GP House at IT Dept', '-', 'apollo', '2300HS-L', 'UL 3KVA (std)', '15 min@Full load ', '26.07.2015', 'Orient Computers', '-', '-', '-', '-'),
(225, 'DHAKA', 'EBL Khilgaon Br', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.11.2015', 'Orient Computers', '150611278550236', 'DHK-KHILG-ATM-UPS001', '-', '-'),
(226, 'DHAKA', 'EBL Vulta br', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.12.2015', 'Orient Computers', '150611278550235', 'DHK-VULTA-BR-UPS001', '-', '-'),
(227, 'DHAKA', 'EBL Mowna Br', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.12.2015', 'Orient Computers', '150611278550172', 'DHK-MAOWNA-BR-UPS001', '-', '-'),
(228, 'DHAKA', 'EBL Gulshan Laila Tower ATM', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.12.2015', 'Orient Computers', '150611225142856', 'DHK-LAILA-ATM-UPS001', '-', '-'),
(229, 'DHAKA', 'Khilgaon br', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '31.12.2015', 'Orient Computers', '3EAL150611278550236', 'DHK-KHIL_BR-UPS001', '-', '-'),
(230, 'DHAKA', 'EBL Vulta ATM', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '31.12.2015', 'Orient Computers', '3EAL150611278550268', 'DHK-VULTA-ATM-UPS001', '-', '-'),
(231, 'CHITTAGONG', 'EBL Muradpur Br', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '31.12.2015', 'Orient Computers', '3EAL150611278550296', 'CTG-MURADPUR-BR-UPS001', '-', '-'),
(232, 'DHAKA', 'Uttara Cards Sales', '-', 'UNICOL', 'UL 1KVA', 'UL 1KVA', '15 min@Full load ', '01.08.2016', 'Unicol Bangladesh', '11511180157', 'DHK-UTTRSALES-UPS001', '-', '-'),
(233, 'CHITTAGONG', 'Cox\'s Bazar 2nd ATM', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09.06.2016', 'Orient Computers', '3CA1150611278550105', 'CTG-COX-ATM-UPS001', '-', '-'),
(234, 'DHAKA', 'Shyamoli 2nd ATM, ', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '11278550113, ', 'DHK- SHAMOLY2-ATM-UPS001', '-', '-'),
(235, 'DHAKA', 'Shahajadpur 2nd ATM, ', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '11278550034,  ', 'DHK-SHAHJADPUR2-ATM-UPS001', '-', '-'),
(236, 'DHAKA', 'Bashundhara Bl-C ATM, ', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '11278550127, ', 'DHK-BASHUNDHARAC-ATM-UPS001', '-', '-'),
(237, 'DHAKA', 'Mohakhali ATM', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '4800830065', 'DHK-MOHAKHALI-ATM-UPS001', '-', '-'),
(238, 'DHAKA', 'EBL Gulshan Br, ', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '4800830043, ', 'DHK-GUL BR-ATM-UPS002', 'Dismantle and relocated to Mawna ATM', '-'),
(239, 'RAJSHAHI', 'Rajshahi ATM, ', '-', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '4800830073,', 'RAJ-BR-UPS002', '-', '-'),
(240, 'SYLHET', 'Subid Bazar', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '4800830089', 'SYL-SUBID-ATM-UPS002', '-', '-'),
(241, 'CHITTAGONG', 'Bayjid Bostami ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '11278550161', 'CTG-BAIJID-ATM-UPS002', '-', '-'),
(242, 'DHAKA', 'Khilgaon br, ', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '03.02.2016', 'Orient Computers', '11278550236, ', 'DHK-KHILGAON-BR-UPS002', '-', '-'),
(243, 'DHAKA', 'New mawna Br, ', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '03.02.2016', 'Orient Computers', '11278550172, ', 'DHK-MAWNA-BR-UPS001', '-', '-'),
(244, 'DHAKA', 'New Bhulta Br', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '03.02.2016', 'Orient Computers', '1127850235', 'DHK-BHULTA-BR-UPS001', '-', '-'),
(245, 'CHITTAGONG', 'Muradpur', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '15.05.2016', 'Orient Computers', '3EAL150611278550296', 'CTG-MURAD-BR-UPS001', '-', '-'),
(246, 'DHAKA', 'ZN Tower(5th FL)', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '01.11.2016', 'Orient Computers', '2853900226', 'DHK-UPS-ZN5FL-UPS001', '-', '-'),
(247, 'DHAKA', 'Tajmahal ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '-', '-', '-', '-'),
(248, 'DHAKA', 'Dhk Cant ECB ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '-', '-', '-', '-'),
(249, 'CHITTAGONG', 'CTG Finlay Square ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '-', '-', '-', '-'),
(250, 'CHITTAGONG', 'KEPZ ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '30028', '-', '-', '-'),
(251, 'CHITTAGONG', 'CTG Airport ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '-', '-', '-', '-'),
(252, 'CHITTAGONG', 'Chandgaon ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '-', 'Orient Computers', '-', '-', '-', '-'),
(253, 'DHAKA', 'New Ashulia Br', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '14.12.2016', 'Orient Computers', '-', 'DHK-UPS-ASHULIA-UPS001', '-', '-'),
(254, 'DHAKA', 'Gulshan Avenue Br', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09.04.2017', 'Orient Computers', '-', '-', '-', '-'),
(255, 'DHAKA', 'Ashulia Daffodil University ATM Dropbox', 'Ashulia Daffodil University ATM Dropbox', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09-03-17', 'Orient Computers', '3EAM150905800840024', '-', 'Updated 02-Apr-2018', '-'),
(256, 'DHAKA', 'North Gulshan ATM', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09.04.2017', 'Orient Computers', '-', '-', '-', '-'),
(257, 'SYLHET', 'Panchalish Br', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09.04.2017', 'Orient Computers', '-', '-', '-', '-'),
(258, 'CHITTAGONG', 'Halishahar Br', '', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '09.04.2017', 'Orient Computers', '-', '-', '-', '-'),
(259, 'CHITTAGONG', 'IT CTG', '', 'Kehua', 'KR 3000L', 'UL 3KVA', '15 min@Full load ', '13-06-17', 'Express Systems Ltd', '-', '-', '-', '-'),
(260, 'CHITTAGONG', 'IT CTG', '', 'Kehua', 'KR 3000L', 'UL 3KVA', '15 min@Full load ', '13-06-17', 'Express Systems Ltd', '50C110119076HC100028', '-', '-', '-'),
(261, 'SYLHET', 'IT Sylhet', '', 'Kehua', 'KR 3000L', 'UL 3KVA', '15 min@Full load ', '13-06-17', 'Express Systems Ltd', '-', '-', '-', '-'),
(262, 'DHAKA', 'EBL Begum Rokea Sarani', '', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '26.10.2017', 'Unicol Bangladesh', '-', '-', '-', '-'),
(263, 'DHAKA', 'Mirpur Senpara Parbata ATM 365', '', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '20.09.2017', 'Unicol Bangladesh', '-', '-', '-', '-'),
(264, 'CHITTAGONG', 'CDM Machine', '', 'Power Tree', 'Power Tree', 'UL 1KVA', '15 min@Full load ', '29.10.2017', 'Techno XpressBD', '-', '-', '-', '-'),
(265, 'DHAKA', 'EBL Begum Rokea Sarani', '', 'Power Tree', 'Power Tree', 'UL 1KVA', '15 min@Full load ', '16.11.2017', 'Techno XpressBD', 'E606032289', '-', '-', '-'),
(266, 'DHAKA', 'EBL Board Bazar Br', '', 'Power Tree', 'Power Tree', 'UL 1KVA', '15 min@Full load ', '16.11.2017', 'Techno XpressBD', 'E1606032445', '-', '-', '-'),
(267, 'DHAKA', 'CDM at Stamford University', 'Stamford University Bangladesh, 51 Siddeswari Road, Dhaka-1217', 'Ideal', 'Ideal', 'UL 1KVA', '15 min@Full load ', '-', 'SMS Systems', '-', '-', 'New CDM, UPS from Support Stock', '-'),
(268, 'DHAKA', 'EBL Mawna GS ATM booth ', 'Green Smart Shirt, Tepirbari, Teli Hati Union, Sreepur- Mawna, Gazipur', 'Apollo', '2300HS-L', 'UL 3KVA', '15 min@Full load ', '24.07.2016', 'Orient Computers', '4800830043, ', 'DHK-GUL BR-ATM-UPS002', 'Dismantle from Gulshan br. Richmond tower', '-'),
(269, 'DHAKA', 'Mouchak Br', '', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '22.03.2018', 'Unicol Bangladesh', '-', '-', '-', '-'),
(270, 'DHAKA', 'Mymensingh GP House', '', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '18.03.2018', 'Unicol Bangladesh', '-', '-', '-', '-'),
(271, 'DHAKA', 'Moghbazar Br', '', 'UNICOL', 'UNICOL', 'UL 3KVA', '15 min@Full load ', '27.05.2018', 'Unicol Bangladesh', '-', '-', '-', '-'),
(272, 'DHAKA', 'Ministry of Foreign Affairs Shegunbagicha ATM', 'Shegunbagicha ', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '20-12-18', 'Express Systems Ltd', '50C110119076HC100008', '-', '-', '-'),
(273, 'DHAKA', 'Ministry of Foreign Affairs Shegunbagicha CDM', 'Shegunbagicha ', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '20-12-18', 'Express Systems Ltd', '50C110119076HC100055', '-', '-', '-'),
(274, 'DHAKA', 'Kurmitula Golf Club ATM', 'Kurmitola Golf Area, Dhaka', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '19-02-19', 'Express Systems Ltd', '-', '-', '-', '-'),
(275, 'DHAKA', 'ICT Ministry ATM', 'Agargaon', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '25-03-19', 'Express Systems Ltd', '-', '-', '-', '-'),
(276, 'DHAKA', 'ICT Ministry CDM', 'Agargaon', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '25-03-19', 'Express Systems Ltd', '-', '-', '-', '-'),
(277, 'DHAKA', 'Support UPS - 3KVA Short', 'IT', 'TESCOM', 'UL 3KVA', 'UL 3KVA', '15 min@Full load ', '01-07-19', 'Express Systems Ltd', '900031811060734', '-', '-', '-'),
(278, 'DHAKA', 'Support UPS - 3KVA Short', 'IT', 'TESCOM', 'UL 3KVA', 'UL 3KVA', '15 min@Full load ', '01-07-19', 'Express Systems Ltd', '900031811060733', '-', '-', '-'),
(279, 'DHAKA', 'Level 14, Meeting Room, 100 Gulshan', 'Level 14, Meeting Room, 100 Gulshan', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '03-06-18', 'Express Systems Ltd', '500110119076HC100037', '-', 'Mohanada 2', '-'),
(280, 'DHAKA', 'Level 14, Meeting Room, 100 Gulshan', 'Level 14, Meeting Room, 100 Gulshan', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '03-06-18', 'Express Systems Ltd', '50C110119076HC100001', '-', 'Mohanada 1', '-'),
(281, 'DHAKA', 'Level 5, Meeting Room, 100 Gulshan', 'Level 5, Meeting Room, 100 Gulshan', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '03-06-18', 'Express Systems Ltd', '50C110119076HC100004', '-', 'Level 5', '-'),
(282, 'DHAKA', 'Level 10, Meeting Room, 100 Gulshan', 'Level 10, Meeting Room, 100 Gulshan', 'Kehua', 'KR-3000', '3KVA', '15 min@Full load ', '03-06-18', 'Express Systems Ltd', '50C110119076HC100005', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

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
(1, 'admin', 'naimcm@gmail.com', 'admin', '$2y$10$FQrNHyA1cbDGwjFQzXV0zemvi047lRTeUGwLcNL7TTRtzR0FikQse', NULL, 0, '2020-08-02 07:14:59'),
(2, 'Khandaker Hossaioncd', 'naimcmdcd@gmail.com', 'admindc', '$2y$10$x1seDjLiSfJe.3ZYK.tax.ZWqmdDm94mPnv.IteTG.Qhe.Uj/Vk.W', NULL, 0, '2020-09-15 18:51:34');

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
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD UNIQUE KEY `Incident` (`Incident`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

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
  MODIFY `Sl` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
