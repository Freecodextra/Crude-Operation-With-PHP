-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 12:51 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` tinytext NOT NULL,
  `lName` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `email` longtext NOT NULL,
  `tel` bigint(20) NOT NULL,
  `Imgstatus` int(11) NOT NULL DEFAULT 0,
  `upload` tinytext NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `city`, `email`, `tel`, `Imgstatus`, `upload`) VALUES
(1, 'Shola', 'Shobowale', 'Ilorin', 'sholex@gmail.com', 8173764727, 0, 'Uploaded'),
(2, 'John', 'Doe', 'Ibadan', 'john101@gmail.com', 23489847564, 0, 'Uploaded'),
(3, 'Mary', 'James', 'Kwara', 'jamesmary@gmail.com', 9037481638, 0, 'Uploaded'),
(4, 'Williams', 'Smith', 'America', 'william22@gmail.com', 8038475616, 0, 'Pending'),
(6, 'Bayo', 'Amusan', 'Lagos', 'bayo001@gmail.com', 9184873616, 0, 'Uploaded'),
(7, 'Ibrahim', 'Musa', 'kano', 'musaibolee@gmail.com', 816762311, 0, 'Pending'),
(8, 'you', 'me', 'gang', 'youme@gmail.com', 9038746552, 1, 'Pending');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
