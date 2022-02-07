-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 02:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `failureboy`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `project_language` text NOT NULL,
  `project_level` varchar(255) NOT NULL,
  `project_download_link` text NOT NULL,
  `project_version` text NOT NULL,
  `project_description` text NOT NULL,
  `project_thumbnail` text NOT NULL,
  `project_preview` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `admin_id`, `project_name`, `project_language`, `project_level`, `project_download_link`, `project_version`, `project_description`, `project_thumbnail`, `project_preview`, `timestamp`) VALUES
(3, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '0000-00-00 00:00:00'),
(5, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '2022-02-06 14:27:51'),
(6, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '2022-02-06 14:27:54'),
(7, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '2022-02-06 14:27:55'),
(8, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '2022-02-06 14:28:48'),
(9, 1, 'Work Management3', '1', 'Medium', 'www.linkcom', 'html css php', 'I love coding', 'www.thumblink.com', 'www.linkcom', '2022-02-06 14:30:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
