-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2026 at 01:00 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id_menu` int NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `kategori_menu` varchar(50) DEFAULT NULL,
  `harga_dasar` decimal(10,2) NOT NULL,
  `tipe_menu` enum('makanan berat','dessert','minuman') NOT NULL,
  `tingkat_pedas` int DEFAULT NULL,
  `kalori` int DEFAULT NULL,
  `ukuran_cup` varchar(20) DEFAULT NULL,
  `jenis_topping` varchar(50) DEFAULT NULL,
  `jumlah_layer` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id_menu`, `nama_item`, `kategori_menu`, `harga_dasar`, `tipe_menu`, `tingkat_pedas`, `kalori`, `ukuran_cup`, `jenis_topping`, `jumlah_layer`) VALUES
(105, 'Nasi Goreng Spesial', 'Main Course', 25000.00, 'makanan berat', 3, 600, NULL, 'Telur', NULL),
(112, 'Ayam Geprek', 'Main Course', 20000.00, 'makanan berat', 5, 550, NULL, NULL, NULL),
(201, 'Spaghetti Bolognese', 'Pasta', 35000.00, 'makanan berat', 1, 450, NULL, 'Keju', NULL),
(204, 'Sate Ayam', 'Grill', 30000.00, 'makanan berat', 2, 400, NULL, 'Bawang Goreng', NULL),
(215, 'Burger Sapi', 'Fast Food', 40000.00, 'makanan berat', 0, 700, NULL, NULL, NULL),
(330, 'Pizza Pepperoni', 'Italian', 80000.00, 'makanan berat', 2, 800, NULL, 'Keju Mozzarella', NULL),
(335, 'Bakso Urat', 'Indonesian', 18000.00, 'makanan berat', 4, 350, NULL, 'Seledri', NULL),
(402, 'Steak Sirloin', 'Western', 120000.00, 'makanan berat', 0, 900, NULL, NULL, NULL),
(410, 'Nasi Padang Rendang', 'Indonesian', 28000.00, 'makanan berat', 3, 750, NULL, NULL, NULL),
(505, 'Sushi Roll', 'Japanese', 45000.00, 'makanan berat', 0, 300, NULL, 'Nori', NULL),
(601, 'Chocolate Lava Cake', 'Cake', 25000.00, 'dessert', NULL, 400, NULL, 'Ice Cream', 2),
(612, 'Tiramisu Cup', 'Pastry', 22000.00, 'dessert', NULL, 350, NULL, 'Coklat Bubuk', 3),
(628, 'Strawberry Cheesecake', 'Cake', 28000.00, 'dessert', NULL, 450, NULL, 'Stroberi', 2),
(709, 'Pudding Coklat', 'Pudding', 15000.00, 'dessert', NULL, 200, NULL, 'Vla', 1),
(715, 'Mille Crepes', 'Cake', 30000.00, 'dessert', NULL, 380, NULL, 'Coklat', 15),
(881, 'Es Kopi Susu', 'Coffee', 18000.00, 'minuman', NULL, 150, 'Medium', 'Gula Aren', NULL),
(885, 'Matcha Latte', 'Tea', 25000.00, 'minuman', NULL, 200, 'Large', 'Whipped Cream', NULL),
(902, 'Lemon Tea', 'Tea', 12000.00, 'minuman', NULL, 100, 'Small', NULL, NULL),
(914, 'Mango Smoothies', 'Juice', 22000.00, 'minuman', NULL, 250, 'Large', NULL, NULL),
(920, 'Milkshake Coklat', 'Beverage', 20000.00, 'minuman', NULL, 300, 'Medium', 'Choco Chips', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=921;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
