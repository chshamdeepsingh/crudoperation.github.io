-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project01`
--

-- --------------------------------------------------------

--
-- Table structure for table `supers`
--

CREATE TABLE `supers` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `alias` text NOT NULL,
  `active` text NOT NULL,
  `hero` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supers`
--

INSERT INTO `supers` (`id`, `first_name`, `last_name`, `date_of_birth`, `alias`, `active`, `hero`, `created_at`, `updated_at`) VALUES
(1, 'Sounak', 'Chakraborty', '0000-00-00', 'ddbfhhhb', 'gefguwg', 'wr;hgbeb', '2021-04-16 21:20:53', '2021-04-16 21:20:53'),
(3, 'Sounak', 'Khullar', '25/02/2021', 'wegfw', 'wgwg', 'a', '2021-04-16 21:31:19', '2021-04-16 21:31:19'),
(6, 'Karan', 'Khullar', ' 25/02/202', ' wegfw', 'wgwg', 'wgeweg', '2021-04-16 21:49:18', '2021-04-16 21:49:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supers`
--
ALTER TABLE `supers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supers`
--
ALTER TABLE `supers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
