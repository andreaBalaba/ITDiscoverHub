-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2024 at 07:01 AM
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
-- Database: `dbITDiscoverHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblTablet`
--

CREATE TABLE `tblTablet` (
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `batteryLife` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `releaseDate` date NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblTablet`
--

INSERT INTO `tblTablet` (`brand`, `model`, `screen`, `processor`, `RAM`, `storage`, `batteryLife`, `os`, `releaseDate`, `price`) VALUES
('Samsung', 'Galaxy Tab S9 Ultra', 'The device is equipped with a 14.6-inch Dynamic AMOLED 2X display with a resolution of 1848 x 2960 pixels.', 'Qualcomm Snapdragon 8 Gen 2', '12GB', '256GB', 'The device features a substantial 11,200mAh battery, and the actual usage time will vary based on the specific usage scenario.', 'Android 13 with One UI 5.1 on top', '2023-07-29', 1319),
('Samsung', 'Galaxy Tab S9', '11.0-inch Dynamic AMOLED 2X display with 120Hz refresh rate and 1600 x 2560 resolution', 'Qualcomm Snapdragon 8 Gen 2', '8GB ', '128GB', 'Up to 15 hours of video playback (Wi-Fi) or 13 hours (5G)', 'Android 13', '2023-07-11', 399),
('Samsung', 'Samsung Galaxy Tab A8 Computer Tablet', 'The device boasts a 10.5-inch WUXGA+ TFT LCD display with a resolution of 1920 x 1200 pixels.', 'Octa-core (2GHz)', '4GB ', '32GB', 'The device is equipped with a 7,040mAh (typical) battery, providing up to 15 hours of video playback.', 'Android 12L', '2022-01-11', 173),
('Samsung', 'Galaxy Tab S6 Lite 2022', '10.4-inch WUXGA+ (2000 x 1200) TFT LCD and 60Hz refresh rate', 'Qualcomm Snapdragon 732G octa-core (2.3 GHz Kryo 470 Gold + 1.8 GHz Kryo 470 Silver)', '4GB', '64GB ', '7040mAh battery and up to 15 hours of video playback (Wi-Fi)', 'Android 12 with One UI 4.1.2 ', '2023-05-23', 212.76),
('Lenovo', 'Lenovo Tab P12 Pro', '12.7\" 3K (2944 x 1840) IPS LCD touchscreen, TDDI technology, 400 nits brightness', 'MediaTek Dimensity 7050 Octa-core CPU (2.60 GHz)', '8GB LPDDR4X', '128GB UFS 2.2', 'Up to 13 hours', 'Android 13', '2021-09-08', 699.99);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
