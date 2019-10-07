-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2011 at 12:04 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9am`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Ram', 'ram@info.com', '7897897780', 'hello'),
(2, 'TEST', 'rambabburi@gmail.com', '1234567890', 'sasa'),
(3, 'ravi', 'ravi@mail.com', '234323', 'hrllo'),
(4, 'ravi', 'ravi@mail.com', '234323', 'hrllo'),
(5, 'ravi', 'ravi@mail.com', '234323', 'hrllo'),
(6, 'test', 'test123@mail.com', '123123', 'dfsdf'),
(7, 'ram', 'rambabburi@gmail.com', '534534534', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` float NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `ename`, `email`, `mobile`, `city`, `address`, `salary`, `date`) VALUES
(4, 'Naresh KUmar', 'naresh@mail.com', '234323', 'Ongole', 'fdgdfg', 12000, '2011-04-25 03:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `terms` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'inactive',
  `token` varchar(32) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `date_of_reg` datetime NOT NULL,
  `profile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `gender`, `city`, `state`, `terms`, `status`, `token`, `ip`, `date_of_reg`, `profile`) VALUES
(1, 'ram  Babburi', 'rambabburi@gmail.com', '$2y$10$/hjtixLG5HIBLX.MrcrWn.4YNY2qb4mF7.uGRCM4IftrUi2Sp4bxO', '0912793210', 'Male', 'Ongole', 'Andhrapradesh', 1, 'active', 'aa0effc0fc229b17c67b7518394c569d', '::1', '2011-04-25 02:46:13', '1561611514_Tulips.jpg'),
(2, 'naresh Kumar', 'naresh@mail.com', '$2y$10$GWZVyleg.PHP24dlXoC9..4QRiW5ZRi8t8qeY8rL2cpwu2lyAcAju', '9878978978', 'Male', 'Hyderabad', 'Telangana', 1, 'active', '4c9667016a202a7f90debba1a3cc45e3', '::1', '2011-04-25 03:00:49', '1561611371_Penguins.jpg'),
(3, 'karan', 'admin@mail.com', '$2y$10$vtnmf/PMRYcYAqAmS0cY7.tSZXxwD8Hy4xo29pmLbWVzMvsFmqEYm', '1234567890', 'Male', 'Hyderabad', 'Andhrapradesh', 1, 'active', '24b010cbb16d596ca577c638050846fa', '::1', '2011-04-25 03:03:18', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
