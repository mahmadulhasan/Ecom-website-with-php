-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 09:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `007_swiggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', 'admin', 'Nikhil');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_history`
--

CREATE TABLE `admin_login_history` (
  `admin_login_history_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `user_agent` varchar(1000) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_history`
--

INSERT INTO `admin_login_history` (`admin_login_history_id`, `admin_id`, `ip`, `user_agent`, `timestamp`) VALUES
(1, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688469336'),
(2, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688551235'),
(3, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688551252'),
(4, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688551378'),
(5, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688551445'),
(6, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688551666'),
(7, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688637533'),
(8, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688703830'),
(9, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688721115'),
(10, 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '1688721193');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_tokens`
--

CREATE TABLE `admin_login_tokens` (
  `admin_login_token_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `login_token` varchar(100) NOT NULL,
  `valid_till` varchar(50) NOT NULL,
  `user_agent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_tokens`
--

INSERT INTO `admin_login_tokens` (`admin_login_token_id`, `admin_id`, `login_token`, `valid_till`, `user_agent`) VALUES
(1, 1, 'd1598fd212db6eff58e48c01eb97571d', '1651852689', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36'),
(4, 1, 'c913376022f525cbd717f4f31b6d807f', '1651855403', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:99.0) Gecko/20100101 Firefox/99.0'),
(5, 1, '58a7f66bcff3132fcd7785a2edb45643', '1652283634', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_item_id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES
(1, 1, 109, 11, 'Veg Pizza', '240'),
(2, 1, 10, 6, 'Chicken Ramen', '229'),
(3, 2, 5, 10, 'Veg Thukpa', '199'),
(4, 2, 109, 1, 'Veg Pizza', '240'),
(5, 3, 11, 5, 'Stuffed Mushroom Garlic Pepper', '229'),
(6, 3, 30, 2, 'Chicken Cordon Bleu', '325'),
(7, 4, 18, 3, 'Blueberry Pancake', '110'),
(8, 4, 19, 5, 'Blueberry Banana Smoothie', '225'),
(9, 5, 18, 3, 'Blueberry Pancake', '110'),
(10, 5, 19, 5, 'Blueberry Banana Smoothie', '225'),
(11, 6, 18, 3, 'Blueberry Pancake', '110'),
(12, 6, 19, 5, 'Blueberry Banana Smoothie', '225'),
(13, 7, 18, 3, 'Blueberry Pancake', '110'),
(14, 7, 19, 5, 'Blueberry Banana Smoothie', '225'),
(15, 8, 18, 3, 'Blueberry Pancake', '110'),
(16, 8, 19, 5, 'Blueberry Banana Smoothie', '225');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `is_this_deleted` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `parent_id`, `is_this_deleted`) VALUES
(4, 'Starters', 34, ''),
(5, 'Main Course', 34, ''),
(14, 'Chinese', 0, ''),
(16, 'Non Vegetarian', 34, ''),
(17, 'Italian', 0, ''),
(24, 'Accompaniments', 34, ''),
(34, 'Indian', 0, ''),
(35, 'Noodles', 14, ''),
(36, 'Momos', 14, ''),
(37, 'Pastas', 17, ''),
(38, 'Bengali', 34, ''),
(39, 'South Indian', 34, ''),
(41, 'xczzczczxczxcxzc', 14, 'Yes'),
(42, 'ddsssdsssdfdssdsdfsdf', 0, 'Yes'),
(43, 'dsfsfdsfdsdsdssdf', 34, 'Yes'),
(46, 'Thai', 0, ''),
(47, 'Thai Noodles', 46, ''),
(48, 'Korean', 0, ''),
(49, 'chicken momo', 17, ''),
(54, 'Punjabi', 0, ''),
(55, 'Tandoori Rotiyon ka Bhandar', 54, '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `password`, `phone`, `address`, `timestamp`) VALUES
(1, 'John', 'j@gmail.com', 'password', '1234567899', 'Sec V, Saltlake, kolkata 90', '1687517608'),
(2, 'John', 'j@gmail.com', 'password', '1234567899', 'kol', ''),
(3, 'Christina', 'c@gmail.com', '67890', '789098789', 'Lanka', '1687778124'),
(4, '', 'c@gmail.com', '', '', '', '1687860374'),
(5, 'Samapti', 's@gmail.com', '12345', '897578868', 'kolkata', '1687860489');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ship_fullname` varchar(50) NOT NULL,
  `ship_phone` varchar(50) NOT NULL,
  `ship_address` varchar(250) NOT NULL,
  `payment_info` varchar(250) NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  `status` enum('new','processing','completed','cancelled','deleted') NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `ship_fullname`, `ship_phone`, `ship_address`, `payment_info`, `timestamp`, `status`) VALUES
(1, 1, 'John', '1234567899', 'Sec V, Saltlake, kolkata 90', 'COD', '1687517608', 'processing'),
(2, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1687951092', 'processing'),
(3, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1688119735', 'completed'),
(4, 5, '', '', '', 'ONLINE', '1688119940', 'new'),
(5, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1688120676', 'new'),
(6, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1688120705', 'new'),
(7, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1688120955', 'new'),
(8, 5, 'Samapti', '897578868', 'kolkata', 'ONLINE', '1688121013', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `cid` int(11) NOT NULL,
  `is_this_deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `details`, `image`, `cid`, `is_this_deleted`) VALUES
(1, 'Veg Thai Green Curry', 269, 'Thai green curry cooked in coconut milk, ginger, spices and green chilles, served with steamed rice.', 'products/1.jpg', 5, ''),
(2, 'Chicken Thai Red Curry', 299, 'Thai red curry cooked in coconut milk, with lemongrass, herbs and ginger, served with steamed rice.', 'products/2.jpg', 5, ''),
(3, 'Chicken Thai Green Curry', 299, 'Thai green curry cooked in coconut milk, ginger, spices and green chilles,served with steamed rice.', 'products/3.jpg', 5, ''),
(4, 'Chicken Thai Yellow Curry', 299, 'Rich thai yellow curry cooked with coconut milk, served with steamed rice.', 'products/4.jpg', 5, ''),
(5, 'Veg Thukpa', 199, 'A classic Tibetan noodle soup, containing a mix of vegetables and spices, served in a light broth.', 'products/5.jpg', 14, ''),
(6, 'Shichimi Potatoes', 169, 'Home style fries coated in a savoury spice mixture.(Serves -1)', 'products/6.jpg', 4, ''),
(7, 'Chicken Satay', 249, 'Grilled chicken skewers marinated in garlic and spices and served with peanut dip.', 'products/7.jpg', 4, ''),
(8, 'Panko Crumbed Chicken', 249, 'Fried chicken coated in panko crumbs, served with sweet chilli sauce.', 'products/8.jpg', 4, ''),
(9, 'Butter Garlic Prawns', 349, 'Sauteed prawns tossed in slices garlic and butter sauce.', 'products/9.jpg', 4, ''),
(10, 'Chicken Ramen', 229, 'Fresh ramen noodles, served in a light broth, topped with sliced chicken, greens and a soft boiled egg.(Serves -1)', 'products/10.jpg', 35, ''),
(11, 'Stuffed Mushroom Garlic Pepper', 229, 'Button mushrooms, stuffed with cottage cheese and tossed in garlic pepper sauce', 'products/11.jpg', 4, ''),
(12, 'Veg Cantonese Rice with Garlic Pepper Veg', 269, '', 'products/12.jpg', 5, ''),
(13, 'Hakka Noodles with Hot Garlic Chicken', 350, 'Hakka Noodles with Hot Garlic Chicken with some sauce', 'products/13.jpg', 5, ''),
(14, 'Chili Garlic Noodles with Smoked Chili Chicken', 299, '', 'products/14.jpg', 5, 'Yes'),
(15, 'Burnt Garlic Rice With Sichuan Veg', 269, '', 'products/15.jpg', 5, 'Yes'),
(16, 'Sinful Chocolate Cake Jar', 199, 'Creamy, chocolatey perfection in a jar!. An absolute winner!', 'products/16.jpg', 24, ''),
(17, 'Chocolate Banana Oatmeal Pancake', 110, 'When banana and oatmeal combine with choco chips and chocolate sauce, it doesnt even taste healthy!	\n', 'products/17.jpg', 24, ''),
(18, 'Blueberry Pancake', 110, 'Super fluffy blueberry pancakes with a muffin texture. yes. drench them in syrup, slather them with clarified butter, or enjoy them straight out of the pan. our blueberry pancakes are the perfect weekend breakfast or brunch.', 'products/18.jpg', 24, ''),
(19, 'Blueberry Banana Smoothie', 225, 'Experience the sweetness of blueberries and bananas along with the tanginess of lemon zest in this protein packed smoothie.\n\n382 calories  protein: 17g  carbs: 37g  fat: 18g', 'products/19.jpg', 24, ''),
(20, 'Antioxidant Carrot Apple Juice', 190, 'We combine apples, pineapple and carrot in this juice to make it not just great for your immunity but a very rich antioxidant! calories: 134kcal | carbohydrates: 33.6g | protein: 1.8g | fat: 0.5g | sodium: 105mg | potassium: 635mg | fiber: 2g	\n', 'products/20.jpg', 24, ''),
(21, 'Chicken Caesar Salad', 275, 'Green salad of romaine lettuce and croutons dressed with lemon juice, olive oil, worcestershire sauce, parmesan cheese, herbs and chicken making it a filling lean clean meal ps: no bacon 369 calories; protein 25 g; carbohydrates 18g ; fat 21g fibre:4g', 'products/21.jpg', 24, ''),
(22, 'Fat Loss Juice', 199, 'Watermelon by their nature are mainly water and sugar, thus making them a low calorie, weight loss assistant. This is a handy juice recipe for weight loss because of the mint leaves. Mint leaves are a natural appetite suppresant. So forget your hunger pangs after having one of these!calories 140; total fat 1g; sodium 140mg; total carbohydrate 33g; dietary fiber 6g; total sugars 23g; protein 4g; vitamin c 29mg; calcium 95mg; iron 3mg; potassium 826mg						\n', 'products/22.jpg', 24, ''),
(23, 'Smoky Mushroom Burger with Roasted Garlic Mayo', 260, 'Homemade mushroom patty served with melted cheese and aioli in this ultimate veggie burger. 357 calories  protein: 16g  carbs: 49g  fat: 12g  fibre: 2g', 'products/23.jpg', 24, ''),
(24, 'Extra Crunchy Chicken Burger', 290, 'These fried chicken burgers are ultra crispy and absolutely bursting with flavour. For real though, is there anything better in life than wrapping your crunchy fried chicken chops around a burger when you’re beyond hungry? no is the answer. No is the only answer. 426 calories  protein: 29g  carbs: 43g  fat: 18g\n', 'products/24.jpg', 24, ''),
(25, 'Grilled Chicken Breast With Sauted Veggies And Herb Rice In Signature Red Wine Jus	', 275, 'A bright tasting twist to classic chicken and rice packed with loads of herbs which give a burst of flavours in your mouth. A bestseller and a house favourite, if you could pick only one dish for the rest of your life, please pick this. \n496 calories  protein: 51g  carbs: 31g  fat: 17g  fibre: 2g', 'products/25.jpg', 16, ''),
(26, 'Grilled Fish In Lemon Butter Sauce With Sauteed Veggies & Herb Rice	', 475, 'Inspired by a gourmet dish from masterchef, this dish showcases delicate, flaky fish (kolkata bhetki). Our fish and sauteed veggies come together with a bright lemon-butter pan sauce. 517 calories  protein: 38g  carbs: 32g  fat: 36g  fibre: 2g	\n', 'products/26.jpg', 16, ''),
(27, 'Chicken A la Kiev', 340, 'Chicken a la kiev recipe is a lip smacking continental chicken appetizer similar to that of a roulade. Chicken here is stuffed with some herb butter and finally deep fried giving it a lovely texture and flavour that you will absolutely love. Served with garlic mayo!', 'products/27.jpg', 16, ''),
(28, 'Cheesy Garlic Bread', 110, 'It doesn’t get much better then a warm slice of cheesy garlic bread straight from the oven. Perfect for dipping in thousand island dip or serving as a side to all your favorite pastas and soups. This bread is so good you will have a hard time knowing when to stop! will want to just keep reaching for slice after slice. Cheesy, garlic-y deliciousness! 698 calories  protein: 25g  carbs: 37g  fat: 50g  fibre: 2g					\n', 'products/28.jpg', 17, ''),
(29, 'Spaghetti Aglio Olio E Peperoncino', 300, 'Spaghetti aglio olio is a traditional italian pasta dish from naples. The dish is made by lighlty sauteeing sliced, minced or pressed garlic in olive oil and tossing with spaghetti! 398 calories  protein: 13g  carbs: 44g  fat: 18g  fibre: 3g		\n', 'products/29.jpg', 17, ''),
(30, 'Chicken Cordon Bleu', 325, 'There nothing we love more than a crispy, succulent, perfectly fried piece of fried chicken. But we also love gourmet meals. You know, the ones that you sit down to in the candlelight? those ones. Well, our chicken cordon bleu is the best of both worlds: sounds fancy but really its just some really, really good fried chicken. That, we can promise. Ooey gooey cheese, and crunchy breadcrumb coating make it seriously delicious. Ps: no ham.', 'products/30.jpg', 16, ''),
(31, 'Burrito Veg Bowl', 300, 'Rice, colourful veggies, ketchup layered with refried beans, sour cream and salsa and finally garnished with cheese and nacho chips make this an irrestible dish. \ncalories: 542 protein:15g; fats:18g; carbs:75g; fibre:13g', 'products/31.jpg', 24, ''),
(32, 'Vanilla Milkshake', 199, 'Worlds favourite milkshake is a smooth and creamy concoction of vanilla ice cream, milk, vanilla extract and whipped cream.	\n', 'products/32.jpg', 24, ''),
(33, 'Oats Khichdi With Egg Bhurji', 249, 'Can never go wrong with a khichdi made from rolled oats coupled with scrambled eggs. Healthy, filling and your body will thank you', 'products/33.jpg', 5, ''),
(34, 'Chocolate Milkshake', 199, 'Chocolate shake is loved by most kids and we are sure you/yours are no different. Delicious, thick and creamy.	\n', 'products/34.jpg', 24, ''),
(36, 'Veg Mexican Burritos Wrap', 250, 'Mexican cuisine is one of the few cuisines that makes beans taste delicious.try out these mexican burritos filled with fajita veggies, rice, beans, sour-cream and salsa.\n\ncalories: 404 protein: 15g; fats:19g; carbs:44g; fibre:6g', 'products/36.jpg', 24, ''),
(37, 'Mexican Chicken Wrap', 280, 'We have added a twist to your chicken wrap with a spicy, mexican salsa.\n\ncalories: 413 protein:30g; fats:13g; carbs:40g; fibre:3g', 'products/37.jpg', 24, ''),
(38, 'American Chicken Wrap', 280, 'All the yummy, cheesy goodness of a bbq chicken pizza, toasted in a crispy wrap.\n\ncalories: 476 protein:17g; fats:27g; carbs:44g; fibre:1g', 'products/38.jpg', 24, ''),
(39, 'Nutella Pancake', 110, 'If you really have to read the description of a pancake which has Nutella written on it, you are not really a Nutella lover', 'products/39.jpg', 24, ''),
(40, 'Strawberry Pancake', 110, 'Does anything taste more like spring than strawberries? How about strawberry pancakes? Greek yogurt, sugar, vanilla and a splash of lemon juice. We could drink this stuff.', 'products/40.jpg', 24, ''),
(41, 'Apple Cinnamon Pancake', 110, 'Fluffy cinnamon pancakes with an ooey, gooey apple topping make the most perfect cozy breakfast', 'products/41.jpg', 24, ''),
(42, 'Chicken Pasta With Choice Of Sauce', 350, 'Chicken pasta with choice of sauce- alfredo- creamy cheesy white sauce ; arrabbiata- spicy and sour red sauce leaving that tangy feeling ; mixed: best of both sauces giving a cheesy and sweet experience, pesto- tradional pesto sauce made from crushed garlic, pine nuts, basil leaves, and parmesan cheese all blended with olive oil.', 'products/42.jpg', 37, ''),
(43, 'Big Mouth Burger', 420, 'Marinated grilled chicken breast double decker patty and fried chicken, seasoned and seared to perfection. Topped with cheddar cheese, lettuce, tomatoes and our signature mustard and garlic mayo dressing. 630 calories  protein: 44g  carbs: 29g  fats: 37g fibre: 2g', 'products/43.jpg', 24, ''),
(44, 'Veggie Black Bean Enchiladas', 325, 'These enchiladas are a casual, hearty entree that will be met with delight as you pass it around the table. We cover them with our go-to homemade enchilada sauce. They’re just cheesy enough, with a filling of sautéed bell pepper, onion, spinach, black beans and some warming spices. 368 calories  protein: 20g  carbs: 39g  fats: 16g fibre: 7g', 'products/44.jpg', 24, ''),
(45, 'Herb Garden Lasagne', 325, 'This dish is so good—it makes the kind of lasagne people write home about! it brings together all of the things we love in a good pasta dish: noodles, cheese, fresh herbs and a delicious sauce. If you’ve never had lasagne before, you have come to the right place. Invite a friend because you won’t want to keep this dish to yourself! 417 calories  protein: 19g  carbs: 43g  fats: 18g  fibre: 4g \n', 'products/45.jpg', 24, ''),
(46, 'Veg Augratin', 349, 'Vegetable au gratin is a continental delicacy made with mixed vegetables and white sauce as base.it has all the vegetables drowned in white sauce with lots of cheese, it is creamy with a crusty top!  497 calories  protein: 20g  carbs: 29g  fats: 21g  fibre: 4g\n', 'products/46.jpg', 24, ''),
(47, 'Chilli Paneer', 130, 'One of the favorite dishes from chinese cuisine is chilli paneer. The paneer cubes are coated with batter coated and fried. The fried paneer cubes are tossed in a sweet, sour, spicy sauce.\nthe dry version of chilli paneer is served as a starter or appetizer snack. The gravy version is had with steamed rice or noodles. The semi-gravy version can be had as an appetizer.', 'products/47.jpg', 14, ''),
(48, 'Gourmet Mushroom Risotto (al Funghi)', 375, 'Rich, creamy mushroom risotto with risotto rice, white wine, parmesan and mushrooms. For this mushroom risotto, mushrooms are sautéed first, then cooked in wine. Arborio is cooked slowly with stock and when done, we stir in some freshly grated parmesan cheese. (hungry yet?) 451 calories  protein: 11g  carbs: 61g  fats: 8g  fibre: 3g\n', 'products/48.jpg', 5, ''),
(49, 'Spinach And Ricottta Cheese Canneloni', 349, '\ncannelloni is a cylindrical type of lasagna served baked with a spinach and ricotta cheese filling and covered by a sauce in italian cuisine. 589 calories  protein: 24g  carbs: 37g  fats: 36g  fibre: 4g\n', 'products/49.jpg', 5, ''),
(50, 'Creamy Garlic Parmesan Risotto (chicken)', 375, 'There is nothing as creamy and decadent as risotto. This dish is as comforting as it comes. Each time you have it, it will get better and better. \n503 calories rotein: 29g arbs: 55g ats: 14g', 'products/50.jpg', 17, ''),
(51, 'Spinach And Ricotta Tortellini', 350, 'Tortellini are ring-shaped pasta originally from the italian region of emilia. They are stuffed with a mix of spinach, ricotta cheese, and served in choice of your favourite sauces. 	\n', 'products/51.jpg', 24, ''),
(52, 'Four Cheese Ravioli', 320, 'Tender, beautiful, homemade noodles, stuffed with a creamy mixture of ricotta and spinach. Served with a cheesy sauce and topped with grated parmigiano, these ravioli will transport you to italy at your first bite. Pure comfort food! 540 calories  protein: 38g  carbs: 68g  fats: 12g  fibre: 10g', 'products/52.jpg', 24, ''),
(53, 'Cheese Stuffed Mushrooms', 240, 'You can stuff just about anything into mushrooms caps, but this indulgent combination of melty cheese, garlic, sweet onion, and herbs is our favorite.puffy, perky, and packed with cheesy flavor. It’s hard to eat just one of these cheesy, garlicy mushrooms.', 'products/53.jpg', 4, ''),
(54, 'Mexican Street Corn Fritters', 220, 'All of the flavours of mexican street corn in crispy, golden brown, bite sized fritters. Vegetable fritters are basically a vegetable, in this case corn, mixed with a simple batter holding everything together. We include a few fresh ingredients other than the corn: jalapenos, green onions, cilantro and lime! the magic really happens in the frying where the fritters become golden brown and crispy on the outside while remaining nice and moist and tender on the inside.', 'products/54.jpg', 4, ''),
(55, 'Chilli Chicken', 150, 'Sweet, spicy and slighlty sour crispy appetizer made with chicken, bell peppers, garlic, chilli sauce and soya sauce. Burst of flavours and tastes delicious	\n', 'products/55.jpg', 14, ''),
(56, 'Chicken Lasagne', 375, 'This dish is so good—it makes the kind of lasagne people write home about! it brings together all of the things we love in a good pasta dish: noodles, cheese, fresh herbs and a delicious meat sauce. If you’ve never had lasagne before, you have come to the right place. Invite a friend because you won’t want to keep this dish to yourself! 497 calories  protein: 23g  carbs: 48g  fats: 24g  fibre: 6g', 'products/56.jpg', 24, ''),
(57, 'Tandoori Aloo Shashlik[n]', 235, '', 'products/57.jpg', 4, ''),
(58, 'Chicken 65', 305, '', 'products/58.jpg', 5, ''),
(59, 'Methi Malai Paneer', 300, '', 'products/59.jpg', 5, ''),
(60, 'Dal Makhani', 215, '', 'products/60.jpg', 5, ''),
(61, 'Chicken Biryani', 270, '', 'products/61.jpg', 5, ''),
(62, 'Chicken Tikka Biryani', 260, '', 'products/62.jpg', 5, ''),
(63, 'Mutton Biryani', 285, '', 'products/63.jpg', 5, ''),
(64, 'Tandoori Roti', 30, '', 'products/64.jpg', 5, ''),
(65, 'Butter Naan', 70, '', 'products/65.jpg', 5, ''),
(66, 'Garlic Naan', 80, '', 'products/66.jpg', 5, ''),
(67, 'Pudina Paratha', 80, '', 'products/67.jpg', 5, ''),
(68, 'Mili Juli Subzi', 255, '', 'products/68.jpg', 5, ''),
(69, 'Jalandhari Seekh', 335, '', 'products/69.jpg', 4, ''),
(70, 'Chutney Paneer', 295, '', 'products/70.jpg', 4, ''),
(71, 'Faluda', 150, '', 'products/71.jpg', 24, ''),
(72, 'Firni', 39, '', 'products/72.jpg', 24, ''),
(73, 'Double Egg Roll', 77, '', 'products/73.jpg', 24, ''),
(74, 'Chicken Roll', 77, '', 'products/74.jpg', 24, ''),
(75, 'Egg Chicken Roll', 90, '', 'products/75.jpg', 24, ''),
(76, 'Mutton Tikka Roll', 70, '', 'products/76.jpg', 24, ''),
(77, 'Mutton Roll', 91, '', 'products/77.jpg', 24, ''),
(78, 'Egg Mutton Roll', 90, 'Mutton roll wrapped in paratha with egg and spices', 'products/78.jpg', 24, ''),
(79, 'Chicken Tikka Kebab (6 Pcs)', 290, '', 'products/79.jpg', 4, ''),
(80, 'Chicken Tangdi Kebab', 200, '', 'products/80.jpg', 4, ''),
(81, 'Boneless Chicken Boti Kebab  (6 Piece)', 300, '', 'products/81.jpg', 4, ''),
(82, 'Chicken Tandoori Hlf', 259, 'Roasted chicken marinated with spices and roasted till fully cooked.', 'products/82.jpg', 4, ''),
(83, 'Chicken Kasha (1 Pc)', 200, '', 'products/83.jpg', 34, ''),
(84, 'Boneless Chicken Bharta', 210, '', 'products/84.jpg', 34, ''),
(85, 'Chicken Chaap (1 Pc)', 205, 'Slow cooked chicken tangdi that is marinated overnight, for the chicken to take in all the flavors. It is then cooked in a rich & luscious onion, ginger-garlic, cashews and poppy seeds gravy.', 'products/85.jpg', 34, ''),
(86, 'Mutton Chaap', 249, 'Slow cooked tender mutton that is marinated overnight, for the chicken to take in all the flavors. It is then cooked in a rich & luscious onion, ginger-garlic, cashews and poppy seeds gravy.', 'products/86.jpg', 34, ''),
(87, 'Mutton Special Kasha (4 Pcs)', 230, '', 'products/87.jpg', 34, ''),
(88, 'Mutton Rezala (1 Pc)', 225, 'Juicy mutton with bone cooked in a rich and thick, yogurt and butter based curry. Best savoured with biryani.', 'products/88.jpg', 34, ''),
(89, 'Chicken Special Biryani', 415, 'Aromatic rice, cooked with authentic spices and succulent pieces of chicken that will tingle your taste buds.', 'products/89.jpg', 34, ''),
(90, 'Chicken Chaap (1 Pc) + Phirni', 238, '', 'products/90.jpg', 24, ''),
(91, 'Mutton Special Biryani (2 Pcs)', 399, 'Aromatic biryani, cooked with authentic spices and succulent pieces of mutton that will tingle your taste buds.', 'products/91.jpg', 34, ''),
(92, 'Veg Biryani + Phirni', 235, '', 'products/92.jpg', 24, ''),
(93, 'Boneless Chicken Reshmi Kebab (6 Pcs)', 295, 'Soft, juicy boneless chicken kebabs to start your meal with.', 'products/93.jpg', 4, ''),
(94, 'Boneless Chicken Boti Kebab (6 Pcs)', 260, '', 'products/94.jpg', 4, ''),
(95, 'Boneless Mutton Seekh Kebab (4 Pcs)', 370, '', 'products/95.jpg', 4, ''),
(96, 'Dal Makhani', 200, '', 'products/96.jpg', 34, ''),
(97, 'Boneless Red Chicken Bharta', 229, '', 'products/97.jpg', 34, ''),
(98, 'Boneless Chicken Tikka Kebab Butter Masala (6 Pcs)', 310, '', 'products/98.jpg', 34, ''),
(99, 'Mutton Quorma (2 Pcs)', 225, 'Also contains Egg', 'products/99.jpg', 34, ''),
(100, 'Mutton Shami Kebab (1 Pc)', 120, 'Bonless mashed mutton kebabs marinated with spices and chillies to start your meal.', 'products/100.jpg', 34, ''),
(101, 'Egg Biryani + Phirni', 230, '', 'products/101.jpg', 24, ''),
(102, 'Rumali Roti (1pc)', 20, '', 'products/102.jpg', 34, ''),
(103, 'Khushka Rice, Chicken Reshmi, Chicken Tikka Butter Masala and 1 Pc Paratha Combo', 255, 'Khushka Rice, 2 Pcs Chicken Reshmi, 2 Pcs Chicken Tikka Butter masala and 1 Pc Paratha', 'products/103.jpg', 5, ''),
(107, 'Noodle X', 88, ' df dsf s ffs ssds', 'products/107.jpg', 35, ''),
(108, 'Noodle YY', 20, 'Tasty Noodles', 'products/108.jpg', 35, ''),
(109, 'Veg Pizza', 240, 'Veg Loaded Pizza with extra cheese', 'products/109.jpg', 17, ''),
(110, 'Chicken Ramen', 150, 'Chicken Noodles with some green vegetables and 1 whole egg', 'products/110.jpg', 48, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login_history`
--
ALTER TABLE `admin_login_history`
  ADD PRIMARY KEY (`admin_login_history_id`);

--
-- Indexes for table `admin_login_tokens`
--
ALTER TABLE `admin_login_tokens`
  ADD PRIMARY KEY (`admin_login_token_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login_history`
--
ALTER TABLE `admin_login_history`
  MODIFY `admin_login_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_login_tokens`
--
ALTER TABLE `admin_login_tokens`
  MODIFY `admin_login_token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
