-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2017 at 04:51 PM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firscvfu_first`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `acc_no` varchar(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reg_date` varchar(25) DEFAULT NULL,
  `marry` varchar(20) NOT NULL,
  `t_bal` int(20) NOT NULL,
  `a_bal` int(20) NOT NULL,
  `logins` int(50) DEFAULT '0',
  `status` enum('Active','Dormant/Inactive','Disabled','Closed') DEFAULT 'Active',
  `currency` varchar(5) NOT NULL,
  `cot` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `imf` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `acc_no`, `uname`, `upass`, `email`, `type`, `fname`, `mname`, `lname`, `addr`, `work`, `sex`, `dob`, `phone`, `reg_date`, `marry`, `t_bal`, `a_bal`, `logins`, `status`, `currency`, `cot`, `tax`, `imf`) VALUES
(5, '0013456733', 'iwonaa1234', '237d7e643b43fb5905b072afc0859fd9', 'iskogh@wp.pl', 'Current', 'iwona', 'Urban', 'Skogh', 'UL PODLESNA 22 LONIANKI POLAND', 'Retired', 'Female', '06/01/1975', '+48693137379', 'reg_date', 'Widowed', 4505000, 4504550, 85, 'Active', '$', '65432', '1430', '8903'),
(6, '0013456744', 'Cardinell111', '8b882c4fb04891e7be986ab19e1dbe8b', 'christcardinell@yahoo.com', 'Current', 'Chris', 'james', 'cardinell', '136 Gavina ave,CA \r\nUnited States of America', 'Military', 'Male', '23/06/1972', '8148790606', 'reg_date', 'Widowed', 2500000, 2450000, 83, 'Disabled', '$', '64322', '7895', '2111'),
(7, '0013456755', 'donaldclinon1', 'b89c189e763663907650df003d9bfa76', 'donaldclintondibb@gmail.com', 'Current', 'Donald', 'dibb', 'Clinton', 'Bradely road,wood green,  n22,London', 'Military', 'Male', '12/01/1974', '509) 620-0147', 'reg_date', 'Single', 2500000, 2450000, 69, 'Active', '$', '65432', '1430', '8903'),
(8, '0013456767', 'mcsusana', '77d5b9550288cc411ebf18a9281329aa', 'marcsusana111@gmail.com', 'Current', 'Marc', 'joy', 'Susana', 'Tampa Florida', 'Military', 'Male', '23/06/1967', '2473218962', 'reg_date', 'Widowed', 2500000, 2450000, 36, 'Dormant/Inactive', '$', '65438', '0432', '3219'),
(9, '0013456789', 'Victor234', 'f4127d679e94d63b26abd896a518b5a6', 'donaldvictor1111@gmail.com', 'Current', 'Donald', 'Bayless', 'Victor', 'Utah,United States of America', 'Military', 'Male', '12/06/1974', '2473218962', 'reg_date', 'Single', 2500000, 2450000, 34, 'Dormant/Inactive', '$', '32139', '0432', '9876'),
(10, '0013456235', 'Johnnew1', 'c8c5280f1cc6c7c10f625b643e1654a3', 'johnsnewton28@gmail.com', 'Current', 'Johns', 'manning', 'Newton', '3B houston Texas', 'Military', 'Male', '16/05/1978', '70843278111', 'reg_date', 'Widowed', 3500000, 3450000, 27, 'Active', '$', '76543', '9812', '0921'),
(11, '0013456431', 'rykerj101', 'd708e56d8fbe450e24a7e38a2aa87075', 'rykerj108@gmail.com', 'Current', 'Ryker', 'J', 'Joel', '123 B Lui Florida', 'Engineer', 'Male', '08/10/1967', '509620276', 'reg_date', 'Single', 2500000, 2450000, 11, 'Active', '$', '54212', '7342', '9873');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `upass` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified_count` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `upass`, `email`, `verified_count`) VALUES
(1, 'admin101', 'a072a0f9e4e7426d603777e1d1e11e07', 'info@fir.com', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `amount` int(40) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `uname`, `amount`, `sender_name`, `type`, `remarks`, `date`, `time`) VALUES
(1, '0013456733', 4500000, 'James tucker', 'Credit', 'Contract payment and Bills purchase', '07/11/2017', '09:41:39'),
(2, '0013456235', 1000000, 'James tucker', 'Credit', 'Last mission pay off from United Nation', '14/10/2016', '09:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(40) NOT NULL,
  `reci_name` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  `read` enum('unread','opened') DEFAULT 'unread',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_name`, `reci_name`, `subject`, `msg`, `read`, `date`) VALUES
