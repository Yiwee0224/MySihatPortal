-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 08:51 AM
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
-- Database: `testingg`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apDate` date DEFAULT NULL,
  `apTime` varchar(255) NOT NULL,
  `apName` varchar(255) NOT NULL,
  `apPlace` varchar(255) NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `apDate`, `apTime`, `apName`, `apPlace`, `userID`) VALUES
(1, '2023-02-16', '05.00pm', 'Health Screening', 'Pantai Hospital  ', 1),
(2, '2023-02-17', '06.00pm', 'Urine Test', ' Columbia Asia Hospital ', 2),
(3, '2023-02-18', '04.00pm', 'Blood Test', 'Sri kota Hospital  ', 3),
(4, '2023-02-19', '05.00pm', 'DNA Test', ' Bukit Tinggi Hospital ', 4),
(5, '2023-02-20', '03.00pm', 'Medical Consultation', 'Tengku Ampuan Rahimah Hospital  ', 5),
(6, '2023-02-21', '06.00pm', 'Pre Maritial Screening', 'Tengku Ampuan Rahimah Hospital  ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cslist`
--

CREATE TABLE `cslist` (
  `csID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `CsTitle` varchar(255) NOT NULL,
  `CsSolution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cslist`
--

INSERT INTO `cslist` (`csID`, `userID`, `CsTitle`, `CsSolution`) VALUES
(1, 1, 'Payment Not found', 'reload page'),
(2, 2, 'Appointment Not found', 'reload page'),
(3, 3, 'Lab Report Not found', 'reload page'),
(4, 4, 'Account cant be edit  ', 'Error fixed'),
(5, 5, 'Location found', 'We have no offline location'),
(6, 6, 'Why no vaccine info  ', 'We will updating soon ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusID` int(10) UNSIGNED NOT NULL,
  `customerID` int(10) UNSIGNED NOT NULL,
  `lecturerID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusID`, `customerID`, `lecturerID`) VALUES
