-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 04:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

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
(40, '18', '2022-07-02 18:32:12', '2022-07-02 18:32:12'),
(41, '19', '2022-07-02 18:32:15', '2022-07-02 18:32:15'),
(42, '20', '2022-07-02 18:32:18', '2022-07-02 18:32:18'),
(43, '21', '2022-07-02 18:32:21', '2022-07-02 18:32:21'),
(44, '22', '2022-07-02 18:32:24', '2022-07-02 18:32:24'),
(45, '23', '2022-07-02 18:32:27', '2022-07-02 18:32:27'),
(46, '24', '2022-07-02 18:32:30', '2022-07-02 18:32:30'),
(47, '25', '2022-07-02 18:32:32', '2022-07-02 18:32:32'),
(48, '26', '2022-07-02 18:32:36', '2022-07-02 18:32:36'),
(49, '27', '2022-07-02 18:32:39', '2022-07-02 18:32:39'),
(50, '28', '2022-07-02 18:32:42', '2022-07-02 18:32:42'),
(51, '29', '2022-07-02 18:32:45', '2022-07-02 18:32:45'),
(52, '30', '2022-07-02 18:32:48', '2022-07-02 18:32:48'),
(53, '31', '2022-07-02 18:32:52', '2022-07-02 18:32:52'),
(54, '32', '2022-07-02 18:32:55', '2022-07-02 18:32:55'),
(55, '33', '2022-07-02 18:32:58', '2022-07-02 18:32:58'),
(56, '34', '2022-07-02 18:33:01', '2022-07-02 18:33:01'),
(57, '35', '2022-07-02 18:33:03', '2022-07-02 18:33:03'),
(58, '36', '2022-07-02 18:33:06', '2022-07-02 18:33:06'),
(59, '37', '2022-07-02 18:33:09', '2022-07-02 18:33:09'),
(60, '38', '2022-07-02 18:33:11', '2022-07-02 18:33:11'),
(61, '39', '2022-07-02 18:33:14', '2022-07-02 18:33:14'),
(62, '40', '2022-07-02 18:33:17', '2022-07-02 18:33:17'),
(63, '41', '2022-07-02 18:33:20', '2022-07-02 18:33:20'),
(64, '42', '2022-07-02 18:33:23', '2022-07-02 18:33:23'),
(65, '43', '2022-07-02 18:33:26', '2022-07-02 18:33:26'),
(66, '44', '2022-07-02 18:33:29', '2022-07-02 18:33:29'),
(67, '45', '2022-07-02 18:33:32', '2022-07-02 18:33:32'),
(68, '46', '2022-07-02 18:33:35', '2022-07-02 18:33:35'),
(69, '47', '2022-07-02 18:33:38', '2022-07-02 18:33:38'),
(70, '48', '2022-07-02 18:33:40', '2022-07-02 18:33:40'),
(71, '49', '2022-07-02 18:33:43', '2022-07-02 18:33:43'),
(72, '50', '2022-07-02 18:33:45', '2022-07-02 18:33:45'),
(73, '51', '2022-07-02 18:33:48', '2022-07-02 18:33:48'),
(74, '52', '2022-07-02 18:33:50', '2022-07-02 18:33:50'),
(75, '53', '2022-07-02 18:33:52', '2022-07-02 18:33:52'),
(76, '54', '2022-07-02 18:33:55', '2022-07-02 18:33:55'),
(77, '55', '2022-07-02 18:33:58', '2022-07-02 18:33:58'),
(78, '56', '2022-07-02 18:34:01', '2022-07-02 18:34:01'),
(79, '57', '2022-07-02 18:34:04', '2022-07-02 18:34:04'),
(80, '58', '2022-07-02 18:34:06', '2022-07-02 18:34:06'),
(81, '59', '2022-07-02 18:34:08', '2022-07-02 18:34:08'),
(82, '60', '2022-07-02 18:34:10', '2022-07-02 18:34:10'),
(83, '61', '2022-07-02 18:34:13', '2022-07-02 18:34:13'),
(84, '62', '2022-07-02 18:34:15', '2022-07-02 18:34:15'),
(85, '63', '2022-07-02 18:34:17', '2022-07-02 18:34:17'),
(86, '64', '2022-07-02 18:34:20', '2022-07-02 18:34:20'),
(87, '65', '2022-07-02 18:34:22', '2022-07-02 18:34:22'),
(88, '66', '2022-07-02 18:34:25', '2022-07-02 18:34:25'),
(89, '67', '2022-07-02 18:34:27', '2022-07-02 18:34:27'),
(90, '68', '2022-07-02 18:34:29', '2022-07-02 18:34:29'),
(91, '69', '2022-07-02 18:34:31', '2022-07-02 18:34:31'),
(92, '70', '2022-07-02 18:34:33', '2022-07-02 18:34:33'),
(93, '71', '2022-07-02 18:34:37', '2022-07-02 18:34:37'),
(94, '72', '2022-07-02 18:34:40', '2022-07-02 18:34:40'),
(95, '73', '2022-07-02 18:34:44', '2022-07-02 18:34:44'),
(96, '74', '2022-07-02 18:34:47', '2022-07-02 18:34:47'),
(97, '75', '2022-07-02 18:34:49', '2022-07-02 18:34:49'),
(98, '76', '2022-07-02 18:34:51', '2022-07-02 18:34:51'),
(99, '77', '2022-07-02 18:34:54', '2022-07-02 18:34:54'),
(100, '78', '2022-07-02 18:34:57', '2022-07-02 18:34:57'),
(101, '79', '2022-07-02 18:34:59', '2022-07-02 18:34:59'),
(102, '80', '2022-07-02 18:35:01', '2022-07-02 18:35:01'),
(103, '81', '2022-07-02 18:35:03', '2022-07-02 18:35:03'),
(104, '82', '2022-07-02 18:35:06', '2022-07-02 18:35:06'),
(105, '83', '2022-07-02 18:35:08', '2022-07-02 18:35:08'),
(106, '84', '2022-07-02 18:35:11', '2022-07-02 18:35:11'),
(107, '85', '2022-07-02 18:35:13', '2022-07-02 18:35:13'),
(108, '86', '2022-07-02 18:35:16', '2022-07-02 18:35:16'),
(109, '87', '2022-07-02 18:35:18', '2022-07-02 18:35:18'),
(110, '88', '2022-07-02 18:35:21', '2022-07-02 18:35:21'),
(111, '89', '2022-07-02 18:35:23', '2022-07-02 18:35:23'),
(112, '90', '2022-07-02 18:35:27', '2022-07-02 18:35:27'),
(113, '91', '2022-07-02 18:35:30', '2022-07-02 18:35:30'),
(114, '92', '2022-07-02 18:35:32', '2022-07-02 18:35:32'),
(115, '93', '2022-07-02 18:35:34', '2022-07-02 18:35:34'),
(116, '94', '2022-07-02 18:35:37', '2022-07-02 18:35:37'),
(117, '95', '2022-07-02 18:35:39', '2022-07-02 18:35:39'),
(118, '96', '2022-07-02 18:35:41', '2022-07-02 18:35:41'),
(119, '97', '2022-07-02 18:35:43', '2022-07-02 18:35:43'),
(120, '98', '2022-07-02 18:35:46', '2022-07-02 18:35:46'),
(121, '99', '2022-07-02 18:35:50', '2022-07-02 18:35:50'),
(122, '100', '2022-07-02 18:35:55', '2022-07-02 18:35:55');

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
(1, 'Rajkot', 7, NULL, NULL),
(2, 'Surat', 7, NULL, NULL),
(3, 'Gandhinagar', 7, NULL, NULL),
(4, 'ahmedabad', 7, NULL, NULL),
(5, 'Vadodara', 7, NULL, NULL),
(6, 'Nadiyad', 7, NULL, NULL),
(7, 'Bhavnagar', 7, NULL, NULL),
(8, 'Porbandar', 7, NULL, NULL),
(9, 'Morbi', 7, NULL, NULL),
(10, 'Gondal', 7, NULL, NULL),
(11, 'Mumbai', 14, NULL, NULL),
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
(111, 'Vaishali', 4, NULL, NULL),
(112, 'Raipur', 5, NULL, NULL),
(113, 'Bhilai ', 5, NULL, NULL),
(114, 'Bilaspur', 5, NULL, NULL),
(115, 'Korba', 5, NULL, NULL),
(116, 'Raj Nandgaon', 5, NULL, NULL),
(117, 'Raigarh', 5, NULL, NULL),
(118, 'Jagdalpur', 5, NULL, NULL),
(119, 'Ambikapur', 5, NULL, NULL),
(120, 'Dhamtari', 5, NULL, NULL),
(121, 'Chirmiri', 5, NULL, NULL),
(122, 'Bhatapara', 5, NULL, NULL),
(123, 'Mahasamund', 5, NULL, NULL),
(124, 'Dalli-Rajhara', 5, NULL, NULL),
(125, 'Kawardha', 5, NULL, NULL),
(126, 'Champa', 5, NULL, NULL),
(127, 'Naila Janjgir', 5, NULL, NULL),
(128, 'Kanker', 5, NULL, NULL),
(129, 'Dongragarh', 5, NULL, NULL),
(130, 'Tilda Neora', 5, NULL, NULL),
(131, 'Mungeli', 5, NULL, NULL),
(132, 'Manendragarh', 5, NULL, NULL),
(133, 'Kondagaon', 5, NULL, NULL),
(134, 'Gobranawapara', 5, NULL, NULL),
(135, 'Bemetara', 5, NULL, NULL),
(136, 'Baikunthpur', 5, NULL, NULL),
(137, 'Panaji ', 6, NULL, NULL),
(138, 'Madgaon ', 6, NULL, NULL),
(139, 'Mormugao ', 6, NULL, NULL),
(140, 'Mapuca ', 6, NULL, NULL),
(141, 'Curchorem Cacora', 6, NULL, NULL),
(142, 'Ponda', 6, NULL, NULL),
(143, 'Sancoale', 6, NULL, NULL),
(144, 'Ahmedabad', 7, NULL, NULL),
(145, 'Surat', 7, NULL, NULL),
(146, 'Vadodara ', 7, NULL, NULL),
(147, 'Bhavnagar', 7, NULL, NULL),
(148, 'RajkotJamnagar', 7, NULL, NULL),
(149, 'Jamnagar', 7, NULL, NULL),
(150, 'Nadiad', 7, NULL, NULL),
(151, 'Junagadh', 7, NULL, NULL),
(152, 'Navsari', 7, NULL, NULL),
(153, 'Morvi', 7, NULL, NULL),
(154, 'Gandhidham', 7, NULL, NULL),
(155, 'Bharuch ', 7, NULL, NULL),
(156, 'Anand', 7, NULL, NULL),
(157, 'Porbandar', 7, NULL, NULL),
(158, 'Mahesana', 7, NULL, NULL),
(159, 'Bhuj', 7, NULL, NULL),
(160, 'Veraval', 7, NULL, NULL),
(161, 'Surendranagar', 7, NULL, NULL),
(162, 'Valsad ', 7, NULL, NULL),
(163, 'Vapi ', 7, NULL, NULL),
(164, 'Godhra', 7, NULL, NULL),
(165, 'Palanpur', 7, NULL, NULL),
(166, 'Anklesvar', 7, NULL, NULL),
(167, 'Patan', 7, NULL, NULL),
(168, 'Dahod ', 7, NULL, NULL),
(169, 'Faridabad ', 8, NULL, NULL),
(170, 'Gurgaon', 8, NULL, NULL),
(171, 'Panipat', 8, NULL, NULL),
(172, 'Yamunanagar', 8, NULL, NULL),
(173, 'Rohtak', 8, NULL, NULL),
(174, 'Hisar', 8, NULL, NULL),
(175, 'Karnal', 8, NULL, NULL),
(176, 'Sonipat', 8, NULL, NULL),
(177, 'Panchkula ', 8, NULL, NULL),
(178, 'Ambala Sadar', 8, NULL, NULL),
(179, 'Bhiwani', 8, NULL, NULL),
(180, 'Ambala', 8, NULL, NULL),
(181, 'Sirsa', 8, NULL, NULL),
(182, 'Bahadurgarh', 8, NULL, NULL),
(183, 'Jind', 8, NULL, NULL),
(184, 'Thanesar', 8, NULL, NULL),
(185, 'Kaithal', 8, NULL, NULL),
(186, 'Rewari', 8, NULL, NULL),
(187, 'Palwal', 8, NULL, NULL),
(188, 'Hansi', 8, NULL, NULL),
(189, 'Narnaul', 8, NULL, NULL),
(190, 'Fatehabad', 8, NULL, NULL),
(191, 'Gohana', 8, NULL, NULL),
(192, 'Tohana', 8, NULL, NULL),
(193, 'Narwana', 8, NULL, NULL),
(194, 'Shimla ', 9, NULL, NULL),
(195, 'Solan', 9, NULL, NULL),
(196, 'Dharmsala ', 9, NULL, NULL),
(197, 'Baddi', 9, NULL, NULL),
(198, 'Nahan', 9, NULL, NULL),
(199, 'Mandi', 9, NULL, NULL),
(200, 'Paonta Sahib', 9, NULL, NULL),
(201, 'Sundarnagar', 9, NULL, NULL),
(202, 'Chamba', 9, NULL, NULL),
(203, 'Kullu', 9, NULL, NULL),
(204, 'Jamshedpur', 10, NULL, NULL),
(205, 'Dhanbad', 10, NULL, NULL),
(206, 'Ranchi ', 10, NULL, NULL),
(207, 'Bokaro', 10, NULL, NULL),
(208, 'Deoghar', 10, NULL, NULL),
(209, 'Phusro', 10, NULL, NULL),
(210, 'Hazaribag', 10, NULL, NULL),
(211, 'Giridih', 10, NULL, NULL),
(212, 'Ramgarh', 10, NULL, NULL),
(213, 'Medininagar', 10, NULL, NULL),
(214, 'Chirkunda', 10, NULL, NULL),
(215, 'Jumri Tilaiya', 10, NULL, NULL),
(216, 'Sahibganj', 10, NULL, NULL),
(217, 'Saunda', 10, NULL, NULL),
(218, 'Chaibasa', 10, NULL, NULL),
(219, 'Lohardaga', 10, NULL, NULL),
(220, 'Chakradharpur', 10, NULL, NULL),
(221, 'Madhupur', 10, NULL, NULL),
(222, 'Gumla', 10, NULL, NULL),
(223, 'Chatra', 10, NULL, NULL),
(224, 'Godda', 10, NULL, NULL),
(225, 'Gumia ', 10, NULL, NULL),
(226, 'Dumka', 10, NULL, NULL),
(227, 'Garwa', 10, NULL, NULL),
(228, 'Pakaur', 10, NULL, NULL),
(229, 'Bengaluru', 11, NULL, NULL),
(230, 'Mysore', 11, NULL, NULL),
(231, 'Hubli-Dharwar', 11, NULL, NULL),
(232, 'Mangalore', 11, NULL, NULL),
(233, 'Belgaum', 11, NULL, NULL),
(234, 'Gulbarga', 11, NULL, NULL),
(235, 'Davanagere', 11, NULL, NULL),
(236, 'Bellary', 11, NULL, NULL),
(237, 'Bijapur', 11, NULL, NULL),
(238, 'Shimoga', 11, NULL, NULL),
(239, 'Tumkur', 11, NULL, NULL),
(240, 'Raichur', 11, NULL, NULL),
(241, 'Bidar', 11, NULL, NULL),
(242, 'Hospet', 11, NULL, NULL),
(243, 'Hassan', 11, NULL, NULL),
(244, 'Gadag-Betigeri', 11, NULL, NULL),
(245, 'Udupi', 11, NULL, NULL),
(246, 'Robertson Pet', 11, NULL, NULL),
(247, 'Bhadravati', 11, NULL, NULL),
(248, 'Chitradurga', 11, NULL, NULL),
(249, 'Kolar', 11, NULL, NULL),
(250, 'Mandya', 11, NULL, NULL),
(251, 'Chikmagalur', 11, NULL, NULL),
(252, 'Gangawati', 11, NULL, NULL),
(253, 'Bagalkot', 11, NULL, NULL),
(254, 'Thiruvananthapuram', 12, NULL, NULL),
(255, 'Kochi', 12, NULL, NULL),
(256, 'Kozhikode', 12, NULL, NULL),
(257, 'Kollam', 12, NULL, NULL),
(258, 'Thrissur', 12, NULL, NULL),
(259, 'Alappuzha', 12, NULL, NULL),
(260, 'Palakkad', 12, NULL, NULL),
(261, 'Malappuram', 12, NULL, NULL),
(262, 'Manjeri', 12, NULL, NULL),
(263, 'Thalassery', 12, NULL, NULL),
(264, 'Ponnani', 12, NULL, NULL),
(265, 'Vadakara', 12, NULL, NULL),
(266, 'Kanhangad', 12, NULL, NULL),
(267, 'Taliparamba', 12, NULL, NULL),
(268, 'Payyanur', 12, NULL, NULL),
(269, 'Koyilandy', 12, NULL, NULL),
(270, 'Neyyattinkara', 12, NULL, NULL),
(271, 'Beypore', 12, NULL, NULL),
(272, 'Kayamkulam', 12, NULL, NULL),
(273, 'Kannur', 12, NULL, NULL),
(274, 'Tirur', 12, NULL, NULL),
(275, 'Kottayam', 12, NULL, NULL),
(276, 'Nileshwaram', 12, NULL, NULL),
(277, 'Kasaragod', 12, NULL, NULL),
(278, 'Kunnamkulam', 12, NULL, NULL),
(279, 'Indore', 13, NULL, NULL),
(280, 'Bhopal ', 13, NULL, NULL),
(281, 'Jabalpur', 13, NULL, NULL),
(282, 'Gwalior', 13, NULL, NULL),
(283, 'Ujjain', 13, NULL, NULL),
(284, 'Sagar', 13, NULL, NULL),
(285, 'Dewas', 13, NULL, NULL),
(286, 'Satna', 13, NULL, NULL),
(287, 'Ratlam', 13, NULL, NULL),
(288, 'Rewa', 13, NULL, NULL),
(289, 'Murwara', 13, NULL, NULL),
(290, 'Singrauli', 13, NULL, NULL),
(291, 'Burhanpur', 13, NULL, NULL),
(292, 'Khandwa', 13, NULL, NULL),
(293, 'Morena', 13, NULL, NULL),
(294, 'Bhind', 13, NULL, NULL),
(295, 'Chhindwara', 13, NULL, NULL),
(296, 'Guna', 13, NULL, NULL),
(297, 'Shivpuri', 13, NULL, NULL),
(298, 'Vidisha', 13, NULL, NULL),
(299, 'Damoh', 13, NULL, NULL),
(300, 'Chhatarpur', 13, NULL, NULL),
(301, 'Mandsaur', 13, NULL, NULL),
(302, 'Khargone', 13, NULL, NULL),
(303, 'Nimach', 13, NULL, NULL),
(304, 'Mumbai', 14, NULL, NULL),
(305, 'Pune', 14, NULL, NULL),
(306, 'Nagpur', 14, NULL, NULL),
(307, 'Nashik', 14, NULL, NULL),
(308, 'Vasai-Virar', 14, NULL, NULL),
(309, 'Aurangabad', 14, NULL, NULL),
(310, 'Solapur', 14, NULL, NULL),
(311, 'Bhiwandi', 14, NULL, NULL),
(312, 'Amravati', 14, NULL, NULL),
(313, 'Malegaon', 14, NULL, NULL),
(314, 'Kolhapur', 14, NULL, NULL),
(315, 'Nanded', 14, NULL, NULL),
(316, 'Sangli ', 14, NULL, NULL),
(317, 'Jalgaon', 14, NULL, NULL),
(318, 'Akola', 14, NULL, NULL),
(319, 'Latur', 14, NULL, NULL),
(320, 'Ahmadnagar', 14, NULL, NULL),
(321, 'Dhule', 14, NULL, NULL),
(322, 'Ichalkaranji', 14, NULL, NULL),
(323, 'Chandrapur', 14, NULL, NULL),
(324, 'Parbhani', 14, NULL, NULL),
(325, 'Jalna', 14, NULL, NULL),
(326, 'Bhusawal', 14, NULL, NULL),
(327, 'Navi Mumbai', 14, NULL, NULL),
(328, 'Panvel', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `email`, `mobileNO`, `bloodgroup`, `user_gender`, `age`, `state`, `city`, `status`, `created_at`, `updated_at`) VALUES
(4, 'krunal', 'krunal@7878gmail.com', '9426620898', 'A+', 'M', '63', 'Assam', 'Visakhapatnam', 0, '2022-07-02 18:23:47', '2022-07-02 18:23:47'),
(5, 'hitesh', 'chavdahitesh77777@gmail.com', '6352613550', 'B+', 'M', '24', 'Goa', 'Chittoor', 0, '2022-07-02 18:37:25', '2022-07-02 18:37:25'),
(6, 'Dhaval Patel', 'dhaval16620@gmail.com', '9714007524', 'A', 'M', '20', 'Gujarat', 'Rajkot', 0, '2022-07-07 07:03:32', '2022-07-07 08:32:25');

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
(18, '2022_06_22_122503_create_donor_table', 7),
(19, '2022_07_01_193333_create_contactus_table', 8),
(22, '2022_07_02_050232_create_admin_table', 9);

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
(11, 'krunal@7878gmail.com', 'krunal', '9426620898', 'Assam', 'O', '2020-10-01', '202cb962ac59075b964b07152d234b70', 1, '2022-05-26 01:48:31', '2022-07-01 14:01:27'),
(18, 'chavdahitesh77777@gmail.com', 'hitesh', '6352613550', 'Goa', 'M', '1998-01-01', '202cb962ac59075b964b07152d234b70', 1, '2022-07-02 18:27:20', '2022-07-02 18:27:20'),
(19, 'dhaval16620@gmail.com', 'Dhaval Patel', '9714007524', 'Rajkot', 'M', '2000-06-16', '9fd4b1c58bfbd10a6498754b7e1836c6', 1, '2022-07-07 07:17:46', '2022-07-07 08:32:25'),
(20, 'dhaval1620@gmail.com', 'Dhaval Patel', '9714007524', 'Rajkot', 'M', '2000-06-16', '9fd4b1c58bfbd10a6498754b7e1836c6', 1, '2022-07-07 09:04:53', '2022-07-07 09:08:10');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `age_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
