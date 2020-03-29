-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 07:42 PM
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
  `masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goo`
--

INSERT INTO `goo` (`nomerr`, `nama`, `emaill`, `alamat`, `tanggal_pesan`, `tanggal_datang`, `tipe`, `masuk`) VALUES
(3, 'afi', 'afi@gmail.com', 'Malang sawojajar jl.danau rambutan 78', '2020-03-29', '2020-04-05', 'langsung', '2020-03-29 13:42:32'),
(4, 'ares', 'ares@gmial.com', 'Malang pakis jl.masuk no6', '2020-03-29', '2020-03-04', 'langsung', '2020-03-29 13:42:57'),
(5, 'ani', 'ani@gmail.com', 'Surabaya perumahan mawar no 7', '2020-03-29', '2020-04-03', 'langsung', '2020-03-29 13:38:49'),
(6, 'ali', 'li@gmail.com', 'Malang jln.ku no1', '2020-03-29', '2020-04-04', 'langsung', '2020-03-29 13:39:38'),
(7, 'fuh', 'fuh@gmail.com', 'Surabaya perumahan anwar no 7', '2020-03-29', '2020-04-04', 'langsung', '2020-03-29 13:40:24'),
(8, 'inda', 'inda@gmail.com', 'Malang', '2020-03-29', '2020-04-03', 'langsung', '2020-03-29 13:41:05'),
(9, 'ada', 'ada@gmail.com', 'kediri pare jl.keluar n09', '2020-03-29', '2020-04-05', 'langsung', '2020-03-29 13:41:49'),
(11, 'tur', 'attur@gmail.com', 'Malang sawojajar jl.batu ranau 2', '2020-03-29', '2020-04-02', 'transfer', '2020-03-29 17:20:46');

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
  MODIFY `nomerr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
