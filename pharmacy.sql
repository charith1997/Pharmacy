-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2020 at 01:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `NIC` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`NIC`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIC`, `fname`, `lname`, `address1`, `address2`, `address3`, `mail`, `dob`, `password`) VALUES
('960610778V', 'Bhathiya', 'Bandara', 'No161/1', 'Theldenoya', 'Kandy', 'bhathz222@gmail.com', '1996-09-03', 'e72333b4a3a1875cf4c8764191a64833329b897ea42d5e775074705b5a3a783b210f101f30d38f42519604a23ff780c1d5c298b69535ce8d5c5b3318bfefcab7'),
('981980557V', 'Chamod', 'Wijetunga', 'No. 460', 'Henegedara rd', 'Maharagama', 'chamo.wijetunga@gmail.com', '1998-12-12', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
