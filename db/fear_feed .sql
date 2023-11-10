-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2023 at 03:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fear_feed`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text,
  `attachments` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `attachments`, `created_at`) VALUES
(1, 30, 5, 'Test comment.', '', '2023-06-01 09:14:23'),
(2, 30, 5, 'lagi brad grabiha jud.', '', '2023-06-01 09:14:56'),
(3, 30, 6, 'test', '', '2023-06-01 09:17:39'),
(5, 30, 6, 'test comment ra ni.', '', '2023-06-01 09:54:36'),
(6, 30, 8, 'unsa dagay na hahahaha.', '', '2023-06-02 04:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

DROP TABLE IF EXISTS `friend_list`;
CREATE TABLE IF NOT EXISTS `friend_list` (
  `frient_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=not confirmed, 1=confirmed',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`frient_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`frient_list_id`, `user_id`, `friend_id`, `status`, `created_at`) VALUES
(1, 30, 27, 1, '2023-05-30 16:24:35'),
(2, 30, 31, 1, '2023-05-30 16:25:29'),
(3, 30, 32, 1, '2023-06-02 06:34:43'),
(4, 27, 32, 0, '2023-06-02 16:32:11'),
(5, 32, 30, 1, '2023-06-02 17:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post` text,
  `attachments` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post`, `attachments`, `created_at`) VALUES
(1, 27, 'hasula pd ani ui.', '', '2023-05-28 08:33:29'),
(2, 27, 'Unsay mayo ron?', '', '2023-05-28 08:43:37'),
(3, 27, 'Asa bay mayo ron?', '', '2023-05-28 09:34:44'),
(4, 27, 'test', '', '2023-05-28 09:35:35'),
(5, 27, 'hala grabiha ui.', '', '2023-05-28 09:36:14'),
(6, 27, 'test test', '', '2023-05-28 09:36:47'),
(7, 30, 'Lamias pasingot ganina hahahaha.', '', '2023-05-29 08:29:59'),
(8, 30, 'Unsa ng ana2x? hahahaha', '', '2023-05-30 15:24:24'),
(15, 30, 'test post', '', '2023-05-30 15:57:55'),
(16, 30, 'hadloka bai.', '', '2023-06-01 09:27:48'),
(18, 32, 'hahaha', '', '2023-06-02 17:31:35'),
(19, 32, 'test add media', 'uploads/attachments/1.png', '2023-06-02 18:51:03'),
(20, 32, 'upload media', 'uploads/attachments/Rey126.png', '2023-06-02 18:52:17'),
(21, 32, 'test', 'uploads/attachments/1.png', '2023-06-02 18:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `reacts`
--

DROP TABLE IF EXISTS `reacts`;
CREATE TABLE IF NOT EXISTS `reacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=default,1=like,2=dislike',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reacts`
--

INSERT INTO `reacts` (`id`, `user_id`, `post_id`, `status`, `created_at`) VALUES
(1, 30, 7, 1, '2023-05-29 15:46:47'),
(2, 27, 3, 2, '2023-05-30 07:13:54'),
(3, 27, 6, 1, '2023-05-30 07:31:04'),
(4, 27, 7, 1, '2023-05-30 07:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply` text,
  `attachments` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `user_salt` text,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0 = inactive, 1 = active',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `middle_name`, `phone`, `profile`, `user_salt`, `status`, `create_at`) VALUES
(27, 'reynolitoresoor', 'reynolitoresoor123@gmail.com', '098f6bcd4621d373cade4e832627b4f6RfmKh1R5jnvOx81Wh85w', 'test', 'test', 'test', '234324', 'uploads/profile/profile.png', 'RfmKh1R5jnvOx81Wh85w', 1, '2023-05-28 10:03:29'),
(30, 'rey', 'reynolitoreso-or@yahoo.com', '098f6bcd4621d373cade4e832627b4f6sYE79DwTKyXtC2zWop1w', 'rey', 'rey', 'rey', '234234', 'uploads/profile/profile1.jpeg', 'sYE79DwTKyXtC2zWop1w', 1, '2023-05-29 08:25:59'),
(31, 'richardresoor', 'richard@gmail.com', '098f6bcd4621d373cade4e832627b4f6NwO8TPBnIR5bZExDifnF', 'richard', 'reso-or', 'jalandoni', '234234234', 'uploads/profile/profile2.jpeg', 'NwO8TPBnIR5bZExDifnF', 1, '2023-05-30 09:22:03'),
(32, 'reymanresoor', 'reyman@gmail.com', '098f6bcd4621d373cade4e832627b4f6gOe2FcPI8oA5SVJaV2XK', 'reyman', 'reso-or', 'jalandoni', '234234', 'uploads/profile/profile3.jpeg', 'gOe2FcPI8oA5SVJaV2XK', 1, '2023-05-30 09:22:50'),
(33, 'miketyson', 'miketyson@gmail.com', '098f6bcd4621d373cade4e832627b4f6J6pkuw9cQbN5TWWAP71R', 'mike', 'tyson', 'test', '234234', 'uploads/profile/profile4.jpeg', 'J6pkuw9cQbN5TWWAP71R', 1, '2023-05-30 09:23:28'),
(34, 'marcjohn', 'marcjohn@gmail.com', '098f6bcd4621d373cade4e832627b4f6bctaGToLcNIc5gT6mErD', 'marc', 'john', 'test', '234234', 'uploads/profile/profile5.jpeg', 'bctaGToLcNIc5gT6mErD', 1, '2023-05-30 09:24:02'),
(35, 'jeric', 'jeric@gmail.com', '098f6bcd4621d373cade4e832627b4f6RGEpdn5smD4dg3Y1RdiB', 'jeric', 'santos', 'test', '234234', 'uploads/profile/profile6.jpeg', 'RGEpdn5smD4dg3Y1RdiB', 1, '2023-05-30 09:24:59'),
(41, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6uae2CwjqUqfj4Ce5qZPW', 'test', 'test', NULL, NULL, 'uploads/profile/daniel.jpg', 'uae2CwjqUqfj4Ce5qZPW', 1, '2023-06-06 14:25:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
