-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 02:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalbisnisup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `is_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `email`, `password`, `is_aktif`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `comment` text NOT NULL,
  `nama_usaha` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `uid`, `id_usaha`, `comment`, `nama_usaha`) VALUES
(51, 1, 10, 'bohong', 'Packetin'),
(52, 1, 25, 'bohong banget', 'GoDesain');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_usaha` varchar(100) NOT NULL,
  `layanan` text NOT NULL,
  `instagram` varchar(55) NOT NULL,
  `facebook` varchar(55) NOT NULL,
  `telegram` varchar(55) NOT NULL,
  `whatsapp` varchar(55) NOT NULL,
  `kontak` varchar(55) NOT NULL,
  `kategori` int(55) NOT NULL,
  `lokasi` varchar(55) NOT NULL,
  `id_ulasan` int(11) NOT NULL,
  `owner` varchar(55) NOT NULL,
  `waktu_kerja` varchar(55) NOT NULL,
  `id_report` int(11) NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `uid`, `nama_usaha`, `deskripsi`, `foto_usaha`, `layanan`, `instagram`, `facebook`, `telegram`, `whatsapp`, `kontak`, `kategori`, `lokasi`, `id_ulasan`, `owner`, `waktu_kerja`, `id_report`, `twitter`) VALUES
(10, 1, 'Packetin', 'Jasa kirimin', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/1_(2)1.jpg', 'Jasa', 'packetinofficial', '', '', '083843670707', '', 0, 'Area Simprug', 0, 'Team Packetin', '', 0, ''),
(21, 1, 'Pisang Dancok', 'Menjual Pisang dan Coklat', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/PisangCoklat.jpg', 'Makanan/Minuman', 'pisdancok', '', '', '083843670707', '', 1, 'Gedung GL Lantai 5', 0, 'Team Pisdancok', '', 0, ''),
(22, 1, 'NoLap', 'Menjual Laptop bekas murah berkualitas', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/b1.jpg', 'Barang', 'nolap.id', '', '', '083843670707', '', 2, 'Jalan MM No. 5, Kebonjeruk', 0, 'Team Nolap', '', 0, ''),
(24, 1, 'GoodFood', 'Menjual makanan dengan harga terjangkau untuk Mahasiswa. Rasa Dijamin Mantappp!', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/goodfood.jpg', 'Makanan/Minuman', 'imgoodfood', '', '', '083843670707', '', 1, 'Jl. Nuh 1 No.2', 0, 'Team Goodfood', '', 0, ''),
(25, 1, 'GoDesain', 'Menerima jasa desain logo, poster, dlsb', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/pencil.jpg', 'Jasa', 'godesainindo', '', '', '083843670707', '', 0, 'Jalan MM No. 5, Kebonjeruk', 0, 'Team Godesain', '', 0, ''),
(26, 1, 'Coffe Do', 'Menjual Kopi hitam khas Jawa Tengah', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/cofee.jpg', 'Makanan/Minuman', 'coffedo', '', '', '083843670707', '', 1, 'Jl. Musa No. 9', 0, 'Team Coffedo', '', 0, ''),
(27, 1, 'Alatku', 'Menjual alat tulis untuk mahasiswa dan dosen', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/alattulis.jpg', 'Barang', 'alatku.official', '', '', '083843670707', '', 2, 'Gedung GL Lantai 5', 0, 'Team Alatku', '', 0, ''),
(28, 2, 'Portal Bisnis UP', 'platform untuk mendukung iklim berwirausaha di kalangan mahasiswa UP', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/1_good_one.png', 'Lainnya', 'portalbisnisup', '', '', '083843670707', '', 99, 'Gedung GL Lantai 5', 0, 'Team PortalBisnisUP', '', 0, ''),
(29, 1, 'tes', 'tes', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/1_good_one1.png', 'Makanan/Minuman', '', '', '', '', '', 1, '', 0, '', '', 0, ''),
(30, 1, 'tes', 'tes', 'http://localhost/portal-bisnis-up/assets/FotoUsaha/1_good_one2.png', 'Lainnya', '', '', '', '', '', 99, '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `telephone` varchar(55) NOT NULL,
  `photo_profile` varchar(100) NOT NULL,
  `upload_ktm` varchar(100) NOT NULL,
  `is_aktif` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `nama`, `email`, `password`, `telephone`, `photo_profile`, `upload_ktm`, `is_aktif`, `date_created`) VALUES
(1, 'M. Rais Rindo', 'raisrindo@gmail.com', 'raisrindo', '083843670707', 'http://localhost/portal-bisnis-up/assets/Profile_Picture/Mad11.jpg', 'http://localhost/portal-bisnis-up/assets/UserKTM/ktm.jpeg', 1, '2020-11-24 07:14:25'),
(2, 'tes', 'tes@gmail.com', 'raisrindo', '0', 'http://localhost/portal-bisnis-up/assets/Profile_Picture/default.png', 'http://localhost/portal-bisnis-up/assets/UserKTM/ktm1.jpeg', 0, '2020-11-25 00:53:03'),
(3, 'Ahmad', 'tes3@gmail.com', 'raisrindo', '0', 'http://localhost/portal-bisnis-up/assets/Profile_Picture/Mad12.jpg', 'http://localhost/portal-bisnis-up/assets/UserKTM/ktm2.jpeg', 0, '2020-11-25 02:09:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
