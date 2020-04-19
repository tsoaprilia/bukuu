-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `goo`
--

CREATE TABLE `goo` (
  `nomerr` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `emaill` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_datang` date NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl` date NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `pengantar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goo`
--

INSERT INTO `goo` (`nomerr`, `nama`, `emaill`, `alamat`, `tanggal_pesan`, `tanggal_datang`, `tipe`, `masuk`, `tgl`, `bayar`, `pengantar`) VALUES
(2, 'ali', 'li@gmail.com', 'Malang jln.ku no1', '2020-03-29', '2020-04-04', 'langsung', '2020-04-15 14:31:44', '2020-03-03', 'lunas', 'Andi pur'),
(3, 'fuh', 'fuh@gmail.com', 'Surabaya perumahan anwar no 7', '2020-03-29', '2020-04-04', 'langsung', '2020-04-15 14:34:51', '2020-03-02', 'lunas', 'Ajax'),
(4, 'inda', 'inda@gmail.com', 'Malang', '2020-03-29', '2020-04-03', 'langsung', '2020-04-15 14:35:25', '2020-03-03', 'lunas', 'ajax'),
(5, 'ada', 'ada@gmail.com', 'kediri pare jl.keluar n09', '2020-03-29', '2020-04-05', 'langsung', '2020-04-15 14:34:06', '2020-03-03', 'lunas', 'kenan hut'),
(6, 'tur', 'attur@gmail.com', 'Malang sawojajar jl.batu ranau 2', '2020-03-29', '2020-04-02', 'transfer', '2020-04-15 14:33:24', '2020-03-02', 'lunas', 'Andi pur'),
(7, 'hapu', 'up@gmail.com', 'tulungagung,jln manggis no.12', '2020-03-29', '2020-04-04', 'transfer', '2020-04-15 14:32:30', '2020-03-03', 'lunas', 'kenan hut'),
(8, 'sani', 'sani@gmail.com', 'malang pasuruhan jln.masuk no1', '2020-04-16', '2020-04-21', 'transfer', '2020-04-16 06:35:32', '2020-04-20', 'lunas', 'Andi p'),
(9, 'ita', 'ita@gmail.com', 'Malng sawojajr jl.pintu no1', '2020-04-16', '2020-04-20', 'transfer', '2020-04-16 07:51:38', '2020-03-03', 'lunas', 'Andi p'),
(10, 'masuk', 'masuk@gmail.com', 'maslng pasuruhan', '2020-08-19', '0000-00-00', 'langsung', '2020-04-16 08:36:19', '0000-04-08', 'lunas', 'Andi p'),
(11, 'naik', 'naik@gmail.com', 'Malang sawojajar jl.batu ranau 2', '2020-04-29', '0000-00-00', 'transfer', '2020-04-16 07:49:24', '0000-00-00', '', ''),
(12, 'hu', 'hu@gmail.com', 'Malang sawojajar jl.batu ranau 2', '2020-04-16', '2020-04-30', 'langsung', '2020-04-16 08:33:54', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goo`
--
ALTER TABLE `goo`
  ADD PRIMARY KEY (`nomerr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goo`
--
ALTER TABLE `goo`
  MODIFY `nomerr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
