-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Apr 2023 pada 08.51
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl_ektg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi_wisata`
--

CREATE TABLE `atraksi_wisata` (
  `id` char(36) NOT NULL,
  `id_kategori` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `destinasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `atraksi_wisata`
--

INSERT INTO `atraksi_wisata` (`id`, `id_kategori`, `nama`, `alamat`, `destinasi`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `sumber_foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('98db13ac-59a7-4753-8f16-e4fd6f7a53fa', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Kinjil Pesisir', 'Desa Kinjil Pesisir, Kec. Benua Kayong', '-', 'Pantai Sungai Kinjil Desa Kinjil Pesisir Kecamatan Benua Kayong Ketapang. Jarak ke lokasi ini sekitar puluhan kilometer dari Ibu Kota Ketapang dengan waktu tempuh ½ atau 1 jam menggunakan sepeda motor atau mobil.\r\n\r\nPantai ini menjadi salah satu objek wisata untuk weekend, karena tempatnya yang strategis tidak jauh dari kota Ketapang. Membawa keluarga, kerabat, pacar dan teman-teman berakhir pekan sangat cocok sekali ditempat ini. Matahari terbenam yang menawarkan panorama alam yang indah serta deburan ombaknya membuat pengunjung betah berlama-lama menikmatinya. Pantai ini juga sangat cocok untuk berpoto.', '-', '-', 'Senin - Minggu', '07:00:00', '17:00:00', 'app/Atraksi-Wisata/1680666953-pEZ3J.jpg', 'Masata', '-1.8744193685663437', '109.96228017428729', '2023-04-04 20:55:53', '2023-04-04 20:55:53'),
('98db15ad-6819-4fe1-b6e1-dea57e72ff7b', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Laman Randu', 'Desa Laman Satong, Kec. MHU', '-', 'Desa Wisata Laman Satong adalah kawasan wisata perdesaan yang berada di Kecamatan Matan Hilir Utara, Kab. Ketapang - Kalimantan Barat, yang memiliki lebih dari 7 destinasi wisata alam-budaya yang dikelola bersama oleh masyarakat desa, taman nasional, sektor swasta dan pemerintah daerah.\r\nDengan jarak relatif dekat dari kota dan mengangkat tema wisata rimba dan budaya, desa Laman Satong menawarkan petualangan penuh pengalaman baru di Kabupaten Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680667289-ihyt1.jpg', 'Jadesta', '-1.423812938709199', '110.24775793844907', '2023-04-04 21:01:29', '2023-04-04 21:01:29'),
('98db16c8-38b2-4dd1-80d3-4e655a48ea7a', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Batu Menanti', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata TamanBatu Menanti Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'Senin - Minggu', '08:00:00', '17:00:00', 'app/Atraksi-Wisata/1680667474-GtHDB.jpg', 'Masata', '-1.8112969318946333', '110.62717457322107', '2023-04-04 21:04:34', '2023-04-04 21:04:34'),
('98db42a2-0605-4d54-a7d3-f4202608d119', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Taman Suci Khaluad', 'Desa Tanjungpura Kec. Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680674831-Q3XBD.jpg', 'Negeri Kayong', NULL, NULL, '2023-04-04 23:07:11', '2023-04-04 23:07:11'),
('98db4912-2ccb-4d1a-9291-f2bccc158230', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Tanjungpura', 'Desa Tanjungpura Kec. Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680675911-uPq6x.jpg', 'Borneotribun.com', NULL, NULL, '2023-04-04 23:25:11', '2023-04-04 23:25:11'),
('98db4bbe-883d-4210-89ec-de70db5dd216', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Masjid Agung Al Ikhlas Ketapang', 'Jl. H.Agus Salim, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati seni arsitektur khas Melayu pada ukiran masjid, spot foto yang menarik dan tentunya beribadah.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676360-gwEfD.jpg', 'Anugrahkubah.com', NULL, NULL, '2023-04-04 23:32:40', '2023-04-04 23:32:40'),
('98db4cac-71bf-4d70-9cd3-632ce02f149f', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gereja Katedral St. Gemma Galgani', 'Jl. Ahmad Yani, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati ukiran di seluruh bagian gereja dan ceritanya, serta melihat langsung proses pembuatan ukiran di bagian belakang gereja.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676516-mFqCX.jpg', 'kompas.id', NULL, NULL, '2023-04-04 23:35:16', '2023-04-04 23:35:16'),
('98db4d6a-3548-4f7c-933b-a1ef867584ba', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Kleteng Tua Pek Kong', 'Jl. Merdeka, Kel. Kantor, Kec. Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676640-22bNM.jpg', 'celebes.co', NULL, NULL, '2023-04-04 23:37:20', '2023-04-04 23:37:20'),
('98db4e2c-dc6f-40ef-a739-eaa09fe55b4a', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Wisma Hulu Sungai', 'Kelurahan Mulia Baru, Kec. Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680676768-7Siis.jpg', 'facebook ex Bertus', NULL, NULL, '2023-04-04 23:39:28', '2023-04-04 23:39:28'),
('98db4f45-803b-49f5-a341-b878b51f17f3', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Tugu Perdamaian', 'Jl. Ahmad Yani, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati ukiran dan maknanya, serta melihat mengabadikan moment dengan berfoto.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676952-RQq41.jpg', 'diLokasi.com', NULL, NULL, '2023-04-04 23:42:32', '2023-04-04 23:42:32'),
('98db4fe8-53e4-4342-995a-88179e8537c1', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Tugu Ale-Ale', 'Kelurahan Tengah, Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680677058-Jfb0d.jpg', 'direktoripariwisata.id', NULL, NULL, '2023-04-04 23:44:18', '2023-04-04 23:44:18'),
('98db50f1-d0f2-4d96-a4a7-8b72dc683e12', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gua Maria Manjau', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung bisa berziarah, berdoa, melakukan jalan salib di track yang tersedia, dan menikmati keindahan alam serta kesegaran dari air gunung yang mengalir, tentunya spot foto yang sayang untuk dilewatkan.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677232-al4Vw.jpg', 'soamaps.com', NULL, NULL, '2023-04-04 23:47:12', '2023-04-04 23:47:12'),
('98db520a-0649-4bd2-88d9-67eb95e022fe', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gua Maria Bukit Kuri', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677416-YmXcq.jpg', 'facebook Riko Kayong', NULL, NULL, '2023-04-04 23:50:16', '2023-04-04 23:50:16'),
('98db5364-f50b-4595-bbb8-302bebd22c73', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Keraton Kerajaan Matan Tanjungpura', 'Kelurahan Mulia Kerta, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677643-205h0.jpg', 'kompas.com', NULL, NULL, '2023-04-04 23:54:03', '2023-04-04 23:54:03'),
('98db540d-b64b-4db7-b92b-951ac2525ad9', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Keramat 7', 'Kelurahan Mulia Kerta, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677754-ga96N.jpg', 'google.com', NULL, NULL, '2023-04-04 23:55:54', '2023-04-04 23:55:54'),
('98db54a0-f349-47dc-815f-2d5e6c19a804', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Keramat 9', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677850-L4DmE.jpg', 'kemdikbud1', NULL, NULL, '2023-04-04 23:57:30', '2023-04-04 23:57:30'),
('98db5523-5ecf-4138-b37e-03bb8e81caae', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Pangeran Iranata', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677936-xjS21.jpg', 'kemdikbud', NULL, NULL, '2023-04-04 23:58:56', '2023-04-04 23:58:56'),
('98db5635-b00b-49d5-934c-4883be6506ae', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Gusti Muhammad Sabran', 'Kelurahan Mulia Kerta, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678116-bHV4G.jpg', 'kebudayaan.kemendikbud.com-bpcdkaltim', NULL, NULL, '2023-04-05 00:01:56', '2023-04-05 00:01:56'),
('98db5736-e1f0-4f84-92d8-fe30c2a03bb3', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Candi Negeri Baru', 'Desa Negeri Baru, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678284-uIEqY.jpg', 'googlereview-Dr.Simon Liem', NULL, NULL, '2023-04-05 00:04:44', '2023-04-05 00:04:44'),
('98db5844-2d49-472b-be2c-f93af6e554b4', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Ratu Elok', 'Desa Ratu Elok, Kec, Manis Mata', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678461-UJGeW.jpg', 'facebook Eko Susanto', NULL, NULL, '2023-04-05 00:07:41', '2023-04-05 00:07:41'),
('98db59b9-bb71-4e63-9c0b-eb78accf4bcf', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Tanjung Belandang', 'Desa Sungai Awan Kiri, Kec, Muara Pawan', '-', 'Pengunjung dapat menikmati view sunset dan minuman yang selalu ada di pantai yakni air kelapa muda, serta live music.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678706-QJ80X.jpg', 'flickr Sukadi Karmono', NULL, NULL, '2023-04-05 00:11:46', '2023-04-05 00:11:46'),
('98db5dc6-5f45-48ee-af45-4cd465a859bc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Air Mata Permai', 'Desa Sungai Awan Kanan, Kec, Muara Pawan', '-', 'Pengunjung dapat menikmati view mangrove, bermain sepeda listrik, susur sungai dan minuman serta hidangan khas khususnya ale-ale', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679385-0P3wc.jpg', 'google.com', NULL, NULL, '2023-04-05 00:23:05', '2023-04-05 00:23:05'),
('98db5e5c-1ce5-4cf9-81e8-7d2136b440e0', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Mangrove Tembilok', '-', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679483-CCK2R.jpg', 'Istimewa Desa Sei Awan Kanan', NULL, NULL, '2023-04-05 00:24:43', '2023-04-05 00:24:43'),
('98db5f01-f0f0-42dc-9839-2aec3a292890', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Danau Ulak Medang', 'Desa Ulak Medang, Kec, Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679592-ywWZE.jpg', 'yayasan IAR ktg', NULL, NULL, '2023-04-05 00:26:32', '2023-04-05 00:26:32'),
('98db604e-1d1a-451e-b603-8095ad6d2b0c', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Hutan Mangrove', 'Desa Kuala Satong, Kec, Matan Hilir Utara', '-', 'Pengunjung bisa menikmati suguhan minuman kuliner terbuat dari gedabu, berkeliling mengamati manggrove, memancing , atau memanen kepiting  bakau.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679809-FzpZm.jpg', 'yayasan IAR Indonesia', NULL, NULL, '2023-04-05 00:30:09', '2023-04-05 00:30:09'),
('98db60d3-09e0-4fd2-9fd5-884ecf417979', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Sempadi', 'Desa Kuala Satong, Kec, Matan Hilir Utara', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679897-iaT0P.jpg', 'facebook Setra', NULL, NULL, '2023-04-05 00:31:37', '2023-04-05 00:31:37'),
('98db62c4-81db-4aeb-8d84-10086d2b8923', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Berasap Laman Satong', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung bisa menikmati tanaman khas hutan tropis dan fauna yang ada di dalamnya, serta keindahan sungai berbatu dan riamnya yang eksotik', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680223-urXOz.jpg', 'ketapangcityku.blogspot', NULL, NULL, '2023-04-05 00:37:03', '2023-04-05 00:37:03'),
('98db63e1-ffe2-4eee-8dfe-7b0074506c55', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Gua Mentawai', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680410-E2xlI.png', 'istimewa danis', NULL, NULL, '2023-04-05 00:40:10', '2023-04-05 00:40:10'),
('98db6484-f846-4182-a38d-fd61fac3e796', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Kuri', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680516-8rMCC.jpg', 'Googlemaps Angga Dennis', NULL, NULL, '2023-04-05 00:41:56', '2023-04-05 00:41:56'),
('98db658b-8515-4a35-91e0-274f34414433', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kawasan Wisata Mangrove Pantai Celincing', 'Desa Sukabaru, Kec, Banua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680689-NHf4l.jpg', 'tribun pontianak', NULL, NULL, '2023-04-05 00:44:49', '2023-04-05 00:44:49'),
('98db6635-8d5a-46ea-8de0-f059080534aa', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Air Kanal', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680800-VYprb.png', 'istimewa jelajah ketapang', NULL, NULL, '2023-04-05 00:46:40', '2023-04-05 00:46:40'),
('98db66c9-1ad7-4d16-b2f8-7437446455ba', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Inam Kelima', 'Desa Sungai Melayu, Kec, Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680897-bZNdF.jpg', 'impianclub.com', NULL, NULL, '2023-04-05 00:48:17', '2023-04-05 00:48:17'),
('98db6770-30c0-4189-bd7b-4ba9bd6ea5b7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Bepampang', 'Kecamatan Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681006-sG94J.jpg', 'soamaps.com', NULL, NULL, '2023-04-05 00:50:06', '2023-04-05 00:50:06'),
('98db67e3-25f7-44df-b21e-b9a43c52033c', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Jelayan', 'Kecamatan Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681081-uqsiM.png', 'facebook Matius Bruto', NULL, NULL, '2023-04-05 00:51:21', '2023-04-05 00:51:21'),
('98db691e-d2c3-4ea8-ab1d-bdfdf66076bf', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Lalang Panjang', 'Desa Pebihingan, Kec. Pemahan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681288-TKjUW.jpg', 'soamaps.com', NULL, NULL, '2023-04-05 00:54:48', '2023-04-05 00:54:48'),
('98db6a13-6c30-4531-99e9-5e5dca4243cc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Batu Menanti', 'Dusun Bekapas, Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata Bukit Batu Menanti  Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat  yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681449-Duxcs.jpg', 'masata', '-1.8095074274977305', '110.62673456014325', '2023-04-05 00:57:29', '2023-04-05 00:57:29'),
('98db6aac-6b98-4df3-8ef7-af597a18d9e7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kolam Wisata Pagung Alam', 'Dusun Bekapas, Desa Jelayan, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681549-QjcDA.jpg', 'facebook Dolang', NULL, NULL, '2023-04-05 00:59:09', '2023-04-05 00:59:09'),
('98db6b53-1568-4d3a-b061-a34dd839b7f7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Riam Salahadan', 'Dusun Batu Bulan, Desa Tanjung Beulang, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681658-rWy86.jpg', 'helpmecovid', NULL, NULL, '2023-04-05 01:00:58', '2023-04-05 01:00:58'),
('98db6bdb-811f-4ff2-8c13-3c002a641e27', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Kengkodang', 'Desa Batu Tajam 1, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681748-YQcUu.png', 'facebook Kec. Tumbang Titi', NULL, NULL, '2023-04-05 01:02:28', '2023-04-05 01:02:28'),
('98db6c78-1e94-4bc8-a1f6-61286e3633c6', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Rayo', 'Desa Beringin Rayo, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681850-ly9E1.jpg', 'facebook Riki Arian E', NULL, NULL, '2023-04-05 01:04:10', '2023-04-05 01:04:10'),
('98db6d0b-ce91-4f84-8dc9-931e856b7d39', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Air Terjun Karang Dangin', 'Desa Karang Dangin, Kec. Jelai Hulu', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681947-hoKwU.jpg', 'monga', NULL, NULL, '2023-04-05 01:05:47', '2023-04-05 01:05:47'),
('98db6da3-8eb7-45fc-b9d5-bb2fad836353', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Silingan Begondum', 'Kecamatan Jelai Hulu', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682046-bYCv9.jpg', 'Super Apps-kompas.com', NULL, NULL, '2023-04-05 01:07:26', '2023-04-05 01:07:26'),
('98db6e5e-a3b4-4787-898c-c4950b4a3f10', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Penage', 'Desa Sungai Jawi, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682169-A8ulW.jpg', 'youtube Satya Anggriawan', NULL, NULL, '2023-04-05 01:09:29', '2023-04-05 01:09:29'),
('98db6f48-7399-4794-8da9-2b6c293912dc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Tanjung Batu', 'Desa Sungai Nanjung, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682322-fNO1y.jpg', 'indonesia kaya', NULL, NULL, '2023-04-05 01:12:02', '2023-04-05 01:12:02'),
('98db6ff8-69a5-453a-a2e2-cf55a6a588ce', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Pagar Mentimun', 'Desa Pagar Mentimun, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682438-Yz3HE.jpg', 'youtube backpacker nekat', NULL, NULL, '2023-04-05 01:13:58', '2023-04-05 01:13:58'),
('98db70ec-d468-4f2c-abab-cd6a77b1a6ae', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Sisik (Tanjung Gangse)', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682598-o0bu8.jpg', 'Anggun Safitri', NULL, NULL, '2023-04-05 01:16:38', '2023-04-05 01:16:38'),
('98db71a5-5166-471e-bf5b-b09be8490e01', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Sungai Tengar', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682719-jsl4w.jpg', 'direktori pariwisata', NULL, NULL, '2023-04-05 01:18:39', '2023-04-05 01:18:39'),
('98db724f-6bc5-4e52-937c-cdf9f6831fca', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Lagoon Belanda', 'Kecamatan Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682830-B892d.png', 'vibizmedia.com', NULL, NULL, '2023-04-05 01:20:30', '2023-04-05 01:20:30'),
('98db731a-29ba-4e92-9a2c-d7bf56252087', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Batu Arang', 'Desa Klukup Blantak, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682963-fodBJ.jpg', 'facebook Asep WM', NULL, NULL, '2023-04-05 01:22:43', '2023-04-05 01:22:43'),
('98db73b4-beac-4def-91d8-446b0c4b9597', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Pasir Putih', 'Desa Sungai Tengar, Kec. Kendawangan', '-', 'Kawasan wisata di dusun Sungai Gantang ini menawarkan suasana yang nyaman dan fasilitas yang lengkap untuk berkumpul bersama keluarga.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683064-YXSE5.jpg', 'teraju.id', '-2.4062221476218966', '110.15310263956736', '2023-04-06 07:38:37', '2023-04-06 07:38:37'),
('98db74a5-8912-4b0f-b39f-6c15b4bfa192', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau sawi', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Di pulau ini kamu tidak akan hanya melihat keindahan alam saja, namun juga bisa menemukan wisata pendidikan cinta bahari yang telah dikelola oleh masyarakat dan Pemerintah setempat. Di sini terdapat pula cagar alam dan areal konservasi yang bisa menjadi tujuan wisata menarik. Pulau Sawi ini berlokasi di desa Sungai Tengar, Kecamatan Kendawangan, sekitar 70 Km dari Kota Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683222-31LhU.jpg', 'masata', '-2.3720878718844887', '110.07118792589013', '2023-04-05 01:27:02', '2023-04-05 01:27:02'),
('98db7546-1aa9-4457-b789-35b947f93455', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Cempedak', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683327-MjBq2.png', 'istimewa Setra', NULL, NULL, '2023-04-05 01:28:47', '2023-04-05 01:28:47'),
('98db75c2-92af-445d-a92b-1567b075a116', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Bawal', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683409-umqjM.jpg', 'istimewa jelajah ketapang', NULL, NULL, '2023-04-05 01:30:09', '2023-04-05 01:30:09'),
('98db777d-f279-4501-9f49-5f50b691e661', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Hutan Kota Ketapang', 'Kelurahan Sukaharja, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati pemandangan  tumbuhan khas hutan tropis dan sungai pawan , serta macaca yang banyak dijumpai di sepanjang track. Bagi yang memiliki hobi memancing hutan kota menjadi salah satu pilihan spot memancing.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683700-y2DsG.jpg', 'facebook Teluk Akar Begantung', NULL, NULL, '2023-04-05 01:35:00', '2023-04-05 01:35:00'),
('98db790e-5b92-4c07-a980-ecc2f8184629', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kota Tanjung Pura', 'Jl. Urip Sumarjo, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat berolah raga, atau sekedar menikmati suasana taman bersama teman dan keluarga, banyak pilihan jajanan yang bisa dinikmati', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683962-5D68G.jpg', 'facebook sorot10news', NULL, NULL, '2023-04-05 01:39:22', '2023-04-05 01:39:22'),
('98db799f-0c35-420c-9492-647691a44e2a', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kota Merdeka', 'Jl. Merdeka, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati view sungai pawan dan menikmati jajanan, serta melihat - lihat lokasi pasar dengan nuansa kota lama.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684057-yDo84.jpg', 'tribunpontianak-istimewa', NULL, NULL, '2023-04-05 01:40:57', '2023-04-05 01:40:57'),
('98db7a50-db01-463b-bae2-04e807c61074', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Desa Wisata Manjau Laman Satong', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung dapat menikmati aktifitas warga yang masih kental dengan budaya dan alamnya yang masih terjaga', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684173-qNHuL.jpg', 'nasional tempo.co', NULL, NULL, '2023-04-05 01:42:53', '2023-04-05 01:42:53'),
('98db7b06-c09d-4771-9c0a-95b35017663c', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Kolam Renang Bambu', 'Kecamatan Sungai Melayu Rayak', '-', NULL, '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684292-DpL7s.jpg', 'facebook titik', NULL, NULL, '2023-04-05 01:44:53', '2023-04-05 01:44:53'),
('98db7b84-2540-4a31-a3d3-745a91f75c86', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Tropical Waterpark', 'Jl. H. Agus Salim, Sampit, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78813', '-', 'Tropical Waterpark adalah kolam renang, taman air yang berlokasi  di Ketapang. Disini anda bisa menikmati berenang sekaligus berekreasi dengan teman maupun keluarga anda.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684375-pj2u0.jpg', 'helpmecovid', NULL, NULL, '2023-04-05 01:46:15', '2023-04-05 01:46:15'),
('98db7c57-d3d9-4e1f-896d-ca14f0388576', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kedondong', 'Bundaran Tsanawiyah Jalan S. Parman,  Kec. Delta Pawan, Kabupaten Ketapang', '-', 'TAMAN Kedondong di pertigaan Tsyanawiyah Ketapang yang berhadapan langsung dengan Tugu Kedondong merupakan salah satu ikon kota ketapang yang didesain berbentuk pohon kedondong karena merupakan ciri khas Kota Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', NULL, 'Youtube Sorot10news', NULL, NULL, '2023-04-05 01:48:33', '2023-04-05 01:48:33'),
('98db7efb-65cc-4d78-b8b5-4e819e35d26c', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Hutan Desa Jelayan', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Desa Sungai Jelayan merupakan salah satu Desa yang ada di Kecamatan Kendawangan Kabupaten Ketapang yang masih mempunyai potensi untuk dilakukan pengelolaan berkelanjutan. Evaluasi Kemampuan lahan merupakan salah satu upaya untuk mengatasi penurunan degradasi lahan. Kemampuan lahan adalah penilaian atas satuan lahan untuk penggunaan tertentu yang dinilai dari masing-masing faktor penghambat. Penelitian ini bertujuan untuk mengetahui karakteristik lahan sesuai parameter kemampuan lahan, menilai sub kelas kemampuan lahan dan memberikan saran penggunaan lahan berdasarkan sub kelas kemampuan lahan di Desa Sungai Jelayan. Tahapan penelitian dimulai dari persiapan, survei pendahuluan, penentuan lokasi penelitian berdasarkan satuan lahan yang terdiri dari jenis tanah, kelas lereng, penggunaan lahan dan terdapat 9 satuan lahan, dan  penentuan titik pengamatan, serta pengamatan dilapangan dan pengambilan sampel tanah, analisis laboratorium, pengolahan data dan penyajian hasil. Hasil penelitian diperoleh 2 ordo tanah yaitu Entisols dan Inceptisols. Hasil evaluasi kemampuan lahan terbagi menjadi lima kelas kemampuan lahan dan sub kelas yaitu kelas II-s, III-s, IV-w, V-w dan VIII-es. Usaha perbaikan atau upaya penggunaan lahan secara lestari dapat dilakukan dengan 5 upaya yaitu garapan intensif, garapan sedang, garapan terbatas, cagar alam/hutan lindung, dan pengembalaan intensif.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684956-ebWGM.webp', 'the palm scribe', '-1.809247930310821', '110.62470621834788', '2023-04-05 01:55:56', '2023-04-05 01:55:56'),
('98db8046-6dd5-4345-b3c4-18804104036f', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Gua Maria Kederon', 'Desa Laman Satong, Kec. MHU', '-', 'Gua Maria menjadi salah satu destinasi primadona bukan hanya bagi umat Kristiani namun juga masyarakat umum lainnya. Karena memiliki nuansa alam yang sejuk dan rindang. Lebih dari 1000 pengunjung yang mendatangi tempat ini setiap tahunnya.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685173-TaM9I.jpg', 'jadesta', '-1.3880199580954775', '110.18124379848508', '2023-04-05 01:59:33', '2023-04-05 01:59:33'),
('98db8183-8559-45b2-8ca3-2c43e79b1507', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Rumah Adat Melayu', 'Jl. Kiyai Mangku Negeri', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685381-JUjge.png', 'travel.detik.com', NULL, NULL, '2023-04-05 02:03:01', '2023-04-05 02:03:01'),
('98db8220-9529-44e1-bf43-1acee5ceb5be', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Rumah Adat Dayak', 'Jl. Kiyai Mangku Negeri', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685484-GxAl8.png', 'kalbar.inews.id', NULL, NULL, '2023-04-05 02:04:44', '2023-04-05 02:04:44'),
('98db8365-0ead-46c1-9ada-4aa8f54fc3e2', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Sawah Kinjil', 'Desa Kinjil Pesisir, Kec. Benua Kayong', '-', 'Pantai Sungai Kinjil Desa Kinjil Pesisir Kecamatan Benua Kayong Ketapang. Jarak ke lokasi ini sekitar puluhan kilometer dari Ibu Kota Ketapang dengan waktu tempuh ½ atau 1  jam menggunakan sepeda motor atau mobil.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685696-7CYxr.jpg', 'masata', '-1.8733437268630242', '109.96284853699393', '2023-04-05 02:08:16', '2023-04-05 02:08:16'),
('98db84c2-1196-454b-a1ea-c9813316cd0b', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Laman Besolek', 'Desa Laman Satong, Kec. MHU', 'Hiking, jungle tracking, tubing', 'Berwisata di dalam taman nasional Gunung Palung, menikmati beragam tantangan alam mulai dari hiking, camping, tubie rafting (tubing) dan pengamatan satwa liar', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685925-w1sRZ.jpg', 'masata', '-1.3712731565827647', '110.22614651023154', '2023-04-05 02:12:05', '2023-04-05 02:12:05'),
('98db8556-7260-4b72-9807-4ba590e0165b', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kalas Kumpang', 'Desa Laman Satong, Kec. MHU', 'Jungle tracking, camping', '-', '-', NULL, 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680686022-BiXC1.jpg', 'masata', '-1.3969213340349593', '110.17723864241378', '2023-04-05 09:14:06', '2023-04-05 02:14:06'),
('98db8616-a24e-48fc-a3f1-aa7aa3b5b660', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Tanjung Sekunting', 'Desa Laman Satong, Kec. MHU', 'Pengamatan orang utan, jungle tracking', '-', '-', NULL, 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680686148-tf4t6.jpg', 'web gitinesia', '-1.4101678166891038', '110.17288152997058', '2023-04-05 02:15:48', '2023-04-05 02:15:48'),
('98dd1e5c-c89d-401d-9c93-285c1db9e616', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Batu Besampak', 'Desa Laman Satong, Kec. MHU', '-', 'Menikmati pemandangan hampir 360 derajat di atas puncak desa Laman Satong.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754645-OP7kz.jpg', 'Jadesta', '-1.3903025806566431', '110.17835021936591', '2023-04-05 21:17:25', '2023-04-05 21:17:25'),
('98dd1f39-f97e-482a-9b0d-8db1a2f9c080', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Selinsing', 'Desa Laman Satong, Kec. MHU', '-', NULL, '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754790-kCIOe.png', 'instagram By @amelia110022', '-1.3649407986157378', '110.25971009263081', '2023-04-05 21:19:50', '2023-04-05 21:19:50'),
('98dd1fd0-da25-4a52-9fb7-365ecdd50e87', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Jerunjung', 'Desa Laman Satong, Kec. MHU', '-', 'Riam Jerunjung adalah kawasan yang berada dalam kawasan TNGP, secara administratif masuk dalam kawasan Desa Laman Satong. Riam Jerunjung berada di Zona Pemanfaatan TNGP. Oleh pihak desa, kawasan ini dijadikan daerah tujuan baru (tempat wisata baru) berbasis alam.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754889-azlDJ.jpg', 'Jadesta', '-1.344567254022313', '110.1902298222293', '2023-04-05 21:21:29', '2023-04-05 21:21:29'),
('98dd2097-e46a-4904-9db4-a0490cf88f76', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Sisik', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Pantai Pasir Sisik Kendawangan terletak di Kabupaten Ketapang, Indonesia. Peringkat Pantai Pasir Sisik Kendawangan adalah 4,3 bintang dari 5 bintang, berdasarkan 7 ulasan pada profil bisnis mereka di Google Maps.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755020-fLDUB.jpg', 'Instagram @dumpdump', '-2.4311374672272166', '110.15328820537745', '2023-04-05 21:23:40', '2023-04-05 21:23:40'),
('98dd216d-8ca2-4108-84c8-7cdd29d50063', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Sungai Tengar', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Menjadi salah satu destinasi wisata yang cukup wajib ketika kamu mengunjungi Kabupaten Ketapang, yakni Sungai Tengar. Kamu bisa menyusuri Sungai Tengar dengan menggunakan perahu nelayan sembari menikmati keindahan pinggiran sungai. Ada salah satu aktifitas yang dilakukan wisatawan di tempat wisata di Kalbar ini, yakni memancing. Buat kamu yang memiliki hobi memancing, Sungai Tengar bisa menjadi spot terbaik untuk menyaurkan hobi memancing, terutam lebih ke arah hulu Sungai Tengar. Atau kamu juga bisa di muara Sungai Tengar yang begitu banyak pondokan yang menyajikan kuliner khas Kabupaten Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755160-KakLZ.jpg', 'direktori pariwisata', '-2.3562159860030456', '110.14727708191084', '2023-04-05 21:26:00', '2023-04-05 21:26:00'),
('98dd2264-43ed-4ebf-90c4-30d8668925b4', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Kelukup Blantak', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Kecamatan Kendawangan yang terletak paling selatan Kabupaten Ketapang, merupakan Kecamatan yang banyak menawarkan beragam keindahan alam menakjubkan. Selain pasir putih disepanjang pantai, kali ini muncul Destinasi tujuan wisata yang tidak kalah menarik. Distinasi yang dimaksud adalah Air Terjun Tujuh Tingkat.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755321-Qbv1P.jpg', 'Instagram @ernaktp1608', '-2.35439529092276', '110.28703913940468', '2023-04-05 21:28:41', '2023-04-05 21:28:41'),
('98dd254a-108d-4e26-9103-11680605df77', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Hutan Desa Pematang Gadung', 'Desa Pematang Gadung, Kec. Matan Hilir Selatan', '-', NULL, '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755808-uiKLc.png', 'facebook Setra', NULL, NULL, '2023-04-05 21:36:48', '2023-04-05 21:36:48'),
('98dd26f5-27b9-4f22-a83c-bb0102ba0df6', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Batu Hitam', 'Simpang Tiga Sembelangaan, Kec. Nanga Tayap, Kab. Ketapang', '-', 'Air Terjun Batu Hitam kini menjadi salah satu pilihan objek wisata di Ketapang, dengan pemandangan alam yang indah, pengunjung bakal disuguhi lingkungan yang asri dan terdapat kebun buah yang bisa dikunjungi. Hadirnya objek wisata ternyata tidak terlepas dari hasil kerjasama antara Kelompok Usaha Perhutanan Sosial Agrowisata (KUPS), LPHD Sembelangaan dengan Bumitama Gunajaya Agro (BGA Grup).', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680756087-hVFoU.jpg', 'istimewa Setra', NULL, NULL, '2023-04-05 21:41:27', '2023-04-05 21:41:27'),
('98dd27d8-4136-4c53-96fb-ea28020bf065', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Lembah Hijau', 'Desa Lembah Hijau Kecamatan Nanga Tayap, Kab. Ketapang', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680756236-CVGFj.png', 'facebook Ketapang Informasi', NULL, NULL, '2023-04-06 04:45:20', '2023-04-05 21:45:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98cce379-39dc-4667-8a60-defb455e8996', 'Januari', '2023-03-28 19:39:31', '2023-03-28 19:39:31'),
('98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Februari', '2023-03-28 19:57:15', '2023-03-28 19:57:15'),
('98d18436-c397-418b-ab66-4488dce4c2fb', 'Maret', '2023-03-31 02:52:17', '2023-03-31 02:52:17'),
('98db2308-0daa-4f29-9c6c-ec6121bf2cc2', 'April', '2023-04-04 21:38:49', '2023-04-04 21:38:49'),
('98db2313-129e-46ca-9d28-aa0ad5db7642', 'Mei', '2023-04-04 21:38:57', '2023-04-04 21:38:57'),
('98db231c-44a5-485a-9804-6b994165e4f9', 'Juni', '2023-04-04 21:39:03', '2023-04-04 21:39:03'),
('98db2327-e9a1-42e8-b818-a40e2efaa464', 'Juli', '2023-04-04 21:39:10', '2023-04-04 21:39:10'),
('98db2331-2cb7-46a9-9f9c-826a7d76ed5d', 'Agustus', '2023-04-04 21:39:16', '2023-04-04 21:39:16'),
('98db2350-06c6-477c-8454-d90459ff03bc', 'September', '2023-04-04 21:39:37', '2023-04-04 21:39:37'),
('98db2359-cc65-4b7f-bbe3-e994391e3269', 'Oktober', '2023-04-04 21:39:43', '2023-04-04 21:39:43'),
('98db2366-d9f8-425b-9caf-ce57a8ee1f8a', 'November', '2023-04-04 21:39:52', '2023-04-04 21:39:52'),
('98db2370-129c-4884-8e94-329aa1cb6568', 'Desember', '2023-04-04 21:39:58', '2023-04-04 21:39:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` char(36) NOT NULL,
  `nama_desa_wisata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link_jadesta` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `desa_wisata`
--

INSERT INTO `desa_wisata` (`id`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('98db06bb-8cfc-47a8-b2e0-7e20fbde8381', 'Desa Kendawangan Kiri', 'Petualang 100 pantai', 'https://jadesta.kemenparekraf.go.id/desa/cempedak_jaya', 'app/Desa-Wisata/1680664782-fieOX.jpg', '-2.516090028897877', '110.19905363875796', '2023-04-04 20:19:42', '2023-04-04 20:19:42'),
('98db0b02-9c3b-47fc-b0db-426c13373ed6', 'Laman Satong', 'Jelajah RImba dan Budaya', 'https://jadesta.kemenparekraf.go.id/desa/laman_satong', 'app/Desa-Wisata/1680665499-gjCdR.jpg', '-1.387746527108794', '110.16901156806455', '2023-04-04 20:31:39', '2023-04-04 20:31:39'),
('98db1bff-1690-4a60-b66f-2df430042584', 'Mekar Utama', 'Pertualangan Pulau Sawi', 'https://jadesta.kemenparekraf.go.id/desa/mekar_utama', 'app/Desa-Wisata/1680668349-ekkpg.jpg', '-2.3583044689783392', '110.14772646913491', '2023-04-04 21:19:09', '2023-04-04 21:19:09'),
('98db1cfb-e37f-4b43-9a45-248907456564', 'SInar Kuri', 'Jelajah Rimba Kuri', 'https://jadesta.kemenparekraf.go.id/desa/sinar_kur...', 'app/Desa-Wisata/1680668515-iomyx.jpg', '-0.9444381245910761', '110.45705985249035', '2023-04-04 21:21:55', '2023-04-04 21:21:55'),
('98db1dc7-1507-45b8-a8e5-d49188551252', 'Suka Baru', 'Hutan Mangrove Celincing', 'https://jadesta.kemenparekraf.go.id/desa/celincing_suka_baru', 'app/Desa-Wisata/1680668715-CGUdk.jpg', '-1.856364584850278', '109.93984480758998', '2023-04-05 04:25:15', '2023-04-04 21:25:15'),
('98db1f7d-e9b6-4a8f-9d9c-adf91a603293', 'Sungai Awan Kanan', 'Wisata Pantai', 'https://jadesta.kemenparekraf.go.id/desa/sungai_awan_kanan', 'app/Desa-Wisata/1680668936-KAsVe.jpg', '-1.7554778427162019', '109.99443183372664', '2023-04-04 21:28:56', '2023-04-04 21:28:56'),
('98db21be-03da-4288-b58f-7719f2182149', 'Kinjil Pesisir', 'Wisata Santai Pantai Pecal', 'https://jadesta.kemenparekraf.go.id/desa/kinjil_pesisir', 'app/Desa-Wisata/1680669313-tzu5W.jpg', '-1.869747094306019', '109.9645630580743', '2023-04-04 21:35:13', '2023-04-04 21:35:13'),
('98db226d-2b6c-4e21-b227-6af3bba2e52b', 'Jelayan', 'JElajah Budaya Jelayan', 'https://jadesta.kemenparekraf.go.id/desa/jelayan', 'app/Desa-Wisata/1680669428-uLCv4.jpg', '-1.8096965844979593', '110.63524333597859', '2023-04-04 21:37:08', '2023-04-04 21:37:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98cf0a42-47d8-4503-adfa-ac40b688065b', 'ELECTRONIC KETAPANG TRAVEL GUIDE, e-KTG (beta 2.1), adalah portal resmi informasi pariwisata dan desa wisata di Kabupaten Ketapang yang terintegrasi dengan sistem JADESTA (Jaringan Desa Wisata)\r\nKemenparekraf RI. ​Website ini dikelola bersama oleh DPC MASATA Ketapang, Prodi Teknologi Informasi Politeknik Negeri Ketapang, dan Pemerintah Daerah  Kabupaten Ketapang melalui Dinas Pariwisata dan\r\nKebudayaan, serta didukung penuh oleh  Dinas Komunikasi dan Informatika', '2023-03-30 08:58:34', '2023-03-30 01:58:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` char(36) NOT NULL,
  `id_desa_wisata` char(36) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `id_desa_wisata`, `foto`, `created_at`, `updated_at`) VALUES
('98db0915-261d-40c7-a6a7-13233b94acdc', '98db06bb-8cfc-47a8-b2e0-7e20fbde8381', 'app/Galeri/1680665176-OUu3p.jpg', '2023-04-04 20:26:16', '2023-04-04 20:26:16'),
('98db0923-134e-498f-86d8-5596edd6ba34', '98db06bb-8cfc-47a8-b2e0-7e20fbde8381', 'app/Galeri/1680665185-5MkGj.jpg', '2023-04-04 20:26:25', '2023-04-04 20:26:25'),
('98db0a46-86ee-4ab6-94e1-12d661d23b89', '98db06bb-8cfc-47a8-b2e0-7e20fbde8381', 'app/Galeri/1680665376-Ubx6o.jpg', '2023-04-04 20:29:36', '2023-04-04 20:29:36'),
('98db0b17-9902-46b5-99e4-9be93fbf41a4', '98db0b02-9c3b-47fc-b0db-426c13373ed6', 'app/Galeri/1680665513-AcRtM.jpg', '2023-04-04 20:31:53', '2023-04-04 20:31:53'),
('98db0b21-7141-45cf-9d26-b6111d1e4ff9', '98db0b02-9c3b-47fc-b0db-426c13373ed6', 'app/Galeri/1680665519-suON8.jpg', '2023-04-04 20:32:00', '2023-04-04 20:32:00'),
('98db0b2b-bb8c-4cac-aa2f-28ca0e71a6d2', '98db0b02-9c3b-47fc-b0db-426c13373ed6', 'app/Galeri/1680665526-qdTRM.jpg', '2023-04-04 20:32:06', '2023-04-04 20:32:06'),
('98db1c0c-4efc-486d-885b-1078bf9a2edf', '98db1bff-1690-4a60-b66f-2df430042584', 'app/Galeri/1680668358-eX7YO.png', '2023-04-04 21:19:18', '2023-04-04 21:19:18'),
('98db1c17-288c-4cc8-b3c9-0d03ef4a7139', '98db1bff-1690-4a60-b66f-2df430042584', 'app/Galeri/1680668365-8vDVs.jpg', '2023-04-04 21:19:25', '2023-04-04 21:19:25'),
('98db1c1f-fe15-49a0-8d80-7f1ae920dcc8', '98db1bff-1690-4a60-b66f-2df430042584', 'app/Galeri/1680668371-LV0pI.jpg', '2023-04-04 21:19:31', '2023-04-04 21:19:31'),
('98db1d0a-cdad-4c23-b901-21a0fa15fe9f', '98db1cfb-e37f-4b43-9a45-248907456564', 'app/Galeri/1680668525-SSXoX.png', '2023-04-04 21:22:05', '2023-04-04 21:22:05'),
('98db1d17-45eb-4851-a6d4-28090e2d0b4a', '98db1cfb-e37f-4b43-9a45-248907456564', 'app/Galeri/1680668533-LZeM3.jpg', '2023-04-04 21:22:13', '2023-04-04 21:22:13'),
('98db1d22-925a-4a10-a005-5e10f211394d', '98db1cfb-e37f-4b43-9a45-248907456564', 'app/Galeri/1680668540-ZDKj4.jpg', '2023-04-04 21:22:20', '2023-04-04 21:22:20'),
('98db1e3b-86d3-4899-b31c-b116162bb6f8', '98db1dc7-1507-45b8-a8e5-d49188551252', 'app/Galeri/1680668724-R41Gn.jpg', '2023-04-04 21:25:24', '2023-04-04 21:25:24'),
('98db1e46-31b2-46f6-88a6-c5082f455fcb', '98db1dc7-1507-45b8-a8e5-d49188551252', 'app/Galeri/1680668731-zlzIo.jpg', '2023-04-04 21:25:31', '2023-04-04 21:25:31'),
('98db1e4f-e922-457e-9ad2-4da16ec90a02', '98db1dc7-1507-45b8-a8e5-d49188551252', 'app/Galeri/1680668738-bhWAc.jpg', '2023-04-04 21:25:38', '2023-04-04 21:25:38'),
('98db2074-98ed-4938-9718-34322bcaf138', '98db1f7d-e9b6-4a8f-9d9c-adf91a603293', 'app/Galeri/1680669097-5Z3On.jpg', '2023-04-04 21:31:37', '2023-04-04 21:31:37'),
('98db207d-4782-4346-94f3-6cf8f2c107fe', '98db1f7d-e9b6-4a8f-9d9c-adf91a603293', 'app/Galeri/1680669103-WycGV.jpg', '2023-04-04 21:31:43', '2023-04-04 21:31:43'),
('98db2085-597a-4acb-aa21-967b1d31a59f', '98db1f7d-e9b6-4a8f-9d9c-adf91a603293', 'app/Galeri/1680669108-96Vt2.jpg', '2023-04-04 21:31:48', '2023-04-04 21:31:48'),
('98db21d2-f0e5-4a6b-acc6-9bfffad63c8f', '98db21be-03da-4288-b58f-7719f2182149', 'app/Galeri/1680669327-W9vrz.jpg', '2023-04-04 21:35:27', '2023-04-04 21:35:27'),
('98db21db-c8c8-442e-9481-037e2dafde08', '98db21be-03da-4288-b58f-7719f2182149', 'app/Galeri/1680669333-Faqq8.jpg', '2023-04-04 21:35:33', '2023-04-04 21:35:33'),
('98db21e5-6012-4980-b691-35b0f80dfdb1', '98db21be-03da-4288-b58f-7719f2182149', 'app/Galeri/1680669339-ksJQR.jpg', '2023-04-04 21:35:39', '2023-04-04 21:35:39'),
('98db227b-ac05-4d4b-bdc7-8f2c6fa76a91', '98db226d-2b6c-4e21-b227-6af3bba2e52b', 'app/Galeri/1680669437-Yx5JV.jpg', '2023-04-04 21:37:17', '2023-04-04 21:37:17'),
('98db2284-e8c1-42c8-8ec7-198e96181756', '98db226d-2b6c-4e21-b227-6af3bba2e52b', 'app/Galeri/1680669443-rk8ty.jpg', '2023-04-04 21:37:23', '2023-04-04 21:37:23'),
('98db228c-e0ff-43b5-9fd7-b25f8a9646ad', '98db226d-2b6c-4e21-b227-6af3bba2e52b', 'app/Galeri/1680669449-VG8Gi.jpg', '2023-04-04 21:37:29', '2023-04-04 21:37:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_wisata`
--

CREATE TABLE `kalender_wisata` (
  `id` char(36) NOT NULL,
  `id_bulan` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` year NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sumber_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kalender_wisata`
--

INSERT INTO `kalender_wisata` (`id`, `id_bulan`, `nama`, `deskripsi`, `tempat`, `tahun`, `foto`, `sumber_foto`, `created_at`, `updated_at`) VALUES
('98db18a8-0f93-4d53-87d1-b1592e58bf65', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Festival Gendang Tar', 'Festival ini merupakan tradisi adat suku Melayu diketapang yang menggunakan  alat musik gendang. Begendang disebut juga dengan berhadrah dimana mengungkapkan segala pujian dan doa kepada Allah SWT yang dilakukan secara bergiliran oleh kelompok masyarakat. Peralatan yang dipakai dalam bergendang ini adalah gendang tar, surah harah, perapian, tempat sirih. tempayan tempat air dan tempat untuk burdat.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680667789-Uj7Rx.jpg', 'Borneo Tribun.com', '2023-04-04 21:09:49', '2023-04-04 21:12:11'),
('98db2827-b086-4d0a-8697-ed595b106670', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Ketapang Music Fest 2023', 'Festival musik digelar di pentas seni budaya pendopo Bupati Ketapang. Festival musik seperti ini menjadi sarana para pemuda untuk mengasah bakatnya dalam bermusik. Dengan semakin banyak festival musik maka mampu menyuntikkan semangat kepada para pemuda dalam meningkatkan kemampuan mereka.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680670389-CAB9e.jpg', 'monga.id', '2023-04-04 21:53:09', '2023-04-04 21:53:09'),
('98db28cc-9ee2-41bb-a7a2-8f6bd889c4e5', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Cap Go Meh 2023', 'Cap Go Meh adalah akhir dari rangkaian perayaan tahun baru Imlek yang dilakukan tiap tanggal 15 pada bulan pertama penanggalan Tionghoa atau 2 minggu setelah Tahun Baru Imlek. Perayaannya diawali dengan berdoa di wihara, kemudian dilanjutkan dengan iringan kenong dan simbal serta pertunjukan barongsai dan pertunjukan tradisional Tionghoa.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680670497-3KRip.jpg', 'suara kalbar', '2023-04-04 21:54:57', '2023-04-04 21:54:57'),
('98db296c-323f-4af9-b64c-e38e47de70d3', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Pekan Budaya Ikatan Keluarga Besar Madura', 'Ikatan Keluarga Besar Madura (IKBM) Ketapang menyelenggarakan Pekan Budaya Madura. Pekan budaya ini pada tahun 2022 yang lalu dihadiri sekitar 300 orang dan berlangsung selama dua hari untuk memperkenalkan budaya-budaya yang berasal dari Madura seperti atraksi kesenian budaya dan berbagai makanan khas Madura.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680670602-7Mhwz.jpg', 'radarblambangan.com', '2023-04-04 21:56:42', '2023-04-04 21:56:42'),
('98db2b86-8ad9-4d15-aa93-8c143e7dbf2e', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Pagelaran Budaya Batak “SAHATA”', 'Pagelaran Budaya Batak “SAHATA” adalah perkumpulan suku batak di daerah ketapang guna melestarikan budaya batak dan membina kesatuan masyarakat batak di daerah ketapang.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680670954-zZJou.jpg', '-', '2023-04-04 22:02:34', '2023-04-04 22:02:34'),
('98db314b-2dc5-4bab-92e2-1710bd891c0f', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Ziarah Akbar Makam Keramat 9', 'Ziarah ini merupakan refleksi sejarah dan peradaban Ketapang Tanah Kayong Negeri Betuah yang dilaksanakan bertepatan pada hari jadi Ketapang yang ditetapkan pada tanggal 11 Maret setiap tahunnya.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680671922-SvaaE.jpg', 'rakyatboreo.com', '2023-04-04 22:18:42', '2023-04-04 22:18:42'),
('98dd2ae3-cebd-437f-a7f9-65925613412a', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Pagelaran Budaya Paguyuban Pasundan', 'Pagelaran kebudayaan Sunda dan bakti sosial yang diselenggarakan oleh komunitas orang Sunda yang bertempat tinggal di Ketapang.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680756747-qgkgp.jpg', 'facebook Muhammad Abduh', '2023-04-05 21:52:27', '2023-04-05 21:52:27'),
('98dd2c18-c500-4f7d-a0ed-d19e1c7963e8', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Acara Adat Bejunjong', 'Pagelaran kebudayaan Sunda dan bakti sosial yang diselenggarakan oleh komunitas orang Sunda yang bertempat tinggal di Ketapang.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680756950-jGf5k.jpg', 'ketapang.suarakalbar', '2023-04-05 21:55:50', '2023-04-05 21:55:50'),
('98dd5e6b-c291-49c8-8bc3-ccace9802102', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Acara Adat Sapat Tohon', 'Tak hanya sebagai warisan secara turun temurun, acara ada Nyapat Tohon ini juga menjadi cara masyarakat adat dalam menghidupkan nilai-nilai posifit dari tradisi dan nilai-nilai luhur adat budaya itu sendiri.', 'Kecamatan Tayap', 2023, 'app/Kalender-Wisata/1680765392-sH07X.jpg', 'suarakalbar.co.id', '2023-04-06 00:16:33', '2023-04-06 00:16:33'),
('98dd5fa1-2e91-4fbf-9870-96bf30be6818', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Meruba Kerajaan Hulu Air', 'Meruba ini merupakan serangkaian acara buang sial dan bayar niat oleh suku dayak.', 'Kabupaten Ketapang Hulu Sungai', 2023, 'app/Kalender-Wisata/1680765595-qVfSN.jpg', 'kalbar65news.com', '2023-04-06 00:19:55', '2023-04-06 00:19:55'),
('98dd60b9-6fcd-4cf0-8da3-c042a5a9e713', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Tentobos Serongkah Onam', 'Tentobos Serongkah Onam merupakan ritual adat sebagai bentuk rasa syukur atas hasil panen dan persiapan menjelang masa tanam padi berikutnya yang dilakukan masyarakat Serongkah Onam.', 'Tumbang Titi', 2023, 'app/Kalender-Wisata/1680765779-TDwTx.jpg', 'facebook kec. tumbang titi', '2023-04-06 00:22:59', '2023-04-06 00:22:59'),
('98dd6177-7d80-49e5-9911-93490eafe8e7', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Tentobos Kengkubang Tigo', 'Tentobos Kengkubang Tigo merupakan ritual adat sebagai bentuk rasa syukur atas hasil panen dan persiapan menjelang masa tanam padi berikutnya yang dilakukan masyarakat Kengkubang Tigo', 'Tumbang Titi', 2023, 'app/Kalender-Wisata/1680765904-0LLSN.jpg', 'facebook kec. tumbang titi', '2023-04-06 00:25:04', '2023-04-06 00:25:04'),
('98dd67d6-0632-44cb-8724-4a4337088e1f', '98db231c-44a5-485a-9804-6b994165e4f9', 'Gawai Adat Nungkat Gumi', 'Gawai adat nungkat gumi adalah menyangga dan menopang bumi agar tidak roboh, tidak rusak, tidak longsor yakni dengan cara ritual adat agar keseimbangan antara manusia dan alam tetap terjaga.', 'Simpang Hulu', 2023, 'app/Kalender-Wisata/1680766972-huIQ1.jpg', 'facebook dayu rompe', '2023-04-06 00:42:52', '2023-04-06 00:42:52'),
('98dd6889-f5ef-4842-9bc5-cb3b677e3c95', '98db231c-44a5-485a-9804-6b994165e4f9', 'Gawai Adat Dayak Nyapat Taunt', 'Gawai nyapat taunt merupakan agenda tahunan masyarakat adat dayak Simpang Hulu. Nyapat taun artinya menutup tahun perladangan dan membuka tahun perladangan berikutnya.', 'Simpang Hulu', 2023, 'app/Kalender-Wisata/1680767090-LrfzX.jpg', 'facebook mateus yudi', '2023-04-06 00:44:50', '2023-04-06 00:44:50'),
('98dd69b1-9823-4953-9eb2-934167950331', '98db2327-e9a1-42e8-b818-a40e2efaa464', 'Festival Keraton Matan Tanjung Pura', 'Festival Keraton Matan Tanjungpura digelar bertujuan memperkenalkan adat istiadat dan budaya keraton Melayu di Ketapang kepada masyarakat luas, Dalam Festival Budaya Keraton Matan Tanjungpura ini juga dimeriahkan oleh sejumlah perlombaan kesenian dan olahraga, seperti perlombaan tepung tawar, pangkak gasing, lomba sampan, hadrah, qasidah, sair gulung,lomba menyumpit dan lomba menombak.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680767284-gOBue.jpg', 'ketapangnews.com', '2023-04-06 00:48:04', '2023-04-06 00:48:04'),
('98dd6a26-0e58-4d71-a9f9-702b28f92fd6', '98db2331-2cb7-46a9-9f9c-826a7d76ed5d', 'Pentas Seni Budaya Dayak Dan Pameran DAD', 'Pentas Seni Budaya Dayak dan pameran dewan adat Dayak ini menjadi even tahunan yang dilakukan di kabupaten ketapang tepatnya di pondopo bupati kab.ketapang yang bertujuan untuk mengenalkan sekaligus melestarikan adat Dayak yang merupakan suku asli di kab.ketapang.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680767360-MMsNd.jpg', 'monga.id', '2023-04-06 00:49:20', '2023-04-06 00:49:20'),
('98dd6aa6-fb54-4a0a-b52c-013a259a74e7', '98db2350-06c6-477c-8454-d90459ff03bc', 'Acara Adat Robo-Robo', 'Robo-robo yang merupakan tradisi Bugis-Melayu kian melekat di masyarakat Melayu Kecamatan Sungai Laur Kabupaten Ketapang. Adapun kegiatan ini dilakukan secara rutin setiap tahunnya untuk menjaga adat tradisi supaya tidak punah ditelan oleh zaman. Kegiatan yang biasa dilakukan pada hari Rabu terakhir dibulan safar dalam kalender Islam ini dilakukan secara serentak.', 'Sungai Laur', 2023, 'app/Kalender-Wisata/1680767445-FAW7Y.jpg', 'delikcom.com', '2023-04-06 00:50:45', '2023-04-06 00:50:45'),
('98dd6b88-6991-4ed3-97a7-5e6916803338', '98db2350-06c6-477c-8454-d90459ff03bc', 'Perayaan Budaya Robo-Robo', 'Sama dengan deskripsi sebelumnya tapi bedanya perayaan ini di adakan di Kauman yang selanjutnya akan menjadi pusat perayaan tradisi robo-robo di kabupaten Ketapang.', 'Kampung Wisata Kauman', 2023, 'app/Kalender-Wisata/1680767592-5wSeF.jpg', 'ketapang.suarakalbar.co.id', '2023-04-06 00:53:12', '2023-04-06 00:53:12'),
('98dd6c37-6d1d-4f5c-9c46-734afd0f086a', '98db2350-06c6-477c-8454-d90459ff03bc', 'Pagelaran Budaya Komunitas Keluarga Sulawesi Selatan', 'Yaitu kegiatan yang diadakan oleh Kerukunan Keluarga Sulawesi Selatan (KKSS) yang didalamnya terdapat adat dan tarian khas daerah Sulawesi Selatan seperti adat suku bugis.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680767707-hFoWJ.jpg', 'facebook tien nurseha nurseha', '2023-04-06 00:55:07', '2023-04-06 00:55:07'),
('98dd6ddd-9f68-45af-b873-a7faa4a7dae6', '98db2359-cc65-4b7f-bbe3-e994391e3269', 'Napak Tilas Sejarah, Pembangunan Dan Budaya', 'Napak tilas adalah kegiatan jalan kaki yang dilakukan untuk mengenang berbagai kejadian di masa lalu. Biasanya, napak tilas ini dapat berupa nama, tempat, benda, atau segala sesuatu yang dibendakan.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680767984-CLl3P.jpg', 'facebook prokopim setda ketapang', '2023-04-06 00:59:44', '2023-04-06 00:59:44'),
('98dd6e49-3437-4006-84fb-16374580bfea', '98db2359-cc65-4b7f-bbe3-e994391e3269', 'Pentas Seni Dan Budaya Melayu (MABM)', 'Acara pagelaran adat budaya melayu kabupaten ketapang ini dimeriahkan dengan arak-arakan “hastegune” raksasa yang ditujukan untuk pelestarian adat dan budaya melayu untuk diwariskan kepada anak cucu kelak.', 'Ketapang', 2023, 'app/Kalender-Wisata/1680768054-VkaG0.jpg', 'kalbarnews.co.id', '2023-04-06 01:00:54', '2023-04-06 01:00:54'),
('98dd6f44-fab9-402f-a31f-4ff6f76c23ce', '98db2366-d9f8-425b-9caf-ce57a8ee1f8a', 'Gawai Adat Bepalas Benua', 'Upacara ini dilakukan sebagai ungkapan rasa syukur yang telah dianugerahkan oleh Sang Pencipta kepada para petani desa sekaligus sebagai media tolak bala terhadap roh-roh jahat yang diadakan di Kendawangan.', 'Kendawangan', 2023, 'app/Kalender-Wisata/1680768219-VDnuM.jpg', '-', '2023-04-06 01:03:39', '2023-04-06 01:03:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Alam', '2023-03-27 06:11:51', '2023-03-27 06:11:51'),
('98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Wisata Budaya dan Religi', '2023-04-05 03:04:24', '2023-04-05 03:04:24'),
('98c9bfd4-8172-4516-8f61-40e214a22cae', 'Wisata Buatan', '2023-03-27 13:15:37', '2023-03-27 06:15:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_wisata`
--

CREATE TABLE `kontak_wisata` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `link_wa` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak_wisata`
--

INSERT INTO `kontak_wisata` (`id`, `nama`, `jabatan`, `link_wa`, `link_fb`, `link_ig`, `foto`, `created_at`, `updated_at`) VALUES
('98d15455-6233-4711-9379-8ee95e873d13', 'EKA WAHYUDI, S.PD., M.CS', 'Ketua Program Studi Teknologi Informasi Politeknik Negeri Ketapang', '+62 821-5591-3491', 'https://www.facebook.com/eka.wahyudi2', 'https://www.instagram.com/yudii_algebra/', 'app/Kontak/1680248304-oMnOV.jpg', '2023-03-31 00:38:24', '2023-03-31 00:38:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confir_password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `confir_password`, `poto`, `created_at`, `updated_at`) VALUES
('98c928a3-78e3-4b13-8b3c-ad06e6042395', 'Admin Base', 'admin', '$2y$10$Z1bLMy7nvY9WMY2dBbNt/.i9BZAMliFdo8OgKVu.YJsAZ1QlKaiYG', 'admin', 'app/user/1679897376-fbAJq.jpg', '2023-03-27 10:11:41', '2023-03-27 03:11:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_wisata`
--
ALTER TABLE `kontak_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
