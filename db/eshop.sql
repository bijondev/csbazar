-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2013 at 03:03 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `es_ad`
--

CREATE TABLE IF NOT EXISTS `es_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `link` varchar(500) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `orderby` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `es_ad`
--

INSERT INTO `es_ad` (`id`, `title`, `from_date`, `to_date`, `link`, `images`, `status`, `orderby`) VALUES
(6, 'trhyyrtyhrtyhrty', '2013-09-03 00:00:00', '2013-09-21 00:00:00', 'hrdtyhrtdrtu rt', 'add_1A847C95316A521D.gif', 'E', 3),
(10, 'Robi', '2013-10-27 00:00:00', '2013-12-31 00:00:00', 'http://robi.com.bd/', 'add_DDDED4E3035C6059.gif', 'E', 2);

-- --------------------------------------------------------

--
-- Table structure for table `es_banner`
--

CREATE TABLE IF NOT EXISTS `es_banner` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(200) NOT NULL,
  `_status` int(1) NOT NULL,
  `_picture` varchar(200) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `es_banner`
--

INSERT INTO `es_banner` (`_id`, `_name`, `_status`, `_picture`) VALUES
(4, 'sadsfdsa', 0, 'banner_AA56C56639E7A034.jpg'),
(9, '', 0, 'banner_E8A2EADD2FC94EB8.jpg'),
(10, '', 0, 'banner_F04165E50D0A46E1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `es_city`
--

CREATE TABLE IF NOT EXISTS `es_city` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(100) NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `es_city`
--

INSERT INTO `es_city` (`ct_id`, `ct_name`) VALUES
(1, 'Barisal'),
(2, 'Chittagong'),
(3, 'Comilla'),
(4, 'Dhaka'),
(5, 'Mymensingh'),
(6, 'Khulna'),
(7, 'Rajshahi'),
(8, 'Rangpur'),
(9, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `es_featuresbusiness`
--

CREATE TABLE IF NOT EXISTS `es_featuresbusiness` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_companyname` varchar(200) NOT NULL,
  `fb_businesstype` varchar(50) NOT NULL,
  `fb_location` varchar(50) NOT NULL,
  `fb_website` varchar(200) NOT NULL,
  `fb_contactperson` varchar(200) NOT NULL,
  `fb_contactnumber` varchar(200) NOT NULL,
  `fb_email` varchar(200) NOT NULL,
  `fb_others` varchar(5000) NOT NULL,
  `fb_status` varchar(50) NOT NULL,
  `fb_datetime` datetime NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `es_featuresbusiness`
--

