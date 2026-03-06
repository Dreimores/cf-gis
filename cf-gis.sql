-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2026 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf-gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers_and_growers_info`
--

CREATE TABLE `farmers_and_growers_info` (
  `id` int(11) NOT NULL,
  `assign_code` int(11) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `cellphone_number` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers_and_growers_info`
--

INSERT INTO `farmers_and_growers_info` (`id`, `assign_code`, `birth_date`, `age`, `purok`, `cellphone_number`, `notes`, `role`, `user_id`) VALUES
(1, 123, '06/24/2001', 24, '01', 45634875, 'Sample notes...', 'Farmers', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `municipal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `email`, `password`, `province`, `barangay`, `city`, `municipal`) VALUES
(3, 'PTC', 'IT', 'Labbao', 'ptc.it.1130@gmail.com', 'password', 'Cagayan', 'Calapangan Sur', 'n/a', 'Lasam');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_farmers_users`
-- (See below for the actual view)
--
CREATE TABLE `view_farmers_users` (
`id` int(11)
,`farmer_id` int(11)
,`assign_code` int(11)
,`first_name` varchar(255)
,`middle_name` varchar(255)
,`last_name` varchar(255)
,`email` varchar(255)
,`province` varchar(255)
,`barangay` varchar(255)
,`city` varchar(255)
,`municipal` varchar(255)
,`birth_date` varchar(255)
,`age` int(11)
,`purok` varchar(255)
,`cellphone_number` int(11)
,`notes` varchar(255)
,`role` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `view_farmers_users`
--
DROP TABLE IF EXISTS `view_farmers_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_farmers_users`  AS SELECT `u`.`id` AS `id`, `f`.`id` AS `farmer_id`, `f`.`assign_code` AS `assign_code`, `u`.`first_name` AS `first_name`, `u`.`middle_name` AS `middle_name`, `u`.`last_name` AS `last_name`, `u`.`email` AS `email`, `u`.`province` AS `province`, `u`.`barangay` AS `barangay`, `u`.`city` AS `city`, `u`.`municipal` AS `municipal`, `f`.`birth_date` AS `birth_date`, `f`.`age` AS `age`, `f`.`purok` AS `purok`, `f`.`cellphone_number` AS `cellphone_number`, `f`.`notes` AS `notes`, `f`.`role` AS `role` FROM (`farmers_and_growers_info` `f` join `users` `u` on(`f`.`user_id` = `u`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers_and_growers_info`
--
ALTER TABLE `farmers_and_growers_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers_and_growers_info`
--
ALTER TABLE `farmers_and_growers_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmers_and_growers_info`
--
ALTER TABLE `farmers_and_growers_info`
  ADD CONSTRAINT `farmers_and_growers_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
