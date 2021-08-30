-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 12:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efarming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `Category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cate_priv` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `Category_name`, `status`, `cate_priv`) VALUES
(2, 'crop', 1, 'farmer'),
(3, 'fertilizer', 1, 'seller'),
(4, 'farming tools', 1, 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(12) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_amount` int(50) NOT NULL,
  `product_details` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Qyt` varchar(50) NOT NULL,
  `quty` varchar(10) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `User_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_amount`, `product_details`, `Qyt`, `quty`, `photo`, `User_id`) VALUES
(8, 2, 'wheat', 50000, 'A+ Quality wheat laboratory tested', '80', 'kg', '30-04-2019-1556601661.jpg', 6),
(9, 2, 'corn', 6000, 'AMERICAN CORN ORGANIC', '900', 'kg', '30-04-2019-1556601738.jpg', 6),
(10, 3, 'ammonium-sulfate', 500, 'chemicle free fertilizer', '60', 'kg', '30-04-2019-1556601830.jpg', 7),
(11, 3, 'urea', 5000, 'neem coated urea ', '500', 'kg', '30-04-2019-1556601918.jpg', 7),
(12, 4, 'gardening-forks', 600, 'gardening fork made with steel in india', '50', 'unit', '30-04-2019-1556602030.jpg', 7),
(13, 4, 'axe', 600, 'axe made with steel in germany', '50', 'unit', '30-04-2019-1556602109.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE `product_name` (
  `Pname_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`Pname_id`, `category_id`, `product_name`, `status`) VALUES
(1, 2, 'wheat', '1'),
(2, 2, 'rice', '1'),
(3, 2, 'corn', '1'),
(4, 2, 'barley', '1'),
(5, 2, 'oat', '1'),
(6, 2, 'rye', '1'),
(7, 2, 'triticale', '1'),
(8, 2, 'broom-corn', '1'),
(9, 2, 'basil', '1'),
(10, 2, 'apple', '1'),
(11, 2, 'banana', '1'),
(12, 2, 'carrot', '1'),
(13, 2, 'celery', '1'),
(14, 3, 'ammonium-sulfate', '1'),
(15, 3, 'urea', '1'),
(16, 3, 'ammonium-cloride', '1'),
(17, 3, 'calcium-ammonium-nitrate', '1'),
(18, 4, 'axe', '1'),
(19, 4, 'sickle', '1'),
(20, 4, 'gardening-forks', '1'),
(21, 4, 'spade', '1'),
(22, 4, 'shovel', '1'),
(23, 4, 'masonry-trowels', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` int(11) NOT NULL,
  `seller_id` varchar(11) NOT NULL,
  `cust_id` varchar(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `total_amount` varchar(11) NOT NULL,
  `order_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `Delivery_status` varchar(1) NOT NULL,
  `product_name` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`order_id`, `seller_id`, `cust_id`, `product_id`, `qty`, `total_amount`, `order_date`, `Delivery_status`, `product_name`, `photo`) VALUES
(10, '7', '8', '13', '50', '600', '2019-04-30 05:32:59.552243', '0', 'axe', '30-04-2019-1556602109.jpg'),
(9, '7', '8', '10', '60', '500', '2019-04-30 05:32:59.548280', '0', 'ammonium-sulfat', '30-04-2019-1556601830.jpg'),
(8, '6', '8', '9', '900', '6000', '2019-04-30 05:32:59.548280', '0', 'corn', '30-04-2019-1556601738.jpg'),
(7, '6', '8', '8', '80', '50000', '2019-04-30 05:32:59.548280', '0', 'wheat', '30-04-2019-1556601661.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `Address_id` int(15) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `City` varchar(20) NOT NULL,
  `User_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`Address_id`, `Address`, `Pincode`, `City`, `User_id`) VALUES
(2, 'iscon megamall,', 350005, 'Ahemdabad', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(15) NOT NULL,
  `category_id` varchar(15) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_amount` varchar(5) NOT NULL,
  `product_details` varchar(250) NOT NULL,
  `Qyt` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `User_id` varchar(15) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `category_id`, `product_name`, `product_amount`, `product_details`, `Qyt`, `photo`, `User_id`, `seller_id`, `product_id`) VALUES
(14, '2', 'corn', '6000', 'AMERICAN CORN ORGANIC', '900', '30-04-2019-1556601738.jpg', '8', 6, 9),
(13, '2', 'wheat', '50000', 'A+ Quality wheat laboratory tested', '80', '30-04-2019-1556601661.jpg', '8', 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `User_id` int(12) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `User_password` varchar(25) NOT NULL,
  `Role` varchar(8) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `User_photo` text NOT NULL,
  `Contact` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`User_id`, `User_name`, `User_password`, `Role`, `First_name`, `Last_name`, `DOB`, `Email`, `Gender`, `User_photo`, `Contact`, `status`) VALUES
(6, 'farmer', '123@Farmer', 'farmer', 'harshil', 'gajjar', '2000-12-15', 'harshilgajjar@gmail.com', 'male', '30-04-2019-1556601462.jpg', '9856321478', 1),
(7, 'seller', '123@Seller', 'seller', 'vivek', 'ghori', '2000-12-15', 'vivekghori@gmail.com', 'male', '30-04-2019-1556601523.jpg', '7854123698', 1),
(8, 'buyer', '123@Buyer', 'buyer', 'arjav', 'panchal', '2000-12-03', 'arjavpanchal@gmail.com', 'male', '30-04-2019-1556601583.jpg', '7854123256', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `product_name`
--
ALTER TABLE `product_name`
  ADD PRIMARY KEY (`Pname_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`Address_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_name`
--
ALTER TABLE `product_name`
  MODIFY `Pname_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `Address_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `User_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
