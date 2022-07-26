-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 12:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `jenis_kelamin` set('pria','wanita') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_karyawan` varchar(100) DEFAULT NULL,
  `no_karyawan` int(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jenis_kelamin`, `tgl_lahir`, `alamat_karyawan`, `no_karyawan`, `username`, `password`) VALUES
(1, 'Sheffia ', 'wanita', '1979-02-01', 'xxxcx', 891234567, 'sheffia', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(10) NOT NULL,
  `nama_layanan` varchar(50) DEFAULT NULL,
  `harga_layanan` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `harga_layanan`) VALUES
(1, 'Cuci', 5000),
(2, 'Setrika', 3000),
(3, 'Cuci Setrika', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `alamat_pelanggan` varchar(100) DEFAULT NULL,
  `no_pelanggan` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `no_pelanggan`) VALUES
(1, 'satria', 'palembang', 763764);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(10) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_layanan` int(11) NOT NULL,
  `berat` int(20) DEFAULT NULL,
  `harga` int(30) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `estimasi` date DEFAULT NULL,
  `tot_harga` int(30) DEFAULT NULL,
  `status` set('proses','selesai') DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `id_pelanggan`, `id_layanan`, `berat`, `harga`, `tgl_masuk`, `estimasi`, `tot_harga`, `status`, `keterangan`) VALUES
(13, 1, 3, 5, 35000, '2022-07-12', '2022-07-13', 35000, 'proses', 'sdfsdf'),
(16, 1, 0, 2, 14000, '2022-07-26', '2022-07-27', 6000, 'proses', 'dsfsf'),
(18, 1, 0, 3, 0, '2022-07-07', '2022-07-15', 3453, 'proses', 'sgsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(10) NOT NULL,
  `id_penerimaan` int(10) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `tot_harga` int(30) DEFAULT NULL,
  `diskon` int(30) DEFAULT NULL,
  `tot_bayar` int(30) DEFAULT NULL,
  `status` enum('lunas','nyicil') DEFAULT NULL,
  `id_karyawan` int(20) DEFAULT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `id_group` int(11) DEFAULT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `jns_kelamin` varchar(50) DEFAULT NULL,
  `no_tlp` int(20) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_group`, `nama_user`, `jns_kelamin`, `no_tlp`, `Username`, `Password`) VALUES
(1, 1, 'Veny Angelina', 'wanita', 2147483647, 'admin', 'admin'),
(2, 2, 'Sheffia A', 'wanita', 891234567, 'sheffia', 'a'),
(3, 2, 'Veni', 'wanita', 2147483647, 'veni', 'a'),
(4, 2, 'Veni', 'pria', 2147483647, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_group` int(11) NOT NULL,
  `nama_group` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_group`, `nama_group`) VALUES
(1, 'Admin'),
(2, 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_layanan` (`id_pelanggan`),
  ADD KEY `layanan` (`id_layanan`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerimaan` (`id_penerimaan`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `pengembalian` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_penerimaan`) REFERENCES `penerimaan` (`id`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id_group` FOREIGN KEY (`id_group`) REFERENCES `user_group` (`id_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
