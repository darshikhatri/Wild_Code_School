-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 11:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `argonautes`
--

-- --------------------------------------------------------

--
-- Table structure for table `argonautes_nom_details`
--

CREATE TABLE IF NOT EXISTS `argonautes_nom_details` (
`arg_id` int(11) NOT NULL,
  `arg_nom` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `argonautes_nom_details`
--

INSERT INTO `argonautes_nom_details` (`arg_id`, `arg_nom`) VALUES
(8, 'Eleftheria'),
(9, 'Gennadios'),
(10, 'Lysimachos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `argonautes_nom_details`
--
ALTER TABLE `argonautes_nom_details`
 ADD PRIMARY KEY (`arg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `argonautes_nom_details`
--
ALTER TABLE `argonautes_nom_details`
MODIFY `arg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
