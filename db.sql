-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2019 at 11:57 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prntpage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocked`
--

CREATE TABLE `blocked` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `blocked_uid` int(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bnbs`
--

CREATE TABLE `bnbs` (
  `id` int(30) NOT NULL,
  `listing_uid` int(15) NOT NULL,
  `listing_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` text NOT NULL,
  `listing_description` longtext NOT NULL,
  `name` text NOT NULL,
  `listing_nightly` int(11) DEFAULT NULL,
  `listing_main_photo` text NOT NULL,
  `listing_thumbnail` text,
  `listing_photo1` text,
  `listing_photo2` text,
  `listing_photo3` text,
  `listing_photo4` text,
  `listing_photo5` text,
  `listing_photo6` text,
  `listing_photo7` text,
  `listing_photo8` text,
  `listing_photo9` text,
  `listing_photo10` text,
  `listing_photo11` text,
  `listing_photo12` text,
  `listing_photo13` text,
  `listing_photo14` text,
  `listing_photo15` text,
  `listing_photo16` text,
  `listing_photo17` text,
  `listing_photo18` text,
  `listing_photo19` text,
  `listing_photo20` text,
  `listing_bedrooms` int(5) NOT NULL,
  `listing_bathrooms` int(5) NOT NULL,
  `listing_add1` varchar(255) DEFAULT NULL,
  `listing_add2` varchar(255) DEFAULT NULL,
  `listing_apt` text,
  `listing_city` varchar(255) DEFAULT NULL,
  `listing_state` varchar(255) DEFAULT NULL,
  `listing_zip` varchar(25) DEFAULT NULL,
  `listing_country` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `listing_contact_email` varchar(255) DEFAULT NULL,
  `listing_contact_phone` text,
  `listing_rating` int(2) DEFAULT NULL,
  `listing_reviews` varchar(255) DEFAULT NULL,
  `listing_cat` text NOT NULL,
  `instant-book-allow` tinyint(1) DEFAULT NULL,
  `cash-arrival` tinyint(1) DEFAULT NULL,
  `credit-card-arrival` tinyint(1) DEFAULT NULL,
  `instant-book` tinyint(1) DEFAULT NULL,
  `non-refundable` tinyint(1) DEFAULT NULL,
  `elevator` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `family` tinyint(1) DEFAULT NULL,
  `gym` tinyint(1) DEFAULT NULL,
  `free_parking` tinyint(1) DEFAULT NULL,
  `hot_tub` tinyint(1) DEFAULT NULL,
  `buzzer` tinyint(1) DEFAULT NULL,
  `heating` tinyint(1) DEFAULT NULL,
  `hangers` tinyint(1) DEFAULT NULL,
  `iron` tinyint(1) DEFAULT NULL,
  `laptop` tinyint(1) DEFAULT NULL,
  `smoking` tinyint(1) DEFAULT NULL,
  `420_friendly` tinyint(1) DEFAULT NULL,
  `hair_dryer` tinyint(1) DEFAULT NULL,
  `dryer` tinyint(1) DEFAULT NULL,
  `fireplace` tinyint(1) DEFAULT NULL,
  `kitchen` tinyint(1) DEFAULT NULL,
  `essential` tinyint(1) DEFAULT NULL,
  `pool` tinyint(1) DEFAULT NULL,
  `tv` tinyint(1) DEFAULT NULL,
  `cable` tinyint(1) DEFAULT NULL,
  `paid_parking` tinyint(1) DEFAULT NULL,
  `free_street_parking` tinyint(1) DEFAULT NULL,
  `handicap` tinyint(1) DEFAULT NULL,
  `private_entrance` tinyint(1) DEFAULT NULL,
  `breakfast` tinyint(1) DEFAULT NULL,
  `doorman` tinyint(1) DEFAULT NULL,
  `ac` tinyint(1) DEFAULT NULL,
  `events` tinyint(1) DEFAULT NULL,
  `pets` tinyint(1) DEFAULT NULL,
  `washer` tinyint(1) DEFAULT NULL,
  `listing_marker_lat` double DEFAULT NULL,
  `listing_marker_lng` double DEFAULT NULL,
  `listing_map_hide` tinyint(1) DEFAULT NULL,
  `amenities` text,
  `published` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) DEFAULT '0',
  `cancel_policy` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bnbs`
--

INSERT INTO `bnbs` (`id`, `listing_uid`, `listing_created`, `type`, `listing_description`, `name`, `listing_nightly`, `listing_main_photo`, `listing_thumbnail`, `listing_photo1`, `listing_photo2`, `listing_photo3`, `listing_photo4`, `listing_photo5`, `listing_photo6`, `listing_photo7`, `listing_photo8`, `listing_photo9`, `listing_photo10`, `listing_photo11`, `listing_photo12`, `listing_photo13`, `listing_photo14`, `listing_photo15`, `listing_photo16`, `listing_photo17`, `listing_photo18`, `listing_photo19`, `listing_photo20`, `listing_bedrooms`, `listing_bathrooms`, `listing_add1`, `listing_add2`, `listing_apt`, `listing_city`, `listing_state`, `listing_zip`, `listing_country`, `address`, `lat`, `lng`, `listing_contact_email`, `listing_contact_phone`, `listing_rating`, `listing_reviews`, `listing_cat`, `instant-book-allow`, `cash-arrival`, `credit-card-arrival`, `instant-book`, `non-refundable`, `elevator`, `internet`, `wifi`, `family`, `gym`, `free_parking`, `hot_tub`, `buzzer`, `heating`, `hangers`, `iron`, `laptop`, `smoking`, `420_friendly`, `hair_dryer`, `dryer`, `fireplace`, `kitchen`, `essential`, `pool`, `tv`, `cable`, `paid_parking`, `free_street_parking`, `handicap`, `private_entrance`, `breakfast`, `doorman`, `ac`, `events`, `pets`, `washer`, `listing_marker_lat`, `listing_marker_lng`, `listing_map_hide`, `amenities`, `published`, `deleted`, `cancel_policy`) VALUES
(11, 2, '2019-02-02 00:16:34', 'Hostel', 'The Stuart St BnB and Tourist\'s Hostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a fully stocked kitchen for you to eat or drink, excellent Nespresso Coffee and Colorado herbal teas, both complimentary, a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, safe environment. Clean towels, and soap is also available. We have parking onsite and around the corner on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a stocked kitchen for you to eat at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the hostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside or in the garage, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Stuart St BnB and Tourist\'s Hostel', 20, 'bnb-main-11-Webp.net-resizeimage (13).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 2, '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '300 Stuart Street, Denver, CO, United States, 80219', 39.72154920000001, -105.042979, 'portellialexander@gmail.com', '', NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(21, 2, '2019-02-07 18:19:54', 'Hostel', 'The Stuart St BnB and Tourist\'s Hostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a fully stocked kitchen for you to eat or drink, excellent Nespresso Coffee and Colorado herbal teas, both complimentary, a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, safe environment. Clean towels, and soap is also available. We have parking onsite and around the corner on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a stocked kitchen for you to eat at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the hostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside or in the garage, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Stuart St BnB And Tourist\'s Hostel', 20, 'bnb-main-21-Webp.net-resizeimage (13).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 2, '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '300 Stuart Street, Denver, CO, United States, 80219', 39.72154920000001, -105.042979, 'Portellialexander@gmail.com', '', NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(32, 2, '2019-02-22 02:10:51', 'Hostel', 'The Stuart St BnB and Tourist\'s Hostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a fully stocked kitchen for you to eat or drink, excellent Nespresso Coffee and Colorado herbal teas, both complimentary, a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, safe environment. Clean towels, and soap is also available.\r\nWe have parking onsite and around the corner on the street.\r\nCheck in is between 12pm and 12 midnight. Check out is by 12 noon sharp. \r\nWe will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person.\r\nPlease provide a valid contact number when you book. Please provide a check in time when you book.\r\nWe provide a stocked kitchen for you to eat at, but please do all dishes when finished with them. \r\nYou can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am.\r\nSame with lights on inside the house.\r\nplease remove your shoes at the entrance to the hostel.\r\nThere\'s no illegal drug usage allowed in the property. You can smoke marijuana outside or in the garage, as it is legal per Colorado law.  Same rules for smoking with cigarettes on our property apply.\r\nIf you buy your own food, please put it in a bag and label it, so other guests no not to eat it.\r\nAnything my cohost or I say, please follow. ', 'Stuart St BnB And Tourist\'s Hostel', 20, 'bnb-main-32-Webp.net-resizeimage (13).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 2, '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '300 Stuart Street, Denver, CO, United States, 80219', 39.72154920000001, -105.042979, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(33, 2, '2019-03-11 20:46:37', 'Condo', 'The Rocky Mountain Hideaway Microhostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Rocky Mountain Hideaway Microhostel ', 20, 'bnb-main-33-g80 6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', 'G80', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(34, 2, '2019-03-11 20:49:04', 'Condo', 'The Rocky Mountain Hideaway Microhostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Rocky Mountain Hideaway Microhostel ', 20, 'bnb-main-34-123_2.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', 'G80', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(35, 2, '2019-03-11 20:52:47', 'Condo', 'The Rocky Mountain Hideaway Microhostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Rocky Mountain Hideaway Microhostel ', 20, 'bnb-main-35-123_1.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', 'G80', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(36, 2, '2019-03-11 20:57:25', 'Condo', 'The Rocky Mountain Hideaway Microhostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Rocky Mountain Hideaway Microhostel ', 20, 'bnb-main-36-20180628_122249.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', 'G80', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(37, 2, '2019-03-11 20:58:48', 'Condo', 'The Rocky Mountain Hideaway Microhostel is a cool hostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Rocky Mountain Hideaway Microhostel ', 20, 'bnb-main-37-g80 11..jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', '', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(38, 2, '2019-03-11 21:08:16', 'Condo', 'The Cozy Microhostel is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Cozy Microhostel at our Apartment', 20, 'bnb-main-38-IMG-20180706-WA0006.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', 'C30', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(39, 2, '2019-03-11 21:09:49', 'Condo', 'The Cozy Microhostel is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Cozy Microhostel at our apartment', 20, 'bnb-main-39-c unit 15.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'C30', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(40, 2, '2019-03-11 21:11:01', 'Condo', 'The Cozy Microhostel is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Cozy Microhostel at our Apartment', 20, 'bnb-main-40-IMG-20180706-WA0009.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'C30', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(41, 2, '2019-03-11 21:14:13', 'Condo', 'The Cozy Microhostel is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Cozy Microhostel at our Apartment', 20, 'bnb-main-41-IMG-20180706-WA0011.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'C30', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(42, 2, '2019-03-12 07:58:07', 'Condo', 'The Denver Traveler\'s Hub is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Denver Traveler\'s Hub', 20, 'bnb-main-42-Resized_20180502_171302.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'F63', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(43, 2, '2019-03-12 07:59:45', 'Condo', 'The Denver Traveler\'s Hub is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Denver Traveler\'s Hub', 20, 'bnb-main-43-Resized_20180502_173139.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'F63', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(44, 2, '2019-03-12 08:00:57', 'Condo', 'The Denver Traveler\'s Hub is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Denver Traveler\'s Hub', 20, 'bnb-main-44-Resized_20180502_170850.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'F63', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, ''),
(45, 2, '2019-03-12 08:02:14', 'Condo', 'The Denver Traveler\'s Hub is a cool microhostel for the budget traveler and international adventurer. We\'ve got a washer/dryer with tide pod detergents available for use, Fast wifi, high speed fiber internet, and a very clean, a kitchen, safe environment. Clean towels, and soap is also available. We have parking on the street. Check in is between 12pm and 12 midnight. Check out is by 12 noon sharp. We will not remind you to renew or ask if you\'re renewing on your day up. If you do not renew by 12, your bed will go to another person. Please provide a valid contact number when you book. Please provide a check in time when you book. We provide a kitchen for you to cook at, but please do all dishes when finished with them. You can come and go as you like. There\'s no curfew. But the kitchen is off limits to cooking from 10pm to 6am. Same with lights on inside the house. please remove your shoes at the entrance to the microhostel. There\'s no illegal drug usage allowed in the property. You can smoke marijuana outside on the porch, as it is legal per Colorado law. Same rules for smoking with cigarettes on our property apply. If you buy your own food, please put it in a bag and label it, so other guests no not to eat it. Anything my cohost or I say, please follow.', 'Denver Traveler\'s Hub', 20, 'bnb-main-45-Resized_20180502_171728(0).jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '9700', 'East Iliff Avenue', 'F63', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, NULL, NULL, NULL, NULL, 'Shared Room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `subject` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `status`, `subject`) VALUES
(7, 'test\r\n', 1, 'test'),
(8, 'test\r\n', 1, 'test'),
(9, 'test\r\n', 1, 'test'),
(10, 'test\r\n', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dislikes_reply`
--

CREATE TABLE `dislikes_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flagged_post`
--

