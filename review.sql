-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 01:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `title` text NOT NULL,
  `comment` longtext NOT NULL,
  `book_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `rate`, `title`, `comment`, `book_id`, `customer_id`) VALUES
(1, 4, 'hi', '', 1, 1),
(2, 5, 'hi', '', 1, 1),
(3, 5, 'hi', '', 1, 1),
(4, 2, 'nice awesome', 'cjsdkhusdgcuysdgcjhsdbcyugsdcdvchj', 10, 20),
(5, 4, 'BLAH BLAH', 'hgshsjehejfsfnjsnfkjnsdfjnskjdfnkjsnfkjsnkjfnsjdfnksjnf', 11, 20),
(6, 1, 'gsjldhaj', 'gjksdh', 11, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
