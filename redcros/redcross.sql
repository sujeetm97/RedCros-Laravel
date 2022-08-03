-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 11:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcross`
--

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `age_id` bigint(20) UNSIGNED NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`age_id`, `age`, `created_at`, `updated_at`) VALUES
(1, '1', '2022-06-17 12:12:46', '2022-06-17 12:12:46'),
(3, '63', '2022-06-17 12:36:49', '2022-06-17 12:36:49'),
(4, '2', '2022-06-17 12:37:02', '2022-06-17 12:37:02'),
(5, '4', '2022-06-17 12:37:41', '2022-06-17 12:37:41'),
(6, '6', '2022-06-17 12:37:48', '2022-06-17 12:37:48'),
(7, '15', '2022-06-22 06:47:31', '2022-06-22 06:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bloodgroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`id`, `bloodgroup`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'O', NULL, NULL),
(4, 'AB', NULL, NULL),
(5, 'A+', NULL, NULL),
(6, 'A-', NULL, NULL),
(7, 'B+', NULL, NULL),
(8, 'B-', NULL, NULL),
(9, 'O+', NULL, NULL),
(10, 'O-', NULL, NULL),
(11, 'AB+', NULL, NULL),
(12, 'AB-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `s_id`, `created_at`, `updated_at`) VALUES
(1, 'Visakhapatnam', 1, NULL, NULL),
(2, 'Vijayawada', 1, NULL, NULL),
(3, 'Guntur', 1, NULL, NULL),
(4, 'Nellore', 1, NULL, NULL),
(5, 'Kurnool', 1, NULL, NULL),
(6, 'Kakinada', 1, NULL, NULL),
(7, 'Rajahmundry', 1, NULL, NULL),
(8, 'Kadapa', 1, NULL, NULL),
(9, 'Tirupati', 1, NULL, NULL),
(10, 'Anantapuram', 1, NULL, NULL),
(11, 'Vizianagaram', 1, NULL, NULL),
(12, 'Eluru', 1, NULL, NULL),
(13, 'Nandyal', 1, NULL, NULL),
(14, 'Ongole', 1, NULL, NULL),
(15, 'Adoni', 1, NULL, NULL),
(16, 'Madanapalle', 1, NULL, NULL),
(17, 'Machilipatnam', 1, NULL, NULL),
(18, 'Tenali', 1, NULL, NULL),
(19, 'Proddatur', 1, NULL, NULL),
(20, 'Chittoor', 1, NULL, NULL),
(21, 'Hindupur', 1, NULL, NULL),
(22, 'Srikakulam', 1, NULL, NULL),
(23, 'Bhimavaram', 1, NULL, NULL),
(24, 'Tadepalligudem', 1, NULL, NULL),
(25, 'Guntakal', 1, NULL, NULL),
(26, 'Dharmavaram', 1, NULL, NULL),
(27, 'Gudivada', 1, NULL, NULL),
(28, 'Narasaraopet', 1, NULL, NULL),
(29, 'Kadiri', 1, NULL, NULL),
(30, 'Tadipatri', 1, NULL, NULL),
(31, 'Mangalagiri', 1, NULL, NULL),
(32, 'Chilakaluripet', 1, NULL, NULL),
(33, 'Anjaw', 2, NULL, NULL),
(34, 'Changlang', 2, NULL, NULL),
(35, 'Dibang Valley', 2, NULL, NULL),
(36, 'East Kameng', 2, NULL, NULL),
(37, 'East Siang', 2, NULL, NULL),
(38, 'Kurung Kumey', 2, NULL, NULL),
(39, 'Lohit', 2, NULL, NULL),
(40, 'Lower Dibang Valley', 2, NULL, NULL),
(41, 'Lower Subansiri', 2, NULL, NULL),
(42, 'Papum Pare', 2, NULL, NULL),
(43, 'Tawang', 2, NULL, NULL),
(44, 'Tirap', 2, NULL, NULL),
(45, 'Upper Siang', 2, NULL, NULL),
(46, 'Upper Subansiri', 2, NULL, NULL),
(47, 'West Kameng', 2, NULL, NULL),
(48, 'West Siang', 2, NULL, NULL),
(55, 'Barpeta', 3, NULL, NULL),
(56, 'Bongaigaon', 3, NULL, NULL),
(57, 'Cachar', 3, NULL, NULL),
(58, 'Darrang', 3, NULL, NULL),
(59, 'Dhemaji', 3, NULL, NULL),
(60, 'Dhubri', 3, NULL, NULL),
(61, 'Dibrugarh', 3, NULL, NULL),
(62, 'Dima Hasao', 3, NULL, NULL),
(63, 'Goalpara', 3, NULL, NULL),
(64, 'Golaghat', 3, NULL, NULL),
(65, 'Hailakandi', 3, NULL, NULL),
(66, 'Jorhat', 3, NULL, NULL),
(67, 'Karbi Anglong', 3, NULL, NULL),
(68, 'Karimganj', 3, NULL, NULL),
(69, 'Kokrajhar', 3, NULL, NULL),
(70, 'Lakhimpur', 3, NULL, NULL),
(71, 'Morigaon', 3, NULL, NULL),
(72, 'Nagaon', 3, NULL, NULL),
(73, 'Nalbari', 3, NULL, NULL),
(74, 'Sivasagar', 3, NULL, NULL),
(75, 'Sonitpur', 3, NULL, NULL),
(76, 'Tinsukia', 3, NULL, NULL),
(77, 'Araria', 4, NULL, NULL),
(78, 'Aurangabad', 4, NULL, NULL),
(79, 'Banka', 4, NULL, NULL),
(80, 'Begusarai', 4, NULL, NULL),
(81, 'Bhagalpur', 4, NULL, NULL),
(82, 'Bhojpur', 4, NULL, NULL),
(83, 'Buxar', 4, NULL, NULL),
(84, 'Darbhanga', 4, NULL, NULL),
(85, 'Gaya', 4, NULL, NULL),
(86, 'Gopalganj', 4, NULL, NULL),
(87, 'Jamui', 4, NULL, NULL),
(88, 'Jehanabad', 4, NULL, NULL),
(89, 'Kaimur', 4, NULL, NULL),
(90, 'Katihar', 4, NULL, NULL),
(91, 'Khagaria', 4, NULL, NULL),
(92, 'Kishanganj', 4, NULL, NULL),
(93, 'Lakhisarai', 4, NULL, NULL),
(94, 'Madhepura', 4, NULL, NULL),
(95, 'Madhubani', 4, NULL, NULL),
(96, 'Munger', 4, NULL, NULL),
(97, 'Muzaffarpur', 4, NULL, NULL),
(98, 'Nalanda', 4, NULL, NULL),
(99, 'Nawada', 4, NULL, NULL),
(100, 'Pashchim Champaran', 4, NULL, NULL),
(101, 'Patna', 4, NULL, NULL),
(102, 'Purbi Champaran', 4, NULL, NULL),
(103, 'Purnia', 4, NULL, NULL),
(104, 'Rohtas', 4, NULL, NULL),
(105, 'Saharsa', 4, NULL, NULL),
(106, 'Samastipur', 4, NULL, NULL),
(107, 'Saran', 4, NULL, NULL),
(108, 'Sitamarhi', 4, NULL, NULL),
(109, 'Siwan', 4, NULL, NULL),
(110, 'Supaul', 4, NULL, NULL),
(111, 'Vaishali', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, '2022_05_26_031726_create_user_table', 2),
(11, '2022_06_17_163648_create_age_table', 3),
(12, '2022_06_20_162803_create_bloodgroup_table', 4),
(13, '2022_06_20_182653_create_state_table', 5),
(14, '2022_06_20_191956_create_city_table', 6),
(18, '2022_06_22_122503_create_donor_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh', NULL, NULL),
(2, 'Arunachal Pradesh', NULL, NULL),
(3, 'Assam', NULL, NULL),
(4, 'Bihar', NULL, NULL),
(5, 'Chhattisgarh', NULL, NULL),
(6, 'Goa', NULL, NULL),
(7, 'Gujarat', NULL, NULL),
(8, 'Haryana', NULL, NULL),
(9, 'Himachal Pradesh', NULL, NULL),
(10, 'Jharkhand', NULL, NULL),
(11, 'Karnataka', NULL, NULL),
(12, 'Kerala', NULL, NULL),
(13, 'Madhya Pradesh', NULL, NULL),
(14, 'Maharashtra', NULL, NULL),
(15, 'Manipur', NULL, NULL),
(16, 'Meghalaya', NULL, NULL),
(17, 'Mizoram', NULL, NULL),
(18, 'Nagaland', NULL, NULL),
(19, 'Odisha', NULL, NULL),
(20, 'Punjab', NULL, NULL),
(21, 'Rajasthan', NULL, NULL),
(22, 'Sikkim', NULL, NULL),
(23, 'Tamil Nadu', NULL, NULL),
(24, 'Telangana', NULL, NULL),
(25, 'Tripura', NULL, NULL),
(26, 'Uttarakhand', NULL, NULL),
(27, 'Uttar Pradesh', NULL, NULL),
(28, 'West Bengal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobileNO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_mobileNO`, `user_address`, `user_gender`, `user_dob`, `user_password`, `user_status`, `created_at`, `updated_at`) VALUES
(11, 'chavdahitesh77777@gmail.com', 'hitesh', '6352613550', 'rajkot', 'M', '2022-05-10', '202cb962ac59075b964b07152d234b70', 1, '2022-05-26 01:48:31', '2022-05-26 01:48:31'),
(14, 'chavdahitesh7777@gmail.com', 'no', '1234567893', 'ok', 'M', '2022-06-09', 'e10adc3949ba59abbe56e057f20f883e', 1, '2022-06-09 02:46:24', '2022-06-09 02:46:24'),
(15, 'abcd@mail.com', 'abcd', '8956324157', 'rajkot', 'M', '2022-06-14', '202cb962ac59075b964b07152d234b70', 1, '2022-06-13 01:38:37', '2022-06-13 01:38:37'),
(17, 'krunal7979@gmail.com', 'krunal', '9685741234', 'Rajkot', 'M', '2022-06-14', '3621f1454cacf995530ea53652ddf8fb', 1, '2022-06-17 10:58:52', '2022-06-17 10:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_s_id_foreign` (`s_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `age_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `state` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
