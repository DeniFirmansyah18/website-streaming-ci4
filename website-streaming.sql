-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 23 Jun 2024 pada 15.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website-streaming`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'akses admin'),
(2, 'user', 'akses user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 7),
(1, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 2, '2024-05-29 08:29:44', 0),
(2, '::1', 'admin@gmail.com', 2, '2024-05-29 10:12:03', 0),
(3, '::1', 'indhira@gmail.com', 6, '2024-05-29 12:25:13', 1),
(4, '::1', 'indhira@gmail.com', 6, '2024-05-31 08:06:26', 1),
(5, '::1', 'indhira@gmail.com', 6, '2024-05-31 08:30:16', 1),
(6, '::1', 'admin@gmail.com', 7, '2024-05-31 08:32:17', 1),
(7, '::1', 'indh', NULL, '2024-05-31 08:50:19', 0),
(8, '::1', 'indhira@gmail.com', NULL, '2024-05-31 10:21:24', 0),
(9, '::1', 'indhira@gmail.com', 6, '2024-05-31 10:21:37', 1),
(10, '::1', 'admin@gmail.com', 7, '2024-06-02 11:08:44', 1),
(11, '::1', 'admin@gmail.com', 7, '2024-06-02 13:03:34', 1),
(12, '::1', 'admin@gmail.com', 7, '2024-06-02 13:30:41', 1),
(13, '::1', 'admin@gmail.com', 7, '2024-06-03 14:30:53', 1),
(14, '::1', 'indhira@gmail.com', 6, '2024-06-03 14:31:35', 1),
(15, '::1', 'admin@gmail.com', 7, '2024-06-03 14:39:06', 1),
(16, '::1', 'indhira@gmail.com', 6, '2024-06-03 15:35:48', 1),
(17, '::1', 'indhira@gmail.com', 6, '2024-06-03 15:50:26', 1),
(18, '::1', 'indhira@gmail.com', 6, '2024-06-03 15:55:18', 1),
(19, '::1', 'indhira@gmail.com', 6, '2024-06-03 15:58:51', 1),
(20, '::1', 'admin@gmail.com', 7, '2024-06-03 15:59:23', 1),
(21, '::1', 'indhira@gmail.com', 6, '2024-06-03 16:02:53', 1),
(22, '::1', 'admin@gmail.com', 7, '2024-06-03 16:03:28', 1),
(23, '::1', 'admin@gmail.com', 7, '2024-06-07 02:26:54', 1),
(24, '::1', 'deni@gmail.com', NULL, '2024-06-07 03:29:47', 0),
(25, '::1', 'admin@gmail.com', 7, '2024-06-07 03:30:34', 1),
(26, '::1', 'deni@gmail.com', NULL, '2024-06-07 03:31:20', 0),
(27, '::1', 'admin@gmail.com', 7, '2024-06-07 03:31:47', 1),
(28, '::1', 'admin@gmail.com', 7, '2024-06-07 03:36:36', 1),
(29, '::1', 'admin@gmail.com', 7, '2024-06-07 03:43:45', 1),
(30, '::1', 'user@gmail.com', NULL, '2024-06-07 03:45:11', 0),
(31, '::1', 'bukanuser@gmail.com', 9, '2024-06-07 03:45:27', 1),
(32, '::1', 'admin@gmail.com', 7, '2024-06-07 06:17:41', 1),
(33, '::1', 'admin@gmail.com', 7, '2024-06-07 10:19:11', 1),
(34, '::1', 'admin@gmail.com', 7, '2024-06-09 02:23:04', 1),
(35, '::1', 'admin@gmail.com', 7, '2024-06-09 02:45:00', 1),
(36, '::1', 'admin@gmail.com', 7, '2024-06-09 03:29:47', 1),
(37, '::1', 'admin@gmail.com', 7, '2024-06-09 03:35:38', 1),
(38, '::1', 'admin@gmail.com', 7, '2024-06-09 12:40:45', 1),
(39, '::1', 'admin@gmail.com', 7, '2024-06-12 13:43:57', 1),
(40, '::1', 'admin@gmail.com', 7, '2024-06-13 11:48:12', 1),
(41, '::1', 'admin@gmail.com', 7, '2024-06-14 10:59:56', 1),
(42, '::1', 'admin@gmail.com', 7, '2024-06-16 12:31:37', 1),
(43, '::1', 'admin@gmail.com', 7, '2024-06-16 13:05:34', 1),
(44, '::1', 'user@gmail.com', NULL, '2024-06-16 14:33:01', 0),
(45, '::1', 'indhira@gmail.com', 6, '2024-06-16 14:33:14', 1),
(46, '::1', 'admin@gmail.com', 7, '2024-06-17 01:59:22', 1),
(47, '::1', 'admin@gmail.com', 7, '2024-06-17 10:56:41', 1),
(48, '::1', 'admin@gmail.com', 7, '2024-06-17 15:19:03', 1),
(49, '::1', 'admin@gmail.com', 7, '2024-06-23 04:10:42', 1),
(50, '::1', 'admin123@gmail.com', 10, '2024-06-23 07:15:10', 1),
(51, '::1', 'admin123@gmail.com', 10, '2024-06-23 12:31:03', 1),
(52, '::1', 'user123@gmail.com', NULL, '2024-06-23 13:05:53', 0),
(53, '::1', 'user@gmail.com', 11, '2024-06-23 13:06:17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage all users'),
(2, 'manage-profile', 'manage users profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `video_id` int(11) DEFAULT NULL,
  `episode_number` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `episodes`
--

INSERT INTO `episodes` (`id`, `video_id`, `episode_number`, `title`, `url`) VALUES
(4, 10, 1, 'Godzilla x Kong: The New Empire', 'https://hxfile.co/embed-lljejaevlmju.html'),
(5, 9, 1, 'Episode 1.1', 'https://hxfile.co/embed-m5x1r6grvmmy.html'),
(7, 9, 2, 'Episode 1.2', 'https://hxfile.co/embed-4i3dpbdl57ve.html'),
(8, 9, 3, 'Episode 1.3', 'https://hxfile.co/embed-dxz4rnmznk3u.html'),
(9, 9, 4, 'Episode 1.4', 'https://hxfile.co/embed-7zzr7yraqgch.html'),
(10, 9, 5, 'Episode 1.5', 'https://hxfile.co/embed-q43ecgfdqnfy.html'),
(11, 9, 6, 'Episode 1.6', 'https://hxfile.co/embed-f55x5evyathb.html'),
(12, 11, 1, 'Black Clover: Sword of the Wizard King', 'https://streamtape.com/e/1b49lW3DoGTekp0/'),
(13, 12, 1, 'Jujutsu Kaisen Zero', 'https://pixeldrain.com/u/gQEqK87B?embed'),
(14, 13, 1, 'Agak Laen', 'https://streamtape.com/e/OkGkroAXmYC6D6/'),
(17, 15, 1, 'Episode 2.1', 'https://streamtape.com/e/eA6ORKQQ7luYgQZ/'),
(25, 15, 2, 'Episode 2.2', 'https://mega.nz/embed/hi9U1CCJ#xABzs5nmv5squSLw9BKCxBZCfGbCXvsofoy5TBguZ0w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1716967181, 1),
(2, '2017-11-20-223112', 'App\\Database\\Migrations\\CreateAuthTables', 'default', 'App', 1717331681, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'admin@gmail.com', 'admin', '', '$2y$10$UsI0jL9mhjJfs7IZk7YkcOMK4ystPVZFo5xl.2W/vEYsLdVtrjdNG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-05-31 08:18:03', '2024-05-31 08:18:03', NULL),
(10, 'admin123@gmail.com', 'admin123', '', '$2y$10$WGLg2lIrs8/tloVEu512uuESk1FLp3X9g74AEelleVwD3zSO0KIZe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-23 07:09:54', '2024-06-23 07:09:54', NULL),
(11, 'user@gmail.com', 'user123', 'default.svg', '$2y$10$YF/8Mh0q6EXExSm/Fdk0tuFtteHIoaGtrQ/rj9.Yq9d99GDoR6Ga.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-23 13:05:36', '2024-06-23 13:05:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `backdrop` varchar(255) DEFAULT NULL,
  `video_type` enum('movie','series') NOT NULL,
  `year` int(11) NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `video_quality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `thumbnail`, `backdrop`, `video_type`, `year`, `genre`, `duration`, `video_quality`) VALUES
