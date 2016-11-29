-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Nov 2016 pada 12.57
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(12) NOT NULL,
  `id_pemilik` int(12) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `info_barang` varchar(255) DEFAULT NULL,
  `harga_sewa` int(12) DEFAULT NULL,
  `harga_beli` int(12) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_pemilik`, `kategori`, `nama_barang`, `gambar`, `info_barang`, `harga_sewa`, `harga_beli`, `status`) VALUES
('1', 2, '', 'Gaun Pengantin', 'Gaun-Pengantin', 'Sewa Gaun pengantin', 100000, 0, 1),
('2', 1, '', 'Sepeda motor matic', 'Sepeda Motor Matic', 'Sewa Sepeda Motor Matic', 250000, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sewa`
--

CREATE TABLE `detail_sewa` (
  `id_sewa` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_user`
--

CREATE TABLE `detail_user` (
  `id_pengguna` int(12) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `info` varchar(255) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_user`
--

INSERT INTO `detail_user` (`id_pengguna`, `nama`, `email`, `no_telp`, `alamat`, `info`, `lat`, `lng`, `username`, `password`) VALUES
(1, 'miin', '', '0341', 'lokasi', 'info', -7.956105, 112.590637, 'user', 'pass'),
(2, 'Bun House', '', '0341876621', 'Jalan Hamid Rusdi No.9, Bunulrejo, Blimbing', 'Menyediakan makanan cepat saji enak dan bergizi', -7.971016, 112.644165, 'bun', '123456'),
(3, 'Tirtasari Trans', '', '085293848123', 'Jl. Tirtasari Raya II No. 17', 'Melayani segala kebutuhan transportasi anda', -8.006725, 112.611206, 'tirtasari', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(12) NOT NULL,
  `id_pelapor` int(12) NOT NULL,
  `id_pengguna` int(12) NOT NULL,
  `laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` varchar(12) NOT NULL,
  `id_penyedia` int(12) NOT NULL,
  `id_penyewa` int(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan_barang`
--

CREATE TABLE `ulasan_barang` (
  `id_sewa` varchar(12) NOT NULL,
  `id_pengulas` int(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan_pengguna`
--

CREATE TABLE `ulasan_pengguna` (
  `id_sewa` varchar(12) NOT NULL,
  `id_pengulas` int(12) NOT NULL,
  `id_pengguna` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('andi', 'admin'),
('monika', 'admin'),
('indrawati', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pemilik` (`id_pemilik`),
  ADD KEY `id_pemilik_2` (`id_pemilik`);

--
-- Indexes for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_sewa_2` (`id_sewa`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_sewa_3` (`id_sewa`),
  ADD KEY `id_barang_3` (`id_barang`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_user` (`id_pengguna`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_pelapor` (`id_pelapor`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_penyedia` (`id_penyedia`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_penyewa_2` (`id_penyewa`),
  ADD KEY `id_penyedia_2` (`id_penyedia`),
  ADD KEY `id_sewa_2` (`id_sewa`);

--
-- Indexes for table `ulasan_barang`
--
ALTER TABLE `ulasan_barang`
  ADD KEY `id_pengulas` (`id_pengulas`),
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `ulasan_pengguna`
--
ALTER TABLE `ulasan_pengguna`
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_pengguna_2` (`id_pengguna`),
  ADD KEY `id_pengulas` (`id_pengulas`),
  ADD KEY `id_pengguna_3` (`id_pengguna`),
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `detail_user` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD CONSTRAINT `detail_sewa_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `detail_sewa_ibfk_2` FOREIGN KEY (`id_sewa`) REFERENCES `sewa` (`id_sewa`);

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `detail_user` (`id_pengguna`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `detail_user` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_penyedia`) REFERENCES `detail_user` (`id_pengguna`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_penyewa`) REFERENCES `detail_user` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `ulasan_barang`
--
ALTER TABLE `ulasan_barang`
  ADD CONSTRAINT `ulasan_barang_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `sewa` (`id_sewa`),
  ADD CONSTRAINT `ulasan_barang_ibfk_2` FOREIGN KEY (`id_pengulas`) REFERENCES `detail_user` (`id_pengguna`),
  ADD CONSTRAINT `ulasan_barang_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `ulasan_pengguna`
--
ALTER TABLE `ulasan_pengguna`
  ADD CONSTRAINT `ulasan_pengguna_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `detail_user` (`id_pengguna`),
  ADD CONSTRAINT `ulasan_pengguna_ibfk_2` FOREIGN KEY (`id_pengulas`) REFERENCES `detail_user` (`id_pengguna`),
  ADD CONSTRAINT `ulasan_pengguna_ibfk_3` FOREIGN KEY (`id_sewa`) REFERENCES `sewa` (`id_sewa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
