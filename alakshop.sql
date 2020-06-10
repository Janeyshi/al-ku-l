-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alakshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `modeOfPayment` varchar(255) NOT NULL,
  `creditCardNumber` varchar(255) NOT NULL,
  `expirationDate` varchar(255) NOT NULL,
  `CCV` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` float NOT NULL,
  `productImg` varchar(255) NOT NULL,
  `productQty` int(11) NOT NULL,
  `originalPrice` float NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productName`, `productPrice`, `productImg`, `productQty`, `originalPrice`, `user_id`) VALUES
(41, 'Appleton Estate', 1500, 'images/AppletonEstate.jpg', 1, 1500, 18),
(46, 'Bacardi Superior', 557, 'images/BacardiSuperior.jpg', 1, 557, 33);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imgSrc`, `type`, `price`, `description`) VALUES
(1, 'Bacardi Superior', '../images/BacardiSuperior.jpg', 'Rum', 557, 'Bacardi Superior is a white rum made by the Bacardi Company. In the US it is bottled\r\nat 80 proof (40% abv) and at 75 proof (37.5% abv) in the UK and Continental Europe.\r\nThis rum is mostly used to make cocktails calling for a white rum such as Cuba Libre'),
(2, 'Appleton Estate', '../images/AppletonEstate.jpg', 'Rum', 1500, 'Appleton Estate is the oldest and most famous of all of Jamaica&#39;s sugar-cane estates.\r\nIt makes rich rums with characteristic Christmas cake and butterscotch flavours and is\r\nknown for its long-aged editions.'),
(3, 'Kraken Black Spiced Rum', '../images/kraken.jpg', 'Rum', 1510.31, 'Kraken Black Spiced Rum is a Caribbean black spiced rum. It is distributed in the\r\nUnited States by Proximo Spirits, and named after the kraken, a mythical giant squid-\r\nlike sea monster. However, the bottle has a rendering of the actual giant squid with '),
(4, 'Smirnoff Vodka', '../images/Smirnoff.jpg', 'Vodka', 453.33, 'Created by a Russian serf named Pytor Smirnov, the world’s best-selling vodka has\r\nbeen sold since 1864. In 1886, Smirnov penned an exclusive contract to supply vodka\r\nto the Tsar of Russia. Today, Smirnoff comes in nearly 40 flavors and is sold in 130\r\nc'),
(5, 'Absolut', '../images/Absolut.jpg', 'Vodka', 1649, 'Hitting the U.S. market in 1979, Absolut was a bit of an oddball thanks to its oddly\r\nshaped bottle and out-there marketing campaigns (you may remember Absolut Psycho\r\nfrom the 1990s). But Absolut — a Swedish vodka made with 100 percent wheat — was\r\nfound'),
(6, 'Finlandia', '../images/Finlandia.jpg', 'Vodka', 1050, 'Made in – you guessed it – Finland, this top-selling brand has a long list of awards to its\r\nname, including Silver at the International Wine and Spirit Competition in 2014, 2013,\r\nand 2012; and Gold at the Los Angeles International Wine Competition in 20'),
(7, 'Teeling Single Pot Still', '../images/Teeling.jpg', 'Whisky', 2996.13, 'Crafted using a combination of 50% malted and 50% unmalted barley which has then\r\nbeen triple distilled and aged in ex-Bourbon, ex-Wine and Virgin oak casks. Bottled at\r\n46% with no chill-filtration.'),
(8, 'Ballantine\'s Finest', '../images/Ballantine.jpg', 'Whisky', 1301.28, 'Ballantine\'s Finest was created in 1910 and is blended with both single malt, grain, and\r\nhighly matured whiskies to give you a slightly vanilla flavor. Fun fact, the Ballantine\'s\r\nsquare bottle originated during prohibition so Americans could con'),
(9, 'Yamazaki 12', '../images/Yamazaki.jpg', 'Whisky', 18950, 'Yamazaki 12 might be the most recognizable whisky from Suntory that you can find in\r\nAmerica, although sadly even this core expression has become nearly impossible to\r\nlocate at an affordable price. The whisky is light with dry spice notes and loads of fr'),
(10, 'Hendricks Gin', '../images/hendricks.jpg', 'Gin', 2290, 'Hendrick\'s Gin is a brand of gin produced by William Grant & Sons at the Girvan distillery, Scotland, and launched in 1999. It was invented by Lesley Gracie, a Yorkshire native, who was hired by William Grant & Sons to work in new liquid development for s'),
(11, 'The Bar Gin', '../images/thebar.jpg', 'Gin', 95, 'Take your gin to the next level with The Bar Premium Gin, a world-class gin infused with imported botanicals from Spain that gives it a delicious burst of flavor not found in local gin products.'),
(12, 'Ginebra San Miguel - Gin Bilog', '../images/ginbilog.jpg', 'Gin', 55, 'Ginebra San Miguel is one of a famous liquor company here in Philippines. One of their products called “gin bilog” is commonly brought from sari-sari store by people who want to get drank. One group fans of this liquor called shembot girls in a small siti'),
(13, 'Tequila Ocha Plata ', '../images/OchoPlata.jpg', 'Tequila', 3508.08, 'With a delightful sweetness and citrus quality, this is one of our favorite sipping tequilas.\r\nEnjoy a sweetly floral nose with notes of extra ripe agaves and candied fruit. There’s\r\ncitrus, cinnamon, dried fruit, and almond on the palate. Wait for a touc'),
(14, 'Jose Cuervo', '../images/cuervo.jpg', 'Tequila', 1252.76, 'Jose Cuervo is another well-known brand of tequila. This brand became popular during\r\nthe Prohibition era, when tequila was regularly smuggled from Mexico to the\r\nSouthwestern United States. The company is still run by a descendant of the founder,\r\nDon Jo'),
(15, '1800 Tequila', '../images/1800Tequila.jpg', 'Tequila', 1590, '1800 was the first year that barrel-aged tequila was sold to the world. This brand is a\r\ntasty yet affordable alternative to more expensive tequila options.'),
(16, 'Fundador Spanish Brandy', '../images/fundador.jpg', 'Brandy', 1018.8, 'Made using airen and palomino grapes, Fundador is the top Spanish grape brandy and\r\nfor good reason.\r\nAged in the traditional Solera system, sherry-soaked barrels give this brandy its distinct\r\ntaste and warm colour.\r\nIt gives a very mellow flavour with a'),
(17, 'Remy Martin VSOP Cognac', '../images/RemyMartin.jpg', 'Brandy', 1980.12, 'Remy Martin is another international bestselling Cognac brand that is well recognised\r\naround the world, and this VSOP edition is no exception.\r\nAgain, made from a blend of exclusive Eaux-De-Vies (brandy distilled from any raw\r\ningredients such as fruit, '),
(18, 'Hennesy', '../images/Hennesy.jpg', 'Brandy', 1980.12, 'Sitting between a VSOP (Very Superior Old Pale) and a VS (Very Special), this is\r\nprobably the most recognisable brandy brand on the list.\r\nIt&#39;s made from a select blend of &#39;eaux-de-vie&#39; that matures in aged oak barrels along\r\nwith other eaux-');

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
