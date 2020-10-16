-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 06:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadabzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_user`
--

CREATE TABLE `google_user` (
  `id` int(11) NOT NULL,
  `clint_id` int(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `google_email` varchar(255) NOT NULL,
  `picture_link` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_user`
--

INSERT INTO `google_user` (`id`, `clint_id`, `firstname`, `last_name`, `google_email`, `picture_link`, `status`, `added_on`) VALUES
(3, 2147483647, 'Khan', 'Shadab', 'ksfjjks@gmail.com', 'https://lh3.googleusercontent.com/-OcI5sGEyhNU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckSiRbVxQEynmqjETcZnlY3MAzHvQ/photo.jpg', 1, '2020-09-30 06:37:07'),
(4, 2147483647, 'all in', 'one video', 'ks579265@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjyBHyMDzZIiLJOZYIckXU6tuK_i34xKPefO2bE', 1, '2020-09-30 06:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_of_prj` varchar(255) NOT NULL,
  `prj_added_by` int(11) NOT NULL,
  `views_count` int(11) NOT NULL,
  `download_count` int(11) NOT NULL,
  `prj_img` varchar(255) NOT NULL,
  `prj_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `google_user`
--
ALTER TABLE `google_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `google_user`
--
ALTER TABLE `google_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
