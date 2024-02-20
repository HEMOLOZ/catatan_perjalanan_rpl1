-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 07:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakom_perpus_ridwan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(150) NOT NULL,
  `halaman` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `kode_isbn` varchar(30) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar_cover` text NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `halaman`, `tahun_terbit`, `kode_isbn`, `sinopsis`, `gambar_cover`, `id_genre`, `id_penulis`, `id_penerbit`) VALUES
(8, 'MILEA : Suara dari Dilan', '357', '2016-08-31', '9786020851563', 'Dilan memberi penggambaran lain dari sebuah penaklukan cinta & bagaimana indahnya cinta sederhana anak zaman dahulu.Tidak ada kisah yang lebih Indah dari kisah cinta di SMA.Sama halnya dengan kisah cinta Dilan dan Milea.Dari yang awalnya benci hingga saling mencintai. Dari yang awalnya manis hingga menjadi rumit.Menjelang reuni akbar,Dilan memutuskan untuk menceritakan kembali masa masa itu.\r\n', 'milea.jpg', 1, 1, 2),
(9, 'DILAN : dia adalah Dilanku 1991', '344', '2015-08-31', '9786027870994', 'Jika aku berkata bahwa aku mencintainya, maka itu adalah sebuah pernyataan yang sudah cukup lengkap.\" -Milea \"Senakal-nakalnya anak geng motor, Lia, mereka shalat pada waktu ujian praktek Agama', 'dilan1991.jpg', 1, 1, 2),
(10, 'ancika 1995', '340', '2021-09-07', '9786026716903', 'Ancika: Dia Yang Bersamaku Tahun 1995 menceritakan tentang persahabatan antara Dilan dan Ancika Mehrunisa Rabu. Hubungan mereka yang semakin dekat membuat benih-benih cinta tumbuh dan hubungan mereka pun naik tingkat menjadi hubungan sepasang kekasih. Ancika merupakan gadis cantik yang memiliki sifat tegas, rajin, dan memiliki pendirian yang kuat.', 'ancika.jpg', 1, 1, 2),
(14, 'dilan', '1242', '2024-02-22', '3214', 'perjalanan cinta Dilan dan Milea, dua remaja yang berbeda karakter namun saling mencintai. Film-film ini juga menampilkan nuansa nostalgia dari kehidupan di Bandung pada tahun 1990-an', 'dilan.jpg', 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `buku_satuan`
--

CREATE TABLE `buku_satuan` (
  `id_buku_satuan` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_satuan`
--

INSERT INTO `buku_satuan` (`id_buku_satuan`, `kondisi`, `id_buku`) VALUES
(13, 'Baik', 6),
(14, 'Baik', 6),
(15, 'Baik', 6),
(16, 'Baik', 8),
(17, 'Baik', 8),
(18, 'Baik', 6),
(19, 'Baik', 6),
(20, 'Baik', 6),
(21, 'Baik', 6),
(22, 'Baik', 6),
(23, 'Baik', 6);

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_buku_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail_peminjaman`, `status_peminjaman`, `id_peminjaman`, `id_buku_satuan`) VALUES
(2, 'dipinjam', 2, 17),
(8, 'dikembalikan', 8, 10),
(9, 'dikembalikan', 9, 23),
(11, 'dikembalikan', 11, 15);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
(1, 'fiksi ah'),
(4, 'horor'),
(5, 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `tgl_pengembalian`, `tgl_dikembalikan`, `id_user`) VALUES
(1, '2024-02-13', '2024-02-16', '0000-00-00', 5),
(2, '2024-02-13', '2024-02-16', '0000-00-00', 4),
(3, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(4, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(5, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(6, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(7, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(8, '2024-02-19', '2024-02-22', '0000-00-00', 4),
(9, '2024-02-19', '2024-02-22', '0000-00-00', 4),
(10, '2024-02-19', '2024-02-22', '0000-00-00', 5),
(11, '2024-02-20', '2024-02-23', '0000-00-00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `alamat_penerbit` text NOT NULL,
  `no_telp_penerbit` int(13) NOT NULL,
  `email_penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`, `no_telp_penerbit`, `email_penerbit`) VALUES
(2, 'Pastel Booksw', 'Bandung', 2147483647, 'pastelbooks2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `email_penulis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `email_penulis`) VALUES
(4, 'bdlfda', 'asdh@gmail.com'),
(5, 'pidi baiq', 'pidibaiq@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `no_telp`, `email`, `level`) VALUES
(4, 'Ridwan Yoga Pamungkas', 'ridwan', '827', 'pakis', 987767867, 'ridwan@gmail.com', 'admin'),
(5, 'Ase', 'ase11', '202', 'sda', 123, 'sda@asd', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_genre` (`id_genre`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indexes for table `buku_satuan`
--
ALTER TABLE `buku_satuan`
  ADD PRIMARY KEY (`id_buku_satuan`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_buku_satuan` (`id_buku_satuan`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `buku_satuan`
--
ALTER TABLE `buku_satuan`
  MODIFY `id_buku_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
