-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 05:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'Mohamed Ibrahim Abdulghani', '01205481045', 'mohamedibrahimabdulghani@gmail.com', '$2y$10$rbtX4uGVyYYy221Duu6x3OfXh9VaTsoKUXB9QPiA0xqShyBWvcMnm'),
(14, 'ahmed', '01201985005', 'ahmed@yahoo.com', '$2y$10$9asLmgSxV7996pIKyc1xCOMFRo2F9RYJXB6p7G0gQhFIvbpCkv3fK'),
(15, 'soso', '012', 'mohamedibrahimabdulghani@gmail.com', '$2y$10$rbtX4uGVyYYy221Duu6x3OfXh9VaTsoKUXB9QPiA0xqShyBWvcMnm'),
(16, 'ali', '01022153598', 'ali@gmail.com', '$2y$10$/Zb80rWrxNItArU5yGHz2ujHKgpGTPwkaC9TfcxO9zB3nH3Q7gV9q'),
(17, 'khaled', '012012012', 'khaled@gmail.com', '$2y$10$1emtLhphgVlBrZkaiVfv/OIpFFjZCTWmwF9kDrr6bvGwHKsFtBjpm'),
(18, 'safy', '010365989', 'safy@gmail.com', '$2y$10$v.zcbgJGu31C.8CXSugo1eINAb5hiUlcX6hC06ENiT5dd5gfJxnMy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
