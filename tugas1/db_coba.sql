-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2021 pada 07.26
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tindakan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`Id`, `Nama`, `Jurusan`, `Alamat`, `Tindakan`) VALUES
(1, 'Diah', 'Hukum', 'Malang', ''),
(8, 'Dika', 'Akuntansi', 'Kediri', ''),
(9, 'Afin', 'Pariwisata', 'Malang', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
