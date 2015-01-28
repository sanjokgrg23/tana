-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2013 at 10:48 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tana`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `street`, `town`, `city`, `postcode`) VALUES
(1, '12 Malden Drive', 'Invicta park barracks, ', 'Maidstone, Kent', 'ME14 2NW');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `event` varchar(255) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `user_id`, `timestamp`, `name`, `description`, `event`) VALUES
(23, 1, 1375288920, 'Sanjok Gurung', 'A little graduation of me', 'Graduation'),
(24, 1, 1375401264, 'james and katy', 'wedding of james and katy', 'Anniversary'),
(25, 1, 1375720126, 'Britu', 'britu birthday party\r\n', 'Birthday Party');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `ext` varchar(4) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `user_id`, `album_id`, `timestamp`, `ext`) VALUES
(19, 1, 23, 1375288983, 'jpg'),
(20, 1, 23, 1375289533, 'jpg'),
(21, 1, 23, 1375289572, 'jpg'),
(22, 1, 23, 1375289600, 'png'),
(23, 1, 23, 1375289625, 'png'),
(24, 1, 23, 1375289670, 'png'),
(25, 1, 23, 1375289728, 'jpg'),
(26, 1, 23, 1375289773, 'jpg'),
(27, 1, 23, 1375289797, 'jpg'),
(28, 1, 23, 1375289835, 'jpg'),
(29, 1, 23, 1375289866, 'jpg'),
(30, 1, 23, 1375289886, 'jpg'),
(31, 1, 23, 1375289929, 'jpg'),
(32, 1, 23, 1375289953, 'jpg'),
(33, 1, 23, 1375289979, 'jpg'),
(34, 1, 23, 1375290003, 'jpg'),
(35, 1, 23, 1375290226, 'jpg'),
(36, 1, 24, 1375401280, 'jpg'),
(37, 1, 24, 1375401290, 'jpg'),
(38, 1, 25, 1375720152, 'jpg'),
(39, 1, 25, 1375720173, 'jpg'),
(40, 1, 25, 1375720188, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `our_story`
--

CREATE TABLE IF NOT EXISTS `our_story` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `our_story`
--

INSERT INTO `our_story` (`id`, `story`) VALUES
(1, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `description`) VALUES
(1, 'We organise events for you, and it is going to be perfect. we belive in perfectionist. We use every ounce of energy, to make your event a fantasy type, ocktail parties, Entertainment shows, Corporate dinners, Anniversaries, Child dedications, Naming ceremonies, Thanksgiving, product launch, magazine launch, album launch e.t.c. We also provide first-class ushering services for all events, including corporate events. Also contact us for the most beautiful wedding decoration you caocktail parties, Entertainment shows, Corporate dinners, Anniversaries, Child dedications, Naming ceremonies, Thanksgiving, product launch, magazine launch, album launch e.t.c. We also provide first-class ushering services for all events, including corporate events. Also contact us for the most beautiful wedding decoration you ca\r\nFUCK YOU MOTHERFUCKKER.'),
(2, 'ocktail parties, Entertainment shows, Corporate dinners, Anniversaries, Child dedications, Naming ceremonies, Thanksgiving, product launch, magazine launch, album launch e.t.c. We also provide first-class ushering services for all events, including corporate events. Also contact us for the most beautiful wedding decoration you ca');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `password`) VALUES
(1, 'sanjok_maiden@hotmail.com', 'sanjok gurung', '2eec6efe7db6782638eb8b8778562200');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
