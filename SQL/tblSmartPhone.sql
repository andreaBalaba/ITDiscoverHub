-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2024 at 02:25 AM
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
  `releaseDate` date DEFAULT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblSmartPhone`
--

INSERT INTO `tblSmartPhone` (`brand`, `model`, `screen`, `os`, `chipset`, `GPU`, `RAM`, `Storage`, `releaseDate`, `Price`) VALUES
('Samsung', 'Samsung Galaxy S23 Ultra', '6.8-inch QHD+ Dynamic AMOLED 2X Display (1440 x 3088 Pixels, 501 ppi) with Corning Gorilla Glass Victus 2, 19.3:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, 1,750nits peak brightness, and punch-hole', 'Android 13 with One Ui 5.1', 'Qualcomm Snapdragon 8 Gen 2 Mobile Platform for Galaxy', 'Adreno 740', '12GB', '256GB', '2023-02-17', 829.5),
('Samsung', 'Samsung Galaxy Z Flip 5', '6.7-inch Foldable FHD+ Dynamic AMOLED 2X Main Display (1080 x 2640 Pixels, 426 ppi) with 22:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, 1200 nits peak brightness, and punch-hole', 'Android 13 with One UI 5.1.1', 'Qualcomm Snapdragon 8 Gen 2 (4 nm)', 'Adreno 740', '8 GB', '256GB', '2023-08-11', 874.99),
('Samsung', 'Samsung Galaxy S23 FE', '6.4-inch FHD+ AMOLED Display (1080 x 2340 Pixels, 403 ppi) with Corning Gorilla Glass 5, 19.5:9 Aspect Ratio, 120Hz Refresh Rate, 1,450 nits peak brightness, HDR10+, and punch-hole', 'Android 13 with One UI 5.1', 'Exynos 2200', 'Xclipse 920', '8 GB', '128GB', '2023-10-04', 559.99),
('Samsung', 'Samsung Galaxy A05s', '6.7-inch FHD+ PLS LCD Display (1080 x 2400 Pixels, 393 ppi) with 20:9 Aspect Ratio, 90Hz Refresh Rate, and notch', 'Android 13 with One UI', 'Qualcomm Snapdragon 680 (6 nm)', 'Adreno 610', '4 GB', '128GB', '2023-10-18', 156.36),
('Samsung', 'Samsung Galaxy A54 5G', '6.4-inch FHD+ Super AMOLED Display (1080 x 2340 Pixels, 403 ppi) with Scratch Resistant Glass, 19.5:9 Aspect Ratio, 120Hz Refresh Rate, 1000nits (high brightness mode), and punch-hole', 'Android 13 with One UI 5.1', 'Samsung Exynos 1380', 'Mali-G68 MP5', '8 GB', '256GB', '2023-03-24', 425.99),
('APPLE', 'iPhone 15 Pro Max', '6.7-inch WUXGA+ OLED Display (1290 x 2796 Pixels, 460 ppi) with Ceramic Shield, 120Hz Refresh Rate, HDR, Dolby Vision, 2000nits peak brightness, and Dynamic Island', 'iOS17', 'Apple A17 Pro (3 nm)', 'Apple 6-core GPU', '8 GB', '256GB', '2023-09-22', 84),
('APPLE', 'iPhone 15 Pro', '6.1-inch FHD+ OLED Display (1179 x 2556 Pixels, 460 ppi) with Ceramic Shield, 120Hz Refresh Rate, HDR, Dolby Vision, 2000nits peak brightness, and Dynamic Island', 'iOS17', 'Apple A17 Pro', 'Apple 6-core GPU', '8 GB', '128GB', '2023-09-22', 70),
('APPLE', 'iPhone 15', '6.1-inch FHD+ OLED Display (1179 x 2556 Pixels, 460 ppi) with Ceramic Shield, 60Hz Refresh Rate, HDR, Dolby Vision, 2000nits peak brightness, and Dynamic Island', 'iOS17', 'Apple A16 Bionic', '5-core Apple GPU', '6 GB', '128GB', '2023-09-13', 56),
('APPLE', 'iPhone 15 Plus', '6.7-inch WUXGA+ OLED Display (1290 x 2796 Pixels, 460 ppi) with Ceramic Shield, 60Hz Refresh Rate, HDR, Dolby Vision, 2000nits peak brightness, and Dynamic Island', 'iOS17', 'Apple A16 Bionic', '5-core Apple GPU', '6 GB', '128GB', '2023-09-13', 63),
('APPLE', 'iPhone 14 Pro Max', '6.7-inch WUXGA+ Super Retina XDR OLED Display (1290 x 2796 Pixels, 460 ppi) with Ceramic Shield, 19.5:9 Aspect Ratio, 120Hz ProMotion refresh rate, HDR, Dolby Vision, and HDR10 1,000 nits max brightness, 2,000 nits peak brightness Pill-shaped \"Dynamic Island\" screen cutout', 'iOS16', 'Apple A16 Bionic', '5-core Apple GPU', '6 GB', '128GB', '2023-09-08', 77),
('XIAOMI', 'Xiaomi 13 Pro', '6.73-inch QHD+ LTPO AMOLED Display (1440 x 3200 Pixels, 522 ppi) with Corning Gorilla Glass Victus, 20:9 Aspect Ratio, 120Hz Refresh Rate, Dolby Vision, HDR10+, 1200nits brightness, 1900nits (peak), and punch-hole', 'Android 13 with MIUI 14', 'Qualcomm Snapdragon 8 Gen 2', 'Adreno 740', '12 GB', '256GB', '2023-03-01', 59),
('XIAOMI', 'Xiaomi 13', '6.36-inch FHD+ AMOLED Display (1080 x 2400 Pixels, 414 ppi) with Corning Gorilla Glass 5, 20:9 Aspect Ratio, 120Hz Refresh Rate, Dolby Vision, HDR10+, 1200nits brightness, 1900nits (peak), and punch-hole', 'Android 13 with MIUI 14', 'Qualcomm Snapdragon 8 Gen 2', 'Adreno 740', '8 GB', '256GB', '2023-03-01', 44),
('XIAOMI', 'Xiaomi 13T', '6.67-inch WFHD+ AMOLED Display (1220 x 2712 Pixels, 446 ppi) with Corning Gorilla Glass 5, 20:9 Aspect Ratio, 144Hz Refresh Rate, 2600nits peak brightness, Dolby Vision, HDR10+, and punch-hole', 'Android 13 with MIUI 14', 'MediaTek Dimensity 8200 Ultra (4 nm)', 'Mali-G610 MC6', '12 GB', '256GB', '2023-09-26', 26),
('XIAOMI', 'Xiaomi 12T Pro', '6.67-inch WFHD+ AMOLED Display (1220 x 2712 Pixels, 446 ppi) with Corning Gorilla Glass 5, 20:9 Aspect Ratio, 120Hz Refresh Rate, Dolby Vision, HDR10+, and punch-hole 900 nits (peak), 500 nits (typ) brightness', 'Android 12 with MIUI 13', 'Qualcomm Snapdragon 8+ Gen 1', 'Adreno 730', '12 GB', '256GB', '2022-11-17', 37),
('XIAOMI', 'Xiaomi 12T', '6.67-inch WFHD+ AMOLED Display (1220 x 2712 Pixels, 446 ppi) with Corning Gorilla Glass 5, 20:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, and punch-hole', 'Android 12 with MIUI 13', 'MediaTek DImensity 8100-Ultra', 'Mali-G610 MC6', '8 GB', '256GB', '2022-11-17', 26),
('OPPO', 'OPPO Find N3 Flip', '6.8-inch Foldable FHD+ AMOLED Main Display (1080 x 2520 Pixels, 403 ppi) with Ultra Thin Glass, 21:9 Aspect Ratio, 120Hz Refresh Rate, 1600 nits peak brightness, HDR10+, and punch-hole 3.26-inch VGA+ AMOLED Secondary Display (382 x 720 Pixels, 250 ppi) with 60Hz Refresh Rate, 900 nits peak brightness', 'Android 13 with Color OS 13.2', 'MediaTek Dimensity 9200 (4 nm)', 'Immortalis-G715 MC11', '12 GB', '256GB', '2023-08-29', 64),
('OPPO', 'OPPO Reno10 Pro+', '6.74-inch FHD+ AMOLED Display (1240 x 2772 Pixels, 451 ppi) with AGC Dragontrail Star 2, 20:9 Aspect Ratio, 120Hz Refresh Rate, 1400nits peak brightness, 1100nits HBM, HDR10+, and punch-hole', 'Android 13 with Color OS 13.1', 'Qualcomm Snapdragon 8+ Gen 1 (4 nm)', 'Adreno 730', '12 GB', '256GB', '2023-08-03', 39),
('OPPO', 'OPPO Reno10 Pro', '6.7-inch FHD+ AMOLED Display (1080 x 2412 Pixels, 394 ppi) with AGC Dragontrail Star 2, 20:9 Aspect Ratio, 120Hz Refresh Rate, 950nits peak brightness, HDR10+, and punch-hole', 'Android 13 with Color OS 13', 'Qualcomm Snapdragon 778G (6 nm)', 'Adreno 642L', '12 GB', '256GB', '2023-08-03', 29),
('OPPO', 'OPPO A98 5G', '6.72-inch FHD+ LTPS LCD Display (1080 x 2400 Pixels, 392 ppi) with 20:9 Aspect Ratio, 120Hz Refresh Rate, 680 nits max brightness, and punch-hole', 'Android 13 with Color OS 13.1', 'Qualcomm Snapdragon 695', 'Adreno 619', '8 GB', '256GB', '2023-09-14', 18),
('OPPO', 'OPPO A58', '6.72-inch FHD+ LTPS LCD Display (1080 x 2400 Pixels, 391 ppi) with 20:9 Aspect Ratio, 60Hz Refresh Rate, 680 nits max brightness, and punch-hole', 'Android 13 with Color OS 13.1', 'MediaTek Helio G85', 'Mali-G52 MC2', '6 GB', '128GB', '2023-08-25', 9),
('VIVO', 'Vivo X80 Pro', '6.78-inch QHD+ LTPO AMOLED Display (1440 x 3200 Pixels, 517 ppi) with Corning Gorilla Glass, 20:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, and punch-hole', 'Android 12 with Funtouch OS 12', 'Qualcomm Snapdragon 8 Gen 1', 'Adreno 730', '12 GB', '256GB', '2022-06-09', 59),
('VIVO', 'Vivo X80', '6.78-inch FHD+ AMOLED Display (1080 x 2400 Pixels, 388 ppi) with Corning Gorilla Glass, 20:9 Aspect Ratio, 120Hz Refresh Rate, and punch-hole', 'Android 12 with Funtouch OS 12', 'MediaTek Dimensity 9000', 'Mali-G710 MC10', '12 GB', '256GB', '2022-06-09', 45),
('VIVO', 'Vivo V25 Pro', '6.56-inch FHD+ AMOLED Display (1080 x 2376 Pixels, 398 ppi) with SCHOTT Xensation Glass, 19.8:9 Aspect Ratio, 120Hz Refresh Rate, HDR10+, and punch-hole', 'Android 12 with Funtouch OS 12', 'MediaTek Dimensity 1300', 'Mali-G77 MC9', '12 GB', '256GB', '2022-09-24', 29),
('VIVO', 'Vivo V25e', '6.44-inch FHD+ AMOLED Display (1080 x 2404 Pixels, 409 ppi) with 20:9 Aspect Ratio, 90Hz Refresh Rate, and Halo notch', 'Android 12 with Funtouch OS 12', 'MediaTek Helio G99', 'Mali-G57 MC2', '8 GB', '256GB', '2022-09-21', 17),
('VIVO', 'Vivo V36 5G', '6.64-inch FHD+ IPS LCD Display (1080 x 2388 Pixels, 395 ppi) with 19.9:9 Aspect Ratio, 90Hz Refresh Rate, 650 nits peak brightness, and punch-hole', 'Android 13 with Funtouch OS 13', 'MediaTek Dimensity 6020', 'Mali-G57 MC2', '8 GB', '256GB', '2023-08-08', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
