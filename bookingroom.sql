-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 06:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_penyewa` int(5) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama_instansi` varchar(30) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `anggota1` varchar(30) DEFAULT NULL,
  `anggota2` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `scan` varchar(255) NOT NULL,
  `jenisPaket` int(1) NOT NULL,
  `gold` varchar(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_penyewa`, `no_identitas`, `nama_instansi`, `nama`, `anggota1`, `anggota2`, `email`, `nohp`, `pass`, `scan`, `jenisPaket`, `gold`, `status`) VALUES
(10, '', 'Laskar Pelangi', 'Syafira Rahman', 'Italiana', 'Mery', 'syafirarahman01@gmail.com', '085731014952', '72209315dd05018da8241c816d8da596', '', 1, 'startup', NULL),
(18, '1234567890', 'Teknik Industri UGM', 'Rahman', NULL, NULL, 'rahman@gmail.com', '0987654321', 'e9b74cd3c4c1600ee591fd56360b89db', 'Teknik_Coy.pdf', 2, NULL, NULL),
(22, '876532', 'PUI', 'yuyu', NULL, NULL, 'yuyu@gmail.com', '', 'f34d07b202eaeadf913468e95d7fcb86', '', 1, 'pui', NULL),
(24, '123456789', 'PUI', 'a', NULL, NULL, 'a@gmail.com', '', '47bce5c74f589f4867dbd57e9ca9f808', '', 1, 'pui', NULL),
(27, '2', 'PUI', 'b', NULL, NULL, 'b@gmail.com', '', 'b972e58b43af4730e439efaa6f14cb79', '', 1, 'pui', NULL),
(31, 'y', 'PUI', 'y', NULL, NULL, 'y@gmail.com', '', 'f0a4058fd33489695d53df156b77c724', '', 1, 'pui', NULL),
(32, '23', 'PUI', 'pui', NULL, NULL, 'pui@gmail.com', '', '7999ea76267555655fe5b5af04a22742', '', 1, 'pui', NULL),
(34, '1234567890', 'Saya', NULL, NULL, NULL, 'saya@gmail.com', '', '7999ea76267555655fe5b5af04a22742', '', 1, 'pui', NULL),
(36, '', 'w', 'w', 'ww', 'ww', 'www@gmail.com', '098765432', '4eae35f1b35977a00ebd8086c259d4c9', '', 1, NULL, NULL),
(37, '134567890', 'ayaya', NULL, NULL, NULL, 'ayaya@gmail.com', '', '7999ea76267555655fe5b5af04a22742', '', 1, 'pui', NULL),
(40, '124567890', 'sayapui', NULL, NULL, NULL, 'sayapui@gmail.com', '', '7999ea76267555655fe5b5af04a22742', '', 1, 'pui', NULL),
(43, '', 'x', 'x', 'x', 'x', 'x@gmail.com', '09865432', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', '', 1, NULL, NULL),
(53, '134567', 'lala', 'lala', NULL, NULL, 'lala@gmail.com', '843', '2e3817293fc275dbee74bd71ce6eb056', 'http://localhost/bookingroom/scan/identitas/Essay_Competition_PPI_HONGARIA_2017.pdf', 3, NULL, NULL),
(55, '76543', 'lulu', 'lulu', NULL, NULL, 'lulu@gmail.com', '98765432', '654e4dc5b90b7478671fe6448cab3f32', 'http://localhost/bookingroom/scan/identitas/Essay_Competition_PPI_HONGARIA_20171.pdf', 2, NULL, NULL),
(56, '12345678', 'Apaa', 'iy', 'iy', 'anggota2', 'apaa@gmail.com', '123445678', 'c144702bb12be5c81d021d50ac40dea3', '', 1, 'StartUp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_ruang`
--

CREATE TABLE `peminjaman_ruang` (
  `id_peminjaman_ruang` int(255) NOT NULL,
  `id_ruang` int(255) NOT NULL,
  `id_penyewa` int(255) NOT NULL,
  `kode_booking` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman_ruang`
--

INSERT INTO `peminjaman_ruang` (`id_peminjaman_ruang`, `id_ruang`, `id_penyewa`, `kode_booking`) VALUES
(1, 23, 22, 'BR-0000005'),
(2, 23, 22, 'BR-0000008'),
(3, 24, 22, 'BR-0000008'),
(4, 23, 22, 'BR-0000009'),
(5, 24, 22, 'BR-0000009'),
(7, 23, 22, 'BR-0000011'),
(8, 24, 22, 'BR-0000011'),
(9, 23, 22, 'BR-0000012'),
(10, 24, 22, 'BR-0000012'),
(11, 23, 22, 'BR-0000013'),
(12, 24, 22, 'BR-0000013'),
(13, 23, 22, 'BR-0000014'),
(14, 24, 22, 'BR-0000014');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(10) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `ukuran`, `kapasitas`, `fasilitas`, `foto`) VALUES
(23, 'A1', '100', 25, 'ac', 'sal.jpg'),
(24, 'Silent', '4x3', 10, 'Menja, Kursi, AC', '2a3699238e0bdd56afd689d777be02fa-gthumb-gwdata1200-ghdata1200-gfitdatamax.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_booking` varchar(10) NOT NULL,
  `event` varchar(30) NOT NULL,
  `waktu_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status_pinjam` varchar(10) NOT NULL,
  `surat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_booking`, `event`, `waktu_pinjam`, `tgl_mulai`, `tgl_selesai`, `jam_mulai`, `jam_selesai`, `status_pinjam`, `surat`) VALUES
('BR-0000001', 'Rapat Hima', '2018-08-10 15:10:40', '2018-08-11', '2018-08-12', '20:00:00', '21:00:00', 'process', ''),
('BR-0000002', 'Rapat rapat', '2018-08-13 08:15:23', '2018-08-13', '2018-08-14', '10:00:00', '11:00:00', 'process', ''),
('BR-0000003', 'Mmm', '2018-08-13 08:32:07', '2018-08-15', '2018-08-16', '18:00:00', '19:00:00', 'process', ''),
('BR-0000004', 'hihi', '2018-08-13 09:00:46', '2018-08-16', '2018-08-16', '18:00:00', '19:00:00', 'process', ''),
('BR-0000005', 'Ddd', '2018-08-15 20:39:12', '2018-08-21', '2018-08-22', '10:00:00', '11:00:00', 'accept', ''),
('BR-0000006', 'Yyy', '2018-08-13 09:36:03', '2018-08-14', '2018-08-15', '10:00:00', '11:00:00', 'process', ''),
('BR-0000007', 'Gg', '2018-08-13 09:44:24', '2018-08-23', '2018-08-25', '16:00:00', '17:00:00', 'process', ''),
('BR-0000008', 'Ww', '2018-08-13 09:46:10', '2018-08-26', '2018-08-28', '09:00:00', '10:00:00', 'process', ''),
('BR-0000009', 'ghhh', '2018-08-13 09:55:44', '2018-08-13', '2018-08-14', '10:00:00', '11:00:00', 'process', ''),
('BR-0000010', 'Rapit', '2018-08-14 14:18:31', '2018-08-17', '2018-08-17', '10:00:00', '11:00:00', 'process', '12470.pdf'),
('BR-0000011', 'Riri', '2018-08-14 14:22:11', '2018-08-18', '2018-08-20', '10:00:00', '11:00:00', 'process', ''),
('BR-0000012', 'Iyaa', '2018-08-15 09:44:06', '2018-08-31', '2018-08-31', '18:00:00', '19:00:00', 'process', ''),
('BR-0000013', 'jnj', '2018-08-15 11:01:59', '2018-09-01', '2018-09-01', '10:00:00', '11:00:00', 'process', ''),
('BR-0000014', 'hsbj', '2018-08-15 11:06:27', '2018-08-26', '2018-08-26', '01:00:00', '02:00:00', 'process', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `peminjaman_ruang`
--
ALTER TABLE `peminjaman_ruang`
  ADD PRIMARY KEY (`id_peminjaman_ruang`),
  ADD KEY `kode_booking` (`kode_booking`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_penyewa` (`id_penyewa`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_booking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_penyewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `peminjaman_ruang`
--
ALTER TABLE `peminjaman_ruang`
  MODIFY `id_peminjaman_ruang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman_ruang`
--
ALTER TABLE `peminjaman_ruang`
  ADD CONSTRAINT `peminjaman_ruang_ibfk_1` FOREIGN KEY (`kode_booking`) REFERENCES `transaksi` (`kode_booking`),
  ADD CONSTRAINT `peminjaman_ruang_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `peminjaman_ruang_ibfk_3` FOREIGN KEY (`id_penyewa`) REFERENCES `peminjam` (`id_penyewa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
