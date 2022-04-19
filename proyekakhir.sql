-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 06:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_admin` char(50) DEFAULT NULL,
  `id_delpro` char(20) NOT NULL,
  `kata_sandi` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_admin`, `id_delpro`, `kata_sandi`) VALUES
('ketua', '001', 'e202wqa202002'),
('wakil_ketua', '002', 'e202wqa202002'),
('sekretaris', '003', 'e202wqa202002'),
('bendahara', '004', 'e202wqa202002'),
('editor', '005', 'e202wqa202002');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nama_anggota` char(50) DEFAULT NULL,
  `id_delpro` char(20) NOT NULL,
  `kata_sandi` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nama_anggota`, `id_delpro`, `kata_sandi`) VALUES
('asido', '11319001', 'e202wqa202002'),
('rahul', '11319002', 'e202wqa202002'),
('andre', '11319003', 'e202wqa202002'),
('loise', '11319004', 'e202wqa202002'),
('daud', '11319005', 'e202wqa202002');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `isi_komentar` varchar(550) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `judul_modul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `isi_komentar`, `nama_komentar`, `judul_modul`) VALUES
(12, 'lomba lombaa\r\n', 'Mukdin', 'Perlombaan Lomba-lomba'),
(13, 'jangan garang', 'Mukdin', 'Perlombaan penca silat'),
(15, 'makasih modulnya om\r\n', 'Mukdin', 'Modul Bahasa Inggris Week 1');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `waktu_pengumuman` varchar(120) NOT NULL,
  `judul_pengumuman` varchar(225) DEFAULT NULL,
  `isi_pengumuman` text,
  `id_peng` int(11) NOT NULL,
  `tempat_pengumuman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`waktu_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `id_peng`, `tempat_pengumuman`) VALUES
('2020-06-04', 'Quarantine Days', 'Gass, kuliah dirumah, jangan nongkrong diluar, jangan keluyuran, jaga kesehatan ya, love you\r\nregards, Asido Panjaitan &lt;3', 3, 'Sitoluama, Toba Samosir'),
('0034-02-21', 'MOBILE LEGENDS', 'Daftarkan diri anda turnamen mobile legends se- ITDEL', 4, 'Sitoluama, Toba Samosir'),
('1238-10-20', 'ASIDO GANTENG KALI', 'MANTAP', 5, 'Porsea');

-- --------------------------------------------------------

--
-- Table structure for table `perlombaan`
--

CREATE TABLE `perlombaan` (
  `id_perlombaan` int(11) NOT NULL,
  `nama_perlombaan` varchar(255) NOT NULL,
  `isi_perlombaan` varchar(500) NOT NULL,
  `file_pendukung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perlombaan`
--

INSERT INTO `perlombaan` (`id_perlombaan`, `nama_perlombaan`, `isi_perlombaan`, `file_pendukung`) VALUES
(4, 'Lomba-lomba', 'https://www.youtube.com/channel/UCKOqAPM4qbCbyBkY5oFWlbA', 'c0ce909c644e05282c7ea89637e36072.docx'),
(5, 'penca silat', 'https://www.youtube.com/', '3a929d9cd06e7fe23da3d7787fbcb597.docx');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(1) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` int(11) NOT NULL,
  `nama_tools` varchar(50) NOT NULL,
  `isi_tools` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tools`, `nama_tools`, `isi_tools`) VALUES
(1, 'Notepad++', 'https://github.com/notepad-plus-plus/notepad-plus-plus/releases/download/v7.8.6/npp.7.8.6.Installer.exe'),
(5, 'Dev C++', 'https://id.softonic.com/download/bloodshed-dev-c/windows/post-download');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(11) NOT NULL,
  `judul_upload` varchar(255) NOT NULL,
  `isi_upload` text NOT NULL,
  `nama_upload` varchar(255) NOT NULL,
  `kapan_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_upload`, `judul_upload`, `isi_upload`, `nama_upload`, `kapan_upload`) VALUES
(7, 'Bahasa Inggris Week 1', 'untuk Bahasa Inggris', 'ffbb47ab5f346cc64539c5639fec835d.docx', '2020-06-11 09:13:32'),
(8, 'inggris', 'Inggris Hebattt!!....', '15ae4bcaa70de4afa5fd72ed7fb1d2f1.docx', '2020-06-11 09:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `motivasi` text NOT NULL,
  `foto` varchar(500) NOT NULL,
  `angkatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `password`, `email`, `role_id`, `prodi`, `nama`, `user_id`, `motivasi`, `foto`, `angkatan`) VALUES
('11319002', 'e202wqa202002', 'asidopanjaitan67@gmail.com', 1, 'D3 Teknologi Informasi', 'Asido Panjaitan', 6, 'Ingin menjadi seorang Olahragawan', '', '2019'),
('11319007', 'e202wqa202002', 'arifemuh@gmail.com', 2, 'S1 Informatika', 'Arief Muhammad', 9, 'Mantap Gan', '', '2020'),
('1131', 'e202wqa202002', 'awak@gmail.com', 2, 'Pilih prodi', 'Mabar', 12, 'sdsadad', '', '21231'),
('12345', 'e202wqa202002', 'kekeyi@gmail.com', 3, 'Pilih prodi', 'Kekeyi12', 13, 'Aku bukan bonekamu', '', '2019'),
('11319023', 'akuganteng', 'sinaga.rahul01@gmail.com', 1, 'Pilih prodi', 'Rahull', 14, 'karena aku ganteng', '', '2019'),
('11319000', 'mukdinganteng', 'mukdinganteng@gmail.com', 2, 'Pilih prodi', 'Mukdin', 15, 'karena mukdin ingin menghack NASA', '', '2019'),
('11319666', 'ganteng', 'fordin@gmail.com', 2, 'Pilih prodi', 'Fordin', 16, 'fordin ingin menghack nasa', '', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_delpro`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_delpro`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_peng`);

--
-- Indexes for table `perlombaan`
--
ALTER TABLE `perlombaan`
  ADD PRIMARY KEY (`id_perlombaan`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_peng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `perlombaan`
--
ALTER TABLE `perlombaan`
  MODIFY `id_perlombaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
