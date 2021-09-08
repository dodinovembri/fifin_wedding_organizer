-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 06:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wo_alfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `description`, `status`) VALUES
(16, '60f2ad0752a08.jpg', 'Team', 1);

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `code`, `name`, `description`, `status`, `image`) VALUES
(2, 'G1', 'Hotel Harper', 'Hotel Harper Palembang', 1, ''),
(3, 'G2', 'Hotel Amaris', 'Hotel Amaris Palembang', 1, ''),
(4, 'G3', 'Gedung Rambang Semesta', 'Gedung Rambang Semesta', 1, ''),
(5, 'G44', 'Gedung Dekranasda', 'Dekranasda', 1, ''),
(6, 'G5', 'Al-Furqon', 'Gedung Al-Furqon', 1, '611bd01ec69ad'),
(7, 'G6', 'Graha 66', 'Graha 66', 1, '611bd03ecaf90'),
(8, 'G7', 'Asrama Haji', 'Gedung Asrama Haji', 1, '611bd0599c7b7'),
(9, 'G8', 'OPI Convention Centre', 'OPI Convention Centre', 1, '611bd07da8681'),
(10, 'G9', 'The Royal Convention', 'The Royal Convention', 1, '611bd096cb4a1'),
(11, 'G10', 'Diklat Penerbangan', 'Diklat Penerbangan', 1, '611bd0c62d714');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `code`, `name`, `image`, `description`, `status`) VALUES
(1, 'C1', 'Clothes 1', '60f3b78a1641e.png', 'Clothes 1', 1),
(2, 'C2', 'Cothes 2', '60f3f80cdec39.png', 'Clothes 2', 1),
(6, 'C3', 'Clothes 3', '611473b151d4a.png', 'Clothes 3', 1),
(7, 'C4', 'Clothes 4', '611473f653715.png', 'Clothes 4', 1),
(8, 'C5', 'Clothes 5', '61147901e732e.png', 'Clothes 5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_image` varchar(50) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `facebook`, `twitter`, `instagram`, `phone`, `opening_hours`, `address`, `about_title`, `about_image`, `about`, `status`) VALUES
(1, 'fifin.weddingorganizer@gmail.com', 'Fifinweddingorganizer(fifin studio)', 'fifin_weddingorganizer', 'fifin.weddingorganizer', '0852-6909-8408', 'Senin-Sabtu: 09.00 s/d 17.00  ', 'Jalan Mayor Zein, Kalidoni, Palembang', 'Twenty Years of Top Experience', '611bcca2377ad.JPG', 'Ya, inilah yang harus kamu lakukan jika kamu sudah berkomitmen dalam pernikahan. Jadilah pernikahan tersebut hal terbahagia selamanya.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`id`, `code`, `name`, `image`, `description`, `status`) VALUES
(1, 'DK1', 'Dekorasi 1', '6113e4aa05373.jpg', 'Dekorasi Minimalis', 1),
(2, 'DK2', 'Dekorasi 2', '6113e4d7ae648.jpg', 'Dekorasi 2', 1),
(3, 'DK3', 'Dekorasi 3', '6113e4e942624.jpg', 'Dekorasi 3', 1),
(4, 'DK4', 'Dekorasi 4', '6113e504a0b9d.jpg', 'Dekorasi 4', 1),
(5, 'DK5', 'Dekorasi 5', '6113e51ed5b31.jpg', 'Dekorasi 5', 1),
(6, 'DK6', 'Dekorasi 6', '6113e53e54d79.JPG', 'Dekorasi 6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `code`, `building_id`, `start_date`, `end_date`, `title`, `description`, `status`) VALUES
(1, 'A11', 3, '2021-08-08', '2021-07-19', 'Pernikahan Eka & Fitri', 'Acara Nikahan', 1),
(2, 'G2', 1, '2021-08-12', '2021-08-15', 'Pernikahan Dapit dan Santi', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `code`, `name`, `description`, `status`, `image`) VALUES
(2, 'TWO', 'Dokumentasi', '<p>Photo &amp; Vidio Liputan Akad &amp; Resepsi</p><p>Album Photo Kolase &amp; DVD Vidio</p><p>Prawedding &amp; Photo Print 40x60 &amp; Bingkai</p><p>TV LED 50 inch / Layar Proyektor (Resepsi)</p>', 1, ''),
(4, 'ET', 'Entertainment', '<p>Sound Sistem, Solo Keyboard &amp; Singer</p><p>Tari Persembahan &amp; Tari Kreasi&nbsp;</p><p>Mobil Pengantin (Hias &amp; Sopir)</p>', 1, ''),
(5, 'PD', 'Pakaian & Tata Rias', '<p>Pakaian Pengantin Resepsi, Sunting dan Melati&nbsp;</p><p>Pakaian Pengantin Akad, Sunting, Melati&nbsp;</p><p>Tatarias Pengantin Akad &amp; Resepsi&nbsp;</p><p>Tatarias &amp; Songket untuk Besan (Ibu&amp;Mertua)</p><p>Tatarias &amp; Songket untuk Besan (Bapak&amp;Mertua)</p><p>Pakaian Beskap, Tanjak, Rumpak saudara 6 Stel</p><p>Henna Wedding &amp; Tangas</p>', 1, ''),
(6, 'CT', 'Catering', '<p>Catering 1000 Porsi&nbsp;</p><p>Menu :&nbsp;</p><p>Nasi Putih, Nasi Minyak, Aneka Pilihan Daging</p><p>Sayur, Kuah, Sambal dan Air</p><p>Parsel Buah &amp; Air Mineral&nbsp;</p><p>Untuk Meja VIP &amp; Meja Depan</p><p>Pondokan Pempek 800pcs</p><p>Es krim 400cup</p>', 1, ''),
(7, 'FG', 'Fasilitas Gedung', '<p>Kursi Stainles &amp; Sofa VIP</p><p>Ruangan Full AC</p><p>Ruang Makan VIP, Ruang Tunggu</p><p>Kotak Angpau &amp; Stand Foto</p><p>Pelaminan Resepsi &amp; Lighting Standar&nbsp;</p><p>Standing Flower, Gazebo, Karpet Jalan &amp; Taman</p>', 1, ''),
(8, 'DPV', 'Penata Acara', '<p>MC Resepsi&nbsp;</p><p>Team Wedding Organizer (WO)</p><p>(Resepsi 7 Orang, Akad 4 Orang)</p>', 1, ''),
(9, 'PAN', 'Perlengkapan Akad Nikah ', '<p>Pelaminan Akad Nikah (Paket Standar)</p><p>Hias Kamar Pengantin (Paket Standar)</p><p>Kasur, Meja Akad &amp; Tempat Mas Kawin</p><p>15 Kotak Hantaran Akrilik</p>', 1, ''),
(10, 'LL', 'Lain-lain', '<p>Team Parkir&nbsp;</p><p>100 Tanda Panitia</p><p>Permen</p><p>Buku Tamu</p><p>Banner 1x2 Meter</p>', 1, ''),
(11, 'FG1', 'Fasilitas Gedung 3', '<p>Kursi 350 set &amp; Sofa VIP</p><p>Ruangan Full AC</p><p>Ruang Makan VIP, Ruang Tunggu</p><p>Kotak Angpau &amp; Stand Photo</p><p>Pelaminan Resepsi &amp; Lighting Standar&nbsp;</p><p>Standing Flower, Gazebo, Karpet Jalan &amp; Taman</p>', 1, '611bcf569b2c2'),
(12, 'C1', 'Catering2', '<p>Catering 700 Porsi</p><p>Menu : Nasi Putih, Nasi Minyak</p><p>Aneka Pilihan Daging, Ayam, Sayur</p><p>Buah, Kuah, Sambal, &amp; Air</p><p>Parsel Buah &amp; Air Mineral Meja VIP</p><p>Eskrim 400 Cup</p>', 1, '611bcfd2080e3'),
(13, 'FG2', 'Fasiltas Gedung2', '<p>Kursi 500 set &amp; Sofa VIP</p><p>Ruangan Full AC</p><p>Ruang Makan VIP, Ruang Tunggu</p><p>Kotak Angpau &amp; Stand Photo</p><p>Pelaminan Resepsi &amp; Lighting Standar&nbsp;</p><p>Standing Flower, Gazebo, Karpet Jalan &amp; Taman</p>', 1, '611bd00396b4e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `image`, `status`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '60f44aaa74186.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_guest_book`
--

CREATE TABLE `wedding_guest_book` (
  `id` int(11) NOT NULL,
  `wedding_invitation_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_guest_book`
--

INSERT INTO `wedding_guest_book` (`id`, `wedding_invitation_id`, `name`, `message`, `status`) VALUES
(1, 1, 'Dodi', 'lorem ipsum dolor sit amet', 1),
(2, 1, 'dodi', 'lorem ipsum dolor sit amet', 1),
(3, 1, 'se', 'sdf', 1),
(4, 1, 'sdf', 'sdf', 1),
(5, 1, 'sdf', 'sdf', 1),
(6, 1, 'sdf', 'sdf', 1),
(7, 1, 'System Quality Assurance', 'sdfsdfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_invitation`
--

CREATE TABLE `wedding_invitation` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `home_background` varchar(50) DEFAULT NULL,
  `groom_name` varchar(255) DEFAULT NULL,
  `groom_image` varchar(50) DEFAULT NULL,
  `groom_text` text DEFAULT NULL,
  `groom_facebook_id` varchar(255) DEFAULT NULL,
  `groom_twitter_id` varchar(255) DEFAULT NULL,
  `groom_instagram_id` varchar(255) DEFAULT NULL,
  `bride_name` varchar(255) DEFAULT NULL,
  `bride_image` varchar(50) DEFAULT NULL,
  `bride_text` text DEFAULT NULL,
  `bride_facebook_id` varchar(255) DEFAULT NULL,
  `bride_twitter_id` varchar(255) DEFAULT NULL,
  `bride_instagram_id` varchar(255) DEFAULT NULL,
  `main_ceremony_date` date DEFAULT NULL,
  `main_ceremony_time` varchar(255) DEFAULT NULL,
  `main_ceremony_location` text DEFAULT NULL,
  `main_ceremony_latitude` varchar(50) DEFAULT NULL,
  `main_ceremony_longitude` varchar(50) DEFAULT NULL,
  `wedding_date` varchar(100) DEFAULT NULL,
  `wedding_time` varchar(255) DEFAULT NULL,
  `wedding_location` text DEFAULT NULL,
  `wedding_latitude` varchar(50) DEFAULT NULL,
  `wedding_longitude` varchar(50) DEFAULT NULL,
  `special_message` text DEFAULT NULL,
  `special_message_by` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_invitation`
--

INSERT INTO `wedding_invitation` (`id`, `code`, `home_background`, `groom_name`, `groom_image`, `groom_text`, `groom_facebook_id`, `groom_twitter_id`, `groom_instagram_id`, `bride_name`, `bride_image`, `bride_text`, `bride_facebook_id`, `bride_twitter_id`, `bride_instagram_id`, `main_ceremony_date`, `main_ceremony_time`, `main_ceremony_location`, `main_ceremony_latitude`, `main_ceremony_longitude`, `wedding_date`, `wedding_time`, `wedding_location`, `wedding_latitude`, `wedding_longitude`, `special_message`, `special_message_by`, `status`) VALUES
(3, 'Iresilpi', '611468d4d69b7.JPG', 'Muhammad Ilpi', '611468d4d69b71.jpg', '', '@muhaamdilpi', '@ilpi', '@m.ilpi', 'Ires Septiani', '611468d4d69b72.jpg', '', '@Ires', '@irspryani', '@ires', '2021-08-20', '15.00 WIB', 'Lorong Amilin, Tangga Takat, Plaju', 'Lorong Amilin', 'Tangga Takat', '2021-08-22', '10.00 WIB', 'Graha Darussalam Palembang', 'Graha Darussalam', 'Palembang', '', 'Alfi', 1),
(4, 'penti', '61146b3eab4df.jpg', 'Logo Wibowo', '61146b3eab4df1.jpg', '', 'Logo.wibowo', 'Logo.wibowo', 'Logo.wibowo', 'Penti Melinia', '61146b3eab4df2.jpg', '', 'Penti.Melinia', 'Penti.Melinia', 'Penti.Melinia', '2021-09-12', '08.00 WIB', 'Permata Biru, Plaju', 'Permata Biru', 'Plaju', '2021-09-12', '10.00 WIB', 'Dekranasda Jakabaring', 'Dekranasda', 'Jakabaring', '', 'Raweng', 1),
(5, 'ErinIwang', '61146bf6e1325.jpg', 'Iwang Pratama', '61146bf6e13251.jpg', '', 'Iwang.Pratama', 'Iwang.Pratama', 'Iwang.Pratama', 'Erin', '61146bf6e13252.jpg', '', 'Erin.111', 'Erin.111', 'Erin.111', '2021-09-01', '15.00 WIB', 'Liverpool 1', 'Sungai Kedukan', 'OPI, Jakabaring', '2021-09-05', '10.00 WIB', 'Dekranasda Jakabaring', 'Dekranasda', 'Jakabaring', '', 'Vinky', 1),
(6, 'Bintangalvin', '61146c796759d.JPG', 'Muhammad Alvin Putra', '61146c796759d1.jpg', '', 'Muh.Alvinp', 'Muh.Alvinp', 'Muh.Alvinp', 'Bintang Tri Orbita', '61146c796759d2.jpg', '', 'Bintang.to22', 'Bintang.to22', 'Bintang.to22', '2021-09-24', '15.00 WIB', 'Topaz 1', 'Sungai Kedukan', 'OPI, Jakabaring', '2021-09-26', '10.00 WIB', 'Dekranasda Jakabaring', 'Dekranasda', 'Jakabaring', '', 'Vinky', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_package`
--

CREATE TABLE `wedding_package` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_package`
--

INSERT INTO `wedding_package` (`id`, `code`, `name`, `price`, `image`, `type`, `description`, `status`) VALUES
(1, '216JT', 'Hotel Harper', '216', '611bd5d50275f.jpg', 1, 'Paket nikahan harga 216juta', 1),
(8, '75Jt', 'Graha 66', '75', '611bd74fd0c2a.jpg', 0, '', 1),
(9, '67Jt', 'Al-Furqon', '67', '611bd7a097654.jpg', 0, '', 1),
(10, '80Jt', 'Asrama Haji', '80', '611bd7e245a26.jpg', 0, '', 1),
(11, '76Jt', 'Diklat Penerbangan', '76', '611bd8220cdd7.jpg', 1, '', 1),
(12, '133Jt', 'OPI Convention Centre', '133', '611bd85fd7561.jpg', 1, '', 1),
(13, '120Jt', 'The Royal Convention', '120', '611bd89af1b17.jpg', 0, '', 1),
(14, '110Jt', 'Hotel Amaris', '110', '611bd933cacc6.jpg', 0, '', 1),
(15, '140Jt', 'Gedung Rambang Semesta', '140', '611bd971be270.jpg', 0, '', 1),
(16, '85Jt', 'Gedung Dekranasda', '85', '611bd9afded78.jpg', 1, '', 1),
(17, '100Jt', 'Hotel Harper', '100', '611c74f4af2fd.jpg', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_package_detail`
--

CREATE TABLE `wedding_package_detail` (
  `id` int(11) NOT NULL,
  `wedding_package_id` int(11) DEFAULT NULL,
  `feature_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_package_detail`
--

INSERT INTO `wedding_package_detail` (`id`, `wedding_package_id`, `feature_id`) VALUES
(258, 1, '2'),
(259, 1, '4'),
(260, 1, '5'),
(261, 1, '7'),
(262, 1, '8'),
(263, 1, '9'),
(264, 1, '10'),
(265, 1, '12'),
(282, 8, '2'),
(283, 8, '4'),
(284, 8, '5'),
(285, 8, '6'),
(286, 8, '8'),
(287, 8, '9'),
(288, 8, '10'),
(289, 8, '13'),
(290, 9, '2'),
(291, 9, '4'),
(292, 9, '5'),
(293, 9, '8'),
(294, 9, '9'),
(295, 9, '10'),
(296, 9, '11'),
(297, 9, '12'),
(298, 10, '2'),
(299, 10, '4'),
(300, 10, '5'),
(301, 10, '6'),
(302, 10, '8'),
(303, 10, '9'),
(304, 10, '10'),
(305, 10, '13'),
(306, 11, '2'),
(307, 11, '4'),
(308, 11, '5'),
(309, 11, '6'),
(310, 11, '8'),
(311, 11, '9'),
(312, 11, '10'),
(313, 11, '13'),
(314, 12, '2'),
(315, 12, '4'),
(316, 12, '5'),
(317, 12, '6'),
(318, 12, '8'),
(319, 12, '9'),
(320, 12, '10'),
(321, 12, '13'),
(322, 13, '2'),
(323, 13, '4'),
(324, 13, '5'),
(325, 13, '6'),
(326, 13, '8'),
(327, 13, '9'),
(328, 13, '10'),
(329, 13, '13'),
(330, 14, '2'),
(331, 14, '4'),
(332, 14, '5'),
(333, 14, '8'),
(334, 14, '9'),
(335, 14, '10'),
(336, 14, '12'),
(337, 14, '13'),
(338, 15, '2'),
(339, 15, '4'),
(340, 15, '5'),
(341, 15, '6'),
(342, 15, '7'),
(343, 15, '8'),
(344, 15, '9'),
(345, 15, '10'),
(346, 16, '2'),
(347, 16, '4'),
(348, 16, '5'),
(349, 16, '6'),
(350, 16, '7'),
(351, 16, '8'),
(352, 16, '9'),
(353, 16, '10'),
(354, 17, '2'),
(355, 17, '4'),
(356, 17, '5'),
(357, 17, '6'),
(358, 17, '7'),
(359, 17, '8'),
(360, 17, '9'),
(361, 17, '10');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_photos`
--

CREATE TABLE `wedding_photos` (
  `id` int(11) NOT NULL,
  `wedding_invitation_id` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding_photos`
--

INSERT INTO `wedding_photos` (`id`, `wedding_invitation_id`, `image`, `description`, `status`) VALUES
(1, 1, '60f3ffc70c907.png', 'sdfs', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_guest_book`
--
ALTER TABLE `wedding_guest_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_invitation`
--
ALTER TABLE `wedding_invitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_package`
--
ALTER TABLE `wedding_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_package_detail`
--
ALTER TABLE `wedding_package_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wedding_package_id` (`wedding_package_id`);

--
-- Indexes for table `wedding_photos`
--
ALTER TABLE `wedding_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_guest_book`
--
ALTER TABLE `wedding_guest_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wedding_invitation`
--
ALTER TABLE `wedding_invitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wedding_package`
--
ALTER TABLE `wedding_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wedding_package_detail`
--
ALTER TABLE `wedding_package_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `wedding_photos`
--
ALTER TABLE `wedding_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wedding_package_detail`
--
ALTER TABLE `wedding_package_detail`
  ADD CONSTRAINT `wedding_package_detail_ibfk_1` FOREIGN KEY (`wedding_package_id`) REFERENCES `wedding_package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
