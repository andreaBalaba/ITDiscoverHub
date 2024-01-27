-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2024 at 11:35 AM
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
('Lenovo', 'Lenovo Tab P12 Pro', '12.7\" 3K (2944 x 1840) IPS LCD touchscreen, TDDI technology, 400 nits brightness', 'MediaTek Dimensity 7050 Octa-core CPU (2.60 GHz)', '8GB LPDDR4X', '128GB UFS 2.2', 'Up to 13 hours', 'Android 13', '2021-09-08', 699.99),
('Lenovo', 'ThinkPad X12 Detachable', '10.6-inch 2K IPS LCD, 2000 x 1200 pixels', 'Qualcomm Snapdragon 680', '4GB ', '64GB ', '7700mAh', 'Android 12', '2021-01-11', 159.78),
('Lenovo', 'Lenovo Tab M11', 'The device features an 11-inch IPS LCD display with a resolution of 1200 x 1920 (2K), a brightness of 400 nits, and an anti-glare coating.', 'MediaTek Helio G88 octa-core processor (2.0 GHz)', '4GB ', '64GB ', '7040mAh', 'Android 11', '2021-01-15', 174.94),
('Lenovo', 'ThinkPad X12 Detachable', '10.6-inch 2K IPS LCD, 2000 x 1200 pixels', 'Qualcomm Snapdragon 680', '4GB ', '64GB ', '7700mAh', 'Android 12', '2021-01-11', 159.78),
('Lenovo', 'Lenovo Tab M11', 'The device features an 11-inch IPS LCD display with a resolution of 1200 x 1920 (2K), a brightness of 400 nits, and an anti-glare coating.', 'MediaTek Helio G88 octa-core processor (2.0 GHz)', '4GB ', '64GB ', '7040mAh', 'Android 11', '2021-01-15', 174.94),
('Lenovo', 'Lenovo Tab P11 Plus', 'The device features an 11-inch 2K (1200 x 2000 pixels) IPS LCD display with narrow bezels, a brightness of 400 nits, and utilizes TDDI technology for enhanced touch responsiveness. Additionally, it holds Netflix HD certification.', 'MediaTek Helio G90T octa-core processor', '4GB ', '64GB ', 'Up to 15 hours of video playback', 'Android 11', '2021-07-28', 301.75),
('Lenovo', 'Lenovo Tab M8', '8\" IPS HD (1280 x 800) LCD, 350nits, 10-point multitouch', 'MediaTek Helio A22 Tab, quad-core, 2.0GHz', '2GB ', '32GB ', 'Up to 15 hours', 'Android 10 Pie', '2019-08-19', 66.53),
('Redmi', 'XIAOMI Redmi Pad ', '10.61-inch 2K (1200 x 2000) IPS LCD, 90Hz refresh rate, 400 nits brightness', 'MediaTek Helio G99', '3GB', '64GB', '8000mAh', 'Android 12 with MIUI 13', '2022-05-10', 248.56),
('Redmi', 'Redmi Pad SE', 'The device is equipped with a 11-inch FHD+ LCD display boasting a resolution of 1920 x 1200 pixels', 'Qualcomm Snapdragon 680 6nm SoC', '4GB', '128GB ', '8000mAh ', 'MIUI Pad 14 based on Android 12', '2023-10-15', 195.29),
('Redmi', 'Mi Pad 4 Plus (2018)', '10.1-inch IPS LCD display with a resolution of 1920 x 1200 pixels', 'Qualcomm Snapdragon 660 octa-core processor', '4GB ', '64GB ', 'Up to 15 hours of video playback', 'Android 8.1 Oreo (upgradable to Android 9 Pie)', '2018-06-02', 759.95),
('Redmi', 'XIAOMI Mi Pad 5 Tablet 6G/128G 256G Snapdragon 860', 'The device features an 11-inch display with a resolution of 2560 x 1600 WQHD+ (2.5K), a 120Hz refresh rate, and a brightness of 500 nits. It supports over 1 billion colors and includes DCI-P3 color gamut support.', 'Qualcomm® Snapdragon™ 860 Octa-core up to 2.96GHz', '6GB', '128GB', '8720mAh', 'MIUI 12.5 based on Android 11', '2021-08-21', 301.67),
('Redmi', 'New Xiaomi Mi Pad 6 Tablet Snapdragon 870 11 2.8k Ultra Clear Eye Protection', 'The device boasts an 11-inch 2.8K (2720 x 1600) Ultra HD LCD display with a pixel density of 309PPI. It features a 144Hz variable refresh rate, TÜV Rheinland low blue light certification, and full-range DC dimming.', 'Qualcomm Snapdragon 870 octa-core processor', '6GB ', '128GB', '8840mAh', 'Android 13 with MIUI 14 Pad', '2023-04-18', 312.32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
