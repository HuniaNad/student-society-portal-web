-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 09:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_society_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `speaker` varchar(50) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `time`, `speaker`, `venue`, `description`, `image`, `hide`) VALUES
(18, 'Ice Breaking Ceremony', '26/01/2023', '10:30 am', 'Society Excom', 'G08', 'An Ice Breaking Session for the new volunteers', 'nothing_to_display.png', 1),
(19, 'Devops Workshop', '15/02/2023', '11:00 am', 'Sir Qasim Malik', 'EE Seminar Hall', 'Interactive and informative workshop on DevOps', 'devops event.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_highlights`
--

CREATE TABLE `event_highlights` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_highlights`
--

INSERT INTO `event_highlights` (`id`, `name`, `image`) VALUES
(10, 'Expo', 'expo (4).jpg'),
(11, 'Interviews', '1st_sem3.jpg'),
(12, 'Arbisoft - Info Session', '57059880_1234013646757965_3527788357708939264_n.jpg'),
(13, 'Devsinc - Info Session', 'DSC_0250.JPG'),
(14, 'Devsinc - Info Session', 'DSC_0186.JPG'),
(15, 'Expo', '1st_sem3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `registration_no` varchar(12) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`id`, `name`, `registration_no`, `role`, `email`, `contact`, `password`, `image`) VALUES
(1, 'Arham Khan', 'FA18-BCS-023', 'President', 'arham67@gmail.com', '+923365109825', 'arham123', 'president (2).png'),
(2, 'Alina Amir', 'FA21-BCS-063', 'Vice-President', 'Alina_amir@gmail.com', '+923365109825', 'alina123', 'vicePresident (3).png'),
(3, 'Hasan Asif', 'FA22-BCS-093', 'HR', 'hasan_asif34@gmail.com', '+923325396542', 'hasan123', 'hr (2).png'),
(4, 'Hunia Nadeem', 'FA20-BCS-024', 'Media Lead', 'nadeem.h9696@gmail.com', '+923325396542', 'hun123', 'team-3 (2).jpg'),
(5, 'Fatima Tuzzahra', 'FA20-BCS-019', 'Content Lead', 'fatima@gmail.com', '+923365109825', 'fatima123', '1650446049625 (2).jpg'),
(6, 'Amna Khan', 'FA20-BSE-100', 'Graphics Lead', 'amna_khan089@hotmail.com', '+923365109825', '63c0f6573c1d6', 'media (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `registration_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `team` varchar(30) NOT NULL,
  `goodfit_description` varchar(500) NOT NULL,
  `pending` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `registration_no`, `email`, `contact`, `team`, `goodfit_description`, `pending`) VALUES
(9, 'Emma Neil', 'FA19-BCS-033', 'emma@yahoo.com', '03325396542', 'Media', 'ededw', 1),
(13, 'Ahmed Ali', 'FA20-BCS-032', 'ahmed@gmail.com', '+923454322123', 'Graphics', 'some answer', 0),
(14, 'Afnan Khan', 'FA21-BAF-098', 'afnan@gmail.com', '+923098744579', 'Media', 'I want to join media team', 0),
(15, 'Usama Ahmed', 'SP19-BDS-078', 'usama@gmail.com', '+923098746623', 'Media', 'I want to join media team', 1),
(17, 'Ayan Khan', 'FA20-BCS-018', 'Ayan78@gmail.com', '+923477652178', 'Graphics', 'I am good at graphic designing', 0),
(18, 'Eesha Shahid', 'FA20-BCS-014', 'eesha_shahid@gmail.com', '+923098744523', 'Graphics', 'I am good at graphic designing', 1),
(19, 'Vania Majid', 'FA20-BCS-092', 'vania_majid@gmail.com', '+923098744783', 'Content', 'I am a content writer', 0),
(20, 'Malaika Zafar', 'FA20-BCS-034', 'malaika@gmail.com', '+923098744411', 'Content', 'I am good at content writing', 1),
(21, 'Hasan Reza', 'FA22-BDS-016', 'hasan@gmail.com', '+923340101052', 'Content', 'I am good at content writing', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_highlights`
--
ALTER TABLE `event_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event_highlights`
--
ALTER TABLE `event_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
