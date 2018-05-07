-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 09:18 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `admin_first_name` varchar(30) NOT NULL,
  `admin_last_name` varchar(30) NOT NULL,
  `u_n` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pas` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `last_log_date` datetime NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_first_name`, `admin_last_name`, `u_n`, `type`, `email`, `pas`, `token`, `profile_pic`, `contact_no`, `address`, `last_log_date`, `doc`, `dom`, `date`) VALUES
(1, 'Murshida', 'akter', 'murshida', 'Super admin', '014murshida@gmail.com', '12', '', 'database table.png', 1796609843, 'kujerkhola sylhet', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(11) NOT NULL,
  `category_code` varchar(30) DEFAULT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_descrip` text NOT NULL,
  `category_img` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_code`, `category_name`, `category_descrip`, `category_img`, `status`, `doc`, `dom`) VALUES
(1, 'R1', 'Flower', 'red,white and yellow', 'Rose.JPEG', 'enable', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'B1', 'Boucket', 'all kind of Bucket for any function', '8789146_f520.jpg', 'enable', '0000-00-00 00:00:00', '2017-01-21 07:48:51'),
(6, 'DWH', 'Decoration', 'Wedding,holud,birthday and all kind of function decoration.', '', 'disable', '0000-00-00 00:00:00', '2017-01-21 08:19:04'),
(12, 'gh', '11', 'hj', 'WP_20161226_15_40_02_Pro.jpg', 'enable', '2017-01-21 08:07:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contactno` int(12) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `paymentmethod` varchar(30) NOT NULL,
  `paymentmobile` varchar(30) NOT NULL,
  `cardnum` varchar(40) NOT NULL,
  `cardholderid` varchar(50) NOT NULL,
  `cvc` varchar(50) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `avater` varchar(200) NOT NULL,
  `date_registered` datetime NOT NULL,
  `bikash_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `google_map`
--

CREATE TABLE IF NOT EXISTS `google_map` (
`google_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shop_location` varchar(30) NOT NULL,
  `d_place_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE IF NOT EXISTS `occasion` (
`occasion_id` int(15) NOT NULL,
  `occasion_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` varchar(15) NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`occasion_id`, `occasion_name`, `description`, `image`, `status`, `doc`, `dom`) VALUES
(1, 'wedding', 'Its a life time promise', '', 'enable', '0000-00-00 00:00:00', '2017-01-23 15:08:05'),
(2, 'Holud', 'Enjoyable moment', '', 'enable', '0000-00-00 00:00:00', '2017-01-23 15:07:54'),
(5, 'Birthday', 'ssdgf', '', 'enable', '2017-01-23 15:13:51', '2017-01-23 15:16:54'),
(10, 'check', 'hj', '', 'enable', '2017-01-23 16:07:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `offer_list`
--

CREATE TABLE IF NOT EXISTS `offer_list` (
`offer_list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offer_type` varchar(30) NOT NULL,
  `offer_name` varchar(30) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `gift_voucher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `delivery_address` varchar(30) NOT NULL,
  `delivery_charge` double NOT NULL,
  `order_total_price` decimal(10,0) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `receiver_address` varchar(30) NOT NULL,
  `order_status` tinyint(7) NOT NULL,
  `completed` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE IF NOT EXISTS `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `no_of_orderd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE IF NOT EXISTS `payment_methods` (
`payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `payment_amount` float NOT NULL,
  `advanced_payment` float NOT NULL,
  `due_payment` float NOT NULL,
  `paid` varchar(15) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_picture` varchar(500) NOT NULL,
  `product_unit_price` decimal(10,0) NOT NULL,
  `discount` float NOT NULL,
  `product_description` text NOT NULL,
  `quantity` smallint(12) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `token` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `occasion_id`, `product_type_id`, `product_code`, `product_name`, `product_picture`, `product_unit_price`, `discount`, `product_description`, `quantity`, `is_approved`, `token`, `status`, `doc`, `dom`) VALUES
(1, 1, 0, 1, 'def', 'rose', '1.jpg', '5', 0, 'dfghghg', 2, 1, '', 'enable', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
`product_type_id` int(11) NOT NULL,
  `product_type` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type`) VALUES
(1, 'Raw meterial'),
(2, 'Die material');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
`scart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scart_quantity` smallint(6) NOT NULL,
  `sub_total_price` double NOT NULL,
  `vat_amount` float NOT NULL,
  `total_price` double NOT NULL,
  `update_scart` varchar(100) NOT NULL,
  `scart_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `new_product` varchar(30) NOT NULL,
  `update_price` float NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `stock_quantity` smallint(6) NOT NULL,
  `product_sold` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `u_n` varchar(20) NOT NULL,
  `pas` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `u_n`, `pas`, `token`, `type`, `date`) VALUES
(20, 'ahmed_monjur@live.com', 'monjur', '$6$rounds=4567$abcdefghijklmnop$bVOJUERoKSL1T1TtXi6EgrOSB9LvqHou3Hj3Y5TnWMm0oo1w7w.6rZy4d0lALIRIRBO2HATiZmnetnVmz9D3E/', 'e3a6465336338308b4391e365d27f747', 'superadmin', '2016-01-05 04:29:25'),
(22, 'ahmed.monjur2a@live.com', 'ahmed', '$6$rounds=4567$abcdefghijklmnop$bVOJUERoKSL1T1TtXi6EgrOSB9LvqHou3Hj3Y5TnWMm0oo1w7w.6rZy4d0lALIRIRBO2HATiZmnetnVmz9D3E/', '', 'admin', '2016-01-19 07:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(1) NOT NULL,
  `offer_list_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `seqret_ques` varchar(40) NOT NULL,
  `seqret_ans` varchar(40) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `avater` varchar(200) NOT NULL,
  `date_registered` datetime NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_billing`
--

CREATE TABLE IF NOT EXISTS `user_billing` (
`user_billing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `card_no` varchar(30) NOT NULL,
  `card_type` varchar(30) NOT NULL,
  `expiry_date` date NOT NULL,
  `bikash_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_offer`
--

CREATE TABLE IF NOT EXISTS `user_offer` (
  `user_offer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `product_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_map`
--
ALTER TABLE `google_map`
 ADD PRIMARY KEY (`google_id`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
 ADD PRIMARY KEY (`occasion_id`);

--
-- Indexes for table `offer_list`
--
ALTER TABLE `offer_list`
 ADD PRIMARY KEY (`offer_list_id`), ADD UNIQUE KEY `user_id` (`user_id`,`product_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
 ADD PRIMARY KEY (`payment_id`), ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`), ADD UNIQUE KEY `category_id` (`category_id`,`occasion_id`,`product_type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
 ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
 ADD PRIMARY KEY (`scart_id`), ADD UNIQUE KEY `product_id` (`product_id`,`user_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`stock_id`), ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD UNIQUE KEY `offer_list_id` (`offer_list_id`);

--
-- Indexes for table `user_billing`
--
ALTER TABLE `user_billing`
 ADD PRIMARY KEY (`user_billing_id`);

--
-- Indexes for table `user_offer`
--
ALTER TABLE `user_offer`
 ADD PRIMARY KEY (`user_offer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `google_map`
--
ALTER TABLE `google_map`
MODIFY `google_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
MODIFY `occasion_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `offer_list`
--
ALTER TABLE `offer_list`
MODIFY `offer_list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
MODIFY `scart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_billing`
--
ALTER TABLE `user_billing`
MODIFY `user_billing_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
