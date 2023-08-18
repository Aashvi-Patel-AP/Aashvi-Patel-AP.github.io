-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email_Id` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_No` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserType`, `First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`, `Password`) VALUES
(1, 'Admin', 'Aashvi', 'Patel', 'aashvipatel56@gmail.com', '2001-11-28', '9104961332', 'female', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Admin', 'Alpeshkumar', 'Patel', 'ALPESH.AA92@GMAIL.COM', '1975-09-25', '9925310328', 'male', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'User', 'Aashvi', 'Patel', 'ALPESH@GMAIL.com', '2000-02-12', '9104961332', 'female', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'User', 'khush', 'Patel', 'khush@gmail.com', '2005-10-12', '9428417325', 'male', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'User', 'Aashvi', 'abc', 'ALPESH@GMAIL.COM', '2022-07-05', '9925310328', 'female', '827ccb0eea8a706c4c34a16891f84e7b'),
(21, 'User', 'Khush', 'Patel', 'khush@GMAIL.COM', '2022-07-04', '9925310328', 'male', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
