-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:34 AM
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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `links`) VALUES
(2, 'ana', 'male', 'nill', '10'),
(3, 'aly', 'male', 'nill', '11'),
(13, 'qasim', 'female', 'nill', '14'),
(15, 'not test', 'female', 'nill', '23');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `disability` varchar(250) NOT NULL,
  `images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `gender`, `disability`, `images`) VALUES
(3, '3', 'anay', 'nill', 'images8.jpg'),
(4, '4', 'mani', 'nill', 'download18.jpg'),
(5, '5', 'mano', 'nill', 'images12.jpg'),
(7, '7', 'asa', 'nill', 'download13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `found_children`
--

CREATE TABLE `found_children` (
  `child_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `disability_type` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `cnic` varchar(250) NOT NULL,
  `contact` int(250) NOT NULL,
  `last_seen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found_children`
--

INSERT INTO `found_children` (`child_name`, `gender`, `disability_type`, `age`, `cnic`, `contact`, `last_seen`) VALUES
('ali', 'male', 'nill', 24, '8989767867867', 2147483647, '4:00PM'),
('', '', '', 0, '', 0, ''),
('qaa', 'sss', 'nill', 24, '656767868786', 2147483647, '4:00PM'),
('', '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `missing_children`
--

CREATE TABLE `missing_children` (
  `child_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `disability_type` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `cnic` varchar(250) NOT NULL,
  `contact` int(250) NOT NULL,
  `last_seen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing_children`
--

INSERT INTO `missing_children` (`child_name`, `gender`, `disability_type`, `age`, `cnic`, `contact`, `last_seen`) VALUES
('ali', 'male', 'nill', 24, '67676677', 56565656, '4:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'ayesha', 'admin@example.com', '2222', ''),
(2, 'asma', 'abc@gmail.com', '8888', 'admin'),
(5, 'sara', 'admin@example.com', '888', ''),
(15, 'abc', 'jabeensehrish123@gmail.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('user@gmail.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
