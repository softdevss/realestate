-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 09:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_multiplelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `location_description` text NOT NULL,
  `max_capacity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `house_type`, `image`, `rent_cost`, `location`, `location_description`, `max_capacity`, `name`, `contact`, `status`) VALUES
(44, 'YAZZI MODEL HOUSE - BROWN', 'Yazzi - Brown.PNG', '2Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(45, 'YAZZI MODEL HOUSE - GOLD', 'Yazzi - Gold.PNG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(46, 'YAZZI MODEL HOUSE - PINK', 'Yazzi - Pink.PNG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(47, 'YAZZI MODEL HOUSE - Midnight Blue', 'Yazzi - Midnight Blue.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(48, 'NANNI MODEL HOUSE - Brown', 'Nanni - Brown.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(49, 'NANNI MODEL HOUSE - Red', 'Nanni - Red.HEIC', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Added'),
(50, 'DAMARA MODEL HOUSE', 'Damara Model House.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(51, 'CHENNEL MODEL HOUSE', 'Chennel Model House.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `masterlogin`
--

CREATE TABLE `masterlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`id`, `username`, `email`, `password`, `role`) VALUES
(11, 'Andaya', 'jeremyprinceandaya07@gmail.com', '123', 'admin'),
(12, 'Jocelyn Andaya', 'jocelyn.matias07@gmail.com', '123456', 'employee'),
(13, 'Nicolas Andaya', 'nicolas@yahoo.com', '12345678', 'user'),
(14, 'Nicolas', 'test@yahoo.com', '1234567', 'employee'),
(15, 'John ', 'jnicolas01@yahoo.com', '123456', 'employee'),
(17, 'Lawrence', 'law@yahoo.com', '123456', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `masterlogin`
--
ALTER TABLE `masterlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `masterlogin`
--
ALTER TABLE `masterlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
