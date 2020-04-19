-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:28 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `emaill` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `emaill`, `subject`, `time`) VALUES
(10, 'fiky', 'fi@gmail.com', 'terimakasi  barangnya udah sampai', '2020-04-11 04:17:01'),
(11, 'akbar', 'akbar@gmail.com', 'diskon hingga 70% ?????????????????', '2020-04-11 04:33:57'),
(12, 'your name', 'your email', 'write ', '2020-04-11 05:15:50'),
(14, 'Deasy', 'deasy@gmail.com', 'Terimakasih kepada BUKUKU STORE atas pembelian buku ini kerena saya sudah mencari dibeberapa toko buku tapi tidak ada.', '2020-04-16 01:21:39'),
(15, 'ouuu', 'uo@gmail.com', 'Buku sudah saya terima , terimkasih', '2020-04-16 01:23:02'),
(16, 'nasi', 'nasi@gmail.com', 'terimaksih', '2020-04-16 06:06:52'),
(17, 'anisa', 'anisa@gmail.com', 'terimakasij', '2020-04-16 06:26:36'),
(18, 'Nanu', 'nanu@gmail.com', 'terimaksih', '2020-04-16 07:24:05'),
(19, 'nanus', 'us@gmail.com', 'terimaksi barangnya stelah sampai', '2020-04-16 07:26:15'),
(20, 'desy', 'desy@gmail.com', 'terimakasih barang teakh sampai', '2020-04-16 07:44:32'),
(21, 'desay', 'afi@gmail.com', 'terimaksih barangnya telah sampapi', '2020-04-16 07:46:13'),
(22, 'desyy', 'desyy@gamil.com', 'terimakasih barangnya telah sampai', '2020-04-16 07:47:14'),
(23, 'ato', 'ato@gmail.com', 'terimakasih', '2020-04-16 08:14:50'),
(24, 'masi', 'masi@gmail.com', 'terimakasih', '2020-04-16 08:27:25'),
(25, 'hu', 'hu@gmail.com', 'terimakasih', '2020-04-16 08:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
