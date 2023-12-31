-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 07:28 AM
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
(119, 19, 'hema@gmail.com', 'jj', 60, 'Female', 'Hindu', 'Latin Catholic', '', 'Trivandrum', 'Kerala', 'India', 'Single', 'Self', 'Primary', 'it', 'hema', 'hema', 'Fat', 'No Problem', '', 'Malayalam', 'Dark', 60, 'O +ve', 'Veg', '', '1991-10-29', 'kk', 'jhhjjh', '5 lekh', 'lklkl', 'kjkjj', 1, 1, 'jklkko', '2023-10-01'),
(120, 20, 'abhi@gmail.com', '16', 60, 'Male', 'Hindu', 'Latin Catholic', '', '', 'Taminadu', 'India', 'Married', 'Son/Daughter', 'Tenth level', 'jk', 'abhi123', 'abhi123', 'Slim', 'Blind', '', 'Hindi', 'Dark', 60, 'O +ve', 'Veg', '', '1988-09-13', '', 'jlj', '6 ljk', 'mkl', 'kjkjj', 1, 1, 'kllk lkl', '2023-10-02'),
(121, 21, 'neetu@gmail.com', '', 0, 'Male', 'Not Applicable', 'Roman Cathaolic', '', '', '', 'Not Applic', 'Single', 'Self', 'Primary', '', 'neetu', 'neetu', 'Slim', 'No Problem', '', 'Malayalam', 'Dark', 0, 'O +ve', 'Veg', '', '0000-00-00', '', '', '', '', '', 1, 1, '', '2023-10-03'),
(122, 22, 'newfrnd@gmail.com', '', 0, 'Male', 'Not Applicable', 'Roman Cathaolic', '', '', '', 'Not Applic', 'Single', 'Self', 'Primary', '', 'newfrnd', 'newfrnd', 'Slim', 'No Problem', '', 'Malayalam', 'Dark', 0, 'O +ve', 'Veg', '', '0000-00-00', '', '', '', '', '', 1, 1, '', '2023-10-03'),
(123, 23, 'rama@gmail.com', '', 54, 'Female', 'Not Applicable', 'Roman Cathaolic', '', 'Pathanamthitta', 'Karnataka', 'India', 'Single', 'Self', 'Primary', 'it field', 'rama', 'rama', 'Slim', 'No Problem', '', 'Malayalam', 'Dark', 60, 'O +ve', 'Veg', '', '1994-05-13', 'bussiness', 'bus', '4 lekh', 'bussi', 'home', 1, 1, 'rama mxlkf', '2023-10-03'),
(124, 30, 'satnam@gmail.com', '', 54, 'Female', 'Other', 'A', '', '', '', 'Not Applic', 'Married', 'Son/Daughter', 'Tenth level', 'it field', 'satnam', 'satnam', 'Slim', 'No Problem', '', 'Malayalam', 'Dark', 60, 'O +ve', 'Veg', '', '1998-03-19', 'Doctors Nurse', 'bus', '4 lekh', 'NGO Social Services', 'home', 1, 1, 'satnam profile', '2023-10-04');

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
(9, 19, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(10, 20, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(11, 21, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(12, 22, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(13, 23, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(14, 30, '20', 30, 'Single', '', 6, 'Veg', 'Hindu', 'Latin Catholic', '', 'Hindi', 'Primary', 'bussiness', 'India', 'honest');

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
(34, 19, '12.jpg', '6.jpg', 'a7.jpg', '9.jpg'),
(35, 20, '1.jpg', '3.jpg', '5.jpg', '15.jpg'),
(36, 23, '2.jpg', '', '', ''),
(37, 30, '1.jpg', '3.jpg', '5.jpg', '1.jpg');

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
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `code`, `status`, `userlevel`) VALUES
(1, 0, 'hema', 'hema', 'hemakkr27@gmail.com', 0, '', 1),
(6, 0, 'test', 'test', 'test@test.com', 0, '', 0),
(7, 0, 'shobi', 'shobi', 'jdshfkjsh@nowhere.com', 0, '', 0),
(8, 0, 'Name', '', 'E-Mail', 0, '', 0),
(9, 0, 'Raju', 'raju', 'raju@nowhere.com', 0, '', 0),
(10, 0, 'kuttappi', 'kuttappi', 'kuttapi@kuttappi.com', 0, '', 0),
(11, 0, 'fdsdte', 'qe41234234', 'twetwet@sdfds.com', 0, '', 0),
(12, 0, 'aswin', 'aswin', 'aswin@nowhere.com', 0, '', 0),
(13, 0, 'reshma', 'reshma', 'asdasdasd@asdfsadf.com', 0, '', 0),
(14, 0, 'rahul', 'rahul', 'asdasdasd@asdfsadf.com', 0, '', 0),
(18, 0, 'punit', 'punit', 'punit@gmail.com', 0, '', 0),
(19, 0, 'gungun', '$2y$10$cOyW4QHCGdNhWw1WSaFOZuORmLN6HYrQk', 'gungun@gmail.com', 0, '', 0),
(20, 0, 'abhi', 'abhi', 'abhi@gmail.com', 0, '', 0),
(21, 0, 'neetu', 'neetu', 'neetu@gmail.com', 0, '', 0),
(22, 0, 'newfrnd', 'newfrnd', 'newfrnd@gmail.com', 0, '', 0),
(23, 0, 'rama', '$2y$10$cnSJsEPzTU7xSZ4Ekj58MeSrvah57zpRx', 'rama@gmail.com', 0, '', 0),
(24, 0, 'poonam', 'poonam', 'poonam@gmail.com', 0, '', 0),
(25, 0, 'arpita', '$2y$10$6ElAAyItML/kajVA./xpfujBY9Al2wNKa', 'arpita@gmail.com', 0, '', 0),
(26, 0, 'ranu', '$2y$10$/R1vz9sseXsP7IOHTGgGZ.WlpwBWFwcIN', 'ranu@gmail.com', 0, '', 0),
(27, 0, 'demo', '123', 'demo@gmail.com', 0, '', 0),
(28, 0, 'shalu', '$2y$10$Jlye7nUMKn/yR9POQWc3deNCIHO7/0NA9', 'shalu@gmail.com', 0, '', 0),
(29, 0, 'nina', '$2y$10$9Av/e8hy6Ov4Ro5l0y7xd.Mdyyf7GuG9Y', 'nina@gmail.com', 0, '', 0),
(30, 0, 'satnam', 'satnam', 'satnam@gmail.com', 0, '', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
