-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 07:19 PM
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
-- Database: `kbcmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Fashion accessories', 'Fashion accessories'),
(2, 'Gadgets', 'Gadgets'),
(3, 'Household items', 'Household items');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `category_name` int(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL,
  `delivery_duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `sub_category_name`, `category_name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`, `delivery_duration`) VALUES
(1, 1, 'Nike Air Sketchers', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-air-sketchers', 25000, 'nike-air-sketchers.jpg', '0000-00-00', 0, 5),
(2, 1, 'Nike Air Soft', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-air-soft', 15000, 'nike-air-soft.jpg', '0000-00-00', 0, 5),
(3, 1, 'Nike Spark Soft', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-spark-soft', 18000, 'nike-spark-soft.png', '0000-00-00', 0, 5),
(4, 1, 'Nike Hollow Spikes', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-hollow-spikes', 20000, 'nike-hollow-spikes.jpg', '0000-00-00', 0, 5),
(5, 1, 'Puma Sketchers', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'puma-sketchers', 20000, 'puma-sketchers.jpg', '0000-00-00', 0, 5),
(6, 1, 'Puma Spikes', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'puma-spikes', 17500, 'puma-spikes.png', '0000-00-00', 0, 5),
(7, 1, 'Rolex Watch Men', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'rolex-watch-men', 10000, 'rolex-watch-men.jpg', '0000-00-00', 0, 5),
(8, 1, 'Rolex Watch Women', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'rolex-watch-women', 7000, 'rolex-watch-women.png', '0000-00-00', 0, 5),
(9, 1, 'Zara Wristwatch Men', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'zara-wristwatch-men', 21000, 'zara-wristwatch-men.png', '0000-00-00', 0, 5),
(10, 1, 'Zara Wristwatch Women', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'zara-wristwatch-women', 15000, 'zara-wristwatch-women.jpg', '0000-00-00', 0, 5),
(11, 1, 'Lacoste Shoe Men', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'lacoste-shoe-men', 30000, 'lacoste-shoe-men.png', '0000-00-00', 0, 10),
(12, 1, 'Lacoste Shoe Men Brown', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'lacoste-shoe-men-brown', 30000, 'lacoste-shoe-men-brown.jpg', '0000-00-00', 0, 10),
(13, 1, 'Lacoste Shoe Women', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'lacoste-shoe-women', 18000, 'lacoste-shoe-women.png', '0000-00-00', 0, 10),
(14, 1, 'Loius Vutton Women', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'loius-vutton-women', 12000, 'loius-vutton-women.png', '0000-00-00', 0, 10),
(15, 1, 'Zara Women Shoe', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'zara-women-shoe', 13000, 'zara-women-shoe.jpg', '0000-00-00', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `sub_cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cat_name`, `sub_cat_name`, `sub_cat_slug`) VALUES
(1, 'Fashion accessories', 'sneakers', 'sneakers'),
(2, 'Fashion accessories', 'corporate shoes', 'corporate shoes'),
(3, 'Fashion accessories', 'wears', 'wears'),
(4, 'Fashion accessories', 'wrist watches', 'wrist watches'),
(5, 'Fashion accessories', 'glasses', 'glasses'),
(6, 'Gadgets', 'ringlight', 'ringlight'),
(7, 'Gadgets', 'blenders', 'blenders'),
(8, 'Gadgets', 'food processor', 'food processor'),
(9, 'Household items', 'Vacuum flask', 'Vacuum flask'),
(10, 'Household items', 'Cutleries', 'Cutleries'),
(11, 'Household items', 'Shelves & Racks', 'Shelves & Racks'),
(12, 'Household items', 'Utensils', 'Utensils');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Code', 'Projects', '', '', 'thanos1.jpg', 1, '', '', '2018-05-01'),
(9, 'harry@den.com', '$2y$10$Oongyx.Rv0Y/vbHGOxywl.qf18bXFiZOcEaI4ZpRRLzFNGKAhObSC', 0, 'Harry', 'Den', 'Silay City, Negros Occidental', '09092735719', 'male2.png', 1, 'k8FBpynQfqsv', 'wzPGkX5IODlTYHg', '2018-05-09'),
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1, '', '', '2018-07-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
