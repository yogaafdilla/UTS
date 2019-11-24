-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 09:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_booking`
--

CREATE TABLE `db_booking` (
  `id_booking` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(125) NOT NULL,
  `jumlah_orang` int(5) NOT NULL,
  `harga` int(25) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_booking`
--

INSERT INTO `db_booking` (`id_booking`, `id_invoice`, `id_wisata`, `nama_wisata`, `jumlah_orang`, `harga`, `pilihan`) VALUES
(11, 14, 0, 'Tangkuban Perahu', 3, 45000, ''),
(12, 14, 0, 'Candi Borobudur', 3, 75000, ''),
(13, 14, 0, 'Pantai Kuta', 2, 120000, ''),
(14, 15, 0, 'Danau Toba', 1, 40000, '');

-- --------------------------------------------------------

--
-- Table structure for table `db_invoice`
--

CREATE TABLE `db_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `jumlah_orang` int(5) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_invoice`
--

INSERT INTO `db_invoice` (`id_invoice`, `nama`, `jumlah_orang`, `tgl_booking`, `batas_bayar`) VALUES
(14, 'Yoga Afdilla J', 8, '2019-11-23 09:42:06', '2019-11-24 09:42:06'),
(15, 'yoga', 8, '2019-11-24 14:29:59', '2019-11-25 14:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `db_wisata`
--

CREATE TABLE `db_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `tempat_wisata` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `buka_tutup` varchar(15) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `gambar_wisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_wisata`
--

INSERT INTO `db_wisata` (`id_wisata`, `nama_wisata`, `tempat_wisata`, `kategori`, `buka_tutup`, `harga`, `gambar_wisata`) VALUES
(1, 'Tangkuban Perahu', 'Bandung', 'Wisata Alam', '09.00-18.00', '55000', 'tangkuban_perahu5.jpg'),
(2, 'Candi Borobudur', 'Yogyakarta', 'Wisata Sejarah', '07.00-17.00', '85000', 'candi_borobudur.jpg'),
(3, 'Danau Toba', 'Sumatera Utara', 'Wisata Alam', '10.00-16.30', '40000', 'danau_toba.jpg'),
(4, 'Monumen Nasional', 'Jakarta Pusat', 'Wisata Monumen', '06.30-22.00', '35000', 'monumen_nasional.jpg'),
(10, 'Pantai Kuta', 'Bali', 'Wisata Pantai', '08.00-19.00', '130000', 'kuta.jpg'),
(11, 'Monumen Perjuangan', 'Bandung', 'Wisata Monumen', '09.00-17.00', '5000', 'monumen_bandung.png'),
(12, 'Museum Nasional', 'Jakarta', 'Wisata Museum', '09.00-17.00', '30000', 'museum_nasional.jpg'),
(13, 'Museum Geologi', 'Bandung', 'Wisata Museum', '10:00-16:00', '20000', 'museum_geologi.jpg'),
(15, 'Pantai Santolo', 'Garut', 'Wisata Pantai', '09.00-20.00', '25000', 'pantai_santolo.jpg'),
(16, 'Trans Studio Bandung', 'Bandung', 'Wisata Taman Hiburan', '09.00-19.00', '250000', 'transtudio_bandung.jpg'),
(20, 'Kota Tua', 'Jakarta', 'Wisata Sejarah', '08.00-22.00', '35000', 'kota_tua.jpg'),
(21, 'Dufan', 'Jakarta', 'Wisata Taman Hiburan', '09.00-20.00', '275000', 'dufan.jpg'),
(22, 'Ciater', 'Bandung', 'Wisata Alam', '09.00-19.00', '80000', 'ciater.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_booking`
--
ALTER TABLE `db_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `db_invoice`
--
ALTER TABLE `db_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `db_wisata`
--
ALTER TABLE `db_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_booking`
--
ALTER TABLE `db_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `db_invoice`
--
ALTER TABLE `db_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db_wisata`
--
ALTER TABLE `db_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
