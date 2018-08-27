-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2018 at 04:59 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baw_smismax`
--

-- --------------------------------------------------------

--
-- Table structure for table `baw_customers`
--

DROP TABLE IF EXISTS `baw_customers`;
CREATE TABLE IF NOT EXISTS `baw_customers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_company` varchar(255) NOT NULL,
  `c_mobile` varchar(255) NOT NULL,
  `c_balance` int(11) DEFAULT '0',
  `c_email` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `uc_c_company` (`c_company`) USING BTREE,
  UNIQUE KEY `uc_c_mobile` (`c_mobile`) USING BTREE,
  UNIQUE KEY `c_email` (`c_email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baw_customers`
--

INSERT INTO `baw_customers` (`c_id`, `c_name`, `c_company`, `c_mobile`, `c_balance`, `c_email`) VALUES
(12, 'Malik Sajid', 'SwisMax', '03109552994', 1899, 'engr.maliksajidkhan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `baw_domains`
--

DROP TABLE IF EXISTS `baw_domains`;
CREATE TABLE IF NOT EXISTS `baw_domains` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_tld` varchar(15) NOT NULL,
  `d_price` int(11) NOT NULL,
  PRIMARY KEY (`d_id`),
  UNIQUE KEY `UC_d_tld` (`d_tld`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baw_domains`
--

INSERT INTO `baw_domains` (`d_id`, `d_tld`, `d_price`) VALUES
(15, 'com', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `baw_hostings`
--

DROP TABLE IF EXISTS `baw_hostings`;
CREATE TABLE IF NOT EXISTS `baw_hostings` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_hosting_package` varchar(50) NOT NULL,
  `h_price` int(11) NOT NULL,
  PRIMARY KEY (`h_id`),
  UNIQUE KEY `UC_h_hosting_package` (`h_hosting_package`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baw_hostings`
--

INSERT INTO `baw_hostings` (`h_id`, `h_hosting_package`, `h_price`) VALUES
(8, 'startar', 400);

-- --------------------------------------------------------

--
-- Table structure for table `baw_orders`
--

DROP TABLE IF EXISTS `baw_orders`;
CREATE TABLE IF NOT EXISTS `baw_orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_customer_id` int(11) NOT NULL,
  `o_tld_id` varchar(15) NOT NULL,
  `o_tld_price` int(11) NOT NULL,
  `o_domain` varchar(50) DEFAULT NULL,
  `o_hosting_package_id` varchar(50) NOT NULL,
  `o_hosting_price` int(11) NOT NULL,
  `o_total` int(11) NOT NULL,
  `o_paid` int(11) NOT NULL,
  PRIMARY KEY (`o_id`),
  UNIQUE KEY `UC_o_domain` (`o_domain`) USING BTREE,
  KEY `FK_o_tld` (`o_tld_id`),
  KEY `FK_o_hosting_package` (`o_hosting_package_id`),
  KEY `FK_o_customer_id` (`o_customer_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baw_orders`
--

INSERT INTO `baw_orders` (`o_id`, `o_customer_id`, `o_tld_id`, `o_tld_price`, `o_domain`, `o_hosting_package_id`, `o_hosting_price`, `o_total`, `o_paid`) VALUES
(10, 12, '15', 1999, 'https://mail.google.com/', '8', 400, 2399, 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
