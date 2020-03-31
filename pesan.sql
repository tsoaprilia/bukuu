-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 03:10 PM
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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `nomer` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `emaill` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `o1` int(100) NOT NULL,
  `o2` int(100) NOT NULL,
  `o3` int(100) NOT NULL,
  `o4` int(100) NOT NULL,
  `o5` int(100) NOT NULL,
  `o6` int(100) NOT NULL,
  `o7` int(100) NOT NULL,
  `o8` int(100) NOT NULL,
  `o9` int(100) NOT NULL,
  `o10` int(100) NOT NULL,
  `o11` int(100) NOT NULL,
  `o12` int(100) NOT NULL,
  `o13` int(100) NOT NULL,
  `o14` int(100) NOT NULL,
  `o15` int(100) NOT NULL,
  `o16` int(100) NOT NULL,
  `o17` int(100) NOT NULL,
  `o18` int(100) NOT NULL,
  `o19` int(100) NOT NULL,
  `o20` int(100) NOT NULL,
  `o21` int(100) NOT NULL,
  `o22` int(100) NOT NULL,
  `o23` int(100) NOT NULL,
  `o24` int(100) NOT NULL,
  `o25` int(100) NOT NULL,
  `o26` int(100) NOT NULL,
  `o27` int(100) NOT NULL,
  `o28` int(100) NOT NULL,
  `o29` int(100) NOT NULL,
  `o30` int(100) NOT NULL,
  `o31` int(100) NOT NULL,
  `o32` int(100) NOT NULL,
  `o33` int(100) NOT NULL,
  `o34` int(100) NOT NULL,
  `o35` int(100) NOT NULL,
  `o36` int(100) NOT NULL,
  `o37` int(100) NOT NULL,
  `diskon` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`nomer`, `nama`, `emaill`, `alamat`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `o7`, `o8`, `o9`, `o10`, `o11`, `o12`, `o13`, `o14`, `o15`, `o16`, `o17`, `o18`, `o19`, `o20`, `o21`, `o22`, `o23`, `o24`, `o25`, `o26`, `o27`, `o28`, `o29`, `o30`, `o31`, `o32`, `o33`, `o34`, `o35`, `o36`, `o37`, `diskon`, `total`, `bayar`) VALUES
(17, 'afi', 'afi@gmail.com', 'Malang', 1, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 1, 234800, 1174000, 939200),
(18, 'ares', 'ares@gmial.com', 'Malang', 0, 0, 0, 0, 0, 0, 15, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 1432000, 3580000, 2148000),
(19, 'ani', 'ani@gmail.com', 'surabaya', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50000, 285000, 235000),
(21, 'ali', 'li@gmail.com', 'Malang', 0, 0, 0, 2, 0, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 270000, 1350000, 1080000),
(22, 'fuh', 'fuh@gmail.com', 'surabaya', 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 50000, 473000, 423000),
(23, 'inda', 'inda@gmail.com', 'Malang', 7, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 499800, 1666000, 1166200),
(24, 'ada', 'ada@gmail.com', 'kediri', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50000, 98000, 48000),
(25, 'tur', 'attur@gmail.com', 'Malang', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 258800, 1294000, 1035200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `nomer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
