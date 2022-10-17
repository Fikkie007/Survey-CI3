-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `channel_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `name`, `phone_number`, `address`, `email`, `channel_number`) VALUES
(26, 'ladusingh', '081234567890', 'Jl.hahahahaha', 'Ladusinghuhuy@gmail.com', 111111);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_coba`
--

CREATE TABLE `jawaban_coba` (
  `id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `data_pelanggan_id` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_coba`
--

INSERT INTO `jawaban_coba` (`id`, `pertanyaan_id`, `answer`, `data_pelanggan_id`, `kritik`, `date`) VALUES
(138, 1, 4, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(139, 2, 3, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(140, 3, 2, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(141, 4, 3, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(142, 5, 1, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(143, 6, 3, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(144, 7, 4, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(145, 8, 2, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43'),
(146, 9, 3, 26, '<p>ini kritik dan saran</p>', '2022-10-04 02:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `jumlah_responden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `jumlah_responden`) VALUES
(1, 'Pelayanan15', 10),
(2, 'Coba', 5),
(10, 'Coba212', 115),
(13, 'Test', 0),
(14, 'Test2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pertanyaan` varchar(128) NOT NULL,
  `jawaban1` varchar(128) NOT NULL,
  `jawaban2` varchar(128) NOT NULL,
  `jawaban3` varchar(128) NOT NULL,
  `jawaban4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_kategori`, `pertanyaan`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`) VALUES
(1, 2, 'Ini Pertanyaan', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(2, 10, 'blblabala', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(3, 10, 'dasdas', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(4, 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(5, 2, 'cobacobacoba', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(6, 10, 'pertanyaan baru', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(7, 1, 'aaa', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(8, 10, 'ssss', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(9, 1, 'cobacobacoba50', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(14, 1, 'Ini Pertanyaan 2', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas'),
(15, 10, 'sjdkahjdsakhk', 'Sangat Puas', 'Puas', 'Biasa', 'Tidak Puas');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(11) NOT NULL,
  `opsi` varchar(128) NOT NULL,
  `opsi2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id`, `opsi`, `opsi2`) VALUES
(1, 'Puas', 'Tidak Puas');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'admin5', 'admin@admin.com', 'default.jpg', '$2y$10$eEIqXBKOcwH.dsPmZD48H.XuS/g.njpX2YB/1SOWGK2quTmgQeUJ6', 1, 1, 1661753879),
(16, 'fiki21', 'fiki@gmail.com', 'default.jpg', '$2y$10$rlaH6R0NDLkFvY8b3wn1iO984RF3ZPXLCN3B24JJYnFtuln2K4Khu', 1, 1, 1661754262),
(27, 'ladusingh', 'Ladusinghuhuy@gmail.com', 'default.jpg', '$2y$10$BD9d.EFNhM0WRkQpuHrq9uQw8abEb8npfgL9NJju4u216SNoXj9Fm', 1, 1, 1661758873),
(28, 'staff', 'pimpinan@gmail.com', 'default.jpg', '$2y$10$m9eK1pa6BwBGfBVqpJW5n.oloxXmMbNBiqF.O6RCcIA1mIAjxlbfK', 1, 1, 1661758882),
(29, 'staff', 'a@gmail.com', 'default.jpg', '$2y$10$2fC2yCx48RsKNp1ykCTkfegEaR/skBbAW9ZNhxU9oenQ3SEYbV25q', 1, 1, 1662536400);

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
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Test'),
(7, 'Test');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(4, 3, 'Menu Management', 'menu', 'fa-solid fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fa-solid fa-folder-open', 1),
(7, 1, 'Dashboard', 'admin/index', 'fa-solid fa-folder', 1),
(8, 1, 'Admin', 'admin/index', 'fa-solid fa-folder', 1),
(11, 6, 'aaa', 'uuu', 'fa-solid fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `channel_number` (`channel_number`);

--
-- Indexes for table `jawaban_coba`
--
ALTER TABLE `jawaban_coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jawaban_coba`
--
ALTER TABLE `jawaban_coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
