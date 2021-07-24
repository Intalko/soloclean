-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 02:47 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rangercaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('f7285f20283a310268aa1dcfd002b265be09095d', '::1', 1474731959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343733313736343b757365725f646174617c613a363a7b733a323a226964223b733a313a2231223b733a343a226e616d61223b733a31373a2250542050616e61686d6173204d756c6961223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a383a2270617373776f7264223b733a33323a223231323332663239376135376135613734333839346130653461383031666333223b733a353a22656d61696c223b733a303a22223b733a373a226e6f5f74656c70223b733a303a22223b7d62726561646372756d627c733a31373a226d616e616a656d656e5f70726f64756374223b6d61696e5f7375625f62726561646372756d627c733a31343a2274616d6261685f70726f64756374223b),
('7b918f9f22f922873dcc1de97e4a63c3278f63aa', '::1', 1474732658, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343733323337333b757365725f646174617c613a363a7b733a323a226964223b733a313a2231223b733a343a226e616d61223b733a31373a2250542050616e61686d6173204d756c6961223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a383a2270617373776f7264223b733a33323a223231323332663239376135376135613734333839346130653461383031666333223b733a353a22656d61696c223b733a303a22223b733a373a226e6f5f74656c70223b733a303a22223b7d62726561646372756d627c733a31373a226d616e616a656d656e5f70726f64756374223b6d61696e5f7375625f62726561646372756d627c733a31343a2274616d6261685f70726f64756374223b),
('70aeb8e67139461de890d2740becacc1777002ee', '::1', 1474732971, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343733323638333b757365725f646174617c613a363a7b733a323a226964223b733a313a2231223b733a343a226e616d61223b733a31373a2250542050616e61686d6173204d756c6961223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a383a2270617373776f7264223b733a33323a223231323332663239376135376135613734333839346130653461383031666333223b733a353a22656d61696c223b733a303a22223b733a373a226e6f5f74656c70223b733a303a22223b7d62726561646372756d627c733a31373a226d616e616a656d656e5f70726f64756374223b6d61696e5f7375625f62726561646372756d627c733a31343a2274616d6261685f70726f64756374223b),
('831d1444cdc51a1f3830be79d6f692ce117e7bd3', '::1', 1487251548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438373235313530343b),
('cb4599fda69b8c3ba107f8f40ca8488ef8cc70c5', '::1', 1487252601, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438373235323630313b);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(9) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(9) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deleted`) VALUES
(1, 'Light Series Custers', 0),
(2, 'Light Duty Custers', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `email`, `no_telp`) VALUES
(1, 'PT Panahmas Mulia', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(9) NOT NULL,
  `nama_produk` varchar(150) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL,
  `jenis` varchar(150) NOT NULL,
  `penjelasan` text,
  `produk_image` text,
  `produk_image2` text,
  `produk_image3` text,
  `produk_image4` text,
  `featured` tinyint(4) DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `nama_kategori`, `jenis`, `penjelasan`, `produk_image`, `produk_image2`, `produk_image3`, `produk_image4`, `featured`, `deleted`, `date_created`) VALUES
(1, 'E21 BSG R', 'Light Series Custers', '', '', 'includes/assets/e21_bsg_r.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:44:11'),
(2, 'E21 PPG SB', 'Light Series Custers', '', '', 'includes/assets/e21_ppg_sb.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:44:29'),
(3, 'E51 UIB S', 'Light Series Custers', '', '', 'includes/assets/e51_uib_s.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:44:47'),
(4, 'H11 UADI TB.jpg', 'Light Series Custers', '', '', 'includes/assets/h11_uadi_tb.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:45:00'),
(5, 'H12 COLI TB', 'Light Series Custers', '', '', 'includes/assets/h12_coli_tb.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:45:20'),
(6, 'TOYO RB SB', 'Light Series Custers', '', '', 'includes/assets/toyo_rb_sb.jpg', NULL, NULL, NULL, 1, 0, '2016-09-24 22:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(9) NOT NULL,
  `seo_title` varchar(150) NOT NULL,
  `seo_keywords` varchar(150) NOT NULL,
  `seo_description` varchar(150) NOT NULL,
  `seo_author` varchar(150) NOT NULL,
  `seo_page` tinyint(4) NOT NULL,
  `id_seo_page` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `seo_title`, `seo_keywords`, `seo_description`, `seo_author`, `seo_page`, `id_seo_page`) VALUES
(1, '', '', '', '', 1, 1),
(2, '', '', '', '', 1, 2),
(3, '', '', '', '', 1, 3),
(4, '', '', '', '', 1, 4),
(5, '', '', '', '', 1, 5),
(6, '', '', '', '', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tautan_produk`
--

CREATE TABLE `tautan_produk` (
  `id` int(9) NOT NULL,
  `gambar_produk` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tautan_produk`
--
ALTER TABLE `tautan_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tautan_produk`
--
ALTER TABLE `tautan_produk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
