-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 17.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ip_wbb`
--

CREATE TABLE `data_ip_wbb` (
  `id` int(11) NOT NULL,
  `sto` varchar(3) DEFAULT NULL,
  `description` varchar(26) DEFAULT NULL,
  `hostname` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_ip_wbb`
--

INSERT INTO `data_ip_wbb` (`id`, `sto`, `description`, `hostname`) VALUES
(1, 'RJW', 'GPON00-D3-RJW-3', '172.29.198.7'),
(2, 'RJW', 'GPON01-D3-RJW-3', '172.21.192.135'),
(3, 'RJW', 'GPON02-D3-RJW-2', '172.21.192.181'),
(4, 'RJW', 'GPON03-D3-RJW-2', '172.21.192.182'),
(5, 'RJW', 'GPON04-D3-RJW-2', '172.21.192.183'),
(6, 'RJW', 'GPON05-D3-RJW-2', '172.21.192.184'),
(7, 'RJW', 'GPON06-D3-RJW-2', '172.21.192.185'),
(8, 'RJW', 'GPON07-D3-RJW-2', '172.21.192.186'),
(9, 'RJW', 'GPON08-D3-RJW-2', '172.21.192.187'),
(10, 'RJW', 'GPON09-D3-RJW-2', '172.21.192.188'),
(11, 'RJW', 'GPON10-D3-RJW-2', '172.21.192.189'),
(12, 'RJW', 'GPON11-D3-RJW-2', '172.21.192.190'),
(13, 'RJW', 'GPON12-D3-RJW-2', '172.21.192.178'),
(14, 'RJW', 'GPON13-D3-RJW-2', '172.21.192.179'),
(15, 'RJW', 'GPON14-D3-RJW-3 IPLAZA', '172.21.192.198'),
(16, 'RJW', 'GPON15-D3-RJW-2', '172.21.192.199'),
(17, 'RJW', 'GPON16-D3-RJW-3', '172.21.192.203'),
(18, 'CMI', 'GPON01-D3-CMI-3', '172.21.194.198'),
(19, 'CMI', 'GPON02-D3-CMI-3', '172.21.194.242'),
(20, 'CMI', 'GPON03-D3-CMI-4', '172.29.216.4'),
(21, 'CMI', 'GPON04-D3-CMI-4', '172.29.216.5'),
(22, 'CMI', 'GPON05-D3-CMI-4', '172.29.216.6'),
(23, 'CMI', 'GPON06-D3-CMI-4', '172.29.216.7'),
(24, 'CMI', 'GPON07-D3-CMI-4', '172.29.216.8'),
(25, 'CMI', 'GPON08-D3-CMI-4', '172.29.216.9'),
(26, 'CMI', 'GPON09-D3-CMI-4', '172.29.216.10'),
(27, 'CMI', 'GPON10-D3-CMI-4', '172.29.216.11'),
(28, 'CMI', 'GPON11-D3-CMI-2', '172.21.194.241'),
(29, 'CMI', 'GPON12-D3-CMI-2', '172.21.194.196'),
(30, 'PDL', 'GPON01-D3-PDL-3', '172.21.193.25'),
(31, 'PDL', 'GPON02-D3-PDL-3', '172.21.193.31'),
(32, 'PDL', 'GPON03-D3-PDL-2', '172.21.193.53'),
(33, 'PDL', 'GPON04-D3-PDL-4', '172.21.193.55'),
(34, 'NJG', 'GPON00-D3-NJG-3', '172.21.195.11'),
(35, 'NJG', 'GPON01-D3-NJG-2', '172.21.195.19'),
(36, 'NJG', 'GPON02-D3-NJG-2', '172.21.195.26'),
(37, 'NJG', 'GPON3-D3-NJG-4', '172.21.197.183'),
(38, 'CPT', 'GPON00-D3-CPT-3', '172.21.193.6'),
(39, 'CPT', 'GPON01-D3-CPT-2', '172.21.193.30'),
(40, 'CKW', 'GPON00-D3-CKW-3', '172.21.197.197'),
(41, 'CKW', 'GPON01-D3-CKW-2', '172.21.197.237'),
(42, 'CKW', 'GPON02-D3-CKW-4 CIPEUNDEUY', '172.29.198.149'),
(43, 'CLL', 'GPON00-D3-CLL-3', '172.21.197.135'),
(44, 'CLL', 'GPON01-D3-CLL-2', '172.21.197.147'),
(45, 'CLL', 'GPON02-D3-CLL-4', '172.29.198.144'),
(46, 'GNH', 'GPON01-D3-GNH-2', '172.21.197.148'),
(47, 'GNH', 'GPON03-D3-GNH-3', '172.29.198.141'),
(48, 'LEM', 'GPON00-D3-LEM-3', '172.21.197.198'),
(49, 'LEM', 'GPON01-D3-LEM-2', '172.21.197.236'),
(50, 'LEM', 'GPON02-D3-LEM-2', '172.29.198.134'),
(51, 'LEM', 'GPON03-D3-LEM-4', '172.29.198.142'),
(52, 'CSA', 'GPON00-D3-CSA-3', '172.21.193.5'),
(53, 'CSA', 'GPON01-D3-CSA-2', '172.29.198.135'),
(54, 'RCK', 'GPON00-D3-RCK-3', '172.29.198.14'),
(55, 'RCK', 'GPON01-D3-RCK-3', '172.21.193.124'),
(56, 'RCK', 'GPON02-D3-RCK-3 PINEWOOD', '172.29.198.20'),
(57, 'RCK', 'GPON03-D3-RCK-2', '172.29.198.68'),
(58, 'RCK', 'GPON04-D3-RCK-4', '172.29.198.69'),
(59, 'RCK', 'GPON05-D3-RCK-4', '172.29.198.146'),
(60, 'RCK', 'GPON06-D3-RCK-3', '172.29.198.151'),
(61, 'RCK', 'GPON07-D3-RCK-3', '172.29.198.152'),
(62, 'CLK', 'GPON821-D3-CLK-2RQ', '172.21.198.15'),
(63, 'MJY', 'GPON01-D3-MJY-3', '172.21.197.5'),
(64, 'MJY', 'GPON02-D3-MJY-2', '172.21.197.24'),
(65, 'MJY', 'GPON03-D3-MJY-2', '172.21.197.48'),
(66, 'MJY', 'GPON04-D3-MJY-2', '172.21.197.51'),
(67, 'BTJ', 'GPON01-D3-BTJ-2', '172.21.197.154'),
(68, 'BTJ', 'GPON02-D3-BTJ-2', '172.29.198.137'),
(69, 'BTJ', 'GPON03-D3-BTJ-3', '172.29.198.140'),
(70, 'BTJ', 'GPON04-D3-BTJ-4', '172.29.198.143'),
(71, 'SOR', 'GPON01-D3-SOR-2', '172.21.196.14'),
(72, 'SOR', 'GPON02-D3-SOR-2', '172.21.196.32'),
(73, 'SOR', 'GPON03-D3-SOR-3', '172.21.196.39'),
(74, 'SOR', 'GPON04-D3-SOR-4', '172.21.196.33'),
(75, 'BJA', 'GPON01-D3-BJA-2', '172.21.195.152'),
(76, 'BJA', 'GPON02-D3-BJA-2', '172.21.195.177'),
(77, 'BJA', 'GPON03-D3-BJA-3', '172.21.195.179'),
(78, 'BJA', 'GPON04-D3-BJA-4', '172.21.195.180'),
(79, 'CWD', 'GPON00-D3-CWD-3', '172.21.196.133'),
(80, 'CWD', 'GPON01-D3-CWD-2', '172.21.208.133'),
(81, 'PNL', 'GPON01-D3-PNL-2', '172.21.196.136'),
(82, 'PNL', 'GPON03-D3-PNL-3', '172.21.198.49'),
(83, 'PNL', 'GPON04-D3-PNL-4', '172.21.208.135');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maincore_wbb`
--

CREATE TABLE `maincore_wbb` (
  `id` int(11) NOT NULL,
  `sto` varchar(256) NOT NULL,
  `gpon_slot` varchar(256) NOT NULL,
  `gpon_ip` varchar(256) NOT NULL,
  `eakses` varchar(256) NOT NULL,
  `oakses` varchar(256) NOT NULL,
  `odc` varchar(256) NOT NULL,
  `tanggal` varchar(256) NOT NULL,
  `teknisi` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maincore_wbb`
