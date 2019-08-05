-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 11:01 PM
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

INSERT INTO `lapor_aduan` (`id`, `id_user`, `kategori`, `jenis`, `deskripsi`, `image`, `balasan`, `balasan_user`, `tgl_updateadmin`, `tgl_updateuser`, `status`, `done`, `date_create`, `is_kuisioner`, `tgl_laporanselesai`) VALUES
(140, 19, 'Pengaduan', 'Kehilangan', 'Hilang', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(141, 19, 'Kritik', 'Layanan Pos', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(142, 19, 'Pengaduan', 'Terlambat', 'jhkhjm', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(143, 14, 'Pengaduan', 'Belum Diterima', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(144, 19, 'Kritik', 'Tidak Utuh', 'gegegege', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(145, 17, 'Pengaduan', 'Belum Diterima', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(146, 17, 'Pengaduan', 'Kehilangan', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(147, 17, 'Pengaduan', 'Terlambat', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(148, 17, 'Pengaduan', 'Tidak Utuh', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(149, 17, 'Pengaduan', 'Pengembalian', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(150, 17, 'Pengaduan', 'Layanan Pos', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(151, 17, 'Kritik', 'Lainnya', '12', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(152, 17, 'Saran', 'Tidak Utuh', '23', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(153, 19, 'Kritik', 'Kehilangan', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(154, 19, 'Pengaduan', 'Belum Diterima', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(155, 19, 'Pengaduan', 'Belum Diterima', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(156, 19, 'Pengaduan', 'Belum Diterima', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(157, 19, 'Pengaduan', 'Belum Diterima', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-29', 'False', '0000-00-00'),
(158, 19, 'Pengaduan', 'Kehilangan', 'Oke', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-07-31', 'False', '0000-00-00'),
(159, 14, 'Pengaduan', 'Terlambat', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(160, 14, 'Pengaduan', 'Belum Diterima', '2', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(161, 14, 'Pengaduan', 'Belum Diterima', '3', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(162, 14, 'Pengaduan', 'Belum Diterima', '4', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(163, 14, 'Pengaduan', 'Belum Diterima', '5', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(164, 14, 'Pengaduan', 'Belum Diterima', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(165, 14, 'Pengaduan', 'Belum Diterima', '6', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(166, 14, 'Pengaduan', 'Belum Diterima', '7', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-03', 'False', '0000-00-00'),
(167, 19, 'Kritik', 'Kehilangan', 'OK', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 1, '2019-08-05', 'False', '0000-00-00'),
(168, 19, 'Pengaduan', 'Kehilangan', '1', '', '', '', '0000-00-00', '0000-00-00', 'Belum Diproses', 0, '2019-03-05', 'False', '0000-00-00');

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
('AL-00001', 'P1', 'Ayu'),
('AL-00002', 'P2', 'Permata'),
('AL-00003', 'P3', 'Sari'),
('AL-00004', 'P4', 'Muhammad'),
('AL-00005', 'P5', 'Yusuf'),
('AL-00006', 'P6', 'Fitri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_soal`
--

CREATE TABLE `tbl_jawaban_soal` (
  `id_jawaban_soal` bigint(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_soal` varchar(255) NOT NULL,
  `nilai_jawaban_soal` varchar(255) NOT NULL,
  `id_lapor` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban_soal`
--

INSERT INTO `tbl_jawaban_soal` (`id_jawaban_soal`, `id_user`, `id_soal`, `nilai_jawaban_soal`, `id_lapor`) VALUES
(457, '19', 'SO-0001', '1', NULL),
(458, '19', 'SO-0002', '1', NULL),
(459, '19', 'SO-0003', '1', NULL),
(460, '19', 'SO-0004', '1', NULL),
(461, '19', 'SO-0005', '1', NULL),
(462, '19', 'SO-0006', '1', NULL),
(463, '19', 'SO-0007', '1', NULL),
(464, '19', 'SO-0008', '1', NULL),
(465, '19', 'SO-0009', '1', NULL),
(466, '19', 'SO-0010', '1', NULL),
(467, '19', 'SO-0011', '1', NULL),
(468, '19', 'SO-0012', '1', NULL),
(469, '19', 'SO-0013', '1', NULL),
(470, '19', 'SO-0001', '5', NULL),
(471, '19', 'SO-0002', '4', NULL),
(472, '19', 'SO-0003', '3', NULL),
(473, '19', 'SO-0004', '2', NULL),
(474, '19', 'SO-0005', '1', NULL),
(475, '19', 'SO-0006', '2', NULL),
(476, '19', 'SO-0007', '1', NULL),
(477, '19', 'SO-0008', '1', NULL),
(478, '19', 'SO-0009', '1', NULL),
(479, '19', 'SO-0010', '5', NULL),
(480, '19', 'SO-0011', '3', NULL),
(481, '19', 'SO-0012', '2', NULL),
(482, '19', 'SO-0013', '2', NULL),
(483, '14', 'SO-0001', '5', NULL),
(484, '14', 'SO-0002', '4', NULL),
(485, '14', 'SO-0003', '4', NULL),
(486, '14', 'SO-0004', '1', NULL),
(487, '14', 'SO-0005', '1', NULL),
(488, '14', 'SO-0006', '1', NULL),
(489, '14', 'SO-0007', '1', NULL),
(490, '14', 'SO-0008', '1', NULL),
(491, '14', 'SO-0009', '1', NULL),
(492, '14', 'SO-0010', '1', NULL),
(493, '14', 'SO-0011', '1', NULL),
(494, '14', 'SO-0012', '1', NULL),
(495, '14', 'SO-0013', '1', NULL),
(496, '19', 'SO-0001', '5', NULL),
(497, '19', 'SO-0002', '5', NULL),
(498, '19', 'SO-0003', '5', NULL),
(499, '19', 'SO-0004', '5', NULL),
(500, '19', 'SO-0005', '5', NULL),
(501, '19', 'SO-0006', '5', NULL),
(502, '19', 'SO-0007', '5', NULL),
(503, '19', 'SO-0008', '4', NULL),
(504, '19', 'SO-0009', '3', NULL),
(505, '19', 'SO-0010', '3', NULL),
(506, '19', 'SO-0011', '5', NULL),
(507, '19', 'SO-0012', '5', NULL),
(508, '19', 'SO-0013', '4', NULL),
(509, '19', 'SO-0001', '5', NULL),
(510, '19', 'SO-0002', '5', NULL),
(511, '19', 'SO-0003', '5', NULL),
(512, '19', 'SO-0004', '5', NULL),
(513, '19', 'SO-0005', '4', NULL),
(514, '19', 'SO-0006', '4', NULL),
(515, '19', 'SO-0007', '4', NULL),
(516, '19', 'SO-0008', '4', NULL),
(517, '19', 'SO-0009', '5', NULL),
(518, '19', 'SO-0010', '4', NULL),
(519, '19', 'SO-0011', '5', NULL),
(520, '19', 'SO-0012', '4', NULL),
(521, '19', 'SO-0013', '5', NULL),
(522, '17', 'SO-0001', '5', NULL),
(523, '17', 'SO-0002', '5', NULL),
(524, '17', 'SO-0003', '5', NULL),
(525, '17', 'SO-0004', '5', NULL),
(526, '17', 'SO-0005', '5', NULL),
(527, '17', 'SO-0006', '5', NULL),
(528, '17', 'SO-0007', '5', NULL),
(529, '17', 'SO-0008', '5', NULL),
(530, '17', 'SO-0009', '5', NULL),
(531, '17', 'SO-0010', '5', NULL),
(532, '17', 'SO-0011', '5', NULL),
(533, '17', 'SO-0012', '5', NULL),
(534, '17', 'SO-0013', '5', NULL),
(535, '17', 'SO-0001', '4', NULL),
(536, '17', 'SO-0002', '4', NULL),
(537, '17', 'SO-0003', '3', NULL),
(538, '17', 'SO-0004', '5', NULL),
(539, '17', 'SO-0005', '4', NULL),
(540, '17', 'SO-0006', '3', NULL),
(541, '17', 'SO-0007', '4', NULL),
(542, '17', 'SO-0008', '3', NULL),
(543, '17', 'SO-0009', '3', NULL),
(544, '17', 'SO-0010', '5', NULL),
(545, '17', 'SO-0011', '5', NULL),
(546, '17', 'SO-0012', '5', NULL),
(547, '17', 'SO-0013', '5', NULL),
(548, '17', 'SO-0001', '5', NULL),
(549, '17', 'SO-0002', '5', NULL),
(550, '17', 'SO-0003', '5', NULL),
(551, '17', 'SO-0004', '5', NULL),
(552, '17', 'SO-0005', '5', NULL),
(553, '17', 'SO-0006', '5', NULL),
(554, '17', 'SO-0007', '5', NULL),
(555, '17', 'SO-0008', '5', NULL),
(556, '17', 'SO-0009', '5', NULL),
(557, '17', 'SO-0010', '5', NULL),
(558, '17', 'SO-0011', '5', NULL),
(559, '17', 'SO-0012', '5', NULL),
(560, '17', 'SO-0013', '5', NULL),
(561, '17', 'SO-0001', '5', NULL),
(562, '17', 'SO-0002', '5', NULL),
(563, '17', 'SO-0003', '5', NULL),
(564, '17', 'SO-0004', '5', NULL),
(565, '17', 'SO-0005', '5', NULL),
(566, '17', 'SO-0006', '5', NULL),
(567, '17', 'SO-0007', '5', NULL),
(568, '17', 'SO-0008', '5', NULL),
(569, '17', 'SO-0009', '4', NULL),
(570, '17', 'SO-0010', '5', NULL),
(571, '17', 'SO-0011', '4', NULL),
(572, '17', 'SO-0012', '5', NULL),
(573, '17', 'SO-0013', '5', NULL),
(574, '17', 'SO-0001', '5', NULL),
(575, '17', 'SO-0002', '4', NULL),
(576, '17', 'SO-0003', '5', NULL),
(577, '17', 'SO-0004', '4', NULL),
(578, '17', 'SO-0005', '5', NULL),
(579, '17', 'SO-0006', '5', NULL),
(580, '17', 'SO-0007', '5', NULL),
(581, '17', 'SO-0008', '5', NULL),
(582, '17', 'SO-0009', '5', NULL),
(583, '17', 'SO-0010', '5', NULL),
(584, '17', 'SO-0011', '5', NULL),
(585, '17', 'SO-0012', '5', NULL),
(586, '17', 'SO-0013', '5', NULL),
(587, '17', 'SO-0001', '5', NULL),
(588, '17', 'SO-0002', '5', NULL),
(589, '17', 'SO-0003', '5', NULL),
(590, '17', 'SO-0004', '5', NULL),
(591, '17', 'SO-0005', '5', NULL),
(592, '17', 'SO-0006', '5', NULL),
(593, '17', 'SO-0007', '5', NULL),
(594, '17', 'SO-0008', '5', NULL),
(595, '17', 'SO-0009', '5', NULL),
(596, '17', 'SO-0010', '5', NULL),
(597, '17', 'SO-0011', '5', NULL),
(598, '17', 'SO-0012', '3', NULL),
(599, '17', 'SO-0013', '4', NULL),
(600, '17', 'SO-0001', '5', NULL),
(601, '17', 'SO-0002', '5', NULL),
(602, '17', 'SO-0003', '5', NULL),
(603, '17', 'SO-0004', '5', NULL),
(604, '17', 'SO-0005', '5', NULL),
(605, '17', 'SO-0006', '5', NULL),
(606, '17', 'SO-0007', '5', NULL),
(607, '17', 'SO-0008', '5', NULL),
(608, '17', 'SO-0009', '5', NULL),
(609, '17', 'SO-0010', '5', NULL),
(610, '17', 'SO-0011', '5', NULL),
(611, '17', 'SO-0012', '5', NULL),
(612, '17', 'SO-0013', '5', NULL),
(613, '19', 'SO-0001', '5', NULL),
(614, '19', 'SO-0002', '5', NULL),
(615, '19', 'SO-0003', '5', NULL),
(616, '19', 'SO-0004', '5', NULL),
(617, '19', 'SO-0005', '5', NULL),
(618, '19', 'SO-0006', '5', NULL),
(619, '19', 'SO-0007', '5', NULL),
(620, '19', 'SO-0008', '5', NULL),
(621, '19', 'SO-0009', '5', NULL),
(622, '19', 'SO-0010', '5', NULL),
(623, '19', 'SO-0011', '5', NULL),
(624, '19', 'SO-0012', '5', NULL),
(625, '19', 'SO-0013', '5', NULL),
(626, '19', 'SO-0001', '5', NULL),
(627, '19', 'SO-0002', '5', NULL),
(628, '19', 'SO-0003', '5', NULL),
(629, '19', 'SO-0004', '5', NULL),
(630, '19', 'SO-0005', '5', NULL),
(631, '19', 'SO-0006', '5', NULL),
(632, '19', 'SO-0007', '5', NULL),
(633, '19', 'SO-0008', '5', NULL),
(634, '19', 'SO-0009', '5', NULL),
(635, '19', 'SO-0010', '5', NULL),
(636, '19', 'SO-0011', '5', NULL),
(637, '19', 'SO-0012', '5', NULL),
(638, '19', 'SO-0013', '5', NULL),
(639, '19', 'SO-0001', '5', NULL),
(640, '19', 'SO-0002', '5', NULL),
(641, '19', 'SO-0003', '5', NULL),
(642, '19', 'SO-0004', '5', NULL),
(643, '19', 'SO-0005', '5', NULL),
(644, '19', 'SO-0006', '5', NULL),
(645, '19', 'SO-0007', '5', NULL),
(646, '19', 'SO-0008', '5', NULL),
(647, '19', 'SO-0009', '5', NULL),
(648, '19', 'SO-0010', '5', NULL),
(649, '19', 'SO-0011', '5', NULL),
(650, '19', 'SO-0012', '5', NULL),
(651, '19', 'SO-0013', '5', NULL),
(652, '19', 'SO-0001', '5', NULL),
(653, '19', 'SO-0002', '5', NULL),
(654, '19', 'SO-0003', '5', NULL),
(655, '19', 'SO-0004', '5', NULL),
(656, '19', 'SO-0005', '5', NULL),
(657, '19', 'SO-0006', '5', NULL),
(658, '19', 'SO-0007', '5', NULL),
(659, '19', 'SO-0008', '5', NULL),
(660, '19', 'SO-0009', '5', NULL),
(661, '19', 'SO-0010', '5', NULL),
(662, '19', 'SO-0011', '5', NULL),
(663, '19', 'SO-0012', '5', NULL),
(664, '19', 'SO-0013', '5', NULL),
(665, '19', 'SO-0001', '5', NULL),
(666, '19', 'SO-0002', '5', NULL),
(667, '19', 'SO-0003', '5', NULL),
(668, '19', 'SO-0004', '5', NULL),
(669, '19', 'SO-0005', '5', NULL),
(670, '19', 'SO-0006', '5', NULL),
(671, '19', 'SO-0007', '5', NULL),
(672, '19', 'SO-0008', '5', NULL),
(673, '19', 'SO-0009', '5', NULL),
(674, '19', 'SO-0010', '5', NULL),
(675, '19', 'SO-0011', '5', NULL),
(676, '19', 'SO-0012', '4', NULL),
(677, '19', 'SO-0013', '4', NULL),
(678, '14', 'SO-0001', '5', NULL),
(679, '14', 'SO-0002', '5', NULL),
(680, '14', 'SO-0003', '5', NULL),
(681, '14', 'SO-0004', '5', NULL),
(682, '14', 'SO-0005', '5', NULL),
(683, '14', 'SO-0006', '5', NULL),
(684, '14', 'SO-0007', '5', NULL),
(685, '14', 'SO-0008', '5', NULL),
(686, '14', 'SO-0009', '5', NULL),
(687, '14', 'SO-0010', '5', NULL),
(688, '14', 'SO-0011', '5', NULL),
(689, '14', 'SO-0012', '5', NULL),
(690, '14', 'SO-0013', '5', NULL),
(691, '14', 'SO-0001', '5', NULL),
(692, '14', 'SO-0002', '5', NULL),
(693, '14', 'SO-0003', '5', NULL),
(694, '14', 'SO-0004', '5', NULL),
(695, '14', 'SO-0005', '5', NULL),
(696, '14', 'SO-0006', '5', NULL),
(697, '14', 'SO-0007', '5', NULL),
(698, '14', 'SO-0008', '5', NULL),
(699, '14', 'SO-0009', '5', NULL),
(700, '14', 'SO-0010', '5', NULL),
(701, '14', 'SO-0011', '5', NULL),
(702, '14', 'SO-0012', '5', NULL),
(703, '14', 'SO-0013', '5', NULL),
(704, '14', 'SO-0001', '5', NULL),
(705, '14', 'SO-0002', '5', NULL),
(706, '14', 'SO-0003', '5', NULL),
(707, '14', 'SO-0004', '5', NULL),
(708, '14', 'SO-0005', '5', NULL),
(709, '14', 'SO-0006', '5', NULL),
(710, '14', 'SO-0007', '5', NULL),
(711, '14', 'SO-0008', '5', NULL),
(712, '14', 'SO-0009', '5', NULL),
(713, '14', 'SO-0010', '5', NULL),
(714, '14', 'SO-0011', '5', NULL),
(715, '14', 'SO-0012', '5', NULL),
(716, '14', 'SO-0013', '5', NULL),
(717, '14', 'SO-0001', '5', NULL),
(718, '14', 'SO-0002', '4', NULL),
(719, '14', 'SO-0003', '4', NULL),
(720, '14', 'SO-0004', '5', NULL),
(721, '14', 'SO-0005', '5', NULL),
(722, '14', 'SO-0006', '5', NULL),
(723, '14', 'SO-0007', '5', NULL),
(724, '14', 'SO-0008', '5', NULL),
(725, '14', 'SO-0009', '5', NULL),
(726, '14', 'SO-0010', '5', NULL),
(727, '14', 'SO-0011', '5', NULL),
(728, '14', 'SO-0012', '5', NULL),
(729, '14', 'SO-0013', '5', NULL),
(730, '14', 'SO-0001', '5', NULL),
(731, '14', 'SO-0002', '5', NULL),
(732, '14', 'SO-0003', '5', NULL),
(733, '14', 'SO-0004', '5', NULL),
(734, '14', 'SO-0005', '5', NULL),
(735, '14', 'SO-0006', '5', NULL),
(736, '14', 'SO-0007', '5', NULL),
(737, '14', 'SO-0008', '5', NULL),
(738, '14', 'SO-0009', '5', NULL),
(739, '14', 'SO-0010', '5', NULL),
(740, '14', 'SO-0011', '5', NULL),
(741, '14', 'SO-0012', '5', NULL),
(742, '14', 'SO-0013', '5', NULL),
(743, '14', 'SO-0001', '5', NULL),
(744, '14', 'SO-0002', '5', NULL),
(745, '14', 'SO-0003', '5', NULL),
(746, '14', 'SO-0004', '5', NULL),
(747, '14', 'SO-0005', '5', NULL),
(748, '14', 'SO-0006', '5', NULL),
(749, '14', 'SO-0007', '5', NULL),
(750, '14', 'SO-0008', '5', NULL),
(751, '14', 'SO-0009', '5', NULL),
(752, '14', 'SO-0010', '5', NULL),
(753, '14', 'SO-0011', '5', NULL),
(754, '14', 'SO-0012', '5', NULL),
(755, '14', 'SO-0013', '5', NULL),
(756, '14', 'SO-0001', '5', NULL),
(757, '14', 'SO-0002', '5', NULL),
(758, '14', 'SO-0003', '5', NULL),
(759, '14', 'SO-0004', '5', NULL),
(760, '14', 'SO-0005', '5', NULL),
(761, '14', 'SO-0006', '5', NULL),
(762, '14', 'SO-0007', '5', NULL),
(763, '14', 'SO-0008', '5', NULL),
(764, '14', 'SO-0009', '5', NULL),
(765, '14', 'SO-0010', '5', NULL),
(766, '14', 'SO-0011', '5', NULL),
(767, '14', 'SO-0012', '4', NULL),
(768, '14', 'SO-0013', '4', NULL),
(769, '14', 'SO-0001', '5', NULL),
(770, '14', 'SO-0002', '5', NULL),
(771, '14', 'SO-0003', '5', NULL),
(772, '14', 'SO-0004', '5', NULL),
(773, '14', 'SO-0005', '5', NULL),
(774, '14', 'SO-0006', '5', NULL),
(775, '14', 'SO-0007', '5', NULL),
(776, '14', 'SO-0008', '5', NULL),
(777, '14', 'SO-0009', '5', NULL),
(778, '14', 'SO-0010', '5', NULL),
(779, '14', 'SO-0011', '5', NULL),
(780, '14', 'SO-0012', '5', NULL),
(781, '14', 'SO-0013', '5', NULL),
(782, '19', 'SO-0001', '5', NULL),
(783, '19', 'SO-0002', '5', NULL),
(784, '19', 'SO-0003', '5', NULL),
(785, '19', 'SO-0004', '5', NULL),
(786, '19', 'SO-0005', '5', NULL),
(787, '19', 'SO-0006', '5', NULL),
(788, '19', 'SO-0007', '5', NULL),
(789, '19', 'SO-0008', '5', NULL),
(790, '19', 'SO-0009', '5', NULL),
(791, '19', 'SO-0010', '5', NULL),
(792, '19', 'SO-0011', '5', NULL),
(793, '19', 'SO-0012', '5', NULL),
(794, '19', 'SO-0013', '5', NULL);

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
-- Table structure for table `tbl_laporan_selesai`
--

CREATE TABLE `tbl_laporan_selesai` (
  `id_laporan_selesai` varchar(255) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_kuesioner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('NAL-00001', 'AL-00001', 'KR-00001', 'SKR-00001'),
('NAL-000010', 'AL-00005', 'KR-00002', 'SKR-00009'),
('NAL-000011', 'AL-00006', 'KR-00001', 'SKR-00001'),
('NAL-000012', 'AL-00006', 'KR-00002', 'SKR-00007'),
('NAL-00002', 'AL-00001', 'KR-00002', 'SKR-00004'),
('NAL-00003', 'AL-00002', 'KR-00001', 'SKR-00001'),
('NAL-00004', 'AL-00002', 'KR-00002', 'SKR-00005'),
('NAL-00005', 'AL-00003', 'KR-00001', 'SKR-00001'),
('NAL-00006', 'AL-00003', 'KR-00002', 'SKR-00006'),
('NAL-00007', 'AL-00004', 'KR-00001', 'SKR-00002'),
('NAL-00008', 'AL-00004', 'KR-00002', 'SKR-00008'),
('NAL-00009', 'AL-00005', 'KR-00001', 'SKR-00001');

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
('SKR-00006', 'KR-00002', 'Kiriman Tidak Utuh', '3'),
('SKR-00007', 'KR-00002', 'Keterlambatan', '2'),
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
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  MODIFY `id_jawaban_soal` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=795;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
