-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 12:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wethrift`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_user` int(25) NOT NULL,
  `id_produk` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_user`, `id_produk`) VALUES
(1, 1),
(1, 1),
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `harga` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `gambar`, `produk`, `harga`) VALUES
(1, 'baju1.png', 'Uniqlo White T-Shirt (S)', 90000),
(2, 'baju1.png', 'Uniqlo White T-Shirt (M)', 95000),
(3, 'baju1.png', 'Uniqlo White T-Shirt (L)', 130000),
(4, 'baju1.png', 'Uniqlo White T-Shirt (XL)', 140000),
(5, 'celana1.png', 'Uniqlo White Jeans (XL)', 150000),
(6, 'celana1.png', 'Uniqlo White Jeans (L)', 170000),
(7, 'celana1.png', 'Uniqlo White Jeans (M)', 100000),
(8, 'celana1.png', 'Uniqlo White Jeans (S)', 80000),
(9, 'sepatu1.png', 'Uniqlo Shoes (U 38)', 200000),
(10, 'sepatu1.png', 'Uniqlo Shoes (U 40)', 250000),
(11, 'sepatu1.png', 'Uniqlo Shoes (U 42)', 350000),
(12, 'sepatu1.png', 'Uniqlo Shoes (U 44)', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `alamat`, `no_hp`) VALUES
(3, 'dije', 'pasif', 'dijenaufal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jalan darjo', '2147483647'),
(4, 'Molion', 'Mulya', 'adadadadadad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jl granit kumala 2 no 49 KBD,Gresik', '082192506688');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
