-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 04:54 PM
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
-- Database: `moto`
--

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `imagen`) VALUES
(1, 'Zanella', 'logozanella.jpg'),
(2, 'Yamaha', 'logoyamaha.jpg'),
(3, 'Suzuki', 'logosuzuki.jpg'),
(10, 'Zanello', '1700345127.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motos`
--

CREATE TABLE `motos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `anio` int(11) NOT NULL,
  `combustible` varchar(50) NOT NULL,
  `potencia` int(11) NOT NULL,
  `cilindrada` int(11) NOT NULL,
  `kilometros` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `marcas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motos`
--

INSERT INTO `motos` (`id`, `modelo`, `anio`, `combustible`, `potencia`, `cilindrada`, `kilometros`, `imagen`, `precio`, `marcas_id`) VALUES
(7, 'Zr-150l', 2010, 'Nafta', 12, 150, 11500, 'zr150l.webp', 500.00, 1),
(8, 'Zr-200-Ohc', 2022, 'Nafta', 17, 200, 0, 'zr200.webp', 600.00, 1),
(9, 'Fz-S-Fi', 2018, 'Nafta', 12, 149, 7200, 'fs-s-f1.webp', 900.00, 2),
(10, 'R1-1000', 2017, 'Nafta', 30, 1000, 9600, 'r1-1000.webp', 700.00, 2),
(11, 'Ax-100', 2014, 'Nafta', 10, 100, 10600, 'ax-100.webp', 300.00, 3),
(12, 'Rm-z-450', 2021, 'Nafta', 50, 450, 0, 'rm-z-450.webp', 504.00, 3),
(23, '256', 2023, 'nafta', 2, 2, 2, '1700339526.jpg', 3.00, 10);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` enum('superadmin','admin','usuario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_usuario`, `nombre_completo`, `password`, `rol`) VALUES
(3, 'corre@correo.com', 'daniel', 'Daniel Cataldo', '$2y$10$fIzEIAwtD4xi3ucbcrsaCes2cMDmwt9fMAhgQIf3wqZaBHvlbpwpy', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marca_fk` (`marcas_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `motos`
--
ALTER TABLE `motos`
  ADD CONSTRAINT `marca_fk` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
