-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 07:41 AM
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
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `countryname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `ordernote` text NOT NULL,
  `payoption` varchar(255) NOT NULL,
  `payid` varchar(255) NOT NULL,
  `datekeep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `userid`, `countryname`, `firstname`, `lastname`, `email`, `mobileno`, `address`, `state`, `city`, `zipcode`, `ordernote`, `payoption`, `payid`, `datekeep`) VALUES
(1, 13, 'Nigeria', 'Akinfemi', 'Akinyooye', 'emmakinyooye@gmail.com', '07032689329', 'Ibadan', 'OYO', 'Ibadan', '234', '3 items', 'Direct Bank Transfer', 'PAY-L0A4AMQYSM1K', '2023-11-06'),
(2, 13, 'Nigeria', 'Akinfemi', 'Akinyooye', 'emmakinyooye@gmail.com', '07032689329', 'Ibadan', 'OYO', 'Ibadan', '234', 'i item', 'Direct Bank Transfer', 'PAY-whPBNJhtAk52', '2023-11-06'),
(3, 13, 'Nigeria', 'Akinfemi', 'Akinyooye', 'emmakinyooye@gmail.com', '07032689329', 'Ibadan', 'N/A', 'N/A', 'N/A', '1 item', 'Direct Bank Transfer', 'PAY-mcpdvhcG0kQe', '2023-11-06');

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
-- Table structure for table `countrylist`
--

