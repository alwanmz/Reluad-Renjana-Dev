-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 03.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysqli_json`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nm_brg` varchar(100) NOT NULL,
  `hrg_brg` varchar(100) NOT NULL,
  `stok_brg` int(100) NOT NULL,
  `gbr_brg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`mem_id`, `name`, `email`, `number`, `address`, `nm_brg`, `hrg_brg`, `stok_brg`, `gbr_brg`) VALUES
(21, 'febi ganda putra', 'febigandapp@gmail.com', '081266823230', 'padang', 'Buku', '50000', 2, 'buku.jpg'),
(22, 'rexa bangkit banyu raga', 'xaxa@gmail.com', '081398736452', 'bandung', 'sepeda', '500000', 1, 'sepeda.jpg'),
(23, 'alwan maulana zidane', 'wawanmx@gmail.com', '087765334982', 'magetan', 'Lemari', '200000', 1, 'lemari.jpg'),
(24, 'darlian ramadhani', 'darliantc@gmail.com', '089965784432', 'pasuruan', 'Laptop', '3000000', 1, 'laptop.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
