-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2023 at 06:53 PM
-- Server version: 10.6.12-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsabnl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_master`
--

CREATE TABLE `banner_master` (
  `id` int(11) NOT NULL,
  `ban_name` text NOT NULL,
  `ban_pic` text NOT NULL,
  `ban_order` int(11) NOT NULL,
  `bann_mod` int(11) NOT NULL DEFAULT 0,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `banner_master`
--

INSERT INTO `banner_master` (`id`, `ban_name`, `ban_pic`, `ban_order`, `bann_mod`, `status`) VALUES
(1, 'Kathakali Painting', 'SmartSelect_20211117-165159_Samsung Internet_2.jpg', 1, 0, 'DELETE'),
(2, 'Honey Moon of Earth', 'BeautyPlus_20200218080443464_save copy(3).jpg', 2, 0, 'DELETE'),
(3, 'Pregnancy Mother', '20220129_153641.jpg', 3, 0, 'DELETE'),
(4, 'Banner 04', 'ban4.jpg', 4, 0, 'DELETE'),
(5, '', 'Aerial View.jpg', 4, 0, 'DELETE'),
(6, 'Peacock', 'IMG-20220121-WA0117.jpg', 5, 0, 'DELETE'),
(7, 'Untitled', 'IMG_20211029_172129_751 (1).jpg', 6, 0, 'DELETE'),
(8, 'Untitled', 'IMG_20220210_000645.JPG', 6, 0, 'DELETE'),
(9, 'Untitled', 'WhatsApp Image 2022-02-10 at 00.58.23.jpeg', 7, 0, 'DELETE'),
(10, 'Untitled', 'FB_IMG_1629443870081-01.jpeg', 8, 0, 'DELETE'),
(11, 'Demo', 'v1-1.jpg', 3, 0, 'DELETE'),
(12, 'Demo 2', 'v1-2.jpg', 2, 0, 'DELETE'),
(13, 'Welcome to Fine Art Loom', '143760247_233509545029213_4813988660055830021_n.jpg', 1, 0, 'ACTIVE'),
(14, '', '1920 900.jpg', 4, 0, 'DELETE'),
(15, '', 'WhatsApp Image 2022-02-21 at 23.23.34.jpeg', 3, 0, 'DELETE'),
(16, '', 'WhatsApp Image 2022-02-21 at 23.21.50.jpeg', 3, 0, 'ACTIVE'),
(17, '', 'WhatsApp Image 2022-02-21 at 23.25.02.jpeg', 5, 0, 'DELETE'),
(18, '', 'WhatsApp Image 2022-02-21 at 23.38.12.jpeg', 5, 0, 'DELETE'),
(19, '', 'WhatsApp Image 2022-02-21 at 23.44.41.jpeg', 6, 0, 'ACTIVE'),
(20, '', 'WhatsApp Image 2022-02-21 at 23.53.49.jpeg', 5, 0, 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment_master`
--

