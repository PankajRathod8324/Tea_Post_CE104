-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 09:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(3) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `product_id` int(3) NOT NULL,
  `categories_id` int(3) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(1, 'thepla', 'img12.jpg'),
(2, 'samosa', 'img8.jpg'),
(3, 'tea', 'img9.jpg'),
(4, 'coffee', 'img20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contactno`, `date`) VALUES
('abhishek', 'abhi1@gmail.com', 2147483647, '2022-05-23'),
('abhishek', 'abhi1@gmail.com', 2147483647, '2022-05-23'),
('abhishek', 'abhi1@gmail.com', 2147483647, '2022-05-23'),
('abhishek', 'abhi1@gmail.com', 2147483647, '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `login form`
--

CREATE TABLE `login form` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login form`
--

INSERT INTO `login form` (`name`, `email`, `password`, `cpassword`) VALUES
('Admin', 'admin@gmail.com', 'Kishan12!', 'Kishan12!'),
('Bhavesh', 'bhavesh1@gmail.in', 'Bhavesh3#', 'Bhavesh3#'),
('Div', 'div1@gmail.in', 'Div2!', 'Div2!'),
('Harshita', 'harshita2@gmail.com', 'Harshita3#', 'Harshita3#'),
('Jay', 'jay1@gmail.com', 'Jay2!', 'Jay2!'),
('Jenish', 'jenish13@gmail.in', 'Jenish22!', 'Jenish22!'),
('John', 'john12@gmail.com', 'John12!', 'John12!'),
('Kishan', 'kishan1@gmail.com', 'Kishan12!', 'Kishan12!'),
('Lalu', 'lalu1@gmail.com', 'Lalu1#', 'Lalu1#'),
('Mehul', 'mehul4@gmail.in', 'Mehul5#', 'Mehul5#'),
('Mitali', 'mitali2@gmail.in', 'Mitali3#', 'Mitali3#'),
('Nency', 'nenu1@gmail.com', 'Nency1!', 'Nency1!'),
('Nikita', 'Nikita1@gmail.com', 'Nikita2!', 'Nikita2!'),
('Prakash', 'prakash1@gmail.in', 'Prakash1!', 'Prakash1!'),
('Priti', 'priti@gmail.com', 'Priti1!', 'Priti1!'),
('Priya', 'priya1@gmail.com', 'Priya1!', 'Priya1!'),
('Priyanka', 'priyanka2@gmail.in', 'Priyanka1', ''),
('Rahul', 'rahul2@gmail.in', 'Rahul55%', 'Rahul55%'),
('Riya', 'riya1@gmail.in', 'Riyu2#', 'Riyu2#'),
('Tommy', 'tommy1@gmail.in', 'Tommy1!', 'Tommy1!'),
('tp', 'tp@gmail.com', '', ''),
('Uday', 'uday3@gmail.com', 'Uday12!', 'Uday12!'),
('Vidhii', 'vidhi2@gmail.com', 'Vidhi1!', 'Vidhi1!'),
('Virat', 'virat3@gmail.in', 'Virat2#', 'Virat2#');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(5) NOT NULL,
  `img` varchar(25) NOT NULL,
  `categories_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `img`, `categories_id`) VALUES
(1, 'methi thepla', 50, 'img7.jpg', 1),
(2, 'chinese samosa', 50, 'img8.jpg', 2),
(3, 'dryfruit samosa', 50, 'img13.jpg', 2),
(4, 'cold coffee', 30, 'img21.jpg', 4),
(5, 'zinger chai', 20, 'img18.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login form`
--
ALTER TABLE `login form`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
