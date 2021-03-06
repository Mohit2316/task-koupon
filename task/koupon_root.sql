-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2015 at 01:13 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koupon_root`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'AdminUser',
  `login_type` varchar(10) NOT NULL DEFAULT 'merchant',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`),
  UNIQUE KEY `passcode` (`password`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uid`, `password`, `email`, `name`, `login_type`) VALUES
(0, -1, 'admin123', 'admin@PasteOnMyCity.com', 'AdminUser', 'admin'),
(1, 1, 'kirpragup456', 'inception.capulus@cuppastop.com', 'Cuppa - Life Refresh', 'merchant'),
(2, 2, 'Polymers1', 'c@12cube.in', 'Menchies Frozen Yogurt', 'merchant'),
(3, 3, 'mahesh', 'odelfilmnagar@gmail.com', 'Odel Solid Fitness ', 'merchant'),
(4, 4, 'jitenshah', 'juice_salon@rediffmail.com', 'Juice Salon', 'merchant'),
(5, 5, 'coffeeaffair123', 'coffeeaffairs7272@gmail.com', 'Coffee Affair', 'merchant'),
(6, 6, 'Rudra1247', 'rudra.eternesse@gmail.com', 'Eternesse Anti Aging Clinic', 'merchant'),
(7, 7, 'twister', 'naveen@twistersportspub.com', 'Twister - Sports Pub', 'merchant'),
(8, 8, 'irishbar', 'shamrockhyd@gmail.com', 'Shamrock - The Irish Bar', 'merchant'),
(9, 9, '18121962', 'info@treasurehouse.in', 'Treasure House', 'merchant'),
(10, 10, 'nobleindia', 'noblemathews007@gmail.com', 'Kerala Kitchen', 'merchant'),
(11, 11, 'leekris', 'attlurimurali16@gmail.com', 'Urban Grill', 'merchant'),
(12, 12, 'sankalp123', 'gm@jubileeridge.com', 'Best Western Jubilee Ridge', 'merchant'),
(13, 13, 'jayant', 'jk_sikder45@yahoo.co.in', 'Haven - Salon and Spa', 'merchant'),
(14, 14, 'ap29br7144', 'majesticainn.kondapur@gmail.com', 'Majestica Multi-Cuisine Restaurant & Banquet', 'merchant'),
(15, 15, 'qwerty', 'akula_karthik88@yahoo.com', 'Mocha', 'merchant'),
(16, 16, 'jai@74vikki@81', 'fcafehyderabad@gmail.com', 'F Cafe & Lounge', 'merchant'),
(21, 17, 'corleone7', 'arr_gulu@yahoo.com', 'Magic Bus Ventures', 'merchant'),
(22, 18, 'foxy', 'fnb.rfhy@lemontreehotels.com', 'Red Fox Hyderabad', 'merchant'),
(23, 19, '123456789', 'arun.gupta@lemontreehotels.com', 'LEMON TREE PREMIER HYDERABAD', 'merchant'),
(24, 20, 'abcmail', 'abc@gmail.com', 'abc', 'merchant'),
(25, 21, 'abcgmail', 'abc1@gmail.com', 'abc', 'merchant'),
(26, 22, 'mynewaccount', 'abcjackson251@gmail.com', 'abc', 'merchant'),
(27, 23, 'rush1982', 'satya@rushsportsbar.com', 'Rush Sports Cafe & Bar', 'merchant'),
(28, 24, 'vectorv5', 'frydayzhyd@gmail.com', 'Frydayz Multi-Cuisine Restaurant', 'merchant'),
(29, 25, 'vishnu6699', 'vishnu_6@hotmail.com', 'Shade - Multi-Cuisine Restaurant', 'merchant'),
(30, 26, 'bluecactus45', 'sunder.reddy@yahoo.com', 'Eat 3', 'merchant'),
(31, 27, 'Cherry9', 'gvrholi@gmail.com', 'Holi Restaurant & Bar', 'merchant'),
(33, 29, 'kesineni', 'jp@bananaleafhyd.com', 'Banana Leaf', 'merchant'),
(34, 30, 'corleone', 'info@hhrs.in', 'HHRS - Hyderabad Horse Riding School', 'merchant'),
(35, 31, '9833326888', 'dhanraj078@gmail.com', 'Steamz - Coffee Lounge & Restaurant', 'merchant'),
(36, 32, 'patancourt', 'genesis.patancourt@gmail.com', 'Patan Court', 'merchant'),
(37, 33, 'corleone6', 'simon.kunapareddy@gmail.com', 'Simon Says', 'merchant'),
(38, 34, 'Helpdesk1', 'admin@ajstudios.com', 'AJ Studios', 'merchant');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `date` date NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`date`, `count`) VALUES
('2013-12-26', 32),
('2013-12-27', 24),
('2013-12-28', 16),
('2013-12-29', 19),
('2013-12-30', 24),
('2013-12-31', 46),
('2014-01-01', 54),
('2014-01-02', 25),
('2014-01-03', 23),
('2014-01-04', 42),
('2014-01-05', 36),
('2014-01-06', 28),
('2014-01-07', 47),
('2014-01-08', 56),
('2014-01-09', 58),
('2014-01-10', 51),
('2014-01-11', 62),
('2014-01-12', 62),
('2014-01-13', 67),
('2014-01-14', 63),
('2014-01-15', 31),
('2014-01-16', 43),
('2014-01-17', 57),
('2014-01-18', 48),
('2014-01-19', 69),
('2014-01-20', 73),
('2014-01-21', 78),
('2014-01-22', 67),
('2014-01-23', 63),
('2014-01-24', 65),
('2014-01-25', 78),
('2014-01-26', 81),
('2014-01-27', 85),
('2014-01-28', 76),
('2014-01-29', 151),
('2014-01-30', 133),
('2014-01-31', 87),
('2014-02-01', 53),
('2014-02-02', 48),
('2014-02-03', 56),
('2014-02-04', 79),
('2014-02-05', 63),
('2014-02-06', 63),
('2014-02-07', 33),
('2014-02-08', 33),
('2014-02-09', 55),
('2014-02-10', 92),
('2014-02-11', 39),
('2014-02-12', 51),
('2014-02-13', 34),
('2014-02-14', 34),
('2014-02-15', 25),
('2014-02-16', 23),
('2014-02-17', 44),
('2014-02-18', 31),
('2014-02-19', 31),
('2014-02-20', 32),
('2014-02-21', 34),
('2014-02-22', 35),
('2014-02-23', 25),
('2014-02-24', 38),
('2014-02-25', 26),
('2014-02-26', 32),
('2014-02-27', 40),
('2014-02-28', 46),
('2014-03-01', 27),
('2014-03-02', 23),
('2014-03-03', 35),
('2014-03-04', 43),
('2014-03-05', 39),
('2014-03-06', 40),
('2014-03-07', 25),
('2014-03-08', 36),
('2014-03-09', 52),
('2014-03-10', 27),
('2014-03-11', 24),
('2014-03-12', 44),
('2014-03-13', 40),
('2014-03-14', 38),
('2014-03-15', 35),
('2014-03-16', 22),
('2014-03-17', 30),
('2014-03-18', 40),
('2014-03-19', 33),
('2014-03-20', 102),
('2014-03-21', 33),
('2014-03-22', 26),
('2014-03-23', 21),
('2014-03-24', 21),
('2014-03-25', 26),
('2014-03-26', 20),
('2014-03-27', 19),
('2014-03-28', 18),
('2014-03-29', 27),
('2014-03-30', 14),
('2014-03-31', 49),
('2014-04-01', 29),
('2014-04-02', 20),
('2014-04-03', 35),
('2014-04-04', 30),
('2014-04-05', 28),
('2014-04-06', 34),
('2014-04-07', 17),
('2014-04-08', 22),
('2014-04-09', 24),
('2014-04-10', 26),
('2014-04-11', 30),
('2014-04-12', 35),
('2014-04-13', 17),
('2014-04-14', 30),
('2014-04-15', 15),
('2014-04-16', 20),
('2014-04-17', 25),
('2014-04-18', 22),
('2014-04-19', 24),
('2014-04-20', 28),
('2014-04-21', 26),
('2014-04-22', 18),
('2014-04-23', 13),
('2014-04-24', 19),
('2014-04-25', 29),
('2014-04-26', 4),
('2014-04-28', 11),
('2014-04-29', 296),
('2014-04-30', 17),
('2014-05-01', 15),
('2014-05-02', 9),
('2014-05-03', 34),
('2014-05-04', 24),
('2014-05-05', 27),
('2014-05-06', 31),
('2014-05-07', 34),
('2014-05-08', 22),
('2014-05-09', 29),
('2014-05-10', 33),
('2014-05-11', 25),
('2014-05-12', 24),
('2014-05-13', 25),
('2014-05-14', 21),
('2014-05-15', 40),
('2014-05-16', 26),
('2014-05-17', 38),
('2014-05-18', 23),
('2014-05-19', 41),
('2014-05-20', 23),
('2014-05-21', 23),
('2014-05-22', 24),
('2014-05-23', 28),
('2014-05-24', 21),
('2014-05-25', 32),
('2014-05-26', 1),
('2014-05-27', 13),
('2014-05-28', 8),
('2014-06-04', 15),
('2014-06-05', 97),
('2014-06-06', 61),
('2014-06-07', 31),
('2014-06-08', 39),
('2014-06-09', 26),
('2014-06-10', 51),
('2014-06-11', 50),
('2014-06-12', 41),
('2014-06-13', 33),
('2014-06-14', 25),
('2014-06-15', 30),
('2014-06-16', 29),
('2014-06-17', 40),
('2014-06-18', 14),
('2014-06-19', 30),
('2014-06-20', 24),
('2014-06-21', 39),
('2014-06-22', 28),
('2014-06-23', 21),
('2014-06-24', 21),
('2014-06-25', 36),
('2014-06-26', 37),
('2014-06-27', 38),
('2014-06-28', 57),
('2014-06-29', 38),
('2014-06-30', 28),
('2014-07-01', 57),
('2014-07-02', 31),
('2014-07-03', 58),
('2014-07-04', 43),
('2014-07-05', 31),
('2014-07-06', 27),
('2014-07-07', 39),
('2014-07-08', 56),
('2014-07-09', 59),
('2014-07-10', 59),
('2014-07-11', 45),
('2014-07-12', 38),
('2014-07-13', 34),
('2014-07-14', 50),
('2014-07-15', 52),
('2014-07-16', 40),
('2014-07-17', 63),
('2014-07-18', 58),
('2014-07-19', 49),
('2014-07-20', 50),
('2014-07-21', 50),
('2014-07-22', 35),
('2014-07-23', 43),
('2014-07-24', 36),
('2014-07-25', 56),
('2014-07-26', 35),
('2014-07-27', 48),
('2014-07-28', 33),
('2014-07-29', 42),
('2014-07-30', 46),
('2014-07-31', 77),
('2014-08-01', 54),
('2014-08-02', 51),
('2014-08-03', 40),
('2014-08-04', 40),
('2014-08-05', 46),
('2014-08-06', 92),
('2014-08-07', 44),
('2014-08-08', 51),
('2014-08-09', 44),
('2014-08-10', 45),
('2014-08-11', 57),
('2014-08-12', 57),
('2014-08-13', 45),
('2014-08-14', 56),
('2014-08-15', 51),
('2014-08-16', 62),
('2014-08-17', 53),
('2014-08-18', 57),
('2014-08-19', 52),
('2014-08-20', 43),
('2014-08-21', 41),
('2014-08-22', 51),
('2014-08-23', 72),
('2014-08-24', 55),
('2014-08-25', 32),
('2014-08-26', 44),
('2014-08-27', 40),
('2014-08-28', 52),
('2014-08-29', 57),
('2014-08-30', 51),
('2014-08-31', 47),
('2014-09-01', 82),
('2014-09-06', 1),
('2014-09-09', 2),
('2014-09-10', 10),
('2014-09-15', 6),
('2014-09-17', 7),
('2014-09-19', 8),
('2014-09-25', 9),
('2014-10-11', 2),
('2014-11-04', 2),
('2014-11-19', 12),
('2015-01-06', 2),
('2015-01-21', 1),
('2015-01-23', 15),
('2015-03-22', 5),
('2015-03-28', 2),
('2015-04-06', 13),
('2015-04-07', 2),
('2015-04-10', 3),
('2015-04-13', 5),
('2015-07-20', 1),
('2015-07-29', 1),
('2015-08-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fblogin`
--

CREATE TABLE IF NOT EXISTS `fblogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fb_id` int(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(600) NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kpn_currency`
--

CREATE TABLE IF NOT EXISTS `kpn_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `currency` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `symbol` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kpn_deal_details`
--

CREATE TABLE IF NOT EXISTS `kpn_deal_details` (
  `kpn_id` int(10) NOT NULL,
  `pay` float NOT NULL,
  `deal_type` varchar(50) NOT NULL,
  `deal_value` varchar(50) DEFAULT NULL,
  `deal_condition` varchar(100) DEFAULT NULL,
  `deal_cost` float DEFAULT NULL,
  `deal_orig_cost` float DEFAULT NULL,
  `deal_discount` float DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL,
  KEY `FK_kpn_deal_details_kpn_deal_headers` (`kpn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kpn_deal_details`
--

INSERT INTO `kpn_deal_details` (`kpn_id`, `pay`, `deal_type`, `deal_value`, `deal_condition`, `deal_cost`, `deal_orig_cost`, `deal_discount`, `creation_date`, `last_update_date`) VALUES
(1, 0, 'OFF', '', '', 15730, 31460, 50, '2013-12-24 08:15:11', '2013-12-24 08:15:11'),
(2, 0, 'OFF', '', '', 18876, 31460, 40, '2013-12-24 08:26:16', '2013-12-24 08:26:16'),
(3, 0, 'OFF', '', '', 269, 299, 10.03, '2013-12-24 12:03:55', '2013-12-24 12:03:55'),
(4, 0, 'FREE', '10% Off On Bill', 'Candle-Light Dinner Roof-top', 0, 0, 0, '2013-12-24 12:11:21', '2013-12-24 12:11:21'),
(5, 0, 'FREE', '20% Off', 'Every Spa Service', 0, 0, 0, '2013-12-24 13:22:09', '2013-12-24 13:22:09'),
(6, 0, 'FREE', '1 Facial Service Free', 'Buy 3 Facial Services', 0, 0, 0, '2013-12-24 13:30:06', '2013-12-24 13:30:06'),
(7, 0, 'OFF', '', '', 333, 475, 29.89, '2013-12-24 14:18:18', '2013-12-24 14:18:18'),
(8, 0, 'OFF', '', '', 800, 1000, 20, '2013-12-25 12:06:12', '2013-12-25 12:06:12'),
(9, 0, 'OFF', '', '', 400, 500, 20, '2013-12-25 12:09:30', '2013-12-25 12:09:30'),
(10, 0, 'OFF', '', '', 900, 1000, 10, '2013-12-25 12:19:35', '2013-12-25 12:19:35'),
(11, 0, 'OFF', '', '', 460, 510, 9.8, '2013-12-25 12:23:24', '2013-12-25 12:23:24'),
(12, 0, 'FREE', '10% Off', 'Library Membership At Treasure House', 0, 0, 0, '2013-12-25 13:02:04', '2013-12-25 13:02:04'),
(13, 0, 'FREE', '1 Art-Kit Free', 'Buy 4 Art-Kits', 0, 0, 0, '2013-12-25 13:14:58', '2013-12-25 13:14:58'),
(14, 0, 'FREE', '1 Soft-Drink', 'Buy 1 Main-Course', 0, 0, 0, '2013-12-25 14:02:23', '2013-12-25 14:02:23'),
(15, 0, 'OFF', '', '', 850, 1000, 15, '2013-12-25 14:07:58', '2013-12-25 14:07:58'),
(16, 0, 'FREE', '1 Mocktail', 'Buy 2 Appetizers', 0, 0, 0, '2013-12-25 14:12:52', '2013-12-25 14:12:52'),
(17, 0, 'FREE', 'Unlimited Liquor at 800', 'Corporates Only', 0, 0, 0, '2013-12-25 15:02:30', '2013-12-25 15:02:30'),
(18, 0, 'OFF', '', '', 100, 184, 45.65, '2013-12-25 15:15:14', '2013-12-25 15:15:14'),
(19, 0, 'FREE', '1299/- Only', 'Haircut, Pedicure & Manicure', 0, 0, 0, '2013-12-25 16:55:04', '2013-12-25 16:55:04'),
(20, 0, 'FREE', 'Rs 1499/-', 'Haircut, Pedicure & Manicure', 0, 0, 0, '2013-12-25 17:01:07', '2013-12-25 17:01:07'),
(21, 0, 'OFF', '', '', 850, 1000, 15, '2013-12-25 17:29:28', '2013-12-25 17:29:28'),
(22, 0, 'FREE', 'Rs 3499(C)/2499(S)', 'Special New Year''s Eve Party', 0, 0, 0, '2013-12-25 17:39:09', '2013-12-25 17:39:09'),
(23, 0, 'FREE', '2', '4', 0, 0, 0, '2013-12-25 22:59:10', '2013-12-25 22:59:10'),
(24, 0, 'OFF', '', '', 20, 100, 80, '2013-12-26 01:44:21', '2013-12-26 01:44:21'),
(25, 0, 'OFF', '', '', 999, 3500, 71.46, '2013-12-26 12:43:27', '2013-12-26 12:43:27'),
(26, 0, 'OFF', '', '', 15730, 31460, 50, '2013-12-26 22:59:29', '2013-12-26 22:59:29'),
(27, 0, 'OFF', '', '', 20, 1, -1900, '2013-12-28 10:05:36', '2013-12-28 10:05:36'),
(28, 0, 'OFF', '', '', 399, 602, 34, '2014-01-07 11:41:45', '2014-01-07 11:41:45'),
(29, 0, 'OFF', '', '', 500, 1000, 50, '2014-01-07 12:13:20', '2014-01-07 12:13:20'),
(30, 0, 'OFF', '', '', 1750, 2500, 30, '2014-01-23 00:39:57', '2014-01-23 00:39:57'),
(31, 0, 'OFF', '', '', 800, 1000, 20, '2014-01-23 00:41:07', '2014-01-23 00:41:07'),
(32, 0, 'OFF', '', '', 900, 1000, 10, '2014-01-23 00:42:25', '2014-01-23 00:42:25'),
(33, 0, 'OFF', '', '', 240, 300, 20, '2014-01-23 00:44:34', '2014-01-23 00:44:34'),
(34, 0, 'FREE', 'Free Foot Massage', '2 Hair Spas( Within 45 Days)', 0, 0, 0, '2014-01-25 15:19:44', '2014-01-25 15:19:44'),
(35, 0, 'FREE', 'Rs 350/- Only', 'Unlimited Buffet + Beer/Drink', 0, 0, 0, '2014-01-29 21:59:21', '2014-01-29 21:59:21'),
(36, 0, 'OFF', '', '', 280, 350, 20, '2014-01-29 22:11:20', '2014-01-29 22:11:20'),
(37, 0, 'OFF', '', '', 280, 350, 20, '2014-01-29 22:14:50', '2014-01-29 22:14:50'),
(38, 0, 'OFF', '', '', 500, 1000, 50, '2014-01-29 22:44:22', '2014-01-29 22:44:22'),
(39, 0, 'OFF', '', '', 1700, 2000, 15, '2014-01-29 22:47:41', '2014-01-29 22:47:41'),
(40, 0, 'OFF', '', '', 293.25, 345, 15, '2014-01-30 10:31:26', '2014-01-30 10:31:26'),
(41, 0, 'OFF', '', '', 400, 500, 20, '2014-01-30 18:43:49', '2014-01-30 18:43:49'),
(42, 0, 'OFF', '', '', 50, 100, 50, '2014-03-05 00:23:39', '2014-03-05 00:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_deal_headers`
--

CREATE TABLE IF NOT EXISTS `kpn_deal_headers` (
  `kpn_id` int(10) NOT NULL AUTO_INCREMENT,
  `kpn_type` varchar(20) NOT NULL DEFAULT 'Free',
  `title` varchar(100) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `long_desc` varchar(500) NOT NULL,
  `kpn_code` varchar(5) NOT NULL DEFAULT '-1',
  `menu_id` int(10) NOT NULL,
  `time_bound` int(11) NOT NULL,
  `volume` int(10) NOT NULL,
  `orig_volume` int(10) NOT NULL,
  `deal_start_date` datetime NOT NULL,
  `deal_end_date` datetime NOT NULL,
  `image_small` varchar(50) NOT NULL DEFAULT 'media/uploads/koupons/small/unknown.jpg',
  `image_large` varchar(50) NOT NULL DEFAULT 'media/uploads/koupons/large/unknown.jpg',
  `created_by` varchar(100) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `following` int(10) NOT NULL DEFAULT '0',
  `visible` varchar(10000) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`kpn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `kpn_deal_headers`
--

INSERT INTO `kpn_deal_headers` (`kpn_id`, `kpn_type`, `title`, `short_desc`, `long_desc`, `kpn_code`, `menu_id`, `time_bound`, `volume`, `orig_volume`, `deal_start_date`, `deal_end_date`, `image_small`, `image_large`, `created_by`, `creation_date`, `last_update_date`, `status`, `following`, `visible`) VALUES
(1, 'Free', '1 Year Membership 50% Off', 'Claim 1 Year Gym Membership at a special 50% Off', '*Features of 1 Year Membership -\n*Gym - Weight Training, Free Weights & Machinery  \n*Cardio - Cross Trainers, Cycles & Treadmills\n*Steam \n*Showers\n*Temporary Lockers\n*General Trainer\n\nConditions: 1 Coupon Per Person. ', '-1', 4, 1, 0, 100, '2013-12-24 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/1.png', 'media/uploads/koupons/large/1.png', '3', '2013-12-24 08:15:11', '2013-12-24 08:15:11', 'Active', 0, 'normal'),
(2, 'Free', '1 Year Membership + 1 Month Personal Training 40% Off', 'Claim 1 Month Personal Training and a 1 Year Membership at a great 40% Off', '*Features of 1 Year Membership - *Gym - Weight Training, Free Weights & Machinery *Cardio - Cross Trainers, Cycles & Treadmills *Steam *Showers *Temporary Lockers *General Trainer\r\n*1 Month Personal Trainer\r\n Conditions: 1 Coupon Per Person.', '-1', 4, 1, 99, 100, '2013-12-24 00:00:00', '2014-11-07 00:00:00', 'media/uploads/koupons/small/2.png', 'media/uploads/koupons/large/2.png', '3', '2013-12-24 08:26:16', '2013-12-24 08:26:16', 'Active', 0, 'normal'),
(3, 'Free', '10% Discount On Buffet', '10% Off On a Fabulous Buffet Lunch & Dinner at Kerala Kitchen', 'Great Food. Unbelievable Authentic Kerala Ambience.  \r\n*3 Starters\r\n*2 Soup\r\n*3-Non Veg Main Course\r\n*2 Veg Main Course\r\n*Dessert\r\nConditions;\r\n1. Please bring printed mail voucher of the coupon at the time of redemption. \r\n2. Reserve your table at Kerala Kitchen before redeeming Coupon. \r\n3. Only one coupon per bill.\r\n4, Taxes Applicable (5%)', '-1', 1, 1, 100, 100, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/3.png', 'media/uploads/koupons/large/3.png', '10', '2013-12-24 12:03:55', '2013-12-24 12:03:55', 'Block', 0, 'normal'),
(4, 'Free', '10% Discount On A Candle-Light Roof-top Dinner', '10% Off on a Great Romantic Night Out', 'The Fresh Cold Air. Love In the air. Come to Kerala Kitchen to celebrate a great romantic date in a unique Kerala Ambience.\r\nConditions:\r\n1. Only one coupon per bill. 2. Taxes Applicable. 3. Please bring mail voucher of coupon at the time of redemption. 4. Reserve your table before arriving at Kerala Kitchen. 4. Applicable from 1st Jan 2014', '-1', 1, 1, 100, 100, '2013-12-01 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/4.png', 'media/uploads/koupons/large/4.png', '10', '2013-12-24 12:11:21', '2013-12-24 12:11:21', 'Block', 0, 'normal'),
(5, 'Free', '20% Off On Spa Services', 'Avail a great 20% on all Spa related services at Haven', 'Spa Services at Haven include -\r\n*Deep-tissue massage\r\n*Relaxing massage\r\n*Aroma therapy\r\n*Body Scrubbing\r\n*Body Facial\r\nConditions:\r\n1. Please reserve an appointment before claiming the Koupon 2.One Koupon per bill', '-1', 3, 1, 100, 100, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/5.png', 'media/uploads/koupons/large/5.png', '13', '2013-12-24 13:22:09', '2013-12-24 13:22:09', 'Active', 0, 'normal'),
(6, 'Free', '3 Facial Services + Get 1 Free Service', 'Avail 1 Free Facial Sitting Completely Free On Availing 3 Facial Sittings', 'Facial Services Include:\r\n* Pigmentation Facial\r\n* Skin Lightening Facial\r\n* Acne Facial\r\n* Silver Facial\r\n* Haven''s Signature Facial\r\nConditions: 1. Offer Applicable Only For Single Person 2. Please Reserve an Appointment ', '-1', 3, 1, 100, 100, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/6.png', 'media/uploads/koupons/large/6.png', '13', '2013-12-24 13:30:06', '2013-12-24 13:30:06', 'Active', 0, 'normal'),
(7, 'Free', '30% Discount on Buffet', 'Get a 30% discount on Lunch Buffet.', 'Claim this coupon to get a 30% off on an exquisite Lunch Buffet at Best Western Jubilee Ridge. Taxes are not included. Please bring a printed copy of the voucher for verification.', '-1', 1, 1, -1, -1, '2013-12-23 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/7.png', 'media/uploads/koupons/large/7.png', '12', '2013-12-24 14:18:18', '2013-12-24 14:18:18', 'Active', 0, 'normal'),
(8, 'Free', '20% Off On All Food at Urban Grill', 'Avail a one time offer of 20% Off On Food at Urban Grill Till 31st December', 'Urban Grill offers a great Lucknowi Cuisine with authentic Kebabs and Biriyani. Conditions: 1. One Koupon Per BIll 2. Please bring a mail voucher printout before redeeming your Koupon 3. Reserve your table before redeeming your Koupon', '-1', 1, 1, 100, 100, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/8.png', 'media/uploads/koupons/large/8.png', '11', '2013-12-25 12:06:12', '2013-12-25 12:06:12', 'Active', 0, 'normal'),
(9, 'Free', 'One Time Offer Of Rs 400/- Per Sheesha', 'Avail a one time offer of Rs 400/- Only for Sheesha with a great view of the City at Urban Grill', 'Conditions: 1. Not For Sale For Minors 2. Reserve Your table before redemption of Koupon 3. One Koupon per Sheesha', '-1', 1, 1, 100, 100, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/9.png', 'media/uploads/koupons/large/9.png', '11', '2013-12-25 12:09:30', '2013-12-25 12:09:30', 'Active', 0, 'normal'),
(10, 'Free', '10 % On All Food and Beverages', 'Avail a one time offer only of 10% off on all Food and Beverages For Bill Exceeding 1000/-', 'Conditions:\r\n1. Please reserve your table before redeeming your Koupon. 2. Only one Koupon per Bill 3. Bill Should Exceed 1000/- 4. Please bring a printed Voucher along.', '-1', 1, 1, 100, 100, '2013-12-24 00:00:00', '2013-12-31 00:00:00', 'media/uploads/koupons/small/10.png', 'media/uploads/koupons/large/10.png', '5', '2013-12-25 12:19:35', '2013-12-25 12:19:35', 'Active', 0, 'normal'),
(11, 'Free', '10% Off On Sheesha at Coffee Affair', 'Claim 10% Off On Sheesha at your very own Coffee Affair', 'Conditions:\r\nConditions: 1. Not For Sale For Minors 2. Reserve Your table before redemption of Koupon 3. One Koupon per Sheesha ', '-1', 1, 1, 98, 100, '2013-12-24 00:00:00', '2014-09-01 00:00:00', 'media/uploads/koupons/small/11.png', 'media/uploads/koupons/large/11.png', '5', '2013-12-25 12:23:24', '2013-12-25 12:23:24', 'Active', 0, 'normal'),
(12, 'Free', '10% Off On Library Membership', 'Limited offer until 31st January', 'Treasure House is a Children''s Library and Experience center for children.  Located in the beautiful Saptaparni, we have the largest collection of Children''s Books in Hyderabad. We have regular story times on Saturdays. Our aim is to inspire Children to read and to do that we conduct a lot of fun book based events. We also have an open art studio for Children - ArtPlay, where kids can drop-in to do art. Also sell exploration based art kits and host birthday parties. \r\n ', '-1', 6, 1, 100, 100, '2013-12-24 00:00:00', '2014-09-23 00:00:00', 'media/uploads/koupons/small/12.png', 'media/uploads/koupons/large/12.png', '9', '2013-12-25 13:02:03', '2013-12-25 13:02:03', 'Active', 1, 'normal'),
(13, 'Free', 'Buy 4 Get 1 Art-Kit Free', 'A Great Deal On  Exploration Based Art Kits', 'Each ArtPlay kit comes with 1.All the materials required to complete the project 2. A process document, with an image of the completed product plus clear instructions \r\nSalient Features 1.All the kits are developed by Art Experts and tested by target users 2.They are age-appropriate 3.Designed for a creative and pleasurable art experience 4.High quality art materials\r\nConditions: Koupon Valid On Single Transaction\r\nCost Range  Rs150 - Rs 250 ', '-1', 6, 1, 99, 100, '2013-12-24 00:00:00', '2014-02-15 00:00:00', 'media/uploads/koupons/small/13.png', 'media/uploads/koupons/large/13.png', '9', '2013-12-25 13:14:58', '2013-12-25 13:14:58', 'Active', 0, 'normal'),
(14, 'Free', 'Buy 1 Main-Course Get 1 Soft-Drink Free', 'Get A Soft-Drink Completely Free On  Buying 1 Main-Course', 'Offer valid on the below mentioned items:\r\n1. Cuppa Couple Rice\r\n2. Pop-Corn Rice\r\n3. Any Schezwan Rice\r\n4. Biriyani\r\n5. Any sizzler\r\nConditions: 1. 1 Koupon Per Main-Course Item 2. Maximum 2 Koupons per bill', '-1', 1, 1, 50, 50, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/14.png', 'media/uploads/koupons/large/14.png', '1', '2013-12-25 14:02:23', '2013-12-25 14:02:23', 'Active', 0, 'normal'),
(15, 'Free', '15% Off On Any Bill Exceeding 1000/-', 'Avail A Fabulous One-Time Offer Of 15% On Any Bill Exceeding Rs 1000/', 'Conditions:\r\n1. Offer Applicable only on Food & Beverages\r\n2. One Koupon Per Bill\r\n3. Offer Not valid On Hookah, Cigarettes, Soft-Drinks , Water-Bottles', '-1', 1, 1, 50, 50, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/15.png', 'media/uploads/koupons/large/15.png', '1', '2013-12-25 14:07:58', '2013-12-25 14:07:58', 'Active', 0, 'normal'),
(16, 'Free', 'Buy 2 Appetizers Get 1 Mocktail Free', 'Get 1 Thirst Quenching Mocktail Free', 'Conditions:\r\n1. Appetizers Include - Chicken Wings, Chicken Lollipop, Pop-Corn\r\n2. One Koupon Per Bill\r\n3. Not applicable on Soft-Drinks', '-1', 1, 1, 49, 50, '2013-12-24 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/16.png', 'media/uploads/koupons/large/16.png', '1', '2013-12-25 14:12:51', '2013-12-25 14:12:51', 'Active', 1, 'normal'),
(17, 'Free', 'Rs 800 /-* Unlimited Liquor For Corporates ', 'A Great Night At 800 Rs For Corporates', 'Conditions:\r\n1. Please bring your valid Corporate ID Card\r\n2. Offer Valid Only On Selected Domestic Liquor\r\n3. Taxes Applicable\r\n4. Only one Koupon Per Person\r\n5. Offer Valid On Fridays From 8:00 PM - 11:00 PM', '-1', 1, 1, 98, 100, '2013-12-24 00:00:00', '2014-01-31 00:00:00', 'media/uploads/koupons/small/17.png', 'media/uploads/koupons/large/17.png', '8', '2013-12-25 15:02:30', '2013-12-25 15:02:30', 'Block', 0, 'normal'),
(18, 'Free', 'Beer at Rs 100/-', 'Avail Beer at Rs 100/- Only', 'Karaoke Nights Every Wednesday With KJ Anand.\r\nConditions:\r\n1. Carry valid Employer ID Card\r\n2. Valid Only On Wednesday From 8:00 PM - 12:00 PM\r\n3. One Koupon Per Person\r\n4. Valid On IMFL (330 ML)', '-1', 1, 1, 88, 100, '2013-12-24 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/18.png', 'media/uploads/koupons/large/18.png', '8', '2013-12-25 15:15:14', '2013-12-25 15:15:14', 'Block', 0, 'normal'),
(19, 'Free', 'Rs 1299/- (Hair Cut, Pedicure, Manicure) For Men', 'Get A Fabulous Makeover At Just Rs 1299', 'A Great Way To Start The New-Year. Pay Rs 1299 and get a haircut, Pedicure and Manicure all included.\r\nConditions:\r\n1. One Koupon Per Head 2. Service Tax Applicable 3. Prior Appointment Required', '-1', 3, 1, 99, 100, '2013-12-24 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/19.png', 'media/uploads/koupons/large/19.png', '4', '2013-12-25 16:55:04', '2013-12-25 16:55:04', 'Active', 0, 'normal'),
(20, 'Free', 'Rs 1499/- For Women (Hair Cut, Pedicure, Manicure)', 'Get A Fabulous Makeover At Just Rs 1499', 'A Great Way To Start The New-Year. Pay Rs 1499 and get a haircut, Pedicure and Manicure all included. Conditions: 1. One Koupon Per Head 2. Service Tax Applicable 3. Prior Appointment Required\r\n', '-1', 3, 1, -1, -1, '2013-12-24 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/20.png', 'media/uploads/koupons/large/20.png', '4', '2013-12-25 17:01:07', '2013-12-25 17:01:07', 'Active', 0, 'normal'),
(21, 'Free', '15 % Off On All Food & Drinks', 'Avail a Great One-time Offer Of 15%', 'Conditions:\r\n1. Bill should be greater than 1000/-\r\n2. Valid only on IMFL Spirits\r\n3. Please bring printed voucher of the Koupon at payment.', '-1', 1, 1, 60, 100, '2013-12-24 00:00:00', '2014-10-10 00:00:00', 'media/uploads/koupons/small/21.png', 'media/uploads/koupons/large/21.png', '16', '2013-12-25 17:29:28', '2013-12-25 17:29:28', 'Active', 0, 'normal'),
(22, 'Free', 'New Year Eve Party - Rs 3499(Couple) and Rs 2499(Stag)', 'Get Ready For The Best New Year Party Ever.', 'Party your new year away at F Cafe & Lounge. \r\nConditions:\r\n1. Only one Koupon Per Person', '-1', 2, 1, 88, 100, '2013-12-24 00:00:00', '2014-02-13 00:00:00', 'media/uploads/koupons/small/22.png', 'media/uploads/koupons/large/22.png', '16', '2013-12-25 17:39:09', '2013-12-25 17:39:09', 'Block', 0, 'normal'),
(23, 'Free', 'Test 1', 'Test 2', 'Test 3 4 5 6 7 3 46 sadf gds shfs hfs sghdsg hfs', '-1', 1, 0, -1, -1, '2013-12-24 00:00:00', '2099-12-31 00:00:00', 'media/uploads/koupons/small/23.png', 'media/uploads/koupons/large/23.png', '17', '2013-12-25 22:59:10', '2013-12-25 22:59:10', 'Block', 0, 'normal'),
(24, 'Free', 'Test', 'Test', 'Test Test Test Test Test Test Test ', '-1', 5, 0, -1, -1, '2013-12-10 00:00:00', '2099-12-31 00:00:00', 'media/uploads/koupons/small/24.png', 'media/uploads/koupons/large/24.png', '17', '2013-12-26 01:44:21', '2013-12-26 01:44:21', 'Block', 0, 'normal'),
(25, 'Free', 'Whitening Therapy 70 % Discount New Year Offer', 'SKIN WHITENING AND REJUVENATING THERAPY WITH NANO CHARCOAL AND OXYGEN  ', '->Cleanses and Improves skin texture \r\n->Removes Pigmentation, blemishes and spots\r\n->Reduces Lines and wrinkles\r\n->Can treat Acne, Eczema, and even psoriasis\r\n->Smoother  and brighter looking  skin  \r\nâ€¢	A pure oxygen infusion with Charcoal mask,  smoothness, hydrates and firms your skin.\r\n', '-1', 3, 1, 25, 30, '2013-12-26 00:00:00', '2014-01-27 00:00:00', 'media/uploads/koupons/small/25.png', 'media/uploads/koupons/large/25.png', '6', '2013-12-26 12:43:26', '2013-12-26 12:43:26', 'Active', 0, 'normal'),
(26, 'Free', '1 Year Membership at 50% Off', 'Claim one-time offer of one-year membership at 50% Off', '*Features of 1 Year Membership - *Gym - Weight Training, Free Weights & Machinery *Cardio - Cross Trainers, Cycles & Treadmills *Steam *Showers *Temporary Lockers *General Trainer Conditions: 1 Coupon Per Person.', '-1', 4, 1, 199, 200, '2013-12-24 00:00:00', '2014-01-31 00:00:00', 'media/uploads/koupons/small/26.png', 'media/uploads/koupons/large/26.png', '3', '2013-12-26 22:59:29', '2013-12-26 22:59:29', 'Active', 0, 'normal'),
(27, 'Free', 'New Year Mix', '20% off post New Year Celebrations: 12 am - 2am', 'Menchie''s Frozen Yogurt:  Jubilee Hills ushers in its first new year\r\nand to celebrate the occasion we give 20% off of every mix!\r\n', '-1', 1, 1, -1, -1, '2014-01-01 00:00:00', '2014-01-01 00:00:00', 'media/uploads/koupons/small/27.png', 'media/uploads/koupons/large/27.png', '2', '2013-12-28 10:05:36', '2013-12-28 10:05:36', 'Active', 0, 'normal'),
(28, 'Free', 'Unlimited Lunch Buffet at Rs.399 inclusive of tax.', 'Unlimited great food at unbelievable prices at Red Fox Hotels', 'Conditions:\r\n1. One koupon per person\r\n2. Bring printed mail voucher at the time of redeeming.\r\n3. Please reserve your table before arriving at Red Fox.\r\n\r\n', '-1', 1, 1, 158, 200, '2014-01-05 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/28.png', 'media/uploads/koupons/large/28.png', '18', '2014-01-07 11:41:45', '2014-01-07 11:41:45', 'Block', 0, 'normal'),
(29, 'Free', '50% Off at SLounge Lemon Tree', 'Avail great drinks and food at the fabulous SLounge, Lemon Tree', 'Conditions:\r\n1. Valid from 5:30 - 8:30 PM\r\n2. One Koupon Per Person\r\n3. Reserve your table before redeeming your Koupon\r\n4. Discount applies only to Liquor', '-1', 1, 1, -1, -1, '2014-01-05 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/29.png', 'media/uploads/koupons/large/29.png', '19', '2014-01-07 12:13:20', '2014-01-07 12:13:20', 'Active', 0, 'normal'),
(30, 'Free', '30% Off On Accomodation', 'Stay at the luxurious Majestica Inn at never before prices', 'Conditions\r\n1.Only one koupon per person\r\n2.Reach out to Majestica Inn For Any Queries/Bulk Bookings\r\n3.Taxes applicable\r\n4.Tariff - Delux Room - Single(Rs 2500) & Double(Rs 2800)\r\n           Luxury Room- Single(Rs 3000) & Double(Rs 3500)', '-1', 10, 1, -1, -1, '2014-01-22 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/30.png', 'media/uploads/koupons/large/30.png', '14', '2014-01-23 00:39:57', '2014-01-23 00:39:57', 'Active', 0, 'normal'),
(31, 'Free', '20% On Drinks', 'Get an Exclusive offer of 20% Off on all drinks at Majestica', 'Conditions\r\n1.Only one koupon per person\r\n2.Reserve your table mandatorily before arriving at Majestica Inn\r\n3.Reach out to Majestica Inn For Any Queries/Bulk Bookings\r\n4.Offer not valid on Fridays\r\n5.Offer not valid on Beer. Only 10% Off On Beer.\r\n6.Taxes applicable\r\n', '-1', 1, 1, -1, -1, '2014-01-22 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/14.png', 'media/uploads/koupons/large/31.png', '14', '2014-01-23 00:41:07', '2014-01-23 00:41:07', 'Active', 0, 'normal'),
(32, 'Free', '10% Off On All Food', 'Get an exclusive offer of 10% On all Food at Majestica Inn', 'Conditions\r\n1. Only One koupon per person   \r\n2. Reserve your table mandatorily before arriving at Majestica. \r\n3. Reach out to Majestica Inn For Any Queries/Bulk Bookings\r\n4. Taxes Applicable\r\n5. Not valid On Lunch Buffet', '-1', 1, 1, -1, -1, '2014-01-22 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/15.png', 'media/uploads/koupons/large/32.png', '14', '2014-01-23 00:42:24', '2014-01-23 00:42:24', 'Active', 0, 'normal'),
(33, 'Free', '20% Off On Lunch Buffet', 'Get an exclusive offer of Buffet only at Rs 240*/-', 'Conditions: \n1. Only One koupon per person   \n2. Reserve your table mandatorily before arriving at Majestica. \n3. Offer of 20% Off On Lunch Buffet only\n4. Reach out to Majestica Inn For Any Queries/Bulk Bookings\n5. Taxes Applicable', '-1', 1, 1, -1, -1, '2014-01-22 00:00:00', '2015-12-20 00:00:00', 'media/uploads/koupons/small/16.png', 'media/uploads/koupons/large/33.png', '14', '2014-01-23 00:44:34', '2014-01-23 00:44:34', 'Active', 0, 'normal'),
(34, 'Free', 'Free Foot Massage ', 'Claim A Rs 400/- Free Foot Massage at Juice Salon', 'Conditions: 1. One Koupon Per Head 2. Service Tax Applicable 3. Prior Appointment Required 4. Book 2 Hair Spas (Within 45 Days) 5. Foot Massage Duration (20 Mins)', '-1', 3, 1, -1, -1, '2014-01-22 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/34.png', 'media/uploads/koupons/large/34.png', '4', '2014-01-25 15:19:44', '2014-01-25 15:19:44', 'Active', 0, 'normal'),
(35, 'Free', 'Rs 350 for Buffet + A Beer/Drink', 'Avail an exclusive deal of Rs 350 for a lavish unlimited Buffet plus a Beer/Drink at Shamrock', 'Conditions: \r\n1. Only One koupon per person \r\n2. Reserve your table mandatorily before arriving at Shamrock\r\n3. Offer Valid Only On Every Friday\r\n4. Reach out to Shamrock For Any Queries/Bulk Bookings\r\n5. Taxes Included\r\n', '-1', 1, 1, -1, -1, '2014-01-28 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/35.png', 'media/uploads/koupons/large/35.png', '8', '2014-01-29 21:59:20', '2014-01-29 21:59:20', 'Active', 0, 'normal'),
(36, 'Free', 'Unlimited Lunch Buffet at Rs 280*/-', 'Get a 20% Off On a Lavish Lunch Buffet at Holi - Restaurant & Bar', 'Conditions: \n1. Only One koupon per person \n2. Reserve your table mandatorily before arriving at Holi \n3. Offer of 20% Off On Lunch Buffet only\n4. Reach out to Holi For Any Queries/Bulk Bookings\n5. Taxes Applicable\n6. Offer Valid Only After Feb 5th Onwards', '-1', 1, 1, -1, -1, '2014-01-28 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/36.png', 'media/uploads/koupons/large/36.png', '8', '2014-01-29 22:11:20', '2014-01-29 22:11:20', 'Block', 0, 'normal'),
(37, 'Free', 'Unlimited Lunch Buffet at Rs 280*/-', 'Get a 20% Off On a Lavish Lunch Buffet at Holi - Restaurant & Bar', 'Conditions: \r\n1. Only One koupon per person \r\n2. Reserve your table mandatorily before arriving at Holi \r\n3. Offer of 20% Off On Lunch Buffet only\r\n4. Reach out to Holi For Any Queries/Bulk Bookings\r\n5. Taxes Applicable\r\n6. Offer Valid Only After Feb 5th Onwards', '-1', 1, 1, -1, -1, '2014-01-28 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/37.png', 'media/uploads/koupons/large/37.png', '27', '2014-01-29 22:14:50', '2014-01-29 22:14:50', 'Active', 0, 'normal'),
(38, 'Free', '50 % Off On Drinks', 'Avail a exclusive fantastic offer of 50%Off On Drinks', 'Conditions:\r\n1. Offer Valid On Selected Drinks Only\r\n2. Valid From Sunday to Friday (12:00 PM - 8:00 PM)\r\n3. Book your table before arriving at Shamrock\r\n4. Taxes Applicable', '-1', 1, 1, -1, -1, '2014-01-28 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/38.png', 'media/uploads/koupons/large/38.png', '8', '2014-01-29 22:44:21', '2014-01-29 22:44:21', 'Active', 1, 'normal'),
(39, 'Free', '15 % Off On All Food & Drinks', 'Avail a Great One-time Offer Of 15%', 'Conditions: \n1. Bill should be greater than 2000/- \n2. Valid only on IMFL Spirits \n3. Please bring printed voucher of the Koupon at payment.\n4. Book your reservation before arriving at F-Cafe\n5. Taxes applicable', '-1', 1, 1, -1, -1, '2014-01-28 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/39.png', 'media/uploads/koupons/large/39.png', '16', '2014-01-29 22:47:41', '2014-01-29 22:47:41', 'Active', 0, 'normal'),
(40, 'Free', '15% Off On Lunch Buffet', 'Avail an exclusive  Lunch Buffet  @Rs 292/- Only at Banana Leaf', 'Conditions:\r\n1. Applicable on Lunch\r\n2. Taxes Included\r\n3. Please reserve your table before arriving at Banana Leaf\r\n4. Only one Koupon per person', '-1', 1, 1, 91, 100, '2014-01-29 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/40.png', 'media/uploads/koupons/large/40.png', '29', '2014-01-30 10:31:25', '2014-01-30 10:31:25', 'Active', 1, 'normal'),
(41, 'Free', '20% Off on Beginner Horse Riding Classes', 'Avail this exclusive offer and initiate you Horse Riding Training', 'Please read the following notification:\r\n1. Call the provided contact number before redeeming koupon.\r\n2. Class timings are from 6:00 a.m. to 8:30 a.m. & 4:00 p.m. to 6:30 p.m. (Closed on Monday)\r\n3. This offer includes 30 minute ride + introductory training class.\r\n4. Open to any age group.', '-1', 9, 1, -1, -1, '2014-01-30 00:00:00', '2014-07-31 00:00:00', 'media/uploads/koupons/small/41.png', 'media/uploads/koupons/large/41.png', '30', '2014-01-30 18:43:48', '2014-01-30 18:43:48', 'Active', 2, 'normal'),
(42, 'Free', 'a', 'a', 'saf adf asf ad as  sdfas a dsf asd asd  as fasd asd ', '-1', 2, 0, 0, 2, '2014-03-04 00:00:00', '2099-12-31 00:00:00', 'media/uploads/koupons/small/42.png', 'media/uploads/koupons/large/42.png', '20', '2014-03-05 00:23:39', '2014-03-05 00:23:39', 'Active', 0, 'normal'),
(43, 'Free', '20% Off On Simon Products', '20% Off On Simon Products', '20% Off On Simon Products. Check out our awesome new webstore', '-1', 1, 0, -1, -1, '2014-01-01 00:00:00', '2099-12-31 00:00:00', 'media/uploads/koupons/small/43.png', 'media/uploads/koupons/large/43.png', '33', '2014-09-10 12:56:35', '2014-09-10 12:56:35', 'Active', 0, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_featured_deals`
--

CREATE TABLE IF NOT EXISTS `kpn_featured_deals` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `kpn_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kpn_featured_deals`
--

INSERT INTO `kpn_featured_deals` (`uid`, `kpn_id`, `start_date`, `end_date`, `location`, `img`) VALUES
(1, 41, '2014-09-01', '2014-09-21 00:00:00', 'Hyderabad', 'img/banners/hyd/horse.jpg'),
(2, 37, '2014-09-01', '2014-09-21 00:00:00', 'Hyderabad', 'img/banners/hyd/holi.jpg'),
(3, 35, '2014-09-01', '2014-09-21 00:00:00', 'Bangalore', 'img/banners/ban/shamrock.jpg'),
(4, 33, '2014-09-01', '2014-09-21 00:00:00', 'Bangalore', 'img/banners/ban/majesticabuffet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_menu_classes`
--

CREATE TABLE IF NOT EXISTS `kpn_menu_classes` (
  `menu_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_update_date` datetime NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kpn_menu_classes`
--

INSERT INTO `kpn_menu_classes` (`menu_id`, `name`, `last_update_date`, `menu_image`) VALUES
(0, 'All', '2013-09-21 21:08:52', ''),
(1, 'Food&Drinks', '2013-09-21 21:09:15', 'img/cat/food.jpg'),
(2, 'Events', '2013-09-21 21:09:42', ''),
(3, 'Beauty', '2013-09-21 21:09:53', ''),
(4, 'Fitness', '2013-09-21 23:05:46', ''),
(5, 'Electronics', '2013-09-21 23:06:06', ''),
(6, 'Kids', '2013-09-21 23:06:16', ''),
(7, 'Fashion', '2013-09-21 23:06:28', ''),
(8, 'Shopping', '2013-09-21 23:06:39', ''),
(9, 'Activities', '2013-09-21 23:06:53', ''),
(10, 'Travel', '2013-09-21 23:07:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_merchant_address`
--

CREATE TABLE IF NOT EXISTS `kpn_merchant_address` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address_line1` varchar(500) NOT NULL,
  `address_line2` varchar(500) NOT NULL,
  `address_line3` varchar(500) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kpn_merchant_address`
--

INSERT INTO `kpn_merchant_address` (`sno`, `uid`, `mobile`, `address_line1`, `address_line2`, `address_line3`, `longitude`, `latitude`) VALUES
(1, 2, 9441402820, 'Plot No 283', 'Road No 78', 'Film Nagar', 78.399864, 17.412769),
(2, 2, 9885431923, 'Madhapur', 'Near Police Station', 'Opp. Mercidise Benz Showroom', 17.412011, 78.435019);

-- --------------------------------------------------------

--
-- Table structure for table `kpn_merchant_details`
--

CREATE TABLE IF NOT EXISTS `kpn_merchant_details` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(500) DEFAULT NULL,
  `short_code` varchar(5) NOT NULL DEFAULT 'KPN',
  `last_kpn` int(6) NOT NULL DEFAULT '1000',
  `about_me` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `gplus` varchar(100) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `business_type` varchar(20) NOT NULL DEFAULT 'Onsite',
  `address_line1` varchar(500) DEFAULT NULL,
  `address_line2` varchar(500) NOT NULL,
  `address_line3` varchar(500) NOT NULL,
  `city` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'media/uploads/merchants/unknown.jpg',
  `merchant_type` varchar(20) NOT NULL DEFAULT 'OnSite',
  `access_code` int(3) NOT NULL DEFAULT '100',
  `status` varchar(20) NOT NULL DEFAULT 'Not Validated',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `kpn_merchant_details`
--

INSERT INTO `kpn_merchant_details` (`uid`, `company_name`, `short_code`, `last_kpn`, `about_me`, `email`, `website`, `twitter`, `facebook`, `gplus`, `mobile`, `business_type`, `address_line1`, `address_line2`, `address_line3`, `city`, `state`, `country`, `longitude`, `latitude`, `update_date`, `creation_date`, `image`, `merchant_type`, `access_code`, `status`) VALUES
(-1, 'PasteOnMyCity', 'POM', 1000, 'Admin', 'admin@PasteOnMyCity.com', '', 'twitter', 'facebook', 'googleplus', 9849859336, 'Onsite', 'line1', 'line2', 'line3', 'Hyd', 'AP', 'India', 25, 25, '2013-12-04 00:00:00', '2013-12-04 00:00:00', 'images/admin.jpg', 'OnSite', 100, 'Admin'),
(1, 'Cuppa - Life Refresh', 'CLR', 1000, 'It is said that A coffee.... Wherever it is grown, sold, brewed, and consumed, there will be lively controversy, strong opinions, and good conversation @Cuppa-Banjara Hills. @9030929999 @9000444478.', 'inception.capulus@cuppastop.com', '', '', '', '', 9885495825, 'Onsite', 'Road No 22', 'Timberland Showroom Backside', 'Pedamma Temple Jubilee Hills', 'Hyderabad', 'Andhra Pradesh', 'India', 17.435718, 78.405558, '2013-12-18 15:51:35', '2013-12-18 15:51:35', 'media/uploads/merchants/1.png', 'OnSite', 100, 'Validated'),
(2, 'Menchies Frozen Yogurt', 'MFY', 1001, 'Unique Self Serve Frozen Yogurt Store', 'c@12cube.in', 'http://www.menchis.com', '', 'menchiesjubileehills', '', 9885558555, 'Onsite', 'Plot no 243', 'Road No 36', 'Jubilee Hills', 'Hyderabad', 'Andhra Pradesh', 'India', 17.430478, 78.411729, '2013-12-18 16:22:14', '2013-12-18 16:22:14', 'media/uploads/merchants/2.png', 'OnSite', 100, 'Validated'),
(3, 'Odel Solid Fitness ', 'OSF', 1001, 'Leading chain of Fitness studio in Hyderabad.', 'odelfilmnagar@gmail.com', '', '', '', '', 8885288245, 'Onsite', 'Plot NO:13 ,Road No :71 ,', 'Film Nagar , Jubilee Hill, Hyd.', 'Beside Bharathi vidhya bhavan school', 'Hyderabad', 'Andhra pradesh', 'INDIA', 17.417462, 78.410802, '2013-12-19 08:59:24', '2013-12-19 08:59:24', 'media/uploads/merchants/3.png', 'OnSite', 100, 'Validated'),
(4, 'Juice Salon', 'JS', 1000, 'Juice is India''s trendiest salon chain with over 18 branches across metros and mini metros catering to the beauty needs of ardent fashion followers, trendsetters and celebrities. Our services are spread in the hair, beauty and nail categories. \r\n\r\nJuice claims to be an extremely stylish, funky, international and cool. \r\n', 'juice_salon@rediffmail.com', '', '', 'juicesalon', '', 65740003, 'Onsite', '270', 'Road No 10 ', 'Jubilee Hills, Karur Vysya Bank', 'Hyderabad', 'Andhra Pradesh', 'India', 17.435698, 78.413025, '2013-12-19 10:18:33', '2013-12-19 10:18:33', 'media/uploads/merchants/4.png', 'OnSite', 100, 'Validated'),
(5, 'Coffee Affair', 'CA', 1000, 'The best coffee shop in Hyderabad. Great drinks, food and unlimited Sheesha. Website: www.coffeeaffair.in', 'coffeeaffairs7272@gmail.com', '', '', '', '', 8978672399, 'Onsite', 'Banjara Hills', 'Road No 10', '500034', 'Hyderabad', 'Andhra Pradesh', 'India', 17.419934, 78.439094, '2013-12-19 12:19:06', '2013-12-19 12:19:06', 'media/uploads/merchants/5.png', 'OnSite', 100, 'Validated'),
(6, 'Eternesse Anti Aging Clinic', 'EAAC', 1000, 'Eternesse Anti Aging Clinic helps conduct cosmetic enhancement for both men and women. At Eternesse Anti Aging Clinic we care and that reflects in our approach. We do not rush headlong into any procedure or treatment.', 'rudra.eternesse@gmail.com', '', '', 'eternesse', '109268082876718822383', 9490209020, 'Onsite', 'Eternesse Anti Aging Clinic', 'Plot No 343/A, Road no 10,', 'Jubilee Hills, Near Peddamma Temple', 'Hyderabad', 'Andhra Pradesh', 'India', 78.408853, 17.433831, '2013-12-19 15:04:07', '2013-12-19 15:04:07', 'media/uploads/merchants/6.png', 'OnSite', 100, 'Validated'),
(7, 'Twister - Sports Pub', 'TSP', 1000, 'The best sports pub in Hyderabad. Come and have a drink with us.', 'naveen@twistersportspub.com', '', '', 'twistersportspub', '', 7799883899, 'Onsite', '1st Floor,', 'Srishti Towers', 'Above Pizza Hut, Madhapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.446179, 78.386096, '2013-12-19 16:01:30', '2013-12-19 16:01:30', 'media/uploads/merchants/7.png', 'OnSite', 100, 'Validated'),
(8, 'Shamrock - The Irish Bar', 'SIB', 1008, 'Hyderabad''s first and only Irish Bar.', 'shamrockhyd@gmail.com', '', '', '', '', 8886989333, 'Onsite', 'SBR Gateway', 'Hi-Tech City', 'Opp Cyber Gateway', 'Hyderabad', 'Andhra Pradesh', 'India', 17.43356, 78.36686, '2013-12-19 16:45:39', '2013-12-19 16:45:39', 'media/uploads/merchants/8.png', 'OnSite', 100, 'Validated'),
(9, 'Treasure House', 'TH', 1000, 'Treasure House is Hyderabadâ€™s only exclusive Childrenâ€™s library and experience center. A place where children can discover the world and themselves through reading and related fun activities.', 'info@treasurehouse.in', '', '', 'iliketreasurehouse', '', 23355118, 'Onsite', 'Plot No 21', 'Road No 8', 'Banjara Hills, Located Inside Saptaparini', 'Hyderabad', 'Andhra Pradesh', 'India', 17.417365, 78.445578, '2013-12-20 10:12:53', '2013-12-20 10:12:53', 'media/uploads/merchants/9.png', 'OnSite', 100, 'Validated'),
(10, 'Kerala Kitchen', 'KK', 1000, 'Delicacies from God''s own country at the best prices.', 'noblemathews007@gmail.com', '', '', '', '', 8185991483, 'Onsite', '4th Floor', 'QZ Plaza', 'Near Harsha Toyota Kondapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.47283, 78.366112, '2013-12-20 13:38:22', '2013-12-20 13:38:22', 'media/uploads/merchants/10.png', 'OnSite', 100, 'Validated'),
(11, 'Urban Grill', 'UG', 1000, 'Your taste buds are excited because they are asking themselves, what is happening here.\r\n', 'attlurimurali16@gmail.com', '', '', '', '', 4066611987, 'Onsite', '5th Floor', 'Kimtee Square, Road No 12', 'Banjara Hills', 'Hyderabad', 'Andhra Pradesh', 'India', 17.412011, 78.435019, '2013-12-20 15:55:48', '2013-12-20 15:55:48', 'media/uploads/merchants/11.png', 'OnSite', 100, 'Validated'),
(12, 'Best Western Jubilee Ridge', 'BWJR', 1000, 'Best Western Hyderabad - 3 Star Business Class Hotel', 'gm@jubileeridge.com', '', '', '', '', 4045679999, 'Onsite', 'Plot No 38 & 39,', 'Kavari Hills, ', 'Exstension Of Road No 36, Jubilee Hills', 'Hyderabad', 'Andhra Pradesh', 'India', 17.440713, 78.398499, '2013-12-21 10:58:08', '2013-12-21 10:58:08', 'media/uploads/merchants/12.png', 'OnSite', 100, 'Validated'),
(13, 'Haven - Salon and Spa', 'HSS', 1000, 'Haven - Salon and Spa located at Madhapur, Hyderabad.', 'jk_sikder45@yahoo.co.in', '', '', '', '', 9966467028, 'Onsite', 'N Square Building', 'Kavuri Hills, Phase 2', 'Durgam Cheruvu Road, Opp SBH Madhapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.434224, 78.39334, '2013-12-21 13:45:03', '2013-12-21 13:45:03', 'media/uploads/merchants/13.png', 'OnSite', 100, 'Validated'),
(14, 'Majestica', 'MMCRB', 1000, 'Premium business class hotel with world class restaraunt and banquet services.', 'majesticainn.kondapur@gmail.com', '', '', 'MajesticaInnOfficial', '', 8790794567, 'Onsite', '#2-41/2A, S.Y No 4, 2nd Floor, ', 'Pavan Priyanka Plaza, Opp Harsha Toyota', 'Kondapur, Kothaguda X Roads', 'Hyderabad', 'Andhra Pradesh', 'India', 17.460979, 78.366013, '2013-12-21 17:38:40', '2013-12-21 17:38:40', 'media/uploads/merchants/14.png', 'OnSite', 100, 'Validated'),
(15, 'Mocha', 'MCH', 1000, 'The best coffee shop in Hyderabad', 'akula_karthik88@yahoo.com', '', '', '', '', 9052070107, 'Onsite', '8/2/574/B Plot No 97', 'Road No 7', 'Banjara Hills', 'Hyderabad', 'Andhra Pradesh', 'India', 17.418808, 78.444881, '2013-12-23 12:00:21', '2013-12-23 12:00:21', 'media/uploads/merchants/15.png', 'OnSite', 100, 'Validated'),
(16, 'F Cafe & Lounge', 'FCL', 1039, 'Great Drinks. Great Food. Great Music', 'aniljoshuad@gmail.com', '', '', '', '', 9000060101, 'Onsite', '2/91/9 BKR Hotels', 'Besides Suraksha Signature, Opp TCS', 'Kothaguda, Kondapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.457673, 78.368942, '2013-12-23 13:28:52', '2013-12-23 13:28:52', 'media/uploads/merchants/16.png', 'OnSite', 100, 'Validated'),
(17, 'Magic Bus Ventures', 'MBV', 1000, 'The Best Startup In Hyderabad. We are awesome', 'krishnasaichintala@gmail.com', '', '', '', '', 315891245, 'Onsite', 'adfasgabfh', 'agdsh', 'asgdsg', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2013-12-25 22:55:26', '2013-12-25 22:55:26', 'media/uploads/merchants/17.png', 'OnSite', 100, 'Validated'),
(18, 'Red Fox Hyderabad', 'RFH', 1000, 'Red Fox Hotel a partner of Lemon Tree hotels', 'fnb.rfhy@lemontreehotels.com', '', '', '', '', 8008501815, 'Onsite', 'Plot No 2, Survey No. 64', 'HI-TEC City', 'Madhapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.442966, 78.37658, '2014-01-07 11:32:47', '2014-01-07 11:32:47', 'media/uploads/merchants/18.png', 'OnSite', 100, 'Validated'),
(19, 'LEMON TREE PREMIER HYDERABAD', 'LTPR', 1000, 'REPUBLIC OF NOODLES AWARD WINNING PAN -ASIAN RESTAURANT', 'arun.gupta@lemontreehotels.com', '', '', '', '', 8008204022, 'Onsite', 'Plot No 2', 'Survey No 64', 'HiTech City', 'Hyderabad', 'Andhra Pradesh', 'India', 17.442966, 78.37658, '2014-01-07 12:04:38', '2014-01-07 12:04:38', 'media/uploads/merchants/19.png', 'OnSite', 100, 'Validated'),
(20, 'abc', 'ABC', 1002, 'abc co provides abc products thank you', 'abc@gmail.com', '', '', '', '', 1234567891, 'Onsite', '10', 'kelawala', 'nagar bhuvanroad', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-01-09 09:46:24', '2014-01-09 09:46:24', 'media/uploads/merchants/20.png', 'OnSite', 100, 'Validated'),
(21, 'abc', 'ABC1', 1000, 'abc co provides products of abc.thank you', 'abc1@gmail.com', '', '', '', '', 1234567891, 'Onsite', '10', 'kelawala', 'nagar bhuvanroad', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-01-09 09:50:33', '2014-01-09 09:50:33', 'media/uploads/merchants/21.png', 'OnSite', 100, 'Not Validated'),
(22, 'abc', 'ABC2', 1000, 'abc co provides products for abc co. thank you', 'abcjackson251@gmail.com', '', '', '', '', 1234567891, 'Onsite', '10', 'kelawala', 'nagar bhuvanroad', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-01-09 09:59:31', '2014-01-09 09:59:31', 'media/uploads/merchants/22.png', 'OnSite', 100, 'Not Validated'),
(23, 'Rush Sports Cafe & Bar', 'RSCB', 1000, 'Rush Sports Bar invites you to live the spirit of sports in an electrifying environment of fun, gaming and entertainment, offering a diverse drink & dine menu, exclusive bowling alley, pool tables, gaming consoles and an uncompromised sports viewing!', 'satya@rushsportsbar.com', '', '', '', '', 8008003701, 'Onsite', 'Above Ratnadeep Supermarket', 'Hi-Tech City', 'Madhapur - 500081', 'Hyderabad', 'Andhra Pradesh', 'India', 78.3846, 17.44598, '2014-01-18 16:15:24', '2014-01-18 16:15:24', 'media/uploads/merchants/23.png', 'OnSite', 100, 'Validated'),
(24, 'Frydayz Multi-Cuisine Restaurant', 'FMCR', 1000, 'A classy fun-together place to hang around with friends and family for a good meal or a drink.', 'frydayzhyd@gmail.com', '', '', '', '', 9246571111, 'Onsite', 'Plot No 22', 'Hitech City Main Road', 'Next to Ratnadeep Supermarket', 'Hyderabad', 'Andhra Pradesh', 'India', 78.3975, 17.65194, '2014-01-20 11:57:10', '2014-01-20 11:57:10', 'media/uploads/merchants/24.png', 'OnSite', 100, 'Validated'),
(25, 'Shade - Multi-Cuisine Restaurant', 'SMCR', 1000, 'Multi-Cuisine restaurant serving Chinese, Indian and Tandoor', 'vishnu_6@hotmail.com', '', '', '', '', 4064639595, 'Onsite', 'Plot No 39 & 40,', 'Arunodaya Colony', 'Opp Corporation Bank, Madhapur', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 17.61472, '2014-01-20 15:51:36', '2014-01-20 15:51:36', 'media/uploads/merchants/25.png', 'OnSite', 100, 'Validated'),
(26, 'Eat 3', 'EAT', 1000, 'Bistro fine dining and Sizzlers right in the heart of Hitech City', 'sunder.reddy@yahoo.com', '', '', '', '', 9989504545, 'Onsite', 'Plot No 7B & 8', 'Jubilee Garden', 'Behind TCS Kondapur', 'Hyderabad', 'Andhra Pradesh', 'India', 78.39833, 17.61139, '2014-01-22 13:24:04', '2014-01-22 13:24:04', 'media/uploads/merchants/26.png', 'OnSite', 100, 'Validated'),
(27, 'Holi Restaurant & Bar', 'HRB', 1004, 'Multi-Cuisine Restaurant & Bar and Banquet Services', 'gvrholi@gmail.com', '', '', '', '', 8008225566, 'Onsite', '2-91/68/TH/6&7, ', 'Opp Botanical Gardens', 'Kondapur', 'Hyderabad', 'Andhra Pradesh', 'India', 17.45006, 78.35024, '2014-01-23 14:18:14', '2014-01-23 14:18:14', 'media/uploads/merchants/27.png', 'OnSite', 100, 'Validated'),
(29, 'Banana Leaf', 'BL', 1009, 'Multi-Cuisine restaurant in the heart of Gachibowli', 'jp@bananaleafhyd.com', '', '', '', '', 8712023339, 'Onsite', '1/58/5/A', 'Gachibowli X Roads', 'Above Bank Of India', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-01-30 10:23:54', '2014-01-30 10:23:54', 'media/uploads/merchants/29.png', 'OnSite', 100, 'Validated'),
(30, 'HHRS - Hyderabad Horse Riding School', 'HHRS', 1012, 'The Hyderabad Horse Riding School has gained recognition as the only location in the Heart of Hyderabad City where the community and tourists alike can enjoy horses in a recreational, therapeutic or competitive fashion, all in a safe, fun and family environment. Under the leadership of Mr. Abdul wahab President and Chief trainer with immense experience, a well known name in India and abroad.\r\n', 'info@hhrs.in', '', '', 'groups/hhrsc/', '', 9908186447, 'Onsite', 'Opposite Street No. 18', 'Gulshan Colony', 'Toli Chowki Beside Seven Tombs', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-01-30 18:08:59', '2014-01-30 18:08:59', 'media/uploads/merchants/30.png', 'OnSite', 100, 'Validated'),
(31, 'Steamz - Coffee Lounge & Restaurant', 'SCLR', 1000, 'We are a specialty coffee lounge with a delectable range of different coffees from around the world along with a wide variety of cuisines to suit your palate. Our place has three spacious floors with a wonderful view from the terrace seating to sit back and relax. Our chefs our highly trained with lots of experience to help serve you well. Please visit us and find yourself immersed in our facilities and as we say come, Awaken your senses.\r\n', 'dhanraj078@gmail.com', '', '', '', '', 4065993344, 'Onsite', 'Road No 1', 'Near Film Nagar Cultural Club', 'Film Nagar', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-02-06 12:50:44', '2014-02-06 12:50:44', 'media/uploads/merchants/31.png', 'OnSite', 100, 'Validated'),
(32, 'Patan Court', 'PC', 1000, 'Moghlai & Lucknowi FIne Dining Restaurant In Jubilee Hills', 'genesis.patancourt@gmail.com', '', '', '', '', 7702327772, 'Onsite', '1335/H, rOAD nO - 45', 'Jubileehills', '', 'Hyderabad', 'Andhra Pradesh', 'India', 0, 0, '2014-02-06 13:25:26', '2014-02-06 13:25:26', 'media/uploads/merchants/32.png', 'OnSite', 100, 'Validated'),
(33, 'Simon Says', 'SMNSY', 1000, 'Simon Says is a fictional company set in Lego Land', 'simon.kunapareddy@gmail.com', '', '', '', '', 9849859336, 'Onsite', '19 Palm County ', 'Dargah Jn ', 'Golconda P.O', 'Hyderabad', 'Telangana', 'India', 78.393057, 17.410096, '2014-09-10 12:40:46', '2014-09-10 12:40:46', 'media/uploads/merchants/33.png', 'OneSite', 100, 'Validated'),
(34, 'AJ Studios', 'AJST', 1000, 'AJ Studios is the one stop shop for all the things you need. We aso Specialize in all kinds of web developement', 'admin@ajstudios.com', '', '', '', '', 9885431923, 'Onsite', 'MIG-II, 51', '9th Phase', 'KPHB Colonny', 'Hyderabad', 'Telangana', 'India', 17.440713, 78.398499, '2014-09-19 19:31:05', '2014-09-19 19:31:05', 'media/uploads/merchants/34.png', 'OneSite', 100, 'Not Validated');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_merchant_followers`
--

CREATE TABLE IF NOT EXISTS `kpn_merchant_followers` (
  `date` date NOT NULL,
  `u-1` int(10) NOT NULL DEFAULT '0',
  `u1` int(10) NOT NULL DEFAULT '0',
  `u2` int(10) NOT NULL DEFAULT '0',
  `u3` int(10) NOT NULL DEFAULT '0',
  `u4` int(10) NOT NULL DEFAULT '0',
  `u5` int(10) NOT NULL DEFAULT '0',
  `u6` int(10) NOT NULL DEFAULT '0',
  `u7` int(10) NOT NULL DEFAULT '0',
  `u8` int(10) NOT NULL DEFAULT '0',
  `u9` int(10) NOT NULL DEFAULT '0',
  `u10` int(10) NOT NULL DEFAULT '0',
  `u11` int(10) NOT NULL DEFAULT '0',
  `u12` int(10) NOT NULL DEFAULT '0',
  `u13` int(10) NOT NULL DEFAULT '0',
  `u14` int(10) NOT NULL DEFAULT '0',
  `u15` int(10) NOT NULL DEFAULT '0',
  `u16` int(10) NOT NULL DEFAULT '0',
  `u17` int(10) NOT NULL DEFAULT '0',
  `u18` int(10) NOT NULL DEFAULT '0',
  `u19` int(10) NOT NULL DEFAULT '0',
  `u20` int(10) NOT NULL DEFAULT '0',
  `u21` int(10) NOT NULL DEFAULT '0',
  `u22` int(10) NOT NULL DEFAULT '0',
  `u23` int(10) NOT NULL DEFAULT '0',
  `u24` int(10) NOT NULL DEFAULT '0',
  `u25` int(10) NOT NULL DEFAULT '0',
  `u26` int(10) NOT NULL DEFAULT '0',
  `u27` int(10) NOT NULL DEFAULT '0',
  `u28` int(10) NOT NULL DEFAULT '0',
  `u29` int(10) NOT NULL DEFAULT '0',
  `u30` int(10) NOT NULL DEFAULT '0',
  `u31` int(10) NOT NULL DEFAULT '0',
  `u32` int(10) NOT NULL DEFAULT '0',
  `u33` int(10) NOT NULL DEFAULT '0',
  `u34` int(10) NOT NULL DEFAULT '0',
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kpn_merchant_followers`
--

INSERT INTO `kpn_merchant_followers` (`date`, `u-1`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `u9`, `u10`, `u11`, `u12`, `u13`, `u14`, `u15`, `u16`, `u17`, `u18`, `u19`, `u20`, `u21`, `u22`, `u23`, `u24`, `u25`, `u26`, `u27`, `u28`, `u29`, `u30`, `u31`, `u32`, `u33`, `u34`) VALUES
('2014-03-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
('2014-03-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-10', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-03-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('2014-04-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-04-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-05-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-06-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-07-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
('2014-07-31', 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-08-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-09-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-10-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-11-04', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2014-11-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-01-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-01-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-01-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-03-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-03-28', 0, -1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 0, 0, 0),
('2015-04-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-04-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-04-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-04-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-07-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-07-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-08-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-09-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2015-09-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kpn_processed_deals`
--

CREATE TABLE IF NOT EXISTS `kpn_processed_deals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `kpn_id` int(10) DEFAULT NULL,
  `kpn_identifier` varchar(500) DEFAULT NULL,
  `user_id` bigint(50) DEFAULT NULL,
  `volume_purchased` int(10) DEFAULT NULL,
  `purchased_date` datetime DEFAULT NULL,
  `claim` varchar(2) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`),
  KEY `FK_kpn_processed_deals_kpn_deal_headers` (`kpn_id`),
  KEY `uid` (`uid`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `kpn_processed_deals`
--

INSERT INTO `kpn_processed_deals` (`id`, `uid`, `kpn_id`, `kpn_identifier`, `user_id`, `volume_purchased`, `purchased_date`, `claim`) VALUES
(1, 17, 23, '831391:162449:', 10, 2, '2013-12-26 01:16:39', 'n'),
(2, 8, 18, '647014:236302:568101:702478:', 15, 4, '2013-12-26 16:46:13', 'n'),
(3, 16, 21, '978719:', 16, 1, '2013-12-26 17:47:32', 'n'),
(5, 16, 22, '897605:', 19, 1, '2013-12-27 19:04:43', 'n'),
(6, 16, 22, '863253:', 22, 1, '2013-12-28 07:05:17', 'n'),
(7, 8, 18, '852894:342060:926232:458391:262402:', 27, 5, '2013-12-28 22:02:03', 'n'),
(8, 5, 11, '326719:495709:', 27, 2, '2013-12-28 22:04:39', 'n'),
(9, 16, 22, '127903:', 29, 1, '2013-12-29 15:15:55', 'n'),
(10, 16, 22, '131800:502380:557062:654529:471435:293259:635147:274028:', 30, 8, '2013-12-29 15:23:59', 'n'),
(11, 16, 22, '591185:', 31, 1, '2013-12-29 15:28:42', 'n'),
(48, 9, 13, '337965:', 32, 1, '2013-12-29 22:03:16', 'n'),
(49, 6, 25, '965975:', 34, 1, '2013-12-31 14:55:33', 'n'),
(50, 12, 7, '375298:649346:', 39, 2, '2014-01-03 14:18:50', 'n'),
(51, 3, 26, '596594:', 6, 1, '2014-01-07 11:18:42', 'n'),
(52, 18, 28, '455100:362381:174413:593440:284584:', 41, 5, '2014-01-08 10:44:53', 'n'),
(53, 6, 25, '394387:722101:239872:', 42, 3, '2014-01-08 13:24:08', 'n'),
(54, 19, 29, '400263:636820:', 43, 2, '2014-01-08 15:52:52', 'n'),
(55, 18, 28, '203854:499094:427216:524579:626818:410696:633008:841292:482460:118101:608704:441180:680963:559647:622623:', 45, 15, '2014-01-08 17:33:02', 'n'),
(56, 12, 7, '557547:254403:347732:387149:149645:', 41, 5, '2014-01-08 23:23:08', 'n'),
(57, 8, 17, '638405:', 6, 1, '2014-01-09 14:00:30', 'n'),
(58, 18, 28, '749034:817114:223911:', 50, 3, '2014-01-09 17:45:16', 'n'),
(59, 18, 28, '884076:779122:665781:', 52, 3, '2014-01-09 23:16:02', 'n'),
(60, 18, 28, '999704:227768:808933:', 52, 3, '2014-01-09 23:16:58', 'n'),
(61, 18, 28, '951307:', 6, 1, '2014-01-10 11:57:14', 'n'),
(62, 19, 29, '751824:', 55, 1, '2014-01-10 14:00:56', 'n'),
(63, 18, 28, '506154:914416:', 57, 2, '2014-01-11 15:04:06', 'n'),
(64, 18, 28, '594202:512344:', 61, 2, '2014-01-12 07:16:07', 'n'),
(65, 17, 23, '722169:784389:', 1, 2, '2014-01-16 22:52:35', 'n'),
(66, 17, 23, '144894:', 5, 1, '2014-01-16 22:57:12', 'n'),
(67, 17, 23, '724785:', 9, 1, '2014-01-16 22:58:35', 'n'),
(68, 6, 25, '578069:', 63, 1, '2014-01-17 19:20:29', 'y'),
(69, 8, 17, '813877:', 65, 1, '2014-01-21 13:26:29', 'n'),
(71, 14, 33, '521199:605439:469091:', 66, 3, '2014-01-23 16:24:29', 'n'),
(72, 18, 28, '486787:353441:787936:', 66, 3, '2014-01-23 16:25:58', 'n'),
(73, 14, 33, '233095:985090:823385:', 73, 3, '2014-01-24 06:04:30', 'n'),
(74, 14, 33, '969776:539715:230031:', 74, 3, '2014-01-24 09:47:45', 'n'),
(75, 14, 33, '974036:989783:350405:', 68, 3, '2014-01-24 10:22:39', 'n'),
(76, 14, 33, '121674:161447:885151:', 75, 3, '2014-01-24 10:40:47', 'n'),
(77, 14, 31, '344365:', 65, 1, '2014-01-25 12:29:22', 'n'),
(78, 8, 18, '905111:143015:696199:', 76, 3, '2014-01-25 12:41:46', 'n'),
(79, 18, 28, '856833:295237:638966:', 81, 3, '2014-01-29 11:25:07', 'n'),
(80, 18, 28, '258471:547257:', 5, 2, '2014-01-29 11:26:44', 'n'),
(81, 27, 37, '681137:', 6, 1, '2014-01-30 12:06:38', 'n'),
(82, 1, 16, '278246:', 85, 1, '2014-01-30 16:04:26', 'n'),
(83, 8, 35, '861774:', 9, 1, '2014-01-30 16:58:00', 'n'),
(84, 14, 31, '948510:561228:383836:', 15, 3, '2014-01-30 17:44:13', 'n'),
(85, 8, 38, '553386:198848:', 80, 2, '2014-02-01 15:59:16', 'n'),
(86, 19, 29, '858253:', 91, 1, '2014-02-01 22:45:31', 'n'),
(87, 20, 42, ' ABC1001:ABC1002:', 1, 2, '2014-03-05 00:24:28', 'n'),
(88, 4, 19, '194124:', 5, 1, '2014-03-06 20:58:09', 'n'),
(89, 8, 38, ' SIB1001:SIB1002:SIB1003:', 5, 3, '2014-04-01 18:10:20', 'n'),
(90, 8, 38, ' SIB1004:SIB1005:SIB1006:', 5, 3, '2014-04-01 18:10:38', 'n'),
(91, 27, 37, ' HRB1001:', 98, 1, '2014-04-04 23:04:01', 'n'),
(92, 8, 35, ' SIB1007:', 98, 1, '2014-04-04 23:05:16', 'n'),
(93, 8, 35, ' SIB1008:', 98, 1, '2014-04-04 23:05:18', 'n'),
(94, 29, 40, ' BL1001:BL1002:', 99, 2, '2014-04-10 16:45:49', 'n'),
(95, 27, 37, ' HRB1002:HRB1003:HRB1004:', 101, 3, '2014-05-24 08:06:49', 'n'),
(96, 29, 40, ' BL1003:BL1004:BL1005:', 99, 3, '2014-05-27 21:59:03', 'n'),
(97, 29, 40, ' BL1006:', 105, 1, '2014-06-25 19:50:37', 'n'),
(98, 30, 41, ' HHRS1001:HHRS1002:', 106, 2, '2014-07-01 15:11:01', 'n'),
(99, 30, 41, ' HHRS1003:HHRS1004:HHRS1005:', 106, 3, '2014-07-14 09:31:17', 'n'),
(100, 30, 41, ' HHRS1006:HHRS1007:HHRS1008:', 106, 3, '2014-07-21 08:39:03', 'n'),
(101, 30, 41, ' HHRS1009:HHRS1010:', 106, 2, '2014-07-21 08:39:34', 'n'),
(102, 29, 40, ' BL1007:BL1008:BL1009:', 106, 3, '2014-07-21 08:40:20', 'n'),
(103, 30, 41, ' HHRS1011:HHRS1012:', 106, 2, '2014-07-24 10:09:29', 'n'),
(104, 16, 21, ' FCL1001:', 7, 1, '2014-09-01 10:21:17', 'n'),
(105, 16, 21, ' FCL1002:FCL1003:', 113, 2, '2014-09-10 12:31:32', 'n'),
(106, 16, 21, ' FCL1004:FCL1005:', 5, 2, '2014-09-17 19:27:38', 'n'),
(107, 16, 21, ' FCL1006:FCL1007:', 5, 2, '2014-09-17 20:15:15', 'n'),
(108, 16, 21, ' FCL1008:FCL1009:', 5, 2, '2014-09-17 20:34:32', 'n'),
(109, 16, 21, ' FCL1010:FCL1011:', 5, 2, '2014-09-17 20:37:04', 'n'),
(110, 16, 21, ' FCL1012:FCL1013:', 5, 2, '2014-09-17 20:39:21', 'n'),
(111, 16, 21, ' FCL1014:', 5, 1, '2014-09-17 20:44:01', 'n'),
(112, 16, 21, ' FCL1015:', 5, 1, '2014-09-17 20:46:56', 'n'),
(113, 16, 21, ' FCL1016:FCL1017:', 5, 2, '2014-09-17 20:55:56', 'n'),
(114, 16, 21, ' FCL1018:FCL1019:', 5, 2, '2014-09-18 08:04:15', 'n'),
(115, 16, 21, ' FCL1020:', 5, 1, '2014-09-18 08:07:46', 'n'),
(116, 16, 21, ' FCL1021:', 5, 1, '2014-09-18 08:11:44', 'n'),
(117, 16, 21, ' FCL1022:FCL1023:', 5, 2, '2014-09-18 08:46:14', 'n'),
(118, 16, 21, ' FCL1024:FCL1025:', 5, 2, '2014-09-18 09:13:59', 'n'),
(119, 16, 21, ' FCL1026:FCL1027:', 5, 2, '2014-09-18 09:17:17', 'n'),
(120, 16, 21, ' FCL1028:', 5, 1, '2014-09-18 09:22:48', 'n'),
(121, 16, 21, ' FCL1029:', 5, 1, '2014-09-18 09:25:03', 'n'),
(122, 16, 21, ' FCL1030:FCL1031:', 5, 2, '2014-09-18 09:28:59', 'n'),
(123, 16, 21, ' FCL1032:FCL1033:', 5, 2, '2014-09-18 09:31:10', 'n'),
(124, 16, 21, ' FCL1034:', 5, 1, '2014-09-18 09:32:57', 'n'),
(125, 16, 21, ' FCL1035:FCL1036:', 5, 2, '2014-09-18 09:35:49', 'n'),
(126, 16, 21, ' FCL1037:', 5, 1, '2014-09-18 09:39:03', 'n'),
(127, 16, 21, ' FCL1038:FCL1039:', 5, 2, '2014-09-18 09:52:28', 'n'),
(129, 3, 2, ' OSF1001:', 7, 1, '2014-09-25 16:24:41', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `kpn_user_login`
--

CREATE TABLE IF NOT EXISTS `kpn_user_login` (
  `user_id` bigint(50) NOT NULL,
  `login_date_time` datetime NOT NULL,
  `user_ip` varchar(50) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kpn_user_profile`
--

CREATE TABLE IF NOT EXISTS `kpn_user_profile` (
  `user_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `user_ip` varchar(50) NOT NULL,
  `creation_date` datetime NOT NULL,
  `activation` varchar(300) DEFAULT 'Done',
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `following` varchar(10000) NOT NULL DEFAULT '-',
  `Column 3` varchar(50) NOT NULL,
  `login_type` varchar(10) NOT NULL,
  `category` varchar(50) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `kpn_user_profile`
--

INSERT INTO `kpn_user_profile` (`user_id`, `email`, `password`, `mobile`, `city`, `user_ip`, `creation_date`, `activation`, `status`, `following`, `Column 3`, `login_type`, `category`) VALUES
(1, 'krishnasaichintala@gmail.com', 'kc', 9493461615, 'hyd', '117.237.179.122', '2013-10-13 00:00:00', 'Done', 'Active', '-30-', '', '', NULL),
(5, 'aniljoshuad@gmail.com', 'joshua', 98854319231, 'Hyderabad', '14.99.68.161', '2013-12-25 00:00:00', 'Done', 'Active', '-14-10-13-19-18-', '', '', '-8-13-5-6-'),
(6, 'arun.corleone@gmail.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.62.6', '2013-12-25 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(7, 'arun.kunapa@gmail.com', 'corleone7', 9710321342, 'Hyderabad', '49.205.62.6', '2013-12-25 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(8, 'arr_gulu@yahoo.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.62.6', '2013-12-25 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(9, 'jkilos@gmail.com', 'Cherry210390', 9652913190, 'Hyderabad', '183.82.18.132', '2013-12-25 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(10, 'aniljoshua@live.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.62.6', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(11, 'kousalya.dwa@gmail.com', 'kou2208', 8897365526, 'Hyderabad ', '106.220.124.151', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(12, 'vineeth_v08@yahoo.com', 'Corleone1', 9745301425, 'kollam', '84.64.67.105', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(13, 'kurmi.vivek@gmail.com', 'k.24lacones', 9008744609, 'hyderabad', '1.186.0.178', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(14, 'jaks.kals@gmail.com', 'Kalyani@1234', 8978907722, 'Hyderabad', '196.15.16.101', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(15, 'cheeralavinay@gmail.com', 'kouponizekouponize', 9502057873, 'Hyderabad', '117.195.129.54', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(16, 'jose.george90@gmail.com', 'gbmjkunn90', 9704619090, 'hyderabad', '49.205.103.94', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(17, 'nihanthsarma@gmail.com', 'Niha@141', 9966849141, 'Hyderabad', '49.206.97.116', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(18, 'parsi.vijay@gmail.com', 'vijaypa9', 9765800045, 'Hyderabad', '94.8.186.143', '2013-12-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(19, 'guptagaurav0075@gmail.com', '9392404633', 8128106118, 'Ahmedabad', '117.196.100.228', '2013-12-27 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(20, 'vanamali71@gmail.com', 'Sairam55', 8801727450, 'Hyderabad', '64.69.195.5', '2013-12-27 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(21, 'ayan.roy100@gmail.com', 'Whiskey123', 9665662226, 'pune', '14.97.84.161', '2013-12-27 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(22, 'acssriram@gmail.com', '123456', 9052877703, 'Hyderabad', '175.101.63.13', '2013-12-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(23, 'bhavishyabhan@gmail.com', 'intertwined', 9811672132, 'delhi ', '115.111.245.194', '2013-12-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(24, '', '', 0, '', '103.246.36.212', '2013-12-28 00:00:00', 'Done', 'Block', '-', '', '', NULL),
(25, 'saurabhpandey1988@gmail.com', 'kanpur@0512', 9096371039, 'pune', '203.15.208.22', '2013-12-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(26, 'kv.prshnt@gmail.com', 'love6435', 9052852996, 'Hyderabad', '49.207.40.252', '2013-12-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(27, 't.narsing22@gmail.com', 'akshaya@123', 8142127444, 'Hyderabad', '14.99.239.144', '2013-12-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(28, 'Akula.sridhara@gmail.com', 'myrani$3', 9885577900, 'Hyderabad', '202.65.148.220', '2013-12-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(29, 'mutukula.sureshkumar@gmail.com', 'mutukula123', 9052765517, 'Hyderabad', '202.65.140.157', '2013-12-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(30, 'naresh2701_km@yahoo.com', 'mutukula', 8978073580, 'Hyderabad', '202.65.140.157', '2013-12-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(31, 'mahesh.mutukula@gmail.com', 'iloveyou@123', 9492199040, 'Hyderabad', '202.65.140.157', '2013-12-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(32, 'ehevendra.naga@gmail.com', 'Nag@satyam', 8978489595, 'Hyderabad', '49.206.161.37', '2013-12-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(33, 'tenish4u@outlook.com', '100183', 9791103080, 'Chennai', '106.208.64.254', '2013-12-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(34, 'matxrocks@gmail.com', 'matxrules', 8885556289, 'hyderabad', '49.207.113.54', '2013-12-31 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(35, 'tksamreen@yahoo.com', 'santas', 9948293614, 'hyderabad ', '183.83.181.55', '2013-12-31 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(36, 'aman.thaur@gmail.com', 'heartandmind', 9246292610, 'Hyderabad', '122.169.174.34', '2014-01-01 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(37, 'vaishuviji12@gmail.com', 'arunviji', 8978875111, 'Hyderabad', '80.84.1.23', '2014-01-01 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(38, 'saimulpuru@gmail.com', 'Ammaisgr8', 8826638642, 'Delhi', '14.139.62.28', '2014-01-02 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(39, 'santoshkumar.mandal@gmail.com', 'swapna143', 9848113631, 'Hyderabad', '220.225.232.237', '2014-01-03 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(40, 'chintumech@gmail.com', 'Nokian8()', 8885220604, 'hyderabad', '49.206.37.75', '2014-01-03 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(41, 'sudheer.sgs2@gmail.com', 'sudheer!23', 8886557722, 'hyderabad', '202.65.142.69', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(42, 'thesandeeparroju@gmail.com', '9293789556', 7799835324, 'Hyderabad', '74.125.63.33', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(43, 'paduchuriaak@gmail.com', 'kouponizeakash', 8143261387, 'Hyderabad', '58.2.238.190', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(44, 'shraddha88888@gmail.com', 'sparmar', 1236547892, 'Vadodara', '123.236.248.229', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(45, 'sabari.vasan1@gmail.com', '9952077976', 8886220609, 'Hyderabad', '202.65.155.22', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(46, 'maheshreddy4995@gmail.com', '9676333499', 9676333499, 'hyderabad', '14.96.107.228', '2014-01-08 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(47, 'soheb_himani2006@yahoo.com', '123456', 9700222338, 'Hyderabad', '122.169.149.33', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(48, 'tejasomina@gmail.com', 'seshagiri', 9985074466, 'Hyderabad', '167.219.48.10', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(49, 'phaninaidu22@gmail.com', 'phani123', 9059464576, 'Hyderabad', '183.82.17.35', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(50, 'neelima.cvr@gmail.com', 'shivoham', 7702050635, 'Hyderabad', '101.223.251.9', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(51, 'shivshankers82@gmail.com', 'ap9bc6561', 9581446551, 'hyderabad', '49.207.113.79', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(52, 'hariprasad.mavidi@gmail.com', 'Sbi5880k', 9948549293, 'hyderabad', '49.204.112.132', '2014-01-09 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(53, 'phmmanojg@gmail.com', 'pharmaceutics1', 9849363915, 'Hyderabad', '202.52.63.2', '2014-01-10 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(54, 'chandu_999@yahoo.com', 'sunny', 9848018910, 'Hyderabad', '170.40.248.195', '2014-01-10 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(55, 'coolchandu@gmail.com', 'sunny', 9848018910, 'Hyderabad', '170.40.248.195', '2014-01-10 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(56, 'mayankdhimmar019@gmail.com', '6268262682', 8980673747, 'Surat', '123.201.171.161', '2014-01-10 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(57, 'rrrrrichard47@gmail.com', 'rajini@123', 9094709626, 'chennai', '106.208.92.125', '2014-01-11 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(58, 'drr_richard@yahoo.co.in', 'rajini@123', 9094709626, 'chennai', '106.208.92.125', '2014-01-11 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(59, 'getkarthik365@gmail.com', 'cheeku43!', 9502023001, 'hyderabad', '49.205.46.114', '2014-01-11 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(60, 'preeti296@gmail.com', 'ganpatiji', 9581220630, 'hyderabad', '122.169.136.10', '2014-01-11 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(61, 'stanley.asirvad@gmail.com', 'stan@666', 9885176777, 'hyderabad', '124.123.175.18', '2014-01-12 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(62, 'yepurikishorekumar@gmail.com', 'Chitti123$', 9849624579, 'Hyderabad', '196.15.16.100', '2014-01-13 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(63, 'lakshmi.kunapareddy59@gmail.com', 'arunminu2', 9441402820, 'Hyderabad', '49.205.35.145', '2014-01-17 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(64, 'shantha_ram@yahoo.com', 'shantha27s', 9885457736, 'hyderabad', '46.235.89.93', '2014-01-20 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(65, 'clammiestqasar@gmail.com', 'dhakansala', 9830378178, 'Chennai', '113.193.115.238', '2014-01-21 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(66, 'sunand13@gmail.com', 'kumarsrinu', 9052233457, 'Hyderabad', '203.99.208.6', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(67, 'saketh_619@yahoo.com', 'saketh', 9652789002, 'Hyderabad', '203.99.208.9', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(68, 'saketh.chalasani@yahoo.com', 'saketh', 9652789002, 'Hyderabad', '203.99.208.9', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(69, 'saketh.chalasani91@gmail.com', 'saketh', 9652789002, 'Hyderabad', '203.99.208.10', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(70, 'navneetnitw@gmail.com', 'Password123$', 9845585432, 'Bangalore', '122.166.154.52', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(71, 'zoeosborne52@gmail.com', 'jesus52', 404223360, 'Sydney', '27.124.37.244', '2014-01-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(72, 'veeranjaneyulu.kummara@gmail.com', 'swathi143', 9030691109, 'hyderabad', '49.205.36.160', '2014-01-24 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(73, 'kveeru422@gmail.com', 'swathi143', 9030691109, 'hyderabad', '49.205.36.160', '2014-01-24 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(74, 'sunand13091990@gmail.com', 'kumarsrinu', 8686743043, 'Hyderabad', '203.99.208.4', '2014-01-24 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(75, 'rahulsingh.padiya@gmail.com', 'rahul143', 8790066673, 'Hyderabad', '203.99.208.5', '2014-01-24 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(76, 'debonildey@gmail.com', 'neel1tukan', 8374522799, 'HYDERABAD', '49.205.32.142', '2014-01-25 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(77, 'hpujitha7@gmail.com', 'poojaprincy', 9014448170, 'hyderabad', '49.205.125.138', '2014-01-26 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(78, 'Rupom_chakraborty@dell.com', '4services#', 8885553218, 'Hyderabad', '125.16.138.141', '2014-01-27 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(79, 'singhdking143@gmail.com', 'singhdking', 9000658498, 'Hyderabad', '49.207.207.240', '2014-01-27 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(80, 'vivekoutlaw@gmail.com', 'utbtca@132in', 9966086352, 'Hyderabad', '49.206.72.51', '2014-01-28 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(81, 'maheshjain1@gmail.com', 'bubby1', 9866653118, 'Hyderabad', '196.15.16.107', '2014-01-29 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(82, 'rufzha@gmail.com', 'Welcome123!', 8978474183, 'Hyderabad', '167.219.48.10', '2014-01-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(84, 'andrew.kunapareddy@gmail.com', 'corleone7', 9849859336, 'Hyderabad', '202.65.129.98', '2014-01-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(85, 'k.chaitanya.5318@gmail.com', 'Nokian8()', 8885220604, 'hyderabad', '1.186.105.83', '2014-01-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(88, 'nani.krishnasai@gmail.com', 'kc', 898, 'kckc', '117.245.104.137', '2014-01-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(89, 'john@kouponize.com', 'john123', 1234, 'Hyderabad', '49.204.216.134', '2014-01-30 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(90, 'suds215@gmail.com', 'mymaster', 9550826662, 'Hyderabad', '202.46.23.55', '2014-01-31 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(91, 'naveenreddy.alka@gmail.com', 'password-1', 9985000453, 'HYDERABAD', '27.7.18.72', '2014-02-01 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(92, 'sreenivasulu.jakkula@gmail.com', 'Omsai123', 9652521256, 'Hyderabad', '12.172.95.252', '2014-02-10 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(93, 'zimbabao@gmail.com', 'zimbabao', 9886094855, 'Bangalore', '122.172.0.109', '2014-02-23 00:00:00', 'Done', 'Active', '-', '', '', NULL),
(94, 'abhisek.nitw@gmail.com', 'See@m311', 8130666262, 'Gurgaon', '119.226.154.75', '2014-03-05 00:00:00', 'Done', 'Active', '', '', '', NULL),
(95, 'areej.s20@gmail.com', 'bluewhal3', 9676513073, 'hyderabad', '14.139.85.202', '2014-03-10 00:00:00', 'Done', 'Active', '', '', '', NULL),
(96, 'matt.lijo@gmail.com', 'l1j0l1j0', 8897252497, 'hyderabad', '49.205.66.31', '2014-03-10 00:00:00', 'Done', 'Active', '8-', '', '', NULL),
(97, 'bheemprakash2011@gmail.com', 'kouponize', 8057195720, 'Saharanpur', '14.139.233.130', '2014-03-23 00:00:00', 'Done', 'Active', '', '', '', NULL),
(98, 'maheshpkmahesh@gmail.com', 'pawankalyan', 9848883690, 'Hyderabad', '14.139.160.231', '2014-04-04 00:00:00', 'Done', 'Active', '', '', '', NULL),
(99, 'kumashiamol@gmail.com', '12345678', 9014217403, 'Hyderabad', '72.37.1.7', '2014-04-10 00:00:00', 'Done', 'Active', '29-', '', '', NULL),
(100, 'heman.phinehas@gmail.com', 'mustaine', 9491850501, 'Chennai ', '117.200.5.44', '2014-05-07 00:00:00', 'Done', 'Active', '', '', '', NULL),
(101, 'sekhar.balabomma@gmail.com', 'sekhar8910', 9849419592, 'Hyderabad', '49.206.151.132', '2014-05-24 00:00:00', 'Done', 'Active', '', '', '', NULL),
(102, 'its.shahid@gmail.com', 'Abcd1234', 7259103436, 'Hyderabad', '117.192.248.76', '2014-06-05 00:00:00', 'Done', 'Active', '', '', '', NULL),
(103, 'jbkljb@gmail.com', 'abcd', 0, 'jhvcjhcjcjcjcj', '119.235.48.130', '2014-06-08 00:00:00', 'Done', 'Active', '', '', '', NULL),
(104, 'rajatchugh16@gmail.com', 'kites011', 9999337967, 'Gurgaon', '42.104.26.196', '2014-06-21 00:00:00', 'Done', 'Active', '', '', '', NULL),
(105, 'aarthis72@gmail.com', 'asdfgf12', 9666829899, 'Hyderabad', '122.179.107.94', '2014-06-25 00:00:00', 'Done', 'Active', '', '', '', NULL),
(106, 'bluegeniedemo@gmail.com', '123456789', 9994108406, 'Madurai', '182.65.175.12', '2014-07-01 00:00:00', 'Done', 'Active', '30-9-1-', '', '', NULL),
(107, 'subodh.nitw@gmail.com', 'vikrant', 9902500554, 'Bangalore', '122.166.173.89', '2014-07-21 00:00:00', 'Done', 'Active', '', '', '', NULL),
(108, 'yoursbiki@yahoo.com', 'Nepali123', 9985801530, 'Hyderabad', '121.58.175.8', '2014-08-06 00:00:00', 'Done', 'Active', '', '', '', NULL),
(111, 'arun.kunapa@mailinator.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.60.111', '2014-09-01 00:00:00', '9adf41e54bdb4dd03ab44bc3409f9ad0', 'Block', '-', '', '', '0'),
(112, 'arun.kunapa0608@yahoo.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.60.111', '2014-09-01 00:00:00', 'e4569881ac50fc8fc2b41444e9ce24e3', 'Active', '-', '', '', '0'),
(113, 'simon.kunapareddy@gmail.com', 'corleone7', 9849859336, 'Hyderabad', '49.205.60.111', '2014-09-10 00:00:00', '102229e4d62435a1df1cc96832fbf736', 'Active', '-', '', '', '0'),
(123, 'ilu_naughty@yahoo.com', 'joshua', 9876235372, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', '54abaac795a856d96bdaa6c318ce0164', 'Block', '-', '-', '-', '0'),
(124, 'arun@koupon.me', 'corleone7', 9849859336, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', 'b1b7f9ad017eec078e8739d7dc827860', 'Active', '-', '-', '-', '0'),
(126, 'arun.corleone@googlemail.com', 'corleone7', 82758072052, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', 'b623a4da6d428e5b12086629f358b511', 'Block', '-', '-', '-', '0'),
(127, 'hi@koupon.me', 'corleone7', 82758072052, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', 'e1252aeb44cca1207e61d94602ccd450', 'Block', '-', '-', '-', '0'),
(128, 'arinaf@gmail.com', 'corleone7', 82758072052, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', '879aff7d720ed214180181c13ea4e60f', 'Block', '-', '-', '-', '0'),
(129, 'arun@sharklasers.com', 'corleone7', 231515312, 'Hyderabad', '49.204.12.60', '2015-09-11 00:00:00', 'a89175c46fe4358d4c551eaf80c1b626', 'Block', '-', '-', '-', '0'),
(133, 'swamy.chinthakindi@gmail.com', 'samy', 9553836518, 'Hyderabad', '122.169.158.177', '2015-09-12 00:00:00', 'c15e4fa8112a8a8fc20ac413aca1f019', 'Active', '-', '-', '-', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `kpn_merchant_details` (`uid`);

--
-- Constraints for table `kpn_deal_details`
--
ALTER TABLE `kpn_deal_details`
  ADD CONSTRAINT `FK_kpn_deal_details_kpn_deal_headers` FOREIGN KEY (`kpn_id`) REFERENCES `kpn_deal_headers` (`kpn_id`);

--
-- Constraints for table `kpn_processed_deals`
--
ALTER TABLE `kpn_processed_deals`
  ADD CONSTRAINT `kpn_processed_deals_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `kpn_merchant_details` (`uid`),
  ADD CONSTRAINT `kpn_processed_deals_ibfk_2` FOREIGN KEY (`kpn_id`) REFERENCES `kpn_deal_headers` (`kpn_id`),
  ADD CONSTRAINT `kpn_processed_deals_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `kpn_user_profile` (`user_id`);

--
-- Constraints for table `kpn_user_login`
--
ALTER TABLE `kpn_user_login`
  ADD CONSTRAINT `kpn_user_login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `kpn_user_profile` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
