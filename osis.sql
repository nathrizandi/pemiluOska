-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

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
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemilih`
--

INSERT INTO `tb_pemilih` (`id_pemilih`, `nisn`, `nama_pemilih`, `kelas`, `alamat`, `pass`) VALUES
(23, '01202', 'Agustina Wulandari', 'X - OTKP', '', 'murid'),
(24, '01203', 'Amelia Safitri', 'X - OTKP', '', 'murid'),
(22, '01201', 'Achmad Nur Kusdiyanto', 'X - OTKP', '', 'murid'),
(25, '01204', 'Angeline', 'X - OTKP', '', 'murid'),
(26, '01205', 'Casey Amanda', 'X - OTKP', '', 'murid'),
(27, '01206', 'Cherlyn', 'X - OTKP', '', 'murid'),
(28, '01207', 'Chintya Ouwren', 'X - OTKP', '', 'murid'),
(29, '01208', 'Dea Mega Lestari', 'X - OTKP', '', 'murid'),
(30, '01209', 'Devandhy Valeriano', 'X - OTKP', '', 'murid'),
(35, '1016', 'idul', 'X - OTKP', '', 'murid'),
(34, '1015', 'maharani', 'X - OTKP', '', 'murid'),
(33, '1014', 'md', 'X - OTKP', '', 'murid'),
(32, '1013', 'mahmud', 'X - OTKP', '', 'murid'),
(31, '1012', 'hapsah', 'X - OTKP', '', 'murid'),
(36, '1017', 'addha', 'X - OTKP', '', 'murid'),
(37, '1018', 'fitri', 'X - OTKP', '', 'murid'),
(38, '1019', 'iya', 'X - OTKP', '', 'murid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pencalon`
--

CREATE TABLE `tb_pencalon` (
  `id_pencalon` int(11) NOT NULL,
  `kode_pencalon` varchar(16) NOT NULL,
  `nama_pencalon` varchar(64) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pencalon`
--

INSERT INTO `tb_pencalon` (`id_pencalon`, `kode_pencalon`, `nama_pencalon`, `gambar`, `keterangan`) VALUES
(11, '002', 'Ejun Botak - Philips', '3092images.jpg', 'Visi OSIS :\r\n<br>\r\nMenjadi wadah bagi siswa untuk mengembangkan segala potensi yang ada sehingga terbentuk siwa yg cerdas, kreatif, dinamis,  berprestasi, berakhlak mulia dan menjaga nama baik sekolah menuju sekolah yang Unggul di tingkat nasional\r\n<br>\r\nMISI :\r\n<br>\r\n1. Membentuk karkater pengurus yang cerdas dan solid\r\n<br>\r\n2.  Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar guru dan siswa\r\n<br>\r\n3, Menciptkan kondisi lingkungan sekolah yang kondusif dalam belajar, untuk menghasilkan siswa yang berkompetensi dan mandiri\r\n<br>\r\n4. Mengaktifkan kelompok belajar dari masing-masing kelas\r\n<br>\r\n5. Memaksimalkan peran siswa dalam menjaga kebersihan lingkungan'),
(10, '001', 'Ivan Sukhito - Roger Ogut', '1000download.jpg', 'Visi OSIS :\r\n<br>\r\nMenjadi wadah bagi siswa untuk mengembangkan segala potensi yang ada sehingga terbentuk siwa yg cerdas, kreatif, dinamis,  berprestasi, berakhlak mulia dan menjaga nama baik sekolah menuju sekolah yang Unggul di tingkat nasional\r\n<br>\r\nMISI :\r\n<br>\r\n1. Membentuk karkater pengurus yang cerdas dan solid\r\n<br>\r\n2.  Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar guru dan siswa\r\n<br>\r\n3, Menciptkan kondisi lingkungan sekolah yang kondusif dalam belajar, untuk menghasilkan siswa yang berkompetensi dan mandiri\r\n<br>\r\n4. Mengaktifkan kelompok belajar dari masing-masing kelas\r\n<br>\r\n5. Memaksimalkan peran siswa dalam menjaga kebersihan lingkungan'),
(12, '0002', 'Steve Jobs - Ivan Sukhito', '1000POSTER_IVAN.png', 'Visi OSIS :\r\n<br>\r\nMenjadi wadah bagi siswa untuk mengembangkan segala potensi yang ada sehingga terbentuk siwa yg cerdas, kreatif, dinamis,  berprestasi, berakhlak mulia dan menjaga nama baik sekolah menuju sekolah yang Unggul di tingkat nasional\r\n<br>\r\nMISI :\r\n<br>\r\n1. Membentuk karkater pengurus yang cerdas dan solid\r\n<br>\r\n2.  Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar guru dan siswa\r\n<br>\r\n3, Menciptkan kondisi lingkungan sekolah yang kondusif dalam belajar, untuk menghasilkan siswa yang berkompetensi dan mandiri\r\n<br>\r\n4. Mengaktifkan kelompok belajar dari masing-masing kelas\r\n<br>\r\n5. Memaksimalkan peran siswa dalam menjaga kebersihan lingkungan');

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
(25, 11, 28, '25XSDEHJUI'),
(6, 10, 5, '6NGXSCEUDA'),
(5, 10, 8, '5AZNHVMWBL'),
(8, 10, 10, '8VRAPHUEWF'),
(22, 11, 30, '22WJICMTNF'),
(26, 11, 27, '26OHUNWYZF'),
(27, 10, 26, '27HWDGKQFI');

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
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `tb_pencalon`
--
ALTER TABLE `tb_pencalon`
  MODIFY `id_pencalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pilih`
--
ALTER TABLE `tb_pilih`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
