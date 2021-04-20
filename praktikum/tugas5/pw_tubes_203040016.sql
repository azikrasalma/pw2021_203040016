-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 07:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `rilis` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `judul`, `sutradara`, `rilis`, `genre`, `harga`, `gambar`) VALUES
(1, 'Hercai', 'Cem karci baris yos, Ali Ilhan', '2019', 'Romance', 'Rp. 115.000,-', 'hercaii.jpg'),
(2, 'Orphan Flowers', 'Serkan Birinci', '2017', 'Youth', 'Rp. 115.000,-', 'off.jpg'),
(3, 'Elif', 'Canam Yilmaz', '2015', 'Drama', 'Rp.98.000-,', 'eliff.jpg'),
(4, 'Christmas Prince', 'John Schultz', '2017', 'Romance', 'Rp 110.000-,', 'CP.jpg'),
(5, 'Paramparca', 'Cevdet Mercan', '2019', 'Drama', 'Rp.97.000-,', 'paca.jpg'),
(6, 'Muhtesem Yuzyil Kosem', 'Durul Taylan', '2019', 'Action', 'Rp 112.000-,', 'MYK.jpg'),
(7, 'The Princess switch', 'Michael Rohl', '2018', 'Comedy', 'Rp.150.000-,', 'TPS.jpg'),
(8, 'The Chornicles of narnia', 'Andrew Adamason', '2016', 'Adventure', 'Rp.135.000-,', '090.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
