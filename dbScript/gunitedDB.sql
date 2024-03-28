-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 01:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunited`
--
CREATE DATABASE IF NOT EXISTS `gunited` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gunited`;

-- --------------------------------------------------------

--
-- Table structure for table `grocerycategories`
--

CREATE TABLE `grocerycategories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `subcategory` text NOT NULL,
  `item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grocerycategories`
--

INSERT INTO `grocerycategories` (`id`, `category`, `subcategory`, `item`) VALUES
(1, 'Produce', 'Fruits', 'Citrus Fruits'),
(2, 'Produce', 'Fruits', 'Berries'),
(3, 'Produce', 'Fruits', 'Tropical Fruits'),
(4, 'Produce', 'Fruits', 'Stone Fruits'),
(5, 'Produce', 'Vegetables', 'Leafy Greens'),
(6, 'Produce', 'Vegetables', 'Root Vegetables'),
(7, 'Produce', 'Vegetables', 'Cruciferous Vegetables'),
(8, 'Produce', 'Vegetables', 'Nightshade Vegetables'),
(9, 'Canned and Packaged Goods', 'Canned Goods', 'Canned Vegetables'),
(10, 'Canned and Packaged Goods', 'Canned Goods', 'Canned Fruits'),
(11, 'Canned and Packaged Goods', 'Canned Goods', 'Canned Soups'),
(12, 'Canned and Packaged Goods', 'Packaged Meals', 'Pasta Dishes'),
(13, 'Canned and Packaged Goods', 'Packaged Meals', 'Rice Dishes'),
(14, 'Canned and Packaged Goods', 'Packaged Meals', 'Instant Noodles'),
(15, 'Canned and Packaged Goods', 'Packaged Meals', 'Microwave Meals'),
(16, 'Dairy and Eggs', 'Dairy', 'Milk'),
(17, 'Dairy and Eggs', 'Dairy', 'Cheese'),
(18, 'Dairy and Eggs', 'Dairy', 'Yogurt'),
(19, 'Dairy and Eggs', 'Dairy', 'Butter'),
(20, 'Dairy and Eggs', 'Eggs', 'Chicken Eggs'),
(21, 'Dairy and Eggs', 'Eggs', 'Duck Eggs'),
(22, 'Dairy and Eggs', 'Eggs', 'Quail Eggs'),
(23, 'Meat and Poultry', 'Meat', 'Beef'),
(24, 'Meat and Poultry', 'Meat', 'Pork'),
(25, 'Meat and Poultry', 'Meat', 'Lamb'),
(26, 'Meat and Poultry', 'Meat', 'Chicken'),
(27, 'Meat and Poultry', 'Meat', 'Turkey'),
(28, 'Meat and Poultry', 'Deli', 'Sliced Meats'),
(29, 'Meat and Poultry', 'Deli', 'Deli Cheeses'),
(30, 'Meat and Poultry', 'Deli', 'Prepared Salads'),
(31, 'Seafood', 'Fish & Seafood', 'Whitefish'),
(32, 'Seafood', 'Fish & Seafood', 'Salmon'),
(33, 'Seafood', 'Fish & Seafood', 'Shellfish'),
(34, 'Seafood', 'Fish & Seafood', 'Shrimp'),
(35, 'Seafood', 'Fish & Seafood', 'Crab'),
(36, 'Seafood', 'Fish & Seafood', 'Lobster'),
(37, 'Seafood', 'Deli', 'Smoked Fish'),
(38, 'Seafood', 'Deli', 'Cured Fish'),
(39, 'Condiments, Spices, and Oils', 'Condiments & Spices', 'Sauces'),
(40, 'Condiments, Spices, and Oils', 'Condiments & Spices', 'Spices'),
(41, 'Condiments, Spices, and Oils', 'Condiments & Spices', 'Herbs'),
(42, 'Condiments, Spices, and Oils', 'Cooking Oils & Vinegars', 'Olive Oil'),
(43, 'Condiments, Spices, and Oils', 'Cooking Oils & Vinegars', 'Vegetable Oil'),
(44, 'Condiments, Spices, and Oils', 'Cooking Oils & Vinegars', 'Balsamic Vinegar'),
(45, 'Condiments, Spices, and Oils', 'Cooking Oils & Vinegars', 'Apple Cider Vinegar'),
(46, 'Snacks and Sweets', 'Snacks', 'Chips'),
(47, 'Snacks and Sweets', 'Snacks', 'Pretzels'),
(48, 'Snacks and Sweets', 'Snacks', 'Crackers'),
(49, 'Snacks and Sweets', 'Snacks', 'Popcorn'),
(50, 'Snacks and Sweets', 'Desserts & Sweets', 'Cookies'),
(51, 'Snacks and Sweets', 'Desserts & Sweets', 'Cakes'),
(52, 'Snacks and Sweets', 'Desserts & Sweets', 'Chocolates'),
(53, 'Snacks and Sweets', 'Desserts & Sweets', 'Candy'),
(54, 'Bakery Items', 'Baked Goods', 'Bread'),
(55, 'Bakery Items', 'Baked Goods', 'Bagels'),
(56, 'Bakery Items', 'Baked Goods', 'Pastries'),
(57, 'Bakery Items', 'Baked Goods', 'Muffins'),
(58, 'Frozen Foods', 'Frozen Meals & Entrees', 'Frozen Pizza'),
(59, 'Frozen Foods', 'Frozen Meals & Entrees', 'Frozen Dinners'),
(60, 'Frozen Foods', 'Frozen Meals & Entrees', 'Frozen Burritos'),
(61, 'Frozen Foods', 'Frozen Fruits & Vegetables', 'Frozen Berries'),
(62, 'Frozen Foods', 'Frozen Fruits & Vegetables', 'Frozen Mixed Vegetables'),
(63, 'Frozen Foods', 'Frozen Desserts & Novelties', 'Ice Cream'),
(64, 'Frozen Foods', 'Frozen Desserts & Novelties', 'Popsicles'),
(65, 'Frozen Foods', 'Frozen Desserts & Novelties', 'Frozen Yogurt'),
(66, 'Personal Care', 'Personal Care', 'Shampoo'),
(67, 'Personal Care', 'Personal Care', 'Conditioner'),
(68, 'Personal Care', 'Personal Care', 'Body Wash'),
(69, 'Personal Care', 'Personal Care', 'Toothpaste'),
(70, 'Household and Cleaning Supplies', 'Household & Cleaning Supplies', 'Laundry Detergent'),
(71, 'Household and Cleaning Supplies', 'Household & Cleaning Supplies', 'Dish Soap'),
(72, 'Household and Cleaning Supplies', 'Household & Cleaning Supplies', 'Paper Towels'),
(73, 'Household and Cleaning Supplies', 'Household & Cleaning Supplies', 'All-Purpose Cleaner'),
(74, 'Healthcare', 'Healthcare', 'Pain Relievers'),
(75, 'Healthcare', 'Healthcare', 'First Aid Supplies'),
(76, 'Healthcare', 'Healthcare', 'Vitamins'),
(77, 'Healthcare', 'Healthcare', 'Supplements'),
(78, 'Baby Care', 'Baby Items', 'Diapers'),
(79, 'Baby Care', 'Baby Items', 'Baby Food'),
(80, 'Baby Care', 'Baby Items', 'Baby Wipes'),
(81, 'Baby Care', 'Baby Items', 'Baby Shampoo'),
(82, 'Pet Care', 'Pet Care', 'Dog Food'),
(83, 'Pet Care', 'Pet Care', 'Cat Food'),
(84, 'Pet Care', 'Pet Care', 'Pet Treats'),
(85, 'Pet Care', 'Pet Care', 'Pet Toys'),
(86, 'Beverages', 'Beverages', 'Water'),
(87, 'Beverages', 'Beverages', 'Soda'),
(88, 'Beverages', 'Beverages', 'Juice'),
(89, 'Beverages', 'Beverages', 'Energy Drinks'),
(90, 'Beverages', 'Beverages', 'Coffee'),
(91, 'Beverages', 'Beverages', 'Tea'),
(92, 'Beverages', 'Beverages', 'Sports Drinks'),
(93, 'Grains, Pasta, and Rice', 'Grains & Pasta', 'Rice'),
(94, 'Grains, Pasta, and Rice', 'Grains & Pasta', 'Pasta'),
(95, 'Grains, Pasta, and Rice', 'Grains & Pasta', 'Quinoa'),
(96, 'Grains, Pasta, and Rice', 'Grains & Pasta', 'Oats'),
(97, 'Breakfast Foods', 'Breakfast Foods', 'Cereal'),
(98, 'Breakfast Foods', 'Breakfast Foods', 'Pancake Mix'),
(99, 'Breakfast Foods', 'Breakfast Foods', 'Maple Syrup'),
(100, 'Breakfast Foods', 'Breakfast Foods', 'Breakfast Bars'),
(101, 'Baking Ingredients', 'Baking Ingredients', 'Flour'),
(102, 'Baking Ingredients', 'Baking Ingredients', 'Sugar'),
(103, 'Baking Ingredients', 'Baking Ingredients', 'Baking Powder'),
(104, 'Baking Ingredients', 'Baking Ingredients', 'Chocolate Chips'),
(105, 'Cereals', 'Cereals', 'Hot Cereal'),
(106, 'Cereals', 'Cereals', 'Cold Cereal'),
(107, 'Nut Butters and Spreads', 'Nut Butters & Spreads', 'Peanut Butter'),
(108, 'Nut Butters and Spreads', 'Nut Butters & Spreads', 'Almond Butter'),
(109, 'Nut Butters and Spreads', 'Nut Butters & Spreads', 'Fruit Preserves'),
(110, 'Ethnic and Specialty Foods', 'Ethnic & International Foods', 'Mexican'),
(111, 'Ethnic and Specialty Foods', 'Ethnic & International Foods', 'Italian'),
(112, 'Ethnic and Specialty Foods', 'Ethnic & International Foods', 'Asian'),
(113, 'Ethnic and Specialty Foods', 'Ethnic & International Foods', 'Middle Eastern'),
(114, 'Organic and Specialty Foods', 'Organic & Natural Foods', 'Organic Produce'),
(115, 'Organic and Specialty Foods', 'Organic & Natural Foods', 'Organic Dairy'),
(116, 'Specialty Diet Foods', 'Gluten-Free Foods', 'Vegetarian & Vegan Foods'),
(117, 'Specialty Diet Foods', 'Gluten-Free Foods', 'Low-Carb & Keto Foods'),
(118, 'Specialty Diet Foods', 'Gluten-Free Foods', 'Other'),
(119, 'Produce', 'Fruits', 'Other'),
(120, 'Produce', 'Vegetables', 'Other'),
(121, 'Canned and Packaged Goods', 'Canned Goods', 'Other'),
(122, 'Canned and Packaged Goods', 'Packaged Meals', 'Other'),
(123, 'Dairy and Eggs', 'Dairy', 'Other'),
(124, 'Dairy and Eggs', 'Eggs', 'Other'),
(125, 'Meat and Poultry', 'Meat', 'Other'),
(126, 'Meat and Poultry', 'Deli', 'Other'),
(127, 'Seafood', 'Fish & Seafood', 'Other'),
(128, 'Seafood', 'Deli', 'Other'),
(129, 'Condiments, Spices, and Oils', 'Condiments & Spices', 'Other'),
(130, 'Condiments, Spices, and Oils', 'Cooking Oils & Vinegars', 'Other'),
(131, 'Snacks and Sweets', 'Snacks', 'Other'),
(132, 'Snacks and Sweets', 'Desserts & Sweets', 'Other'),
(133, 'Bakery Items', 'Baked Goods', 'Other'),
(134, 'Frozen Foods', 'Frozen Meals & Entrees', 'Other'),
(135, 'Frozen Foods', 'Frozen Fruits & Vegetables', 'Other'),
(136, 'Frozen Foods', 'Frozen Desserts & Novelties', 'Other'),
(137, 'Personal Care', 'Personal Care', 'Other'),
(138, 'Household and Cleaning Supplies', 'Household & Cleaning Supplies', 'Other'),
(139, 'Healthcare', 'Healthcare', 'Other'),
(140, 'Baby Care', 'Baby Items', 'Other'),
(141, 'Pet Care', 'Pet Care', 'Other'),
(142, 'Beverages', 'Beverages', 'Other'),
(143, 'Grains, Pasta, and Rice', 'Grains & Pasta', 'Other'),
(144, 'Breakfast Foods', 'Breakfast Foods', 'Other'),
(145, 'Baking Ingredients', 'Baking Ingredients', 'Other'),
(146, 'Cereals', 'Cereals', 'Other'),
(147, 'Nut Butters and Spreads', 'Nut Butters & Spreads', 'Other'),
(148, 'Ethnic and Specialty Foods', 'Ethnic & International Foods', 'Other'),
(149, 'Organic and Specialty Foods', 'Organic & Natural Foods', 'Other'),
(150, 'Specialty Diet Foods', 'Gluten-Free Foods', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `grocerystores`
--

CREATE TABLE `grocerystores` (
  `id` int(11) NOT NULL,
  `storeName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grocerystores`
--

INSERT INTO `grocerystores` (`id`, `storeName`) VALUES
(1, 'Lawtons'),
(2, 'Needs Convenience'),
(3, 'Farm Boy'),
(4, 'Foodland'),
(5, 'FreshCo'),
(6, 'IGA / IGA Extra'),
(7, 'Marché Bonichoix'),
(8, 'Marché Tradition'),
(9, 'Rachelle-Béry'),
(10, 'Safeway'),
(11, 'Sobeys'),
(12, 'Thrifty Foods'),
(13, 'Pete\'s Frootique'),
(14, 'Longo\'s'),
(15, 'Atlantic Cash & Carry'),
(16, 'Atlantic Superstore'),
(17, 'Axep'),
(18, 'Bloor Street Market'),
(19, 'Dominion'),
(20, 'Les Entrepôts Presto'),
(21, 'Extra Foods'),
(22, 'Fortinos'),
(23, 'Freshmart'),
(24, 'L\'Intermarché'),
(25, 'Loblaws / Loblaw GreatFood / Loblaws CityMarket'),
(26, 'Lucky Dollar Foods'),
(27, 'Maxi / Maxi & Cie'),
(28, 'NG Cash & Carry'),
(29, 'No Frills'),
(30, 'Provigo'),
(31, 'Real Canadian Superstore'),
(32, 'Shop Easy Foods'),
(33, 'Shoppers Drug Mart / Pharmaprix'),
(34, 'SuperValu'),
(35, 'T & T Supermarket'),
(36, 'Valu-mart'),
(37, 'Wholesale Club / Club Entrepôt'),
(38, 'Your Independent Grocer / Independent CityMarket'),
(39, 'Zehrs Markets'),
(40, 'Les 5 Saisons'),
(41, 'Food Basics'),
(42, 'Marché Adonis'),
(43, 'Marché AMI'),
(44, 'Marché Extra'),
(45, 'Marché Richelieu'),
(46, 'Metro / Metro Plus'),
(47, 'Super C'),
(48, 'AG Foods'),
(49, 'Bulkley Valley Wholesale'),
(50, 'Buy-Low Foods'),
(51, 'Choices Markets'),
(52, 'Meinhardt Fine Foods'),
(53, 'Nature’s Fare Markets'),
(54, 'Nesters Market'),
(55, 'PriceSmart Foods'),
(56, 'Quality Foods'),
(57, 'Save-On-Foods'),
(58, 'Urban Fare'),
(59, '49th Parallel Grocery'),
(60, 'Ambrosia Natural Foods'),
(61, 'Asian Food Centre'),
(62, 'Askew\'s Foods'),
(63, 'Avril (Health Supermarket)'),
(64, 'Bruno’s Fine Foods'),
(65, 'Centra Food Market'),
(66, 'Coleman\'s'),
(67, 'Co-op Atlantic'),
(68, 'Valu Foods'),
(69, 'Village Food Stores'),
(70, 'Coppa\'s Fresh Market'),
(71, 'Country Grocer'),
(72, 'Dutchie\'s'),
(73, 'Fairway Markets'),
(74, 'Family Foods'),
(75, 'Calgary Co-op'),
(76, 'Federated Co-operatives Ltd.'),
(77, 'Heritage Co-op (Western Manitoba)'),
(78, 'North Central Co-op'),
(79, 'Red River Co-op'),
(80, 'Saskatoon Co-op'),
(81, 'Foodex'),
(82, 'FoodFare'),
(83, 'Fresh City Market'),
(84, 'Freson Bros.'),
(85, 'Galleria Supermarkets'),
(86, 'Georgia Main Food Group'),
(87, 'Fresh St. Market'),
(88, 'IGA / MarketPlace IGA in British Columbia only'),
(89, 'Goodness Me!'),
(90, 'Grande Cheese'),
(91, 'H Mart'),
(92, 'Highland Farms'),
(93, 'Italian Centre Shop'),
(94, 'Kim Phat'),
(95, 'Le Jardin Mobile'),
(96, 'L&M Markets (Hometown Grocers Co-op)'),
(97, 'Lalumière Bonanza'),
(98, 'Le Marché Esposito'),
(99, 'Le Marché Végétarien/Les Arpents Verts'),
(100, 'Lococo\'s'),
(101, 'Longos'),
(102, 'Lucky Supermarket'),
(103, 'Marche Adonis'),
(104, 'Mike Dean Local Grocer'),
(105, 'Nations Fresh Food'),
(106, 'Nature\'s Emporium'),
(107, 'The North West Company'),
(108, 'Northern'),
(109, 'NorthMart'),
(110, 'Organic Garage'),
(111, 'Panchvati Supermarket'),
(112, 'P.A.T. Mart'),
(113, 'Planet Organic'),
(114, 'Pomme Natural Market'),
(115, 'Rabba Fine Foods'),
(116, 'Quality Foods'),
(117, 'Starsky Fine Foods'),
(118, 'Sungiven Foods'),
(119, 'Sunterra Market'),
(120, 'Supermarché PA (5 stores)'),
(121, 'SuperValu'),
(122, 'TaiKo Supermarket'),
(123, 'Vince\'s Market'),
(124, 'Vincenzo\'s'),
(125, 'Yummy Market'),
(126, 'Costco'),
(127, 'Dollarama'),
(128, 'IKEA'),
(129, 'Jean Coutu Group'),
(130, 'London Drugs'),
(131, 'Walmart Canada'),
(132, 'Whole Foods Market'),
(133, 'Pusateri\'s'),
(134, 'Giant Tiger'),
(135, 'M&M Food Market'),
(136, 'Hudson\'s Bay Now including Zellers');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `itemName` text NOT NULL,
  `province` varchar(3) NOT NULL,
  `town` text NOT NULL,
  `categoryid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `imageLocation` text NOT NULL,
  `createdBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `emailAddress` text NOT NULL,
  `password` text NOT NULL,
  `usertype` text NOT NULL,
  `profileLocation` text NOT NULL,
  `createdDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grocerycategories`
--
ALTER TABLE `grocerycategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocerystores`
--
ALTER TABLE `grocerystores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `grocerycategories`
--
ALTER TABLE `grocerycategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `grocerystores`
--
ALTER TABLE `grocerystores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
