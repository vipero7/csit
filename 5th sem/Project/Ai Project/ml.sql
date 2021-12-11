-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 08:05 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ml`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `sn` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `weather` float NOT NULL,
  `crowd` float NOT NULL,
  `infrastructure` float NOT NULL,
  `simsar` float NOT NULL,
  `cost` float NOT NULL,
  `distance` float NOT NULL,
  `security` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`sn`, `place`, `image`, `weather`, `crowd`, `infrastructure`, `simsar`, `cost`, `distance`, `security`) VALUES
(1, 'kathmandu', '/assets/uploads/1533051788_kathmandu-ok.jpg', 12.4, 18.99, 19.22, 2.22, 11.112, 1, 15.559),
(2, 'pokhara', '/assets/uploads/1533050040_pokhara-ok.jpg', 17, 11.55, 12.11, 17.55, 16.55, 7.12, 12.55),
(3, 'Ilam', '/assets/uploads/1533050057_ilam-ok.jpg', 18.12, 7.88, 8.33, 13.22, 11.22, 15.78, 14.88),
(4, 'Mustang', '/assets/uploads/1533051382_mustang-ok.jpg', 17.12, 5.55, 4.44, 2.22, 12.33, 19.33, 10.33),
(5, 'Chitwan', '/assets/uploads/1533051407_chitwan-ok.jpg', 17.55, 14.33, 12.22, 8.22, 12.22, 6.22, 9.99),
(6, 'Dhulikhel', '/assets/uploads/1533051426_dhulikhal-ok.jpg', 14.55, 12.22, 13.44, 8.33, 12.22, 2, 14.33),
(7, 'Sukuta', '/assets/uploads/1533051447_sukuta-ok.jpg', 14.99, 11.33, 9.77, 5.55, 13.66, 4.33, 10.22),
(8, 'Jarsing pauwa', '/assets/uploads/1533051463_jarsingpauwa-ok.jpg', 15.99, 8.33, 7.44, 10.33, 15.44, 3.22, 10.44),
(9, 'Kakani', '/assets/uploads/1533051477_kakani-ok.jpg', 15.8, 10.11, 7.55, 5.44, 14.77, 10.77, 18.66),
(10, 'Godawari', '/assets/uploads/1533051518_godabari-ok.jpg', 17.99, 13.88, 9.44, 17.88, 10.55, 9.55, 8.44),
(11, 'Sisnari', '/assets/uploads/1533050075_sisnari-ok.jpg', 14.55, 14.77, 7.55, 18.44, 11.77, 13.55, 8.55),
(16, 'Everest Base Camp', '/assets/uploads/1533135211_everest-ok.jpg', 1.566, 2.7898, 4.7888, 15.8989, 17.8349, 17.8735, 3.78993),
(17, 'Annapurna Base Camp (ABC)', '/assets/uploads/1533135246_abc-ok.jpg', 1.67, 3.8766, 4.3433, 17.0978, 16.9888, 13.888, 6.99998),
(18, 'Jiri', '/assets/uploads/1533135264_jiri-ok.jpg', 11.89, 11.838, 12.111, 14.332, 13.999, 12.222, 12.8272),
(19, 'Ghandruak', '/assets/uploads/1533135607_ghandruak-ok.jpg', 5.44, 8.5454, 11.2342, 12.2233, 11.2323, 9.9838, 17.2525);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(5, 'tutu', '8cb2237d0679ca88db6464eac60da96345513964 ', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
