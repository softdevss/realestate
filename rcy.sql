-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcy`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tax_id` varchar(50) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `firstname`, `middlename`, `lastname`, `contact_no`, `address`, `email`, `tax_id`, `date_created`) VALUES
(3, 'Jeremy Prince', 'Giron', 'Andaya', '09666235316', '12 Sampaguita St. Gregoria Hts. Subd. Brgy. San Isidro Taytay,Rizal', 'jeremyprinceandaya07@gmail.com', '10151996', 0);

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
(51, 'CHENNEL MODEL HOUSE', 'Chennel Model House.JPG', '3Million', 'Sta. Maria, Guiwan and Mercede', 'Our finished SOLD Houses! ', '60sqm', 'Sakura Ann Yanson', '2147483647', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `loan_list`
--

CREATE TABLE `loan_list` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(50) NOT NULL,
  `loan_type_id` int(30) NOT NULL,
  `borrower_id` int(30) NOT NULL,
  `purpose` text NOT NULL,
  `amount` double NOT NULL,
  `plan_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= request, 1= confrimed,2=released,3=complteted,4=denied\r\n',
  `date_released` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_list`
--

INSERT INTO `loan_list` (`id`, `ref_no`, `loan_type_id`, `borrower_id`, `purpose`, `amount`, `plan_id`, `status`, `date_released`, `date_created`) VALUES
(7, '39862854', 2, 3, 'New House and Lot', 3000000, 4, 2, '2021-10-02 11:22:00', '2021-10-02 17:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `loan_plan`
--

CREATE TABLE `loan_plan` (
  `id` int(30) NOT NULL,
  `months` int(11) NOT NULL,
  `interest_percentage` float NOT NULL,
  `penalty_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_plan`
--

INSERT INTO `loan_plan` (`id`, `months`, `interest_percentage`, `penalty_rate`) VALUES
(4, 240, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan_schedules`
--

CREATE TABLE `loan_schedules` (
  `id` int(30) NOT NULL,
  `loan_id` int(30) NOT NULL,
  `date_due` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_schedules`
--

INSERT INTO `loan_schedules` (`id`, `loan_id`, `date_due`) VALUES
(2, 3, '2020-10-26'),
(3, 3, '2020-11-26'),
(4, 3, '2020-12-26'),
(5, 3, '2021-01-26'),
(6, 3, '2021-02-26'),
(7, 3, '2021-03-26'),
(8, 3, '2021-04-26'),
(9, 3, '2021-05-26'),
(10, 3, '2021-06-26'),
(11, 3, '2021-07-26'),
(12, 3, '2021-08-26'),
(13, 3, '2021-09-26'),
(14, 3, '2021-10-26'),
(15, 3, '2021-11-26'),
(16, 3, '2021-12-26'),
(17, 3, '2022-01-26'),
(18, 3, '2022-02-26'),
(19, 3, '2022-03-26'),
(20, 3, '2022-04-26'),
(21, 3, '2022-05-26'),
(22, 3, '2022-06-26'),
(23, 3, '2022-07-26'),
(24, 3, '2022-08-26'),
(25, 3, '2022-09-26'),
(26, 3, '2022-10-26'),
(27, 3, '2022-11-26'),
(28, 3, '2022-12-26'),
(29, 3, '2023-01-26'),
(30, 3, '2023-02-26'),
(31, 3, '2023-03-26'),
(32, 3, '2023-04-26'),
(33, 3, '2023-05-26'),
(34, 3, '2023-06-26'),
(35, 3, '2023-07-26'),
(36, 3, '2023-08-26'),
(37, 3, '2023-09-26'),
(38, 5, '2021-10-27'),
(39, 5, '2021-11-27'),
(40, 5, '2021-12-27'),
(41, 5, '2022-01-27'),
(42, 5, '2022-02-27'),
(43, 5, '2022-03-27'),
(44, 5, '2022-04-27'),
(45, 5, '2022-05-27'),
(46, 5, '2022-06-27'),
(47, 5, '2022-07-27'),
(48, 5, '2022-08-27'),
(49, 5, '2022-09-27'),
(50, 5, '2022-10-27'),
(51, 5, '2022-11-27'),
(52, 5, '2022-12-27'),
(53, 5, '2023-01-27'),
(54, 5, '2023-02-27'),
(55, 5, '2023-03-27'),
(56, 5, '2023-04-27'),
(57, 5, '2023-05-27'),
(58, 5, '2023-06-27'),
(59, 5, '2023-07-27'),
(60, 5, '2023-08-27'),
(61, 5, '2023-09-27'),
(62, 6, '2021-11-01'),
(63, 6, '2021-12-01'),
(64, 6, '2022-01-01'),
(65, 6, '2022-02-01'),
(66, 6, '2022-03-01'),
(67, 6, '2022-04-01'),
(68, 6, '2022-05-01'),
(69, 6, '2022-06-01'),
(70, 6, '2022-07-01'),
(71, 6, '2022-08-01'),
(72, 6, '2022-09-01'),
(73, 6, '2022-10-01'),
(74, 6, '2022-11-01'),
(75, 6, '2022-12-01'),
(76, 6, '2023-01-01'),
(77, 6, '2023-02-01'),
(78, 6, '2023-03-01'),
(79, 6, '2023-04-01'),
(80, 6, '2023-05-01'),
(81, 6, '2023-06-01'),
(82, 6, '2023-07-01'),
(83, 6, '2023-08-01'),
(84, 6, '2023-09-01'),
(85, 6, '2023-10-01'),
(86, 6, '2023-11-01'),
(87, 6, '2023-12-01'),
(88, 6, '2024-01-01'),
(89, 6, '2024-02-01'),
(90, 6, '2024-03-01'),
(91, 6, '2024-04-01'),
(92, 6, '2024-05-01'),
(93, 6, '2024-06-01'),
(94, 6, '2024-07-01'),
(95, 6, '2024-08-01'),
(96, 6, '2024-09-01'),
(97, 6, '2024-10-01'),
(98, 7, '2021-11-02'),
(99, 7, '2021-12-02'),
(100, 7, '2022-01-02'),
(101, 7, '2022-02-02'),
(102, 7, '2022-03-02'),
(103, 7, '2022-04-02'),
(104, 7, '2022-05-02'),
(105, 7, '2022-06-02'),
(106, 7, '2022-07-02'),
(107, 7, '2022-08-02'),
(108, 7, '2022-09-02'),
(109, 7, '2022-10-02'),
(110, 7, '2022-11-02'),
(111, 7, '2022-12-02'),
(112, 7, '2023-01-02'),
(113, 7, '2023-02-02'),
(114, 7, '2023-03-02'),
(115, 7, '2023-04-02'),
(116, 7, '2023-05-02'),
(117, 7, '2023-06-02'),
(118, 7, '2023-07-02'),
(119, 7, '2023-08-02'),
(120, 7, '2023-09-02'),
(121, 7, '2023-10-02'),
(122, 7, '2023-11-02'),
(123, 7, '2023-12-02'),
(124, 7, '2024-01-02'),
(125, 7, '2024-02-02'),
(126, 7, '2024-03-02'),
(127, 7, '2024-04-02'),
(128, 7, '2024-05-02'),
(129, 7, '2024-06-02'),
(130, 7, '2024-07-02'),
(131, 7, '2024-08-02'),
(132, 7, '2024-09-02'),
(133, 7, '2024-10-02'),
(134, 7, '2024-11-02'),
(135, 7, '2024-12-02'),
(136, 7, '2025-01-02'),
(137, 7, '2025-02-02'),
(138, 7, '2025-03-02'),
(139, 7, '2025-04-02'),
(140, 7, '2025-05-02'),
(141, 7, '2025-06-02'),
(142, 7, '2025-07-02'),
(143, 7, '2025-08-02'),
(144, 7, '2025-09-02'),
(145, 7, '2025-10-02'),
(146, 7, '2025-11-02'),
(147, 7, '2025-12-02'),
(148, 7, '2026-01-02'),
(149, 7, '2026-02-02'),
(150, 7, '2026-03-02'),
(151, 7, '2026-04-02'),
(152, 7, '2026-05-02'),
(153, 7, '2026-06-02'),
(154, 7, '2026-07-02'),
(155, 7, '2026-08-02'),
(156, 7, '2026-09-02'),
(157, 7, '2026-10-02'),
(158, 7, '2026-11-02'),
(159, 7, '2026-12-02'),
(160, 7, '2027-01-02'),
(161, 7, '2027-02-02'),
(162, 7, '2027-03-02'),
(163, 7, '2027-04-02'),
(164, 7, '2027-05-02'),
(165, 7, '2027-06-02'),
(166, 7, '2027-07-02'),
(167, 7, '2027-08-02'),
(168, 7, '2027-09-02'),
(169, 7, '2027-10-02'),
(170, 7, '2027-11-02'),
(171, 7, '2027-12-02'),
(172, 7, '2028-01-02'),
(173, 7, '2028-02-02'),
(174, 7, '2028-03-02'),
(175, 7, '2028-04-02'),
(176, 7, '2028-05-02'),
(177, 7, '2028-06-02'),
(178, 7, '2028-07-02'),
(179, 7, '2028-08-02'),
(180, 7, '2028-09-02'),
(181, 7, '2028-10-02'),
(182, 7, '2028-11-02'),
(183, 7, '2028-12-02'),
(184, 7, '2029-01-02'),
(185, 7, '2029-02-02'),
(186, 7, '2029-03-02'),
(187, 7, '2029-04-02'),
(188, 7, '2029-05-02'),
(189, 7, '2029-06-02'),
(190, 7, '2029-07-02'),
(191, 7, '2029-08-02'),
(192, 7, '2029-09-02'),
(193, 7, '2029-10-02'),
(194, 7, '2029-11-02'),
(195, 7, '2029-12-02'),
(196, 7, '2030-01-02'),
(197, 7, '2030-02-02'),
(198, 7, '2030-03-02'),
(199, 7, '2030-04-02'),
(200, 7, '2030-05-02'),
(201, 7, '2030-06-02'),
(202, 7, '2030-07-02'),
(203, 7, '2030-08-02'),
(204, 7, '2030-09-02'),
(205, 7, '2030-10-02'),
(206, 7, '2030-11-02'),
(207, 7, '2030-12-02'),
(208, 7, '2031-01-02'),
(209, 7, '2031-02-02'),
(210, 7, '2031-03-02'),
(211, 7, '2031-04-02'),
(212, 7, '2031-05-02'),
(213, 7, '2031-06-02'),
(214, 7, '2031-07-02'),
(215, 7, '2031-08-02'),
(216, 7, '2031-09-02'),
(217, 7, '2031-10-02'),
(218, 7, '2031-11-02'),
(219, 7, '2031-12-02'),
(220, 7, '2032-01-02'),
(221, 7, '2032-02-02'),
(222, 7, '2032-03-02'),
(223, 7, '2032-04-02'),
(224, 7, '2032-05-02'),
(225, 7, '2032-06-02'),
(226, 7, '2032-07-02'),
(227, 7, '2032-08-02'),
(228, 7, '2032-09-02'),
(229, 7, '2032-10-02'),
(230, 7, '2032-11-02'),
(231, 7, '2032-12-02'),
(232, 7, '2033-01-02'),
(233, 7, '2033-02-02'),
(234, 7, '2033-03-02'),
(235, 7, '2033-04-02'),
(236, 7, '2033-05-02'),
(237, 7, '2033-06-02'),
(238, 7, '2033-07-02'),
(239, 7, '2033-08-02'),
(240, 7, '2033-09-02'),
(241, 7, '2033-10-02'),
(242, 7, '2033-11-02'),
(243, 7, '2033-12-02'),
(244, 7, '2034-01-02'),
(245, 7, '2034-02-02'),
(246, 7, '2034-03-02'),
(247, 7, '2034-04-02'),
(248, 7, '2034-05-02'),
(249, 7, '2034-06-02'),
(250, 7, '2034-07-02'),
(251, 7, '2034-08-02'),
(252, 7, '2034-09-02'),
(253, 7, '2034-10-02'),
(254, 7, '2034-11-02'),
(255, 7, '2034-12-02'),
(256, 7, '2035-01-02'),
(257, 7, '2035-02-02'),
(258, 7, '2035-03-02'),
(259, 7, '2035-04-02'),
(260, 7, '2035-05-02'),
(261, 7, '2035-06-02'),
(262, 7, '2035-07-02'),
(263, 7, '2035-08-02'),
(264, 7, '2035-09-02'),
(265, 7, '2035-10-02'),
(266, 7, '2035-11-02'),
(267, 7, '2035-12-02'),
(268, 7, '2036-01-02'),
(269, 7, '2036-02-02'),
(270, 7, '2036-03-02'),
(271, 7, '2036-04-02'),
(272, 7, '2036-05-02'),
(273, 7, '2036-06-02'),
(274, 7, '2036-07-02'),
(275, 7, '2036-08-02'),
(276, 7, '2036-09-02'),
(277, 7, '2036-10-02'),
(278, 7, '2036-11-02'),
(279, 7, '2036-12-02'),
(280, 7, '2037-01-02'),
(281, 7, '2037-02-02'),
(282, 7, '2037-03-02'),
(283, 7, '2037-04-02'),
(284, 7, '2037-05-02'),
(285, 7, '2037-06-02'),
(286, 7, '2037-07-02'),
(287, 7, '2037-08-02'),
(288, 7, '2037-09-02'),
(289, 7, '2037-10-02'),
(290, 7, '2037-11-02'),
(291, 7, '2037-12-02'),
(292, 7, '2038-01-02'),
(293, 7, '2038-02-02'),
(294, 7, '2038-03-02'),
(295, 7, '2038-04-02'),
(296, 7, '2038-05-02'),
(297, 7, '2038-06-02'),
(298, 7, '2038-07-02'),
(299, 7, '2038-08-02'),
(300, 7, '2038-09-02'),
(301, 7, '2038-10-02'),
(302, 7, '2038-11-02'),
(303, 7, '2038-12-02'),
(304, 7, '2039-01-02'),
(305, 7, '2039-02-02'),
(306, 7, '2039-03-02'),
(307, 7, '2039-04-02'),
(308, 7, '2039-05-02'),
(309, 7, '2039-06-02'),
(310, 7, '2039-07-02'),
(311, 7, '2039-08-02'),
(312, 7, '2039-09-02'),
(313, 7, '2039-10-02'),
(314, 7, '2039-11-02'),
(315, 7, '2039-12-02'),
(316, 7, '2040-01-02'),
(317, 7, '2040-02-02'),
(318, 7, '2040-03-02'),
(319, 7, '2040-04-02'),
(320, 7, '2040-05-02'),
(321, 7, '2040-06-02'),
(322, 7, '2040-07-02'),
(323, 7, '2040-08-02'),
(324, 7, '2040-09-02'),
(325, 7, '2040-10-02'),
(326, 7, '2040-11-02'),
(327, 7, '2040-12-02'),
(328, 7, '2041-01-02'),
(329, 7, '2041-02-02'),
(330, 7, '2041-03-02'),
(331, 7, '2041-04-02'),
(332, 7, '2041-05-02'),
(333, 7, '2041-06-02'),
(334, 7, '2041-07-02'),
(335, 7, '2041-08-02'),
(336, 7, '2041-09-02'),
(337, 7, '2041-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `id` int(30) NOT NULL,
  `type_name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`id`, `type_name`, `description`) VALUES
(1, 'Small Business', 'Small Business Loans'),
(2, 'Mortgages', 'Mortgages'),
(3, 'Personal Loans', 'Personal Loans');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `loan_id` int(30) NOT NULL,
  `payee` text NOT NULL,
  `amount` float NOT NULL DEFAULT 0,
  `penalty_amount` float NOT NULL DEFAULT 0,
  `overdue` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=no , 1 = yes',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `loan_id`, `payee`, `amount`, `penalty_amount`, `overdue`, `date_created`) VALUES
(2, 3, 'Smith, John C', 3000, 0, 0, '2020-09-26 15:51:01'),
(5, 3, 'Smith, John C', 3000, 90, 1, '2021-09-27 12:59:59'),
(8, 6, 'kamuning, ley SHARP', 15000, 0, 0, '2021-10-01 15:46:48'),
(9, 7, 'Andaya, Jeremy Prince Giron', 13750, 0, 0, '2021-10-02 17:23:13');

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
('jeremy@gmail.com', 'Jeremy Prince Andaya', 'Employee', '$2y$10$BVkqUdmD6Rw8RqQWttqzDuolgVtJ3sMTATLXBVCsreQ0ON84hE3S2', 'ACTIVE'),
('ronnie@gmail.com', 'Ronnie Rosal', 'Employee', '$2y$10$iykhNWcWQVXQwr3CvmtTg.EthF6jK0PHtR3IODbPdWDxsYAMwsI72', 'ACTIVE'),
('sakura@yahoo.com', 'Sakura Ann Yanson', 'Admin', '$2y$10$nkC2O5JiDfQ7tUiCgpxCqOBpgs.HFQcOXbW/WwrFwTsy1Mlffzce2', 'ACTIVE');

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
(31, 'asdasd', 'asd@yahoo.com', 'asdasd', 'asdasdawd');

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
('jeremy@gmail.com', 'Jeremy Prince Andaya', 'Employee', 'Male', '0000-00-00', '09666235316', 'jeremyprinceandaya07@gmail.com', '2021-09-02', '2021-09-07'),
('ronnie@gmail.com', 'Ronnie Rosal', 'Employee', 'Male', '0000-00-00', '09150235316', 'ronnie@gmail.com', '2021-10-02', '2021-10-02'),
('sakura@yahoo.com', 'Sakura Ann Yanson', 'Admin', 'Female', NULL, '09123456789', 'sakuraannyanson@yahoo.com', '2021-02-05', '2021-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblvoucher`
--

CREATE TABLE `tblvoucher` (
  `voucher_id` int(9) NOT NULL,
  `date` date NOT NULL,
  `pcv_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvoucher`
--

INSERT INTO `tblvoucher` (`voucher_id`, `date`, `pcv_no`, `fullname`, `particulars`, `amount`) VALUES
(30, '2021-09-20', '09832', 'asdasd', 'asdasd', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`) VALUES
(1, 0, 'Administrator', '', '', 'admin', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `loan_list`
--
ALTER TABLE `loan_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_plan`
--
ALTER TABLE `loan_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_schedules`
--
ALTER TABLE `loan_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tblvoucher`
--
ALTER TABLE `tblvoucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `loan_list`
--
ALTER TABLE `loan_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan_plan`
--
ALTER TABLE `loan_plan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan_schedules`
--
ALTER TABLE `loan_schedules`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblvoucher`
--
ALTER TABLE `tblvoucher`
  MODIFY `voucher_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
