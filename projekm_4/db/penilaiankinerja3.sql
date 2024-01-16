-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 10:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaiankinerja3`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `access` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `access`) VALUES
(1, 'Admin'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `indikator_kinerja`
--

CREATE TABLE `indikator_kinerja` (
  `id` int(11) NOT NULL,
  `indikatorkinerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indikator_kinerja`
--

INSERT INTO `indikator_kinerja` (`id`, `indikatorkinerja`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `kode` int(4) NOT NULL,
  `pt` varchar(30) DEFAULT NULL,
  `nim` char(11) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`kode`, `pt`, `nim`, `nama`, `prodi`) VALUES
(11, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_1`
--

CREATE TABLE `sasaran_program_1` (
  `id_skor_s1` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `skor_s1a` int(11) NOT NULL,
  `skor_s1b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_1`
--

INSERT INTO `sasaran_program_1` (`id_skor_s1`, `username`, `skor_s1a`, `skor_s1b`) VALUES
(9, 'admin', 79, 36);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_2`
--

CREATE TABLE `sasaran_program_2` (
  `id_skor_s2` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `skor_s2a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_2`
--

INSERT INTO `sasaran_program_2` (`id_skor_s2`, `username`, `skor_s2a`) VALUES
(1, 'admin', 99);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_3`
--

CREATE TABLE `sasaran_program_3` (
  `id_skor_s3` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `skor_s3a` int(30) NOT NULL,
  `skor_s3b` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_3`
--

INSERT INTO `sasaran_program_3` (`id_skor_s3`, `username`, `skor_s3a`, `skor_s3b`) VALUES
(1, 'admin', 74, 67);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_4`
--

CREATE TABLE `sasaran_program_4` (
  `id_skor_s4` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `skor_s4a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_4`
--

INSERT INTO `sasaran_program_4` (`id_skor_s4`, `username`, `skor_s4a`) VALUES
(1, 'admin', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_5`
--

CREATE TABLE `sasaran_program_5` (
  `id_skor_s5` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `skor_s5a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_5`
--

INSERT INTO `sasaran_program_5` (`id_skor_s5`, `username`, `skor_s5a`) VALUES
(1, 'admin', 78);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_6`
--

CREATE TABLE `sasaran_program_6` (
  `id_skor_s6` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `skor_s6a` int(11) NOT NULL,
  `skor_s6b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_6`
--

INSERT INTO `sasaran_program_6` (`id_skor_s6`, `username`, `skor_s6a`, `skor_s6b`) VALUES
(1, 'admin', 55, 99);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_7`
--

CREATE TABLE `sasaran_program_7` (
  `id_skor_s7` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `skor_s7a` int(11) NOT NULL,
  `skor_s7b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_7`
--

INSERT INTO `sasaran_program_7` (`id_skor_s7`, `username`, `skor_s7a`, `skor_s7b`) VALUES
(1, 'admin', 44, 86);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_8`
--

CREATE TABLE `sasaran_program_8` (
  `id_skor_s8` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s8a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_8`
--

INSERT INTO `sasaran_program_8` (`id_skor_s8`, `username`, `skor_s8a`) VALUES
(1, 'admin', 69);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_9`
--

CREATE TABLE `sasaran_program_9` (
  `id_skor_s9` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `skor_s9a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_9`
--

INSERT INTO `sasaran_program_9` (`id_skor_s9`, `username`, `skor_s9a`) VALUES
(1, 'admin', 73);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_10`
--

CREATE TABLE `sasaran_program_10` (
  `id_skor_s10` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s10a` int(11) NOT NULL,
  `skor_s10b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_10`
--

INSERT INTO `sasaran_program_10` (`id_skor_s10`, `username`, `skor_s10a`, `skor_s10b`) VALUES
(1, 'admin', 65, 74);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_11`
--

CREATE TABLE `sasaran_program_11` (
  `id_skor_s11` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s11a` int(11) NOT NULL,
  `skor_s11b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_11`
--

INSERT INTO `sasaran_program_11` (`id_skor_s11`, `username`, `skor_s11a`, `skor_s11b`) VALUES
(1, 'admin', 81, 83);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_12`
--

CREATE TABLE `sasaran_program_12` (
  `id_skor_s12` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s12a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_12`
--

INSERT INTO `sasaran_program_12` (`id_skor_s12`, `username`, `skor_s12a`) VALUES
(1, 'admin', 43);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_13`
--

CREATE TABLE `sasaran_program_13` (
  `id_skor_s13` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s13a` int(11) NOT NULL,
  `skor_s13b` int(11) NOT NULL,
  `skor_s13c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_13`
--

INSERT INTO `sasaran_program_13` (`id_skor_s13`, `username`, `skor_s13a`, `skor_s13b`, `skor_s13c`) VALUES
(1, 'admin', 87, 69, 78);

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_program_14`
--

CREATE TABLE `sasaran_program_14` (
  `id_skor_s14` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `skor_s14a` int(11) NOT NULL,
  `skor_s14b` int(11) NOT NULL,
  `skor_s14c` int(11) NOT NULL,
  `skor_s14d` int(11) NOT NULL,
  `skor_s14e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_program_14`
--

INSERT INTO `sasaran_program_14` (`id_skor_s14`, `username`, `skor_s14a`, `skor_s14b`, `skor_s14c`, `skor_s14d`, `skor_s14e`) VALUES
(1, 'admin', 68, 87, 66, 28, 70);

-- --------------------------------------------------------

--
-- Table structure for table `sp_tb`
--

CREATE TABLE `sp_tb` (
  `id` int(10) NOT NULL,
  `nama_sp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_tb`
--

INSERT INTO `sp_tb` (`id`, `nama_sp`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `target_pencapaian`
--

CREATE TABLE `target_pencapaian` (
  `id` int(11) NOT NULL,
  `targetpencapaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target_pencapaian`
--

INSERT INTO `target_pencapaian` (`id`, `targetpencapaian`) VALUES
(1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_usr` int(10) NOT NULL,
  `nama_usr` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pswd` varchar(32) DEFAULT NULL,
  `status_usr` enum('1','0') DEFAULT '0',
  `wkt_update_usr` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_usr`, `nama_usr`, `username`, `pswd`, `status_usr`, `wkt_update_usr`) VALUES
(1, 'Admin', 'admin', '7b8b965ad4bca0e41ab51de7b31363a1', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_maps`
--

CREATE TABLE `tb_maps` (
  `id_maps` int(11) NOT NULL,
  `nama_vihara` text NOT NULL,
  `link_alamat` text NOT NULL,
  `nama_ketua` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `foto_vihara` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_maps`
--

INSERT INTO `tb_maps` (`id_maps`, `nama_vihara`, `link_alamat`, `nama_ketua`, `alamat`, `foto_vihara`) VALUES
(1, 'vihara ekayana', '      https://maps.google.com/maps?q=vihara%20ekayana%20duri%20kepa&t=&z=13&ie=UTF8&iwloc=&output=embed', '      harjo', '      jalan. abcdefgh', 'vihara1.jpg'),
(2, 'vihara maitreya jaya', 'https://maps.google.com/maps?q=vihara%20maitreya%20jaya&t=&z=13&ie=UTF8&iwloc=&output=embed', 'johar', 'jalan. asjjgff', 'vihara2.jpg'),
(5, 'vihara quan zhen dao yuan', 'https://maps.google.com/maps?q=vihara quan zhen dao yuan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', 'zhenzhen', 'jl kepu sel no 75', 'vihara3.jpg'),
(37, 'vihara dharma amurva bhumi', 'https://maps.google.com/maps?q=vihara%20dharma%20amurva%20bhumi&t=&z=13&ie=UTF8&iwloc=&output=embed', 'ketua', 'jl kramat jaya baru no 362', 'vihara4.jpg'),
(42, 'vihara dhammacakka', 'https://maps.google.com/maps?q=vihara dhammacakka&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', 'adasd', 'asdasdasd123', 'test7.jpg'),
(44, 'Vihara Sasana Diepa', 'https://maps.google.com/maps?q=vihara sasana diepa&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed', 'Sasanam', 'hahahihi8989', 'wallpaper_beige-31.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_login` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name_user`, `username`, `image`, `password`, `role_id`, `is_active`, `is_login`, `date_created`) VALUES
(48, 'member1 hahaha', 'member1', 'default.jpg', '$2y$10$.cA20UeKCGhQALPQc.EIHuUtDv/NN5oUjFFZ3VevZkiPj5fZ3BJ.i', 2, 1, 0, 1650342586),
(50, 'admin', 'admin', 'test.jpg', '$2y$10$SmUthFyQdYn.r.isGMH4CuXTgi8KXBtBV5XCpc0RubRig5LEg3nqS', 1, 1, 0, 1650342848),
(51, 'admin1', 'admin1', 'default.jpg', '$2y$10$ft5LclT8xY.mVg9mLaE8UuXw8d2KD81ZR3NdTJ8eLI923EcOLiAtm', 1, 1, 0, 1651125551);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 4),
(5, 1, 5),
(8, 1, 8),
(9, 2, 2),
(10, 2, 5),
(15, 3, 3),
(16, 3, 5),
(23, 3, 8),
(24, 2, 8),
(25, 2, 7),
(26, 2, 6),
(29, 4, 2),
(30, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 4, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(2, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(3, 0, 'Dashboard', 'administrator', 'fas fa-fw fa-tachometer-alt', 1),
(4, 0, 'My Profile', 'user', 'fas fa-fw fa-address-card', 1),
(5, 1, 'Access', 'administrator/role', 'fas fa-fw fa-key', 1),
(6, 0, 'Message', 'administrator/contact', 'fas fa-fw fa-comments', 1),
(7, 1, 'List Member', 'memberlist/listmember', 'fas fa-fw fa-list', 1),
(26, 0, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(35, 0, 'Changed Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(38, 0, 'Dashboard Saya', 'user/dashboard', 'fas fa-fw fa-chalkboard', 1),
(40, 1, 'Registrasi akun', 'login/register', 'fas fa-fw fa-address-card', 1),
(46, 1, 'Sasaran Program', 'user/tambahdatasp', 'fas fa-fw fa-list', 1),
(48, 1, 'List Vihara', 'login/submenu_vihara', 'fas fa-fw fa-list', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator_kinerja`
--
ALTER TABLE `indikator_kinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `sasaran_program_1`
--
ALTER TABLE `sasaran_program_1`
  ADD PRIMARY KEY (`id_skor_s1`);

--
-- Indexes for table `sasaran_program_2`
--
ALTER TABLE `sasaran_program_2`
  ADD PRIMARY KEY (`id_skor_s2`);

--
-- Indexes for table `sasaran_program_3`
--
ALTER TABLE `sasaran_program_3`
  ADD PRIMARY KEY (`id_skor_s3`);

--
-- Indexes for table `sasaran_program_4`
--
ALTER TABLE `sasaran_program_4`
  ADD PRIMARY KEY (`id_skor_s4`);

--
-- Indexes for table `sasaran_program_5`
--
ALTER TABLE `sasaran_program_5`
  ADD PRIMARY KEY (`id_skor_s5`);

--
-- Indexes for table `sasaran_program_6`
--
ALTER TABLE `sasaran_program_6`
  ADD PRIMARY KEY (`id_skor_s6`);

--
-- Indexes for table `sasaran_program_7`
--
ALTER TABLE `sasaran_program_7`
  ADD PRIMARY KEY (`id_skor_s7`);

--
-- Indexes for table `sasaran_program_8`
--
ALTER TABLE `sasaran_program_8`
  ADD PRIMARY KEY (`id_skor_s8`);

--
-- Indexes for table `sasaran_program_9`
--
ALTER TABLE `sasaran_program_9`
  ADD PRIMARY KEY (`id_skor_s9`);

--
-- Indexes for table `sasaran_program_10`
--
ALTER TABLE `sasaran_program_10`
  ADD PRIMARY KEY (`id_skor_s10`);

--
-- Indexes for table `sasaran_program_11`
--
ALTER TABLE `sasaran_program_11`
  ADD PRIMARY KEY (`id_skor_s11`);

--
-- Indexes for table `sasaran_program_12`
--
ALTER TABLE `sasaran_program_12`
  ADD PRIMARY KEY (`id_skor_s12`);

--
-- Indexes for table `sasaran_program_13`
--
ALTER TABLE `sasaran_program_13`
  ADD PRIMARY KEY (`id_skor_s13`);

--
-- Indexes for table `sasaran_program_14`
--
ALTER TABLE `sasaran_program_14`
  ADD PRIMARY KEY (`id_skor_s14`);

--
-- Indexes for table `sp_tb`
--
ALTER TABLE `sp_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_pencapaian`
--
ALTER TABLE `target_pencapaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_usr`);

--
-- Indexes for table `tb_maps`
--
ALTER TABLE `tb_maps`
  ADD PRIMARY KEY (`id_maps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `indikator_kinerja`
--
ALTER TABLE `indikator_kinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `kode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sasaran_program_1`
--
ALTER TABLE `sasaran_program_1`
  MODIFY `id_skor_s1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sasaran_program_2`
--
ALTER TABLE `sasaran_program_2`
  MODIFY `id_skor_s2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_3`
--
ALTER TABLE `sasaran_program_3`
  MODIFY `id_skor_s3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_4`
--
ALTER TABLE `sasaran_program_4`
  MODIFY `id_skor_s4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_5`
--
ALTER TABLE `sasaran_program_5`
  MODIFY `id_skor_s5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_6`
--
ALTER TABLE `sasaran_program_6`
  MODIFY `id_skor_s6` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_7`
--
ALTER TABLE `sasaran_program_7`
  MODIFY `id_skor_s7` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_8`
--
ALTER TABLE `sasaran_program_8`
  MODIFY `id_skor_s8` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_9`
--
ALTER TABLE `sasaran_program_9`
  MODIFY `id_skor_s9` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_10`
--
ALTER TABLE `sasaran_program_10`
  MODIFY `id_skor_s10` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_11`
--
ALTER TABLE `sasaran_program_11`
  MODIFY `id_skor_s11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_12`
--
ALTER TABLE `sasaran_program_12`
  MODIFY `id_skor_s12` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_13`
--
ALTER TABLE `sasaran_program_13`
  MODIFY `id_skor_s13` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sasaran_program_14`
--
ALTER TABLE `sasaran_program_14`
  MODIFY `id_skor_s14` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp_tb`
--
ALTER TABLE `sp_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `target_pencapaian`
--
ALTER TABLE `target_pencapaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_usr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_maps`
--
ALTER TABLE `tb_maps`
  MODIFY `id_maps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
