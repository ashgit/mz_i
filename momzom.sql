-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2016 at 03:04 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `momzom`
--
CREATE DATABASE IF NOT EXISTS `momzom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `momzom`;

-- --------------------------------------------------------

--
-- Table structure for table `kidz_business`
--

CREATE TABLE IF NOT EXISTS `kidz_business` (
  `item_id` varchar(100) NOT NULL,
  `contactno` text,
  `email` text,
  `logo` text,
  `onlineoffline` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `title` text,
  `website` text,
  `weekno` int(11) NOT NULL DEFAULT '0',
  `address` text,
  `city` text,
  `creator_email` text,
  `description` mediumtext,
  `images` longtext,
  `kid_age` text,
  `lat` float(10,6) DEFAULT NULL,
  `lang` float(10,6) DEFAULT NULL,
  `kAccessories` int(11) NOT NULL DEFAULT '0',
  `kClothes` int(11) NOT NULL DEFAULT '0',
  `kFeeding` int(11) NOT NULL DEFAULT '0',
  `kFurniture` int(11) NOT NULL DEFAULT '0',
  `kKidsGear` int(11) NOT NULL DEFAULT '0',
  `kStationery` int(11) NOT NULL DEFAULT '0',
  `kToys` int(11) NOT NULL DEFAULT '0',
  `productslist` longtext,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_business`
--

