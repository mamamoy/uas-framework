-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220811.d237752642
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 03:58 PM
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
(15, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 07:37:15', 1),
(16, 2, 'tes', 'kedua', '2', '::1', '2022-08-16 09:47:40', 1),
(17, 1, 'aan', 'setiawan', '1', '::1', '2022-08-16 09:48:22', 1),
(18, 2, 'tes', 'kedua', '2', '::1', '2022-08-16 09:58:20', 1),
(19, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 08:09:33', 1),
(20, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 08:10:42', 1),
(21, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 08:19:40', 1),
(22, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 08:40:21', 1),
(23, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 08:40:42', 1),
(24, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 09:02:52', 1),
(25, 3, 'Pancen', 'Oye', '2', '::1', '2022-08-19 09:05:22', 1),
(26, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 09:07:09', 1),
(27, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 09:20:48', 1),
(28, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 09:21:40', 1),
(29, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 09:29:38', 1),
(30, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 09:30:59', 1),
(31, 2, 'tes', 'kedua', '2', '::1', '2022-08-19 09:38:22', 1),
(32, 1, 'aan', 'setiawan', '1', '::1', '2022-08-19 10:08:54', 1),
(33, 1, 'user', 'admin', '1', '::1', '2022-08-19 10:37:33', 1),
(34, 5, 'sista', 'prasista', '2', '::1', '2022-08-19 11:29:12', 1),
(35, 1, 'user', 'admin', '1', '::1', '2022-08-19 11:36:13', 1),
(36, 1, 'user', 'admin', '1', '::1', '2022-08-19 11:40:45', 1),
(37, 5, 'sista', 'prasista', '2', '::1', '2022-08-19 11:43:38', 0),
(38, 5, 'sista', 'prasista', '2', '::1', '2022-08-19 11:43:47', 1),
(39, 1, 'user', 'admin', '1', '::1', '2022-08-19 11:50:33', 1),
(40, 6, 'Sista', 'Prasista Y', '2', '::1', '2022-08-19 12:26:04', 1),
(41, 1, 'user', 'admin', '1', '::1', '2022-08-20 08:53:31', 1);

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
  `id_barang_pesanan` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_pesanan`
--

INSERT INTO `barang_pesanan` (`id_barang_pesanan`, `pesanan_id`, `barang_id`) VALUES
(1, 24, 2),
(2, 25, 2),
(3, 25, 3),
(4, 25, 2),
(6, 25, 2),
(7, 25, 3),
(8, 25, 4),
(9, 26, 3),
(10, 26, 4),
(11, 27, 3),
(12, 27, 2);

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
  `keterangan` varchar(115) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `email`, `barang_pesanan_id`, `jenis_kendaraan`, `nama_pelanggan`, `merk_kendaraan`, `jenis_pelayanan`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(24, 'dimas@gmail.com', 1, 2, 'dimas', 'supra', 2, 2, 'Sugeng', '2022-08-19 16:15:31', '2022-08-19 10:52:15'),
(25, 'huhu21@gmail.com', 0, 1, 'alex', 'honda supra 125cc', 1, 2, 'Servis motor', '2022-08-19 09:21:09', '2022-08-19 10:43:23'),
(26, 'huhu21@gmail.com', 0, 1, 'Vicha', 'Honda Genio 125', 2, 2, 'lampu depan mati, motor tidak mau nyala', '2022-08-19 09:30:40', '2022-08-19 09:33:03'),
(27, 'sista123@gmail.com', 0, 1, 'Sista', 'Honda Genio 125', 2, 2, 'Sugeng', '2022-08-19 11:29:46', '2022-08-19 11:41:43'),
(28, 'sista@gmail.com', 0, 1, 'Sista', 'Honda Genio 125', 2, 1, '', '2022-08-19 12:26:34', '2022-08-19 12:26:34');

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
(2, '01_olisheel', 'oli motor shell', 50000, 5),
(3, '02_busimotor', 'busi motor honda', 20000, 5),
(4, '03_lampudepan', 'lampu depan honda', 40000, 5),
(5, '04_kacaspion', 'Kaca Spion Revo', 25000, 16);

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
(1, 'user', 'admin', 'admin@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$cnF0YTlUdUp2SU5VLnhrdg$M0xXEINZc/A3lXL+tQ4q2b+7rYfhANxp8M7Wc4l6w88', '', NULL, 1, NULL, NULL, 1, '2022-08-16 16:41:07', '2022-08-16 16:41:07', NULL),
(2, 'user', 'pelanggan', 'pelanggan@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$aTVpZ3kvWksuMnBOTk0uNA$w/nEHCfvNeAhaDX7EGzDB1Vx0YY1nZkCcOOHBjW5q6c', '', NULL, 1, NULL, NULL, 2, '2022-08-16 18:15:47', '2022-08-16 18:15:47', NULL),
(3, 'Pancen', 'Oye', 'pancenoye@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OWE0ekw3ZGd0bmN6dDFLeA$JC61JFOczqzVz+U4lZGciB25Yy1eOKrKaL60px1dCdc', '', NULL, 1, NULL, NULL, 2, '2022-08-19 21:05:09', '2022-08-19 21:05:09', NULL),
(4, 'coba', 'sista', 'cobasista@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SmwxTk9SVE1OMTRYQ3N6cw$UlkisfKG6o+UOG1PGriKzmvLzy5gx/PcJ9xOM49BR04', '', NULL, 1, NULL, NULL, 1, '2022-08-19 22:07:06', '2022-08-19 22:07:06', NULL),
(5, 'sista', 'prasista', 'sista123@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$MVRiRWxLdlpacFdacEdpSg$SiZZacW4KfEdZl0TJ3QvVg5jKWcZV0AloNyd1oGzGsk', '', NULL, 1, NULL, NULL, 2, '2022-08-19 23:28:47', '2022-08-19 23:28:47', NULL),
(6, 'Sista', 'Prasista Y', 'sista@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$NFhISnlZRXZ4VjZRWVVENg$8X8Kb9r1NohASe2Asbzm+CwrC+c05kgprxtPNaU16+k', '', NULL, 1, NULL, NULL, 2, '2022-08-20 00:25:49', '2022-08-20 00:25:49', NULL);

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
  ADD PRIMARY KEY (`id_barang_pesanan`),
  ADD KEY `pesanan_id` (`pesanan_id`),
  ADD KEY `barang_id` (`barang_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  MODIFY `id_barang_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `stockbarang`
--
ALTER TABLE `stockbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  ADD CONSTRAINT `barang_pesanan_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `stockbarang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_pesanan_ibfk_2` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
