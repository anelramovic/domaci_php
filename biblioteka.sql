-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 12:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author`, `title`, `pages`, `available`) VALUES
(28, 'ASDad', 'asdasd', 12, 1),
(29, 'mrsada', 'adasd', 212323, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(3, 'Anel', 'Ramovic', 'ramovicanel', 'anel.ramovics1a@gmail.com', 'Kompjuter123'),
(5, 'Anel', 'Ramovic', 'sucoramovic', 'anel.ramovis1a@gmail.com', 'asdadasdadasd'),
(6, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(7, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(8, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(9, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(11, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(12, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(13, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(14, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(15, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(16, 'Anel', 'Ramovic', 'sucoramovic', 'anelramovic4@gmail.com', 'sadadadsadsadsa'),
(17, 'Anel', 'Ramovic', 'anelramovic', 'ramovic225@gmail.com', 'adsadasdadadds'),
(20, 'Anel', 'Ramovic', 'anelramovic', 'ramovic225@gmail.com', 'adsadasdadadds'),
(21, 'Anel', 'Ramovic', 'anelramovic', 'ramovic225@gmail.com', 'adsadasdadadds'),
(22, 'Anel', 'Ramovic', 'anelramovic', 'ramovic225@gmail.com', 'adsadasdadadds'),
(23, 'Anel', 'Ramovic', 'anelramovic', 'ramovic225@gmail.com', 'adsadasdadadds'),
(24, 'milos', 'milosevic', 'milosmilosevic', 'losmi@gmail.com', 'milos123'),
(25, 'milos', 'milosevic', 'milosmilosevic', 'losmi@gmail.com', 'milos123'),
(26, 'milos', 'milosevic', 'milosmilosevic', 'losmi@gmail.com', 'milos123'),
(27, 'marko', 'markovic', 'sucoramovic', 'anel.ramovis1a@gmail.com', 'asdaaddaasd'),
(28, 'markoni', 'Ramovic', 'ramovic.anel.s4a.1036', 'anelramovic4@gmail.com', 'asdadasd'),
(29, 'markoni', 'Ramovic', 'ramovic.anel.s4a.1036', 'anelramovic4@gmail.com', 'asdadasd'),
(30, 'Anel', 'Ramovic', 'asdadsadads', 'ramovic225@gmail.com', 'asdadadasdadsa'),
(31, 'asdada', 'adsasd', 'asdasad', 'anel.ramovis1a@gmail.com', 'asdasdads'),
(32, 'adsasd', 'asdada', 'asdasad', 'anel.ramovis1a@gmail.com', 'asdasdads'),
(33, 'asdada', 'adsasd', 'asdasad', 'anel.ramovis1a@gmail.com', 'asdasdads'),
(34, 'asdada', 'adsasd', 'asdasad', 'anel.ramovis1a@gmail.com', 'asdasdads'),
(35, 'Anel', 'Ramovic', 'anel.ramovic', 'anel.ramovis1a@gmail.com', 'kompjuter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
