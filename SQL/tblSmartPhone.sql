-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2024 at 11:32 AM
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
-- Table structure for table `tblSmartPhone`
--

CREATE TABLE `tblSmartPhone` (
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `screen` text NOT NULL,
  `os` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `GPU` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `Storage` varchar(255) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblSmartPhone`
--

INSERT INTO `tblSmartPhone` (`brand`, `model`, `screen`, `os`, `chipset`, `GPU`, `RAM`, `Storage`, `Price`) VALUES
('Samsung', 'Samsung Galaxy S23 Ultra', '6.8-inch QHD+ Dynamic AMOLED 2X Display (1440 x 3088 Pixels, 501 ppi) with Corning Gorilla Glass Victus 2, 19.3:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, 1,750nits peak brightness, and punch-hole', 'Android 13 with One Ui 5.1', 'Qualcomm Snapdragon 8 Gen 2 Mobile Platform for Galaxy', 'Adreno 740', '12GB', '256GB', 81990),
('Samsung', 'Samsung Galaxy Z Flip 5', '6.7-inch Foldable FHD+ Dynamic AMOLED 2X Main Display (1080 x 2640 Pixels, 426 ppi) with 22:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, 1200 nits peak brightness, and punch-hole', 'Android 13 with One UI 5.1.1', 'Qualcomm Snapdragon 8 Gen 2 (4 nm)', 'Adreno 740', '8 GB', '256GB', 64990),
('Samsung', 'Samsung Galaxy S23 FE', '6.4-inch FHD+ AMOLED Display (1080 x 2340 Pixels, 403 ppi) with Corning Gorilla Glass 5, 19.5:9 Aspect Ratio, 120Hz Refresh Rate, 1,450 nits peak brightness, HDR10+, and punch-hole', 'Android 13 with One UI 5.1', 'Exynos 2200', 'Xclipse 920', '8 GB', '128GB', 36990),
('Samsung', 'Samsung Galaxy A05s', '6.7-inch FHD+ PLS LCD Display (1080 x 2400 Pixels, 393 ppi) with 20:9 Aspect Ratio, 90Hz Refresh Rate, and notch', 'Android 13 with One UI', 'Qualcomm Snapdragon 680 (6 nm)', 'Adreno 610', '4 GB', '128GB', 7990),
('Samsung', 'Samsung Galaxy A54 5G', '6.4-inch FHD+ Super AMOLED Display (1080 x 2340 Pixels, 403 ppi) with Scratch Resistant Glass, 19.5:9 Aspect Ratio, 120Hz Refresh Rate, 1000nits (high brightness mode), and punch-hole', 'Android 13 with One UI 5.1', 'Samsung Exynos 1380', 'Mali-G68 MP5', '8 GB', '256GB', 24990);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