(1, 'Service Department', 'iwonaa1234', 'Notification of email respond', 'Dear Valued customer ( Iwona skogh)we have replied your email get back to the customer care forÂ  better purpose,FirstInterestreservewe serve you to your happiness,', 'unread', '2017-11-22 00:26:41'),
(2, 'Account Officer', 'rykerj101', 'Dear valued customer, an urgent text quote was sent in to our customer care from your account,kindly', '', 'unread', '2017-11-28 12:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `temp_account`
--

CREATE TABLE IF NOT EXISTS `temp_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `upass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `marry` varchar(20) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `code` varchar(6) NOT NULL,
  `verify` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_transfer`
--

CREATE TABLE IF NOT EXISTS `temp_transfer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `amount` int(20) NOT NULL,
  `acc_no` int(30) NOT NULL,
  `acc_name` varchar(60) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `swift` varchar(15) NOT NULL,
  `routing` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `temp_transfer`
--

INSERT INTO `temp_transfer` (`id`, `email`, `amount`, `acc_no`, `acc_name`, `bank_name`, `swift`, `routing`, `type`, `remarks`) VALUES
(1, 'iskogh@wp.pl', 20000, 2147483647, 'Iwona Urban Skogh', 'ING Slaski', 'INGBPLPW', '13456733', 'Savings', 'transfer'),
(2, 'iskogh@wp.pl', 20000, 2147483647, 'Iwona Urban Skogh', 'ING Slaski', 'INGBPLPW', '13456733', 'Savings', 'Transfer'),
(3, 'iskogh@wp.pl', 20000, 2147483647, 'Iwona Urban Skogh', 'ING Slaski', 'INGBPLPW', '13456733', 'Savings', 'Transfer'),
(4, 'donaldclintondibb@gmail.com', 15000, 27529668, 'MISS NIKKI S SLADE', 'LLOYDS BANK', 'LOYDGB21724', '30803727529668', 'Savings', 'Owed'),
(5, 'donaldclintondibb@gmail.com', 15000, 27529668, 'MISS NIKKI S SLADE', 'LLOYDS BANK', 'LOYDGB21724', '30803727529668', 'Savings', 'Owes'),
(6, 'donaldclintondibb@gmail.com', 15000, 27529668, 'MISS NIKKI S SLADE', 'LLOYDS BANK', 'LOYDGB21724', '30803727529668', 'Savings', 'Owes'),
(7, 'iskogh@wp.pl', 5000, 2147483647, 'Iwona Urban Skogh', 'iNG Slaski', 'INGBPLPW', '13456733', 'Savings', 'Transfer'),
(8, 'donaldclintondibb@gmail.com', 850000, 67869936, 'Tsu L Brooks', 'Fairwinds Credit Union', '263-181-368', '263181368', 'Savings', 'For house and car'),
(9, 'donaldclintondibb@gmail.com', 15000, 27529668, 'MISS NIKKI S SLADE', 'LLOYDS BANK', 'LOYDGB21724', '30803727529668', 'Savings', 'Owes'),
(10, 'donaldclintondibb@gmail.com', 15000, 27529668, 'MISS NIKKI S SLADE', 'LLOYDS BANK', 'LOYDGB21724', '30803727526998', 'Savings', 'Owes'),
(11, 'johnsnewton28@gmail.com', 1000000, 102436934, 'Nguyá»…n Thá»‹ Lá»‡ thu', 'ÄÃ´ng Ã¡ bank', 'EACBVNVX', '01682385982', 'Savings', 'Chuyá»ƒn khoáº£n'),
(12, 'johnsnewton28@gmail.com', 1000000, 102436934, 'Nguyá»…n Thá»‹ Lá»‡ thu', 'ÄÃ´ng Ã¡ bank', 'EACBVNVX', '01682385982', 'Savings', 'Chuyá»ƒn khoáº£n'),
(13, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship'),
(14, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship'),
(15, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship'),
(16, 'rykerj108@gmail.com', 60000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship insurance'),
(17, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship insurance'),
(18, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex white insurance', 'Bank of AmÃ©rica', 'BOFAUS65', '065400137', 'Savings', 'Paying for ship insurance'),
(19, 'rykerj108@gmail.com', 600000, 1432677653, 'Alex White Insurance', 'Bank of America', 'BOFAUS65', '065400137', 'Savings', 'paying for ship insurance');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tc` int(10) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `status` enum('Pending','Replied') DEFAULT 'Pending',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `tc`, `sender_name`, `mail`, `subject`, `msg`, `status`, `date`) VALUES
(1, 74682, 'Donald', '', 'Trying to send money', 'I''m trying to send some money but won''t allow as wants a cot code', 'Pending', '2017-11-17 13:44:35'),
(2, 15085, 'Donald', '', 'Trying to send money', 'I need a cot code can you help?', 'Pending', '2017-11-22 12:01:46'),
(3, 94749, 'Donald', '', 'C.o.t code please asap', 'Can you help with c.o.t code please asap', 'Pending', '2017-11-22 12:18:59'),
(4, 65688, 'Donald', '', 'C.o.t code please asap', 'Help with c.o.t please asap', 'Pending', '2017-11-22 13:44:05'),
(5, 43344, 'Donald', '', 'C.o.t code please asap', '.', 'Pending', '2017-11-22 13:44:50'),
(6, 85737, 'Donald', '', 'C.o.t code please asap', 'Help with c.o.t please asap', 'Pending', '2017-11-22 13:45:43'),
(7, 70797, 'Donald', '', 'COT codes', 'I want to make a transfer, but am told I need a Cost Of Transfer code....what is it? And how do I obtain it?', 'Pending', '2017-11-22 17:40:52'),
(8, 13856, 'Donald', '', 'COT codes', 'I''m trying to make a transfer, but I''m told I need a Cost Of Tranfer code. How do I obtain this code?', 'Pending', '2017-11-22 20:46:44'),
(9, 56744, 'Donald', '', 'COT codes', 'Can you tell me how I can obtain a COT code, please??', 'Pending', '2017-11-24 15:19:39'),
(10, 5562, 'Donald', '', 'COT codes', 'I have been asking for a couple of days now, and I would appreciate an answer....How do I obtain a COT code???', 'Pending', '2017-11-24 20:20:45'),
(11, 99209, 'Donald', '', 'COT codes', 'Can you tell me how to get a COT code?', 'Pending', '2017-11-27 17:45:48'),
(12, 42269, 'Ryker', '', 'Transfer', 'Good morning I need to make a transfer, but they ask me for a cot code, please send it. I await your answer, thank you', 'Pending', '2017-11-28 12:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount` varchar(100) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `reci_name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `swift` varchar(100) NOT NULL,
  `routing` varchar(100) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` enum('Failed','Successful','Pending') DEFAULT 'Successful',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
