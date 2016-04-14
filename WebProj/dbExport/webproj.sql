-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 05:16 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `blabber`
--

CREATE TABLE `blabber` (
  `userName` varchar(30) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blabber`
--

INSERT INTO `blabber` (`userName`, `comment`, `time`, `id`) VALUES
('admin', 'This is the page where you can leave comments freely. [Be polite, respect other members!]', '2016-04-08 10:06:02', 13),
('admin', '#ATTENTION# Any user with "admin" in their name but contains UPPERCASE letters is NOT an actual admin.', '2016-04-08 19:04:45', 14),
('admin', 'Hello', '2016-04-08 22:19:07', 18),
('GrafVonZepplin', 'Does anyone around take drugs?', '2016-04-11 16:12:23', 20),
('PrinzEugen', 'I love alcohol as a kind of drug', '2016-04-11 16:13:13', 23),
('PrinzEugen', 'I really like alcohol is that okay?', '2016-04-11 16:13:22', 24),
('BillyHerrington', 'You like that huh?', '2016-04-11 19:50:24', 31),
('BillyHerrington', 'I mean... YOU LIKE THAT HUUUUHHHH? Well don\'t drink too much alcohol please', '2016-04-11 19:51:01', 32),
('admin', 'Guten tag Billy!', '2016-04-11 19:54:09', 33);

-- --------------------------------------------------------

--
-- Table structure for table `favlist`
--

CREATE TABLE `favlist` (
  `userid` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `cmid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favlist`
--

INSERT INTO `favlist` (`userid`, `link`, `cmid`) VALUES
('Sakamoto', 'drug_cannabis.html', 15),
('admin', 'drug_contentTemplate.html', 19),
('admin', 'drug_cannabis.html', 20),
('admin', 'drug_shroom.html', 21);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `userName` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`userName`, `userPassword`, `email`) VALUES
('admin', '1234', 'eneme@admin.com'),
('BillyHerrington', '1234', 'billy@billy.com'),
('GrafVonZepplin', '4321', 'Graf@example.com'),
('PrinzEugen', '1234', 'danke@eugen.com'),
('Sakamoto', '4321', 'desuga@gmail.com'),
('Yoman', '1234', 'yoman@yoman.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blabber`
--
ALTER TABLE `blabber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favlist`
--
ALTER TABLE `favlist`
  ADD UNIQUE KEY `cmid` (`cmid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blabber`
--
ALTER TABLE `blabber`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `favlist`
--
ALTER TABLE `favlist`
  MODIFY `cmid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