(1, 1, 7),
(2, 2, 8),
(3, 3, 7),
(4, 4, 8),
(5, 5, 7),
(6, 6, 8),
(7, 9, 8),
(8, 10, 8),
(9, 11, 8),
(10, 12, 8),
(11, 13, 8),
(12, 14, 8),
(13, 15, 8),
(14, 16, 8),
(15, 17, 8),
(16, 18, 8),
(17, 19, 8),
(18, 20, 8);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_content`
--

CREATE TABLE `health_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hcDate` date DEFAULT NULL,
  `hcName` varchar(255) NOT NULL,
  `hcArticle` varchar(255) NOT NULL,
  `hcAuthor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info`
--

CREATE TABLE `hospital_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cContactNumber` int(11) NOT NULL,
  `hName` varchar(255) NOT NULL,
  `hLocation` varchar(255) NOT NULL,
  `hNumber` int(11) NOT NULL,
  `hInfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labreport`
--

CREATE TABLE `labreport` (
  `reportID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) NOT NULL,
  `reportTitle` varchar(255) NOT NULL,
  `reportDate` date NOT NULL,
  `reportDocument` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labreport`
--

INSERT INTO `labreport` (`reportID`, `userID`, `userName`, `reportTitle`, `reportDate`, `reportDocument`) VALUES
(1, 1, 'Janice', 'DNA test ', '2019-02-06', 'Labreport.pdf'),
(2, 2, 'Ruben', 'Health Screening', '2019-03-16', 'Labreport.pdf'),
(3, 3, 'Muthu', 'Allergy test', '2019-04-28', 'Labreport.pdf'),
(4, 4, 'Jayson Tatum', 'Cardia test', '2019-04-28', 'Labreport.pdf'),
(5, 5, 'Stephen Curry', 'Pre-U Screening', '2019-04-28', 'Labreport.pdf'),
(6, 6, 'Michael Jordan', 'Pre Maritial Screening', '2019-04-28', 'Labreport.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `medical_assistant`
--

CREATE TABLE `medical_assistant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `maContactNumber` int(11) NOT NULL,
  `maName` varchar(255) NOT NULL,
  `cEmail` varchar(255) NOT NULL,
  `cAge` int(11) NOT NULL,
  `cGender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_18_084712_customer', 1),
(6, '2022_10_18_084936_health_content', 1),
(7, '2022_10_18_085011_medical_assistant', 1),
(8, '2022_10_18_085036_labreport', 1),
(9, '2022_10_18_085109_appointment', 1),
(10, '2022_10_18_085126_hospital_info', 1),
(11, '2022_12_01_095317_create_payment_table', 1),
(12, '2022_12_11_142404_contact_us_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payName` varchar(255) NOT NULL,
  `payDate` date NOT NULL,
  `payAmount` int(11) NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payID`, `created_at`, `updated_at`, `payName`, `payDate`, `payAmount`, `userID`) VALUES
(1, NULL, NULL, 'DNA test ', '2019-02-03', 2300, 1),
(2, NULL, NULL, 'Health Screening', '2019-03-13', 388, 2),
(3, NULL, NULL, 'Allergy test', '2019-04-23', 557, 3),
(4, NULL, NULL, 'Cardia test', '2019-04-21', 1000, 4),
(5, NULL, NULL, 'Pre-U Screening', '2019-04-22', 130, 5),
(6, NULL, NULL, 'Pre Maritial Screening', '2019-04-21', 700, 6);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `contactNumber`, `email`, `password`, `userType`) VALUES
(1, 'Janice', '0145874526', 'janice@gmail.com', '$2y$10$96mevG8oWcoe8p.oKcumJ.SITTU9h0duKyKbIqOZRQqDY/ttnsjj.', 'customer'),
(2, 'Ruben', '0145874526', 'ruben@gmail.com', '$2y$10$sUFjy4slnO5p0FCNMbHUWOdCgylXbjLylhnShNXL9XMpKnajND51O', 'customer'),
(3, 'Muthu', '0145874526', 'muthu@gmail.com', '$2y$10$a6y/pG4C8F9m3eSitytM0OeFfcyXQBO7patHADdP3aVKmAuwafcym', 'customer'),
(4, 'Jayson Tatum', '01489357469', 'Jayson104@gmail.com', '$2y$10$q5Y4eIdl8L3CwkdjskzQTOAs75yhDYSQYqV7z5aQcKasj8yxxCECK', 'customer'),
(5, 'Stephen Curry', '01841625789', 'Curry0810@gmail.com', '$2y$10$6LD3OimaYe6Q3JfxjFJ2KuRJgftLFVWAczFmgp.x7O/PDcUvTP.tq', 'customer'),
(6, 'Michael Jordan', '0132456985', 'Jorden806@gmail.com', '$2y$10$oz5z3aqC7kDOih57b9K1ieFWi9h4k0wrRvuFGIllUWSMvM7TpAucm', 'customer'),
(7, 'Rakesh', '0145874526', 'ra@gmail.com', '$2y$10$hhN18DIkStXlicbzeIZTl.Bdeo//jLSTrR/as8nz34SE8iPz6JBQa', 'admin'),
(8, 'Roland', '0145874526', 'ro@gmail.com', '$2y$10$yneGFtEme/CsYGOfcQjCA.Gu9UPBS3fkiPhnaT2CUM.d6qiR8XWqe', 'admin'),
(9, 'Lebron James', '0174589632', 'James904@gmail.com', '$2y$10$14TWWIArnkb/3hZd9tBWKuyUTMOhS9VXxQjgq2CKoFRFTuKOLqJJa', 'customer'),
(10, 'Klay Thomson', '0145236987', 'Klay604@gmail.com', '$2y$10$W2y6wQo0UFwIDpplgZHZ3ONfhMj28/bJmd.vPRelZJVBYSiff5eeG', 'customer'),
(11, 'Dreamon Green', '0175847965', 'Green302@gmail.com', '$2y$10$1iE8yYeYyjDl.hnUof0eBOITTGSxw1y3hzmCfnGYJP6jS3WLpYzYu', 'customer'),
(12, 'Andrew Wiggins', '01', 'Wiggins2012@gmail.com', '$2y$10$bzBqx4xvbI7esgQmIRvTsuC2GNgnVKbasbcLOFrCA5cc6YtGVUA2i', 'customer'),
(13, 'Jimmy Butler', '01741258745', 'Jimmy802@gmail.com', '$2y$10$DM3576rgoveREckTKJRrMehSEi7enKI/VFjN5V5KhWPaxLJAvG/M2', 'customer'),
(14, 'Giannis', '0147859632', 'Ginannis012@gmail.com', '$2y$10$ju2j8SMWyt8Q7IM/eDEPs.irDlyxMrtSNCklj7Lm.4XF2yy8mP6iu', 'customer'),
(15, 'James Harden', '0132569874', 'Harden402@gmail.com', '$2y$10$4K4RTwxpX/zVMt1txHQ1Xu.lApNENWfAnLEP/LByAx9EYx9ySBI56', 'customer'),
(16, 'westbrook', '0145874526', 'Brook023@gmail.com', '$2y$10$KdBu368EmAr7k2oNgJ0DLuKySrQ88AN.Lj0.a7SDKt8ln9eJfRvpi', 'customer'),
(17, 'Jordan Smitch', '01145278569', 'Jrsmitch002@gmail.com', '$2y$10$t4Bx2aZWBkTT7z0iKrJC7O6AI5x8gWQNLTZnlka/SQyS6vDQh.fVa', 'customer'),
(18, 'Garry Payton', '014554789836', 'Payton002@gmail.com', '$2y$10$LMRhCbwpx6N4K.ObLf6yf.BjDOWlm2PnTStLRQwwl2/FPMjmOeJae', 'customer'),
(19, 'Kryie Erving', '015478965478', 'Erving001@gmail.com', '$2y$10$g3m/R032UshsCxgTJOlIn.hstvk4PwUPz5ZkvZF6z3DCZ6uRoW41m', 'customer'),
(20, 'Kevin Durant', '0198567458', 'Durant022@gmail.com', '$2y$10$kkIlP6UHt3JzbaO1MPbFquc1AMLbzM3dBTuotQ3atsEo/grvwKnPu', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_userid_foreign` (`userID`);

