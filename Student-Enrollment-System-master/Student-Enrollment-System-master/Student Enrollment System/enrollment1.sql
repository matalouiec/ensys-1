-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 01:48 PM
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
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_phon`, `created_at`, `updated_at`) VALUES
(2, 'shuvo', 'shuvosarker472@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01622007650', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_06_050137_create_admin_tbl_table', 1),
(2, '2018_04_07_091019_create_student_tbl_table', 2),
(3, '2018_04_09_093335_create_teacher_tbl_table', 3),
(4, '2018_04_09_093852_create_teachers_tbl_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathersname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothersname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admissionyear` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathersname`, `student_mothersname`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_admissionyear`) VALUES
(2, 'anik chandra sarker', '2347777777', 'ssssssssssssss', 'dddddddddddddd', 'anik@gmail.com', '0171350120444', '123456', 'image/l88MHri2Z8DfHzjbayhB.png', '58b1216b06850385d9a4eadbedc806c4', '3', '2018-04-08'),
(3, 'rajib khans', '2344', 'eeeeeeeeee', 'rrrrrrrrrrrrr', 'rajib@gmail.com', '017345678945', 'ddddddddddd', 'image/iNakAxU6pG0CmvieSEni.jpg', '519b85494fec02a579f56671e5bb6102', '4', '2018-04-08'),
(5, 'anik sarker', '34567', 'fffffffff', 'nnnnnnnnnnnn', 'anik3@gmail.com', '2468907', 'ddddddddddddddddddddd', 'image/vYvFn7PHrZCxfdkSZIw6.png', 'e3ceb5881a0a1fdaad01296d7554868d', '2', '2018-04-08'),
(6, 'rajib khan', '4444444444', 'tttttttttttttttt', 'uuuuuuuuuuuuuuuuu', 'rajkhn@gmail.com', '096544343', 'hhhhhhhhhh', 'image/y1UH1e6e8TPrIWA2JBSG.jpg', '9ec4ff3a0dbc11a413985ecdef7b9b54', '1', '2018-04-08'),
(7, 'chandra', '6294', 'sssssssssss', 'pppppppppppss', 'aniks@gmail.com', '36789090', 'samolis', 'image/ICBEObaZKQWImlSowNUy.png', '7d4baa3f271dbc363a52ac3f912a9c0e', '2', '2018-04-08'),
(8, '8aa', '123333333333333', 'dddddd', 'ffffffffff', 'shuvo@gmail.com', '09876549999999999', 'cbjkkl', 'image/TWAQBl7alJL5G1wXkYMD.png', 'c9130efba1317c16406d67270f657af3', '1', '2018-04-09'),
(9, 'anik sarker', '6199', 'eeeeeeeeeeeee', 'rrrrrrrrrrrrrrrrrrrrrrrrr', 'anikss@gmail.com', '46809876', 'ggggggggggg', 'image/t0Uch9e5qyzHNQlQx1ga.png', 'd41d8cd98f00b204e9800998ecf8427e', '5', '2018-04-09'),
(11, 'sarker', '123', 'akhik', 'rita', 'sarker@gmail.com', '098765', 'fghjkl;', 'image/sQEVAIsB6lDngcHcriLN.jpg', 'e10adc3949ba59abbe56e057f20f883e', '3', '2018-04-10');

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
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