INSERT INTO `kidz_business` (`item_id`, `contactno`, `email`, `logo`, `onlineoffline`, `status`, `timestamp`, `title`, `website`, `weekno`, `address`, `city`, `creator_email`, `description`, `images`, `kid_age`, `lat`, `lang`, `kAccessories`, `kClothes`, `kFeeding`, `kFurniture`, `kKidsGear`, `kStationery`, `kToys`, `productslist`) VALUES
('00b95a8243eb44018620d8162d273119', '0000000000', ' ', ' ', 1, 0, 1453051080771, 'iiii', ' ', 4, 'sector 56', 'gurgaon', 'dssdsdds', NULL, NULL, NULL, 28.379999, 77.120003, 0, 0, 0, 0, 0, 0, 0, NULL),
('592363b7520a4e6f9dc92e4f2e3dd0b5', '0000000000', ' ', 'img/business/b2cf0a91dbea4c998869ba058e1a280e.', 1, 0, 1452966544856, 'hhhhh', 'decorwalk.com', 3, 'sector 55', 'noida', 'ssss', NULL, NULL, NULL, 28.379999, 77.120003, 0, 1, 0, 1, 0, 0, 0, ' img/business/85b227c8639f40069cbc1a4a6f1575c4.;products/business/e4c1495f6ec34c7891833a62a5f44b52.'),
('73ffb5d0b9234e4e9a269072bdb5a77d', '0000000000', ' ', 'img/business/fb64d12cb7114363b27918e430620097.', 1, 0, 1452948057375, 'ffffff', 'deccc', 3, 'sector 132', 'noida', NULL, NULL, NULL, NULL, 28.379999, 77.120003, 0, 1, 0, 1, 0, 0, 0, ' img/business/c3633f3543f14a38a33716b8fbbb43e1.;products/business/15ae658d5ec34f3cb02838bc76f78df8.'),
('f33fd5fda0a34dd49c8ffa95849ad36d', '0000000000', ' ', 'img/business/b86d3023bf8646d29c3e5278d7db65ca.png', 1, 0, 1453050824085, 'eeeee', 'decrowalk.com', 4, 'ahinsa khand indirapuram', 'ghaziabad', 'dssdsdds', NULL, NULL, NULL, 28.379999, 77.120003, 1, 1, 0, 0, 0, 0, 0, NULL),
('sdsds', '9205529523', 'nupuragarwal02@gmail.com', NULL, NULL, 0, 0, 'cccccccccc', 'ddddddd', 0, 'sector 132 noida', NULL, NULL, NULL, NULL, NULL, 28.548813, 77.346046, 1, 1, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_business_reviews`
--

CREATE TABLE IF NOT EXISTS `kidz_business_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `email` text NOT NULL,
  `review` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kidz_business_reviews`
--

INSERT INTO `kidz_business_reviews` (`id`, `item_id`, `timestamp`, `email`, `review`) VALUES
(3, 'sdsds', 1452272955664, 'ashiniit@gmail.com', 'iiiiiiiiii'),
(4, 'sdsds', 1452273217577, 'ashiniit@gmail.com', 'eeeee'),
(5, 'sdsds', 1452273396858, 'ashiniit@gmail.com', 'mmmm');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_discussions`
--

CREATE TABLE IF NOT EXISTS `kidz_discussions` (
  `item_id` varchar(100) NOT NULL,
  `comment_count` int(11) NOT NULL DEFAULT '0',
  `add_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `topic` longtext NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_discussions`
--

INSERT INTO `kidz_discussions` (`item_id`, `comment_count`, `add_timestamp`, `email`, `topic`, `timestamp`) VALUES
('366f56c0684f42cfad5ad019f27efb1f', 3, '2016-01-19 04:18:22', 'ashiniit@gmail.com', 'My kids are always fighting! How do I deal with it?', 1453177093815),
('74bbef4e111f4235959e25f5caf537b1', 8, '2016-01-08 17:33:00', 'ashiniit@gmail.com', 'bbbbb', 1452274379058),
('b642b4ed0f274d7ca5330444020697c3', 10, '2016-01-18 17:02:50', 'ashiniit@gmail.com', 'How to teach my child healthy eating and exercise habits?', 1453136569255),
('d5d2057505b04ce99372ea516fbda779', 1, '2016-01-19 04:03:07', 'ashiniit@gmail.com', 'which is best food for 3 years kid which is tasty n healthy:)', 1453176186421),
('e1a68fcf10c0419b8b14494d28b1c40f', 4, '2016-01-05 14:56:10', 'ashiniit@gmail.com', 'ooooo', 1452005768671),
('ssasadad', 8, '2016-01-04 03:29:07', 'ashiniit@gmail.com', 'dont know', 2),
('uniqpostid', 1, '2016-01-05 14:20:26', 'ashiniit@gmail.com', 'ffvg', 1452003622902);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_discussion_comment`
--

CREATE TABLE IF NOT EXISTS `kidz_discussion_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `kidz_discussion_comment`
--

INSERT INTO `kidz_discussion_comment` (`id`, `item_id`, `timestamp`, `email`, `comment`) VALUES
(26, 'ssasadad', 1452005204469, 'ashiniit@gmail.com', '5ttttt'),
(27, 'uniqpostid', 1452005535101, 'ashiniit@gmail.com', 'bzhsjs'),
(28, 'e1a68fcf10c0419b8b14494d28b1c40f', 1452005775960, 'ashiniit@gmail.com', 'jzjzjz'),
(29, 'e1a68fcf10c0419b8b14494d28b1c40f', 1452097252351, 'ashiniit@gmail.com', ',hhhhh'),
(30, 'e1a68fcf10c0419b8b14494d28b1c40f', 1452097311724, 'ashiniit@gmail.com', ',hhffgkfkdj'),
(31, 'e1a68fcf10c0419b8b14494d28b1c40f', 1452356431847, 'ashiniit@gmail.com', 'cchytg'),
(32, '74bbef4e111f4235959e25f5caf537b1', 1452356518032, 'ashiniit@gmail.com', 'wbebe'),
(33, '74bbef4e111f4235959e25f5caf537b1', 1452356553820, 'ashiniit@gmail.com', 'wbHsuszjjz'),
(34, '74bbef4e111f4235959e25f5caf537b1', 1452356820844, 'ashiniit@gmail.com', '1111'),
(35, '74bbef4e111f4235959e25f5caf537b1', 1452357175877, 'nupuragarwal02@gmail.com', 'eeeee'),
(36, '74bbef4e111f4235959e25f5caf537b1', 1452403251387, 'ashiniit@gmail.com', 'gddvj'),
(37, '74bbef4e111f4235959e25f5caf537b1', 1452403260015, 'ashiniit@gmail.com', 'xndndmx'),
(38, '74bbef4e111f4235959e25f5caf537b1', 1452403264609, 'ashiniit@gmail.com', 'wpppp'),
(39, '74bbef4e111f4235959e25f5caf537b1', 1452403268529, 'ashiniit@gmail.com', 'mmmmmm'),
(40, '366f56c0684f42cfad5ad019f27efb1f', 1453178212886, 'ashiniit@gmail.com', 'qwe'),
(41, '366f56c0684f42cfad5ad019f27efb1f', 1453178244483, 'ashiniit@gmail.com', 'tttt'),
(42, 'd5d2057505b04ce99372ea516fbda779', 1453178447312, 'ashiniit@gmail.com', 'pastrt'),
(43, '366f56c0684f42cfad5ad019f27efb1f', 1453179025588, 'ashiniit@gmail.com', 'jjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_events`
--

CREATE TABLE IF NOT EXISTS `kidz_events` (
  `item_id` varchar(100) NOT NULL,
  `activities` mediumtext,
  `address` mediumtext,
  `city` text,
  `contactno` text,
  `creator_email` mediumtext,
  `date_duration` text,
  `description` mediumtext,
  `email` text,
  `enddate` bigint(20) NOT NULL DEFAULT '0',
  `fees` text,
  `images` longtext,
  `kid_age` text,
  `logo` mediumtext,
  `startdate` bigint(20) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `timing` text,
  `title` text,
  `website` text,
  `weekno` int(11) NOT NULL DEFAULT '0',
  `lat` float(10,6) DEFAULT '0.000000',
  `lang` float(10,6) NOT NULL DEFAULT '0.000000',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_events`
--

INSERT INTO `kidz_events` (`item_id`, `activities`, `address`, `city`, `contactno`, `creator_email`, `date_duration`, `description`, `email`, `enddate`, `fees`, `images`, `kid_age`, `logo`, `startdate`, `status`, `timestamp`, `timing`, `title`, `website`, `weekno`, `lat`, `lang`) VALUES
('2550c93d0be046f5a3ac15c73781c169', ' ', 'noida', 'noida', '0000000000', 'dssdsdds', ' ', 'rrerere', ' ', 0, ' ', ' ', '0', ' ', 0, 0, 1453052559319, ' ', 'eeee', ' ', 4, 0.000000, 0.000000),
('kjhkjh', 'Dancing Competition', 'Sector 132, Noida', 'Noida', '9818020545', 'ashiniit@gmail.com', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'img/events/1453332817_dancer_2.png', 0, 0, 0, NULL, 'activity 1', NULL, 0, 28.513680, 77.376938),
('mkmk', 'General Knowledge Quiz Competetion', 'Sector 12, Noida', 'Noida', '9818020545', 'ashiniit@gmail.com', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'img\\events\\1453333633_bookcase.png', 0, 0, 0, NULL, 'activity 2', NULL, 0, 28.523680, 77.377937),
('njknj', 'Science Exhibition', 'Sector 45, Noida', 'Noida', '9958795408', 'ashiniit@gmail.com', NULL, 'afafsgffsg', 'ashiniit@gmail.com', 0, '300/-', NULL, NULL, 'img/events/1453332505_laboratory.png', 0, 0, 0, '5-9 pm', 'activity 3', NULL, 0, 28.548813, 77.347046),
('njknj123', 'Puppet Festival', 'Sector 25, Noida', 'Noida', '9818020545', 'ashiniit@gmail.com', NULL, NULL, NULL, 0, NULL, NULL, NULL, '', 0, 0, 0, NULL, 'activity 4', NULL, 0, 28.513680, 77.377937);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_events_reviews`
--

CREATE TABLE IF NOT EXISTS `kidz_events_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `email` text NOT NULL,
  `review` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kidz_events_reviews`
--

INSERT INTO `kidz_events_reviews` (`id`, `item_id`, `timestamp`, `email`, `review`) VALUES
(1, 'njknj123', 1452186642275, 'manna.sandipan@yahoo.in', 'tttt'),
(2, 'njknj', 1452223254273, 'ashiniit@gmail.com', 'nxjskwnxx');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_follow`
--

CREATE TABLE IF NOT EXISTS `kidz_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_following` mediumtext NOT NULL,
  `email_tofollow` mediumtext NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kidz_follow`
--

INSERT INTO `kidz_follow` (`id`, `email_following`, `email_tofollow`, `timestamp`) VALUES
(3, 'ashiniit@gmail.com', 'manna.sandipan@yahoo.in', 1453777718461);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_hobby`
--

CREATE TABLE IF NOT EXISTS `kidz_hobby` (
  `item_id` varchar(100) NOT NULL,
  `contactno` text,
  `email` text,
  `logo` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `title` text,
  `website` text,
  `weekno` int(11) NOT NULL DEFAULT '0',
  `address` text,
  `city` text,
  `creator_email` text,
  `description` mediumtext,
  `images` longtext,
  `kid_age` text,
  `lat` float(10,6) DEFAULT NULL,
  `lang` float(10,6) DEFAULT NULL,
  `kBrainAndPersonality` int(11) NOT NULL DEFAULT '0',
  `kCookAndBake` int(11) NOT NULL DEFAULT '0',
  `kDanceAndMusic` int(11) NOT NULL DEFAULT '0',
  `kPaintAndCraft` int(11) NOT NULL DEFAULT '0',
  `kSportsAndGames` int(11) NOT NULL DEFAULT '0',
  `activities` longtext,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_hobby`
--

INSERT INTO `kidz_hobby` (`item_id`, `contactno`, `email`, `logo`, `status`, `timestamp`, `title`, `website`, `weekno`, `address`, `city`, `creator_email`, `description`, `images`, `kid_age`, `lat`, `lang`, `kBrainAndPersonality`, `kCookAndBake`, `kDanceAndMusic`, `kPaintAndCraft`, `kSportsAndGames`, `activities`) VALUES
('167a2e8febfd41f8ba5fa37a98ee9367', '9958795408', 'ashiniit@gmail.com', 'img/eventfiles/e548149147024446a1264e6ae917911b.psd', 0, 0, '12345', 'decorwalk.com', 4, 'sECTOR 132', 'NOIDA', 'dssdsdds', '6789', ' img/eventfiles/37ceb5d0d129485a81fdb881f13b5ed4.png;img/eventfiles/e666dd773e3d459c829386261fe450ae.PNG', '1-2 years', 28.379999, 77.120003, 0, 1, 0, 0, 1, 'salsa dancing'),
('63654ae5523d4b94a915ce75d8e7e0ba', '123456780', 'ashiniit@gmail.com', 'img/eventfiles/67625b3f3a6b4d2a9cdab3adf4ab88ed.psd', 0, 0, '12345', 'decorwalk.com', 4, 'ahinsa khand ', 'indirapuram', 'dssdsdds', '6789', ' img/eventfiles/3b0c6fe21f8b40fea89573f83fac2b86.png', '1-2 years', 28.640036, 77.370483, 0, 1, 0, 0, 1, 'salsa dancing'),
('8205f4bdb7c84787a777553085b9288b', '9958795408', 'ashiniit@gmail.com', 'img/eventfiles/007e0d3136794857ac047ab2fb9a12f8.psd', 0, 0, '12345', 'decorwalk.com', 4, 'sECTOR 132', 'NOIDA', NULL, '6789', ' img/eventfiles/fcdfdd99022f4839bd28998ae093388a.png', '1-2 years', 28.379999, 77.120003, 0, 1, 0, 0, 1, 'salsa dancing'),
('ad45af7e512c4f1fb822f6e2cd6c85a5', '9958795408', 'ashiniit@gmail.com', 'img/eventfiles/117d77b778214cc58eb7a71bee0ce62b.psd', 0, 0, '12345', 'decorwalk.com', 4, 'sECTOR 132', 'NOIDA', NULL, '6789', ' img/eventfiles/1c27269c374746cb9ac08631bbfb991a.png', '1-2 years', 28.513678, 77.376945, 0, 1, 0, 0, 1, 'salsa dancing'),
('adgdasgsad', NULL, NULL, NULL, 0, 0, 'assddasfgdfasadfdf', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 28.548813, 77.346046, 1, 0, 0, 0, 0, NULL),
('c2f2ba90f2cd4e5f8ce4954ceb302211', '0000000000', ' ', ' ', 0, 0, 'dddddd', 'decorwalk.com', 4, 'sector 45 ', 'noida', 'dssdsdds', 'ddddd', ' ', '0', 28.379999, 77.120003, 1, 0, 0, 1, 0, 'sdfgsfdgfdsg');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_hobby_reviews`
--

CREATE TABLE IF NOT EXISTS `kidz_hobby_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `email` text NOT NULL,
  `review` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kidz_hobby_reviews`
--

INSERT INTO `kidz_hobby_reviews` (`id`, `item_id`, `timestamp`, `email`, `review`) VALUES
(3, 'adgdasgsad', 1452276430921, 'ashiniit@gmail.com', 'tyyyy'),
(4, 'adgdasgsad', 1452276441363, 'ashiniit@gmail.com', 'mmmm');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_home`
--

CREATE TABLE IF NOT EXISTS `kidz_home` (
  `item_id` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `email` tinytext NOT NULL,
  `imageurl` text NOT NULL,
  `kid_guid` varchar(100) NOT NULL,
  `kid_type` tinyint(4) NOT NULL,
  `month` varchar(32) NOT NULL,
  `storelocation` varchar(1024) NOT NULL,
  `storename` varchar(256) NOT NULL,
  `storetype` tinyint(4) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `commentcount` int(11) NOT NULL,
  `likecount` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_home`
--

INSERT INTO `kidz_home` (`item_id`, `description`, `email`, `imageurl`, `kid_guid`, `kid_type`, `month`, `storelocation`, `storename`, `storetype`, `timestamp`, `commentcount`, `likecount`) VALUES
('1c9f1198236941f0bc7f5b7c60a88fd2', 'This is the best party wear i bought from for 1500 Rs. Awesome quality and decent price.', 'ashiniit@gmail.com', 'img/shopping/fcc949c6ef564a41828d74a3492787d1.jpg', '42a4fb5cd4d6484290530f0fd3524b60', 3, '1451586600000', ' ', ' ', -1, 1453481666585, 0, 0),
('39c7cd0cc06042449dc806aea54e2089', ' ', 'manna.sandipan@yahoo.in', 'images/shopping/8f399f02ea334a75be839fccbd2e41e9..jpg', 'ba2ff895392e47979db662aba3dff692', 1, '1451586600000', ' ', ' ', -1, 1452626411739, 0, 0),
('3c164f7dd9e943daa9d57e4b4952a38b', 'This is the best party wear i bought for 1500 Rs. Awesome quality and decent price.', 'ashiniit@gmail.com', 'img/shopping/c2fd6de5608b4a65b95299b2363f1fff.jpg', '42a4fb5cd4d6484290530f0fd3524b60', 3, '1451586600000', ' ', '', -1, 1453483055517, 0, 3),
('4b1c5ce026884a80aa398f3620e54450', ' ', 'manna.sandipan@yahoo.in', 'images/shopping/a60aa828cea94577a3d3d83a85bc3133..jpg', 'e5cccd6c5a454c68b9ee47045e528bbd', 0, '1451586600000', ' ', ' ', -1, 1452626340428, 0, 0),
('61b3f39a99ec4d42a059ba9425bae476', ' ', 'manna.sandipan@yahoo.in', 'images/shopping/f90d21dcfc1b4664a93b94ea9d4ad990.jpg', '209ef5fc65f94eb3ac6ab0e3ca92cc3d', 1, '1451586600000', ' ', ' ', -1, 1452713471717, 0, 0),
('885984312620418385f3d252e7325d3e', ' ', 'manna.sandipan@yahoo.in', 'images/shopping/a121361f93d74af199507031d6052d09.jpg', '209ef5fc65f94eb3ac6ab0e3ca92cc3d', 1, '1451586600000', ' ', ' ', -1, 1452713978708, 0, 0),
('ba6f2a5be7f34b63ba6b1dfdd9135f2d', ' ', 'manna.sandipan@yahoo.in', 'images/shopping/d5441435d2b04acaa3ad2a54afaea1b1..jpg', '79ff9f293bbd46a1891ac64c101d45ab', 5, '1451586600000', ' ', ' ', -1, 1452626379962, 0, 0),
('bfe0a3b5e73c4d079688d83a1764b415', 'hello', 'manna.sandipan@yahoo.in', 'images/shopping/ac61991ca8f64fcb934d527530376b95..jpg', 'cd80b5f07cd8448da02bba606770321c', 0, '1451586600000', ' ', ' ', -1, 1452626265487, 0, 0),
('e0de0a6bdd0140308543f50a40725987', 'great', 'manna.sandipan@yahoo.in', 'images/shopping/353546b1e5b04576928048215bb3fdac.jpg', '2817bda243194c20bd20e883fd5c05df', 3, '1451586600000', ' ', 'howdy', -1, 1452712753786, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_home_comments`
--

CREATE TABLE IF NOT EXISTS `kidz_home_comments` (
  `item_id` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_home_comments`
--

INSERT INTO `kidz_home_comments` (`item_id`, `timestamp`, `comment`, `email`) VALUES
('cfb97c16a935428191335304d7210e90', 1452527412996, 'great post', 'manna.sandipan@yahoo.in'),
('399975cecfa54502941d9814eb146c05', 1452609416397, 'testing comment table', 'manna.sandipan@yahoo.in'),
('e0de0a6bdd0140308543f50a40725987', 1453175912350, 'vvbnk', 'ashiniit@gmail.com'),
('1c9f1198236941f0bc7f5b7c60a88fd2', 1453481691174, 'awrsom', 'ashiniit@gmail.com'),
('1c9f1198236941f0bc7f5b7c60a88fd2', 1453482531460, 'not gud', 'ashiniit@gmail.com'),
('3c164f7dd9e943daa9d57e4b4952a38b', 1453790138058, 'vx bhg', 'ashiniit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_home_like`
--

CREATE TABLE IF NOT EXISTS `kidz_home_like` (
  `item_id` varchar(100) NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_home_like`
--

INSERT INTO `kidz_home_like` (`item_id`, `email`) VALUES
('3c164f7dd9e943daa9d57e4b4952a38b', 'ashiniit@gmail.com'),
('3c164f7dd9e943daa9d57e4b4952a38b', 'ashiniit@gmail.com'),
('3c164f7dd9e943daa9d57e4b4952a38b', 'ashiniit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_merchant_user`
--

CREATE TABLE IF NOT EXISTS `kidz_merchant_user` (
  `email` varchar(100) NOT NULL,
  `added_timestamp` bigint(20) DEFAULT NULL,
  `last_accessed_timestamp` bigint(20) DEFAULT NULL,
  `login_from` int(11) DEFAULT NULL,
  `password` mediumtext,
  `name` text,
  `picture` mediumtext,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_merchant_user`
--

INSERT INTO `kidz_merchant_user` (`email`, `added_timestamp`, `last_accessed_timestamp`, `login_from`, `password`, `name`, `picture`) VALUES
('ashiniit1@gmail.com', 1452934855160, NULL, 0, 'ss', 'ss', ''),
('ashiniit@gmail.com', 1452934800292, 1453348183895, 0, 'assa', 'ashish', ''),
('assa', 1452934745840, NULL, 0, 'assa', 'asasas', ''),
('assa11', 1453568100211, NULL, 0, 'saas', 'ssaas', ''),
('ssss', 1452966438821, NULL, 0, 'rrrr', 'ffff', '');

-- --------------------------------------------------------

--
-- Table structure for table `kidz_notification`
--

CREATE TABLE IF NOT EXISTS `kidz_notification` (
  `id` varchar(100) NOT NULL,
  `email` mediumtext,
  `initiator_image` mediumtext,
  `initiator_name` mediumtext,
  `post_id` mediumtext,
  `post_type` int(11) DEFAULT '0',
  `receiver_email` mediumtext,
  `timestamp` bigint(20) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `readstate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_notification`
--

INSERT INTO `kidz_notification` (`id`, `email`, `initiator_image`, `initiator_name`, `post_id`, `post_type`, `receiver_email`, `timestamp`, `type`, `readstate`) VALUES
('0c85e510b6e94714ba3db40246caaf43', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'nupuragarwal02@gmail.com', 1452357199223, 2, 0),
('1596cbff98b44797bd443127f559ca39', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '366f56c0684f42cfad5ad019f27efb1f', 2, 'ashiniit@gmail.com', 1453179025787, 2, 1),
('15c1885dedc94053b84283ffe52b110c', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', 'e1a68fcf10c0419b8b14494d28b1c40f', 2, 'ashiniit@gmail.com', 1452356432276, 2, 1),
('18a06dd4155d49ef9e7b4cfb2d769cf0', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452403254970, 2, 1),
('1b65f8e533174ae1818af140b212a61e', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '366f56c0684f42cfad5ad019f27efb1f', 2, 'ashiniit@gmail.com', 1453178244699, 2, 1),
('32868041b4b3411fb77305b0039abc8d', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452356553952, 2, 1),
('5e5c97cf64204850a1525c84a2de8a18', 'ashiniit@gmail.com', 'https://graph.facebook.com/1781597215/picture?height=150&type=normal&width=150', 'Pooja Bishnoi', '1c9f1198236941f0bc7f5b7c60a88fd2', 1, 'ashiniit@gmail.com', 1453482531689, 2, 1),
('6640c9a41692497d86c2ab2cf71ebf0e', 'ashiniit@gmail.com', 'https://graph.facebook.com/1781597215/picture?height=150&type=normal&width=150', 'Pooja Bishnoi', '3c164f7dd9e943daa9d57e4b4952a38b', 1, 'ashiniit@gmail.com', 1453790138193, 2, 0),
('6fedcc43ffad491e89d081e2ea487776', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', 'e0de0a6bdd0140308543f50a40725987', 1, 'manna.sandipan@yahoo.in', 1453175912453, 2, 0),
('711dbdfbab36472b94ee54fd60b2b44b', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452403264854, 2, 1),
('a38f4f3114134bc9a75e3511bb620f13', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '366f56c0684f42cfad5ad019f27efb1f', 2, 'ashiniit@gmail.com', 1453178213542, 2, 0),
('b32252d7deee4703ad4a4c839ee9ab26', 'ashiniit@gmail.com', 'https://graph.facebook.com/100003013776486/picture?height=150&type=normal&width=150', 'Soni Gupta', '1c9f1198236941f0bc7f5b7c60a88fd2', 1, 'ashiniit@gmail.com', 1453481691765, 2, 0),
('d4419f12667649069a061e9dc099a357', 'manna.sandipan@yahoo.in', 'https://graph.facebook.com/129371500763658/picture?height=150&type=normal&width=150', 'Rebecca Manna', '399975cecfa54502941d9814eb146c05', 1, 'manna.sandipan@yahoo.in', 1452609416737, 2, 0),
('dd484618f18a4848930347483be0c338', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452403260469, 2, 0),
('e4b8e80255204a1092725ca2d1e8bf11', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', 'd5d2057505b04ce99372ea516fbda779', 2, 'ashiniit@gmail.com', 1453178447601, 2, 0),
('f993facc926d4484aeecb454c35d21fd', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452356518218, 2, 1),
('fb611a6c7ec44e2483d2400f24737fb1', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', 'e1a68fcf10c0419b8b14494d28b1c40f', 2, 'ashiniit@gmail.com', 1452097327440, 2, 0),
('fd8f243bfd5a4ae2ab914bdfcdf8eb62', 'ashiniit@gmail.com', 'https://graph.facebook.com/10153991131490663/picture?height=150&type=normal&width=150', 'Ashish Anand', '74bbef4e111f4235959e25f5caf537b1', 2, 'ashiniit@gmail.com', 1452403268734, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kidz_user`
--

CREATE TABLE IF NOT EXISTS `kidz_user` (
  `email` varchar(100) NOT NULL,
  `address` mediumtext,
  `datecreated` bigint(20) NOT NULL DEFAULT '0',
  `uimageurl` longtext,
  `noofkids` int(11) NOT NULL DEFAULT '0',
  `deviceid` mediumtext,
  `followercount` int(11) NOT NULL DEFAULT '0',
  `followingcount` int(11) DEFAULT '0',
  `name` mediumtext NOT NULL,
  `kid_1dob` bigint(20) DEFAULT NULL,
  `kid_1guid` mediumtext,
  `kid_1name` mediumtext,
  `kid_1sex` int(11) DEFAULT NULL,
  `kid_1imageurl` mediumtext,
  `kid_2dob` bigint(20) DEFAULT NULL,
  `kid_2guid` mediumtext,
  `kid_2name` mediumtext,
  `kid_2sex` int(11) DEFAULT NULL,
  `kid_2imageurl` mediumtext,
  `kid_3dob` bigint(20) DEFAULT NULL,
  `kid_3guid` mediumtext,
  `kid_3name` mediumtext,
  `kid_3sex` int(11) DEFAULT NULL,
  `kid_3imageurl` mediumtext,
  `uNotificationViewTimeStamp` bigint(20) NOT NULL DEFAULT '0',
  `lat` float(10,6) NOT NULL,
  `lang` float(10,6) NOT NULL,
  `kid_4dob` bigint(20) DEFAULT NULL,
  `kid_4sex` int(11) DEFAULT NULL,
  `kid_4name` mediumtext,
  `kid_4imageurl` mediumtext,
  `kid_4guid` mediumtext,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidz_user`
--

INSERT INTO `kidz_user` (`email`, `address`, `datecreated`, `uimageurl`, `noofkids`, `deviceid`, `followercount`, `followingcount`, `name`, `kid_1dob`, `kid_1guid`, `kid_1name`, `kid_1sex`, `kid_1imageurl`, `kid_2dob`, `kid_2guid`, `kid_2name`, `kid_2sex`, `kid_2imageurl`, `kid_3dob`, `kid_3guid`, `kid_3name`, `kid_3sex`, `kid_3imageurl`, `uNotificationViewTimeStamp`, `lat`, `lang`, `kid_4dob`, `kid_4sex`, `kid_4name`, `kid_4imageurl`, `kid_4guid`) VALUES
('ashiniit@gmail.com', 'Sector 45, Noida\nUttar Pradesh', 1453140026668, 'https://graph.facebook.com/1781597215/picture?height=150&type=normal&width=150', 2, 'APA91bH0PzIE7OE3Ki-mdI96uOR9nIBWMqYFYiQIvS6VuAWbC9WCEHrVGeBlmdf4mC4XQZHAMA2VuzfOk9aJvk-z-crYNww5VMZSRi_JlHjQXjXMjdz--p4', 0, 1, 'Pooja Bishnoi', 1389983400000, '42a4fb5cd4d6484290530f0fd3524b60', 'rrrr', 0, 'null', 1390705415962, '47c77c6f16814ae8bcb7b7b1f52b0b27', 'njxjsj', 1, '', 0, '', '', 0, '', 0, 28.548800, 77.346085, 0, 0, '', '', ''),
('manna.sandipan@yahoo.in', 'Sector 45, Noida\nUttar Pradesh', 11112342524523, 'https://graph.facebook.com/129371500763658/picture?height=150&type=normal&width=150', 3, '', 1, 0, 'Rebecca Manna', 1444672934986, '209ef5fc65f94eb3ac6ab0e3ca92cc3d', 'golu', 0, 'images/kids/c69be3efb2384e699b396f761ac3b78a.jpg', 1389636822671, '2817bda243194c20bd20e883fd5c05df', 'kabya', 0, 'images/kids/5c3a2071909b4be7a2a34d98cf52377a.jpg', 1358101563045, 'da46bd8dea6d4ff3b4dda1c9cf6654f8', 'hhhhj', 0, 'images/kids/d72a8a2dc8d04289adcde8870a25941f.jpg', 0, 0.000000, 0.000000, 0, 0, '', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
