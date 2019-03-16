-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 03:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_maha_mahmoud_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `cd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `first_name`, `last_name`, `book_id`, `cd_id`) VALUES
(9, 'Delia', 'Owens', NULL, NULL),
(10, 'Lisa', 'Jewell', NULL, NULL),
(11, 'Kacey', 'Musgraves', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `image` blob,
  `ISBN_code` int(11) DEFAULT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `publisher` varchar(60) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `type` varchar(60) DEFAULT NULL,
  `short_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `author_id`, `image`, `ISBN_code`, `publish_year`, `publisher`, `publisher_id`, `type`, `short_description`) VALUES
(1, 'Where the Crawdads Sing', 'Delia Owens', 9, 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f3831575769694c6745794c2e53523136302c3234305f42473234332c3234332c3234332e6a7067, 1234569, 2018, 'G. P. PUTNAMS SON', 13, 'Novel', 'A painfully beautiful first novel that is at once a murder mystery, a coming-of-age narrative and a celebration of nature'),
(2, 'The Silent Patient', 'Alex Michaelides', 18, 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f3431627376784e5553644c2e5f53583332375f424f312c3230342c3230332c3230305f2e6a7067, 1250301696, 2019, ' Celadon Books', 14, 'Novel', 'The Silent Patient is a shocking psychological thriller of a woman’s act of violence against her husband?and of the therapist obsessed with uncovering her motive.'),
(3, 'Then She Was Gone', 'Lisa Jewell', 10, 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f492f393162634a2b47306c794c2e5f41435f554c3433365f2e6a7067, 1501154656, 2018, 'Atria Books; Reprint edition', 28, 'Novel', 'Ellie Mack was the perfect daughter. She was fifteen, the youngest of three. She was beloved by her parents, friends, and teachers. She and her boyfriend made a teenaged golden couple. She was days away from an idyllic post-exams summer vacation, with her whole life ahead of her, and then she was gone.');

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE `cds` (
  `cd_id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `image` blob,
  `publish_year` int(11) DEFAULT NULL,
  `publisher` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`cd_id`, `title`, `author`, `author_id`, `image`, `publish_year`, `publisher`) VALUES
(5, 'Pilates y Embarazo', 'Pilates in Mind', 30, 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f492f3831687948586a30446b4c2e5f53533530305f2e6a7067, 2018, 'Tobacco Music Edition (Gema)'),
(6, 'Golden Hour', 'Kacey Musgraves', 11, 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f492f3831537a4c63427258464c2e5f53533530305f2e6a7067, 2018, 'A MCA Nashville Release-UMG Recordings, Inc. UMG Recordings,'),
(7, 'Love Is Here To Stay', 'Tony Bennett & Diana Krall', 32, 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f492f37313461356c5555654a4c2e5f53533530305f2e6a7067, 2018, 'Verve Label Group, A Division of UMG Recordings, Inc. and Co'),
(8, 'Dancing Queen', 'Cher', 35, 0x68747470733a2f2f6d2e6d656469612d616d617a6f6e2e636f6d2f696d616765732f492f3831783936744f6867454c2e5f53533530305f2e6a7067, 2018, 'Warner Bros. Records Inc');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`) VALUES
(1, 'Maha', 'Mahmoud'),
(2, 'Pia', 'Carlos'),
(3, 'Manar', 'Awad');

-- --------------------------------------------------------

--
-- Table structure for table `dvds`
--

CREATE TABLE `dvds` (
  `dvd_id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `director` varchar(60) DEFAULT NULL,
  `actors` varchar(60) DEFAULT NULL,
  `image` blob,
  `publish_year` int(11) DEFAULT NULL,
  `short_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvds`
--

INSERT INTO `dvds` (`dvd_id`, `title`, `director`, `actors`, `image`, `publish_year`, `short_description`) VALUES
(9, 'ANT-MAN AND THE WASP', 'Peyton Reed', 'Paul Rudd, Evangeline Lilly, Michael Pena', 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f383139744f6b30524d574c2e5f53593434355f2e6a7067, 2018, 'Scott Lang is grappling with the consequences of his choices as both a superhero and a father. Approached by Hope van Dyne and Dr. Hank Pym, Lang must once again don the Ant-Man suit and fight alongside the Wasp'),
(10, 'Star Is Born', ' Bradley Cooper', ' Bradley Cooper, Lady Gaga, Andrew Dice Clay', 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f39314151344b333942314c2e5f534c313530305f2e6a7067, 2019, 'Seasoned musician Jackson Maine discovers and falls in love with struggling artist Ally. She has just about given up on her dream to make it big as a singer until Jackson coaxes her into the spotlight. But even as Allys career takes off, the personal side of their relationship is breaking down'),
(11, 'Aquaman', ' James Wan', 'Jason Momoa, Amber Heard, Willem Dafoe', 0x68747470733a2f2f696d616765732d6e612e73736c2d696d616765732d616d617a6f6e2e636f6d2f696d616765732f492f393152714153796b6d394c2e5f534c313530305f2e6a7067, 2019, 'Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `type` varchar(40) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `cd_id` int(11) DEFAULT NULL,
  `dvd_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `name`, `address`, `author_id`, `size`) VALUES
(13, 'G. P. PUTNAMS SON', '375 Hudson St. New York, NY 10014,USA', NULL, 'large'),
(14, 'Celadon Books', '175 Fifth Avenue New York, New York 10010, USA', NULL, 'large'),
(15, 'Warner Bros. Records Inc', '27 Wrights Ln, Kensington, London W8 5SW, UK', NULL, 'large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `cd_id` (`cd_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dvds`
--
ALTER TABLE `dvds`
  ADD PRIMARY KEY (`dvd_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD KEY `dvd_id` (`dvd_id`),
  ADD KEY `cd_id` (`cd_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`cd_id`) REFERENCES `cds` (`cd_id`),
  ADD CONSTRAINT `authors_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `genres`
--
ALTER TABLE `genres`
  ADD CONSTRAINT `genres_ibfk_1` FOREIGN KEY (`dvd_id`) REFERENCES `dvds` (`dvd_id`),
  ADD CONSTRAINT `genres_ibfk_2` FOREIGN KEY (`cd_id`) REFERENCES `cds` (`cd_id`),
  ADD CONSTRAINT `genres_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `genres_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `publishers_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
