-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 04:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it discover hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllaptop`
--

CREATE TABLE `tbllaptop` (
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `Storage` varchar(255) NOT NULL,
  `releaseDate` date DEFAULT NULL,
  `price` float NOT NULL,
  `imageFileName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllaptop`
--

INSERT INTO `tbllaptop` (`brand`, `model`, `os`, `processor`, `RAM`, `Storage`, `releaseDate`, `price`, `imageFileName`) VALUES
('Dell', 'Dell New Inspiron 15.6', 'Windows 11 Home ', 'Intel Core i3, i5, or i7, or AMD Ryzen 3, 5, or 7', '8GB', '128GB', '2023-10-25', 422.5, 'dell-inspiron15.6.jpg'),
('Dell', 'Dell XPS 13', 'Windows 11 Home', '12th Gen Intel® Core™ i5-1230U ', '8GB', '256GB', '2024-01-18', 1149.99, 'Dell-XPS-13.jpg'),
('Dell', 'Dell Latitude 5430 ', 'Windows 11 Pro', '12th Gen Intel® Core™ processors, ranging from i3 to i7', '8GB', '256GB', '2022-03-31', 695, 'Dell-Latitude-5430.jfif'),
('Dell', 'Dell Vostro 3510', 'Windows 11 Home', '11th Generation Intel® Core i3, i5 or i7 processors', '4GB', '256GB', '2021-08-04', 1398.99, 'Dell-Vostro-3510.jfif'),
('Dell', 'Dell g15 5521 gaming', 'Windows 11 Home', '13th Gen Intel® Core™ i5-13450HX ', '8GB', '256GB', '2022-05-16', 2354.23, 'Dellg15.jpg'),
('Samsung', 'Galaxy Book 3 Pro 360', 'Windows 11 Home', 'Intel Core i5-1340P (up to 5.4GHz) 12th Gen', '16GB', '512GB', '2023-02-01', 1185.99, 'Samsung-Galaxy-Book-Pro.jpg'),
('Samsung', 'Samsung Galaxy Book2 Business Laptop', 'Windows 11 Pro', 'Intel® Core™ i5-1235U vPro ', '16GB', '256GB', '2022-02-27', 1370.85, 'Samsung-Galaxy-Business.jpg'),
('Samsung', 'Samsung Galaxy Book2 Pro', 'Windows 11 Home', '12th Gen Intel® Core™ i5', '16GB', '512GB', '2022-02-27', 1312.22, 'Samsung-Galaxy-Book2-Pro.jpg'),
('Samsung', 'Samsung XE303c12 11.6', 'Chrome OS', 'Samsung Exynos 5250 dual-core 1.7GHz', '2GB', '32GB', '2012-09-18', 28, 'SamsungXE303c1211.6.jpeg'),
('Samsung', 'Samsung Chromebook 4 (XE310XBA-K01US)', 'Chrome OS', 'Intel Celeron N4000 (1.1 GHz base, up to 2.6 GHz burst)', '4GB', '32GB', '2019-10-05', 175, 'Chromebook 4 (XE310XBA-K01US).jpeg'),
('HP', 'HP Pavilion 15-DK0056 Gaming', 'Windows 10 Home', 'Intel Core i5-9300H ', '8GB', '256GB', '2019-08-20', 888, 'HP-Pavilion-15-DK0056-Gaming.jpg'),
('HP', 'HP Envy 13th Gen Intel Core i5-1335U', 'Windows 11 Home', '13th Gen Intel Core i5-1335U ', '8GB', '512GB', NULL, 716.24, 'HP-Envy-13th-Gen-Intel-Core-i5-1335U.jfif'),
('HP', 'HP Spectre X360 14-EF0013DX 13.5\" 3k2k UWVA Touch Laptop', 'Windows 11 Home', '13th Gen Intel Core i5-1335U ', '8GB', '512GB', '2024-01-08', 1399, ''),
('HP', 'HP Laptop Brand New Original Elitebook 820 G1/840 ', 'Windows 8.1 Pro', '4th generation Intel Core processors', '4GB', '128GB', '2013-10-01', 185.74, 'HP-Elitebook.jpg'),
('HP', 'HP Omen 16-B0002TX Gaming Laptop', 'Windows 11 Home', 'Intel® Core™ i5-11400H ', '16GB', '512GB', '2022-05-18', 1126.9, 'HP-Omen.jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
