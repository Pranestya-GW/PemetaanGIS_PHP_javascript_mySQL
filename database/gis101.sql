-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 22.18
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `jenis`, `alamat`, `lat`, `lng`, `nama_file`) VALUES
(37, 'WADUK LOGUNG', 'Bendungan', 'Area Sawah, Kandangmas, Dawe, Kudus Regency, Central Java 59353', -6.758524, 110.919670, 'logung.jpg'),
(38, 'KARANG GAYAM', 'Bendungan', 'Krasak, Jurang, Gebog, Kudus Regency, Central Java 59333', -6.742786, 110.847664, 'gayam.jpg'),
(39, 'TAMBAK LULANG', 'Bendungan', 'Cobowo, Ploso, Kec. Jati, Kabupaten Kudus, Jawa Tengah 59348', -6.819108, 110.828751, 'lulang.jpg'),
(40, 'WILALUNG', 'Bendungan', 'Area Sawah, Kalirejo, Undaan, Kudus Regency, Central Java 59372', -6.926570, 110.782845, 'wilalung.jpg'),
(41, 'TEMPUR', 'Embung', 'Area Sawah, Margorejo, Dawe, Kudus Regency, Central Java 59353', -6.759175, 110.880104, 'tempur.jpg'),
(42, 'jati Boyo dan jalak Rowo', 'Titik irigasi', ' Desa Bulung Kulon Kecamatan Jekulo Kabupaten Kudus', -6.834359, 110.928818, 'jati.jpg'),
(43, 'NGEMPLAK', 'Titik Irigasi (Embun', 'Desa Ngemplak, Kecamatan Undaan, Kudus', -6.858592, 110.835014, 'ngmplk.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `nama_file`, `nama`, `jenis`, `alamat`, `lat`, `lng`) VALUES
(1, 'Capture.PNG', 'percaya diri', 'indomar', 'kpkp', -6.881083, 110.934586);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Pranestya gaung Wicaksono', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
