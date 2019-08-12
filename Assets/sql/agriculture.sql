-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 07:19 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `crop_buyer`
--

CREATE TABLE IF NOT EXISTS `crop_buyer` (
  `user_id` int(11) NOT NULL,
  `quantity_buy` int(20) NOT NULL,
  `price_buy` int(20) NOT NULL,
  `crop_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_buyer`
--

INSERT INTO `crop_buyer` (`user_id`, `quantity_buy`, `price_buy`, `crop_name`) VALUES
(17, 432, 452, 'Wheat');

-- --------------------------------------------------------

--
-- Table structure for table `crop_seller`
--

CREATE TABLE IF NOT EXISTS `crop_seller` (
`user_id` int(11) NOT NULL,
  `crop_name` varchar(44) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `crop_seller`
--

INSERT INTO `crop_seller` (`user_id`, `crop_name`, `quantity`, `price`) VALUES
(6, '', 546, 45),
(7, '', 43, 24),
(17, 'Rice', 45, 452);

-- --------------------------------------------------------

--
-- Table structure for table `rice_mp`
--

CREATE TABLE IF NOT EXISTS `rice_mp` (
`rice_id` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL,
  `mandi_name` varchar(50) NOT NULL,
  `mp` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `phone_no`, `state`, `district`, `password`) VALUES
(3, 'neha', 'agarwal', '567', '', '', '0'),
(4, 'neha', 'agarwal', '567', '', '', '0'),
(5, 'tgfg', 'ddgth', '436', '2', 'siliguri', '0'),
(6, 'neha', 'agarwal', '77', 'West Bengal', 'malda', '0'),
(7, 'neha', 'jdfw', '84', 'West Bengal', 'Birbhum', '0'),
(8, 'gfbf', 'ghdfg', '4354', 'West Bengal', 'murshidabad', 'ghgd'),
(9, 'eadf', 'ewgt', '4542', 'West Bengal', 'murshidabad', '43'),
(10, '', '', '', '1', '1', ''),
(11, '', '', '', '1', '1', ''),
(12, 'WAFEAWFE', 'EF', '35465', 'West Bengal', 'howrah', '43'),
(13, 'WAFEAWFE', 'EF', '35465', 'West Bengal', 'howrah', '43'),
(14, 'WAFEAWFE', 'EF', '35465', 'West Bengal', 'howrah', '43'),
(15, 'rdfg', 'dfs', '547', 'West Bengal', 'murshidabad', '67547'),
(16, 'mridul', 'arora', '55', '1', 'samsi', '55'),
(17, '', 'efgtr', '', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_mp`
--

CREATE TABLE IF NOT EXISTS `wheat_mp` (
  `id_num` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL,
  `mandi_name` varchar(50) NOT NULL,
  `mp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wheat_mp`
--

INSERT INTO `wheat_mp` (`id_num`, `dist_name`, `mandi_name`, `mp`) VALUES
(1, 'bhirbhum', 'bholpur', '1600'),
(2, 'bhirbhum', 'suri', '1700'),
(3, 'barhampur', ' alipurduar', '1750'),
(4, 'barhampur', '  bankura', '1800'),
(5, 'murshidabad', ' karimpur', '1800'),
(6, 'murshidabad', ' jalangi', '1820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop_seller`
--
ALTER TABLE `crop_seller`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `rice_mp`
--
ALTER TABLE `rice_mp`
 ADD PRIMARY KEY (`rice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wheat_mp`
--
ALTER TABLE `wheat_mp`
 ADD PRIMARY KEY (`id_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crop_seller`
--
ALTER TABLE `crop_seller`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `rice_mp`
--
ALTER TABLE `rice_mp`
MODIFY `rice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
