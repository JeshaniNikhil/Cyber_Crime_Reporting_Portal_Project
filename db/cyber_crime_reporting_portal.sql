-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2024 at 06:56 PM
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
(1, 'Hello', 'testing@gmail.com', '1234567890', 'asdfghjkl;zxcvbnmqwertyuiop', 'qwertyuiopasdfghjklzxcvbnm', '2024-08-24 19:39:10', '2024-08-24 19:39:10');

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
(1, 'sdfsdf', 'a@gmail.com', 'dgd hd dfgfh', 'dsfhsdfsdfds sdfs gsdf gsdfugfhddslgfsghslghfdul f fdsughfdsg', 'Mobile Device Examination, Social Media Investigation', 'Pending', '2024-08-19 09:50:52', '2024-08-25 14:09:38');

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
(1, 'test', 'test@gmail.com', '1234567890', '20005-02-05', '14:55', 'Ransomware', 'sufgyusdgfyusdfgu', '5000.00', 'sdufgsdug', 'Pending', 1);

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
(2, 'testings', 'testing@gmail.com', 'sdfsdfhasduifhd', 'hdfighdfuigdfuigdui', 'PCI DSS, GDPR', 'Request Submitted', '2024-09-22 16:31:03', '2024-09-22 16:31:03');

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
(3, 'testing', 'testing@gmail.com', 'http://localhost/Cyber_Crime_Reporting_Portal_Project/Cyber_Armor_Admin/web-testing-service.php', 'abcdefgd', '[\"Functional Testing\",\"Security Testing\"]', 'Request Submitted', '2024-09-22 15:37:58', '2024-09-22 15:37:58');

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
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `digital_forensics_request`
--
ALTER TABLE `digital_forensics_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fraud_reports`
--
ALTER TABLE `fraud_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `network_request`
--
ALTER TABLE `network_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_reports`
--
ALTER TABLE `other_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ransomware_reports`
--
ALTER TABLE `ransomware_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_fraud_report`
--
ALTER TABLE `social_media_fraud_report`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_request`
--
ALTER TABLE `web_request`
  MODIFY `request_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
