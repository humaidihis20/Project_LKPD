-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2020 pada 14.44
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lkpd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(128) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id`, `jawaban`, `pertanyaan_id`) VALUES
(1, 'Karnivora dan herbivora', 1),
(2, 'Makhluk hidup dan benda mati', 1),
(3, 'Pemangsa dan tumbuhan', 1),
(4, 'Makhluk hidup dan pepohonan', 1),
(5, 'Habitat', 2),
(6, 'Ekosistem', 2),
(7, 'Populasi', 2),
(8, 'Komunitas', 2),
(9, 'Abiotik', 3),
(10, 'Biotik', 3),
(11, 'Atmosfer', 3),
(12, 'Biosfer', 3),
(13, 'Tikus, ayam, dan kucing', 4),
(14, 'Kelinci, marmut, dan anjing', 4),
(15, 'Kambing, rusa, dan buaya', 4),
(16, 'Kuda, sapi, dan kerbau', 4),
(17, 'Herbivora', 5),
(18, 'Karnivora', 5),
(19, 'Omnivora', 5),
(20, 'Insektivora', 5),
(21, 'Tumbuhan dan Bakteri', 6),
(22, 'Hewan lain dan tumbuhan', 6),
(23, 'Biji-bijian dan dedaunan', 6),
(24, 'Buah-buahan dan sayuran', 6),
(25, 'Buah-buahan', 7),
(26, 'Daging', 7),
(27, 'Biji-bijian', 7),
(28, 'Nektar bunga', 7),
(29, 'Alami', 8),
(30, 'Buatan', 8),
(31, 'Pegunungan', 8),
(32, 'Pedalaman', 8),
(33, 'Sungai', 9),
(34, 'Kebun', 9),
(35, 'Sawah', 9),
(36, 'Hutan', 9),
(37, 'Hutan', 10),
(38, 'Padang pasir', 10),
(39, 'Tundra', 10),
(40, 'Rawa', 10),
(41, 'Teratai', 11),
(42, 'Terumbu Karang', 11),
(43, 'Koral', 11),
(44, 'Rumput Laut', 11),
(45, 'Alami', 12),
(46, 'Buatan', 12),
(47, 'Pegunungan', 12),
(48, 'Pedalaman', 12),
(49, 'Sungai', 13),
(50, 'Kebun', 13),
(51, 'Sawah', 13),
(52, 'Hutan', 13),
(53, 'Hutan', 14),
(54, 'Padang Pasir', 14),
(55, 'Tundra', 14),
(56, 'Rawa', 14),
(57, 'Teratai', 15),
(58, 'Terumbu karang', 15),
(59, 'Koral', 15),
(60, 'Rumput laut', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jumlah_benar` int(11) NOT NULL,
  `jumlah_salah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id`, `soal`) VALUES
(1, 'Ekosistem adalah interaksi yang terjadi di sebuah lingkungan tertentu yang terjadi antara...'),
(2, 'Kumpulan dari beberapa individu sejenis yang menempati suatu lingkungan tertentu dinamakan...'),
(3, 'Semua makhluk hidup memerlukan lingkungan tertentu untuk bisa bertahan dan memenuhi kebutuhannya. Lingkungan yang berupa benda m'),
(4, 'Berikut ini yang merupakan contoh hewan yang memakan tumbuhan adalah...'),
(5, 'Hewan yang memakan daging dinamakan...'),
(6, 'Hewan omnivora adalah hewan yang memakan...'),
(7, 'Burung merpati termasuk hewan yang memakan tumbuhan, hal itu karena burung merpati memakan...'),
(8, 'Hutan dan sungai termasuk jenis ekosistem...'),
(9, 'Katak, padi, tikus dan belalang banyak terdapat pada eksosistem...'),
(10, 'Di bawah ini yang tidak termasuk ekosistem darat adalah...'),
(11, 'Makhluk hidup yang hidup pada ekosistem air tawar seperti...'),
(12, 'Hutan dan sungai termasuk jenis ekosistem...'),
(13, 'Katak, padi, tikus dan belalang banyak terdapat pada eksosistem...'),
(14, 'Di bawah ini yang tidak termasuk ekosistem darat adalah...'),
(15, 'Makhluk hidup yang hidup pada ekosistem air tawar seperti...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `role_id`, `date_created`, `image`) VALUES
(2, 'Adit', 'adit@gmail.com', '$2y$10$NzUvUxcEFusOOXkYU8wsOepO6prlJofEWhK9m.z.1L9D2Ll8iXrae', 1, 1581828880, 'default.jpg'),
(3, 'Zaki Ajiz', 'Zaki@ac.id', '$2y$10$8hxRs/iHAug6BNHEtkv5GOfDDsA6cME8sAnhrZO305Xd.JI7MEp5q', 2, 1581836246, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
