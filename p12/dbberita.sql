-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2024 at 05:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblberita`
--

CREATE TABLE `tblberita` (
  `idBerita` int NOT NULL,
  `idKategori` int DEFAULT NULL,
  `judulBerita` text,
  `isiBerita` longtext,
  `penulis` varchar(100) DEFAULT NULL,
  `tgldipublish` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblberita`
--

INSERT INTO `tblberita` (`idBerita`, `idKategori`, `judulBerita`, `isiBerita`, `penulis`, `tgldipublish`) VALUES
(2, 4, 'Messi telah memenangkan piala dunia', 'Messi di ujung karirnya memenangkan piala dunia di qatar', 'Eka budi susila', '2024-05-17'),
(5, 2, 'Ronaldo mendapatkan piala dunia', 'ronaldo the real goat', 'ronaldo', '2024-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idKategori` int NOT NULL,
  `nama_kategori` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`idKategori`, `nama_kategori`) VALUES
(1, 'Sport'),
(2, 'Traveling'),
(3, 'Programming'),
(4, 'Web Design'),
(5, 'coba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD PRIMARY KEY (`idBerita`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblberita`
--
ALTER TABLE `tblberita`
  MODIFY `idBerita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `idKategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD CONSTRAINT `tblberita_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `tblkategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
