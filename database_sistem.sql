-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2017 at 06:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `HP` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nominal` int(10) NOT NULL,
  `Metode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`Nama`, `Jenis_kelamin`, `HP`, `Email`, `Nominal`, `Metode`) VALUES
('', ' Pria', '', '', 100000, 'Datang Langsung'),
('', ' Pria', '', '', 100000, 'Datang Langsung'),
('', ' Pria', '', '', 100000, 'Datang Langsung'),
('', ' Pria', '', '', 100000, 'Datang Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `jasaweb`
--

CREATE TABLE `jasaweb` (
  `id_perusahaan` int(8) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasaweb`
--

INSERT INTO `jasaweb` (`id_perusahaan`, `nama_perusahaan`, `kategori`, `website`, `no_hp`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'Panti Asuhan Yatim Piatu Himmaturrijal', 'Remaja', 'wolacom.com', '+62 856-9106-5526', 'Jalan Jatikramat Indah II No.3, Jatikramat, Jatiasih, Kota Bks, Jawa Barat 17421, Indonesia', 'Bekasi', 'Jawa Barat', '-6.279593', ' 106.941295'),
(2, 'Panti Asuhan Al Barokah', 'Anak-anak', 'a', ' +62 878-8451-5179', 'Jl. Jati Waringin II Blok Gamun No.22, Jatimakmur, Pondokgede, Kota Bks, Jawa Barat 17413', 'Bekasi', 'Jawa Barat', '-6.278199', '106.934596'),
(3, 'Panti Asuhan Yamani', 'Anak-anak, Remaja dan Lansia', 'bikindesainsitus.web.id', '+62 21 8214811', 'Jalan Pemda Jl. Dewi Sartika Blok B No.9, Jatiasih, Kota Bks, Jawa Barat 17423', 'Bekasi', 'Jawa Barat', '-6.279323', '106.967990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasaweb`
--
ALTER TABLE `jasaweb`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasaweb`
--
ALTER TABLE `jasaweb`
  MODIFY `id_perusahaan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
