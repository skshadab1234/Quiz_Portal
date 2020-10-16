-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb30.awardspace.net
-- Generation Time: Oct 06, 2020 at 02:48 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3583267_shadabzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_user`
--

CREATE TABLE `google_user` (
  `id` int(200) NOT NULL,
  `clint_id` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `google_email` varchar(255) NOT NULL,
  `picture_link` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `role` int(1) NOT NULL DEFAULT '1',
  `verified_by_shadabzone` int(1) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google_user`
--

INSERT INTO `google_user` (`id`, `clint_id`, `Name`, `google_email`, `picture_link`, `status`, `role`, `verified_by_shadabzone`, `added_on`) VALUES
(14, 2147483647, 'Programming with Shadab', 'ks615044@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GgoHw5Xf_aMqb82GbmxM_Fbo8H3eb85tI9z-N4JWQ=s96-c', 1, 0, 1, '2002-10-20 05:22:26'),
(15, 2147483647, 'Khan Shadab', 'ksfjjks@gmail.com', 'https://lh3.googleusercontent.com/-OcI5sGEyhNU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckSiRbVxQEynmqjETcZnlY3MAzHvQ/s96-c/photo.jpg', 1, 1, 0, '2002-10-20 05:26:13'),
(16, 2147483647, 'all in one video', 'ks579265@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjyBHyMDzZIiLJOZYIckXU6tuK_i34xKPefO2bE=s96-c', 1, 1, 0, '2002-10-20 02:45:38'),
(17, 2147483647, 'SHABINA Khan', 'shabina100khan@gmail.com', 'https://lh5.googleusercontent.com/-2SkyFoSY-XY/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckBm72JxngvxHnJl5QRLXb22i1QDw/s96-c/photo.jpg', 1, 1, 0, '2005-10-20 02:51:06'),
(18, 2147483647, 'Khan Shadab', 'loveshadab5@gmail.com', 'https://lh5.googleusercontent.com/-9Bu8sAv33dQ/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnzUbR1ec7cgngjOLhHZGH02joLFA/s96-c/photo.jpg', 1, 1, 0, '2005-10-20 03:32:26'),
(19, 2147483647, 'skshadabkhojo', 'skshadabkhojo@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GgdS2Kv9CZJ8Yk6gGtvyRpCiqx6efIvzX82Ifgt=s96-c', 1, 1, 0, '2005-10-20 03:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_of_prj` varchar(255) NOT NULL,
  `prj_added_by` int(11) NOT NULL,
  `project_title_slug` varchar(255) NOT NULL,
  `views_count` int(11) NOT NULL DEFAULT '0',
  `download_count` int(11) NOT NULL DEFAULT '0',
  `prj_img` varchar(255) NOT NULL,
  `project_code` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `prj_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_of_prj`, `prj_added_by`, `project_title_slug`, `views_count`, `download_count`, `prj_img`, `project_code`, `status`, `prj_added_on`) VALUES
(1, 'Make a Responsive Website in 10 Minutes || ALLL IN VIDEO', 14, 'Make-a-Responsive-Website-in-10-Minutes-ALLL-IN-VIDEO', 500, 0, 'https://elements-cover-images-0.imgix.net/9e14c45b-8830-4bd8-83b5-5ce86c9e5872?w=900&fit=max&auto=compress%2Cformat&s=f0926930dda464617068889ec9e05194', 'a1a1a1a1a1', 1, '2020-10-06 10:27:22'),
(2, 'Beautiful Theme Builer Clone', 14, 'Beautiful-Theme-Builer-Clone-', 0, 0, 'https://s3.envato.com/files/258017607/01_preview.__large_preview.jpg', 'qwq12113213123', 1, '2020-10-06 10:27:22'),
(3, 'Hackatone', 14, 'Hackatone', 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7giA5AYDCTk0zgvVn6sqKlX3DwMLY7Vju4A&usqp=CAU', 'sadasdas1212', 1, '2020-10-06 12:27:22'),
(4, 'Love and Sweet Game Buler', 14, 'Love and-Sweet-Game-Buler-', 0, 0, 'https://s3.envato.com/files/206796631/00_Theme-Preview.__large_preview.png', 'sdadasdsad233123321', 1, '2020-10-06 15:27:22'),
(5, 'Amazing Websites', 14, 'Amazing-Websites-', 0, 0, 'https://s3.envato.com/files/7405594/banner.__large_preview.jpg', 'adeqw4334432', 1, '2020-10-06 13:27:22'),
(6, 'Website Design 3\r\n', 15, 'Website-Design-3-', 0, 0, 'https://www.templateshub.net/uploads/1574474686%20Molla%20-%20eCommerce%20HTML%20Template.jpg', 'asasads334gtyt', 1, '2020-10-03 06:00:00'),
(7, 'Website Design', 14, 'Website-Design-3-', 0, 0, 'https://themefisher.com/wp-content/uploads/2016/03/Best-Responsive-Bootstrap-v2.jpg', 'weeqwffdfdfdfds345446', 1, '2020-10-03 06:00:00'),
(8, 'Website Design 2\r\n', 15, 'Website-Design-2-', 0, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQm4rdn3pbXNnbcLUGPAdPohPQ7s9AkYxD_kA&usqp=CAU', 'saas121dAdsdfds112!@ds', 1, '2020-10-03 06:00:00'),
(9, 'Website Design 3\r\n', 16, 'Website-Design-3-', 0, 0, 'https://i.ytimg.com/vi/36jRXMsIFuA/maxresdefault.jpg', 'asas@3113Add', 1, '2020-10-03 06:00:00'),
(10, 'Website Design', 16, 'Website-Design-', 0, 0, 'https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/133029483/original/cdeddea2807243e42ee98579f56e34d836de9fe8/give-you-video-on-how-to-create-a-free-ecommerce-website.png', 'asas@3113Addda', 1, '2020-10-06 12:05:00'),
(11, 'Website Design 2\r\n', 16, 'Website-Design-2-', 0, 0, 'https://s.tmimgcdn.com/scr/800x500/68800/asbab-ecommerce-website-template_68847-original.jpg', 'asa23254565655dfadf', 1, '2020-10-03 06:00:00'),
(12, 'Website Design 3\r\n', 16, 'Website-Design-3-', 0, 0, 'https://themeforest.img.customer.envatousercontent.com/files/275245957/01_banner.png?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=e7765001c9dd3f8b40506816bcbd5c05', 'sdadasd23ghghjae', 1, '2020-10-03 06:00:00');

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
