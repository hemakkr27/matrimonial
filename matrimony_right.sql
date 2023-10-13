-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `email`, `age`, `height`, `sex`, `religion`, `caste`, `subcaste`, `district`, `state`, `country`, `maritalstatus`, `profilecreatedby`, `education`, `education_sub`, `firstname`, `lastname`, `body_type`, `physical_status`, `drink`, `mothertounge`, `colour`, `weight`, `blood_group`, `diet`, `smoke`, `dateofbirth`, `occupation`, `occupation_descr`, `annual_income`, `fathers_occupation`, `mothers_occupation`, `no_bro`, `no_sis`, `aboutme`, `profilecreationdate`) VALUES
(111, 0, 'jhgasdasd@hjsadkl.cop', '27', 0, 'Male', 'Hindu', 'Thiyya', 'sub cast1', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'Primary', '', 'test', 'testyhtjsdf', 'Slim', 'No Problem', 'Sometime', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'Sometime', '1996-01-12', 'dgdsgsdf', 'gdsg', '4654456', 'erfdgdsg', 'dsgsdgdsfgdsfgdfg', 1, 1, 'dfgdsgdsfg', '2016-02-27'),
(112, 7, 'dadasd@asd.com', '', 0, 'Male', 'Not Applicable', 'Roman Cathaolic', 'Not Applicable', '', '', 'Not Applic', 'Single', 'Self', 'Primary', '', 'kjdhkdsjfghk', 'QKJHKJFHSDFJKH', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 0, 'O +ve', 'Veg', 'No', '0000-00-00', '', '', '', '', '', 1, 1, '', '2016-02-27'),
(113, 12, 'asdasdasd@asdfsadf.com', '18', 0, 'Male', 'Hindu', 'Thiyya', 'sub cast1', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'PG', 'dsadasd', 'Aswin', 'Kuttappi', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(114, 13, 'asdasdasd@asdfsadf.com', '18', 0, 'Female', 'Hindu', 'Thiyya', 'sub cast1', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'PG', 'dsadasd', 'Reshma', 'Reshma', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(115, 14, 'asdasdasd@asdfsadf.com', '18', 0, 'Male', 'Hindu', 'Thiyya', 'sub cast1', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'PG', 'dsadasd', 'Rahul', 'Rahul', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(116, 15, 'hema@gmail.com', '14', 54, 'Male', 'Hindu', 'Roman Cathaolic', 'sub cast1', 'Trivandrum', 'Kerala', 'India', 'Single', 'Self', 'Primary', 'df', 'hema', 'hema', 'Slim', 'No Problem', 'No', 'Hindi', 'Dark', 6, 'O +ve', 'Veg', 'No', '1990-05-11', 'it', 'ird', '3 lekf', 'gfgf', 'dsds', 1, 1, 'profile', '2023-09-28'),
(117, 16, 'priya20@gmail.com', '66', 0, 'Female', 'Christian', 'Mappila', 'sub cast1', '', 'Karnataka', 'UAE', 'Married', 'Other', 'Primary', 'cv', 'priya20', 'priya20', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 50, 'O +ve', 'Veg', 'No', '1986-01-15', 'cvvc', 'vvd', '3 lekh', 'cvcvgdg', 'bff', 1, 1, 'gfgfg', '2023-09-29'),
(118, 17, 'nickkr27@gmail.com', '18', 54, 'Female', 'Hindu', 'Roman Cathaolic', 'Not Applicable', 'Kollam', 'Kerala', 'India', 'Single', 'Self', 'Primary', 'it field', 'myname', 'myname', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 60, 'O +ve', 'Veg', 'No', '1989-05-12', 'bussiness', 'bus', '4 lekh', 'bussi', 'home', 1, 1, 'my name ', '2023-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `partnerprefs`
--

CREATE TABLE `partnerprefs` (
  `id` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partnerprefs`
--

INSERT INTO `partnerprefs` (`id`, `custId`, `agemin`, `agemax`, `maritalstatus`, `complexion`, `height`, `diet`, `religion`, `caste`, `subcaste`, `mothertounge`, `education`, `occupation`, `country`, `descr`) VALUES
(1, 6, '18', 30, 'Single', '', 180, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', '', 'Primary', '', 'Not Applicable', 'Beautiful , Super, just for fun'),
(2, 7, '18', 40, 'Single', '', 150, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', '', 'Primary', '', 'Not Applicable', ''),
(3, 12, '18', 40, 'Single', '', 150, 'Veg', 'Hindu', 'Thiyya', '', '', 'PG', 'sadasdasd', 'Hindu', ''),
(4, 13, '18', 40, 'Single', '', 0, 'Veg', 'Hindu', 'Thiyya', '', '', 'PG', 'das', 'Hindu', ''),
(5, 14, '18', 50, 'Single', '', 0, 'Veg', 'Hindu', 'Thiyya', '', '', 'PG', 'das', 'Hindu', 'asdasdas da asfd afsdfasdf asjdf akjsdf kjafsdks d'),
(6, 15, '20', 25, 'Married', '', 53, 'Non Veg', 'Sikh', 'Penthecost', '', '', '+2', 'sport', 'Christian', 'honest'),
(7, 16, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(8, 17, '20', 30, 'Single', '', 53, 'Veg', 'Hindu', 'Roman Cathaolic', '', '', 'Primary', 'bussiness', 'Hindu', 'honest');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(25) NOT NULL,
  `pic2` varchar(40) NOT NULL,
  `pic3` varchar(40) NOT NULL,
  `pic4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `cust_id`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES
(27, 6, 'img.jpg', 'picture.jpg', 'picture-2.jpg', 'user.png'),
(28, 7, 'banner_img_3@2x.png', 'article_img_2.jpg', 'banner_img_5@2x.png', 'article_img_1.jpg'),
(29, 12, 'article_img_1.jpg', 'article_img_2.jpg', 'banner_img_2.png', 'banner_img_2.png'),
(30, 13, 'team-13.jpg', 'thumb-intro.jpg', 'avatar-1.jpg', '1.jpg'),
(31, 14, '1.jpg', 'img-1.jpg', 'avatar-1.jpg', 'team-13.jpg'),
(32, 15, '2.jpg', 'a7.jpg', '12.jpg', '7.jpg'),
(33, 17, '4.jpg', 's2.jpg', 'p5.jpg', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `dateofbirth`, `gender`, `userlevel`) VALUES
(1, 0, 'admin', 'admin', 'admin@nowhere.com', '2016-02-17', 'male', 1),
(6, 0, 'test', 'test', 'test@test.com', '2016-02-11', 'femal', 0),
(7, 0, 'shobi', 'shobi', 'jdshfkjsh@nowhere.com', '2016-02-25', 'male', 0),
(8, 0, 'Name', '', 'E-Mail', '2016-02-21', '', 0),
(9, 0, 'Raju', 'raju', 'raju@nowhere.com', '2016-02-17', 'male', 0),
(10, 0, 'kuttappi', 'kuttappi', 'kuttapi@kuttappi.com', '2016-02-19', '', 0),
(11, 0, 'fdsdte', 'qe41234234', 'twetwet@sdfds.com', '2016-02-18', '', 0),
(12, 0, 'aswin', 'aswin', 'aswin@nowhere.com', '1997-01-20', 'male', 0),
(13, 0, 'reshma', 'reshma', 'asdasdasd@asdfsadf.com', '1998-02-14', 'femal', 0),
(14, 0, 'rahul', 'rahul', 'asdasdasd@asdfsadf.com', '1998-02-14', 'male', 0),
(15, 0, 'hema', '1234', 'hemakkr27@gmail.com', '1990-05-11', 'femal', 0),
(16, 0, 'priya', 'priya', 'priya@gmail.com', '1993-01-15', 'femal', 0),
(17, 0, 'myname', '123', 'nickkr27@gmail.com', '1990-05-11', 'male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custId` (`custId`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
