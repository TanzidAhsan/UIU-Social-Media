-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 10:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `little_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(255) NOT NULL,
  `course_code` varchar(500) NOT NULL,
  `course_name` varchar(500) NOT NULL,
  `ans` varchar(5000) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `pid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `course_code`, `course_name`, `ans`, `file`, `pid`) VALUES
(24, 'CSE 1111', 'Structured Programming Language', 'Here is the answers of your questions.', 'IMG-64516f051da452.92605043.pdf', 38),
(25, 'CSE 1111', 'Structured Programming Language', 'Here the solution.....', 'IMG-64516f1b6ebd27.19299122.pdf', 38);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `e_name` varchar(500) NOT NULL,
  `e_id` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `start` varchar(500) NOT NULL,
  `end` varchar(500) NOT NULL,
  `s_id` varchar(500) NOT NULL,
  `s_name` varchar(500) NOT NULL,
  `day` varchar(500) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `comment` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `e_name`, `e_id`, `date`, `start`, `end`, `s_id`, `s_name`, `day`, `Status`, `comment`) VALUES
(21, 'Ahashan Habib', '011201261', '2023-05-06', '11:00', '12:00', '011203033', 'Tanvir Hasan Akash', 'Saturday', 'Cancelled', 'sorry'),
(22, 'Sabbir Hossain Sourov', '011203023', '2023-05-07', '10:00', '11:00', '011203033', 'Tanvir Hasan Akash', 'Sunday', 'Accepted', ''),
(24, 'Sabbir Hossain Sourov', '011203023', '2023-05-14', '10:00', '11:00', '011203033', 'Tanvir Hasan Akash', 'Sunday', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `councelling`
--

CREATE TABLE `councelling` (
  `id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `day` varchar(500) NOT NULL,
  `start` varchar(500) NOT NULL,
  `end` varchar(500) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `councelling`
--

INSERT INTO `councelling` (`id`, `e_name`, `e_id`, `day`, `start`, `end`, `location`) VALUES
(16, 'Ahashan Habib', '011201261', 'Saturday', '11:00', '12:00', 'UIU Library'),
(17, 'Sabbir Hossain Sourov', '011203023', 'Sunday', '10:00', '11:00', 'UIU Library');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(255) NOT NULL,
  `course_code` varchar(1000) NOT NULL,
  `course_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`) VALUES
(10, 'CSE 1111', 'Structured Programming Language'),
(11, 'CSE 1115', 'Object Oriented Programming'),
(13, 'CSE 4165', 'Web Programming'),
(14, 'CSE 3313', 'Computer Architecture'),
(15, 'CSE 2215', 'Data Structure and Algorithms I'),
(16, 'CSE 2217', 'Data Structure and Algorithms II'),
(18, 'CSE 4509', 'Operating Systems'),
(19, 'CSE 3811', 'Artificial Intelligence'),
(20, 'CSE 3715', 'Data Communication'),
(21, 'CSE 3521', 'Database Management Systems');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `tittle` varchar(300) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `tittle`, `details`, `link`) VALUES
(3, 'On Campus Recruitment', 'Name of the Position: Management Trainee (MT)\r\n\r\nDate: 15 April 2023 (Saturday)\r\nTime: 11.00 AM\r\nVenue: Room # 224 (2nd Floor), UIU, United City, Madani Avenue, Badda, Dhaka 1212.\r\n\r\n15 UIU CSE graduates will be participating in the recruitment session.\r\n\r\nHR Team of Bitopi Group:\r\n\r\nKaudore Ali Lavlu, DGM – HR, Admin & Compliance, Bitopi Group\r\nMd. Mizanur Rahman, Sr. Manager – OD & Training, Bitopi Group\r\nTareq Aziz, Sr. Manager – HR & Compliance, Bitopi Group\r\nJahura Almas Mou, Management Trainee – OD & Training, Bitopi Group\r\nDewan Sanjida Rahman, Management Trainee – OD & Training, Bitopi Group\r\nContents:\r\n\r\nShort brief about Bitopi Group, Recruitment Process & Position\r\nWritten Test\r\nInitial Interview', 'https://www.uiu.ac.bd/events/on-campus-recruitment-bittopi/'),
(4, 'Loan Application for Summer-2023 ', 'Students, who need a financial loan, are advised to apply on or before 20th May 2023 (Saturday). No application will be considered after this deadline. Detail loan application procedure is mentioned below —\r\n\r\n1. Fill up the loan application form through online in the following application link: http://dsa.uiu.ac.bd/loan/\r\n2. Use your UCAM username and password to login.\r\n3. Fill up the required field clearly and properly, as incomplete and unclear application will not be accepted for consideration.\r\n4. Attach a guardian consent letter in the attachment.\r\n5. After successful submission, you will receive an official email.\r\n\r\nIf you have further queries regarding loan application, please contact Md. Shohel Rana, Senior Executive, DCCSA (Room no – 121), phone: 01722390833 email: shohel@admin.uiu.ac.bd.\r\n\r\n \r\n\r\nDr. Md. Zulfiqur Rahman\r\nRegistrar', 'http://dsa.uiu.ac.bd/loan/'),
(5, 'Career Lab- 12', 'A program, namely ‘Career Lab- 12’ organized by UIU Directorate of Career Counseling & Student Affairs (UIU DCCSA) is going to be held on Monday, 10 April 2023 in Room # 224.\r\n\r\nThe objective of the program is to create career consciousness and develop some basic skills among the students of UIU.\r\n\r\nProgram Schedule\r\nTitle- 1: Professional CV Writing\r\n\r\nSpeaker:\r\nMr. Ahmed Fuad\r\nLead Consultant\r\nIDEATION\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 10.00 AM to 11.15 AM\r\nVenue: Room # 224\r\n\r\nTitle- 2: Interview Tips & Tricks\r\n\r\nSpeaker:\r\nMr. Md. Ishfaqur Rahman\r\nTalent Acquisition Senior Specialist, HR & Administration\r\nBanglalink Digital Communications Limited\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 11.30 AM to 12.45 PM\r\nVenue: Room # 224\r\n\r\nTitle- 3: Strategic Communication & Corporate Etiquette\r\n\r\nSpeaker:\r\nMr. ASM Saifullah\r\nLead HR Business Partner\r\nDaraz Bangladesh\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 1.30 PM to 2.45 PM\r\nVenue: Room # 224', 'https://www.uiu.ac.bd/events/career-lab-12/');

-- --------------------------------------------------------

--
-- Table structure for table `exapply`
--

CREATE TABLE `exapply` (
  `id` int(11) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `sid` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exapply`
--

INSERT INTO `exapply` (`id`, `cname`, `sid`, `sname`, `status`, `email`) VALUES
(13, 'Database Management System ', '011201261', 'Ahashan Habib', 'Accepted', 'mhabib201261@bscse.uiu.ac.bd'),
(14, 'Structure Programming Language', '011203023', 'Sabbir Hossain Sourov', 'Accepted', 'msourav203023@bscse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `exregistration`
--

CREATE TABLE `exregistration` (
  `id` int(255) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_id` varbinary(50) NOT NULL,
  `e_email` varchar(50) NOT NULL,
  `e_phone` varchar(20) NOT NULL,
  `e_mlink` varchar(500) NOT NULL,
  `e_password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exregistration`
--

INSERT INTO `exregistration` (`id`, `e_name`, `e_id`, `e_email`, `e_phone`, `e_mlink`, `e_password`) VALUES
(18, 'Ahashan Habib', 0x303131323031323631, 'mhabib201261@bscse.uiu.ac.bd', '', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Sabbir Hossain Sourov', 0x303131323033303233, 'msourav203023@bscse.uiu.ac.bd', '', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'Tanvir Hasan Akash', 0x303131323033303333, 'thasan762@gmail.com', '', '', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `sname`, `sid`, `pid`) VALUES
(36, 'Sabbir Hossain Sourov', '011203023', 4),
(37, 'Tanvir Hasan Akash', '011203033', 4),
(42, 'Tanvir Hasan Akash', '011203033', 3),
(45, 'Tanvir Hasan Akash', '011203033', 5),
(49, 'Sabbir Hossain Sourov', '011203023', 5),
(50, 'Sabbir Hossain Sourov', '011203023', 3);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` int(255) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `file` mediumtext NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `course_code`, `course_name`, `description`, `file`, `sid`) VALUES
(38, 'CSE 1111', 'Structured Programming Language', 'Solve this problem using c++', 'file-64516dd1154838.37426070.pdf', '011203023'),
(40, 'CSE 1111', 'Structured Programming Language', 'Solve this mid question.Summer(2022)', 'file-64516e2d7b99f9.61537631.pdf', '011203023'),
(41, 'CSE 1115', 'Object Oriented Programming', 'Solve this using basic java code', 'file-64516e54674326.13165211.pdf', '011203023'),
(43, 'CSE 1111', 'Structured Programming Language', 'I need a solution for this mid question', 'file-64516e9f844b42.25694560.pdf', '011203033'),
(44, 'CSE 1111', 'Structured Programming Language', 'Here some practice problems. If you do it,you can share with me please', 'file-64516ed8c44b69.37149560.pdf', '011203033');

-- --------------------------------------------------------

--
-- Table structure for table `sregistration`
--

CREATE TABLE `sregistration` (
  `id` int(255) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_dob` date NOT NULL,
  `s_password` varchar(1000) NOT NULL,
  `cgpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`id`, `s_name`, `s_id`, `s_email`, `s_dob`, `s_password`, `cgpa`) VALUES
(34, 'Ahashan Habib', '011201261', 'mhabib201261@bscse.uiu.ac.bd', '2023-05-18', '81dc9bdb52d04dc20036dbd8313ed055', '4.00'),
(35, 'Sabbir Hossain Sourov', '011203023', 'msourav203023@bscse.uiu.ac.bd', '2023-05-17', '81dc9bdb52d04dc20036dbd8313ed055', '4.00'),
(36, 'Tanvir Hasan Akash', '011203033', 'thasan762@gmail.com', '2023-05-22', '81dc9bdb52d04dc20036dbd8313ed055', '4.00'),
(37, 'Sonjoy Dey', '011202074', 'sdey202074@bscse.uiu.ac.bd', '2023-05-24', '81dc9bdb52d04dc20036dbd8313ed055', '2.00'),
(38, 'Sonjoy Dey', '011202074', 'sdey202074@bscse.uiu.ac.bd', '2023-05-24', '81dc9bdb52d04dc20036dbd8313ed055', '2.00'),
(39, 'A.S.M Muhit Khan', '011203040', 'akhan203040@bscse.uiu.ac.bd', '2023-05-10', '81dc9bdb52d04dc20036dbd8313ed055', '3.7'),
(40, 'Atika Jasia', '011211041', 'ajasia211041@bscse.uiu.ac.bd', '2023-05-05', '81dc9bdb52d04dc20036dbd8313ed055', '3.5'),
(41, 'Barsha Saha', '011211104', 'bsaha211104@bscse.uiu.ac.bd', '2023-05-03', '81dc9bdb52d04dc20036dbd8313ed055', '3.6'),
(42, 'Anas Mohammad Ishfaqul Muktadir Osmani', '011203004', 'aosmani203004@bscse.uiu.ac.bd', '2023-05-04', '81dc9bdb52d04dc20036dbd8313ed055', '4.0'),
(43, 'Al-Momen Reyad', '011023011', 'areyad203011@bscse.uiu.ac.bd', '2023-05-08', '81dc9bdb52d04dc20036dbd8313ed055', '3.9'),
(44, 'Sahadat Islam Evan', '011203030', 'sevan203030@bscse.uiu.ac.bd', '2023-01-01', '81dc9bdb52d04dc20036dbd8313ed055', '3.72'),
(45, 'Sartaj Mahmud', '011182121', 'smahmud182121@bscse.uiu.ac.bd', '2023-05-12', '81dc9bdb52d04dc20036dbd8313ed055', '3.65'),
(46, 'Umma Hani Mim', '011201068', 'umim201068@bscse.uiu.ac.bd', '2023-05-31', '81dc9bdb52d04dc20036dbd8313ed055', '2.5'),
(47, 'Tazre Mohammad Abdullah', '011181060', 'tabdullah181060@bscse.uiu.ac.bd', '2023-05-07', '81dc9bdb52d04dc20036dbd8313ed055', '3.6'),
(48, 'Md. Nazmus Sakib Tanvir', '011201135', 'mtanvir201135@bscse.uiu.ac.bd', '2023-05-17', '81dc9bdb52d04dc20036dbd8313ed055', '1.2'),
(49, 'Md. Shahariar Hossen Ridoy', '011201466', 'mridoy201466@bscse.uiu.ac.bd', '2023-05-17', '81dc9bdb52d04dc20036dbd8313ed055', '3.4'),
(50, 'Mehedi Hasan', '011201299', 'mhasan201299@bscse.uiu.ac.bd', '2023-05-03', '81dc9bdb52d04dc20036dbd8313ed055', '2.5'),
(51, 'Md. Nadib Ahsan', '011193099', 'mahsan193099@bscse.uiu.ac.bd', '2023-05-03', '81dc9bdb52d04dc20036dbd8313ed055', '1.3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `councelling`
--
ALTER TABLE `councelling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exapply`
--
ALTER TABLE `exapply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exregistration`
--
ALTER TABLE `exregistration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e_id` (`e_id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sregistration`
--
ALTER TABLE `sregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `councelling`
--
ALTER TABLE `councelling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exapply`
--
ALTER TABLE `exapply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exregistration`
--
ALTER TABLE `exregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sregistration`
--
ALTER TABLE `sregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
