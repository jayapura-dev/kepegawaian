-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 07:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_ijinbelajar_notif`
-- (See below for the actual view)
--
CREATE TABLE `data_ijinbelajar_notif` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`path_foto` varchar(150)
,`tgl_akhir` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_kgb_notif`
-- (See below for the actual view)
--
CREATE TABLE `data_kgb_notif` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`path_foto` varchar(150)
,`tgl_ukgb` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_kp_notif`
-- (See below for the actual view)
--
CREATE TABLE `data_kp_notif` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`path_foto` varchar(150)
,`tgl_kp` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_tgsbelajar_notif`
-- (See below for the actual view)
--
CREATE TABLE `data_tgsbelajar_notif` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`path_foto` varchar(150)
,`tgl_akhir` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_usulan_pensiun`
-- (See below for the actual view)
--
CREATE TABLE `data_usulan_pensiun` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`path_foto` varchar(150)
,`tgl_lahir` date
,`tgl_pensiun` date
,`selisih` int(7)
,`umur` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_pegawai` int(10) NOT NULL,
  `path_foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ijin_bljr`
--

CREATE TABLE `tb_ijin_bljr` (
  `id_ijin` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `id_jenjang` int(10) NOT NULL,
  `tmt_awal` date NOT NULL,
  `tmt_akhir` date NOT NULL,
  `lokasi_pdk` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `tgl_sk` varchar(100) NOT NULL,
  `dok_ijin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ijin_bljr`
--

INSERT INTO `tb_ijin_bljr` (`id_ijin`, `id_pegawai`, `id_jenjang`, `tmt_awal`, `tmt_akhir`, `lokasi_pdk`, `lembaga`, `no_sk`, `tgl_sk`, `dok_ijin`) VALUES
(1, 3, 2, '2016-10-30', '2020-10-30', 'Jayapura', 'Universitas Cendrawasih', 'SK-0011/2019-42', '2019-10-30', '30ab0afc884c94d374ff5bcc540b57e7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `id_kp` int(10) NOT NULL,
  `jabatan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `id_kp`, `jabatan`) VALUES
(1, 1, 'Kepala Balai Besar KSDA Papua'),
(2, 1, 'Kepala Bagian Tata Usaha'),
(3, 1, 'Kepala Bagian Teknis KSDA'),
(4, 1, 'Kepala Bidang KSDA WIL. I (Merauke)'),
(5, 1, 'Kepala Bidang KSDA WIL. II (Nabire)'),
(6, 1, 'Kepala Sub Bagian Umum'),
(7, 1, 'Kepala Sub Bagian Data Evaluasi,Pelaporan, dan Keh'),
(8, 1, 'Kepala Sub Bagian Program dan Kerjasama'),
(9, 1, 'Kepala Seksi Pemanfaatan dan Pelayanan'),
(10, 1, 'Kepala Seksi Perencanaan, Perlindungan dan Pengawetan'),
(11, 1, 'Kepala Seksi Konservasi Wilayah I Agats'),
(12, 1, 'Kepala Seksi  Konservasi Wilayah II Timika'),
(13, 1, 'Kepala Seksi Konservasi Wilayah IV Sarmi'),
(14, 2, 'Pengelolah Data'),
(15, 2, 'Analis Data'),
(16, 2, 'Penata Usaha Umum'),
(17, 2, 'Penata Administrasi Kepagawaian '),
(18, 2, 'Penata Administrasi Keuangan'),
(19, 2, 'Pengelola BMN'),
(20, 2, 'Operator Komputer'),
(21, 2, 'Verifikator Keuangan'),
(22, 3, 'Pengendali Ekosistem Hutan'),
(23, 3, 'Polisi Hutan'),
(24, 3, 'Penyuluh Kehutanan'),
(25, 3, 'Pengelola Pengadaan Barang dan Jasa'),
(40, 3, 'Arsiparis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `id_jenjang` int(10) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `lama` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id_jenjang`, `jenjang`, `lama`) VALUES
(1, 'S1', '1460'),
(2, 'S2', '730');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jp`
--

CREATE TABLE `tb_jp` (
  `id_jp` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `tgl_sk` date NOT NULL,
  `jbt_lama` varchar(128) NOT NULL,
  `id_kp` int(10) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `tmt_menjabat` date NOT NULL,
  `ket_menjabat` varchar(200) NOT NULL,
  `dok_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kgb`
--

CREATE TABLE `tb_kgb` (
  `id_kgb` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `gapok_lama` decimal(10,0) NOT NULL,
  `gapok_baru` decimal(10,0) NOT NULL,
  `tmt_kgb` date NOT NULL,
  `dok_kgb` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp`
--

CREATE TABLE `tb_kp` (
  `id_kp` int(10) NOT NULL,
  `jenis_kp` varchar(50) NOT NULL,
  `naik_gaji` decimal(10,0) NOT NULL,
  `naik_pangkat` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kp`
--

INSERT INTO `tb_kp` (`id_kp`, `jenis_kp`, `naik_gaji`, `naik_pangkat`) VALUES
(1, 'Jabatan Struktural', '730', '1460'),
(2, 'Jabatan Fungsional Umum', '730', '1460'),
(3, 'Jabatan Fungsional Tertentu', '730', '730');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kpb`
--

CREATE TABLE `tb_kpb` (
  `id_kpb` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` int(10) NOT NULL,
  `pkt_lama` varchar(50) NOT NULL,
  `id_pangkat` int(10) NOT NULL,
  `tmt_kpb` date NOT NULL,
  `ket_kpb` varchar(150) NOT NULL,
  `dok_kpb` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `id_pangkat` int(10) NOT NULL,
  `pangkat` varchar(60) NOT NULL,
  `golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`id_pangkat`, `pangkat`, `golongan`) VALUES
(1, 'Pengatur Muda', 'II.a'),
(2, 'Pengatur Muda Tk.I', 'II.b'),
(3, 'Pengatur', 'II.c'),
(4, 'Pengatur Tk. I', 'II.d'),
(5, 'Penata Muda', 'III.a'),
(6, 'Penata Muda Tk.I', 'III.b'),
(7, 'Penata', 'III.c'),
(8, 'Penata Tk.I', 'III.d'),
(9, 'Pembina', 'IV.a'),
(10, 'Pembina Tk.I', 'IV.b'),
(11, 'Pembina Utama Muda', 'IV.c'),
(12, 'Pembina Utama Madya', 'IV.d'),
(13, 'Pembina Utama', 'IV.e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(25) NOT NULL,
  `pend_terahir` varchar(30) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `id_pangkat` int(10) NOT NULL,
  `tmt_pkt` date NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `tmt_jbt` date NOT NULL,
  `gapok_pegawai` decimal(10,0) NOT NULL,
  `tmt_gapok` date NOT NULL,
  `tmt_cpns` date NOT NULL,
  `id_kp` int(10) DEFAULT NULL,
  `id_unit` int(10) DEFAULT NULL,
  `path_foto` varchar(150) DEFAULT NULL,
  `status_tgs_belajar` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `status_ijin_belajar` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `path_ijin` varchar(128) NOT NULL,
  `path_tgs` varchar(128) NOT NULL,
  `id_jenjang` int(10) NOT NULL,
  `no_sk` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama`, `nip`, `tgl_lahir`, `jekel`, `pend_terahir`, `bidang`, `id_pangkat`, `tmt_pkt`, `id_jabatan`, `tmt_jbt`, `gapok_pegawai`, `tmt_gapok`, `tmt_cpns`, `id_kp`, `id_unit`, `path_foto`, `status_tgs_belajar`, `status_ijin_belajar`, `tgl_awal`, `tgl_akhir`, `path_ijin`, `path_tgs`, `id_jenjang`, `no_sk`) VALUES
(1, 'Edward Sembiring, S.Hut., M.Si', '197305301999031001', '1973-05-30', 'L', 'S2', '', 10, '2017-10-04', 15, '2018-01-04', '4500000', '2017-12-11', '1999-03-03', 1, 1, NULL, 'tidak', 'tidak', '0000-00-00', '0000-00-00', '', '', 0, ''),
(2, 'Surahman Turu Patombe    ', '196312071997031001', '1963-12-07', 'L', 'S1', '', 8, '2019-12-02', 5, '2019-10-02', '4300000', '2019-12-02', '1997-03-16', 3, 1, 'be6b3fdeeb4bbceca467974516fe7e54.jpg', 'ya', 'tidak', '2016-11-11', '2020-11-11', '', '', 1, 'SK-0011/2019-50'),
(3, 'Purnama', '197011091997031002', '1970-11-09', 'L', 'S1', '', 3, '2016-12-04', 11, '2019-10-08', '3300000', '2019-12-06', '1997-03-16', 2, 1, '6758a23b3ede69f4968be79c1206659b.jpg', 'tidak', 'ya', '2016-10-30', '2020-10-30', '', '', 1, 'SK-0011/2019-42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pensiun`
--

CREATE TABLE `tb_pensiun` (
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(25) NOT NULL,
  `pend_terahir` varchar(30) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `id_pangkat` int(10) NOT NULL,
  `tmt_pkt` date NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `tmt_jbt` date NOT NULL,
  `gapok_pegawai` decimal(10,0) NOT NULL,
  `tmt_gapok` date NOT NULL,
  `tmt_cpns` date NOT NULL,
  `id_kp` int(10) DEFAULT NULL,
  `id_unit` int(10) DEFAULT NULL,
  `path_foto` varchar(150) DEFAULT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `ket_pensiun` varchar(200) NOT NULL,
  `dok_pensiun` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pensiun`
--

INSERT INTO `tb_pensiun` (`id_pegawai`, `nama`, `nip`, `tgl_lahir`, `jekel`, `pend_terahir`, `bidang`, `id_pangkat`, `tmt_pkt`, `id_jabatan`, `tmt_jbt`, `gapok_pegawai`, `tmt_gapok`, `tmt_cpns`, `id_kp`, `id_unit`, `path_foto`, `no_sk`, `tgl_sk`, `ket_pensiun`, `dok_pensiun`) VALUES
(4, 'Nimrod Dima', '196110281987031005', '1961-10-28', 'LAKI-LAKI', 'SMA', '-', 0, '2019-11-07', 0, '2019-08-06', '3000000', '2019-10-01', '1987-03-01', 3, 1, NULL, 'SK-0011/2019-21', '2019-10-15', 'Pensiun Umur', 'c3da7b5ea16a5adc461b0b4b12931d88.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_ijin`
--

CREATE TABLE `tb_p_ijin` (
  `id_p` int(10) NOT NULL,
  `id_ijin` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan_per` varchar(256) NOT NULL,
  `dok_perpanjang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_tgs`
--

CREATE TABLE `tb_p_tgs` (
  `id_p` int(10) NOT NULL,
  `id_tgs` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan_per` varchar(256) NOT NULL,
  `dok_tgs_perpanjang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tgs_bljr`
--

CREATE TABLE `tb_tgs_bljr` (
  `id_tgs` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `id_jenjang` int(10) NOT NULL,
  `tmt_awal` date NOT NULL,
  `tmt_akhir` date NOT NULL,
  `lokasi_pdk` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `tgl_sk` varchar(100) NOT NULL,
  `dok_tgs` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tgs_bljr`
--

INSERT INTO `tb_tgs_bljr` (`id_tgs`, `id_pegawai`, `id_jenjang`, `tmt_awal`, `tmt_akhir`, `lokasi_pdk`, `lembaga`, `no_sk`, `tgl_sk`, `dok_tgs`) VALUES
(2, 3, 1, '2019-10-17', '2019-10-17', 'Jayapura', 'Universitas Cendrawasih', 'SK-0011/2019-50', '2019-10-23', '2226a02cd068f0b8d8981f5baa6e7a9f.png'),
(3, 2, 1, '2016-11-11', '2020-11-11', 'Jayapura', 'Universitas Cendrawasih', 'SK-0011/2019-50', '2019-11-11', '2b98b2fe3bbb2ea69b4f33ce181733db.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(10) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `unit_kerja`) VALUES
(1, 'Jayapura'),
(2, 'Bidang KSDA WIL. I Merauke'),
(3, 'Bidang KSDA WIL. II Nabire'),
(4, 'SKW I Agats'),
(5, 'SKW II Timika'),
(6, 'SKW III Biak'),
(7, 'SKW IV Sarmi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(14) NOT NULL,
  `status` enum('aktif','blok') CHARACTER SET utf8 NOT NULL,
  `nama` varchar(250) CHARACTER SET utf8 NOT NULL,
  `nip` int(50) NOT NULL,
  `sandi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sandi_deskripsi` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status`, `nama`, `nip`, `sandi`, `sandi_deskripsi`, `level`, `email`, `nama_lengkap`, `kontak`) VALUES
(1, 'aktif', 'ekhel', 2000592285, '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'blackmanskill@gmail.com', 'Michael Karafir', '081344367764');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_level`, `level`) VALUES
(1, 'Administrator'),
(2, 'users');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_selisih_pangkat`
-- (See below for the actual view)
--
CREATE TABLE `view_selisih_pangkat` (
`id_pegawai` int(10)
,`nama` varchar(100)
,`nip` varchar(50)
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Structure for view `data_ijinbelajar_notif`
--
DROP TABLE IF EXISTS `data_ijinbelajar_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_ijinbelajar_notif`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`path_foto` AS `path_foto`,`tb_pegawai`.`tgl_akhir` AS `tgl_akhir`,(to_days(`tb_pegawai`.`tgl_akhir`) - to_days(now())) AS `selisih` from `tb_pegawai` where (`tb_pegawai`.`status_ijin_belajar` = 'ya') ;

-- --------------------------------------------------------

--
-- Structure for view `data_kgb_notif`
--
DROP TABLE IF EXISTS `data_kgb_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_kgb_notif`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`path_foto` AS `path_foto`,(`tb_pegawai`.`tmt_gapok` + interval `tb_kp`.`naik_gaji` day) AS `tgl_ukgb`,(to_days((`tb_pegawai`.`tmt_gapok` + interval `tb_kp`.`naik_gaji` day)) - to_days(now())) AS `selisih` from (`tb_pegawai` left join `tb_kp` on((`tb_pegawai`.`id_kp` = `tb_kp`.`id_kp`))) ;

-- --------------------------------------------------------

--
-- Structure for view `data_kp_notif`
--
DROP TABLE IF EXISTS `data_kp_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_kp_notif`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`path_foto` AS `path_foto`,(`tb_pegawai`.`tmt_pkt` + interval `tb_kp`.`naik_pangkat` day) AS `tgl_kp`,(to_days((`tb_pegawai`.`tmt_pkt` + interval `tb_kp`.`naik_pangkat` day)) - to_days(now())) AS `selisih` from (`tb_pegawai` left join `tb_kp` on((`tb_pegawai`.`id_kp` = `tb_kp`.`id_kp`))) ;

-- --------------------------------------------------------

--
-- Structure for view `data_tgsbelajar_notif`
--
DROP TABLE IF EXISTS `data_tgsbelajar_notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_tgsbelajar_notif`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`path_foto` AS `path_foto`,`tb_pegawai`.`tgl_akhir` AS `tgl_akhir`,(to_days(`tb_pegawai`.`tgl_akhir`) - to_days(now())) AS `selisih` from `tb_pegawai` where (`tb_pegawai`.`status_tgs_belajar` = 'ya') ;

-- --------------------------------------------------------

--
-- Structure for view `data_usulan_pensiun`
--
DROP TABLE IF EXISTS `data_usulan_pensiun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_usulan_pensiun`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,`tb_pegawai`.`path_foto` AS `path_foto`,`tb_pegawai`.`tgl_lahir` AS `tgl_lahir`,(`tb_pegawai`.`tgl_lahir` + interval 21170 day) AS `tgl_pensiun`,(to_days((`tb_pegawai`.`tgl_lahir` + interval 21170 day)) - to_days(now())) AS `selisih`,timestampdiff(YEAR,`tb_pegawai`.`tgl_lahir`,curdate()) AS `umur` from `tb_pegawai` ;

-- --------------------------------------------------------

--
-- Structure for view `view_selisih_pangkat`
--
DROP TABLE IF EXISTS `view_selisih_pangkat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_selisih_pangkat`  AS  select `tb_pegawai`.`id_pegawai` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_pegawai`.`nip` AS `nip`,(to_days((`tb_pegawai`.`tmt_pkt` + interval `tb_kp`.`naik_pangkat` day)) - to_days(now())) AS `selisih` from (`tb_pegawai` left join `tb_kp` on((`tb_pegawai`.`id_kp` = `tb_kp`.`id_kp`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_ijin_bljr`
--
ALTER TABLE `tb_ijin_bljr`
  ADD PRIMARY KEY (`id_ijin`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `tb_jp`
--
ALTER TABLE `tb_jp`
  ADD PRIMARY KEY (`id_jp`);

--
-- Indexes for table `tb_kgb`
--
ALTER TABLE `tb_kgb`
  ADD PRIMARY KEY (`id_kgb`);

--
-- Indexes for table `tb_kp`
--
ALTER TABLE `tb_kp`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `tb_kpb`
--
ALTER TABLE `tb_kpb`
  ADD PRIMARY KEY (`id_kpb`);

--
-- Indexes for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_p_ijin`
--
ALTER TABLE `tb_p_ijin`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `tb_p_tgs`
--
ALTER TABLE `tb_p_tgs`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `tb_tgs_bljr`
--
ALTER TABLE `tb_tgs_bljr`
  ADD PRIMARY KEY (`id_tgs`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ijin_bljr`
--
ALTER TABLE `tb_ijin_bljr`
  MODIFY `id_ijin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  MODIFY `id_jenjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jp`
--
ALTER TABLE `tb_jp`
  MODIFY `id_jp` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kgb`
--
ALTER TABLE `tb_kgb`
  MODIFY `id_kgb` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kp`
--
ALTER TABLE `tb_kp`
  MODIFY `id_kp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kpb`
--
ALTER TABLE `tb_kpb`
  MODIFY `id_kpb` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  MODIFY `id_pangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_p_ijin`
--
ALTER TABLE `tb_p_ijin`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_p_tgs`
--
ALTER TABLE `tb_p_tgs`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tgs_bljr`
--
ALTER TABLE `tb_tgs_bljr`
  MODIFY `id_tgs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
