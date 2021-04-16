-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_type` text NOT NULL,
  `reference_id` text NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password1` text NOT NULL,
  `password2` text NOT NULL,
  `statusxx` int(11) NOT NULL,
  `counterxx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_type`, `reference_id`, `fullname`, `username`, `password1`, `password2`, `statusxx`, `counterxx`) VALUES
(1, 'Admin', '123', 'Elymar Gongob', 'elymar_admin', 'pass2', 'pass2', 0, 0),
(2, 'Staff', '1234', 'Lesther Calimag', 'vens_staff', 'pass', 'pass', 0, 0),
(6, 'Employee', '12', 'Larie Fiesta', 'larie_employee', 'pass', 'pass', 0, 0),
(7, 'Student', '123', 'Rap Deundores', 'rap_student', 'pass1', 'pass1', 0, 0),
(14, 'Employee', '1234098', 'Jaevel Cepeda', 'jaevel_employee', 'pass', 'pass', 0, 0),
(15, 'Staff', '345697', 'Kiro Akali', 'kiro_student', 'pass', 'pass', 0, 0),
(16, 'Employee', '124789', 'Renz Nahule', 'renz_employee', 'pass', 'pass', 0, 0),
(20, 'Student', '2021-0209', 'Samantha Hermano', 'samantha_student', 'pass', 'pass', 0, 0),
(21, 'Staff', '202103222', 'Xylex Pasion', 'xylex_staff', 'pass1', 'pass1', 0, 0),
(22, 'Admin', '200612342', 'Andrei Pagunuran', 'andrei_admin', 'pass', 'pass', 0, 0),
(26, 'Student', '20052314365', 'Evas Maximoff', 'evas_student', 'pass', 'pass', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `image`, `description`, `price`, `status`) VALUES
(15, 'Ice Cream', 'easy-chocolate-ice-cream-recipe-1945798-hero-01-45d9f26a0aaf4c1dba38d7e0a2ab51e2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris venenatis lectus sed risus sollicitudin faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla eu enim odio. Sed in luctus justo, nec varius est.', 20, 'Available'),
(16, 'Sopaster', '9aba273e757bf5506e718f3301535fbe.jpg', 'Fusce facilisis tincidunt placerat. Integer molestie sollicitudin sapien vitae molestie. Sed congue at dui consequat accumsan.', 15, 'Available'),
(17, 'Hotdog', 'HOTDOG.jpg', 'Phasellus vel sapien eget diam tincidunt fermentum a id dui. Suspendisse ac purus tortor. Mauris et risus id libero suscipit ultricies. Phasellus non porta nulla. Sed vitae fringilla sem.', 20, 'Available'),
(18, 'Tokneneng', '1200px-05223jfPhilippine_cuisine_dishes_Bulacafvf_10.jpg', 'Mauris eu mauris ut metus condimentum porttitor. Pellentesque nec nisi consectetur, bibendum mauris ac, varius sem. Aliquam a pulvinar mi.', 10, 'Available'),
(19, 'Adobo', '20191023-chicken-adobo-vicky-wasik-19.jpg', 'Etiam luctus, nulla non dictum dignissim, elit dolor posuere mauris, eget vestibulum urna sem a sapien. Fusce eu molestie risus.', 40, 'Available'),
(20, 'Lugaw', 'b338fea55f7405c6592774cf7546e191.jpg', 'uspendisse malesuada, dui in convallis sodales, ante turpis blandit nunc, ac sagittis lorem sapien non purus. Aliquam a ipsum eleifend mi gravida gravida. Duis eget lobortis est.', 10, 'Available'),
(21, 'Corn dog', 'Corn-Dog-Recipe-1.jpg', 'Aliquam eros ante, elementum in ligula nec, volutpat auctor diam. Duis ut arcu id quam varius luctus eu sed augue. Etiam molestie convallis nisl, id molestie dolor accumsan sit amet.', 15, 'Unavailable'),
(26, 'Fried Chicken', 'terris-crispy-fried-chicken-legs-3056879-10_preview-5b05ec40a474be00362260d7.jpeg', 'Duis fringilla tincidunt lobortis. Donec vitae tempus sem. Etiam eget lacinia dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 80, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `fullname` text NOT NULL,
  `user_type` text NOT NULL,
  `xtime` text NOT NULL,
  `xdate` text NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `username`, `fullname`, `user_type`, `xtime`, `xdate`, `action`) VALUES
