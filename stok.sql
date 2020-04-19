-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:32 PM
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
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `nomer` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`nomer`, `judul`, `harga`, `jumlah`) VALUES
(1, 'BRINGING UP BEBE', 100000, 890),
(2, 'MOZAIK TERINDAH', 98000, 0),
(3, 'KAMU TERLALU BANYAK BERCANDA', 125000, 1),
(4, 'GANJIL GENAP', 95000, 7),
(5, 'HABIBIE DAN SOEHARTO', 98000, 0),
(6, 'HEART SHAPED TEARS', 98000, 1),
(7, 'SENJA PAGI', 125000, 17),
(8, 'KATA', 125000, 13),
(9, ' BAHAGIA MAKSIMAL DENGAN HIDUP MINIMAL', 98000, 10),
(10, 'AKU SEORANG INTROVER', 98000, 0),
(11, 'ARE YOU THE ONE', 125000, 0),
(12, 'SENI HIDUP BAHAGIA DENGAN BERFIKIR POSITIF', 95000, 3),
(13, 'BERANI RESIGN!', 98000, 0),
(14, 'TERANG DIBENDERA NEGERI', 98000, 0),
(15, 'HIPNOTIS UNUTK KEHIDUPAN SEHARI HARI', 125000, 0),
(16, 'LIFE IN MY HAND', 125000, 0),
(17, ' ALLETA', 98000, 34),
(18, 'ERENS PLAY', 98000, 0),
(19, 'MEMAHAMI UNTUK MEMANFAATKAN', 125000, 0),
(20, 'SURAT KOPI', 98000, 0),
(21, 'MELINTASI BATAS', 98000, 0),
(22, 'TALIJIWO', 125000, 0),
(23, 'PERBINCANGAN TERAKHIR', 95000, 0),
(24, 'PEMETIK MIMPI', 98000, 0),
(25, 'THE CHOISE WE MAKE', 98000, 2),
(26, 'EASY GRAMMAR FOR BEGINNER', 98000, 0),
(27, '3 BHASA:KAMUS BERGAMBAR SUPER GENIUS', 98000, 0),
(28, 'LETS SPEAK', 125000, 0),
(29, 'SEMANTIK', 110000, 0),
(30, ' MESIN LISTRIK ARUS BOLAK BALIK', 110000, 0),
(31, 'TEKNOLOGI PERBAIKAN TANAH', 110000, 3),
(32, 'SEMIKONDUKTOR', 110000, 0),
(33, 'PEMROGRAMAN MATLAB', 110000, 4),
(34, 'APLIKASI TEKNOLOGI KUANTUM', 125000, 12),
(35, 'SYNTESA POLY LACTID ACID', 125000, 1),
(36, 'REKAYASA LALU LINTAS', 125000, 2),
(42, 'Kereta Cepat', 125000, 9),
(43, 'kepadamu', 98000, 6),
(44, 'mausjj', 232435, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `nomer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
