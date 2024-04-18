-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 06:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `user`, `pass`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pengawas', 'pengawas', 'pengawas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilih`
--

CREATE TABLE `tb_pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `nama_pemilih` varchar(64) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemilih`
--

INSERT INTO `tb_pemilih` (`id_pemilih`, `nisn`, `nama_pemilih`, `kelas`, `alamat`, `pass`) VALUES
(11, '11112222', 'Udinasip', 'X - OTKP', 'Bonjay', 'udinganteng12'),
(15, '11111133', 'Albert Chandra', 'XI - RPL', 'Rusun Tzu Chi', 'albert123'),
(12, '01112221111', 'Usman', 'X - OTKP', 'Cengkareng', 'sukasukauya12'),
(13, '011223388990', 'ivan', 'X - OTKP', 'Kapuk', 'ivan2003'),
(14, '1111222211', 'Ispan', 'X - OTKP', 'Rusun', 'Apaajadah'),
(16, '09090909', 'adrian', 'X - OTKP', 'grogol', '1234asw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pencalon`
--

CREATE TABLE `tb_pencalon` (
  `id_pencalon` int(11) NOT NULL,
  `kode_pencalon` varchar(16) NOT NULL,
  `nama_pencalon` varchar(64) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pencalon`
--

INSERT INTO `tb_pencalon` (`id_pencalon`, `kode_pencalon`, `nama_pencalon`, `gambar`, `keterangan`) VALUES
(11, '002', 'Ucup - Akoi', '3092images.jpg', 'pilih kita'),
(10, '001', 'Ivan Sukhito - Angel May', '1000download.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilih`
--

CREATE TABLE `tb_pilih` (
  `ID` int(11) NOT NULL,
  `id_pencalon` int(16) NOT NULL,
  `id_pemilih` int(16) NOT NULL,
  `tanda_terima` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilih`
--

INSERT INTO `tb_pilih` (`ID`, `id_pencalon`, `id_pemilih`, `tanda_terima`) VALUES
(7, 10, 11, '7JCNTXMAHF'),
(6, 10, 5, '6NGXSCEUDA'),
(5, 10, 8, '5AZNHVMWBL'),
(8, 10, 10, '8VRAPHUEWF'),
(9, 11, 12, '9FGHOBWIEV'),
(10, 10, 13, '10KDYZUOPG'),
(11, 11, 14, '11HEIFTBMC'),
(12, 11, 15, '12RQBTWCYZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `tb_pencalon`
--
ALTER TABLE `tb_pencalon`
  ADD PRIMARY KEY (`id_pencalon`,`kode_pencalon`);

--
-- Indexes for table `tb_pilih`
--
ALTER TABLE `tb_pilih`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pencalon`
--
ALTER TABLE `tb_pencalon`
  MODIFY `id_pencalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pilih`
--
ALTER TABLE `tb_pilih`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
