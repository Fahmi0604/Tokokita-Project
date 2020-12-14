-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `suplier` varchar(60) NOT NULL,
  `modal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `gambar`, `nama`, `jenis`, `suplier`, `modal`, `harga`, `jumlah`) VALUES
(2, '818136251_8a9f064e-6cf5-45a7-bdcb-aea338b914f6_1000_1000.jpg', 'TANGO', 'Makanan', 'PT. AGUNG ABDI', 2000, 3000, 2450),
(5, 'melon_pro.png', 'WAFER MELON', 'Makanan', 'PT. AGUNG ABDI', 2000, 3000, 1300),
(18, '81pSE4VgqbL._SL1500_.jpg', 'Oreo Cheese', 'Makanan', 'PT Mabisco', 1000, 2000, 500),
(19, 'Oreo_biru.jpg', 'Oreo', 'Makanan', 'PT Mabisco', 1000, 2000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `barang_beli`
--

CREATE TABLE `barang_beli` (
  `id` int(4) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `harga_beli` int(12) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `diskon` int(4) NOT NULL,
  `total_harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_beli`
--

INSERT INTO `barang_beli` (`id`, `tanggal_beli`, `nama_barang`, `harga_beli`, `jumlah`, `diskon`, `total_harga`) VALUES
(7, '2020-12-02', 'TANGO', 10000, 100, 5, 950000),
(8, '2020-12-02', 'TANGO', 10000, 100, 5, 950000),
(9, '2020-12-08', 'TANGO', 6000, 12, 5, 47500);

-- --------------------------------------------------------

--
-- Table structure for table `barang_laku`
--

CREATE TABLE `barang_laku` (
  `id` int(4) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `harga_jual` int(12) NOT NULL,
  `jumlah` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_laku`
--

INSERT INTO `barang_laku` (`id`, `tanggal_jual`, `nama_barang`, `harga_jual`, `jumlah`) VALUES
(18, '2020-12-01', 'TANGO', 4000, 10),
(21, '2020-12-14', 'WAFER MELON', 3000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `no_telp`, `alamat`) VALUES
(1212, 'PT Cinta Abadi', '082123123123', 'Malang '),
(1213, 'PT Barokah Abadi', '082111222333', 'Malang'),
(1216, 'Danone', '082111222333', 'Perancis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_beli`
--
ALTER TABLE `barang_beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_laku`
--
ALTER TABLE `barang_laku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `barang_beli`
--
ALTER TABLE `barang_beli`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `barang_laku`
--
ALTER TABLE `barang_laku`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
