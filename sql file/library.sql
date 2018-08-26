-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 11:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Admin` varchar(120) DEFAULT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin`, `Password`) VALUES
(1, 'mj', '1'),
(2, 'manish', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `id` int(11) NOT NULL,
  `BookName` varchar(255) DEFAULT NULL,
  `ISBNNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`id`, `BookName`, `ISBNNumber`) VALUES
(1, 'Physics', 1111),
(2, 'Physics2', 1112),
(3, 'Physics 3', 1113),
(4, 'Web Technology', 2222),
(5, 'Chemistry', 3333),
(6, 'Maths\r\n                                                 ', 4444),
(7, 'Computer', 5555);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(120) NOT NULL,
  `MobileNumber` varchar(100) NOT NULL,
  `EmailId` varchar(130) NOT NULL,
  `Password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `MobileNumber`, `EmailId`, `Password`) VALUES
(1, '$username', '$mobileno', '$email_id', '$password'),
(2, '$username', '$mobileno', '$email_id', '$password'),
(3, '$username', '$mobileno', '$email_id', '$password'),
(4, 'we', '32', 'q@gmail.com', '1'),
(5, 'mj', '1234567', 'mj@gmail.com', '1'),
(6, 'qwer', '1234567', 'qwqw@we.hg', '123'),
(12, 'username', '1234', 'mj@gmail.com', 'password'),
(123, 'wq', '12', 'mj@gmail.com', '1'),
(2323, '32', '32', '23@32', '23'),
(151328, 'Ajay Rana', '1234567890', 'ajayrana7602@gmail.com', 'ajayrana'),
(151340, 'Manish', '8628829553', 'manishthakur413@gmail.com', '1234'),
(151344, 'Nitish', '8894137116', 'nitishtiwari505@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBNNumber` (`ISBNNumber`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
