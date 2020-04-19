-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 05:30 PM
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
-- Table structure for table `kunjung`
--

CREATE TABLE `kunjung` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kunci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjung`
--

INSERT INTO `kunjung` (`username`, `email`, `kunci`) VALUES
('acel', 'cel@gmail.com', ' 123'),
('ana', 'ana@gmail.com', ' ana'),
('aprilia', 'aprilia@gmail.com', ' aprilia'),
('Apriliadc', 'aprilia@gmail.com', ' 123'),
('ata', 'ata@gmail.com', ' ata'),
('bahtera', 'bahtera@gmail.com', ' soke'),
('devi', 'devi@gmail.com', ' 123'),
('hapu', 'up@gmail.com', ' hapu'),
('homa', 'homa@gmail.com', ' homa'),
('hu', 'hu@gmail.com', ' hu'),
('ita', 'ita@gmail.com', ' ita'),
('ju', 'ju@gmail.com', ' ju'),
('juu', 'ju@gmail.com', ' juu'),
('masuk', 'masuk@gamil.com', ' masuk'),
('naik', 'naik@gmail.com', ' naik'),
('nasi', 'nasi@gmail.com', ' nasi'),
('nise', 'ise@gmail.com', ' ise'),
('qia', 'q@gmail.com', ' g'),
('sani', 'sani@gmail.com', ' sani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjung`
--
ALTER TABLE `kunjung`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
