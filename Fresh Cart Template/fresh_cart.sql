-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 05:26 PM
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
-- Database: `fresh_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bid` int(11) NOT NULL,
  `Banner_image` varchar(255) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Span` varchar(255) NOT NULL,
  `Shop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bid`, `Banner_image`, `Title`, `Description`, `Span`, `Shop`) VALUES
(1, 'grocery-banner-2.jpg', 'Freshly Baked Buns', 'Get Upto', '30%', 'Shop Now'),
(2, 'ad-banner-2.jpg', 'Fresh Vegetable & Fruits', 'Get Upto', '10%', 'Shop Now');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `Blog_Image` varchar(255) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `Blog_Image`, `Title`, `Description`, `Date`, `Time`) VALUES
(1, 'blogImage.jpg', 'Garlic Cream Bucatini with Peas and Asparagus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac erat ut neque bibendum egestas sed quis justo. Integer non rhoncus diam. Nullam eget dapibus lectus, vitae condimentum sem.', '2022-04-17', '10min');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cart`
--

CREATE TABLE `blog_cart` (
  `bcid` int(11) NOT NULL,
  `Blog_Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_cart`
--

INSERT INTO `blog_cart` (`bcid`, `Blog_Image`, `Title`, `Description`, `Date`, `Time`) VALUES
(1, 'blogImage.jpg', 'Harissa Chickpeas with Whipped Feta', 'In et eros dapibus, facilisis ipsum sit amet, tempor dolor. Donec sed nisi gravida, molestie dolor molestie, congue sapien.', '2023-07-04', '10min'),
(2, 'blog-img-2.jpg', 'Almond Butter Chocolate Chip Zucchini Bars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2023-07-15', '12min'),
(3, 'blog-img-1.jpg', 'Spicy Shrimp Tacos Garlic Cilantro Lime Slaw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2023-07-02', '10min'),
(4, 'blog-img-4.jpg', 'Red Chile Chicken Tacos with Creamy Corn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2023-07-08', '15min'),
(5, 'blog-img-5.jpg', 'Basic + Awesome Broccoli Cheese Soup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2021-05-27', '10min'),
(6, 'blog-img-6.jpg', 'No-Boil Baked Penne with Meatballs', 'Nulla consectetur sapien a libero imperdiet posuere. Donec sollicitudin, turpis sit amet sollicitudin tristique, metus eros euismod tortor', '2022-03-12', '15min'),
(7, 'blog-img-9.jpg', 'No-Boil Baked Penne with Meatballs', 'Nulla consectetur sapien a libero imperdiet posuere. Donec sollicitudin, turpis sit amet sollicitudin tristique, metus eros euismod tortor', '2023-06-15', '15min'),
(8, 'blog-img-7.jpg', 'Red Chile Chicken Tacos with Creamy Corn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2023-04-18', '10min'),
(9, 'blog-img-8.jpg', 'Basic + Awesome Broccoli Cheese Soup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2022-05-05', '12min');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `bcatid` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`bcatid`, `Image`, `Title`, `Description`, `Date`, `Time`) VALUES
(1, 'blog-img-1.jpg', 'Harissa Chickpeas with Whipped Feta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2021-07-23', '15min'),
(2, 'blog-img-2.jpg', 'Almond Butter Chocolate Chip Zucchini Bars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2022-07-12', '15min'),
(3, 'blog-img-4.jpg', 'Red Chile Chicken Tacos with Creamy Corn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2022-09-18', '12min'),
(4, 'blog-img-6.jpg', 'No-Boil Baked Penne with Meatballs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2023-05-12', '13min'),
(5, 'blog-img-9.jpg', 'Red Chile Chicken Tacos with Creamy Corn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2021-11-12', '15min'),
(6, 'blog-img-3.jpg', 'Spicy Shrimp Tacos Garlic Cilantro Lime Slaw', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', '2022-06-28', '15min ');

-- --------------------------------------------------------

--
-- Table structure for table `blog_single`
--

CREATE TABLE `blog_single` (
  `bsid` int(11) NOT NULL,
  `Blog_Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description1` varchar(255) NOT NULL,
  `Description2` varchar(255) NOT NULL,
  `Description3` varchar(255) NOT NULL,
  `Description4` varchar(255) NOT NULL,
  `Description5` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_single`
--

INSERT INTO `blog_single` (`bsid`, `Blog_Image`, `Title`, `Description1`, `Description2`, `Description3`, `Description4`, `Description5`, `Date`, `Time`) VALUES
(1, 'blogImage.jpg', 'Garlic Cream Bucatini with Peas and Asparagus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum, ipsum ac pretium consequat, diam dui malesuada nulla, acsemper arcu dolor at dolor. Donec imperdiet urna eget consequat accumsan. Morbi aliquam quis nulla in aliquet. Integer velit nis', 'Quisque pharetra felis quis augue sodales, sit amet tempus enim luctus. Phasellus ac eros nisi. Nam quis orci quis nunc gravida blandit. Nam suscipit sapien acvarius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mucommodo at, rhonc', 'Integer aliquet blandit bibendum uisque ornare mauris et sem sodales quis porttitor nunc consequat. Suspendisse potenti. In condimentum leo vitae nisl dignissim, in imperdiet massa euismod tiam gravida dui ut posuere mollis.', 'Phasellus ac eros nisi. Nam quis orci quis nunc gravida blandit. Nam suscipit sapien acvarius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mucommodo at, rhoncus non mauriss. Quisque pharetra felis quis augue sodales, sit amet temp', '', '2022-07-24', '15min');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `Icon` varchar(200) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Parent_Category1` int(255) NOT NULL,
  `Date` date NOT NULL,
  `Product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `Icon`, `Name`, `Parent_Category1`, `Date`, `Product`) VALUES
(1, 'dairy.svg', 'Butter', 1, '2023-06-13', 13),
(2, 'dairy.svg', 'Milk Drinks', 1, '2023-06-13', 45),
(3, 'snacks.svg', 'Breakfast Cereal', 6, '2023-06-12', 12),
(4, 'snacks.svg', 'Noodles, Pasta & Soup', 6, '2023-06-26', 11),
(5, 'bakery.svg', 'Curd & Yogurt', 1, '2023-06-19', 22),
(6, 'wine.svg', 'Fruit Juices', 5, '2023-06-26', 9),
(7, 'wine.svg', 'Herbal Drinks', 5, '2023-06-27', 22),
(8, 'dairy.svg', 'Eggs', 1, '2023-06-26', 88),
(9, 'dairy.svg\r\n', 'Dairy Products', 1, '2023-06-20', 55),
(10, 'dairy.svg', 'Cheese', 1, '2023-06-10', 11),
(11, 'snacks.svg', 'Instant Mixes', 6, '2023-06-11', 44),
(13, 'wine.svg', 'Water & Ice Cubes', 5, '2023-06-01', 88),
(16, 'snacks.svg', 'Chips', 2, '2023-06-23', 77),
(17, 'snacks.svg', 'Choclates', 2, '2023-05-30', 66),
(18, 'snacks.svg', 'Biscuits', 2, '2023-06-01', 99),
(19, 'snacks.svg', 'Coffee', 2, '2023-05-29', 122),
(20, 'bakery.svg', 'Frozen Non-Veg Snacks', 6, '2023-07-12', 12),
(21, 'wine.svg', 'Soda & Mixers', 5, '2023-07-13', 23);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `City_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `City_Name`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(3, 'Multan'),
(4, 'Faislabad'),
(5, 'Peshwar'),
(6, 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `daily_best_sells`
--

CREATE TABLE `daily_best_sells` (
  `dbsid` int(11) NOT NULL,
  `Daily_Image` varchar(255) NOT NULL,
  `Daily_Title` varchar(255) NOT NULL,
  `Daily_Description` varchar(255) NOT NULL,
  `Daily_Shop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_best_sells`
--

INSERT INTO `daily_best_sells` (`dbsid`, `Daily_Image`, `Daily_Title`, `Daily_Description`, `Daily_Shop`) VALUES
(2, 'banner-deal.jpg', '100% Organic Coffee Beans.', '	Get the best deal before close....', 'Shop Now');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `did` int(11) NOT NULL,
  `Detail_Image` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`did`, `Detail_Image`, `Title`, `Description`) VALUES
(1, 'clock.svg', '10 minute grocery now', 'Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.'),
(6, 'package.svg', 'Wide Assortment', 'Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories'),
(7, 'gift.svg', 'Best Prices & Offers', 'Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess & offers.'),
(8, 'refresh-cw.svg', 'Easy Returns', 'Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked policy.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `fid` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Partner_Image1` varchar(200) NOT NULL,
  `Partner_Image2` varchar(200) NOT NULL,
  `Partner_Image3` varchar(200) NOT NULL,
  `Partner_Image4` varchar(200) NOT NULL,
  `Partner_Image5` varchar(200) NOT NULL,
  `Title2` varchar(200) NOT NULL,
  `Partner_Image6` varchar(255) NOT NULL,
  `Partner_Image7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`fid`, `Title`, `Partner_Image1`, `Partner_Image2`, `Partner_Image3`, `Partner_Image4`, `Partner_Image5`, `Title2`, `Partner_Image6`, `Partner_Image7`) VALUES
(1, 'Payments Partners', 'paypal.svg', 'visa.svg', 'american-express.svg', 'amazonpay.svg', 'mastercard.svg', 'Get deliveries with FreshCart ', 'googleplay-btn.svg', 'appstore-btn.svg');

-- --------------------------------------------------------

--
-- Table structure for table `image_align`
--

CREATE TABLE `image_align` (
  `iid` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Description1` varchar(255) NOT NULL,
  `Description2` varchar(255) NOT NULL,
  `Description3` varchar(255) NOT NULL,
  `Description4` varchar(255) NOT NULL,
  `Description5` varchar(255) NOT NULL,
  `Description6` varchar(255) NOT NULL,
  `Description7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Maham', '122');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `Logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `Logo`) VALUES
(1, 'freshcart-logo.svg');

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `p_cid` int(11) NOT NULL,
  `P_Image` varchar(255) NOT NULL,
  `Parent_Categor_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`p_cid`, `P_Image`, `Parent_Categor_Name`) VALUES
(1, 'category-dairy-bread-eggs.jpg', 'Dairy, Bread  & Eggs'),
(2, 'snack-munchies.png', 'Snacks & Munchies'),
(3, 'fruits-vegetables.png', 'Fruits & Vegetables'),
(5, 'cold-drinks-juices.png', 'Cold Drinks & Juices'),
(6, 'instant-food.png', 'Breakfast & Instant Food'),
(9, 'category-chicken-meat-fish.jpg', 'Chicken, meat & fish'),
(10, 'snack-munchies.png', 'Bakery & Biscuits');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `span_p` varchar(255) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Image3` varchar(200) NOT NULL,
  `Image4` varchar(255) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Description` varchar(255) NOT NULL,
  `Parent_Category2` int(11) NOT NULL,
  `rating` decimal(11,1) NOT NULL,
  `Price1` int(11) NOT NULL,
  `Price2` int(11) NOT NULL,
  `Stock` varchar(255) NOT NULL,
  `Create_At` date NOT NULL,
  `Popular` varchar(255) NOT NULL,
  `Best_Sells` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `span_p`, `Image`, `Image2`, `Image3`, `Image4`, `Product_Name`, `Product_Description`, `Parent_Category2`, `rating`, `Price1`, `Price2`, `Stock`, `Create_At`, `Popular`, `Best_Sells`) VALUES
(2, '10%', 'product-img-9.jpg', 'product-img-4.jpg', 'product-img-11.jpg', 'product-single-img-4.jpg', 'Slurrp Millet Chocolate', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 2, 3.0, 7, 10, 'In Stock', '2023-06-13', 'Popular\r\n', ''),
(3, '10%', 'product-img-1.jpg', 'product-img-3.jpg', 'product-img-2.jpg', 'product-single-img-1.jpg', 'Haldiram\'s Sev Bhujia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 10, 3.9, 5, 8, 'Out Of Stock', '2023-06-13', '', ''),
(6, '5%', 'product-img-3.jpg\r\n', 'product-img-1.jpg', 'product-img-2.jpg', 'product-single-img-1.jpg', 'Cadbury 5 Star Chocolate', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 10, 3.5, 5, 7, 'Out Of Stock', '2023-06-09', 'Popular', ''),
(7, 'Sale\r\n', 'product-img-5.jpg', 'product-img-8.jpg', 'product-img-12.jpg', 'product-img-8.jpg', 'Salted Instant Popcorn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 6, 4.8, 7, 10, 'In Stock', '2023-06-01', '', ''),
(8, 'Sale', 'product-img-4.jpg', 'product-img-9.jpg', 'product-img-11.jpg', 'product-single-img-4.jpg', 'Onion Flavour Potato', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 2, 5.0, 3, 5, 'In Stock', '2023-06-14', 'Popular', ''),
(9, '5%', 'product-img-2.jpg', 'product-img-1.jpg', 'product-img-3.jpg', 'product-single-img-1.jpg', 'NutriChoice Digestive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 10, 4.0, 5, 8, 'In Stock', '2023-07-12', '', ''),
(10, '10%', 'product-img-10.jpg', 'product-img-7.jpg', 'product-img-6.jpg', 'product-single-img-3.jpg', 'Amul Butter - 500 g', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 1, 4.5, 10, 15, 'Out Of Stock', '2023-06-06', 'Popular', ''),
(11, 'Sale', 'product-img-8.jpg', 'product-img-5.jpg', 'product-img-12.jpg', 'product-img-5.jpg', 'Kellogg\'s Original Cereals', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 6, 3.9, 12, 18, 'In Stock', '2023-06-08', 'Popular', ''),
(12, '5%', 'product-img-7.jpg', 'product-img-10.jpg', 'product-img-6.jpg', 'product-single-img-3.jpg', 'Britannia Cheese Slices', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 1, 4.0, 15, 23, 'Out Of Stock', '2022-06-10', 'Popular', ''),
(13, '', 'product-img-6.jpg', 'product-img-7.jpg', 'product-img-10.jpg', 'product-single-img-3.jpg', 'Blueberry Greek Yogurt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 1, 4.0, 13, 18, 'In Stock', '2023-06-02', '', ''),
(14, '5%', 'product-single-img-1.jpg', 'product-img-1.jpg', 'product-img-2.jpg', 'product-img-3.jpg', 'Cokoladni Kolutici', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 10, 4.0, 15, 20, 'In Stock', '2023-06-17', 'Popular', ''),
(15, '5%', 'product-single-img-3.jpg', 'product-img-10.jpg', 'product-img-7.jpg', 'product-img-6.jpg', 'Cajni Kolutici', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 1, 3.0, 10, 15, 'In Stock', '2023-06-17', '', ''),
(16, 'Sale', 'product-img-17.jpg', 'product-img-13.jpg', 'product-img-16.jpg', 'product-img-15.jpg', 'Kiwi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 3, 4.0, 20, 30, 'In Stock', '2023-06-05', 'Popular', ''),
(17, 'Sale', 'product-single-img-4.jpg', 'product-img-4.jpg', 'product-img-9.jpg', 'product-img-11.jpg', 'Krem Stapici', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 2, 4.0, 13, 16, 'In Stock', '2023-06-10', 'Popular', ''),
(18, '5%', 'product-img-18.jpg', 'product-img-17.jpg', 'product-img-16.jpg', 'product-img-15.jpg', 'Banana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 3, 3.7, 12, 18, 'In Stock', '2023-06-06', 'Popular', ''),
(19, '10%', 'product-img-15.jpg', 'product-img-16.jpg', 'product-img-17.jpg', 'product-img-18.jpg', 'Apple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 3, 4.5, 14, 22, 'In Stock', '2023-06-07', 'Popular', ''),
(20, '5%', 'product-img-16.jpg', 'product-img-15.jpg', 'product-img-17.jpg', 'product-img-18.jpg', 'Pineapple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 3, 3.5, 15, 20, 'In Stock', '2023-06-08', '', 'Best Sells'),
(21, '10%', 'product-img-11.jpg', 'product-img-9.jpg', 'product-img-4.jpg', 'product-single-img-4.jpg', 'French Coffee', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 2, 4.5, 20, 25, 'In Stock', '2023-06-07', '', 'Best Sells'),
(22, '10%', 'product-img-12.jpg', 'product-img-19.jpg', 'product-img-16.jpg', 'product-img-17.jpg', 'Crushed Tomatoes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elitaenean sit amet tincidunt ellentesque aliquet ligula in ultrices congue.', 3, 4.5, 15, 20, 'In Stock', '0000-00-00', 'Popular', 'Best Sells');

-- --------------------------------------------------------

--
-- Table structure for table `signup_web`
--

CREATE TABLE `signup_web` (
  `su_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_web`
--

INSERT INTO `signup_web` (`su_id`, `Username`, `Email`, `Password`, `City`) VALUES
(1, 'Sana', 'sana@gmail.com', '1234565', 'Karachi'),
(2, 'Zoya', 'Zoyaahmed@gmail.com', '876544', 'Quetta'),
(3, 'Natasha', 'Natasha@gmail.com', '45678', 'karachi'),
(4, 'Tara', 'tara@gmail.com', '456667', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sid` int(11) NOT NULL,
  `Slider_image` varchar(200) NOT NULL,
  `Span` varchar(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(222) NOT NULL,
  `Shop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sid`, `Slider_image`, `Span`, `Title`, `Description`, `Shop`) VALUES
(1, 'slider-image-2.jpg', 'Opening Sale Discount30%', 'Super Market For Fresh Grocery', 'Free Shipping For First-Customer Only', 'Shop Now'),
(2, 'slider-image-1.jpg', 'Opening Sale Discount 10%', 'Fresh Vegetable', 'Shipping is free for daily customers', 'Shop Now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blog_cart`
--
ALTER TABLE `blog_cart`
  ADD PRIMARY KEY (`bcid`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`bcatid`);

--
-- Indexes for table `blog_single`
--
ALTER TABLE `blog_single`
  ADD PRIMARY KEY (`bsid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `Parent_category` (`cid`),
  ADD KEY `fk` (`Parent_Category1`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `daily_best_sells`
--
ALTER TABLE `daily_best_sells`
  ADD PRIMARY KEY (`dbsid`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `image_align`
--
ALTER TABLE `image_align`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`p_cid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `fp` (`Parent_Category2`);

--
-- Indexes for table `signup_web`
--
ALTER TABLE `signup_web`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_cart`
--
ALTER TABLE `blog_cart`
  MODIFY `bcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `bcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_single`
--
ALTER TABLE `blog_single`
  MODIFY `bsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daily_best_sells`
--
ALTER TABLE `daily_best_sells`
  MODIFY `dbsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_align`
--
ALTER TABLE `image_align`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `p_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup_web`
--
ALTER TABLE `signup_web`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fp` FOREIGN KEY (`Parent_Category2`) REFERENCES `parent_category` (`p_cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
