-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2022 at 08:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admiria`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`username`, `email`, `password`) VALUES
('jafrin', 'jafrin@email.com', '22195d444f11a01ee5c29e0c7d74c6aa');

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `interest` varchar(255) NOT NULL,
  `division` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `thana` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `bid` int(3) NOT NULL,
  `bname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`bid`, `bname`) VALUES
(1, 'Chanel'),
(2, 'Dior'),
(3, 'Gucci'),
(4, 'H&M'),
(5, 'Huda Beauty'),
(6, 'L\'Oreal Paris'),
(7, 'MAC'),
(8, 'Maybelline(New York)'),
(9, 'NARS'),
(10, 'NYX');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(4) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `prname`, `price`) VALUES
(3, 'MAC Eyes', 25),
(4, 'MAC Minerise', 7),
(5, 'M ~ A ~ C\nremo8080', 6),
(6, 'M ~ A ~C\nRoobyWoo', 40),
(7, 'M ~ A ~ C\nremo8080', 6),
(8, 'MAC Minerise', 7),
(9, 'M ~ A ~ C\nremo8080', 6),
(10, 'M ~ A ~ C\nremo8080', 6);

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `mid` int(10) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bmail` varchar(100) NOT NULL,
  `baddr` varchar(100) NOT NULL,
  `bstate` varchar(100) NOT NULL,
  `bzip` varchar(100) NOT NULL,
  `bnum` varchar(100) NOT NULL,
  `byear` int(4) NOT NULL,
  `bcvv` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`mid`, `bname`, `bmail`, `baddr`, `bstate`, `bzip`, `bnum`, `byear`, `bcvv`) VALUES
(6, '', '', '', '', '', '', 0, 0),
(7, '', '', '', '', '', '', 0, 0),
(8, '', '', '', '', '', '', 0, 0),
(9, '', '', '', '', '', '', 0, 0),
(10, '', '', '', '', '', '', 0, 0),
(11, '', '', '', '', '', '', 0, 0),
(12, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(4) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `price` int(4) NOT NULL,
  `bid` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `prname`, `price`, `bid`) VALUES
(1, 'Nars 12 Matte Shades', 12, 9),
(2, 'NYX Ultimate', 9, 10),
(3, 'Huda Beauty\r\nRose Golden edition', 17, 5),
(4, 'C H A N E L\r\nSummer box', 18, 1),
(5, 'D I O R\r\nHigh Ends 25', 3, 2),
(6, 'Gucci Colors', 14, 3),
(7, 'H&M Metallic', 10, 4),
(8, 'LA Pallete GOLD', 17, 6),
(9, 'MAC Eyes', 25, 7),
(10, 'M A Y B E L L I N E\r\nBurgandy Bar', 21, 9),
(11, 'Channel_eyes11', 15, 1),
(12, 'D I O R\r\neyes22', 12, 2),
(13, 'G U C C I\r\neyes33\r\n\r\n', 19, 3),
(14, 'h & M\r\neyes44', 11, 4),
(15, 'Huda Beauty\r\neyes505\r\n\r\n', 17, 5),
(16, 'M ~ A ~ C\r\neyes100', 22, 7),
(17, 'M A Y B E L L I N E\r\neyes77\r\n\r\n', 20, 8),
(18, 'N A R S\r\neyes88\r\n\r\n', 17, 9),
(19, 'N Y X\r\neyes99', 14, 10),
(20, 'Loreal Paris\r\neyes66\r\n\r\n', 14, 6),
(21, 'NYX_Natural', 31, 10),
(22, 'N A R S_fiji\r\nNatural Base', 26, 9),
(23, 'C H A N E L_22Rose\r\nLES BEIGES', 41, 1),
(24, 'M ~ A ~ C_NC20\r\nStudio Fix Fluid', 38, 7),
(25, 'Loreal n2\r\nTrue Match Foundation', 29, 6),
(26, 'Huda Beauty_110N\r\nFull Coverage', 40, 5),
(27, 'H&M_Pinky', 22, 4),
(28, 'G U C C I_050', 45, 3),
(29, 'DIOR SKIN', 35, 2),
(30, 'M A Y B E L L I N E\r\nNautral Coverage', 34, 8),
(31, 'Gucci_103', 7, 3),
(32, 'chanel_101', 5, 1),
(33, 'M A Y B E L L I N E_108', 7, 8),
(34, 'MAC Minerise', 7, 7),
(35, 'Loreal_106\r\nCrushed Foil', 4, 6),
(36, 'Huda Beauty\r\nPink Sands', 9, 5),
(37, 'H&M_104\r\nSparkiling Purple', 3, 4),
(38, 'N Y X_201\r\nMosaic Powder', 6, 10),
(39, 'N A R S_109\r\nHighlighting Blush Powder', 11, 9),
(40, 'D I O R_102\r\nDuals', 5, 2),
(41, 'N Y X\r\nlipsH9H\r\n\r\n', 31, 10),
(42, 'N A R S\r\nlipsG9G', 24, 9),
(43, 'M A Y B E L L I N E\r\nLipsF9F', 29, 8),
(44, 'M ~ A ~C\r\nRoobyWoo', 40, 7),
(45, 'Loreal\r\nlipsE9E', 36, 6),
(46, 'Huda Beauty\r\nlipsD9D\r\n\r\n', 43, 5),
(47, 'H&M\r\nlipsC9C\r\n\r\n', 21, 4),
(48, 'G U C C I\r\nlipsB9B', 51, 3),
(49, 'D I O R\r\nlipsA9A', 43, 2),
(50, 'C H A N E L\r\nlips999\r\n\r\n', 33, 1),
(51, 'N Y X\r\nbrushPPP', 70, 10),
(52, 'Huda Beauty\r\nBrushEEE', 68, 5),
(53, 'M A Y B E L L I NE\r\nbrushNNN', 65, 8),
(54, 'M ~ A ~ C\r\nMbrushGGG', 85, 7),
(55, 'Loreal Paris\r\nbrushFFF', 59, 6),
(56, 'D I O R\r\nbrushBBB', 60, 2),
(57, 'H&M\r\nbrushDDD\r\n\r\n', 45, 4),
(58, 'G U C C I\r\nbrushCCC', 45, 3),
(59, 'C H A N E L\r\nbrushAAA\r\n\r\n', 63, 1),
(60, 'N A R S\r\nbrushMMM', 62, 9),
(61, 'N Y X\r\nremoBWCW.', 2, 10),
(62, 'N A R S\r\nremo9090', 3, 9),
(63, 'M A Y B E L L I N E\r\nremoPOPO', 5, 8),
(64, 'M ~ A ~ C\r\nremo8080', 6, 7),
(65, 'Loreal Paris\r\nremo7070', 2, 6),
(66, 'Huda Beauty\r\nremoQAQM', 3, 5),
(67, 'H & M\r\nremo6060', 4, 4),
(68, 'G U C C I\r\nremo5050', 3, 3),
(69, 'D I O R\r\nremo4040', 6, 2),
(70, 'C H A N E L\r\nremo3030', 3, 1),
(71, 'ANNIE JUSTIN (AJ)', 120, 4),
(72, 'Beyonce Heat', 89, 3),
(73, 'C H L O E', 117, 1),
(74, 'D I O R\r\nJadore202', 205, 2),
(75, 'G U C C I\r\nperfume8888', 138, 3),
(76, 'LeFemme\r\nperfume1212\r\n\r\n', 69, 6),
(77, 'O P I U M\r\nperfume201', 76, 2),
(78, 'T O N I Q\r\nGray Glitter', 58, 4),
(79, 'Berry Pecker\r\nWedding Collection\r\n\r\n', 65, 8),
(80, 'Louis Vuitton\r\nSummer coll', 92, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `bid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beautician`
--
ALTER TABLE `beautician`
  ADD CONSTRAINT `beautician_ibfk_1` FOREIGN KEY (`email`) REFERENCES `access` (`email`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `brands` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