CREATE TABLE `flagged_post` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flagged_reply`
--

CREATE TABLE `flagged_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `follower_id` int(15) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `uid`, `follower_id`, `created`) VALUES
(40, 1, 2, '2019-02-28 08:03:44'),
(35, 2, 118, '2019-02-27 15:07:44'),
(34, 115, 1, '2019-02-22 21:45:52'),
(33, 113, 1, '2019-02-22 20:46:30'),
(32, 1, 113, '2019-02-22 20:46:19'),
(92, 116, 1, '2019-03-20 20:26:39'),
(29, 1, 115, '2019-02-22 19:21:08'),
(28, 115, 1, '2019-02-22 18:27:57'),
(27, 1, 116, '2019-02-22 18:27:02'),
(41, 108, 2, '2019-02-28 08:06:56'),
(42, 1, 120, '2019-02-28 08:28:01'),
(43, 120, 2, '2019-02-28 08:28:01'),
(44, 1, 121, '2019-02-28 08:31:55'),
(45, 2, 121, '2019-02-28 08:31:55'),
(46, 8, 1, '2019-02-28 08:56:29'),
(47, 8, 1, '2019-02-28 08:58:23'),
(48, 118, 2, '2019-02-28 20:35:42'),
(49, 108, 2, '2019-03-01 01:11:49'),
(50, 2, 108, '2019-03-01 01:12:17'),
(51, 1, 113, '2019-03-05 08:08:11'),
(52, 113, 1, '2019-03-05 08:14:46'),
(53, 1, 122, '2019-03-05 20:48:34'),
(54, 2, 122, '2019-03-05 20:48:34'),
(55, 1, 123, '2019-03-07 06:58:48'),
(56, 2, 123, '2019-03-07 06:58:48'),
(57, 1, 124, '2019-03-09 03:53:43'),
(58, 2, 124, '2019-03-09 03:53:43'),
(59, 1, 125, '2019-03-09 04:01:04'),
(60, 2, 125, '2019-03-09 04:01:04'),
(61, 1, 126, '2019-03-09 04:16:27'),
(62, 2, 126, '2019-03-09 04:16:27'),
(63, 1, 116, '2019-03-10 03:42:05'),
(91, 116, 1, '2019-03-20 20:26:35'),
(65, 1, 127, '2019-03-10 22:57:56'),
(66, 2, 127, '2019-03-10 22:57:56'),
(67, 1, 128, '2019-03-12 04:26:07'),
(68, 2, 128, '2019-03-12 04:26:07'),
(69, 1, 129, '2019-03-15 23:18:48'),
(70, 2, 129, '2019-03-15 23:18:48'),
(71, 1, 130, '2019-03-15 23:53:42'),
(72, 2, 130, '2019-03-15 23:53:42'),
(73, 1, 131, '2019-03-18 03:08:58'),
(74, 2, 131, '2019-03-18 03:08:58'),
(75, 1, 132, '2019-03-18 05:34:55'),
(76, 2, 132, '2019-03-18 05:34:55'),
(79, 1, 133, '2019-03-20 19:25:16'),
(80, 2, 133, '2019-03-20 19:25:16'),
(95, 2, 134, '2019-03-21 01:07:07'),
(94, 1, 134, '2019-03-21 01:07:07'),
(93, 2, 1, '2019-03-20 20:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `uid` int(15) NOT NULL,
  `name` text,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `address` text,
  `disc` text,
  `main_pic` text,
  `cat` text,
  `type` text,
  `delivery` text,
  `del_fee` text,
  `price_range` text,
  `menu` longtext,
  `add_info` text,
  `food_delivery_area` text,
  `food_menu_cat1` text,
  `food_menu_cat2` text,
  `food_menu_cat3` text,
  `food_menu_cat4` text,
  `food_menu_cat5` text,
  `food_menu_cat6` text,
  `food_menu_cat7` text,
  `food_menu_cat8` text,
  `food_menu_cat9` text,
  `food_menu_cat10` text,
  `food_menu_cat11` text,
  `food_menu_cat12` text,
  `food_menu_cat13` text,
  `food_menu_cat14` text,
  `food_menu_cat15` text,
  `food_menu_cat16` text,
  `food_menu_cat17` text,
  `food_menu_cat18` text,
  `food_menu_cat19` text,
  `food_menu_cat20` text,
  `food_menu_item1_name` text,
  `food_menu_item1_pic` text,
  `food_menu_item1_disc` text,
  `food_menu_item1_price` double DEFAULT NULL,
  `food_menu_item1_max_quantity` double DEFAULT NULL,
  `food_menu_item2_name` text,
  `food_menu_item2_pic` text,
  `food_menu_item2_disc` text,
  `food_menu_item2_price` double DEFAULT NULL,
  `food_menu_item2_max_quantity` double DEFAULT NULL,
  `food_menu_item3_name` text,
  `food_menu_item3_pic` text,
  `food_menu_item3_disc` text,
  `food_menu_item3_price` double DEFAULT NULL,
  `food_menu_item3_max_quantity` double DEFAULT NULL,
  `food_menu_item4_name` text,
  `food_menu_item4_pic` text,
  `food_menu_item4_disc` text,
  `food_menu_item4_price` double DEFAULT NULL,
  `food_menu_item4_max_quantity` double DEFAULT NULL,
  `food_menu_item5_name` text,
  `food_menu_item5_pic` text,
  `food_menu_item5_disc` text,
  `food_menu_item5_price` double DEFAULT NULL,
  `food_menu_item5_max_quantity` double DEFAULT NULL,
  `food_menu_item6_name` text,
  `food_menu_item6_pic` text,
  `food_menu_item6_disc` text,
  `food_menu_item6_price` double DEFAULT NULL,
  `food_menu_item6_max_quantity` double DEFAULT NULL,
  `food_menu_item7_name` text,
  `food_menu_item7_pic` text,
  `food_menu_item7_disc` text,
  `food_menu_item7_price` double DEFAULT NULL,
  `food_menu_item7_max_quantity` double DEFAULT NULL,
  `food_menu_item8_name` text,
  `food_menu_item8_pic` text,
  `food_menu_item8_disc` text,
  `food_menu_item8_price` double DEFAULT NULL,
  `food_menu_item8_max_quantity` double DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `uid`, `name`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `lat`, `lng`, `address`, `disc`, `main_pic`, `cat`, `type`, `delivery`, `del_fee`, `price_range`, `menu`, `add_info`, `food_delivery_area`, `food_menu_cat1`, `food_menu_cat2`, `food_menu_cat3`, `food_menu_cat4`, `food_menu_cat5`, `food_menu_cat6`, `food_menu_cat7`, `food_menu_cat8`, `food_menu_cat9`, `food_menu_cat10`, `food_menu_cat11`, `food_menu_cat12`, `food_menu_cat13`, `food_menu_cat14`, `food_menu_cat15`, `food_menu_cat16`, `food_menu_cat17`, `food_menu_cat18`, `food_menu_cat19`, `food_menu_cat20`, `food_menu_item1_name`, `food_menu_item1_pic`, `food_menu_item1_disc`, `food_menu_item1_price`, `food_menu_item1_max_quantity`, `food_menu_item2_name`, `food_menu_item2_pic`, `food_menu_item2_disc`, `food_menu_item2_price`, `food_menu_item2_max_quantity`, `food_menu_item3_name`, `food_menu_item3_pic`, `food_menu_item3_disc`, `food_menu_item3_price`, `food_menu_item3_max_quantity`, `food_menu_item4_name`, `food_menu_item4_pic`, `food_menu_item4_disc`, `food_menu_item4_price`, `food_menu_item4_max_quantity`, `food_menu_item5_name`, `food_menu_item5_pic`, `food_menu_item5_disc`, `food_menu_item5_price`, `food_menu_item5_max_quantity`, `food_menu_item6_name`, `food_menu_item6_pic`, `food_menu_item6_disc`, `food_menu_item6_price`, `food_menu_item6_max_quantity`, `food_menu_item7_name`, `food_menu_item7_pic`, `food_menu_item7_disc`, `food_menu_item7_price`, `food_menu_item7_max_quantity`, `food_menu_item8_name`, `food_menu_item8_pic`, `food_menu_item8_disc`, `food_menu_item8_price`, `food_menu_item8_max_quantity`, `created`, `deleted`, `published`) VALUES
