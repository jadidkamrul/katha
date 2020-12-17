-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 03:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katha`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(3, 'Eagle'),
(4, 'Polo'),
(5, 'j&j'),
(6, 'tommy'),
(7, 'police'),
(8, 'reserve'),
(9, 'zara'),
(11, 'Nokia'),
(12, 'Samsung'),
(13, 'Other'),
(14, 'None'),
(15, 'I Phone '),
(16, 'SONY'),
(17, 'Oppo'),
(18, 'HTC'),
(19, 'ASUS'),
(20, 'Walton'),
(21, 'Symphony'),
(22, 'Huawei'),
(23, 'LG'),
(24, 'Microsoft Lumia'),
(25, 'Lenovo'),
(26, 'ACER'),
(27, 'Hp'),
(28, 'Dell'),
(29, 'Tp-Link'),
(30, 'Canon'),
(31, 'Nikon'),
(32, 'Macbook'),
(33, 'Black Berry'),
(34, 'Sony'),
(35, 'toshiba'),
(36, 'Adata'),
(37, 'Kingston '),
(38, 'Wd'),
(39, 'Transcend'),
(40, 'PNY'),
(41, 'Twinmos'),
(42, 'A4 Tech '),
(43, 'POWERTAKE'),
(44, 'ESTONE'),
(45, 'Logitech'),
(46, 'Ditmo'),
(47, 'X TREME'),
(48, 'MICROLAB'),
(49, 'Delux'),
(50, 'Brother '),
(51, 'Mustek '),
(52, 'Intel'),
(53, 'GIGABYTE'),
(54, 'JOBS'),
(55, 'Panasonic'),
(56, 'LAVA'),
(57, 'BOSS'),
(58, 'ATASHI'),
(59, 'VIEWSONIC'),
(60, 'ATASHI'),
(61, ''),
(62, 'USB'),
(63, 'Wireless'),
(64, 'A4TECH'),
(65, 'TP-LINK'),
(66, 'Huawei'),
(67, 'Astrum'),
(68, 'Havit'),
(69, 'Xiaomi'),
(70, 'Tenda'),
(71, 'RAPOO'),
(72, 'Genius'),
(73, 'Astrum'),
(74, 'Cosonic'),
(75, ' Garment Machine'),
(76, 'Pran RFL');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `parent` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `parent`) VALUES
(17, 'APPARELS AND ACCESSORIES', 0),
(18, 'GIFT AND ACCESSORIES', 18),
(19, 'SPORTS ZONE', 0),
(20, 'ELECTRONIC AND ACCESSORIES', 0),
(21, 'AUTOMOBILES AND ACCESSORIES', 0),
(22, 'HEALTH AND BEAUTY ', 0),
(23, 'FOODS AND BEVERAGE ', 0),
(24, 'BAG, SHOES AND ACCESSORIES', 0),
(25, 'JOBS', 0),
(26, 'Home and decored', 26),
(27, 'MEN`S FASHION', 17),
(29, 'WOMEN`S FASHION', 17),
(30, 'KIDS ZONE', 17),
(31, 'T-SHIRT', 17),
(32, 'Mans-t`shirt', 17),
(33, 'Apparels and Textiles Accessories', 17),
(34, 'Women`s T-Shirt', 17),
(35, 'Women`s Zone', 17),
(36, 'MAN`S FASHION Zone', 17),
(37, 'Cricket Zone', 19),
(38, 'Football', 19),
(39, 'All Sports Zone', 19),
(40, 'Electric Equipment', 20),
(41, 'Electric Tools', 20),
(42, 'Auto mobiles Tools', 21),
(43, 'Auto mobiles Accessories', 21),
(44, 'Sex Product', 22),
(45, 'Surgical Tools', 22),
(46, 'Sanitary and Sanitation ', 22),
(47, 'Saving and Hair Removel', 22),
(48, 'Skin Care', 22),
(49, 'Body Weight', 22),
(50, 'Beauty Equipments', 22),
(51, 'Medical and Madecin', 22),
(52, 'Medecine and Pharmaceutical', 0),
(53, 'Mobile Phone', 20),
(54, 'Computer and Tablet', 20),
(55, 'Computer and Accessories', 20),
(56, 'Cemara and video ', 20),
(57, 'TV and Others', 20),
(58, 'Bus,Track,CNG', 21),
(59, 'Auto parts and Accessories', 21),
(60, 'Soft Foods', 23),
(61, 'Daily Foods', 23),
(62, 'Fresh and vegetable ', 23),
(63, 'All Foods and Beverage  ', 23),
(64, 'Leather Bag', 24),
(65, 'Women Shoes', 24),
(66, 'Mans Shoes', 24),
(67, 'Children Shoes', 24),
(68, 'All Shoes and Accessories', 24),
(69, 'Latest Jobs', 25),
(70, 'Home and Decor', 0),
(71, 'Wood and Plastic', 70),
(72, 'Home and cenitation', 70),
(73, 'Medical Device', 52),
(74, 'Drages ', 52),
(75, 'chemical ', 52),
(76, 'Gift and fashion', 0),
(77, 'Gaget Item', 76),
(78, 'Gift Item', 76),
(79, 'Watch for man', 76),
(80, 'Watch for Weman', 76),
(81, 'Fashion Zone', 0),
(82, 'Jowelery', 81),
(85, 'Printer and Scanner', 20),
(86, 'Processor', 20),
(87, 'Garment Machine', 17),
(88, 'industrial machinery and tools', 0),
(89, 'Power Tools', 88),
(90, 'Home Hand Tools', 88),
(91, 'Construction and Development Tools', 88),
(92, 'Apparel and Textile Machinery', 88),
(93, 'Packaging Machine ', 88),
(94, 'Daily Food & Beverage Machinery', 88),
(95, ' Color and Printing Machine', 88),
(96, 'Plastic Machinery', 88),
(97, 'Silver Machine', 88),
(98, 'Power Machine', 88),
(99, 'Agreecultural Machine and Tools', 0),
(100, ' Buildings Materials and Tools', 0),
(101, 'Sanitary ware & Fittings', 70),
(102, 'Kitchen Room Tools', 70),
(103, 'Household Equipment', 70),
(104, 'Books and Stationery', 0),
(105, 'Cleaning Items', 70),
(106, 'Pipe and filtering', 99);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `catname`, `cat_image`) VALUES
(21, 'ggggggggg', 'ff021c949c49110eba805b4dee122ebf.jpg'),
(22, 'gggggggggg', '3f6ab625c6c47085aff6b726e70eda07.jpg'),
(23, 'last last last', 'c90c134fcb61517f79feb9d40ba8941f.jpg'),
(24, 'llllllllllll', 'a01dbcba6db33883f8d1e7df9a0cebbd.jpg'),
(25, 'testtttttttttttttttt', '53ef66d2ece087bce246224e35919745.jpg'),
(26, 'sdfsdf', 'e948bf282168494bd42c2649263a9d60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_title`) VALUES
(2, 'Red'),
(3, 'Blues'),
(4, 'White'),
(5, 'GREEN'),
(6, 'BLACK'),
(7, 'Pink'),
(8, 'mixed'),
(9, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` longtext COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`, `password`) VALUES
(21, 'kamrul ', 'kamrul@gmail.com', 'bhola', '123456', 'kamrul'),
(22, 'kholil', 'kholil@gmail.com', '', '', 'kholil'),
(23, 'test', 'test@gmail.com', 'test place', '123456', '123456'),
(24, 'lasat', 'last@gmail.com', 'last', '123456', '123456'),
(25, 'jadid', 'jadid@gmail.com', 'jamalpur', '123456', '123456'),
(31, 'Rasel', 'azamanrsl@gmail.com', 'dhaka', '01874041873', '1234'),
(32, 'Estiak', 'me@estiak.com', 'jj', '99', '1234'),
(33, 'Rejaul Karim', 'mail@rejaul.me', 'aaa', '12354', '12345'),
(34, 'test', 'test@test.com', 'sadsada', '23424234', '1234'),
(35, 'test', 'test@test.com', 'sadsada', '23424234', '1234'),
(36, 'test', 'test@test.com', 'Sarishabari, jamalpur', '23424234', '1234'),
(37, 'test', 'test@test.com', 'Sarishabari, jamalpur', '23424234', '1234'),
(38, 'checkout', 'checkout@gmail.com', 'checkout', '123456', 'checkout'),
(39, 'gggg', 'gggg@gmail.com', 'gggg', '1234', 'gggg'),
(40, 'gmail', 'test4@gmail.com', 'test', '2323', 'test'),
(41, 'trest', 'tests@gmail.com', 'terer', '3452234', '3434'),
(42, 'yes', 'yes@gmail.com', 'yes', '3234343', 'yes'),
(43, 'ghfg', 'dsfds@gmail.com', 'bgbg', '32323', '3434'),
(44, 'ghfg', 'dsfds@gmail.com', 'bgbg', '32323', '3434'),
(45, 'sdfasdf', 'sdf@gmail.com', 'sadfads', '342523', '34343'),
(46, 'sdfasdf', 'sdf@gmail.com', 'sadfads', '342523', '34343'),
(47, 'ffff', 'ffffW@gmail.com', 'asrsaf', '343434', '434444'),
(48, 'test', 'testtttt@gmail.com', 'test', 'sadfsa', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `customorder`
--

CREATE TABLE `customorder` (
  `customo_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `custom_name` varchar(255) NOT NULL,
  `custom_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customorder`
--

INSERT INTO `customorder` (`customo_id`, `customer_id`, `custom_name`, `custom_image`) VALUES
(5, 38, '', 'test58d90190380e6.png'),
(6, 38, '', 'test58d90439748c7.png'),
(7, 38, '', 'test58d904ae39caf.png');

-- --------------------------------------------------------

--
-- Table structure for table `designcategory`
--

CREATE TABLE `designcategory` (
  `d_id` int(11) NOT NULL,
  `designcategoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designcategory`
--

INSERT INTO `designcategory` (`d_id`, `designcategoryname`) VALUES
(8, 'PAR Design'),
(9, 'Body Design');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `dp_id` int(11) NOT NULL,
  `d_category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`dp_id`, `d_category`, `title`, `image`, `price`, `user_id`) VALUES
(5, '1', 'first', '96a1dbf038684b5d1c243f423605d891.jpg', '5', 0),
(6, '3', 'second', '6bc7bcdc905957f057a76befbce40622.jpg', '222', 0),
(7, '1', 'last', '3ce9e74b2e360fcd68d9806d1817307a.jpg', '45', 0),
(11, '', 'dsaf', 'a39529ef3c3f3e39fb65b53f075a44af.jpg', '4444', 0),
(12, '', 'dsafsdfsdafadsf', '3de8242944a56d838bcd9f858ec68aea.jpg', '4444', 0),
(16, '8', 'Straight Par Design', '3d41733dd3a2cb6020dacf1cdefd7b26.png', '500', 12),
(17, '8', 'Simple Par Design ', '31db873dd234340c6731e770f899b16a.png', '450', 12),
(18, '9', 'Body  Alpona', '55f6fd257f56a3502e9b7e1982bdeb61.jpg', '200', 12),
(19, '9', 'Body  Alpona Circle', 'c3f36d3980258dad4d2f686ef8174f10.png', '150', 12),
(20, '9', 'body design Flower', '989565aee57d45af094c9cac20cda92b.png', '100', 12),
(21, '8', 'halka  full  for par', '55441dcde15335aeaf164d05df74552e.jpg', '400', 12),
(22, '8', 'single border', '94dd664b6ee3d6a8c3a9ca6fa1d7aae4.jpg', '333', 12),
(23, '8', 'Corner Tree Design', '7a747e38649a190e272f9df74407b148.png', '500', 12),
(24, '8', 'Corner Flower Design', 'e0962faf9ff3c062124c105fcc50beda.gif', '600', 12),
(25, '8', 'Corner Flower Design', 'b834f83b2edfaf26f2d713cec29b8078.png', '300', 12),
(26, '9', 'body design peacock', 'b9edd67abcebe5dad0f7056380b648b1.jpg', '400', 12);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'seller', 'General User'),
(3, 'designer', 'Designer');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `o_status` enum('active','processing','cancel') COLLATE latin1_general_ci NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `date`, `customerid`, `o_status`) VALUES
(42, '2017-03-09', 21, 'active'),
(41, '2017-03-09', 21, 'active'),
(40, '2017-03-09', 21, 'active'),
(39, '2017-03-09', 21, 'active'),
(38, '2017-03-09', 21, 'active'),
(37, '2017-03-09', 21, 'active'),
(36, '2017-03-09', 21, 'active'),
(32, '2017-03-01', 21, 'processing'),
(33, '2017-03-01', 21, 'processing'),
(34, '2017-03-01', 21, 'processing'),
(35, '2017-03-01', 21, 'cancel'),
(43, '2017-03-21', 21, 'active'),
(44, '2017-03-21', 21, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `od_id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `orderid`, `productid`, `quantity`, `price`) VALUES
(1, 32, 82, 1, 44),
(2, 33, 86, 1, 0),
(3, 34, 84, 1, 34),
(4, 35, 86, 1, 0),
(5, 36, 89, 2, 77),
(6, 36, 87, 1, 44),
(7, 37, 84, 1, 34),
(8, 37, 73, 5, 25),
(9, 38, 87, 1, 44),
(10, 39, 87, 1, 44),
(11, 39, 84, 1, 34),
(12, 40, 83, 3, 45),
(13, 40, 86, 4, 0),
(14, 41, 87, 1, 44),
(15, 42, 84, 1, 34),
(16, 42, 93, 1, 34),
(17, 42, 88, 1, 54),
(18, 43, 82, 4, 44),
(19, 44, 94, 1, 455);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `p_category` int(11) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `product_desc` text NOT NULL,
  `status` enum('pending','approved') NOT NULL,
  `sale_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `product_name`, `product_sku`, `p_category`, `product_price`, `product_status`, `product_quantity`, `product_desc`, `status`, `sale_count`) VALUES
