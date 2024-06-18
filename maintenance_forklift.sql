-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2024 pada 23.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenance_forklift`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forklift`
--

CREATE TABLE `forklift` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `km` int(11) NOT NULL,
  `kondisi` tinyint(4) NOT NULL,
  `tgl_maintenance` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `forklift`
--

INSERT INTO `forklift` (`id`, `nama`, `jenis`, `tgl_pembelian`, `km`, `kondisi`, `tgl_maintenance`, `keterangan`) VALUES
(1, 'Forklift F1', 'T3', '2015-09-02', 1750, 1, '2024-05-02', NULL),
(2, 'Forklift F2', 'T3', '2015-09-02', 1759, 1, '2024-04-25', NULL),
(3, 'Forklift F3', 'T15', '2018-09-15', 1008, 1, '2024-05-09', NULL),
(4, 'Forklift G1', 'T15', '2018-09-15', 1752, 1, '2024-05-12', NULL),
(5, 'Forklift A1', 'T5', '2016-07-24', 1510, 1, '2024-05-31', NULL),
(6, 'Forklift A2', 'T5', '2016-07-24', 1254, 1, '2024-06-14', NULL),
(7, 'Forklift A3', 'T20', '2023-12-29', 258, 1, '2024-04-02', NULL),
(9, 'Forklift B1', 'T15', '2024-04-22', 0, 1, '2024-04-22', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `id_maintenance` int(11) NOT NULL,
  `tgl_maintenance` date NOT NULL,
  `pengajuan` int(11) NOT NULL,
  `durasi` text NOT NULL,
  `maintenance` text NOT NULL,
  `keterangan` text NOT NULL,
  `kondisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`id_maintenance`, `tgl_maintenance`, `pengajuan`, `durasi`, `maintenance`, `keterangan`, `kondisi`) VALUES
(1, '2024-06-15', 4, '1 - 3 Jam', 'Pengecekan rutin berkala dan penggantian oli', 'Tidak ada penggantian sparepart', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`) VALUES
(1, 'Didik Suhetno'),
(2, 'Amruddin Zainal Arafi'),
(5, 'Enrio Tawakal'),
(6, 'Hendrawan Mahesa Putra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `forklift` int(11) NOT NULL,
  `operator` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `keluhan` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `forklift`, `operator`, `tgl_pengajuan`, `keluhan`, `status`) VALUES
(2, 6, 5, '2024-06-16', 'Sering macet ketika dinyalakan dalam waktu lama', 1),
(3, 6, 6, '2024-06-17', 'Oli pada forklift bocor', 0),
(4, 2, 1, '2024-06-14', 'Sudah masuk waktu untuk service', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `username`, `password`, `jabatan`) VALUES
(1, 'Kemal Maesal Azam', 'kemal', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(2, 'Mohammad Agung Rahmawan', 'agung', 'c4ca4238a0b923820dcc509a6f75849b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `forklift`
--
ALTER TABLE `forklift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id_maintenance`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `forklift`
--
ALTER TABLE `forklift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id_maintenance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
