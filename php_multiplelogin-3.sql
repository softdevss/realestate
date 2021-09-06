-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 05:01 AM
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
(50, 'DAMARA MODEL HOUSE', 'Damara Model House.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Available'),
(51, 'CHENNEL MODEL HOUSE', 'Chennel Model House.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Added'),
(55, 'Mini-House', 'admin-jeremy.jpg', 'PHP. 1.3M', 'Zamboang Del Sur', 'Cool-Place', '2 Rooms', 'Jeremy Prince Andaya', '09666235316', 'Added'),
(57, 'Mini-House', 'admin-jeremy.jpg', 'PHP. 1.3M', 'Zamboang Del Sur', 'Cool-Place', '2 Rooms', 'Jeremy Prince Andaya', '09666235316', 'Added'),
(58, 'Mini-House', 'admin-jeremy.jpg', 'PHP. 1.3M', 'Zamboang Del Sur', 'Cool-Place', '2 Rooms', '', '09666235316', 'Added'),
(59, 'Mini-House', 'admin-jeremy.jpg', 'PHP. 1.3M', 'Zamboang Del Sur', 'Cool-Place', '2 Rooms', '', '09666235316', 'Added'),
(60, 'Mini-House', 'admin-jeremy.jpg', 'PHP. 1.3M', 'Zamboang Del Sur', 'Cool-Place', '2 Rooms', 'Jeremy Prince Andaya', '09666235316', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(60, 'Jeremy Prince Andaya', 5, 'Good Website!', 1627978862),
(61, 'Arlan Camacho', 4, 'Beautiful Houses. ', 1627978948),
(62, 'Ralph Lawrence', 2, 'Hello', 1628141655),
(63, 'Jocelyn Andaya', 5, 'Quality House.', 1628919540),
(64, 'Ronnie Rosal', 5, 'Good Quality', 1630552436);

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `Employee_ID` varchar(25) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `User_Type` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`Employee_ID`, `Fullname`, `User_Type`, `Password`, `Status`) VALUES
('jeremy@gmail.com', 'Jeremy Prince Andaya', 'Employee', '$2y$10$mamLudESQnybzVW4rN8AtOv0QgARekJkcfxA9nVindYmaflIeK9rK', 'ACTIVE'),
('justinecusap@gmail.com', 'Justine Cusap', 'User', '$2y$10$g8xZWcPiZGggn6N2tXkD1.mhG5awn8BeBrGqkz1qySuhnURPmENeW', 'ACTIVE'),
('sakura@yahoo.com', 'Sakura Ann Yanson', 'Admin', '$2y$10$uIrEpfgK4a4bK/JQLZW/ZuC6xvIEi6m4duErCmY3k68xe16c.gED2', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(259) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `fullname`, `email`, `phone`, `message`) VALUES
(9, 'justine2', 'justine2@gmail.com', '0923093929', 'hello world\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofiles`
--

CREATE TABLE `tblprofiles` (
  `Employee_ID` varchar(25) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  `Position` varchar(25) NOT NULL,
  `Sex` varchar(25) DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `ContactNo` varchar(25) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprofiles`
--

INSERT INTO `tblprofiles` (`Employee_ID`, `Fullname`, `Position`, `Sex`, `Birthdate`, `ContactNo`, `Email`, `Date_Created`, `Last_Updated`) VALUES
('jeremy@gmail.com', 'Jeremy Prince Andaya', 'Employee', 'Male', '0000-00-00', '09666235316', 'jeremyprinceandaya07@gmail.com', '2021-09-02', '2021-09-02'),
('justinecusap@gmail.com', 'Justine Cusap', 'User', 'Male', '0000-00-00', '09666235316', 'justinecusap@gmail.com', '2021-09-02', '2021-09-02'),
('sakura@yahoo.com', 'Sakura Ann Yanson', 'Admin', 'Female', NULL, '09123456789', 'sakuraannyanson@yahoo.com', '2021-02-05', '2021-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprofiles`
--
ALTER TABLE `tblprofiles`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