CREATE TABLE `blog_comment_master` (
  `bcm_id` int(11) NOT NULL,
  `bcm_blog` int(11) NOT NULL,
  `bcm_name` text NOT NULL,
  `bcm_phone` text NOT NULL,
  `bcm_details` text NOT NULL,
  `bcm_status` varchar(25) NOT NULL DEFAULT 'Pending',
  `bcm_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_comment_master`
--

INSERT INTO `blog_comment_master` (`bcm_id`, `bcm_blog`, `bcm_name`, `bcm_phone`, `bcm_details`, `bcm_status`, `bcm_datetime`) VALUES
(12, 1, 'Jayanta Roy', '9876543210', 'Test Comments', 'Pending', '2022-03-06 14:49:25'),
(13, 1, 'Jayanta Roy', '9876543210', 'Test Comments', 'Inactive', '2022-03-06 14:49:26'),
(14, 1, 'Ajay Das', '9988776543', 'Another test comment....', 'Pending', '2022-03-06 20:24:03'),
(15, 1, 'Tamal Kundu', '9876543210', 'User testing comment postig.', 'Pending', '2022-03-06 20:41:53'),
(16, 1, 'Alok Pal', '9999888812', 'Test Comments', 'Pending', '2022-03-06 20:44:07'),
(17, 1, 'Alok Pal', '9999888812', 'Test Comments', 'Pending', '2022-03-06 20:44:10'),
(18, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:24'),
(19, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:27'),
(20, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:33'),
(21, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:33'),
(22, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:33'),
(23, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:33'),
(24, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:34'),
(25, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:34'),
(26, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:34'),
(27, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:34'),
(28, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:35'),
(29, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:35'),
(30, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:36'),
(31, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:36'),
(32, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:36'),
(33, 1, 'Pratim  Roy', '8583893944', 'vey good', 'Pending', '2022-03-07 07:46:37'),
(34, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:02'),
(35, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:02'),
(36, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:03'),
(37, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:03'),
(38, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:04'),
(39, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:04'),
(40, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:04'),
(41, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:04'),
(42, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:05'),
(43, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:05'),
(44, 1, 'Pratim  Roy', '8583893944', 'very good', 'Pending', '2022-03-07 07:47:05'),
(45, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:00'),
(46, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:03'),
(47, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:04'),
(48, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:05'),
(49, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:06'),
(50, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:06'),
(51, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:06'),
(52, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:10'),
(53, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:11'),
(54, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:11'),
(55, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:11'),
(56, 1, 'Pratim Roy', '07003852528', 'Hii', 'Pending', '2022-03-08 05:38:11'),
(57, 1, 'Pratim Roy', '07003852528', 'Hii', 'Inactive', '2022-03-08 05:38:11'),
(58, 1, 'Pratim Roy', '07003852528', 'Hii', 'Inactive', '2022-03-08 05:38:12'),
(59, 1, 'Pratim Roy', '07003852528', 'Hii', 'Active', '2022-03-08 05:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE `blog_master` (
  `blog_id` int(11) NOT NULL,
  `blog_cust` int(11) NOT NULL,
  `blog_date` varchar(20) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_brief` text DEFAULT NULL,
  `blog_details` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_status` varchar(25) NOT NULL DEFAULT 'Pending',
  `blog_visit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_master`
--

INSERT INTO `blog_master` (`blog_id`, `blog_cust`, `blog_date`, `blog_title`, `blog_brief`, `blog_details`, `blog_image`, `blog_status`, `blog_visit`) VALUES
(1, 1, '2022-02-25', 'Test Blog', 'Testing', 'Testing Blog psting for website.', 'Chrysanthemum.jpg', 'Inactive', 67),
(2, 9, '2022-11-24', 'TTTT', 'GTG', 'HHHH', 'Hydrangeas.jpg', 'DELETE', 1),
(3, 40, '2022-12-27', '', '', '', '64921402_782254998836293_7830346582335284195_n.jpg', 'DELETE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand_master`
--

CREATE TABLE `brand_master` (
  `id` int(11) NOT NULL,
  `brand_name` text NOT NULL,
  `brand_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE',
  `brand_desc` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `brand_master`
--

INSERT INTO `brand_master` (`id`, `brand_name`, `brand_pic`, `status`, `brand_desc`) VALUES
(1, 'Test', 'f3.jpg', 'DELETE', 'test details ...'),
(2, 'hhhh', '', 'DELETE', NULL),
(3, 'Test', 'f10.jpg', 'DELETE', 'Test system'),
(4, 'Test2', 'a2.jpg', 'DELETE', 'gygyyjhfj'),
(5, 'Abcd', 'Parliament_protest-PTI-3x2.jpg', 'DELETE', 'asdadfswsaf');

-- --------------------------------------------------------

--
-- Table structure for table `cart_master`
--

CREATE TABLE `cart_master` (
  `cart_id` int(11) NOT NULL,
  `cart_date` varchar(25) NOT NULL,
  `cart_cust_id` int(11) NOT NULL,
  `cart_rate_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_amount` double(10,2) NOT NULL,
  `cart_sgst` double(10,2) NOT NULL,
  `cart_cgst` double(10,2) NOT NULL,
  `cart_igst` double(10,2) NOT NULL,
  `cart_status` varchar(20) NOT NULL DEFAULT 'ACTIVE',
  `cart_enter_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `cart_order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogue_master`
--

CREATE TABLE `catalogue_master` (
  `id` int(11) NOT NULL,
  `cata_name` text NOT NULL,
  `cata_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cert_master`
--

CREATE TABLE `cert_master` (
  `id` int(11) NOT NULL,
  `cert_name` text NOT NULL,
  `cert_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `cert_master`
--

INSERT INTO `cert_master` (`id`, `cert_name`, `cert_pic`, `status`) VALUES
(1, 'test', 'invironmental-issues.jpg', 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `client_master`
--

CREATE TABLE `client_master` (
  `id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_location` text NOT NULL,
  `client_prod` int(11) NOT NULL,
  `client_logo` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `client_master`
--

INSERT INTO `client_master` (`id`, `client_name`, `client_location`, `client_prod`, `client_logo`, `status`) VALUES
(1, 'Name Title', 'In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, \r\n									non laoreet dolor.', 0, '1.png', 'ACTIVE'),
(2, 'Name Title', 'xxxx', 14, '2.png', 'ACTIVE'),
(3, 'Name Title', 'In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, \r\n									non laoreet dolor.', 0, '3.png', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `cms_master`
--

CREATE TABLE `cms_master` (
  `sl` int(11) NOT NULL,
  `cms_tag` text NOT NULL,
  `cms_dtls` text NOT NULL,
  `cms_pic` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `cms_master`
--

INSERT INTO `cms_master` (`sl`, `cms_tag`, `cms_dtls`, `cms_pic`, `status`) VALUES
(1, 'aboutus', 'The Art Institute of Melbourne collects, preserves, and interprets works of art of the highest quality, representing the worldâ€™s diverse artistic traditions, for the inspiration.', '249670932_164348619240214_2044119194230600458_n.jpg', 'INACTIVE'),
(7, 'foods', '<p>Tasty local cuisine available for new experience</p>\r\n', 'bum3yb9ad16spzbwm5wt.jpg', 'INACTIVE'),
(8, 'rooms', '<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. In lobortis, ante interdum vehicula pretium, dui enim porta lectus, non euismod tortor ante eu libero. Aenean blandit luctus tortor vitae interdum. <strong>Etiam egestas</strong> purus lorem, eget tempus odio placerat id. Integer eu gravida nibh.</p>\r\n', '', 'INACTIVE'),
(9, 'slogan', '<p>Let every children forced to be on street have education.</p>\r\n', '', 'INACTIVE'),
(2, 'mission', '<p><em>We look forward for your support and assure our best services at all time.</em></p>\r\n', '', 'INACTIVE'),
(3, 'home', '<p align=\"justify\" style=\"color:#330066\"> The most beautiful things in life are associated with memories and moments. UTSAB, founded in 2023 and based out of the Netherlands, wants to create and preserve these by celebrating the diversity, the happiness and the culture of the Bengali community. UTSAB wants to celebrate the beauty of Bengali traditions and convert these to indelible moments of joy forever. Please remain with us in all our initiatives. UTSAB wants to celebrate with every one of you. </p>\r\n<br><br>\r\n<p align=\"justify\" style=\"color:#330066\"> à¦‰à§Žà¦¸à¦¬ à¦®à¦¾à¦¨à§‡ à¦œà§€à¦¬à¦¨à§‡à¦° à¦‰à¦¦à¦¯à¦¾à¦ªà¦¨à¥¤ à¦‰à§Žà¦¸à¦¬à¦•à§‡ à¦˜à¦¿à¦°à§‡ à¦œà¦¡à¦¼à¦¿à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡ à¦à¦®à¦¨ à¦à¦• à¦†à¦¬à§‡à¦— à¦¯à¦¾ - à¦¦à§‡à¦¶, à¦­à¦¾à¦·à¦¾, à¦§à¦°à§à¦®à§‡à¦° à¦Šà¦°à§à¦§à§à¦¬à§‡ à¦—à¦¿à¦¯à¦¼à§‡ à¦®à¦¾à¦¨à§à¦·à§‡ à¦®à¦¾à¦¨à§à¦·à§‡ à¦¬à¦¨à§à¦§à§à¦¤à§à¦¬à§‡à¦° à¦¸à§‚à¦šà¦¨à¦¾ à¦•à¦°à§‡à¥¤ à¦¬à¦¾à¦™à¦¾à¦²à§€à¦°à¦¾à¦“ à¦à¦° à¦¬à§à¦¯à¦¤à¦¿à¦•à§à¦°à¦® à¦¨à¦¯à¦¼à¥¤ à¦¤à¦¾à¦‡ à¦à¦‡ à¦¸à§à¦¦à§‚à¦° à¦ªà§à¦°à¦¬à¦¾à¦¸à§‡ à¦¨à§‡à¦¦à¦¾à¦°à¦²à§à¦¯à¦¾à¦¨à§à¦¡à¦¸à§‡ à¦¬à¦¸à¦¬à¦¾à¦¸à¦•à¦¾à¦°à§€ à¦¬à¦¾à¦™à¦¾à¦²à¦¿ à¦¬à¦¾ à¦¬à¦¾à¦™à¦¾à¦²à¦¿ à¦ªà§à¦°à§‡à¦®à§€ à¦¸à¦•à¦²à¦•à§‡ à¦¸à¦™à§à¦—à§€ à¦•à¦°à§‡ à¦¶à§à¦°à§ à¦¹à¦² \"à¦‰à§Žà¦¸à¦¬\"-à¦à¦° à¦ªà¦¥à¦šà¦²à¦¾à¥¤ à¦¸à¦¬à¦¾à¦‡ à¦¸à¦™à§à¦—à§‡ à¦¥à¦¾à¦•à§à¦¨, à¦¹à¦¾à¦¤à§‡ à¦¹à¦¾à¦¤ à¦°à§‡à¦–à§‡ à¦†à¦®à¦°à¦¾ à¦à¦•à¦¸à¦™à§à¦—à§‡ à¦à¦—à¦¿à¦¯à¦¼à§‡ à¦šà¦²à¦¿ à¦à¦• à¦†à¦¨à¦¨à§à¦¦à¦®à§à¦–à¦° à¦†à¦—à¦¾à¦®à§€à¦° à¦¦à¦¿à¦•à§‡à¥¤</p>', 'g1.jpg', 'ACTIVE'),
(4, 'vision', '<p><em>We look forward for your support and assure our best services at all time.</em></p>\r\n', '', 'INACTIVE'),
(10, 'Privacy Policy', '<p>PRIVACY POLICY<br />\r\nSishu kalyana swadhikara kendra will keep the user information collected through its website ((http://sishukalyanaswadhikarakendra.org) strictly confidential. It will not be shared with any external agencies or individuals. However, Child Help Foundation will keep the users updated about its happenings and developments through bulletins and newsletters with an option of not to subscribe the same.</p>\r\n\r\n<p>While forwarding a donation for Sishu kalyana swadhikara kendra the well-wishers have to submit a few personal information as it would help us ensuring genuine contributions:</p>\r\n\r\n<p>1. Your name</p>\r\n\r\n<p>2. Your email and mailing address</p>\r\n\r\n<p>3. Your telephone number</p>\r\n\r\n<p>4. Your payment processing details</p>\r\n\r\n<p>5. Any other data as Sishu kalyana swadhikara kendra may require</p>\r\n\r\n<p>You will be asked to provide your personal information when making donations, making purchases at our on-line Gift Shop, requesting communications, applying for a job with Child Help Foundation and/or in connection with other Child Help Foundation business (whether it is via the website, e-mail, direct mail or telephone communications).</p>\r\n\r\n<p>All relevant information collected through Child Help Foundation website is handled and used by internal and authorized officials only.</p>\r\n\r\n<p>General browsing of Child Help Foundation website is anonymous and it does not register the user&rsquo;s personal information except the time, date and place of visits and the name of internet service provider. However, this information is not shared by the organization with external agencies.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra is not liable for any form of loss, damage or harm caused to the users as a result of misuse of personal information by a third party, tracked through a liked site of Sishu kalyana swadhikara kendra or otherwise, and who is not an employee of Sishu kalyana swadhikara kendra.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra holds the discretion to modify the terms and conditions under privacy policy.</p>\r\n\r\n<p>Contents published in Sishu kalyana swadhikara kendra website including graphics, write-ups, logos, pictures, images and software are the property of Child Help Foundation and its partners or associates and the same is protected. Users must seek formal permission before using any of this information and any misuse of the same will automatically hold the (mis)user liable.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra has a layered security in our systems and only designated employees have access to hard copies of your personal information.</p>\r\n\r\n<p>Personal information will be shared internally at Sishu kalyana swadhikara kendra to complete your donations or purchasing transactions, to contact you about our on-going work, discuss employment opportunities and ways that you can further support our efforts to help children in need. Your personal information will also be used to provide you access to the various sections of our website that have been personalized for your needs. Sishu kalyana swadhikara kendra will never intentionally share your e-mail addresses, phone numbers or financial information.</p>\r\n', '', 'INACTIVE'),
(11, 'Refund Policy', '<p><span class=\"marker\">Lorem ipsum dolor sit amet,</span>&nbsp;<strong>consectetur adipiscing</strong>&nbsp;elit. In lobortis, ante interdum vehicula pretium, dui enim porta lectus, non euismod tortor ante eu libero. Aenean blandit luctus tortor vitae interdum.&nbsp;<strong>Etiam egestas</strong>&nbsp;purus lorem, eget tempus odio placerat id. Integer <strong>eu gravida nibh</strong>.</p>\r\n', '', 'INACTIVE'),
(12, 'Terms and Conditions', '<p>TERMS AND CONDITIONS<br />\r\nThe terms and conditions regarding using Sishu kalyana swadhikara kendra website (http://sishukalyanaswadhikarakendra.org) are mentioned below.</p>\r\n\r\n<p>1. Sishu kalyana swadhikara kendra holds the discretion to modify the users&rsquo; terms and conditions if need be. However it shall be effective within a month of posting it in this section whenever it happens.</p>\r\n\r\n<p>2. This is an agreement between Sishu kalyana swadhikara kendra and the user/visitor to the website. This Agreement governs the use of Sishu kalyana swadhikara kendra web site, which includes contents like text, information, images as well as all services available to the users through the same.</p>\r\n\r\n<p>3. Sishu kalyana swadhikara kendra may modify the terms and conditions on this site. You agree to review this agreement periodically to ensure you are aware of any changes.</p>\r\n\r\n<p>4. The services are available only to individuals (excluding minors) who are eligible for legally binding contracts under applicable law</p>\r\n\r\n<p>5. The content consists of copyrighted works proprietary to Sishu kalyana swadhikara kendra or to partners/ third parties who have provided us with content. Personal Information of User</p>\r\n\r\n<p>6. In order to enable Sishu kalyana swadhikara kendra to use the personal information you supply us with, so that we are not violating any rights you might have in that information, you agree to grant us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub licensable (through multiple tiers) right to exercise the copyright and publicity rights (but no other rights) you have in personal information, in any media now known or not currently known, with respect to personal information. Sishu kalyana swadhikara kendra will only use personal information in accordance with our Privacy Policy.</p>\r\n\r\n<p>7. The site &amp; certain services will be accessible to users of the website as identified in the Registration Forms or relevant sections. All user information provided to us, including without limitation the information on the Registration Forms, must be current, accurate, and complete. If we at any time discover any error or omission in the information you provide to us, we may, at our option, terminate the right to access and use the site by any user. The user is responsible for the acts or omissions by the use of the site, and for any damages incurred by the user as a result thereof.</p>\r\n\r\n<p>8. You as the user and Sishu kalyana swadhikara kendra are independent contractors, and no agency, partnership, joint venture, employee-employer, franchiser-franchisee or other business relationship is intended or created by this Agreement.</p>\r\n\r\n<p>9. The Donation online will go directly to buy the item selected plus the costs of running this fundraising campaign.</p>\r\n\r\n<p>10. Should Sishu kalyana swadhikara kendra raise over our target for a particular appeal then we will use your donation to help other vulnerable children around the world wherever the need is greatest.</p>\r\n\r\n<p>11. Contributions must be your own, they must be civil and tasteful, they must not contain any unlawful or objectionable content and they must not infringe the law.</p>\r\n\r\n<p>12. Sishu kalyana swadhikara kendra owns all worldwide rights, titles and interests in and to the site. You may create a bookmark in your browser to the home page of the website.</p>\r\n\r\n<p>13. Sishu kalyana swadhikara kendra is dedicated to protecting the privacy of its users.</p>\r\n\r\n<p>14. Sishu kalyana swadhikara kendra will not be responsible or liable to any user of the website or its services for any direct, compensatory, indirect, incidental, consequential, special, and exemplary or punitive damages for any reason such as use of content, services, errors, inaccuracies, omissions, defects, or any other causes.</p>\r\n\r\n<p>15. The user has to agree to indemnify and hold us and our subsidiaries, affiliates, officers, directors, agents, and employees, harmless from any claim or demand, including reasonable attorneys arising from or incurred as a result of, or in any manner related to</p>\r\n\r\n<p>16. Any controversy or claim arising out of or relating to this agreement or our services shall be settled by binding arbitration in accordance with the commercial arbitration rules applicable to New Delhi. Any such controversy or claim shall be arbitrated on an individual basis, and shall not be consolidated in any arbitration with any claim or controversy of any other party. The arbitration shall be conducted at Mumbai, India and judgment on the arbitration award may be entered into any court having jurisdiction thereof. Either the user or Child Help Foundation may seek any interim or preliminary relief from a court of competent jurisdiction at Mumbai, India necessary to protect the rights or property of the user or Sishu kalyana swadhikara kendra pending the completion of arbitration</p>\r\n\r\n<p>17. Sishu kalyana swadhikara kendra does not guarantee continuous, uninterrupted or secure access to our services, and operation of our site may be interfered with by numerous factors outside of our control. Our failure to act with respect to a breach by the user or others does not waive our right to act with respect to subsequent or similar breaches. This Agreement sets forth the entire understanding and agreement between us with respect to the subject matter hereof. 18. We as a merchant shall be under no liability whatsoever in respect of any loss or damage arising directly or indirectly out of the decline of authorization for any Transaction, on Account of the Cardholder having exceeded the preset limit mutually agreed by us with our acquiring bank from time to time&rdquo;</p>\r\n', '', 'INACTIVE'),
(13, 'attraction', '<ol>\r\n	<li><em><strong>Fishing </strong>:- You can do fishing in River Baniya, which flows by the side of the resort. There are varied types of small fishes in the river, and they come to eat mosses and fungus which develops on the boulder used for the embankment for protecting the resort.</em></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 'fishing.jpg', 'INACTIVE'),
(14, 'route', '<p><em><strong>By Train: - Chilapata is well connected with rail network. Hashimara on the famous Siliguri - Sevok track is just 18Km away. Alipurduar on the main NJP - Guwahati rail track is just 28km. Taxis are available at both the stations, which can take you to us within 45 minutes time.</strong></em></p>\r\n\r\n<p><em><strong>By Air:- The nearest Airport is Bagdogra, which is 140km from Chilapata. By car it will take 3 hrs 30 minutes to reach us.</strong></em></p>\r\n\r\n<p><em><strong>By Road: - &nbsp;&nbsp;Chilapata is 110Km from Siliguri on the NH 31, towards Guwahati</strong></em></p>\r\n', 'BL22THINKRAIL.jpg', 'INACTIVE'),
(15, 'mission', '<p>1. Confirmation of Room booking is subject to 50% of the total payable amount.</p>\r\n\r\n<p>2. Cancellation charge before 45 from the date of booking is ZERO.</p>\r\n\r\n<p>3. Cancellation charge within 44 days to 30 days of booking date is 25% of Booking Amount.</p>\r\n\r\n<p>4. Cancellation charge within 29 days to 15 days of booking date is 50% of Booking Amount.</p>\r\n\r\n<p>5. Cancellation charge within 14 days to 7 days of booking date is 75% of the Booking Amount.</p>\r\n\r\n<p>6. Cancellation charge within 6 days of booking date is 100% of Booking Amount.</p>\r\n', '', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`id`, `address`, `contact_no`, `email`, `mobile_no`, `skype`) VALUES
(1, 'Van Musschenbroekstraat 145, 2522AL Den Haag, The Netherlands', 'Mr. Pradipto Narayan Chakraborty +31(0) 684069329', 'info@utsab.nl', 'Mrs. Anindita Nandi Roy +31(0) 633 479 614', '');

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

CREATE TABLE `content_master` (
  `id` int(11) NOT NULL,
  `page` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `details` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pic` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `content_master`
--

INSERT INTO `content_master` (`id`, `page`, `title`, `details`, `pic`, `url`, `status`) VALUES
(1, 'About Us', 'Motivational', 'As a creative, staying fresh, inspired and up-to-date is crucial. Especially when freelancing (as many of us creatives do), it can help ensure a steady workflow, as well as keeping your work contextually relevant and in line with the goings-on of the world around us. While there are many ways to gather inspiration and new ideas, art blogs offer a vast hub of information and diverse topics.\r\n\r\nWhatever your creative endeavors entail, from printmaking or web design, or pursuing a career as a freelance artist, the following art blogs are here to kindle your curiosity and update you on the latest news from the creative world.\r\n\r\n', '118870207_308321903802691_9033350440695941000_n-min.jpg', '', 'DELETE'),
(2, 'About Us', 'Affection', '', 'WhatsApp Image 2022-02-10 at 01.03.36.jpeg', '', 'DELETE'),
(3, 'About Us', 'Mandasuru Vallet', 'Photography by Tarun Roy', 'WhatsApp Image 2022-02-23 at 22.11.40.jpeg', '', 'DELETE'),
(4, 'About Us', 'About Us', '<p align=\"justify\" style=\"color:#330066\"> The most beautiful things in life are associated with memories and moments. UTSAB, founded in 2023 and based out of the Netherlands, wants to create and preserve these by celebrating the diversity, the happiness and the culture of the Bengali community. UTSAB wants to celebrate the beauty of Bengali traditions and convert these to indelible moments of joy forever. Please remain with us in all our initiatives. UTSAB wants to celebrate with every one of you. </p>\r\n', 'g1.jpg', '', 'ACTIVE'),
(5, 'About Us', 'Our Mission', '<p align=\"justify\" style=\"color:#330066\"> 1) Create a platform for Indian Bengali diaspora and any other persons outside of Bengali community interested in Bengali culture and tradition.<br>\r\n2) Preserve Bengali heritage and promote Bengali language, culture, social synergy and religious rites among the entire spectrum of Bengali communities across the the Netherlands.<br>\r\n3) Reach out to people irrespective of age and gender, with particular emphasis on younger populace so that they may join their seniors in order to understand the fundamental flow of rich heritage of Bengal and develop self-esteem and self-identity. </p>', '', '', 'ACTIVE'),
(6, 'About Us', 'Our Vision', '<p align=\"justify\" style=\"color:#330066\"> 1) Bring all persons belonging to the greater and extended Indian Bengali community under a single umbrella.<br>\r\n2) Enmbrace people from Bengali communities living in and outside the Netherlands.<br>\r\n3) Organize events that can instigate creativity and help the youth to relate themselves to their homeland.<br>\r\n4) Embed contemporaneity to all the events and presentations.<br> </p>', '', '', 'ACTIVE'),
(7, 'About Us', 'President Message', '<p align=\"justify\" style=\"color:#330066\"><br>Hello Everyone,<br>\r\nOn behalf of UTSAB Indian Bengali Foundation of Zuid-Holland (UIBFZH), alias UTSAB I wish you and your loved ones a happy, healthy and prosperous Bengali New Year (1430). Let this new year bring all of you joy, peace, health and happiness. I take this opportunity to welcome all members and look forward to working with you.<br>\r\nUTSAB, a non-profit organization, is aimed to set up a great platform for uniting the Indian Bengali Community living in the Netherlands, showcasing the rich cultural heritage of the community, and integrating the local Bengali community with the Dutch culture through various events and collaborative activities. Our events will focus broadly on social rituals, youth development, cultural performances, recreational activities, sharing information and extending support to newcomers in the country and likewise, which will bring benefits to the community.<br>\r\nI sincerely appreciate the support and hard work of all members, volunteers and benefactors. I look forward to taking UTSAB to new heights and depths. Our team will do their best in fulfilling the objectives of the organization in the ensuing years. We promise to create a strong and united Indian Bengali community and promote cultural diversity, equality, and inclusiveness in all of our events. Please join us in supporting our mission and causes. If you are interested to be a part of UTSAB or have any ideas, please reach out to us through Contact Us page or directly emailing me or any committee members.\r\n<br>Thank you!</br>\r\nFrom<br />\r\nPaulastya Aich<br />', '', '', 'ACTIVE'),
(8, 'About Us', 'About Us', '<p align=\"justify\" style=\"color:#330066\"> à¦‰à§Žà¦¸à¦¬ à¦®à¦¾à¦¨à§‡ à¦œà§€à¦¬à¦¨à§‡à¦° à¦‰à¦¦à¦¯à¦¾à¦ªà¦¨à¥¤ à¦‰à§Žà¦¸à¦¬à¦•à§‡ à¦˜à¦¿à¦°à§‡ à¦œà¦¡à¦¼à¦¿à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡ à¦à¦®à¦¨ à¦à¦• à¦†à¦¬à§‡à¦— à¦¯à¦¾ - à¦¦à§‡à¦¶, à¦­à¦¾à¦·à¦¾, à¦§à¦°à§à¦®à§‡à¦° à¦Šà¦°à§à¦§à§à¦¬à§‡ à¦—à¦¿à¦¯à¦¼à§‡ à¦®à¦¾à¦¨à§à¦·à§‡ à¦®à¦¾à¦¨à§à¦·à§‡ à¦¬à¦¨à§à¦§à§à¦¤à§à¦¬à§‡à¦° à¦¸à§‚à¦šà¦¨à¦¾ à¦•à¦°à§‡à¥¤ à¦¬à¦¾à¦™à¦¾à¦²à§€à¦°à¦¾à¦“ à¦à¦° à¦¬à§à¦¯à¦¤à¦¿à¦•à§à¦°à¦® à¦¨à¦¯à¦¼à¥¤ à¦¤à¦¾à¦‡ à¦à¦‡ à¦¸à§à¦¦à§‚à¦° à¦ªà§à¦°à¦¬à¦¾à¦¸à§‡ à¦¨à§‡à¦¦à¦¾à¦°à¦²à§à¦¯à¦¾à¦¨à§à¦¡à¦¸à§‡ à¦¬à¦¸à¦¬à¦¾à¦¸à¦•à¦¾à¦°à§€ à¦¬à¦¾à¦™à¦¾à¦²à¦¿ à¦¬à¦¾ à¦¬à¦¾à¦™à¦¾à¦²à¦¿ à¦ªà§à¦°à§‡à¦®à§€ à¦¸à¦•à¦²à¦•à§‡ à¦¸à¦™à§à¦—à§€ à¦•à¦°à§‡ à¦¶à§à¦°à§ à¦¹à¦² \"à¦‰à§Žà¦¸à¦¬\"-à¦à¦° à¦ªà¦¥à¦šà¦²à¦¾à¥¤ à¦¸à¦¬à¦¾à¦‡ à¦¸à¦™à§à¦—à§‡ à¦¥à¦¾à¦•à§à¦¨, à¦¹à¦¾à¦¤à§‡ à¦¹à¦¾à¦¤ à¦°à§‡à¦–à§‡ à¦†à¦®à¦°à¦¾ à¦à¦•à¦¸à¦™à§à¦—à§‡ à¦à¦—à¦¿à¦¯à¦¼à§‡ à¦šà¦²à¦¿ à¦à¦• à¦†à¦¨à¦¨à§à¦¦à¦®à§à¦–à¦° à¦†à¦—à¦¾à¦®à§€à¦° à¦¦à¦¿à¦•à§‡à¥¤ </p>', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `cust_master`
--

CREATE TABLE `cust_master` (
  `cust_id` int(11) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_address` text NOT NULL,
  `cust_city` text NOT NULL,
  `cust_state` text NOT NULL,
  `cust_country` text NOT NULL,
  `cust_pincode` varchar(20) NOT NULL,
  `cust_phone` text NOT NULL,
  `cust_email` text NOT NULL,
  `cust_code` varchar(25) NOT NULL,
  `cust_pass` varchar(50) NOT NULL DEFAULT '123456',
  `cust_dob` varchar(15) NOT NULL,
  `cust_pic` text NOT NULL,
  `cust_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `cust_status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cust_master`
--

INSERT INTO `cust_master` (`cust_id`, `cust_name`, `cust_address`, `cust_city`, `cust_state`, `cust_country`, `cust_pincode`, `cust_phone`, `cust_email`, `cust_code`, `cust_pass`, `cust_dob`, `cust_pic`, `cust_created_on`, `cust_status`) VALUES
(1, 'Jayanta Roy', 'Rahara, Khardah', '', 'WB', 'India', '700118', '8240701385', 'info@jayantaroy.com', 'FAL/M/00001', '123456', '1984-03-26', 'Penguins.jpg', '2022-02-21 17:16:32', 'Active'),
(2, 'Jayanta Roy', 'kabiraj bari, madhyapara\r\nrahara, khardaha', '', '', '', '', '9831006522', 'info@jayantaroy.com', 'FAL/M/00002', '123456', '1984-03-26', 'MB0101MarMar22222222034531pmChrysanthemum.jpg', '2022-03-01 14:45:31', 'Active'),
(3, 'Pratim Roy', 'H-28, Industrial Housing Estate (Old quaters), Motijheel, Dum Dum, Kolkata-700074', '', '', '', '', '8583893944', 'pratimroy33@gmail.com', 'FAL/M/00003', '123456', '1993-03-02', '', '2022-03-04 06:42:59', 'Active'),
(4, 'Pratim Roy', 'H-28, Industrial Housing Estate (Old quaters), Motijheel, Dum Dum, Kolkata-700074', '', '', '', '', '8583893944', 'pratimroy33@gmail.com', 'FAL/M/00004', '123456', '1993-03-02', '', '2022-03-04 06:43:00', 'Active'),
(5, 'Pratim Roy', 'H-28, Industrial Housing Estate, Motijheel, Dum Dum, Kolkata-700074', '', '', '', '', '8583893944', 'pratimroy33@gmail.com', 'FAL/M/00005', '123456', '1993-03-02', 'MB0404MarMar22222222074422amScreenshot from 2022-03-02 14-33-45.png', '2022-03-04 06:44:22', 'Active'),
(6, '', '', '', '', '', '', '', '', 'FAL/M/00006', '123456', '', '', '2022-03-04 18:26:55', 'Active'),
(7, 'Sourav Roy', '175/c dumdum private road kolkata 74', '', '', '', '', '9038689159', 'souravroy2020@gmail.com', 'FAL/M/00007', '123456', '1993-05-28', 'MB1313MarMar22222222111640amPicsArt_03-12-12.38.06.jpg', '2022-03-13 10:16:44', 'Inactive'),
(8, 'THE Kolkata Magazine', 'jj', '', '', '', '', '7003852528', 'thekolkatamagazine@gmail.com', 'FAL/M/00008', '123456', '1993-02-03', 'MB2020MarMar22222222120240pmScreenshot from 2022-03-16 18-52-15.png', '2022-03-20 11:02:40', 'Active'),
(9, 'Jayanta Roy', 'kabiraj bari, madhyapara\r\nrahara, khardaha', '', '', '', '', '03325682765', 'info@jayantaroy.com', 'FAL/M/00009', '123456', '2002-01-01', 'MB2525MarMar22222222051956pmChrysanthemum.jpg', '2022-03-25 16:19:56', 'Active'),
(10, 'Pratim Roy', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '07003852528', 'pratimroy33@gmail.com', 'FAL/M/00010', '123456', '1993-03-02', 'MB2727JunJun22222222082341pm16563541767017645101820370807370.jpg', '2022-06-27 18:23:43', 'Pending'),
(11, 'Pratim Roy', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '7003852528', 'pratimroy33@gmail.com', 'FAL/M/00011', '123456', '1993-03-02', 'MB2727JunJun22222222082448pm16563542538468306730562224301755.jpg', '2022-06-27 18:24:50', 'Pending'),
(12, 'THEKOLKATA MAGAZINE', 'kkl', '', '', '', '', '7003852528', 'thekolkatamazaine@gmail.com', 'FAL/M/00012', '123456', '1991-02-07', 'MB0303JulJul22222222122042pm13724222302606.jpeg', '2022-07-03 10:20:42', 'Active'),
(13, '', '', '', '', '', '', '', '', 'FAL/M/00013', '123456', '', '', '2022-07-03 10:21:52', 'Pending'),
(14, '', '', '', '', '', '', '', '', 'FAL/M/00014', '123456', '', '', '2022-07-03 10:24:13', 'Pending'),
(15, 'roy portrait and fine arts official', 'hpppipp', '', '', '', '', '7003852528', 'royportraitf@yahoo.com', 'FAL/M/00015', '123456', '1994-07-08', 'MB0303JulJul22222222014323pm13724222302606.jpeg', '2022-07-03 11:43:23', 'Active'),
(16, 'Pratim Roy', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '07003852528', 'pratimroy33@gmail.com', 'FAL/M/00016', '123456', '1993-03-02', 'MB2323NovNov22222222021632pmIMG-20221122-WA0002.jpg', '2022-11-23 13:16:32', 'Pending'),
(17, 'Pratim Roy', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '07003852528', 'pratimroy33@gmail.com', 'FAL/M/00017', '123456', '1993-03-02', 'MB2323NovNov22222222021722pmIMG-20221122-WA0002.jpg', '2022-11-23 13:17:23', 'Pending'),
(18, 'Hh', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '07003852528', 'pratimroy32@gmail.com', 'FAL/M/00018', '123456', '1995-08-02', 'MB2323NovNov22222222021803pmIMG-20221122-WA0002.jpg', '2022-11-23 13:18:03', 'Pending'),
(19, 'THE Kolkata Magazine', 'H- 28, Industrial housing estate motijheel dum dum kolkata', '', '', '', '', '7003852528', 'thekolkatamagazine@gmail.com', 'FAL/M/00019', '123456', '2012-09-05', 'MB2323NovNov22222222021915pmIMG-20221122-WA0002.jpg', '2022-11-23 13:19:15', 'Active'),
(20, 'Sambaran Mandal', '65 Debinibas Road', '', '', '', '', '9830433869', 'sambaranmandal.official@gmail.com', 'FAL/M/00020', '123456', '2022-11-24', 'MB2424NovNov22222222094733ampng_20221121_175324_0000.png', '2022-11-24 08:47:37', 'Active'),
(21, 'Deep Debnath', 'J.N bose road subhasgram, Kolkata-700-147 p.s - Sonarpur, south 24pgs.', '', '', '', '', '8697362812', 'debnathdeep60@gmail.com', 'FAL/M/00021', '123456', '2022-11-29', '', '2022-11-29 07:34:01', 'Active'),
(22, '', '', '', '', '', '', '', '', 'FAL/M/00022', '123456', '', '', '2022-11-29 07:34:28', 'Active'),
(23, 'Srijita Dey', '113A Panchanatala road, Kolkata 700041', '', '', '', '', '8585884323', 'srijitadey007@gmail.com', 'FAL/M/00023', '123456', '1994-01-11', 'MB2929NovNov22222222083909aminbound3492314309247428365.jpg', '2022-11-29 07:39:09', 'Active'),
(24, 'Srijita Dey', '113A Panchanatala road Kolkata -700041', '', '', '', '', '8585884323', 'srijitadey007@gmail.com', 'FAL/M/00024', '123456', '2022-11-29', 'MB2929NovNov22222222084238aminbound6612352464528501205.jpg', '2022-11-29 07:42:38', 'Active'),
(25, 'Pavitra Shettigar ', 'Plot No 423/4, Chirebandi CHS, Charkop Sector 4, Near Saraswat Bank, Kandivali West, Mumbai 400 067 ', '', '', '', '', '9769329515', 'shettigarpavitra@gmail.com', 'FAL/M/00025', '123456', '1993-12-09', 'MB0303DecDec22222222031634pmIMG_20221111_210532.jpg', '2022-12-03 14:16:38', 'Active'),
(26, 'Pavitra Shettigar ', 'Plot No 423/4,Chirebandi CHS, Charkop Sector 4, Near Saraswat Bank, Kandivali West, Mumbai 400 067 ', '', '', '', '', '9769329515', 'shettigarpavitra@gmail.com', 'FAL/M/00026', '123456', '1993-12-09', 'MB0303DecDec22222222032055pmIMG_20220511_102819.jpg', '2022-12-03 14:20:59', 'Active'),
(27, 'BUBAI MONDAL ', 'Kolkata ', '', '', '', '', '9177954226', 'bmondal7488@gmail.com', 'FAL/M/00027', '123456', '2022-12-16', 'MB1616DecDec22222222082953am61B11D86-3B07-43FD-A8D7-A214D3E8B4E5.jpeg', '2022-12-16 07:29:53', 'Active'),
(28, 'Bubai ', 'Kolkata', '', '', '', '', '9177954226', 'bmondal7488@gmail.com', 'FAL/M/00028', '123456', '2001-08-07', 'MB1616DecDec22222222084042amD4F9E96A-12B8-4C02-A3EA-ED41A10CF2EA.jpeg', '2022-12-16 07:40:42', 'Active'),
(29, 'Bubai ', 'Kolkata', '', '', '', '', '9177954226', 'bmondal7488@gmail.com', 'FAL/M/00029', '123456', '2001-08-07', 'MB1616DecDec22222222084043amD4F9E96A-12B8-4C02-A3EA-ED41A10CF2EA.jpeg', '2022-12-16 07:40:43', 'Active'),
(30, 'Dr. Lalit Gopal Parashar', '8-A, Devgan Street, Friends Colony, Majitha Road, Amritsar Punjab (143001)', '', '', '', '', '9417313567', 'lalit.gopal1978art@gmail.com', 'FAL/M/00030', '123456', '1978-02-17', 'MB1717DecDec22222222062231pmIMG_20221217_224151.jpg', '2022-12-17 17:22:31', 'Active'),
(31, 'SUBRATA SANYAL', '163/5, Canal Street, Sreebhumi, Kolkata-48', '', '', '', '', '9830010795', 'sanyal.subrata@gmail.com', 'FAL/M/00031', '123456', '1976-10-15', '', '2022-12-18 06:06:14', 'Active'),
(32, 'SUBRATA SANYAL', '163/ 5, Canal Street, Sreebhumi, Kolkata-48', '', '', '', '', '9830010795', 'sanyal.subrata@gmail.com', 'FAL/M/00032', '123456', '1976-10-15', '', '2022-12-18 06:07:44', 'Active'),
(33, 'Subhanjan Mukherjee', 'Banerjee House, Elias Road\r\nAgarpara, Kolkata - 700058', '', '', '', '', '+91 6290515977', 'subhanjanmukherjee@gmail.com', 'FAL/M/00033', '123456', '2000-02-04', 'MB1919DecDec22222222071202pmIMG_9313.JPG', '2022-12-19 18:12:02', 'Active'),
(34, '', '', '', '', '', '', '', '', 'FAL/M/00034', '123456', '', '', '2022-12-19 18:13:29', 'Active'),
(35, 'SHREYANSH BHATTACHARJEE', 'K BHAGAT HOTEL,HEMU KALANI MARG, SINDHI SOCIETY,CHEMBUR,MUMBAI-400071', '', '', '', '', '6291083449', 'expresswhatuare@gmail.com', 'FAL/M/00035', '123456', '', '', '2022-12-20 22:26:18', 'Active'),
(36, 'SHREYANSH BHATTACHARJEE', '', '', '', '', '', '6291083449', 'expresswhatuare@gmail.com', 'FAL/M/00036', '123456', '2022-12-21', '', '2022-12-20 22:28:31', 'Active'),
(37, 'SHREYANSH BHATTACHARJEE', 'K BHAGAT TARACHAND HOTEL,HEMU KALANI MARG,SINDHI SOCIETY,CHEMBUR,MUMBAI-400071', '', '', '', '', '6291083449', 'expresswhatuare@gmail.com', 'FAL/M/00037', '123456', '2022-12-21', '', '2022-12-20 22:30:24', 'Active'),
(38, 'Anbalagan K', '', '', '', '', '', '8489144544', 'anbuchithiran@gmail.com', 'FAL/M/00038', '123456', '1959-06-15', '', '2022-12-26 16:47:27', 'Active'),
(39, 'Anbalagan K', 'Silal Ariyalur Dt TamilNadu. \r\nPin 621902.', '', '', '', '', '8489144544', 'anbuchithiran@gmail.com', 'FAL/M/00039', '123456', '1959-06-15', '', '2022-12-26 16:53:03', 'Active'),
(40, 'Fine Art Loom', 'jjkklkllll', '', '', '', '', '7003852528', 'contact@fineartloom.com', 'FAL/M/00040', '123456', '2022-02-10', 'MB2727DecDec22222222025217pmsketch1643194493009 - Copy.png', '2022-12-27 13:52:17', 'Active'),
(41, 'Fine Art Loom', 'jjj', '', '', '', '', '7003852528', 'pratimroy33@gmail.com', 'FAL/M/00041', '123456', '2005-06-09', 'MB2727DecDec22222222025857pmsketch1643194493009 - Copy.png', '2022-12-27 13:58:57', 'Active'),
(42, 'Fine Art Loom', 'hh', '', '', '', '', '7003852528', 'pratimroy33@gmail.com', 'FAL/M/00042', '123456', '2006-10-11', 'MB2828DecDec22222222111548amPSX_20220201_012824-01.jpeg', '2022-12-28 10:15:48', 'Active'),
(43, 'Fine Art Loom', 'hhh', '', '', '', '', '7003852528', 'pratimroy33@gmail.com', 'FAL/M/00043', '123456', '1998-06-24', 'MB2828DecDec22222222030219pm118870207_308321903802691_9033350440695941000_n.jpg', '2022-12-28 14:02:19', 'Active'),
(44, 'Fine Art Loom', 'kkk', '', '', '', '', '7003852528', 'pratimroy33@gmail.com', 'FAL/M/00044', '123456', '2009-09-23', 'MB3131DecDec22222222023254pm64921402_782254998836293_7830346582335284195_n.jpg', '2022-12-31 13:32:54', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `event_booking_details`
--

CREATE TABLE `event_booking_details` (
  `evbk_dtls_id` int(11) NOT NULL,
  `evbk_dtls_mst_id` int(11) NOT NULL,
  `evbk_dtls_fees_id` int(11) NOT NULL,
  `evbk_dtls_rate` double(10,2) NOT NULL,
  `evbk_dtls_qty` int(11) NOT NULL,
  `evbk_dtls_amt` double(10,2) NOT NULL,
  `evbk_dtls_status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_booking_details`
--

INSERT INTO `event_booking_details` (`evbk_dtls_id`, `evbk_dtls_mst_id`, `evbk_dtls_fees_id`, `evbk_dtls_rate`, `evbk_dtls_qty`, `evbk_dtls_amt`, `evbk_dtls_status`) VALUES
(1, 1, 5, 375.00, 1, 375.00, 'ACTIVE'),
(2, 1, 6, 800.00, 1, 800.00, 'ACTIVE'),
(3, 2, 5, 375.00, 1, 375.00, 'ACTIVE'),
(4, 2, 6, 800.00, 1, 800.00, 'ACTIVE'),
(5, 3, 5, 375.00, 1, 375.00, 'ACTIVE'),
(6, 3, 6, 800.00, 1, 800.00, 'ACTIVE'),
(7, 4, 5, 375.00, 1, 375.00, 'ACTIVE'),
(8, 4, 6, 800.00, 1, 800.00, 'ACTIVE'),
(9, 5, 5, 375.00, 1, 375.00, 'ACTIVE'),
(10, 5, 6, 800.00, 1, 800.00, 'ACTIVE'),
(11, 6, 5, 375.00, 1, 375.00, 'ACTIVE'),
(12, 6, 6, 800.00, 1, 800.00, 'ACTIVE'),
(13, 7, 5, 375.00, 1, 375.00, 'ACTIVE'),
(14, 7, 6, 800.00, 1, 800.00, 'ACTIVE'),
(15, 13, 4, 200.00, 1, 200.00, 'ACTIVE'),
(16, 14, 4, 200.00, 1, 200.00, 'ACTIVE'),
(17, 15, 4, 200.00, 1, 200.00, 'ACTIVE'),
(18, 16, 5, 375.00, 1, 375.00, 'ACTIVE'),
(19, 17, 5, 375.00, 1, 375.00, 'ACTIVE'),
(20, 18, 4, 200.00, 2, 400.00, 'ACTIVE'),
(21, 18, 5, 375.00, 1, 375.00, 'ACTIVE'),
(22, 19, 4, 200.00, 2, 400.00, 'ACTIVE'),
(23, 20, 4, 200.00, 2, 400.00, 'ACTIVE'),
(24, 21, 4, 200.00, 1, 200.00, 'ACTIVE'),
(25, 21, 5, 375.00, 2, 750.00, 'ACTIVE'),
(26, 22, 4, 200.00, 1, 200.00, 'ACTIVE'),
(27, 22, 5, 375.00, 2, 750.00, 'ACTIVE'),
(28, 23, 4, 200.00, 1, 200.00, 'ACTIVE'),
(29, 24, 4, 200.00, 2, 400.00, 'ACTIVE'),
(30, 24, 5, 375.00, 1, 375.00, 'ACTIVE'),
(31, 25, 4, 200.00, 1, 200.00, 'ACTIVE'),
(32, 25, 5, 375.00, 2, 750.00, 'ACTIVE'),
(33, 26, 4, 200.00, 1, 200.00, 'ACTIVE'),
(34, 26, 5, 375.00, 2, 750.00, 'ACTIVE'),
(35, 27, 4, 200.00, 1, 200.00, 'ACTIVE'),
(36, 27, 5, 375.00, 2, 750.00, 'ACTIVE'),
(37, 28, 4, 200.00, 1, 200.00, 'ACTIVE'),
(38, 28, 5, 375.00, 2, 750.00, 'ACTIVE'),
(39, 29, 4, 200.00, 1, 200.00, 'ACTIVE'),
(40, 29, 5, 375.00, 2, 750.00, 'ACTIVE'),
(41, 30, 4, 200.00, 1, 200.00, 'ACTIVE'),
(42, 30, 5, 375.00, 2, 750.00, 'ACTIVE'),
(43, 31, 4, 200.00, 1, 200.00, 'ACTIVE'),
(44, 31, 5, 375.00, 2, 750.00, 'ACTIVE'),
(45, 32, 4, 200.00, 1, 200.00, 'ACTIVE'),
(46, 32, 5, 375.00, 2, 750.00, 'ACTIVE'),
(47, 33, 5, 375.00, 1, 375.00, 'ACTIVE'),
(48, 34, 4, 200.00, 1, 200.00, 'ACTIVE'),
(49, 37, 4, 200.00, 1, 200.00, 'ACTIVE'),
(50, 38, 4, 200.00, 1, 200.00, 'ACTIVE'),
(51, 39, 4, 2.00, 2, 4.00, 'ACTIVE'),
(52, 39, 5, 1.00, 3, 3.00, 'ACTIVE'),
(53, 40, 5, 1.00, 1, 1.00, 'ACTIVE'),
(54, 41, 5, 1.00, 1, 1.00, 'ACTIVE'),
(55, 42, 5, 1.00, 1, 1.00, 'ACTIVE'),
(56, 42, 6, 5.00, 1, 5.00, 'ACTIVE'),
(57, 43, 5, 1.00, 1, 1.00, 'ACTIVE'),
(58, 43, 6, 5.00, 1, 5.00, 'ACTIVE'),
(59, 44, 4, 2.00, 1, 2.00, 'ACTIVE'),
(60, 44, 5, 1.00, 2, 2.00, 'ACTIVE'),
(61, 45, 4, 2.00, 1, 2.00, 'ACTIVE'),
(62, 45, 5, 1.00, 2, 2.00, 'ACTIVE'),
(63, 46, 5, 1.00, 1, 1.00, 'ACTIVE'),
(64, 47, 4, 2.00, 1, 2.00, 'ACTIVE'),
(65, 47, 5, 1.00, 3, 3.00, 'ACTIVE'),
(66, 48, 4, 2.00, 1, 2.00, 'ACTIVE'),
(67, 48, 5, 1.00, 1, 1.00, 'ACTIVE'),
(68, 49, 4, 2.00, 1, 2.00, 'ACTIVE'),
(69, 49, 5, 1.00, 1, 1.00, 'ACTIVE'),
(70, 50, 8, 100.00, 1, 100.00, 'ACTIVE'),
(71, 51, 5, 1.00, 1, 1.00, 'ACTIVE'),
(72, 52, 5, 1.00, 1, 1.00, 'ACTIVE'),
(73, 55, 8, 100.00, 1, 100.00, 'ACTIVE'),
(74, 56, 8, 100.00, 1, 100.00, 'ACTIVE'),
(75, 57, 8, 100.00, 1, 100.00, 'ACTIVE'),
(76, 58, 8, 100.00, 1, 100.00, 'ACTIVE'),
(77, 59, 5, 1.00, 1, 1.00, 'ACTIVE'),
(78, 60, 5, 1.00, 1, 1.00, 'ACTIVE'),
(79, 61, 8, 100.00, 1, 100.00, 'ACTIVE'),
(80, 62, 8, 100.00, 1, 100.00, 'ACTIVE'),
(81, 63, 8, 100.00, 1, 100.00, 'ACTIVE'),
(82, 64, 5, 1.00, 1, 1.00, 'ACTIVE'),
(83, 65, 4, 2.00, 1, 2.00, 'ACTIVE'),
(84, 66, 4, 2.00, 1, 2.00, 'ACTIVE'),
(85, 67, 5, 1.00, 1, 1.00, 'ACTIVE'),
(86, 68, 4, 2.00, 1, 2.00, 'ACTIVE'),
(87, 69, 5, 1.00, 1, 1.00, 'ACTIVE'),
(88, 70, 5, 1.00, 1, 1.00, 'ACTIVE'),
(89, 71, 5, 1.00, 1, 1.00, 'ACTIVE'),
(90, 72, 8, 100.00, 1, 100.00, 'ACTIVE'),
(91, 73, 5, 1.00, 1, 1.00, 'ACTIVE'),
(92, 74, 9, 100.00, 3, 300.00, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `event_booking_master`
--

CREATE TABLE `event_booking_master` (
  `evbk_id` int(11) NOT NULL,
  `evbk_code` varchar(50) DEFAULT NULL,
  `evbk_date` varchar(11) NOT NULL,
  `evbk_name` text NOT NULL,
  `evbk_contact` text NOT NULL,
  `evbk_email` text NOT NULL,
  `evbk_event` int(11) NOT NULL,
  `evbk_gross` double(10,2) NOT NULL DEFAULT 0.00,
  `evbk_pay_status` varchar(10) NOT NULL DEFAULT 'NO',
  `evbk_pay_reffno` varchar(500) DEFAULT NULL,
  `evbk_status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_booking_master`
--

INSERT INTO `event_booking_master` (`evbk_id`, `evbk_code`, `evbk_date`, `evbk_name`, `evbk_contact`, `evbk_email`, `evbk_event`, `evbk_gross`, `evbk_pay_status`, `evbk_pay_reffno`, `evbk_status`) VALUES
(1, 'UT3007231014221', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(2, 'UT3007231016172', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(3, 'UT3007231018403', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(4, 'UT3007231052584', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(5, 'UT3007231058475', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(6, 'UT3007231103086', '30/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(7, 'UT3107230539337', '31/07/23', 'Jayanta Roy', '9876543210', 'info@jayantaroy.com', 3, 1175.00, 'NO', NULL, 'ACTIVE'),
(8, 'UT3107230454158', '31/07/23', 'Paulastya Aich', '6175793', 'paulastya.aich@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(9, 'UT3107230508369', '31/07/23', 'Anindita ', '633479614', 'aninditanandiroy@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(10, NULL, '31/07/23', 'Anindita ', '0633479614', 'aninditanandiroy@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(11, NULL, '31/07/23', 'Anindita ', '0633479614', 'aninditanandiroy@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(12, NULL, '31/07/23', 'Anindita ', '0633479614', 'aninditanandiroy@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(13, NULL, '01/08/23', 'Somenath Chowdhury', '0683312643', 'Somenath.chowdhury@ymail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(14, NULL, '01/08/23', 'Somenath Chowdhury', '0683312643', 'Somenath.chowdhury@ymail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(15, NULL, '01/08/23', 'Ann Roy', '0633479614', 'aninditanandiroy@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(16, NULL, '01/08/23', 'Rupsayar Aich', '0617579243', 'paulastya.aich@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(17, NULL, '01/08/23', 'Rupsayar Aich', '0617579243', 'paulastya.aich@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(18, NULL, '01/08/23', 'Anindita Roy', '0633479614', 'aninditanandiroy@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(19, NULL, '01/08/23', 'Rupsayar Aich', '0617579243', 'paulastya.aich@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(20, NULL, '01/08/23', 'Rupsayar Aich', '0617579243', 'paulastya.aich@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(21, NULL, '01/08/23', 'Anindita Roy', '0633479614', 'aninditanandiroy@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(22, NULL, '01/08/23', 'Anindita Roy', '0633479614', 'aninditanandiroy@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(23, NULL, '01/08/23', 'Anindita Roy', '0633479614', 'aninditanandiroy@gmail.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(24, NULL, '02/08/23', 'Jayanta', '9876543210', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(25, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(26, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(27, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(28, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(29, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(30, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(31, NULL, '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 0.00, 'NO', NULL, 'ACTIVE'),
(32, 'UT02082306404032', '02/08/23', 'jayanta', '9879879870', 'info@jayantaroy.com', 3, 950.00, 'NO', NULL, 'ACTIVE'),
(33, 'UT02082306450333', '02/08/23', 'fghfghfgh', '454242', 'info@jayantaroy.com', 3, 375.00, 'NO', NULL, 'ACTIVE'),
(34, 'UT02082307164834', '02/08/23', 'Ru hhhhhh', '7657577322', 'Ruthyyjh@gmail.com', 3, 200.00, 'NO', NULL, 'ACTIVE'),
(35, 'UT02082307194135', '02/08/23', 'Avisekh', '9681090914', 'avisekhdc@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(36, 'UT02082307212636', '02/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(37, 'UT02082307223937', '02/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 3, 200.00, 'NO', NULL, 'ACTIVE'),
(38, 'UT02082307225138', '02/08/23', 'Somenath Chowdhury', '9831720149', 'somenath.chowdhury@ymail.com', 3, 200.00, 'NO', NULL, 'ACTIVE'),
(39, 'UT02082308121439', '02/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 3, 7.00, 'NO', NULL, 'ACTIVE'),
(40, 'UT02082302193640', '02/08/23', 'Somenath Chowdhury', '0683312643', 'somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(41, 'UT02082302240241', '02/08/23', 'Pradipto Narayan Chakraborty', '0684069329', 'pradiptonc@gmail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(42, 'UT02082306221342', '02/08/23', 'Jayanta', '9879879870', 'info@jayantaroy.com', 3, 6.00, 'NO', NULL, 'ACTIVE'),
(43, 'UT02082306225743', '02/08/23', 'Jayanta', '9879879870', 'info@jayantaroy.com', 3, 6.00, 'NO', NULL, 'ACTIVE'),
(44, 'UT03082308295544', '03/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 3, 4.00, 'NO', NULL, 'ACTIVE'),
(45, 'UT03082308304745', '03/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 3, 4.00, 'NO', NULL, 'ACTIVE'),
(46, 'UT03082310120646', '03/08/23', 'Somenath Chowdhury', '+31683312643', 'somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(47, 'UT03082310185247', '03/08/23', 'Avisekh', '9681090913', 'avisekhdc@gmail.com', 3, 5.00, 'NO', NULL, 'ACTIVE'),
(48, 'UT04082305491448', '04/08/23', 'Somenath Chowdhury', '0683312643', 'Somenath.chowdhury@ymail.com', 3, 3.00, 'NO', NULL, 'ACTIVE'),
(49, 'UT04082307231649', '04/08/23', 'gfkhmhtrmnvku', '6290046495', ' czhgmhgen@gmail.com', 3, 3.00, 'NO', NULL, 'ACTIVE'),
(50, 'UT04082307272150', '04/08/23', 'Avisekh', '+91-9681090913', 'avisekhdc@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(51, 'UT04082311444351', '04/08/23', 'Somenath', '9831720149', 'somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(52, 'UT04082303452852', '04/08/23', 'ss', '9831', 'sss', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(53, 'UT04082305084253', '04/08/23', 'Pradipto Chakraborty', '+31684069329', 'pradiptonc@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(54, 'UT04082305101254', '04/08/23', 'Pradipto Chakraborty', '+31684069329', 'pradiptonc@gmail.com', 13, 0.00, 'NO', NULL, 'ACTIVE'),
(55, 'UT04082305115055', '04/08/23', 'Pradipto Chakraborty', '+31684069329', 'pradiptonc@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(56, 'UT04082305300056', '04/08/23', 'Pradipto Chakraborty', '+31684069329', 'pradiptonc@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(57, 'UT04082306151057', '04/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(58, 'UT04082306155058', '04/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(59, 'UT05082306165659', '05/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(60, 'UT05082312263660', '05/08/23', 'Ssss', '9831720149', 'Ssss', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(61, 'UT05082301360761', '05/08/23', 'Pradipto ', '0684069329', 'pradiptonc@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(62, 'UT05082302002462', '05/08/23', 'Pradipto ', '0684069329', 'pradiptonc@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(63, 'UT05082302015863', '05/08/23', 'Anindita Roy', '0633479614', 'aninditanandiroy@gmail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(64, 'UT05082302015964', '05/08/23', 'Sss', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(65, 'UT05082302020165', '05/08/23', 'Pradipto', '0684069329', 'pradiptonc@gmail.com', 3, 2.00, 'NO', NULL, 'ACTIVE'),
(66, 'UT05082302023066', '05/08/23', 'Pradipto', '0684069329', 'pradiptonc@gmail.com', 3, 2.00, 'NO', NULL, 'ACTIVE'),
(67, 'UT05082306550467', '05/08/23', 'Ss', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(68, 'UT06082302495268', '06/08/23', 'Ss', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 2.00, 'NO', NULL, 'ACTIVE'),
(69, 'UT06082312172369', '06/08/23', 'Ss', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(70, 'UT06082304074170', '06/08/23', 'Ss', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(71, 'UT06082305201871', '06/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(72, 'UT06082305273272', '06/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 13, 100.00, 'NO', NULL, 'ACTIVE'),
(73, 'UT07082305422873', '07/08/23', 'Somenath Chowdhury', '9831720149', 'Somenath.chowdhury@ymail.com', 3, 1.00, 'NO', NULL, 'ACTIVE'),
(74, 'UT07082305155974', '07/08/23', 'Biswajit Chattaraj', '0687665435', 'biswajit.chattaraj@gmail.com', 13, 300.00, 'NO', NULL, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `event_fees_master`
--

CREATE TABLE `event_fees_master` (
  `sl` int(11) NOT NULL,
  `fees_name` text DEFAULT NULL,
  `fees_event` int(11) NOT NULL,
  `fees_desc` text DEFAULT NULL,
  `fees_rate` double(10,2) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `event_fees_master`
--

INSERT INTO `event_fees_master` (`sl`, `fees_name`, `fees_event`, `fees_desc`, `fees_rate`, `status`) VALUES
(1, 'Full event (Adult)', 5, '', 60.00, 'ACTIVE'),
(2, 'Full event (Children 5 - 14 years)', 5, '', 30.00, 'ACTIVE'),
(3, 'Full event (Children below 5 years)', 5, '', 0.00, 'ACTIVE'),
(4, 'Prabhat Party - for adults', 3, '', 2.00, 'ACTIVE'),
(5, 'Prabhat Party -Per child (5yrs-12yrs)', 3, '', 1.00, 'ACTIVE'),
(6, 'Prabhat Party - 5 Person', 3, '', 5.00, 'ACTIVE'),
(7, 'Sasthi', 13, '', 5.00, 'DELETE'),
(8, '20th-22nd October 2023 - Full Event - Non Veg (Above 12 Years)- EARLY BIRD DISCOUNT ', 13, 'Maximum Quantity-25', 100.00, 'ACTIVE'),
(9, '20th-22nd October 2023 - Full Event - Veg (Above 12 Years)-  EARLY BIRD DISCOUNT ', 13, '', 100.00, 'ACTIVE'),
(10, '20th-22nd October 2023 - Full Event - Non Veg (5 to 12 Years)- EARLY BIRD DISCOUNT ', 13, '', 65.00, 'ACTIVE'),
(11, '20th-22nd October 2023 - Full Event - Veg (5 to 12 Years)-  EARLY BIRD DISCOUNT ', 13, '', 65.00, 'ACTIVE'),
(12, '20th-22nd October 2023 - Full Event - Non Veg (Above 12 Years)', 13, '', 120.00, 'ACTIVE'),
(13, '20th-22nd October 2023 - Full Event - Veg (Above 12 Years)', 13, '', 120.00, 'ACTIVE'),
(14, '20th-22nd October 2023 - Full Event - Non Veg (5 to 12 Years)', 13, '', 80.00, 'ACTIVE'),
(15, '20th-22nd October 2023 - Full Event - Veg (5 to 12 Years)', 13, '', 80.00, 'ACTIVE'),
(16, '20th October 2023 - Dinner - Non Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(17, '20th October 2023 - Dinner - Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(18, '20th October 2023 - Dinner - Non Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(19, '20th October 2023 - Dinner - Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(20, '21st October 2023 - Full Day (lunch and dinner) - Non Veg (Above 12 Years)', 13, '', 54.00, 'ACTIVE'),
(21, '21st October 2023 - Full Day (lunch and dinner)- Veg (Above 12 Years)', 13, '', 54.00, 'ACTIVE'),
(22, '21st October 2023 - Full Day (lunch and dinner) - Non Veg (5 to 12 Years)', 13, '', 36.00, 'ACTIVE'),
(23, '21st October 2023 - Full Day (lunch and dinner) - Veg (5 to 12 Years)', 13, '', 36.00, 'ACTIVE'),
(24, '21st October 2023 - Lunch - Non Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(25, '21st October 2023 - Lunch - Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(26, '21st October 2023 - Lunch - Non Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(27, '21st October 2023 - Lunch - Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(28, '21st October 2023 - Dinner - Non Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(29, '21st October 2023 - Dinner - Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(30, '21st October 2023 - Dinner - Non Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(31, '21st October 2023 - Dinner - Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(32, '22nd October 2023 - Full Day  (lunch and dinner) - Non Veg (Above 12 Years)', 13, '', 54.00, 'ACTIVE'),
(33, '22nd October 2023 - Full Day  (lunch and dinner)- Veg (Above 12 Years)', 13, '', 54.00, 'ACTIVE'),
(34, '22nd October 2023 - Full Day  (lunch and dinner)- Non Veg (5 to 12 Years)', 13, '', 36.00, 'ACTIVE'),
(35, '22nd October 2023 - Full Day  (lunch and dinner)- Veg (5 to 12 Years)', 13, '', 36.00, 'ACTIVE'),
(36, '22nd October 2023 - Lunch - Non Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(37, '22nd October 2023 - Lunch - Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(38, '22nd October 2023 - Lunch - Non Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(39, '22nd October 2023 - Lunch - Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(40, '22nd October 2023 - Dinner - Non Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(41, '22nd October 2023 - Dinner - Veg (Above 12 Years)', 13, '', 30.00, 'ACTIVE'),
(42, '22nd October 2023 - Dinner - Non Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(43, '22nd October 2023 - Dinner - Veg (5 to 12 Years)', 13, '', 20.00, 'ACTIVE'),
(44, '20th October to 22nd October 2023 - Full Event (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(45, '20th October 2023 - Dinner (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(46, '21st October 2023 - Full Day (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(47, '21st October 2023 - Lunch (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(48, '21st October 2023 - Dinner (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(49, '22nd October 2023 - Full Day (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(50, '22nd October 2023 - Lunch (0 to 4 Years)', 13, '', 0.00, 'ACTIVE'),
(51, '22nd October 2023 - Dinner (0 to 4 Years)', 13, '', 0.00, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_date` varchar(25) NOT NULL,
  `event_details` text NOT NULL,
  `event_pic` text NOT NULL,
  `event_status` varchar(15) NOT NULL DEFAULT 'ACTIVE',
  `event_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_photo_master`
--

CREATE TABLE `event_photo_master` (
  `sl` int(11) NOT NULL,
  `photo_name` text DEFAULT NULL,
  `photo_type` int(11) NOT NULL,
  `photo_desc` varchar(255) DEFAULT NULL,
  `photo_pic` text DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `event_photo_master`
--

INSERT INTO `event_photo_master` (`sl`, `photo_name`, `photo_type`, `photo_desc`, `photo_pic`, `status`) VALUES
(1, 'Test', 2, '', '27112022022420221115_224030.jpg', 'DELETE'),
(2, 'Sumit Shaw Title ; Kolkta mmmm  mm medium ; Water color Size : 15', 3, '', '271120220350WhatsApp Image 2022-02-20 at 11.21.22.jpeg', 'DELETE'),
(3, 'Kolkata Pull Rikshaw', 3, '', '2711202203311645413069040-min.jpg', 'DELETE'),
(4, 'Pratim Roy WB, India Lord Shive (Medium : (Oil on canvas), Size : 15\" X 20\"', 3, '', '27112022034164921402_782254998836293_7830346582335284195_n.jpg', 'DELETE'),
(5, 'kk', 3, '', '271120220358IMG-20220221-WA0000.jpg', 'DELETE'),
(6, 'uu', 3, '', '271120220347FB_IMG_1629443870081-01.jpeg', 'DELETE'),
(7, 'Pratim Roy', 3, '', '271120220311WhatsApp Image 2022-02-10 at 00.58.23.jpeg', 'DELETE'),
(8, '', 5, '', '271220220305FB_IMG_1629443870081-01 (1)-min.jpeg', 'DELETE'),
(9, 'Participating Artists/Photographers', 3, '', '291220220853WhatsApp Image 2022-12-29 at 13.09.59.jpeg', 'ACTIVE'),
(10, 'Participating Artists/Photographers', 3, '', '281220220328WhatsApp Image 2022-12-28 at 20.07.51 (1).jpeg', 'ACTIVE'),
(11, 'Participating Artists/Photographers', 5, '', '291220220838WhatsApp Image 2022-12-29 at 13.09.59.jpeg', 'ACTIVE'),
(12, 'Participating Artists/Photographers', 5, '', '281220220357WhatsApp Image 2022-12-28 at 20.07.51 (1).jpeg', 'DELETE'),
(13, 'Participating Artists/Photographers', 5, '', '281220220301WhatsApp Image 2022-12-28 at 20.07.51 (1).jpeg', 'ACTIVE'),
(14, 'Participating Artists/Photographers', 3, '', '281220220342WhatsApp Image 2022-12-28 at 20.07.51 (2).jpeg', 'ACTIVE'),
(15, 'Participating Artists/Photographers', 5, '', '281220220305WhatsApp Image 2022-12-28 at 20.07.51 (2).jpeg', 'ACTIVE'),
(16, 'Participating Artists/Photographers', 3, '', '281220220355WhatsApp Image 2022-12-28 at 20.07.50.jpeg', 'ACTIVE'),
(17, 'Participating Artists/Photographers', 5, '', '281220220320WhatsApp Image 2022-12-28 at 20.07.50.jpeg', 'ACTIVE'),
(18, 'Honourable Judge Sukti Roy, India', 3, '', '281220220354WhatsApp Image 2022-12-28 at 20.27.13.jpeg', 'ACTIVE'),
(19, 'Honourable Judge Sukti Roy, India', 3, '', '281220220425WhatsApp Image 2022-12-28 at 20.27.13.jpeg', 'DELETE'),
(20, 'Honourable Judge Sukti Roy, India', 5, '', '281220220412WhatsApp Image 2022-12-28 at 20.27.13.jpeg', 'ACTIVE'),
(21, 'Honourable Judge Ahsan Ahmed, Bangladesh', 3, '', '291220220843WhatsApp Image 2022-12-29 at 13.10.15.jpeg', 'DELETE'),
(22, 'Honourable Judge Ahsan Ahmed, Bangladesh', 3, '', '291220220851WhatsApp Image 2022-12-29 at 13.10.15.jpeg', 'ACTIVE'),
(23, 'Honourable Judge Ahsan Ahmed, Bangladesh', 5, '', '291220220833WhatsApp Image 2022-12-29 at 13.10.15.jpeg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `exi_application`
--

CREATE TABLE `exi_application` (
  `exap_id` int(11) NOT NULL,
  `exap_member` int(11) NOT NULL,
  `exap_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `exap_code` varchar(25) NOT NULL,
  `exap_exibition` int(11) NOT NULL,
  `exap_img_count` int(11) NOT NULL,
  `exap_status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exi_application`
--

INSERT INTO `exi_application` (`exap_id`, `exap_member`, `exap_datetime`, `exap_code`, `exap_exibition`, `exap_img_count`, `exap_status`) VALUES
(2, 1, '2022-03-04 03:26:21', 'FAL/APP/00002', 3, 2, 'Inactive'),
(3, 1, '2022-03-04 03:37:13', 'FAL/APP/00003', 3, 1, 'Inactive'),
(4, 5, '2022-03-04 18:36:22', 'FAL/APP/00004', 3, 2, 'Active'),
(5, 1, '2022-03-06 13:42:34', 'FAL/APP/00005', 4, 1, 'Pending'),
(6, 19, '2022-11-24 08:30:26', 'FAL/APP/00006', 2, 2, 'Active'),
(7, 9, '2022-11-24 08:49:52', 'FAL/APP/00007', 2, 2, 'Active'),
(8, 19, '2022-11-25 20:09:17', 'FAL/APP/00008', 3, 2, 'Active'),
(9, 40, '2022-12-27 14:04:27', 'FAL/APP/00009', 2, 1, 'Pending'),
(10, 40, '2022-12-27 14:04:37', 'FAL/APP/00010', 2, 1, 'Pending'),
(11, 40, '2022-12-27 14:13:30', 'FAL/APP/00011', 3, 1, 'Active'),
(12, 40, '2022-12-27 14:18:11', 'FAL/APP/00012', 5, 1, 'Active'),
(13, 19, '2022-12-27 14:20:08', 'FAL/APP/00013', 5, 1, 'Active'),
(14, 2, '2022-12-27 15:42:42', 'FAL/APP/00014', 5, 2, 'Inactive'),
(15, 9, '2022-12-27 15:47:49', 'FAL/APP/00015', 3, 2, 'Inactive'),
(16, 9, '2022-12-27 15:48:30', 'FAL/APP/00016', 5, 2, 'Inactive'),
(17, 1, '2022-12-27 16:21:32', 'FAL/APP/00017', 3, 1, 'Inactive'),
(18, 1, '2022-12-27 17:22:07', 'FAL/APP/00018', 5, 1, 'Active'),
(19, 34, '2022-12-27 19:02:00', 'FAL/APP/00019', 3, 2, 'Active'),
(20, 8, '2022-12-27 19:03:19', 'FAL/APP/00020', 5, 2, 'Active'),
(21, 8, '2022-12-27 19:03:57', 'FAL/APP/00021', 3, 2, 'Active'),
(22, 8, '2022-12-27 19:40:08', 'FAL/APP/00022', 5, 2, 'Active'),
(23, 30, '2022-12-27 19:46:14', 'FAL/APP/00023', 5, 1, 'Active'),
(24, 39, '2022-12-28 09:44:42', 'FAL/APP/00024', 5, 2, 'Active'),
(25, 41, '2022-12-28 09:55:55', 'FAL/APP/00025', 5, 2, 'Active'),
(26, 41, '2022-12-28 09:56:19', 'FAL/APP/00026', 3, 2, 'Active'),
(27, 42, '2022-12-28 10:19:10', 'FAL/APP/00027', 5, 2, 'Active'),
(28, 42, '2022-12-28 10:19:30', 'FAL/APP/00028', 3, 2, 'Active'),
(29, 2, '2022-12-28 13:49:38', 'FAL/APP/00029', 5, 2, 'Active'),
(30, 43, '2022-12-28 14:04:30', 'FAL/APP/00030', 5, 2, 'Active'),
(31, 43, '2022-12-28 14:04:44', 'FAL/APP/00031', 3, 2, 'Active'),
(32, 38, '2022-12-29 08:07:47', 'FAL/APP/00032', 5, 2, 'Active'),
(33, 12, '2022-12-29 08:19:21', 'FAL/APP/00033', 5, 2, 'Active'),
(34, 44, '2022-12-31 13:39:09', 'FAL/APP/00034', 5, 2, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `exi_photo_master`
--

CREATE TABLE `exi_photo_master` (
  `sl` int(11) NOT NULL,
  `exph_member` int(11) NOT NULL,
  `exph_exibition` int(11) NOT NULL,
  `exph_name` text DEFAULT NULL,
  `exph_desc` text DEFAULT NULL,
  `exph_pic` text DEFAULT NULL,
  `exph_status` varchar(25) NOT NULL DEFAULT 'Pending',
  `exph_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `exph_visit` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `exi_photo_master`
--

INSERT INTO `exi_photo_master` (`sl`, `exph_member`, `exph_exibition`, `exph_name`, `exph_desc`, `exph_pic`, `exph_status`, `exph_datetime`, `exph_visit`) VALUES
(26, 40, 5, 'Ira Suri', 'Medium : Pencil & Soft pastel', 'WhatsApp Image 2022-12-18 at 17.54.02 (1).jpeg', 'Active', '2022-12-31 13:28:06', 1),
(3, 19, 2, 'Title : Alokali  ', 'Size : 32.48\" x 40.60\"  Medium : Photography', 'WhatsApp Image 2022-12-27 at 18.40.46.jpeg', 'Active', '2022-12-27 13:42:59', 0),
(4, 40, 3, 'Subhanjan Mukherjee', '', 'WhatsApp Image 2022-12-27 at 18.40.46.jpeg', 'DELETE', '2022-12-27 14:34:04', 0),
(5, 40, 5, 'Subhanjan Mukherjee', '', 'WhatsApp Image 2022-12-27 at 20.34.05.jpeg', 'DELETE', '2022-12-27 15:15:26', 0),
(25, 38, 5, 'Anbalagan. K', 'Title : Abstract Size : 12\" x 18\" Price : 2000/-', 'WhatsApp Image 2022-12-28 at 00.28.48.jpeg', 'Active', '2022-12-29 08:15:08', 1),
(8, 8, 5, 'Anbalagan. K', 'Title : Landscape Size : 24\" x 16\"', 'WhatsApp Image 2022-12-28 at 00.28.49.jpeg', 'DELETE', '2022-12-27 19:14:18', 1),
(9, 8, 5, 'Anbalagan. K', 'Title ; Abstract  Size ; 12\" x 18\"', 'WhatsApp Image 2022-12-28 at 00.28.48.jpeg', 'DELETE', '2022-12-27 19:15:22', 0),
(10, 8, 3, 'Subhanjan Mukherjee', 'Title : Alokali Size : 32.48\" x 40.60\" Medium : Mobile Photography', 'WhatsApp Image 2022-12-27 at 20.34.05.jpeg', 'Active', '2022-12-27 19:20:00', 2),
(11, 8, 3, 'Joydeep Bhattacharjee', '', 'WhatsApp Image 2022-12-28 at 00.51.12.jpeg', 'Active', '2022-12-27 19:23:49', 3),
(12, 19, 3, 'Joydeep Bhattacharjee', '', 'WhatsApp Image 2022-12-28 at 00.55.52.jpeg', 'Active', '2022-12-27 19:26:53', 1),
(13, 19, 5, 'Harkun Dubey', '', 'WhatsApp Image 2022-12-18 at 19.48.40.jpeg', 'DELETE', '2022-12-27 19:33:55', 0),
(14, 19, 5, 'Harkun Dubey', 'Group - A', 'WhatsApp Image 2022-12-18 at 19.48.40.jpeg', 'Active', '2022-12-27 19:36:21', 4),
(15, 30, 5, 'Lalit Gopal', 'Title : Speed Size : 27\" x 36\" Medium : Charcoal Pencil Group - C', 'WhatsApp Image 2022-12-28 at 01.20.42.jpeg', 'Active', '2022-12-27 19:51:49', 0),
(16, 39, 5, 'Anbalagan. K', 'Title : Landscape  Size : 24\" x 16\"\r\n Price : 3000 /-', 'WhatsApp Image 2022-12-28 at 00.28.49.jpeg', 'Active', '2022-12-28 09:47:38', 0),
(17, 41, 5, 'Nikita Sharma', '', 'WhatsApp Image 2022-12-04 at 13.56.34.jpeg', 'DELETE', '2022-12-28 10:08:31', 0),
(18, 41, 5, 'Nikita Sharma', '', 'WhatsApp Image 2022-12-04 at 13.56.35.jpeg', 'DELETE', '2022-12-28 10:08:53', 0),
(19, 42, 5, 'Dilip Abnave ', '', 'WhatsApp Image 2022-11-29 at 16.43.22.jpeg', 'Active', '2022-12-28 10:24:29', 0),
(20, 42, 5, 'Aarna Shil', '', 'WhatsApp Image 2022-12-28 at 16.04.35.jpeg', 'Active', '2022-12-28 10:27:24', 0),
(22, 43, 5, 'Sayan Maitra', '', 'WhatsApp Image 2022-12-28 at 19.37.00.jpeg', 'Active', '2022-12-28 14:09:46', 0),
(21, 42, 5, 'Jaspreet Singh', 'Title : Divulged Joy Size : 18\" x 24\" Price : 55000 /-', 'WhatsApp Image 2022-12-28 at 15.52.26.jpeg', 'Active', '2022-12-28 10:31:48', 0),
(23, 43, 3, 'Shreyansh Bhattacharjee', '', 'The Yellow Runner (1).jpg', 'DELETE', '2022-12-28 14:12:42', 0),
(24, 43, 3, 'Shreyansh Bhattacharjee', 'The Yellow runner', 'The Yellow Runner (1).jpg', 'Active', '2022-12-28 14:12:44', 1),
(27, 44, 5, 'M. Chandrasekaran', 'Title : Wild plant ( Erukkam poo ) Size : 28\" x 22\" Medium : Water color', 'WhatsApp Image 2022-12-31 at 18.59.48.jpeg', 'Active', '2022-12-31 13:46:02', 0),
(28, 44, 5, 'Ananyocheta', '', 'WhatsApp Image 2022-12-31 at 19.17.59.jpeg', 'Active', '2022-12-31 13:51:05', 0),
(29, 41, 5, 'Nitika Sharma', 'Title : Quarantine Size : 42\" x 30\" Medium : Mixed media', 'WhatsApp Image 2022-12-04 at 13.56.35.jpeg', 'Active', '2022-12-31 14:23:40', 0),
(30, 41, 5, 'Nitika Sharma', 'Title : Family Size : 42\" x 30\" Medium : Mixed media', 'WhatsApp Image 2022-12-04 at 13.56.34.jpeg', 'Active', '2022-12-31 14:24:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedack_master`
--

CREATE TABLE `feedack_master` (
  `id` int(11) NOT NULL,
  `fdbk_name` text NOT NULL,
  `fdbk_email` text NOT NULL,
  `fdbk_contact` text NOT NULL,
  `fdbk_matter` text NOT NULL,
  `fdbk_status` varchar(15) NOT NULL DEFAULT 'ACTIVE',
  `fdbk_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedack_master_prod`
--

CREATE TABLE `feedack_master_prod` (
  `id` int(11) NOT NULL,
  `fdbk_name` text NOT NULL,
  `fdbk_email` text NOT NULL,
  `fdbk_contact` text NOT NULL,
  `fdbk_prod` int(11) NOT NULL,
  `fdbk_matter` text NOT NULL,
  `fdbk_status` varchar(15) NOT NULL DEFAULT 'ACTIVE',
  `fdbk_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_name`, `password`, `type`) VALUES
(2, 'admin', 'admin', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

CREATE TABLE `main_cat` (
  `main_cat_id` int(11) NOT NULL,
  `main_cat_name` text NOT NULL,
  `main_cat_details` text NOT NULL,
  `main_cat_pic` text NOT NULL,
  `main_cat_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`main_cat_id`, `main_cat_name`, `main_cat_details`, `main_cat_pic`, `main_cat_status`) VALUES
(1, 'Painting', '', '', 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `id` int(11) NOT NULL,
  `news_name` text DEFAULT NULL,
  `news_date` varchar(25) DEFAULT NULL,
  `news_details` text DEFAULT NULL,
  `news_pic` text DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`id`, `news_name`, `news_date`, `news_details`, `news_pic`, `status`) VALUES
(1, 'International Online Painting & Photography Exhibition cum Competition, 2022', '2022-11-27', 'Results of IOPPEC Season 2 will be announced after 30th dec, 22. Winners from each group will receive trophy, medel and certificate by courier. Winners will get to showcase their works on our online gallery for one year. ', 'WhatsApp Image 2022-11-17 at 19.43.01.jpeg', 'ACTIVE'),
(3, 'Result of International Online Painting & Photography Exhibition cum Competition, 2022', '2023-01-02', '', 'WhatsApp Image 2023-01-02 at 21.30.23.jpeg', 'ACTIVE'),
(2, 'hh', '2022-03-30', 'he one-stop destination for all the art lovers. Art has always been an integral part of society, not today but since the time humans had started civilizing. Not just the photographic presentation of the shapes around, art also tends to depict and share the complete experience of the moment enveloped in those photographs. Love, passion, and admiration of art stem up the basis of ArtZolo.com. Various kinds of art forms have existed and still exist in this world, each of which has a unique story and technique involved with it. Each artist associates himself with a certain school of imagination. With 1000+ artists and over 16,000 artworks on display, ArtZolo.com has the presence of multitudinous artworks by various artists. Diversity, multifariousness and variegation best describe the myriad range of artworks ArtZolo.com has. Be it Ancient Indian heritage art forms or the abstract art or the contemporary or the modern art and whatnot, ArtZolo.com has them all. Also, not restricting itself to only paintings ArtZolo.com envelopes a large array of Sculptures and Wall Murals as well. With the wide range of artists and artforms, ArtZolo.com is the one-stop solution for all the artists and art lovers.', '', 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE `offer_master` (
  `offer_id` int(11) NOT NULL,
  `offer_name` text NOT NULL,
  `offer_details` text NOT NULL,
  `offer_pic` text NOT NULL,
  `offer_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `offer_master`
--

INSERT INTO `offer_master` (`offer_id`, `offer_name`, `offer_details`, `offer_pic`, `offer_status`) VALUES
(1, 'Desktop at â‚¹ 10000', 'Desktop with Core 2 Duo, 4GB RAM, 320 GB HDD/120GB SSD, 15.6\" LED', 'c2d price.jpg', 'ACTIVE'),
(2, 'Complete Support For Tally Prime Upgradation', 'ARE YOU FACING PROBLEM ON TALLY PRIME? CALL US FOR FREE SUPPORT.\r\nINSTALL TALLY PRIME TODAY. \r\nSir,\r\nHope You and Your family are well. \r\nAs you, know that Tally Erp9 has upgraded with Tally Prime. Tally already stopped to provide update of Tally Erp9. Now On-wards Tally will provide all updates for Tally Prime only.\r\nWe want to inform you that, for tally Prime your computers require some hardware modification also Operating system upgradation.\r\nIn this matter, we are providing complete solutions. \r\nWe will upgrade your existing Tally.ERP9* to Tally Prime. Also, provide you Support for E-Invoice. This service will provide at very nominal\r\n\r\nJUST A CALL AWAY TO YOUR SERVICE\r\n9830111532/7003362652\r\nNAMAN INFOTECH\r\n13, CROOKED LANE, 4TH FLOOR\r\nKOLKATA-700069\r\nMAIL-NAMANINFOTECHKOL@GMAIL.COM\r\n\r\n', 'image001.jpg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_code` varchar(25) NOT NULL,
  `order_cust_id` int(11) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `order_gross` double(12,2) NOT NULL,
  `order_discount` double(10,2) NOT NULL,
  `order_sgst` double(10,2) NOT NULL,
  `order_cgst` double(10,2) NOT NULL,
  `order_igst` double(10,2) NOT NULL,
  `order_net` double(12,2) NOT NULL,
  `order_enter_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_cat`
--

CREATE TABLE `photo_cat` (
  `photo_cat_id` int(11) NOT NULL,
  `photo_cat_name` text DEFAULT NULL,
  `photo_cat_details` text DEFAULT NULL,
  `photo_cat_pic` text DEFAULT NULL,
  `photo_cat_status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `photo_cat`
--

INSERT INTO `photo_cat` (`photo_cat_id`, `photo_cat_name`, `photo_cat_details`, `photo_cat_pic`, `photo_cat_status`) VALUES
(1, 'Acrylic', '2023', 'look before you leap copy.jpg', 'ACTIVE'),
(2, 'Water Colour', '2023', '20220129_153641-min.jpg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `photo_master`
--

CREATE TABLE `photo_master` (
  `sl` int(11) NOT NULL,
  `photo_name` text DEFAULT NULL,
  `photo_type` int(11) NOT NULL,
  `photo_desc` varchar(255) DEFAULT NULL,
  `photo_pic` text DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `photo_master`
--

INSERT INTO `photo_master` (`sl`, `photo_name`, `photo_type`, `photo_desc`, `photo_pic`, `status`) VALUES
(1, 'Honey Moon of Earth', 1, 'Jyotirmay Dalapati            Acrylic 30\"/36\"', '220220220623BeautyPlus_20200218080443464_save copy(3)-min.jpg', 'DELETE'),
(2, 'Test2', 1, 'Test', '250220220633Tulips.jpg', 'DELETE'),
(3, 'Bird', 2, 'Ritasana Bhattacharya\r\nWater colour', '180320220149IMG_20210627_112821.jpg', 'DELETE'),
(4, 'AGRICULTURAL FARMERS', 2, 'Abhisikta Nandy', '180320220104IMG_20210521_110454_558.jpg', 'DELETE'),
(5, 'AGRICULTURAL FARMERS', 2, 'Abhisikta Nandy', '180320220118IMG_20210521_110454_558.jpg', 'DELETE'),
(6, 'UTS2023-001-PIC-001', 3, '.', '110620230722IMG_20230417_145242.jpg', 'ACTIVE'),
(7, 'UTS2023-001-PIC-002', 3, '.', '110620230748IMG_20230417_145337.jpg', 'ACTIVE'),
(8, 'UTS2023-001-PIC-003', 5, '.', '110620230710IMG_20230417_145423.jpg', 'DELETE'),
(9, 'Pic 04', 5, '.', '270420230852g8.jpg', 'DELETE'),
(10, 'UTS2023-001-PIC-003', 3, '', '110620230704IMG_20230417_145503.jpg', 'ACTIVE'),
(11, 'UTS2023-001-PIC-004', 3, '', '110620230737IMG-20230416-WA0081_1.jpg', 'ACTIVE'),
(12, 'UTS2023-001-PIC-005', 3, '', '110620230749IMG-20230416-WA0180.jpg', 'ACTIVE'),
(13, 'test', 3, 'test', '280720230914IMG_20230417_145337.JPEG', 'ACTIVE'),
(14, 'asdasd', 13, 'asdascda', '280720230947DurgaPuja.jpeg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `sl` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_type` int(11) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `cat_pic` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`sl`, `category_name`, `category_type`, `cat_desc`, `cat_pic`, `status`) VALUES
(1, 'Test', 1, 'As galleries reopen around the country, artists are inviting visitors to engage with their work in fascinating new ways', 'exhibition-1.jpg', 'DELETE'),
(2, 'Sand art', 1, 'Sand artists are welcome to publish their creation in this category', 'sand-art-on-Lord-Shiva.jpg', 'DELETE'),
(3, 'test 2', 1, 'test', 'Chrysanthemum.jpg', 'DELETE'),
(4, 'Oil Paint', 1, 'Welcome to Fine Art Loom The Art Institute of Melbourne collects, preserves, and interprets works of art of the highest quality, representing the worldâ€™s diverse artistic traditions, for the inspiration', 'holy-painted-buddha-face-original-handmade-oil-painting-on-canvas-framed-by-rahul-kohli-holy-painted-phgymm.webp', 'DELETE'),
(5, 'Painting & Photography', 1, '', '', 'DELETE'),
(6, 'Painting & photography', 1, 'Painting and photography exhibition', 'WhatsApp Image 2022-11-17 at 19.43.01.jpeg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pro_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_type` text NOT NULL,
  `product_price` text NOT NULL,
  `product_bulk_qty` double NOT NULL DEFAULT 0,
  `product_bulk_price` double NOT NULL DEFAULT 0,
  `product_size` text DEFAULT NULL,
  `product_color` text DEFAULT NULL,
  `product_details` text NOT NULL,
  `product_features` varchar(1000) NOT NULL,
  `product_category` text NOT NULL,
  `new` varchar(10) NOT NULL DEFAULT 'NO',
  `sell_off` varchar(10) NOT NULL DEFAULT 'NO',
  `best_seller` varchar(10) NOT NULL DEFAULT 'NO',
  `pro_pic` text NOT NULL,
  `model_pro_pic` text DEFAULT NULL,
  `model_pro_pic1` text DEFAULT NULL,
  `model_pro_pic2` text DEFAULT NULL,
  `model_pro_pic3` text DEFAULT NULL,
  `model_pro_pic4` text DEFAULT NULL,
  `status` text NOT NULL,
  `product_video` varchar(100) DEFAULT NULL,
  `product_pdf` text DEFAULT NULL,
  `prod_brand` int(11) NOT NULL DEFAULT 1,
  `exitype` varchar(25) NOT NULL DEFAULT 'PAST',
  `exidate` text DEFAULT NULL,
  `exidate1` text DEFAULT NULL,
  `exi_photo_type` varchar(25) NOT NULL DEFAULT 'PHOTO',
  `product_location` text DEFAULT NULL,
  `event_year` int(10) NOT NULL DEFAULT 2023
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`pro_id`, `product_name`, `product_type`, `product_price`, `product_bulk_qty`, `product_bulk_price`, `product_size`, `product_color`, `product_details`, `product_features`, `product_category`, `new`, `sell_off`, `best_seller`, `pro_pic`, `model_pro_pic`, `model_pro_pic1`, `model_pro_pic2`, `model_pro_pic3`, `model_pro_pic4`, `status`, `product_video`, `product_pdf`, `prod_brand`, `exitype`, `exidate`, `exidate1`, `exi_photo_type`, `product_location`, `event_year`) VALUES
(3, 'Noboborsher Ashor (à¦¨à¦¬à¦¬à¦°à§à¦·à§‡à¦° à¦†à¦¸à¦°) 2023', 'UTS2023-001', '150', 0, 250, '0', NULL, 'Celebration of Bengali New Year (Poila Boishakh) with Utsab', '<p align=\"right\" style=\"color:#330066\"> Celebration of Bengali New Year (Poila Boishakh) with Utsab </p>', '4 ', 'NO', 'NO', 'NO', '', 'POILA BOISAKH.jpg', 'WhatsApp Image 2022-11-25 at 12.06.44.jpeg', 'WhatsApp Image 2022-11-25 at 12.08.36.jpeg', NULL, NULL, 'ACTIVE', '', NULL, 0, 'UPCOMING', 'Saturday, April 15 Â· 5 - 9PM CEST', '2022-12-31', 'PHOTOGRAPH', 'The Hungry Mind, Wijndaelerweg 9a, 2554 BZ, Den Haag', 2023),
(5, 'Durga Pujor Nahobot (à¦¦à§à¦°à§à¦—à¦¾ à¦ªà§à¦œà§‹à¦° à¦¨à¦¹à¦¬à¦¤) 2023', 'UTS2023-002', '150', 0, 250, '0', NULL, '', 'Celebration of Durgotsab 2023 with Utsab', '6 ', 'NO', 'NO', 'NO', '', 'g7.jpg', 'WhatsApp Image 2022-11-25 at 12.06.44.jpeg', 'WhatsApp Image 2022-11-25 at 12.08.36.jpeg', NULL, NULL, 'DELETE', '', NULL, 0, 'UPCOMING', 'Friday, October 20, 2023 - Sunday, October 22, 2023', '2023-01-03', 'PAINTING', 'Rotterdam', 2023),
(13, 'Durga Pujor Nohobot (à¦¦à§à¦°à§à¦—à¦¾ à¦ªà§‚à¦œà§‹à¦° à¦¨à¦¹à¦¬à§Ž) 2023', 'UTS2023-002', '', 0, 0, '0', NULL, '', '<p align=\"right\" style=\"color:#330066\"> Celebration of Durga Pujo (Durga Pujor Nohobot) with Utsab </p>', '6 ', 'NO', 'NO', 'NO', '', 'DurgaPuja.jpeg', NULL, NULL, NULL, NULL, 'ACTIVE', '', NULL, 0, 'UPCOMING', 'Friday, October 20 Â· 5PM - Sunday, October 22 Â· 10PM CEST', '', 'PHOTOGRAPH', 'Zalencentrum Sunrise, Galvanistraat 150, 3029 AD Rotterdam, The Netherlands', 2023),
(12, 'Test1', '000', '', 0, 0, '0', NULL, '', 'testt....', '6 ', 'NO', 'NO', 'NO', '', 'f3.jpg', NULL, NULL, NULL, NULL, 'DELETE', '', NULL, 0, 'UPCOMING', '..', '', 'PHOTOGRAPH', '', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `profile_master`
--

CREATE TABLE `profile_master` (
  `id` int(11) NOT NULL,
  `comp_name` text NOT NULL,
  `comp_logo` text NOT NULL,
  `comp_favicon` text NOT NULL,
  `comp_app_bgcolor` varchar(10) NOT NULL,
  `comp_slogan` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE',
  `comp_video` text NOT NULL,
  `comp_counter1` double NOT NULL DEFAULT 0,
  `comp_counter2` double NOT NULL DEFAULT 0,
  `comp_counter3` double NOT NULL DEFAULT 0,
  `comp_counter4` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile_master`
--

INSERT INTO `profile_master` (`id`, `comp_name`, `comp_logo`, `comp_favicon`, `comp_app_bgcolor`, `comp_slogan`, `status`, `comp_video`, `comp_counter1`, `comp_counter2`, `comp_counter3`, `comp_counter4`) VALUES
(1, 'Utsab', 'utsab_logo.png', 'favicon.png', '#050505', 'Ek Mutho Jiboner Uchhash', 'ACTIVE', 'https://www.youtube.com/', 10, 150, 250, 1349);

-- --------------------------------------------------------

--
-- Table structure for table `project_master`
--

CREATE TABLE `project_master` (
  `proj_id` int(11) NOT NULL,
  `proj_name` text NOT NULL,
  `proj_cust` text NOT NULL,
  `proj_location` text NOT NULL,
  `proj_details` text NOT NULL,
  `proj_pic` text NOT NULL,
  `proj_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate_master`
--

CREATE TABLE `rate_master` (
  `rate_id` int(11) NOT NULL,
  `rate_prod_id` int(11) NOT NULL,
  `rate_size` double(10,2) NOT NULL,
  `rate_amount` double(10,2) NOT NULL,
  `rate_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `serv_id` int(11) NOT NULL,
  `serv_name` text NOT NULL,
  `serv_details` text NOT NULL,
  `serv_pic` text NOT NULL,
  `serv_rate` double(10,2) NOT NULL,
  `serv_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`serv_id`, `serv_name`, `serv_details`, `serv_pic`, `serv_rate`, `serv_status`) VALUES
(1, 'DOUBLE BEDDED NON-AC', 'NICE AND BEAUTIFUL:  each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 1800.00, 'DELETE'),
(2, 'DELEUX DOUBLE BEDDED NON-AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 2250.00, 'DELETE'),
(3, 'DELEUX DOUBLE BEDDED AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 2750.00, 'DELETE'),
(4, 'DELUX 4 BEDDED NON-AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 3000.00, 'DELETE'),
(5, 'DELUX 4 BEDDED AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 3500.00, 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `sns_master`
--

CREATE TABLE `sns_master` (
  `id` int(11) NOT NULL,
  `fb_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `youtube_link` text NOT NULL,
  `map_link` text NOT NULL,
  `linkdin_link` text NOT NULL,
  `indiamart_link` text NOT NULL,
  `tradeindia_link` text NOT NULL,
  `alibaba_link` text NOT NULL,
  `instagram_link` text DEFAULT NULL,
  `pinterest_link` text DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sns_master`
--

INSERT INTO `sns_master` (`id`, `fb_link`, `twitter_link`, `youtube_link`, `map_link`, `linkdin_link`, `indiamart_link`, `tradeindia_link`, `alibaba_link`, `instagram_link`, `pinterest_link`, `status`) VALUES
(2, 'https://www.facebook.com/profile.php?id=100089705246526', '', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.9385474808696!2d4.3281639!3d52.06264259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b6e4f459c803%3A0x72c8269b9f170f1c!2sVan%20Musschenbroekstraat%20145%2C%202522%20AL%20Den%20Haag%2C%20Netherlands!5e0!3m2!1sen!2sin!4v1689017956460!5m2!1sen!2sin', '', '', '', '', 'https://instagram.com/utsabnetherlands?igshid=ZDdkNTZiNTM=', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `team_master`
--

CREATE TABLE `team_master` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_desig` text NOT NULL,
  `team_details` text NOT NULL,
  `team_pic` text NOT NULL,
  `team_status` varchar(20) NOT NULL DEFAULT 'ACTIVE',
  `team_type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `team_master`
--

INSERT INTO `team_master` (`team_id`, `team_name`, `team_desig`, `team_details`, `team_pic`, `team_status`, `team_type`) VALUES
(1, 'Pranesh Chatterjee & Tanima Chatterjee', '', '<b>Pranesh Chatterjee:</b><br>\r\nA person who lives by passion, loves to dream and likes to invite challenges but remains as an unpredictable enthousiast and indisputably indomitable person at the end of the day. Fond of adda, jokes, and drama. Always loves to start from the scratch and leads from the front. Sometimes, emotions control the reasoning! Always have been a great patron and strong defender of values and principles. In true sense of its term, UTSAB is the philosophy of his life.<br>\r\n<b>Tanima Chatterjee:</b><br>\r\nA human being, who is reserved and driven by strong logical reasoning and careful analysis of situations; possesses powerful writing ability, especially to reflect the daily events and practices of life from a different angle. Has a pitch-perfect voice for audio-play, recitations and drama. Wants to spread UTSAB to everyone in the surroundings in all possible ways in real sense.', 't1.jpg', 'DELETE', 1),
(2, 'Avijit Banerjee & Jaya Banerjee', '', 'Of all the lands weve traveled, none compare. To India, where our hearts forever stay. In Kolkata, we find a love affair\r\nWith culture, festivals, and food each day.<br>\r\nThe colors of Durga Puja light the sky. And joyous crowds fill every street and square As music, dance, and feasting satisfy. <br>\r\nThe senses and the soul, beyond compare And oh, the food! From fish to sweets divine\r\nKolkatas cuisine never fails to please Each dish a flavor-packed and fragrant sign\r\nOf Indias culinary expertise.<br>\r\nSo though weve lived abroad these many years. Our love for Kolkata, India and its UTSAB endures.', 't2.jpg', 'ACTIVE', 1),
(3, 'Prasenjit Bhattacharya & Soma Bhattacharya', '', 'Bit old school, strong believer of values and principles. Optimal mix of an optimist and a realist.<br>\r\nAvid reader and a keen traveller- nothing purifies the soul more than nature and landscapes.<br>\r\nUTSAB is the way to give it back to the society while doing what we love to do, indulging in numbers and the passion to grow something from scratch.', 't3.jpg', 'ACTIVE', 1),
(4, 'Anindita Nandi Roy & Sayan Datta', '', 'We are simple and passionate couple with powerful outlook in life. From the City of Joy to the Silicon Valley\r\nand now in the land of Tulips, we believe in living life in the moment, where change is the only constant. We\r\nfocus on positivity, it helps us to promote a greater sense of happiness and fulfillment whilst accepting the\r\nchallenges and find ways to approach them in a constructive and positive way.<br>\r\nTravelling is our biggest stress buster and a great way to unwind, explore and create long lasting memories. From\r\nbustling cities to serene natural landscapes or historic landmarks, there is always something new and exciting to\r\ndiscover.<br>\r\nWe feel UTSAB is the perfect platform in Netherlands for celebrating and preserving our cultural heritage, creating\r\nsocial bonding and fostering a sense of pride and belonging, in a country so far and different from our home land. Honoured to be part of UTSAB.', 't4.jpg', 'ACTIVE', 1),
(6, 'Somenath Chowdhury & Sayanti Chowdhury', '', 'We come from West Bengal, India - the land where a plethora of rivers and cultures have merged for eons! And\r\nyes, that shapes us to be very open to diversity of all kinds. We are one happy-go-lucky couple who believe in life as an ongoing journey. Being able to accept life as it comes and maintain a positive outlook helps us to navigate through all difficult challenges and appreciate the blessings around us.<br>\r\nHaving a thirst to know more about the world, we both enjoy travelling and exploring the unknown. Whether backpacking through a remote wilderness, visiting historic landmarks, or simply wandering through a new city, the experiences shared together remain long etched in our memories.<br>\r\nUTSAB is a great initiative in Netherlands, which is envisioned to celebrate and preserve our cultural heritage through social bonding among like minded people. Looking forward to work together and create beautiful memories.', 't5.jpg', 'DELETE', 1),
(7, 'Paulastya Aich & Barnali Saha', '', 'Myself Paulastya Aich and my wife Barnali Saha, and our son Rupsayar Aich. We are a close-knit and fun-loving family who are passionate about staying connected to our roots and culture. I am living in the Netherlands for the last seven years, and my family joined me last year.<br>\r\nOne of the things that sets us apart is our love for our heritage.Being far from our own people and land , we always cherish our cultural traditions and are always looking for ways to stay connected to our roots.<br>\r\nIn addition to our passion for culture, we also loves to travel. We are always on the lookout for new adventures, and our travels have taken us to many beautiful places in Europe and beyond. We enjoy learning about new cultures\r\nand making memories together as a family.We believe life should not lived but should be celebrated. We became part of the UTSAB family as we expect we will get all the \"Bangaliana\" essence while being physically present in the land of of Tulips and windmills.', 't6.jpg', 'ACTIVE', 1),
(8, 'Sudeshna Roy & Rana Roy', '', 'â€œLiving life king sizeâ€ is our outlook towards life. Simple, fun loving in nature with strong passion for values and culture. Enthusiastic in taking new challenges and try to overcome the difficulties with flying color.<br>\r\nLife is the experience of being alive and UTSAB is a platform for celebration of life. Excited to be a part of UTSAB family, which is a home away from home to observe the heritage and culture of our homeland. Eager to work together and contribute to this fast life keeping social commitments in mind.', 't7.jpg', 'ACTIVE', 1),
(9, 'Sumit Banerjee & Meghna Banerjee', '', 'Introducing myself Sumit and my better half Meghna, we hail from Bengal, India and very recently shifted to Netherlands. We are two souls with one common objective to live life to the fullest. From ups and downs, through thick and thin we have grown stronger together.<br>\r\nWe are both drawn towards nature. From mystic hills to the wide oceans or the mysterious jungles, we are adventurous and like exploring the unknowns.<br>\r\nThrough UTSAB we have found a home away from our home where we can grow as an extended family while preserving our cultural roots and inculcating the values in our future generations.', 't8.jpg', 'ACTIVE', 1),
(10, 'Rituparna Sengupta & Debanjan Sengupta', '', 'Rituparna loves to live life in a simplistic manner with a mix of practicality, emotion, honesty, passion and spirituality. She is very creative, a passionate cook & loves baking and travelling.<br>\r\nDebanjan lives life with a blend of compassion, passion & dispassion. He meditates & is a singer-guitarist leading Art of Living Satsangs for around 15 years now!<br>\r\nFor us, UTSAB is an initiative to connect to our roots and enable our next generation to imbibe our rich culture & heritage. The name UTSAB is what we look at life as - a Celebration.', 't9.jpg', 'ACTIVE', 1),
(11, 'Pradipta Chakraborty & Suparna Bhattacharya', '', 'Pradipto and Suparna are a couple living in the The Hague. Pradipto works in an IT company and Suparna is a housewife. Pradipto shifted to Netherlands in 2015 and Suparna joined him after marriage in 2018.<br>\r\nThey are adventurous and love to explore new places, making traveling one of their favorite pastimes. They also have a shared passion for cinema and often indulge in movie nights to relax and unwind. When they are not traveling or watching movies, they enjoy socializing with their close friends, sharing laughs, and creating\r\nunforgettable memories together.<br>\r\nFostering a sense of community, UTSAB could create a welcoming and inclusive environment where Bengali people and those interested in Bengali culture can come together, connect, and form meaningful relationships.', 't10.jpg', 'ACTIVE', 1),
(12, 'Som Debnath & Mili Biswas', '', 'We, Som Debnath & Mili Biswas, met each other two decades back in our teenage and vowed to continue our lives together forever. We traveled and lived in many countries across the globe for the sheer zeal to explore a new country, people, and cultures while loving even more to connect back to our roots in West Bengal, Bengali, and\r\n\"Bangaliana\".<br>\r\nUTSAB is a feeling thatll give us the love, bonding & sense of togetherness that we always thrive for. Utsav will surely make all of us complete with what we are.', 't11.jpg', 'ACTIVE', 1),
(13, 'Ritojit Chakraborty', '', '', 'WhatsApp Image 2023-04-14 at 17.49.13.jpeg', 'ACTIVE', 2),
(14, 'Arnab Roy & Pritha Roy', '', '', '370362f2-93a3-4630-bd8c-abc8b4c286c0.jpg', 'DELETE', 2),
(15, 'Sraman & Soham Chatterjee', '', '', 'WhatsApp Image 2023-04-14 at 17.49.16 (2).jpeg', 'DELETE', 3),
(16, 'Rishav Roy', '', '', 'WhatsApp Image 2023-04-14 at 17.49.11.jpeg', 'DELETE', 1),
(17, 'Rishav Roy', '', '', 'WhatsApp Image 2023-04-14 at 17.49.11.jpeg', 'ACTIVE', 3),
(18, 'Naitik Bhattacharya', '', '', 'WhatsApp Image 2023-04-14 at 22.58.07 (2).jpeg', 'ACTIVE', 3),
(19, 'Athena Roy', '', '', 'AthenaRoy.jpeg', 'ACTIVE', 3),
(20, 'Riddhima Debnath', '', '', 'WhatsApp Image 2023-04-14 at 22.58.10.jpeg', 'ACTIVE', 3),
(21, 'Samriddhi Sengupta', '', '', 'WhatsApp Image 2023-04-14 at 17.49.15.jpeg', 'ACTIVE', 3),
(22, 'Rupsayar Aich', '', '', 'WhatsApp Image 2023-04-14 at 17.49.14 (1).jpeg', 'ACTIVE', 3),
(23, 'Swastika Dutta', '', '', 'WhatsApp Image 2023-04-14 at 23.33.40.jpeg', 'ACTIVE', 3),
(24, 'Smayan & Adrishanti Chowdhury', '', '', 'IMG_1142.jpg', 'DELETE', 3),
(25, 'Smayan Chowdhury', '', '', 'WhatsApp Image 2023-04-14 at 23.33.40 (1).jpeg', 'DELETE', 3),
(26, 'Biswajit Chattaraj & Joyshree Chattaraj ', '', 'We are a simple and joy loving couple. We believe in simplicity and honesty, and we both love to make new friends and to get to mingle with the people from different part of the society. As we are so fun-loving, so in the land of canal UTSAB is the perfect platform for us to get the flavors of the Bengalâ€™s Durga Puja and off course the Bengali food.', 'Biswajit&Jayshree.png', 'ACTIVE', 1),
(27, 'Ishanjit Chattaraj', '', '', 'Ishanjit.png', 'ACTIVE', 3),
(28, 'Arnab Roy & Pritha Roy', '', 'We are an affectionate couple coming together from Bengal ( she from Kolkata and me from Howrah) and our journey so far has been no less than a rollercoaster ride. We believe in making new memories along with drenching a bit in nostalgia. Hence our thought of participating in a Utsab that is trying to recreate Pujo and invoking \"Bangaliana\" all over again. Waiting for a fun filled gala Durga Pujo and many more such events!', 'Arnab&Pritha.jpeg', 'ACTIVE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testi_master`
--

CREATE TABLE `testi_master` (
  `id` int(11) NOT NULL,
  `testi_name` text NOT NULL,
  `testi_details` text NOT NULL,
  `testi_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `testi_master`
--

INSERT INTO `testi_master` (`id`, `testi_name`, `testi_details`, `testi_pic`, `status`) VALUES
(1, 'Apurba Talukdar', 'If someone wants to enjoy a serene and and soulful time... this place is highly recommended... tea gardens/ Forest/ wildlife sightings... if anything in these is what you are looking for then this is the place you are looking for... great place to enjoy the whispers of nature... and it is must to mention that the service/ food quality is nice... wish you a nice barbeque and campfire beside Bania river....He is Designer', 'AT.jpg', 'DELETE'),
(2, 'Raj Kumar Som', 'Located 1km from chilapata jungle safari gate and in the bank of Bania river. Well furnished, they will provide all support to the guest. Well behaved staff and food is above average.e is a Law Student.', 'unnamed.png', 'DELETE'),
(3, 'Avisekh', 'adsasdcfadcf', 'im-803424.jpg', 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `unit_master`
--

CREATE TABLE `unit_master` (
  `unit_id` int(11) NOT NULL,
  `unit_name` text NOT NULL,
  `unit_sign` varchar(20) NOT NULL,
  `unit_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `unit_master`
--

INSERT INTO `unit_master` (`unit_id`, `unit_name`, `unit_sign`, `unit_status`) VALUES
(1, 'Grams', 'Gm.', 'ACTIVE'),
(2, 'Kilograms', 'KG', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(11) NOT NULL,
  `group_name` text NOT NULL,
  `group_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `group_status`) VALUES
(1, 'Administrator', 'ACTIVE'),
(2, 'Report', 'ACTIVE'),
(3, 'General User', 'ACTIVE'),
(4, 'Employee', 'ACTIVE'),
(5, 'customer', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `user_name`, `password`, `type`) VALUES
(2, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_master`
--
ALTER TABLE `banner_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment_master`
--
ALTER TABLE `blog_comment_master`
  ADD PRIMARY KEY (`bcm_id`);

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brand_master`
--
ALTER TABLE `brand_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogue_master`
--
ALTER TABLE `catalogue_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cert_master`
--
ALTER TABLE `cert_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_master`
--
ALTER TABLE `client_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_master`
--
ALTER TABLE `cms_master`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_master`
--
ALTER TABLE `content_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_master`
--
ALTER TABLE `cust_master`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `event_booking_details`
--
ALTER TABLE `event_booking_details`
  ADD PRIMARY KEY (`evbk_dtls_id`);

--
-- Indexes for table `event_booking_master`
--
ALTER TABLE `event_booking_master`
  ADD PRIMARY KEY (`evbk_id`);

--
-- Indexes for table `event_fees_master`
--
ALTER TABLE `event_fees_master`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_photo_master`
--
ALTER TABLE `event_photo_master`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `exi_application`
--
ALTER TABLE `exi_application`
  ADD PRIMARY KEY (`exap_id`);

--
-- Indexes for table `exi_photo_master`
--
ALTER TABLE `exi_photo_master`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `feedack_master`
--
ALTER TABLE `feedack_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedack_master_prod`
--
ALTER TABLE `feedack_master_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_cat`
--
ALTER TABLE `main_cat`
  ADD PRIMARY KEY (`main_cat_id`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_master`
--
ALTER TABLE `offer_master`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `photo_cat`
--
ALTER TABLE `photo_cat`
  ADD PRIMARY KEY (`photo_cat_id`);

--
-- Indexes for table `photo_master`
--
ALTER TABLE `photo_master`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `profile_master`
--
ALTER TABLE `profile_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_master`
--
ALTER TABLE `project_master`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `sns_master`
--
ALTER TABLE `sns_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_master`
--
ALTER TABLE `team_master`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testi_master`
--
ALTER TABLE `testi_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_master`
--
ALTER TABLE `banner_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_comment_master`
--
ALTER TABLE `blog_comment_master`
  MODIFY `bcm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand_master`
--
ALTER TABLE `brand_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catalogue_master`
--
ALTER TABLE `catalogue_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cert_master`
--
ALTER TABLE `cert_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_master`
--
ALTER TABLE `client_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms_master`
--
ALTER TABLE `cms_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content_master`
--
ALTER TABLE `content_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cust_master`
--
ALTER TABLE `cust_master`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `event_booking_details`
--
ALTER TABLE `event_booking_details`
  MODIFY `evbk_dtls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `event_booking_master`
--
ALTER TABLE `event_booking_master`
  MODIFY `evbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `event_fees_master`
--
ALTER TABLE `event_fees_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_photo_master`
--
ALTER TABLE `event_photo_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `exi_application`
--
ALTER TABLE `exi_application`
  MODIFY `exap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `exi_photo_master`
--
ALTER TABLE `exi_photo_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedack_master`
--
ALTER TABLE `feedack_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedack_master_prod`
--
ALTER TABLE `feedack_master_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_cat`
--
ALTER TABLE `main_cat`
  MODIFY `main_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer_master`
--
ALTER TABLE `offer_master`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_cat`
--
ALTER TABLE `photo_cat`
  MODIFY `photo_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_master`
--
ALTER TABLE `photo_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile_master`
--
ALTER TABLE `profile_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_master`
--
ALTER TABLE `project_master`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sns_master`
--
ALTER TABLE `sns_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_master`
--
ALTER TABLE `team_master`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `testi_master`
--
ALTER TABLE `testi_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
