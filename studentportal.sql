-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 10:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(50) NOT NULL,
  `course_tittle` varchar(50) NOT NULL,
  `credits` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_tittle`, `credits`) VALUES
('CSE 101', 'Computer and programming concepts', 3),
('CSE102', 'Computer and programming concepts lab', 1.5),
('MAT 101', 'Differential and Integral Calculus', 3),
('ENG 101', 'English Languge-1', 3),
('PHY 101', 'Physics', 3),
('MAT 111', 'CO-Ordinate Geometry and Vector Calculus', 3),
('ENG 111', 'English Languege-2', 3),
('EEE 101', 'Electrical Technology', 3),
('EEE 102', 'ELectrical Technology Lab', 1.5),
('CSE111', 'Structure programming  language', 3),
('cse 123', 'digital logic', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dep_routine`
--

CREATE TABLE `dep_routine` (
  `Department` varchar(50) NOT NULL,
  `Intake` varchar(50) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `Day` varchar(50) NOT NULL,
  `08:30 to 09:30` varchar(50) NOT NULL,
  `09:35 to 10:35` varchar(50) NOT NULL,
  `10:40 to 11:40` varchar(50) NOT NULL,
  `11:45 to 12:45` varchar(50) NOT NULL,
  `01:15 to 02:15` varchar(50) NOT NULL,
  `02:20 to 03:20` varchar(50) NOT NULL,
  `03:25 to 04:25` varchar(50) NOT NULL,
  `04:30 to 05:30` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_routine`
--

INSERT INTO `dep_routine` (`Department`, `Intake`, `Section`, `Day`, `08:30 to 09:30`, `09:35 to 10:35`, `10:40 to 11:40`, `11:45 to 12:45`, `01:15 to 02:15`, `02:20 to 03:20`, `03:25 to 04:25`, `04:30 to 05:30`) VALUES
('cse', '29', '4', 'sat', 'cse457', '', '', '', '', '', '', ''),
('CSE', '29', '4', 'Sat', '    ', '    ', '    ', '    ', '    ', '    ', '    ', '    '),
('Dept', '', '1', 'Sat', '    ', '    ', '    ', '    ', '    ', '    ', '    ', '    '),
('Dept', '', '1', 'Sat', '    ', '    ', '    ', '    ', '    ', '    ', '    ', '    ');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `intake` int(10) NOT NULL,
  `section` int(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `bloodgroup` varchar(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `id`, `intake`, `section`, `adress`, `phone`, `gender`, `bloodgroup`, `username`, `password`, `position`) VALUES
('S.M. AKASH', '1415120125', 29, 3, 'narayangonj', 1674985120, 'male', 'b+', 'S.M. AKASH', '1234', 'admin'),
('Moin akter tanbir', '14152103128', 29, 3, 'mirpur', 1937121613, 'male', 'ab+', 'Moin akter tanbir', '1234', 'user'),
('Ayasha roshni ananna', '14152103114', 29, 3, 'mirpur', 160838978, 'female', 'a+', 'Ayasha roshni ananna', '12345', 'user'),
('Nawshin zamil wahra', '14152103129', 29, 3, 'mirpur', 1937121613, 'female', 'ab+', 'whara', '1234', 'admin'),
('Sanjida tasnim munia', '14152103119', 29, 3, 'taltola', 1637121613, 'female', 'b+', 'sanjida tasmin', '1234', 'user'),
('Marjia akter mita', '14152103112', 29, 3, 'mirpur', 1608389789, 'female', 'a+', 'Marjia akter', '12345', 'user'),
('Arafat khan', '14152103105', 29, 3, 'Mirpur', 1637121613, 'male', 'b+', 'Arafat Khan', '1234', 'user'),
('shifatullah', '123456789', 25, 1, 'mirpur', 1913456789, 'male', 'ab-', 'shefuda', '123', 'user'),
('shifatullah', '123456789', 25, 1, 'mirpur', 1913456789, 'male', 'ab-', 'shefuda', '123', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