(9, 'Parasyte: The Grey', 'A group of humans wage war against the rising evil of unidentified parasitic life-forms that live off of human hosts and strive to grow their power', 'http://localhost:8080//images/1718284633_49ab1303cdc0690ab999.jpg', 'http://localhost:8080//images/1718284633_5f1b3678b3b5089389ed.jpg', 'series', 2024, 'Horror', 60, '1080p'),
(10, 'Godzilla x Kong: The New Empire', 'Two ancient titans, Godzilla and Kong, clash in an epic battle as humans unravel their intertwined origins and connection to Skull Island\'s mysteries.', 'http://localhost:8080//images/1718288385_6f00bdcc0fd06c63459c.jpg', 'http://localhost:8080//images/1718639668_1153d94a3559a11a8b31.jpg', 'movie', 2024, 'Action', 120, '1080p'),
(11, 'Black Clover: Sword of the Wizard King', 'In a world where magic is everything, Asta, a boy who was born with no magic, aims to become the \"Wizard King\" to overcome adversity, prove his power, and keep his oath with his friends.', 'http://localhost:8080//images/1718626108_66ce98673e81b15851a0.jpg', 'http://localhost:8080//images/1718640137_ef6082a4197dab637bb4.jpg', 'movie', 2023, 'Action', 120, '720p'),
(12, 'Jujutsu Kaisen Zero', 'The prequel to Jujutsu Kaisen (2020), where a high schooler gains control of an extremely powerful cursed spirit and gets enrolled in the Tokyo Prefectural Jujutsu High School by Jujutsu Sorcerers.', 'http://localhost:8080//images/1718626728_9e4b52f1e4335aaf5df6.jpg', 'http://localhost:8080//images/1718639718_a4db37b7f69308a6f96f.jpg', 'movie', 2021, 'Action', 105, '1080p'),
(13, 'Agak Laen', 'Empat petugas rumah hantu bernama Boris, Jegel, Bene, dan Oki. Dikisahkan bahwa keempatnya bertugas sebagai hantu yang menakut-nakuti pengunjung rumah hantu yang ada di sebuah pasar malam.', 'http://localhost:8080//images/1718640706_6f59b962663e9f677891.jpg', 'http://localhost:8080//images/1718640706_50233d6b15e57a119999.jpg', 'movie', 2024, 'Komedi', 119, '720p'),
(15, 'Alice in Borderland S2', 'Obsessed gamer Arisu suddenly finds himself in a strange, emptied-out version of Tokyo in which he and his friends must compete in dangerous games in order to survive.', 'http://localhost:8080//images/1719147264_d1d597be6a3df79aec8a.jpg', 'http://localhost:8080//images/1719147264_fb29569cfa675f042917.jpg', 'series', 2022, 'Action', 50, '720p');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