--

INSERT INTO `maincore_wbb` (`id`, `sto`, `gpon_slot`, `gpon_ip`, `eakses`, `oakses`, `odc`, `tanggal`, `teknisi`, `keterangan`) VALUES
(1, 'RJW', 'GPON 1/2/3', '127.0.0.1', 'EA 1/2/3/4', 'OA 4/3/2/1', 'FBA', '17 April 2021', 'Teguh Ramadhan', 'Jumper baru'),
(2, 'CMI', 'GPON 5/4/3', '127.91.0.10', 'EA 1/6/24/1', 'OA 1/5/12/6', 'FCJ', '18 April 2021', 'Erza Gumilang', 'Jumper baru'),
(4, 'RJW', 'GPON 12/1/2', '127.0.0.4', 'EA 1/3/12/1', 'OA 3/2/20/6', 'FCA', '26 April 2021', '20971206', 'Jumper Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, '20971206', 'Teguh Ramadhan Nur Islamy', 'teguhrmdhn@gmail.com', '$2y$10$pedb6.vS3uPVDHJe19hhRON2kQQ5Cx6GlphI4dcHJ.jcdbjMTyYWa', 1, 1, '1615419424');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_ip_wbb`
--
ALTER TABLE `data_ip_wbb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maincore_wbb`
--
ALTER TABLE `maincore_wbb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_ip_wbb`
--
ALTER TABLE `data_ip_wbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `maincore_wbb`
--
ALTER TABLE `maincore_wbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
