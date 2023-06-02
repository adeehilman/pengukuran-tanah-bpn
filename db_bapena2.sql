-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 11:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bapena2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ukur`
--

CREATE TABLE `hasil_ukur` (
  `idHasil` varchar(255) NOT NULL,
  `tgl_pengukuran` date NOT NULL,
  `nib` varchar(29) NOT NULL,
  `luas_tnh` varchar(20) NOT NULL,
  `keadaan_tnh` varchar(255) NOT NULL,
  `penggunaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_ukur`
--

INSERT INTO `hasil_ukur` (`idHasil`, `tgl_pengukuran`, `nib`, `luas_tnh`, `keadaan_tnh`, `penggunaan`) VALUES
('', '2022-08-31', '215123', '25x2m', 'Tinggi', 'rendah'),
('254', '0000-00-00', '', '', '', 'rendah'),
('157', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `idDivisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`idDivisi`, `nama_divisi`) VALUES
(1, 'Petugas Ukur'),
(2, 'Panitia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `idPermohonan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lokasi_tnh` varchar(255) NOT NULL,
  `bukti_milik` varchar(255) NOT NULL,
  `ukuran_tnh` varchar(255) NOT NULL,
  `titik_koordinat` varchar(255) NOT NULL,
  `idStatus` varchar(255) NOT NULL,
  `idPetugas` varchar(20) NOT NULL,
  `id_users` varchar(100) NOT NULL,
  `idHasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`idPermohonan`, `nama`, `nik`, `email`, `no_telp`, `alamat`, `lokasi_tnh`, `bukti_milik`, `ukuran_tnh`, `titik_koordinat`, `idStatus`, `idPetugas`, `id_users`, `idHasil`) VALUES
(10, 'Ade Hilman 22', '2171045405029003', 'adehilman2002@gmail.com', '085-863-1416 x13___', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', '', '2 hektar', '345552123.51232', 'on', '2', '20 ', '0'),
(11, 'Ade Hilman', '2171045405029003', 'adehilman2002@gmail.com', '085863141613', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, Kp.Agas Sungai Harapan Sekupang', '', '3.PNG', '2 hektar', '', 'on', '0', '19', '0'),
(12, 'Ade Hilman', '33213123', 'adehilman2002@gmail.com', '085-863-1416 x13___', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, Kp.Agas Sungai Harapan Sekupang', 'ss', '', 'ss', 'ss', 'on', '0', '0', '0'),
(13, 'Ade Hilman 212', '2212', 'adehilman2002@gmail.com', '085863141613', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, Kp.Agas Sungai Harapan Sekupang', 'asdasd', '6.PNG', 'asdasdsa', 'asdasd', 'on', '0', '20 ', '0'),
(14, 'oool', '2171045405029003', 'adehilman2002@gmail.com', '0858-6314-1613 ', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', 'Praktikum_4.pdf.pdf', '', '', 'on', '0', '2 ', '0'),
(15, 'Mia khalifa', '12213123', 'adehilman2002@gmail.com', '085863141613', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', '', '', '', 'on', '76', '19 ', '0'),
(16, 'MAYA', '2124123123', 'adehilman2002@gmail.com', '085863141613', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, Kp.Agas Sungai Harapan Sekupang', '', '', '', '', 'off', '0', '20 ', '0'),
(17, 'Ujang Badas', '217104540502903', 'adehilman2002@gmail.com', '0858-6314-1613 ', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', '3312101027_Ade.pdf', '2 hektar', '345552123.51232', 'on', '10', '19 ', '0'),
(18, 'Ade Hilman', '2171045405029003', 'adehilman2002@gmail.com', '0858-6314-1613 ', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', '', '2 hektar', '345552123.51232', '', '0', '2 ', '239'),
(19, 'Moisaq', '', 'adehilman2002@gmail.com', '085-863-1416 x13___', 'Kepulauan Riau, Batam, Delaware, Washington, Kp.Agas Sungai Harapan Sekupang', '', '4.PNG', '2 hektar', '124123123', 'off', '0', '19 ', '254'),
(20, 'Mihoyo', '53241241231', 'mihoyo@mihoyo.com', '0822-6844-1231 ', 'Kepulauan Riau, Batam, Sekupang, Sungai Harapan, ', '', '', '4x2 M', '1.121351,564.754631 ', 'off', '0', '19 ', '157');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `idPetugas` int(100) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat_ptg` varchar(255) NOT NULL,
  `job` varchar(20) NOT NULL,
  `idDivisi` int(5) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`idPetugas`, `nama_petugas`, `nik`, `no_telp`, `alamat_ptg`, `job`, `idDivisi`, `id_user`) VALUES
(0, 'Belum tersedia', '', '', '', 'off', 0, '0'),
(2, 'Shiro Kagayama', '2123214123', '085842123123', 'Hiroshiman;;;;', 'off', 1, '13'),
(3, 'Kitayama', '12333321312', '08521231231', 'Miayaman, Street', 'on', 1, '16'),
(4, 'Mia Zanadeda', '2551241231231', '084214124123', 'Ciput12;', 'on', 1, '11'),
(5, 'Ade Hilman', '2171045405029003', '085863141613', 'Kp.Agas Sungai Harapan Sekupang', 'on', 1, '200'),
(6, 'Ade Hilman', '2171045405029003', '085863141613', 'Kp.Agas Sungai Harapan Sekupang', 'on', 1, '20'),
(7, 'Zenada Xorvic', '2122241412312322', '085863141613', 'Miasdeq', 'on', 2, '34'),
(8, 'Zinovic Markid', '3321124', '2152224125', 'Tomsk', 'on', 1, '194'),
(9, 'Miaswo', '24444412112', '085721232512', 'Nuoasa', 'on', 1, '137'),
(10, 'Ade Hilman', '1221', '085863141613', 'Kp.Agas Sungai Harapan Sekupang', 'on', 1, '35'),
(12, 'Sugawara', '422123124', '085863141613', 'Kp.Agas Sungai Harapan Sekupang', 'on', 1, '235'),
(13, 'Miawaug', '212224152131', '331241212', 'Baster', 'on', 1, '96'),
(76, 'Markus', '1222111212', '085863141613', 'Kp.Agas Sungai Harapan Sekupang', 'on', 1, '76');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `idStatus` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`idStatus`, `status`) VALUES
('off', 'Belum Disetujui'),
('on', 'Sudah Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(255) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama_user`, `username`, `password`, `level`) VALUES
(0, '', '', '', 'pengguna'),
(1, 'Ade', 'admin', 'admin', 'admin'),
(2, 'Hilman', 'user', 'user', 'pengguna'),
(19, 'Mia khalifa', 'mia123', 'mia123', 'pengguna'),
(20, 'Maya', '123', '321', 'pengguna'),
(34, 'Zenada Xorvic', 'zenada12345', 'zenada12345', 'panitia'),
(76, 'Markus', 'markus123', 'markus123', 'pengurus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`idDivisi`);

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`idPermohonan`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`idPetugas`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `idDivisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  MODIFY `idPermohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `idPetugas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
