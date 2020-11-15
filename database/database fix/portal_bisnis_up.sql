-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:11 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_bisnis_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(30) NOT NULL,
  `is_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) UNSIGNED NOT NULL,
  `id_usaha` int(11) UNSIGNED NOT NULL,
  `uid` int(11) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `id_usaha`, `uid`, `comment`) VALUES
(1, 0, 8, 'Usaha palsu dan telah menipu konsumen');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `ratings` int(5) NOT NULL,
  `id_usaha` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(11) UNSIGNED NOT NULL,
  `uid` int(11) UNSIGNED NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_usaha` varchar(80) NOT NULL,
  `layanan` text NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `kontak` varchar(25) NOT NULL,
  `id_ulasan` int(20) UNSIGNED DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `waktu_kerja` varchar(20) NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `whatsapp` varchar(25) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `uid`, `nama_usaha`, `deskripsi`, `foto_usaha`, `layanan`, `instagram`, `facebook`, `kontak`, `id_ulasan`, `lokasi`, `owner`, `waktu_kerja`, `telegram`, `whatsapp`, `twitter`) VALUES
(0, 7, 'Maleotech', 'IT expertise is our passion. And the whole passion is used when designing and implementing IT solutions to help your business stakeholders get the right “tool” in decision making. Besides, our IT solutions can optimize your costs effectively and efficiently so that high productivity can be achieved maximally.\r\nMaleo technologies also have a mission to empower young talents with the potential to be able to have world-class capabilities.', 'gambar.jpg', '-ENTERPRISE SOLUTION\r\n-FINANCIAL TECHNOLOGY\r\n-MOBILE APPLICATION?', '@maleotech.id', '@maleotech.id', '089602979817', NULL, 'Green Office Park 6 Wing A, V-Office, Suite B.06,  Jl. BSD Green Office Park Cisauk, Tangerang Selatan, Banten, 15345', 'Jirun Corporation', '10.00 - 20.00', '@maleotech.id', '089602979817', '@maleotech.id');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `telephone` varchar(55) NOT NULL,
  `photo_profile` varchar(80) NOT NULL,
  `upload_ktm` varchar(80) NOT NULL,
  `is_aktif` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `nama`, `email`, `password`, `telephone`, `photo_profile`, `upload_ktm`, `is_aktif`, `date_created`) VALUES
(7, 'faiz', 'fajar77@gmail.com', 'jirun', '893247323', '', '', 0, '0000-00-00'),
(8, 'fajar', 'fajarfa77@gmail.com', 'jirun77', '08932473237', 'gambar.jpg', 'ktm.jpg', 1, '2020-11-14');

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
  ADD PRIMARY KEY (`id_report`),
  ADD UNIQUE KEY `id_usaha` (`id_usaha`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `id_ulasan` (`id_ulasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id_usaha`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id_usaha`);

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `usaha_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `usaha_ibfk_2` FOREIGN KEY (`id_ulasan`) REFERENCES `review` (`id_review`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