--
-- Indexes for table `cslist`
--
ALTER TABLE `cslist`
  ADD PRIMARY KEY (`csID`),
  ADD KEY `cslist_userid_foreign` (`userID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusID`),
  ADD UNIQUE KEY `customer_cusid_unique` (`cusID`),
  ADD KEY `customer_customerid_foreign` (`customerID`),
  ADD KEY `customer_lecturerid_foreign` (`lecturerID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `health_content`
--
ALTER TABLE `health_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `health_content_hcname_unique` (`hcName`);

--
-- Indexes for table `hospital_info`
--
ALTER TABLE `hospital_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hospital_info_hname_unique` (`hName`);

--
-- Indexes for table `labreport`
--
ALTER TABLE `labreport`
  ADD PRIMARY KEY (`reportID`),
  ADD UNIQUE KEY `labreport_reportid_unique` (`reportID`),
  ADD KEY `labreport_userid_foreign` (`userID`),
  ADD KEY `labreport_username_foreign` (`userName`);

--
-- Indexes for table `medical_assistant`
--
ALTER TABLE `medical_assistant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medical_assistant_maname_unique` (`maName`),
  ADD UNIQUE KEY `medical_assistant_cemail_unique` (`cEmail`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`),
  ADD UNIQUE KEY `payment_payid_unique` (`payID`),
  ADD KEY `payment_userid_foreign` (`userID`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_username_unique` (`userName`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cslist`
--
ALTER TABLE `cslist`
  MODIFY `csID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_content`
--
ALTER TABLE `health_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_info`
--
ALTER TABLE `hospital_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labreport`
--
ALTER TABLE `labreport`
  MODIFY `reportID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical_assistant`
--
ALTER TABLE `medical_assistant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `cslist`
--
ALTER TABLE `cslist`
  ADD CONSTRAINT `cslist_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `customer_lecturerid_foreign` FOREIGN KEY (`lecturerID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `labreport`
--
ALTER TABLE `labreport`
  ADD CONSTRAINT `labreport_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `labreport_username_foreign` FOREIGN KEY (`userName`) REFERENCES `users` (`userName`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
