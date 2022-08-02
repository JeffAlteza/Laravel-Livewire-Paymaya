-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 05:46 AM
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
-- Database: `livewire_crud`
--

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
(13, '2022_06_29_024502_add_details', 2),
(29, '2022_06_29_030412_add_details', 3),
(35, '2022_06_29_030906_payment_transaction', 5),
(41, '2014_10_12_000000_create_users_table', 6),
(42, '2014_10_12_100000_create_password_resets_table', 6),
(43, '2019_08_19_000000_create_failed_jobs_table', 6),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(45, '2022_04_04_123240_students', 6),
(46, '2022_06_30_021606_payment_transactions', 7);

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
-- Table structure for table `payment_transactions`
--

CREATE TABLE `payment_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_trans` date DEFAULT current_timestamp(),
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymaya_ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_transactions`
--

INSERT INTO `payment_transactions` (`id`, `fullname`, `email`, `mobile_no`, `amount`, `payment_for`, `date_of_trans`, `payment_method`, `paymaya_ref_no`, `transaction_id`, `status`, `created_at`, `updated_at`) VALUES
(31, 'Ms. Emelia Bednar', 'fullrich@gmail.com', 97846578, 1000, 'Tuition', '2022-07-01', 'Paymaya', '62be79679bac9', '62be79679baca', 'success', '2022-06-30 20:34:47', '2022-06-30 20:35:09'),
(32, 'Ms. Emelia Bednar', 'fullrich@gmail.com', 312, 200, 'Tuition', '2022-07-01', 'Paymaya', '62bedbc93ebaf', '62bedbc93ebb0', 'success', '2022-07-01 03:34:33', '2022-07-01 03:35:17'),
(33, 'Duane Purdy', 'ritchie.eulah@schneider.com', 27834657, 3000, 'Books', '2022-07-01', 'Paymaya', '62bedc3996cdc', '62bedc3996cdd', 'failed', '2022-07-01 03:36:25', '2022-07-01 03:36:38'),
(34, 'Duane Purdy', 'ritchie.eulah@schneider.com', 12312, 2000, 'Books', '2022-07-01', 'Paymaya', '62bedf3cd75fc', '62bedf3cd75fd', 'success', '2022-07-01 03:49:16', '2022-07-01 03:49:33'),
(35, 'Dr. Brady Kassulke Jr.', 'omurphy@emard.com', 123123, 3000, 'Miscellaneous ', '2022-07-02', 'Paymaya', '62bfc9b8d3586', '62bfc9b8d3587', 'success', '2022-07-01 20:29:44', '2022-07-01 20:30:22'),
(36, 'Colin Greenholt', 'yschaefer@gmail.com', 213, 3999, 'Uniform', '2022-07-02', 'Paymaya', '62bfca152080a', '62bfca152080b', 'failed', '2022-07-01 20:31:17', '2022-07-01 20:31:31'),
(37, 'Dr. Miguel Kreiger II', 'moore.marlene@paucek.com', 123, 9000, 'Tuition', '2022-07-02', 'Paymaya', '62bfca49e6da0', '62bfca49e6da1', 'success', '2022-07-01 20:32:09', '2022-07-01 20:32:23'),
(38, 'Colin Greenholt', 'yschaefer@gmail.com', 123, 2450, 'Uniform', '2022-07-02', 'Paymaya', '62bfca9bd98cf', '62bfca9bd98d0', 'success', '2022-07-01 20:33:31', '2022-07-01 20:33:45'),
(39, 'Winona Bayer', 'donnelly.armand@predovic.com', 2, 1000, 'Tuition', '2022-07-02', 'Paymaya', '62bfcadec1b32', '62bfcadec1b33', 'success', '2022-07-01 20:34:38', '2022-07-01 20:35:05'),
(40, 'Jordi Marks', 'violette.gutmann@macejkovic.info', 231, 1000, 'Library Fee', '2022-07-04', 'Paymaya', '62c23b7d87e64', '62c23b7d87e65', 'success', '2022-07-03 16:59:41', '2022-07-03 17:00:18'),
(41, 'Duane Purdy', 'ritchie.eulah@schneider.com', 123123, 3200, 'Computer Fee', '2022-07-04', 'Paymaya', '62c23bcc874c1', '62c23bcc874c2', 'success', '2022-07-03 17:01:00', '2022-07-03 17:01:22'),
(42, 'Ms. Emelia Bed', 'fullrich@gmail.com', 132, 2000, 'Books', '2022-07-05', 'Paymaya', '62c3ab875d538', '62c3ab875d539', 'success', '2022-07-04 19:09:59', '2022-07-04 19:10:39'),
(43, 'Ms. Emelia Bed', 'fullrich@gmail.com', 929230, 2000, 'Bills', '2022-07-21', 'Paymaya', '62d91ffdd0600', '62d91ffdd0601', 'failed', '2022-07-21 01:44:29', '2022-07-21 01:45:20');

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Emelia Bed', 'fullrich@gmail.com', NULL, '2022-07-04 18:48:42'),
(2, 'Dr. Miguel Kreiger II', 'moore.marlene@paucek.com', NULL, '2022-07-03 17:09:54'),
(3, 'Ms. Hallie Bashirian Sr.', 'collin.fisher@douglas.com', NULL, NULL),
(4, 'Duane Purdy', 'ritchie.eulah@schneider.com', NULL, NULL),
(5, 'Winona Bayer', 'donnelly.armand@predovic.com', NULL, NULL),
(6, 'Colin Greenholt', 'yschaefer@gmail.com', NULL, NULL),
(7, 'Miss Ava Simonis Sr.', 'rosalind07@bailey.net', NULL, NULL),
(8, 'Karley Sporer', 'veda.sawayn@yahoo.com', NULL, NULL),
(9, 'Ansley Bradtke', 'ydoyle@cartwright.com', NULL, NULL),
(10, 'Mrs. Vivian Larson MD', 'teresa.kiehn@yahoo.com', NULL, NULL),
(11, 'Member', 'lily.torp@larskin.com', '2022-06-28 20:33:55', '2022-06-30 20:35:33'),
(12, 'Ronaldo Mitchell', 'bartoletti.jules@beer.com', NULL, NULL),
(13, 'Audrey Rutherford', 'wfranecki@yahoo.com', NULL, NULL),
(14, 'Bryce Wintheiser', 'tracy.kerluke@bogan.info', NULL, NULL),
(15, 'Lisa Gottlieb', 'wzieme@flatley.net', NULL, NULL),
(16, 'Jenifer Mohr', 'lynn.predovic@nolan.biz', NULL, NULL),
(17, 'Dr. Bianka Nikolaus', 'xdonnelly@kutch.biz', NULL, NULL),
(18, 'Prof. Amanda Walker DDS', 'eloisa34@yahoo.com', NULL, NULL),
(19, 'Josiah Conn', 'romaguera.ahmad@gmail.com', NULL, NULL),
(20, 'Isaias Lowe MD', 'aklocko@hotmail.com', NULL, NULL),
(21, 'Stacey Marvin', 'layla.keeling@pouros.com', NULL, NULL),
(22, 'Noemy Blanda', 'thiel.bulah@yahoo.com', NULL, NULL),
(23, 'Miss Amber Dickinson', 'clabadie@hotmail.com', NULL, NULL),
(24, 'Mitchell Jacobi', 'rabbott@haag.net', NULL, NULL),
(25, 'Naomie Robel', 'oconnell.zaria@yahoo.com', NULL, NULL),
(26, 'Gordon Murray', 'rau.jeramie@yahoo.com', NULL, NULL),
(27, 'Dannie Torphy', 'ondricka.sidney@roob.com', NULL, NULL),
(28, 'Gladys Flatley', 'dustin50@becker.com', NULL, NULL),
(29, 'Dr. Marc Wolf', 'holden.gaylord@roob.info', NULL, NULL),
(30, 'Prof. Itzel Fisher', 'ocie86@tillman.biz', NULL, NULL),
(31, 'Mr. Ricky Kutch III', 'shanny.auer@hotmail.com', NULL, NULL),
(32, 'Mr. Stan Wisozk', 'ijast@hotmail.com', NULL, NULL),
(33, 'Jonatan Kirlin', 'kschmeler@gmail.com', NULL, NULL),
(34, 'Miss Vivianne Metz', 'gilberto.kemmer@fay.com', NULL, NULL),
(35, 'Ramiro Casper', 'thora.johnson@hotmail.com', NULL, NULL),
(36, 'Yasmine Abbott', 'neil.beier@rempel.com', NULL, NULL),
(37, 'Prof. Lottie Kuhic DVM', 'demarcus41@metz.net', NULL, NULL),
(38, 'Dr. Forrest Stracke V', 'vhamill@yahoo.com', NULL, NULL),
(39, 'Prof. Mariela Keebler', 'schulist.keenan@gmail.com', NULL, NULL),
(40, 'Brian Jones', 'hal.moore@gmail.com', NULL, NULL),
(41, 'Aniyah Ward', 'hilton.legros@gmail.com', NULL, NULL),
(42, 'Dr. Brady Kassulke Jr.', 'omurphy@emard.com', NULL, NULL),
(43, 'Ruthe Pollich', 'kunde.dorian@gulgowski.com', NULL, NULL),
(44, 'Micah Schimmel', 'gabriel39@schroeder.com', NULL, NULL),
(45, 'Magdalena Turcotte', 'ebert.eloy@waelchi.com', NULL, NULL),
(46, 'Kassandra Feil', 'ericka94@bogisich.biz', NULL, NULL),
(47, 'Caroline Stoltenberg', 'jaltenwerth@gmail.com', NULL, NULL),
(48, 'Dr. Haskell Berge DDS', 'marcelina92@wilderman.com', NULL, NULL),
(49, 'Miss Myah Collier', 'nikita71@williamson.com', NULL, NULL),
(50, 'Caleb Becker', 'ryley75@gmail.com', NULL, NULL),
(51, 'Mr. Zachary Cronin', 'kub.elmo@stark.com', NULL, NULL),
(52, 'Donnie Yundt', 'ericka45@beahan.net', NULL, NULL),
(53, 'Demetrius Kemmer', 'bradtke.hermann@gmail.com', NULL, NULL),
(54, 'Dejuan Wunsch I', 'cboyle@yahoo.com', NULL, NULL),
(55, 'Karina Wilkinson', 'isidro30@yahoo.com', NULL, NULL),
(56, 'Prof. Carolyne Lakin', 'kailyn.eichmann@gmail.com', NULL, NULL),
(57, 'Jordi Marks', 'violette.gutmann@macejkovic.info', NULL, NULL),
(58, 'Rosalee Leuschke', 'grohan@hotmail.com', NULL, NULL),
(59, 'Alena Heidenreich IV', 'ureynolds@yahoo.com', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jeffrey alteza', 'admin@gmail.com', NULL, '$2y$10$SLOWJGIIZCNO9FVsonw.kuf5UfeHduqQSltHb65vEaaOxqNY0gRoC', NULL, '2022-06-28 20:31:42', '2022-06-28 20:31:42'),
(2, 'Jeffrey Alteza', 'jeffreyalteza03@gmail.com', NULL, '$2y$10$57VL7Tk.Qai.KQrsLUPSoOGYw0yIfjtBlcQLE63.Xzqa16Osbc7vi', NULL, '2022-07-21 01:42:02', '2022-07-21 01:42:02');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
