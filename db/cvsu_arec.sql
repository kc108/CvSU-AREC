-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 11:45 AM
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
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `title` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `title`, `address`, `description`, `date`, `location_status`) VALUES
(1, '13.329839', '121.844925', 'CvSU', 'Marinduque State College-Gasan Campus', '1-6 cu.m biogas digester', '2019-07-01 03:19:23', 1),
(2, '14.197822', '120.879301', 'CvSU', 'Animal Project, CvSU, Indang, Cavite', '1-6 cu.m biogas digester', '2019-07-01 03:19:23', 1),
(3, '14.197822', '120.879401', 'CvSU', 'Animal Project, CvSU, Indang, Cavite', '1-30 cu.m biogas digester', '2019-07-01 03:19:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_ID` int(11) UNSIGNED NOT NULL,
  `sender_ID` int(11) UNSIGNED DEFAULT NULL,
  `receiver_ID` int(11) UNSIGNED DEFAULT NULL,
  `message_Content` varchar(255) DEFAULT NULL,
  `message_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_ID`, `sender_ID`, `receiver_ID`, `message_Content`, `message_Date`) VALUES
(16, 16, 4, 'one', '2019-05-04 09:06:19'),
(17, 16, 4, 'two', '2019-05-04 09:07:07'),
(19, 4, 16, 'three', '2019-05-04 09:16:18'),
(21, 4, 16, 'four', '2019-05-04 09:24:05'),
(22, 4, 16, 'five', '2019-05-04 09:24:42'),
(23, 16, 4, 'six', '2019-05-04 09:28:41'),
(24, 4, 16, 'seven', '2019-05-04 09:28:44'),
(26, 4, 16, 'asdasd', '2019-05-05 18:19:25'),
(27, 4, 16, '', '2019-05-21 17:41:29'),
(28, 4, 16, 'zzzzzzzzz', '2019-05-21 17:47:37'),
(29, 4, 16, 'ds', '2019-05-21 17:47:45'),
(30, 4, 16, 'daa', '2019-05-21 17:52:53'),
(31, 4, 16, 'try enter', '2019-05-21 17:54:59'),
(32, 4, 16, 'try ulit ang enter', '2019-05-21 17:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_ID` int(10) UNSIGNED NOT NULL,
  `news_Title` text,
  `news_Content` text,
  `news_Pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_ID`, `news_Title`, `news_Content`, `news_Pub`) VALUES
