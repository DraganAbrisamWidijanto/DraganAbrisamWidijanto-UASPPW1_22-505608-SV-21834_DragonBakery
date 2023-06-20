-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 01:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragonbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesananpelanggan`
--

CREATE TABLE `pesananpelanggan` (
  `order_id` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesananpelanggan`
--

INSERT INTO `pesananpelanggan` (`order_id`, `name`, `email`, `phone`, `message`) VALUES
('od001', 'Ucup', 'ucup@gmail.com', '081239388477', 'order kue coklat meses'),
('od002', 'abdul', 'abdul@gmail.com', '081296165098', 'saya pesen roti, tapi rotinya seperti roti o stasiun lempuyangan'),
('od003', 'Akane', 'AkaneKurokawa@gmail.com', '08183817983', 'pesen kue untuk perayaan ultah teman saya'),
('od004', 'Senkuu', 'SenkuuIshigami@gmail.com', '08123867423', 'pesan roti yang dapat di ajak berlaut, rotinya harus tahan berbulan-bulan'),
('od005', 'Markonah', 'Markonah@gmail.com', '08737682173', 'saya pesan roti yang dapat dinikmati sambil nonton bioskop, roti nya ukuran kecil agar bisa diumpetin saat masuk bioskop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesananpelanggan`
--
ALTER TABLE `pesananpelanggan`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
