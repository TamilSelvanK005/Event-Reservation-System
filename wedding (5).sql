-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`) VALUES
(1, 'guru', 'guru12');

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `amount_id` int(20) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `payment_mod` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ar_id` int(5) NOT NULL,
  `bridal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ar_id`, `bridal`) VALUES
(1, 'bridal makeup and mehndi');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(55) NOT NULL,
  `hall_id` int(5) NOT NULL,
  `hall_name` varchar(200) NOT NULL,
  `cus_country` varchar(200) NOT NULL,
  `cus_city` varchar(200) NOT NULL,
  `cus_no1` int(14) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_no2` varchar(13) NOT NULL,
  `Bride_name` varchar(50) NOT NULL,
  `groom_name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `session` varchar(25) NOT NULL,
  `cus_name` varchar(150) NOT NULL,
  `catagory` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `spot_location` varchar(500) NOT NULL,
  `food_menu` varchar(1500) NOT NULL,
  `bo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `hall_id`, `hall_name`, `cus_country`, `cus_city`, `cus_no1`, `cus_email`, `cus_no2`, `Bride_name`, `groom_name`, `date`, `session`, `cus_name`, `catagory`, `status`, `spot_location`, `food_menu`, `bo`) VALUES
(1, 1, 'Sri Krishna Wedding Hall', 'india', 'cuddalore', 3332222, 'guru@gmail.com', '1234567890', 'sanjai', 'gopika', '2023-12-21', 'morning', 'guru', 'hall', 'accept', '', '', '2024-03-22 05:59:33'),
(6, 0, 'royal decoration', 'india', 'pondy', 987654321, 'sanjai@gmail.com', '1234567890', '', '', '2024-01-03', 'One Day', 'sanjai', 'decoration', 'reject', 'cuddalore', '', '2024-02-23 11:47:19'),
(7, 0, 'bridal makeup and mehndi', 'india', 'cuddalore', 2147483647, 'sanjai@gmail.com', '4444444357', '', '', '2024-01-31', '', 'tamil', 'bridal', 'accept', 'majakuppam', '', '2024-03-17 15:36:46'),
(9, 0, 'DJ lights & music services ', 'india', 'cuddalore', 938746583, 'mush@gmail.com', '3245365442', '', '', '2024-02-08', '', 'mushtaq', 'dj_lights', 'new', 'panruti', '', '2024-02-23 11:47:19'),
(10, 0, 'STUDIO DA (Luxury Wedding Events)', 'india', 'cuddalore', 2147483647, 'sanjai@gmail.com', '5678657456', '', '', '2024-01-10', '', 'selva', 'videography', 'process', 'cuddalore', '', '2024-02-23 11:47:19'),
(22, 0, 'Ganesh Catering Service', 'india', 'cuddalore', 1322434, 'guru@gmail.com', '1323232', '', '', '2024-01-30', '', 'tamil', 'catering', 'reject', 'cuddalore', 'carrot halwa', '2024-02-23 11:47:19'),
(23, 0, 'Ganesh Catering Service', 'india', 'cuddalore', 1322434, 'guru@gmail.com', '1323232', '', '', '2024-01-30', '', 'tamil', 'catering', 'new', 'cuddalore', 'carrot halwa', '2024-02-23 11:47:19'),
(29, 0, 'Ramalingam Catering Services', 'india', 'pondy', 546286343, 'mush@gmail.com', '26384632463', '', '', '2024-02-13', '', 'tamil', 'catering', 'new', 'majakuppam', 'biryani, carrot halwa', '2024-02-23 11:47:19'),
(42, 0, 'FILM MAKERS', 'india', 'cuddalore', 1234567890, 'gurumoorthy00k@gmail.com', '345672287', '', '', '2024-04-05', '', 'guru', 'videography', 'new', 'majakuppam', '', '2024-03-11 12:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `cat_id` int(5) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`cat_id`, `company_name`, `photo`) VALUES
(1, 'Ganesh Catering Service', 'img/cat1.jfif'),
(2, 'Ramalingam Catering Services', 'img/cat2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(11) NOT NULL,
  `cuid` varchar(6) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `cuid`, `pass`, `cus_name`, `phone_no`) VALUES
(2, 'a21cs2', 'guru', 'sanjai kummar', '');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `dec_id` int(5) NOT NULL,
  `decoration_name` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`dec_id`, `decoration_name`, `image`) VALUES
(2, 'royal decoration', 'img\\weddin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dj_setup`
--

