-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 06:53 AM
-- Server version: 5.7.35
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samplepr_fleadb`
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
  `bann_mod` int(11) NOT NULL DEFAULT '0',
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_master`
--

INSERT INTO `banner_master` (`id`, `ban_name`, `ban_pic`, `ban_order`, `bann_mod`, `status`) VALUES
(1, 'Banner 01', 'ban1.jpg', 1, 0, 'ACTIVE'),
(2, 'Banner 02', 'ban2.jpg', 2, 0, 'ACTIVE'),
(3, 'Banner 03', 'ban3.jpg', 3, 0, 'ACTIVE'),
(4, 'Banner 04', 'ban4.jpg', 4, 0, 'DELETE'),
(5, '', 'Aerial View.jpg', 4, 0, 'DELETE'),
(6, '', 'IMG_3102.JPG', 5, 0, 'ACTIVE'),
(7, '', 'IMG_3116.jpg', 6, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE `blog_master` (
  `blog_id` int(11) NOT NULL,
  `blog_cust` int(11) NOT NULL,
  `blog_date` varchar(20) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_status` varchar(25) NOT NULL DEFAULT 'Pending',
  `blog_visit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand_master`
--

CREATE TABLE `brand_master` (
  `id` int(11) NOT NULL,
  `brand_name` text NOT NULL,
  `brand_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `cart_enter_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalogue_master`
--

CREATE TABLE `catalogue_master` (
  `id` int(11) NOT NULL,
  `cata_name` text NOT NULL,
  `cata_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cert_master`
--

CREATE TABLE `cert_master` (
  `id` int(11) NOT NULL,
  `cert_name` text NOT NULL,
  `cert_pic` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cert_master`
--

INSERT INTO `cert_master` (`id`, `cert_name`, `cert_pic`, `status`) VALUES
(1, 'test', 'invironmental-issues.jpg', 'ACTIVE');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_master`
--

INSERT INTO `cms_master` (`sl`, `cms_tag`, `cms_dtls`, `cms_pic`, `status`) VALUES
(1, 'aboutus', '<p><strong>The Northern Woods &ndash; Core area of Silence</strong>, is your dream destination in Chilapata, District Alipurduar, in Dooars area of West Bengal. The resort is ideally located in the pristine calm lap of nature, with river Baniya of Prosenjit Chatterjee&rsquo;s block buster movie &ldquo;Moner manush&rdquo; on one side and lush green Tea Garden on the other. 90% of the area owned by the resort is open and is decorated with undulating green lush lawns with beautiful plants and a water body.</p>\r\n\r\n<p>The resort has enough space for free parking within the premises, with separate accommodation for drivers. Along with this, the resort has a separate Multi-cuisine Restaurant which servers mouth-watering delicacies. Conference facilities for the corporates is also available.</p>\r\n', '249670932_164348619240214_2044119194230600458_n.jpg', 'ACTIVE'),
(7, 'foods', '<p>Tasty local cuisine available for new experience</p>\r\n', 'bum3yb9ad16spzbwm5wt.jpg', 'INACTIVE'),
(8, 'rooms', '<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. In lobortis, ante interdum vehicula pretium, dui enim porta lectus, non euismod tortor ante eu libero. Aenean blandit luctus tortor vitae interdum. <strong>Etiam egestas</strong> purus lorem, eget tempus odio placerat id. Integer eu gravida nibh.</p>\r\n', '', 'INACTIVE'),
(9, 'slogan', '<p>Let every children forced to be on street have education.</p>\r\n', '', 'INACTIVE'),
(2, 'mission', '<p><em>We look forward for your support and assure our best services at all time.</em></p>\r\n', '', 'INACTIVE'),
(3, 'home', '<p>&nbsp;</p>\r\n\r\n<p><strong><em>&quot;Dear Guest </em></strong></p>\r\n\r\n<p><strong><em>We are pleased to offer a brief note on our property along with Room rates and Terms and condition of Booking.</em></strong></p>\r\n\r\n<p><strong><em>We look forward for your support and assure our best services at all time.&quot;</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'ACTIVE'),
(4, 'vision', '<p><em>We look forward for your support and assure our best services at all time.</em></p>\r\n', '', 'ACTIVE'),
(10, 'Privacy Policy', '<p>PRIVACY POLICY<br />\r\nSishu kalyana swadhikara kendra will keep the user information collected through its website ((http://sishukalyanaswadhikarakendra.org) strictly confidential. It will not be shared with any external agencies or individuals. However, Child Help Foundation will keep the users updated about its happenings and developments through bulletins and newsletters with an option of not to subscribe the same.</p>\r\n\r\n<p>While forwarding a donation for Sishu kalyana swadhikara kendra the well-wishers have to submit a few personal information as it would help us ensuring genuine contributions:</p>\r\n\r\n<p>1. Your name</p>\r\n\r\n<p>2. Your email and mailing address</p>\r\n\r\n<p>3. Your telephone number</p>\r\n\r\n<p>4. Your payment processing details</p>\r\n\r\n<p>5. Any other data as Sishu kalyana swadhikara kendra may require</p>\r\n\r\n<p>You will be asked to provide your personal information when making donations, making purchases at our on-line Gift Shop, requesting communications, applying for a job with Child Help Foundation and/or in connection with other Child Help Foundation business (whether it is via the website, e-mail, direct mail or telephone communications).</p>\r\n\r\n<p>All relevant information collected through Child Help Foundation website is handled and used by internal and authorized officials only.</p>\r\n\r\n<p>General browsing of Child Help Foundation website is anonymous and it does not register the user&rsquo;s personal information except the time, date and place of visits and the name of internet service provider. However, this information is not shared by the organization with external agencies.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra is not liable for any form of loss, damage or harm caused to the users as a result of misuse of personal information by a third party, tracked through a liked site of Sishu kalyana swadhikara kendra or otherwise, and who is not an employee of Sishu kalyana swadhikara kendra.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra holds the discretion to modify the terms and conditions under privacy policy.</p>\r\n\r\n<p>Contents published in Sishu kalyana swadhikara kendra website including graphics, write-ups, logos, pictures, images and software are the property of Child Help Foundation and its partners or associates and the same is protected. Users must seek formal permission before using any of this information and any misuse of the same will automatically hold the (mis)user liable.</p>\r\n\r\n<p>Sishu kalyana swadhikara kendra has a layered security in our systems and only designated employees have access to hard copies of your personal information.</p>\r\n\r\n<p>Personal information will be shared internally at Sishu kalyana swadhikara kendra to complete your donations or purchasing transactions, to contact you about our on-going work, discuss employment opportunities and ways that you can further support our efforts to help children in need. Your personal information will also be used to provide you access to the various sections of our website that have been personalized for your needs. Sishu kalyana swadhikara kendra will never intentionally share your e-mail addresses, phone numbers or financial information.</p>\r\n', '', 'ACTIVE'),
(11, 'Refund Policy', '<p><span class=\"marker\">Lorem ipsum dolor sit amet,</span>&nbsp;<strong>consectetur adipiscing</strong>&nbsp;elit. In lobortis, ante interdum vehicula pretium, dui enim porta lectus, non euismod tortor ante eu libero. Aenean blandit luctus tortor vitae interdum.&nbsp;<strong>Etiam egestas</strong>&nbsp;purus lorem, eget tempus odio placerat id. Integer <strong>eu gravida nibh</strong>.</p>\r\n', '', 'ACTIVE'),
(12, 'Terms and Conditions', '<p>TERMS AND CONDITIONS<br />\r\nThe terms and conditions regarding using Sishu kalyana swadhikara kendra website (http://sishukalyanaswadhikarakendra.org) are mentioned below.</p>\r\n\r\n<p>1. Sishu kalyana swadhikara kendra holds the discretion to modify the users&rsquo; terms and conditions if need be. However it shall be effective within a month of posting it in this section whenever it happens.</p>\r\n\r\n<p>2. This is an agreement between Sishu kalyana swadhikara kendra and the user/visitor to the website. This Agreement governs the use of Sishu kalyana swadhikara kendra web site, which includes contents like text, information, images as well as all services available to the users through the same.</p>\r\n\r\n<p>3. Sishu kalyana swadhikara kendra may modify the terms and conditions on this site. You agree to review this agreement periodically to ensure you are aware of any changes.</p>\r\n\r\n<p>4. The services are available only to individuals (excluding minors) who are eligible for legally binding contracts under applicable law</p>\r\n\r\n<p>5. The content consists of copyrighted works proprietary to Sishu kalyana swadhikara kendra or to partners/ third parties who have provided us with content. Personal Information of User</p>\r\n\r\n<p>6. In order to enable Sishu kalyana swadhikara kendra to use the personal information you supply us with, so that we are not violating any rights you might have in that information, you agree to grant us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub licensable (through multiple tiers) right to exercise the copyright and publicity rights (but no other rights) you have in personal information, in any media now known or not currently known, with respect to personal information. Sishu kalyana swadhikara kendra will only use personal information in accordance with our Privacy Policy.</p>\r\n\r\n<p>7. The site &amp; certain services will be accessible to users of the website as identified in the Registration Forms or relevant sections. All user information provided to us, including without limitation the information on the Registration Forms, must be current, accurate, and complete. If we at any time discover any error or omission in the information you provide to us, we may, at our option, terminate the right to access and use the site by any user. The user is responsible for the acts or omissions by the use of the site, and for any damages incurred by the user as a result thereof.</p>\r\n\r\n<p>8. You as the user and Sishu kalyana swadhikara kendra are independent contractors, and no agency, partnership, joint venture, employee-employer, franchiser-franchisee or other business relationship is intended or created by this Agreement.</p>\r\n\r\n<p>9. The Donation online will go directly to buy the item selected plus the costs of running this fundraising campaign.</p>\r\n\r\n<p>10. Should Sishu kalyana swadhikara kendra raise over our target for a particular appeal then we will use your donation to help other vulnerable children around the world wherever the need is greatest.</p>\r\n\r\n<p>11. Contributions must be your own, they must be civil and tasteful, they must not contain any unlawful or objectionable content and they must not infringe the law.</p>\r\n\r\n<p>12. Sishu kalyana swadhikara kendra owns all worldwide rights, titles and interests in and to the site. You may create a bookmark in your browser to the home page of the website.</p>\r\n\r\n<p>13. Sishu kalyana swadhikara kendra is dedicated to protecting the privacy of its users.</p>\r\n\r\n<p>14. Sishu kalyana swadhikara kendra will not be responsible or liable to any user of the website or its services for any direct, compensatory, indirect, incidental, consequential, special, and exemplary or punitive damages for any reason such as use of content, services, errors, inaccuracies, omissions, defects, or any other causes.</p>\r\n\r\n<p>15. The user has to agree to indemnify and hold us and our subsidiaries, affiliates, officers, directors, agents, and employees, harmless from any claim or demand, including reasonable attorneys arising from or incurred as a result of, or in any manner related to</p>\r\n\r\n<p>16. Any controversy or claim arising out of or relating to this agreement or our services shall be settled by binding arbitration in accordance with the commercial arbitration rules applicable to New Delhi. Any such controversy or claim shall be arbitrated on an individual basis, and shall not be consolidated in any arbitration with any claim or controversy of any other party. The arbitration shall be conducted at Mumbai, India and judgment on the arbitration award may be entered into any court having jurisdiction thereof. Either the user or Child Help Foundation may seek any interim or preliminary relief from a court of competent jurisdiction at Mumbai, India necessary to protect the rights or property of the user or Sishu kalyana swadhikara kendra pending the completion of arbitration</p>\r\n\r\n<p>17. Sishu kalyana swadhikara kendra does not guarantee continuous, uninterrupted or secure access to our services, and operation of our site may be interfered with by numerous factors outside of our control. Our failure to act with respect to a breach by the user or others does not waive our right to act with respect to subsequent or similar breaches. This Agreement sets forth the entire understanding and agreement between us with respect to the subject matter hereof. 18. We as a merchant shall be under no liability whatsoever in respect of any loss or damage arising directly or indirectly out of the decline of authorization for any Transaction, on Account of the Cardholder having exceeded the preset limit mutually agreed by us with our acquiring bank from time to time&rdquo;</p>\r\n', '', 'ACTIVE'),
(13, 'attraction', '<ol>\r\n	<li><em><strong>Fishing </strong>:- You can do fishing in River Baniya, which flows by the side of the resort. There are varied types of small fishes in the river, and they come to eat mosses and fungus which develops on the boulder used for the embankment for protecting the resort.</em></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 'fishing.jpg', 'INACTIVE'),
(14, 'route', '<p><em><strong>By Train: - Chilapata is well connected with rail network. Hashimara on the famous Siliguri - Sevok track is just 18Km away. Alipurduar on the main NJP - Guwahati rail track is just 28km. Taxis are available at both the stations, which can take you to us within 45 minutes time.</strong></em></p>\r\n\r\n<p><em><strong>By Air:- The nearest Airport is Bagdogra, which is 140km from Chilapata. By car it will take 3 hrs 30 minutes to reach us.</strong></em></p>\r\n\r\n<p><em><strong>By Road: - &nbsp;&nbsp;Chilapata is 110Km from Siliguri on the NH 31, towards Guwahati</strong></em></p>\r\n', 'BL22THINKRAIL.jpg', 'INACTIVE'),
(15, 'mission', '<p>1. Confirmation of Room booking is subject to 50% of the total payable amount.</p>\r\n\r\n<p>2. Cancellation charge before 45 from the date of booking is ZERO.</p>\r\n\r\n<p>3. Cancellation charge within 44 days to 30 days of booking date is 25% of Booking Amount.</p>\r\n\r\n<p>4. Cancellation charge within 29 days to 15 days of booking date is 50% of Booking Amount.</p>\r\n\r\n<p>5. Cancellation charge within 14 days to 7 days of booking date is 75% of the Booking Amount.</p>\r\n\r\n<p>6. Cancellation charge within 6 days of booking date is 100% of Booking Amount.</p>\r\n', '', 'ACTIVE');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`id`, `address`, `contact_no`, `email`, `mobile_no`, `skype`) VALUES
(1, 'Uttar Chokowakheti, Chilapata, District- Alipurduar, West Bengal, India, Pin- 736204', '', 'ariyansgrp@gmail.com ', '+91-9874734769', '');

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

CREATE TABLE `content_master` (
  `id` int(11) NOT NULL,
  `page` text CHARACTER SET latin1 NOT NULL,
  `title` text CHARACTER SET latin1 NOT NULL,
  `details` text CHARACTER SET latin1 NOT NULL,
  `pic` text CHARACTER SET latin1 NOT NULL,
  `url` text CHARACTER SET latin1 NOT NULL,
  `status` varchar(25) CHARACTER SET latin1 NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `cust_pass` varchar(50) NOT NULL DEFAULT '123456',
  `cust_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cust_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `order_enter_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_master`
--

CREATE TABLE `photo_master` (
  `sl` int(11) NOT NULL,
  `photo_name` varchar(200) NOT NULL,
  `photo_desc` text NOT NULL,
  `photo_pic` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_master`
--

INSERT INTO `photo_master` (`sl`, `photo_name`, `photo_desc`, `photo_pic`, `status`) VALUES
(1, 'test', 'test test', '2612202107502.jpg', 'ACTIVE'),
(2, 'test 02', 'test test 02', '26122021083615.jpg', 'ACTIVE'),
(3, '', '', '271220210725banner1.jpg', 'DELETE');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pro_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_type` text NOT NULL,
  `product_price` text NOT NULL,
  `product_bulk_qty` double NOT NULL DEFAULT '0',
  `product_bulk_price` double NOT NULL DEFAULT '0',
  `product_size` text NOT NULL,
  `product_color` text NOT NULL,
  `product_details` text NOT NULL,
  `product_features` varchar(1000) NOT NULL,
  `product_category` text NOT NULL,
  `new` text NOT NULL,
  `sell_off` text NOT NULL,
  `best_seller` text NOT NULL,
  `pro_pic` text NOT NULL,
  `model_pro_pic` text NOT NULL,
  `model_pro_pic1` text NOT NULL,
  `model_pro_pic2` text NOT NULL,
  `model_pro_pic3` text NOT NULL,
  `model_pro_pic4` text NOT NULL,
  `status` text NOT NULL,
  `product_video` varchar(100) NOT NULL,
  `product_pdf` text NOT NULL,
  `prod_brand` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `status` varchar(15) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_master`
--

INSERT INTO `profile_master` (`id`, `comp_name`, `comp_logo`, `comp_favicon`, `comp_app_bgcolor`, `comp_slogan`, `status`) VALUES
(1, 'Flea India', 'logo1.png', 'favicon.png', '#f0e0e0', '', 'ACTIVE');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`serv_id`, `serv_name`, `serv_details`, `serv_pic`, `serv_rate`, `serv_status`) VALUES
(1, 'DOUBLE BEDDED NON-AC', 'NICE AND BEAUTIFUL:  each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 1800.00, 'ACTIVE'),
(2, 'DELEUX DOUBLE BEDDED NON-AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 2250.00, 'ACTIVE'),
(3, 'DELEUX DOUBLE BEDDED AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 2750.00, 'ACTIVE'),
(4, 'DELUX 4 BEDDED NON-AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 3000.00, 'ACTIVE'),
(5, 'DELUX 4 BEDDED AC', ' Each with private balconies facing either the river or the garden. Each rooms have 32inch TV with Electric Kettle, 24 hours Hot and Cold water and 24 hours power back-up.', '', 3500.00, 'ACTIVE');

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
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sns_master`
--

INSERT INTO `sns_master` (`id`, `fb_link`, `twitter_link`, `youtube_link`, `map_link`, `linkdin_link`, `indiamart_link`, `tradeindia_link`, `alibaba_link`, `status`) VALUES
(2, 'https://www.facebook.com/northernwoodsresort/', 'http://twitter.com', 'http://youtube.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14276.097292149925!2d89.405775!3d26.5514865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ce3aaa9552a09ae!2sThe%20Northern%20Woods!5e0!3m2!1sen!2sin!4v1641709891014!5m2!1sen!2sin', '', '', '', '', 'ACTIVE');

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
  `team_type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_master`
--

INSERT INTO `team_master` (`team_id`, `team_name`, `team_desig`, `team_details`, `team_pic`, `team_status`, `team_type`) VALUES
(1, 'ABC', 'FGFGFGN', 'Field Worker', '12.jpg', 'ACTIVE', 1),
(2, 'TEAM-2', 'We all know ', 'However, teamwork is a challenge ', '14.jpg', 'ACTIVE', 1),
(3, 'Samir ', 'In order for a group', 'A working group is nothing ', 'WhatsApp Image 2021-12-27 at 11.54.41 AM.jpeg', 'ACTIVE', 2);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testi_master`
--

INSERT INTO `testi_master` (`id`, `testi_name`, `testi_details`, `testi_pic`, `status`) VALUES
(1, 'Apurba Talukdar', 'If someone wants to enjoy a serene and and soulful time... this place is highly recommended... tea gardens/ Forest/ wildlife sightings... if anything in these is what you are looking for then this is the place you are looking for... great place to enjoy the whispers of nature... and it is must to mention that the service/ food quality is nice... wish you a nice barbeque and campfire beside Bania river....He is Designer', 'AT.jpg', 'ACTIVE'),
(2, 'Raj Kumar Som', 'Located 1km from chilapata jungle safari gate and in the bank of Bania river. Well furnished, they will provide all support to the guest. Well behaved staff and food is above average.e is a Law Student.', 'unnamed.png', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `unit_master`
--

CREATE TABLE `unit_master` (
  `unit_id` int(11) NOT NULL,
  `unit_name` text NOT NULL,
  `unit_sign` varchar(20) NOT NULL,
  `unit_status` varchar(20) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Indexes for table `offer_master`
--
ALTER TABLE `offer_master`
  ADD PRIMARY KEY (`offer_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand_master`
--
ALTER TABLE `brand_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `main_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_master`
--
ALTER TABLE `offer_master`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo_master`
--
ALTER TABLE `photo_master`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testi_master`
--
ALTER TABLE `testi_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
