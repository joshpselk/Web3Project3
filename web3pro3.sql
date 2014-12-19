-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 09:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web3pro3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `album` varchar(50) NOT NULL,
  `format` varchar(10) NOT NULL DEFAULT 'ACC',
  `description` varchar(150) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `qutyPurchase` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
`id` int(3) NOT NULL,
  `title` varchar(30) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `album` varchar(50) NOT NULL,
  `format` varchar(10) NOT NULL DEFAULT 'AAC',
  `description` varchar(150) NOT NULL,
  `price` varchar(5) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `artist`, `album`, `format`, `description`, `price`, `quantity`) VALUES
(1, 'Scars', 'Upon a Burning Body', 'The World Is My Enemy', 'AAC', 'Awesome', '1.29', 65),
(2, 'Digital World', 'Amaranthe', 'Massive Addictive', 'AAC', 'Freedom isn''t free', '1.29', 98),
(3, 'You Will Know My Name', 'Arch Enemy', 'War Eternal', 'AAC', 'Life is war', '0.99', 55),
(4, 'Dark March', 'James Dooley', 'Position Music - Orchestral Series Vol. 2', 'AAC', 'Adrenaline Rush', '0.99', 47),
(5, 'The Dreamer', 'Skarlett', 'Demo', 'MP3', 'The masterpiece', '0.99', 23),
(6, 'Into Darkness', 'Skarlett', 'Demo', 'MP3', 'You''re not dying today', '0.75', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
