-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s3_web_ananta`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(11) NOT NULL,
  `id_mitra` int(11) DEFAULT NULL,
  `nomor_kontrak` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `total_bungkus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id`, `id_mitra`, `nomor_kontrak`, `tanggal_mulai`, `tanggal_akhir`, `total_bungkus`) VALUES
(2, 1, 'wadwdaw', '2022-12-02', '2022-12-23', 22);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `alamat`, `kontak`) VALUES
(1, 'Mitra 1', '-', '-'),
(2, 'Mitra 2', '-', '-'),
(4, 'awda', 'wdawda', '213123');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_mitra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `id_mitra`) VALUES
(1, 'admin', '$2y$10$PkKKnW/1dEHGrjES.Tr1CewTgRTD0Egdr0fC/dV9uKF8YcC8llwai', NULL),
(2, 'user', '$2y$10$PkKKnW/1dEHGrjES.Tr1CewTgRTD0Egdr0fC/dV9uKF8YcC8llwai', 1),
(6, 'awda', '$2y$10$ZKLEjF9WkNclifPRgjOp9ekZh4.dhHlr/gYYR.aRG4SQqUFh6LKka', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `id_kontrak` int(11) DEFAULT NULL,
  `total_bungkus` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `id_kontrak`, `total_bungkus`, `tanggal`, `catatan`) VALUES
(1, 2, 222, '2022-12-24 00:00:00', 'wadaw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kontrak` (`id_kontrak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_kontrak`) REFERENCES `kontrak` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
