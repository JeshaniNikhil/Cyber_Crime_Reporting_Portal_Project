-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2024 at 05:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyber_crime_reporting_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'nikhiljeshani9@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '2024-07-06 17:02:02', '2024-07-06 17:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `app_request`
--

CREATE TABLE `app_request` (
  `request_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `requirements` text NOT NULL,
  `testing_type` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'Request Submitted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `app_request`
--

INSERT INTO `app_request` (`request_id`, `name`, `email`, `app_name`, `requirements`, `testing_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfsd', 'dfds@gmail.coma', 'sdasdsa', 'dasd asd sa as sa a ', 'Usability Testing, Security Testing', 'Request Submitted', '2024-08-18 15:21:34', '2024-08-18 15:21:34'),
(2, 'sdfsdfsd', 'dfds@gmail.coma', 'sdasdsa', 'dasd asd sa as sa a ', 'Usability Testing, Security Testing', 'Request Submitted', '2024-08-18 15:21:47', '2024-08-18 15:21:47'),
(3, 'abcd', 'h@gmail.com', 'sdufshu', 'dsdfhsdfhuisfghfiugdughdfhgdfugsdufhgusdhf', 'Functional Testing, Security Testing, Security Testing', 'Request Submitted', '2024-08-18 15:27:03', '2024-08-18 15:27:03'),
(4, 'abcdef', 'h@gmail.com', 'sdufshu', 'dsdfhsdfhuisfghfiugdughdfhgdfugsdufhgusdhf', '[\"Usability Testing\",\"Performance Testing\",\"Security Testing\"]', 'Request Submitted', '2024-08-18 15:34:14', '2024-08-25 12:56:55'),
(5, 'abcd', 'h@gmail.com', 'sdufshu', 'dsdfhsdfhuisfghfiugdughdfhgdfugsdufhgusdhf', 'Functional Testing, Usability Testing, Performance Testing, Security Testing', 'Request Submitted', '2024-08-18 15:49:43', '2024-08-18 15:49:43'),
(11, 'chatify', 'a@gmail.com', 'awqsderftgyhujikolpl', 'asdfghjkl', '[\"Functional Testing\",\"Security Testing\",\"Security Testing\"]', 'Request Submitted', '2024-09-22 15:53:31', '2024-09-22 15:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_request`
--

CREATE TABLE `contact_request` (
  `request_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_request`
--

INSERT INTO `contact_request` (`request_id`, `name`, `email`, `phone`, `subject`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Hello', 'testing@gmail.com', '1234567890', 'asdfghjkl;zxcvbnmqwertyuiop', 'qwertyuiopasdfghjklzxcvbnm', '2024-08-24 19:39:10', '2024-08-24 19:39:10'),
(2, 'Karly Mcdonald', 'dynurifa@mailinator.com', '8530005328', 'Ipsa dolores modi s', 'Hic animi ullam des', '2024-09-29 05:38:07', '2024-09-29 05:38:07'),
(3, 'Sylvia Figueroa', 'leta@mailinator.com', '2243213222', 'Necessitatibus sed c', 'Ea molestiae aut iur', '2024-09-29 05:38:32', '2024-09-29 05:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `digital_forensics_request`
--

CREATE TABLE `digital_forensics_request` (
  `request_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `devices` varchar(255) NOT NULL,
  `requirements` text NOT NULL,
  `testing_type` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'Request Submitted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `digital_forensics_request`
--

INSERT INTO `digital_forensics_request` (`request_id`, `name`, `email`, `devices`, `requirements`, `testing_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 'a@gmail.com', 'dgd hd dfgfh', 'dsfhsdfsdfds sdfs gsdf gsdfugfhddslgfsghslghfdul f fdsughfdsg', 'Mobile Device Examination, Social Media Investigation', 'Pending', '2024-08-19 09:50:52', '2024-08-25 14:09:38'),
(2, 'Kaye Evans', 'caboqoxoza@mailinator.com', 'https://www.xadeziwimiguby.me', 'Autem est voluptate ', '[\"Memory Card Contents\",\"Social Media Investigation\",\"Other\"]', 'Request Submitted', '2024-09-29 05:31:45', '2024-09-29 05:31:45'),
(3, 'Yardley Glenn', 'cenawe@mailinator.com', 'https://www.gyqumagozuxi.us', 'Odit totam repellend', '[\"Memory Card Contents\",\"Mobile Device Examination\",\"Social Media Investigation\",\"Browser History Examination\",\"Other\"]', 'Request Submitted', '2024-09-29 05:31:51', '2024-09-29 05:31:51'),
(4, 'Iliana Weiss', 'gakofutof@mailinator.com', 'https://www.vamyxyninu.me', 'Nobis voluptatem De', '[\"Memory Card Contents\",\"Mobile Device Examination\",\"Social Media Investigation\",\"Browser History Examination\"]', 'Request Submitted', '2024-09-29 05:31:56', '2024-09-29 05:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `fraud_reports`
--

CREATE TABLE `fraud_reports` (
  `id` int NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `incident_date` varchar(255) DEFAULT NULL,
  `incident_time` varchar(255) DEFAULT NULL,
  `fraud_type` varchar(255) DEFAULT NULL,
  `description` text,
  `amount_lost` decimal(10,2) DEFAULT NULL,
  `victim_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Request Submitted',
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fraud_reports`
--

INSERT INTO `fraud_reports` (`id`, `full_name`, `email`, `phone_number`, `incident_date`, `incident_time`, `fraud_type`, `description`, `amount_lost`, `victim_name`, `status`, `user_id`) VALUES
(1, 'test', 'test@gmail.com', '1234567890', '20005-02-05', '14:55', 'Ransomware', 'sufgyusdgfyusdfgu', '5000.00', 'sdufgsdug', 'Pending', 1),
(3, 'Kai Hudson', 'kizymadozo@mailinator.com', '+1 (866) 738-2213', '1996-01-02', '20:20', 'Credit Card Fraud', 'Ut voluptas eveniet', '5000.00', 'Wyoming Jennings', 'Request Submitted', 1),
(4, 'Kai Hudson', 'kizymadozo@mailinator.com', '+1 (866) 738-2213', '1996-01-02', '20:20', 'Credit Card Fraud', 'Ut voluptas eveniet', '5000.00', 'Wyoming Jennings', 'Request Submitted', 1),
(5, 'Kai Hudson', 'kizymadozo@mailinator.com', '+1 (866) 738-2213', '1996-01-02', '20:20', 'Credit Card Fraud', 'Ut voluptas eveniet', '5000.00', 'Wyoming Jennings', 'Request Submitted', 1),
(6, 'Kylie Acevedo', 'wyjiziny@mailinator.com', '+1 (886) 643-8734', '2019-01-07', '06:52', 'Credit Card Fraud', 'Earum enim sit est', '60000.00', 'Cecilia Olson', 'Request Submitted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `network_request`
--

CREATE TABLE `network_request` (
  `request_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `network_scope` varchar(255) NOT NULL,
  `requirements` text NOT NULL,
  `testing_type` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'Request Submitted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `network_request`
--

INSERT INTO `network_request` (`request_id`, `name`, `email`, `network_scope`, `requirements`, `testing_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdbjhf', 'jhsjdf@gmail.com', 'sdkfksd fs fsd fdsfdsfgfd', 'd sjfsd fgsdghfsd jf', 'PCI DSS, GDPR', 'Pending', '2024-08-18 19:40:11', '2024-08-25 13:40:01'),
(2, 'testings', 'testing@gmail.com', 'sdfsdfhasduifhd', 'hdfighdfuigdfuigdui', 'PCI DSS, GDPR', 'Request Submitted', '2024-09-22 16:31:03', '2024-09-22 16:31:03'),
(3, 'Basia Merrill', 'luvyt@mailinator.com', 'Vivien Cherry', 'Aute dolore et fugia', '[\"HIPAA\",\"GDPR\",\"Other\"]', 'Request Submitted', '2024-09-29 05:31:14', '2024-09-29 05:31:14'),
(4, 'Diana Ortega', 'tohifyfavy@mailinator.com', 'Kendall Rivera', 'Debitis ut lorem inc', '[\"PCI DSS\",\"GDPR\"]', 'Request Submitted', '2024-09-29 05:31:20', '2024-09-29 05:31:20'),
(5, 'Rhonda Weaver', 'kylewuna@mailinator.com', 'Harrison Bullock', 'Vitae quis modi moll', '[\"PCI DSS\",\"GDPR\"]', 'Request Submitted', '2024-09-29 05:31:26', '2024-09-29 05:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `other_reports`
--

CREATE TABLE `other_reports` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `type_of_fraud` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Request Submitted',
  `user_id` int DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `other_reports`
--

INSERT INTO `other_reports` (`id`, `full_name`, `email`, `phone_number`, `incident_date`, `incident_time`, `type_of_fraud`, `description`, `status`, `user_id`, `create_time`) VALUES
(2, 'Miranda Griffith', 'tyjugoje@mailinator.com', '+1959-1498', '2023-04-10', '10:26:00', 'Molestiae architecto', 'Molestias elit arch', 'Request Submitted', 1, '2024-09-29 05:27:50'),
(3, 'Nigel Curtis', 'sumibicy@mailinator.com', '+1713819-4788', '2008-08-16', '17:50:00', 'Nostrum veniam dolo', 'Aute in illo enim co', 'Request Submitted', 1, '2024-09-29 05:28:18'),
(4, 'Calvin Henson', 'vijyz@mailinator.com', '+1621947-8126', '2017-12-16', '15:56:00', 'Dolor tenetur alias ', 'Accusantium id vel i', 'Request Submitted', 1, '2024-09-29 05:28:34'),
(5, 'Warren Moon', 'bokeroje@mailinator.com', '+1243194-1304', '1981-09-24', '21:22:00', 'Sint sed esse aut i', 'Nihil et reprehender', 'Request Submitted', 1, '2024-09-29 05:28:51'),
(6, 'Rae Rivas', 'sipyb@mailinator.com', '+1637466-5019', '2008-05-27', '08:57:00', 'Nulla eaque id adipi', 'Qui omnis sit velit ', 'Request Submitted', 1, '2024-09-29 05:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `ransomware_reports`
--

CREATE TABLE `ransomware_reports` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `ransom_amount` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Request Submitted',
  `user_id` int NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ransomware_reports`
--

INSERT INTO `ransomware_reports` (`id`, `full_name`, `email`, `phone_number`, `incident_date`, `incident_time`, `ransom_amount`, `description`, `status`, `user_id`, `create_time`) VALUES
(2, 'Rana Ruiz', 'wupureti@mailinator.com', '+1 (814) 224-2509', '1970-06-19', '08:15:00', '61000.00', 'Dolores doloremque q', 'Request Submitted', 1, '2024-09-29 05:26:38'),
(3, 'Sylvia Mcdowell', 'duvyqu@mailinator.com', '+1 (172) 163-6555', '2012-01-25', '20:15:00', '26.00', 'Non amet doloremque', 'Request Submitted', 1, '2024-09-29 05:26:47'),
(4, 'Elton Pennington', 'lacejarab@mailinator.com', '+1 (656) 472-4033', '1991-08-03', '19:30:00', '51000.00', 'Illo quas quis in no', 'Request Submitted', 1, '2024-09-29 05:27:07'),
(5, 'Edan Cooke', 'mupinyvol@mailinator.com', '+1 (832) 286-1477', '1980-01-31', '11:59:00', '66000.00', 'Aliqua Possimus eu', 'Request Submitted', 1, '2024-09-29 05:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_fraud_report`
--

CREATE TABLE `social_media_fraud_report` (
  `id` int NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `incident_date` varchar(255) DEFAULT NULL,
  `incident_time` varchar(255) DEFAULT NULL,
  `social_media_platform` varchar(100) DEFAULT NULL,
  `description` text,
  `victim_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Request Submitted',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_media_fraud_report`
--

INSERT INTO `social_media_fraud_report` (`id`, `full_name`, `email`, `phone_number`, `incident_date`, `incident_time`, `social_media_platform`, `description`, `victim_name`, `status`, `create_time`, `user_id`) VALUES
(2, 'Chelsea Briggs', 'zijes@mailinator.com', '+1 (581) 611-7516', '1999-07-17', '22:03', 'Facebook', 'Eius qui excepturi i', 'Galvin Moses', 'Request Submitted', '2024-09-29 05:25:42', 1),
(3, 'Amela English', 'xuvymebi@mailinator.com', '+1 (736) 993-5802', '1976-11-20', '22:28', 'Other', 'Molestias et optio ', 'Berk Meyer', 'Request Submitted', '2024-09-29 05:25:51', 1),
(4, 'Unity Glass', 'pynyvuk@mailinator.com', '+1 (234) 325-4687', '1981-05-18', '18:43', 'Other', 'Illo praesentium vol', 'Blaine Mcclain', 'Request Submitted', '2024-09-29 05:26:01', 1),
(5, 'Nora Kane', 'lysoqu@mailinator.com', '+1 (936) 126-1043', '1984-07-27', '18:50', 'WhatsApp', 'Sint deleniti sed f', 'Evan Delaney', 'Request Submitted', '2024-09-29 05:26:08', 1),
(6, 'Devin Oneil', 'liqori@mailinator.com', '+1 (136) 766-6549', '1971-01-05', '00:20', 'WhatsApp', 'Quia facere in nesci', 'Halla Mayo', 'Request Submitted', '2024-09-29 05:26:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `user_id` int NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`user_id`, `user_name`, `email`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'nikhiljeshani', 'nikhiljeshani9@gmail.com', 'd5148be3a3247ebfb9551be3491d4194ea4e1d98a915151a7f9d654ebc0c4b69', '2024-09-01 17:41:33', '2024-09-01 17:41:33'),
(2, 'nikhil', 'nikhiljeshani2@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '2024-09-18 18:22:03', '2024-09-18 18:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `web_request`
--

CREATE TABLE `web_request` (
  `request_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `requirements` text NOT NULL,
  `testing_type` varchar(255) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Request Submitted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `web_request`
--

INSERT INTO `web_request` (`request_id`, `name`, `email`, `domain`, `requirements`, `testing_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdjfosdhfsdh', 'A@GMAIL.COM', 'http://localhost/htdocs/Cyber_Crime_Reporting_Portal_Project/Cyber_Armor_Admin/web-testing-service.php', 'admin@gmail.com', '[\"Functional Testing\",\"Security Testing\"]', 'Pending', '2024-08-17 17:26:41', '2024-09-22 15:34:22'),
(3, 'testing', 'testing@gmail.com', 'http://localhost/Cyber_Crime_Reporting_Portal_Project/Cyber_Armor_Admin/web-testing-service.php', 'abcdefgd', '[\"Functional Testing\",\"Security Testing\"]', 'Request Submitted', '2024-09-22 15:37:58', '2024-09-22 15:37:58'),
(4, 'Kyla Valentine', 'gehewiwuxy@mailinator.com', 'https://www.kosyfogalisux.com.au', 'Quos voluptatem reru', '[\"Functional Testing\"]', 'Request Submitted', '2024-09-29 05:30:34', '2024-09-29 05:30:34'),
(5, 'Jasmine Pace', 'nahetyvi@mailinator.com', 'https://www.vuwobydylus.info', 'Nulla accusantium ma', '[\"Performance Testing\"]', 'Request Submitted', '2024-09-29 05:30:46', '2024-09-29 05:30:46'),
(6, 'Driscoll Whitfield', 'dydupuduc@mailinator.com', 'https://www.hyqovalilijeq.co', 'Iusto quod quod saep', '[\"Usability Testing\",\"Security Testing\"]', 'Request Submitted', '2024-09-29 05:30:53', '2024-09-29 05:30:53'),
(7, 'Jada Valenzuela', 'vemu@mailinator.com', 'Pa$$w0rd!', '', '[]', 'Request Submitted', '2024-09-29 05:35:51', '2024-09-29 05:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app_request`
--
ALTER TABLE `app_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `contact_request`
--
ALTER TABLE `contact_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `digital_forensics_request`
--
ALTER TABLE `digital_forensics_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `fraud_reports`
--
ALTER TABLE `fraud_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `network_request`
--
ALTER TABLE `network_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `other_reports`
--
ALTER TABLE `other_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ransomware_reports`
--
ALTER TABLE `ransomware_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `social_media_fraud_report`
--
ALTER TABLE `social_media_fraud_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `web_request`
--
ALTER TABLE `web_request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_request`
--
ALTER TABLE `app_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_request`
--
ALTER TABLE `contact_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `digital_forensics_request`
--
ALTER TABLE `digital_forensics_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fraud_reports`
--
ALTER TABLE `fraud_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `network_request`
--
ALTER TABLE `network_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `other_reports`
--
ALTER TABLE `other_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ransomware_reports`
--
ALTER TABLE `ransomware_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media_fraud_report`
--
ALTER TABLE `social_media_fraud_report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_request`
--
ALTER TABLE `web_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fraud_reports`
--
ALTER TABLE `fraud_reports`
  ADD CONSTRAINT `fraud_reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_details` (`user_id`);

--
-- Constraints for table `other_reports`
--
ALTER TABLE `other_reports`
  ADD CONSTRAINT `other_reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_details` (`user_id`);

--
-- Constraints for table `ransomware_reports`
--
ALTER TABLE `ransomware_reports`
  ADD CONSTRAINT `ransomware_reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_details` (`user_id`);

--
-- Constraints for table `social_media_fraud_report`
--
ALTER TABLE `social_media_fraud_report`
  ADD CONSTRAINT `social_media_fraud_report_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_details` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
