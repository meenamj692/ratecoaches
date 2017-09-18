-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 03:05 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratecoaches`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `avg_rating` float NOT NULL,
  `motivation` float NOT NULL,
  `technical_skills` float NOT NULL,
  `punctuality` float NOT NULL,
  `communication` float NOT NULL,
  `comments` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `coach_id`, `user_id`, `avg_rating`, `motivation`, `technical_skills`, `punctuality`, `communication`, `comments`, `status`, `created_time`) VALUES
(1, 4, 1, 3.6, 3.2, 2.6, 2.5, 4.6, 'He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. He has a great talent. ', 0, '2017-08-25 21:42:20'),
(2, 6, 1, 2.1, 3.2, 4.1, 2.5, 4.6, 'He has a great talent. He has a great talent. He has a great talent.', 0, '2017-08-25 21:43:46'),
(3, 8, 1, 1.3, 3.2, 4.1, 2.5, 4.6, 'He has a great talent. He has a great talent. He has a great talent.', 0, '2017-08-25 21:43:56'),
(4, 4, 1, 4.2, 3.2, 4.1, 2.5, 4.6, 'He has a great talent. He has a great talent. He has a great talent.', 0, '2017-08-25 21:44:57'),
(5, 4, 1, 3.5, 3, 2, 4, 5, 'Sample Comments ', 0, '2017-08-26 00:54:34'),
(6, 16, 1, 4.5, 5, 4, 4, 5, 'ZXasd as das dfsfd d', 0, '2017-08-26 00:55:37'),
(7, 16, 1, 4.5, 5, 4, 4, 5, 'ZXasd as das dfsfd d', 0, '2017-08-26 00:55:38'),
(8, 16, 1, 4.5, 5, 4, 4, 5, 'ZXasd as das dfsfd d', 0, '2017-08-26 00:55:38'),
(9, 16, 1, 4.5, 5, 4, 4, 5, 'ZXasd as das dfsfd d', 0, '2017-08-26 00:55:38'),
(10, 16, 1, 4, 3, 4, 5, 4, 'asd a asd A', 0, '2017-08-26 00:56:17'),
(11, 3, 1, 3.5, 2, 3, 4, 5, 'SDFA FSA FSAF ADSF SDF AS', 0, '2017-08-26 00:56:38'),
(12, 3, 1, 3.5, 2, 5, 4, 3, 'FDGDFS GDFS', 0, '2017-08-26 00:57:03'),
(13, 16, 1, 2.75, 3, 3, 4, 1, 'dsafdjhf ksjda hkjsa fdfsadf', 0, '2017-08-26 02:01:34'),
(14, 16, 23, 4, 4, 5, 3, 4, 'Fantastic! Strict but very thorough training! Happy he has come to our beautiful town!\r\n\r\n', 0, '2017-08-26 02:30:26'),
(15, 19, 23, 3.75, 4, 3, 4, 4, 'good coach', 0, '2017-08-26 02:31:35'),
(16, 9, 23, 5, 5, 5, 5, 5, 'best coach ever', 0, '2017-08-26 02:32:02'),
(17, 9, 24, 5, 5, 5, 5, 5, 'best coach ever, best training ever', 0, '2017-08-26 02:33:27'),
(18, 11, 25, 3.75, 4, 3, 3, 5, 'He is the good', 0, '2017-08-26 02:40:15'),
(19, 4, 26, 4.25, 4, 5, 4, 4, 'great coach', 0, '2017-08-26 02:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sport_name`, `status`, `created_time`) VALUES
(1, 'Cricket', 0, '2017-08-25 19:27:27'),
(2, 'Volley Ball', 0, '2017-08-25 19:28:22'),
(3, 'Base Ball', 0, '2017-08-25 19:28:22'),
(4, 'Chess', 0, '2017-08-25 19:28:22'),
(5, 'Swimming', 0, '2017-08-25 19:28:22'),
(6, 'Basket Ball', 0, '2017-08-25 19:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `user_role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pwd`, `sports`, `user_role`, `status`, `created_time`) VALUES
(1, 'Meena', 'Sharma', 'meena@gmail.com', '123456', '', 1, 0, '2017-08-25 01:51:57'),
(2, 'andrew ', 'karrea', 'andrew@gmail.com', '123456', '2', 2, 0, '2017-08-25 02:18:45'),
(3, 'Colin', 'hanks', 'colin@gmail.com', '123456', '2', 2, 0, '2017-08-25 20:36:21'),
(4, 'jodie ', 'ford', 'jodie@gmail.com', '123456', '2', 2, 0, '2017-08-25 20:38:58'),
(5, 'harrison', 'fisher', 'harrison@gmail.com', '123456', '3', 2, 0, '2017-08-25 20:38:58'),
(6, 'jackson', 'ford', 'jackson@gmail.com', '123456', '4', 2, 0, '2017-08-25 20:38:58'),
(7, 'noah', 'sutherlin', 'noah@gmail.com', '123456', '5', 2, 0, '2017-08-25 20:38:58'),
(8, 'stephen', 'morrsion', 'morrsion6@gmail.com', '123456', '6', 2, 0, '2017-08-25 20:38:58'),
(9, 'angela', 'morgan', 'morgan7@gmail.com', '123456', '1', 2, 0, '2017-08-25 20:38:58'),
(10, 'alan', 'rick', 'alan@gmail.com', '123456', '2', 2, 0, '2017-08-25 20:38:58'),
(11, 'chris', 'patt', 'chris@gmail.com', '123456', '4', 2, 0, '2017-08-25 20:38:58'),
(12, 'jennifer', 'crew', 'jenni@gmail.com', '123456', '3', 2, 0, '2017-08-25 20:38:58'),
(13, 'jamie', 'sandler', 'jamie1@gmail.com', '123456', '5', 2, 0, '2017-08-25 20:38:58'),
(14, 'asher', 'judd', 'asher@gmail.com', '123456', '6', 2, 0, '2017-08-25 20:38:58'),
(15, 'bradley', 'stiller', 'brad13@gmail.com', '123456', '1', 2, 0, '2017-08-25 20:38:58'),
(16, 'brandon', 'foster', 'brandon@gmail.com', '123456', '2', 2, 0, '2017-08-25 20:38:58'),
(17, 'ben', 'foster', 'ben@gmail.com', '123456', '3', 2, 0, '2017-08-25 20:38:58'),
(18, 'robert', 'mitch', 'robert@gmail.com', '123456', '4', 2, 0, '2017-08-25 20:38:58'),
(19, 'john', 'knight', 'john@gmail.com', '123456', '5', 2, 0, '2017-08-25 20:38:58'),
(20, 'edward', 'murph', 'edward@gmail.com', '123456', '6', 2, 0, '2017-08-25 20:38:58'),
(21, 'leonard', 'marvin', 'leo19@gmail.com', '123456', '1', 2, 0, '2017-08-25 20:38:58'),
(22, 'kevin', 'kingsley', 'kevin20@gmail.com', '123456', '2', 2, 0, '2017-08-25 20:38:58'),
(23, 'sandy', 'k', 'sandykaur@gmail.com', '123456', '', 1, 0, '2017-08-26 06:27:36'),
(24, 'meena', 'sharma', 'meenajyo@gmail.com', 'qwerty', '', 1, 0, '2017-08-26 06:32:49'),
(25, 'nagaraj', 'pallapu', 'pallapunagaraj@gmail.com', 'Nagaraj9090', '', 1, 0, '2017-08-26 06:37:19'),
(26, 'steven', 'space', 'steven@gmail.com', '123456', '', 1, 0, '2017-08-26 06:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`id`, `role_name`, `status`, `created_time`) VALUES
(1, 'General User', 0, '2017-08-25 19:14:36'),
(2, 'Coach', 0, '2017-08-25 19:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
