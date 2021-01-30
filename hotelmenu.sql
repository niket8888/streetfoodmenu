-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 07:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(254) NOT NULL,
  `address1` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `opening1` text DEFAULT NULL,
  `opening2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address1`, `address2`, `phone`, `opening1`, `opening2`) VALUES
(1, 'Delicious Food Truck, New Avenue Road,', 'Footala Road, Nagpur, Maharashtra', '+91 8956449091', 'Monday to Friday 09:00am - 09:00pm', 'Friday and Sunday till 11 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(254) NOT NULL,
  `category_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Sweet');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(254) NOT NULL,
  `name` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `msg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `mobile`, `msg`, `msg_date`) VALUES
(6, 'Abhishekh', '7126937287', 'Hii Can I do Job With you??', '2020-12-23'),
(7, 'Rihtik', '7876543219', 'I m a hotel Management Student and want to do an internship on your restorent.', '2020-12-23'),
(8, 'Manoj', '5645342312', 'My name is manoj for more business you can contact me.', '2020-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `how_started`
--

CREATE TABLE `how_started` (
  `how_started_id` int(254) NOT NULL,
  `how_started1` text DEFAULT NULL,
  `how_started2_mother` text DEFAULT NULL,
  `how_started1_date` text DEFAULT NULL,
  `how_started1_name` text DEFAULT NULL,
  `how_started1_resn` text DEFAULT NULL,
  `how_started1_efforts` text DEFAULT NULL,
  `how_started1A` text DEFAULT NULL,
  `how_started1B` text DEFAULT NULL,
  `how_started1C` text DEFAULT NULL,
  `how_started1D` text DEFAULT NULL,
  `how_started_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `how_started`
--

INSERT INTO `how_started` (`how_started_id`, `how_started1`, `how_started2_mother`, `how_started1_date`, `how_started1_name`, `how_started1_resn`, `how_started1_efforts`, `how_started1A`, `how_started1B`, `how_started1C`, `how_started1D`, `how_started_img`) VALUES
(1, 'How Delicious Food Truck Started', 'Mother gift cooking knowlege, She is the best in cooking thats why I can cook well. Its her blessings.', 'Delicious Food Truck 01 Jan 2021', 'Hi, I am Sanjiv Kapoor', 'This Journey Started because of three Reason 1)Money Need 2)Cooking Intress 3)Self Business.', 'I am Trying my best every day I hope you love what i can cook delisious deshese for you.', 'Fresh', 'Testy', 'Best Price here', 'Best Service', 'assets/img/1607588431.banner-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(254) NOT NULL,
  `category_id` text DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `item_price` text DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `category_id`, `item_name`, `item_price`, `item_description`, `item_image`) VALUES
(21, '1', 'Breakfast Cereal', '50', 'Breakfast Description How it is made.', 'assets/img/1607771975.Breakfast Cereal.jpg'),
(22, '1', 'Breakfast Burrito', '40', 'Description How Breakfast Burrito is made', 'assets/img/1607772194.breakfast-burrito.png'),
(25, '2', 'Moong dal khichdi', '70', 'Description of Food Here', 'assets/img/1607773973.Namkeen-Oats-1024x521.jpg'),
(26, '3', 'Chhola Chawal', '90', 'How chhola chawal is made. Description here.', 'assets/img/1607774060.Indian-Kids-Meal-with-rice-naan-potatoes-and-tikka-masala.png'),
(27, '2', 'Dal Chawal', '50', 'Total Indian Reciepy here.', 'assets/img/1608654712.pizza-6.jpg'),
(28, '3', 'Chhola Bhatura', '90', 'Proper from Panjabi style.', 'assets/img/1608716247.image_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(254) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `user_password`) VALUES
(1, 'niket', '9f0bfe647b229498e06fba29940842e84f949843420ea983572548031a5fe58efaf8bddb7f32f3dd92196dbdcf6fb7444975e80d44d290707e69a068c863359a7jE/O61N7eFtGsGStvHyr4YMt7Pd1ewfbLg9agykfa4=');

-- --------------------------------------------------------

--
-- Table structure for table `menu_list`
--

CREATE TABLE `menu_list` (
  `menu_list_id` int(11) NOT NULL,
  `menu_list1` text DEFAULT NULL,
  `menu_list2` text DEFAULT NULL,
  `menu_list3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_list`
--

INSERT INTO `menu_list` (`menu_list_id`, `menu_list1`, `menu_list2`, `menu_list3`) VALUES
(1, 'All the raw material are used for cooking including rise, oil and vegiees are properlly washed and clean.', 'Veg & Non-veg Both veriety we do serve. And Make Sure to use seperate Pots & Spoons.', 'We use best fresh Soyabean oil & take care of Heigean.');

-- --------------------------------------------------------

--
-- Table structure for table `menu_special`
--

CREATE TABLE `menu_special` (
  `menu_special_id` int(254) NOT NULL,
  `menu_special` text DEFAULT NULL,
  `menu_special_name` text DEFAULT NULL,
  `menu_special_description1` text DEFAULT NULL,
  `menu_special_description2` text DEFAULT NULL,
  `menu_special_description3` text DEFAULT NULL,
  `menu_price_single` text DEFAULT NULL,
  `menu_price_couple` text DEFAULT NULL,
  `menu_special_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_special`
--

INSERT INTO `menu_special` (`menu_special_id`, `menu_special`, `menu_special_name`, `menu_special_description1`, `menu_special_description2`, `menu_special_description3`, `menu_price_single`, `menu_price_couple`, `menu_special_img`) VALUES
(1, 'Our Signature Food', 'Soya Bean Rise', 'Its A perfect Choice for Evening night', 'Its Fress, Hot And Healthy.', 'Perfectly cooked Soyabeans Melts in your Mouth.', '100', '70', 'assets/img/1608716119.bg_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `title123`
--

CREATE TABLE `title123` (
  `title_id` int(254) NOT NULL,
  `title1` text DEFAULT NULL,
  `title2` text DEFAULT NULL,
  `title3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title123`
--

INSERT INTO `title123` (`title_id`, `title1`, `title2`, `title3`) VALUES
(1, 'Delicious Food Truck', 'Food to fit your Lifestyle & Health', 'Specialized street food');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `how_started`
--
ALTER TABLE `how_started`
  ADD PRIMARY KEY (`how_started_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `menu_list`
--
ALTER TABLE `menu_list`
  ADD PRIMARY KEY (`menu_list_id`);

--
-- Indexes for table `menu_special`
--
ALTER TABLE `menu_special`
  ADD PRIMARY KEY (`menu_special_id`);

--
-- Indexes for table `title123`
--
ALTER TABLE `title123`
  ADD PRIMARY KEY (`title_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `how_started`
--
ALTER TABLE `how_started`
  MODIFY `how_started_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_list`
--
ALTER TABLE `menu_list`
  MODIFY `menu_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_special`
--
ALTER TABLE `menu_special`
  MODIFY `menu_special_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `title123`
--
ALTER TABLE `title123`
  MODIFY `title_id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
