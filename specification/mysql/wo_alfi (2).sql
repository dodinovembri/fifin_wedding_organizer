-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 10:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(16, '60f2ad0752a08.jpg', '', 0),
(18, '60f44d4f9ec3c.jpg', 'Gedung Pernikahan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `code`, `name`, `image`, `description`, `status`) VALUES
(1, 'G1', 'Gedung 1A Pembangunan', '61136ea2cf6aa', '', 1);

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
(3, 'C3', 'Clothes 3', '60f3f8d39ddf3.png', 'Clothes 3', 1);

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
(1, 'wedding-organizer@gmail.com', 'fifin_wo', 'fifin_wo', 'fifin_wo', '62812-7867-7601', 'Mon - Sat 9:00am - 6:00pm', 'Palembang', 'Twenty Years of Top Experience', '60f44dc3cf629.jpg', 'Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.\r\n\r\nCras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.', 1);

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
(1, 'DK1', 'IPB International', '60f3a424f37c2.jpg', 'Dekorasi IPB International Convention', 1),
(2, 'DK2', 'Dekorasi New 2', '60f3f66a9b835.jpg', 'Dekorasi new 2', 1),
(3, 'DK3', 'Dekorasi 3', '60f440445c663.jpg', 'Dekorasi tiga', 1);

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
(1, 'A11', 1, '2021-08-08', '2021-07-19', 'Nikahan Orang', 'Acara Nikahan', 1),
(2, 'G2', 1, '2021-08-12', '2021-08-15', 'NIkah di Mana', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `code`, `name`, `image`, `description`, `status`) VALUES
(2, 'TWO', 'Team WO Akad & Resepsi', '60f2d9ee7cd1a.jpg', 'Peralatan Make Up', 1),
(4, 'ET', 'Entertainment', '60f2e5a3cc24e.jpg', 'Perlengkapan Entertain', 1),
(5, 'PD', 'Pakaian & Dekorasi', '60f37fd88bf2e.jpg', 'Pakaian dan Dekorasi', 1),
(6, 'CT', 'Catering', '60f380d178024.jpg', 'Catering', 1),
(7, 'FG', 'Fasilitas Gedung', '60f3811fafe07.png', '<ol><li>Kursi 500 Set &amp; Sofa VIP</li><li>Ruangan Full AC</li><li>Ruangan VIP, Ruangan Tunggu</li></ol>', 1),
(8, 'DPV', 'Dokumentasi Photo & Video', '60f38182773e6.jpg', 'Dokumentasi Photo dan Video', 1);

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
(1, 'jessicajohn', '60f3d726e45d7.jpg', 'John', '60f3d726e45d71.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc...', 'john', 'john', 'john', 'Jessica', '60f3d726e45d72.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc...', 'jessica', 'jessica', 'jessica', '2021-08-01', '8:00 PM - 9:00 PM', 'Kebon Jeruk', '-6.190338506751541', '106.76629880522978', '2021-08-01', '8:00 PM - 9:00 PM', 'Kebon Jeruk', '-6.190338506751541', '106.76629880522978', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc...', 'John', 1);

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
(1, '85JT', 'Paket 85 Juta', '85', '60f382543b3a8.jpg', 1, 'Paket nikahan harga 85 juta', 1),
(2, '75JT', 'Paket 75 Juta', '75', '60f3827f9b6f0.png', 0, 'Paket nikahan 75 juta', 1),
(3, '65JT', 'Paket 65 Juta', '65', '60f382ad0cbb4.jpg', 0, 'Paket nikah 65 Juta', 1),
(4, '50JT', 'Paket 50 Juta', '50', '60f382e2ee4be.png', 0, 'Paket nikah 50 Juta', 1),
(5, '20JT', 'Paket 20 Juta', '20', '60f39444f1ea8.jpg', 0, 'Paket 20 Juta', 1);

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
(1, 1, '2'),
(2, 1, '4'),
(3, 1, '5'),
(4, 1, '6'),
(5, 1, '7'),
(6, 1, '8'),
(7, 2, '2'),
(8, 2, '4'),
(9, 2, '5'),
(10, 2, '7'),
(11, 2, '8'),
(12, 3, '2'),
(13, 3, '4'),
(14, 3, '5'),
(15, 3, '6'),
(16, 3, '8'),
(17, 4, '2'),
(18, 4, '4'),
(19, 4, '8'),
(27, 5, '26'),
(28, 5, '4'),
(29, 5, '5'),
(30, 5, '6');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding_package`
--
ALTER TABLE `wedding_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding_package_detail`
--
ALTER TABLE `wedding_package_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
