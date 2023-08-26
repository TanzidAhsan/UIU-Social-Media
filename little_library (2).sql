-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 03:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(25, 'CSE 1111', 'Structured Programming Language', 'Here the solution.....', 'IMG-64516f1b6ebd27.19299122.pdf', 38),
(26, 'CSE 1111', 'Structured Programming Language', 'jyguueshfyueyufui', 'IMG-64805450b3b6c9.55142739.jpg', 38);

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
(24, 'Sabbir Hossain Sourov', '011203023', '2023-05-14', '10:00', '11:00', '011203033', 'Tanvir Hasan Akash', 'Sunday', 'Pending', ''),
(27, 'Mirza Hasan', '011201247', '2023-06-11', '19:36', '20:34', '011201261', 'Ahashan Habib', 'Sunday', 'Accepted', ''),
(28, 'Mirza Hasan', '011201247', '2023-06-18', '19:36', '20:34', '011203023', 'Sabbir Hossain Sourov', 'Sunday', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `s_name`, `message`, `timestamp`) VALUES
(1, 'ahsan', 'hi', '2023-05-01 13:25:06'),
(5, 'ahsan', 'can we talk', '2023-05-01 13:33:17'),
(6, 'ahsan', 'can we talk', '2023-05-01 13:36:20'),
(7, 'ahsan', 'can we talk', '2023-05-01 13:36:44'),
(8, 'Tanzid', 'bolen', '2023-05-01 13:40:21'),
(9, 'Raisa', 'hello', '2023-05-01 13:41:45'),
(11, 'Raisa', 'hello', '2023-05-01 13:43:37'),
(12, 'Raisa', 'hello', '2023-05-01 13:44:32'),
(14, 'Raisa', 'hello', '2023-05-01 13:46:23'),
(15, 'Tanzid', 'bolen', '2023-05-01 13:48:48'),
(21, 'Raisa', 'I need a book', '2023-05-01 14:00:47'),
(22, 'Raisa', 'I need a book', '2023-05-01 14:03:02'),
(26, 'Raisa', 'I need a book', '2023-05-01 14:06:39'),
(27, 'Raisa', 'I need a book', '2023-05-01 14:07:16'),
(28, 'Raisa', 'ho', '2023-05-01 14:09:16'),
(29, 'Raisa', 'ho', '2023-05-01 14:11:52'),
(30, 'Raisa', 'ho', '2023-05-01 14:12:24'),
(35, 'Tanzid', 'jni', '2023-05-01 15:51:12'),
(36, 'demouser', 'Hi', '2023-05-01 15:58:11'),
(37, 'demouser', 'I need a book', '2023-05-01 15:58:36'),
(38, 'Tanzid', 'ok', '2023-05-01 16:22:16'),
(40, 'Tanzid', 'hi\r\n', '2023-08-09 06:24:58'),
(42, 'mirza', '1234', '2023-08-09 06:26:21'),
(43, 'Tanzid', 'bol', '2023-08-09 06:26:27'),
(44, 'mirza', 'shon', '2023-08-09 06:26:41'),
(45, 'Tanzid', 'bol', '2023-08-09 06:26:46'),
(46, 'mirza', 'hi', '2023-08-09 06:39:11'),
(47, 'Tanzid', 'kichu na', '2023-08-09 06:39:26'),
(48, 'Tanzid', 'kichu na', '2023-08-09 06:46:00'),
(49, 'mirza', 'as', '2023-08-09 06:46:09'),
(50, 'bol', 'kichu na', '2023-08-09 06:46:28'),
(51, 'mirza', 'kno', '2023-08-09 06:46:55'),
(52, 'Tanzid', 'asholei', '2023-08-09 06:47:51'),
(53, 'Tanzid', 'ko', '2023-08-09 06:49:04'),
(54, 'mirza', 'name', '2023-08-09 06:49:27'),
(55, 'Tanzid', 'hi', '2023-08-09 06:53:22'),
(56, 'mirza', 'bolen', '2023-08-09 06:53:52'),
(57, 'mirza', 'ami', '2023-08-09 06:55:14'),
(58, 'Tanzid', 'kichu na', '2023-08-09 06:56:31'),
(59, 'Tanzid', '123 testing', '2023-08-09 06:58:21'),
(60, 'mirza', 'received', '2023-08-09 06:58:31'),
(61, 'mirza', 'kutii tui', '2023-08-09 07:05:54'),
(62, 'Tanzid', 'barit', '2023-08-09 07:06:07'),
(63, 'Tanzid', 'versity ay', '2023-08-09 07:06:36'),
(64, 'Mirza', 'ashishi', '2023-08-09 07:06:55'),
(65, 'Tanzid', 'hello', '2023-08-09 07:15:27'),
(66, 'mirza', 'good morning', '2023-08-09 07:16:20'),
(67, 'Tanzid', 'Hello', '2023-08-09 07:18:13'),
(68, 'mirza', 'bol hey', '2023-08-09 07:18:23'),
(69, 'Tanzid', 'fuck', '2023-08-09 13:21:43'),
(70, 'Tanzid', 'bo', '2023-08-14 19:47:31'),
(71, 'Tanzid', 'ko', '2023-08-23 13:48:13'),
(72, 'mirza', 'boo', '2023-08-23 13:50:53'),
(73, 'Tanzid', 'ko', '2023-08-23 13:51:01'),
(74, 'mirza', 'ho', '2023-08-23 13:56:09'),
(75, 'mirza', 'tarpor', '2023-08-23 13:56:13'),
(76, 'Tanzid', 'na', '2023-08-23 13:56:53'),
(77, 'Tanzid', 'kno', '2023-08-23 13:57:09'),
(78, 'mirza', 'emni', '2023-08-23 13:57:24'),
(79, 'Tanzid Ahsan', 'bo', '2023-08-23 16:55:29'),
(80, 'Tanzid Ahsan', 'kn', '2023-08-23 16:56:26'),
(81, 'Ahashan Habib', 'Hi', '2023-08-23 16:58:24'),
(82, 'Ahashan Habib', 'j', '2023-08-23 17:14:03'),
(83, 'Ahashan Habib', 'good morning', '2023-08-23 17:18:51'),
(84, 'Tanzid Ahsan', 'hi', '2023-08-23 17:28:18'),
(85, 'Tanzid Ahsan', 'Check', '2023-08-23 17:33:27'),
(86, 'Tanzid Ahsan', 'I need some help', '2023-08-23 17:35:21'),
(87, 'Tanzid Ahsan', 'what kind of help', '2023-08-23 17:37:40'),
(88, 'Ahashan Habib', 'Good Afternoon', '2023-08-23 17:39:00'),
(89, 'Ahashan Habib', 'What kind of help I can offer', '2023-08-23 17:45:02'),
(90, 'Tanzid Ahsan', 'I need some help to implement my project', '2023-08-23 17:49:10'),
(91, 'Ahashan Habib', 'Hello', '2023-08-23 17:54:24'),
(92, 'Tanzid Ahsan', 'Hi', '2023-08-23 17:54:37'),
(93, 'Mehedi', 'hello man', '2023-08-23 17:59:49'),
(94, 'Mehedi', 'fuck u', '2023-08-23 18:00:41'),
(95, 'nazmul', 'অোরে চুদন', '2023-08-23 18:00:48'),
(96, 'Mehedi', 'madarfakar', '2023-08-23 18:00:52'),
(97, 'Mehedi', 'chudon a vorpur', '2023-08-23 18:06:47'),
(98, 'Mehedi', 'chudon a vorpur', '2023-08-23 18:06:47'),
(99, 'Ahashan Habib', 'HII', '2023-08-23 18:07:25'),
(100, 'Ahashan Habib', 'hello', '2023-08-23 18:07:29'),
(101, 'Ahashan Habib', 'testing', '2023-08-23 18:07:36'),
(102, 'Ahashan Habib', 'IIii', '2023-08-23 18:07:40'),
(103, '😎', '😬😬', '2023-08-23 18:09:10'),
(104, 'Tanzid Ahsan', 'good night', '2023-08-23 20:42:19'),
(105, 'Tanzid Ahsan', 'good morning', '2023-08-23 22:59:07'),
(106, 'Tanzid Ahsan', 'Testing', '2023-08-24 09:44:10'),
(107, 'Tanzid Ahsan', 'Working', '2023-08-24 09:44:29'),
(108, 'Tanzid Ahsan', 'ok', '2023-08-24 09:45:01'),
(109, 'Tanzid Ahsan', 'Mobile', '2023-08-24 10:23:58'),
(110, 'Tanzid Ahsan', 'Check', '2023-08-24 11:24:19'),
(111, 'Tanzid Ahsan', 'goo', '2023-08-24 12:08:26'),
(112, 'Ahashan Habib', 'Good  evening', '2023-08-24 12:45:26'),
(113, 'Tanzid Ahsan', 'How r u ?', '2023-08-24 12:45:40'),
(114, 'Ahashan Habib', 'Fine', '2023-08-24 12:45:58'),
(115, 'Ahashan Habib', 'Do u want to say something?', '2023-08-24 12:47:36'),
(116, 'Tanzid Ahsan', 'yes', '2023-08-24 12:48:02'),
(117, 'Ahashan Habib', 'tuk tuk', '2023-08-24 18:08:14'),
(118, 'Tanzid Ahsan', 'asdfghjkl', '2023-08-25 13:01:14'),
(119, 'Tanzid Ahsan', 'gdffd', '2023-08-25 16:43:40'),
(120, 'Mirza Hasan', 'Good Evening', '2023-08-26 13:04:57');

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
(19, 'Mirza Hasan', '011201247', 'Sunday', '19:36', '20:34', 'meet linl');

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
(16, 'CSE 2217', 'Data Structure and Algorithms II'),
(19, 'CSE 3811', 'Artificial Intelligence'),
(20, 'CSE 3715', 'Data Communication'),
(21, 'CSE 3521', 'Database Management Systems'),
(22, 'CSE 3422', 'Software Engineering Laboratory');

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
(5, 'Career Lab- 12', 'A program, namely ‘Career Lab- 12’ organized by UIU Directorate of Career Counseling & Student Affairs (UIU DCCSA) is going to be held on Monday, 10 April 2023 in Room # 224.\r\n\r\nThe objective of the program is to create career consciousness and develop some basic skills among the students of UIU.\r\n\r\nProgram Schedule\r\nTitle- 1: Professional CV Writing\r\n\r\nSpeaker:\r\nMr. Ahmed Fuad\r\nLead Consultant\r\nIDEATION\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 10.00 AM to 11.15 AM\r\nVenue: Room # 224\r\n\r\nTitle- 2: Interview Tips & Tricks\r\n\r\nSpeaker:\r\nMr. Md. Ishfaqur Rahman\r\nTalent Acquisition Senior Specialist, HR & Administration\r\nBanglalink Digital Communications Limited\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 11.30 AM to 12.45 PM\r\nVenue: Room # 224\r\n\r\nTitle- 3: Strategic Communication & Corporate Etiquette\r\n\r\nSpeaker:\r\nMr. ASM Saifullah\r\nLead HR Business Partner\r\nDaraz Bangladesh\r\n\r\nDate: April 10, 2023 (Monday)\r\nTime: 1.30 PM to 2.45 PM\r\nVenue: Room # 224', 'https://www.uiu.ac.bd/events/career-lab-12/'),
(6, 'Seminar on ‘Accelerating Start-Up: Sharpen Your Entrepreneurial Mind’', 'A seminar titled ‘Accelerating Start-Up: Sharpen Your Entrepreneurial Mind’ organized by UIU Marketing Forum, a wing of Directorate of Career Counseling & Student Affairs is going to be held on Saturday, 10 June 2023 at 12.00 PM in Smart Room # 126.', 'https://www.uiu.ac.bd/events/seminar-on-accelerating-start-up-sharpen-your-entrepreneurial-mind/');

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
(14, 'Structure Programming Language', '011203023', 'Sabbir Hossain Sourov', 'Accepted', 'msourav203023@bscse.uiu.ac.bd'),
(20, '', '011201261', 'Ahashan Habib', 'pending', 'mhabib201261@bscse.uiu.ac.bd');

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
(20, 'Tanvir Hasan Akash', 0x303131323033303333, 'thasan762@gmail.com', '', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'Mirza Hasan', 0x303131323031323437, 'mhasan201247@bscse.uiu.ac.bd', '', '', '81dc9bdb52d04dc20036dbd8313ed055');

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
(50, 'Sabbir Hossain Sourov', '011203023', 3),
(52, 'Tanzid Ahsan', '011201295', 6),
(53, 'Mirza Hasan', '011201247', 6),
(55, 'Tanzid Ahsan', '011201295', 7),
(56, 'Tanzid Ahsan', '011201295', 4),
(57, 'Ahashan Habib', '011201261', 5),
(58, 'Tanzid Ahsan', '011201295', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `id`, `content`, `image_path`, `created_at`) VALUES
(3, 58, 'kk', NULL, '2023-08-23 21:09:30'),
(6, 58, 'Hola', 'up/tiger.jpg', '2023-08-23 21:14:50'),
(7, 58, 'Flower', 'up/flower.jpg', '2023-08-24 04:24:15'),
(8, 58, 'Good Afternoon', NULL, '2023-08-24 11:29:26'),
(9, 58, 'Hello', NULL, '2023-08-24 11:43:14'),
(10, 58, 'Weather is not satisfying today', NULL, '2023-08-24 12:16:53'),
(11, 58, 'hello everyone ', NULL, '2023-08-26 12:35:46');

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
(44, 'CSE 1111', 'Structured Programming Language', 'Here some practice problems. If you do it,you can share with me please', 'file-64516ed8c44b69.37149560.pdf', '011203033'),
(47, 'CSE 1115', 'Object Oriented Programming', 'fdbg', 'file-64c60062ebae71.47921832.jpg', '011201247');

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
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sregistration`
--

INSERT INTO `sregistration` (`id`, `s_name`, `s_id`, `s_email`, `s_dob`, `s_password`, `phone`) VALUES
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
(51, 'Md. Nadib Ahsan', '011193099', 'mahsan193099@bscse.uiu.ac.bd', '2023-05-03', '81dc9bdb52d04dc20036dbd8313ed055', '1.3'),
(54, 'Mirza Hasan', '011201247', 'mhasan201247@bscse.uiu.ac.bd', '2023-06-16', '81dc9bdb52d04dc20036dbd8313ed055', '4.00'),
(55, 'Tayrin', '011202145', 'ttunzina202145@bscse.uiu.ac.bd', '2023-06-11', '81dc9bdb52d04dc20036dbd8313ed055', '4.00'),
(58, 'Tanzid Ahsan', '011201295', 'mahsan201295@bscse.uiu.ac.bd', '2023-07-08', '81dc9bdb52d04dc20036dbd8313ed055', '01757426888'),
(59, 'Mehedi', '011201205', 'mhassan201205@bscse.uiu.ac.bd', '2023-08-09', '81dc9bdb52d04dc20036dbd8313ed055', '01770867588'),
(60, 'nazmul', '011201224', 'nhoda201224@gmail.com', '2023-08-24', '81dc9bdb52d04dc20036dbd8313ed055', '01770006782');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `thumbnail` varchar(290) DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `thumbnail`, `video`, `username`) VALUES
(22, 'Aoop Project', 'A mission mode project to create a project show app', 'wew.jpg', 'aoop(1).mp4', NULL),
(23, 'Aoop 2', 'Aoop 2nd video', 'back 2.jpg', 'project start.mp4', 'tanziddipto@gmail.com'),
(24, 'Aoop 2', 'Aoop 2nd video', 'back 2.jpg', 'project start.mp4', 'tanziddipto@gmail.com'),
(27, 'idea', 'Idea', 'wew.jpg', 'project start.mp4', 'tanziddipto@gmail.com'),
(32, 'asb', 'asx', 'back 2.jpg', 'bandicam 2023-06-14 22-04-27-274.mp4', 'tanziddipto@gmail.com'),
(33, 'ok', 'alidekhi', '338783311_237739635390144_6419755436864984890_n.jpg', 'Aoop final design.mp4', 'tanziddipto@gmail.com');

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
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `councelling`
--
ALTER TABLE `councelling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exapply`
--
ALTER TABLE `exapply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `exregistration`
--
ALTER TABLE `exregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sregistration`
--
ALTER TABLE `sregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sregistration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
