-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 06:57 AM
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
-- Database: `uday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `heading`, `description`, `created_at`, `updated_at`) VALUES
(1, '1714591937-2021.jpg', 'One Stop Solution For Interior Design & Decoration', 'Innovative Designs, Exceptional Spaces: Elevate Your Home Today', '2024-05-01 14:02:17', '2024-05-01 14:02:17'),
(2, '1714591979-5125.jpg', 'Welcome To Santoshi Maa Enterprise', 'Make a Statement with Your Space: Unleash the Power of Design', '2024-05-01 14:02:59', '2024-05-01 14:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type_post` varchar(255) DEFAULT NULL,
  `show_at_home` varchar(255) NOT NULL DEFAULT 'N',
  `paste_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `youtube_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `type_post`, `show_at_home`, `paste_link`, `youtube_link`, `youtube_code`, `created_at`, `updated_at`) VALUES
(1, 'False Ceiling', 'Elevate your space with our expertly crafted false ceiling designs. Enhance the ambiance of any room with our innovative and stylish solutions that bring a touch of sophistication and luxury to your interiors.', '1714593062-2849.jpeg', 'Services', 'N', NULL, NULL, NULL, '2024-05-01 14:21:02', '2024-05-01 14:21:02'),
(2, 'Modular Kitechen', 'Discover the perfect blend of functionality and style with our modular kitchen designs. Tailored to suit your lifestyle and preferences, our expertly crafted kitchens offer efficient storage solutions, sleek designs, and premium finishes.', '1714593139-1022.jpeg', 'Services', 'N', NULL, NULL, NULL, '2024-05-01 14:22:19', '2024-05-01 14:22:19'),
(3, 'Aluminium Slinding', 'Elevate your space with our sleek and modern aluminium sliding doors. Combining functionality with contemporary design, our sliding doors offer seamless transitions between indoor and outdoor spaces while maximizing natural light and ventilation.', '1714593289-3645.jpeg', 'Services', 'N', NULL, NULL, NULL, '2024-05-01 14:24:14', '2024-05-01 14:24:49'),
(4, 'P.V.C Door And WIndow', 'Upgrade your space with our premium P.V.C doors and windows that offer both style and durability. Our expertly crafted P.V.C products provide a perfect balance of aesthetics and functionality, enhancing your home\'s energy efficiency and security.', '1714593364-2701.jpg', 'Services', 'N', NULL, NULL, NULL, '2024-05-01 14:26:04', '2024-05-01 14:26:04'),
(5, 'Paint & Putty', 'Transform your walls with our high-quality paint and putty solutions. Our range of premium paints and putties are designed to add a touch of elegance and sophistication to any space. Whether you\'re looking to refresh your interiors with a new coat of paint or achieve a smooth and flawless finish with our putty', '1714593429-4871.jpeg', 'Services', 'N', NULL, NULL, NULL, '2024-05-01 14:27:09', '2024-05-01 14:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `package_id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sayan Ghosh', 'dev@gmail.com', '8617451412', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '2023-07-14 13:10:49', '2023-07-14 13:10:49'),
(2, NULL, 'Sayan Ghosh', 'dev@gmail.com', '8617451412', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '2023-07-14 13:11:11', '2023-07-14 13:11:11'),
(3, NULL, 'Sayan Ghosh', 'activarmor.test@gmail.com', '08617260309', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '2023-07-14 13:13:04', '2023-07-14 13:13:04'),
(5, 1, 'Sayan Ghosh', 'yebiyi1448@haizail.com', '08617260309', 'lorem', '2023-07-14 14:14:30', '2023-07-14 14:14:30'),
(6, 1, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, '2023-07-14 14:15:47', '2023-07-14 14:15:47'),
(7, NULL, 'Sayab', 'sayan@gmail.com', '08617260309', 'test', '2023-07-17 23:29:41', '2023-07-17 23:29:41'),
(8, NULL, 'Sayan Ghosh', 'developersayan2001@gmail.com', '8617260309', 'I want interior services', '2023-10-14 06:54:20', '2023-10-14 06:54:20'),
(9, NULL, 'Jual Da', 'yebiyi1448@haizail.com', '08617260309', 'Deck', '2023-10-14 06:55:58', '2023-10-14 06:55:58'),
(10, NULL, 'Sayan Ghosh', 'sayan@gmail.com', '08617260309', 'i want to know more about icmai', '2024-02-16 06:40:52', '2024-02-16 06:40:52'),
(11, NULL, 'Sayan Ghosh', 'sayan@gmail.com', '08617260309', 'i want to know more about icmai', '2024-02-16 06:41:36', '2024-02-16 06:41:36'),
(12, NULL, 'Sayan Ghosh', 'yebiyi1448@haizail.com', '08617260309', 'i want to know more', '2024-02-16 06:42:26', '2024-02-16 06:42:26'),
(13, NULL, NULL, NULL, NULL, NULL, '2024-04-19 07:28:11', '2024-04-19 07:28:11');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `show_at_home` varchar(255) NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `show_at_home`, `created_at`, `updated_at`) VALUES
(1, '1714592776-9708.jpeg', 'N', '2024-05-01 14:16:16', '2024-05-01 14:16:16'),
(2, '1714592780-5255.jpeg', 'N', '2024-05-01 14:16:20', '2024-05-01 14:16:20'),
(3, '1714592785-9865.jpeg', 'N', '2024-05-01 14:16:25', '2024-05-01 14:16:25'),
(4, '1714592789-1393.jpeg', 'N', '2024-05-01 14:16:29', '2024-05-01 14:16:29'),
(5, '1714592793-2630.jpeg', 'N', '2024-05-01 14:16:33', '2024-05-01 14:16:33'),
(6, '1714592795-4159.jpeg', 'N', '2024-05-01 14:16:35', '2024-05-01 14:16:35'),
(7, '1714592799-4740.jpeg', 'N', '2024-05-01 14:16:39', '2024-05-01 14:16:39'),
(8, '1714592803-5420.jpeg', 'N', '2024-05-01 14:16:43', '2024-05-01 14:16:43'),
(9, '1714592806-4313.jpeg', 'N', '2024-05-01 14:16:46', '2024-05-01 14:16:46'),
(10, '1714592808-2247.jpeg', 'N', '2024-05-01 14:16:48', '2024-05-01 14:16:48'),
(11, '1714592813-4277.jpeg', 'N', '2024-05-01 14:16:53', '2024-05-01 14:16:53'),
(12, '1714592817-4827.jpeg', 'N', '2024-05-01 14:16:57', '2024-05-01 14:16:57'),
(13, '1714592820-4092.jpeg', 'N', '2024-05-01 14:17:00', '2024-05-01 14:17:00'),
(14, '1714592827-2191.jpeg', 'N', '2024-05-01 14:17:07', '2024-05-01 14:17:07'),
(15, '1714592831-9097.jpeg', 'N', '2024-05-01 14:17:11', '2024-05-01 14:17:11'),
(16, '1714592835-9113.jpeg', 'N', '2024-05-01 14:17:15', '2024-05-01 14:17:15'),
(17, '1714592840-1645.jpeg', 'N', '2024-05-01 14:17:20', '2024-05-01 14:17:20'),
(18, '1714592846-3667.jpeg', 'N', '2024-05-01 14:17:26', '2024-05-01 14:17:26'),
(19, '1714592849-4492.jpeg', 'N', '2024-05-01 14:17:29', '2024-05-01 14:17:29'),
(20, '1714592852-4125.jpeg', 'N', '2024-05-01 14:17:32', '2024-05-01 14:17:32'),
(21, '1714592857-4927.jpeg', 'N', '2024-05-01 14:17:37', '2024-05-01 14:17:37'),
(22, '1714592860-8495.jpeg', 'N', '2024-05-01 14:17:40', '2024-05-01 14:17:40'),
(23, '1714592865-9234.jpeg', 'N', '2024-05-01 14:17:45', '2024-05-01 14:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `image`, `designation`, `year`, `created_at`, `updated_at`) VALUES
(1, 'CMA MANOJ CHALANI', '1710618430-8132.jpg', 'MANAGEMENT COMMITTEE MEMBER', NULL, '2024-02-10 03:18:15', '2024-03-16 14:17:10'),
(2, 'CMA PRODYOT KR. BHANDARY', '1710618464-3532.jpg', 'MANAGEMENT COMMITTEE MEMBER', NULL, '2024-03-16 14:17:44', '2024-03-16 14:17:44'),
(3, 'CMA PRABIR KR. DUTTA', '1710618580-2323.jpg', 'MANAGEMENT COMMITTEE MEMBER', NULL, '2024-03-16 14:19:40', '2024-03-16 14:19:40'),
(4, 'CMA SANTANU MUKHOPADHYAY', '1710618605-4596.jpg', 'MANAGEMENT COMMITTEE MEMBER', NULL, '2024-03-16 14:20:05', '2024-03-16 14:20:05'),
(5, 'CMA SANJAY GHOSH', '1710618642-3911.jpg', 'TREASURER', NULL, '2024-03-16 14:20:42', '2024-03-16 14:20:42'),
(6, 'CMA T.K SRIWASTAWA', '1710618664-7783.jpg', 'SECRETARY', NULL, '2024-03-16 14:21:04', '2024-03-16 14:21:04'),
(7, 'CMA SAMAR KANTI GHOSH', '1710618692-9026.jpg', 'VICE CHAIRMAN', NULL, '2024-03-16 14:21:32', '2024-03-16 14:21:32'),
(8, 'CMA BIBHAS SAHA', '1710618731-9926.jpg', 'CHAIRMAN', NULL, '2024-03-16 14:22:11', '2024-03-16 14:22:11');

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
(5, '2023_06_07_125116_create_admin_password_resets_table', 1),
(6, '2023_06_07_125116_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `plot` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `show_at_home` varchar(255) NOT NULL DEFAULT 'N',
  `image` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `title`, `description`, `plot`, `price`, `show_at_home`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '5 Days 6 Night Package', '<p style=\"text-align: justify;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">আমাদের আড্ডাহাট এর দুই টি&nbsp; নিজস্ব প্রপার্টি আছে । একটি \"দাওয়াইপানী\" আরেকটি \"শৌরিনি\" তে । আমাদের এই দুটি প্রপার্টি তে থেকে আপনি আর কোথায়&nbsp; কোথায় ঘুরতে যেতে পারবেন , তার ই বিস্তারিত অংশ নিম্নে দেওয়া আছে ।</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">&nbsp;</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">প্রথম দিন সকালে আপনি NJP থেকে&nbsp; শৌরিনি র আড্ডাহাট ফার্ম স্টে তে আসবেন এবং এখানেই দুদিন থাকবেন । আসবার পথে প্রথমে মঞ্জু পার্ক ও তারপর টিমলিং ভিউ পয়েন্ট ঘুরে আমাদের শৌরিনি ফার্ম স্টে তে এসে উঠবেন ।<strong>এক্ষেত্রে গাড়ী ভাড়া পড়বে 3500 হাজার টাকা&nbsp;</strong> । ( শৌরিনির আড্ডাহাট ফার্ম স্টে টি&nbsp; প্রায় 26 কাঠা জায়গা জুড়ে&nbsp; বিস্তৃত । এখানে 4 টি ডাবল বেড রুম আছে । জনপ্রতি থাকা এবং খাওয়া খরচ 1300 টাকা করে পরে । এছাড়াও টেন্ট এর ও ব্যবস্থা এখানে রয়েছে ) । এরপর ফ্রেশ হয়ে লাঞ্চে গরম গরম খাবার খেয়ে পায়ে হেঁটে গ্রাম টা ঘুরে দেখুন , পারলে শৌরিনি বাজার টাও ঘুরে নিন । সন্ধ্যার আগেই ফিরে আসুন ফার্ম স্টে তে । সন্ধ্যায় স্ন্যাক্স এর সাথে গরমা গরম চা আর সাথে চলুক আড্ডা । আড্ডা শেষে রাতের ডিনারে গরম চিকেন কষা ও তরকারি র সাথে আপনার পছন্দের বলে দেওয়া রুটি <span style=\"color: #e03e2d;\"><strong>বা ভাত । পরদিন সকালে বেড টি ও বিস্কিট এবং তারপর ব্রেকফাস্ট করে বেরিয়ে পড়ুন পূর্ব নেপালের ভূসর্গ বলে বিখ্যাত কন্ন্যম ও শ্রী অন্তু র উদ্দেশ্যে । ফেরার পথে নেপালের পশুপতি মার্কেট টাও মনমতো ঘুরে নিন । এক্ষেত্রে গাড়ী ভাড়া পড়বে 4500 টাকা ( নেপালের ইনার পারমিট সহ ) । সন্ধ্যায় ফার্ম স্টে তে ফিরে গরম গরম মোমো র সাথে চা । এই রাত ই আমাদের শেষ রাত শৌরিনি তে , স্বাভাবিক ভাবেই মন টা</strong> </span>একটু খারাপ ......কিন্তু কাল তো যাবো নতুন এক জায়গায় .....নাম তার দাওয়াইপানী । যেখানে ঘরে বসেই সোজা দেখা যায় কাঞ্চনজঙ্ঘা । তবে কাঞ্চনজঙ্ঘা ও দেখবো আর একটু ও কষ্ট করবো না !!&nbsp; তা বললে কী হয় । দাওয়াইপানী র আড্ডাহাট হোম স্টে তে পৌঁছতে গেলে রাস্তা থেকে বেশ কিছুটা সিঁড়ি ভেঙ্গে তবেই আমাদের হোম স্টে পৌঁছবেন । জানি .....জানি , সিঁড়ি ভাঙতেই তো আমাদের কষ্ট 😊 । কিন্তু ঐ সিঁড়ি ভেঙ্গে আপনি যখন আমাদের হোম স্টে র লন এ পৌঁছবেন , তখন&nbsp; মন্ত্রমুগ্ধের মতো উপভোগ করবেন প্রকৃতির অপার বিস্ময়গুলি&nbsp; । এই জন্যই আড্ডাহাট&nbsp; এর&nbsp; ক্যাপশন .....\" কিছুটা সিঁড়ি , বাকী টা স্বর্গ \" ।&nbsp; &nbsp;</span></span></p>', 'Dawaipani', '5000', 'Y', '1689275392-6857.jpeg', 'A', '2023-07-13 13:32:53', '2023-07-18 00:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `package_to_gallery`
--

CREATE TABLE `package_to_gallery` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_to_gallery`
--

INSERT INTO `package_to_gallery` (`id`, `package_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, '1689363281-4667.jpeg', '2023-07-14 14:04:41', '2023-07-14 14:04:41'),
(4, 1, '1689363290-5058.jpeg', '2023-07-14 14:04:50', '2023-07-14 14:04:50'),
(5, 1, '1689363310-2773.jpeg', '2023-07-14 14:05:10', '2023-07-14 14:05:10');

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
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `profession`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MALAY CHAKRABORTY', NULL, 'One of the best rehabilitation center in Madhyamgram (Kolkata also). Great treatment, great stuffs. More importantly they always fully supports you in every way possible even after the treatment ends.', '1713704350-7242.png', '2024-02-10 02:00:08', '2024-04-21 07:29:10'),
(2, 'Ankur Ghosh', NULL, 'Awesome treatment with so much wonderful activities…High level hospitality with Dearly hearted Staffs❤️', '1713704393-6305.png', '2024-02-10 03:17:29', '2024-04-21 07:29:53'),
(3, 'Sumit Mukherjee', NULL, 'Very efficient rehab for drug addicts...this was like my 2nd home...the way have got attached with them....', '1713704422-4914.png', '2024-04-21 07:30:22', '2024-04-21 07:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'A',
  `image` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `parent_mobile_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `status`, `image`, `class`, `blood_group`, `remember_token`, `parent_name`, `parent_mobile_no`, `address`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '8617260203', 'SA', NULL, '$2y$10$QeU3NzFHdq52TPBtN4QkteHZH3u28u0zJ7qK5AF4/Ht.mB9hsvK4a', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 00:13:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_to_gallery`
--
ALTER TABLE `package_to_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_to_gallery`
--
ALTER TABLE `package_to_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
