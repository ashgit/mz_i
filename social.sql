-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 04:15 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask_question`
--

CREATE TABLE IF NOT EXISTS `ask_question` (
  `question_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ask_question_answer`
--

CREATE TABLE IF NOT EXISTS `ask_question_answer` (
  `question_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bs_category`
--

CREATE TABLE IF NOT EXISTS `bs_category` (
  `bs_category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs_category`
--

INSERT INTO `bs_category` (`bs_category_id`, `category_name`, `image`, `display_order`, `status`, `added_date`) VALUES
(1, 'Electronics', 'electronics.jpg', 1, 'active', '2015-09-15 00:55:07'),
(2, 'Property', 'property.jpg', 2, 'active', '2015-09-15 01:18:14'),
(3, 'mobile', 'mobile.jpg', 3, 'active', '2015-09-15 01:27:47'),
(4, 'lifestyle', 'lifestyle.jpg', 4, 'active', '2015-09-15 01:27:47'),
(5, 'vehicle', 'vehicle.jpg', 3, 'active', '2015-09-15 01:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `building_id` int(11) NOT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`, `city_id`, `pincode`, `area`, `status`, `added_date`) VALUES
(1, 'Amrapali Sapphire', 1, 201301, 'sector 45', 'active', '2015-08-19 15:39:32'),
(2, 'Prateek Stylehome', 1, 201301, 'Sector 45', 'active', '2015-08-19 15:39:32'),
(3, 'Pearl Residency', 1, 201303, 'Sector 44', 'active', '2015-08-19 15:40:27'),
(4, 'Celestial', 1, 201303, 'Sector 44', 'active', '2015-08-19 15:40:27'),
(5, 'Army Welfare Housing', 1, 201301, 'Sector 37', 'active', '2015-08-19 15:42:00'),
(6, 'Arun Vihar', 1, 20101, 'Sector 37', 'active', '2015-08-19 15:42:00'),
(7, 'Shatabdi Rail Vihar', 1, NULL, 'sector 62', 'active', '2015-08-19 15:44:35'),
(8, 'Shivkala Apartments', 1, NULL, 'Sector 62', 'active', '2015-08-19 15:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `building_directory`
--

CREATE TABLE IF NOT EXISTS `building_directory` (
  `directory_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_type` varchar(255) DEFAULT NULL,
  `contact no` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `building_groups`
--

CREATE TABLE IF NOT EXISTS `building_groups` (
  `group_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `group_category_id` int(11) DEFAULT NULL,
  `owner_user_id` int(11) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `group_description` text,
  `image` varchar(255) DEFAULT NULL,
  `members_id` varchar(500) DEFAULT NULL,
  `group_type` enum('public','private') DEFAULT 'public',
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building_groups`
--

INSERT INTO `building_groups` (`group_id`, `building_id`, `group_category_id`, `owner_user_id`, `group_name`, `group_description`, `image`, `members_id`, `group_type`, `status`, `added_date`) VALUES
(1, 1, 1, 1, 'Gym', 'Join Discussion board, if you are interested to make your body fit in group.', 'gym.jpg', '1', 'private', 'active', '2015-09-06 17:43:03'),
(4, 1, 2, 2, 'Kirtan Kitti', 'come join', 'numerax_imange2.jpg', '2', 'public', 'active', '2015-09-13 16:13:43'),
(5, 1, 2, 2, 'Kirtan Kitti', 'come join', 'numerax_imange2.jpg', '2', 'public', 'active', '2015-09-13 17:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell`
--

CREATE TABLE IF NOT EXISTS `buy_sell` (
  `bs_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `bs_category` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `images` text,
  `contact` text,
  `condition` enum('new','old') DEFAULT NULL,
  `status` enum('active','inactive','sold') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell_comments`
--

CREATE TABLE IF NOT EXISTS `buy_sell_comments` (
  `comment_id` int(11) NOT NULL,
  `bs_id` int(11) DEFAULT NULL,
  `comment_parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `added_date`) VALUES
(1, 'Noida', 1, '2015-08-19 15:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `deal_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` text,
  `deal_category_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deal_category`
--

CREATE TABLE IF NOT EXISTS `deal_category` (
  `deal_category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_activity`
--

CREATE TABLE IF NOT EXISTS `group_activity` (
  `activity_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `text` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_activity`
--

INSERT INTO `group_activity` (`activity_id`, `group_id`, `user_id`, `image`, `video`, `text`, `status`, `added_date`) VALUES
(1, 1, 1, '1441130057.jpg', NULL, 'check the updates ', 'active', '2015-08-01 06:36:55'),
(2, 1, 1, '14413022111.jpg', NULL, 'testing', 'active', '2015-09-05 06:37:24'),
(3, 1, 1, '1441130057.jpg', NULL, 'Art exhibition in bulding on sunday', 'active', '2015-09-06 06:37:00'),
(4, 1, 1, '', NULL, 'abcd', 'active', '2015-09-06 08:19:03'),
(5, 1, 1, '', NULL, 'bvc', 'active', '2015-09-06 08:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `group_category`
--

CREATE TABLE IF NOT EXISTS `group_category` (
  `group_category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `type` enum('subgroup','selfgroup','','') NOT NULL,
  `file_path` text NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_category`
--

INSERT INTO `group_category` (`group_category_id`, `category_name`, `image`, `display_order`, `type`, `file_path`, `status`, `added_date`) VALUES
(1, 'fitness', 'fitness.jpg', 1, 'subgroup', 'building-groups', 'active', '2015-08-28 16:24:58'),
(2, 'kitty', 'kitty.jpg', 2, 'subgroup', 'building-groups', 'active', '2015-08-28 16:25:02'),
(3, 'Working womens', 'dance.jpg', 3, 'selfgroup', 'building-groups', 'active', '2015-08-28 16:25:06'),
(4, 'shopping', 'shopping.jpg', 4, 'selfgroup', 'shopping', 'active', '2015-08-28 16:26:57'),
(5, 'religious', 'religious.jpg', 5, 'subgroup', 'building-groups', 'active', '2015-08-28 16:25:16'),
(6, 'kids', 'kids.jpg', 6, 'subgroup', 'building-groups', 'active', '2015-08-28 16:25:19'),
(7, 'cooking', 'cooking.jpg', 7, 'selfgroup', 'cooking', 'active', '2015-08-28 16:29:16'),
(8, 'ngo', 'ngo.jpg', 8, 'subgroup', 'building-groups', 'active', '2015-08-28 16:25:27'),
(9, 'trips', 'trips.jpg', 9, 'subgroup', 'building-groups', 'inactive', '2015-08-28 16:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `board_id` int(11) NOT NULL,
  `building_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` int(11) NOT NULL,
  `notification_type` enum('1','2','3','4','5','6','7','8','9') DEFAULT NULL COMMENT '1-user will see - group admin requested to join grp,2-admin will see- user accepted request to join grp, 3-admin will see- user rejected request to join grp,4-admin will see- user request to join grp,5-user will see-request accepted to join by grp admin,6-user will see-request rejected to join by grp admin,7- Owner will see - buy sell comment,8- user(commenter) will see - buy sell comment reply,9 Question asker will see -when get response for question,10- all users will see -deals notifications,11 all users will see-notice board notification',
  `initiator_id` int(11) DEFAULT NULL,
  `reciver_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('read','unread') DEFAULT 'unread',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification_type`, `initiator_id`, `reciver_id`, `item_id`, `status`, `added_date`) VALUES
(1, '4', 3, 1, 1, 'unread', '2015-09-11 17:53:26'),
(2, '5', 2, 1, 1, 'unread', '2015-09-11 17:53:34'),
(3, '6', 4, 1, 1, 'unread', '2015-09-11 17:50:34'),
(15, '5', 1, 3, 1, 'unread', '2015-09-13 13:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `report_abuse`
--

CREATE TABLE IF NOT EXISTS `report_abuse` (
  `abuse_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `abused_id` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `added_date`) VALUES
(1, 'Uttar Pradesh', '2015-08-19 15:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `marital_status` enum('married','single') DEFAULT NULL,
  `profile_pic` text,
  `hobbies` varchar(255) DEFAULT NULL,
  `about_me` varchar(255) DEFAULT NULL,
  `last_visited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_visited_notifications` datetime DEFAULT NULL,
  `report_abuse_count` int(11) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `building_id`, `dob`, `marital_status`, `profile_pic`, `hobbies`, `about_me`, `last_visited`, `last_visited_notifications`, `report_abuse_count`, `status`, `added_date`) VALUES
(1, 'nupuragarwal02@gmail.com', '', 'Nupur', 1, '1987-07-02', 'married', 'http://graph.facebook.com/10152847734507239/picture?width=70&&height=70', 'paintinng', NULL, '2015-08-20 16:00:07', NULL, NULL, 'active', '2015-08-19 00:00:00'),
(2, 'ashiniit@gmail.com', '', 'Ashish', 1, '1987-07-02', 'married', 'http://graph.facebook.com/10153720415865663/picture?width=70&&height=70', 'paintinng', NULL, '2015-09-11 17:33:36', NULL, NULL, 'active', '2015-08-19 00:00:00'),
(3, 'swati@gmail.com', '', 'Swati', 1, '1987-07-02', 'single', 'http://graph.facebook.com/1044822112214349/picture?width=70&&height=70', 'paintinng', NULL, '2015-09-11 17:33:36', NULL, NULL, 'active', '2015-08-19 00:00:00'),
(4, 'namrata@gmail.com', '', 'Namrata', 1, '1987-07-02', 'single', 'http://graph.facebook.com/843352139084916/picture?width=70&&height=70', 'paintinng', NULL, '2015-09-11 17:33:36', NULL, NULL, 'active', '2015-08-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `last_visited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('active','inactive') DEFAULT 'active',
  `added_date` datetime DEFAULT NULL,
  `approval_status` enum('approve','disappove','pending') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_id`, `user_id`, `building_id`, `last_visited`, `status`, `added_date`, `approval_status`) VALUES
(1, 1, 1, 1, '2015-09-09 16:47:30', 'active', '2015-08-26 23:03:32', 'approve'),
(5, 1, 2, 1, '2015-09-13 10:16:09', 'active', '2015-09-10 22:28:00', 'approve'),
(6, 1, 3, 1, '2015-09-13 13:00:41', 'active', '2015-09-10 22:28:00', 'approve'),
(7, 2, 2, 1, '2015-09-13 16:13:43', 'active', '2015-09-13 21:43:43', 'approve'),
(8, 2, 2, 1, '2015-09-13 17:19:05', 'active', '2015-09-13 22:49:05', 'approve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask_question`
--
ALTER TABLE `ask_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ask_question_answer`
--
ALTER TABLE `ask_question_answer`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `bs_category`
--
ALTER TABLE `bs_category`
  ADD PRIMARY KEY (`bs_category_id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `building_directory`
--
ALTER TABLE `building_directory`
  ADD PRIMARY KEY (`directory_id`);

--
-- Indexes for table `building_groups`
--
ALTER TABLE `building_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `buy_sell`
--
ALTER TABLE `buy_sell`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `buy_sell_comments`
--
ALTER TABLE `buy_sell_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `deal_category`
--
ALTER TABLE `deal_category`
  ADD PRIMARY KEY (`deal_category_id`);

--
-- Indexes for table `group_activity`
--
ALTER TABLE `group_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `group_category`
--
ALTER TABLE `group_category`
  ADD PRIMARY KEY (`group_category_id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `report_abuse`
--
ALTER TABLE `report_abuse`
  ADD PRIMARY KEY (`abuse_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask_question`
--
ALTER TABLE `ask_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ask_question_answer`
--
ALTER TABLE `ask_question_answer`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bs_category`
--
ALTER TABLE `bs_category`
  MODIFY `bs_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `building_directory`
--
ALTER TABLE `building_directory`
  MODIFY `directory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `building_groups`
--
ALTER TABLE `building_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buy_sell`
--
ALTER TABLE `buy_sell`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buy_sell_comments`
--
ALTER TABLE `buy_sell_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deal_category`
--
ALTER TABLE `deal_category`
  MODIFY `deal_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group_activity`
--
ALTER TABLE `group_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `group_category`
--
ALTER TABLE `group_category`
  MODIFY `group_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `report_abuse`
--
ALTER TABLE `report_abuse`
  MODIFY `abuse_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
