-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erakumdis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_unker`
--

CREATE TABLE `ref_unker` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `unker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_unker`
--

INSERT INTO `ref_unker` (`id`, `kode`, `unker`) VALUES
(1, '01', 'SEKRETARIAT DAERAH');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `no_tiket` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `skpd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`no_tiket`, `nip`, `nama`, `skpd`) VALUES
(1, '199608242022031004', 'Kurnia Sandy Pratama', 'BKD');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `no_tiket` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `satker` varchar(100) NOT NULL,
  `skpd` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `dokumen` varchar(5) NOT NULL,
  `surat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`no_tiket`, `tanggal`, `nip`, `nama`, `pangkat`, `jabatan`, `satker`, `skpd`, `status`, `keterangan`, `dokumen`, `surat`) VALUES
(1, '2022-10-19 16:00:00', '199608242022031004', 'KURNIA SANDY PRATAMA', 'III/a', 'PERANCANG SISTEM INFORMASI KEPEGAWAIAN', 'SUB BIDANG DATA DAN INFORMASI', 'BADAN KEPEGAWAIAN NEGARA', 'DITERIMA SKPD', 'BERKAS LENGKAP', 'OK', ''),
(2, '2022-10-20 16:00:00', '199608242022031004', 'DINA', 'III/a', 'AHLI PERTAMA - ARSIPARIS', 'BIDANG PENGELOLAAN KEARSIPAN', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'DITERIMA SKPD', '', '', ''),
(17, '2022-10-25 22:05:44', '199609022022032004', 'Dini Rahmadina', '', '', '', 'DINAS PERPUSTAKAAN DAN KEARSIPAN', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_unker`
--
ALTER TABLE `ref_unker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`no_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_unker`
--
ALTER TABLE `ref_unker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
