-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 02:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `nama`, `isi`, `poto`) VALUES
('6388ff766e562', 'Perbaikan jalan Dusun Tekam Desa Lintah Betung', 'dilakukan oleh masyarakat dusun Tekam secara gotong royong dan dipantau oleh Kepala Desa Lintah betung dan kegiatan ini sudah berlangsung beberapa hari', 'default.jpg'),
('6388ffa87694d', 'Masyarakat Masih menggunaan Pelita', 'Sampai saat ini 4(empat) dusun masih menggunakan mesin ganset hanya sekitar 30% dan hampir 75% masyarakat masih menggunakan pelita untuk penerangan rumah karena sampai saat ini listrik masih belum mengair sampai dusun baru sampai desa', 'default.jpg'),
('6388ffc6d70f3', 'Desa Lintah Betung kesulitan Sinyal', 'Masyarakat Desa kesulitan jika ingin berkomunikasi menggunakan telepone karena di kapung atau desa sangat kesulitan sinyal jika ingin berkomunikasi dengan keluarga harus pergi ke gunung untuk mencari sinyal dan sangat sulit untuk update berita berita', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `sandi`) VALUES
('6389fb588203e', 'pamungkas@gmail.com', '123'),
('6389fb63395fd', 'leni@gmail.com', '123'),
('6389fb6ed4f21', 'dinda@gmail.com', '123'),
('6389fb85434ae', 'aisah@gmail.com', '123'),
('6389fb90bc479', 'zikri@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