CREATE TABLE `dj_setup` (
  `dj_id` int(5) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dj_setup`
--

INSERT INTO `dj_setup` (`dj_id`, `company_name`, `photo`) VALUES
(1, 'DJ lights & music services ', 'img/selection.webp');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `en_id` int(11) NOT NULL,
  `cus_name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`en_id`, `cus_name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'vilva priyan', 'vilvapriyan@gmail.com', 'hai', 'asdfghjkllpoiuteqzxcvbnm,,b', 'readed'),
(3, 'gurumoorthy', 'tnhorrorr@gmail.com', 'hai', 'hai iam gurumoorthy from cuddalore', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(300) NOT NULL,
  `morning _or_evening` varchar(100) NOT NULL,
  `event_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `morning _or_evening`, `event_img`) VALUES
(101, 'wedding', 'morning', 'img/ATLHEA-87.jpg'),
(102, 'birthday', '', 'img/1birthday.jpg'),
(103, 'baby shower', '', 'img/Hindu.jpg'),
(104, 'puberty ceremony', '', 'img/pabetry.jpg'),
(105, 'engagement', '', 'img/istockphot.jpg'),
(106, 'ear piercing', '', 'img/ear.jpg'),
(107, 'reception', '', 'img/delhi_bg.webp'),
(108, 'meeting', '', 'img/meeting.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(5) NOT NULL,
  `event_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `event_name`) VALUES
(1, 'sharan mandabam');

-- --------------------------------------------------------

--
-- Table structure for table `event_handling`
--

CREATE TABLE `event_handling` (
  `e_handling_id` int(20) NOT NULL,
  `available_or_non` varchar(100) NOT NULL,
  `balance_amount` varchar(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `event_cost` varchar(100) NOT NULL,
  `package_type` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_handling`
--

INSERT INTO `event_handling` (`e_handling_id`, `available_or_non`, `balance_amount`, `customer_id`, `event_cost`, `package_type`, `status`, `date_time`) VALUES
(1, 'currently unavailable', '6000', 1111, '90000', 'wedding', 'pending', '20-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_id` int(3) NOT NULL,
  `food_name` varchar(150) NOT NULL,
  `catagory` varchar(80) NOT NULL,
  `image` varchar(150) NOT NULL,
  `food_cost` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_id`, `food_name`, `catagory`, `image`, `food_cost`) VALUES
(1, 'biryani', 'north', 'img/biri.jfif', 170),
(2, 'sambar rice', 'north', 'img/download.jfif', 100),
(3, 'carrot halwa', 'sweet', 'img/CarrotHalwa.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `food_menu_sweets`
--

CREATE TABLE `food_menu_sweets` (
  `sweet_id` int(5) NOT NULL,
  `sweet_name` varchar(150) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_menu_sweets`
--

INSERT INTO `food_menu_sweets` (`sweet_id`, `sweet_name`, `catagory`, `image`) VALUES
(1, 'carrot halwa', 'north', ''),
(2, 'kesari halwa', 'north', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `e-mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `address`, `phone_no`, `e-mail`) VALUES
(101, '26,ramasami nagar, cuddalore-607001.', '7708845209', 'wedd@planergmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(11) NOT NULL,
  `cuid` varchar(6) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `cuid`, `image`) VALUES
(1, 'a21cs2', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `index_menu`
--

CREATE TABLE `index_menu` (
  `home` varchar(40) NOT NULL,
  `event` varchar(100) NOT NULL,
  `event_plan` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(109) NOT NULL,
  `offer_content` varchar(500) NOT NULL,
  `offer_image` varchar(500) NOT NULL,
  `off_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_content`, `offer_image`, `off_name`) VALUES
(1, 'Avail amazing wedding offers Orchid Hotel, Puri near beach. Book Now! A wedding is a memory', 'packe.webp', 'great hindu wedding festival combo 25% DISCOUNT');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(10) NOT NULL,
  `wh_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_id`, `wh_id`, `event_id`, `amount`) VALUES
(1001, 1, 101, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `id` int(11) NOT NULL,
  `pack_name` varchar(100) NOT NULL,
  `cus_name` varchar(80) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `number1` varchar(20) NOT NULL,
  `number2` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sport_location` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`id`, `pack_name`, `cus_name`, `mail_id`, `number1`, `number2`, `address`, `sport_location`, `status`) VALUES
(1, 'weddingg ', 'guru', 'gurumoorthy00k@gmail.com', '1234567890', '9999999999', 'bbbbbbbbabdjkabdjkabkjdandkja', 'anfnjfskanfjkndjk', 'new'),
(2, 'birthday ', 'guru', 'gurumoorthy00k@gmail.com', '1234567890', '', '', '', 'reject');

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE `package_type` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(100) NOT NULL,
  `service_1` varchar(150) NOT NULL,
  `service_2` varchar(150) NOT NULL,
  `service_3` varchar(150) NOT NULL,
  `service_4` varchar(150) NOT NULL,
  `service_5` varchar(150) NOT NULL,
  `service_6` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `p_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`pack_id`, `pack_name`, `service_1`, `service_2`, `service_3`, `service_4`, `service_5`, `service_6`, `image`, `price`, `p_id`) VALUES
(1, 'weddingg', 'Decotion', 'Catering services', 'Photo and videography', 'Sound and lighting', 'DJ setup ', 'Makeup artist', 'pack.webp', 600000, 1001),
(2, 'birthday', 'Cake', 'Catering services', 'Photo and videography', 'Decotion', '--', '--', 'birthday.jpg', 300000, 1002),
(3, 'Baby shower', 'Decotion', 'Catering services', 'Photo and videography', 'Meheadi artist', '--', '--', 'Hindu.jpg', 320000, 1003),
(4, 'Puberty ceremony', 'Decotion', 'Catering services', 'Photo and videography', 'Jewellery', '--', '--', '220a0s000000hjg4v0CB0_W_750_1624_R5.webp', 350000, 1004),
(5, 'engagement', 'Decotion', 'Catering services', ' Photo and videography ', 'Makeup artist', 'Meheadi artist', '--', 'k.webp', 460000, 1005),
(6, 'reception', 'Decotion', 'Catering services', ' Photo and videography', 'DJ setup', 'Sound and lighting', 'Meheadi artist', 'arudra.webp', 580000, 1006);

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `price_id` int(3) NOT NULL,
  `p_id` int(6) NOT NULL,
  `pack_name` varchar(100) NOT NULL,
  `ser_1` int(10) NOT NULL,
  `ser_2` int(10) NOT NULL,
  `ser_3` int(10) NOT NULL,
  `ser_4` int(10) NOT NULL,
  `ser_5` int(10) NOT NULL,
  `ser_6` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`price_id`, `p_id`, `pack_name`, `ser_1`, `ser_2`, `ser_3`, `ser_4`, `ser_5`, `ser_6`) VALUES
(1, 1001, 'wedding', 75000, 250000, 40000, 12000, 15000, 55000),
(2, 1002, 'birthday ', 50000, 120000, 40000, 60000, 0, 0),
(3, 1003, 'Baby shower', 60000, 120000, 50000, 20000, 0, 0),
(4, 1004, 'Puberty ceremony', 50000, 120000, 40000, 10000, 0, 0),
(5, 1005, 'engagement', 60000, 120000, 40000, 10000, 10000, 0),
(6, 1006, 'reception', 50000, 120000, 40000, 30000, 12000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_amount`) VALUES
(1, 'Decotion', 30000),
(2, 'Invetation', 15000),
(3, 'Catering services ', 150000),
(4, 'Photo and videography', 40000),
(5, 'Sound and lighting', 10000),
(6, 'Bride groom entry', 10000),
(7, 'DJ setup', 10000),
(8, 'Makeup & Meheadi artist', 45000),
(9, 'Dress design', 90000),
(10, 'Jewellery', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(3) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `mail_id` varchar(150) NOT NULL,
  `phone` int(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(60) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `pass`, `mail_id`, `phone`, `country`, `city`, `address`) VALUES
(1, 'guru', '12', 'gurumoorthy00k@gmail.com', 1234567890, 'india', 'cuddalore', 'no.26,ramasamy nagar'),
(5, 'vilva priyan', '23', 'vilvapriyan@gmail.com', 2147483647, 'india', 'cuddalore', 'bajjdgmadjs');

-- --------------------------------------------------------

--
-- Table structure for table `videography`
--

CREATE TABLE `videography` (
  `vg_id` int(3) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videography`
--

INSERT INTO `videography` (`vg_id`, `company_name`, `photo`) VALUES
(1, 'FILM MAKERS', 'img/ben.jpg'),
(2, 'STUDIO DA (Luxury Wedding Events)', 'img/kushagra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_hall`
--

CREATE TABLE `wedding_hall` (
  `wh_id` int(10) NOT NULL,
  `hall_name` varchar(500) NOT NULL,
  `hall_address` varchar(500) NOT NULL,
  `no_of_seats` varchar(500) NOT NULL,
  `dinner_seats` varchar(500) NOT NULL,
  `no_rooms` varchar(30) NOT NULL,
  `ac_non_ac` varchar(50) NOT NULL,
  `restroom` varchar(20) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `lights` varchar(500) NOT NULL,
  `cleaning_people` varchar(200) NOT NULL,
  `songs` varchar(100) NOT NULL,
  `hall_image` varchar(500) NOT NULL,
  `dinner_veg` varchar(100) NOT NULL,
  `dinner_non` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_hall`
--

INSERT INTO `wedding_hall` (`wh_id`, `hall_name`, `hall_address`, `no_of_seats`, `dinner_seats`, `no_rooms`, `ac_non_ac`, `restroom`, `parking`, `lights`, `cleaning_people`, `songs`, `hall_image`, `dinner_veg`, `dinner_non`) VALUES
(1, 'Sri Krishna Wedding Hall', 'QQ7C+QPV, Upplavadi St, Thirumalai Nagar West, Manjakuppam, Cuddalore, Tamil Nadu 607001', '1000', '500', '4', 'ac', '10', 'available', 'Meneon 36 Leds 6 M White Rice Lights', ' wedding cleanup services provider', 'wedding song provider', 'pack.webp', '450', '550'),
(2, '\r\nArudra A/C Hall', 'No: 2, Rettai, Pillaiyar Koil St majakupam, Near Market, Pudupalayam, Cuddalore, Tamil Nadu   607001      ', '500', '200', '2', 'ac', '4', 'no', 'Multicolor Light Up Letter Birthday Party Hanging Decorations (1.2\" Letter Size, 3\' Long)', 'yes', 'birthday song provider', 'birthday.jpg', '250', '350'),
(3, 'Thiruvalluvar Thirumana Mandapam', ' Akkar Chetti St, North Venugopalapuram, Allpettai, Manjakuppam, Cuddalore, Tamil Nadu 607001', '700', '300', '4', 'non ac', '5', 'available', 'Functions of Stage Lighting ', 'yes', 'songs will be provider', 'Hindu.jpg', '350', '450'),
(4, 'Annai Periyanayagi Mahal A/C', 'main Township, 15, Upplavadi St, Manjakuppam, Cuddalore, Tamil Nadu 607001', '600', '250', '6', 'ac', '5', 'available', '', '', '', '220a0s000000hjg4v0CB0_W_750_1624_R5.webp', '500', '650'),
(5, 'KSR Mahal', ' Nethaji Rd (Pondy, North Venugopalapuram, Manjakuppam, Cuddalore, Tamil Nadu 607001', '1000', '250', '4', 'ac', '10', 'available', 'provided', 'provided', 'provided', 'k.webp', '250', '350'),
(6, 'Arudra A/C Hall', ' No: 2, Rettai, Pillaiyar Koil St, Near Market, Pudupalayam, Cuddalore, Tamil Nadu 607001', '600', '200', '4', 'non ac', '10', 'no', 'provided', 'provided', 'provided', 'arudra.webp', '200', '280');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`amount_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`dec_id`);

--
-- Indexes for table `dj_setup`
--
ALTER TABLE `dj_setup`
  ADD PRIMARY KEY (`dj_id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `event_handling`
--
ALTER TABLE `event_handling`
  ADD PRIMARY KEY (`e_handling_id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_menu_sweets`
--
ALTER TABLE `food_menu_sweets`
  ADD PRIMARY KEY (`sweet_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `index_menu`
--
ALTER TABLE `index_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videography`
--
ALTER TABLE `videography`
  ADD PRIMARY KEY (`vg_id`);

--
-- Indexes for table `wedding_hall`
--
ALTER TABLE `wedding_hall`
  ADD PRIMARY KEY (`wh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `amount_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `dec_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dj_setup`
--
ALTER TABLE `dj_setup`
  MODIFY `dj_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_handling`
--
ALTER TABLE `event_handling`
  MODIFY `e_handling_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_menu_sweets`
--
ALTER TABLE `food_menu_sweets`
  MODIFY `sweet_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_menu`
--
ALTER TABLE `index_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(109) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `price_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videography`
--
ALTER TABLE `videography`
  MODIFY `vg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wedding_hall`
--
ALTER TABLE `wedding_hall`
  MODIFY `wh_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
