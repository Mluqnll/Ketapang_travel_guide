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
-- Struktur dari tabel `kategori_fasilitas`
--

CREATE TABLE `kategori_fasilitas` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_fasilitas`
--

INSERT INTO `kategori_fasilitas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98ec3a4a-4f57-4523-9780-90b8fd4b9191', 'Kuliner', '2023-04-13 16:35:00', '2023-04-13 09:35:00'),
('98ec436b-7ec3-4c60-998f-8d957e4e56e8', 'Cafe & Resto', '2023-04-13 09:58:28', '2023-04-13 09:58:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_fasilitas`
--
ALTER TABLE `kategori_fasilitas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
