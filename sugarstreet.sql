-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 10:21 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15764414_sugarstreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `price`, `quantity`, `image`) VALUES
('Pavlova', 1200, 2, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `creditcard` int(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uid`, `name`, `adrs`, `creditcard`, `phone`, `amount`) VALUES
(10, 'tanzilasultana24@gmail.com', 'wadawda', 949494, 1679009066, 7400);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `type` text NOT NULL,
  `pet` text NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `quantity`, `type`, `pet`, `image`) VALUES
('Chocolate Chip Cookies', 500, 5, 'medication', 'cat', '15.jpg'),
('Hazelnut Cupcake', 350, 4, 'supplies', 'dog', 'hazelnut.jpg'),
('Ice-cream Cake', 1050, 10, 'food', 'dog', 'ice.png'),
('Lemon Cupcake', 290, 5, 'supplies', 'cat', 'lemon.jpg'),
('Monster Cookies', 850, 5, 'medication', 'dog', '14.jpg'),
('Nutella Cupcake', 300, 5, 'supplies', 'dog', 'nutella.jpg'),
('Pavlova', 1200, 5, 'food', 'cat', '4.jpg'),
('Red Velvet Cake', 1800, 10, 'food', 'dog', '3.jpg'),
('Strawberry Cupcake', 400, 5, 'supplies', 'cat', 'strawberry.jpg'),
('Swirley Cookies', 450, 5, 'medication', 'dog', 'swirley.jpg'),
('Tiramisu', 1300, 10, 'food', 'cat', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `creditcard` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `phone`, `adrs`, `creditcard`) VALUES
('', '', '', '', '', ''),
('Tanzila Sultana Maria', 'tanjila_sultana@hotmail.com', '123', '01679009066', '', '242424');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
