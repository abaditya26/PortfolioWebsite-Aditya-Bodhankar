-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql107.epizy.com
-- Generation Time: Aug 09, 2021 at 01:05 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29042731_portfolio_aditya`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipcount`
--

CREATE TABLE `ipcount` (
  `_id` int(11) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcount`
--

INSERT INTO `ipcount` (`_id`, `ipaddress`, `count`) VALUES
(6, '103.157.163.209', 4),
(7, '49.44.82.42', 1),
(8, '152.57.66.230', 1),
(9, '69.25.58.56', 1),
(10, '103.157.163.208', 3),
(11, '66.249.76.28', 9),
(12, '103.157.163.201', 2),
(13, '181.214.184.156', 1),
(14, '181.214.144.84', 1),
(15, '66.249.72.82', 1),
(16, '66.249.72.84', 1),
(17, '175.101.67.175', 1),
(18, '66.249.76.1', 14),
(19, '66.249.76.25', 1),
(20, '66.249.76.26', 5),
(21, '45.41.179.55', 1),
(22, '181.214.179.63', 1),
(23, '103.157.163.219', 3),
(24, '103.157.163.225', 3),
(25, '64.233.173.101', 2),
(26, '64.233.173.102', 1),
(27, '64.233.173.104', 1),
(28, '64.233.173.17', 2),
(29, '64.233.173.16', 1),
(30, '66.102.6.24', 1),
(31, '66.102.6.156', 1),
(32, '66.249.76.239', 1),
(33, '66.249.76.243', 1),
(34, '42.107.64.38', 1),
(35, '49.44.78.202', 1),
(36, '103.157.163.197', 1),
(37, '100.21.218.158', 1),
(38, '66.249.76.30', 13),
(39, '66.249.76.74', 2),
(40, '66.249.76.7', 1),
(41, '103.157.163.220', 1),
(42, '74.125.210.104', 3),
(43, '74.125.210.102', 3),
(44, '181.215.148.252', 1),
(45, '64.137.30.114', 1),
(46, '66.249.72.94', 1),
(47, '66.249.72.64', 1),
(48, '66.249.79.56', 2),
(49, '157.33.110.90', 1),
(50, '152.57.156.180', 1),
(51, '42.106.104.18', 1),
(52, '66.249.66.16', 1),
(53, '66.249.66.38', 1),
(54, '1.187.36.11', 1),
(55, '152.57.137.157', 1),
(56, '205.237.94.188', 1),
(57, '181.214.187.218', 1),
(58, '54.203.73.198', 1),
(59, '106.195.15.44', 1),
(60, '152.57.111.234', 1),
(61, '106.77.22.10', 2),
(62, '152.57.126.44', 1),
(63, '163.53.87.200', 2),
(64, '209.85.238.116', 1),
(65, '103.157.163.207', 1),
(66, '157.33.59.74', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `link` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`_id`, `title`, `description`, `link`, `cover`, `author`, `timestamp`) VALUES
(15, 'Shield 4.0 Website', 'Shield 4.0 organised by computer engineering department of government polytechnic, jalgaon<br>\r\nDeveloped with:-Kalpak Nemade, Mahesh Pimparkar & Vishal Chaudhari', 'http://shield2k21.ml', './images/projects/65403999903.jpg', 'Aditya Bodhankar', '04-Jul-2021 07:00:08pm'),
(16, 'AI Based Activity Monitoring', 'Final Year project developed using HTML, CSS, JS, PHP, Android and Firebase by\r\nAditya Bodhankar, Komal Dhake, Kalpak Nemade and Vishal Chaudhari', 'http://testing.adityabodhankar.me', './images/projects/560239950531.jpg', 'Aditya Bodhankar', '04-Jul-2021 07:14:20pm'),
(14, 'Exam Cell Automation', 'Microproject of PHP developed using PHP, MySQL.\r\n\r\nMicroproject of Python developed using Django-Python', 'http://adityabodhankar.me', './images/projects/170921869668.jpg', 'Aditya Bodhankar', '04-Jul-2021 06:54:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id`, `email`, `password`, `name`, `phone`, `profile`) VALUES
(1, 'adityaabodhankar@gmail.com', 'Aditya@123', 'Aditya Bodhankar', '9325880972', './images/profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipcount`
--
ALTER TABLE `ipcount`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipcount`
--
ALTER TABLE `ipcount`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
