-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2025 at 10:06 PM
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
-- Database: `absensi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `kode_dep` char(10) NOT NULL,
  `nama_dep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`kode_dep`, `nama_dep`) VALUES
('FIN02', 'Finance Department'),
('HRD01', 'Human Resource Department'),
('IT03', 'Information Technology'),
('MKT04', 'Marketing Department'),
('PRD05', 'Production Department');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` char(16) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kel` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kode_dep` char(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_lengkap`, `jenis_kel`, `jabatan`, `kode_dep`, `no_hp`, `foto`, `password`, `remember_token`) VALUES
('2231740009', 'Muhammad anjay', 'pria', 'mahasiswa', 'IT03', '08573625991', '2231740009.png', '$2y$12$29Vdazc6JlIpm4yy22kyFeirjKJspELuXXG63.wo8yk7/6RDnEWyi', NULL),
('2231740010', 'Muhammad Irham andi', 'pria', 'mahasiswa', 'IT03', '0857362599654', '', '$2y$12$29Vdazc6JlIpm4yy22kyFeirjKJspELuXXG63.wo8yk7/6RDnEWyi', NULL),
('2231740011', 'Johan audi', NULL, 'mahasiswa', 'HRD01', '085736259962', NULL, '$2y$12$mlaFnmeMwnCT3GBBSGnoVu2.xmlDrQiPgagYI/UapIyKatXkJ9ij2', NULL),
('223174008', 'Zerinthya Noura Yui', 'Wanita', 'produksi', 'PRD05', '085736259961', '223174008.jpg', '$2y$12$NiFygnNZn2gJCTtwTw32RO7w268Ml7mc8/CSzjZWVFC1fRG/dKJsy', NULL),
('22318743', 'Lailatul Magfiroh slebew', NULL, 'finance', 'FIN02', '3845903843', NULL, '$2y$12$squfDChf0MwHFk4S5vjCZOQ0eoBTzBBsvx0pedJbdANNg3rM9A75m', NULL),
('32', 'anja', NULL, 'et', 'FIN02', '45', '32.jpg', '$2y$12$tNzIHqexY8px4Yx5viAD9e9s63yRbYj8kFvJYoDY88.jamfQcZGJC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_lokasi`
--

CREATE TABLE `konfigurasi_lokasi` (
  `id` int(11) NOT NULL,
  `lokasi_kantor` varchar(255) NOT NULL,
  `radius` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi_lokasi`
--

INSERT INTO `konfigurasi_lokasi` (`id`, `lokasi_kantor`, `radius`) VALUES
(1, '-8.139809062638784,113.24211004942194', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_izin`
--

CREATE TABLE `pengajuan_izin` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `tgl_izin` date NOT NULL,
  `status` char(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status_approved` char(1) DEFAULT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan_izin`
--

INSERT INTO `pengajuan_izin` (`id`, `nik`, `tgl_izin`, `status`, `keterangan`, `status_approved`, `alasan`) VALUES
(1, '2231740009', '2025-05-26', 'i', 'saya mau mendaki gunung', '1', ''),
(2, '2231740009', '2025-05-30', 'i', 'saya mau mendaki gunung ', '1', ''),
(3, '2231740009', '2025-05-26', 's', 'demam', '1', ''),
(4, '2231740009', '2025-05-31', 'i', 'rencana mau sakit', '2', ''),
(5, '2231740009', '2025-05-23', 'i', 'mau belanja bulanan', '1', ''),
(6, '2231740010', '2025-06-26', 'i', 'makanbag', '1', '-'),
(7, '2231740010', '2025-06-25', 'i', 'anak anj', '2', 'kamu ditolak'),
(8, '2231740009', '2025-06-25', 'i', 'anjay', '1', ''),
(9, '2231740010', '2025-07-25', 's', 'sakit demam', '2', 'kamu tidak boleh tidak bekerja harus lembur bagai kuda'),
(10, '2231740009', '2025-07-18', 'i', 'anjay', '1', ''),
(11, '2231740009', '2025-07-25', 's', 'aku tidak bisa masuk', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `jam_in` time NOT NULL,
  `jam_out` time DEFAULT NULL,
  `foto_in` varchar(255) NOT NULL,
  `vidio_in` varchar(255) NOT NULL,
  `foto_out` varchar(255) DEFAULT NULL,
  `vidio_out` varchar(255) DEFAULT NULL,
  `lokasi_in` text NOT NULL,
  `lokasi_out` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `nik`, `tgl_presensi`, `jam_in`, `jam_out`, `foto_in`, `vidio_in`, `foto_out`, `vidio_out`, `lokasi_in`, `lokasi_out`) VALUES
(1, '2231740009', '2025-05-20', '02:39:06', '02:40:59', '2231740009-2025-05-20-in.png', '2231740009-2025-05-20-in.webm', '2231740009-2025-05-20-out.png', '2231740009-2025-05-20-out.webm', '-7.5232428,112.2562733', '-7.5232428,112.2562733'),
(2, '2231740010', '2025-05-20', '04:02:33', '10:57:50', '2231740010-2025-05-20-in.png', '2231740010-2025-05-20-in.webm', '2231740010-2025-05-20-out.png', '2231740010-2025-05-20-out.webm', '-7.5232428,112.2562733', '-7.524498723579275,112.25887424620193'),
(3, '2231740009', '2025-05-21', '09:26:37', NULL, '2231740009-2025-05-21-in.png', '2231740009-2025-05-21-in.webm', NULL, NULL, '-7.5244702,112.2588736', NULL),
(4, '2231740010', '2025-05-21', '10:34:10', '10:34:35', '2231740010-2025-05-21-in.png', '2231740010-2025-05-21-in.webm', '2231740010-2025-05-21-out.png', '2231740010-2025-05-21-out.webm', '-7.524559321509621,112.25884736314065', '-7.524559321509621,112.25884736314065'),
(5, '2231740009', '2025-05-22', '09:59:04', '11:30:37', '2231740009-2025-05-22-in.png', '2231740009-2025-05-22-in.webm', '2231740009-2025-05-22-out.png', '2231740009-2025-05-22-out.webm', '-7.5243792,112.2589314', '-7.5254603,112.2518026'),
(6, '2231740010', '2025-05-22', '09:59:37', NULL, '2231740010-2025-05-22-in.png', '2231740010-2025-05-22-in.webm', NULL, NULL, '-7.52451319987774,112.2588664568645', NULL),
(7, '2231740009', '2025-05-26', '10:20:22', '11:31:15', '2231740009-2025-05-26-in.png', '2231740009-2025-05-26-in.webm', '2231740009-2025-05-26-out.png', '2231740009-2025-05-26-out.webm', '-7.5218171,112.2518026', '-7.523401,112.2503123'),
(9, '2231740009', '2025-05-27', '15:36:12', '15:37:37', '2231740009-2025-05-27-in.png', '2231740009-2025-05-27-in.webm', '2231740009-2025-05-27-out.png', '2231740009-2025-05-27-out.webm', '-8.1400396,113.2426161', '-8.1474086,113.2349671'),
(10, '2231740010', '2025-05-27', '05:39:07', NULL, '2231740010-2025-05-27-in.png', '2231740010-2025-05-27-in.webm', NULL, NULL, '-8.139981937522412,113.24314811429792', NULL),
(11, '2231740009', '2025-06-23', '09:05:48', NULL, '2231740009-2025-06-23-in.png', '2231740009-2025-06-23-in.webm', NULL, NULL, '-7.524114,112.2555282', NULL),
(12, '2231740009', '2025-06-24', '07:47:40', '13:36:40', '2231740009-2025-06-24-in.png', '2231740009-2025-06-24-in.webm', '2231740009-2025-06-24-out.png', '2231740009-2025-06-24-out.webm', '-7.524114,112.2555282', '-7.5241139,112.2547831'),
(13, '2231740010', '2025-06-24', '13:56:31', '13:56:47', '2231740010-2025-06-24-in.png', '2231740010-2025-06-24-in.webm', '2231740010-2025-06-24-out.png', '2231740010-2025-06-24-out.webm', '-7.5241139,112.2547831', '-7.5241139,112.2547831'),
(14, '2231740009', '2025-06-26', '22:37:12', '22:45:51', '2231740009-2025-06-26-in.png', '2231740009-2025-06-26-in.webm', '2231740009-2025-06-26-out.png', '2231740009-2025-06-26-out.webm', '-7.5250644,112.2547831', '-7.5244264,112.2589014'),
(15, '2231740009', '2025-07-02', '10:58:38', NULL, '2231740009-2025-07-02-in.png', '2231740009-2025-07-02-in.webm', NULL, NULL, '-8.1400703,113.2425602', NULL),
(16, '2231740010', '2025-07-02', '10:59:36', NULL, '2231740010-2025-07-02-in.png', '2231740010-2025-07-02-in.webm', NULL, NULL, '-8.1400585,113.2425685', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2WYL6nGzf4rhdA7ViIWQGqsUqC9bU5x2znXADVgk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVdweHZkd0FJeEZnZnNwUFNzMjhablcxOElQN3hTY1pVNkNMbmVDZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752020373),
('6lLeU8Wp0KJFgNoH7bClZP5TTRXHKBkY4nmjnmDz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUdjeVdMcTJxMUlrVEJmSzhnVWNzS1RGWFp1eTZQOWgzWW42MDY5SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYW5lbCI7fX0=', 1752024123),
('BOmW5pJi9EIT2UIs3gXVS1Ns7VHkz5buCsbUOlJu', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/17.5 Mobile/15A5370a Safari/602.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2NBWHdqbGFpQlRDbnU4STNVR2hNdUVkZU82WWJxQmp5MDN3eTI3bSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1752020346),
('BssxexJyjly3jPMAPLEvkPnO9EvKDZg3gRStcqu5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDZzT2l3dUI0bHpMWWNHSDAxelJzd3UxaGliUjA1TlpvU1FvUWdiaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752502824),
('DkJ2DI8cD7P9C8R2XvNHr5yGbHdtGnySq6QFZj6g', 2231740009, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiejFiNDFOUnNubkhpVW5HdGlEc1llcEJkbEJDTGJmcmlKaEJyZ0owUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lZGl0cHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTU6ImxvZ2luX2thcnlhd2FuXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjIzMTc0MDAwOTt9', 1752074540),
('kyeFPzTFnah6NfYCPZHASK0zlY7KtUXhGHmfmhBT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRm1rZ0FYaEJzZ3VGS29EU2J5ZWpmN29YN2M4TEFQN2h6MWkwdmd4MCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3BhbmVsL2Rhc2hib2FyZGFkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYW5lbC9kYXNoYm9hcmRhZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752020346),
('ol6myEKR3QqNWKHo1QZ575xnx2PXv5u7ZNfhpKwd', 2231740009, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/17.5 Mobile/15A5370a Safari/602.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoia0R3WExCQzNjR05XaVdzalMxUXlaOWZZTXpneW9zUmdjbUVIWnNSYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MToibG9naW5fdXNlcl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1NToibG9naW5fa2FyeWF3YW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMjMxNzQwMDA5O30=', 1751958315),
('rdI49OSbNFcFueM8YSSQP1wZCusA1cpfxpVssPRd', 2231740010, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/17.5 Mobile/15A5370a Safari/602.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVTVic0txWTV0SGttaFBVeUxKSm50RTgzUHJDYUVuNDJjQnZBQXFibiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU1OiJsb2dpbl9rYXJ5YXdhbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjIyMzE3NDAwMTA7fQ==', 1752503617);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Farid Mauludin', 'muhammadfarid@gmail.com', NULL, '$2y$12$29Vdazc6JlIpm4yy22kyFeirjKJspELuXXG63.wo8yk7/6RDnEWyi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`kode_dep`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `kode_dep` (`kode_dep`);

--
-- Indexes for table `konfigurasi_lokasi`
--
ALTER TABLE `konfigurasi_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_izin`
--
ALTER TABLE `pengajuan_izin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `konfigurasi_lokasi`
--
ALTER TABLE `konfigurasi_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengajuan_izin`
--
ALTER TABLE `pengajuan_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`kode_dep`) REFERENCES `departement` (`kode_dep`);

--
-- Constraints for table `pengajuan_izin`
--
ALTER TABLE `pengajuan_izin`
  ADD CONSTRAINT `pengajuan_izin_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
