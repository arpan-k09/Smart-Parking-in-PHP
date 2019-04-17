-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 02:32 PM
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
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert` (OUT `IT_ID` INT, IN `fnam` VARCHAR(30), IN `lnam` VARCHAR(30), IN `emai` VARCHAR(30), IN `monu` BIGINT(12) UNSIGNED, IN `pas` VARCHAR(30))  MODIFIES SQL DATA
BEGIN
INSERT INTO `user`(`fname`, `lname`, `email`, `monum`, `pass`) VALUES (fnam,lnam,emai,monu,pas);
SELECT id INTO IT_ID FROM user WHERE fname = fnam AND email = emai;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `total`, `available`) VALUES
(1, 50, 11),
(2, 70, 67),
(3, 40, 34),
(4, 45, 45),
(5, 60, 59),
(6, 85, 0),
(7, 90, 83),
(8, 35, 32),
(9, 75, 71),
(10, 95, 0),
(11, 65, 65),
(12, 55, 54);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `monum` bigint(12) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `monum`, `pass`) VALUES
('milan', 'petrola', 'milan@gmail.com', 8000271998, 'mmmmmmmm'),
('Arpan', 'Korat', 'koratarpans@gmail.com', 8000271998, 'aaaaaaaa'),
('abc', 'def', 'abc@gmail.com', 8000271998, 'aaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `email` varchar(25) NOT NULL,
  `category` int(2) NOT NULL,
  `no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`email`, `category`, `no`) VALUES
('koratarpans@gmail.com', 2, 'GJ-05-GF-4566'),
('dharm@gmail.com', 2, 'GJ-05-AW-4523');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
