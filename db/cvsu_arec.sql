-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 08:57 PM
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
(19, 14.364165, 120.924736, 'xxx', 'xxxx', 1),
(20, 13.919980, 121.487175, 'biogas dito', 'asdasdasd', 1),
(21, 14.126188, 120.852737, 'bagong biogas', '111\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `research_ID` int(11) UNSIGNED DEFAULT NULL,
  `message_Content` varchar(255) DEFAULT NULL,
  `message_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_ID`, `user_ID`, `research_ID`, `message_Content`, `message_Date`) VALUES
(1, 4, 3, 'new message', '2019-03-28 17:18:53'),
(2, 4, 2, 'new message', '2019-03-28 17:19:00'),
(3, 4, 2, 'new message', '2019-03-28 17:19:05'),
(4, 4, 2, 'wwer', '2019-03-28 17:19:21'),
(5, 4, 2, 'tertret', '2019-03-28 18:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_ID` int(10) UNSIGNED NOT NULL,
  `news_Title` varchar(85) DEFAULT NULL,
  `news_Content` text,
  `news_Pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_ID`, `news_Title`, `news_Content`, `news_Pub`) VALUES
(1, 'Title1', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:05'),
(2, 'Title2', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:08'),
(3, 'Title3', 'Sixteen students from the Nagoya University for Foreign Studies (NUFS) in Japan graduated from a three-week Mobility Program in Adamson in colorful ceremonies held at the Miraculous Medal Garden last March 1, 2019. The program included a short course in English, immersion in offices and communities, participation in university activities, and tours of historical sites. University President Fr. Marcelo V. Manimtim, CM delivered a short message. “I hope you had a good ', '2019-03-21 04:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `research_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `research_Title` varchar(85) DEFAULT NULL,
  `research_Content` longtext,
  `status_ID` tinyint(4) UNSIGNED DEFAULT NULL,
  `research_Created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `research_Attachment` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`research_ID`, `user_ID`, `research_Title`, `research_Content`, `status_ID`, `research_Created`, `research_Attachment`) VALUES
(2, 16, 'research2', 'content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample ', 1, '2019-03-20 19:14:26', ''),
(3, 4, 'research3', 'content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample content content sample sample ', 1, '2019-03-20 19:14:26', ''),
(4, 4, 'a31231231', 'asdasdasd', 2, '2019-03-28 11:23:37', 'doc1.docx'),
(8, 4, 'a3123123', 'hkjhwrkjwher', 2, '2019-03-28 13:37:11', 'fifteen.png'),
(9, 4, 'bagoooo', 'asdasdasd', 1, '2019-03-28 13:48:13', '_0'),
(10, 4, 'zxczxczxc', 'zxczxczxc', 2, '2019-03-28 15:06:01', '_0'),
(11, 4, 'asdasd', 'cxzxc', 2, '2019-03-28 15:06:48', '_0'),
(13, 4, 'asdasd', 'asdasd', 2, '2019-03-28 15:10:15', ''),
(21, 16, '234234', '24234', 1, '2019-03-28 18:55:06', ''),
(22, 16, 'aaaa', 'aaaaa', 1, '2019-03-28 19:09:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `research_status`
--

CREATE TABLE `research_status` (
  `status_ID` tinyint(3) UNSIGNED NOT NULL,
  `status_Name` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_status`
--

INSERT INTO `research_status` (`status_ID`, `status_Name`) VALUES
(1, 'Pending'),
(2, 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `level_ID` tinyint(11) UNSIGNED DEFAULT NULL COMMENT 'user level',
  `user_img` longblob,
  `user_Name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_Registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_ID`, `level_ID`, `user_img`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES
(4, 2, NULL, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin@gmail.com', '2019-02-28 16:37:27', 1),
(16, 1, NULL, 'researcher', 'CkpKeaNXiLAYD2rJvtY4tof5bJG0fsf1kVghCSMgvwM=', 'researcher@gmail.com', '2019-03-28 17:14:25', 1);

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
(1, 'researcher'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `status_ID` int(11) UNSIGNED NOT NULL,
  `status_Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`status_ID`, `status_Name`) VALUES
(0, 'Inactive'),
(1, 'Active'),
(2, 'Ban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_ID`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`research_ID`);

--
-- Indexes for table `research_status`
--
ALTER TABLE `research_status`
  ADD PRIMARY KEY (`status_ID`);

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
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`status_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `research_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `research_status`
--
ALTER TABLE `research_status`
  MODIFY `status_ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
