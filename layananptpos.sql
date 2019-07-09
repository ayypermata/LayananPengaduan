-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 03:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layananptpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor_aduan`
--

CREATE TABLE `lapor_aduan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 NOT NULL,
  `balasan` varchar(255) NOT NULL,
  `balasan_user` varchar(255) NOT NULL,
  `tgl_updateadmin` date NOT NULL,
  `tgl_updateuser` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `done` int(10) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor_aduan`
--

INSERT INTO `lapor_aduan` (`id`, `id_user`, `jenis`, `deskripsi`, `image`, `balasan`, `balasan_user`, `tgl_updateadmin`, `tgl_updateuser`, `status`, `done`, `date_create`) VALUES
(105, 19, 'Kehilangan', 'Hilang', '', '', '', '2019-07-09', '0000-00-00', 'Proses', 1, 1562220681),
(106, 17, 'Tidak Utuh', 'Tidak', '', '', '', '2019-07-09', '0000-00-00', 'Belum Diproses', 0, 1562220703),
(107, 19, 'Belum Diterima', 'A', '', '', '', '2019-07-04', '0000-00-00', 'Selesai', 1, 1562220833),
(108, 19, 'Terlambat', 'B', '', '', 'belum selesai', '2019-07-04', '2019-07-04', 'Selesai', 1, 1562220837),
(109, 19, 'Terlambat', 'C', '', '', '', '2019-07-04', '0000-00-00', 'Selesai', 1, 1562220842),
(110, 19, 'Kehilangan', 'ok', '', 'sudah selesai', 'oke ditunggu', '2019-07-04', '2019-07-04', 'Selesai', 1, 1562221328),
(111, 19, 'Tidak Utuh', 'Barang saya rusak, ini gimana dong tanggung jawabnya?', 'Laporan-20190704134736.jpg', '', 'kok lama ya', '2019-07-05', '2019-07-05', 'Selesai', 1, 1562240856),
(112, 19, 'Belum Diterima', 'Sudah 2 minggu barang belum sampai', '', '', '', '2019-07-09', '0000-00-00', 'Selesai', 0, 1562240869),
(113, 19, 'Tidak Utuh', 'A', '', '', 'C', '2019-07-08', '2019-07-08', 'Selesai', 1, 1562553862),
(114, 21, 'Pengembalian', 'Hehe', '', '', '', '2019-07-09', '0000-00-00', 'Selesai', 1, 1562635857),
(115, 21, 'Tidak Utuh', 'Ok', '', '', '', '2019-07-09', '0000-00-00', 'Selesai', 1, 1562636091);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(14, 'Ayu Permata', 'user.ayu@gmail.com', 'default.jpg', '$2y$10$vQlPNyl8s81NQ5iYuCJIC.ND5nyw3bdnyoqoofmo7oI5wnHetcON.', 2, 1, 1554037567),
(15, 'Muhammad Yusuf', 'admin@gmail.com', 'default.jpg', '$2y$10$2HJtDX5M98UfucWvrzZ/HeRAhEtvOARNkEd3RsgQ4kSps5DtzXuqC', 1, 1, 1554040166),
(16, 'Hani Pertiwi', 'Hani@gmail.com', 'default.jpg', '$2y$10$HdIHXC.QQeN8T1AZsu83.u3ojqZWuGdwF9781tmkQ1LxbGzfNEhCe', 2, 1, 1555867982),
(17, 'Hani Pertiwi', 'hani@user.com', 'default.jpg', '$2y$10$VXwTXgUrqjBMuEi1NaylVerseP/wI6kuoOYLt8U22I64Szyo7Wm6.', 2, 1, 1557166873),
(18, 'Elsa Resa Sari', 'elsa@user.com', 'default.jpg', '$2y$10$O4UBNlrUhYEKEBNmIFbJV.qPX6mQ2EA3OmmPYvOD9mxhfRkKZ4eVa', 2, 1, 1560170777),
(19, 'Ayu Permata', 'ayupermatasari115@gmail.com', 'default.jpg', '$2y$10$/k4FFejy/6BAbJIKjWVCIe/R7n5QxPtRt0nDsiVXvFhf4He4Qmey.', 2, 1, 1561608135),
(20, 'Hani Pertiwi', 'hanipertiwi@gmail.com', 'default.jpg', '$2y$10$B9Od0r/HeZ1I7L6RaQaqu.gI6NiB5GngIJtdaFLQo9LUOyQpxKpUa', 2, 1, 1561653704),
(21, 'User', 'user@gmail.com', 'default.jpg', '$2y$10$oszqMKpkONsrjFT3yuyqruO1eh0kitm/tNdMQlOa01IFTzYYYT65m', 2, 1, 1562635832);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
