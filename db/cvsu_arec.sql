-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 09:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvsu_arec`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `title`, `description`, `location_status`) VALUES
(1, 15.113991, 121.216896, 'biogas', 'hahaha', 1),
(11, 14.896259, 121.116386, 'Darren', '123123123123', 0),
(13, 14.628011, 120.753838, 'asdasd', 'asdasd', 1),
(14, 14.683812, 120.649467, 'new32', 'ew32', 1),
(15, 14.550928, 120.893913, '123123123', '3123123', 1),
(16, 13.282024, 121.280090, 'biogas21', 'asdasd', 1),
(17, 14.196854, 121.007919, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 1),
(18, 14.449292, 120.680290, 'asdasd', 'asdasdasd', 1),
(19, 14.364165, 120.924736, 'xxx', 'xxxx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `research_ID` int(11) UNSIGNED NOT NULL,
  `research_Title` varchar(85) NOT NULL,
  `research_Content` longtext NOT NULL,
  `research_Status` tinyint(4) NOT NULL,
  `research_Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `research_Attachment` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`research_ID`, `research_Title`, `research_Content`, `research_Status`, `research_Created`, `research_Attachment`) VALUES
(1, 'research1', 'content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample ', 0, '2019-03-20 19:14:26', ''),
(2, 'research2', 'content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample ', 0, '2019-03-20 19:14:26', ''),
(3, 'research3', 'content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample ', 0, '2019-03-20 19:14:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `level_ID` tinyint(11) UNSIGNED DEFAULT NULL COMMENT 'user level',
  `user_Name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_ID`, `level_ID`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(1, 3, 'rhalp10', '$P$BCAA1YEnm0BZ.DJ2X/cXEil0XJcfVM0', 'rhalpdarrencabrera@gmail.com', '2018-10-20 00:58:10', 1),
(2, 2, '19874546', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', '', '2019-02-19 17:13:44', 0),
(3, 2, '19874548', 'Yl1K09d95jpJ1DheIeAi/61UUccd9tATJ9GKkAXiAX8=', '', '2019-02-19 17:21:46', 0),
(4, 3, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 0),
(6, 2, 'instructor', 'Pds40EmB+V/6xvKy2SFGjkoVLTwzmjfbRI2QGpPmGz0=', 'instructor@gmail.com', '2019-03-10 18:08:27', 0),
(7, 1, '201310656', 'M8+Cpt+zltZs3QpomFLRjEFCGvI0VGC+jjJzXH32Mtw=', 'student@gmail.com', '2019-03-10 18:26:16', 0),
(8, 1, 'au2', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', '12s@g.c', '2019-03-10 18:30:15', 1),
(9, 1, 'asdasd', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', '321312@gmail.com', '2019-03-12 13:48:49', 1),
(10, 3, '12ui3yusad', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', '123123@gmail.com', '2019-03-12 13:50:57', 2),
(12, 3, '321312', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'rhalpdarrencabrera@gmail.com', '2019-03-12 14:42:28', 0),
(13, 3, 'raizen21', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'rhalpdarrencabrera@gmail.com', '2019-03-12 14:46:04', 1),
(14, 3, 'raizen27', 'PVKibfXGxoOxc+WlrZLFCQXErLOsHLCB8F9DsNFD+4s=', 'rhalpdarrencabrera@gmail.com', '2019-03-12 14:46:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `level_ID` int(11) UNSIGNED NOT NULL,
  `level_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`level_ID`, `level_name`) VALUES
(0, 'unregister'),
(1, 'student'),
(2, 'researcher'),
(3, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`research_ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `user_login_key` (`user_Name`),
  ADD KEY `user_email` (`user_Email`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`level_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `research_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