(64, 0, 'sdfdf', '21', 16, 4, 'in stock', 4, 'sdfsdfsdf', 'pending', 2),
(72, 11, 'sffsdfsdf', 'asdf', 21, 444, 'in stock', 44, '                                                sadfasdf', 'pending', 2),
(73, 1, 'llllllllllllllllll', 'testtttttttttttttttttttt', 16, 25, 'in stock', 21, '                                                                        asdfsdfsadasdf bdsfsdafsdaf', 'pending', 3),
(80, 1, 'vvvvvvvvvvvvv', 'vvvvvvvvvvvvv', 18, 4444, 'in stock', 444444, '                                                                        aaaaaaaaaaaaaaaa', 'pending', 0),
(81, 1, 'sdfasd', 'dsafasd', 17, 44, 'in stock', 4, '                        44', 'pending', 0),
(82, 1, 'tesatsd', 'tetw', 17, 44, 'out of stock', 44, '                        sdafs dsf sdf sd', 'pending', 2),
(83, 1, 'sdfdsfasdf', 'sdf', 16, 45, 'in stock', 4, '                        sdfasdf', 'pending', 1),
(84, 1, 'kholil', 'kholi ', 16, 34, 'in stock', 34, '                        sdf sdfsadfsdaf', 'pending', 4),
(86, 1, 'sdfasdf', 'sdfasdf', 0, 0, 'in stock', 0, '                                 sdfasdf                                       ', 'pending', 3),
(87, 1, 'ggggggggggg', 'ggggggg', 16, 44, 'in stock', 4, '                        sadf dsfsdafsa fsd dsaf', 'pending', 4),
(88, 11, 'test last', 'test last', 21, 54, 'out of stock', 4, '                        this is last test ', 'pending', 1),
(89, 11, 'ttttt', 'ttttt', 22, 77, 'out of stock', 5, '                        asdf asd fadsf asdf adsf asd', 'pending', 1),
(90, 11, 'sdfsadf', 'sdfadsf', 21, 45, 'out of stock', 20, '                        sdaf fasdf sadf asdf', 'pending', 0),
(94, 1, 'test Product', 'test Product', 25, 455, 'in stock', 45, 'test Product test Product test Product', 'pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `img_id` int(11) NOT NULL,
  `p_i_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`img_id`, `p_i_id`, `image`) VALUES
(22, 63, '3884e8ff21e839602f123cd2e149643e.jpg'),
(23, 63, 'cb6430bb8316965d57f322a5b45c8c83.jpg'),
(24, 63, 'f2f618c56ae4efdc032aa714a8fe2c33.jpg'),
(27, 65, 'a76e106f149a9e78f666a2164eb7e765.jpg'),
(28, 65, 'ba02d5449ed8d28fa82e87685c1499a7.jpg'),
(29, 65, '2a3c22815db9753db4ba1ab8a344b8bb.jpg'),
(32, 1, '58c540bfd708a94f793a8474a1c8d9f7.jpg'),
(33, 67, '219b41653e01fc41a3883bb514fb539d.jpg'),
(38, 70, '373937563b4b3352811e93b4abc85e83.jpg'),
(39, 70, '872d22c2511ad69e81567c4d2d2084d0.jpg'),
(40, 71, '7615102230617f9603f1fb6c74ef421d.jpg'),
(41, 71, 'b3c0ca14a181108b5a88088243dd26bd.PNG'),
(46, 74, ''),
(47, 75, ''),
(48, 74, ''),
(49, 75, ''),
(50, 76, ''),
(51, 77, ''),
(52, 78, ''),
(53, 79, ''),
(59, 85, '6375fd3d089898c4cc491b9c8e6c6f39.jpg'),
(69, 93, '955135b97b1a601971eb23370f955098.jpg'),
(71, 0, 'd30cdedb0396bc549b7e0bb7037bcd33.jpg'),
(72, 95, ''),
(73, 96, '08f489e42fad647b170881bb8238bbfa.jpg'),
(74, 96, '36892b93c7d6e191b38ef2ae6b055b1f.jpg'),
(75, 97, 'b729a941dc59245f1b6da288db346ee2.jpg'),
(76, 97, '59f902939f892c34951b8eca9c8266d8.jpg'),
(77, 68, '9b10dedd4a0a64b6d0ed364a1d24fafc.jpg'),
(78, 68, 'ea440f7cb8a2b2b29796bf51b73fb29d.jpg'),
(85, 68, '95fb5be432c14cceceadbe426d0d711a.jpg'),
(86, 94, '17024b008cfe3f7aeeff40dcf0c43ecb.jpg'),
(87, 94, 'fde58f55cdc7d5ac78f0898d0e416d6e.jpg'),
(88, 87, '34de457090bd8f5991e8ef537ecb18d7.jpg'),
(89, 84, '8c03117104f0eea94b0cab69cd0f75a7.jpg'),
(90, 73, 'b0ea4a0aeecc63de9be3136e03000d8b.png'),
(91, 64, 'a0f65146ea3a77d44fbf925ba3be650e.jpeg'),
(93, 81, '8a40b3e9253a25297c4f6e050d524a59.jpg'),
(94, 86, '36ad9ad9643b7870b164e05f31d66d4d.jpg'),
(95, 83, 'b5fa933996a01a230e5dbaafc6765871.jpg'),
(96, 90, '8830b817527868ec08b1fae830170fa6.jpg'),
(97, 72, 'f529856fcbc061e3cdc8d639362daada.jpg'),
(98, 82, '1751408078eb825e0ba29663be6e0bf8.jpg'),
(99, 88, 'a6daa987fe4ecffe0f13a2cd2bc62d65.jpg'),
(100, 89, '4af9b36fe49a64a6ad5055dc9e44f255.jpg'),
(101, 80, 'cdcff54310e4c89c2511102908ef1c54.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `c_id`, `p_id`, `coment`, `rating`, `date`) VALUES
(1, 22, 81, '                   sdfsdfdsf                                                         ', 5, '2017-03-08 16:38:51'),
(2, 23, 82, '                 test                                                           ', 4, '2017-03-08 16:38:51'),
(3, 24, 88, '                  sssss                                                          ', 5, '2017-03-08 16:38:51'),
(4, 25, 81, '                one                                                            ', 1, '2017-03-08 16:38:51'),
(5, 21, 92, '                 test 3                                                           ', 3, '2017-03-08 16:38:51'),
(6, 21, 88, '               threee                                                             ', 3, '2017-03-08 16:38:51'),
(7, 21, 81, '                       tesssssssss                                                     ', 3, '2017-03-08 16:38:51'),
(8, 21, 93, '                                      test                                      ', 5, '2017-03-08 16:38:51'),
(9, 21, 84, 'test                                                               ', 4, '2017-03-08 16:38:51'),
(10, 21, 83, 'tttt                                                               ', 2, '2017-03-08 16:38:51'),
(11, 21, 88, '                           sdfsdf                                                 ', 5, '2017-03-08 16:38:51'),
(12, 21, 92, '                    four                                                        ', 4, '2017-03-08 18:47:25'),
(13, 21, 92, '                                            five                                ', 5, '2017-03-08 19:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_details` text NOT NULL,
  `user_address` text NOT NULL,
  `user_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `date_of_birth`, `gender`, `user_image`, `user_details`, `user_address`, `user_status`) VALUES
(1, '127.0.0.1', 'Administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'jiLZgZgnW9a4XGAt5T19Hu', 1268889823, 1490614104, 1, 'Admin', 'istrator', 'ADMIN', NULL, '0000-00-00', 'male', '5570b3066a21b38ea4e01a7c296622cb.png', '', '', 'active'),
(11, '::1', 'sellers', '$2y$08$qCU99MsOEDxKGmshFIhkSueWLgNsQpNvu2E6h/Q6GU5w.r57L9/mi', NULL, 'seller@gmail.com', NULL, NULL, NULL, 'lL9uCFPDD4baaHI2gX52ZO', 1486640092, 1490176677, 1, NULL, NULL, NULL, '66666777', '0000-00-00', 'male', 'a5a4ad7f0fb88335d3dbe209f65400fd.jpg', 'seller', 'seller', 'active'),
(12, '::1', 'Designer', '$2y$08$ZCZW.H8WGrkDJiNF6Ts6petfL935gzRpkv1/9nt/JaljGKLUV4Tr2', NULL, 'designer@gmail.com', NULL, NULL, NULL, '0EJNOLvv.lCLTMrdpdKgR.', 1486641252, 1490618741, 1, NULL, NULL, NULL, '123465677', '2017-02-14', 'male', 'a407a750f8c611db7a3023e431024248.jpg', 'designer', 'designer', 'suspend'),
(21, '::1', 'seller1', '$2y$08$duCnj2rLhl.RFvqme/5R3Orqdrk1WU1jr7m/VSFzw0O79s1Wz8Ep6', NULL, 'seller1@gmail.com', NULL, NULL, NULL, '8UEkT.grZ8ab27/Z5cM6S.', 1488007347, 1488200392, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'suspend'),
(24, '::1', 'designer1@gmail.com', '$2y$08$XKrvidmw4FJ02haJXnkTrOX7ObdwarWJ/TcgB5clpsOI0sCSLq4zC', NULL, 'designer1@gmail.com', NULL, NULL, NULL, '5QPM/IZYvnU5ZsuLJIDSPe', 1488010833, 1488010992, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'suspend'),
(25, '::1', 'no  image', '$2y$08$7Tv/V//fyoVg3WonXn4qzu/z1VZUTKOd2kYRR98d.P7rsQO2fjPAC', NULL, 'sdfd@ff', NULL, NULL, NULL, NULL, 1488375453, NULL, 1, NULL, NULL, NULL, '44545', '0000-00-00', 'male', '535023a5ac7e1958210622a30fdd7647.jpg', '                     no  image                                                   ', '       sdf sdf       sdf sdf                                                                ', 'active'),
(26, '::1', 'kamrul123', '$2y$08$kFWgXrz6VSdzb8HWHJF0DOO/jeSZtVk.aopb4o2Kif.22/CBzwg6u', NULL, 'kamrul123@gmail.com', NULL, NULL, NULL, NULL, 1488375895, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(27, '::1', 'sdfasdf', '$2y$08$qRn2rH.k4N/qWbDzHsfGq.fBv6jPzbs.kXBx72oVfMCsH/dPtO6RK', NULL, 'azmath_95@yahoo.com', NULL, NULL, NULL, NULL, 1488432102, NULL, 1, NULL, NULL, NULL, '43', '0000-00-00', 'male', '6e151be263f7972e4e4ad8697c747e40.jpg', 'sadfasdf', 'dsfasdfdsa', ''),
(28, '::1', 'kamrul', '$2y$08$TzVOBLjtgu7R.92iMb6RIuQ/vazoU9ICl28iGHmF4spsjyrY2HkWy', NULL, 'kamrul1234@gmail.com', NULL, NULL, NULL, NULL, 1488444768, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'active'),
(29, '::1', 'tttttt', '$2y$08$Gr302ufvBaG7qOFq9eAiSOezna2ealOrzRiubKQ/oPV5Na9vTHVf.', NULL, 'tttttttttt@gmail.com', NULL, NULL, NULL, NULL, 1488446717, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(30, '::1', 'gfgf', '$2y$08$90W5sUp0o.5d/1iu58ARsuEUFJz3m6Z18stInO0AQkMvCOOeVk0MO', NULL, 'gf@gmail.com', NULL, NULL, NULL, NULL, 1488446746, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(31, '::1', 'des', '$2y$08$GUHYC2BC8wNTUdUtqdWpnub1kPu.l2PwHunwGgJMx1DUjc/nBh2ti', NULL, 'des@gmail.com', NULL, NULL, NULL, NULL, 1488446787, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(32, '::1', 'test test', '$2y$08$3i5fpDvxIdoGsUdjnn1Wre84Clx4CTf1NW4UitdDeA9hlzJLoKd5q', NULL, 'test@gmail.com', NULL, NULL, NULL, '/9qirL/OAQ43dCQ5wYovL.', 1490090074, 1490090291, 1, NULL, NULL, NULL, '4545454', '0000-00-00', 'male', '03959e85fac820c3c90cfe020b442b70.png', '', '', 'active'),
(33, '::1', 'kamrul', '$2y$08$sd/N0/vyUE5Xg3625LmdN.SZEj9zIQIfCAn3rqKqFMgPMExh9mhdu', NULL, 'sayem@gmail.com', NULL, NULL, NULL, 'GIjSyD7v6aQDJd34ehNiRO', 1490166499, 1490166618, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'active'),
(34, '::1', 'rayhan', '$2y$08$tnyZy.DLEDE8igCDhoMK8e3vVQhlh9RjPLxZzcNweEV2yTyEC.wvS', NULL, 'rayhan@gmail.com', NULL, NULL, NULL, NULL, 1490167225, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(35, '::1', 'asdfasdf', '$2y$08$LOHIaI5gmiqU6A23.GgbxOcwYUMS.qXc7uiGleyKTT2fSRdGfOPCi', NULL, 'asdf@gmail.com', NULL, NULL, NULL, NULL, 1490167482, NULL, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'pending'),
(36, '::1', 'test ', '$2y$08$sQnzAjxT0eCx5ravF3X8ZOpWXKj6uEq.SaEgurZ9DdYaqBlHYlRMi', NULL, 'testtest@gmail.com', NULL, NULL, NULL, 'c/3eMGWqDUPOP7k6p8aVuu', 1490175984, 1490176124, 1, NULL, NULL, NULL, NULL, '0000-00-00', 'male', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(11, 11, 2),
(12, 12, 3),
(18, 21, 2),
(21, 24, 3),
(22, 25, 2),
(23, 26, 3),
(24, 27, 2),
(25, 28, 3),
(26, 29, 3),
(27, 30, 2),
(28, 31, 3),
(29, 32, 2),
(30, 33, 2),
(31, 34, 2),
(32, 35, 2),
(33, 36, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `customorder`
--
ALTER TABLE `customorder`
  ADD PRIMARY KEY (`customo_id`);

--
-- Indexes for table `designcategory`
--
ALTER TABLE `designcategory`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `customorder`
--
ALTER TABLE `customorder`
  MODIFY `customo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `designcategory`
--
ALTER TABLE `designcategory`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
