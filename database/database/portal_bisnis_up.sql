-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 04:44 PM
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
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) UNSIGNED NOT NULL,
  `id_usaha` int(11) UNSIGNED NOT NULL,
  `uid` int(11) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `ratings` point NOT NULL,
  `id_usaha` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(11) UNSIGNED NOT NULL,
  `uid` int(11) UNSIGNED NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_usaha` varchar(80) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `kontak` int(25) NOT NULL,
  `id_ulasan` int(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `waktu_kerja` time NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `whatsapp` int(25) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `telephone` int(20) NOT NULL,
  `photo_profile` varchar(80) NOT NULL,
  `upload_ktm` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
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
