-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2025 pada 19.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursakopi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maxdata`
--

CREATE TABLE `maxdata` (
  `id` int(10) NOT NULL,
  `max` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maxdata`
--

INSERT INTO `maxdata` (`id`, `max`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(2) NOT NULL,
  `founder` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `founder`, `description`, `address`, `no_telp`, `email`) VALUES
(1, 'Alex', 'SPIN International', 'Kedoya', '123456789012345', 'ab@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cellphone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `maxdata`
--
ALTER TABLE `maxdata`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
