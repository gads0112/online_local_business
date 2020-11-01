-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2018 at 06:57 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gads`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail8`
--

DROP TABLE IF EXISTS `bill_detail8`;
CREATE TABLE IF NOT EXISTS `bill_detail8` (
  `pur_date` date DEFAULT NULL,
  `pur_gstin` varchar(15) DEFAULT NULL,
  `pur_inv` int(11) NOT NULL,
  `pur_name` char(30) DEFAULT NULL,
  `pur_addre` varchar(50) DEFAULT NULL,
  `pur_state` char(25) DEFAULT NULL,
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pur_inv`),
  KEY `item_num` (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_detail8`
--

INSERT INTO `bill_detail8` (`pur_date`, `pur_gstin`, `pur_inv`, `pur_name`, `pur_addre`, `pur_state`, `item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
('2018-04-07', '10APZPS3585G1ZH', 1, 'Sakti', 'Near Devi Mandir', 'BIHAR', 1002, 'sad', 101, 'Screenshot (11).png', 10, 5, 990, 248, 248, 0, 9900),
('2018-04-04', 'xzxzx02', 3, 'jabda', 'ashsvahgs', 'bihar', 1001, 'saas', 101, 'Screenshot (10).png', 50, 5, 50, 63, 63, 0, 2500),
('2018-04-05', 'sdsd', 8, 'xzhhz', 'bhsd', 'bihar', 1001, 'hdhsdvh', 101, 'Screenshot (10).png', 50, 12, 50, 150, 150, 0, 2500),
('2018-04-03', '10APZPS3585G1ZH', 9, 'Sakti', 'Near Devi Mandir', 'Bihar', 1011, 'Mobiles', 102, 'Screenshot (10).png', 50, 18, 9500, 42750, 42750, 0, 475000);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail9`
--

DROP TABLE IF EXISTS `bill_detail9`;
CREATE TABLE IF NOT EXISTS `bill_detail9` (
  `pur_date` date DEFAULT NULL,
  `pur_gstin` varchar(15) DEFAULT NULL,
  `pur_inv` int(11) NOT NULL,
  `pur_name` char(30) DEFAULT NULL,
  `pur_addre` varchar(50) DEFAULT NULL,
  `pur_state` char(25) DEFAULT NULL,
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pur_inv`),
  KEY `item_num` (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_detail9`
--

INSERT INTO `bill_detail9` (`pur_date`, `pur_gstin`, `pur_inv`, `pur_name`, `pur_addre`, `pur_state`, `item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
('2018-04-05', '10APZPS3585G1ZE', 898, 'sunny', 'martur', 'Andhra Pradesh', 1997, 'WAI WAI MAGGI', 102, 'Database schema.PNG', 200, 0, 10, 0, 0, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail10`
--

DROP TABLE IF EXISTS `bill_detail10`;
CREATE TABLE IF NOT EXISTS `bill_detail10` (
  `pur_date` date DEFAULT NULL,
  `pur_gstin` varchar(15) DEFAULT NULL,
  `pur_inv` int(11) NOT NULL,
  `pur_name` char(30) DEFAULT NULL,
  `pur_addre` varchar(50) DEFAULT NULL,
  `pur_state` char(25) DEFAULT NULL,
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`pur_inv`),
  KEY `item_num` (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_detail10`
--

INSERT INTO `bill_detail10` (`pur_date`, `pur_gstin`, `pur_inv`, `pur_name`, `pur_addre`, `pur_state`, `item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
('2018-04-08', '10APZPS3585G1ZS', 123, 'ANKUR', 'Ranipur', 'Bihar', 1998, 'Cake', 102, 'Database schema.PNG', 25, 5, 25, 16, 16, 0, 625),
('2018-04-13', '', 889, 'Astha', 'Sadad', 'Andhra Pradesh', 1998, 'soap', 108, 'Database schema.PNG', 50, 5, 50, 63, 63, 0, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `category_detail`
--

DROP TABLE IF EXISTS `category_detail`;
CREATE TABLE IF NOT EXISTS `category_detail` (
  `categ_id` int(11) NOT NULL,
  `categ_name` char(25) NOT NULL,
  PRIMARY KEY (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_detail`
--

INSERT INTO `category_detail` (`categ_id`, `categ_name`) VALUES
(101, 'Groming Products'),
(102, 'Snacks'),
(103, 'Beauty Products'),
(104, 'Cleaners'),
(105, 'Paper Goods'),
(106, 'Dry/Baking Goods'),
(107, 'Dairy'),
(108, 'Personal Care');

-- --------------------------------------------------------

--
-- Table structure for table `category_detail10`
--

DROP TABLE IF EXISTS `category_detail10`;
CREATE TABLE IF NOT EXISTS `category_detail10` (
  `categ_id` int(11) NOT NULL,
  `categ_name` char(25) NOT NULL,
  PRIMARY KEY (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'Ankur', 'ankurnandankumar@gmail.com', '7814706601', '0ee8aafca942bdd9dd39c3caca67aa61'),
(2, 'sudha', 'sud@gmail.com', '8654327897', 'c7222dfeadbeb787ba88dde577f88206'),
(3, 'mohit', 'mohit@gmail.com', '8677999865', 'cf3b27ef58e8421ad18556857077d39f'),
(4, 'pandu', 'db@gmail.com', '9876778999', 'b4ed37c8e9bcc48b3e9b86ed9a7a997d'),
(5, 'sunny', 'chpvsaikumar@gmail.com', '8699957324', 'bf709005906087dc1256bb4449d8774d'),
(6, 'raj', 'rajram@gmail.com', '7564329876', '0223af7ad7fb3306b85427e92de59bfd');

-- --------------------------------------------------------

--
-- Table structure for table `item_detail8`
--

DROP TABLE IF EXISTS `item_detail8`;
CREATE TABLE IF NOT EXISTS `item_detail8` (
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail8`
--

INSERT INTO `item_detail8` (`item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
(101, 'adwsd', 101, '', 5, 0, 500, 0, 0, 0, 2500),
(168, 'sdsd', 101, '', 5, 0, 2200, 0, 0, 0, 11000),
(1000, 'nsfjsf', 101, '', 500, 0, 500, 0, 0, 0, 250000),
(1001, 'Cinthol', 108, '', 150, 5, 60, 225, 225, 0, 9000),
(1002, 'Trimmer', 101, '', 30, 12, 990, 743, 743, 743, 29700),
(1003, 'Kurkure', 102, '', 10000, 5, 70, 17500, 17500, 0, 700000),
(1004, 'Paper Towels', 104, '', 500, 0, 20, 0, 0, 0, 10000),
(1006, 'Glod Milk', 107, '', 100, 5, 25, 63, 63, 0, 2500),
(1007, 'Aluminum Foil', 105, '', 50, 5, 55, 69, 69, 0, 2750),
(1008, 'Asshrivada Ata', 106, '', 50, 5, 125, 156, 156, 0, 6250),
(1009, 'Sandwich', 102, 'party.jpg', 550, 5, 500, 50, 50, 50, 50000),
(1011, 'Mobiles', 102, 'Screenshot (10).png', 50, 18, 9500, 42750, 42750, 0, 475000),
(1068, 'sdsd', 101, 'Screenshot (10).png', 1059, 0, 100, 0, 0, 0, 105900),
(10569, 'sdf', 101, '', 500, 5, 451, 5638, 5638, 0, 225500),
(20220, 'adwsd', 101, 'S', 50000, 18, 5064, 22788000, 22788000, 0, 253200000);

-- --------------------------------------------------------

--
-- Table structure for table `item_detail9`
--

DROP TABLE IF EXISTS `item_detail9`;
CREATE TABLE IF NOT EXISTS `item_detail9` (
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail9`
--

INSERT INTO `item_detail9` (`item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
(1997, 'WAI WAI MAGGI', 102, 'Database schema.PNG', 200, 0, 10, 0, 0, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `item_detail10`
--

DROP TABLE IF EXISTS `item_detail10`;
CREATE TABLE IF NOT EXISTS `item_detail10` (
  `item_num` int(11) NOT NULL,
  `item_name` char(25) DEFAULT NULL,
  `categ_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_quatity` int(11) DEFAULT NULL,
  `item_rate` int(11) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `item_sgsttax` int(11) DEFAULT NULL,
  `item_cgsttax` int(11) DEFAULT NULL,
  `item_igsttax` int(11) DEFAULT NULL,
  `item_totalamount` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_num`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_detail10`
--

INSERT INTO `item_detail10` (`item_num`, `item_name`, `categ_id`, `image`, `item_quatity`, `item_rate`, `item_amount`, `item_sgsttax`, `item_cgsttax`, `item_igsttax`, `item_totalamount`) VALUES
(1998, 'soap', 108, 'Database schema.PNG', 75, 5, 30, 56, 56, 0, 2250);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

DROP TABLE IF EXISTS `shopkeeper`;
CREATE TABLE IF NOT EXISTS `shopkeeper` (
  `shp_id` int(11) NOT NULL AUTO_INCREMENT,
  `gstin` text NOT NULL,
  `shopname` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`shp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`shp_id`, `gstin`, `shopname`, `username`, `email`, `mobile`, `address`, `password`) VALUES
(1, '03ASERT1140Y5Z3', 'kumar', 'kaur', 'sunny.chalagundla333@gmail.com', '8699957324', ' Texas', 'qwertyuiop'),
(2, '03PKSRT1140Y8Z3', 'nataraj', 'raj kumar', 'rk@gmail.com', '7564329876', 'jalandhar', 'zxcvbnm,./'),
(3, '03STYRT1140Y5Z3', 'idli', 'kaur', 'kaur@gmail.com', '9440183285', 'MARTUR', '6eea9b7ef19179a06954edd0f6c05ceb'),
(4, '03PKSRT1140Y8Z3', 'clbc', 'siva', 'sunnysaikumar@gmail.com', '8699957324', 'MARTUR', '22d7fe8c185003c98f97e5d6ced420c7'),
(5, '03AADCT2481N1Z6', 'rajputh', 'ravi', 'ravi@gmail.com', '9988567445', 'jaipur', 'ae2eb3a82aa8c5a706691b7fe9903421'),
(6, '03STYRT1140Y5Z3', 'clbc', 'sudha', 'sud@gmail.com', '7396490289', 'USA', 'c7222dfeadbeb787ba88dde577f88206'),
(7, '09HRDNT9861N1Z6', 'taker', 'mohit', 'moh@gmail.com', '9876778999', 'delhi', 'cf3b27ef58e8421ad18556857077d39f'),
(8, '03AABFI0861Q1ZB', 'AU Const', 'Ankur Kumar', 'ankurnandansahay@gmail.com', '7814706601', 'Patna', 'e104c000ba2bf871deada58d00203f70'),
(9, '10APZPS3585G1ZH', 'A U Consultancy', 'Alok Nandan Sahay', 'aloknandansahay@gmail.com', '9835657302', 'Ranipur, Near Devi Mandir , Patna, Bihar', 'bb3ba4fddcdf99088bd9de90f584f071'),
(10, '03APZPS3585G1ZM', 'SUNNY', 'KUMAR', 'nanda@gmail.com', '9835657302', 'jalandhar', 'c77108fe3e285caa6757dc152fd42b72');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_detail8`
--
ALTER TABLE `bill_detail8`
  ADD CONSTRAINT `bill_detail8_ibfk_1` FOREIGN KEY (`item_num`) REFERENCES `item_detail8` (`item_num`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_detail8_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `bill_detail9`
--
ALTER TABLE `bill_detail9`
  ADD CONSTRAINT `bill_detail9_ibfk_1` FOREIGN KEY (`item_num`) REFERENCES `item_detail9` (`item_num`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_detail9_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `bill_detail10`
--
ALTER TABLE `bill_detail10`
  ADD CONSTRAINT `bill_detail10_ibfk_1` FOREIGN KEY (`item_num`) REFERENCES `item_detail10` (`item_num`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_detail10_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `item_detail8`
--
ALTER TABLE `item_detail8`
  ADD CONSTRAINT `item_detail8_ibfk_1` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `item_detail9`
--
ALTER TABLE `item_detail9`
  ADD CONSTRAINT `item_detail9_ibfk_1` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `item_detail10`
--
ALTER TABLE `item_detail10`
  ADD CONSTRAINT `item_detail10_ibfk_1` FOREIGN KEY (`categ_id`) REFERENCES `category_detail` (`categ_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
