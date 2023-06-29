-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 04.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anime`
--

CREATE TABLE `data_anime` (
  `id_anime` int(11) NOT NULL,
  `judul_anime` varchar(200) NOT NULL,
  `tahun_rilis` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `total_episode` int(11) NOT NULL,
  `status_anime` varchar(150) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto_anime` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_anime`
--

INSERT INTO `data_anime` (`id_anime`, `judul_anime`, `tahun_rilis`, `genre`, `total_episode`, `status_anime`, `deskripsi`, `foto_anime`, `link`) VALUES
(15, 'Kimi No Nawa', 2016, 'Romance', 1, 'Tamat', '', '20072022232713-Anime-18072022045456-Anime-download.jpg', 'ykk'),
(18, 'xxx3', 3, 'dd', 12, 'ff', 'jbkkbb', '21072022005055-Anime-20072022232713-Anime-18072022045456-Anime-download.jpg', ''),
(19, 'xx2', 2, 'xmd', 2, 'x', 'mchlsfh', '21072022043111-Anime-1 k.png', 'https://www.youtube.com/'),
(22, 'dddd', 2, 'ff', 2, 'ee', 'fff', '21072022053850-Anime-1 k.png', 'yyyyuuuu'),
(24, 'Jujutsu Kaisen', 2021, 'Action', 24, 'Tamat', 'Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi sembilan belas volume', '21072022080533-Anime-popular-2.jpg', 'https://www.bilibili.tv/id/play/37738/379290?bstar_from=bstar-web.pgc-video-detail.episode.0'),
(25, 'ff', 3, 'adventure', 24, 'gg', 'ggg', '21072022080929-Anime-popular-5.jpg', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anime1`
--

CREATE TABLE `data_anime1` (
  `id_anime1` int(50) NOT NULL,
  `judul_anime` varchar(255) NOT NULL,
  `sumber_anime` varchar(255) NOT NULL,
  `link_sumber` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_anime1`
--

INSERT INTO `data_anime1` (`id_anime1`, `judul_anime`, `sumber_anime`, `link_sumber`, `Status`) VALUES
(1, 'bxbxbbx', 'xxx', 'xxxxxx', 'xxx'),
(2, 'cc', 'cc', 'cc', 'cc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_rilis`
--

CREATE TABLE `jadwal_rilis` (
  `id_anime` int(255) NOT NULL,
  `judul_anime` varchar(255) NOT NULL,
  `waktu_rilis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_rilis`
--

INSERT INTO `jadwal_rilis` (`id_anime`, `judul_anime`, `waktu_rilis`) VALUES
(1, 'Anohana', 'Senin 24'),
(2, 'ss', ''),
(3, 'ddssas', ''),
(4, 'zss', ''),
(5, 'ff', ''),
(6, 'ggg', ''),
(7, 'dd', ''),
(8, 'xx', ''),
(9, 'xx', ''),
(10, 'hhh', ''),
(11, 'dd', ''),
(12, 'ss', 'sdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$ciZ3l/t3Q9umwEdTfkLXduK3b5V7KdQV894qy4OYqnDp2iDa1jx/C'),
(2, 'titing', '202cb962ac59075b964b07152d234b70'),
(10, 'aa', '202cb962ac59075b964b07152d234b70'),
(11, 'titha', '202cb962ac59075b964b07152d234b70'),
(12, 'titing', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'titing', '7250eb93b3c18cc9daa29cf58af7a004'),
(14, 'titing', '88c829f41c0b9dd6301a3b8e9b5e7073'),
(15, 'widi', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indeks untuk tabel `data_anime1`
--
ALTER TABLE `data_anime1`
  ADD PRIMARY KEY (`id_anime1`);

--
-- Indeks untuk tabel `jadwal_rilis`
--
ALTER TABLE `jadwal_rilis`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_anime`
--
ALTER TABLE `data_anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `data_anime1`
--
ALTER TABLE `data_anime1`
  MODIFY `id_anime1` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal_rilis`
--
ALTER TABLE `jadwal_rilis`
  MODIFY `id_anime` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
