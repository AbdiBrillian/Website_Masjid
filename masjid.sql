-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_27_123822_create_sumber_pemasukan', 1),
(4, '2020_11_27_131838_createtablepemasukan', 1),
(5, '2020_11_27_131859_create_table_pengeluaran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `pemasukan_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_pemasukan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`pemasukan_id`, `sumber_pemasukan`, `nominal`, `tanggal`, `keterangan`) VALUES
('2687c37b-b0d6-4283-ad7c-68f36203cdd0', '8e41cf02-eeaf-4537-8d49-1617f859ba6a', 3000000, '2020-11-20 00:00:00', 'Uang Zakat Fitrah'),
('7493f362-1f83-46b0-8fcf-25ab671f4bee', '6eaafeff-aec2-4b60-8d87-a1830bb45bab', 10000000, '2020-11-18 00:00:00', 'Uang Kotak Amal Hari Jum''at'),
('b11a4370-62f1-4379-ae3c-8d43dac8dbcc', '6eaafeff-aec2-4b60-8d87-a1830bb45bab', 90000, '2021-01-01 00:00:00', 'cascfasfa'),
('d6f53798-63fe-4cc5-8cfe-fd1861093954', 'f9043a3e-d4f7-4307-a0cb-7c2d90f93a16', 1000000, '2021-01-14 00:00:00', 'bazar yang dilakuan hari kamis');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `pengeluaran_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`pengeluaran_id`, `nominal`, `tanggal`, `keterangan`) VALUES
('0fc70add-a5d7-4221-82d9-b4b85ad493d6', 60000, '2021-01-05 00:00:00', 'buat beli alat kebersihn'),
('406c938a-7aba-4ef5-9728-aaa67bd7875d', 2300000, '2020-11-20 00:00:00', 'Gaji Karyawan'),
('771cc5b6-c23e-4346-a809-20fc150880a2', 50000, '2020-11-19 00:00:00', 'Uang Kebersihan'),
('a7697b14-13ce-4538-805f-fa806c2386f9', 90000, '2021-01-03 00:00:00', 'beli alat kebersihan masjid');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('6eaafeff-aec2-4b60-8d87-a1830bb45bab', 'Kotak Amal', '2020-11-27 06:35:51', '2020-11-27 06:35:51'),
('8e41cf02-eeaf-4537-8d49-1617f859ba6a', 'Zakatt', '2020-11-27 06:36:24', '2020-11-27 06:36:32'),
('f9043a3e-d4f7-4307-a0cb-7c2d90f93a16', 'bazarr', '2021-01-14 03:26:26', '2021-01-14 03:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'al-ikhlas@masjid.com', '$2y$10$1.fvI.eQmfZyCcNVbt.iHubnJaSeqYoF8x6JNx1NA7WIO54CZd8Ny', 'uIS92TkxSzm8zTt1D2aRGk9LcrQON0fCxP9NuBEeoECgoCARm6UQvxA9wHWU', '2020-11-30 01:44:08', '2020-11-30 01:44:08'),
(2, 'abdi', 'abdi@gmail.com', 'abdi12345', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`pemasukan_id`),
  ADD KEY `pemasukan_sumber_pemasukan_foreign` (`sumber_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`pengeluaran_id`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_sumber_pemasukan_foreign` FOREIGN KEY (`sumber_pemasukan`) REFERENCES `sumber` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
