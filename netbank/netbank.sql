-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 02:45 PM
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
-- Database: `netbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `szamlak`
--

CREATE TABLE `szamlak` (
  `id` int(11) NOT NULL,
  `szam` varchar(27) NOT NULL,
  `userid` int(11) NOT NULL,
  `engyenleg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `szamlak`
--

INSERT INTO `szamlak` (`id`, `szam`, `userid`, `engyenleg`) VALUES
(1, '50764480-55419750-97420642-', 1, 0),
(2, '85947064-70044166-24970107-', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `azonosito` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nev`, `password`, `azonosito`) VALUES
(1, 'Gipsz Jakab', '$2y$10$eon49QUT02MW9MOHNN15qOyVqP3d5fiX55n6lSV33/xu2sCLCP1Q2', '43127455'),
(2, 'Gipsz Jakab', '$2y$10$/tMw01YnAJz8RCAb92D9G.252tI05z6nrk6uve4Hls5r9Nu2H9qWm', '90732984'),
(3, 'Gipsz Jakab', '$2y$10$/I5hL6F3Y3E103eAxdfDte65Av77BPtrU3nIEy2PkAIKQPViQQrnu', '74117271'),
(4, 'Gipsz Jakab', '$2y$10$9xm8XuK0RoqZHqS5yJBL.eq04iBszPxd5ndLuGRNaWRIzQImVR1au', '93269427'),
(5, 'Gipsz Jakab', '$2y$10$dHbVAbMugxzJhsYRiNuVPONDbP/W6EAIMen5svlJrpnTAlsQxlqpW', '13100109');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `szamlak`
--
ALTER TABLE `szamlak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `szamlak`
--
ALTER TABLE `szamlak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
