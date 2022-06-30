-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 08:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn-login-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `login-system-table`
--

CREATE TABLE `login-system-table` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login-system-table`
--

INSERT INTO `login-system-table` (`id`, `username`, `email`, `password`, `name`) VALUES
(6, 'testusername', 'testemail123@gmail.com', '$2y$10$O1c.A6joJXx73hX5byDeR.7IObHZd6dSCOyK/Gk3BFT8WLVS7fhWq', 'test full name'),
(7, 'malik', 'malik@gmail.com', '$2y$10$ov/lkaMeAYEW3fGnc4VWeewpj9G0hRJnk10NHImRstOD/aCiqMfvC', 'malik'),
(8, 'user3', 'user3@gmail.com', '$2y$10$raHa1mr1Ci3TBpXz7zZp.eM3Yq24DQ3VFoKWR/me9S0R.AdqRfXGy', 'testing user 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login-system-table`
--
ALTER TABLE `login-system-table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login-system-table`
--
ALTER TABLE `login-system-table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
