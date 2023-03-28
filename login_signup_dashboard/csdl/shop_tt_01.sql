-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 07:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_tt_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Lọc Nước Nóng Lạnh'),
(2, 'Máy Lọc Nước Nóng Lạnh'),
(3, 'Máy Lọc Nước Để Gầm'),
(4, 'Máy Lọc Nước Tủ Đứng');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(2, 'SP1', 'MT1', '01-01.jpg', '01-02.jpg', '01-03.jpg', '222', '2023-03-17 17:35:21', ''),
(6, 'Máy lọc nước Karofi KAQ-U96', 'Công nghệ vòi led hiện đại', '01-01.png', '01-02.png', '01-03.png', '6350000', '2023-03-26 17:26:47', ''),
(7, 'Máy lọc nước Karofi KAQ-D36S', 'fff', '02-01.png', '02-02.png', '02-03.png', '6750000', '2023-03-26 17:27:46', ''),
(8, 'Máy lọc nước nóng lạnh Karofi KAD-N91', 'fff', '03-01.png', '03-02.png', '03-03.png', '11950000', '2023-03-26 17:43:21', ''),
(9, 'Máy lọc nước nóng lạnh Karofi KAD-N89', 'fff', '04-01.png', '04-02.png', '04-03.png', '11800000', '2023-03-26 17:44:03', ''),
(10, 'Máy lọc nước Karofi Hydro-Ion KAE-S65', 'ddd', '05-01.png', '05-02.png', '05-03.png', '15900000', '2023-03-27 05:17:23', ''),
(11, 'Máy lọc nước RO nóng nguội lạnh Karofi KAD-X39 10 lõi', 'vvv', '06-01.jpg', '06-02.jpg', '06-03.jpg', '6999000', '2023-03-27 05:20:37', ''),
(12, 'Máy lọc nước nóng lạnh Karofi KAD-D68', 'vvv', '07-01.png', '07-02.png', '07-03.png', '11600000', '2023-03-27 09:43:51', ''),
(13, 'Máy lọc nước nóng lạnh Karofi KAD-D88', 'vvv', '08-01.png', '08-02.png', '08-03.png', '10000000', '2023-03-27 09:44:27', ''),
(14, 'Máy lọc nước RO Karofi B930 9 lõi', 'vvv', '09-01.jpg', '09-02.jpg', '09-03.jpg', '4990000', '2023-03-27 09:45:00', ''),
(15, 'Máy lọc nước Karofi ERO102', 'vvv', '10-01.jpg', '10-02.jpg', '10-03.jpg', '6580000', '2023-03-27 09:45:47', ''),
(16, 'Máy nóng lạnh Karofi HCV-151', 'vvv', '11-01.png', '11-02.png', '11-03.jpg', '5200000', '2023-03-27 09:46:25', ''),
(17, 'Máy lọc nước Karofi KAQ-U10', 'vvv', '12-01.jpg', '12-02.jpg', '12-03.jpg', '5100000', '2023-03-27 09:47:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(2, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_uname` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_rname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uname`, `user_password`, `user_email`, `user_rname`) VALUES
(2, 'zzz', 'zzz', 'zzz', 'zzz'),
(3, 'admin', '123456', 'kkk', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `product_categories_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