INSERT INTO `es_featuresbusiness` (`fb_id`, `fb_companyname`, `fb_businesstype`, `fb_location`, `fb_website`, `fb_contactperson`, `fb_contactnumber`, `fb_email`, `fb_others`, `fb_status`, `fb_datetime`) VALUES
(1, 'tops', 'fashion shop', 'uttara', 'http://tops.com/', 'alim', '5466817689778', 'info@tops.com', 'vcbggvggg ', '', '2013-09-25 00:00:00'),
(2, 'dfgdfg', 'dsgsfg', 'dsgf', 'dsfgfgf', 'dsggdfsg', 'dgdfsgdsfghd', 'dsfghsfh@gmail.com', ' ghdsrtyrstr', 'new', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `es_marcents`
--

CREATE TABLE IF NOT EXISTS `es_marcents` (
  `mr_id` int(11) NOT NULL AUTO_INCREMENT,
  `mr_company_name` varchar(100) NOT NULL,
  `mr_slug` varchar(500) NOT NULL,
  `mr_city` varchar(50) DEFAULT NULL,
  `mr_address` varchar(200) DEFAULT NULL,
  `mr_description` varchar(500) DEFAULT NULL,
  `mr_location` varchar(100) DEFAULT NULL,
  `mr_website` varchar(100) DEFAULT NULL,
  `mr_contact_person` varchar(50) DEFAULT NULL,
  `mr_contact_number` varchar(20) DEFAULT NULL,
  `mr_email` varchar(50) DEFAULT NULL,
  `mr_logo` varchar(100) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`mr_id`),
  UNIQUE KEY `mr_slug` (`mr_slug`),
  KEY `fk_marcents` (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `es_marcents`
--

INSERT INTO `es_marcents` (`mr_id`, `mr_company_name`, `mr_slug`, `mr_city`, `mr_address`, `mr_description`, `mr_location`, `mr_website`, `mr_contact_person`, `mr_contact_number`, `mr_email`, `mr_logo`, `u_id`) VALUES
(1, 'zone 83', 'zone83', 'Dhaka', NULL, '', '57.7973333,12.0502107', '', 'kamal', '090987654', 'bijon.bairagi@live.com', 'mar_logo_7042ECBBE370D1FF.jpg', 2),
(3, 'e-zone', 'e-zone', 'Khulna', 'g  g g g', 'fkdsj fsjs;ks jsa;lf sfdskfasfk;ldsafk safkjdlsa fklkdslf jsfkjsakfk jfsf sakf ;jsafksa jfefrew ofsdf jdskf&lt;br /&gt;', '57.7973333,12.0502107', 'http://tops24.com/', 'kamal', '090987654', 'engjkamal@yahoo.com', 'mar_logo_B4D99BCA841839AF.jpg', 3),
(5, 'topt', 'topt', 'Dhaka', NULL, 'ghvtyjujujujuju6j 667 ui67&lt;br /&gt;', '57.7973333,12.0502107', 'http://tops.com/', 'mafuz', '984772395863', 'akbarshahid05@gmail.com', 'mar_logo_3F7AC479AD76486D.jpg', 5),
(6, 'topt241', 'topt241', 'Chittagong1', ' rter tewrtyeyrtury1', 'gr rertwertewe&lt;br /&gt;1', '57.7973333,12.0502107', 'http://tops231.com/', 'rrr1', '9847723958631', 'akbarshahid051@gmail.com', 'mar_logo_3321F040B125CBB7.jpg', 6),
(7, 'nokia', 'nokia', 'Dhaka', ' sadsadsa', 'new&lt;br /&gt;', '', 'http://nokia.com.bd/', 'kamal', '090987654', 'engjkamal@yahoo.com', 'mar_logo_CA23D8C829EF62BF.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `es_marcent_banners`
--

CREATE TABLE IF NOT EXISTS `es_marcent_banners` (
  `mb_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `mb_picture` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`mb_id`),
  KEY `pk_marcent_banner` (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `es_marcent_banners`
--

INSERT INTO `es_marcent_banners` (`mb_id`, `m_id`, `mb_picture`, `status`) VALUES
(2, 1, 'mar_ban_4472D4C3B00437F1.jpg', 'E'),
(3, 3, 'mar_ban_0B9700CB47910235.jpg', 'E'),
(4, 3, 'mar_ban_0001C75E456C1603.jpg', 'E'),
(5, 3, 'mar_ban_B62134031BFB0A66.jpg', 'E'),
(6, 1, 'mar_ban_5997D32E6388B446.jpg', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `es_products`
--

CREATE TABLE IF NOT EXISTS `es_products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_url` varchar(100) DEFAULT NULL,
  `p_conditions` varchar(5000) DEFAULT NULL,
  `p_descriptions` varchar(5000) DEFAULT NULL,
  `p_published_from_date` datetime DEFAULT NULL,
  `p_published_to_date` datetime DEFAULT NULL,
  `marchent_id` int(11) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `p_original_price` decimal(10,2) DEFAULT NULL,
  `p_hot` varchar(50) DEFAULT NULL,
  `p_deals` varchar(100) DEFAULT NULL,
  `p_sold_out` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `es_products`
--

INSERT INTO `es_products` (`p_id`, `p_name`, `p_url`, `p_conditions`, `p_descriptions`, `p_published_from_date`, `p_published_to_date`, `marchent_id`, `user_id`, `category_id`, `p_original_price`, `p_hot`, `p_deals`, `p_sold_out`) VALUES
(1, 'Samsung Galaxy 4', '333', 'retret12', 'rewkitjttj jtkr tjretkejt1', '2013-09-11 00:00:00', '2013-09-20 00:00:00', 2, '1', 4, '455.00', '', '123', 'soldout'),
(2, 'SAMSUNG GALAXY NOTE 1 &amp;amp; NOTE 2 STARTING FR', 'samsung-galaxy-note-1-amp-note-2-starting-from-21000tk-1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'bijon.bairagi@gmail.com', 3, '45000.00', '', '123', ''),
(3, 'SAMSUNG GALAXY NOTE 1 &amp;amp; NOTE 2 STARTING FR', 'samsung-galaxy-note-1-amp-note-2-starting-from-21000tk', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'bijon.bairagi@gmail.com', 1, '500.00', 'hot', '123', ''),
(4, 'LAPTOP, LCD TV Or Any Electronics Item SERVICE WIT', 'laptop-lcd-tv-or-any-electronics-item-service-with-gurantee', 'dfgdfgddfhdfhWith Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we&#039;ve rewritten the project to be mobile friend&lt;br /&gt;&lt;ul&gt;&lt;li&gt;sdfgdsg&lt;/li&gt;&lt;li&gt;gdfgfgh&lt;/li&gt;&lt;li&gt;dgdfhhfg&lt;/li&gt;&lt;li&gt;dghshgj&lt;br /&gt;&lt;/li&gt;&lt;/ul&gt;', 'fghfghfhgfhWith Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we&#039;ve rewritten the project to be mobile friend&lt;br /&gt;', '2013-07-02 00:00:00', '2013-10-31 00:00:00', 1, 'bijon.bairagi@gmail.com', 1, '45000.00', 'hot', '123', ''),
(5, 'Speaker Nansin V-3001 (2.1) USB, MMC Port', 'speaker-nansin-v-3001-2-1-usb-mmc-port', '&lt;h1&gt;Speaker Na&lt;/h1&gt;', '&lt;h1&gt;Speaker Nansin V-3001 (2.1) USB, MMC Port&lt;/h1&gt;&lt;br /&gt;', '2013-09-05 00:00:00', '2013-09-27 00:00:00', 1, 'bijon.bairagi@gmail.com', 1, '4563.00', 'hot', '123', ''),
(6, 'LAPTOP, LCD TV Or Any Electronics Item SERVICE WIT', 'laptop-lcd-tv-or-any-electronics-item-service-with-gurantee-2', 'LAPTOP, LCD TV Or An', 'LAPTOP, LCD TV Or Any Electronics Item SERVICE WITH GURANTEE&lt;br /&gt;&lt;br /&gt;', '2013-09-10 00:00:00', '2013-11-30 00:00:00', 1, 'bijon.bairagi@gmail.com', 4, '250.00', '', '', ''),
(7, 'dfgdfg', '5624512485', 'dsfgfh', 'dfhsh', '2013-09-02 00:00:00', '2013-11-30 00:00:00', 3, 'bijon.bairagi@gmail.com', 2, '800.00', 'hot', 'deals', ''),
(8, 'rwt564', 'rwt564', 'sfsbtreat4e64e&lt;br /&gt;', 'wte rewt qt&lt;br /&gt;', '2013-09-20 00:00:00', '2013-09-30 00:00:00', 1, 'bijon.bairagi@gmail.com', 3, '600.00', 'hot', 'deals', 'soldout');

-- --------------------------------------------------------

--
-- Table structure for table `es_product_category`
--

CREATE TABLE IF NOT EXISTS `es_product_category` (
  `pc_id` int(11) NOT NULL AUTO_INCREMENT,
  `pc_name` varchar(50) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `es_product_category`
--

INSERT INTO `es_product_category` (`pc_id`, `pc_name`, `category_id`, `status`) VALUES
(2, 'pant', NULL, ''),
(3, 'shirt', NULL, ''),
(4, 't-shirt', NULL, ''),
(5, 'laptop', NULL, ''),
(6, 'tablet', NULL, ''),
(7, 'Computer & Electronics', NULL, ''),
(8, 'Watches', NULL, ''),
(9, 'Beauty & Health', NULL, ''),
(10, 'Books', NULL, ''),
(11, 'Antivirus & Internet Security ', NULL, ''),
(12, 'T-shirt', NULL, ''),
(13, 'Belts, Wallets & Accessories', NULL, ''),
(14, 'Mobile Phones', NULL, ''),
(15, 'Pendrive', NULL, ''),
(16, 'Perfume and Body Spray', NULL, ''),
(17, 'Gifts,Chocolates,Flowers ', NULL, ''),
(18, 'Kid''s Corner', NULL, ''),
(19, 'Apparel-Men', NULL, ''),
(20, 'Apparel-Women', NULL, ''),
(21, 'Tabskk', NULL, ''),
(22, 'Footwear', NULL, ''),
(23, 'Rooftop Gardening ', NULL, ''),
(24, 'Bags and Luggage', NULL, ''),
(25, 'Cameras', NULL, ''),
(26, 'Sunglasses & Eyewear', NULL, ''),
(27, 'Jewelry ', NULL, ''),
(29, 'noo', NULL, ''),
(31, 'food&#039;s', NULL, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `es_product_colors`
--

CREATE TABLE IF NOT EXISTS `es_product_colors` (
  `clr_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `clr_name` varchar(50) NOT NULL,
  `clr_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clr_id`),
  KEY `fk_product_catagory` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `es_product_colors`
--

INSERT INTO `es_product_colors` (`clr_id`, `p_id`, `clr_name`, `clr_code`) VALUES
(1, 1, 'black', '#8fff00'),
(2, 1, 'un', '#8fffaa'),
(3, 3, 'red', '#8fff00'),
(5, 4, 'bluee', '#001dff'),
(6, 4, 'green', '#8fff00'),
(7, 7, 'RED', '#ff0000'),
(8, 8, 'black', '#000000'),
(9, 8, 'Red', '#ff0000'),
(10, 8, 'Greed', '#8fff00');

-- --------------------------------------------------------

--
-- Table structure for table `es_product_pictures`
--

CREATE TABLE IF NOT EXISTS `es_product_pictures` (
  `pp_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `pp_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pp_id`),
  KEY `fk_product_catagory12` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `es_product_pictures`
--

INSERT INTO `es_product_pictures` (`pp_id`, `p_id`, `pp_path`) VALUES
(4, 1, 'pimg0958397F67EC507D.jpg'),
(12, 3, 'pimg2F241C81C7441E1Cjpg'),
(13, 5, 'pimg4A8C2B144F1B3E02jpg'),
(15, 2, 'pimgB28EE6AAA6196C55jpg'),
(19, 4, 'pimgFF2FB726854727B9.jpg'),
(20, 4, 'pimg46.jpg'),
(23, 8, 'pimg00AC6ADCBC39BAE2.jpg'),
(26, 7, 'pimg984F492F925710C4.jpg'),
(27, 7, 'pimgE6C8AF32C5358F7D.jpg'),
(28, 7, 'pimgCDEFEA2E802AE3F2.jpg'),
(29, 6, 'pimg69FEAAB14FF171C7.jpg'),
(30, 6, 'pimgB156FD1159C23629.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `es_product_prices`
--

CREATE TABLE IF NOT EXISTS `es_product_prices` (
  `prc_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `prc_title` varchar(50) NOT NULL,
  `prc_price` decimal(10,2) DEFAULT NULL,
  `prc_description` varchar(300) DEFAULT NULL,
  `prc_instock` int(10) DEFAULT NULL,
  `prc_min_perches_qty` int(10) DEFAULT NULL,
  `prc_max_perches_qty` int(10) DEFAULT NULL,
  PRIMARY KEY (`prc_id`),
  KEY `fk_product_price` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `es_product_prices`
--

INSERT INTO `es_product_prices` (`prc_id`, `p_id`, `prc_title`, `prc_price`, `prc_description`, `prc_instock`, `prc_min_perches_qty`, `prc_max_perches_qty`) VALUES
(1, 1, 'used phone', '45000.00', ' fsfsjflkf jfkj ;lks jfsfkjsfjdshfkj', 1, 1, 2),
(2, 1, 'used phone', '45000.00', ' fsfsjflkf jfkj ;lks jfsfkjsfjdshfkj', 1, 1, 2),
(3, 1, 'samsung s3 china', '33000.00', 'kkk', 3, 1, 1),
(4, 1, '', '0.00', '', 0, 0, 0),
(5, 1, '', '0.00', '', 0, 0, 0),
(6, 1, '', '0.00', '', 0, 0, 0),
(7, 1, '', '0.00', '', 0, 0, 0),
(8, 3, 'SD FFSDA FBHSDAKFJDJASDFH FHLFJKASH FALSJFHSDF AJF', '456.00', 'dsftds', 1, 2, 2),
(9, 4, 'sw', '120.00', 'df dff', 10, 1, 5),
(10, 4, 'asus laptop', '3000.00', 'Bangladesh Bank is the Central bank of Bangladesh and is a member of the Asian Clearing Union. The bank is active in developing green banking and financial inclusion policy and is an important member of the Alliance for Financial Inclusion', 5, 2, 2),
(11, 7, 'rewrfdsf', '500.00', 'ew tatrt', 5, 1, 1),
(12, 8, 'Black', '500.00', 'ew tatrt', 5, 1, 1),
(13, 2, 'trhyyrtyhrtyhrty', '450.00', 'gdsfg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `es_product_sizes`
--

CREATE TABLE IF NOT EXISTS `es_product_sizes` (
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `ps_size` varchar(20) NOT NULL,
  PRIMARY KEY (`ps_id`),
  KEY `fk_product_sizes` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `es_product_sizes`
--

INSERT INTO `es_product_sizes` (`ps_id`, `p_id`, `ps_size`) VALUES
(1, 1, '45/30 inc'),
(2, 1, '45/50 inc'),
(3, 3, '45inc'),
(5, 4, '15.1 inc'),
(6, 7, 'xl'),
(7, 8, '45/30 inc');

-- --------------------------------------------------------

--
-- Table structure for table `es_product_specifications`
--

CREATE TABLE IF NOT EXISTS `es_product_specifications` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `sp_type` varchar(50) DEFAULT NULL,
  `sp_value` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sp_id`),
  KEY `fk_product_spsce` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_transections`
--

CREATE TABLE IF NOT EXISTS `es_transections` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `transection_no` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `quantaty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `p_method` varchar(50) NOT NULL,
  `p_status` varchar(50) NOT NULL,
  `t_status` varchar(50) NOT NULL,
  `from_ip` varchar(200) NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `fk_transection` (`product_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `es_transections`
--

INSERT INTO `es_transections` (`t_id`, `u_id`, `transection_no`, `product_id`, `price_id`, `quantaty`, `price`, `total_price`, `datetime`, `p_method`, `p_status`, `t_status`, `from_ip`) VALUES
(1, 2, 'asdfacarewtr4', 1, 1, 1, 500, 500, '2013-09-04 00:00:00', 'cod', 'pending', 'pending', ''),
(2, 2, 'sdfetrwtwqcdwrwqr3', 3, 3, 2, 500, 1000, '2013-09-04 09:32:36', 'cod', 'reject', 'success', ''),
(3, 2, '5242b65e5bcf7', 8, 12, 1, 500, 500, '2013-09-25 10:09:34', 'cod', 'succes', 'succes', '127.0.0.1'),
(4, 2, '5242c2d8a400e', 8, 12, 1, 500, 500, '2013-09-25 11:02:48', 'cod', 'succes', 'succes', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `es_transection_comments`
--

CREATE TABLE IF NOT EXISTS `es_transection_comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `comments` varchar(5000) NOT NULL,
  `parents_c_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `user-id` int(11) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `fk_transection_comments` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `es_users`
--

CREATE TABLE IF NOT EXISTS `es_users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `u_phone` varchar(20) DEFAULT NULL,
  `u_skypeid` varchar(50) DEFAULT NULL,
  `u_fbid` varchar(100) DEFAULT NULL,
  `u_address` varchar(200) DEFAULT NULL,
  `u_others` varchar(200) DEFAULT NULL,
  `u_type` varchar(2) DEFAULT NULL,
  `u_status` varchar(2) DEFAULT NULL,
  `u_uqcode` varchar(100) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `es_users`
--

INSERT INTO `es_users` (`u_id`, `u_name`, `password`, `username`, `u_phone`, `u_skypeid`, `u_fbid`, `u_address`, `u_others`, `u_type`, `u_status`, `u_uqcode`, `create_at`, `update_at`) VALUES
(1, 'bijon', 'e10adc3949ba59abbe56e057f20f883e', 'bijon.bairagi@gmail.com', '45766765', '4536', '645766', 'gdsgd', '64567', 'sa', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '202cb962ac59075b964b07152d234b70', 'bijon.bairagi@live.com', '01911015506', NULL, NULL, 'Uttara, dhaka', NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'fcea920f7412b5da7be0cf42b8c93759', 'engjkamal@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'e10adc3949ba59abbe56e057f20f883e', 'tops@gmail.com', NULL, NULL, NULL, NULL, NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'akbarshahid05@gmail.com', NULL, NULL, NULL, NULL, NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', '81dc9bdb52d04dc20036dbd8313ed055', 'akbarshahid05@gmail.com', NULL, NULL, NULL, NULL, NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'e10adc3949ba59abbe56e057f20f883e', 'engjkamal@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'M', 'E', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `es_marcents`
--
ALTER TABLE `es_marcents`
  ADD CONSTRAINT `fk_marcents` FOREIGN KEY (`u_id`) REFERENCES `es_users` (`u_id`);

--
-- Constraints for table `es_marcent_banners`
--
ALTER TABLE `es_marcent_banners`
  ADD CONSTRAINT `pk_marcent_banner` FOREIGN KEY (`m_id`) REFERENCES `es_marcents` (`mr_id`);

--
-- Constraints for table `es_product_colors`
--
ALTER TABLE `es_product_colors`
  ADD CONSTRAINT `fk_product_catagory` FOREIGN KEY (`p_id`) REFERENCES `es_products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `es_product_pictures`
--
ALTER TABLE `es_product_pictures`
  ADD CONSTRAINT `fk_product_catagory12` FOREIGN KEY (`p_id`) REFERENCES `es_products` (`p_id`);

--
-- Constraints for table `es_product_prices`
--
ALTER TABLE `es_product_prices`
  ADD CONSTRAINT `fk_product_price` FOREIGN KEY (`p_id`) REFERENCES `es_products` (`p_id`);

--
-- Constraints for table `es_product_sizes`
--
ALTER TABLE `es_product_sizes`
  ADD CONSTRAINT `fk_product_sizes` FOREIGN KEY (`p_id`) REFERENCES `es_products` (`p_id`);

--
-- Constraints for table `es_product_specifications`
--
ALTER TABLE `es_product_specifications`
  ADD CONSTRAINT `fk_product_spsce` FOREIGN KEY (`p_id`) REFERENCES `es_products` (`p_id`);

--
-- Constraints for table `es_transections`
--
ALTER TABLE `es_transections`
  ADD CONSTRAINT `fk_transection` FOREIGN KEY (`product_id`) REFERENCES `es_products` (`p_id`);

--
-- Constraints for table `es_transection_comments`
--
ALTER TABLE `es_transection_comments`
  ADD CONSTRAINT `fk_transection_comments` FOREIGN KEY (`t_id`) REFERENCES `es_transections` (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
