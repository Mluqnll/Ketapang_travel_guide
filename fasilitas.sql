-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Apr 2023 pada 17.24
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-ktg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` char(36) NOT NULL,
  `id_kategori_fasilitas` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_kategori_fasilitas`, `nama`, `alamat`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `sumber_foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('98ec3e41-51a9-471b-ae23-3716fde02900', '98ec3a4a-4f57-4523-9780-90b8fd4b9191', 'RM. Dimas', 'JL. KETAPANG-SIDUK', 'Selalu Kenyang', 'Dimas', '089673643746', 'Senin-Senin', '22:59:00', '00:00:00', 'app/Fasilitas/1681406498-1ZyiV.jpg', 'google.com', '-1.387746527108794', '110.16901156806455', '2023-04-13 17:21:38', '2023-04-13 10:21:38'),
('98ec474c-eeaa-434b-a91a-3fe64ce4b38e', '98ec3a4a-4f57-4523-9780-90b8fd4b9191', 'RM. Mak nyah', 'SUKAMAJU - TANJUNG PASAR', 'Enakkk', 'Luqinul', '089563463653', 'Senin-Minggu', '08:00:00', '23:00:00', 'app/Fasilitas/1681405759-oFUyl.jpg', 'google.com', '-2.3583044689783392', '110.14772646913491', '2023-04-13 17:10:38', '2023-04-13 17:10:38'),
('98ec4902-cfc8-4502-b5b8-2f504762a444', '98ec3a4a-4f57-4523-9780-90b8fd4b9191', 'RM. Ririn', 'Sukadana', 'Pantang Pulang Sebelum Kenyang', 'Ririn', '0876364364535', 'Setiap Hari', '08:00:00', '00:00:00', 'app/Fasilitas/1681406046-SwXaf.jpg', 'google.com', '-2.3583044689783392', '110.14772646913491', '2023-04-13 10:14:06', '2023-04-13 10:14:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
