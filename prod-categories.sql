-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 07:27 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prod-categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthstones`
--

CREATE TABLE `birthstones` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `desc_short` varchar(250) NOT NULL,
  `desc_long` varchar(500) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birthstones`
--

INSERT INTO `birthstones` (`id`, `name`, `price`, `sale`, `desc_short`, `desc_long`, `link`) VALUES
(1, 'Birthstone Gold Necklace with Personalized Initial', '₱ 380.00', 0, '', '', 'img/birthsn.jpg'),
(2, 'August Birthstone Peridot Jewelry Set', '₱ 350.00', 1, '', '', 'img/peridot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `couple`
--

CREATE TABLE `couple` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `desc_short` varchar(250) NOT NULL,
  `desc_long` varchar(300) NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`id`, `name`, `price`, `sale`, `desc_short`, `desc_long`, `link`) VALUES
(1, 'Metal Tag Personalized Couple Bracelet', '₱ 560.00', 0, '', '', 'img/couple1.jpg'),
(2, 'Personalized Eternity Couple Bracelet', '₱ 350.00', 0, '', '', 'img/couple8.jpg'),
(3, 'My Heart Personalized Tag Necklace', '₱ 480.00', 0, '', '', 'img/couplen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `desc_short` varchar(250) DEFAULT NULL,
  `desc_long` varchar(500) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `price`, `sale`, `desc_short`, `desc_long`, `link`) VALUES
(1, 'Braided Matte Onyx Bracelet', '₱ 225.00', NULL, 'Simple but classic stylish bracelet made from braided leather accented with matte onyx beads.', NULL, 'img/braid.jpg'),
(2, 'Eagle\'s Eye Tiger\'s Eye Buddha Bracelet', '₱ 350.00', NULL, 'A unique and earthy theme of blue and brown featuring eagle\'s eye beads and tiger\'s eye beads.', NULL, 'img/buddha.jpg'),
(3, 'Black Magnetic Hematite Necklace', '₱ 180.00', 1, 'This shiny black beauty is made from high quality natural hematite stones that is popular for its therapeutic benefits.', NULL, 'img/hematite.jpg'),
(4, 'Lone Hex Minimalist Cord Necklace', '₱ 150.00', NULL, 'Sometimes less is more just like this minimalist necklace with a lone but eye-catching hex pendant. ', NULL, 'img/hex.jpg'),
(5, 'Black & White Lava Jasper Bracelet', '₱ 345.00', 1, NULL, NULL, 'img/lavajasper.jpg'),
(6, 'Classic Black Onyx Bracelet ', '₱ 265.00', NULL, 'This black onyx bracelet has a simple but classic design that you can wear on any event or occasion.', NULL, 'img/onyx.jpg'),
(7, 'Matte Onyx Multi-strand Bracelet', '₱ 280.00', 1, 'This bracelet is accented with a beautiful metallic spacer with celtic design with a few tiger\'s eye and hematite beads.', NULL, 'img/tiger.jpg'),
(8, 'Men\'s Ethnic Tribal Necklace', '₱ 180.00', NULL, NULL, NULL, 'img/tribal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rosaries`
--

CREATE TABLE `rosaries` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `desc_short` varchar(250) NOT NULL,
  `desc_long` varchar(500) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rosaries`
--

INSERT INTO `rosaries` (`id`, `name`, `price`, `sale`, `desc_short`, `desc_long`, `link`) VALUES
(1, 'Red Coral Wrap Around Rosary Bracelet', '₱ 320.00', 1, '', '', 'img/coral.jpg'),
(2, 'Yin Yang Crystal Rosary Bracelet', '₱ 250.00', 0, '', '', 'img/rosary.jpg'),
(3, 'Blue Crystal Swarovski Rosary Bracelet', '₱ 295.00', 0, '', '', 'img/rosaryblue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(20) NOT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `desc_short` varchar(250) NOT NULL,
  `desc_long` varchar(500) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `price`, `sale`, `desc_short`, `desc_long`, `link`) VALUES
(1, 'Pearls and Agate Jewelry Set', '₱ 380.00', 1, '', '', 'img/agate.jpg'),
(2, 'Autumn Sunset Accent Necklace', '₱ 330.00', NULL, '', '', 'img/bead.jpg'),
(3, 'Crystal Amethyst Beaded Earrings', '₱ 300.00', 1, '', '', 'img/beadearrings.jpg'),
(4, 'Braided Matte Onyx Bracelet', '₱ 225.00', NULL, '', '', 'img/braid.jpg'),
(5, 'Beaded Wrap Boho Bracelet', '₱ 195.00', NULL, '', '', 'img/cuffboho.jpg'),
(6, 'Nature\'s Lover Green Agate Bracelet', '₱ 280.00', NULL, '', '', 'img/green.jpg'),
(7, 'Silver Dangling Earrings', '₱ 320.00', NULL, '', '', 'img/mexsilver.jpg'),
(8, 'Classic Black Onyx Bracelet', '₱ 265.00', NULL, '', '', 'img/onyx.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthstones`
--
ALTER TABLE `birthstones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rosaries`
--
ALTER TABLE `rosaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthstones`
--
ALTER TABLE `birthstones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `couple`
--
ALTER TABLE `couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rosaries`
--
ALTER TABLE `rosaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
