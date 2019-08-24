-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 12:33 PM
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
  `id_alternatif` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 NOT NULL,
  `balasan` varchar(255) NOT NULL,
  `balasan_user` varchar(255) NOT NULL,
  `tgl_updateadmin` date NOT NULL,
  `tgl_updateuser` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `done` int(10) NOT NULL,
  `date_create` date NOT NULL,
  `is_kuisioner` varchar(255) NOT NULL,
  `tgl_laporanselesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor_aduan`
--

INSERT INTO `lapor_aduan` (`id`, `id_alternatif`, `id_user`, `kategori`, `jenis`, `deskripsi`, `image`, `balasan`, `balasan_user`, `tgl_updateadmin`, `tgl_updateuser`, `status`, `done`, `date_create`, `is_kuisioner`, `tgl_laporanselesai`) VALUES
(140, '19', 19, 'Pengaduan', 'Kehilangan', 'Hilang', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(141, '19', 19, 'Kritik', 'Layanan Pos', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(142, '', 19, 'Pengaduan', 'Terlambat', 'jhkhjm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(143, '', 14, 'Pengaduan', 'Belum Diterima', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(144, '', 19, 'Kritik', 'Tidak Utuh', 'gegegege', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(145, '', 17, 'Pengaduan', 'Belum Diterima', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(146, '', 17, 'Pengaduan', 'Kehilangan', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(147, '', 17, 'Pengaduan', 'Terlambat', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(148, '', 17, 'Pengaduan', 'Tidak Utuh', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(149, '', 17, 'Pengaduan', 'Pengembalian', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(150, '', 17, 'Pengaduan', 'Layanan Pos', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(151, '', 17, 'Kritik', 'Lainnya', '12', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(152, '', 17, 'Saran', 'Tidak Utuh', '23', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(153, '', 19, 'Kritik', 'Kehilangan', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(154, '', 19, 'Pengaduan', 'Belum Diterima', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(155, '', 19, 'Pengaduan', 'Belum Diterima', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(156, '', 19, 'Pengaduan', 'Belum Diterima', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(157, '', 19, 'Pengaduan', 'Belum Diterima', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(158, '', 19, 'Pengaduan', 'Kehilangan', 'Oke', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-31', 'False', '0000-00-00'),
(159, '', 14, 'Pengaduan', 'Terlambat', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(160, '', 14, 'Pengaduan', 'Belum Diterima', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(161, '', 14, 'Pengaduan', 'Belum Diterima', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(162, '', 14, 'Pengaduan', 'Belum Diterima', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(163, '', 14, 'Pengaduan', 'Belum Diterima', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(164, '', 14, 'Pengaduan', 'Belum Diterima', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(165, '', 14, 'Pengaduan', 'Belum Diterima', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(166, '', 14, 'Pengaduan', 'Belum Diterima', '7', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(167, '', 19, 'Kritik', 'Kehilangan', 'OK', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-05', 'False', '0000-00-00'),
(168, '', 19, 'Pengaduan', 'Kehilangan', '1', '', 'sudah selesai', 'oke mantap', '2019-08-06', '2019-08-06', 'Selesai', 1, '2019-03-05', 'False', '0000-00-00'),
(169, '', 19, 'Kritik', 'Terlambat', 'Lambat coy', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-06', 'False', '0000-00-00'),
(170, '', 19, 'Pengaduan', 'Belum Diterima', 'Ok', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-06', 'False', '0000-00-00'),
(179, '', 0, 'Pengaduan', 'Kehilangan', 'Oke', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-02-06', 'False', '0000-00-00'),
(207, '22', 22, 'Pertanyaan', 'Kiriman Tidak Utuh', 'okm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-09', 'False', '0000-00-00'),
(208, '23', 23, 'Keluhan', 'Kehilangan', 'Barang saya hilang', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-12', 'False', '0000-00-00'),
(209, '23', 23, 'Keluhan', 'Belum Diterima', 'Saya belum terima barang saya, sudah 1 minggu', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-12', 'False', '0000-00-00'),
(210, '23', 23, 'Saran', 'Keterlambatan', 'Ditingkatkan kecepatan kirimannya.!', '', 'terima kasih :)', '', '2019-08-12', '0000-00-00', 'Selesai', 1, '2019-08-12', 'False', '0000-00-00'),
(216, '24', 24, 'Keluhan', 'Kehilangan', 'janji juga cariin paket saya kemana min sdh 6 hr 6 kali d tanya ga ada hsl nya', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(217, '24', 24, 'Keluhan', 'Layanan Pos', 'Saya kirim surat pakai jasa express one day service masa blm sampe. Aturan sampe jakarta jumat kmrn tp baru diantar sabtu. Ya jelas tutup lah kantornya. Pdhl itu saya kirim lamaran kerja lhooo. Tarifnya jg diatas yg biasa. Masa pelayanannya gitu hufffft sedih bgt', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(218, '24', 24, 'Keluhan', 'Kehilangan', 'Katanya kilat kusus., tp ko dr tgl 8 kirim sampai skrg gk sampai2 jg., tak tau paket sy skrng dmana.', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(219, '24', 24, 'Keluhan', 'Belum Diterima', 'janji juga cariin paket saya kemana min sdh 6 hr 6 kali d tanya ga ada hsl nya', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(220, '24', 24, 'Keluhan', 'Kehilangan', 'ok', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(221, '24', 24, 'Pertanyaan', 'Keterlambatan', 'ok2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(222, '24', 24, 'Keluhan', 'Kehilangan', 'ok4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(223, '24', 24, 'Keluhan', 'Kehilangan', '5 5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(224, '24', 24, 'Keluhan', 'Belum Diterima', '5-4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(225, '19', 19, 'Pertanyaan', 'Kehilangan', '4,5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(226, '19', 19, 'Keluhan', 'Kehilangan', 'ok', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(227, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(228, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(229, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(230, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(231, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(232, '19', 19, 'Saran', 'Keterlambatan', 'ok-', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(233, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(234, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(235, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(236, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(237, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(238, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(239, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(240, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(241, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(242, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(243, '19', 19, 'Keluhan', 'Belum Diterima', 'mm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(244, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(245, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(246, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(247, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(248, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00'),
(249, '19', 19, 'Pertanyaan', 'Keterlambatan', 'ok00', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-08-24', 'True', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` varchar(255) NOT NULL,
  `kd_alternatif` varchar(255) NOT NULL,
  `nm_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `kd_alternatif`, `nm_alternatif`) VALUES
('24', '', ''),
('24', '', ''),
('19', '', ''),
('19', '', ''),
('19', '', ''),
('19', '', ''),
('19', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_soal`
--

CREATE TABLE `tbl_jawaban_soal` (
  `id_jawaban_soal` bigint(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `nilai_jawaban_soal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban_soal`
--

INSERT INTO `tbl_jawaban_soal` (`id_jawaban_soal`, `id_user`, `id_soal`, `nilai_jawaban_soal`) VALUES
(457, '19', 'SO-0001', '1'),
(458, '19', 'SO-0002', '1'),
(459, '19', 'SO-0003', '1'),
(460, '19', 'SO-0004', '1'),
(461, '19', 'SO-0005', '1'),
(462, '19', 'SO-0006', '1'),
(463, '19', 'SO-0007', '1'),
(464, '19', 'SO-0008', '1'),
(465, '19', 'SO-0009', '1'),
(466, '19', 'SO-0010', '1'),
(467, '19', 'SO-0011', '1'),
(468, '19', 'SO-0012', '1'),
(469, '19', 'SO-0013', '1'),
(470, '19', 'SO-0001', '5'),
(471, '19', 'SO-0002', '4'),
(472, '19', 'SO-0003', '3'),
(473, '19', 'SO-0004', '2'),
(474, '19', 'SO-0005', '1'),
(475, '19', 'SO-0006', '2'),
(476, '19', 'SO-0007', '1'),
(477, '19', 'SO-0008', '1'),
(478, '19', 'SO-0009', '1'),
(479, '19', 'SO-0010', '5'),
(480, '19', 'SO-0011', '3'),
(481, '19', 'SO-0012', '2'),
(482, '19', 'SO-0013', '2'),
(483, '14', 'SO-0001', '5'),
(484, '14', 'SO-0002', '4'),
(485, '14', 'SO-0003', '4'),
(486, '14', 'SO-0004', '1'),
(487, '14', 'SO-0005', '1'),
(488, '14', 'SO-0006', '1'),
(489, '14', 'SO-0007', '1'),
(490, '14', 'SO-0008', '1'),
(491, '14', 'SO-0009', '1'),
(492, '14', 'SO-0010', '1'),
(493, '14', 'SO-0011', '1'),
(494, '14', 'SO-0012', '1'),
(495, '14', 'SO-0013', '1'),
(496, '19', 'SO-0001', '5'),
(497, '19', 'SO-0002', '5'),
(498, '19', 'SO-0003', '5'),
(499, '19', 'SO-0004', '5'),
(500, '19', 'SO-0005', '5'),
(501, '19', 'SO-0006', '5'),
(502, '19', 'SO-0007', '5'),
(503, '19', 'SO-0008', '4'),
(504, '19', 'SO-0009', '3'),
(505, '19', 'SO-0010', '3'),
(506, '19', 'SO-0011', '5'),
(507, '19', 'SO-0012', '5'),
(508, '19', 'SO-0013', '4'),
(509, '19', 'SO-0001', '5'),
(510, '19', 'SO-0002', '5'),
(511, '19', 'SO-0003', '5'),
(512, '19', 'SO-0004', '5'),
(513, '19', 'SO-0005', '4'),
(514, '19', 'SO-0006', '4'),
(515, '19', 'SO-0007', '4'),
(516, '19', 'SO-0008', '4'),
(517, '19', 'SO-0009', '5'),
(518, '19', 'SO-0010', '4'),
(519, '19', 'SO-0011', '5'),
(520, '19', 'SO-0012', '4'),
(521, '19', 'SO-0013', '5'),
(522, '17', 'SO-0001', '5'),
(523, '17', 'SO-0002', '5'),
(524, '17', 'SO-0003', '5'),
(525, '17', 'SO-0004', '5'),
(526, '17', 'SO-0005', '5'),
(527, '17', 'SO-0006', '5'),
(528, '17', 'SO-0007', '5'),
(529, '17', 'SO-0008', '5'),
(530, '17', 'SO-0009', '5'),
(531, '17', 'SO-0010', '5'),
(532, '17', 'SO-0011', '5'),
(533, '17', 'SO-0012', '5'),
(534, '17', 'SO-0013', '5'),
(535, '17', 'SO-0001', '4'),
(536, '17', 'SO-0002', '4'),
(537, '17', 'SO-0003', '3'),
(538, '17', 'SO-0004', '5'),
(539, '17', 'SO-0005', '4'),
(540, '17', 'SO-0006', '3'),
(541, '17', 'SO-0007', '4'),
(542, '17', 'SO-0008', '3'),
(543, '17', 'SO-0009', '3'),
(544, '17', 'SO-0010', '5'),
(545, '17', 'SO-0011', '5'),
(546, '17', 'SO-0012', '5'),
(547, '17', 'SO-0013', '5'),
(548, '17', 'SO-0001', '5'),
(549, '17', 'SO-0002', '5'),
(550, '17', 'SO-0003', '5'),
(551, '17', 'SO-0004', '5'),
(552, '17', 'SO-0005', '5'),
(553, '17', 'SO-0006', '5'),
(554, '17', 'SO-0007', '5'),
(555, '17', 'SO-0008', '5'),
(556, '17', 'SO-0009', '5'),
(557, '17', 'SO-0010', '5'),
(558, '17', 'SO-0011', '5'),
(559, '17', 'SO-0012', '5'),
(560, '17', 'SO-0013', '5'),
(561, '17', 'SO-0001', '5'),
(562, '17', 'SO-0002', '5'),
(563, '17', 'SO-0003', '5'),
(564, '17', 'SO-0004', '5'),
(565, '17', 'SO-0005', '5'),
(566, '17', 'SO-0006', '5'),
(567, '17', 'SO-0007', '5'),
(568, '17', 'SO-0008', '5'),
(569, '17', 'SO-0009', '4'),
(570, '17', 'SO-0010', '5'),
(571, '17', 'SO-0011', '4'),
(572, '17', 'SO-0012', '5'),
(573, '17', 'SO-0013', '5'),
(574, '17', 'SO-0001', '5'),
(575, '17', 'SO-0002', '4'),
(576, '17', 'SO-0003', '5'),
(577, '17', 'SO-0004', '4'),
(578, '17', 'SO-0005', '5'),
(579, '17', 'SO-0006', '5'),
(580, '17', 'SO-0007', '5'),
(581, '17', 'SO-0008', '5'),
(582, '17', 'SO-0009', '5'),
(583, '17', 'SO-0010', '5'),
(584, '17', 'SO-0011', '5'),
(585, '17', 'SO-0012', '5'),
(586, '17', 'SO-0013', '5'),
(587, '17', 'SO-0001', '5'),
(588, '17', 'SO-0002', '5'),
(589, '17', 'SO-0003', '5'),
(590, '17', 'SO-0004', '5'),
(591, '17', 'SO-0005', '5'),
(592, '17', 'SO-0006', '5'),
(593, '17', 'SO-0007', '5'),
(594, '17', 'SO-0008', '5'),
(595, '17', 'SO-0009', '5'),
(596, '17', 'SO-0010', '5'),
(597, '17', 'SO-0011', '5'),
(598, '17', 'SO-0012', '3'),
(599, '17', 'SO-0013', '4'),
(600, '17', 'SO-0001', '5'),
(601, '17', 'SO-0002', '5'),
(602, '17', 'SO-0003', '5'),
(603, '17', 'SO-0004', '5'),
(604, '17', 'SO-0005', '5'),
(605, '17', 'SO-0006', '5'),
(606, '17', 'SO-0007', '5'),
(607, '17', 'SO-0008', '5'),
(608, '17', 'SO-0009', '5'),
(609, '17', 'SO-0010', '5'),
(610, '17', 'SO-0011', '5'),
(611, '17', 'SO-0012', '5'),
(612, '17', 'SO-0013', '5'),
(613, '19', 'SO-0001', '5'),
(614, '19', 'SO-0002', '5'),
(615, '19', 'SO-0003', '5'),
(616, '19', 'SO-0004', '5'),
(617, '19', 'SO-0005', '5'),
(618, '19', 'SO-0006', '5'),
(619, '19', 'SO-0007', '5'),
(620, '19', 'SO-0008', '5'),
(621, '19', 'SO-0009', '5'),
(622, '19', 'SO-0010', '5'),
(623, '19', 'SO-0011', '5'),
(624, '19', 'SO-0012', '5'),
(625, '19', 'SO-0013', '5'),
(626, '19', 'SO-0001', '5'),
(627, '19', 'SO-0002', '5'),
(628, '19', 'SO-0003', '5'),
(629, '19', 'SO-0004', '5'),
(630, '19', 'SO-0005', '5'),
(631, '19', 'SO-0006', '5'),
(632, '19', 'SO-0007', '5'),
(633, '19', 'SO-0008', '5'),
(634, '19', 'SO-0009', '5'),
(635, '19', 'SO-0010', '5'),
(636, '19', 'SO-0011', '5'),
(637, '19', 'SO-0012', '5'),
(638, '19', 'SO-0013', '5'),
(639, '19', 'SO-0001', '5'),
(640, '19', 'SO-0002', '5'),
(641, '19', 'SO-0003', '5'),
(642, '19', 'SO-0004', '5'),
(643, '19', 'SO-0005', '5'),
(644, '19', 'SO-0006', '5'),
(645, '19', 'SO-0007', '5'),
(646, '19', 'SO-0008', '5'),
(647, '19', 'SO-0009', '5'),
(648, '19', 'SO-0010', '5'),
(649, '19', 'SO-0011', '5'),
(650, '19', 'SO-0012', '5'),
(651, '19', 'SO-0013', '5'),
(652, '19', 'SO-0001', '5'),
(653, '19', 'SO-0002', '5'),
(654, '19', 'SO-0003', '5'),
(655, '19', 'SO-0004', '5'),
(656, '19', 'SO-0005', '5'),
(657, '19', 'SO-0006', '5'),
(658, '19', 'SO-0007', '5'),
(659, '19', 'SO-0008', '5'),
(660, '19', 'SO-0009', '5'),
(661, '19', 'SO-0010', '5'),
(662, '19', 'SO-0011', '5'),
(663, '19', 'SO-0012', '5'),
(664, '19', 'SO-0013', '5'),
(665, '19', 'SO-0001', '5'),
(666, '19', 'SO-0002', '5'),
(667, '19', 'SO-0003', '5'),
(668, '19', 'SO-0004', '5'),
(669, '19', 'SO-0005', '5'),
(670, '19', 'SO-0006', '5'),
(671, '19', 'SO-0007', '5'),
(672, '19', 'SO-0008', '5'),
(673, '19', 'SO-0009', '5'),
(674, '19', 'SO-0010', '5'),
(675, '19', 'SO-0011', '5'),
(676, '19', 'SO-0012', '4'),
(677, '19', 'SO-0013', '4'),
(678, '14', 'SO-0001', '5'),
(679, '14', 'SO-0002', '5'),
(680, '14', 'SO-0003', '5'),
(681, '14', 'SO-0004', '5'),
(682, '14', 'SO-0005', '5'),
(683, '14', 'SO-0006', '5'),
(684, '14', 'SO-0007', '5'),
(685, '14', 'SO-0008', '5'),
(686, '14', 'SO-0009', '5'),
(687, '14', 'SO-0010', '5'),
(688, '14', 'SO-0011', '5'),
(689, '14', 'SO-0012', '5'),
(690, '14', 'SO-0013', '5'),
(691, '14', 'SO-0001', '5'),
(692, '14', 'SO-0002', '5'),
(693, '14', 'SO-0003', '5'),
(694, '14', 'SO-0004', '5'),
(695, '14', 'SO-0005', '5'),
(696, '14', 'SO-0006', '5'),
(697, '14', 'SO-0007', '5'),
(698, '14', 'SO-0008', '5'),
(699, '14', 'SO-0009', '5'),
(700, '14', 'SO-0010', '5'),
(701, '14', 'SO-0011', '5'),
(702, '14', 'SO-0012', '5'),
(703, '14', 'SO-0013', '5'),
(704, '14', 'SO-0001', '5'),
(705, '14', 'SO-0002', '5'),
(706, '14', 'SO-0003', '5'),
(707, '14', 'SO-0004', '5'),
(708, '14', 'SO-0005', '5'),
(709, '14', 'SO-0006', '5'),
(710, '14', 'SO-0007', '5'),
(711, '14', 'SO-0008', '5'),
(712, '14', 'SO-0009', '5'),
(713, '14', 'SO-0010', '5'),
(714, '14', 'SO-0011', '5'),
(715, '14', 'SO-0012', '5'),
(716, '14', 'SO-0013', '5'),
(717, '14', 'SO-0001', '5'),
(718, '14', 'SO-0002', '4'),
(719, '14', 'SO-0003', '4'),
(720, '14', 'SO-0004', '5'),
(721, '14', 'SO-0005', '5'),
(722, '14', 'SO-0006', '5'),
(723, '14', 'SO-0007', '5'),
(724, '14', 'SO-0008', '5'),
(725, '14', 'SO-0009', '5'),
(726, '14', 'SO-0010', '5'),
(727, '14', 'SO-0011', '5'),
(728, '14', 'SO-0012', '5'),
(729, '14', 'SO-0013', '5'),
(730, '14', 'SO-0001', '5'),
(731, '14', 'SO-0002', '5'),
(732, '14', 'SO-0003', '5'),
(733, '14', 'SO-0004', '5'),
(734, '14', 'SO-0005', '5'),
(735, '14', 'SO-0006', '5'),
(736, '14', 'SO-0007', '5'),
(737, '14', 'SO-0008', '5'),
(738, '14', 'SO-0009', '5'),
(739, '14', 'SO-0010', '5'),
(740, '14', 'SO-0011', '5'),
(741, '14', 'SO-0012', '5'),
(742, '14', 'SO-0013', '5'),
(743, '14', 'SO-0001', '5'),
(744, '14', 'SO-0002', '5'),
(745, '14', 'SO-0003', '5'),
(746, '14', 'SO-0004', '5'),
(747, '14', 'SO-0005', '5'),
(748, '14', 'SO-0006', '5'),
(749, '14', 'SO-0007', '5'),
(750, '14', 'SO-0008', '5'),
(751, '14', 'SO-0009', '5'),
(752, '14', 'SO-0010', '5'),
(753, '14', 'SO-0011', '5'),
(754, '14', 'SO-0012', '5'),
(755, '14', 'SO-0013', '5'),
(756, '14', 'SO-0001', '5'),
(757, '14', 'SO-0002', '5'),
(758, '14', 'SO-0003', '5'),
(759, '14', 'SO-0004', '5'),
(760, '14', 'SO-0005', '5'),
(761, '14', 'SO-0006', '5'),
(762, '14', 'SO-0007', '5'),
(763, '14', 'SO-0008', '5'),
(764, '14', 'SO-0009', '5'),
(765, '14', 'SO-0010', '5'),
(766, '14', 'SO-0011', '5'),
(767, '14', 'SO-0012', '4'),
(768, '14', 'SO-0013', '4'),
(769, '14', 'SO-0001', '5'),
(770, '14', 'SO-0002', '5'),
(771, '14', 'SO-0003', '5'),
(772, '14', 'SO-0004', '5'),
(773, '14', 'SO-0005', '5'),
(774, '14', 'SO-0006', '5'),
(775, '14', 'SO-0007', '5'),
(776, '14', 'SO-0008', '5'),
(777, '14', 'SO-0009', '5'),
(778, '14', 'SO-0010', '5'),
(779, '14', 'SO-0011', '5'),
(780, '14', 'SO-0012', '5'),
(781, '14', 'SO-0013', '5'),
(782, '19', 'SO-0001', '5'),
(783, '19', 'SO-0002', '5'),
(784, '19', 'SO-0003', '5'),
(785, '19', 'SO-0004', '5'),
(786, '19', 'SO-0005', '5'),
(787, '19', 'SO-0006', '5'),
(788, '19', 'SO-0007', '5'),
(789, '19', 'SO-0008', '5'),
(790, '19', 'SO-0009', '5'),
(791, '19', 'SO-0010', '5'),
(792, '19', 'SO-0011', '5'),
(793, '19', 'SO-0012', '5'),
(794, '19', 'SO-0013', '5'),
(795, '19', 'SO-0001', '5'),
(796, '19', 'SO-0002', '5'),
(797, '19', 'SO-0003', '5'),
(798, '19', 'SO-0004', '5'),
(799, '19', 'SO-0005', '5'),
(800, '19', 'SO-0006', '5'),
(801, '19', 'SO-0007', '5'),
(802, '19', 'SO-0008', '5'),
(803, '19', 'SO-0009', '5'),
(804, '19', 'SO-0010', '5'),
(805, '19', 'SO-0011', '5'),
(806, '19', 'SO-0012', '5'),
(807, '19', 'SO-0013', '5'),
(808, 'AL-00022', 'SO-0001', '5'),
(809, 'AL-00022', 'SO-0002', '5'),
(810, 'AL-00022', 'SO-0003', '5'),
(811, 'AL-00022', 'SO-0004', '5'),
(812, 'AL-00022', 'SO-0005', '5'),
(813, 'AL-00022', 'SO-0006', '5'),
(814, 'AL-00022', 'SO-0007', '5'),
(815, 'AL-00022', 'SO-0008', '5'),
(816, 'AL-00022', 'SO-0009', '5'),
(817, 'AL-00022', 'SO-0010', '5'),
(818, 'AL-00022', 'SO-0011', '5'),
(819, 'AL-00022', 'SO-0012', '5'),
(820, 'AL-00022', 'SO-0013', '5'),
(821, '19', 'SO-0001', '5'),
(822, '19', 'SO-0002', '5'),
(823, '19', 'SO-0003', '5'),
(824, '19', 'SO-0004', '5'),
(825, '19', 'SO-0005', '5'),
(826, '19', 'SO-0006', '5'),
(827, '19', 'SO-0007', '5'),
(828, '19', 'SO-0008', '5'),
(829, '19', 'SO-0009', '5'),
(830, '19', 'SO-0010', '5'),
(831, '19', 'SO-0011', '5'),
(832, '19', 'SO-0012', '5'),
(833, '19', 'SO-0013', '5'),
(834, '19', 'SO-0001', '5'),
(835, '19', 'SO-0002', '5'),
(836, '19', 'SO-0003', '5'),
(837, '19', 'SO-0004', '5'),
(838, '19', 'SO-0005', '5'),
(839, '19', 'SO-0006', '5'),
(840, '19', 'SO-0007', '5'),
(841, '19', 'SO-0008', '5'),
(842, '19', 'SO-0009', '5'),
(843, '19', 'SO-0010', '5'),
(844, '19', 'SO-0011', '5'),
(845, '19', 'SO-0012', '5'),
(846, '19', 'SO-0013', '5'),
(847, '22', 'SO-0001', '5'),
(848, '22', 'SO-0002', '5'),
(849, '22', 'SO-0003', '5'),
(850, '22', 'SO-0004', '5'),
(851, '22', 'SO-0005', '5'),
(852, '22', 'SO-0006', '5'),
(853, '22', 'SO-0007', '5'),
(854, '22', 'SO-0008', '5'),
(855, '22', 'SO-0009', '5'),
(856, '22', 'SO-0010', '5'),
(857, '22', 'SO-0011', '5'),
(858, '22', 'SO-0012', '5'),
(859, '22', 'SO-0013', '5'),
(860, '23', 'SO-0001', '5'),
(861, '23', 'SO-0002', '5'),
(862, '23', 'SO-0003', '5'),
(863, '23', 'SO-0004', '5'),
(864, '23', 'SO-0005', '5'),
(865, '23', 'SO-0006', '5'),
(866, '23', 'SO-0007', '5'),
(867, '23', 'SO-0008', '5'),
(868, '23', 'SO-0009', '5'),
(869, '23', 'SO-0010', '5'),
(870, '23', 'SO-0011', '5'),
(871, '23', 'SO-0012', '5'),
(872, '23', 'SO-0013', '4'),
(873, '23', 'SO-0001', '5'),
(874, '23', 'SO-0002', '5'),
(875, '23', 'SO-0003', '5'),
(876, '23', 'SO-0004', '5'),
(877, '23', 'SO-0005', '5'),
(878, '23', 'SO-0006', '5'),
(879, '23', 'SO-0007', '5'),
(880, '23', 'SO-0008', '5'),
(881, '23', 'SO-0009', '5'),
(882, '23', 'SO-0010', '5'),
(883, '23', 'SO-0011', '5'),
(884, '23', 'SO-0012', '5'),
(885, '23', 'SO-0013', '5'),
(886, '23', 'SO-0001', '5'),
(887, '23', 'SO-0002', '5'),
(888, '23', 'SO-0003', '5'),
(889, '23', 'SO-0004', '5'),
(890, '23', 'SO-0005', '5'),
(891, '23', 'SO-0006', '5'),
(892, '23', 'SO-0007', '5'),
(893, '23', 'SO-0008', '5'),
(894, '23', 'SO-0009', '5'),
(895, '23', 'SO-0010', '5'),
(896, '23', 'SO-0011', '5'),
(897, '23', 'SO-0012', '5'),
(898, '23', 'SO-0013', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` varchar(255) NOT NULL,
  `kd_kriteria` varchar(255) NOT NULL,
  `nm_kriteria` varchar(255) NOT NULL,
  `bobot_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kd_kriteria`, `nm_kriteria`, `bobot_kriteria`) VALUES
('KR-00001', 'K1', 'Kategori Pengaduan', '5'),
('KR-00002', 'K2', 'Topik Pengaduan', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_alternatif`
--

CREATE TABLE `tbl_nilai_alternatif` (
  `id_nilai_alternatif` varchar(255) NOT NULL,
  `id_alternatif` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `id_sub_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_alternatif`
--

INSERT INTO `tbl_nilai_alternatif` (`id_nilai_alternatif`, `id_alternatif`, `id_kriteria`, `id_sub_kriteria`) VALUES
('', '', '', ''),
('NAL-000011', 'AL-00006', 'KR-00001', 'SKR-00001'),
('NAL-00005', 'AL-00003', 'KR-00001', 'SKR-00001'),
('NAL-00008', 'AL-00004', 'KR-00002', 'SKR-00008'),
('NAL-00009', 'AL-00005', 'KR-00001', 'SKR-00001'),
('NAL-00013', 'AL-00006', 'Pengaduan', 'Kehilangan'),
('NAL-00014', 'AL-00006', 'Kritik', 'Belum Diterima'),
('NAL-00015', 'AL-00007', 'Kritik', 'Belum Diterima'),
('NAL-00017', 'AL-00007', 'KR-00001', 'SKR-00002'),
('NAL-00018', 'AL-00007', 'KR-00002', 'SKR-00009'),
('NAL-00020', 'AL-00022', 'KR-00002', 'SKR-00007'),
('NAL-00023', 'AL-00002', 'KR-00001', 'SKR-00003'),
('NAL-00024', 'AL-00001', 'KR-00002', 'SKR-00004'),
('NAL-00025', 'AL-00002', 'KR-00002', 'SKR-00008'),
('NAL-00026', 'AL-00003', 'KR-00002', 'SKR-00007'),
('NAL-00027', 'AL-00004', 'KR-00001', 'SKR-00002'),
('NAL-00028', 'AL-00005', 'KR-00002', 'SKR-00005'),
('NAL-00029', 'AL-00006', 'KR-00002', 'SKR-00007'),
('NAL-00030', 'AL-00022', 'KR-00001', 'SKR-00003'),
('NAL-00031', 'AL-00001', 'KR-00001', 'SKR-00002'),
('NAL-00032', '27', 'KR-00001', 'SKR-00001'),
('NAL-00033', '27', 'KR-00002', 'SKR-00004'),
('NAL-00035', '22', 'KR-00002', 'SKR-00007'),
('NAL-00036', '22', 'KR-00001', 'SKR-00003'),
('NAL-00037', '23', 'KR-00001', 'SKR-00001'),
('NAL-00038', '23', 'KR-00002', 'SKR-00004'),
('NAL-00039', '23', 'KR-00001', 'SKR-00001'),
('NAL-00040', '23', 'KR-00002', 'SKR-00005'),
('NAL-00041', '23', 'KR-00001', 'SKR-00003'),
('NAL-00042', '23', 'KR-00002', 'SKR-00006'),
('NAL-00043', '19', 'KR-00001', 'SKR-00001'),
('NAL-00044', '19', 'KR-00002', 'SKR-00004'),
('NAL-00045', '19', 'KR-00001', 'SKR-00002'),
('NAL-00046', '19', 'KR-00002', 'SKR-00006'),
('NAL-00047', '19', 'KR-00001', 'SKR-00003'),
('NAL-00048', '19', 'KR-00002', 'SKR-00008'),
('NAL-00049', '19', 'KR-00001', 'SKR-00001'),
('NAL-00050', '19', 'KR-00002', 'SKR-00004'),
('NAL-00051', '19', 'KR-00001', 'SKR-00001'),
('NAL-00052', '19', 'KR-00002', 'SKR-00004'),
('NAL-00053', '24', 'KR-00001', 'SKR-00001'),
('NAL-00054', '24', 'KR-00002', 'SKR-00004'),
('NAL-00055', '24', 'KR-00001', 'SKR-00001'),
('NAL-00056', '24', 'KR-00002', 'SKR-00008'),
('NAL-00057', '24', 'KR-00001', 'SKR-00001'),
('NAL-00058', '24', 'KR-00002', 'SKR-00004'),
('NAL-00059', '24', 'KR-00001', 'SKR-00001'),
('NAL-00060', '24', 'KR-00002', 'SKR-00005'),
('NAL-00061', '24', 'KR-00001', 'SKR-00001'),
('NAL-00062', '24', 'KR-00002', 'SKR-00004'),
('NAL-00063', '24', 'KR-00001', 'SKR-00002'),
('NAL-00064', '24', 'KR-00002', 'SKR-00006'),
('NAL-00065', '24', 'KR-00001', 'SKR-00001'),
('NAL-00066', '24', 'KR-00002', 'SKR-00004'),
('NAL-00067', '24', 'KR-00001', 'SKR-00001'),
('NAL-00068', '24', 'KR-00002', 'SKR-00004'),
('NAL-00069', '24', 'KR-00001', 'SKR-00001'),
('NAL-00070', '24', 'KR-00002', 'SKR-00005'),
('NAL-00071', '19', 'KR-00001', 'SKR-00002'),
('NAL-00072', '19', 'KR-00002', 'SKR-00004'),
('NAL-00073', '19', 'KR-00001', 'SKR-00001'),
('NAL-00074', '19', 'KR-00002', 'SKR-00004'),
('NAL-00075', '19', 'KR-00001', 'SKR-00003'),
('NAL-00076', '19', 'KR-00002', 'SKR-00006'),
('NAL-00077', '19', 'KR-00001', 'SKR-00001'),
('NAL-00078', '19', 'KR-00002', 'SKR-00005'),
('NAL-00079', '19', 'KR-00001', 'SKR-00002'),
('NAL-00080', '19', 'KR-00002', 'SKR-00006');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` varchar(100) NOT NULL,
  `id_tipe_soal` varchar(100) NOT NULL,
  `soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `id_tipe_soal`, `soal`) VALUES
('SO-0001', 'TS-0001', 'Lokasi Kantor Pos yang mudah dijangkau.'),
('SO-0002', 'TS-0001', 'Penampilan petugas kurir yang rapi dan professional.'),
('SO-0003', 'TS-0002', 'Pengiriman barang aman dan tepat waktu.'),
('SO-0004', 'TS-0002', 'Karyawan Pos Indonesia menyampaikan variasi estimasi waktu pengiriman dan perbedaan tarif setiap jenis paket (Paket kilat, paket kilat khusus, dll).'),
('SO-0005', 'TS-0003', 'Karyawan PT Pos mampu melayani pelanggan dengan cepat'),
('SO-0006', 'TS-0003', 'Kesigapan customer service PT Pos dalam menangani keluhan pelanggan'),
('SO-0007', 'TS-0004', 'Bertanggung jawab terhadap keterlambaan pengiriman'),
('SO-0008', 'TS-0004', 'Pos Indonesia memberikan ganti rugi pada setiap kerusakan barang/kehilangan barang yang dikirim.'),
('SO-0009', 'TS-0005', 'Karyawan dapat menciptakan komunikasi yang baik kepada pelanggan'),
('SO-0010', 'TS-0005', 'Keramahan karyawan PT. Pos Indonesia'),
('SO-0011', 'TS-0006', 'Secara umum saya merasa puas menggunakan website layanan Pengaduan'),
('SO-0012', 'TS-0006', 'Keluhan/kritik/saran saya dapat ditanggapi dengan baik.'),
('SO-0013', 'TS-0006', 'Saya akan mempertimbangkan untuk melakukan transaksi berikutnya di kantor pos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_kriteria`
--

CREATE TABLE `tbl_sub_kriteria` (
  `id_sub_kriteria` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `nm_sub_kriteria` varchar(255) NOT NULL,
  `bobot_sub_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_kriteria`
--

INSERT INTO `tbl_sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nm_sub_kriteria`, `bobot_sub_kriteria`) VALUES
('SKR-00001', 'KR-00001', 'Keluhan', '5'),
('SKR-00002', 'KR-00001', 'Pertanyaan', '4'),
('SKR-00003', 'KR-00001', 'Saran', '3'),
('SKR-00004', 'KR-00002', 'Kehilangan', '5'),
('SKR-00005', 'KR-00002', 'Belum Diterima', '4'),
('SKR-00006', 'KR-00002', 'Keterlambatan', '3'),
('SKR-00007', 'KR-00002', 'Kiriman Tidak Utuh', '2'),
('SKR-00008', 'KR-00002', 'Layanan Pos', '1'),
('SKR-00009', 'KR-00002', 'Lainnya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_soal`
--

CREATE TABLE `tbl_tipe_soal` (
  `id_tipe_soal` varchar(255) NOT NULL,
  `tipe_soal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipe_soal`
--

INSERT INTO `tbl_tipe_soal` (`id_tipe_soal`, `tipe_soal`) VALUES
('TS-0001', 'Tangible'),
('TS-0002', 'Empathy'),
('TS-0003', 'Reliabilty'),
('TS-0004', 'Responsiveness'),
('TS-0005', 'Assurance'),
('TS-0006', 'Kepuasan Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
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
('', 'pp', 'p1@gmail.com', 'default.jpg', '$2y$10$T.OveGg9PoG9OaBSd0ODzuJYxil1wvX37KNek5heH6cK2IdBmP9Q2', 2, 1, 1547042535),
('00023', 'v11', 'v11@gmail.com', 'default.jpg', '$2y$10$SF1PVj4QZveqXL8fXjmQKeFgr1EBdyqMXrJJl7f4YiNS9IEt9R9Y2', 2, 1, 1547041675),
('1', 'Vatanz2', 'v2@gmail.com', 'default.jpg', '$2y$10$YDcd7zuX3OCOkcHXuCWv.ew9qveqqv/jF.4vEhWydWl7Iqcb4fS66', 2, 1, 1549485708),
('14', 'Ayu Permata', 'user.ayu@gmail.com', 'default.jpg', '$2y$10$vQlPNyl8s81NQ5iYuCJIC.ND5nyw3bdnyoqoofmo7oI5wnHetcON.', 2, 1, 1554037567),
('15', 'Muhammad Yusuf', 'admin@gmail.com', 'default.jpg', '$2y$10$2HJtDX5M98UfucWvrzZ/HeRAhEtvOARNkEd3RsgQ4kSps5DtzXuqC', 1, 1, 1554040166),
('16', 'Hani Pertiwi', 'Hani@gmail.com', 'default.jpg', '$2y$10$HdIHXC.QQeN8T1AZsu83.u3ojqZWuGdwF9781tmkQ1LxbGzfNEhCe', 2, 1, 1555867982),
('17', 'Hani Pertiwi', 'hani@user.com', 'default.jpg', '$2y$10$VXwTXgUrqjBMuEi1NaylVerseP/wI6kuoOYLt8U22I64Szyo7Wm6.', 2, 1, 1557166873),
('18', 'Elsa Resa Sari', 'elsa@user.com', 'default.jpg', '$2y$10$O4UBNlrUhYEKEBNmIFbJV.qPX6mQ2EA3OmmPYvOD9mxhfRkKZ4eVa', 2, 1, 1560170777),
('19', 'Ayu Permata', 'ayupermatasari115@gmail.com', 'default.jpg', '$2y$10$/k4FFejy/6BAbJIKjWVCIe/R7n5QxPtRt0nDsiVXvFhf4He4Qmey.', 2, 1, 1561608135),
('20', 'Hani Pertiwi', 'hanipertiwi@gmail.com', 'default.jpg', '$2y$10$B9Od0r/HeZ1I7L6RaQaqu.gI6NiB5GngIJtdaFLQo9LUOyQpxKpUa', 2, 1, 1561653704),
('21', 'User', 'user@gmail.com', 'default.jpg', '$2y$10$oszqMKpkONsrjFT3yuyqruO1eh0kitm/tNdMQlOa01IFTzYYYT65m', 2, 1, 1562635832),
('22', 'jk', 'jk@gmail.com', 'default.jpg', '$2y$10$83J2V.BvhmiqQwgddF99OumbsqVAf37wViITOkM4mBsIs7hvGDnCK', 2, 1, 1565364846),
('23', 'Ayu Permata', 'ayupermata@gmail.com', 'default.jpg', '$2y$10$zHXbTB9TpZui21buodljI.UIavOjyp1aPJDUrNRw8l0hCAuVI2InC', 2, 1, 1565635311),
('24', 'Permata Sari', 'permata@gmail.com', 'default.jpg', '$2y$10$kQK.RCA89teNNTwG4hgeKekUtOqmLoIvt/rNUGiU/DLb/pR2KTgfS', 2, 1, 1566636138);

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
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  ADD PRIMARY KEY (`id_jawaban_soal`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilai_alternatif`
--
ALTER TABLE `tbl_nilai_alternatif`
  ADD PRIMARY KEY (`id_nilai_alternatif`);

--
-- Indexes for table `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`);

--
-- Indexes for table `tbl_tipe_soal`
--
ALTER TABLE `tbl_tipe_soal`
  ADD PRIMARY KEY (`id_tipe_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  MODIFY `id_jawaban_soal` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=899;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
