-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2023 pada 19.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webperpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jns_kel` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jns_kel`, `tgl_lahir`, `kontak`, `alamat`) VALUES
(1, 'Bashar Awaluddin Nafsah', 'Laki-Laki', '2001-02-05', '0812', 'Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(2, 'Belajar Gombal Pakai Coding', 'Bashar', 'Loveable', 2022),
(12, 'Belajar PHP Native', 'Brodi', 'Bangkit', 2022),
(16, 'Belajar Framework Laravel', 'Lancelot', 'Baskara', 2023),
(21, 'Belajar Membuat UI/UX', 'Pirman', 'Hollabook', 2023),
(24, 'Belajar PHP', 'Bashar', 'UNPAM', 2023),
(25, 'Belajar HTML,CSS', 'Adi SIswanto', 'Mozarella book', 2023),
(26, 'Cara Menggunakan Aplikasi Netbean', 'Bagas', 'Moza Book', 2021),
(27, 'Pewarnaan Pada Web', 'Bagas', 'Moza Book', 2021),
(28, 'Pemrograman Dasar', 'Bagas', 'Moza Book', 2021),
(29, 'Pemrograman Dasar #2', 'Bagas', 'Moza Book', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `nama_peminjam`, `judul`, `tgl_pinjam`, `tgl_kembali`) VALUES
(2, 'Irsyad Fadhal', 'Belajar Gombal Pakai Coding', '2023-09-30', '2023-10-02'),
(5, 'Faizal Ramadhan', 'Belajar PHP Native', '2023-09-26', '2023-10-01'),
(7, 'Bashar Awaluddin Nafsah', 'Belajar Framewok Laravel', '2023-10-01', '2023-10-09'),
(10, 'Rizky Maulana', 'Belajar PHP', '2023-10-02', '2023-10-03'),
(12, 'Rakha Saputra', 'Belajar HTML,CSS', '2023-09-29', '2023-11-08'),
(13, 'Maulana Juliansyah', 'Belajar Membuat UI/UX', '2023-10-04', '2023-10-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(19, 'bashar', '$2y$10$NQQuV09kyQL8x1Xz.UfqWecB3c0L4oEs8nxTjdE253vN35AxzVO2W');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjam` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
