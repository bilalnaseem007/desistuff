-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 06:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_description` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_img` varchar(255) NOT NULL,
  `post_video` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_description`, `post_date`, `post_img`, `post_video`, `status`) VALUES
(4, 'Aashiqui 2  Songs', 'Beautifull Song', '2017-01-19 14:03:50', '1484834630.jpg', 'https://www.youtube.com/watch?v=0afZj1G0BIE', 0),
(5, 'Punjabi Tadka', 'Dhakkad Song with a Beautifull Girl', '2017-01-19 14:24:37', '1484835877.jpg', 'https://www.youtube.com/watch?v=0afZj1G0BIE', 0),
(6, 'Bollywood Masala', 'Beautifull Songs', '2017-01-20 14:08:19', '1484921299.jpg', '<iframe width="640" height="360" src="https://www.youtube.com/embed/WlWlGlvN4L4" frameborder="0" allowfullscreen></iframe>', 0),
(7, 'Priyanka Chopra', 'Hello', '2017-01-20 14:11:13', '1484921473.png', '<iframe width="540" height="360" src="https://www.youtube.com/embed/YplloiQLL6w" frameborder="0" allowfullscreen></iframe>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `created_at`, `email`, `image`, `status`) VALUES
(1, 'bilalnaseem007', '98cf1aef9cabc69a7d3145927e688953', '2017-01-24 04:25:55', 'bilal9627862012@gmail.com', 'profile.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
