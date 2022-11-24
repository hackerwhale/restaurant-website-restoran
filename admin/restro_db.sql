-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `abimg1` varchar(255) NOT NULL,
  `abimg2` varchar(255) NOT NULL,
  `abimg3` varchar(255) NOT NULL,
  `abimg4` varchar(255) NOT NULL,
  `ab_title` varchar(255) NOT NULL,
  `ab_subtitle` varchar(255) NOT NULL,
  `ab_desc` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `buttonname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `abimg1`, `abimg2`, `abimg3`, `abimg4`, `ab_title`, `ab_subtitle`, `ab_desc`, `year`, `exp`, `buttonname`) VALUES
(13, 'about-11668851919.jpg', 'about-21668852300.jpg', 'about-31668852312.jpg', 'about-41668852324.jpg', 'about us', 'Welcome to Restoran', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem e', 15, 'Years of  EXPERIENCE ', 'READ MORE'),
(14, 'about-11668851919.jpg', 'about-21668852300.jpg', 'about-31668852312.jpg', 'about-41668852324.jpg', 'about us', 'Welcome to Restoran', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem e', 50, 'Popular  MASTER CHEFS ', 'READ MORE');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `btnname` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `title`, `btnname`, `Video`, `name`, `email`, `date`, `people`, `request`) VALUES
(3, 'Reservation', 'Book A Table Online', 'https://www.youtube.com/embed/Q_bfhCxA4S0', 'Your Name', '', '', '', ''),
(4, '', '', '', 'Jakeem Estes', 'xyryqegu@mailinator.com', '25-Oct-1984', '145', 'Maiores qui fugiat '),
(5, '', '', '', 'Brenna Noble', 'viravami@mailinator.com', '29-Mar-1970', '387', 'Praesentium duis ame'),
(6, '', '', '', 'Jade Cantrell', 'vumipo@mailinator.com', '17-Jun-1981', '395', 'Qui delectus irure '),
(7, '', '', '', 'Wynter Miller', 'sijy@mailinator.com', '23-Jul-1991', '194', 'Sit beatae animi i'),
(8, '', '', '', 'Kaseem Mejia', 'qujypym@mailinator.com', '09-Oct-1972', '502', 'Quia architecto elit'),
(9, '', '', '', 'Thor Cherry', 'mugucakuwi@mailinator.com', '30-Sep-1995', '471', 'Consequat Tenetur n'),
(10, '', '', '', 'Abdul Howe', 'bydi@mailinator.com', '05-Dec-2001', '156', 'Praesentium modi per'),
(11, '', '', '', 'Sydnee Hewitt', 'vynewedome@mailinator.com', '31-Jul-2011', '243', 'Ut sed excepturi qui'),
(12, '', '', '', 'Ila Hurst', 'noquxalira@mailinator.com', '25-Feb-2014', '691', 'Culpa aspernatur non'),
(13, '', '', '', 'Irene Bailey', 'pagugepa@mailinator.com', '01-Aug-2002', '488', 'Magni quia amet por');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `mailaddress` varchar(255) NOT NULL,
  `btnname` varchar(255) NOT NULL,
  `yname` varchar(255) NOT NULL,
  `yemail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `subtitle`, `mailaddress`, `btnname`, `yname`, `yemail`, `subject`, `message`) VALUES
(3, 'Contact Us', 'Contact For Any Query', 'book@example.com', 'Booking', '', '', '', ''),
(4, 'Contact Us', 'Contact For Any Query', 'info@example.com', 'General', '', '', '', ''),
(5, 'Contact us', 'Contact For Any Query', 'tech@example.com', 'Technical', '', '', '', ''),
(6, '', '', '', '', 'Joy Reeves', 'foxerugel@mailinator.com', 'Ea esse dolores ex ', 'Consectetur quam no'),
(7, '', '', '', '', 'Alfreda Osborn', 'syhazexona@mailinator.com', 'Optio alias libero ', 'Dolores suscipit eu ');

-- --------------------------------------------------------

--
-- Table structure for table `filemanager`
--

CREATE TABLE `filemanager` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filelink` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filemanager`
--

