-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2022 at 12:38 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u497569487_lacouturemm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'graduation'),
(4, 'colorful');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `product_name`, `product_price`, `product_image`, `description`) VALUES
(1, 1, 'Mandarin collar shirt \r\n', '00', '119164802_361718945220966_6781261119050594407_nred.jpg', 'best outfit for you'),
(2, 2, 'Kimono dress', '00', '104911179_565061880824167_2273993048899691034_n.jpg', 'best outfit for you'),
(3, 2, 'smmoth', '00', '108598188_720876915156740_5120648419174428714_n.jpg', 'best outfit for you'),
(4, 2, 'palaza', '00', '102362770_666731040842155_5755555192763283207_n.jpg', 'best outfit for you'),
(5, 1, 'shirt', '00', '121495251_170425784670531_4290880908730687018_n.jpg', 'best outfit for you'),
(6, 1, 'culture spears', '00', '130251238_203429811362220_4590577810503178037_n.jpg', 'best outfit for you'),
(7, 1, 'culture vibes', '00', '70664620_373508750222272_1558941473623239265_n.jpg', 'best outfit for you'),
(8, 3, 'Graduation', '0', '248711197_1042896053179198_6152339511427129132_n.jpg', 'best outfit for you'),
(9, 3, 'Graduation for men ', '0', '241068641_221874163230114_5454368201717528483_n.jpg', 'best outfit for you'),
(10, 3, 'Black and red ', '0', '151302908_180950453803458_7110436198229493012_n.jpg', 'best outfit for you'),
(11, 3, 'Grey ', '0', '271581033_675965400430156_7719100705525064920_n.jpg', 'best outfit for you'),
(12, 4, 'Mwenje', '0', '258209825_195022952797582_7459631362172922622_n.jpg', 'best outfit for you'),
(13, 4, 'Mwenje', '0', '258884555_608060020646409_3732449827779762418_n.jpg', 'best outfit for you'),
(14, 2, 'skirt', '00', '277662881_1369566240133365_6288987674965674877_n.jpg', 'awesome skirt'),
(15, 2, 'Black', '0', 'mimitariro_277416020_7210571785683017_375232671749529800_n.jpg', 'dress'),
(16, 2, 'mimi', '0', 'mimitariro_269952277_891103304901821_109271104441166412_n.jpg', 'black'),
(17, 2, 'Hot', '0', '277470065_140261451845150_355601651654613101_n.jpg', 'Arab Fashion'),
(18, 2, 'RED', '0', '277618564_345281950991487_3666699141945449481_n.jpg', 'Arab fashion'),
(19, 2, 'pink', '0', '246685617_380513473755826_7232415801044711142_n.png', 'black'),
(22, 2, 'dia', '0', '243547838_2634844110156951_2916363288252779332_n.jpg', 'black'),
(23, 2, 'M', '0', '118732886_779695046123016_1916473378234474071_n.png', 'red'),
(24, 2, 'white dress', '0', '199860155_312616697240828_938493708032880492_n.png', 'high heels'),
(25, 2, 'white', '0', '274759036_121680443562339_4881643757047128108_n.png', 'white dress'),
(26, 2, 'ggg', '0', '129773095_662967031050506_8761441494179756461_n.png', 'fff'),
(27, 2, 'black', '1', '157671753_593370924879470_5109295416826887708_n.png', 'melissa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`) VALUES
(1, 'mellisa'),
(2, 'mitchell\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