CREATE TABLE `countrylist` (
  `ID` int(10) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `countrylist`
--

INSERT INTO `countrylist` (`ID`, `country_name`) VALUES
(2, 'Afghanistan'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Antigua and Barbuda'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbaijan'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Cabo Verde'),
(31, 'Cambodia'),
(32, 'Cameroon'),
(33, 'Canada'),
(34, 'Central African Republic (CAR)'),
(35, 'Chad'),
(36, 'Chile'),
(37, 'China'),
(38, 'Colombia'),
(39, 'Comoros'),
(40, 'Congo, Democratic Republic of the'),
(41, 'Congo, Republic of the'),
(42, 'Costa Rica'),
(43, 'Cote d\'Ivoire'),
(44, 'Croatia'),
(45, 'Cuba'),
(46, 'Cyprus'),
(47, 'Czechia'),
(48, 'Denmark'),
(49, 'Djibouti'),
(50, 'Dominica'),
(51, 'Dominican Republic'),
(52, 'Ecuador'),
(53, 'Egypt'),
(54, 'El Salvador'),
(55, 'Equatorial Guinea'),
(56, 'Eritrea'),
(57, 'Estonia'),
(58, 'Eswatini'),
(59, 'Ethiopia'),
(60, 'Fiji'),
(61, 'Finland'),
(62, 'France'),
(63, 'Gabon'),
(64, 'Gambia'),
(65, 'Georgia'),
(66, 'Germany'),
(67, 'Ghana'),
(68, 'Greece'),
(69, 'Grenada'),
(70, 'Guatemala'),
(71, 'Guinea'),
(72, 'Guinea-Bissau'),
(73, 'Guyana'),
(74, 'Haiti'),
(75, 'Honduras'),
(76, 'Hungary'),
(77, 'Iceland'),
(78, 'India'),
(79, 'Indonesia'),
(80, 'Iran'),
(81, 'Iraq'),
(82, 'Ireland'),
(83, 'Israel'),
(84, 'Italy'),
(85, 'Jamaica'),
(86, 'Japan'),
(87, 'Jordan'),
(88, 'Kazakhstan'),
(89, 'Kenya'),
(90, 'Kiribati'),
(91, 'Kosovo'),
(92, 'Kuwait'),
(93, 'Kyrgyzstan'),
(94, 'Laos'),
(95, 'Latvia'),
(96, 'Lebanon'),
(97, 'Lesotho'),
(98, 'Liberia'),
(99, 'Libya'),
(100, 'Liechtenstein'),
(101, 'Lithuania'),
(102, 'Luxembourg'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaysia'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malta'),
(109, 'Marshall Islands'),
(110, 'Mauritania'),
(111, 'Mauritius'),
(112, 'Mexico'),
(113, 'Micronesia'),
(114, 'Moldova'),
(115, 'Monaco'),
(116, 'Mongolia'),
(117, 'Montenegro'),
(118, 'Morocco'),
(119, 'Mozambique'),
(120, 'Myanmar'),
(121, 'Namibia'),
(122, 'Nauru'),
(123, 'Nepal'),
(124, 'Netherlands'),
(125, 'New Zealand'),
(126, 'Nicaragua'),
(127, 'Niger'),
(128, 'Nigeria'),
(129, 'North Korea'),
(130, 'North Macedonia'),
(131, 'Norway'),
(132, 'Oman'),
(133, 'Pakistan'),
(134, 'Palau'),
(135, 'Palestine'),
(136, 'Panama'),
(137, 'Papua New Guinea'),
(138, 'Paraguay'),
(139, 'Peru'),
(140, 'Philippines'),
(141, 'Poland'),
(142, 'Portugal'),
(143, 'Qatar'),
(144, 'Romania'),
(145, 'Russia'),
(146, 'Rwanda'),
(147, 'Saint Kitts and Nevis'),
(148, 'Saint Lucia'),
(149, 'Saint Vincent and the Grenadines'),
(150, 'Samoa'),
(151, 'San Marino'),
(152, 'Sao Tome and Principe'),
(153, 'Saudi Arabia'),
(154, 'Senegal'),
(155, 'Serbia'),
(156, 'Seychelles'),
(157, 'Sierra Leone'),
(158, 'Singapore'),
(159, 'Slovakia'),
(160, 'Slovenia'),
(161, 'Solomon Islands'),
(162, 'Somalia'),
(163, 'South Africa'),
(164, 'South Korea'),
(165, 'South Sudan'),
(166, 'Spain'),
(167, 'Sri Lanka'),
(168, 'Sudan'),
(169, 'Suriname'),
(170, 'Sweden'),
(171, 'Switzerland'),
(172, 'Syria'),
(173, 'Taiwan'),
(174, 'Tajikistan'),
(175, 'Tanzania'),
(176, 'Thailand'),
(177, 'Timor-Leste'),
(178, 'Togo'),
(179, 'Tonga'),
(180, 'Trinidad and Tobago'),
(181, 'Tunisia'),
(182, 'Turkey'),
(183, 'Turkmenistan'),
(184, 'Tuvalu'),
(185, 'Uganda'),
(186, 'Ukraine'),
(187, 'United Arab Emirates (UAE)'),
(188, 'United Kingdom (UK)'),
(189, 'United States of America (USA)'),
(190, 'Uruguay'),
(191, 'Uzbekistan'),
(192, 'Vanuatu'),
(193, 'Vatican City (Holy See)'),
(194, 'Venezuela'),
(195, 'Vietnam'),
(196, 'Yemen'),
(197, 'Zambia'),
(198, 'Zimbabwe');

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

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 5, 1),
(3, 2, 1, 1),
(4, 3, 2, 1);

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
(1, 1, 'Nike Air Sketchers', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-air-sketchers', 25000, 'nike-air-sketchers.jpg', '2023-11-06', 2, 5),
(2, 1, 'Nike Air Soft', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-air-soft', 15000, 'nike-air-soft.jpg', '2023-11-06', 1, 5),
(3, 1, 'Nike Spark Soft', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-spark-soft', 18000, 'nike-spark-soft.png', '2023-11-04', 1, 5),
(4, 1, 'Nike Hollow Spikes', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'nike-hollow-spikes', 20000, 'nike-hollow-spikes.jpg', '0000-00-00', 0, 5),
(5, 1, 'Puma Sketchers', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'puma-sketchers', 20000, 'puma-sketchers.jpg', '2023-11-06', 1, 5),
(6, 1, 'Puma Spikes', 'sneakers', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'puma-spikes', 17500, 'puma-spikes.png', '0000-00-00', 0, 5),
(7, 1, 'Rolex Watch Men', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'rolex-watch-men', 10000, 'rolex-watch-men.jpg', '0000-00-00', 0, 5),
(8, 1, 'Rolex Watch Women', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'rolex-watch-women', 7000, 'rolex-watch-women.png', '0000-00-00', 0, 5),
(9, 1, 'Zara Wristwatch Men', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'zara-wristwatch-men', 21000, 'zara-wristwatch-men.png', '0000-00-00', 0, 5),
(10, 1, 'Zara Wristwatch Women', 'wrist watches', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'zara-wristwatch-women', 15000, 'zara-wristwatch-women.jpg', '0000-00-00', 0, 5),
(11, 1, 'Lacoste Shoe Men', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'lacoste-shoe-men', 30000, 'lacoste-shoe-men.png', '0000-00-00', 0, 10),
(12, 1, 'Lacoste Shoe Men Brown', 'corporate shoes', 1, '<p>- Durable</p>\r\n\r\n<p>- Affordable</p>\r\n\r\n<p>- Comfortable</p>\r\n\r\n<p>- Water Resistant</p>\r\n', 'lacoste-shoe-men-brown', 30000, 'lacoste-shoe-men-brown.jpg', '2023-11-04', 1, 10),
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
  `sales_date` date NOT NULL,
  `payment_option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`, `payment_option`) VALUES
(1, 13, 'PAY-L0A4AMQYSM1K', '2023-11-06', 'Direct Bank Transfer'),
(2, 13, 'PAY-whPBNJhtAk52', '2023-11-06', 'Direct Bank Transfer'),
(3, 13, 'PAY-mcpdvhcG0kQe', '2023-11-06', 'Direct Bank Transfer');

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
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1, '', '', '2018-07-09'),
(13, 'emmakinyooye@gmail.com', '$2y$10$FhBwashVlSBA4u5ulhyzPeIhPyfgbGSWZoygNXf24Rf.lbbJil3Zm', 0, 'Akinfemi', 'Akinyooye', 'Ibadan', '07032689329', '1689403434746.jpg', 1, '', '', '2023-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `datekeep` date NOT NULL,
  `product_photo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `countrylist`
--
ALTER TABLE `countrylist`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countrylist`
--
ALTER TABLE `countrylist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
