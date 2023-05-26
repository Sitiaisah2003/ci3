-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2023 pada 15.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidlb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `isi`, `poto`) VALUES
('6388ff766e562', 'Perbaikan jalan Dusun Tekam Desa Lintah Betung', 'dilakukan oleh masyarakat dusun Tekam secara gotong royong dan dipantau oleh Kepala Desa Lintah betung dan kegiatan ini sudah berlangsung beberapa hari', 'default.jpg'),
('6388ffa87694d', 'Masyarakat Masih menggunaan Pelita', 'Sampai saat ini 4(empat) dusun masih menggunakan mesin ganset hanya sekitar 30% dan hampir 75% masyarakat masih menggunakan pelita untuk penerangan rumah karena sampai saat ini listrik masih belum mengair sampai dusun baru sampai desa', 'default.jpg'),
('6388ffc6d70f3', 'Desa Lintah Betung kesulitan Sinyal', 'Masyarakat Desa kesulitan jika ingin berkomunikasi menggunakan telepone karena di kapung atau desa sangat kesulitan sinyal jika ingin berkomunikasi dengan keluarga harus pergi ke gunung untuk mencari sinyal dan sangat sulit untuk update berita berita', 'default.jpg'),
('645619fcd65e8', 'sw', '234', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktm`
--

CREATE TABLE `sktm` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `status_perkawinan` enum('Kawin','Belum Kawin') NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sktm`
--

INSERT INTO `sktm` (`id`, `nama`, `nik`, `tgl_lahir`, `jenis_kelamin`, `status_perkawinan`, `pekerjaan`, `agama`, `alamat`) VALUES
(645, 'asdasda', 1121, '2023-05-11', 'Laki-Laki', 'Kawin', 'sadasdas', 'Islam', 'sadas'),
(646, 'sdadasdasd', 23444, '2023-05-14', 'Laki-Laki', 'Kawin', 'sadasd', 'Islam', 'sadasd'),
(647, 'udin', 23232, '4333-02-23', 'Laki-Laki', 'Kawin', 'sadsad', 'Islam', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat_keluar` date NOT NULL,
  `kode_surat_keluar` varchar(50) NOT NULL,
  `perihal_surat` varchar(50) NOT NULL,
  `jenis_surat` enum('Surat Pribadi','Surat Dinas','Surat Niaga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `no_surat`, `tgl_surat_keluar`, `kode_surat_keluar`, `perihal_surat`, `jenis_surat`) VALUES
(1, '897676', '2023-05-02', 'koiii', 'lps', 'Surat Dinas'),
(64592, '982', '2023-05-10', 'sd', 'asu', 'Surat Dinas'),
(2147483647, '66666', '2122-02-04', 'fg', 'xxx', 'Surat Niaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(9) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat_masuk` date NOT NULL,
  `alamat_pengirim_surat` varchar(100) NOT NULL,
  `kode_surat_masuk` varchar(50) NOT NULL,
  `perihal_surat` varchar(50) NOT NULL,
  `jenis_surat` enum('Surat Pribadi','Surat Dinas','Surat Niaga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `no_surat`, `tgl_surat_masuk`, `alamat_pengirim_surat`, `kode_surat_masuk`, `perihal_surat`, `jenis_surat`) VALUES
(1, '35', '2023-05-09', 'rasau jaya', 'jo09', 'penting sangat', 'Surat Pribadi'),
(645930646, '3', '2023-05-24', 's', 's', 's', 'Surat Niaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratusaha`
--

CREATE TABLE `suratusaha` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_ktp` int(16) DEFAULT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `suratusaha`
--

INSERT INTO `suratusaha` (`id`, `nama`, `tgl_lahir`, `no_ktp`, `pekerjaan`, `agama`, `alamat`) VALUES
(1, 'udinsdw', '2023-05-27', 87, 'itusd', 'Khatolik', 'anus'),
(2, 'cdcd', '2023-05-24', 34343, 'sdasd', 'Islam', 'asdsad'),
(3, 'sdsadasd', '3333-02-12', 23232, 'sadasdasd', 'Islam', 'sadsadasd'),
(4, 'asdasdasdadasdasasdadad', '2023-05-04', 2147483647, 'asdadasdasda', 'Islam', 'asdasdadaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `email` varchar(128) NOT NULL,
  `sandi` varchar(99) NOT NULL,
  `level` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `sandi`, `level`) VALUES
(1, 'adit@gmail.com', '123', 'admin'),
(2, 'pp@gmail.com', '123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratusaha`
--
ALTER TABLE `suratusaha`
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
-- AUTO_INCREMENT untuk tabel `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=648;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=645930647;

--
-- AUTO_INCREMENT untuk tabel `suratusaha`
--
ALTER TABLE `suratusaha`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6468;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
