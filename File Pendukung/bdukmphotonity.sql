-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 05:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdukmphotonity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anggotaukm`
--

CREATE TABLE `anggotaukm` (
  `nim` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calonanggota`
--

CREATE TABLE `calonanggota` (
  `nim` int(10) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `divisi` varchar(40) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `notlp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pelatihan`
--

CREATE TABLE `hasil_pelatihan` (
  `idhasil` int(10) NOT NULL,
  `hasilpelatihan` varchar(100) NOT NULL,
  `narasi` varchar(100) NOT NULL,
  `tanggalpelatihan` varchar(40) NOT NULL,
  `nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `idlomba` int(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `nopeserta` int(10) NOT NULL,
  `cabanglomba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `jenispelatihan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesertalomba`
--

CREATE TABLE `pesertalomba` (
  `nopeserta` int(10) NOT NULL,
  `namapeserta` varchar(100) NOT NULL,
  `instansi/komunitas` varchar(50) NOT NULL,
  `notlpn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id_voting` int(10) NOT NULL,
  `hasilvoting` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `anggotaukm`
--
ALTER TABLE `anggotaukm`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `calonanggota`
--
ALTER TABLE `calonanggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `hasil_pelatihan`
--
ALTER TABLE `hasil_pelatihan`
  ADD PRIMARY KEY (`idhasil`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`idlomba`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nopeserta` (`nopeserta`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `pesertalomba`
--
ALTER TABLE `pesertalomba`
  ADD PRIMARY KEY (`nopeserta`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id_voting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_pelatihan`
--
ALTER TABLE `hasil_pelatihan`
  MODIFY `idhasil` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesertalomba`
--
ALTER TABLE `pesertalomba`
  MODIFY `nopeserta` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id_voting` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_pelatihan`
--
ALTER TABLE `hasil_pelatihan`
  ADD CONSTRAINT `hasil_pelatihan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `anggotaukm` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `anggotaukm` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lomba_ibfk_2` FOREIGN KEY (`nopeserta`) REFERENCES `pesertalomba` (`nopeserta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
