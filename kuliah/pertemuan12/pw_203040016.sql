-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 08:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(3, '203040018', 'Widy Dwi Ariyanti', 'widy@gmail.com', 'Akuntansi', '60a6a2cdad3e3.jfif'),
(4, '203040019', 'Tia Esti Febriyanti', 'Tia@gmail.com', 'Tenik Kimia', '60a6a2dc2857d.jfif'),
(5, '203040020', 'Insan Kamil', 'insan@gmail.com', 'Teknik Informatika', '60a6a2ee9faeb.jfif'),
(6, '203040021', 'Raynaldaldi', 'rey@gmail.com', 'Agroteknologi', '60a6a30311aa8.jfif'),
(7, '203040022', 'Arly sabila', 'arly@gmail.com', 'Sastra Inggris', '60a6a318e0040.jfif'),
(8, '203040023', 'Syifa limia', 'syifa@gmail.com', 'Hukum', '60a6a332c885e.jfif'),
(9, '203040024', 'Ryvo Imanuel', 'ryvo@gmail.com', 'Psikologi', '60a6a3443ff74.jfif'),
(10, '203040025', 'Kiki Lamdani', 'kiki@gmail.com', 'Ilmu Komunikasi', '60a6a357c0a64.jfif'),
(12, '203004016', 'Azikra Salma', 'azikra@gmail.com', 'Teknik Informatika', '60a6a36a73ea5.jfif'),
(13, '203040017', 'Alifia Dwi G', 'alifia@gmail.com', 'Manajemen', '60a6a37cc7f15.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'azikra', '54321'),
(10, 'assalamualaikum', '$2y$10$C19cmLoWYMl65RcKNk0dpubAAt2CTUSnVWDLBX.fXq5q2XuPYZwXi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
