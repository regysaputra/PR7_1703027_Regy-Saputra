-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2019 pada 13.53
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kereta_join`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gerbong`
--

CREATE TABLE `gerbong` (
  `kd_gerbong` varchar(50) NOT NULL,
  `kd_kereta` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gerbong`
--

INSERT INTO `gerbong` (`kd_gerbong`, `kd_kereta`, `nama`) VALUES
('GRB0001', 'KRT0002', 'A01'),
('GRB0002', 'KRT0002', 'B01'),
('GRB0003', 'KRT0003', 'C01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `kd_kursi` varchar(50) NOT NULL,
  `kd_gerbong` varchar(50) NOT NULL,
  `kd_kereta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`kd_kursi`, `kd_gerbong`, `kd_kereta`) VALUES
('KRS0001', 'GRB0001', 'KRT0001'),
('KRS0002', 'GRB0001', 'KRT0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokomotif`
--

CREATE TABLE `lokomotif` (
  `kd_kereta` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokomotif`
--

INSERT INTO `lokomotif` (`kd_kereta`, `nama`) VALUES
('KRT0001', 'Argo Wilis'),
('KRT0002', 'MALABAR'),
('KRT0003', 'KURTOJOYO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gerbong`
--
ALTER TABLE `gerbong`
  ADD PRIMARY KEY (`kd_gerbong`),
  ADD KEY `fk_gerbong_lokomotif` (`kd_kereta`);

--
-- Indeks untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`kd_kursi`),
  ADD KEY `fk_kursi_gerbong` (`kd_gerbong`),
  ADD KEY `fk_kursi_kereta` (`kd_kereta`);

--
-- Indeks untuk tabel `lokomotif`
--
ALTER TABLE `lokomotif`
  ADD PRIMARY KEY (`kd_kereta`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gerbong`
--
ALTER TABLE `gerbong`
  ADD CONSTRAINT `fk_gerbong_lokomotif` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `fk_kursi_gerbong` FOREIGN KEY (`kd_gerbong`) REFERENCES `gerbong` (`kd_gerbong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kursi_kereta` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
