-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2018 pada 06.29
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hover_rrq`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `name`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'mastah@mastah.co.id', '$2y$10$AI/ggcxbR4lpWuSN3aXxDeKEec27g9Xz0WB21fFVLs.DG9O8GTtyO', 'Admin Mystreetsolution #1', '', NULL, '2018-04-13 17:05:06', '2018-04-13 17:05:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Jalan Rusak'),
(2, 'Jalan Berlubang'),
(3, 'Marka Jalan'),
(4, 'Rambu Lalu Lintas'),
(5, 'Lampu Lalu Lintas'),
(6, 'Pembatas Jalan'),
(7, 'Trotoar'),
(8, 'Kendaraan Terbengkalai'),
(9, 'Lampu Penerangan Jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `report_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `report_id`, `admin_id`, `content`, `created_at`, `updated_at`) VALUES
(16, 14, 22, NULL, 'Hehe', '2018-04-23 02:13:21', '2018-04-23 02:13:21'),
(17, NULL, 22, 3, 'tes', '2018-05-07 20:56:14', '2018-05-07 20:56:14'),
(18, NULL, 24, 3, 'Thanks gan, udah diloloskan ke final', '2018-05-07 20:57:02', '2018-05-07 20:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `admin_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 19, 3, 'Laporan Anda Ditolak #id=24', 'maaf bosque aku gak ikut', '2018-05-07 17:19:52', '2018-05-07 17:19:52'),
(2, 11, 3, 'Laporan Anda Telah Ditindak Lanjuti #id=19', 'Silahkan tunggu, dalam beberapa hari, Laporan anda akan dituntaskan, Terimakasih', '2018-05-07 19:03:10', '2018-05-07 19:03:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_06_224722_create_admins_table', 1),
(4, '2018_04_13_064418_create_categories_table', 1),
(5, '2018_04_13_071233_create_reports_table', 1),
(6, '2018_04_13_135133_create_send_tos_table', 1),
(7, '2018_04_13_144504_create_comments_table', 1),
(8, '2018_04_13_144653_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nganjuksmaga@gmail.com', '$2y$10$9PtgueIQA3kKDSrr8uMB3eLOUk.H2t6EcMH35kxY16UbEXJnkPRl2', '2018-04-21 19:11:56'),
('romadlon711@gmail.com', '$2y$10$gyyMWqLnvHs02PAxLSdM3uN6erR0z0N2De63.FzICxgbHPGejpNVa', '2018-04-21 20:14:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longlat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `categories_id`, `admin_id`, `title`, `content`, `location`, `longlat`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(18, 11, 1, NULL, 'Jalan kok 8 bit', 'Jalannya kasar, ada bintik-bintik geronjal kasar kayak grafik 8 bit. Eh coba tolaken laporan iki, pengen ero notife', 'Jalan Sikatan 1  Nomor 1', '-7.2388105,112.736674', '1524373229.jpg', 'tuntas', '2018-04-21 22:00:29', '2018-04-21 22:00:29'),
(19, 11, 1, NULL, 'Jalannya kok rata gan, kayak dia', 'Hanya tes pengen lihat chartnya kalau laporannya ada 2', 'Bandar Udara International Juanda Surabaya, Jalan Raya Ir. H.Juanda, Ketabang, Genteng, Kota SBY, Jawa Timur 61253, Indonesia', '-7.2574719,112.7520883', '1524373862.png', 'lanjut', '2018-04-21 22:11:02', '2018-05-07 19:03:10'),
(22, 14, 1, NULL, 'Jalan kok 2 Dimensi', 'Jalan kok 2 dimensi, tidak terlihat nyata', 'Gara Media, Karah, Jambangan, Kota SBY, Jawa Timur, Indonesia', '-7.3100447,112.7183945', '1524474726.jpg', 'belum', '2018-04-23 02:12:06', '2018-05-07 03:30:48'),
(23, 17, 1, NULL, 'Laporan', 'Berlubang', 'Ima An, Dukun, Gresik Regency, East Java, Indonesia', '-6.9712136,112.4765968', '1524831176.png', 'belum', '2018-04-27 05:12:56', '2018-04-27 05:12:56'),
(24, 19, 1, NULL, 'Test aja dulu dah', 'hahahahaa', 'Denpasar, Denpasar City, Bali, Indonesia', '-8.6389559,115.25490760000001', '1525239068.jpg', 'tolak', '2018-05-01 22:31:08', '2018-05-07 17:19:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `birth`, `phone`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'romadlon711@gmail.com', '$2y$10$iyqtN.5f0QAdXgMhIomCA.nX7siirKdy082Lx39eY/osAmoLhhi8G', 'Romadlon Rahmatulloh', '1998-01-22', '081217484227', '1524015868.jpg', 'kw0EsseZ8O62YIkmHX2i2q5l28GoEJksFvTndcPssw5HmrCGy3FPkOq3Jxy5', '2018-04-13 10:36:01', '2018-04-21 18:33:53'),
(10, 'ganteng@ganteng.com', '$2y$10$/r6Fj3LG1Dsr/RTlu6nDM.TBZMyl4Maqg9jyT5mCPE2QzDabOZMmK', 'Ganteng', '2018-04-29', '081234567812', '', NULL, '2018-04-21 08:40:27', '2018-04-21 08:40:27'),
(11, 'muhamadramadhan57@gmail.com', '$2y$10$9CpiKAsUP29dHKYenQb6nOHMTGigUqSHx2y12KPPkHjWF9AuSLuuq', 'Muhamad Ramadhan', '1998-02-04', '083831811803', '1524335464.jpg', '7WjIyrGNq2ArUjr7nnxi8jvyjftBpjQcH7fiswcYSAUDEKtftwxJet6KNl8h', '2018-04-21 11:29:20', '2018-04-21 11:31:04'),
(14, 'wayne22hill@gmail.com', '$2y$10$Xl0LSuURKdka2DkXxu/6peaW37Y8B2HYof/i0gUhft0uQUVU67nt2', 'Haqi', '2018-04-29', '081555612556', '', 'L3735JjqmAG4DRyfbJzlC9uqZEnhi3bxk7OvBpcQcnpCefvHvoMevyl8pusD', '2018-04-23 02:10:27', '2018-04-23 02:10:27'),
(15, 'nuzhulkyu@gmail.com', '$2y$10$h9dlon.AW03OB44AA4bCYuknw8Z7GUxNfyzROYm4qfNZAMdMLF6Lq', 'nuu', '1998-01-16', '089678777452', '', 'aeAeBYjKUmQrwbc1aTbWbFLyo05MycltwEjgCoTWNLDjj2FL1J16De3vBv7s', '2018-04-23 21:48:07', '2018-04-23 21:53:11'),
(16, 'nganjuksmaga@gmail.com', '$2y$10$2lSPiA.T4I76WFz9c2FD.OYs1PvmJ.FhRYO.mtrAU/KC7zRzzSJ.q', 'Nurul Fitriana', '2018-04-10', '081217484227', '', NULL, '2018-04-24 05:39:05', '2018-04-24 05:39:05'),
(17, 'ringgi.atranta@gmail.com', '$2y$10$3RoIVf2/9pWPfPaEouqkK.GcPnldmeVoSH5kFlzX.JscNezUJSJQW', 'Ringgi', '1997-11-06', '085708994454', '', NULL, '2018-04-27 04:57:01', '2018-04-27 04:57:01'),
(18, 'tes@gmail.com', '$2y$10$3eN.H8qi8QdPKF/FwVL3VukOrA9m.m86A.JhXITyVwkwJlahHEGzu', 'tes', '2018-04-14', '344234234', '', NULL, '2018-04-27 18:39:46', '2018-04-27 18:39:46'),
(19, 'guspurwania@gmail.com', '$2y$10$rMdWSdzThBakh6IaiOCjW.CKzov2H7u450dEfpHrdCnzXdtA4mAN6', 'Gus Purwania', '2018-05-02', '085738009350', '', NULL, '2018-05-01 22:29:40', '2018-05-01 22:29:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_users_id_foreign` (`user_id`),
  ADD KEY `comments_reports_id_foreign` (`report_id`),
  ADD KEY `comments_admins_id_foreign` (`admin_id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_users_id_foreign` (`user_id`),
  ADD KEY `messages_admins_id_foreign` (`admin_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_users_id_foreign` (`user_id`),
  ADD KEY `reports_categories_id_foreign` (`categories_id`),
  ADD KEY `reports_admins_id_foreign` (`admin_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_admins_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_reports_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_admins_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_admins_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_users_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
