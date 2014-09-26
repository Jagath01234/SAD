-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2014 at 04:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guesthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `autonumber`
--

CREATE TABLE IF NOT EXISTS `autonumber` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `autonumber`
--

INSERT INTO `autonumber` (`id`) VALUES
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `nic/passport` varchar(50) NOT NULL,
  `email` int(11) NOT NULL,
  `telephone` int(20) NOT NULL,
  `address` varchar(75) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `first_name`, `last_name`, `country`, `nic/passport`, `email`, `telephone`, `address`) VALUES
(37, 'sdsd', 'sdsd', '', '', 0, 0, ''),
(38, 'fdgsdfgfsss', 'dfdff', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(30) NOT NULL,
  `equipment_rate` varchar(20) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_type`, `equipment_rate`, `photo`) VALUES
(1, 'sdsd', 'dfsdsd', 'download.jpg'),
(2, 'dfcxz', 'xcxz', 'download.jpg'),
(3, 'hnjb', 'ghg', ''),
(4, 'wedded', 'edds', '10487443_590267724419610_8625510995060585640_n.jpg'),
(5, 'fgfg', 'gfg', ''),
(6, 'fgfg', 'gfg', ''),
(7, 'gh', 'gfdgggggg', '20140918_154507.jpg'),
(8, 'gchjhj', 'jhhj', '');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `meal_id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_type` varchar(50) NOT NULL,
  `meal_rate` varchar(50) NOT NULL,
  `meal_photo` longblob NOT NULL,
  PRIMARY KEY (`meal_type`),
  KEY `meal_id` (`meal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `meal_type`, `meal_rate`, `meal_photo`) VALUES
(1, 'aaaa', '40', 0x54696d65207461626c652e6a7067),
(2, 'hhh', '400', 0x31303438373434335f3539303236373732343431393631305f383632353531303939353036303538353634305f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  `room_type` varchar(30) DEFAULT NULL,
  `room_rate` varchar(10) DEFAULT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_type`, `room_rate`, `photo`) VALUES
(1, 'fchbh', 'hh', 'hhh', '20140918_150633.jpg'),
(2, 'errr', 'er', '3656456', ''),
(3, 'errr', 'er', '3656456', ''),
(4, 'errr', 'er', '3656456', ''),
(5, 'sfsf', 'sfdsf', 'adsdfsf', ''),
(6, 'asdfdf', 'dff', 'dff', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_reservation`
--

CREATE TABLE IF NOT EXISTS `room_reservation` (
  `number` int(10) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(20) NOT NULL,
  `room_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `charge` varchar(20) NOT NULL,
  PRIMARY KEY (`number`,`reservation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `room_reservation`
--

INSERT INTO `room_reservation` (`number`, `reservation_id`, `room_id`, `cus_id`, `check_in_date`, `check_out_date`, `charge`) VALUES
(25, 'ZZ-1409230068', 2222, 32, '2014-09-02', '2014-09-03', '2222'),
(26, 'SH-1409230069', 2222, 33, '2014-09-02', '2014-09-03', '2222'),
(27, 'EY-1409230070', 2222, 34, '2014-09-02', '2014-09-03', '2222'),
(28, 'IJ-1409230071', 0, 35, '2014-09-08', '2014-09-09', '44'),
(29, 'ZO-1409230072', 0, 36, '2014-09-08', '2014-09-09', '44'),
(30, 'OK-1409230073', 0, 38, '2014-09-01', '2014-09-08', 'sddsd');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(6) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `nic` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `address`, `email`, `nic`, `phone`, `user_name`, `password`, `user_type`) VALUES
(1, 'fff', 'l', 'lll', 'a@a.com', '7775', 77, 'admin', '202cb962ac59075b964b07152d234b70', ''),
(2, 'aa', '', '', 'a@a.com', '45', 0, 'gg', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(3, 'aa', 'ssss', '', 'a@.COM', 'DFF', 0, 'SDSDSD', 'eb08e253e6a2af649c9b91825719c11e', ''),
(4, 'FFFED', 'GGHG', 'GGHG', 'A@A.COM', '9888666', 0, 'USER', '448ddd517d3abb70045aea6929f02367', ''),
(5, 'sdff', '0e7517141fb53f21ee439b355b5a1d0a', '', 'df', 'df', 0, 'df', '', ''),
(6, 'ooooooooooooo', 'sdf', '', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(7, 'llll', 'sdf', '', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(8, 'llll', 'sdf', '', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(9, 'saaasasas', 'asasas', 'asasa', 'asasas', 'asa', 0, 'asa', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(10, 'saaasasas', 'asasas', 'asasa', 'asasas', 'asa', 0, 'asa', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(11, 'llll', 'sdf', 'dsf', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(12, 'llll', 'sdf', '', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(13, 'llll', 'sdf', '', 'df', 'df', 0, 'df', '0e7517141fb53f21ee439b355b5a1d0a', ''),
(14, 'ssssssskkkkkkkkkkkk', '', '', 'ss@a.com', '323256982v', 777111111, 'ssssssskkk', '448ddd517d3abb70045aea6929f02367', ''),
(15, 'sss', 'dasdasd', '', 'ss@a.com', '323256982v', 777111111, 'ssssssskkk', '82400269a3c7c14b5c6faf117eba8622', ''),
(16, 'hf', 'ghjgfv', '', 'jg@a.com', '323256982v', 777111111, 'admin2', '82400269a3c7c14b5c6faf117eba8622', ''),
(17, 'errr', 'rrrgtet', '', 'a@a.com', '323256982v', 777111111, 'admin2', '82400269a3c7c14b5c6faf117eba8622', 'normal'),
(18, 'ytu', 'y', 'uyu', 'abc@abc.com', '785465198v', 2147483647, 'admin2', '82400269a3c7c14b5c6faf117eba8622', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `type`, `rate`, `image`) VALUES
(22312, 'Car', '40', 0x6d6f746f5f6d6175303138362e4a504547);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
