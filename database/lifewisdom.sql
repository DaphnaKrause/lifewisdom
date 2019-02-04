-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2019 at 12:56 PM
-- Server version: 5.6.41-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daphnakr_wisdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `lifewisdom`
--

CREATE TABLE `lifewisdom` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `hometown` varchar(20) NOT NULL,
  `wisdom` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifewisdom`
--

INSERT INTO `lifewisdom` (`id`, `name`, `profession`, `hometown`, `wisdom`) VALUES
(1, 'Daphna', 'Student', 'Florida', 'Never Give Up'),
(2, 'Daphna', 'Student', 'Florida', 'Be the change you wish to see in the world'),
(3, 'Daphna', 'Student', 'Florida', 'Stay Calm'),
(4, 'Daphna', 'Student', 'Florida', 'Never give up on your dreams'),
(5, 'Daphna', 'Student', 'Florida', 'Failure is never an option'),
(6, 'Daphna', 'Student', 'Florida', 'Shoot for the moon even if you miss you will land among the stars'),
(7, 'Daphna', 'Student', 'Florida', 'Be Yourself'),
(8, 'Daphna', 'Student', 'Florida', 'You can never work to hard'),
(9, 'Daphna', 'Student', 'Florida', 'Live by your own standards'),
(10, 'Daphna', 'Student', 'Florida', 'Save the best for last');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lifewisdom`
--
ALTER TABLE `lifewisdom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lifewisdom`
--
ALTER TABLE `lifewisdom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
