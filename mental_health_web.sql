-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 07:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `appchat`
--

CREATE TABLE `appchat` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `adid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appchat`
--

INSERT INTO `appchat` (`id`, `uid`, `message`, `adid`) VALUES
(1, 2, 'hii', 0),
(2, 5, 'hello guys', 0),
(3, 0, 'hello this is msg from admn', 1),
(4, 4, 'This group chat help you from staying away from being alone', 0),
(5, 4, 'This is wondeful website', 0),
(6, 4, 'ok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortDesc` varchar(255) NOT NULL,
  `Description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `shortDesc`, `Description`, `image`, `pid`) VALUES
(1, '3 MENTAL HEALTH BLOGS WE LIKE', '?There is no health without mental health. To help with day-to-day stress and challenges, we’re offering 10 tips to boost yours.', '“Mental health” refers to your overall psychological well-being. It includes the way you feel about yourself, the quality of your relationships, and your ability to manage your feelings and deal with difficulties.  Anyone can experience mental or emotional health problems — and over a lifetime, many of us will. One in five Canadians lives with mental-health or substance-use problems.    These tips can help you elevate your mood, become more resilient and enjoy life more.   1. Make social connection — especially face-to-face — a priority Phone calls and social networks have their place, but few things can beat the stress-busting, mood-boosting power of quality face-to-face time with other people, especially those you love and people who energize you.  2. Stay active  Staying active is as good for the brain as it is for the body. Regular exercise or activity can have a major impact on your mental and emotional health, relieve stress, improve memory, and help you sleep better.  3. Talk to someone Talk to a frien', '../blogImgUpload/blog1.jpg', 'null'),
(3, '10 tips to boost your mental health', 'We thought we’d pop a list together of the blogs we frequently read, admire and appreciate. We hope you enjoy them as we do.', 'Something', '../blogImgUpload/Creative Mind Concept Logo Design,brain people with heart logo.png', 'null'),
(4, 'Time to change', 'Experiencing a mental health problem', 'Something', '../blogImgUpload/123.png', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist`
--

CREATE TABLE `psychiatrist` (
  `id` int(255) NOT NULL,
  `psy_username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychiatrist`
--

INSERT INTO `psychiatrist` (`id`, `psy_username`, `email`, `qualification`, `about`, `image`, `password`) VALUES
(3, 'psy', 'psy@gmail.com', 'md', 'good', '../psyimg/1.jpg', '$2y$10$5UYPMGuDs4pgQMgrSWLYv.hRbMykcg/bRqJY30G2XJxHUhO2CiuRy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username_user`, `email`, `mobile`, `city`, `password`, `cpassword`) VALUES
(1, '4113b817bd7e6be05970f62c', 'user1@gmail.com', 'ed37ddb4b8e9c37b29eb', '8941a69b1be278d5', '$2y$10$STKyHozgSnY3z0YSAiGKLeY5caF65AWivrnfRRNuZDwvoBbscMnPm', '$2y$10$8gfqQlNAi.NyWMrWquF/PeuIWtYTYfJh4woqCn.6CvAQSCzSRQmNm'),
(4, 'eb50a279f76ddff4d92aee9d', 'user2@gmail.com', '15185fadb532f702fc1b', '198810d613a214a3', '$2y$10$ieZSNJVeovbFib73xJi4lejLWpPni4zR0bicbqWp.BIMwCtnn9BEe', '$2y$10$GjwzdTobWxL3wCBhzWwl6O5YZJAhad1UitjH3msZznKRtqiiANWUO'),
(5, 'f5c3a17363698e52e47e42d1', 'user3@gmail.com', '05778b6b777a35728ca6', '8f90b38172085549', '$2y$10$pMzuwxBRdrUxTWFmioW59uDvYot2HpcVyOw48ArauKs3n0xETEHiu', '$2y$10$zUcP7zCbzQBwCpdkhsr4BujhW3CoPYiMDyFuM3bYSRocXTrtw20fW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appchat`
--
ALTER TABLE `appchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychiatrist`
--
ALTER TABLE `psychiatrist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appchat`
--
ALTER TABLE `appchat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `psychiatrist`
--
ALTER TABLE `psychiatrist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
