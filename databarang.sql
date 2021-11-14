-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 03:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `listbarang`
--

CREATE TABLE `listbarang` (
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listbarang`
--

INSERT INTO `listbarang` (`id_brg`, `nama_barang`, `jumlah`) VALUES
(1, 'Photscard Seokjin', '2'),
(2, 'Photscard V', '1'),
(3, 'Album Most7 ', '4'),
(4, 'DVD Dynamite', '2'),
(6, 'Photscard Suga', '3'),
(7, 'Album Answer', '5'),
(8, 'Photscard RM', '4'),
(9, 'Photscard J-hope', '2'),
(10, 'Photscard jimin', '7'),
(11, 'Photscard Jungkook', '5'),
(14, 'Album BE', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listbarang`
--
ALTER TABLE `listbarang`
  ADD PRIMARY KEY (`id_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listbarang`
--
ALTER TABLE `listbarang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
