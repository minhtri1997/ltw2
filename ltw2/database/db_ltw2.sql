-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2018 at 03:06 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ltw2`
--
CREATE DATABASE IF NOT EXISTS `db_ltw2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ltw2`;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu_status` int(1) NOT NULL DEFAULT '1',
  `menu_id_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_status`, `menu_id_parent`) VALUES
(1, 'Bóng đá', 1, NULL),
(2, 'Tài chính', 1, NULL),
(3, 'Showbiz', 1, NULL),
(4, 'Sống trẻ', 1, NULL),
(5, 'Thế giới', 1, NULL),
(17, 'Khoa', 1, 8),
(7, 'Sự kiện-Bình luận', 1, 1),
(8, 'Video', 1, 1),
(9, 'Điểm nóng', 1, 5),
(10, 'Quân sự', 1, 5),
(11, 'Doanh nhân', 1, 2),
(12, 'Nhà đẹp', 1, 2),
(13, 'Sao Việt', 1, 3),
(14, 'Sao Hàn', 1, 3),
(15, 'Chuyện công sở', 1, 4),
(16, 'Ngoại tình', 1, 4),
(18, 'Khoa1', 1, 9),
(19, 'Khoa2', 1, 9),
(20, 'Khoa3', 1, 11),
(21, 'Khoa4', 1, 16),
(22, 'Khoa 0.1', 1, 8),
(23, 'Sự kiện 1', 1, 7),
(24, 'Sơn Tùng', 1, 13),
(26, 'Mỹ Tâm', 1, 13),
(27, 'Hoài Linh', 1, 13),
(28, 'Lee Min Ho', 1, 27),
(30, 'abc', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_phone` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_info`) VALUES
(1, 'Khoa', 'nvkhoa1871997@gmail.com', '0965288463', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(2, 'Hai', 'abc@gmail.com', '01236377223', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(3, 'Hoang', 'xyzz@gmail.com', '01237827281', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.'),
(4, 'Ha', 'npm@gmail.com', '0909327823', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.'),
(5, 'Huong', 'hkt@gmail.com', '01234567890', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
