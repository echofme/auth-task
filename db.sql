-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2017 at 06:47 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) DEFAULT NULL,
  `user_ip` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `birth` varchar(10) NOT NULL,
  `reg_date` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `hash`, `user_ip`, `name`, `birth`, `reg_date`) VALUES
(1, 'sadf', 'a26fd35a4783babd58cc3dc61ad75753', 'NULL', 2130706433, 'sf', '02/01/2017', 1486831755),
(25, 'sdfs1a', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/02/2017', 1486913794),
(24, 'sdfs1', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/02/2017', 1486913757),
(23, 'sdfs', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/02/2017', 1486913513),
(22, 'qqq', '3dad9cbf9baaa0360c0f2ba372d25716', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486912309),
(21, 'sdf', '2ffeba6da5a322ec3bd818827a086609', 'c802ba33a0142684bca45fbb1afa6712', 2130706433, 'sdf', '02/01/2017', 1486912014),
(20, 'qrqr', 'f5956ba1c668cce982a8dfc45a77c3a6', '1e0f73e55bc408a701e9c56aa5bdb1ab', 2130706433, 'qrqr', '02/01/2017', 1486899779),
(19, 'aff', 'e187a7b732812718bf058f1182746fb5', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486899756),
(18, '123', 'd9b1d7db4cd6e70935368a1efb10e377', '7778bd99f319b21c77d6d8800dc17812', 2130706433, '1233', '02/03/2017', 1486899734),
(16, 'ffa', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '', 1486834716),
(17, 'echo', 'd9b1d7db4cd6e70935368a1efb10e377', 'fb04d116a4be11981a718870ab7d3979', 2130706433, 'Ильдар', '02/01/2017', 1486845312),
(26, 'sdfs1a1', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/02/2017', 1486913814),
(27, 'sdf2', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486914146),
(28, 'sdf22', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486914183),
(29, 'sdf221', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486914206),
(30, 'sdf2211', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486914226),
(31, 'qqe', '3dad9cbf9baaa0360c0f2ba372d25716', 'NULL', 2130706433, 'sdf', '02/09/2017', 1486914270),
(32, 'sdf22a', '2ffeba6da5a322ec3bd818827a086609', 'NULL', 2130706433, 'sdf', '02/01/2017', 1486914291);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
