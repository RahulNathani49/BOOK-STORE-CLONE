-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2017 at 09:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hes1`
--
CREATE DATABASE IF NOT EXISTS `hes1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hes1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Admin_id` int(6) NOT NULL AUTO_INCREMENT,
  `Admin_email` varchar(30) NOT NULL,
  `Admin_password` varchar(10) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_id`, `Admin_email`, `Admin_password`) VALUES
(1, 'akash@gmail.com', 'akash1996'),
(2, 'sumit@gmail.com', 'sumit1997'),
(3, 'jayesh@gmail.com', 'jayesh1997');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Product_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Product_id`, `C_id`, `qty`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_mst`
--

CREATE TABLE IF NOT EXISTS `category_mst` (
  `Category_id` int(6) NOT NULL AUTO_INCREMENT,
  `Category_name` text NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category_mst`
--

INSERT INTO `category_mst` (`Category_id`, `Category_name`) VALUES
(1, 'EXCAVATOR HYDRAULIC CYLINDER'),
(2, 'LOADER HYDRAULIC CYLINDER'),
(3, 'DUMPER HYDRAULIC CYLINDER'),
(4, 'DOZER HYDRAULIC CYLINDER');

-- --------------------------------------------------------

--
-- Table structure for table `city_mst`
--

CREATE TABLE IF NOT EXISTS `city_mst` (
  `City_id` int(6) NOT NULL AUTO_INCREMENT,
  `City_name` varchar(20) NOT NULL,
  `State_id` int(6) NOT NULL,
  PRIMARY KEY (`City_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `city_mst`
--

INSERT INTO `city_mst` (`City_id`, `City_name`, `State_id`) VALUES
(1, 'Ambaji', 7),
(2, 'Allahabad', 9),
(3, 'Panaji', 6),
(4, 'Ahmedabad', 7),
(5, 'Raipur', 5),
(6, 'Alappuzha', 1),
(7, 'Anglong', 3),
(8, 'Faridabad', 8),
(9, 'Bettiha', 2),
(10, 'Baduan', 1),
(11, 'Surat', 7),
(12, 'Rajkot', 7),
(13, 'Mumbai', 10),
(14, 'Pune', 10),
(15, 'Patna', 4),
(16, 'Muzzaffarpur', 4),
(17, 'Dispur', 3),
(18, 'Guwahati', 3),
(19, 'Bilaspur', 5),
(20, 'Pernem', 6),
(21, 'Gurgaon', 8),
(22, 'Lacknow', 9),
(23, 'Kanpur', 9),
(24, 'Noida', 9),
(25, 'Nagpur', 10),
(26, 'Nashik', 10),
(27, 'Panvel', 10),
(28, 'Virar', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE IF NOT EXISTS `customer_registration` (
  `Cus_id` int(6) NOT NULL AUTO_INCREMENT,
  `Cus_fname` varchar(20) NOT NULL,
  `Cus_lname` varchar(20) NOT NULL,
  `Cus_gender` char(6) NOT NULL,
  `Cus_dob` date NOT NULL,
  `Cus_image` text NOT NULL,
  `Cus_Address` text NOT NULL,
  `Cus_pincode` int(7) NOT NULL,
  `City_id` int(6) NOT NULL,
  `State_id` int(6) NOT NULL,
  `Cus_mono` bigint(10) NOT NULL,
  `Cus_phone` bigint(12) NOT NULL,
  `Cus_email` text NOT NULL,
  `Cus_password` varchar(10) NOT NULL,
  PRIMARY KEY (`Cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`Cus_id`, `Cus_fname`, `Cus_lname`, `Cus_gender`, `Cus_dob`, `Cus_image`, `Cus_Address`, `Cus_pincode`, `City_id`, `State_id`, `Cus_mono`, `Cus_phone`, `Cus_email`, `Cus_password`) VALUES
(9, 'Sumit', 'Patel', '', '1997-06-25', 'IMG_20170317_140034.jpg', 'Saijpur Bogha, Naroda Road, Ahmedabad', 382345, 0, 0, 8401212454, 0, 'sumit@gmail.com', 'shpatel'),
(12, 'akash', 'kadia', 'male', '1996-10-27', 'B612_20161024_112937.jpg', 'Dariyapur', 380001, 4, 7, 8980589458, 0, 'akash@gmail.com', 'akash'),
(13, 'Jayesh', 'Kathik', 'male', '1997-03-05', 'B612_20161031_113307.jpg', 'Bapunagar', 380023, 4, 7, 8128739406, 8128739406, 'jayesh@gmail.com', 'jayesh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_mst`
--

CREATE TABLE IF NOT EXISTS `feedback_mst` (
  `Feedback_id` int(6) NOT NULL AUTO_INCREMENT,
  `Cus_email` text NOT NULL,
  `Feedback_message` text NOT NULL,
  `experience` char(10) NOT NULL,
  PRIMARY KEY (`Feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback_mst`
--

INSERT INTO `feedback_mst` (`Feedback_id`, `Cus_email`, `Feedback_message`, `experience`) VALUES
(1, 'akashkadia8@gmail.com', 'my question is the loader cylinder can be use in JCB.', 'Very Good'),
(2, 'akash@gmail.com', 'cssfsfs', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `Order_id` int(6) NOT NULL AUTO_INCREMENT,
  `Cus_email` text NOT NULL,
  `Product_id` int(6) NOT NULL,
  PRIMARY KEY (`Order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_id`, `Cus_email`, `Product_id`) VALUES
(1, 'akash@gmail.com', 1),
(2, 'akash@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_mst`
--

CREATE TABLE IF NOT EXISTS `product_mst` (
  `Product_id` int(6) NOT NULL AUTO_INCREMENT,
  `Category_id` int(6) NOT NULL,
  `Product_name` text NOT NULL,
  `Product_partno` text NOT NULL,
  `Product_image` text NOT NULL,
  `Product_size` text NOT NULL,
  `Product_desc` text NOT NULL,
  `Product_price` int(10) NOT NULL,
  PRIMARY KEY (`Product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_mst`
--

INSERT INTO `product_mst` (`Product_id`, `Category_id`, `Product_name`, `Product_partno`, `Product_image`, `Product_size`, `Product_desc`, `Product_price`) VALUES
(1, 1, 'EX-110 Boom cylinder', 'ld-91044', '1.jpg', 'Ã˜95Ã˜70Ã˜x1086', 'THIS IS A NICE PRODUCT', 10000),
(2, 1, ' EX-200 Bucket Cylinder.', 'D-9j263', '230clc_orig.jpg', 'Ã˜120Ã˜80x1055', 'THIS IS  A GOOD PPRODUCT', 7000),
(3, 1, 'EX-200 stick cylinder', 'TD-00718', 'engineering-assemblies_clip_image002_0018.jpg', 'Ã˜135Ã˜95x1633', 'THIS A GOOD PRODUCT', 8000),
(4, 2, 'HM-2021 lift Cylinder', '81008082', 'loader-hydraulic-cylinder-250x250 (1).jpg', 'Ã˜139.7xÃ˜63.5x735', 'This product is a good product.', 12000),
(5, 2, 'HM-2021 Tilt cylinder', '81020109', 'loader-hydraulic-cylinder-250x250 (3).jpg', '	Ã˜101.6xÃ˜44.45.x765', 'This cylinder is used to presar..', 11000),
(6, 3, 'DM-2071 Steering Cylinder', '92 69 397', 'loader-hydraulic-cylinder-250x250 (2).jpg', 'Ã˜139.6xÃ˜63.5x738', 'THIS IS A GOOD PRODUCT', 9000),
(7, 3, 'DM-2071 Slave cylinder', '7014857', 'B1133764372.jpg', 'Ã˜38.1xÃ˜19.05x215', 'THIS IS A GOOD PRODUCT', 12000),
(8, 4, 'DZ-2021 Bar Lift Cylinder', '81016488', 'p1.jpg', 'Ã˜120xÃ˜70x735', 'THIS IS A GOOD PRODUCT', 10140);

-- --------------------------------------------------------

--
-- Table structure for table `state_mst`
--

CREATE TABLE IF NOT EXISTS `state_mst` (
  `State_id` int(6) NOT NULL AUTO_INCREMENT,
  `State_name` varchar(20) NOT NULL,
  PRIMARY KEY (`State_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `state_mst`
--

INSERT INTO `state_mst` (`State_id`, `State_name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattishgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Uttar Pradesh'),
(10, 'Maharastra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