(1, 1, 'Title', '3', 'South Broadway', 'Denver', 'CO', '80209', 'United States', 39.7163894, -104.9877578, '3 South Broadway, Denver, CO, United States, 80209', '\r\nFood Truck Test Disc', 'food-main-1-1920px-Flag_of_the_United_States.svg.png', 'Home Cooked', 'Food Truck', 'No', '0', '$', 'Menu Coming Soon\r\n', 'Test Add Info\r\n', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-18 08:24:07', 0, 0),
(2, 2, 'Alex\'s Colorado BBQ Bacon Brisket Smokehouse', '300', 'Stuart Street', 'Denver', 'CO', '80219', 'United States', 39.72154920000001, -105.042979, '300 Stuart Street, Denver, CO, United States, 80219', 'Homecooked Smoked Brisket in my BBQ Sauce. It\'s 100% free of transfat and high fructose corn syrup. Fresh, healthy ingredients. And still amazingly good.\r\n', 'food-main-2-Feature-Brisket-Big-Dish-Photo-Devon-Knight.jpg', 'Home Cooked', 'House', 'Yes', 'Free', '$', '$10- BBQ Brisket smothered in Colorado BBQ sauce. Served with a side of mashed potatoes and mac n cheese\r\n', '\r\n', 'within 1 mile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-18 08:30:14', 0, 0),
(3, 2, 'Ristorante Paradiso', '198', 'Central Avenue', 'Albany', 'NY', '12206', 'United States', 42.66194049999999, -73.7696578, '198 Central Avenue, Albany, NY, United States, 12206', '\r\nRistorante Paradiso, originally the famed Boulevard Cafe from the 1920s, was opened back up by Albany Senators baseball player and local icon Matt \"Babe\" Daskelakis. Ristorante Paradiso has world class italian american cuisine, served in the traditional New York Italian restaurant settings and atmosphere. Enjoy our famed fresh bread with butter and brochettes to start your meal, along with a soup or salad before them main course.\r\n You\'ll love your time here. ', 'food-main-3-matt.jpg', 'Restaurant', 'Restaurant', 'No', '0', '$$', '$12- Spaghetti And Meatballs\r\n$15- Chicken Parm\r\n$17- Veal Parm\r\n$20- NY Strip Steak\r\n$30- Chicken Scarpiello ', '\r\nPark across the street at firestone\'s parking lot. Enjoy a drink at the bar before sitting down. Reservations are suggested. Don\'t gawk at the state politicians and local celebrities that frequent us as patrons.', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-18 09:32:19', 0, 0),
(5, 2, 'Maltese Style Pastizzis', '12506', 'East Cornell Avenue', 'Aurora', 'CO', '80014', 'United States', 39.660901, -104.84216400000003, '12506 East Cornell Avenue, Aurora, CO, United States, 80014', 'I\'m selling my grandma\'s famous maltese pastizzi recipe. Feel free to buy 1, 2, 3 or 12! They\'re $1.50 each. They taste great!\r\n', 'food-main-5-IMG_4461.JPG', 'Home Cooked', 'House', 'No', '0', '$', '\r\n$1.50 a Pastizzi\r\nchoose:\r\n cheese and potato \r\ncheese and peas\r\n', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-19 00:16:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `foodtest`
--

CREATE TABLE `foodtest` (
  `id` int(15) NOT NULL,
  `favorite_food` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `uid`, `friend_id`, `created`, `type`) VALUES
(92, 133, 1, '2019-03-20 19:25:16', NULL),
(18, 120, 2, '2019-02-28 08:28:01', 'Friend'),
(20, 121, 2, '2019-02-28 08:31:55', 'Friend'),
(21, 2, 118, '2019-02-28 20:35:42', 'Co-Worker'),
(22, 108, 2, '2019-03-01 01:12:17', 'Friend'),
(30, 2, 108, '2019-03-05 23:10:16', 'Friend'),
(94, 133, 2, '2019-03-20 19:25:16', NULL),
(93, 1, 133, '2019-03-20 19:25:16', NULL),
(72, 128, 1, '2019-03-12 04:26:07', NULL),
(27, 2, 123, '2019-03-05 22:58:29', 'Friend'),
(26, 1, 123, '2019-03-05 22:58:29', 'Friend'),
(24, 123, 1, '2019-03-05 20:48:34', 'Friend'),
(25, 123, 2, '2019-03-05 20:48:34', 'Friend'),
(31, 108, 2, '2019-03-05 23:10:16', 'Friend'),
(32, 1, 108, '2019-03-05 23:11:24', 'Friend'),
(33, 108, 1, '2019-03-05 23:11:24', 'Friend'),
(34, 1, 111, '2019-03-05 23:16:00', 'Friend'),
(35, 111, 1, '2019-03-05 23:16:00', 'Friend'),
(36, 2, 111, '2019-03-05 23:16:40', 'Friend'),
(37, 111, 2, '2019-03-05 23:16:40', 'Friend'),
(45, 2, 118, '2019-03-09 05:11:54', NULL),
(44, 1, 118, '2019-03-09 05:11:54', NULL),
(47, 2, 117, '2019-03-09 05:12:14', NULL),
(42, 126, 2, '2019-03-09 04:16:27', NULL),
(43, 2, 126, '2019-03-09 04:16:27', NULL),
(46, 1, 117, '2019-03-09 05:12:14', NULL),
(48, 1, 114, '2019-03-09 05:12:30', NULL),
(49, 2, 114, '2019-03-09 05:12:30', NULL),
(97, 1, 134, '2019-03-21 01:07:07', NULL),
(52, 1, 112, '2019-03-09 05:13:06', NULL),
(53, 2, 112, '2019-03-09 05:13:06', NULL),
(54, 1, 110, '2019-03-09 05:13:18', NULL),
(55, 2, 110, '2019-03-09 05:13:18', NULL),
(56, 118, 1, '2019-03-09 05:13:53', NULL),
(57, 118, 2, '2019-03-09 05:13:53', NULL),
(58, 117, 1, '2019-03-09 05:14:06', NULL),
(59, 117, 2, '2019-03-09 05:14:06', NULL),
(60, 114, 1, '2019-03-09 05:14:19', NULL),
(61, 114, 2, '2019-03-09 05:14:19', NULL),
(62, 110, 1, '2019-03-09 05:14:40', NULL),
(63, 110, 2, '2019-03-09 05:14:40', NULL),
(64, 112, 1, '2019-03-09 05:17:14', NULL),
(65, 112, 2, '2019-03-09 05:17:14', NULL),
(96, 134, 1, '2019-03-21 01:07:07', NULL),
(68, 127, 1, '2019-03-10 22:57:56', NULL),
(69, 1, 127, '2019-03-10 22:57:56', NULL),
(70, 127, 2, '2019-03-10 22:57:56', NULL),
(71, 2, 127, '2019-03-10 22:57:56', NULL),
(73, 1, 128, '2019-03-12 04:26:07', NULL),
(74, 128, 2, '2019-03-12 04:26:07', NULL),
(75, 2, 128, '2019-03-12 04:26:07', NULL),
(76, 129, 1, '2019-03-15 23:18:48', NULL),
(77, 1, 129, '2019-03-15 23:18:48', NULL),
(78, 129, 2, '2019-03-15 23:18:48', NULL),
(79, 2, 129, '2019-03-15 23:18:48', NULL),
(80, 130, 1, '2019-03-15 23:53:42', NULL),
(81, 1, 130, '2019-03-15 23:53:42', NULL),
(82, 130, 2, '2019-03-15 23:53:42', NULL),
(83, 2, 130, '2019-03-15 23:53:42', NULL),
(84, 131, 1, '2019-03-18 03:08:58', NULL),
(85, 1, 131, '2019-03-18 03:08:58', NULL),
(86, 131, 2, '2019-03-18 03:08:58', NULL),
(87, 2, 131, '2019-03-18 03:08:58', NULL),
(88, 132, 1, '2019-03-18 05:34:55', NULL),
(89, 1, 132, '2019-03-18 05:34:55', NULL),
(90, 132, 2, '2019-03-18 05:34:55', NULL),
(91, 2, 132, '2019-03-18 05:34:55', NULL),
(95, 2, 133, '2019-03-20 19:25:16', NULL),
(98, 134, 2, '2019-03-21 01:07:07', NULL),
(99, 2, 134, '2019-03-21 01:07:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `friend_req`
--

CREATE TABLE `friend_req` (
  `id` int(15) NOT NULL,
  `uid` int(15) DEFAULT NULL,
  `req_uid` int(15) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_req`
--

INSERT INTO `friend_req` (`id`, `uid`, `req_uid`, `created`) VALUES
(28, 115, 1, '2019-02-22 21:45:52'),
(42, 2, 1, '2019-03-20 20:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `hide_notification`
--

CREATE TABLE `hide_notification` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `not_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hide_notification`
--

INSERT INTO `hide_notification` (`id`, `uid`, `not_id`, `created`) VALUES
(42, 2, 2, '2019-03-11 20:42:29'),
(41, 2, 2, '2019-03-11 20:42:28'),
(40, 119, 2, '2019-03-11 18:21:59'),
(39, 119, 2, '2019-03-11 17:33:40'),
(38, 119, 2, '2019-03-11 17:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `hide_post`
--

CREATE TABLE `hide_post` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hide_reply`
--

CREATE TABLE `hide_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(30) NOT NULL,
  `listing_uid` int(15) DEFAULT NULL,
  `type` text,
  `listing_available` date DEFAULT NULL,
  `listing_description` text,
  `name` text,
  `listing_nightly` text,
  `listing_weekly` text,
  `listing_monthly` text,
  `listing_purchase` text,
  `listing_security_deposit` text,
  `listing_rules` varchar(255) DEFAULT NULL,
  `listing_amenities` varchar(255) DEFAULT NULL,
  `listing_main_photo` text,
  `listing_thumbnail` tinyint(4) DEFAULT NULL,
  `listing_photo1` text,
  `listing_photo2` text,
  `listing_photo3` text,
  `listing_photo4` text,
  `listing_photo5` text,
  `listing_photo6` text,
  `listing_photo7` text,
  `listing_photo8` text,
  `listing_photo9` text,
  `listing_photo10` text,
  `listing_photo11` text,
  `listing_photo12` text,
  `listing_photo13` text,
  `listing_photo14` text,
  `listing_photo15` text,
  `listing_photo16` text,
  `listing_photo17` text,
  `listing_photo18` text,
  `listing_photo19` text,
  `listing_photo20` text,
  `listing_bedrooms` int(5) DEFAULT NULL,
  `listing_bathrooms` int(5) DEFAULT NULL,
  `listing_add1` varchar(255) DEFAULT NULL,
  `listing_add2` varchar(255) DEFAULT NULL,
  `listing_apt` text,
  `listing_city` varchar(255) DEFAULT NULL,
  `listing_state` varchar(255) DEFAULT NULL,
  `listing_zip` varchar(25) DEFAULT NULL,
  `listing_country` varchar(255) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `listing_contact_email` varchar(255) DEFAULT NULL,
  `listing_contact_phone` text,
  `listing_rating` int(2) DEFAULT NULL,
  `listing_reviews` varchar(255) DEFAULT NULL,
  `listing_garage` int(15) DEFAULT NULL,
  `elevator` int(1) DEFAULT NULL,
  `internet` int(1) DEFAULT NULL,
  `wifi` int(1) DEFAULT NULL,
  `family` int(1) DEFAULT NULL,
  `gym` int(1) DEFAULT NULL,
  `free_parking` int(1) DEFAULT NULL,
  `hot_tub` int(1) DEFAULT NULL,
  `buzzer` int(1) DEFAULT NULL,
  `heating` int(1) DEFAULT NULL,
  `hangers` int(1) DEFAULT NULL,
  `iron` int(1) DEFAULT NULL,
  `laptop` int(1) DEFAULT NULL,
  `smoking` int(1) DEFAULT NULL,
  `420_friendly` tinyint(1) DEFAULT NULL,
  `hair_dryer` int(1) DEFAULT NULL,
  `dryer` int(1) DEFAULT NULL,
  `fireplace` int(1) DEFAULT NULL,
  `kitchen` int(1) DEFAULT NULL,
  `essential` int(1) DEFAULT NULL,
  `pool` int(1) DEFAULT NULL,
  `tv` int(1) DEFAULT NULL,
  `cable` int(1) DEFAULT NULL,
  `paid_parking` int(1) DEFAULT NULL,
  `free_street_parking` int(1) DEFAULT NULL,
  `handicap` int(1) DEFAULT NULL,
  `private_entrance` int(1) DEFAULT NULL,
  `breakfast` int(1) DEFAULT NULL,
  `doorman` int(1) DEFAULT NULL,
  `ac` int(1) DEFAULT NULL,
  `events` int(1) DEFAULT NULL,
  `pets` int(1) DEFAULT NULL,
  `washer` int(1) DEFAULT NULL,
  `dogs` tinyint(1) DEFAULT NULL,
  `cats` tinyint(1) DEFAULT NULL,
  `water` tinyint(1) DEFAULT NULL,
  `utilities` tinyint(1) DEFAULT NULL,
  `wd_unit` tinyint(1) DEFAULT NULL,
  `wd_building` tinyint(1) DEFAULT NULL,
  `parking_space` tinyint(1) DEFAULT NULL,
  `yard` tinyint(1) DEFAULT NULL,
  `water_front` tinyint(1) DEFAULT NULL,
  `scenic` tinyint(1) DEFAULT NULL,
  `owner` tinyint(1) DEFAULT NULL,
  `no_app` tinyint(1) DEFAULT NULL,
  `listing_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `listing_cat` text,
  `size` int(15) DEFAULT NULL,
  `measurement` text,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `listing_uid`, `type`, `listing_available`, `listing_description`, `name`, `listing_nightly`, `listing_weekly`, `listing_monthly`, `listing_purchase`, `listing_security_deposit`, `listing_rules`, `listing_amenities`, `listing_main_photo`, `listing_thumbnail`, `listing_photo1`, `listing_photo2`, `listing_photo3`, `listing_photo4`, `listing_photo5`, `listing_photo6`, `listing_photo7`, `listing_photo8`, `listing_photo9`, `listing_photo10`, `listing_photo11`, `listing_photo12`, `listing_photo13`, `listing_photo14`, `listing_photo15`, `listing_photo16`, `listing_photo17`, `listing_photo18`, `listing_photo19`, `listing_photo20`, `listing_bedrooms`, `listing_bathrooms`, `listing_add1`, `listing_add2`, `listing_apt`, `listing_city`, `listing_state`, `listing_zip`, `listing_country`, `address`, `lat`, `lng`, `listing_contact_email`, `listing_contact_phone`, `listing_rating`, `listing_reviews`, `listing_garage`, `elevator`, `internet`, `wifi`, `family`, `gym`, `free_parking`, `hot_tub`, `buzzer`, `heating`, `hangers`, `iron`, `laptop`, `smoking`, `420_friendly`, `hair_dryer`, `dryer`, `fireplace`, `kitchen`, `essential`, `pool`, `tv`, `cable`, `paid_parking`, `free_street_parking`, `handicap`, `private_entrance`, `breakfast`, `doorman`, `ac`, `events`, `pets`, `washer`, `dogs`, `cats`, `water`, `utilities`, `wd_unit`, `wd_building`, `parking_space`, `yard`, `water_front`, `scenic`, `owner`, `no_app`, `listing_created`, `listing_cat`, `size`, `measurement`, `deleted`, `published`) VALUES
(39, 1, 'Townhouse', NULL, 'Real Estate Test Disc11', 'Real Estate Test11', NULL, NULL, NULL, '876781', NULL, NULL, NULL, 'bnb-main-39-thgfdsg.jpg', NULL, 'realestate-1-39-untitled.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, 41, '3465', 'West Alameda Avenue', '', 'Denver', 'CO', '80219', 'United States', '3465 West Alameda Avenue, Denver, CO, United States, 80219', 39.71165009999999, -105.0329342, 'none1@gmail.com', '234324231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-02-09 05:18:45', 'Real Estate', 23452311, 'Square Feet', 0, 1),
(38, 1, 'condo', '2019-02-08', 'test22', 'test', NULL, NULL, '$2200', NULL, '22', NULL, NULL, 'property-main-38-index.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '643', 'Tennyson Street', '', 'Denver', 'CO', '80204', 'United States', '643 Tennyson Street, Denver, CO, United States, 80204', 39.7271756, -105.04421179999997, 'n4@n.com', '33333333334', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-08 02:00:55', 'Long Term Rentals', 3200, 'Square Feet', 0, 0),
(40, 1, 'house', NULL, 'Another disc', 'Real Estate Test2', NULL, NULL, NULL, '$235,325,235', NULL, NULL, NULL, 'property-main-40-untitled.34png.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, 23, '34534', 'Morgan Trail', '', 'Elizabeth', 'CO', '80107', 'United States', '34534 Morgan Trail, Elizabeth, CO, United States, 80107', 39.3689455, -104.62661689999999, 'sdgnsod@gsa.com', '23432423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-09 05:21:14', 'Real Estate', 234523, 'Square Meters', 0, 0),
(41, 1, 'multifamily', '2019-02-08', 'roommates disc', 'New Roommates Title', NULL, NULL, '$2342', NULL, '1000', NULL, NULL, 'property-main-41-th.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '2345', 'West Alameda Avenue', '', 'Denver', 'CO', '80223', 'United States', '2345 West Alameda Avenue, Denver, CO, United States, 80223', 39.7113897, -105.0149007, 'sdgnsod@gsa.com', '23432423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-09 05:53:26', 'Roommates', 2333, 'Square Feet', 0, 0),
(42, 2, 'commercial', NULL, 'Priced for a quick sale- previously used as an office space & shop, however may also be converted into a cosy and bright triplex unit.\r\nPossibility to develop a further floor.\r\nWe are not negotiating with agents.\r\nLocated in Birkirkara, close to McDonalds.\r\n\r\nPlease Send a text on 00356 99046004 for more information or call on 00356 99999501. ', 'Direct from Owner Bargain BIRKIRKARA Office/triplex unit Freehold', NULL, NULL, NULL, '$5,000,000', NULL, NULL, NULL, 'property-main-42-www.maltapark.com.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '', '', 'Birkirkara', '', '', 'Malta', ' , Birkirkara, , Malta, ', 35.8954706, 14.466507200000024, '', '00356 99999501', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 06:07:59', 'Real Estate', 0, '-- Choose One --', 0, 0),
(43, 2, 'condo', NULL, 'By Far one of the nicest development available on the market in this prestigious address San Lawrenz Gozo overlooking magnificent views of The Gozitan Landscape and rural surroundings, Selection of 2 bedroom spectacular Apartments and penthouses measuring approx 114sqm. Well Presented accommodation consists 2 double bedrooms(main en-suite) bathroom open plan kitchen/dining/living, nice terrace overlooking the magnificent views. Being sold in shell form with car space included in the price. VERY RARE TO FIND!!!\r\nBLOCK A FLAT NO 1 EURO 110,000\r\nFLAT NO 2 EURO 100,000\r\nFLAT NO 3 SOLD\r\nFLAT NO 4 SOLD\r\nFLAT NO 5 SOLD\r\nFLAT NO 6 SOLD\r\nFLAT NO 7 SOLD\r\nPENTHOUSE NO 8 EURO245,000\r\nPENTHOUSE NO 9 EURO245,000\r\n\r\nBLOCK B FLAT NO 1 EURO 150,000\r\nFLAT NO 2(3BED) EURO175,000\r\nFLAT NO 3 EURO SOLD\r\nFLAT NO 4 EURO 129,000\r\nFLAT NO 5 EURO 139,000\r\nFLAT NO 6 EURO 155,000\r\nFLAT NO 7 EURO 134,000\r\nFLAT NO 8 EURO EURO144,000\r\nPENTHOUSE NO 9 EURO 350,000\r\nPENTHOUSE NO10 EURO 245,000\r\n\r\nâ˜Žï¸ Mobile No: 99829745\r\nâœ” Reachable and Affordable Prices\r\nâœ” Selection of 2 Bedroom Apartments (Main En-Suite)\r\nâœ”Presigious address\r\nâœ” Kitchen / Dining / Living\r\nâœ” Approx 113sqm\r\nâœ” Back Terrace\r\nâœ” Front Balcony\r\nâœ” Main Bathroom\r\nâœ” Magnificent views\r\nâœ” Carspace included\r\nâœ” 2020 Target Date\r\nâœ” Rare to Find\r\nâœ” Shell\r\nâœ” Lift included\r\n\r\n----------For More Info----------\r\n\r\nâ˜Žï¸ Mobile No: 99829745 ', 'GOZO SAN LAWRENZ SPETACULAR APPARTMENTS & PENTHOUSES', NULL, NULL, NULL, '$500,000', NULL, NULL, NULL, 'property-main-43-www.maltapark.com.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, '', '', '', 'San Lawrenz', '', '', 'Malta', ' , San Lawrenz, , Malta, ', 36.0482955, 14.195997799999986, '', '99829745 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 06:15:02', 'Real Estate', 0, '-- Choose One --', 0, 0),
(44, 2, 'penthouse', NULL, 'HAMRUN// ST VENERA // 74SQM PENTHOUSE // A ONE OFF 71SQMS CORNER TERRACE // VIEWS// READY BUILT//\r\n\r\nPRICED â‚¬215,000 ðŸ’¥\r\n\r\nâž¡ï¸ READY BUILT\r\nâž¡ï¸ 1 bedroom + ensuite (74SMQS) can be 2 bedroom\r\nâž¡ï¸ 71sqms corner terrace\r\nâž¡ï¸ Square layout\r\nâž¡ï¸ Utility room\r\nâž¡ï¸ Nearing completion\r\n\r\nCall Alexia on +356 99456588 ', 'HAMRUN // ST VENERA PENTHOUSE WITH 71SQMS OUTDOOR.AREA', NULL, NULL, NULL, '$750,000', NULL, NULL, NULL, 'property-main-44-www.maltapark.com.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '', '', '', 'Santa Venera', '', '', 'Malta', ' , Santa Venera, , Malta, ', 35.8902201, 14.476697400000035, '', '+356 99456588', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 06:24:24', 'Real Estate', 71, 'Square Meters', 0, 0),
(45, 1, 'townhouse', NULL, 'test', 'test', NULL, NULL, NULL, '$56666', NULL, NULL, NULL, 'default.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 5, '100', 'West Colfax Avenue', '', 'Denver', 'CO', '80204', 'United States', '100 West Colfax Avenue, Denver, CO, United States, 80204', 39.7390211, -105.0109152, 'none@testing.com', '23542354235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 22:49:24', 'Real Estate', 355, 'Square Meters', 0, 0),
(46, 1, 'multifamily', NULL, 'desc', 'title', NULL, NULL, NULL, '$44444444', NULL, NULL, NULL, 'default.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, 34, '400', 'Lowell Boulevard', '', 'Denver', 'CO', '80204', 'United States', '400 Lowell Boulevard, Denver, CO, United States, 80204', 39.7231346, -105.03485180000001, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 22:53:26', 'Real Estate', 355, 'Square Meters', 0, 0),
(47, 1, 'townhouse', NULL, 'test', 'new', NULL, NULL, NULL, '$3444', NULL, NULL, NULL, 'default.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, 44, '197', 'South Broadway', '', 'Denver', 'CO', '80209', 'United States', '197 South Broadway, Denver, CO, United States, 80209', 39.713197, -104.98795899999999, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 23:03:45', 'Real Estate', 355, 'Square Feet', 0, 0),
(48, 1, 'townhouse', NULL, 'test', 'new', NULL, NULL, NULL, '$222222', NULL, NULL, NULL, 'default.gif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, 22, '345', 'Sheridan Boulevard', '', 'Lakewood', 'CO', '80226', 'United States', '345 Sheridan Boulevard, Lakewood, CO, United States, 80226', 39.7220201, -105.05418789999999, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 23:13:46', 'Real Estate', 222, 'Square Meters', 0, 0),
(49, 2, 'villa', NULL, 'Modern 3 Bedroom House, with En suite bathrooms, Built on 1.5 Rai of land close to the Mekong River, Markets, Hospitals, Schools, 7/11 in Chanuman 40km from Mukdahan.\r\nVery modern spec house, house is on 300tw with a dividing fence access to a further 300tw of Land. 500mtrs to Mekong River.\r\nSitting covered terrace to front and rear gardens, ample parking space for any requirements. lovely quiet part of Chanuman called Si Som Boom. Large Master Bedroom 6m x 5m en suite with walk in wardrobe. vaulted ceilings in the living area, all windows have secure craftsman made steel security grills.\r\nBeautiful House, lovely place to live.', '3 Bedroom Modern Villa on 1.5 Rai in Chanuman.', NULL, NULL, NULL, '$496,004', NULL, NULL, NULL, 'property-main-49-img_110334_1542168292_92353.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '', '', '', 'Chanuman', 'à¸ˆ. à¸­à¸³à¸™à¸²à¸ˆà¹€à¸ˆà¸£à¸´à¸', '', 'Thailand', ' , Chanuman, à¸ˆ. à¸­à¸³à¸™à¸²à¸ˆà¹€à¸ˆà¸£à¸´à¸, Thailand, ', 16.221854, 104.95056709999994, '', '0649014517', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-13 23:44:49', 'Real Estate', 220, 'Square Meters', 0, 0),
(50, 1, 'townhouse', '2019-02-13', 'Condo Test', 'Townhouse Test', NULL, NULL, '$3242', NULL, '2345', NULL, NULL, 'property-main-50-th.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '500', 'Sheridan Boulevard', '', 'Denver', 'CO', '80226', 'United States', '500 Sheridan Boulevard, Denver, CO, United States, 80226', 39.72412540000001, -105.0531588, 'none@gmail.com', '23432423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-14 01:38:24', 'Long Term Rentals', 23423, 'Square Meters', 0, 0),
(51, 2, 'house', '2019-03-01', 'In Ban Chang, about 40 km from Pattaya i have a House for rent\r\n3 Bedrooms and Room for Office or Store room, 2 Bathrooms\r\n5 Aircon, very big and beautiful european style Kitchen and Dinner Room with Stainless Steel Oven and huge Fridge.\r\nBig Livingroom with 50\" TV and very comfortable and big Sofa\r\nLovely Terrace with nice Sofa combination, and another big TV and ceiling Fan\r\nParking for 2 Cars, Water Filter System, Hi Speed Internet, Phone Line,\r\nThe lovely House is in a very nice Estate with Security.\r\nNo noise in the village, no barking Dogs, many Foreigners live here.\r\nVery near to famous Eastern Star Golf Course and International Schools\r\nThe Village is about 1km from the Beach\r\nCall me for sightseeing 097 092 4004 (Eng/Thai) ', 'Lovely House in Ban Chang (Rayong) for rent', NULL, NULL, '$229,999', NULL, '22', NULL, NULL, 'property-main-51-144879663823585119431.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '', '', '', 'Ban Chang', 'à¸ˆ.à¸£à¸°à¸¢à¸­à¸‡', '21130', 'Thailand', ' , Ban Chang, à¸ˆ.à¸£à¸°à¸¢à¸­à¸‡, Thailand, 21130', 12.690247, 101.06391200000007, '', '097 092 4004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-14 01:57:29', 'Long Term Rentals', 120, 'Square Meters', 0, 0),
(52, 1, 'condo', '2019-02-14', 'disc', 'test', NULL, NULL, '$1,000.00', NULL, '0', NULL, NULL, 'property-main-52-earth.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 5, '3936', 'West Colfax Avenue', '', 'Denver', 'CO', '80204', 'United States', '3936 West Colfax Avenue, Denver, CO, United States, 80204', 39.7400849, -105.03859569999997, 'none@testing.com', '23542354235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-14 02:20:24', 'Long Term Rentals', 3550, 'Square Feet', 0, 0),
(53, 2, 'cottage', NULL, 'A very quint cottage in the village of fishkill with a two car driveway and single car carport. There\'s a backyard as well as front yard. The home has one bathroom, and 2 bedrooms. There\'s a living room with new carpet, and a kitchen. There\'s also a backroom which can be used for an office, storage room, or another bedroom. There\'s a washer and dryer which can be left with the property. Lastly, there\'s a back shed which was used by our grandfather for goats and chickens.', 'Beautiful family cottage for sale, nice yard and house well maintained', NULL, NULL, NULL, '$280,000', NULL, NULL, NULL, 'property-main-53-PIC_1358.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '38', 'South Terrace', '', 'Fishkill', 'NY', '12524', 'United States', '38 South Terrace, Fishkill, NY, United States, 12524', 41.54335640000001, -73.89879129999997, 'portellalexander@gmail.com', '303-319-3284', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-14 06:01:02', 'Real Estate', 1500, 'Square Feet', 0, 0),
(54, 2, 'condo', NULL, 'An awesome and spacious 3 bedroom condo in the city of Denver for under $200,000! Incredible. This updated property has 2 bathrooms and 3 bedrooms. It\'s on the 3rd floor and has a spacious deck that the unit has to itself. HOA maintains and covers the heat, electricity, water, and garbage, as well as outside care! unbeatable. \r\nPriced at the reasonable $199,000. ', '3 bedroom penthouse condo for sale with deck', NULL, NULL, NULL, '$199,000', NULL, NULL, NULL, 'property-main-54-g80 5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, '9700', 'East Iliff Avenue', '', 'Denver', 'CO', '80231', 'United States', '9700 East Iliff Avenue, Denver, CO, United States, 80231', 39.67314379999999, -104.87373709999997, 'portellalexander@gmail.com', '303-319-3284', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-14 06:06:59', 'Real Estate', 1100, 'Square Feet', 0, 0),
(55, 2, 'house', NULL, 'beautiful newer home built in the 80s. in albany\'s best school district. next to the pine bush nature preserve.', '4 bedroom, 3 bath home with fireplace', NULL, NULL, NULL, '$198,000', NULL, NULL, NULL, 'property-main-55-index.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 3, '9', 'Pitch Pine Road', '', 'Albany', 'NY', '12203', 'United States', '9 Pitch Pine Road, Albany, NY, United States, 12203', 42.70614839999999, -73.86673880000001, 'portellialexander@gmail.com', '303-319-3284', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-19 00:39:39', 'Real Estate', 2300, 'Square Feet', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `homestest`
--

CREATE TABLE `homestest` (
  `id` int(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amenities` text NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `title` text,
  `type` text,
  `disc` text,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `nightly` double DEFAULT NULL,
  `weekly` double DEFAULT NULL,
  `monthly` double DEFAULT NULL,
  `amenities` text,
  `rules` text,
  `main_pic` text,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `bed_type1` text,
  `bed-type2` text,
  `bed-type3` text,
  `bed-type4` text,
  `bed-type5` text,
  `bed_type1_num` int(11) DEFAULT NULL,
  `bed-type2-num` int(11) DEFAULT NULL,
  `bed-type3-num` int(11) DEFAULT NULL,
  `bed-type4-num` int(11) DEFAULT NULL,
  `bed-type5-num` int(11) DEFAULT NULL,
  `contact_phone` text,
  `contact_email` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `uid`, `title`, `type`, `disc`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `lat`, `lng`, `nightly`, `weekly`, `monthly`, `amenities`, `rules`, `main_pic`, `beds`, `baths`, `bed_type1`, `bed-type2`, `bed-type3`, `bed-type4`, `bed-type5`, `bed_type1_num`, `bed-type2-num`, `bed-type3-num`, `bed-type4-num`, `bed-type5-num`, `contact_phone`, `contact_email`, `created`, `deleted`, `published`) VALUES
(12, 1, 'Motel Test', 'Motel', 'motel test disc', '2346', 'Larimer Street', 'Denver', 'CO', '80205', 'United States', 39.7565647, -104.9878531, 99, 0, 0, 'Amenities', 'Rules', 'hotel-main-12-earth-logo.png', 5, 5, 'hotel-bed1-twin', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, '2354325423', 'none@none.com', '2019-02-04 05:42:40', 0, 0),
(11, 1, 'Test Hostel', 'Hostel', 'Test Hostel Disc', '340', 'Sheridan Boulevard', 'Denver', 'CO', '80226', 'United States', 39.7218425, -105.0529788, 23, 0, 0, 'Amenities', 'Rules', 'hotel-main-11-th.jpg', 5, 5, 'hotel-bed1-bunk-beds', NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, '2354325423', 'none@none.com', '2019-02-04 05:42:40', 0, 0),
(10, 1, 'Test Hotel', 'Hotel', 'Test Hotel Disc', '3451', 'West Colfax Avenue', 'Denver', 'CO', '80204', 'United States', 39.740379, -105.03296069999999, 78, 0, 0, 'Amenities', 'Rules', 'hotel-main-10-thgfdsg.jpg', 5, 5, 'hotel-bed1-queen', NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, '2354325423', 'none@none.com', '2019-02-04 05:42:40', 0, 0),
(9, 1, 'bnb test', 'BnB', 'bnb test', '2345', 'West Alameda Avenue', 'Denver', 'CO', '80223', 'United States', 39.7113897, -105.0149007, 234, 0, 0, 'Amenities', 'Rules', 'hotel-main-9-untitled.png', 5, 5, 'hotel-bed1-bunk-beds', NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, '2354325423', 'none@none.com', '2019-02-04 05:42:40', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(15) NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `file`, `title`, `disc`) VALUES
(1, 'accounting.jpg', 'test', 'disc');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `type` text,
  `name` text,
  `disc` text,
  `add1` text,
  `add2` text,
  `apt` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `price` text,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `address` text,
  `sale_rent` text,
  `hourly` text,
  `daily` text,
  `weekly` text,
  `monthly` text,
  `delivery` text,
  `del_fee` text,
  `del_radius` text,
  `shipping` text,
  `shipping_details` text,
  `shipping_int_cost` text,
  `shipping_nat_cost` text,
  `add_info` text,
  `contact_phone` text,
  `contact_email` text,
  `main_pic` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `uid`, `type`, `name`, `disc`, `add1`, `add2`, `apt`, `city`, `state`, `zip`, `country`, `price`, `lat`, `lng`, `address`, `sale_rent`, `hourly`, `daily`, `weekly`, `monthly`, `delivery`, `del_fee`, `del_radius`, `shipping`, `shipping_details`, `shipping_int_cost`, `shipping_nat_cost`, `add_info`, `contact_phone`, `contact_email`, `main_pic`, `created`, `deleted`, `published`) VALUES
(3, 1, 'Antiques', 'Test Antique', 'test antique disc', '340', 'Sheridan Boulevard', NULL, 'Denver', 'CO', '80226', 'United States', '56', 39.7218425, -105.0529788, NULL, 'sale', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '24232323', 'sfssgsdf1@gmail.com', 'items-main-3-th.jpg', '2019-02-04 05:40:38', 0, 0),
(4, 1, 'Appliances', 'title', 'disc', '4330', 'West Colfax Avenue', '', 'Denver', 'CO', '80204', 'United States', '0', 39.739975, -105.04333489999999, NULL, 'Rent', 'hourly', 'daily', 'weekly', 'monthly', 'No', 'del fee', 'del rad', 'item_no_shipping', 'shipping details', 'int cost', 'nat cost', 'add details', '12343', 'non@none.com', 'items-main-4-th.jpg', '2019-02-21 17:47:43', 0, 0),
(5, 1, 'Crafts', 'title', 'desc', '451', 'Tennyson Street', '', 'Denver', 'CO', '80204', 'United States', '0', 39.7231193, -105.04421179999997, '451 Tennyson Street, Denver, CO, United States, 80204', 'Rent', 'hourly', 'daily', 'weekly', 'monthly', 'No', 'del fee', 'del rad', 'item_no_shipping', 'shipping details', 'int cost', 'nat cost', 'add details', '12343', 'non@none.com', 'items-main-5-thgfdsg.jpg', '2019-02-21 17:51:00', 0, 0),
(6, 1, 'Beauty', 'title', 'desc', '340', 'Sheridan Boulevard', '', 'Denver', 'CO', '80226', 'United States', 'price', 39.7218425, -105.0529788, '340 Sheridan Boulevard, Denver, CO, United States, 80226', 'Rent', 'hourly', 'daily', 'weekly', 'test', 'Please Select', 'del fee', 'del rad', 'item_no_shipping', 'shipping details', 'int cost', 'nat cost', 'add details', 'contact phone', 'contact email', 'items-main-6-index.jpg', '2019-02-21 17:55:33', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(15) NOT NULL,
  `uid` int(15) DEFAULT NULL,
  `type` text,
  `name` text,
  `disc` text,
  `payrate` text,
  `qualifications` text,
  `education` text,
  `certifications` text,
  `level` text,
  `position_title` text,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `address` text,
  `contact_phone` text,
  `contact_email` text,
  `main_pic` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `uid`, `type`, `name`, `disc`, `payrate`, `qualifications`, `education`, `certifications`, `level`, `position_title`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `lat`, `lng`, `address`, `contact_phone`, `contact_email`, `main_pic`, `created`, `deleted`, `published`) VALUES
(14, 1, 'Accounting', 'title', 'disc', 'Payrate', 'Qualifications', 'Education', 'Cerifications', 'Job Level', 'Position Title', '45', 'Sheridan Boulevard', 'Lakewood', 'CO', '80226', 'United States', 39.7171995, -105.05358790000003, '45 Sheridan Boulevard, Lakewood, CO, United States, 80226', '235235235', 'none@test.com', 'job-main-14-1920px-Flag_of_the_United_States.svg.png', '2019-02-16 04:34:26', 0, 0),
(15, 2, 'Agricultural', 'Farm worker needed on The Monkey Farm', 'Come work in Costa Rica at The monkey Farm! Housing provided along with food and a salary. We deal with international tourists who come to see our animals, fruits and veggies. Must know both English and Spanish. Must be people friendly. ', '$4 an hour,', 'People friendly', 'Any', 'none', 'Entry', 'Worker', '', 'Camino del Cielo', '', 'Provincia de Guanacaste', '', 'Costa Rica', 10.5248579, -85.72500960000002, ' Camino del Cielo, , Provincia de Guanacaste, Costa Rica, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-15-cropped-The-Monkey-Farm-Sign4.jpg', '2019-02-16 04:57:48', 0, 0),
(16, 2, 'Marketing', 'Prntpage Market Rep/Manager for Malta!', 'We need a good rep to market Prntpage in the country of Malta. There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on.\r\nThe second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they land on the island at the airport.', 'negotiable ', 'ambitious and people friendly. Knowing multiple languages is a plus', 'Any', 'any', 'Intermediate', 'Prntpage Malta National Marketing Manager', '', '', '', '', '', 'Malta', 35.937496, 14.375415999999973, ' , , , Malta, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-16-Prntpage.png', '2019-02-16 05:04:01', 0, 0),
(17, 2, 'Networking', 'Prntpage Market Rep/Manager for Thailand!', 'We need a good rep to market Prntpage in the country of Thailand. There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels, tuk tuk drivers and hotels, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists in the heart of tourist districts. ', '', 'People friendly, fluent in English', 'Any', 'None', 'Intermediate', 'Prntpage Marketing Rep', '', '', 'Bangkok', '', '', 'Thailand', 13.7563309, 100.50176510000006, ' , Bangkok, , Thailand, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-17-www.maltapark.com.jpeg', '2019-02-16 05:11:00', 0, 0),
(18, 2, 'Customer Service', 'Phuket Sales Rep needed! Market our website on the island!', 'We need a good rep to market Prntpage in Phuket. There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels or hotels, tuk tuk drivers, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they land on the island.', 'Negotiable', 'Fluent in english and thai, socialable', 'none', 'none', 'intermediate', 'Prntpage Marketing Rep', '', '', 'Phuket', 'à¸ˆ.à¸ à¸¹à¹€à¸à¹‡à¸•', '83000', 'Thailand', 7.8804479, 98.39225039999997, ' , Phuket, à¸ˆ.à¸ à¸¹à¹€à¸à¹‡à¸•, Thailand, 83000', '303-319-3284', 'portellialexander@gmail.com', 'job-main-18-phuket-best-night-markets.jpg', '2019-02-16 05:14:12', 0, 0),
(19, 2, 'Marketing', 'Need a good marketing rep for Chiang Mai!', 'We need a good rep to market Prntpage in Chiang mai. There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels or hotels, tuk tuk drivers, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they land or arrive to the city.', 'Negotiable', 'Fleunt in English and Thai. Sociable and a people person', 'any', 'none', 'medium', 'Prntpage marketing Rep', '', '', 'Chiang Mai', 'à¸ˆ.à¹€à¸Šà¸µà¸¢à¸‡à¹ƒà¸«à¸¡à¹ˆ', '', 'Thailand', 18.7060641, 98.98171630000002, ' , Chiang Mai, à¸ˆ.à¹€à¸Šà¸µà¸¢à¸‡à¹ƒà¸«à¸¡à¹ˆ, Thailand, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-19-chiang-mai-ecommerce-02.jpg', '2019-02-16 05:19:23', 0, 0),
(20, 2, 'Marketing', 'Prntpage Marketing Rep needed for Pattaya!', 'We need a good rep to market Prntpage in Pattaya. There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels or hotels, tuk tuk drivers, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they arrive to the city.', 'Negotiable', 'Fluent in English and Thai', 'Any', 'any', 'Medium', 'Pattaya Prntpage Marketing Rep', '', '', 'Pattaya City', 'à¸ˆ.à¸Šà¸¥à¸šà¸¸à¸£à¸µ', '20150', 'Thailand', 12.9235557, 100.88245510000002, ' , Pattaya City, à¸ˆ.à¸Šà¸¥à¸šà¸¸à¸£à¸µ, Thailand, 20150', '303-319-3284', 'portellialexander@gmail.com', 'job-main-20-pattaya_beach.jpg.jpg', '2019-02-16 05:23:55', 0, 0),
(21, 2, 'Marketing', 'Prntpage Marketing Rep needed for Bali!', 'We need a good rep to market Prntpage in Bali! There\'s two separate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target Letting Agents, Agencies, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels or hotels, tuk tuk drivers, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they arrive in the city.', 'Negotiable', 'Fluent in English, sociable and friendly', 'any', 'any', 'medium skil', 'Prntpage Marketing Rep for Bali', '', '', '', 'Bali', '', 'Indonesia', -8.4095178, 115.18891600000006, ' , , Bali, Indonesia, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-21-bali-first-time.jpg.jpg', '2019-02-16 05:27:56', 0, 0),
(22, 2, 'Marketing', 'Prntpage Marketing Rep/Manager needed for Los Angeles! ', 'We need a good rep to market Prntpage in LA.  There\'s two seperate roles that are needed: the first is gathering content creators. We need people posting their relevant goods or services on the website. You\'ll need to target rental agencies, realtors, auto dealers, Businesses, Landlords, Management companies, BnB and guesthouses owners, hostels or hotels, restaurants, and people who sell things. Get them to post on our website as well. Tell them that we will advertise their listings and we are free of charge to post on. The second position is getting users. This will mean promoting the website to average people. Target people on the street. Target them at night while they\'re out. Target tourists as they visit the city as well, or pass things out in the airport.', 'Negotiable based on experience', 'Sociable and experienced in the field is beneficial', 'any', 'Any', 'Intermediate', 'Prntpage marketing Rep', '', '', 'Los Angeles', 'CA', '', 'United States', 34.0522342, -118.2436849, ' , Los Angeles, CA, United States, ', '303-319-3284', 'portellialexander@gmail.com', 'job-main-22-LosAngeles_cityscape-slider03.jpg', '2019-02-16 05:47:49', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `uid`, `post_id`, `created`) VALUES
(59, 1, 8, '2019-03-09 07:05:31'),
(60, 1, 23, '2019-03-09 17:25:47'),
(57, 1, 16, '2019-03-09 07:02:10'),
(42, 118, 8, '2019-03-01 00:45:16'),
(41, 118, 7, '2019-03-01 00:44:47'),
(38, 1, 7, '2019-02-28 19:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes_reply`
--

CREATE TABLE `likes_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes_reply`
--

INSERT INTO `likes_reply` (`id`, `uid`, `post_id`, `created`) VALUES
(42, 1, 18, '2019-03-09 15:44:50'),
(43, 1, 19, '2019-03-09 19:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `loves`
--

CREATE TABLE `loves` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loves`
--

INSERT INTO `loves` (`id`, `uid`, `post_id`, `created`) VALUES
(20, 1, 8, '2019-03-09 07:05:27'),
(18, 1, 16, '2019-03-09 07:02:14'),
(21, 1, 19, '2019-03-09 07:51:34'),
(22, 1, 23, '2019-03-09 17:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `loves_reply`
--

CREATE TABLE `loves_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loves_reply`
--

INSERT INTO `loves_reply` (`id`, `uid`, `post_id`, `created`) VALUES
(3, 1, 18, '2019-03-09 07:51:26'),
(7, 1, 19, '2019-03-09 15:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `msg_from` int(11) NOT NULL,
  `msg_to` int(11) NOT NULL,
  `msg_sub` text,
  `msg_body` text NOT NULL,
  `msg_read` int(1) DEFAULT NULL,
  `msg_thread` int(11) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  `sent_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg_from`, `msg_to`, `msg_sub`, `msg_body`, `msg_read`, `msg_thread`, `deleted`, `sent_on`, `type`) VALUES
(1, 1, 2, 'test', 'test', 1, NULL, 0, '2019-02-12 22:53:39', 'Business'),
(2, 2, 1, 'Sub', 'body', 1, NULL, 0, '2019-02-12 23:31:46', 'Business'),
(3, 1, 2, 'type test', 'type test message', 1, NULL, 0, '2019-02-21 23:29:57', 'Business'),
(4, 116, 1, 'test', 'test message', 1, NULL, 0, '2019-02-22 15:58:26', 'Personal'),
(5, 1, 116, 'Test', 'Testing', 1, NULL, 0, '2019-02-22 17:29:48', 'Business'),
(6, 1, 116, 'Test2', 'Testing2', 1, NULL, 0, '2019-02-22 17:31:11', 'Personal'),
(7, 116, 1, 'test', 'test message', 1, NULL, 0, '2019-02-22 17:33:14', 'Business'),
(8, 113, 1, 'bus test', 'bus test message', 1, NULL, 0, '2019-02-28 23:58:48', 'Business'),
(9, 113, 1, 'Personal Message Test', 'Personal Message Test Body', 1, NULL, 0, '2019-02-28 23:59:49', 'Personal'),
(10, 1, 113, 'test reply', 'test reply personal', 0, NULL, 0, '2019-03-03 10:04:39', 'Personal'),
(26, 1, 116, 'RE:', 'new test message', 1, NULL, 0, '2019-03-04 00:21:37', ''),
(27, 1, 113, 'Reply to:', 'Test Subject check', 0, NULL, 0, '2019-03-04 00:21:53', ''),
(28, 2, 1, 'RE:', 'Hello ', 1, NULL, 0, '2019-03-04 00:22:50', ''),
(29, 2, 1, 'RE:', 'Very cool ', 1, NULL, 0, '2019-03-04 00:23:53', ''),
(30, 1, 2, 'RE:', 'I think it looks good for sure.', 1, NULL, 0, '2019-03-04 00:24:54', ''),
(31, 1, 2, 'RE:', 'I think it looks good for sure.', 1, NULL, 0, '2019-03-04 00:26:28', ''),
(32, 2, 1, 'RE:', 'This is really cool ', 1, NULL, 0, '2019-03-04 00:27:08', ''),
(33, 1, 2, 'RE:', 'refreshing the page makes it send again though so thats something to try to fix', 1, NULL, 0, '2019-03-04 00:27:09', ''),
(34, 2, 1, 'RE:', 'Oh. The newest messages appear at bottom now. great\r\n', 1, NULL, 0, '2019-03-04 00:27:25', ''),
(35, 2, 1, 'RE:', 'Very cool ', 1, NULL, 0, '2019-03-04 00:27:41', ''),
(36, 2, 1, 'RE:', 'Let\'s keep working on this and fixing it up while the ukrainians finish the checkout pages and other pages. ', 1, NULL, 0, '2019-03-04 00:28:30', ''),
(37, 1, 2, 'RE:', 'refreshing the page makes it send again though so thats something to try to fix', 1, NULL, 0, '2019-03-04 00:28:43', ''),
(38, 1, 2, 'RE:', 'This message should be at the top on the messages dropdown .', 1, NULL, 0, '2019-03-04 00:54:09', ''),
(45, 2, 1, 'RE:', 'So far so good', 1, NULL, 0, '2019-03-07 00:42:22', ''),
(48, 2, 1, 'RE:', 'Hello', 1, NULL, 0, '2019-03-07 06:11:37', ''),
(49, 2, 108, 'Hello', 'Hi', 1, NULL, 0, '2019-03-07 06:12:14', 'Select'),
(50, 2, 1, 'RE:', 'This is going too long it\'ll have to be scrollable so it doesn\'t go down for 50 feet in length', 1, NULL, 0, '2019-03-07 06:14:02', ''),
(51, 2, 1, 'RE:', 'Ok this is the bottom', 1, NULL, 0, '2019-03-07 06:18:31', ''),
(52, 2, 1, 'RE:', 'And when there\'s a new message like the one I\'m sending, there should be some type of notification in the top green tool bar\'s message icon', 1, NULL, 0, '2019-03-07 06:22:31', ''),
(53, 1, 2, NULL, 'testing', 1, NULL, 0, '2019-03-07 06:40:10', 'Personal'),
(59, 2, 108, NULL, 'HI bAE', 1, NULL, 0, '2019-03-07 06:55:02', 'Personal'),
(60, 2, 108, NULL, 'OYrogrw', 1, NULL, 0, '2019-03-07 06:56:15', 'Personal'),
(62, 2, 108, NULL, 'TOrgr', 1, NULL, 0, '2019-03-07 07:04:52', 'Personal'),
(63, 2, 118, NULL, 'YO', 1, NULL, 0, '2019-03-07 07:08:14', 'Personal'),
(64, 2, 118, NULL, 'reef', 1, NULL, 0, '2019-03-07 07:08:28', 'Personal'),
(66, 2, 118, NULL, 'Yo son let\'s make billions', 1, NULL, 0, '2019-03-07 07:12:29', 'Personal'),
(67, 2, 111, NULL, 'We\'re trying ', 0, NULL, 0, '2019-03-07 07:16:07', 'Personal'),
(68, 2, 119, NULL, 'Yes cmon lets make billions ', 1, NULL, 0, '2019-03-07 07:16:20', ''),
(69, 2, 119, NULL, 'Let\'s go and make this money ', 1, NULL, 0, '2019-03-07 07:16:38', ''),
(70, 119, 1, NULL, 'testing again', 1, NULL, 0, '2019-03-07 07:17:06', ''),
(71, 2, 108, NULL, 'babbbbbe i\'M SORRY i AM MAKING THE MESSAGES WORK ', 1, NULL, 0, '2019-03-07 07:17:27', 'Personal'),
(72, 2, 119, NULL, 'We are so close ', 1, NULL, 0, '2019-03-07 07:19:02', ''),
(73, 119, 1, NULL, 'testing again', 1, NULL, 0, '2019-03-07 07:19:39', ''),
(74, 2, 119, NULL, 'We can change the world', 1, NULL, 0, '2019-03-07 07:25:37', ''),
(75, 2, 119, NULL, 'DOE\r\n', 1, NULL, 0, '2019-03-07 07:28:05', ''),
(76, 2, 119, NULL, 'Cool, the scroll works ', 1, NULL, 0, '2019-03-07 07:28:14', ''),
(77, 2, 1, NULL, 'Lets crunch time make the booking page that lena designed. Just steal the tabs from the Create Listing page and change the tab names to match the design. Make the check out page and then tie in the converge code backend. $60-$180 a day being lost every day we dont have a booking page', 1, NULL, 0, '2019-03-07 07:36:17', ''),
(78, 2, 111, NULL, 'Testing', 0, NULL, 0, '2019-03-07 07:39:41', 'Personal'),
(79, 119, 2, NULL, 'Does this new message show up?', 1, NULL, 0, '2019-03-07 07:41:47', 'Personal'),
(80, 2, 108, NULL, 'Why am i here!!!!! Ahh', 1, NULL, 0, '2019-03-07 07:42:02', 'Personal'),
(81, 2, 1, NULL, 'At least this works so fsr. ', 1, NULL, 0, '2019-03-07 07:55:18', ''),
(82, 2, 1, NULL, 'The booking page is $$$$$', 1, NULL, 0, '2019-03-07 07:55:33', ''),
(83, 2, 108, NULL, 'efw', 1, NULL, 0, '2019-03-08 00:53:26', 'Personal'),
(84, 2, 1, NULL, 'Booking page tomorrow (friday) ', 1, NULL, 0, '2019-03-08 00:53:49', ''),
(85, 118, 2, NULL, 'lmao im just now seeing these YO ', 1, NULL, 0, '2019-03-08 02:44:44', ''),
(86, 118, 2, NULL, '\"son\" XD ', 1, NULL, 0, '2019-03-08 02:45:08', ''),
(87, 2, 118, NULL, 'oh good ', 1, NULL, 0, '2019-03-08 07:41:10', ''),
(88, 2, 118, NULL, 'So when you send a message currently, it wont show up on your thread until they reply. ', 1, NULL, 0, '2019-03-08 07:41:40', ''),
(91, 1, 2, NULL, 'test from friends', 1, NULL, 0, '2019-03-09 04:54:06', 'Personal'),
(92, 1, 2, NULL, 'test from friend2', 1, NULL, 0, '2019-03-09 04:57:44', 'Personal'),
(93, 1, 2, NULL, 'What do you think of it?', 1, NULL, 0, '2019-03-10 01:44:21', 'Personal'),
(94, 115, 1, NULL, 'testing speed', 1, NULL, 0, '2019-03-10 01:49:05', 'Personal'),
(95, 1, 115, NULL, 'replying', 1, NULL, 0, '2019-03-10 01:51:08', ''),
(96, 115, 1, NULL, 'testing again', 1, NULL, 0, '2019-03-10 03:19:46', 'Personal'),
(97, 108, 2, NULL, 'O_O', 1, NULL, 0, '2019-03-10 19:29:07', 'Personal'),
(98, 108, 2, NULL, 'pls\r\n', 1, NULL, 0, '2019-03-10 19:29:22', ''),
(99, 2, 108, NULL, 'Hello cookie \r\n', 1, NULL, 0, '2019-03-10 19:31:14', ''),
(100, 2, 108, NULL, 'Do you see that it tells you how many new messages you have?', 1, NULL, 0, '2019-03-10 19:31:27', ''),
(101, 108, 2, NULL, 'whaddup thots', 1, NULL, 0, '2019-03-10 19:31:52', 'Personal'),
(102, 108, 2, NULL, 'where the bitches at', 1, NULL, 0, '2019-03-10 19:32:05', ''),
(103, 2, 108, NULL, 'Stop it. There are no bitches.', 1, NULL, 0, '2019-03-10 19:41:33', ''),
(104, 108, 2, NULL, 'I beg to differ ', 1, NULL, 0, '2019-03-10 19:43:38', 'Personal'),
(105, 128, 2, NULL, 'yo', 1, NULL, 0, '2019-03-12 04:28:40', 'Personal'),
(106, 2, 128, NULL, 'Hey do you see this', 1, NULL, 0, '2019-03-12 04:34:31', ''),
(107, 128, 2, NULL, 'yes!', 1, NULL, 0, '2019-03-12 04:35:58', ''),
(108, 2, 1, NULL, 'This messenber is great. Would be cool if it can popup at the bottom of screens in s fb manner', 1, NULL, 0, '2019-03-15 06:40:32', ''),
(109, 1, 2, NULL, 'yeah im looking into this other issue right now though', 1, NULL, 0, '2019-03-15 06:59:51', 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `message_threads`
--

CREATE TABLE `message_threads` (
  `id` int(11) NOT NULL,
  `msg_to` int(11) NOT NULL,
  `msg_from` int(11) NOT NULL,
  `msg_subject` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL,
  `last_update_by` int(11) NOT NULL,
  `archive_from` int(1) NOT NULL DEFAULT '0',
  `archive_to` int(1) NOT NULL DEFAULT '0',
  `hidden_from` int(1) NOT NULL DEFAULT '0',
  `hidden_to` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `not_uid` int(11) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `uid`, `not_uid`, `body`, `created`, `deleted`) VALUES
(2, 1, 0, 'Banking and Credit Card information is encryted now. If you had already entered this information prior to now it has been deleted.', '2019-03-08 22:38:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `name` text,
  `type` text,
  `breed` text,
  `pedigree` text,
  `disc` text,
  `seller` text,
  `age` text,
  `price` text,
  `contact_phone` text,
  `contact_email` text,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `address` text,
  `shipping` text,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `main_pic` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `uid`, `name`, `type`, `breed`, `pedigree`, `disc`, `seller`, `age`, `price`, `contact_phone`, `contact_email`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `address`, `shipping`, `lat`, `lng`, `main_pic`, `created`, `deleted`, `published`) VALUES
(17, 1, 'Test Dog', 'Dog', 'Mixed', NULL, 'Test Dog', 'Private Home', 'Under 1 Year', '$230', '7201111111', 'none@testing.com', '345', 'Sheridan Boulevard', 'Lakewood', 'CO', '80226', 'United States', '345 Sheridan Boulevard, Lakewood, CO, United States, 80226', 'No', 39.7220201, -105.05418789999999, 'pets-main-17-pexels-photo-1345191.jpeg', '2019-02-14 05:25:15', 0, 0),
(18, 2, 'Kune Kune piglets for sale!', 'Farm', 'Kune Kune pig', NULL, ' -USDA/TPWD Licensed facility -Kune Kune Piglets AKKPS Reg. -Ready to go and accepting deposits -The $100 NON REFUNDABLE DEPOSIT paid at checkout will be credited to the total price -Pickup/Delivery must be made within 7 days of deposit or a $5 per day fee will be charged  Ã¢â‚¬â€¹-Balance due at pickup or before arranged transportation. Ã¢â‚¬â€¹Ã¢â‚¬â€¹-Babies are individually priced based on sex, color and lineage  Ã¢â‚¬â€¹-Neutering is available for an additional $175  Please email for more info or visit www.jandaexotics.com to place your deposit or purhcase your piglet', 'Breeder', 'Under 1 Year', '$900', '(210) 241-1856', 'www.jandaexotics.com', '', '', 'Kingsbury', 'TX', '', 'United States', ' , Kingsbury, TX, United States, ', 'No', 29.6480061, -97.8280575, 'pets-main-18-45233-E79456BD048A4A2FBC32.jpg', '2019-02-14 05:50:38', 0, 0),
(19, 2, 'Tanuki Racoon Dogs for sale!', 'Exotic', 'Racoon Dog (Tanuki)', NULL, 'A famous east asian Racoon dog, the Tanuki. For sale to licensed owner. ', 'Private Home', 'Adult', '$1500', '888-111-7684', 'tanukisourus@prntpage.com', '', '', 'Los Angeles', 'CA', '', 'United States', ' , Los Angeles, CA, United States, ', 'No', 34.0522342, -118.2436849, 'pets-main-19-Raccoon-Dogs.jpg', '2019-02-14 05:54:23', 0, 0),
(20, 2, 'Cannoli Freemont the cat', 'Cat', 'Domestic shorthair', NULL, 'Primary Color: Black And White Secondary Color: White Weight: 9.6875lbs Age: 2yrs 0mths 2wks Animal has been Spayed', 'Shelter', 'Adult', '75', '(303) 744-6076 ', 'rmfr2390@gmail.com', '2390', 'South Delaware Street', 'Denver', 'CO', '80223', 'United States', '2390 South Delaware Street, Denver, CO, United States, 80223', 'No', 39.67322110000001, -104.99203069999999, 'pets-main-20-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 06:44:15', 0, 0),
(21, 2, 'Kona the domestic short hair', 'Cat', 'Domestic short hair', NULL, 'Kona and his brothers are playful and they like carrying toys around in their mouths. They are very sweet and like to cuddle.  Interested in adopting? Please visit our website at www.thecatsmeowanimalrescue.org to fill out an application and view our weekly scheduled adoption events. Questions? Email us at info@thecatsmeowanimalrescue.org. ', 'Shelter', 'Young', '175', ' info@thecatsmeowanimalrescue.org ', ' info@thecatsmeowanimalrescue.org ', '', '', 'Los Angeles', 'CA', '', 'United States', ' , Los Angeles, CA, United States, ', 'No', 34.0522342, -118.2436849, 'pets-main-21-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 06:51:23', 0, 0),
(22, 2, 'Jack the great Catahoula Leopard Dog', 'Mixed', 'Catahoula Leopard Dog', NULL, 'Jack does not like other dogs! So a home with no other dogs is essential.', 'Seller', 'Adult', '75', '(818) 901-0190', 'adoptions@petorphans.org', '7720', 'Gloria Avenue', 'Los Angeles', 'CA', '91406', 'United States', '7720 Gloria Avenue, Los Angeles, CA, United States, 91406', 'No', 34.2109474, -118.47881889999996, 'pets-main-22-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 07:04:40', 0, 0),
(23, 2, 'Petey, a German Shepard Mix', 'Dog', 'German Shepard Mix', 'Mixed', 'Petey is a young, playful silver German Shepherd who was found as a stray. Despite being found on the street, he is house trained, does well in a crate, and is quickly learning commands. What a smart boy! Heâ€™ll need an experienced owner who will continue training and teaching him manners. Heâ€™s just a big old puppy. Petey is super affectionate and follows his foster mom around. He really wants to be loved, and heâ€™d really really love to have some furry siblings to play with! ', 'Seller', 'Adult', '150', 'info@animaljusticeleague.org', 'info@animaljusticeleague.org', '', '', 'Houston', 'TX', '77292', 'United States', ' , Houston, TX, United States, 77292', 'No', 29.83, -95.43, 'pets-main-23-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 07:08:00', 0, 0),
(24, 456, 'Vard Dog', 'Exotic', 'Wolf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.gif', '2019-02-18 09:51:17', 0, 0),
(25, 2, 'Alvin the Doberman', 'Dog', 'Doberman Pincher', 'Mixed', 'Previous name Gunner...Doberman Mix. Prefers a home without cats.', 'Shelter', 'Adult', '$150', '(720) 722-4277', 'hookedondobies@gmail.com', '', '', 'Denver', 'CO', '', 'United States', ' , Denver, CO, United States, ', 'No', 39.7392358, -104.990251, 'pets-main-25-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 22:49:35', 0, 0),
(26, 2, 'Kik And Wechat', 'Cat', 'Domestic shorthair mix', 'Mixed', 'KIK & WECHAT were saved from the NYC ACC\'s At Risk list on October 25th along with their mom, WhatsApp (pictured). They are wonderful, sweet kitties, brother and sister, and we seek to place them together. The kittens play together, eat together, sleep together, chase each other, groom each other and love each other.  KIK & WECHAT are current in vaccinations, spayed/neutered, microchipped and FeLV/FIV tested,  Here is the link to WECHAT & KIK\'s earlier profile on Facebook: https://www.facebook.com/ACC.OfficialAtRiskAnimals/photos/a.367541920454012/367544463787091/?type=3&theater  While we are eager to meet all prospective adopters, we ask that we have your application in advance of scheduling a meet-and-greet with our foster home(s). You may download the application here: http://www.placeforcats.org/wp-content/uploads/2016/09/PFC-Adoption-Application.pdf Or you may email placeforcatsinc@verizon.net and ask for the application to be emailed to you.  Please note that Place For Cats\' Adoption Contract contains a NO DECLAWING clause.  Adopters agree to a $175 fee per kitten and a home visit. ', 'Private Home', 'Under 1 Year', '$350', ' 212-751-2093', 'lancastermia@verizon.net', '', 'FDR Drive', 'New York', 'NY', '10038', 'United States', ' FDR Drive, New York, NY, United States, 10038', 'No', 40.7033294, -74.00627629999997, 'pets-main-26-dl5zpyw5k3jeb.cloudfront.net.jpeg', '2019-02-18 22:58:07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(15) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `visibility` text,
  `title` text,
  `body` text,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `replies` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  `loves` int(11) NOT NULL DEFAULT '0',
  `shares` int(11) NOT NULL DEFAULT '0',
  `flagged` int(11) NOT NULL DEFAULT '0',
  `reply_thread` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `uid`, `visibility`, `title`, `body`, `created`, `deleted`, `likes`, `replies`, `dislikes`, `loves`, `shares`, `flagged`, `reply_thread`) VALUES
(7, 2, 'Everyone', 'Blah its my first post', 'Does this work? Is this real life? ', '2019-02-28 08:06:00', 0, 2, 0, 0, 0, 0, 0, NULL),
(8, 2, 'Everyone', 'Will this be famous?', 'Will we look back at this?', '2019-02-28 08:08:15', 0, 2, 2, 0, 1, 2, 0, NULL),
(23, 1, 'Everyone', 'Will this be famous? reposted from Prntpage Owner', 'Will we look back at this?', '2019-03-09 17:25:36', 0, 1, 0, 0, 1, 0, 0, NULL),
(18, 108, 'Everyone', 'Thursday afternoon thoughts', 'Men & women are enemies, with the enmity of the exploited for the parasite, the parasite for the exploitedâ€”at present they are at the mercy of the advantage that each can take of the others sexual dependenceâ€”. The only point at which the interests of the sexes mergeâ€”is the sexual embrace.\r\n\r\nThe first illusion it is to your interest to demolish is the division of women into two classes the mistress, & the mother every well-balanced & developed woman knows that is not true, Nature has endowed the complete functionsâ€”there are no restrictions on the woman who is so incompletely evolved as to be un-self-conscious in sex, will prove a restrictive influence on the temperamental expansion\r\nof the next generation; the woman who is a poor mistress will be an incompetent motherâ€”an inferior mentalityâ€”& will enjoy an inadequate apprehension of Life.\r\nTo obtain results you must make sacrifices & the first & greatest sacrifice you have to make is of your â€virtue.â€ The fictitious value of a woman as identified with her physical purityâ€”is too easy to stand-by       rendering her lethargic in the acquisition of intrinsic merits of character by which she could obtain a concrete valueâ€”therefore, the fist self-enforced law for the female sex, as a protection against the\r\nman made bogey of virtueâ€”which is the principal instrument of her subjection, would be the unconditional surgical destruction of virginity through-out the female population at\r\npuberty.\r\n\r\nWoman must destroy in themselves, the desire to be lovedâ€” The feeling that it is a personal insult when a man transfers his attention from her to another woman. The desire for comfortable protection instead of an intelligent curiosity & courage in meeting & resisting the pressure of life, sex, or so called love must be reduced to its initial element, honour, grief, sentimentality, pride and & consequently jealousy must be detached from it.\r\nWoman for her happiness must retain her deceptive fragility of appearance, combined with indomitable will, irreducible courage, & abundant health the outcome of sound nervesâ€” Another great illusion is that woman must use all her introspective and clear-sightedness & unbiassed bravery to destroyâ€”for the sake of her self respect is the impurity of sex\r\nthe realization in defiance of superstition that there is nothing impure in sexâ€”except in the mental attitude to itâ€”will constitute an incalculable & wider social regeneration than it is possible for our generation to imagine~', '2019-02-28 20:26:10', 0, 0, 0, 0, 0, 0, 0, NULL),
(36, 2, 'Everyone', 'Where is my profile page ahhhhh ', 'I have no profile page. The profile page and bulletin pages are combined into one :(', '2019-03-15 22:29:17', 0, 0, 0, 0, 0, 1, 0, NULL),
(37, 1, 'Everyone', '', 'test', '2019-03-20 21:28:15', 0, 0, 0, 0, 0, 0, 0, NULL),
(38, 1, 'Everyone', '', 'test', '2019-03-20 21:28:35', 0, 0, 0, 0, 0, 0, 0, NULL),
(39, 118, 'Everyone', 'Where is my profile page ahhhhh  reposted from   Alexander   Portelli', 'I have no profile page. The profile page and bulletin pages are combined into one :(', '2019-03-21 22:22:09', 0, 0, 0, 0, 0, 0, 0, NULL),
(40, 118, 'Everyone', 'Despacito ', 'thats it ', '2019-03-21 22:22:52', 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_reply`
--

CREATE TABLE `post_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` text,
  `reply` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `loves` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  `shares` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `flagged` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_reply`
--

INSERT INTO `post_reply` (`id`, `uid`, `post_id`, `title`, `reply`, `likes`, `loves`, `dislikes`, `shares`, `deleted`, `flagged`, `created`) VALUES
(19, 118, 8, 'Reply to:      Alexander      Portelli', 'A new social media platform manifesting before me :0 ', 1, 1, 0, 0, 0, 0, '2019-03-01 00:46:40'),
(18, 2, 8, 'Reply to:     Alexander     Portelli', 'Yes!', 1, 1, 0, 0, 0, 0, '2019-02-28 19:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `disc` text NOT NULL,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `address` text,
  `lat` double NOT NULL,
  `lng` double DEFAULT NULL,
  `main_pic` text,
  `price` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `uid`, `name`, `type`, `disc`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `address`, `lat`, `lng`, `main_pic`, `price`, `created`, `deleted`, `published`) VALUES
(1, 1, 'Title', 'Agriculture', 'disc', '2354', 'South Broadway', 'Denver', 'CO', '80210', 'United States', '2354 South Broadway, Denver, CO, United States, 80210', 39.6739065, -104.98735520000002, 'services-main-3-1920px-Flag_of_the_United_States.svg.png', '$234', '2019-02-20 09:19:18', 0, 0),
(2, 1, 'Title', 'App Developer', 'Disc', '345', 'Sheridan Boulevard', 'Lakewood', 'CO', '80226', 'United States', '345 Sheridan Boulevard, Lakewood, CO, United States, 80226', 39.7220201, -105.05418789999999, 'services-main-3-1920px-Flag_of_the_United_States.svg.png', '$243', '2019-02-20 09:22:19', 0, 0),
(3, 1, 'Title', 'Automotive', 'Disc', '2342', 'U.S. 287', 'Denver', 'CO', '80211', 'United States', '2342 U.S. 287, Denver, CO, United States, 80211', 39.75211529999999, -105.02495879999998, 'services-main-3-1920px-Flag_of_the_United_States.svg.png', '$52', '2019-02-20 09:28:34', 0, 0),
(4, 108, 'English tutor', 'Tutors', 'English tutor available on Skype', '', '', 'Laramie', 'WY', '', 'United States', ' , Laramie, WY, United States, ', 41.31136689999999, -105.59110069999997, 'default.gif', '$20/hr', '2019-02-21 06:42:25', 0, 0),
(5, 123, 'Will Work For Hire', 'App Developer', 'Online, remote', NULL, NULL, NULL, NULL, NULL, NULL, ' , , , , ', 0, 0, 'services-main-5-Kevin-headshot.jpg', '', '2019-03-07 07:00:32', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `uid`, `post_id`, `deleted`) VALUES
(9, 1, 19, 0),
(8, 1, 8, 0),
(10, 1, 19, 0),
(11, 1, 19, 0),
(12, 1, 8, 0),
(13, 1, 19, 0),
(14, 1, 19, 0),
(15, 1, 19, 0),
(16, 1, 19, 0),
(17, 1, 19, 0),
(18, 1, 19, 0),
(19, 1, 19, 0),
(20, 118, 36, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shares_reply`
--

CREATE TABLE `shares_reply` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares_reply`
--

INSERT INTO `shares_reply` (`id`, `uid`, `post_id`, `deleted`) VALUES
(1, 1, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `title` text NOT NULL,
  `subject` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `payee` int(11) NOT NULL,
  `type` text NOT NULL,
  `listing_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `cat` text NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `distance` text,
  `disc` text NOT NULL,
  `add1` text,
  `add2` text,
  `apt` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `address` text,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `price` text,
  `daily` text,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `year` text NOT NULL,
  `fuel` text,
  `instant_book` int(11) DEFAULT NULL,
  `payment` text,
  `refund` text,
  `amenities` text,
  `main_pic` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `uid`, `cat`, `type`, `name`, `distance`, `disc`, `add1`, `add2`, `apt`, `city`, `state`, `zip`, `country`, `address`, `lat`, `lng`, `price`, `daily`, `make`, `model`, `year`, `fuel`, `instant_book`, `payment`, `refund`, `amenities`, `main_pic`, `created`, `deleted`, `published`) VALUES
(1, 2, 'Vehicles for Sale', 'Bicycle', 'my bicycle', NULL, 'I put together this bike when I found it. It\'s a good bike, a little rusty.', '9400', 'East Iliff Avenue', '', 'Denver', 'CO', '80231', 'United States', '9400 East Iliff Avenue, Denver, CO, United States, 80231', 39.6744394, -104.87971379999999, '$75', NULL, 'Mongoose', 'XL', '2013', 'leg powered', NULL, NULL, NULL, NULL, 'transport-main-1-dks.scene7.com.jpeg', '2019-02-18 23:10:27', 0, 0),
(2, 2, 'Vehicles for Sale', 'Sedan', '2013 Nissan Altima SL (highest trim)', NULL, 'Selling my nissan altima SL. it\'s from 2013 and has about 115,000 miles. It\'s great on gas mileage and is in excellent working order.', '12063', 'East Harvard Avenue', '', 'Aurora', 'CO', '80014', 'United States', '12063 East Harvard Avenue, Aurora, CO, United States, 80014', 39.670578, -104.84808199999998, '$9000', NULL, 'Nissan', 'Altima SL', '2013', 'gas', NULL, NULL, NULL, NULL, 'transport-main-2-image_resize.php.jpeg', '2019-02-18 23:20:44', 0, 0),
(3, 2, 'Vehicles for Rent', 'SUV', 'Hybrid 2014 Subaru Crosstrek XL', NULL, 'Enjoy beautiful Colorado the way it was meant to be, in a Subaru crosstrek. Help us have clean air by supporting a hybrid electric/gas vehicle.', '302', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '302 Stuart Street, Denver, CO, United States, 80219', 39.7215716, -105.0429906, NULL, '60', 'Subaru', 'Crosstrek XL', '2014', 'Hybrid', NULL, NULL, NULL, NULL, 'transport-main-3-DSC3379-300x201.jpg', '2019-02-18 23:35:22', 0, 0),
(4, 2, 'Vehicles for Rent', 'SUV', 'blue subaru crosstrek, perfect for Colorado', NULL, 'This car is made for Colorado. Enjoy allwheel drive with all season tires to navigate the constantly changing weather of Colorado. It\'s very easy to handle with a smooth ride. The car is new and lower miles too. ', '297', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '297 Stuart Street, Denver, CO, United States, 80219', 39.7213028, -105.04328550000002, NULL, '70', 'Subaru', 'Crosstrek', '2016', 'Gas', NULL, NULL, NULL, NULL, 'transport-main-4-Subaru-Crosstrek-2016-river1-695x452.jpg', '2019-02-18 23:40:06', 0, 0),
(5, 2, 'Vehicles for Rent', 'Sedan', 'Rent a classy, luxurious ride for an affordable price', NULL, 'Rent my 2013 nissan altima SL, with a leather interior and heated seats. Also comes with a touchscreen. Tinted windows will give you the privacy you desire on your ride. ', '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '300 Stuart Street, Denver, CO, United States, 80219', 39.72154920000001, -105.042979, NULL, '70', 'Nissan', 'Altima SL', '2013', 'gas', NULL, NULL, NULL, NULL, 'transport-main-5-110609999-1.jpg', '2019-02-18 23:44:28', 0, 0),
(6, 2, 'Vehicles for Sale', 'SUV', '2016 Subaru Crosstrek', NULL, 'Selling my 2016 Subaru Crosstrek. Blue. Great on gas.', '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', '300 Stuart Street, Denver, CO, United States, 80219', 39.72154920000001, -105.042979, '18,000', NULL, 'Subaru', 'Crosstrek', '2016', 'Gas', NULL, NULL, NULL, NULL, 'transport-main-6-Subaru-Crosstrek-2016-river1-695x452.jpg', '2019-02-18 23:59:23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `user_fn` text NOT NULL,
  `user_ln` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_bday` text NOT NULL,
  `user_bmonth` text NOT NULL,
  `user_byear` text NOT NULL,
  `user_phone` text NOT NULL,
  `user_currency` text NOT NULL,
  `user_lang` text NOT NULL,
  `user_photo` text,
  `user_age` smallint(6) DEFAULT NULL,
  `user_join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` tinyint(4) NOT NULL,
  `user_address` text,
  `user_add1` text,
  `user_add2` text,
  `user_apt` text,
  `user_city` text,
  `user_state` text,
  `user_zip` text,
  `user_country` text,
  `user_latitude` double DEFAULT NULL,
  `user_longitude` double DEFAULT NULL,
  `user_ip` text,
  `user_pref` text,
  `user_from` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `user_fn`, `user_ln`, `user_gender`, `user_bday`, `user_bmonth`, `user_byear`, `user_phone`, `user_currency`, `user_lang`, `user_photo`, `user_age`, `user_join_date`, `user_level`, `user_address`, `user_add1`, `user_add2`, `user_apt`, `user_city`, `user_state`, `user_zip`, `user_country`, `user_latitude`, `user_longitude`, `user_ip`, `user_pref`, `user_from`) VALUES
(1, 'admin', 'jhammonddenver@gmail.com', '$2y$10$gfPdHZrRxouY28Dv1EAZW.GsSNkt05yQw.TOgCzR6RrV3vWAj0lpS', 'Prntpage', 'Admin', '          Male', '          18', '         March', '         1981', '7202711228', '          USD', '          English', 'profile-1-prntpage-admin.png', 37, '2019-01-09 11:12:20', 0, '300 Stuart Street, Denver, CO, United States, 80219', '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', 39.72154920000001, -105.042979, '', NULL, 'New Mexico'),
(2, 'Aportelli', 'portellialexander@gmail.com', '$2y$10$ONyLbDgKxs.F3Ksdvth6DO5uv4wqdLhSK4sC2luXoMc41XWaHIMTG', '  Alexander', '  Portelli', '    Male', '  26', '    November', '   1989 ', '         1303-319-3284', '         USD', '         English', 'profile-2-21368831_1948749568711743_8315729321136705059_o.jpg', 29, '2019-01-09 18:39:27', 2, '300 Stuart Street, Denver, CO, United States, 80219', '300', 'Stuart Street', '', 'Denver', 'CO', '80219', 'United States', 39.72154920000001, -105.042979, '', NULL, NULL),
(108, 'samus', 'sierrajurgens@yahoo.com', '$2y$10$QoXWLFDiaUr6MW9WxZoZXOqsHaCPKTRuHyQMb.KUzEmk4758gHve2', 'Samus', 'Aran', 'Female', '25', 'January', '1996', '3072878446', 'USD', 'English', 'avatar_female.png', 23, '2019-02-04 23:36:23', 1, ' , Denver, CO, United States, ', '', '', '', 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '73.34.167.23', NULL, 'Zebes'),
(111, 'TheJurg71', 'thejurg_31@yahoo.com', '$2y$10$emOCE4PIVHRulNg0GWmm8OIE9nshp/YVqUUyE1s4dpgRkmySg2a1i', 'Dalen', 'Jurgens', 'Male', '13', 'January', '1998', '307-999-2875', 'USD', 'English', 'avatar_male.png', 21, '2019-02-11 01:41:42', 1, ' , , WY, United States, ', '', '', '', '', 'WY', '', 'United States', 43.0759678, -107.29028390000002, '66.119.54.18', NULL, ''),
(110, 'dantexpcd', 'dantexpcd@gmail.com', '$2y$10$iTshDv.NVkWI/kkSjo0dA.T0eJ4O3Ue70YAqV6S8OruX2AQzFb5qi', ' frank ', ' marin', ' Male', ' 23', ' October', ' 1997', ' +584269590974', ' USD', ' Spanish', 'avatar_male.png', 21, '2019-02-07 03:57:57', 1, ' , Cocorote, Yaracuy, Venezuela, ', '', '', 'house number fourteen', 'Cocorote', 'Yaracuy', '', 'Venezuela', 10.31649, -68.78617179999998, '190.206.127.221', NULL, 'Venezuela'),
(112, 'MomenaJaved', 'bc123188@gmail.com', '$2y$10$E4UGd1mcpnhLymZIeYmu6O3FQ9Qk69pRN9y4U7A4C7s0koivqxZcm', 'Momena', 'Malik', 'Female', '30', 'March', '1994', '3078088817', 'USD', 'English', 'avatar_female.png', 24, '2019-02-20 20:46:18', 1, ' , Islamabad, Islamabad Capital Territory, Pakistan, ', '', '', 'house #1682 st#26 I-10/2 Islamabad', 'Islamabad', 'Islamabad Capital Territory', '', 'Pakistan', 33.6844202, 73.04788480000002, '39.40.91.31', NULL, 'Islamabad '),
(113, 'testUser', 'test3@ghm.com', '$2y$10$S9CsHsC5shhIxQms9ilhWue0vbTATek.Bfk7IvieGSjWzDn.fH7kS', 'Test', 'User1', 'Male', '1', 'January', '1977', '11111111', 'USD', 'English', 'avatar_male.png', 42, '2019-02-21 13:42:30', 1, ' , Denver, CO, United States, ', '', '', '', 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Denver'),
(114, 'ElJudeo', 'yaakovmarkel@gmail.com', '$2y$10$de.ieSFPLlqlYTtFzgmk3.p/oSEeDo.0b.8ORY03lqg2WOiB3SFq2', 'J', 'M', 'Male', '19', 'December', '1981', '1234567890', 'USD', 'English', 'avatar_male.png', 37, '2019-02-21 23:39:09', 1, ' , Las Vegas, NV, United States, ', '', '', '', 'Las Vegas', 'NV', '', 'United States', 36.1699412, -115.13982959999998, '70.173.91.41', NULL, ''),
(115, 'testUser2', 'notesting@fjdhs.com', '$2y$10$o0Ys7c4YpmMaUUzj6JVgXe99L177agFifDyzEdCLJapXXVZx5zJN6', 'Test', 'User Male', 'Male', '1', 'January', '2006', '22266888', 'USD', 'English', 'avatar_male.png', 13, '2019-02-22 04:01:02', 1, ' , Denver, CO, United States, ', '', '', '', 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Nowhere'),
(116, 'testUser3', 'nosdsd11@fjdhs.com', '$2y$10$3WOzWWtCQ.iWZEqvB5qbpeBTI80rRPe6ILb2G6GjjpOaawQ3horgu', 'Test', 'User Female', 'Female', '17', 'February', '1994', '22266888', 'USD', 'English', 'avatar_female.png', 25, '2019-02-22 04:03:25', 1, ' , Denver, CO, United States, ', '', '', '', 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Nowhere'),
(117, 'alphamalenutrition', 'alphamalenutrition@gmail.com', '$2y$10$W8fFnO4ouactjizbKrUqeOJZKsbNJVvO5selli9l8xc/6cs1Ihq5.', 'Michael', 'Francis', 'Male', '19', 'October', '1992', '7207872522', 'USD', 'English', 'avatar_male.png', 26, '2019-02-22 21:37:57', 1, ' , , , , ', NULL, NULL, '', NULL, NULL, NULL, NULL, 0, 0, '71.218.18.125', NULL, 'New York'),
(118, 'MicahKprnt123', 'micahkogok@gmail.com', '$2y$10$cQ8XmIfNQiRakg0RyaEN8u5VYiqlO.l6kv.zQXe30yfzTJg1ExYmW', 'Micah', 'Kogok', 'Select', '7', 'June', '1996', '3014671741', 'USD', 'English', 'profile-118-meeeee.jpg', 22, '2019-02-27 00:34:50', 1, ' , , , , ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '73.129.51.198', NULL, 'United States'),
(128, 'MyPrntPage', 'solarsoftwareinc2@gmail.com', '$2y$10$PQbfx6E1dxWM7ExEq1ejruQJkiSXVBmlRHbXeaHyinO2IuA7DgC/y', 'B', 'A', 'Male', '2', 'April', '1989', '7207398905', 'USD', 'English', 'avatar_male.png', 29, '2019-03-12 04:26:07', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '73.14.33.188', NULL, 'Los Angeles'),
(119, 'TestUser4', 'asd2342453g@gasdg.com', '$2y$10$7HgceGdvJbclMIGZ7mkDG.zNQUWYJc28y6l5nEDFwsebO3JFcx04K', 'test', 'User4', 'Male', '1', 'January', '2005', '2352342342', 'USD', 'English', 'avatar_male.png', 14, '2019-02-28 08:22:24', 2, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Denver'),
(120, 'TestUser5', '23523462352352sdgsdghdsg@example.com', '$2y$10$kkLuCPE057PUZmWpfDjAYezsImdtHi/F7/kUyxWAu8YRLiMuaX5m.', 'Test', 'User5', 'Male', '1', 'January', '1994', '2354235', 'USD', 'English', 'avatar_male.png', 25, '2019-02-28 08:28:01', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Denver'),
(121, 'testUser6', 'sdgsdgsdgsdgsdf3424@g.com', '$2y$10$tH3irXr6S3WFF9pIutG.0estnrWJUo87eb5as5QGIVTINe3A8KRqq', 'Test', 'User6', 'Male', '19', 'January', '1991', '2135235', 'USD', 'English', 'avatar_male.png', 28, '2019-02-28 08:31:55', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Denver'),
(127, 'JacobSherretts', 'jacobsherretts@gmail.com', '$2y$10$SSTkxRYZCqN55zeZ0.KbVeNUTSMDTmYtSrsYhw9AD6lAuavpXIFam', 'Jacob', 'Sherretts', 'Male', '13', 'November', '1991', '6317478958', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-10 22:57:56', 1, ' , Rensselaer, NY, United States, 12144', '', '', NULL, 'Rensselaer', 'NY', '12144', 'United States', 42.6425794, -73.74289799999997, '24.194.188.122', NULL, 'Long Island '),
(124, 'user', 'admin@test.com', '$2y$10$YYwkay4cH3b8XqAJ0n155O5ldtNwpcunFD0eIqmFYin2oMu8z.ppa', 'user', 'test', 'Male', '19', 'December', '1981', '1232312312312', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-09 03:53:43', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Nowhere'),
(123, 'KevinKelley', 'kevin@kelleysoft.com', '$2y$10$Qwgrv.MdHwkbFU8MIKcSaul7r6ooxygtfAkmQ4TRpTDU6fsmgse/6', 'Kevin', 'Kelley', 'Male', '6', 'July', '1964', '+639153423702', 'USD', 'English', 'avatar_male.png', 54, '2019-03-07 06:58:48', 1, ' , , , , ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '180.191.155.50', NULL, 'La Junta, Colorado'),
(125, 'NewUser', 'no234@fjdhs.com', '$2y$10$Vo2drlXqslLocFND8cpiG.u1NKynafweDUJhMqZLn.iKud8SEwQRq', 'New', 'User', 'Male', '17', 'November', '1989', '22266888', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-09 04:01:04', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Nowhere'),
(126, 'NewestUser', 'no234@fjdsgsdgsdfs323dhs.com', '$2y$10$Am3ZjwqjYPtd30n8lxp3JOUztgCw/wS64TrYN.1qd6dij6KgYIA16', 'John', 'Smith', 'Male', '1', 'January', '1993', '33435553434', 'USD', 'English', 'avatar_male.png', 26, '2019-03-09 04:16:27', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '75.166.203.61', NULL, 'Denver'),
(129, 'thea252', 'thea.smuckler@yahoo.com', '$2y$10$fpbzn2/HVirw6f3NuNji5upWrFJnyHvjq/E32RJQMW.mAjsyFUi02', 'Thea', 'Smuckler', 'Female', '6', 'December', '1989', '5164458825', 'USD', 'English', 'avatar_female.png', NULL, '2019-03-15 23:18:48', 1, ' , Goshen, NY, United States, 10924', '', '', NULL, 'Goshen', 'NY', '10924', 'United States', 41.4020382, -74.32431910000003, '98.15.194.173', NULL, 'Albany, NY'),
(130, 'Marine2568', 'c.cotner@aol.com', '$2y$10$vFlax9IL64fLoxG/A2Ny1utA8P99budqmTM6sZUEz/cDyPU0vNNwe', 'Caleb', 'Cotner', 'Male', '20', 'Select', '1990', '9012685804', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-15 23:53:42', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '166.137.143.112', NULL, 'Tennessee '),
(131, 'Solomon', 'trysolomon@gmail.com', '$2y$10$/0R/NVFH95mWP2IxK2/OL.ZhgF1TslTmnJoTAZaHAPNU1Odsx/wnO', 'Solomon', 'Molina', 'Male', '25', 'November', '1990', '3034728894', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-18 03:08:58', 1, ' , , , , ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '108.194.76.232', NULL, 'San Antonio, Texas'),
(132, 'Savedgrace01', 'savedgrace01@gmail.com', '$2y$10$HoxeUugDrFMRc6/sA8SSfewLUjqlYM3j5muAMoTTWAbI69Dq9U2lW', 'Barbara', 'Acheampong', 'Female', '9', 'August', '1990', '7202359550', 'USD', 'English', 'avatar_female.png', 28, '2019-03-18 05:34:55', 1, '9700 East Iliff Avenue, Denver, CO, United States, 80231', '9700', 'East Iliff Avenue', NULL, 'Denver', 'CO', '80231', 'United States', 39.6730948, -104.87344689999998, '66.87.151.24', NULL, 'Colorado'),
(133, 'thecaffeineco19', 'thecaffeinecoinc@gmail.com', '$2y$10$sUTCZ8pw6mqhsKrjCZwZK.AekdughiCmcs44r8BYN9PRzedYaIbwe', 'Benny', 'Armstrong', 'Male', '12', 'November', '1988', '7205398905', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-20 19:25:16', 1, ' , Denver, CO, United States, ', '', '', NULL, 'Denver', 'CO', '', 'United States', 39.7392358, -104.990251, '73.14.33.188', NULL, 'Los Angeles'),
(134, 'rhoee', 'contact@rhoee.com', '$2y$10$C.LnDURHPrGI5ISPYMLiiOOraelsPrgT8hNidTKqVWfFogSJQ/Jwe', 'Rhoee', 'Amar', 'Male', '11', 'October', '1988', 'contact@rhoee.com', 'USD', 'English', 'avatar_male.png', NULL, '2019-03-21 01:07:07', 1, ' , Beverly Hills, CA, United States, ', '', '', NULL, 'Beverly Hills', 'CA', '', 'United States', 34.0736204, -118.4003563, '107.184.247.93', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_cc`
--

CREATE TABLE `user_cc` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `emonth` int(11) NOT NULL,
  `eyear` int(11) NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `country` text NOT NULL,
  `number` text NOT NULL,
  `last_four` int(11) NOT NULL,
  `cvv` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cc`
--

INSERT INTO `user_cc` (`id`, `uid`, `fname`, `lname`, `emonth`, `eyear`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `number`, `last_four`, `cvv`) VALUES
(6, 1, 'Jonathan', 'Hammond', 2, 19, '232 Stuart Street', '', 'Denver', 'CO', '80110', 'US', '$2y$10$/3lCN5OQhU.5ma3fihEAde6Io4xM93RR4lWubXK6yXs0e.G205BYy', 1234, '$2y$10$54CUj9y9A02DPOPm.6QLQ./EflENaRCMBDEwyNcadRsVA7YL83L2O');

-- --------------------------------------------------------

--
-- Table structure for table `user_payout`
--

CREATE TABLE `user_payout` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` text,
  `type` text,
  `add1` text,
  `add2` text,
  `city` text,
  `state` text,
  `zip` text,
  `country` text,
  `account` text,
  `last_four` int(11) DEFAULT NULL,
  `routing` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_payout`
--

INSERT INTO `user_payout` (`id`, `uid`, `name`, `type`, `add1`, `add2`, `city`, `state`, `zip`, `country`, `account`, `last_four`, `routing`) VALUES
(21, 1, 'Jonathan Hammond', 'Checking', '232 Stuart Street', '', 'Denver', 'CO', '80223', 'US', '$2y$10$an6muJrcqcmFodIrW6.pEeBDCvW3VI7Oh/oB0F7jbJ5WiDHnVD8Wu', 1234, '$2y$10$YpkBsXYi/l06aUiY6/IseuyJdiV1cHSQk6fYlVRdPuFaVE.JVWxDi');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(15) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `vid_title` text,
  `vid_description` text,
  `vid_type` mediumtext,
  `vid_file_type` varchar(255) DEFAULT NULL,
  `vid_comments_thread` int(15) DEFAULT NULL,
  `vid_rating` tinyint(4) DEFAULT NULL,
  `visibility` tinyint(4) DEFAULT NULL,
  `vid_likes` int(11) DEFAULT NULL,
  `vid_loves` int(11) DEFAULT NULL,
  `vid_hates` int(11) DEFAULT NULL,
  `vid_shares` int(11) DEFAULT NULL,
  `vid_funny` int(11) DEFAULT NULL,
  `vid_angry` int(11) DEFAULT NULL,
  `vid_category_main` text,
  `vid_category_sub` text,
  `vid_user_upload` text,
  `file` text,
  `profit` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocked`
--
ALTER TABLE `blocked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnbs`
--
ALTER TABLE `bnbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dislikes_reply`
--
ALTER TABLE `dislikes_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flagged_post`
--
ALTER TABLE `flagged_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flagged_reply`
--
ALTER TABLE `flagged_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodtest`
--
ALTER TABLE `foodtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_req`
--
ALTER TABLE `friend_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_notification`
--
ALTER TABLE `hide_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_post`
--
ALTER TABLE `hide_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_reply`
--
ALTER TABLE `hide_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestest`
--
ALTER TABLE `homestest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes_reply`
--
ALTER TABLE `likes_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loves`
--
ALTER TABLE `loves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loves_reply`
--
ALTER TABLE `loves_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_threads`
--
ALTER TABLE `message_threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_reply`
--
ALTER TABLE `post_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares_reply`
--
ALTER TABLE `shares_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `user_cc`
--
ALTER TABLE `user_cc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payout`
--
ALTER TABLE `user_payout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked`
--
ALTER TABLE `blocked`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bnbs`
--
ALTER TABLE `bnbs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dislikes_reply`
--
ALTER TABLE `dislikes_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flagged_post`
--
ALTER TABLE `flagged_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `flagged_reply`
--
ALTER TABLE `flagged_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foodtest`
--
ALTER TABLE `foodtest`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `friend_req`
--
ALTER TABLE `friend_req`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `hide_notification`
--
ALTER TABLE `hide_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `hide_post`
--
ALTER TABLE `hide_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hide_reply`
--
ALTER TABLE `hide_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `homestest`
--
ALTER TABLE `homestest`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `likes_reply`
--
ALTER TABLE `likes_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `loves`
--
ALTER TABLE `loves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `loves_reply`
--
ALTER TABLE `loves_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `message_threads`
--
ALTER TABLE `message_threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `post_reply`
--
ALTER TABLE `post_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shares_reply`
--
ALTER TABLE `shares_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `user_cc`
--
ALTER TABLE `user_cc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_payout`
--
ALTER TABLE `user_payout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
