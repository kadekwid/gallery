-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 06:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `albumid` int(11) NOT NULL,
  `nama_album` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumid`, `nama_album`, `deskripsi`, `tanggal_dibuat`, `id_user`) VALUES
(1, 'Pantai', 'Kenangan dipantai', '2024-02-13', 1),
(3, 'senjata', 'ini album senjata kuat', '2024-02-13', 2),
(4, 'tatto', 'ini album tatto', '2024-02-13', 2),
(5, 'yeah', 'album gambar', '2024-02-13', 4);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `fotoid` int(11) NOT NULL,
  `judul_foto` varchar(255) NOT NULL,
  `deskripsi_foto` text NOT NULL,
  `tanggal_unggah` date NOT NULL,
  `lokasi_file` varchar(255) NOT NULL,
  `albumid` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`fotoid`, `judul_foto`, `deskripsi_foto`, `tanggal_unggah`, `lokasi_file`, `albumid`, `id_user`) VALUES
(1, 'pemukul', 'pemukul kuat', '2024-02-12', '1330096020_yeah.png', 3, 1),
(12, 'wanen ci', 'senggol dong', '2024-02-13', '971234600_wanenci.png', 5, 4),
(13, 'masker', 'masker ajaib untuk maling', '2024-02-13', '1023162428_yeah.png', 5, 4),
(14, 'pemukul', 'yeah', '2024-02-13', '2051480100_pemukul-removebg-preview.png', 3, 2),
(15, 'tongkat', 'tongkat iblis', '2024-02-13', '214120088_tongkat-removebg-preview.png', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `komentarid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isikomentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarfoto`
--

INSERT INTO `komentarfoto` (`komentarid`, `fotoid`, `id_user`, `isikomentar`, `tanggal_komentar`) VALUES
(10, 4, 2, 'gagah jir', '2024-02-13'),
(11, 11, 4, 'gg', '2024-02-13'),
(12, 12, 4, 'gaul', '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `likeid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_like` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likefoto`
--

INSERT INTO `likefoto` (`likeid`, `fotoid`, `id_user`, `tanggal_like`) VALUES
(1, 1, 1, '2024-02-12'),
(2, 4, 2, '2024-02-13'),
(3, 11, 4, '2024-02-13'),
(4, 12, 4, '2024-02-13'),
(5, 13, 4, '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`) VALUES
(2, 'user 1', '1234', 'user@gmail.com', 'user 1', 'bali'),
(4, 'user 2', '1234', 'user@gmail.com', 'user 2', 'bali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`fotoid`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`komentarid`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `komentarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
