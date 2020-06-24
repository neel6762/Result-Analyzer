-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 03:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `de`
--

-- --------------------------------------------------------

--
-- Table structure for table `computerengineering4`
--

CREATE TABLE `computerengineering4` (
  `College_id` int(3) NOT NULL,
  `enroll_no` bigint(12) DEFAULT NULL,
  `student_name` varchar(19) DEFAULT NULL,
  `Operating_System` varchar(2) DEFAULT NULL,
  `Computer_Networks` varchar(2) DEFAULT NULL,
  `CPlusPlus` varchar(2) DEFAULT NULL,
  `NSM` varchar(2) DEFAULT NULL,
  `Design_Engineering` varchar(2) DEFAULT NULL,
  `Result` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computerengineering4`
--

INSERT INTO `computerengineering4` (`College_id`, `enroll_no`, `student_name`, `Operating_System`, `Computer_Networks`, `CPlusPlus`, `NSM`, `Design_Engineering`, `Result`) VALUES
(124, 161240107001, 'Andrea Love', 'CC', 'AA', 'BC', 'AB', 'BB', 'Pass'),
(124, 161240107002, 'Denise Nguyen', 'CC', 'DD', 'FF', 'AA', 'AA', 'Fail'),
(124, 161240107003, 'Monique Owens', 'CC', 'FF', 'AA', 'BC', 'FF', 'Fail'),
(124, 161240107004, 'Ashley Hudson', 'CC', 'DD', 'FF', 'AB', 'AB', 'Fail'),
(124, 161240107005, 'Sara Smith', 'AB', 'CC', 'AB', 'BC', 'BB', 'Pass'),
(124, 161240107006, 'Michael Johnson', 'AA', 'AB', 'AA', 'BB', 'BC', 'Pass'),
(124, 161240107007, 'Karen Brown', 'BC', 'CC', 'AB', 'BC', 'AA', 'Pass'),
(124, 161240107008, 'Darryl Leon', 'CC', 'AA', 'FF', 'DD', 'AA', 'Fail'),
(124, 161240107009, 'Christopher Butler', 'DD', 'BC', 'FF', 'DD', 'DD', 'Fail'),
(124, 161240107010, 'Billy Pittman', 'BB', 'BC', 'BC', 'AA', 'BC', 'Pass'),
(124, 161240107011, 'Beth Powers', 'CC', 'AB', 'AA', 'CC', 'AB', 'Pass'),
(124, 161240107012, 'Joseph Watts', 'FF', 'DD', 'BC', 'CC', 'CC', 'Fail'),
(124, 161240107013, 'Erica Armstrong', 'AB', 'BC', 'DD', 'FF', 'BB', 'Fail'),
(124, 161240107014, 'Kelly Cohen', 'AB', 'BC', 'AB', 'BC', 'AA', 'Pass'),
(124, 161240107015, 'Jessica Roberts', 'FF', 'AB', 'BC', 'FF', 'BC', 'Fail'),
(124, 161240107016, 'Eugene Flynn', 'CC', 'BB', 'AB', 'DD', 'DD', 'Pass'),
(124, 161240107017, 'Meghan Stephens', 'FF', 'FF', 'AB', 'BC', 'CC', 'Fail'),
(124, 161240107018, 'Ashley Drake', 'AB', 'AB', 'BC', 'BC', 'AA', 'Pass'),
(124, 161240107019, 'James Blake', 'AA', 'DD', 'AB', 'AA', 'BB', 'Pass'),
(124, 161240107020, 'Jessica Hughes', 'DD', 'BC', 'AB', 'DD', 'BB', 'Pass'),
(124, 161240107021, 'Marie Huerta', 'CC', 'AB', 'CC', 'FF', 'AA', 'Fail'),
(124, 161240107022, 'Wayne Davis', 'BC', 'BC', 'AA', 'FF', 'BB', 'Fail'),
(124, 161240107023, 'Tracy Schroeder', 'BB', 'AA', 'BC', 'AA', 'CC', 'Pass'),
(124, 161240107024, 'Jacqueline Branch', 'BB', 'AB', 'AB', 'DD', 'CC', 'Pass'),
(124, 161240107025, 'Stephen Moss', 'DD', 'DD', 'BC', 'DD', 'AA', 'Pass'),
(124, 161240107026, 'Julie Sloan', 'DD', 'BB', 'CC', 'BB', 'CC', 'Pass'),
(124, 161240107027, 'James Thomas', 'AA', 'BB', 'BC', 'BB', 'CC', 'Pass'),
(124, 161240107028, 'Michelle Romero', 'AA', 'FF', 'BB', 'DD', 'AB', 'Fail'),
(124, 161240107029, 'Michael Zimmerman', 'FF', 'CC', 'CC', 'CC', 'AB', 'Fail'),
(124, 161240107030, 'Mckenzie Evans', 'AA', 'BB', 'BC', 'AA', 'BC', 'Pass'),
(11, 160110107001, 'Joshua Long', 'DD', 'AB', 'DD', 'BB', 'FF', 'Fail'),
(11, 160110107002, 'Suzanne Morris', 'AB', 'AA', 'FF', 'FF', 'FF', 'Fail'),
(11, 160110107003, 'Lisa Jones', 'CC', 'AA', 'AA', 'DD', 'DD', 'Pass'),
(11, 160110107004, 'John Good', 'BB', 'BB', 'CC', 'AA', 'DD', 'Pass'),
(11, 160110107005, 'Carrie Brewer', 'BC', 'AB', 'AA', 'AA', 'CC', 'Pass'),
(11, 160110107006, 'Alan Mills', 'AA', 'CC', 'AB', 'AA', 'AB', 'Pass'),
(11, 160110107007, 'Anthony Mccann', 'DD', 'BB', 'CC', 'FF', 'BC', 'Fail'),
(11, 160110107008, 'Michael Bailey', 'CC', 'CC', 'AA', 'AA', 'FF', 'Fail'),
(11, 160110107009, 'Ronald Lawson', 'DD', 'FF', 'BB', 'BB', 'CC', 'Fail'),
(11, 160110107010, 'James Gutierrez', 'DD', 'BC', 'BC', 'AA', 'AB', 'Pass'),
(11, 160110107011, 'Jessica Macias', 'AB', 'AB', 'BC', 'BC', 'BB', 'Pass'),
(11, 160110107012, 'Brianna Miller', 'CC', 'DD', 'AB', 'AB', 'BC', 'Pass'),
(11, 160110107013, 'Randy Juarez', 'BC', 'BC', 'FF', 'BB', 'DD', 'Fail'),
(11, 160110107014, 'Jamie Sims', 'FF', 'DD', 'CC', 'CC', 'AA', 'Fail'),
(11, 160110107015, 'William Fitzgerald', 'AA', 'BB', 'CC', 'AB', 'AA', 'Pass'),
(11, 160110107016, 'Brandy Ashley', 'FF', 'BB', 'BB', 'CC', 'AA', 'Fail'),
(11, 160110107017, 'Antonio Jacobs', 'FF', 'BB', 'CC', 'DD', 'DD', 'Fail'),
(11, 160110107018, 'Sean Mcdonald', 'DD', 'BC', 'BC', 'DD', 'FF', 'Fail'),
(11, 160110107019, 'Paul West', 'BC', 'AB', 'CC', 'BB', 'AA', 'Pass'),
(11, 160110107020, 'Suzanne Miller', 'FF', 'BB', 'DD', 'CC', 'DD', 'Fail'),
(11, 160110107021, 'James Boyd', 'BB', 'BB', 'BC', 'AB', 'DD', 'Pass'),
(11, 160110107022, 'Elizabeth Vance', 'CC', 'AA', 'DD', 'CC', 'AB', 'Pass'),
(11, 160110107023, 'Mary Villa', 'CC', 'BC', 'CC', 'AB', 'BC', 'Pass'),
(11, 160110107024, 'Elizabeth Underwood', 'DD', 'DD', 'BC', 'FF', 'BB', 'Fail'),
(11, 160110107025, 'James Dyer', 'DD', 'AB', 'CC', 'FF', 'BB', 'Fail'),
(11, 160110107026, 'Joshua Bush', 'BC', 'AA', 'AB', 'BC', 'DD', 'Pass'),
(11, 160110107027, 'David Summers', 'DD', 'FF', 'AB', 'CC', 'AA', 'Fail'),
(11, 160110107028, 'Kevin Hogan Jr.', 'AB', 'CC', 'DD', 'CC', 'CC', 'Pass'),
(11, 160110107029, 'William Garcia', 'DD', 'AA', 'BB', 'FF', 'BB', 'Fail'),
(11, 160110107030, 'Deanna Huber', 'DD', 'FF', 'AA', 'AA', 'BC', 'Fail');

-- --------------------------------------------------------

--
-- Table structure for table `informationtechnology4`
--

CREATE TABLE `informationtechnology4` (
  `College_id` int(3) NOT NULL,
  `enroll_no` bigint(12) DEFAULT NULL,
  `student_name` varchar(19) DEFAULT NULL,
  `Operating_System` varchar(2) DEFAULT NULL,
  `Computer_Networks` varchar(2) DEFAULT NULL,
  `CPlusPlus` varchar(2) DEFAULT NULL,
  `NSM` varchar(2) DEFAULT NULL,
  `Design_Engineering` varchar(2) DEFAULT NULL,
  `Result` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informationtechnology4`
--

INSERT INTO `informationtechnology4` (`College_id`, `enroll_no`, `student_name`, `Operating_System`, `Computer_Networks`, `CPlusPlus`, `NSM`, `Design_Engineering`, `Result`) VALUES
(124, 161240116001, 'Linda Ruiz', 'FF', 'AB', 'CC', 'AB', 'BB', 'Fail'),
(124, 161240116002, 'Jessica Turner', 'AB', 'AB', 'AB', 'DD', 'FF', 'Fail'),
(124, 161240116003, 'Monica Howe', 'BB', 'AB', 'BC', 'AA', 'BC', 'Pass'),
(124, 161240116004, 'Diana Maxwell', 'FF', 'DD', 'FF', 'CC', 'FF', 'Fail'),
(124, 161240116005, 'Daniel Mccarthy', 'AA', 'FF', 'BB', 'AA', 'DD', 'Fail'),
(124, 161240116006, 'Derek Gonzalez', 'BC', 'FF', 'AB', 'BB', 'AA', 'Fail'),
(124, 161240116007, 'Heather Allison', 'CC', 'DD', 'BB', 'DD', 'AA', 'Pass'),
(124, 161240116008, 'Christopher Flynn', 'FF', 'BB', 'AB', 'AA', 'AB', 'Fail'),
(124, 161240116009, 'Timothy Reeves', 'AA', 'AB', 'FF', 'AA', 'CC', 'Fail'),
(124, 161240116010, 'James Hampton', 'DD', 'DD', 'AA', 'BC', 'CC', 'Pass'),
(124, 161240116011, 'Natalie Hardy', 'BC', 'BC', 'AA', 'AA', 'BB', 'Pass'),
(124, 161240116012, 'Wanda Gomez', 'AB', 'BB', 'CC', 'BC', 'FF', 'Fail'),
(124, 161240116013, 'Sarah Bruce', 'DD', 'BC', 'AB', 'FF', 'BC', 'Fail'),
(124, 161240116014, 'Kristine Garcia', 'BC', 'CC', 'BB', 'DD', 'DD', 'Pass'),
(124, 161240116015, 'Bailey Fitzpatrick', 'AB', 'CC', 'BC', 'AA', 'FF', 'Fail'),
(124, 161240116016, 'Samuel Rich', 'FF', 'FF', 'AB', 'AA', 'BC', 'Fail'),
(124, 161240116017, 'Sharon Davis', 'BB', 'AB', 'CC', 'CC', 'AA', 'Pass'),
(124, 161240116018, 'Jill Simpson', 'FF', 'CC', 'BC', 'DD', 'BB', 'Fail'),
(124, 161240116019, 'Brian Love', 'CC', 'AA', 'BB', 'AA', 'BC', 'Pass'),
(124, 161240116020, 'Jasmin Ware', 'BB', 'AB', 'BC', 'FF', 'AB', 'Fail'),
(124, 161240116021, 'Lauren Powell', 'AA', 'AB', 'CC', 'BB', 'BC', 'Pass'),
(124, 161240116022, 'Briana Simmons', 'DD', 'AA', 'BB', 'AA', 'BB', 'Pass'),
(124, 161240116023, 'Jennifer Shaffer MD', 'AA', 'CC', 'AA', 'DD', 'DD', 'Pass'),
(124, 161240116024, 'Debra Blackburn', 'AA', 'BC', 'AA', 'BB', 'AB', 'Pass'),
(124, 161240116025, 'Todd Collins', 'DD', 'DD', 'CC', 'AA', 'BB', 'Pass'),
(124, 161240116026, 'Ronald Woods', 'AA', 'BB', 'CC', 'AA', 'BB', 'Pass'),
(124, 161240116027, 'Mikayla Rodriguez', 'FF', 'BB', 'BC', 'DD', 'CC', 'Fail'),
(124, 161240116028, 'Courtney Smith PhD', 'AA', 'CC', 'DD', 'DD', 'AB', 'Pass'),
(124, 161240116029, 'Justin Schneider', 'BB', 'DD', 'BC', 'CC', 'AA', 'Pass'),
(124, 161240116030, 'Angela Farley', 'FF', 'BB', 'BB', 'AB', 'DD', 'Fail'),
(11, 160110116001, 'Daniel Turner', 'BB', 'CC', 'AB', 'BB', 'BB', 'Pass'),
(11, 160110116002, 'Elizabeth Parker', 'BB', 'AA', 'FF', 'AB', 'DD', 'Fail'),
(11, 160110116003, 'Amanda Contreras', 'CC', 'DD', 'CC', 'AB', 'BC', 'Pass'),
(11, 160110116004, 'Robert Castro', 'BB', 'DD', 'BB', 'BB', 'BC', 'Pass'),
(11, 160110116005, 'Austin Humphrey', 'DD', 'BC', 'AA', 'FF', 'BB', 'Fail'),
(11, 160110116006, 'Nicole Rowe', 'CC', 'FF', 'BB', 'BB', 'AA', 'Fail'),
(11, 160110116007, 'Jasmine Lindsey', 'DD', 'AB', 'FF', 'CC', 'BB', 'Fail'),
(11, 160110116008, 'Michael Blair', 'AB', 'AB', 'DD', 'AA', 'AA', 'Pass'),
(11, 160110116009, 'David Owens', 'CC', 'CC', 'BC', 'AB', 'BB', 'Pass'),
(11, 160110116010, 'Amanda Carter', 'BC', 'BC', 'FF', 'AB', 'FF', 'Fail'),
(11, 160110116011, 'Jordan Gomez', 'AB', 'DD', 'AA', 'AB', 'FF', 'Fail'),
(11, 160110116012, 'Margaret Gardner', 'AB', 'AB', 'DD', 'BB', 'DD', 'Pass'),
(11, 160110116013, 'Amanda Gonzales', 'AB', 'DD', 'FF', 'AB', 'DD', 'Fail'),
(11, 160110116014, 'Taylor Snow', 'FF', 'BB', 'BC', 'BB', 'DD', 'Fail'),
(11, 160110116015, 'Anthony Bell', 'DD', 'FF', 'AB', 'BB', 'AB', 'Fail'),
(11, 160110116016, 'Hannah Owens', 'AB', 'DD', 'BC', 'AA', 'DD', 'Pass'),
(11, 160110116017, 'Cynthia Macdonald', 'FF', 'BB', 'DD', 'AA', 'DD', 'Fail'),
(11, 160110116018, 'Jacqueline Watson', 'CC', 'BC', 'AB', 'DD', 'CC', 'Pass'),
(11, 160110116019, 'David Salas', 'CC', 'AB', 'AA', 'CC', 'AB', 'Pass'),
(11, 160110116020, 'Chris Gonzalez', 'AA', 'AA', 'AA', 'BC', 'CC', 'Pass'),
(11, 160110116021, 'Christina Lewis', 'DD', 'BC', 'FF', 'BB', 'CC', 'Fail'),
(11, 160110116022, 'Julia Price', 'FF', 'AA', 'AB', 'FF', 'AA', 'Fail'),
(11, 160110116023, 'Olivia Collins', 'AB', 'BB', 'DD', 'FF', 'AA', 'Fail'),
(11, 160110116024, 'Adam Chandler', 'DD', 'DD', 'BC', 'CC', 'BC', 'Pass'),
(11, 160110116025, 'Kevin Pittman', 'CC', 'FF', 'AB', 'CC', 'BC', 'Fail'),
(11, 160110116026, 'Jose Peters', 'CC', 'AA', 'DD', 'DD', 'BC', 'Pass'),
(11, 160110116027, 'Amy Hansen', 'AB', 'BB', 'AB', 'BB', 'FF', 'Fail'),
(11, 160110116028, 'Juan York', 'DD', 'FF', 'AB', 'DD', 'BC', 'Fail'),
(11, 160110116029, 'Katie Vaughn', 'FF', 'AA', 'CC', 'FF', 'FF', 'Fail'),
(11, 160110116030, 'Katherine Kirk', 'DD', 'AA', 'AB', 'AB', 'DD', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `password` varchar(32) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `image` varchar(10) NOT NULL,
  `total_dept` int(2) NOT NULL,
  `dep1` varchar(32) NOT NULL,
  `dep2` varchar(32) NOT NULL,
  `dep3` varchar(32) NOT NULL,
  `dep4` varchar(32) NOT NULL,
  `dep5` varchar(32) NOT NULL,
  `dep6` varchar(32) NOT NULL,
  `et_year` varchar(4) NOT NULL,
  `principal` varchar(30) NOT NULL,
  `total_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `institute`, `image`, `total_dept`, `dep1`, `dep2`, `dep3`, `dep4`, `dep5`, `dep6`, `et_year`, `principal`, `total_students`) VALUES
(11, 'test', 'G H Patel College of Engineering', '011.png', 6, 'Information Technology', 'Computer Engineering', 'Civil Engineering', 'Mechanical Engineering', 'Electrical Engineering', 'Chemical Engineering', '1996', 'Dr ABC', 1500),
(101, 'test', 'BVM', '101.png', 3, 'Information Technology', 'Civil Engineering', 'Mechanical Engineering', '', '', '', '1998', 'Dr ABC', 400),
(122, 'test', 'ADIT', '122.png', 6, 'Information Technology', 'Copmuter Engineering', 'Civil Engineering', 'Electrical Engineering', 'Chemical Engineering', 'Mechanical Engineering', '1998', 'Dr ABC', 900),
(124, 'test', 'Sardar Patel College Of Engineering', '124.png', 5, 'Information Technology', 'Computer Engineering', 'Civil Engineering', 'Mechanical Engineering', 'Electrical Engineering', '', '2014', 'Dr Bhavesh Shah', 555),
(999, 'admin999', '', '', 0, '', '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
