-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 10:49 AM
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
  `ProfilePhoto` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserType`, `First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`, `ProfilePhoto`, `Password`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '1998-11-10', '1234567895', 'female', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'User', 'abcd', 'abcd', 'abcd@gmail.com', '2005-10-12', '1234567895', 'male', 'image/abc1profile.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(109, 'User', 'abc', 'abc', 'abc@gmail.com', '2022-07-07', '1234567895', 'female', 'image/abc2profile.png', '827ccb0eea8a706c4c34a16891f84e7b');

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
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
