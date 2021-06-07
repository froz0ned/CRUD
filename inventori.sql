-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 04:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_luxmanabadi`
--

CREATE TABLE `b_luxmanabadi` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_luxmanabadi`
--

INSERT INTO `b_luxmanabadi` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(1, 'kj_1e', 'Keju', 11, 3, 1, 1611149515),
(2, 'SPP', 'penggaris', 1, 2, 3, 1611586725),
(3, 'SPP', 'gelas', 12, 22, 4, 1611586749),
(4, 'SPP', 'gelas', 4, 3, 5, 1611586739);

-- --------------------------------------------------------

--
-- Table structure for table `b_planetkimia`
--

CREATE TABLE `b_planetkimia` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_planetkimia`
--

INSERT INTO `b_planetkimia` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(1, 'SP_0o', 'Sepatu', 1, 2, 3, 1611149515),
(2, 'SPP', 'gelas', 2, 34, 45, 1611588172),
(3, 'SPP', 'gelas', 2, 34, 1, 1611588178),
(4, 'SPP', 'penggaris', 423, 4, 3, 1611588187),
(5, 'SPP', 'gelas', 43, 413, 41, 1611588193);

-- --------------------------------------------------------

--
-- Table structure for table `pt_palapa`
--

CREATE TABLE `pt_palapa` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt_palapa`
--

INSERT INTO `pt_palapa` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(3, 'SPP', 'gelas', 14, 2, 1, 1611589494),
(4, 'SPP', 'gelas', 23, 4, 2, 1611589502),
(5, 's_OJ', 'Komputer lab', 31, 23, 42, 1611589515),
(6, 'SPP', 'gelas', 23, 4, 44, 1611589520);

-- --------------------------------------------------------

--
-- Table structure for table `s_luxmanabadi`
--

CREATE TABLE `s_luxmanabadi` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_luxmanabadi`
--

INSERT INTO `s_luxmanabadi` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(1, 'sp12', 'serokan', 13, 2, 3, 1611545148),
(5, 'SPP', 'dfdfd', 4, 5, 6, 1611547127),
(8, 'SPP', 'gelas', 431, 43, 4334, 1611588204),
(9, 'SPP', 'gelas', 413, 4, 3, 1611588210);

-- --------------------------------------------------------

--
-- Table structure for table `s_pharmapreneur`
--

CREATE TABLE `s_pharmapreneur` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_pharmapreneur`
--

INSERT INTO `s_pharmapreneur` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(6, 'SPP', 'gelas', 95, 983, 98, 1611545066),
(7, 'SPP', 'gelas', 431, 4, 1, 1611588219),
(8, 'SPP', 'gelas', 3, 33, 41, 1611588225),
(9, 'SPP', 'gelas', 43, 13, 134, 1611588231);

-- --------------------------------------------------------

--
-- Table structure for table `s_planetkimia`
--

CREATE TABLE `s_planetkimia` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_planetkimia`
--

INSERT INTO `s_planetkimia` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(13, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(15, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(16, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(17, 'S_PK', 'Coklat tua', 100, 100, 10, 1611251074),
(18, 'S_PK', 'Jelly', 100, 100, 100, 1611149481),
(22, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(23, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(24, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(25, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(26, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(27, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(28, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(29, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(30, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(31, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(32, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(33, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(34, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(35, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(36, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(37, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(38, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(39, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(40, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(62, 'S_PK', 'coklat', 100, 100, 10, 1611149515),
(64, 'S_PK', 'Ragi Tempe', 100, 100, 100, 1611210635),
(65, 'S_PK', 'Ragi Tahu', 100, 100, 10, 1611210646);

-- --------------------------------------------------------

--
-- Table structure for table `t_luxuryprojects`
--

CREATE TABLE `t_luxuryprojects` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_luxuryprojects`
--

INSERT INTO `t_luxuryprojects` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(2, 'SPP', 'gelas', 1, 2, 3, 1611546770),
(4, 'SPP', 'penggaris', 1, 222, 3, 1611546793);