(1, 'Consultative Workshop on Biogas Technology â€“ Visayas and Mindanao Areas, Cebu City', 'Conduct of Awareness Campaign Activities', '2019-07-01 06:41:47'),
(2, 'Consultative Workshop on Biogas Technology -  Luzon Area, Quezon City', 'Conduct of Awareness Campaign Activities', '2019-07-01 06:42:06'),
(3, 'Public Presentation of Biogas Technology Website, Quezon City', 'Conduct of Awareness Campaign Activities', '2019-07-01 06:42:19'),
(4, 'Development of training manual  on Biogas Technology ( CvSU-ANEC Primer, How to Construct a DSAC-Model Biogas Plant)', 'Promote NRES through multi-media', '2019-07-01 06:43:33'),
(5, 'Seminar on Biogas Technology, Baggao, Cagayan', 'Promote NRES through multi-media', '2019-07-01 06:43:45'),
(6, 'Renewable Energy Trainors Training DAP, Tagaytay City', 'Promote NRES through multi-media', '2019-07-01 06:43:56'),
(7, 'Renewable Energy Trainors Training DAP, Marikina City', 'Promote NRES through multi-media', '2019-07-01 06:44:11'),
(8, 'Workshops on Biogas Technology', 'Promote NRES through multi-media', '2019-07-01 06:44:24'),
(9, 'RE Investment Forum and Launching of CBRED Project Funds, Makati City', 'Establish, develop and sustain institutional partnerships on RE', '2019-07-01 06:44:38'),
(10, 'Sustainability Improvement of RE Development in Village Electrification, Baguio City', 'Establish, develop and sustain institutional partnerships on RE', '2019-07-01 06:44:49'),
(11, 'Renewable Energy Training for Trainors Tagaytay City ', 'Establish, develop and sustain institutional partnerships on RE', '2019-07-01 06:45:07'),
(12, 'CVSU-ANEC provided technical assistance to Mayor Robert Turingan Of Enrile Cagayan (200 cu.m biogas digester)', 'Extend technical and institutional assistance to NRE stakeholders', '2019-07-01 06:45:18'),
(13, 'CVSU-ANEC provided technical assistance to Mr. Bienvenido Gonzales of Ibaan, Batangas (600 cu.m biogas digester)', 'Extend technical and institutional assistance to NRE stakeholders', '2019-07-01 06:45:29'),
(14, 'CVSU-ANEC provided technical assistance to Mr. Felimon â€œboyâ€ Santander of Bukidnon (30 cu.m biogas digester)', 'Extend technical and institutional assistance to NRE stakeholders', '2019-07-01 06:45:43'),
(15, 'CVSU-ANEC provided technical assistance to International Committee of the Red Cross (ICRC), (2 units biogas digester: one in Manila city Jail and other one in Bureau of Jail Management and Penology in Bicutan)', 'Extend technical and institutional assistance to NRE stakeholders', '2019-07-01 06:45:55'),
(16, 'CVSU-ANEC provided technical assistance to Mucipality of Baggao and City Government of Tuguegarao', 'Extend technical and institutional assistance to NRE stakeholders', '2019-07-01 06:46:06'),
(17, 'Participated in Exhibits/fora (Seminar/ Symposium/Exhibition on Recycling Industry Development in the Philippines, SM Megamall)', 'Conduct of Awareness campaign activities', '2019-07-01 06:46:19'),
(18, 'Participated in Exhibits/fora (National Science and technology Week Trade Fair and Exhibits, SM Megamall)', 'Conduct of Awareness campaign activities', '2019-07-01 06:46:30'),
(19, 'Participated in Exhibits/fora (2008 National Coconut Week Trade fair and Exhibits, SM Megamall)', 'Conduct of Awareness campaign activities', '2019-07-01 06:46:43'),
(20, 'STARRDEC Bazaar and Exhibit, SM Rolle Hall, CvSU)', 'Conduct of Awareness campaign activities', '2019-07-01 06:46:55'),
(21, 'Conducted Seminars on Biogas Technology for ICRC, MCJ and BJMP Officials, CvSU', 'Conduct of Awareness campaign activities', '2019-07-01 06:47:11'),
(22, 'Biogas Technology Awareness Forum, SM Rolle Hall, CvSU', 'Conduct of Awareness campaign activities', '2019-07-01 06:47:23'),
(23, 'Distribution of ANEC publications ( CvSU-ANEC Primer, How to construct the DSAC-Model Biogas Plant and DSAC Model Biogas Plant flyer)', 'Conduct of Awareness campaign activities', '2019-07-01 06:47:33'),
(24, 'Production of training Manual on the Construction, Operation and Maintenance of Biogas Digester', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:00'),
(25, 'Published article on renewable energy on a national circulation', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:12'),
(26, 'Produced ANEC website', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:22'),
(27, 'Served as a resource person on various information dissemination activities (TV Interview during the Seminar/Symposium/Exhibition on Recycling Industry Development in the Philippines SM Megamall) â€“ aired at channel 25', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:34'),
(28, 'Served as a resource person on various information dissemination activities (Training on Nonconventional Energy Production and Utilization Focusing on Biogas Technology Management, Tuguegarao City, Cagayan', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:48'),
(29, 'Served as a resource person on various information dissemination activities (Certificate Course in renewable Energy Technology Design, Installation, Operation and Maintenance: Training of Trainors, Development Academy of the Philippines, Pasig City', 'Conduct of Awareness campaign activities', '2019-07-01 06:49:59'),
(30, 'Served as a resource person on various information dissemination activities (4th Northern Luzon Science and Technology Fair, Tuguegarao City, Cagayan', 'Conduct of Awareness campaign activities', '2019-07-01 06:50:15'),
(31, 'Served as resource person to various university visitors (Officials of Isabela State University-ANEC)', 'Conduct of Awareness campaign activities', '2019-07-01 06:50:26'),
(32, 'Served as resource person to various university visitors ( Nimir Catacutan of TLRC, Manila)', 'Conduct of Awareness campaign activities', '2019-07-01 06:50:38'),
(33, 'Served as resource person to various university visitors (Students from Cavite National Science High School, Maragondon, Cavite', 'Conduct of Awareness campaign activities', '2019-07-01 06:50:50'),
(34, 'Served as resource person to various university visitors (Students from Batangas State University, Batangas City)', 'Conduct of Awareness campaign activities', '2019-07-01 06:51:00'),
(35, 'Served as resource person to various university visitors (Mr. Omar Joseph Natividad of Zamboanga City)', 'Conduct of Awareness campaign activities', '2019-07-01 06:51:11'),
(36, 'Served as resource person to various university visitors (BS Agricultura Engineering Students of CvSU)', 'Conduct of Awareness campaign activities', '2019-07-01 06:51:23'),
(37, 'Served as databank for NRE related information', 'Conduct of Awareness campaign activities', '2019-07-01 06:51:34'),
(38, 'Energy Summit 2008, SM Mall of Asia', 'Participation in other DOE and RE-related activities', '2019-07-01 06:51:46'),
(39, '2nd INAHGEN, The Asian Farmers Congress, SM Mall of Asia', 'Participation in other DOE and RE-related activities', '2019-07-01 06:51:57'),
(40, 'Writeshop on Proposal Development, UPLB', 'Participation in other DOE and RE-related activities', '2019-07-01 06:52:09'),
(41, 'Educational Trip to Villasis, Pangasinan and Benguet State University', 'Participation in other DOE and RE-related activities', '2019-07-01 06:52:35'),
(42, 'DOE-ANEC Consultation Meeting and Strategic Planning, Visayas State University', 'Participation in other DOE and RE-related activities', '2019-07-01 06:52:46'),
(43, 'Terminal report Presentation of the Project â€œTechnology Validation of Biogas Technology and Its Utilization in the Philippines, DOST-PCIERD, Bicutan, Taguig', 'Participation in other DOE and RE-related activities', '2019-07-01 06:52:57'),
(44, 'Soalr Photovoltaic(PV) Engineerâ€™s training, Development Academy of the Philippines, Tagaytay City ', 'Participation in other DOE and RE-related activities', '2019-07-01 06:54:17'),
(45, 'Intellectual Property Awareness Seminar, CvSU', 'Participation in other DOE and RE-related activities', '2019-07-01 06:54:28'),
(46, 'Participated in 8th Philippine Food Expo Exhibit, Sm Megamall', 'Conduct of Awareness campaign activities', '2019-07-01 06:54:39'),
(47, 'Served as resource speaker ( Biogas Technology Seminar held at LGU, Rosario, Batangas)', 'Conduct of Awareness campaign activities', '2019-07-01 06:54:51'),
(48, 'Biogas and Waste Management Seminar held in Kayquit, Indang, Cavite', 'Conduct of Awareness campaign activities', '2019-07-01 06:55:02'),
(49, 'Site Assessment and Consultation Meeting on Biogas Technology, DOST-Tuguegarao', 'Conduct of Awareness campaign activities', '2019-07-01 06:55:14'),
(50, 'Orientation Seminar on Biogas technology  for DOE Personnel, SM Rolle Hall, CvSU, Indang, Cavite', 'Conduct of Awareness campaign activities', '2019-07-01 06:55:26'),
(51, 'Biogas Technology For a, LIMCOMA-MPC, Lipa City, Batangas', 'Conduct of Awareness campaign activities', '2019-07-01 06:55:37'),
(52, 'Techno Forum on Biogas Technology S&T Fair, The Event Center, SM Sta. Rosa, Laguna', 'Conduct of Awareness campaign activities', '2019-07-01 06:55:49'),
(53, 'Techno Exhibit during the CvSU Grand Alumni Homecoming, University Gymnasium, CvSU, Indang, Cavite', 'Conduct of Awareness campaign activities', '2019-07-01 06:56:00'),
(54, 'Served as resource person to visitors (Environmental Science students from UPLB)', 'Conduct of Awareness campaign activities', '2019-07-01 06:56:12'),
(55, 'Served as resource person to visitors (Electrical Engineering students from Romblon State College)', 'Conduct of Awareness campaign activities', '2019-07-01 06:56:23'),
(56, 'Served as resource person to visitors (Arnold Juliano and Harvey Valdez of Philrice, Munoz, Nueva Ecija)', 'Conduct of Awareness campaign activities', '2019-07-01 06:56:34'),
(57, 'Served as resource person to visitors (MS Engineering student of CvSU)', 'Conduct of Awareness campaign activities', '2019-07-01 06:56:45'),
(58, 'Provided technical assistance to Ms. Catherine Encinas, MS industrial Engineering student of UP Diliman regarding information on PV technology installations', 'Provision of technical and extension services', '2019-07-01 06:56:55'),
(59, 'Provided technical assistance to Mr. Joel Santiaguel of Dagatan, Amadeo, Cavite regarding the proposed construction of biogas plant in their farm in Amadeo', 'Provision of technical and extension services', '2019-07-01 06:57:05'),
(60, 'Provided technical assistance to Mayor Robert Turingan of Enrile, Isabela regarding the operation of a 200 cu.m biogas digester', 'Provision of technical and extension services', '2019-07-01 06:57:16'),
(61, 'Provided technical assistance to Mr. Carlos Nuestro regarding the construction of an 8 cu.m biogas digester in Anuling, Mendez, Cavite', 'Provision of technical and extension services', '2019-07-01 06:57:27'),
(62, 'Provided technical assistance to Cong. Uy regarding the construction of a 200 cu.m biogas digester in Isabela', 'Provision of technical and extension services', '2019-07-01 06:57:38'),
(63, 'Provided technical assistance to Mr. Alfredo Borromeo regarding the proposed construction of a 200 cu.m biogas digester in Tanay, Rizal', 'Provision of technical and extension services', '2019-07-01 06:57:49'),
(64, 'Provided technical assistance to Department of Science and Technology Region 2', 'Provision of technical and extension services', '2019-07-01 06:58:01'),
(65, 'Provided technical assistance to DMMMSU-AREC regarding the design of 100 cu.m biogas digester to be constructed in La Union', 'Provision of technical and extension services', '2019-07-01 06:58:12'),
(66, 'Provided technical assistance to CSSAC-AREC construction of 3 units 4 cu.m biogas digesters in Bicol region', 'Provision of technical and extension services', '2019-07-01 06:58:36'),
(67, 'Provided technical assistance to Flor Quilatan of Malainen Luma regarding the flame testing of biogas digester', 'Provision of technical and extension services', '2019-07-01 06:58:46'),
(68, 'Participated in Consultation meetings with DOST region 2 regarding the operation of the 200 cu.m biogas digester in Enrile, Cagayan', 'Participation in other DOE and Re-Related activities', '2019-07-01 06:58:57'),
(69, 'Participated in Consultation meetings (DOE-AREC National Consultation Meeting anf PV Training; CvSU, Indang, Cavite)', 'Participation in other DOE and Re-Related activities', '2019-07-01 06:59:08'),
(70, 'Participated in Consultation meetings (Conference on Mitigating Greenhouse Gas Emissions from Livestock and Agro-Industrial Wastes, Peninsula, Manila', 'Participation in other DOE and Re-Related activities', '2019-07-01 06:59:20'),
(71, 'Training Workshop on GIS-Based Renewable Energy Map Analysis Program, MMSU, batac, ilocos Norte', 'Participation in other DOE and Re-Related activities', '2019-07-01 06:59:33'),
(72, 'Participated in various meetings of the DOST Southern Tagalog Consortium of Industry and Energy Research and Development', 'Participation in other DOE and Re-Related activities', '2019-07-01 06:59:44'),
(73, 'Served as resource speakers during Training on Biogas Technology held at University of Rizal System (URS), Morong, Rizal', 'Conduct of awareness campaign activities', '2019-07-01 06:59:54'),
(74, 'Served as resource speakers during Capacity Building Training for the Coordinating Entity of the Programmatic CDM held at the Air Quality Training Center, DENR Compound,Quezon City', 'Conduct of awareness campaign activities', '2019-07-01 07:00:05'),
(75, 'Served as resource speakers during Biogas Technology S&T Caravan Phase II held in Batanes Island', 'Conduct of awareness campaign activities', '2019-07-01 07:00:18'),
(76, 'Served as resource speakers during Seminar Workshop on Integrated Swine Waste Management', 'Conduct of awareness campaign activities', '2019-07-01 07:00:29'),
(77, 'Provided technical assistance to DOST Region 2 regarding the conduct of Performance evaluation of existing biogas technology projects in Kimikarlai Farm at Enrile, Cagayan', 'Provision of technical and extension services', '2019-07-01 07:00:48'),
(78, 'Provided technical assistance to DOST Region 2 regarding the conduct of Technology training and site assessment for the establishment of the biogas digester in the slaughterhouse in Aparri, Cagayan', 'Provision of technical and extension services', '2019-07-01 07:00:59'),
(79, 'Provided technical assistance to DOST Region 2 regarding the conduct of Site assessment for the establishment of biogas digester in piggery farms at Lasam and Lallo, Cagayan', 'Provision of technical and extension services', '2019-07-01 07:01:10'),
(80, 'Provided technical assistance to DOST Region 2 regarding the conduct of Performance evaluation of existing biogas technology projects at Aljuron Farm at Gamu, Isabela', 'Provision of technical and extension services', '2019-07-01 07:01:21'),
(81, 'Provided technical assistance to San Andres Farm and Mega Pork Farm in Victoria, Tarlac regarding the site assessment and establishment of biogas projects', 'Provision of technical and extension services', '2019-07-01 07:01:33'),
(82, 'Provided technical assistance to DMMMSU-AREC regarding construction of 100 cu.m biogas digester at the Golden Pig Farms in Eugenio, Aringay in La Union', 'Provision of technical and extension services', '2019-07-01 07:01:44'),
(83, 'Provided technical assistance to JMT Industrial Farms regarding the site assessment for the renewable energy project in Sitio Subok, Bgy. Cadalapdap, Tagkawyan, Quezon', 'Provision of technical and extension services', '2019-07-01 07:01:55'),
(84, 'Provided technical assistance to Office of the Provincial Veterinarian of Cavite regarding the visit to some biogas projects in Cavite', 'Provision of technical and extension services', '2019-07-01 07:02:07'),
(85, 'Provided technical assistance to the people of Tubili, Paluan, Occidental Mindoro regarding the operation of their Solar Home Systems', 'Provision of technical and extension services', '2019-07-01 07:02:54'),
(86, 'Provided technical assistance to Graduate students of CvSU taking up Master of Engineering regarding the design of renewable energy systems', 'Provision of technical and extension services', '2019-07-01 07:03:05'),
(87, 'Provided technical assistance to Faculty and students of CvSU conducting research works on biogas technology', 'Provision of technical and extension services', '2019-07-01 07:03:15'),
(88, 'Provided technical assistance to Mr. Oscar Alladin regarding the possible solar energy project in Odiongan, Romblon', 'Provision of technical and extension services', '2019-07-01 07:03:27'),
(89, 'Provided technical assistance to Mr. Jun Barcoma regarding the possible biogas training ', 'Provision of technical and extension services', '2019-07-01 07:03:37'),
(90, 'Provided technical assistance to Ms. Sherrylyn Rasdas regarding the conduct of her research study entitled â€œDevelopment of PC-Based Analyzer of Major Components of Biogas Sludge for Useful Application', 'Provision of technical and extension services', '2019-07-01 07:03:47'),
(91, 'Provided technical assistance to Science High School students of CvSU regarding the conduct of their research study entitled â€œDrying Effects on the Quality Nutrient and Microbial Composition of Selected Plant Leavesâ€ using 2 types of solar dryers', 'Provision of technical and extension services', '2019-07-01 07:03:59'),
(92, 'Participated in Software-Aided Feasibility Study Preparation for Service-Oriented Non-Commercial Renewable Energy Projects; SEARSOLIN, Xavier University, Cagayan de Oro City', 'Participation in other DOE and RE-related activities', '2019-07-01 07:04:09'),
(93, 'Participated in Training for Trainors: Biogas Digester Development for Pig Farms in the Philippines sponsored by DOST and Methane to Market held at the DAP Conference Center, Tagaytay City ', 'Participation in other DOE and RE-related activities', '2019-07-01 07:04:21'),
(94, 'Participated in Hands-on Training on Ferrocement Fixed Dome Digesters held at Villa Valentina Resort, Rizal and Llanera, Nueva Ecija ', 'Participation in other DOE and RE-related activities', '2019-07-01 07:04:37'),
(95, 'Conducted a survey about the number of PV installations by province and their status', 'Maintenance of Renewable Energy Map Analysis Program (REMAP)', '2019-07-01 07:04:48'),
(96, 'Conducted a survey about the number of biogas installation by province and their status', 'Maintenance of Renewable Energy Map Analysis Program (REMAP)', '2019-07-01 07:05:05'),
(97, 'Performed the trainings/forum (6th National Training Course on Biogas Technology held at the Hostel Tropicana, CvSU', 'Conduct of awareness campaign', '2019-07-01 07:05:17'),
(98, 'Performed the trainings/ forum (Provincial Biogas Technology Awareness Forum held at the Hostel Tropicana, CvSU ', 'Conduct of awareness campaign', '2019-07-01 07:05:29'),
(99, 'Performed the trainings/ forum (Training on Renewable Energy Electrification held at Taal Vista Hotel, Tagaytay City', 'Conduct of awareness campaign', '2019-07-01 07:05:42'),
(100, 'Provided information to Ms. Ma Consuelo Macaspac of Pampanga during her visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:05:59'),
(101, 'Provided information to Engr. Josephine Altura of  the Provicial Planning and Development Office of Batangas during her visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:06:10'),
(102, 'Provided information to Ms.Wilhelmina Checa of General Trias, Cavite during her visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:06:25'),
(103, 'Provided information to Engr. Glorioso of Glorious Agri-Farm, Magallanes, Cavite during his visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:06:36'),
(104, 'Provided information to Mr. Roland Reyes of Pangil, Cavite during his visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:06:46'),
(105, 'Provided information to Faculty and staff of CvSU during their visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:06:57'),
(106, 'Provided information to Agricultural Engineering students of CvSU during their visit to CvSU-AREC', 'Conduct of awareness campaign', '2019-07-01 07:07:08'),
(107, 'Provided technical assistance to Local Government Unit of Surigao City regarding the rehabilitation of 40 cu.m biogas digester', 'Provision of technical and extension services', '2019-07-01 07:07:18'),
(108, 'Provided technical assistance to Mr. Jun Zhu of Minnesota University regarding the documentation of biogas projects', 'Provision of technical and extension services', '2019-07-01 07:07:29'),
(109, 'Provided technical assistance to Engr. Josephine Altura, staff of the Provincial Planning and Development Office of Batangas on the conceptualization of biogas projects in Batangas', 'Provision of technical and extension services', '2019-07-01 07:07:40'),
(110, 'Provided technical assistance to Engr. Glorioso of Glorious Agri-Farm in Magallanes, Cavite for the design of 400 cu.m biogas digester', 'Provision of technical and extension services', '2019-07-01 07:07:51'),
(111, 'Provided technical assistance to City Government of Trece Martires for the detailed engineering design of 150 cu.m biogas digester for the city abattoir', 'Provision of technical and extension services', '2019-07-01 07:08:02'),
(112, 'Provided technical assistance to Sangguniang Barangay of Balubad. Silang, Cavite for the conduct of site assessment and barangay profiling: proposed barangay PV streetlights', 'Provision of technical and extension services', '2019-07-01 07:08:13'),
(113, 'Provided technical assistance to Mr. Rolando Reyes of Amadeo, Cavite for the conduct of site assessment for possible hydraulic ram pump project', 'Provision of technical and extension services', '2019-07-01 07:08:23'),
(114, 'Participated in conduct of site validation of biogas potential of General Santos City', 'Participation in other DOE and Re-related activities', '2019-07-01 07:08:33'),
(115, 'Participated in conduct of Biogas Technology Awareness Forum in General Santos City ', 'Participation in other DOE and Re-related activities', '2019-07-01 07:08:43'),
(116, 'Participated in conduct of Solar and Wind Assessment in Lubang Island, Occidental Mindoro', 'Participation in other DOE and Re-related activities', '2019-07-01 07:08:53'),
(117, 'Provided assistance to Mariano Marcos State University-AREC in their visit of Necitas Farm in Padre Garcia, Batangas to observe power conversion from biogas', 'Participation in other DOE and Re-related activities', '2019-07-01 07:09:03'),
(118, 'Provided lectures/presentation to MMSU-AREC on the Status of Biogas Resource Management and Waste from Biogas Resource: Characterization and Basic Generation Processes and Comprehensive Utilization of Biogas Technology used during the one-day Forum on Waste Management: Status and Business Prospects in the Biogas Energy Sector', 'Participation in other DOE and Re-related activities', '2019-07-01 07:09:18'),
(119, 'Provided assistance to BU-AREC in the planning and conduct of â€œTraining Workshop on Biogas Technology for Bicol Regionâ€', 'Participation in other DOE and Re-related activities', '2019-07-01 07:09:32'),
(120, 'Sent participants and attended the DOE-AREC Planning Workshop', 'Participation in other DOE and Re-related activities', '2019-07-01 07:09:46'),
(121, 'Sent participants and attended the back-to-back workshop entitled R&D Workshop on Renewable Energy ', 'Participation in other DOE and Re-related activities', '2019-07-01 07:09:55'),
(122, 'Sent participants and attended the DOEâ€™s training on photovoltaics systems at Fontana Hot Spring and Leisure Parks, Angeles City', 'Participation in other DOE and Re-related activities', '2019-07-01 07:10:05'),
(123, 'Sent participants and attended the National training on Gender Mapping at Caoayan Heritage Resort', 'Participation in other DOE and Re-related activities', '2019-07-01 07:10:16'),
(124, 'Performed seminars/trainings about Reorganization and Re-training of SoPAs Sitio Aurora, Sitio Cabibihan and Sitio Dayungdong in Tablas Island, Romblon', 'Performed seminars/trainings about Reorganization and Re-training of SoPAs Sitio Aurora, Sitio Cabibihan and Sitio Dayungdong in Tablas Island, Romblon', '2019-07-01 07:10:32'),
(125, 'Performed presentation of paper and poster entitled â€œHousehold Electrification Program in Romblonâ€ during the CvSu Annual Agency In-House Review', 'Conduct awareness campaign', '2019-07-01 07:10:44'),
(126, 'Performed seminars/trainings about Marinduque Solar Power Association Training and Organizattion at Sta. Cruz Multipurpose Hall', 'Conduct awareness campaign', '2019-07-01 07:10:56'),
(127, 'Provided technical assistance to Engr. Alberto Ararao of the City Government of Trece Martires City for proposed construction of 400 cu.m biogas digester', 'Provision of technical and extension services', '2019-07-01 07:11:06'),
(128, 'Provided technical assistance to Bicol University-AREC for the conduct of training workshop on Biogas Technology for Bicol  Region held at Hotel St. Ellis, Legaspi City', 'Provision of technical and extension services', '2019-07-01 07:11:17'),
(129, 'Provided technical assistance to PAIBARE Legacy Corp. Inc. for the visit of Bhutanese officials particularly from Bhutanâ€™s Department of Renewable Energy who were working on possible biogas projects in their country', 'Provision of technical and extension services', '2019-07-01 07:11:28'),
(130, 'Provided technical assistance to El Jirie Batrados of FAO UN re validation of biogas information for their biogas research studies', 'Provision of technical and extension services', '2019-07-01 07:11:38'),
(131, 'Provided technical assistance to DOE-Mindanao Field Office for the conduct of Hands-On Training on the construction of 6 cu.m DSAC Model biogas plant in Panabo City, Davao del Norte', 'Provision of technical and extension services Provision of technical and extension services', '2019-07-01 07:11:49'),
(132, 'Participated in Social Preparation activities and establishment of Solar Power Associations (SoPAs) in Marinduque ', 'Participation in other DOE and RE-related activities', '2019-07-01 07:11:59'),
(133, 'Participated in Training on the Operation and Maintenance of the PV systems', 'Participation in other DOE and RE-related activities', '2019-07-01 07:12:09'),
(134, 'Participated in Social Preparation and Organization of SOPA in Sitio Macaingala, Bgy. Puray and Sitio Quary, Bgy. Baclayan in Puerto Galera, Oriental Mindoro', 'Participation in other DOE and RE-related activities', '2019-07-01 07:12:19'),
(135, 'Participated in Orientation on the Implementation of Household Electrification Program (HEP) under the calendar year 2011 at DOE, Taguig City', 'Participation in other DOE and RE-related activities', '2019-07-01 07:12:30'),
(136, 'Participated in presentation of result of Biomass Resource Assessment in Luzon at PAC, Magalang, Pampanga', 'Participation in other DOE and RE-related activities', '2019-07-01 07:12:40'),
(137, 'Participated in decommissioning of one (1) meteorological mast in Lubang Island, Occidental Mindoro', 'Participation in other DOE and RE-related activities', '2019-07-01 07:12:51'),
(138, 'Participated in Hands-On Training on the Construction of 6 cu.m DSAC Model biogas plant in Panabo City, Davao del Norte', 'Participation in other DOE and RE-related activities', '2019-07-01 07:13:06'),
(139, 'Sent participants and attended the seminar on Microhydro Energy Systems at Hotel Amancio, Santiago City', 'Participation in other DOE and RE-related activities', '2019-07-01 07:13:16'),
(140, 'Sent participants and attended the the DOE-AREC Evaluation and Planning Conference at the Amigo Terrace Hotel, Iloilo City', 'Participation in other DOE and RE-related activities', '2019-07-01 07:13:27'),
(141, 'Sent participants and attended the Training Workshop on the Development of Web-Based Spatial Information System (WEBGIS) Using Free and Open Source Software (FOSS) and Open Geospatial Consortium (OGC)-Based Web Services ', 'Participation in other DOE and RE-related activities', '2019-07-01 07:13:38'),
(142, 'Attended a training entitled â€œEstablishment of Biogas Demonstration Project in General Santos City Cum Hands-On Trainingâ€', 'Participation in other DOE and RE-related activities', '2019-07-01 07:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `project_monitoring`
--

CREATE TABLE `project_monitoring` (
  `proj_ID` int(11) UNSIGNED NOT NULL,
  `proj_Title` varchar(150) DEFAULT NULL,
  `proj_Owner` varchar(50) DEFAULT NULL,
  `proj_Location` varchar(250) DEFAULT NULL,
  `proj_Costing` float DEFAULT NULL COMMENT 'Amount of contract',
  `proj_DateStarted` date DEFAULT NULL,
  `proj_DateEnded` date DEFAULT NULL,
  `proj_Scope` varchar(50) DEFAULT NULL COMMENT 'Scope of Work',
  `proj_Head` varchar(50) DEFAULT NULL,
  `status_ID` int(11) UNSIGNED DEFAULT NULL,
  `proj_Expenses` float UNSIGNED DEFAULT NULL,
  `visibility` tinyint(4) DEFAULT '1',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_monitoring`
--

INSERT INTO `project_monitoring` (`proj_ID`, `proj_Title`, `proj_Owner`, `proj_Location`, `proj_Costing`, `proj_DateStarted`, `proj_DateEnded`, `proj_Scope`, `proj_Head`, `status_ID`, `proj_Expenses`, `visibility`, `date_added`) VALUES
(48, 'Barangay Electrification Project', 'DOE', 'Occidental Mindoro (Ambil in Looc, Tubili in Paluan)', NULL, '2007-07-29', '2007-08-04', 'The center assisted in the establishment of BEP th', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:06:48'),
(49, 'Barangay Electrification Project installation of 2 units biogas fed generation system', 'DOE', '(1) Batangas, (2) Jala-jala, Rizal', NULL, '2008-01-01', '2008-01-01', 'Installation of 2 units biogas fed generation syst', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:07:59'),
(50, 'Household Electrification Program (HEP) ', 'DOE', 'Municipalities of Odiongan, Calatrava and San Agustin in Tablas Island, Romblon', NULL, '2012-01-01', '2012-01-01', 'There was a total of 85 household beneficiaries in', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:08:44'),
(51, 'Monitoring of biomass projects', 'DOE', 'Batangas and Cavite particularly Silangan Farm in Lipa City, Batangas and Pig City in General Trias, Cavite', NULL, '2012-01-01', '2012-01-01', 'Biomass project monitoring', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:09:25'),
(52, 'Household Electrification Program (HEP) in region IV', 'DOE', 'Municipalities of Odiongan, Calatrava and San Agustin in Tablas Island, Romblon', NULL, '2013-05-27', '2013-06-01', 'Re-oraganization of Solar Power Associations (SoPA', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:10:22'),
(53, 'Household Electrification Program (HEP) in region IV', 'DOE', 'Municipalities of Odiongan, Calatrava and San Agustin in Tablas Island, Romblon', NULL, '2013-11-04', '2013-11-10', 'Revisit to the areas', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:11:09'),
(54, 'Household Electrification Program (HEP) in region IV', 'DOE', 'Six municipalities of Marinduque (six sitios from Sta. Cruz, two sitios from Mogpog, three sitios from Gasan, two sitios fromBuenavista, one sitio from Boac and one sitio from Torrijos)', NULL, '2013-03-01', '2013-05-01', 'There were a total of 555PV-SHSs, three PV Communa', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:11:52'),
(55, 'Household Electrification Program (HEP) in region IV', 'DOE', 'Puerto Galera, Oriental Mindoro ( sitio Paniquian in Bgy. San Antonio, sitio Sipit Siburan in Bgy. Villaflor and bgy. Baclayan)', NULL, '2013-01-01', '2013-01-01', 'There were a total of 106 prospective beneficiarie', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:13:07'),
(56, 'Household Electrification Program (HEP) in region IV', 'DOE', 'Rizal (Sitio Macaingalan in Puray and Sitio Quary in Macabud)', NULL, '2008-01-01', '2008-01-01', 'There were a total of 70 proposed beneficiaries of', 'J.Q Dilidili/ CAPolinga/ RPelle/ JCotoner', 3, NULL, 1, '2019-07-01 03:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `register_info`
--

CREATE TABLE `register_info` (
  `reg_ID` int(11) UNSIGNED NOT NULL,
  `user_ID` int(11) UNSIGNED DEFAULT NULL,
  `reg_fname` varchar(85) DEFAULT NULL,
  `reg_lname` varchar(85) DEFAULT NULL,
  `reg_address` varchar(85) DEFAULT NULL,
  `reg_contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_info`
--

INSERT INTO `register_info` (`reg_ID`, `user_ID`, `reg_fname`, `reg_lname`, `reg_address`, `reg_contact`) VALUES
(2, 20, 'francis', 'dillo', 'anuling mendez, cavite', ''),
(3, 21, 'arvin', 'dillo', 'anuling mendez, cavite', '09553075888');

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
(25, 16, 'Pilot Commercialization of Community-Based Jatropha Plant Oil Extraction Facility in ', 'Conduct R&D on RE resources and technologies', 1, '2006-12-31 19:14:26', NULL),
(26, 16, 'Technology Validation of Biogas Technology and Its Utilization in the Philippines', 'Conduct R&D on RE resources and technologies', 1, '2006-12-31 16:00:00', NULL),
(27, 16, 'Waste to Energy Conversion in Agriculture', 'Conduct R&D on RE resources and technologies', 1, '2006-12-31 19:14:26', NULL),
(28, 16, 'A Project Feasibility Study on the Manufacture of Bio-Diesel Fuel', 'Conduct R&D on RE resources and technologies', 1, '2006-12-31 19:14:26', NULL),
(29, 16, 'Socio-Economic Impact Evaluation of Barangay Electrification Projects (BEPs) of Cavit', 'Conduct of surveys on the following barangay beneficiaries: (a) Bgy. Tagumpay, Real, Quezon, (b) Bgy. Masikap, Real, Quezon, (c) Bgy. Harisson, Paluan, Occidental Mindoro', 1, '2008-12-31 19:14:26', NULL),
(30, 16, 'Comparative Performance Evaluation of Locally-Made and Imported Biogas-Powered Genera', 'Conducted to determine the efficiency of existing locally-made and imported biogas generators as source of electricity', 1, '2011-12-31 19:14:26', NULL),
(31, 16, 'Evaluation of Gas and Wastewater Quality from Biogas Using Different Animal Manures', 'Conducted to evaluate the gas and wastewater quality produced from different animal manures (chicken, cow, pig)', 1, '2012-12-31 19:14:26', NULL),
(32, 16, 'Development and Evaluation of Low-Cost Battery Control Unit (BCU)', 'Conducted to develop a low-cost and durable BCU which could replace the costly BCUs available in the market', 1, '2012-12-31 19:14:26', NULL),
(33, 16, 'Biogas Purification', 'Conducted to evaluate different biogas purification systems for the improvement of biogas quality', 1, '2012-12-31 19:14:26', NULL),
(34, 16, 'Biogas Technology Assessment in the Philippines', 'Conducted to assess the existing biogas technology in the Philippines', 2, '2012-12-31 19:14:26', NULL);

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
(2, 'Approve'),
(3, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_ID` int(11) UNSIGNED NOT NULL,
  `status_Name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_ID`, `status_Name`) VALUES
(1, 'Pending'),
(2, 'Ongoing'),
(3, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `s_ID` int(11) UNSIGNED NOT NULL,
  `fname` varchar(85) NOT NULL,
  `lname` varchar(85) DEFAULT NULL,
  `email` varchar(85) DEFAULT NULL,
  `subject` varchar(85) DEFAULT NULL,
  `message` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`s_ID`, `fname`, `lname`, `email`, `subject`, `message`, `date`) VALUES
(5, 'sample', 'Sample', 'sample@sample.com', 'sample', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.', '2019-05-04 08:03:07'),
(6, 'alvin', 'dillo', '123@yahoo.com', 'subject1', 'message1', '2019-05-04 08:03:03');

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
(4, 2, 0xffd8ffe000104a46494600010200000100010000ffed009c50686f746f73686f7020332e30003842494d04040000000000801c026700145373304a527274757359646f54446b65564b6a781c0228006246424d4430313030306163303033303030303538306330303030393131353030303035613136303030303138313730303030333432303030303066343263303030303661333130303030633033323030303030343334303030306333343830303030ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffdb004300090607080706090808080a0a090b0e170f0e0d0d0e1c14151117221e2323211e2020252a352d2527322820202e3f2f3237393c3c3c242d4246413a46353b3c39ffdb0043010a0a0a0e0c0e1b0f0f1b392620263939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939393939ffc20011080258025803002200011101021101ffc4001b00010002030101000000000000000000000003040205060107ffc400190101010101010100000000000000000000000102030405ffc400190101010101010100000000000000000000000102030405ffda000c03000001110211000001ee000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000002817dcfd08ebdc4f876ee2243b372f7cdca9dca00000d3d78e80500000000000000000000000000000000000000035bb21f3dbfd2f212a4db6b630f204b3f908b5953596e28ae9676da482bb4f7e7bbc4e990415ce5183cceb6fd67cf66b3e80d76c6c0000000000000000000000000000000000000006977438edae877d2ea29eeb41123df250004b10dbd3a8b2b6cbd84a93d3b12e09eb977a7e6f2b3b657b1a8000000000000000000000000000000000000001acd0f63c3c6d74fb8a6ba89e9cd2caf7c8000000f6b581e7be7a57eab9cd9d98f61c675d64a28000000000000000000000000000000000030cc01a8dbf87176b53b9979c7a967ceada81092fa0000000f7c1d245851d4ec85801ae88db0000000000000000000000000000000381b1856cdebf67f36bb5de34db2b3976df9e9687866f9345e124be640000000f002dd9d5741665d07ceb695d8a2d0d936829cb9bf4356b3a8000000000000000000000000000001c552da53cdaf867e4b0e33f860ce3a1e4268ec000000002296b161e7a47b8d3deb2a5ba9ecb4e69a2a9361afde25ade729d5d81400000000000000000000000000007259c96e5e5d8679be79ef830cf131c3d92a5f7cf63d631136308951784bed7909b20f2bcd0924914a47247854de7b8c432c53d3a5d0ed529f67c576b60500000000000000000000000000001cc4f7b432d5a3bfd04b9a3921e7be115886432c3003c3df24dfae9769bf973be429755cd6a0311c39c6492f8308a48aace1ee1096294bd3c6b365d0413ea00000000000000000000000000000038decab46a34d6ad4bcd24c25f728c18e55ef9e5888375b1dc6770ce6601e73bd0f1dab533833d621923beb03cf130c32c2a5c7cf4cf2f2d46d69677753a316000000000000000000000000000000080a1a9ada69773abdeea6583cf7c8c7cf7daf37fa4b12f6562b59e7b0651c9aead56af16f38d7c95e7a8c9bdca384724759e5e0cf6b5ab99767f3fcd3e879f0fdb5930a0000000000000000000000000000297258492d78b759c73db6af4958c91c1ee152c90671bfdff0bd5675b4c21a11b4e4361a1d24873dedce83abd77431cec1b6af37cff9e7bac798b2a671fa4f03d1b496b25eeae296c0a000000000000000000000000000015ac8e5b47f45c2394bf8e816f6a3755a5d779ea32b53748bc4dcdbe46d63b7ee35c149d6cfacd7b114b267efb14d54d7edb52df3b961bfdf3f39edaead7d32b96f23a29275516dac0a0000000000000000000000000000000004720e5753f40a71c1314d6cfa3e43b6c6f397c490ce4184467244560a6d5ba3add56a4f26b37bcee8d345db97bb2a94ecb7d7e7b2b02800000000000000000000000000000000000186701f3db30f4f9ba99b1d59bbbdacdacb6143592ef22e4a35eaa8ea73b32a9627b2a4d67709ce6e72d772494a4db6e73cdfe8b5ae9ba4e0fbcb90a00000000000000000000000000000000000043e54e1d3916d3a5d4d0f412bae1a4d8f0516add4b19dd3c219533f249d639b18176fabd7cd73f46c6b5bd663d0f448e26cf59a6399eff86ebcb6280000000000000000000000000000000000579f55e6e90eae3d4f1e9bcdbf29bcc6ba3ce9d8f779f5fc46c69ea58b15e79bd6ec2485258bc816386ce17315bad7ceb6f413eb2000000000000000000000000000000000000000061abdbd0f276e5357bac3ae759d26bf63e6ebb6e633a9ebe18c5ec36dcca99ab39c19a5882c5233c7095986f41b1b3af1a8000000000000000000000000000000000000000001c8ed69dee7d25d4ee35d8de8319b71d39eb2b59ad8f5c88f2e7f43df32f66a249e6b9559a197b7c9c7654ee5e7d90d4000000000000000000000000000000000000000000afc577b146870b32cd72d3f64b3e797eae5cfdb3c673f5a58bd6b34522419479f6f8f76cf9259d58d400000000000000000000000000000000000000000000073fd07211472679e9079b1f0d67b7b023db6b37f2eab51dbd29797ebb9ff0077cfb4619eb20000000000000000000000000000000000000000000014f41d3f091b18b2cb3bc7264be79ec1186df4e5e8e3e7635b1b1d36e358a7d9f31d45c0500000000000000000000000000000000000000000000e1fb8e7a398f32cf3af31f71a964ab8cb730aded9261e6c88babd175f7214000000000000000000000000000000000000000000000af607ceb3dad2cda1e4d0ae59c33c63e4821d96bbdae93a3d7ec2e4280000000000000000000000000000000000000000000000d7739d8f0112d4e8745350cf5ef11375ac8a7e659577b3eaf69ac800000000000000000000000000000000000000000000000209c70b76d56969f59caf489cf41d06997517ba7d04768350000000000000000000000000000000000000000000000001e7b09863cd57cdec7de6bdae8a8f39b389ac68ed1d14feb50000000000000000000000000000000000000000000000079ef869ecebef4bcde36aae6dda5d55ab38bbfafdaaeb2ed6b874e35900000000000000000000000000000000000000000000000079e8d6d6bb04b261808f2cbd25b905c40a000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000fffc4002f100001040005030303040301010000000002000103040510111213213150142022303260152333342441429040ffda0008010000010502ff00cba92e578d1e2b1322c5a45fa9d95fa8da5fa9584d8ace83164189572416a03fa17ec9c6f5af3b1796b961e119669a42f443c5f115ca4cb9a45cd22e691722df0bae2a869e813a679eb28f1136515e824f68586f5072bccf52e1577031907cad9ab1d86d66a33bbc5694d01c3efec82d4a2bfc4994987c9a04f3d728715514d1cad74b65506d45fa26750cd240552d8586f2b8a57e5870f31945b566b11307d1090a37f551ca274c0d7ee40725f296bc64bba76d133e8ee0e2346d3581f2b7627ab6b734b1c8db859f47fa4d396d28639110901016b93b68a8cbc73d98ca959af2b4f1794c420e7af86c9aa756c34212fa85f21dae29b276d174b94f0b95e39fcadc8deb5a72deac36b0a02ffe0c3a4da78803c53c46d247e53128792bd33d425fe3c85f5faecfb4ac0358ad83cbba3f1fb8777b4bfc7b0fd472ecbbe5f73fd4c3e4d41bfc5c4fd97f5f4b8758e787c4dad7d6437e78557bd0cfecc5e3d25aefba27ef90277dcecda7d5a65b6ce2c0a96200439e2960422c3e6e2b5e26cf5b8881417a7814389406c33466b148f7d5a65f0f63368df575da789ff5366aab5e3ae9a4070b98930ad1c9e51db1d793960f1063bede4e2cb62daeb7c8cd116dcdd0369f50dfae46ad9eea4b67a88faa06ca51d70dc20b5afe220e98a580e39bdaf9836bf549376448df5a899dc5ed68443969ae1d8297cbc469a62d7c758fdaf9777f6ee5b96e5b96e4d93e41d912ddac793f61ecbb0612fb6df88b5f0c4cc5b4fb5fdc0d9bbe8b73fb7542cef9976419121ee9fb650b6b29968d850395af118c8e84e5c836834267f6bf7c9cbdb1c27226aa203256425ae65906449fba2ceaf79fa56c1e3d21f118843cd5a89ef8e41de2eda3b3fb1bee77d3d9aa08ce45051d10c4ccb6b2962d8f30714b912ef99274dd9fbb7755ff008b107d0610e28bc4da8de95b3d15a0cf5c9bd8cce6f5a8ee51c431fb3bab9136d07d59d3badae2f9ba1ec8569b8a216d6bff009588f8ab108cf1563780e40443b4b36cb55140522ad585bdc4ec2d3caf39fda66fa28df4297438f325fe9766807a487c7060f1e81e2efd5f511d79b946c86ad9b64cca83ef68fda4fa2c427de48fb77cb5d1027c9fba64cdbcba32b27b8ab71c701cd1834663207889a60842d62124cb576286569c660d869fb2ecc2a23e1963f6dd9f86264efa2774cce48c0809d376cbfde508ed1924d5689875530003421c71787b5642b01725a774ec9b7016ad6a34fd993f75dd61d3a17777444c2c45b5accbcd33ba7422e6a8c60e17e1dd6acd71861ff593640cdac926ece3068030d85e497c4591b32491df981358a7322a4c4d3579a24cfa3916e7cbb2d72d5d9c6429eb4123cb1d827e7b93becff42ce44d86e90c6d1a8076b3fee5cc47faf9775aead9b28a2689be56e68a36883c4cd045334f853a769ea9c188a3e39067af1edc9d717c0ea4a2cceab110cb016e1b03ab49bb961864b07045055679e16426069c900ed588ff000200294ca118606cd99410f129a5798a9d6f4e1e30844dac616049da7a671580915a876e74be6d4fa45729fcebd26636661652d68a54d18b47e9a04d146d913e5897f5fbaa271b47726dd9b36af188d7192529de8d4681bc7980c83670cd134b244ba654756945dd07264fc9bb390b60a77cecc432b5928d48da064cce4fa8d65fb9664a74c6bb7929eb473b1b6d91464fac7b59bd8e4c2b9355d7277652598a352620eea49649328a3df14a1b090c9c42efaac3da3f4de4cdf400ea70c2f2bbd2740f344c17d905d8893588dd198108340cfea630458842c8f12275258964c9baa10674e2cd244ce6885809a23e1d32c1a4f87939ff008216d4401a0865b82cbf7672830b324f86575fa546acd7ab033464e2ccb6b2d0568e4b8b8480ea6b0454242b786bb38ce71bd89e49d5292368ec54624ececf871ecb5e4e6eb15698614ef3dc92be16cc82308d962b238411b6f689a388ac4cf625e8b45d5d0b3e91e80fba0213688264ecceb8c1c6c618c4b75aa8b92b5a69a22ad333eade44e4614f293a1a516f8981832b26f1c12394883ed3fb07210725a082eae8a561444e49fa8552dd5f3eeac61d14aa6a76636a8eef5fc8487a29246062b06ea39dd9096884b732c4a460a9ff000dfc47fc422ee82261446ba3239772d13a31d2b51fea7967e8cfd55c3d0b909016e554b50afd8cc631b93bda91d97fc3bef66610672725d949aba10d11368eae7c4201d90f962fb55efbd47f7561d018c6186798ed92ee6efa08bec5aee74c2a774cfab1f6617358757e79bcc481a3d7d3d44b48c25821d4ed4bc412eae88b722743b975d75777de84993f5197a8c7d941d27c2dde3b5e66fb6cc4207dcf2c6d2b17ef4720f1c9dd357d023fb32d196d65b1133bb07474fd1cbf6710f338b8bb3c46260a41d25b5d658e06882d4e3b47a06f15b87d9aa6fb944cc5369cf897999e269a2fdea5245760352dcacb99b9dbd4dd7d9a1a76d56c65b5b37e887b2a8da9e1df3c43cd4918482785c0ef161d0039c11482fb2bc3abca6ce4b7ae465c82b905723271292317e8ea2fdb83056fdcf3d8b48fb0838df66adb096dd56c274d026885952977859a5d74207927336c3eb8c30f9e94de5bcec81f45d13b3af9af9a167924af1ed752c4ceac4401156b05508098c7ce5b97860c376f19b6d370675a2eb99bb690d9de3c8a49819a791e5923ac3255826928ccdd5bcdc803201eea76bd4433a6675bb2d53bbbadab8f55b096e604cd24c52dc08a3a944e43f3b8a06db7b5968ecb96476691d972ae65ea173927377ca063b1357a50c0fe7b188f58c7b65a2d3db5a0070c25b7daf3f623e58585d89765abb262cb44eda65525d8d830691fe0188c7c33ca1b51365db37ce8071d5fc02fc6d255a4ed2c660e04eda27ed17cc3376f8c05ba1fc00c7707cab4f625af6632764e804ab81d6034719027eecb0ddde93f019618e56b15860b1e859c23aecf76c5609e39826a09edc8edabbbd189a6b5f81e323f1ad7630ad0581f5deb624566bda0ada5799e30db59f6e27f813f44f2c2eb9205c91b334b193f344a782a485e929282b55097899d76fc065eb1704b949fd5a7fceac4664e4040a97f67f017bcdab4cd2d6d5f293fab95a77dca8ff67f0128e7dd1f2055f513655034ae4cdb54f2c80e7219aa02ef63f0276d5a58e10616893587d7d493b3f10993893451426c11847f82590724c05b78098bd3e909c264fc7371c0c63ff98dffc40026110002020005030501010000000000000000010211031012215031404104203251702280ffda0008010211013f01ff006ca46c892f2b83aacef25c045d12ebc3a1fd6696dc035e445ee328487d04ac977db557b2b272443fab4355b77fa8d46a2de7aa4be22ef2387264a2e39d655dfe1c6c9ca9d11959354e85c1613f04b77661edb8ddbb12be86997d64f8086e50cf45f26cd707e4d3164b0709f83112526977f66b659e9b1a187d4d7832dc8cb0e3d192c6828b69f0c8d3635c0dfb2c7c1dfe2f4515c2dfef1fffc40023110001030401040300000000000000000001000211031012504004213170202280ffda0008010111013f01fd2c34c39b2a50d19371a23a722c058a9d04a9b4a952879450e71f906aaa7182819efcfc562b1502f51992636398faec6f64caad7f8d275157010152a322555663f60a93b2683a3ea98489098316c2ae723804d18b6348e42d53c2836c8a1a0c6cf692a1c141506c34850769b1f5dca9d347be3fffc4003e10000102030505050703020505000000000100020311211012314151202232506113307181910433425260a1b123627240821490b2c1d1436392a2e1ffda0008010000063f02ff002baac41e4b758e72dd86d0be1f4588ff00c562df4550c2b7e17a15525be21522b7b86c285ef1ebb2f68175c33e6f2636f3cf4528ce3e05768c718ba81492a426f9d5503478342e32b8dcb8caab587c5ab7bd9dbfda64a8e7c3f1aa9c27b2279a97ea316f80e0b8ae9ebb313da5d5c9811ed6b3cf4419137a1e455e6998e6dbc24ef9916cea3eeb7dbd9c439eaab51911dc4a77868e5bccec9dab55e84e110290739a742a515be6d536381510f4b6592bd0cf92d1fa736bede267e17f8789e2c3a2b8ede1982af3784fdbb99b5d2577da21cfaa9fb3440efda715f131c11851057552b66bfc4419ddcff6a91e31f7e6d36f09ab53628cf1f145baabaec7bbbaf93dba397e91b8ef95dff2a4e123b001e17d0a0e87c06ad41e39a9f99b508c13f161e3607eaabde5d350a6360038ff00ba305df17e79b4db406a1078f8aa9d64bfa074239d426c76e7f94d78c08e6a5d9b2aae1cb04ef0fe88386215331309d08e2dc3985dbc2f69b4e6e876fa77ae67ca57ed71fcecbe464a4e3bedc79545ae6a4edf1d54a775da1d80ff009937d36643be1fba8a1bfc935914c9faebb1d903bee4d9e0ea1e55ed16514a779ba15bc6e1eab76234f9a27e5aa774d890efdaed0a1fc9685765144c0f5083ef0ba73572054fccaf39427eb34c7ea394fb50e876a579d2f14fea3fa48235365dff00aade1ea148dad3a3916e8794c5fee4e6fa7733fe8608ea6cbc3108456fc78f43686fed9a88de93e52f1aff00c26c4cdb43dc4bfa263749ed5ce92446a394c27eb24e63b034523b73eeabdeb7d513a057b268e5309fe49aff00982bdaf7d82a89a9b3d36a768d9739447792744f98f29701c4da84e879b6a110a47bba0537598298c17ed777be25428231e2298cd072a1159c06a83dbc0ea85786c9d893429b9506cb8798d8af701a9a3257f2067cacb1c9dec91e8323a22c7296dccd02c29b449320113f0e4178d97a5357db97717b54e399dd09f135a72c98f78305d944f7acc3aabc32dbae3b40665762de11c5b53da9581a324c607b68355373dbea8398660f29bd11d20aec39b19f753acd7fdccc6aa5965b06c0fcb353d932e2c06c502baec7b8bc5485ac84d1389f114c6683944dd8e4355dbc632665ff00c54121a5979a6a169106236fb276582336ca5f7b264c829953c9b8595545c3270a1400a516a754366b82e96f6afc7208c67e5f9e525f121bbd15d706b80c885fa8ceccea15e831838755bf0e9a853142a7b41edc429c2749caf16c8e0535ae06e8af8ac6a70b035a2f38a25c6f45c82e297ed22a8994a69e7e5dd5e76d36af3f8bf0835b864831b80e55bec054e0bbc8af89855d8b4fdc15eb8c78d54e1820e9b01f929b77db60ba7155cac37f157618f13a2ba1cdbd9926abdeb3d54da414658aea50f1b2e3055387eda9d999e3ff004aeca1098ff52af19c796c9c011d54e11b874c9566dfc155dd72be3ced7432bb33f0fe117b5b3071964afd40eaa42cde6ab8d175bd17ba67a2a31be9b03f92a608b4093863d55c1e7b179c77bf0ae306ee9aabcee3fc730bae130af41a8f955c7d5ba154b2fc8c93ee0deca6a6f9780b285b7762722ee8365a1ee934565aa6b2160135f0cca54b64156b10fd94809953357ebccf78575440ad6c6b6f10d9eaa4da6cd480b72bd7258db572dc6ade7592ba1a1100cc0b37788e7631d0da04c579a38f453f352180c4aa3c79a938b1cd1ad98ae36faa20ba87aa98913ae2887c60552f3bc02dc601e355589e42cc556230789520e0e1d3355881a144771315f94db6ba1695e6913f894f3e015d3e2e526d566e3a0538a6e8d17c43cd71b948c5739da057b06d995975a10bec1129c20e0b7d911be066a4d3376855f8187caa5120827aaa8901904181dbd982af43dd77caa468537ad39a3ff894e25b33905404f40a719d3e81498d0058035d271392137be654fb30659953380b6415d6506ab75c7a95fa95fe4a0be19dd27d2b65402aedd122a708c8e8549ed25bd6a149fb8f4d9f88281e65d6c9baf16e8a50c002d7bdb8808c47ba66724c29d6f4b2aa415534a867a6ccd9fa6ee9829105ed1a2873041967cc64315358c96f198579aa763f575058d53520ab52a4d532a985b0dda950bc39c12bc163611a22af38c8298a30608043c55d18666cd059d362042d1b3298dd0737361b67aa311e6414ceec20a82417820ab829e56553656c8693578f0b2a79ccc60a2428e277b3571a2f4f05748916e20aa55c7057bda9d37650c64bfdaca2c0ac29662a881b5be324587312e74c233922fd3742d1e307293c7095772526d4a739f8c90d9a516368298e3c2e37bc8f3a851865441ccc2c71c9d54d03152f8b328b18667328598edb41c135a45065ce9d0ce6aeb853f2b79d70f554bcff0005da16190c029346efd95d38d95b386d9da5da27bb4079ddd7b4382a17354ccdde2aeb982489949ad09f10e26ca8b71b096898169779a8aee9cfd905b8bcabb8c95160b0546aa9b19080c1b557a1d3a2df6aacae9c829874cbebcfdef6e10852c95b82e14d864ca69eed682d6eeef39df65276f422839a660f3d73b3c027fcc4ef22dc953671aac44f30b05bc643ee502e1203842decea3a2ecdf5629f3c2c709829c21bb05bdfa4fd710a95eadaed60be2f55d50a210e1efbc7a2edbda3c6e9e7c4fcd5b28a45e4f8d982c160a920aaf5442117481c54c09bb53cfdb134a774633aa1b884f7e83e8073350a5dcc469c0b5447ea65f40888050d502381d51dcb06b5fa05f3caa1180ffed45aec6d3ab7f1b134c70d3e81737508388ab4e0af35c1b106454ac85ed1294dd2f10a70cc9545866649b784b4fa0a4f682ae126e3b84a043f1e89908d466ae3a92c24849d79855eb824a81063f01597d090dc9ac79378745db383aeaa5f3e0d4e86672f04ff0066f68e072172e900e4bfb8fd073557b3d5714353bcd91520f69f35ef19eaaf4495e3d57bcffdd074374dff00c91bce7381c8fd04f0345eedde9641f12bc8d8c2d6122e05bcd23c537e827cb096ed13c8c436ab13641f136b2a78058dfa0a36185698a378fc34e8bde1b1b78234b181ae205c0b79d340e9f41c8af74d9947f4e19a4c4970530c7a202e09ba59ea8b0c06ce415e74012cbd6489ec9b890b75a07d08089e041928864e71384c4b157a559fda499b9374c5e13530d955b49a30e541f7aa734b6932673ff2c6ffc4002b10010002020005020603010101000000000100112131104151617150812091a1b1c1d13060f0e1f190ffda0008010000013f21ff00e5ca816e0980bfd329fa7a8dd1f75629a4f8e1857b849f64e096d8bfc6a619ef45a83793e301efe9113eb2b7e6192cf5618fd2e4229ddf42bda0c00421fb8e0e12d67feb454cb9df305f6761f7108e68fd880d1fa146645eeea7bf98c32a4f02444b1b38ad16ea60da0fc0fa4724d981bf1edda65edd3cbc42837e67ab78680d91c49f90253140b0ff00971c2a2f64fc62ab147b43eddb971e6cde080f07f0ca805bfd509aa7feb5286dedca28fbc7e7887960553291595c997221cd69943316dfe3d5b0573bcf3441f782ed12fa27311512db4eff008574518227a3fd897bde9d7b273a7b3303c2ea8e384405319e75d6310a6bac32b4388e57ea612859fcbd585634bba768f28fa3d20d8d08e9a18fe3c15d1b7f5992ee963dbf697aa7c9947bc41298cfb4dc1c5ba622c8967e27367d9d1f55a184bcab880532b0d60f99cbfe424309abe5e25cd9159644bc311fd989b6261e826374c29e43d595e65321a43d8f385d8678731edfcb55ae096532e063e726076d7ec9cd457aad405fd27396adb5c0b3eee35a9dfc023afe37d99b223dfe672d464bf0f50fbc067e14111c8c2ffe45289d1257015590697c15a8f29ac7f25dbbb8f0c7dbfa4ffaf873ee83946b43853cfa3e9448dac4dfd650a767f69403e0fd7e6067c93ba88d9e78bd91b91f3600a3f96bdc84688ca33534b17d7c0740761d08ce55f5ed7d7d2b21d07f1365339915184efcccae9e9f39f4a38a04cb8c4bdd379e36df321d47f1ae6baf13b786517eda88d53b9a99e2eacc09b4162659272de43c7597eaab96f6cad7a1f267bc079f49610b6f3e7c51ca3d0caa0993584b54a03b1c554a56edfe4a076e3a117a54df83803a572fa532ccd1c9805e33c3cf77d6a65cff00b7a4ac98e8cefc3e2d8e0b2d5fdbf97258ec3c352764b82296b20caef40c3e64d787983faae7920f493db17f294cecf619bf875e1aa0c15f0286d94f817844bc303e07594e6163efc1d32d8f282a5d637303d10ef0a7a49bcd50fda334c2a65f94d3c1e2c59516dbc4614edf0284ed265163a7c268f9e1ac555ea70594750c152b9c86ded1cbda32a2d85f49407bfe52b6e42f9e7319d6de651875f08b075e0a1b88ebe0b8f6104c60b6e082facde0763c5f2e037c1a115270d21b380f08a99e73432f83341e0f49a217f429ff00042e7055e71136128dfc1978f01bcbc50476aa21103303ae5d0986a91b63f6cc88743b71da6f44318e1b4e58ef8ab50d5ba8cf12e77750c5e51e945465a7e48199a30a5eb6f818e254af82e8163f47f4817c12029d4b850ac9d279d2692e71b6146367172bc382e2101cf719aa77e097b5f8135f8f4bd0bba7a3d666207ccfd335c8ccf67131c4d221148b68397580051af8692c2d667097ff00a4f9514a29d14e4f38cabb64e67070705982f11525bd27f824dcbccdebede987535b5d7b46d562b6cf4f33afdb78e2ea69179111c9b86bb88b29f0e11d89973aaeaf4e045dcce4cc1896d1ab3334b739d3c32e0198c63530568202ab31f7e70a89b106e27282052693e93469f59f11143b0da535c16ef9cb9b543f7096c36cf06c9c839cc079b55306a3f34e0c62d3257c360d9f320a3395caf5942591fa66e52cada2981f1379e06785714427c0bf68f7d3c16002d794bcb19fc24ed267a46c33d7b8b050e29cfb7ed1de92d0e50d954832092fa8037f908e30cd90f39a780833286ecedea4114b30f2e04e60e6c0fa3477ecbcb9c022e6a3d8469b3f244720657a65aca5e2edc1d41cf820ae8ee36263a7807ce29d3f9905abb5fa4af3de5950414c12c0a9895f649f37809904f744737434912c00bba239c701b661c8c31920c0a7b26a43b3f50c28da3b91695ed540f821d2180117be9044c385868ed3287bf8065ab6675d0e5083dd53e4dcd5e30d1c11b02eb2cc0ea63e00a805acc62a17da0ab31d3eeb34587cfd2a91de39cc8b3fef73293abe4fee2a52ff008e484961e52589af98f116476d9b9ae536282cadd4a5e8f4826e0f245a417d06e3633ccbb2eba3b4d401b7515305aeb4da4371dde4a282c430f34b5ebc648585f481bcb67acce6e2ca016ba200c38e5e420b45beebf50b49d8e9dbd35cbd72172cfbb198a78b3de14e53a6e9f1115143a74e34c9b984c7d9a5f38b776636509deae866560a3854f2ba6268d0aac666bcd1a97e070b306a541f2129bf236cebd3cdf74bcbde635c188055d04a46eb7ec3bc3ac13a6fca52c167a8100df931aeaf51bf68420eb7951cb2b380006c85e51fc98be4df998952be13df81d729a4cfc0aa597473228467c706221758415efbeef59944723a71300abca020c266a00eee5072988efbe8f1ea7ae7ca77013d0a0f583640b378a8c3c0e92fe02acceed4a6af3620699b3c01b49ac2fa4c47bcc43327435132759509b33d59d582635c07ddfd1115adb3a38236bea9dac4ccd5c863573374a7e244e4d257d7bc1e15fbce49268201ef453549e50c3682d0af146be5376f60fbcc4776703375780fa42a7228796a39045a18e185a1ccdcd944902adef154e4529ca522152d76d57d531ff0622059707bbff2154076779742fdb1ad47210a20f49962ca06eb2f24bda32ec2ff005e93099a0577e258f6875628e632ce53f68205c5955f956a369e18fc206b573518dc6fe61e250c3e9a6358b92310419d86e388f5169f111021b19d9eadefea829f5fb11be6d77a56be42129af3dbf9cf1188e0ec4bda9a80fcdb9e2529b2dac0988280d042c6094e91fb8bd27bb9f3b1521ae865aeceb9b1d98057b383ebf04505cf8a975fef1b97291ff06547625fdc4c426969846692fd4b18662f8a29ed045fbc43c03c838d5667107ea811d779367adcd565813915452a72f48bd11d215b58b5a87c85467775f81014964befbc1ed3960939fd25050220a71ea3dfdfa4bb32cb3aa3b47e993e91a8908470045e45c187923ca2802d99cfd49575bed30a96c6c3083aa693fd2747fd82bc5f57563d22426d8d4f2183806577546a327e11608c4c3ce6466098055d63aa013b687499d661c8604a81d5503ca7808ea60dbf7c6760d3e9eae6cbb43490155978c4a8a8c4b653f6cfcd898e1d7e3fdcd8a60a1d107c42175170c6550ab967212f9100cc98741816105f8471db6f9235ee43b9d3d6558af9bb4c3db9cf63e61141bb5e9132997b5101362840e3abcfa3cfa4459a034344a0ae701c9b8aece2889691ca54d89ed2fd8562b1ca6251f0e25d367be273841793d6a9ad557e222ba1f2f6fcfed023da5cbfe4c0a8e50e4cb0b5ac972d4159d20b8bb9ae471d47427622fca50d9f095b6de60bcbe5c1d2f262bc0043eb45ee676fb9f98c05b3e52e29c6af773837958266c1a4b2c96034476a971ca759af24ed608e91e1675223cf899b7a1c057bbda4a0e633a282fd6b57277d182b41f47842337618847273c0861e6617f30b3639e43f72c988b52b941d172a7012a6e9ecc3c544c98880f410d59db9e1d3413fc619af5b44a3c925abb70dca70fdf897071ac6a2002fa88ba725b986334f998e10faf07b9c167e71c765acbe9ce286f368c5a9e83d7cd9acc0e9ff00b0d8a2c54e6f39507089751da0f9bee45d401d58bfa499dabeeb3420cbae778972c8e71b1109444364352d126bd7f3bd43ecbf9ac5373f130b7667254f988397e714454c0f32fc2adec112f0c36eb3d66350a6ce821fbb2fc7720c0d24f5dffdf433395746dd397e606ec38f1328a996acefb4292d8dc6f42d89c98c7e69b82e7f2cb976cfb043e84ae89fb9bf85d90a320e43ee44006c75eb94aa5491dbdd72613a32b0dfdd31775af81306973de5c6bd27383da108c977d621ac3bc1949f730c861764a920559a7ee18bf2d363e7f5ebdd0a0429da59b49dc8d60ba2b9c9a1d6be7027fe26656be6a63a013f0362636f2749d2d98418f2efd7afd3c65da2b3c2863d32f3da621528e914bcbf93303d5b41cadfe801e28f3197052aa751705de26fbcaf4e236f10fbced223dbff007fa0a676fe6e64079616f6e92c2fa70dae18d7038e17439ac4eab0b7bff4123191e048bb775d185d509738030bae9c4e197ae8485ae27fa0f7a2252a4b0a86fb507da02d6e32a39958a3fe3ac2b7393993a7dd4e0550e859dde931f897e47f42a1b7ea4c6d07b1e65c2d0ba8585d9f740c14f611ea6bc5988c936ae1a9be73d26056c5d55ca05147f43b2ae05166981cab62096388516ce8bcaca05bc0b95f626166ab757c985a413d92eeb487f43405341b60b4a3b880e83dc9495f436665c11d08075f212d210bbc6e55aa788a209ada5438955c40000507f41288b5747b7177f83d66aff589ca6df18095d99d527dff00dbfa0ad0bd2608c398cbde5c908d39d4ff00dfe1fe8f597df80290e9b1576af99f77f6fe82dd35b993294d8f9642c9596a94e1c658b932e7bcd31ae9394bc78289437575700060abfd0c182c7090f52e8bc056d6546d568535cb3e65394ccb75368726386b56fd4340a4c3d58b19253ec60652c2be518425ceebfa2180475217cfe91e50683c930ad6225df65fac51cce1b6a26b56851a364d03e632cfed114ca4ab36ff00f31bffda000c03000001110211000010f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf34ff007ff7c3cf3cdf4f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf34e5ef8d950fece30d3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf28305dbefae37f78a0b4f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3caec836fbefbebaee7ff003cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cd3cf0407afb6fbefaa48cf3ce3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c4d8d3c2ebdbefbefaafa79381bcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c2c63b47cadbefbefaeca9bb8557f3cf3cf3cf3cf3cf3cf3cf3cf3cf3c836e47e1d5b38f3dabab450805ff003cf3cf3cf3cf3cf3cf3cf3cf3cf3c010ec19e30c5534f9a9fcdcb5dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cff00bcee017f030d0e8634080603cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3ce24c1b105803461204de4c2c3c3f3cf3cf3cf3cf3cf3cf3cf3cf3cf3831dd3730f6d1956cb66d86345f7f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb1fe200f8215f6162457482b5fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf0b87f3223e2a8cff009fd7f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2cfe36de1a840fdcc73ff003cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3677cfcf8867ba70e3cff3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c86b9bf0caf4a22273cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf220890895e2b9bf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf194826a98b071df3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3f554f13a486f3f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3f6ffb90b72d3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf078e5fcfb204fcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3bacd18da37f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf2c4647eb836f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cd50712614f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb343d4b94f3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf33c1f1dcf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3c9031c853cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cb10708ff00cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cffc400241101000201040104030100000000000000010011102021314050304151717091c1a1ffda0008010211013f10fc4952a54ad35ddb866a54a25602277874d4aca77087a2c7cf844c187d079898adbac62a57a4e08c7aa7418f5486a57787dd02b58c7aa41d00ad129f68abce0a08e008ba5eb841cd8c95716f5a5c4ead4bd1cc1b3ea0b9b721bba58f5ae10714009ca14b106fb616cdaa5ca8cba3db0c5ec8c182aa378158e6106c4a150a08e622572617b77b4165e53e25be22d1970252ab8139c3da16c9bb24b81012a11b11a78c5cb8f64ddb8454a65b8830151da2df784b515d0037e25d288a85c43ddfa955cce187bdb14cd9b7b4a8c60cf8fe90e20fd910f0304dc4e02463de11c453de368421ddf78efc97fece193f44244bfd977bc7c005b025128837b22387310f004032e041463f18a3df31c4b4b62c5f02381c31f02418b2e3e1184bf074c89e09ad078f064db0fe50ffc400221101000202020300030101000000000000010011102131402041503051706171ffda0008010111013f10fe4972e5cbf1beea444c5cb97065e160f793c6e5e47b8c7f08c3e31d95a83879fc471065cbb7ace2e5e1fc07108e07c4703aac7c9045b15f818610eab13c1d732de327787260ebac4c8b2a182056bc0cdd41eaacaf1d972b73dd2ea29c83c8eb56130d222a38b0c6d0a8d40d6f0103b2912146e2df852c4e65fbf8609a603b75bc219ff729ee01ea12a3a10b883783b4ad9dff009354f7858ac65f854a87658791846fdcbfc0915d8bb8ce6183ba2bd52aad714c76c323ea5fb659fbc183bdaf10176f302e70128f52d203ee252d87790600f52a7010d08af241907e118cb96ce3b946983f0189faca0c0421df65cb944a301f0530e087c1625408950f88603e1db0b83f0b7910e7e26f07f50fffc4002b1001000201030206020203010100000000010011213141516171108191a1b1c150d1e1f0203060f190ffda0008010000013f10ff00e5ca040355748a299dcbfb4b812e5a3f6fb45de2973f515f783ee1c8f925ff0070088e0fab3e18b603d5fa53ee1e74f2bef6888a1a597a35000823a27f982e5d0ebb5eafb53129230aa9fa753f98804112c4dff2c58aecd92e5ad7b4b18457797db47ace25ccaee116364b063507ab5ed317d887d45f6bb01f0787699c49d3de6cff00a9f70198b79ba87a5a4dfb781143ff0080adc7bc57037b9bfd30f28dafd163da6b87e81eba43424c88d8f8822002d5da3ef15b956ca76197ac42c582fe47f4a6246f3e5394ea726a4d12f0b7f96658828bea7274868481b33b7c6e3ed2ca85d343bf47bc6263dd7ea7a7f99832d154ca5a4d681224ea574dea69ec779621720f1f6d1f262360e0b5e6a668ddc3cd7d4e65f0b3dc6a4742ac2f5fe4960d4ad3c4f440f31050eb74af9387acee9630753783280646bd791f96d549a28ced3cb5f27994f0e5b75aba5b5ebffb289131b8eeebd48a8e805c9c3c9c313fd1745ee0e1ee68c0036283b4edbf9185206be984d5f9d7788752b163fcc7b44743479537934f48017c712b05928192d20c845a0b1e8f486243fea7e0facb4f800c0387d9f954129c92dcaaa7567c8fb543080a86c6b2f7701e8ecf933050aa5e495fe9d11dcd195da05a4f6d47ac3db075578daedea89b59e34f7ea758343a2320b194ad568c0a50b5a074b3bfcb37620a072ffb919a379ae0b53f2a56d029bd864f32cf487a32bbec327a98f22598c233438387f1f128a6c6cf1fec545ee6ef6ddb4880953d609e8308d164268b577c0c580c8ec67dfd997e4e7fa16413d3f2d6ba031b5b7eccc5e1e87607a8cb80b6a7a23359a4fddf513fd992f0bd4d9f036c83131b1e5b53ccf8842d8526d98f53e19a0723d2f6fcae29d228cbb1f0f947b21c970e13e1f59d7ef8bc78e3af58f8816ace7fd2f862e4eddb6f380b544bd190f926c8ca75bea793f3f904ef1a5e3c39ad7fc4db0148ee45e0e70eb6c7b4c572baec90a4a8475086234638cb80889d0eae6000050687faee220fb8decdfacaccd5f6fe35edfe269262aa94b2c978ce6b85bf60a7b7e2b1e6eea6b47b314a2dd5cd74d5eb33c06e82bd1d1f9e9fe1b5e15e43ed52fcb636f2c7c54263d2d5ebe3d87525eac6047107bffa9f1bfda7befa9ee4b872c0870d9f3113903e4d6ecf79af8d2c9a9cefdbc5d4ec0c195a9e54f7fc51eaafe110a0138601903a2ca05626c8e8ea407b4525f2085998d8d7d2678081e9a3f23e5046308f2d67e22d9e4dcaf0b732d86a12d4dde7fd7495d8f8a02e7d2118c1ff00e662e08303a9dff739f5330f1d4d2a0801000579c10cd937f61d74ef2e6eec569cac70b5664e6d3e6059da6fb0fb8fe27002739a0fd4bc1e1abd1e90f77cc8e414c340e86c1c5691ef52f3decfab87852c6ae93cd8ba7fb309350df8e5de942aeeb85b7efe0db02ea6d6fea6de92e9bf5a66877c6d0a40a6ef856c65bcaa5f24b56ce3e80bf9bfc4d35e1467bcc0d45ef3c9e9a797831f0662be5e14172e47068ff6fc2ceaf1e1efa7217b2ffdf0586fe89220a5e1ece8f3c3e71da7b785e872e77b0fa8f9f800ecd7dfe276b2c9e7f7441b7dd1a5e8fcc1009a318c6305db848b529134d56100603c0f0d1423b36c4f13b276c2d19daa3c15af4f0764e14f0d1ef0046d7a0b15f1e1ed98edb390a75e65475965192c0758d58bd19d0a97becfdc47e9fc48624c8e8dcb294e0edc3eb50416ac0e123b70c5e2312a167f540f00b9a965e09a4b4e937b72f8ea8e788ddab98a0a3820000001a1e0e9f5f0c07c1a3de7417c12e55d882d1c9051c0a96717e40cbe6a20156beb5fb8354b66f5b283dff12822399ea20fb97aaca471c7b89407b3f779c7de7c25df5f0633adecc318da096a8805607f82468cbc10f88f5c667bcb0f79a2bcaddeccc7f91e38bba2865d22225e5c12e3c1d6501b32ef31d13961b0ebe15f123ddcfd13ec2bab6fb1ef11a8ca4f33d57d3f12fb203d5751e6592e86ee0e763e1f59b0430f0ed0d0a6a4e18b88b20896367830f9080397622aecb7c75973c42e85dea5e17ab10d8a06c51025604a6cbb99249a73d0c2c1b3f05b9ebf3e2ae691d2bcca0068782b27078153d311dd3882c4502ba11ee94b3f07c451d6b03b03e656453b5ba197d7f159249134feeb5d1e91c3c826d7b794ad2c615e639895640bac11d25799568995b72cd22816b0ab86fc440610e57e1ccac85d55a7f8390b51268367023fb528ef898a946a324a21f70e2767c5da9a8ed1587425ddb06af94d44d65c1348447a02df6262156578c67d7f163aa86ccc96826e12fe8ba27f4bef10c03a3f490ada5af04895734af2f811e5842cea6aca98f3c5d6000018036ff11e8a29c0111b94bb54d94d0ed303957040589dd36460286beee33fb971d8c34940ed1c4d2f2c25e77595af6bb2562d57cd9cbf403ce6ba82bd327ddf6fc65730578bcbea64a194c43aae8f795856544df979789cbb4d38eb9319653a0ea0968efd53c9bff789de45ff008dbc8743db55e844cfdc4bcaec3784b400859de5647354748221636d7b0751d60568ae8be23b4e19630e0f2812ccb432cbce2d97837608b0060e0865454470acabf43ca5693ac16b2beab35683617e46f022b587e25b0068395e06ecd38c297aa9a762060402ed1e6e2da0ac783b97c9e73a980e9c79783f42174b51e90aee6b2e979fa95eda882bbba870ef2e40811371ff0010a979eabe8d7ca3662ab1aa756158ebb1cc44ab06b85451af697b6408e8cbb17108d0a4bb3cbc351d6fc3bb32ca490dabb46931eaf3fc408e732c5d6007560a4686572e92c300a35ba19fc45f3cd1193e8e59737e80f46fba80c30169077dde580e75893496148c55bb898137e8726dac0a411309e1315b574ed2896a8667535233074488d6c6d3d1f280f2a1d10abb3c350102622b04ac1b976974b3a578773ebca0bcbc4e390f8fae3183bc734503af423c3c436c0b6ae817f7039681d6bbcd713d0173422a4f12a15bc5c424190df8f38ad69e9cbbc635802ac0102510ec2d0eff0005ca512a2985681db5f4fc4381a2d995814310d03a41cc543a1c62a6607fe84fd4b8bba001ea69e90150fed534f38bcced54910f1600bcd4c2c76889a5779536e76798946a4655fc310458c67dc72fe2310424c6835d2e0002a358ae07a1ad6ec54d2b4cf998f899962c28a1dbfc12f5284730dbd4a62e0d10253189481fc31141e5a520507aeef797c43b9d2c5d3cd08726f47b30d59ad465d85379b04a6cc2dd7c2ca0aa971502a802d5e22db0c57a3fbe585d0253180feaf4215154af75baf57f15624d515a3d9330d4a3530be43ec86aafa06bccd041881c53fc1e9147fdfa4c8f79a82559a9bd2e495e1646fb4412d3146794066089acb375fa9912c30a98f37974416e3f09a9682d9bada09c8381586a23406c9a1b2a6b886362efbbd22909140f770749a24f247d10d545f59510a384a0bd33fa88b6a0bd52dabddcc75d61f0cd08d0b58ec395d88df8284cb183b5d513d2f146cb002d5e22f6762ef599e797c88c2292c2b61db81e6f40b8395e9d0e87bfe3759a11032d11725e9f67bc62b30e1fc31db4b1666ea74ecc76b5dd1a9dfb3e20ec08a37b33f513735db6562d276c95b54bb36515ee10328eb8d1bc4001082b25dcbc86bac20208825258ecc10596b14aed666a3a2aab188eb937eb30ac52ad0b3d8757d40028a026beea798a2029755ee0ca557f56bbcd5378abe1b71d3698013666e9b763fba40a51e0f1da816ac7a0b2adb0fb9c9f481924016bb3f420da86770f075e5fc86bd3d1b26fd814c3bb7f9ef33f544e7985e4ed125d2575aebe02a60315ea61ac1a3846f6a6d8ccbb41913eab2be9e0868d14953bdb7a753fc28065a825a9aa301a1af94a86a2801615554676accc186aaef26a7995f0a5ab70ff003eb2b7d6f77c18bb500cca38e800e2f6f962068d0b039e843d416863a7f6fc9b2d02b047ecef150ad429178c4c84743c05001731883329d7cff7e0bf1eb248be53345e810f3dfca1b21356a8f2369acd153d5ccbd2a7967d35f696490db0fb6bf115283a5fcbce134516955c018e70c3d339ccd10e2b043ccab2cd22128867d4707ee3772655de010857c8386dd75fca7fe438415cb18f23ff00209b8340d1fb651b41c215e642e13c904f4c13b5c7286b650f9386199775b3e66b73c9fb802370b55dc7129c80bd19dd565f79dd01e3097969c56f5fd2580dd96bd0a2505d6cfc4255946ddd9454ec88a395cad7b0c188934031cca987a6d47b6d14c95a7b451a6f72c587562f0e4e33ac386fce5ad00c1aa1dca343f5ebf945638f990c85411aac1abf0968f374d2308a68dd41b06384d1d89be8272bf442621b2d7eb88ed1ba860c16633c7ab20f7971b0b42c75eaae9280a68f119b1dd9f481fa8d907d4300eacb20a3906cd16a6ab3e698f50cd2db04af2c5cb29796f97a9d4e9ac654a82f04dea0f5cb1483caeecefc92378bc240d239c6ea70f8ed1cb85029236657c69f35f94e8a8f74470696a8ab857a5b2f9fbc0575dd8eece743ba877d4f954241db557df9f017a955a91bd3357530fb65022b4d72c5eedd96ec5e0d0f48c0009f40e0eae61c002f880b74b8d560f2c3356172d858890d92b7bd6b2c452b13f42b4f980cd0eada875cd5104413241684e09f98c20154e994e3a83d9e5abd6e5338a80fa1b3c925b2bca5e3cb87462a068dd88cd0090ecfe4ac68e2bc1000a244e12ec02da8bf3ad3a4e2cf8abbf5f1af95812c3ac42ec689570be418f58470152da1a807c44732e015a4cdabadac0be942016b8cfdc64074b42592a6c6c4bb4daffbe51dcb40bcd63ebfc1c990a44b19442dcd9c9d7f4a84da0ad497af23d22f2b10070c8f6fc8f4f9978fee33a9705eab1e171a02abce39de739629501d4344989abd4e1f03694f50bafa1732acef7055e22966e0beb2e7d4b43ee5455ecf64da0e9534fe5029219576974ef26ecdef4c16fa4d682e03d47d918aeab7ae7f2e68e81638d6996586d87b8f3ed154d15c12c60a846f1c2b32ec633b2c3044adabe3bc5fac536e57abc4ad187d55175eaa84c880468743962baa3d56abf71c6df759a235e088688b372d5c0ed07e334dd59262bb4a201ad0dd2e9e84570a5f3a82ff002ec56aba9975d00cb22cb3a781eaad2d3da2a5a3025610d5f33af00375cca7220eef4393da341b04dbaeeeef2ca9aca3d580066ca3d22cd06e53adc7b1d614a0cec4cc076628acaa569a435a4fb4a1795caa6af9016fb12a21215cbd95c633dbf32fc9720d62f183363384e08c3456b41635be2acf58f0c66a239adceb2b4814acbedc4ca552b06d8fb0cf5851005168780da13873f6972c379a3581b8c1d635bcd8881b2fd7080e62db5f335b40b0fa8cb0036d24071d46988223bc63daf2d0fda6022b4f25fd3f9a3ca880df2af68bc5955e17b984222adef170f2b726b330c04f0970cc5ab569d196a18402e55ca207256fcb05754b94707a4bff00545b6f94d43ef05db1d49f110bc19296fa92f3d56097119524f98dc4251468607d1bfcd034ad736cc03e2c837e87ac073304c7d2a7c07ce389b611bb75f70e592c3bbc5f04edac4adc396261a68d4c3787c2104d3d59eca0df856a663ac58836e05cb51560973cf5d505b5ed06698a18632b8fcd6372814ea0f93109474dae54106e4c9ea250c010ae6eec48d41b32682b6bd58ec01447ae7774cca5cb2c4aa48500603103a01d4978a8e1580194474d5ba20dd77394af78cd68c9d626e0dbc2de342777f88373107a07b7e6f51885af4e22816ec41ea5fbc1407fd0010883a8634e89a46b5cd0147db2aa8b028abb1d0af88305fd1b900bbbcc27327afee73b3ca7f48cc60b1ccd1660f18d8e5de50270982b9987035bed8faf589ac04bdd5fafcfdc08cea109479a3d23983d9381d2f116d592fa4c9dfce45da04d6097a454bf8609654165acf6875caab46b2f846e607a6744be928979c95575b5c1b8a00c5717acc0854823180ae2dfcfe65b53504fb07944f173bb9b8f91d33d6713637d260b5f4154dc2ed3be0f78c6aa9d56370eacd0a01556d8f9b708d164754711bf4667526c0e05569abed1fe4695fd0f241ee96ac27e7683d966c6017b6b106abc346181d23a9e472c9338c9b2b210100ea744d82f6674c89724a51516a81a318700a5944d673e3953a0c4729c7f422207933b9977dcc4226b62ec604efbf31d1a859653e941042146e3f9c225fd61cc2c570b2281a379500b8a0f40ee1eb52e94fbb61ce3279901403860fa4cf6210721dad9786275a40d82fa12f92e0298534ee21f3306efaa3643142838c6eff3a4adc8eb5fbeeed2e24ee03b2762028a307e75eae893e54fb933816e903181a2a24ed03d7de25a5eca7c31f63fdf24dece39fd229b32ee7b47d40cb3575385488e8466cb2c67e4518a81735af9cd148c965d0d0fcfea0057a3a7b9ef3ad0c31c6b1d48307757788ed7da526bec95c0829a1e92ed9e92d300a962011f771da5d0420184147a0ffc029c2d8b6da8f78ab1ba54dc4732aca778a3649aa28e126002bda552ca114dc7696b0d8f855c07c74a15ef7ed2e03587417ff02068d3898743771bf3639afdd33a9a3313d7e10ccb2ae8e1ed00300be21acb1f49530658a35d65f8579d95fc57fc0d9916ddc7f12a0d6bbd3e3cbe197f134f09c9d19635a3a4c55c5d4c390f2f275e89c4af0dc63329bd4cf411fd4a7817036c7fc082b55ea2540c8be01c3b7449a56f325374b8f7842ca3b23ee443c92cac271666b84a7a4144d306d1e388eba0eb131ea97ba9abc495f2993360b6b6e1f9ff0082e25929e83a90988d5a5a70791a1e99830c0dc372e39e345464069db11a4aede17aac1a57480880d60784d9eccd54542874ff00d86492b005f296d23a0abee7dc00000280307fc1da94adb816a8f3a62c05f661b582f9d79415040d65945c5aef8d2cdfb427eb13db6a56e22b3d9c98f23613d1a8c2898b10b74daa152552ce11aff831242b46809759b6413d8522bf304aa29ad331025682d1ac0b03b4ab6334633a3575e70d73d8133ac9bed1b6b7c5ca4cac8403a0150cb0280d03fe05f40b02d5b62157df95589fdaf09fd07295ec95e69db4ba8c85ef905cf69f37fc0931a0b6508502db2ac9c0b94b8401019710afecf87f4bc214d28f463a30288d040d195f8ed2cb3d87cdff00025120a61798f4369ca15c3ac37278d20c46f7261fd5fa8b6ab08e5a905d094f682e5fb389f49a68562aea32dabda98b973669e2c43e7fe0cae0d4688eb0d6ead902d1c07d448a4b4148a8c8708e60ba0c8a9c569b46315d6560a5b58609973a11404bad86e5f456d5c0d061cd845d63c85dd85fb41143ba6aff00e128c2c0095701d6918e1838099660323b51e92bc1244e760bfda561aca10825ad55ba104915945586a6d8f48b56914de804dc0b6b18dabe059428ce8fff0031bfffd9, 'admin', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 'admin1@gmail.com', '2019-02-28 16:37:27', 1),
(16, 1, NULL, 'researcher', 'CkpKeaNXiLAYD2rJvtY4tof5bJG0fsf1kVghCSMgvwM=', 'rhalpdarrencabrera@gmail.com', '2019-03-28 17:14:25', 1),
(18, 3, NULL, '19874546', 'E+5/EWa+nTAxJpMU6AZv4idgMlXBalZ/a4+zYEC9Np8=', 'rhalpdarrencabrera@gmail.com', '2019-04-16 05:06:10', 1),
(21, 1, NULL, 'arvin', 'CkpKeaNXiLAYD2rJvtY4tof5bJG0fsf1kVghCSMgvwM=', 'arvin@gmail.com', '2019-05-04 10:02:14', 1);

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
-- Indexes for table `project_monitoring`
--
ALTER TABLE `project_monitoring`
  ADD PRIMARY KEY (`proj_ID`),
  ADD KEY `status_ID` (`status_ID`);

--
-- Indexes for table `register_info`
--
ALTER TABLE `register_info`
  ADD PRIMARY KEY (`reg_ID`);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_ID`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`s_ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `project_monitoring`
--
ALTER TABLE `project_monitoring`
  MODIFY `proj_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `register_info`
--
ALTER TABLE `register_info`
  MODIFY `reg_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `research_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `research_status`
--
ALTER TABLE `research_status`
  MODIFY `status_ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `s_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
