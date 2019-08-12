-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 04:09 AM
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
  `name` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `crop_name` varchar(44) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `crop_buyer`
--

INSERT INTO `crop_buyer` (`user_id`, `name`, `phone_no`, `crop_name`, `quantity`, `price`) VALUES
(17, 'payal', 947629696, 'Rice', 100, 28),
(18, 'sakshi', 983201345, 'Rice', 43, 24),
(19, 'mridul', 946537658, 'Rice', 45, 23),
(20, 'saroj', 947483647, 'Rice', 100, 24),
(25, 'MRIDUL', 924836478, 'Rice', 45, 54),
(39, 'neha', 11, 'Wheat', 0, 2);

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
-- Table structure for table `m_provider`
--

CREATE TABLE IF NOT EXISTS `m_provider` (
`m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `duration` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE IF NOT EXISTS `m_user` (
`m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `duration` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rice_mp`
--

CREATE TABLE IF NOT EXISTS `rice_mp` (
`rice_id` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL,
  `mandi_name` varchar(50) NOT NULL,
  `mp` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `rice_mp`
--

INSERT INTO `rice_mp` (`rice_id`, `dist_name`, `mandi_name`, `mp`) VALUES
(8, 'durgapur', 'jangipur', 2550),
(9, 'durgapur', 'purilla ', 2800),
(12, 'pandua', 'jangipur', 2550),
(13, 'siliguri', 'jalangia', 2550),
(14, 'Rice', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_provider`
--

CREATE TABLE IF NOT EXISTS `t_provider` (
`t_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `wt` int(20) NOT NULL,
  `dist` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `time` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `t_provider`
--

INSERT INTO `t_provider` (`t_id`, `name`, `phone_no`, `wt`, `dist`, `price`, `time`) VALUES
(2, '', 0, 1000, 75, 1, 1275),
(3, '', 0, 1000, 200, 1, 2396),
(4, '', 0, 2000, 300, 1, 3456),
(5, '', 0, 500, 500, 1, 3467),
(6, '', 0, 1000, 234, 1, 2346),
(7, '', 0, 0, 0, 0, 0),
(8, '', 0, 44343, 44, 44, 44),
(9, '', 2147483647, 766, 877, 890, 798),
(10, '', 2147483647, 34, 34, 34, 34),
(11, '', 2147483647, 22, 22, 22, 22),
(12, '', 11, 33, 33, 33, 33),
(13, '', 11, 33, 33, 33, 33),
(14, '', 11, 22, 22, 22, 22),
(15, '', 11, 22, 22, 22, 22),
(16, '', 11, 22, 22, 22, 22),
(17, 'Mridul', 11, 22, 22, 22, 22),
(18, 'NEHA', 2147483647, 44, 44, 44, 44),
(19, 'MRIDUL', 456, 45, 45, 2, 2000),
(20, 'MRIDUL', 456, 33, 33, 2, 56),
(21, 'MRIDUL', 456, 0, 0, 0, 0),
(22, 'MRIDUL', 456, 0, 0, 0, 0),
(23, 'MRIDUL', 456, 0, 0, 0, 0),
(24, 'MRIDUL', 456, 0, 0, 0, 0),
(25, 'MRIDUL', 456, 0, 0, 0, 0),
(26, 'MRIDUL', 456, 134, 24, 325, 345);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
`tr_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `wt` int(20) NOT NULL,
  `dist` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `time` int(29) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`tr_id`, `name`, `phone_no`, `wt`, `dist`, `price`, `time`) VALUES
(1, 'neha', 924748364, 2000, 75, 1000, 2276),
(2, 'mridul', 914748364, 2000, 1500, 2, 3245),
(3, 'somya', 914748364, 1000, 2556, 3, 6517),
(4, 'grty', 987654536, 1000, 2536, 3, 9474),
(5, 'saroj', 914748364, 79, 8998, 678, 8989);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `phone_no`, `state`, `district`, `password`) VALUES
(22, 'NEHA', 'AG', '9832091301', 'West Bengal', 'samsi', '11'),
(23, 'BYD', 'FDJ', '9832091301', 'West Bengal', 'pandua', '33'),
(24, 'PAYAL', 'AG', '9035112435', 'West Bengal', 'pandua', '1111'),
(25, 'MRIDUL', 'AG', '456', 'West Bengal', 'murshidabad', '456'),
(36, 'neha', 'AGARWAL', '11', 'West Bengal', 'samsi', '28fcd77960'),
(37, 'neha', 'AGARWAL', '11', 'West Bengal', 'samsi', '28fcd77960'),
(38, 'neha', 'AGARWAL', '11', 'West Bengal', 'durgapur', '28fcd77960'),
(39, 'neha', 'AGARWAL', '11', 'West Bengal', 'durgapur', '28fcd77960'),
(40, '23', 'kk', 'ui', 'West Bengal', 'Asansol', 'cbcf80e06f');

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
-- Indexes for table `crop_buyer`
--
ALTER TABLE `crop_buyer`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `crop_seller`
--
ALTER TABLE `crop_seller`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `m_provider`
--
ALTER TABLE `m_provider`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `rice_mp`
--
ALTER TABLE `rice_mp`
 ADD PRIMARY KEY (`rice_id`);

--
-- Indexes for table `t_provider`
--
ALTER TABLE `t_provider`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
 ADD PRIMARY KEY (`tr_id`);

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
-- AUTO_INCREMENT for table `crop_buyer`
--
ALTER TABLE `crop_buyer`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `crop_seller`
--
ALTER TABLE `crop_seller`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `m_provider`
--
ALTER TABLE `m_provider`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rice_mp`
--
ALTER TABLE `rice_mp`
MODIFY `rice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_provider`
--
ALTER TABLE `t_provider`
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