-- --------------------------------------------------------

--
-- Table structure for table `t_planetkimia`
--

CREATE TABLE `t_planetkimia` (
  `id` int(255) NOT NULL,
  `kd_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `modal` int(100) NOT NULL,
  `jual` int(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_planetkimia`
--

INSERT INTO `t_planetkimia` (`id`, `kd_brg`, `nama_brg`, `modal`, `jual`, `stok`, `tanggal`) VALUES
(1, 'sp_1e', 'kopi', 1, 2, 3, 1611149515),
(2, 'SPP', 'gelas', 13, 22, 3, 1611550667);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'samuelhpn', 'samuelhpn@gmail.com', 'Pijakbumi.png', '$2y$10$snO32mOQz.igF65M6L.ZCumNQBDkouDUP2smYTTFXFVSs9H1VoYky', 1, 1, 1606371257),
(4, 'bobby', 'bobby@gmail.com', 'Pijakbumi1.png', '$2y$10$TQGaKx3IMMsd.HTohLcyzeHPdNr9V2m5C2gthP2L/L1Vs.VfDTcDC', 2, 1, 1606720367);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3),
(17, 1, 5),
(21, 1, 4),
(25, 0, 5),
(29, 1, 6),
(32, 2, 6),
(33, 2, 5),
(34, 2, 2),
(35, 2, 7),
(36, 2, 8),
(37, 1, 7),
(38, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Shopee'),
(6, 'Tokopedia'),
(7, 'Buka Lapak'),
(8, 'WhatsApp'),
(9, 'Stok Mentah');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 0),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(10, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 0),
(15, 5, 'Planet Kimia', 'shopee/planetkimia', 'fas fa-fw fa-prescription-bottle', 1),
(16, 5, 'Pharmapreneur Store', 's_pharmapreneur', 'fas fa-fw fa-prescription-bottle-alt', 1),
(17, 5, 'Luxman Abadi Shop', 's_luxmanabadi', 'fas fa-fw fa-capsules', 1),
(18, 6, 'Luxury Projects Indo', 't_luxuryprojects', 'fas fa-fw fa-diagnoses', 1),
(19, 6, 'Planet Kimia Tokped', 't_planetkimia', 'fas fa-fw fa-prescription-bottle', 1),
(20, 7, 'Luxman Abadi', 'b_luxmanabadi', 'fas fa-fw fa-tablets', 1),
(21, 7, 'Planet Kimia Bukalapak', 'b_planetkimia', 'fas fa-fw fa-prescription-bottle', 1),
(22, 8, 'PT Palapa Muda Perkasa', 'pt_palapa', 'fas fa-fw fa-clinic-medical', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_luxmanabadi`
--
ALTER TABLE `b_luxmanabadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_planetkimia`
--
ALTER TABLE `b_planetkimia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt_palapa`
--
ALTER TABLE `pt_palapa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_luxmanabadi`
--
ALTER TABLE `s_luxmanabadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_pharmapreneur`
--
ALTER TABLE `s_pharmapreneur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_planetkimia`
--
ALTER TABLE `s_planetkimia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_luxuryprojects`
--
ALTER TABLE `t_luxuryprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_planetkimia`
--
ALTER TABLE `t_planetkimia`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
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
-- AUTO_INCREMENT for table `b_luxmanabadi`
--
ALTER TABLE `b_luxmanabadi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `b_planetkimia`
--
ALTER TABLE `b_planetkimia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pt_palapa`
--
ALTER TABLE `pt_palapa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_luxmanabadi`
--
ALTER TABLE `s_luxmanabadi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `s_pharmapreneur`
--
ALTER TABLE `s_pharmapreneur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `s_planetkimia`
--
ALTER TABLE `s_planetkimia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `t_luxuryprojects`
--
ALTER TABLE `t_luxuryprojects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_planetkimia`
--
ALTER TABLE `t_planetkimia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
