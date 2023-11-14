-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 11:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seekshiftdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` char(50) NOT NULL,
  `adminnama` varchar(100) NOT NULL,
  `adminpassword` varchar(80) NOT NULL,
  `adminlevel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `adminnama`, `adminpassword`, `adminlevel`) VALUES
('creatorz', 'programer', '$2y$10$XoQEQB05qjXHW/CsjKLnXeJWsPCBB68bzft6n6xTRGisj5arqWDvC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `levelid` int(10) NOT NULL,
  `levelnama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`levelid`, `levelnama`) VALUES
(1, 'admin'),
(2, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(11, '2023-09-01-170934', 'App\\Database\\Migrations\\Tbuser', 'default', 'App', 1696125438, 1),
(12, '2023-09-01-171051', 'App\\Database\\Migrations\\Tbloker', 'default', 'App', 1696125438, 1),
(13, '2023-09-01-171058', 'App\\Database\\Migrations\\Tbkategori', 'default', 'App', 1696125439, 1),
(14, '2023-09-01-171112', 'App\\Database\\Migrations\\Tblokasi', 'default', 'App', 1696125439, 1),
(15, '2023-09-24-103625', 'App\\Database\\Migrations\\Adminuser', 'default', 'App', 1696125439, 1),
(18, '2023-10-08-100054', 'App\\Database\\Migrations\\Levels', 'default', 'App', 1696760448, 2),
(19, '2023-10-08-100358', 'App\\Database\\Migrations\\Admins', 'default', 'App', 1696760448, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `katid` int(10) UNSIGNED NOT NULL,
  `katnama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`katid`, `katnama`) VALUES
(1, 'Desainer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `lokid` int(5) UNSIGNED NOT NULL,
  `loknama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`lokid`, `loknama`) VALUES
(1, 'Yogyakarta'),
(2, 'Wonosari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_loker`
--

CREATE TABLE `tb_loker` (
  `lokerid` int(10) UNSIGNED NOT NULL,
  `katid` int(10) UNSIGNED NOT NULL,
  `lokid` int(10) UNSIGNED NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `perusahaannm` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `authorid` int(10) UNSIGNED NOT NULL,
  `authornm` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `lowonganjumlah` int(40) NOT NULL,
  `kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `jenispekerjaan` enum('WFO','WFH','Full Time','Freelance') NOT NULL,
  `gaji` int(40) NOT NULL,
  `usiamin` int(8) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `usiamax` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_loker`
--

INSERT INTO `tb_loker` (`lokerid`, `katid`, `lokid`, `posisi`, `perusahaannm`, `pendidikan`, `deskripsi`, `authorid`, `authornm`, `slug`, `lowonganjumlah`, `kelamin`, `jenispekerjaan`, `gaji`, `usiamin`, `domisili`, `usiamax`) VALUES
(6, 1, 1, 'Kepala Frontend Developer', 'Indosoft', 'S1', '1', 0, 'programer', 'kepala-frontend-developer', 0, 'Laki-Laki', '', 0, 0, '', 0),
(7, 1, 1, 'Kepala Desainer', 'CV Materializer', 'SMA/SMK', '1', 0, 'programer', 'kepala-desainer', 0, 'Laki-Laki', 'Freelance', 20000000, 19, '20 km dari kantor', 25),
(8, 1, 1, 'UI/UX Designer', 'CV Materializer', 'Tidak Ada Batas', '1', 0, 'programer', 'uiux-designer', 0, 'Laki-Laki', 'Full Time', 12000000, 19, '-Bisa mengoperasikan Adobe Family', 25),
(9, 1, 2, 'UI/UX Designer', 'Indosoft', 'SMA/SMK', '1', 0, 'programer', 'uiux-designer', 4, 'Laki-Laki', 'Freelance', 7000000, 19, '-Bisa ngedisain', 25),
(10, 1, 1, 'UI/UX', 'CV Digital Craft', 'SMA/SMK', '', 0, 'programer', 'uiux', 1, 'Laki-Laki', 'Full Time', 6000000, 19, '-Mampu menggunakan adobe Family\r\n-Bertanggung jawab\r\n-Disiplin\r\n-Berperilaku Baik', 25),
(11, 1, 2, 'Kepala Desainer', 'CV Digital Craft', 'S1', ' lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 0, 'programer', 'kepala-desainer', 1, 'Laki-Laki', 'Full Time', 8000000, 19, '20 km dari lokasi', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `userfullname` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `usernomer` int(18) NOT NULL,
  `perusahaannama` varchar(100) DEFAULT NULL,
  `userlevel` enum('recruiter','user') NOT NULL,
  `userfoto` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`userfullname`, `userpassword`, `useremail`, `usernomer`, `perusahaannama`, `userlevel`, `userfoto`, `username`) VALUES
('jatu saroso', '$2y$10$LnY4k9a6x9.LeqCoDfeH0.PPhq9ubEtFpIWifehLUPs0/24fMBU1a', 'qeeewewew', 222, 'saddada', 'user', NULL, 'jatu'),
('wahib janu satoto', '$2y$10$bE/cI3DGcN9x3E4vpBs90O6fR2BL5TlQBpSursA4R2q75M3YK2QSm', 'wahibsatoto2@gmail.com', 222234444, NULL, 'recruiter', NULL, 'wahib');

-- --------------------------------------------------------

--
-- Table structure for table `ulasans`
--

CREATE TABLE `ulasans` (
  `ulasanid` int(10) NOT NULL,
  `ulasannama` varchar(52) NOT NULL,
  `ulasanemail` varchar(40) NOT NULL,
  `ulasantext` text NOT NULL,
  `ulasansebagai` enum('Pencari Kerja','Perusahaan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ulasans`
--

INSERT INTO `ulasans` (`ulasanid`, `ulasannama`, `ulasanemail`, `ulasantext`, `ulasansebagai`) VALUES
(1, 'Wahib', 'wahibsatoto@gmail', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos dicta tenetur autem eius laudantium excepturi minus reiciendis dolores eaque animi repellat hic enim quidem, maiores eum incidunt cupiditate tempora magnam? Vitae modi quod laboriosam optio aut nam quas nemo officiis animi. Aliquam tempora atque dolor laboriosam facilis illum, ducimus expedita?', 'Pencari Kerja'),
(2, 'Janu', 'example@gmail.com', 'ini percobaan', 'Pencari Kerja'),
(3, 'Wahyu', 'example@gmail.com', 'Tes masuk', 'Pencari Kerja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`),
  ADD KEY `adminlevel` (`adminlevel`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`levelid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`katid`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`lokid`);

--
-- Indexes for table `tb_loker`
--
ALTER TABLE `tb_loker`
  ADD PRIMARY KEY (`lokerid`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`ulasanid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `levelid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `katid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `lokid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_loker`
--
ALTER TABLE `tb_loker`
  MODIFY `lokerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `ulasanid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`adminlevel`) REFERENCES `levels` (`levelid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
