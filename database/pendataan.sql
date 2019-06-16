-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 05:43 AM
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
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(4) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `deskripsi`, `mulai`, `selesai`, `tempat`, `waktu`, `keterangan`) VALUES
(3, 'uas', 'uas', '2019-01-07', '2019-01-07', 'upt itk', '10:30', 'uas');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `usia` int(11) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `pendidikan` varchar(250) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `usia_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(250) NOT NULL,
  `alamat_ayah` varchar(250) NOT NULL,
  `pendidikan_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `usia_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(250) NOT NULL,
  `alamat_ibu` varchar(250) NOT NULL,
  `pendidikan_ibu` varchar(250) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `nama`, `usia`, `pekerjaan`, `alamat`, `pendidikan`, `nama_ayah`, `usia_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `pendidikan_ayah`, `nama_ibu`, `usia_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `pendidikan_ibu`, `twitter`) VALUES
(22, 'asd', 2, 'asd', 'asd', 'asd', 'qwe', 2, 'qwe', 'qwe', 'qwe', 'wer', 3, 'wer', 'wer', 'wer', 'asd1'),
(24, 'asd', 2, 'sad', 'sada', 'asd', 'qwe', 2, 'ae', 'qwe', 'asd', 'hj', 4, 'hkj', 'jhk', 'jk', 'tiwitter@');

-- --------------------------------------------------------

--
-- Table structure for table `saudara`
--

CREATE TABLE `saudara` (
  `id_saudara` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `nama_saudara` varchar(250) NOT NULL,
  `usia_saudara` int(11) NOT NULL,
  `pendidikan_saudara` varchar(250) NOT NULL,
  `pekerjaan_saudara` varchar(250) NOT NULL,
  `alamat_saudara` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saudara`
--

INSERT INTO `saudara` (`id_saudara`, `id_keluarga`, `nama_saudara`, `usia_saudara`, `pendidikan_saudara`, `pekerjaan_saudara`, `alamat_saudara`) VALUES
(26, 22, 'qwea', 4, 'asd', 'qew', 'asd'),
(29, 22, 'baru', 5, 'sd', 'asd', 'asd'),
(31, 24, 'qwe', 2, 'hj', 'hj', 'kl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `ibox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'TI', '2019-01-05 07:23:25'),
(2, 'ELKA', '2019-01-05 07:23:33'),
(3, 'LISTRIK', '2019-01-05 07:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_web` varchar(100) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` int(2) DEFAULT '0',
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(200) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(250) DEFAULT NULL,
  `tulisan_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_views`, `tulisan_gambar`, `id_user`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(4, 'test', '', '2019-01-09 02:01:26', 1, 0, '-', 2, 0, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `moto` text NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `tentang` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkdin` varchar(50) NOT NULL,
  `google_plus` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `moto`, `jenkel`, `tentang`, `email`, `no_hp`, `facebook`, `twitter`, `linkdin`, `google_plus`, `status`, `photo`, `register`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '-', 'Laki-laki', '-', 'asd@asd.asd', '123', '-', '-', '-', '-', 1, '4484a986cc37a6471d4acd43e9d70313.jpg', '2019-01-07 15:03:35'),
(2, 'baru', '99428a3b77b16fe93dbf980fbf75517b', 'baru', 'author', '-', 'Perempuan', '-', 'baru@mail.com', 'baru', '-', '-', '-', '-', 1, 'c7cc6cfd16329fb9e9660794e37cf391.jpg', '2019-01-08 02:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `saudara`
--
ALTER TABLE `saudara`
  ADD PRIMARY KEY (`id_saudara`),
  ADD KEY `id_keluarga` (`id_keluarga`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`id_user`),
  ADD KEY `tulisan_pengguna_id_2` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `saudara`
--
ALTER TABLE `saudara`
  MODIFY `id_saudara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `saudara`
--
ALTER TABLE `saudara`
  ADD CONSTRAINT `saudara_ibfk_1` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id_keluarga`);

--
-- Constraints for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD CONSTRAINT `tbl_tulisan_ibfk_1` FOREIGN KEY (`tulisan_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`),
  ADD CONSTRAINT `tbl_tulisan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
