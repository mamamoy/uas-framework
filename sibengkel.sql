-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220811.d237752642
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 04:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `successfull` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `user_id`, `firstname`, `lastname`, `role`, `ip_address`, `date`, `successfull`) VALUES
(1, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:41:17', 1),
(2, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:43:08', 0),
(3, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:43:20', 0),
(4, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:44:37', 0),
(5, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:44:41', 1),
(6, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 04:59:00', 1),
(7, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 05:17:17', 1),
(8, 1, 'aan', 'setiawan', '2', '::1', '2022-08-16 05:18:14', 1),
(9, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 05:29:18', 1),
(10, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 06:10:53', 1),
(11, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 06:14:45', 1),
(12, 2, 'tes', 'kedua', '2', '::1', '2022-08-16 06:16:04', 1),
(13, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 07:08:44', 1),
(14, 2, 'tes', 'kedua', '2', '::1', '2022-08-16 07:29:00', 1),
(15, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 07:37:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedvalidator` varchar(255) NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang_pesanan`
--

CREATE TABLE `barang_pesanan` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `montir`
--

CREATE TABLE `montir` (
  `id` int(11) NOT NULL,
  `nama_montir` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `montir`
--

INSERT INTO `montir` (`id`, `nama_montir`) VALUES
(1, 'Suryono'),
(2, 'Iqbal');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `email` varchar(115) NOT NULL,
  `barang_pesanan_id` int(11) NOT NULL,
  `jenis_kendaraan` smallint(6) NOT NULL,
  `nama_pelanggan` varchar(115) NOT NULL,
  `merk_kendaraan` varchar(115) NOT NULL,
  `jenis_pelayanan` smallint(6) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `email`, `barang_pesanan_id`, `jenis_kendaraan`, `nama_pelanggan`, `merk_kendaraan`, `jenis_pelayanan`, `status`, `created_at`, `updated_at`) VALUES
(4, '', 0, 1, 'awdawdw', 'ashkjdhaksjhdka', 2, 0, '2022-08-14 07:26:34', '2022-08-14 07:26:34'),
(6, '', 0, 1, 'asdasdasd', 'hsjhdkajshd', 1, 0, '2022-08-14 15:04:02', '2022-08-14 15:04:02'),
(7, '', 0, 1, 'asdasda', 'sdasda', 1, 0, '2022-08-14 15:05:51', '2022-08-14 15:05:51'),
(8, '', 0, 1, 'asdasda', 'werwerwerw', 1, 0, '2022-08-14 15:06:16', '2022-08-14 15:06:16'),
(9, '', 0, 2, 'dasdasdas', 'asdasdasdasd', 2, 0, '2022-08-14 15:57:20', '2022-08-14 15:57:20'),
(10, '', 0, 2, 'jalksdlakjs', 'jdalskjdlakjsd', 1, 0, '2022-08-15 08:23:28', '2022-08-15 08:23:28'),
(11, '', 0, 1, 'asdmalksmda', 'skdjalksjdla', 1, 0, '2022-08-15 08:24:48', '2022-08-15 08:24:48'),
(12, '', 0, 1, 'dakjshdkaj', 'saldkjaskdjlas', 1, 0, '2022-08-15 08:27:38', '2022-08-15 08:27:38'),
(13, '', 0, 1, 'sjkdalksjda', 'dkalsjdlakjsld', 2, 0, '2022-08-15 08:28:23', '2022-08-15 08:28:23'),
(14, '', 0, 1, 'nalskdjals', 'jhsKJSHKAHS', 1, 0, '2022-08-15 08:28:38', '2022-08-15 08:28:38'),
(15, '', 0, 1, 'sndlaknsdla', 'khjashdkjas', 1, 0, '2022-08-15 08:30:57', '2022-08-15 08:30:57'),
(16, '', 0, 1, 'dakjshdkja', 'sjdlakjsd', 1, 0, '2022-08-15 08:41:14', '2022-08-15 08:41:14'),
(17, '', 0, 1, 'hljhinqq', '312313', 2, 0, '2022-08-16 06:42:55', '2022-08-16 06:42:55'),
(18, '', 0, 1, 'lanksndlasidoak', '2312312312', 2, 1, '2022-08-16 06:44:31', '2022-08-16 06:44:31'),
(19, 'huhu21@gmail.com', 0, 1, 'bbbgsdjaiskak', 'poepqjwyequwe', 1, 2, '2022-08-16 06:58:02', '2022-08-16 09:09:13'),
(20, 'huhu21@gmail.com', 0, 1, 'hasjdhakjshd', 'nknknknnm', 1, 2, '2022-08-16 07:29:18', '2022-08-16 08:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `stockbarang`
--

CREATE TABLE `stockbarang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(115) NOT NULL,
  `nama_barang` varchar(115) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockbarang`
--

INSERT INTO `stockbarang` (`id`, `kode_barang`, `nama_barang`, `harga`, `stok_barang`) VALUES
(1, '46546546', 'gjhgjgh', 3000000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis_kendaraan` varchar(115) NOT NULL,
  `merk_kendaraan` varchar(115) NOT NULL,
  `jenis_pelayanan` varchar(115) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(250) NOT NULL,
  `reset_expire` datetime DEFAULT NULL,
  `activated` tinyint(1) NOT NULL,
  `activate_token` varchar(250) DEFAULT NULL,
  `activate_expire` varchar(250) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `reset_token`, `reset_expire`, `activated`, `activate_token`, `activate_expire`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aan', 'setiawan', 'coba.lagi2@yahoo.com', '$argon2id$v=19$m=65536,t=4,p=1$cnF0YTlUdUp2SU5VLnhrdg$M0xXEINZc/A3lXL+tQ4q2b+7rYfhANxp8M7Wc4l6w88', '', NULL, 1, NULL, NULL, 1, '2022-08-16 16:41:07', '2022-08-16 16:41:07', NULL),
(2, 'tes', 'kedua', 'huhu21@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$aTVpZ3kvWksuMnBOTk0uNA$w/nEHCfvNeAhaDX7EGzDB1Vx0YY1nZkCcOOHBjW5q6c', '', NULL, 1, NULL, NULL, 2, '2022-08-16 18:15:47', '2022-08-16 18:15:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `montir`
--
ALTER TABLE `montir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockbarang`
--
ALTER TABLE `stockbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `montir`
--
ALTER TABLE `montir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stockbarang`
--
ALTER TABLE `stockbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
