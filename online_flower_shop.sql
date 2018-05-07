-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 03:25 PM
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
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`admin_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `profile_image`) VALUES
(1, 'murshida', '86aaf985e0681749d958b3eb034b1a28592f2b3d', 'IMG_20170506_061811.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(11) NOT NULL,
  `category_code` varchar(30) DEFAULT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_descrip` text NOT NULL,
  `catalog` varchar(200) NOT NULL,
  `category_img` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL,
  `	no_of_times_viewed` int(100) NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_code`, `category_name`, `category_descrip`, `catalog`, `category_img`, `status`, `	no_of_times_viewed`, `doc`, `dom`) VALUES
(1, 'R1', 'Flower', 'red,white and yellow', '', 'Rose.JPEG', 'enable', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'B1', 'Bouquets ', 'all kind of Bucket for any function', 'women', '8789146_f520.jpg', 'enable', 0, '0000-00-00 00:00:00', '2017-01-21 07:48:51'),
(3, 'DWH', 'Decoration', 'Wedding hall ,Holud Stage,Reciption,Outdoor,Door Lintel Flower/Mirror ,Flower,Leaf-shaped ,Wreaths,Display Flower,Floor Mounted,Wall Mounted ,Hanging Baskets,Other', '', '', 'enable', 0, '0000-00-00 00:00:00', '2017-01-21 08:19:04'),
(4, '1234', 'Wedding', 'fgghvbcd', '', 'c.jpg', 'enable', 0, '2017-07-29 16:11:44', '2017-08-08 15:34:39'),
(5, 'G\\r', 'garlend', 'ghgjhbk', '', '', 'enable', 0, '2017-09-24 17:30:49', '0000-00-00 00:00:00'),
(6, 'vfv', 'Jewelery ', 'cc', 'Women', '', 'disable', 0, '2017-10-11 20:10:51', '2017-11-15 14:14:35'),
(7, 'jk,k,', 'Receiption', 'hmjh', '', '', 'enable', 0, '2017-10-11 20:12:02', '0000-00-00 00:00:00'),
(8, 'ffg', 'Die collection ', 'Silk Flower,Ribbon Flower,Valentine,Gift,Other', 'Others', '', 'enable', 0, '2017-10-11 20:37:11', '2017-10-11 20:47:31'),
(11, 'hhh', '11', 'try', 'Women', 'WP_20161226_15_40_02_Pro.jpg', 'disable', 0, '2017-01-21 08:07:58', '2018-01-24 14:45:03'),
(12, '10', 'bia', 'people', '', 'IMG_20170506_054152.jpg', 'disable', 0, '2017-08-08 15:37:42', '0000-00-00 00:00:00'),
(13, 'gg', 'gbg', 'gbg', '', '', 'disable', 0, '2017-10-11 20:10:20', '0000-00-00 00:00:00'),
(14, 'sdd', 'gnhb', 'c c', '', '', 'disable', 0, '2017-10-11 20:11:02', '0000-00-00 00:00:00'),
(15, 'jkj', 'hh', 'bgg', '', '', 'disable', 0, '2017-10-11 20:11:12', '0000-00-00 00:00:00'),
(16, 'yjyj', 'ggggbf', 'gg', '', '', 'disable', 0, '2017-10-11 20:11:49', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`occasion_id`, `occasion_name`, `description`, `image`, `status`, `doc`, `dom`) VALUES
(1, 'Holud', 'Enjoyable moment', '', 'enable', '0000-00-00 00:00:00', '2017-01-23 15:07:54'),
(2, 'Wedding ', 'Its a life time promise', '', 'enable', '0000-00-00 00:00:00', '2017-01-23 15:08:05'),
(3, 'Reciption ', 'hj', '', 'enable', '2017-01-23 16:07:36', '0000-00-00 00:00:00'),
(4, 'Birthday Party ', 'dfd', '', 'disable', '2017-01-23 15:13:51', '2017-10-11 20:53:36'),
(5, 'Other ', 'All types', '', 'enable', '2017-11-15 13:36:16', '0000-00-00 00:00:00'),
(12, 'Valentine''s Day ', '', '', 'enable', '2017-11-15 13:38:08', '0000-00-00 00:00:00'),
(13, 'Graduation ', '', '', 'enable', '2017-11-15 13:38:25', '0000-00-00 00:00:00'),
(14, 'New Year ', '', '', 'enable', '2017-11-15 13:38:55', '0000-00-00 00:00:00'),
(15, 'Party ', 'All kind', '', 'enable', '2017-11-15 13:39:24', '0000-00-00 00:00:00'),
(16, 'Father''s Day ', '', '', 'enable', '2017-11-15 13:39:42', '0000-00-00 00:00:00'),
(17, 'Mother''s Day ', '', '', 'enable', '2017-11-15 13:39:56', '0000-00-00 00:00:00'),
(18, 'Thanksgiving ', '', '', 'enable', '2017-11-15 13:40:11', '0000-00-00 00:00:00'),
(19, 'Children''s Day ', 'xgg', '', 'disable', '2017-11-15 13:40:27', '2018-01-24 14:45:52');

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
  `image` varchar(300) NOT NULL,
  `product_unit_price` decimal(10,0) NOT NULL,
  `discount` float NOT NULL,
  `product_description` text NOT NULL,
  `quantity` smallint(12) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `token` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL,
  `doc` datetime NOT NULL,
  `dom` datetime NOT NULL,
  `catalog` varchar(100) NOT NULL,
  `no_of_times_viewed` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `occasion_id`, `product_type_id`, `product_code`, `product_name`, `product_picture`, `image`, `product_unit_price`, `discount`, `product_description`, `quantity`, `is_approved`, `token`, `status`, `doc`, `dom`, `catalog`, `no_of_times_viewed`) VALUES
(8, 1, 1, 1, 'RR', 'Roses', '', '5690a4f59e3b59f2de2fbcaa39c08cd4.jpg', '200', 0, 'Red Roses', 1, 1, '403e82056512eba4a5a3a58b5153d9a0', 'enable', '2017-10-09 22:20:12', '2017-10-09 22:20:12', 'Featured', 50),
(9, 1, 10, 2, 'NP', 'Neckpeace', '', 'ca5d263667ad20c6661b473394a86688.jpg', '250', 0, 'dgfg', 2, 1, 'd86879f402b910745a38c2491aa27336', 'enable', '2017-10-10 08:58:48', '2017-10-10 08:58:48', '', 8),
(10, 14, 2, 2, 'NBT', 'Non-Bridal Tikli', '', '0ee2987ace8fa115ae4ec213f38dff2d.jpg', '200', 0, 'multicolor gold pearl tikli', 1, 1, 'aa9ecaf1ff53361704e15dfc46f63548', 'enable', '2017-10-10 09:01:29', '2017-10-10 09:01:29', '', 0),
(11, 1, 2, 1, 'bdv', 'Jinia', '', '6624b71eff9e4d18c7e136f77e664fb3.jpg', '20', 0, 'ghg', 2, 1, '389721dac638af87236b3b307580ccb0', 'enable', '2017-10-27 17:46:54', '2017-10-27 17:46:54', '', 2),
(12, 14, 10, 1, 'vf', 'test', '', '9bf155b9010add8beb7ec6692d8424cb.jpg', '245', 0, 'cvcb', 1, 1, '3a15b5f20cd793a30663930d13a8c040', 'enable', '2017-10-27 17:58:00', '2017-10-27 17:58:00', '', 0),
(13, 13, 10, 1, 'g', 'another', '', '3f05f01f75f18622d949d331837aa237.jpg', '2', 0, 'gf', 1, 1, '4ed335fe745e922d76d91baa8c1c4c4c', 'enable', '2017-10-27 18:00:26', '2017-10-27 18:00:26', '', 2),
(14, 5, 1, 1, 'dfd', 'Rose Boucket', '', 'fbd273e9359268ba823bf078c5428ff4.jpg', '150', 0, 'Red', 1, 1, '369e14582c2d3f8676da1f8846134c3c', 'enable', '2017-11-02 13:10:37', '2017-11-02 13:10:37', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
`product_type_id` int(11) NOT NULL,
  `product_type` varchar(15) NOT NULL,
  `catalog` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `doc` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type`, `catalog`, `status`, `doc`) VALUES
(1, 'Raw material', '', 'enable', '2017-10-11 21:27:56'),
(2, 'Die material', 'Silk Flower,Ribbon Flower', 'enable', '2017-10-11 21:28:08');

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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `google_map`
--
ALTER TABLE `google_map`
MODIFY `google_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
MODIFY `occasion_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
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
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT for table `user_billing`
--
ALTER TABLE `user_billing`
MODIFY `user_billing_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
