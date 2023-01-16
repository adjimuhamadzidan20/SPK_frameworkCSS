-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2023 pada 06.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkframeworkcss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `ID_Alternatif` int(20) NOT NULL,
  `Nama_Framework` varchar(50) NOT NULL,
  `Jenis_Framework` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `ID_Kriteria` int(20) NOT NULL,
  `Mudah_Dipelajari` int(20) NOT NULL,
  `Banyak_Digunakan` int(20) NOT NULL,
  `Popular` int(20) NOT NULL,
  `Sumber_Belajar_Luas` int(20) NOT NULL,
  `Ringan_Digunakan` int(20) NOT NULL,
  `Proses_Instalasi_Mudah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `ID_Penilaian` int(20) NOT NULL,
  `Alternatif` varchar(50) NOT NULL,
  `Mudah_Dipelajari` int(20) NOT NULL,
  `Banyak_Digunakan` int(20) NOT NULL,
  `Popular` int(20) NOT NULL,
  `Sumber_Belajar_Luas` int(20) NOT NULL,
  `Ringan_Digunakan` int(20) NOT NULL,
  `Proses_Instalasi_Mudah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `ID` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_normalisasi`
--

CREATE TABLE `hasil_normalisasi` (
  `ID_Norm` int(20) NOT NULL,
  `K1` float NOT NULL,
  `K2` float NOT NULL,
  `K3` float NOT NULL,
  `K4` float NOT NULL,
  `K5` float NOT NULL,
  `K6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_preferensi`
--

CREATE TABLE `hasil_preferensi` (
  `ID_Pref` int(20) NOT NULL,
  `K1` float NOT NULL,
  `K2` float NOT NULL,
  `K3` float NOT NULL,
  `K4` float NOT NULL,
  `K5` float NOT NULL,
  `K6` float NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`ID_Alternatif`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`ID_Kriteria`);

--
-- Indeks untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`ID_Penilaian`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `hasil_normalisasi`
--
ALTER TABLE `hasil_normalisasi`
  ADD PRIMARY KEY (`ID_Norm`);

--
-- Indeks untuk tabel `hasil_preferensi`
--
ALTER TABLE `hasil_preferensi`
  ADD PRIMARY KEY (`ID_Pref`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `ID_Alternatif` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `ID_Kriteria` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  MODIFY `ID_Penilaian` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_normalisasi`
--
ALTER TABLE `hasil_normalisasi`
  MODIFY `ID_Norm` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_preferensi`
--
ALTER TABLE `hasil_preferensi`
  MODIFY `ID_Pref` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