(1, 'samantha_student', 'Samantha Hermano', 'Student', '08:53:12pm', '2021-02-09', 'Edited in reserve()'),
(2, 'samantha_student', 'Samantha Hermano', 'Student', '08:54:16pm', '2021-02-09', 'Added in orders(20)'),
(3, 'vens_staff', 'Lesther Calimag', 'Staff', '08:56:12pm', '2021-02-09', 'Edited in reserve(1)'),
(4, 'vens_staff', 'Lesther Calimag', 'Staff', '08:56:30pm', '2021-02-09', 'Edited in reserve(1)'),
(5, 'vens_staff', 'Lesther Calimag', 'Staff', '08:56:58pm', '2021-02-09', 'Edited in reserve(1)'),
(6, 'samantha_student', 'Samantha Hermano', 'Student', '08:57:19pm', '2021-02-09', 'Deleted in reserve(1)'),
(7, 'samantha_student', 'Samantha Hermano', 'Student', '08:57:22pm', '2021-02-09', 'Edited in reserve()'),
(8, 'vens_staff', 'Lesther Calimag', 'Staff', '08:58:08pm', '2021-02-09', 'Edited in reserve(2)'),
(9, 'vens_staff', 'Lesther Calimag', 'Staff', '08:58:37pm', '2021-02-09', 'Edited in orders(23)'),
(10, 'vens_staff', 'Lesther Calimag', 'Staff', '08:59:02pm', '2021-02-09', 'Edited in orders(23)'),
(11, 'vens_staff', 'Lesther Calimag', 'Staff', '08:59:23pm', '2021-02-09', 'Edited in reserve(2)'),
(12, 'renz_employee', 'Renz Nahule', 'Employee', '09:04:57pm', '2021-02-09', 'Edited in reserve()'),
(13, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:05:42pm', '2021-02-09', 'Edited in reserve(3)'),
(14, 'renz_employee', 'Renz Nahule', 'Employee', '09:06:13pm', '2021-02-09', 'Added in orders(16)'),
(15, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:06:32pm', '2021-02-09', 'Edited in orders(24)'),
(16, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:06:43pm', '2021-02-09', 'Edited in orders(24)'),
(17, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:06:50pm', '2021-02-09', 'Edited in reserve(3)'),
(18, 'renz_employee', 'Renz Nahule', 'Employee', '09:07:07pm', '2021-02-09', 'Added in orders(16)'),
(19, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:07:16pm', '2021-02-09', 'Edited in orders(25)'),
(20, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:09:54pm', '2021-02-09', 'Edited in accounts(15)'),
(21, 'kiro_student', 'Kiro Akali', 'Admin', '09:10:40pm', '2021-02-09', 'Edited in accounts(1)'),
(22, 'elymar_admin', 'Elymar Gongob', 'Admin', '01:23:45am', '2021-02-10', 'Changed password in accounts(1)'),
(23, 'elymar_admin', 'Elymar Gongob', 'Admin', '01:25:19am', '2021-02-10', 'Changed password in accounts(1)'),
(24, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:55:39am', '2021-03-01', 'Edited in reserve()'),
(25, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:56:11am', '2021-03-01', 'Edited in reserve(4)'),
(26, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:56:28am', '2021-03-01', 'Edited in reserve(4)'),
(27, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:57:23am', '2021-03-01', 'Added in orders(1)'),
(28, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:58:50am', '2021-03-01', 'Edited in orders(26)'),
(29, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:59:29am', '2021-03-01', 'Edited in orders(26)'),
(30, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:59:41am', '2021-03-01', 'Edited in reserve(4)'),
(31, 'xylex_staff', 'Xylex Gongob', 'Staff', '10:20:45am', '2021-03-01', 'Changed password in accounts(21)'),
(32, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:25:30am', '2021-03-01', 'Edited in reserve()'),
(33, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:26:22am', '2021-03-01', 'Edited in reserve(5)'),
(34, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:26:44am', '2021-03-01', 'Deleted in reserve(5)'),
(35, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:26:49am', '2021-03-01', 'Edited in reserve()'),
(36, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:27:02am', '2021-03-01', 'Edited in reserve(6)'),
(37, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:27:07am', '2021-03-01', 'Edited in reserve(6)'),
(38, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:29:09am', '2021-03-01', 'Added in orders(1)'),
(39, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:29:51am', '2021-03-01', 'Added in orders(1)'),
(40, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:30:03am', '2021-03-01', 'Edited in orders(28)'),
(41, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:30:20am', '2021-03-01', 'Edited in orders(27)'),
(42, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:30:37am', '2021-03-01', 'Edited in orders(27)'),
(43, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:31:44am', '2021-03-01', 'Deleted in reserve(6)'),
(44, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:32:44am', '2021-03-01', 'Added in orders(1)'),
(45, 'elymar_admin', 'Elymar Gongob', 'Admin', '10:32:47am', '2021-03-01', 'Edited in orders(29)'),
(46, 'elymar_admin', 'Elymar Gongob', 'Admin', '11:05:45am', '2021-03-01', 'Added in orders(1)'),
(47, 'elymar_admin', 'Elymar Gongob', 'Admin', '11:06:18am', '2021-03-01', 'Edited in orders(30)'),
(48, 'rap_student', 'Rap Deundo', 'Student', '11:07:11am', '2021-03-01', 'Added in orders(7)'),
(49, 'xylex_staff', 'Xylex Gongob', 'Staff', '11:08:32am', '2021-03-01', 'Edited in orders(31)'),
(50, 'xylex_staff', 'Xylex Gongob', 'Staff', '11:08:48am', '2021-03-01', 'Edited in orders(31)'),
(51, 'xylex_staff', 'Xylex Gongob', 'Staff', '11:09:26am', '2021-03-01', 'Edited in orders(29)'),
(52, 'elymar_admin', 'Elymar Gongob', 'Admin', '09:13:24pm', '2021-03-01', 'Added in accounts(22)'),
(53, 'rap_student', 'Rap Deundo', 'Student', '07:29:53pm', '2021-03-03', 'Edited in accounts(7)'),
(54, 'rap_student', 'Rap Deundo', 'Staff', '07:30:17pm', '2021-03-03', 'Edited in accounts(7)'),
(55, 'rap_student', 'Rap Deundo', 'Staff', '07:33:38pm', '2021-03-03', 'Edited in accounts(7)'),
(56, 'rap_student', 'Rap Deundo', 'Staff', '07:34:16pm', '2021-03-03', 'Edited in accounts(7)'),
(57, 'evas_student', 'Evas Maximoff', 'Student', '07:47:42pm', '2021-03-03', 'Changed password in accounts(23)'),
(58, 'evas_student', 'Evas Maximoff', 'Student', '07:47:54pm', '2021-03-03', 'Edited in accounts(23)'),
(59, 'evas_student', 'Evas Maximoff', 'Student', '07:50:41pm', '2021-03-03', 'Changed password in accounts(24)'),
(60, 'evas_student', 'Evas Maximoff', 'Student', '07:50:48pm', '2021-03-03', 'Edited in accounts(24)'),
(61, 'evas_student', 'Evas Maximore', 'Student', '07:52:02pm', '2021-03-03', 'Edited in accounts(24)'),
(62, 'rap_student', 'Rap Deundo', 'Student', '07:59:13pm', '2021-03-03', 'Changed password in accounts(7)'),
(63, 'rap_student', 'Rap Deundores', 'Student', '07:59:22pm', '2021-03-03', 'Edited in accounts(7)'),
(64, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:00:47pm', '2021-03-03', 'Edited in accounts(21)'),
(65, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:01:14pm', '2021-03-03', 'Added in accounts(27)'),
(66, 'elymar_admin', '', 'Admin', '08:01:20pm', '2021-03-03', 'Deleted in accounts(27)'),
(67, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:02:55pm', '2021-03-03', 'Edited in reserve()'),
(68, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:08pm', '2021-03-03', 'Edited in reserve(7)'),
(69, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:15pm', '2021-03-03', 'Edited in reserve(7)'),
(70, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:22pm', '2021-03-03', 'Edited in reserve(7)'),
(71, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:27pm', '2021-03-03', 'Deleted in reserve(7)'),
(72, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:27pm', '2021-03-03', 'Edited in reserve()'),
(73, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:03:32pm', '2021-03-03', 'Edited in reserve(8)'),
(74, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:20:56pm', '2021-03-03', 'Added in orders(1)'),
(75, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:21:06pm', '2021-03-03', 'Edited in orders(32)'),
(76, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:21:31pm', '2021-03-03', 'Added in orders(1)'),
(77, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:21:37pm', '2021-03-03', 'Edited in orders(33)'),
(78, 'elymar_admin', 'Elymar Gongob', 'Admin', '08:21:45pm', '2021-03-03', 'Edited in orders(33)');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `total_list` text NOT NULL,
  `status` text NOT NULL,
  `carts` text NOT NULL,
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `total_list`, `status`, `carts`, `id`, `fullname`) VALUES
(23, '30', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Tokneneng</td>\r\n                    <td>10</td>\r\n                    <td>1</td>\r\n                    <td>10</td>\r\n                    </tr>\r\n                    </tbody>', 20, 'Samantha Hermano'),
(24, '110', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Sopas</td>\r\n                    <td>15</td>\r\n                    <td>1</td>\r\n                    <td>15</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Tokneneng</td>\r\n                    <td>10</td>\r\n                    <td>1</td>\r\n                    <td>10</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Adobo</td>\r\n                    <td>40</td>\r\n                    <td>1</td>\r\n                    <td>40</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Lugaw</td>\r\n                    <td>10</td>\r\n                    <td>1</td>\r\n                    <td>10</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Corn dog</td>\r\n                    <td>15</td>\r\n                    <td>1</td>\r\n                    <td>15</td>\r\n                    </tr>\r\n                    </tbody>', 16, 'Renz Nahule'),
(25, '3960', 'Denied', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Adobo</td>\r\n                    <td>40</td>\r\n                    <td>99</td>\r\n                    <td>3960</td>\r\n                    </tr>\r\n                    </tbody>', 16, 'Renz Nahule'),
(26, '55', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Tokneneng</td>\r\n                    <td>10</td>\r\n                    <td>1</td>\r\n                    <td>10</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Fried Chicken</td>\r\n                    <td>45</td>\r\n                    <td>1</td>\r\n                    <td>45</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(27, '105', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Sopas</td>\r\n                    <td>15</td>\r\n                    <td>3</td>\r\n                    <td>45</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>3</td>\r\n                    <td>60</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(28, '10', 'Denied', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Lugaw</td>\r\n                    <td>10</td>\r\n                    <td>1</td>\r\n                    <td>10</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(29, '20', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Ice Cream</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(30, '160', 'Denied', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Ice Cream</td>\r\n                    <td>20</td>\r\n                    <td>2</td>\r\n                    <td>40</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>4</td>\r\n                    <td>80</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Adobo</td>\r\n                    <td>40</td>\r\n                    <td>1</td>\r\n                    <td>40</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(31, '160', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Ice Cream</td>\r\n                    <td>20</td>\r\n                    <td>2</td>\r\n                    <td>40</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>4</td>\r\n                    <td>80</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Adobo</td>\r\n                    <td>40</td>\r\n                    <td>1</td>\r\n                    <td>40</td>\r\n                    </tr>\r\n                    </tbody>', 7, 'Rap Deundo'),
(32, '70', 'Denied', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Ice Cream</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Sopaster</td>\r\n                    <td>15</td>\r\n                    <td>2</td>\r\n                    <td>30</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Tokneneng</td>\r\n                    <td>10</td>\r\n                    <td>2</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob'),
(33, '100', 'Claimed', '\r\n                <tbody>\r\n                    <tr>\r\n                    <td>Ice Cream</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Sopaster</td>\r\n                    <td>15</td>\r\n                    <td>4</td>\r\n                    <td>60</td>\r\n                    </tr>\r\n                    </tbody> \r\n                <tbody>\r\n                    <tr>\r\n                    <td>Hotdog</td>\r\n                    <td>20</td>\r\n                    <td>1</td>\r\n                    <td>20</td>\r\n                    </tr>\r\n                    </tbody>', 1, 'Elymar Gongob');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `orders` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `xtime` text NOT NULL,
  `xdate` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reserve_id`, `customer_id`, `customer_name`, `xtime`, `xdate`, `status`) VALUES
(2, 20, 'Samantha Hermano', '08:57:22pm', '2021-02-09', 'Cleared'),
(3, 16, 'Renz Nahule', '09:04:57pm', '2021-02-09', 'Cleared'),
(4, 1, 'Elymar Gongob', '09:55:39am', '2021-03-01', 'Cleared'),
(8, 1, 'Elymar Gongob', '08:03:27pm', '2021-03-03', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserve_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
