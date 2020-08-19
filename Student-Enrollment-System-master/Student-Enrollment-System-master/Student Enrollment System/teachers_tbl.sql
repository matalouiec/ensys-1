-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 01:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers_tbl`
--

CREATE TABLE `teachers_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers_tbl`
--

INSERT INTO `teachers_tbl` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_phone`, `teacher_address`, `teacher_image`, `teacher_department`, `created_at`, `updated_at`) VALUES
(1, 'shuvo', 'shuvo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0987643', 'dfghjkl', 'image/xLAYSwx1Asga62toiPWs.jpg', '2', NULL, NULL),
(2, 'anik', 'anik@gmail.com', '25d55ad283aa400af464c76d713c07ad', '4567890', 'fghjkl', 'image/vmHY3yvkCfwgrJxcFd3D.png', '1', NULL, NULL),
(3, 'rajin', 'ajj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '456789op', 'vbnm,.', 'image/nkAvlXF3yT24j8i1tLys.jpg', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
