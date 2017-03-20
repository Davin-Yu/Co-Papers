-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 01:55 下午
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grouppj`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Followers`
--

CREATE TABLE `Followers` (
  `trail_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follwer_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Notes`
--

CREATE TABLE `Notes` (
  `note_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article` text NOT NULL,
  `article_url` text NOT NULL,
  `note_content` text NOT NULL,
  `topic` text NOT NULL,
  `tag` text NOT NULL,
  `hot` int(11) NOT NULL,
  `ifpublicize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Replies`
--

CREATE TABLE `Replies` (
  `reply_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `bio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `password`, `mail`, `bio`) VALUES
(1, 'davin_yu', '123', 'difeng.yu@outlook.com', '0'),
(2, 'Maggie', '234', 'ma@163.com', 'hahah'),
(3, 'davin_yu', '1', '', ''),
(4, 'Sky', '444', '', ''),
(5, 'abc', '987', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