INSERT INTO `filemanager` (`id`, `filename`, `filelink`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first', 'usecasediagramsdm1659521445.png', 'png', '1', '2022-08-03 10:10:45', '2022-08-03 10:10:45'),
(2, 'second', '254159014_1101425923929256_2128037900474044853_n1659521942.jpg', 'jpg', '1', '2022-08-03 10:19:02', '2022-08-03 10:19:02'),
(3, 'third', 'wp4346792-asus-tuf-wallpapers1659522299.jpg', 'jpg', '1', '2022-08-03 10:24:59', '2022-08-03 10:24:59'),
(4, 'fourth', '@hackerwhale1659684975.png', 'png', '1', '2022-08-05 07:36:15', '2022-08-05 07:36:15'),
(5, 'Fifth', 'logo(2)1659685269.png', 'png', '1', '2022-08-05 07:41:09', '2022-08-05 07:41:09'),
(6, 'sixth', 'purpleandblueanimelightnightplaylistyoutubethumbnail1663912909.png', 'png', '1', '2022-09-23 06:01:49', '2022-09-23 06:01:49'),
(8, 'intro image', 'hero1668848799.png', 'png', '1', '2022-11-19 09:06:39', '2022-11-19 09:06:39'),
(9, 'first about us image', 'about-11668851919.jpg', 'jpg', '1', '2022-11-19 09:58:39', '2022-11-19 09:58:39'),
(10, 'aboutus-2', 'about-21668852300.jpg', 'jpg', '1', '2022-11-19 10:05:00', '2022-11-19 10:05:00'),
(11, 'aboutus-3', 'about-31668852312.jpg', 'jpg', '1', '2022-11-19 10:05:12', '2022-11-19 10:05:12'),
(12, 'aboutus-4', 'about-41668852324.jpg', 'jpg', '1', '2022-11-19 10:05:24', '2022-11-19 10:05:24'),
(13, 'team 1', 'team-11668854680.jpg', 'jpg', '1', '2022-11-19 10:44:40', '2022-11-19 10:44:40'),
(14, 'team 2', 'team-21668854693.jpg', 'jpg', '1', '2022-11-19 10:44:53', '2022-11-19 10:44:53'),
(15, 'Team 3', 'team-31668854703.jpg', 'jpg', '1', '2022-11-19 10:45:03', '2022-11-19 10:45:03'),
(16, 'Team 4', 'team-41668854733.jpg', 'jpg', '1', '2022-11-19 10:45:33', '2022-11-19 10:45:33'),
(17, 'master chef icon', 'icons8-chef-601668930589.png', 'png', '1', '2022-11-20 07:49:49', '2022-11-20 07:49:49'),
(18, 'resturant icon', 'icons8-restaurant-501668930654.png', 'png', '1', '2022-11-20 07:50:54', '2022-11-20 07:50:54'),
(19, 'cart icon', 'icons8-shopping-cart-641668930686.png', 'png', '1', '2022-11-20 07:51:26', '2022-11-20 07:51:26'),
(20, '24/7 support', 'icons8-24-hours-support-641668930773.png', 'png', '1', '2022-11-20 07:52:53', '2022-11-20 07:52:53'),
(21, 'menu 1', 'menu-11668938106.jpg', 'jpg', '1', '2022-11-20 09:55:06', '2022-11-20 09:55:06'),
(22, 'menu 2', 'menu-21668938115.jpg', 'jpg', '1', '2022-11-20 09:55:15', '2022-11-20 09:55:15'),
(23, 'menu 3', 'menu-31668938122.jpg', '', '1', '2022-11-20 09:55:22', '2022-11-20 09:55:22'),
(24, 'menu 4', 'menu-41668938139.jpg', 'jpg', '1', '2022-11-20 09:55:39', '2022-11-20 09:55:39'),
(25, 'menu 5', 'menu-51668938151.jpg', 'jpg', '1', '2022-11-20 09:55:51', '2022-11-20 09:55:51'),
(26, 'menu 6', 'menu-61668938162.jpg', 'jpg', '1', '2022-11-20 09:56:02', '2022-11-20 09:56:02'),
(27, 'breakfast', 'icons8-breakfast-601668938607.png', 'png', '1', '2022-11-20 10:03:27', '2022-11-20 10:03:27'),
(28, 'lunch', 'icons8-hamburger-641668938654.png', 'png', '1', '2022-11-20 10:04:14', '2022-11-20 10:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `intro_title` varchar(255) NOT NULL,
  `intro_desc` varchar(255) NOT NULL,
  `intro_img` varchar(255) NOT NULL,
  `intro_img_type` varchar(255) NOT NULL,
  `btnname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `intro_title`, `intro_desc`, `intro_img`, `intro_img_type`, `btnname`) VALUES
(11, 'Enjoy Our Delicious Meal', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', 'hero1668848799.png', 'png', 'BOOK A TABLE');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_subtitle` varchar(255) NOT NULL,
  `text1` varchar(255) DEFAULT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `food_img` varchar(255) NOT NULL,
  `me_item` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `me_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_title`, `menu_subtitle`, `text1`, `text2`, `logo`, `food_img`, `me_item`, `price`, `me_desc`) VALUES
(9, 'Food Menu', 'Most Popular Items', 'Popular ', 'Breakfast', 'icons8-breakfast-601668938607.png', 'menu-11668938106.jpg', 'Chicken Burger', '115', 'Ipsum ipsum clita erat amet dolor justo diam'),
(10, 'Food Menu', 'Most Popular Items', 'Special', 'Lunch', 'icons8-hamburger-641668938654.png', 'menu-21668938115.jpg', 'Chicken Burger', '115', 'Ipsum ipsum clita erat amet dolor justo diam'),
(11, 'Food Menu', 'Most Popular Items', 'Lovely ', 'Dinner', 'icons8-restaurant-501668930654.png', 'menu-31668938122.jpg', 'Pasta', '100', 'Ipsum ipsum clita erat amet dolor justo diam'),
(12, 'Food Menu', 'Most Popular Items', '', '', ' icons8-restaurant-501668930654.png', 'menu-41668938139.jpg', 'Chicken Burger', '115', 'Ipsum ipsum clita erat amet dolor justo diam'),
(13, 'Food Menu', 'Most Popular Items', '', '', ' icons8-restaurant-501668930654.png', 'menu-61668938162.jpg', 'French Fries', '80', 'Ipsum ipsum clita erat amet dolor justo diam'),
(14, 'Food Menu', 'Most Popular Items', '', '', ' icons8-hamburger-641668938654.png', 'menu-31668938122.jpg', 'Pizza', '125', 'Ipsum ipsum clita erat amet dolor justo diam');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_subtitle` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `feature_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_subtitle`, `icon`, `feature_title`, `description`) VALUES
(14, ' Our Services', 'Explore Our Services', 'icons8-chef-601668930589.png', 'Master Chefs', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'),
(15, ' Our Services', 'Explore Our Services', 'icons8-restaurant-501668930654.png', 'Quality Food', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'),
(16, ' Our Services', 'Explore Our Services', 'icons8-shopping-cart-641668930686.png', 'Online Order', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'),
(17, ' Our Services', 'Explore Our Services', 'icons8-24-hours-support-641668930773.png', '24/7 Service', 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'),
(18, ' Inventore proident ', 'Online Service', 'icons8-restaurant-501668930654.png', 'Enim tempora qui obc', 'Eos esse mollit blan');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `id` int(11) NOT NULL,
  `tm_title` varchar(255) NOT NULL,
  `tm_subtitle` varchar(255) NOT NULL,
  `tm_img` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`id`, `tm_title`, `tm_subtitle`, `tm_img`, `fullname`, `designation`, `fb_link`, `twitter_link`, `insta_link`) VALUES
(7, 'Team Members', 'Our Master Chefs', 'team-11668854680.jpg', 'Blake Norris', 'Head Cook', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com'),
(8, 'Nisi aut ex ex fugia', 'Magna cupiditate vol', 'team-21668854693.jpg', 'Carl Willis', 'senior Chef', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com'),
(9, 'Eaque reprehenderit', 'Vero ut velit incid', 'team-31668854703.jpg', 'Oren Waters', 'Cook', 'https://www.facebook.comhttps://www.twitter.com', 'https://www.twitter.com', 'https://www.instagram.com'),
(10, 'Nisi rerum quia volu', 'Quasi labore est vol', 'team-41668854733.jpg', 'Ishmael Villarreal', 'Voluptatibus incidun', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com'),
(12, 'Atque deserunt archi', 'Quis eveniet ad cor', 'team-11668854680.jpg', 'Keiko Mason', 'Dishwasher', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `photo`, `message`, `name`, `profession`) VALUES
(2, 'wp4346792-asus-tuf-wallpapers1659522299.jpg', 'lorem ipsum ', 'Rohan karki', 'Web Developer'),
(4, 'team-21668854693.jpg', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem e', 'David Bombal', 'Hacker'),
(5, 'icons8-chef-601668930589.png', 'Dicta irure sed non ', 'Jacob Anthony', 'In similique qui vol');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '2022-08-03 11:44:06', '2022-08-03 11:44:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filemanager`
--
ALTER TABLE `filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `filemanager`
--
ALTER TABLE `filemanager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
