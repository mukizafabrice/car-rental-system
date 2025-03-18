-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 04:38 PM
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
-- Database: `car_rental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `price_per_day` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `brand`, `model`, `year`, `price_per_day`, `image`, `created_at`) VALUES
(3, 'Family Wagon', 'Subaru', 'Outback', '2022', 70.00, '../assets/images/NDI_TAP.png', '2025-03-16 07:02:31'),
(4, 'Luxury Sedan', 'Lexus', 'LS', '2023', 130.00, '../assets/images/cc_2023LEC360006_01_1280_085.jpg', '2025-03-16 07:07:58'),
(5, 'Electric Hatch', 'Nissan', 'Leaf', '2024', 85.00, '../assets/images/th.jpeg', '2025-03-16 07:10:56'),
(6, 'Electric Crossover', 'Volkswagen', 'ID.04', '2022', 98.00, '../assets/images/volkswagen.jpeg', '2025-03-16 07:15:35'),
(7, 'Midsize Truck', 'Nissan', 'Frontier', '2023', 75.00, '../assets/images/th nissan-frontier.jpeg', '2025-03-16 07:19:26'),
(8, 'Adventure Vehicle', 'Toyota', '4Runner', '2022', 88.00, '../assets/images/toyota.jpeg', '2025-03-16 07:57:49'),
(9, 'Work Van', 'Ford', 'Transit', '2024', 78.00, '../assets/images/Work Van.jpeg', '2025-03-16 08:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin123', 'admin@car-rental.com', '$2y$10$NSqr392VMTB3K6GpL3H33.kmpM/qEsBH4g7Mum6YT5oM/zc9ekQNi\r\n', 'admin', '2025-03-11 10:54:34'),
(2, 'Fabrice ', 'mukizafabrice18@gmail.com', '$2y$10$WkURSzhJ/jCKmrnPbImpe.DgGgqqjW8IPxvovm6U3DXCG7VhIY5yy', 'customer', '2025-03-11 11:49:57'),
(3, 'john', 'john@catrental.com', '$2y$10$NSqr392VMTB3K6GpL3H33.kmpM/qEsBH4g7Mum6YT5oM/zc9ekQNi', 'admin', '2025-03-12 06:13:37'),
(4, 'peter', 'peter@gmail.com', '$2y$10$tz3AgovvwhtwOiLh5qw6AOnqbLmLkFvNLhmavQq.IfpfuN0JKWLoG', 'customer', '2025-03-12 07:54:38'),
(5, 'doe', 'doe@gmail.com', '$2y$10$U9GJTSizHP6qeFBerNLc3uj27iulMW/6CBw2MHPBoVnC9TbSs6hLK', 'customer', '2025-03-16 09:31:59'),
(6, 'jeff', 'bbimenyimana@gmail.com', '$2y$10$.ilOSOKJqtw8iHfKC3iN.ei4lkWa3aryU.rrxGhKrzyG7dYB0i7yu', 'customer', '2025-03-16 10:32:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
