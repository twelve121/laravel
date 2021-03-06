-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 02:37 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdtn_final`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `question_text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `topic_id`, `question_text`, `created_at`, `updated_at`) VALUES
(5, 1, 'Trong MS Word, ph??m n??o ????? xo?? k?? t??? ????ng tr?????c con tr????', '2021-12-20 17:03:11', '2021-12-20 17:03:11'),
(6, 1, 'Trong MS Word, mu???n ch???n nhi???u h??nh v??? ?????ng th???i ta th???c hi???n nh???ng c??ch n??o sau ????y?', '2021-12-20 17:03:11', '2021-12-20 17:03:11'),
(7, 1, 'Trong MS Word, c??ng d???ng c???a t??? h???p ph??m Ctrl + C l?? g???', '2021-12-21 11:00:14', '2021-12-21 11:00:14'),
(8, 1, 'Trong Word, mu???n l??u h??? s?? v???i m???t t??n kh??c, ta th???c hi???n?', '2021-12-21 11:00:14', '2021-12-21 11:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `correct` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `option`, `correct`, `created_at`, `updated_at`) VALUES
(1, 5, 'Page Down', 0, '2021-12-20 17:06:26', '2021-12-20 17:06:26'),
(2, 5, 'Delete', 0, '2021-12-20 17:06:26', '2021-12-20 17:06:26'),
(3, 5, 'Page Up', 0, '2021-12-20 17:07:20', '2021-12-20 17:07:20'),
(4, 5, '\r\nBackspace', 1, '2021-12-20 17:07:40', '2021-12-20 17:07:40'),
(5, 6, 'Nh???n chu???t tr??i ??? v??ng tr???ng v?? r?? ngang qua c??c ?????i t?????ng c???n ch???n', 1, '2021-12-20 17:08:02', '2021-12-20 17:08:02'),
(6, 6, 'Nh???n gi??? ph??m Ctrl v?? Nh???n chu???t tr??i l??n c??c ?????i t?????ng mu???n ch???n', 1, '2021-12-20 17:08:33', '2021-12-20 17:08:33'),
(7, 6, 'Nh???n gi??? ph??m Alt v?? Nh???n chu???t tr??i l??n c??c ?????i t?????ng mu???n ch???n', 0, '2021-12-20 17:08:54', '2021-12-20 17:08:54'),
(8, 6, 'V??o menu Edit, ch???n Select All AutoShape', 0, '2021-12-20 17:09:10', '2021-12-20 17:09:10'),
(9, 7, 'Sao ch??p c??c n???i dung ??ang l???a ch???n v??o trong b??? nh??? ?????m', 1, '2021-12-21 11:01:12', '2021-12-21 11:01:12'),
(10, 7, 'Ph???c h???i l???i c??c thao t??c ???? l??m tr?????c ????', 0, '2021-12-21 11:01:12', '2021-12-21 11:01:12'),
(11, 7, 'D??n t???t c??? c??c n???i dung ???? ???????c sao ch??p tr?????c ???? v??o v??? tr?? con tr???', 0, '2021-12-21 11:02:01', '2021-12-21 11:02:01'),
(12, 7, 'Th???c hi???n canh l??? gi???a ??o???n v??n b???n ????.', 0, '2021-12-21 11:02:19', '2021-12-21 11:02:19'),
(13, 8, 'File ??? Save', 0, '2021-12-21 11:02:37', '2021-12-21 11:02:37'),
(14, 8, 'File ??? Save As', 1, '2021-12-21 11:03:10', '2021-12-21 11:03:10'),
(15, 8, 'Window ??? Save', 0, '2021-12-21 11:03:29', '2021-12-21 11:03:29'),
(16, 8, 'Window ??? Save As', 0, '2021-12-21 11:03:44', '2021-12-21 11:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `title`, `thumbnail`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'COMP 125 - Ki???n th???c c?? b???n v??? WORD', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAD5GzLci-goNT5-mahGt7LzKW2nFVxXjSfQ&usqp=CAU', 'Microsoft Word l?? ch????ng tr??nh so???n th???o, x??? l?? v??n b???n ph??? bi???n v???i t???t c??? m???i ng?????i d??ng m??y t??nh tr??n to??n th??? gi???i, ???????c ph??t tri???n b???i Microsoft v?? thu???c b??? ???ng d???ng Microsoft Office. Th??ng qua c??c c??ng c??? ?????nh d???ng Microsoft Word gi??p b???n t???o ra c??c t??i li???u c?? ch???t l?????ng chuy??n nghi???p m???t c??ch hi???u qu???. B??n c???nh ????, Word c??n bao g???m c??c c??ng c??? ch???nh s???a v?? s???a ?????i gi??p b???n c?? th??? c???ng t??c v???i m???i ng?????i m???t c??ch d??? d??ng.', 3, '2021-12-20 14:51:24', '2021-12-20 14:51:24'),
(2, 'COMP 512- Ki???n th???c c?? b???n v??? JAVASCRIPT', 'https://cafedev.vn/wp-content/uploads/2019/12/cafedev_javascript.png', 'JavaScript l?? ng??n ng??? l???p tr??nh ph??? bi???n nh???t tr??n th??? gi???i trong su???t 20 n??m qua. JavaScript c?? th??? h???c nhanh v?? d??? d??ng ??p d???ng cho nhi???u m???c ????ch kh??c nhau, t??? vi???c c???i thi???n t??nh n??ng c???a website ?????n vi???c ch???y game v?? t???o ph???n m???m n???n web. H??n n???a, c?? h??ng ng??n m???u template JavaScript v?? ???ng d???ng ngo??i kia, nh??? v??o s??? c???ng hi???n c???a c???ng ?????ng, ?????c bi???t l?? Github.', 3, '2021-12-20 14:53:11', '2021-12-20 14:53:11'),
(3, 'COMP 512- Ki???n th???c c?? b???n v??? K??? thu???t m??y t??nh v?? M???ng m??y t??nh', 'https://www.semtek.com.vn/wp-content/uploads/2021/04/mang-may-tinh.jpg', 'M???ng m??y t??nh l?? m???t h??? th???ng g???m nhi???u m??y t??nh v?? c??c thi???t b??? ???????c k???t n???i v???i nhau b???i ???????ng truy???n v???t l?? theo m???t ki???n tr??c (Network Architecture) n??o ???? nh???m thu th???p, trao ?????i d??? li???u v?? chia s??? t??i nguy??n cho nhi???u ng?????i s??? d???ng. C??c m??y t??nh ???????c k???t n???i v???i nhau c?? th??? trong c??ng m???t ph??ng, m???t t??a nh??, m???t th??nh ph??? ho???c tr??n ph???m vi to??n c???u.', 3, '2021-12-20 14:53:42', '2021-12-20 14:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguy???n Vi???t Ti???n', 'tienvietnguyen125@gmail.com', '0', NULL, '$2y$10$QN5zwUSFW3I4f.HECLeTHexRw2FD2qd8X1r8UoeGqi6sbHqaxH3rS', NULL, '2021-12-20 04:31:19', '2021-12-20 04:31:19'),
(2, 'Nguy???n Vi???t Ti???nn', 'tienvietnguyen1252@gmail.com', '1', NULL, '$2y$10$eUuhbrdk5sK1jeDbDWU0T.S6/QVh/nMiLEYgpb/zKbMMINGHxzW6e', NULL, '2021-12-20 04:52:19', '2021-12-20 04:52:19'),
(3, 'Ti???n Vi???t Nguy???n', 'tientien@gmail.com', '0', NULL, '$2y$10$Mn3w.qBV.g3zOXuKmrQSuORzy3vuv7LLBBZtEfxkRT6ftedWdKND.', NULL, '2021-12-20 05:50:43', '2021-12-20 05:50:43'),
(4, 'Tr???nh Ho??ng Vi???t', 'hoangviet@gmail.com', '0', NULL, '$2y$10$P01n2mgkY6YOo/3jTzvpUOAiaIls4cxFki30auNsGQcW7t2zq2SNm', NULL, '2021-12-20 09:17:53', '2021-12-20 09:17:53'),
(5, 'T??ng S??i', 'tung@gmail.com', '0', NULL, '$2y$10$ZOZYakZG882kjlxkNBTIiOO/oEN65..GYCAo1riAVO9VMs677jV..', NULL, '2021-12-20 09:35:00', '2021-12-20 09:35:00'),
(6, 'name', 'name@gmail.com', '0', NULL, '$2y$10$q3NMx2xbz91tU4eSuZgYM.pHif63IiP0vDOJfyKlW4jMi4Xo7ZOT2', NULL, '2021-12-20 09:35:27', '2021-12-20 09:35:27'),
(7, 'username', 'username@gmail.com', '0', NULL, '$2y$10$8DUhDHih1PQD5vi9yvdekuRI/3sPimw3jvgcrEdD9MCgVRWd0IaZ6', NULL, '2021-12-20 09:36:39', '2021-12-20 09:36:39');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
