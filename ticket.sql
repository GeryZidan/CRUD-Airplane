-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 03:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` varchar(1) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('1', 'Tingkat 1'),
('2', 'Tingkat 2'),
('3', 'Tingkat 3'),
('4', 'Tingkat 4');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(7) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `tanggal_pemesanan` varchar(30) NOT NULL,
  `tempat_pemesanan` varchar(20) NOT NULL,
  `id_pelanggan` varchar(7) NOT NULL,
  `kode_kursi` varchar(10) NOT NULL,
  `id_rute` varchar(7) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tanggal_berangkat` varchar(30) NOT NULL,
  `jam_cekin` varchar(30) NOT NULL,
  `jam_berangkat` varchar(30) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `id_petugas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_pelanggan`, `kode_kursi`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `total_bayar`, `id_petugas`) VALUES
(25, '4l82OiH', '19/02/27', 'Bandung', '7570', 'fvWe', '4', 'Singapura', '2019-02-27', '06:00', '10:00', 670000, '2092635'),
(26, 'gyOB1ZW', '19/02/27', 'Bandung', '7570', 'aOq6', '1', 'Singapura', '2019-02-27', '06:00', '10:00', 700000, '2092635'),
(27, '4xN7JNt', '19/02/28', 'Singapura', '7570', 'mchP', '4', 'Singapura', '2019-02-28', '10:00', '11:00', 670000, '4892810'),
(28, 'YPuDhq1', '19/02/28', 'Bandung', '1098364', '1xnc', '5', 'Jepang', '2019-02-28', '10:00', '11:00', 600000, '3787763');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_penumpang` varchar(30) NOT NULL,
  `alamat_penumpang` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telepon`) VALUES
('1076539', 'rahasia', 'rahasia', 'Secret', 'Rahasia', '0000-00-00', 'L', '00000000001'),
('1098364', 'agi', 'agi', 'Rifqi Agi', 'Cibiru', '2002-01-07', 'L', '08976257186'),
('2837822', 'rifqi', 'rifqi', 'Agianto Rifki', 'Cileunyi', '2000-10-11', 'L', '08976257186'),
('4283908', 'zidane', '1234', 'Zidane Zidan', 'Pasir Jati', '2003-03-03', 'L', '0895334029390'),
('4829102', 'kamu', 'aku', 'Milea', 'Dirumah aku', '2001-05-20', 'P', '0828663178'),
('5556667', 'gery', 'nav', 'Gery', 'Cijambe', '2003-03-03', 'L', '08667357281'),
('6829182', '1234', '4321', 'Gary', 'Tokyo', '2002-02-07', 'L', '0828663178'),
('6969696', 'raze', 'raze', 'Fikcry', 'Cibiru', '2002-02-22', '?', '00000000001'),
('7982791', 'test', 'test', 'Grey', 'Cicadas', '2001-05-05', 'P', '0895334029321'),
('8790021', 'test2', 'test2', 'Zidan', 'Pasir Jati', '2002-07-07', 'L', '089533402932'),
('8902138', 'test', 'test', 'Zidan', 'Cicadas', '2002-02-07', 'P', '0895334029321'),
('9829301', 'aku', 'kamu', 'Dilan', 'Dirumah kamu', '2008-09-10', 'L', '08286638263'),
('9873918', 'user1', 'pass1', 'Leon Kennedy', 'Raccoon City', '2000-01-01', 'L', '0000000000'),
('9928178', 'test2', 'test2', 'Al', 'Pasir Jati', '2000-04-07', 'L', '089693402002');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
('1000283', 'admin', 'test1234', 'Gery Zidan', 1),
('2092635', 'admin2', 'test4321', 'Rifqi Agianto', 1),
('3787763', 'user', 'pass', 'Gray Al-Gifari', 2),
('4892810', 'user13', '7654321', 'Aganto Rivki', 3),
('5827368', 'aaaaab', 'lupak', 'Data Best', 2),
('7482690', 'aaagdkl', '8g79d', 'Ahmad Christian', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(10) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `rute_awal` varchar(30) NOT NULL,
  `rute_ahir` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_transportasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_ahir`, `harga`, `id_transportasi`) VALUES
(1, 'Jepang', 'Jakarta', 'Tokyo', 700000, 2),
(2, 'Vietnam', 'Yogyakarta', 'Ho Chi Minh', 600000, 5),
(3, 'Malaysia', 'Jakarta', 'Kuala Lumpur', 400000, 1),
(4, 'Singapura', 'Manado', 'Singapura', 670000, 4),
(5, 'Papua', 'Jakarta', 'Jayapura', 600000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_transportasi`
--

CREATE TABLE `tipe_transportasi` (
  `id_tipe_transportasi` int(10) NOT NULL,
  `nama_tipe` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_transportasi`
--

INSERT INTO `tipe_transportasi` (`id_tipe_transportasi`, `nama_tipe`, `keterangan`) VALUES
(1, 'First', 'Aktif'),
(2, 'Executive', 'Non-Aktif'),
(3, 'Economy', 'Aktif'),
(4, 'Indo Air', 'Aktif'),
(5, 'Special Air', 'Non-Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(10) NOT NULL,
  `kode` int(10) NOT NULL,
  `jumlah_kursi` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_tipe_transportasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_tipe_transportasi`) VALUES
(1, 5673, 240, 'Aktif', 3),
(2, 5627, 300, 'Non-Aktif', 4),
(3, 4342, 220, 'Aktif', 1),
(4, 4940, 330, 'Non-Aktif', 2),
(5, 7702, 400, 'Aktif', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tipe_transportasi`
--
ALTER TABLE `tipe_transportasi`
  ADD PRIMARY KEY (`id_tipe_transportasi`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe_transportasi`
--
ALTER TABLE `tipe_transportasi`
  MODIFY `id_tipe_transportasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
