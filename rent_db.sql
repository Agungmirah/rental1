-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 05:03 AM
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
-- Database: `rent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `alasan` varchar(225) NOT NULL,
  `ktp` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`id`, `nama`, `phone`, `address`, `alasan`, `ktp`) VALUES
(3, 'gita', '09863457272', 'batuyang, gianyar', 'djhbfdjhf hkfkuhfbds', 'IMG_20181231_222121.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rent_form`
--

CREATE TABLE `rent_form` (
  `Id` int(225) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `address` varchar(15) NOT NULL,
  `location` varchar(225) NOT NULL,
  `rent` int(225) NOT NULL,
  `motorcycle` enum('scoopy','vario 125','klx 150','nmax','vario 150','kawasaki ninja','mio modif','vespa antik','aerox','supra x 125','vespa matic','pcx') NOT NULL,
  `start` date NOT NULL,
  `time_start` time NOT NULL,
  `end` date NOT NULL,
  `time_end` time NOT NULL,
  `ktp` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_form`
--

INSERT INTO `rent_form` (`Id`, `name`, `phone`, `address`, `location`, `rent`, `motorcycle`, `start`, `time_start`, `end`, `time_end`, `ktp`) VALUES
(8, 'ada', '08873121059', 'gianyar, bali', 'Denpasar, bali', 5, 'mio modif', '2022-09-23', '21:20:00', '2022-09-24', '21:20:00', ''),
(10, 'Adi', '08873121059', 'gianyar, bali', 'Denpasar, bali', 9, 'nmax', '2022-09-20', '23:35:00', '2022-09-20', '17:35:00', ''),
(12, 'ghyh', '87643554', 'fhkhgkhguug bjg', 'yjkjyybli6b', 3, 'vespa antik', '2022-09-26', '02:18:00', '2022-09-23', '03:19:00', 'Capture.PNG'),
(13, 'bggg', '08873121059', 'gianyar, bali', 'Denpasar, bali', 2, 'kawasaki ninja', '2022-09-28', '12:30:00', '2022-09-29', '12:30:00', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(5) NOT NULL,
  `level` enum('admin','super admin') NOT NULL,
  `profil` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `profil`) VALUES
(1, 'gusti', 'admin1', '1234', 'admin', ''),
(2, 'ana', 'admin2', '234', 'super admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_form`
--
ALTER TABLE `rent_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent_form`
--
ALTER TABLE `rent_form`
  MODIFY `Id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
